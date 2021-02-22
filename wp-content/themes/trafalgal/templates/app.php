<?php

/* Template Name: app */

?>


 <?php get_header();?>
 <?php  the_post(); 
 ?>
 
 <section class="two">
                    <div class="left-side">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/illiustration2.png" class="leftimage">
                    </div>
                    <div class="right-side">
                        <h2>Leading healthcare providers</h2>
                        <div class="line"></div>
                        <p>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online
                            for
                            everyone. To us, it’s not just work. We take pride
                            in the solutions we deliver</p>
                        <a href="#" class="button-learmore">Learn More</a>
                    </div>
                </section>
                <section class="three">
                    <div class="left-side">
                        <h2>Download our
                            mobile apps</h2>
                        <div class="line"></div>
                        <p>Our dedicated patient engagement app and
                            web portal allow you to access information instantaneously (no tedeous form, long calls,
                            or administrative hassle) and securelys</p>
                        <a href="#" class="button-learmore">Download <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg"></a>
                    </div>
                    <div class="right-side">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/illiustration3.png" class="leftimage">
                    </div>
                </section>
 
 
  
 <?php  get_footer();?> 