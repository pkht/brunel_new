        
<div id="page-wrapper">
    
    <div id="page">
        
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

        <div id="header">
            
            <?php if ($main_menu): ?>
                <div id="navigation">
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
                </div>
            <?php endif; ?>
            
            <h1><a href="/">The Brunel Sinfonia - Building bridges through music</a></h1>
            
            <div id="menu-button"><a href="javascript:void(0);">Menu</a></div>
        
            <?php print render($page['header']); ?>

        </div> 

        <?php print $messages; ?>

        <div id="main-wrapper">
            
            <div id="main" class="clearfix">
                
                <?php if ($page['content_top']): ?>
                  <div id="content-top">
                    <?php print render($page['content_top']); ?>
                  </div>
                <?php endif; ?>
                
                <div id="content" class="column">
                    
                    <a id="main-content"></a>
                    
                    <?php /*if ($breadcrumb): ?>
                        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif;*/ ?>
                    
                    <?php /*print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix);*/ ?>
                    
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    
                    <?php if( !$is_front ): ?><?php if ($title): ?><h2 class="title" id="page-title"><?php print $title; ?></h2><?php endif; ?><?php endif; ?>
                    <?php print render($page['content']); ?>
                    
                    <?php print $feed_icons; ?>
                
                </div>

            </div>

            <div id="footer">
                <?php print render($page['footer']); ?>
                <div id="footer_logo"><img src="/<?php print drupal_get_path( 'theme', 'mahler8_mobile' )?>/img/logo_footer.png" alt="Brunel Sinfonia - Building bridges through music" /></div>
            </div>

        </div>
            
    </div>
    
</div>