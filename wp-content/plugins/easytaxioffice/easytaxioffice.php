<?php
/*
Plugin Name: EasyTaxiOffice
Plugin URI: https://easytaxioffice.com
Description: A plugin that integrates EasyTaxiOffice software with WordPress
Version: 1.11.0
Author: EasyTaxiOffice
Author URI: https://easytaxioffice.com
License: GPL2
*/

defined('ABSPATH') or die();

if (is_admin()) {

    $plugin = plugin_basename(__FILE__);

    add_filter('plugin_action_links_'. $plugin, 'easytaxioffice_settings_link');
    add_action('admin_menu', 'easytaxioffice_create_menu');

    function easytaxioffice_settings_link($links) {
        $settings_link = '<a href="options-general.php?page=easytaxioffice">'. __( 'Settings' ) .'</a>';
        array_unshift($links, $settings_link);
        return $links;
    }

    function easytaxioffice_create_menu() {
    		add_submenu_page('options-general.php', 'EasyTaxiOffice Settings', 'EasyTaxiOffice', 'manage_options', 'easytaxioffice', 'easytaxioffice_settings_page');
    		add_action('admin_init', 'register_easytaxioffice_settings');
    }

    function register_easytaxioffice_settings() {
        register_setting('easytaxioffice_settings', 'easytaxioffice_settings', 'easytaxioffice_settings_validate');
    }

    // validate our options
    function easytaxioffice_settings_validate($input) {
        $options = get_option('easytaxioffice_settings');

        $options['url'] = trim($input['url']);
        // if (!preg_match('/^[a-z0-9]{32}$/i', $options['url'])) {
        //     $options['url'] = '';
        // }

        $options['site_key'] = trim($input['site_key']);
        // if (!preg_match('/^[a-z0-9]{32}$/i', $options['site_key'])) {
        //     $options['site_key'] = '';
        // }

        $options['lang'] = trim($input['lang']);
        // if (!preg_match('/^[a-z0-9]{32}$/i', $options['lang'])) {
        //     $options['lang'] = '';
        // }

        return $options;
    }

    function easytaxioffice_settings_page() {
        $options = get_option('easytaxioffice_settings');
        $url = isset($options['url']) ? $options['url'] : '';
        $siteKey = isset($options['site_key']) ? $options['site_key'] : '';
        $lang = isset($options['lang']) ? $options['lang'] : '';
    ?>
    <div class="wrap">
        <h1>EasyTaxiOffice Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('easytaxioffice_settings'); ?>
            <?php do_settings_sections('easytaxioffice_settings'); ?>
            <div style="margin-top:10px; margin-bottom:20px; font-size:16px;">If you are not sure what the fields below are for then please leave them unchanged.</div>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Software URL</th>
                    <td>
                        <input type="text" name="easytaxioffice_settings[url]" id="easytaxioffice_settings_url" value="<?php echo esc_attr($url); ?>" style="width:250px; float:left;" />
                        <div style="display:inline-block; margin: 5px 0 0 10px; font-style: italic;"></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Site Key</th>
                    <td>
                        <input type="text" name="easytaxioffice_settings[site_key]" id="easytaxioffice_settings_site_key" value="<?php echo esc_attr($siteKey); ?>" style="width:250px; float:left;" />
                        <div style="display:inline-block; margin: 5px 0 0 10px; font-style: italic;"></div>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row">Language Code</th>
                    <td>
                        <input type="text" name="easytaxioffice_settings[lang]" id="easytaxioffice_settings_lang" value="<?php echo esc_attr($lang); ?>" style="width:80px; float:left;" />
                        <div style="display:inline-block; margin: 5px 0 0 10px; font-style: italic;">e.g. "en-GB", "es-ES", "auto" etc.</div>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php }

}
else {

    // Load
    if (!function_exists('easytaxioffice_enqueue_scripts')) {
        function easytaxioffice_enqueue_scripts() {
            $plugin_dir_path = plugins_url() .'/easytaxioffice/';

	          // if (!wp_script_is('jquery', 'done')) { wp_enqueue_script( 'jquery' ); }
            wp_enqueue_script('iframeResizer', $plugin_dir_path .'js/iframeResizer.min.js', array(), '3.6.2');
        }
    }
    add_action('wp_enqueue_scripts', 'easytaxioffice_enqueue_scripts');


    // Shortcode
    if (!function_exists('easytaxioffice_add_shortcode')) {
        function easytaxioffice_add_shortcode($atts, $content = null) {
            /*
            <?php echo do_shortcode('[easytaxioffice type="booking" url="https://domain.com/eto/" site_key="__KEY__"]'); ?>

            [easytaxioffice type="booking" booking_type="to-airport" site_key=""]
            [easytaxioffice type="booking-widget" from="" to="" via="" date=""]
            [easytaxioffice type="booking-widget" service_id="1" from="Gatwick North, RH6 0PJ" to="Terminal 1, Hounslow, TW6 1AP" date="2017-06-05 12:00"]
      			[easytaxioffice type="booking-widget" from="London, United Kingdom" to="Manchester, United Kingdom" via="Oxford, United Kingdom|Cambridge, United Kingdom" date="2017-05-12 12:00"]
      			[easytaxioffice type="booking-widget" from="London, United Kingdom" to="Manchester, United Kingdom" via="Oxford, United Kingdom|Cambridge, United Kingdom" date="now"]
            [easytaxioffice type="booking" from="London, United Kingdom" via="Oxford, United Kingdom|Cambridge, United Kingdom" to="Manchester, United Kingdom" date="now" return="yes" r_from="Manchester, United Kingdom" r_via="Cambridge, United Kingdom|Oxford, United Kingdom" r_to="London, United Kingdom" r_date="now"]

            Mini booking: [easytaxioffice type="booking-widget"]
            Full booking: [easytaxioffice type="booking"]
            Customer account: [easytaxioffice type="customer"]
            Driver account: [easytaxioffice type="driver"]
            Admin account: [easytaxioffice type="admin"]
            */

            $etoWidgetId = rand(1000,100000);

            // Defaults
            extract(shortcode_atts(array(
                'site_key' => '',
                'url' => '',
                'type' => 'booking-widget',
                'booking_type' => '',
                'lang' => '',
                'from' => '',
                'to' => '',
        				'from_category' => '5',
        				'to_category' => '5',
                'via' => '',
                'date' => '',
                'return' => 'no',
                'r_from' => '',
                'r_to' => '',
        				'r_from_category' => '5',
        				'r_to_category' => '5',
                'r_via' => '',
                'r_date' => '',
                'service_id' => '',
                'service_duration' => '',
                'name' => 'eto-iframe',
                'id' => 'eto-iframe-'. $etoWidgetId,
                'class' => 'eto-iframe',
                'style' => '',
                'width' => '100%',
                'height' => '',
                'frameborder' => '0',
                'scrolling' => 'no',
                'dynamic_iframe' => '0',
                'load_delay' => '0', // ms
                'googlepagespeed_load_delay' => '6000', // ms
                'debug' => '0',
            ), $atts));

            // Default settings
            $settings = get_option('easytaxioffice_settings');

            if (!empty($settings)) {
                if (empty($url) && !empty($settings['url'])) {
                    $url = $settings['url'];
                }
                if (empty($site_key) && !empty($settings['site_key'])) {
                    $site_key = $settings['site_key'];
                }
                if (empty($lang) && !empty($settings['lang'])) {
                    $lang = $settings['lang'];
                }
                // var_dump($settings); exit;
            }

            // Url
            if (empty($url)) {
                $url = get_site_url() .'/eto/';
            }

            $url = rtrim($url, '/') .'/';

            switch ($type) {
                case 'booking-widget':
                    $url .= 'booking/widget';
          					if (empty($height)) { $height = '250'; }
                break;
                case 'booking':
                    $url .= 'booking';
          					if (empty($height)) { $height = '345'; }
                break;
                case 'customer':
                    $url .= 'customer';
          					if (empty($height)) { $height = '270'; }
                break;
                case 'driver':
                    $url .= 'driver';
          					if (empty($height)) { $height = '500'; }
                break;
                case 'admin':
                    $url .= 'admin';
          					if (empty($height)) { $height = '500'; }
                break;
            }

            // Url params
            $params = array();

            if (!empty($site_key)) {
                $params['site_key'] = $site_key;
            }

            if (!empty($lang)) {
                if (strtolower($lang) == 'auto') {
                    $lang = str_replace('_', '-', get_locale());
                    if ($lang == 'en-US') {
                        $lang = 'en-GB';
                    }
                }
                $params['lang'] = $lang;
            }

            if( !empty($booking_type) ) {
                $params['bookingType'] = $booking_type;
            }

            $nowDate = date('Y-m-d H:i', current_time('timestamp', 0) + (2 * 60 * 60));

            if (!empty($from)) {
        				$params['r1cs'] = $from_category;
                $params['r1ls'] = $from;
            }
            if (!empty($to)) {
		            $params['r1ce'] = $to_category;
                $params['r1le'] = $to;
            }
            if (!empty($via)) {
                $params['r1wp'] = explode('|', $via);
            }
            if (!empty($date)) {
        				if ($date == 'now') {
                    $date = $nowDate;
        				}
                $params['r1d'] = $date;
            }

            if (!empty($return) && $return == 'yes') {
                $params['r'] = '2';
            }

            if (!empty($r_from)) {
		            $params['r2cs'] = $r_from_category;
                $params['r2ls'] = $r_from;
            }
            if (!empty($r_to)) {
		            $params['r2ce'] = $r_to_category;
                $params['r2le'] = $r_to;
            }
            if (!empty($r_via)) {
                $params['r2wp'] = explode('|', $r_via);
            }
            if (!empty($r_date)) {
        				if ($r_date == 'now') {
                    $r_date = $nowDate;
        				}
                $params['r2d'] = $r_date;
            }

            if (!empty($service_id)) {
                $params['s'] = $service_id;
            }
            if (!empty($service_duration)) {
                $params['sd'] = $service_duration;
            }


            // Url joined params
            $joined = array();

            foreach ($params as $param => $value) {
               $joined[] = $param .'='. $value;
            }

            $query = implode('&', $joined);

            if (!empty($query)) {
                $url .= '?'. $query;
            }


            // Iframe attributes
            $attributes = array();

            if (!empty($url)) {
                $attributes[] = 'src="'. $url .'"';
            }
            if (!empty($name)) {
                $attributes[] = 'name="'. $name .'"';
            }
            if (!empty($id)) {
                $attributes[] = 'id="'. $id .'"';
            }
            if (!empty($class)) {
                $attributes[] = 'class="'. $class .'"';
            }
            if (!empty($style)) {
                $attributes[] = 'style="'. $style .'"';
            }
            if (!empty($width)) {
                $attributes[] = 'width="'. $width .'"';
            }
            if (!empty($height)) {
                $attributes[] = 'height="'. $height .'"';
            }
            if (!empty($frameborder)) {
                $attributes[] = 'frameborder="'. $frameborder .'"';
            }
            if (!empty($scrolling)) {
                $attributes[] = 'scrolling="'. $scrolling .'"';
            }

            // Allow geolocation https://dev.chromium.org/Home/chromium-security/deprecating-permissions-in-cross-origin-iframes
            $attributes[] = 'allow="geolocation"';

            if (isset($_SERVER['HTTP_USER_AGENT']) && (
                stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') !== false ||
                stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') !== false ||
                stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') !== false)) {
                $googlePageSpeed = 1;
            }
            else {
                $googlePageSpeed = 0;
            }

            $dynamicIframe = (int)$dynamic_iframe;
            $googlePageSpeedLoadDelay = (int)$googlepagespeed_load_delay;
            $loadDelay = (int)$load_delay;

            if ($googlePageSpeed) {
                $dynamicIframe = 1;
                $loadDelay = $googlePageSpeedLoadDelay;
            }

            // Iframe
            $iframe = "<iframe ". implode(' ', $attributes) .">This option will not work correctly. Unfortunately, your browser does not support inline frames.</iframe>";

      			// Css
      			$css = "<style type=\"text/css\">iframe#". $id ." { width:1px; min-width:100%; border:0; }</style>";

            // Js
            $js = "<script type=\"text/javascript\" async defer>
                (function() {
                    var etoWidgetData = {
                        checkTimeout: 100, // 10 seconds timeout
                        dynamicIframe: {$dynamicIframe},
                        googlePageSpeed: {$googlePageSpeed},
                        googlePageSpeedLoadDelay: {$googlePageSpeedLoadDelay},
                        loadDelay: {$loadDelay},
                    };

                    function etoWidgetInit() {
                        if (etoWidgetData.dynamicIframe) {
                            var etoWidgetContainer = document.getElementById('eto-widget-container-{$id}');
                            if (etoWidgetContainer) { etoWidgetContainer.innerHTML = '{$iframe}'; }
                        }
                        iFrameResize({
                            // heightCalculationMethod: 'lowestElement',
                            log: false,
                            targetOrigin: '*',
                            checkOrigin: false,
                        }, \"iframe#{$id}\");
                    }

                    function etoWidgetReady() {
                        setTimeout(function() {
                            etoWidgetData.checkTimeout--;
                            if (typeof iFrameResize !== 'undefined') { etoWidgetInit(); }
                            else if (etoWidgetData.checkTimeout > 0) { etoWidgetReady(); console.log('Library not loaded, checking again.'); }
                            else { console.log('External library failed to load.'); }
                        }, 100);
                    };

                    if (etoWidgetData.loadDelay) {
                        setTimeout(function() { etoWidgetReady(); }, etoWidgetData.loadDelay);
                    }
                    else {
                        etoWidgetReady();
                    }
                })();
            </script>";

            // navigator.userAgent.indexOf('Speed Insights') !== -1 || navigator.userAgent.indexOf('Chrome-Lighthouse') !== -1

            // $js .= "<script type=\"text/javascript\">
            //   jQuery(document).ready(function() {
            //       iFrameResize({
            //           // heightCalculationMethod: 'lowestElement',
            //           log: false,
            //           targetOrigin: '*',
            //           checkOrigin: false,
            //       }, \"iframe#". $id ."\");
            //   });
            // </script>\n";

            $html = '';

            if (!empty($_GET['et_pb_preview']) && $_GET['et_pb_preview'] == true) {
                $html .= '<div style="text-align:center; font-size:18px; color:#ff0001;">EasyTaxiOffice widget is not available in preview mode.</div>';
            }
            else {
                // Removed new lines as WP editor break js code wiht <p> tag.
                $pattern = '/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/';

                $css = preg_replace($pattern, '', $css);
                $css = str_replace(PHP_EOL, '', $css);
                $css = preg_replace('/\s+/', ' ', $css);

                $js = preg_replace($pattern, '', $js);
                $js = str_replace(PHP_EOL, '', $js);
                $js = preg_replace('/\s+/', ' ', $js);

                // $html .= $googlePageSpeed .', '. $dynamicIframe .', '. $_SERVER['HTTP_USER_AGENT'];
                $html .= $dynamicIframe ? '<div id="eto-widget-container-'.$id.'"></div>' : $iframe ."\n";
                $html .= $css ."\n";
                $html .= $js ."\n";
            }

      			// Debug
      			if (!empty($debug)) {
        				$html .= 'Debug:<br />';
        				$html .= 'Url: '. $url .'<br />';
        				$html .= 'Now date: '. $nowDate .'<br />';
        				$html .= 'ID: '. $id .'<br />';
        				$html .= 'From: '. $from .'<br />';
        				$html .= 'To: '. $to .'<br />';
        				$html .= 'Via: '. $via .'<br />';
      			}

            return $html;
        }
    }
    add_shortcode('easytaxioffice', 'easytaxioffice_add_shortcode');

}
