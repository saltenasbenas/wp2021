
    
    <?php get_header();?>
    
    <?php the_post();  ?>
    
    
            <div class="header-wrapper">
                <header>
                

                    <h1><?php the_title();?></h1>
                    <p><?php the_content(); ?></p>
                     <p>
                    
                    <?php the_date();?><br>
                   <?php  the_author_firstname(); echo " "; the_author_lastname()?>
                  </p>
                    <a href="#" class="button">Consult Today</a>
                  
                    <img class="illiustration" src="<?php echo get_template_directory_uri(); ?>/images/image1.png">
                    <i class="bi bi-google"></i>
                </header>
               </div>
           
              <?php 
              
              get_footer();
              
              ?> 
               
            