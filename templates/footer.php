<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <div class="org">
                    <h2>Organizan</h2>

                    <div class="organization-people row">
                        <?php foreach ($org as $person) { ?>
                            <div class="col-sm-3 col-xs-6">
                                <a href="<?php echo $person["twitter"] ?>"
                                   title="<?php echo $person["name"] ?>"
                                   target="_blank"
                                   class="thumbnail">
                                    <img src="<?php echo $person["avatar"] ?>" alt="<?php echo $person["name"] ?>">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>


            </div>
            <div class="col-md-3 col-md-offset-2 text-center">
                <strong>Bilbostack 2018</strong>
                <ul>
                    <li><a href="/codigo-de-conducta/">Código de conducta</a></li>
                    <li><a href="/como-llegar/">Indicaciones de cómo llegar</a>
                    </li>
                    <li><a href="/#speakers">Ponentes</a></li>
                    <li><a href="/#agenda">Agenda</a></li>
                </ul>
            </div>
        </div>

        <?php if(count($sponsors)){ ?>
        <div class="sponsors row">
            <h2 class="text-center">Patrocinan</h2>

            <div class="organization-people">
                <?php foreach ($sponsors as $sponsor) { ?>
                    <div class="col-md-4 text-center">
                        <a href="<?php echo $sponsor["link"] ?>"
                           title="<?php echo $sponsor["name"] ?>" target="_blank" class="big thumbnail">
                            <img src="<?php echo $sponsor["img"] ?>" alt="<?php echo $sponsor["name"] ?>">
                        </a>
                    </div>

                <?php } ?>
            </div>
        </div>
        <?php } ?>

    </div>
</footer>



<script src="/assets/build/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAp8OyGBJQ1_qHkGT10QVpPzMYGVjGOGCI"
         ></script>
</body>
</html>
