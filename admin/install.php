<?php


function qbx_install()
{
	global $wpdb;
	if(get_option('xyz_credit_link')=="")
	{
		add_option("xyz_credit_link", '0');
	}
	add_option("xyz_qbx_html", 'Hello world.');
	add_option("xyz_qbx_tinymce", '1');
	add_option("xyz_qbx_width", '50');
	add_option("xyz_qbx_height", '50');
	
	add_option("xyz_qbx_display_position", '2');
	add_option("xyz_qbx_delay", '0');
	add_option("xyz_qbx_page_count", '0');
	add_option("xyz_qbx_mode", 'delay_only'); //page_count_only,both are other options
	add_option("xyz_qbx_repeat_interval", '0');
	add_option("xyz_qbx_repeat_interval_timing", '1');//hrs or  minute
	add_option("xyz_qbx_z_index",'10000');
	add_option("xyz_qbx_z_index",'10000');
	add_option("xyz_qbx_corner_radius",'5');
	add_option("xyz_qbx_width_dim",'%');
	add_option("xyz_qbx_height_dim",'%');
	
	add_option("xyz_qbx_border_color",'#25da16');
	add_option("xyz_qbx_bg_color",'#e5f5e1');
	add_option("xyz_qbx_title",'Title');
	add_option("xyz_qbx_font",'14');
	add_option("xyz_qbx_title_color",'#000000');
	add_option("xyz_qbx_border_width",'10');
	add_option("xyz_qbx_page_option",'1');
	
	add_option("xyz_qbx_iframe",'0');
	
	
	add_option("xyz_qbx_position_predefined","6");
	$version=get_option('xyz_qbx_free_version');
	$currentversion=xyz_qbx_plugin_get_version();
	if($version=="")
	{
		add_option("xyz_qbx_free_version", $currentversion);
	}
	else
	{
	
		update_option('xyz_qbx_free_version', $currentversion);
	}
	
}
register_activation_hook(XYZ_QBX_PLUGIN_FILE,'qbx_install');


?>