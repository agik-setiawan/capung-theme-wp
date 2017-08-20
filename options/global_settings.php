<?php
//function tambah menu di admin menu
function setup_theme_admin_menus(){
	//menu page
	add_menu_page('theme settings','Example theme','manage_options','tut_theme_settings','theme_settings_page');
	//submenu
add_submenu_page('themes.php','Front page Elements','Fron page','manage_options','front-page-elements','theme_front_page_settings');
//footer menu
add_submenu_page('themes.php','Front page Elements','Footer','manage_options','footer-settings','footer_settings');
}
add_action("admin_menu","setup_theme_admin_menus");
//theme setings
function theme_front_page_settings(){ ?>
<h1>HELLO WORLD</h1>
<?php
}

//footer
function footer_settings(){
require (dirname(__FILE__) . '/footer_settings.php');
}

function theme_settings_page(){
	echo "settings page";
}
?>