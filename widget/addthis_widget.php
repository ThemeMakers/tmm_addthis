<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
class ThemeMakers_AddThis_Widget extends WP_Widget {

    //Widget Setup
    
    function __construct() {
        
        $settings = array('classname' => __CLASS__, 'description' => __('Displays share buttons.', 'tmm_addthis'));

        
        parent::__construct(__CLASS__, __('TMM Add This', 'tmm_addthis'), $settings);
    }
        
    function widget($args, $instance) {
        $args['instance'] = $instance;
        $args['widget'] = $this;
        echo TMM_AddThis_Controller::draw_free_page(TMM_AddThis_Controller::get_application_path() . '/views/addthis_view.php', $args);
    }
    
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
                
        $instance['bt_type'] = $new_instance['bt_type'];
        
        $instance['addthis_button_facebook'] = $new_instance['addthis_button_facebook'];        
        $instance['addthis_button_tweet'] = $new_instance['addthis_button_tweet'];
        $instance['addthis_button_pinterest'] = $new_instance['addthis_button_pinterest'];
        $instance['addthis_button_google'] = $new_instance['addthis_button_google'];
        $instance['addthis_counter'] = $new_instance['addthis_counter'];
             
        return $instance;
    }

    
    function form($instance) {
        
        $defaults = array(
            'title' => __('Social Share', 'tmm_addthis'),
            'bt_type' => array(),
            'addthis_button_facebook' => 'true',
            'addthis_button_tweet' => 'true',
            'addthis_button_pinterest' => 'true',
            'addthis_button_google' => 'true',
            'addthis_counter' => 'true'            
        );
        
        $instance = wp_parse_args((array) $instance, $defaults);
        $args = array();
        $args['instance'] = $instance;
        $args['widget'] = $this;
        
       echo TMM_AddThis_Controller::draw_free_page(TMM_AddThis_Controller::get_application_path() . '/views/addthis_form.php', $args);
    }

}

