        
<div id="page-wrapper">
    
    <div id="page">
        
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

        <div id="header">
            
            <h1>The Brunel Sinfonia - Building bridges through music</h1>
        
            <?php if ($main_menu || $secondary_menu): ?>
                <div id="navigation">
                    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
                    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
                </div>
            <?php endif; ?>

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
                
                <?php if ($page['sidebar_first']): ?>
                  <div id="sidebar-first" class="column sidebar"><div class="section">
                    <?php print render($page['sidebar_first']); ?>
                  </div></div> <!-- /.section, /#sidebar-first -->
                <?php endif; ?>

                <div id="content" class="column">
                    
                    <a id="main-content"></a>
                    
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                    
                    <?php /*print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix);*/ ?>
                    
                    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                    
                    <?php print render($page['content']); ?>
                    
                    <?php print $feed_icons; ?>
                
                </div>

                <?php if ($page['sidebar_second']): ?>
                  <div id="sidebar-second" class="column sidebar"><div class="section">
                    <?php print render($page['sidebar_second']); ?>
                  </div></div> <!-- /.section, /#sidebar-second -->
                <?php endif; ?>

            </div>

            <div id="footer">
              <?php print render($page['footer']); ?>
            </div>

        </div>
            
    </div>
    
</div>