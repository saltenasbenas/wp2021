<?php

/* Template Name: Team */

?>


 <?php get_header();?>
 <?php  the_post();


 
 
 ?>
 
 
  <section class="one">
                    <h1>Our Team</h1>
                    <div class="line"></div>
                    <p></p>
                    <img class="illiustration" src="<?php echo get_template_directory_uri(); ?>/images/bigdrop.png">
                    
                    
                    <div class="big-box">
                    <?php  
                   
                   foreach (get_users(['role'=>'team_member']) as $user) {
                       ?>
                        <div class="small-box">
                            <div class="inner-box">
                                <img src="<?php echo get_user_meta($user->ID, 'photo', true) ?>">
                                
                                <h2><?php  echo $user->data->display_name?></h2>
                                <p><?php echo get_user_meta($user->ID, 'pareigos', true) ?></p>
                                  <p><?php  echo $user->data->user_email?></p>
                            </div>
                        </div>
                      
                    <?php }?>
                       
                        
                       
                        
                    </div>
                    <a href="#" class="button-learmore">Learn More</a>
                </section>
 
 <?php  get_footer();?> 
               