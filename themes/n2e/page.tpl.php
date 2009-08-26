<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?>
<!DOCTYPE html>
<html lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body>

<!-- Layout -->
    <div id="container">
      <div id="header">
        <h1><a href="/"><img src="<?php echo $directory ?>/logo.gif" alt="N2e" /></a></h1>
        
        <?php print theme('links', $primary_links, array('id' => 'primary-links')) ?>
        
        <ul id="socialIcons">
      		<li><a href="#"><img src="<?php echo $directory ?>/images/icn-facebook.gif" alt="Facebook"  /></a></li>
        	<li><a href="#"><img src="<?php echo $directory ?>/images/icn-flickr.gif" alt="Flickr"  /></a></li>
        	<li><a href="#"><img src="<?php echo $directory ?>/images/icn-vimeo.gif" alt="Vimeo"  /></a></li>	
        	<li><a href="#"><img src="<?php echo $directory ?>/images/icn-twitter.gif" alt="Twitter"  /></a></li>	
        	<li><a href="#"><img src="<?php echo $directory ?>/images/icn-email.gif" alt="Email"  /></a></li>	
        	<li><a href="#"><img src="<?php echo $directory ?>/images/icn-rss.gif" alt="RSS"  /></a></li>
        </ul>
      </div> <!-- /header -->
      
      <div id="mainContent">
        <div id="heroImage"></div>
        <div id="rotatingContent">
            <?php print $breadcrumb; ?>
            <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
            <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
            <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
            <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
            <?php if ($show_messages && $messages): print $messages; endif; ?>
            <?php print $help; ?>
            <div>
              <?php print $content ?>
            </div>
            <?php print $feed_icons ?>
        </div> <!-- /#rotatingContent -->
      </div>

      <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php if (!$left && $search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
          <?php print $right ?>
        </div>
      <?php endif; ?>
      
      <div id="footer">
        <?php print $footer_message . $footer ?>
      </div>

    </div> <!-- /container -->
<!-- /layout -->

  <?php print $closure ?>
  </body>
</html>
