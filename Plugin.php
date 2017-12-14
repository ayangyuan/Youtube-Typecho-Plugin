<?php
/**
 * Typecho Youtube Embed Plugin 
 *
 * @package Youtube 
 * @author Y.Y
 * @version 1.0
 * @link https://84361749.com/post/typecho-youtube-embeded-plugin.html
 */
class Youtube_Plugin implements Typecho_Plugin_Interface{

    /**
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate(){
		Typecho_Plugin::factory('admin/write-post.php')->bottom = array('Youtube_Plugin', 'Insert');
		Typecho_Plugin::factory('admin/write-page.php')->bottom = array('Youtube_Plugin', 'Insert');
    }


	public static function Insert(){
		$options = Helper::options();
        include dirname(__FILE__).'/popup.html';
	}

    public static function config(Typecho_Widget_Helper_Form $form){}
    /**
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}



}

