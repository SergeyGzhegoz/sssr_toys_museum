<?php
/*
Template Name: Обзор игрушек
*/
?>
<?php get_header(); ?>
<div class="wrapper">
        
        <!--sidebar-->
        <?php get_sidebar()?>
        <section class="object">
        <?php
            $loop = CFS()->get('toy_card');
            foreach($loop as $row){ 
                ?>
                <div>
                    <p><?= $row['toy_name']?></p>
                    <img src="<?= $row['toy_image']?>" alt="фото загружается...">
                    <p><a href="transition.html">подробнее...</a></p>
                </div>
              <?php
            }
            ?>
            
        </section>
    </div>
    <?php get_footer(); ?>

