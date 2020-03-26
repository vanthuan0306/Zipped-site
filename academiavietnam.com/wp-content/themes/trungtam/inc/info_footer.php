<?php
 function info_footer( $wp_customize ) {
 
 $wp_customize->add_section (
 'section_b',
 array(
 'title' => 'Tùy chỉnh các thông tin footer',
 'description' => 'Tùy chỉnh các thông tin footer',
 'priority' => 25 ));
 

 $wp_customize->add_setting( 'logo' );
 $wp_customize->add_control(
 new WP_Customize_Image_Control( $wp_customize, 'logo', array(
 'label' => 'Logo footer website',
 'section' => 'section_b',
 'settings' => 'logo'))
 );
 
 }
 add_action( 'customize_register', 'info_footer' );
 function info_footer1( $wp_customize ) {
 
 $wp_customize->add_section (
 'section_nav',
 array(
 'title' => 'nút menu',
 'description' => 'Tùy chỉnh nút menu',
 'priority' => 25 ));
 

 $wp_customize->add_setting ('Button', array('default' => '') );
 $wp_customize->add_control ('Button', array(
 'label' => 'nút',
 'section' => 'section_nav',
 'type' => 'text',
 'settings' => 'Button'));

 $wp_customize->add_setting ('Link_button', array('default' => '') );
 $wp_customize->add_control ('Link_button', array(
 'label' => 'Link',
 'section' => 'section_nav',
 'type' => 'text',
 'settings' => 'Link_button'));
 
 }
 add_action( 'customize_register', 'info_footer1' );