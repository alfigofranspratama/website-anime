<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($popular as $row) :
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <img src="<?= $row->animeImg ?>" alt="" height="320px" width="250px" style="object-fit: cover;">
                                        <div class="ep">Release <?= $row->releasedDate ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="<?= base_url('home/details/') . $row->animeId; ?>"><?= $row->animeTitle; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Recent Release</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($recent as $row) :
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <img src="<?= $row->animeImg ?>" alt="" height="320px" width="250px" style="object-fit: cover;">
                                        <div class="ep">Episode <?= $row->episodeNum ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="<?= base_url('home/details/') . $row->episodeId; ?>"><?= $row->animeTitle; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="recent__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Anime Movie</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($movies as $row) :
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <img src="<?= $row->animeImg ?>" alt="" height="320px" width="250px" style="object-fit: cover;">
                                        <div class="ep">Release <?= $row->releasedDate ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <h5><a href="<?= base_url('home/details/') . $row->animeId; ?>"><?= $row->animeTitle; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="live__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>On Going</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        foreach ($ongoing as $row) :
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="">
                                        <img src="<?= $row->animeImg ?>" alt="" height="320px" width="250px" style="object-fit: cover;">
                                        <div class="ep">Latest Ep <?= $row->latestEp ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <?php
                                            foreach ($row->genres as $genre) :
                                            ?>
                                                <li><?= $genre ?></li>
                                            <?php
                                            endforeach;
                                            ?>
                                        </ul>
                                        <h5><a href="<?= base_url('home/details/') . $row->animeId; ?>"><?= $row->animeTitle; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>SARAN BAGIAN SINI</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">1</li>
                            <li data-filter=".week">2</li>
                            <li data-filter=".month">3</li>
                            <li data-filter=".years">4</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years" data-setbg="">
                                <img src="<?= base_url('assets/admin/') ?>/img/sidebar/tv-1.jpg" alt="">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week" data-setbg="">
                                <img src="<?= base_url('assets/admin/') ?>/img/sidebar/tv-2.jpg" alt="">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years" data-setbg="">
                                <img src="<?= base_url('assets/admin/') ?>/img/sidebar/tv-3.jpg" alt="">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month" data-setbg="">
                                <img src="<?= base_url('assets/admin/') ?>/img/sidebar/tv-4.jpg" alt="">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day" data-setbg="">
                                <img src="<?= base_url('assets/admin/') ?>/img/sidebar/tv-5.jpg" alt="">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>SINI JUGA MUNGKIN</h5>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="/img/sidebar/comment-1.jpg" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="/img/sidebar/comment-2.jpg" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="/img/sidebar/comment-3.jpg" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="/img/sidebar/comment-4.jpg" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>