<?php
$themename = "arbitraje";
$shortname = "undt";
$himg_dir = get_bloginfo('template_directory');

add_action( 'admin_menu', 'register_my_custom_menu_page' );
 
function my_menu_render() {
 echo 'Actualizar Unidad Tributaria';
}
function register_my_custom_menu_page(){
 add_menu_page(__('Unidad Tributaria'), __('Unidad Tributaria'), 'edit_themes', 'unidad_tributaria', 'mytheme_admin', '', 6);
}

$options = array (
array( "name" => $themename."_",
       "type" => "title"),
	array(  "name" => "",
           "type" => "section"),
    array( "type" => "open"),
    array( "name" => "Monto de la unidad tributaria",
			"desc" => "",
            "id" => $shortname."undt",
            "std" => "100",
            "type" => "text"),
    array( "type" => "close"),
	
		array(  "name" => "",
           "type" => "section"),
    array( "type" => "open"),
    array( "name" => "Iva",
			"desc" => "",
            "id" => $shortname."iva",
            "std" => "100",
            "type" => "text"),
    array( "type" => "close")
);

function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=themeoptions.php&saved=true");
die;
}

else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=themeoptions.php&reset=true");
die;
}
}
      add_theme_page($themename, "$themename", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}



function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/admin/functions.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/admin/rm_script.js", false, "1.0");
}

function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';

if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
?>

<div class="wrap rm_wrap">
<h2><?php echo $themename; ?></h2>
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
break;
case "close":

?>
</div>
</div>
<br />
<?php break;
case "title":
break;
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'textarea':
?>
<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php
break;
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>

<?php
break;
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>

<?php break;
case "section":
$i++;
?>

<div class="rm_section">
<div class="rm_title"><h3><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Guardar" />
</span><div class="clearfix"></div></div>
<div class="rm_options">
<?php break;
}
}
?>
<input type="hidden" name="action" value="save" />
</form>
<?php /*
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
<?php */ ?>
 </div>
<?php
}
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>