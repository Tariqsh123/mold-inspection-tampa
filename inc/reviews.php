<section class="reviews-area">
    <div class="container">
        <div class="row mb-3">
            <div class="col-lg-11 mx-auto text-center">
                <h2 class="h2"><?= htmlspecialchars($reviews_heading) ?></h2>
                <p><?= htmlspecialchars($reviews_text) ?></p>
            </div>
        </div>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <?php foreach($reviews as $review): ?>
                    <div class="swiper-slide">
                        <div class="review-box">
                            <div class="row mb-4 align-items-center">
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= htmlspecialchars($review['image']) ?>" 
                                             class="img-fluid d-block" 
                                             alt="<?= htmlspecialchars($review['name']) ?>" 
                                             title="<?= htmlspecialchars($review['name']) ?>" 
                                             loading="lazy" width="80" height="81">
                                        <div class="client-name">
                                            <span><?= htmlspecialchars($review['name']) ?></span>
                                            <span><?= htmlspecialchars($review['location']) ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-sm-end"><span class="quote"></span></div>
                            </div>
                            <p><?= htmlspecialchars($review['text']) ?></p>
                            <span class="stars"></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
