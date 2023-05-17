<?php
/*
Template Name: Производства
*/
?>
<?php get_header(); ?>
<div class="wrapper">        
<?php if(have_posts()){
    the_post();
    the_content();
    }
?>
</div>
<?php get_footer(); ?>

