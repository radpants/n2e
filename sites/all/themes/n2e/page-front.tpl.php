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
<?php print $header ?>
<!-- Layout -->
    <div id="container">
      <div id="header">
        <h1><a href="/"><img src="/<?php echo $directory ?>/logo.gif" alt="N2e" /></a></h1>
        
        <?php print theme('links', $primary_links, array('id' => 'primary-links')) ?>
        
        <ul id="socialIcons">
      		<li><a href="#"><img src="/<?php echo $directory ?>/images/icn-facebook.gif" alt="Facebook"  /></a></li>

        	<li><a href="http://www.flickr.com/photos/n2e/" title="View N2e photos on Flickr">
            <img src="/<?php echo $directory ?>/images/icn-flickr.gif" alt="View n2e photos on Flickr"  /></a></li>

        	<li><a href="http://vimeo.com/n2e" title="View N2e videos at Vimeo">
            <img src="/<?php echo $directory ?>/images/icn-vimeo.gif" alt="View N2e videos at Vimeo"  /></a></li>	

        	<li><a href="http://twitter.com/neighborenergy" title="Follow N2e on Twitter">
            <img src="/<?php echo $directory ?>/images/icn-twitter.gif" alt="Follow N2e on Twitter"  /></a></li>	
            
          <li><a href="http://www.slideshare.net/n2energy" title="View N2e presentations on Slideshare">
            <img src="/<?php echo $directory ?>/images/icn-slideshare.png" alt="View N2e presentations on Slideshare"  /></a></li>

        	<li><a href="http://dev.n2e.org/contact/General_Inquiries" title="Contact N2e"><img src="/<?php echo $directory ?>/images/icn-email.gif" alt="Contact N2e"  /></a></li>	

        	<li><a href="http://dev.n2e.org/?q=rss.xml" title="N2e RSS"><img src="/<?php echo $directory ?>/images/icn-rss.gif" alt="RSS"  /></a></li>
        </ul>
      </div> <!-- /header -->
      
      <div id="mainContent">      
				<div id="heroImage">
				  <div id="rotatingContent">
  					<?php print $slider ?>
  				</div> <!-- /#rotatingContent -->		
				</div>
      </div>

      <?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php if (!$left && $search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
          <?php print $right ?>
        </div>
      <?php endif; ?>

    </div> <!-- /container -->
    
    
      
      <div id="footer">
      	<div class="wrapper">
	        <?php print $footer_message . $footer ?>
	      </div>
      </div>
<!-- /layout -->

  <?php print $closure ?>
  </body>
</html>
