<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
.wow-google-login {
	font-size:<?php if (!empty($param['google_text_size'])) { echo $param['google_text_size'];} else {echo '18';} ?>px;
	padding: <?php if (!empty($param['google_button_padding_top'])) { echo $param['google_button_padding_top']; } else {echo '5';} ?>px <?php if (!empty($param['google_button_padding_right'])) { echo $param['google_button_padding_right']; } else {echo '20';} ?>px <?php if (!empty($param['google_button_padding_bottom'])) { echo $param['google_button_padding_bottom'];} else {echo '5';}  ?>px <?php if (!empty($param['google_button_padding_left'])) { echo $param['google_button_padding_left'];} else {echo '20';} ?>px;
	border: <?php if (!empty($param['google_button_border'])) { echo $param['google_button_border'];} {echo '0';} ?>px solid <?php if (!empty($param['google_color_border'])) { echo $param['google_color_border'];} else {echo '0';} ?>;
	border-radius: <?php if (!empty($param['google_button_border_radius'])) { echo $param['google_button_border_radius']; } else {echo '0';} ?>px;
	background: <?php if (!empty($param['google_background'])) { echo $param['google_background']; } else {echo '#F44336';} ?>;
	color: <?php if (!empty($param['google_color_text'])) { echo  $param['google_color_text']; } else {echo '#ffffff';} ?>;
}
<?php
	$param['google_icon_show'] = !empty($param['google_icon_show']) ? $param['google_icon_show'] : 'before';
if ($param['google_icon_show'] != 'none'){ ?>
.wow-google-login:<?php echo $param['google_icon_show']; ?> {
   font-family: "FontAwesome";
    content: "\f1a0";    
	font-size: <?php if(!empty($param['google_text_icon'])) { echo $param['google_text_icon'];} else {echo '18';} ?>px;
	color: <?php if(!empty($param['google_color_icon'])){ echo $param['google_color_icon']; } else {echo '#ffffff';} ?>;
	<?php 
	$param['google_margin_icon'] = !empty($param['google_margin_icon']) ? $param['google_margin_icon'] : '5';
		if ($param['google_icon_show'] == 'before'){ $margin = 'margin-right:';} else {$margin = 'margin-left:';} echo $margin.' '.$param['google_margin_icon'].'px;'; ?>
}
<?php } ?>
.wow-google-login:hover {	
	background: <?php if (!empty($param['google_background_hover'])) { echo $param['google_background_hover']; } else {echo '#EF5350';} ?>;
	color: <?php if (!empty($param['google_color_text'])) { echo $param['google_color_text']; } else {echo '#ffffff';} ?>;
}