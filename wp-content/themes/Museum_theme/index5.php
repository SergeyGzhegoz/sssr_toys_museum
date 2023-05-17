<?php get_header(); ?> 

    <div class="Nadpisi">
        <div class="News">
            <p>Новости</p>
        </div>
        <div class="FirstNew">
            <p><a href="">Сначала новые</a></p>
        </div>
        <div class="FirstOld">
            <p><a href="">Сначала старые</a></p>
        </div>
    </div>

    <section class="wrapper">
        <div class="card">
        <?php
            $loop = CFS()->get('zavod');
            foreach($loop as $row)
            { ?>
                    <div class="Title">
                        <p><b><a href="NovostPage.html"><?= $row['zapis_name']?></a></b>
                    </div>
                    <div class="Date">
                        </p>
                        <p><b><?= $row['date']?></b></p>
                    </div>
                    <div class="Photo"><img src="<?= $row['zapis_photo']?>" alt=""></div>
                    <div class="Text">
                        <p><?= $row['opisanie_not_full']?>.....<a href="NovostPage.html"><b>ЧИТАТЬ ДАЛЕЕ</b></a></p>
                    </div>
                    <?php
            }
            ?>
        </div>
        </section>
<?php get_footer(); ?>
               
            