<?php

/* Template Name: about */

?>


 <?php get_header();?>
 <?php  the_post(); 
 ?>
 
 
 <section class="fifth">
                    <h2>Check out our latest article</h2>
                    <div class="line"></div>
                    <div class="bix-box-article">
                        <div class="small-box-article">

                            <div class="image1"></div>

                            <div class="article-info">
                                <h5>Disease detection, check up in the laboratory</h5>
                                <p>In this case, the role of the health laboratory is very important to do a disease
                                    detection...</p>
                                <div class="article-button">
                                    <p>Read more</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-small.svg" alt="arrow-right">
                                </div>
                            </div>
                        </div>
                        <div class="small-box-article">

                            <div class="image2"></div>

                            <div class="article-info">
                                <h5>Herbal medicines that are
                                    safe for consumption</h5>
                                <p>Herbal medicine is very widely used at this time because of its very good for your
                                    health...</p>
                                <div class="article-button">
                                    <p>Read more</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-small.svg" alt="arrow-right">
                                </div>
                            </div>
                        </div>
                        <div class="small-box-article">

                            <div class="image3"></div>

                            <div class="article-info">
                                <h5>Natural care for healthy facial skin</h5>
                                <p>A healthy lifestyle should start from now and also for your skin health.There are
                                    some...</p>
                                <div class="article-button">
                                    <p>Read more</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right-small.svg" alt="arrow-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button-learmore">Learn More</a>


                </section>
 
 
  <?php  get_footer();?> 