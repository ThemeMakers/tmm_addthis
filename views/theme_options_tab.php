<div class="addthis_buttons_type">
	<?php
	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'buttons_type[large_toolbox_above]',
		'type'          => 'checkbox',
		'default_value' => 0,
		'title'         => esc_html__( 'Large toolbox', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'large_toolbox_above',
	));

	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'buttons_type[fb_tw_p1_sc_above]',
		'type'          => 'checkbox',
		'default_value' => 1,
		'title'         => esc_html__( 'Middle toolbox', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'fb_tw_p1_sc_above',
	));

	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'buttons_type[small_toolbox_above]',
		'type'          => 'checkbox',
		'default_value' => 0,
		'title'         => esc_html__( 'Small toolbox', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'small_toolbox_above',
	));

	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'buttons_type[button_above]',
		'type'          => 'checkbox',
		'default_value' => 0,
		'title'         => esc_html__( 'All in one button', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'button_above',
	));
	?>
</div>

<h3><?php esc_html_e( 'Disable and Select buttons', 'tmm_addthis' ); ?></h3>
<div class="addthis_own_buttons">
	<ul class="list clearfix">
		<li>
			<?php
			TMM_OptionsHelper::draw_theme_option( array(
				'name_type'     => 'array',
				'name'          => 'add_buttons[addthis_button_facebook_like]',
				'type'          => 'checkbox',
				'default_value' => 1,
				'title'         => esc_html__( 'Facebook', 'tmm_addthis' ),
				'description'   => '',
				'css_class'     => 'addthis_button_facebook_like',
			));
			?>

		</li>
		<li>
			<?php
			TMM_OptionsHelper::draw_theme_option( array(
				'name_type'     => 'array',
				'name'          => 'add_buttons[addthis_button_tweet]',
				'type'          => 'checkbox',
				'default_value' => 1,
				'title'         => esc_html__( 'Twitter', 'tmm_addthis' ),
				'description'   => '',
				'css_class'     => 'addthis_button_tweet',
			));
			?>

		</li>
		<li>
			<?php
			TMM_OptionsHelper::draw_theme_option( array(
				'name_type'     => 'array',
				'name'          => 'add_buttons[addthis_button_pinterest]',
				'type'          => 'checkbox',
				'default_value' => 1,
				'title'         => esc_html__( 'Pinterest', 'tmm_addthis' ),
				'description'   => '',
				'css_class'     => 'addthis_button_pinterest',
			));
			?>

		</li>
		<li>
			<?php
			TMM_OptionsHelper::draw_theme_option( array(
				'name_type'     => 'array',
				'name'          => 'add_buttons[addthis_button_google_plusone]',
				'type'          => 'checkbox',
				'default_value' => 1,
				'title'         => esc_html__( 'Google', 'tmm_addthis' ),
				'description'   => '',
				'css_class'     => 'addthis_button_google_plusone',
			));
			?>

		</li>
		<li>
			<?php
			TMM_OptionsHelper::draw_theme_option( array(
				'name_type'     => 'array',
				'name'          => 'add_buttons[addthis_counter]',
				'type'          => 'checkbox',
				'default_value' => 1,
				'title'         => esc_html__( 'Share', 'tmm_addthis' ),
				'description'   => '',
				'css_class'     => 'addthis_counter',
			));
			?>

		</li>
	</ul>

</div>

<h3><?php esc_html_e( 'Show AddThis on:', 'tmm_addthis' ); ?></h3>

<div class="show_buttons_on">
	<?php
	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'show_buttons[single_car]',
		'type'          => 'checkbox',
		'default_value' => 1,
		'title'         => esc_html__( 'Single Car Page', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'addthis_counter',
	));
	?>
	<?php
	TMM_OptionsHelper::draw_theme_option( array(
		'name_type'     => 'array',
		'name'          => 'show_buttons[single_blog]',
		'type'          => 'checkbox',
		'default_value' => 1,
		'title'         => esc_html__( 'Single Blog Page', 'tmm_addthis' ),
		'description'   => '',
		'css_class'     => 'addthis_counter',
	));
	?>
</div>
