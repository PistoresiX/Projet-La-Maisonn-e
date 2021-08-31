<!--<style>
    h3, p {
        color: white;
    }
    body {
        padding-top: 1em;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        outline: black;
        background-color: rgba(0, 0, 0, 0.3);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
    }
</style>-->

<?php foreach ($articles as $article) : ?>
    <div class="card w-75 ml-auto mr-auto mt-5 mb-5">
        <h5 class="card-header"><?= $article["actu_title"]; ?></h5>
        <div class="card-body row">

        <div id="carouselaction" class="carousel slide col-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < count($article["medias"]); $i++) { ?>
                        <li data-target="#carouselaction"
                            data-slide-to="<?php echo($i + 1); ?>" <?php if ($i === 0) { ?> class="active" <?php } ?>></li>
                    <?php } ?>
                </ol>

                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($article["medias"]); $i++) {
                        $photo = $article["medias"][$i]["med_files"];
                        $format = $article["medias"][$i]["med_format"];
                        ?>
                        <div class="carousel-item<?= ($i === 0) ? ' active' : ''; ?> text-center">
                            <img src="<?php echo base_url("asset/image/$photo.$format") ?>" class="img-fluid"
                                 alt="<?= $article["actu_title"] ?>">
                        </div>

                    <?php } ?>
                </div>
                <a class="carousel-control-prev" href="#carouselaction" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselaction" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>


            <!--<h5 class="card-title">Special title treatment</h5>-->
            <p class="card-text col-7"><?= $article["actu_text"]; ?></p>
            <!--<a href="#" class="btn btn-primary">Voir la suite</a>-->
        </div>
    </div>
    <?php endforeach; ?>