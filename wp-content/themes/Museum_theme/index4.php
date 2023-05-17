<?php get_header(); ?>
<div class="wrapper">
        <div class="nadpisi">
        <p>Фотографии заводов</p>
        <p>Информация о заводе</p>
        </div>
        <div class="obed">
        <?php
            $loop = CFS()->get('zavod');
            foreach($loop as $row){ 
                ?>
                <div class="PhotoZav1">
                    <img src="<?= $row['photo_zavoda']?>" style="width: 126.5%;" >
                </div>
                <div class="infa" style="width: 55%;">
                    <h1><?= $row['zavods_name']?></h1>
                    <p><?= $row['o_zavode']?></p>
                </div>
                <?php
            }
            ?>
<?php get_footer(); ?>
              