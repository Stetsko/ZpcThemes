<?php get_header();?>

    <section class="about-us" id="aboutUs">
        <div class="container">
            <div class="row">
                <?php if(have_posts()) : query_posts('p=50');?>
                    <?php while (have_posts()) : the_post(); ?>
                <div class="section-title col-md-12"><h2><?php the_title();?></h2></div>
                <div class="col-md-7">
                    <p><?php the_content(); ?></p>
                </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5">
                    <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
                </div>
            </div>

        </div>
    </section><!-- /.about-us -->

<section class="trust" id="trust">
    <div class="container">
        <div class="row">
            <div class="section-title col-md-12"><h2><?php echo get_cat_name('3'); ?></h2></div>

               <?php if(have_posts()) : query_posts('cat=3&order=ASC'); ?>
                   <? while (have_posts()) : the_post(); ?>

            <div class="trust__trig col-md-3 col-sm-6 ">

                <div class="trust__trig_icon">
                    <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail'); ?>
                </div>
                <div class="trust__trig_text">
                    <?php the_content()?>
                </div>
            </div><!-- /.trust__trig -->

                   <?php endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section><!-- /.trust <-->

<section class="works" id="works">
    <div class="container">
        <div class="section-title"><h2><?php echo get_cat_name('8');?></h2>
            <div class="select_wrapper">
                <!-- наш бокс зі списком -->
                <div id="selectBox" class="selectBox">
                    <img src="<?php echo get_template_directory_uri().'/img/arr-icon.png'; ?>" class="arrow"/>
                    <span class="valueTag" name="select" >Оберіть потрібну категорію*</span>
                    <ul id="selectMenuBox" class="selectMenu">
                        <li data-filter="all" selected="selected" class="filter option">Всі</li>
                        <li data-filter=".category-1"  class="filter option">Землеустрій та кадастр</li>
                        <li data-filter=".category-9" class="filter option">Топографо-геодезичні роботи (інженерно-геодезичні вишукування)</li>
                        <li data-filter=".category-10"  class="filter option">Грунтове обстеження</li>
                        <li data-filter=".category-11" class="filter option">Оцінка земель</li>
                        <li data-filter=".category-12" class="filter option">Консалтингові послуги</li>
                        <li data-filter=".category-13" class="filter option">Купівля-продаж земельних ділянок</li>
                        <li data-filter=".category-14" class="filter option">Юридичні послуги</li>
                    </ul>
                </div> <!-- кiнець бокса -->
            </div>
        </div>

        <div class="row" id="works_category">

<?php if(have_posts()) : query_posts('cat=1'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-1">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true);?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=9'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-9">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true);?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=10'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-10">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true);?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=11'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-11">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true);?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>


<?php if(have_posts()) : query_posts('cat=12'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-12">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true);?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=13'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-13">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_posts()) : query_posts('cat=14'); ?>
    <? while (have_posts()) : the_post(); ?>


            <div class="col-md-4 col-sm-6 col-xs-12 mix category-14">
                <div class="works__item">
                    <div class="works__item_img">

                        <?php echo get_the_post_thumbnail( $page->ID, 'full'); ?>

                    </div>
                    <div class="content">
                        <div class="works__item_titel">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="works__item_price">

                            <div class="line"><div class="price"><?php echo get_post_meta($post->ID,'price', true); ?></div></div>

                            <button value="<?php the_title() ?>" id = "works-category-btn" class="btn_yellow" href="#order_form">Замовити</button>
                        </div>
                    </div>
                </div><!-- /.works__item -->
            </div>

<?php endwhile; ?>
<?php endif; ?>

        </div><!-- /#works_category -->

    </div>
</section><!-- /.works -->


<section class="map" id="contact">
    <div id="google-container">
    </div>

    <?php get_template_part('form-contact-map');?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmKRIs_O5sNwWyldyWMmPl2NZXpgpsA9E"></script>
</section><!-- /.map -->

<?php get_footer();?>