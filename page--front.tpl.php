<?php
// $Id: page.tpl.php,v 1.48 2010/11/20 04:03:51 webchick Exp $
?>

<div id="top_bar"></div>

<div id="whole_wrapper">

<div id="header">
	<div id="logoarea">
	                       <?php
                           $site_fields = array();
                           if ($site_name) {
                           $site_fields[] = check_plain($site_name);
                           }
                           if ($site_slogan) {
                           $site_fields[] = check_plain($site_slogan);
                           }
                           $site_title = implode(' ', $site_fields);
                           $site_fields[0] = '<span>'. $site_fields[0] .'</span>';
                           $site_html = implode(' ', $site_fields);
                           if ($logo || $site_title) {
                           print '<a href="'. check_url($base_path) .'" title="'. $site_title .'">';
                           if ($logo) {
                           print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" align="left" />';
                           }
                           print '</a>';
                           }
                           ?>
   </div>

   <div id="header_middle"><?php print render ($page['header_middle']) ; ?></div>
   <div id="header_right"><?php print render ($page['header_right']) ; ?></div>
</div>
<div id="slogan_text"><?php print render ($page['slogan_text']) ; ?></div>

<div id="maindiv">

            <div id="midcontent">
            <?php if(strpos($title, '|') === false){ print "<h1 class='main_title'>".$title."</h1>" ; } ?>
            <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
            <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($tabs2); ?>
            <?php if ($show_messages && $messages): print $messages; endif; ?>
            <?php print render($page['upper_content']);?>
            <?php print render($page['content_top']);?>
            <?php print render($page['content']);?>
            <?php print render($page['content_bottom']);?>
            </div>
</div>
</div>
<div id="whole_wrapper_bottom_corner"></div>

<div id="whole_footer">
<div id="footer1">
    <div id="footer_left"><?php print render($page['footer_left']);?></div>
    <div id="footer_right"><?php print render($page['footer_right']);?></div>
</div>
</div>

<div id="whole_footer_bottom_corner">
	<div id="footer2"><?php print render($page['footer']);?></div>
</div>



