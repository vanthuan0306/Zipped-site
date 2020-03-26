<?php
function icon_web( $wp_customize ) {
 
 $wp_customize->add_section (
 'section_diachi',
 array(
 'title' => 'Địa chỉ',
 'description' => 'Địa chỉ',
 'priority' => 25 ));

 
 $wp_customize->add_setting ('Dienthoai1', array('default' => '') );
 $wp_customize->add_control ('Dienthoai1', array(
 'label' => 'điện thoại 1',
 'section' => 'section_diachi',
 'type' => 'text',
 'settings' => 'Dienthoai1'));

	 $wp_customize->add_setting ('urlDienthoai1', array('default' => '') );
 $wp_customize->add_control ('urlDienthoai1', array(
 'label' => 'link điện thoại',
 'section' => 'section_diachi',
 'type' => 'URl',
 'settings' => 'urlDienthoai1'));

 $wp_customize->add_setting ('Dienthoai2', array('default' => '') );
 $wp_customize->add_control ('Dienthoai2', array(
 'label' => 'điện thoại 2',
 'section' => 'section_diachi',
 'type' => 'text',
 'settings' => 'Dienthoai2'));

  $wp_customize->add_setting ('Diachi', array('default' => '') );
 $wp_customize->add_control ('Diachi', array(
 'label' => 'địa chỉ',
 'section' => 'section_diachi',
 'type' => 'textarea',
 'settings' => 'Diachi'));
 }
 add_action( 'customize_register', 'icon_web' );	