<?php
/*
    Template Name: Home Page
 */


get_header(); ?>

    <?php get_template_part('template-parts/content','hero'); ?>
    <?php get_template_part('template-parts/content','optin');?>
    <?php get_template_part('template-parts/content','boost'); ?>
    <?php get_template_part('template-parts/content','who'); ?>
    <?php get_template_part('template-parts/content','features'); ?>
    <?php get_template_part('template-parts/content','project'); ?>
    <?php get_template_part('template-parts/content','video'); ?>
    <?php get_template_part('template-parts/content','instructor'); ?>
    <?php get_template_part('template-parts/content','testimonials'); ?>

<?php get_footer(); ?>
