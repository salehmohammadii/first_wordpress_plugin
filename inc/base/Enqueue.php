<?php


namespace Inc\Base;


class Enqueue {

	public  function register(){
		add_action("admin_menu",array($this,"enqueue"));
	}
	public function enqueue(){
		wp_enqueue_style("mypluginstyle",PLUGIN_URL."/assets/css/style.css");
		wp_enqueue_script("mypluginscript",PLUGIN_URL."/assets/js/script.js");
	}

}