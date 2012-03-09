<?php
/*
 Plugin Name: Kony2012
 Plugin URI: http://longjohndesign.blogspot.com/
 Description: Add a diagonal advert banner that links to the Kony2012 project website.
 Version: 1.0
 Author: LongJohn
 Author URI: http://longjohndesign.blogspot.com/
 */

class kony2012
{
	static function render()
	{
		$imageUrl = plugin_dir_url(__FILE__) . 'kony2012.png';
		echo '<a href="http://www.kony2012.com" target="_blank" style="background:url(\'' . $imageUrl . '\') center center no-repeat;position:absolute;top:0;right:0;width:204px;height:200px;z-index:99999;"></a>';
	}
}
add_action ( 'get_footer', array ( 'kony2012', 'render' ) );