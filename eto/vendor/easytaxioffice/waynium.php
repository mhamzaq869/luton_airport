<?php
// http://api.waynium.com/gdsv3/

if (!function_exists('objectToArray')) {
    function objectToArray($d) {
        if (is_object($d)) { $d = get_object_vars($d);     }
        if (is_array($d )) { return array_map(__FUNCTION__, $d); }
        else { return $d; }
    }
}

class Zaf_Jwt {
    protected $_paramsHeader       = false;
    protected $_paramsNettoyer     = false;
    protected $_paramsHeaderJSON   = false;
    protected $_paramsNettoyerJSON = false;
    protected $_token              = false;
    protected $_alg                = 'HS256';
    protected $_log                = '';

    public function __construct($cleSecrete)    {
        $this->_cleSecrete = $cleSecrete;
        $this->post        = file_get_contents('php://input');
        $tab               = explode('.',$this->post);
        if ( count($tab)==3 ) {
            $this->_paramsHeaderJSON   =  self::urlDecode( $tab[0] );
            $this->_paramsNettoyerJSON =  self::urlDecode( $tab[1] );
            $this->setHeader( self::jsonDecode( $this->_paramsHeaderJSON   ) );
            $this->setParams( self::jsonDecode( $this->_paramsNettoyerJSON ) );
            $this->_trame_sans_token = $tab[0].'.'.$tab[1];
            $this->_token            = $tab[2];
        } else {
            $this->setHeader( array('alg'=>'HS256') );
        }
    }

    public function getDebug() {
        return  "header      :" . $this->_paramsHeaderJSON
            . "\npayload     :" . $this->_paramsNettoyerJSON
            . "\npayload dec :" . $this->_paramsNettoyerJSON
            . "\npayload PHP :" . var_export($this->getParams(),true)
            . "\ntoken recu  :" . $this->_token
            . "\ntoken calc  :" . $this->getToken($this->_alg,$this->_trame_sans_token)
            . "\nlog         :" . $this->_log."\n\n";
    }

    public static function urlEncode($chaine)  {
        return str_replace('=', '', strtr(base64_encode($chaine), '+/', '-_'));
    }

    public static function urlDecode($chaine) {
        $complete = strlen($chaine) % 4;
        if ($complete) {
            $p       = 4 - $complete;
            $chaine .= str_repeat('=', $p);
        }
        return base64_decode(strtr($chaine, '-_', '+/'));
    }

    public function jsonDecode($chaine)    {
        $json        = json_decode($chaine, false, 512, JSON_BIGINT_AS_STRING);
        $tab         = objectToArray($json);
        return $tab;
    }

    public function getParams() {
        return $this->_paramsNettoyer;
    }

    public function setParams( $params ) {
        $this->_paramsNettoyer = $params;
        return $this;
    }

    public function getHeader() {
        return $this->_paramsHeader;
    }

    public function setHeader( $params ) {
        $this->_paramsHeader = $params;
        $this->_alg = isset($params['alg']) ? $params['alg'] : 'HS256';
        return $this;
    }

    public function getToken($alg,$chaine) {
        if ( $alg == 'HS256' )  return self::urlEncode( hash_hmac( 'sha256', $chaine , $this->_cleSecrete, true ) );
        return 'alg = '.$alg.': not implemented';
    }

    public function isValid() {
        $isEgal = $this->getToken($this->_alg,$this->_trame_sans_token) == $this->_token;
        return $isEgal;
    }

    public function getPost($header , $params ) {
        $chaine = self::urlEncode( json_encode( $header ) ) . '.' . self::urlEncode( json_encode( $params ) );
        $token  = $this->getToken($header['alg'] , $chaine);
        return $chaine . '.' . $token;
    }

    protected function curl($url, $post) {
        /*Initialisation de la ressource curl*/
        $c = curl_init();
        //en cas de https, on désactive la vérificatyion du certificat
        if ('https' == substr($url, 0, 5)) {
            curl_setopt($c, CURLOPT_SSL_VERIFYPEER, FALSE);
        }

        /*On indique à curl quelle url on souhaite télécharger*/
        curl_setopt($c, CURLOPT_URL, $url);
        /*On indique à curl de nous retourner le contenu de la requête plutôt que de l'afficher*/
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        /*On indique à curl de ne pas retourner les headers http de la réponse dans la chaine de retour*/
        curl_setopt($c, CURLOPT_HEADER, false);
        curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $post);
        /*On execute la requete*/
        try {
            $content = curl_exec($c);
        } catch (Exception $e) {
            $log     = Zend_Registry::get('log');
            $log->err("JWT : Erreur curl sur $url\n".$e->getMessage()."\n".$e->getTraceAsString());
            return false;
        }

        //Exception en cas d'erreur curl
        if ($err     = curl_errno($c)) {
            $errmsg  = curl_error($c) ;
            $log     = Zend_Registry::get('log');
            $log->err(sprintf('JWT : Erreur curl %d : %s sur %s', $err, $errmsg,$url));
            return false;
        }
        $header  = curl_getinfo($c);
        if ($header['http_code']!='200') {
            $log     = Zend_Registry::get('log');
            //$log->err('JWT : header='.var_export($header,true)."\nretour=".$content);
            $content=false;
        }
        /*On ferme la ressource*/
        curl_close($c);
        return $content;
    }

    public function send($url,$params=array(),$header=array()) {
        $header = array_merge( array (
            'alg'  => 'HS256',
            'typ'  => 'JWT',
            'time' => time()
        ), $header );

        $payload        = count($params) > 0 ? $params : $this->getParams();
        $this->setHeader($header);
        $this->setParams($payload);
        $continue = true;
        $cpt      = 0;
        $post     = $this->getPost( $header , $payload );
        while ($continue) {
            $res = $this->curl( $url ,$post );
            if ( $res ) {
                $continue = false;
            } else {
                if ( $cpt++ > 1 ) {
                    $continue = false;
                } else {
                    sleep(1);
                }
            }
        }

        return $res;
    }
}
