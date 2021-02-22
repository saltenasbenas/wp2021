<?php 

/* Template Name: Services */

?>


 <?php get_header();?>
 <?php  the_post();
$id=get_the_ID();
$services=get_pages(['child_of'=>$id])

 
 
 ?>
 
 
  <section class="one">
                    <h1>Our services</h1>
                    <div class="line"></div>
                    <p>We provide to you the best choiches for you. Adjust it to your health needs and make sure your
                        undergo
                        treatment with our highly qualified doctors you can consult with us which type of service is
                        suitable
                        for your health</p>
                    <img class="illiustration" src="<?php echo get_template_directory_uri(); ?>/images/bigdrop.png">
                    
                    
                    <div class="big-box">
                    <?php  foreach ($services as $service) {
                       ?>
                        <div class="small-box">
                            <div class="inner-box">
                                <img src="<?php echo get_template_directory_uri(); echo get_post_meta($service->ID,'ico', true);?>">
                                
                                <h2><?=$service->post_title?></h2>
                                <p><?= get_post_meta($service->ID,'trumpas_aprasas', true)?></p>
                            </div>
                        </div>
                        <?php }?>
                    
                       
                        
                       
                        
                    </div>
                    <a href="#" class="button-learmore">Learn More</a>
                </section>
 
 <?php  get_footer();?> 
               