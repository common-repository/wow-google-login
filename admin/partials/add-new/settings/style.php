<?php
	/**
		* Facebook button style
		*
		* @package     
		* @subpackage  Settings
		* @copyright   Copyright (c) 2017, Dmytro Lobov
		* @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
		* @since       1.0
	*/
	
	
	
	$google_button_padding_top = array(
	'id'   => 'google_button_padding_top',
	'name' => 'google_button_padding_top',	
	'type' => 'text',
	'val' => isset($param['google_button_padding_top']) ? $param['google_button_padding_top'] : '5',	
	);
	
	$google_button_padding_right = array(
	'id'   => 'google_button_padding_right',
	'name' => 'google_button_padding_right',	
	'type' => 'text',
	'val' => isset($param['google_button_padding_right']) ? $param['google_button_padding_right'] : '20',	
	);
	
	$google_button_padding_bottom = array(
	'id'   => 'google_button_padding_bottom',
	'name' => 'google_button_padding_bottom',	
	'type' => 'text',
	'val' => isset($param['google_button_padding_bottom']) ? $param['google_button_padding_bottom'] : '5',	
	);
	
	$google_button_padding_left = array(
	'id'   => 'google_button_padding_left',
	'name' => 'google_button_padding_left',	
	'type' => 'text',
	'val' => isset($param['google_button_padding_left']) ? $param['google_button_padding_left'] : '20',	
	);
	
	$google_button_border = array(
	'id'   => 'google_button_border',
	'name' => 'google_button_border',	
	'type' => 'text',
	'val' => isset($param['google_button_border']) ? $param['google_button_border'] : '0',	
	);
	
	$google_button_border_radius = array(
	'id'   => 'google_button_border_radius',
	'name' => 'google_button_border_radius',	
	'type' => 'text',
	'val' => isset($param['google_button_border_radius']) ? $param['google_button_border_radius'] : '0',	
	);
	
	$google_text_size = array(
	'id'   => 'google_text_size',
	'name' => 'google_text_size',	
	'type' => 'text',
	'val' => isset($param['google_text_size']) ? $param['google_text_size'] : '18',	
	);
	
	$google_text_icon = array(
	'id'   => 'google_text_icon',
	'name' => 'google_text_icon',	
	'type' => 'text',
	'val' => isset($param['google_text_icon']) ? $param['google_text_icon'] : '18',	
	);
	
	$google_icon_show = array(
	'id'   => 'google_icon_show',
	'name' => 'google_icon_show',	
	'type' => 'select',
	'val' => isset($param['google_icon_show']) ? $param['google_icon_show'] : 'before',	
	'option' => array(
	'before' => 'Before text',
	'after' => 'After text',
	'none' => 'none',
	),
	);
	
	$google_margin_icon = array(
	'id'   => 'google_margin_icon',
	'name' => 'google_margin_icon',	
	'type' => 'text',
	'val' => isset($param['google_margin_icon']) ? $param['google_margin_icon'] : '5',	
	);
	
	$google_background = array(
	'id'   => 'google_background',
	'name' => 'google_background',	
	'type' => 'color',
	'val' => isset($param['google_background']) ? $param['google_background'] : 'F44336',	
	);
	
	$google_background_hover = array(
	'id'   => 'google_background_hover',
	'name' => 'google_background_hover',	
	'type' => 'color',
	'val' => isset($param['google_background_hover']) ? $param['google_background_hover'] : '#EF5350',	
	);
	
	$google_color_text = array(
	'id'   => 'google_color_text',
	'name' => 'google_color_text',	
	'type' => 'color',
	'val' => isset($param['google_color_text']) ? $param['google_color_text'] : '#ffffff',	
	);
	
	$google_color_icon = array(
	'id'   => 'google_color_icon',
	'name' => 'google_color_icon',	
	'type' => 'color',
	'val' => isset($param['google_color_icon']) ? $param['google_color_icon'] : '#ffffff',	
	);
	
	$google_color_border = array(
	'id'   => 'google_color_border',
	'name' => 'google_color_border',	
	'type' => 'color',
	'val' => isset($param['google_color_border']) ? $param['google_color_border'] : '#ffffff',	
	);
?>