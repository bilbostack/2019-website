<?php include 'header.php' ?>

<section id="speaker">
    <div class="container">
        <p class="back">
            <a href="/#agenda"><span class="fa fa-arrow-left"></span> volver a la agenda</a>
        </p>
        <div class="row">
            <div class="col-xs-4 col-sm-2 col-sm-offset-1">
                <img src="<?php echo nl2br($speaker["image"]) ?>" alt="<?php echo $speaker["name"] ?>" class="img-responsive">
            </div>
            <div class="col-xs-8">

                <h1><?php echo $speaker["name"] ?></h1>
                <h4><?php echo $speaker["company"] ?></h4>

                <p class="social">
                    <?php foreach (['twitter', 'linkedin', 'github'] as $key){ if($speaker[$key]){ ?>
                        <a href="<?php echo $speaker[$key] ?>"
                           target="_blank"
                           class="social"
                           title="<?php echo $key ?>"><i class="fa fa-<?php echo $key ?>"></i></a>
                    <?php }} ?>
                </p>
                <p><?php echo nl2br($speaker["bio"]) ?></p>

                <hr >
                <h2><a id="talk-details"></a> Su charla</h2>
                <h3><?php echo $speaker["talk"]["title"] ?></h3>
                <p><?php echo nl2br(($speaker["talk"]["description"])) ?></p>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>