<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head profile="<?php print $grddl_profile?>">
        
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title><?php print $head_title?></title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <?php print $head?>

        <link rel="shortcut icon" href="<?php print drupal_get_path( 'theme', 'mahler8' )?>/favicon.ico">

        <?php print $styles?>
        
        <?php /*<script src="js/vendor/modernizr-2.6.2.min.js"></script>*/ ?>
        
        <!-- Google Analytics -->
        <?php print mahler8_google_analytics()?>
        
    </head>
    
    <body class="<?php print $classes?>" <?php print $attributes?>>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php print $page_top?>
        <?php print $page?>
        <?php print $page_bottom?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
        <?php print $scripts?>
        
        <?php /*
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        */ ?>
        
    </body>

</html>
