<?php
if ($_POST['guidelines'] != "") { 
update_option("editorial-guidelines", base64_encode ( editorialguidelines_replacebr( $_POST['guidelines'])));
}

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('siteurl') ?>/wp-content/plugins/editorial-guidelines/editorial.css" />

<div class="wrap" style="text-align: right;">
<h2 style="color: white"> Goto your <a href="<?php echo get_bloginfo('siteurl') ?>/wp-admin/edit.php">posts</a>. Goto your <a href="<?php echo get_bloginfo('siteurl') ?>/wp-admin/edit-pages.php">pages.</a> </h2>
</div>


<div class="wrap" style="background-color: transparent;">
<h2>Set the editorial guidelines.</h2>
<p>Hint: you cannot set no message. If you don't have any editorial guidelines, just <a href="<?php echo get_bloginfo('siteurl') ?>/wp-admin/plugins.php" style="color: #90ADC9">disable</a> this plugin to show no editorial guidlines.</p>
<form action="<?php echo get_bloginfo('siteurl') ?>/wp-admin/admin.php?page=editorialguidelines" method="post">
<div id="editorcontainer"><textarea class="theEditor" id="content" name="guidelines" style="width: 60%"><?php echo  editorialguidelines_resetencap(base64_decode(get_option("editorial-guidelines")));?></textarea></div>
<br />
<input type="submit" value="Set guidelines"  class="button-primary"/>
</form>

</div>

<script type='text/javascript' src='<?php echo get_bloginfo('siteurl'); ?>/wp-admin/load-scripts.php?c=1&load=hoverIntent,common,jquery-color,wp-ajax-response,wp-lists,jquery-ui-core,jquery-ui-sortable,postbox,schedule,autosave,suggest,post,word-count,thickbox,media-upload&ver=2b1a52aadc1e751767f81e9068404634'></script>
<script type="text/javascript" src="<?php echo get_bloginfo('siteurl'); ?>/wp-includes/js/tinymce/tiny_mce.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
var lang = 'en';
tinyMCEPreInit = {
        base : "<?php echo get_bloginfo('siteurl'); ?>/wp-includes/js/tinymce",
        suffix : "",
        query : "ver=327-1235",
        mceInit : {mode:"specific_textareas", editor_selector:"theEditor", width:"100%", theme:"advanced",skin:"wp_theme",theme_advanced_buttons1:"bold,italic,strikethrough,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,|,link,unlink,wp_more,|,spellchecker,fullscreen,wp_adv", theme_advanced_buttons2:"formatselect,underline,justifyfull,forecolor,|,pastetext,pasteword,removeformat,|,media,charmap,|,outdent,indent,|,undo,redo,wp_help", theme_advanced_buttons3:"", theme_advanced_buttons4:"", language:"en",spellchecker_languages:"+English=en,Danish=da,Dutch=nl,Finnish=fi,French=fr,German=de,Italian=it,Polish=pl,Portuguese=pt,Spanish=es,Swedish=sv", theme_advanced_toolbar_location:"top",theme_advanced_toolbar_align:"left", theme_advanced_statusbar_location:"bottom", theme_advanced_resizing:"1",theme_advanced_resize_horizontal:"", dialog_type:"modal", relative_urls:"", remove_script_host:"", convert_urls:"",apply_source_formatting:"", remove_linebreaks:"1", gecko_spellcheck:"1", entities:"38,amp,60,lt,62,gt", accessibility_focus:"1",tabfocus_elements:"major-publishing-actions",media_strict:"", paste_remove_styles:"1", paste_remove_spans:"1", paste_strip_class_attributes:"all", wpeditimage_disable_captions:"", plugins:"safari,inlinepopups,spellchecker,paste,wordpress,media,fullscreen,wpeditimage,wpgallery,tabfocus"},
        load_ext : function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
};
/* ]]> */
</script>

<script type="text/javascript">
<?php

global $language;
$language = "en";
include (ABSPATH . WPINC . "/js/tinymce/langs/wp-langs.php");

echo $lang;

?>
</script>

<script type="text/javascript">
/* <![CDATA[ */
//tinyMCEPreInit.go();
tinyMCE.init(tinyMCEPreInit.mceInit);
/* ]]> */
</script>

<script type="text/javascript">if(typeof wpOnload=='function')wpOnload();</script>
