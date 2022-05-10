<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "ffb298898df5714e3945d8e742e6c625474662fc70"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/404.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/404_2020-07-01-12.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php get_header(); ?>
<div id="notfound">
		<div class="notfound">
        			<div class="notfound-404">
        			    <a class="back-home" href="https://lutonairport.taxi/">Back To Home</a>
        				<h1>4<span>0</span>4</h1>
        			</div>
        			<div class="main-title">
        			    <h2>Hmm..Looks like this page got lost! Or eaten..</h2>
        			</div>
        			<p>The link you followed is  either lost, incorrect or the page has been removed! </p>
        			<div class="social-icon">
            			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            			<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        			</div>
    		
    	</div>
	</div>
<?php get_footer(); ?>

