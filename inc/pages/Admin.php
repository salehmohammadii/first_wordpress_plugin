<?php


namespace Inc\Pages;


class Admin {
	public function register(){
		add_action("admin_menu",array($this,"add_admin_page"));
		add_filter("admin_footer_text",array($this,"footer"));
	}
	public function footer($footer){
		_wp_footer_scripts();
	}

	public function add_admin_page(){
		add_menu_page("my plugin","my plugin","manage_options","my_plugin",
		array($this,"admin_index"),"dashicons-store",110);
	}
	public function admin_index(){
	require_once PLUGIN_DIR."/templates/admin.php";
	}
}