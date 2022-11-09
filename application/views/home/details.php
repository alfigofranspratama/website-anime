<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg" data-setbg="<?= $details->animeImg; ?>">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3><?= $details->animeTitle; ?></h3>
                            <span></span>
                        </div>
                        <!-- <div class="anime__details__rating">
                            <div class="rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                            <span>1.029 Votes</span>
                        </div> -->
                        <p><?= $details->synopsis; ?></p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Type:</span> <?= $details->type; ?></li>
                                        <li><span>Studios:</span> Lerche</li>
                                        <li><span>Released:</span> <?= $details->releasedDate ?></li>
                                        <li><span>Status:</span> <?= $details->status; ?></li>
                                        <li><span>Genre:</span> <?php foreach ($details->genres as $genre) : echo $genre . ", ";
                                                                endforeach ?></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Other Names:</span> <?= $details->otherNames ?></li>
                                        <li><span>Total Episodes:</span> <?= $details->totalEpisodes ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__btn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Episode List</h5>
                    </div>
                    <?php
                    foreach ($details->episodesList as $row) :
                    ?>
                        <div class="anime__review__item">
                            <div class="anime__review__item__text">
                                <h6><a href="<?= base_url('home/watch/') . $this->uri->segment(3) . "/" . $row->episodeId ?>"><?= $details->animeTitle . " - " . $row->episodeNum ; ?></a></h6>
                            </div>
                        </div>
                    <?php
                    endforeach
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Anime Section End -->