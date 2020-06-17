<?php
/*
Plugin Name: Button Gift Stickly
Description: Integrates a floating contact button and opens an modal with your favorite contact form.
Version: 1.0.0
Author: Evgeniy Terin
Author URI: https://web.derin.ru
*/

/*==Check direct request==*/
defined( 'ABSPATH' ) or die( 'naXep' );

/*==Add plugin styles==*/
function bgs_styles() {
    wp_enqueue_style( 'bgs', plugins_url('/assets/css/bgs.css',__FILE__), array(), 1.0, 'screen' );
}
add_action( 'wp_enqueue_scripts', 'bgs_styles');

/*==Add button code to footer==*/
add_action('wp_footer', 'bgs_footer');
function bgs_footer() {
    ?>
    <a href="#openModal" class="bgs-link-button">
        <div>
            <div>5 000₽</div>
            <img src="<?=plugins_url('/assets/img/gift.png',__FILE__)?>">
        </div>
    </a>
  <div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <img src="<?=plugins_url('/assets/img/gift.png',__FILE__)?>">
        <h3 class="modal-title">Купон на 5000 ₽ в подарок!</h3>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        <p><?=do_shortcode('[contact-form-7 id="71" title="Контактная форма 1"]')?></p>
      </div>
    </div>
  </div>
</div>
  <?php
}