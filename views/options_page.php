<div class="wrap" id="tm">
    <div class="icon32" id="icon-options-general"><br></div>
    <h2><?php _e('ThemeMakers Add This Share', 'tmm_addthis'); ?></h2>
    <h3><?php _e('Sharing Buttons Type', 'tmm_addthis'); ?></h3>
    <form id="theme_options" method="post" name="addthis_form" style="">
    <div class="addthis_buttons_type">
        <?php
        TMM_OptionsHelper::draw_theme_option(array(
            'name_type' => 'array',
            'name' => 'buttons_type[large_toolbox_above]',
            'type' => 'checkbox',
            'default_value' => 0,
            'title' => __('Large toolbox', 'tmm_addthis'),
            'description' => '',
            'css_class' => 'large_toolbox_above',
                ), TMM_APP_CARDEALER_PREFIX);

        TMM_OptionsHelper::draw_theme_option(array(
            'name_type' => 'array',
            'name' => 'buttons_type[fb_tw_p1_sc_above]',
            'type' => 'checkbox',
            'default_value' => 1,
            'title' => __('Middle toolbox', 'tmm_addthis'),
            'description' => '',
            'css_class' => 'fb_tw_p1_sc_above',
                ), TMM_APP_CARDEALER_PREFIX);

        TMM_OptionsHelper::draw_theme_option(array(
            'name_type' => 'array',
            'name' => 'buttons_type[small_toolbox_above]',
            'type' => 'checkbox',
            'default_value' => 0,
            'title' => __('Small toolbox', 'tmm_addthis'),
            'description' => '',
            'css_class' => 'small_toolbox_above',
                ), TMM_APP_CARDEALER_PREFIX);

        TMM_OptionsHelper::draw_theme_option(array(
            'name_type' => 'array',
            'name' => 'buttons_type[button_above]',
            'type' => 'checkbox',
            'default_value' => 0,
            'title' => __('All in one button', 'tmm_addthis'),
            'description' => '',
            'css_class' => 'button_above',
                ), TMM_APP_CARDEALER_PREFIX);
        ?>	
    </div>
    
    <h3><?php _e('Disable and Select buttons', 'tmm_addthis'); ?></h3>
    <div class="addthis_own_buttons">
        <ul class="list clearfix">
            <li>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'add_buttons[addthis_button_facebook_like]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Facebook', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_button_facebook_like',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
               
            </li>
            <li>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'add_buttons[addthis_button_tweet]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Twitter', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_button_tweet',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
               
            </li>
            <li>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'add_buttons[addthis_button_pinterest]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Pinterest', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_button_pinterest',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
                
            </li>
            <li>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'add_buttons[addthis_button_google_plusone]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Google', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_button_google_plusone',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
                
            </li>
            <li>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'add_buttons[addthis_counter]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Share', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_counter',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
                
            </li>
        </ul>
                      
    </div>
    
        <h3><?php _e('Show AddThis on', 'tmm_addthis'); ?>:</h3>
        
         <div class="show_buttons_on">
            <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'show_buttons[single_car]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Single Car Page', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_counter',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
                <?php
                TMM_OptionsHelper::draw_theme_option(array(
                    'name_type' => 'array',
                    'name' => 'show_buttons[single_blog]',
                    'type' => 'checkbox',
                    'default_value' => 1,
                    'title' => __('Single Blog Page', 'tmm_addthis'),
                    'description' => '',
                    'css_class' => 'addthis_counter',
                        ), TMM_APP_CARDEALER_PREFIX);
                ?>
        </div>
    
    </form>
    <a class="admin-button button-small button-yellow button_save_addthis_options" href="#"><?php _e('Save All Changes', 'tmm_addthis'); ?></a>
    

</div>