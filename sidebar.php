<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miniva
 */

?>

<?php

if(!is_single()) {
    dynamic_sidebar('simpel-dani-wp-sidebar');
} else {
    dynamic_sidebar('sidebar_single_page');
}

?>
