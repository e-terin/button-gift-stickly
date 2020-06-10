<?php
/*
Plugin Name: Button Gift Stickly
Description: Integrates a floating contact button and opens an modal with your favorite contact form.
Version: 1.0.0
Author: Evgeniy Terin
Author URI: https://web.derin.ru
*/

/*==Plugin internal settings==*/
$img_gift_filename='gift.png';      /*==Name with extensions of gift image file==*/
$style_filename='bgs';              /*==Name without extensions of main CSS style file*/
$use_min_style=false;               /*==Setting set to use minificated version of main CSS style file ('true') or not use ('false')*/

/*==Set style filename==*/
$style=($use_min_style)?$style_filename.'.min.css':$style_filename.'.css';

/*==Add plugin styles==*/
function bgs_styles() {
    wp_enqueue_style( 'custom', plugins_url('assets/css/bgs.css',__FILE__), array(), 1.0, 'screen' );
}
add_action( 'wp_enqueue_scripts', 'bgs_styles');

/*==Add button code to footer==*/
add_action('wp_footer', 'bgs_footer');
function bgs_footer() {
    ?>
    <a href="#bgs-modal" class="bgs-link-button">
        <div>
            <div>5 000 р</div>
            <img src="<?=plugins_url('assets/img/'.$img_gift,__FILE__)?>">
        </div>
    </a>
  <div id="bgs-modal"> 
  <div class="bgs-footer">
    <a href="#" class="close-bgs-modal"><div class="bgs-footer-close"><span class="bgs-close">X</span></div></a></div>
  </div>
  <div class="bgs-modal-content"> 
    123
    <div class="overlay"></div> 
  </div>
  <?php
}