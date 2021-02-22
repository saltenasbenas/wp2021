<?php

/* Template Name: testimonials */

?>


 <?php get_header();?>
 <?php  the_post(); 
 ?>
 
 
 <section class="fourth">
                    <h2>What our customer are saying</h2>
                    <div class="line"></div>
                    <div class="wrapper">
                        <div class="left-side">
                            <div class="imageface"></div>
                            <div class="names">
                                <h3>Edward Newgate</h3>
                                <h4>Founder Circle</h4>
                            </div>
                        </div>
                        <p>“Our dedicated patient engagement app and
                            web portal allow you to access information instantaneously (no tedeous form, long calls,
                            or administrative hassle) and securely”</p>
                    </div>

                </section>
                <div class="customer">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-left.svg" alt="arrow-left">
                    <div class="nav-dots">
                        <div class="nav-dot active"></div>
                        <div class="nav-dot"></div>
                        <div class="nav-dot"></div>
                        <div class="nav-dot"></div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="arrow-right">
                </div>
 
 
  <?php  get_footer();?> 