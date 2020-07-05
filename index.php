<?php
/*
Plugin Name: mm_cats
Description: Плагин для создания выбранных категорий.
Version: Номер версии плагина, например: 1.0
Author: Lazarev Konstantin Aleksandrovich
*/
include 'functions.php';
add_action( 'widgets_init', 'mm_cats_widget' );