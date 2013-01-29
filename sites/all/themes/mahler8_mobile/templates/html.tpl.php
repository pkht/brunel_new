<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    
    <head profile="<?php print $grddl_profile?>">
    
        <meta charset="utf-8">
        
        <title>Mobile - <?php print $head_title?></title>
        
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
        <meta http-equiv="cleartype" content="on">

        <?php /*
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        */ ?>
        
        <link rel="shortcut icon" href="<?php print drupal_get_path( 'theme', 'mahler8_mobile' )?>/favicon.ico">

        <?php /*
        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">
        */ ?>
        
        <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!--<meta name="apple-mobile-web-app-title" content="">-->

        <?php /*
        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <!--
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
        -->
        */ ?>

        <?php print $styles?>
        
        <script src="<?php print drupal_get_path( 'theme', 'mahler8_mobile' )?>/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <!-- Google Analytics -->
        <?php print mahler8_mobile_google_analytics()?>
        
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

        <!-- Add your site or application content here -->
        <?php print $page_top?>
        <?php print $page?>
        <?php print $page_bottom?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        
        <?php print $scripts?>
        
    </body>
    
</html>
