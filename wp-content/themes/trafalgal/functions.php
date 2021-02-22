<?php




add_action('wp_enqueue_scripts', function (){
    wp_enqueue_style('tralgal_font','https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap');
    wp_enqueue_style('tralgal_style', get_template_directory_uri().'/style/style.css');
    wp_enqueue_style('tralgal_reset', get_template_directory_uri().'/style/reset.css');
});

add_action("init", function () {
   register_nav_menus(['top-menu'=>'Header Menu',
       'bottom-menu1'=>'Bottom Menu 1',
       'bottom-menu2'=>'Bottom Menu 2'     
   ]);
});


    add_action('after_switch_theme', function(){
        add_role('team_member', 'Komandos narys', ['read'=>true, 'edit_pos ts'=>true]);
    });

    
    
    add_action('add_meta_boxes', function ($post_type, $post) {
        $template=get_post_meta($post->post_parent, '_wp_page_template', true);
        
        if($template=='templates/services.php' ){
        add_meta_box('services', 'Paslaugu nustatymai', function($post){
           ?>
           
           
           <div>
           <?php 
           wp_nonce_field(basename(__FILE__), "paslaugos_meta");
           ?>
           
           <table style="width: 100%;">
           <tr>
           <td style="width: 200px;"><label>Paslaugos aprasymas</label></td>
            <td><input name="trumpas_aprasas" type="text" value="<?= get_post_meta($post->ID, 'trumpas_aprasas', true)?>" style="width: 100%;"></td>
           </tr>
           <tr>
           <td> <label>Paslaugos paveiksliukas</label></td>
            <td> 
            <?php $ico=get_post_meta($post->ID, 'ico', true);?>
            <select name="ico">
            <option value="/images/consultation.svg" <?=$ico=='/images/consultation.svg'? 'selected':'' ?>>Consultation</option>
            <option value="/images/search.svg" <?=$ico=='/images/search.svg'? 'selected':'' ?>>Search</option>
            <option value="/images/details.svg" <?=$ico=='/images/details.svg'? 'selected':'' ?>>Details</option>
            <option value="/images/tracking.svg" <?=$ico=='/images/tracking.svg'? 'selected':'' ?>>Tracking</option>
            <option value="/images/pharmacy.svg" <?=$ico=='/images/pharmacy.svg'? 'selected':'' ?>>Pharmacy</option>
            <option value="/images/emergency.svg" <?=$ico=='/images/emergency.svg'? 'selected':'' ?>>Emergency</option>
            </select>
          
            </tr>
           </table>
           </div>
           
           
           <?php 
        }, 'page', 'normal');}
        
        },10,2); 
    
    add_action('save_post',   function ($post_ID, $post, $update) {
        if(!isset($_POST['paslaugos_meta']) || wp_verify_nonce($_POST['paslaugos_meta'], basename(__FILE__)) ){
            return false;
        }
        
        if (current_user_can('edit_post', $post->ID)){
        
        if(isset($_POST['trumpas_aprasas'])){
        update_post_meta($post_ID, 'trumpas_aprasas', $_POST['trumpas_aprasas']);
        }
        if(isset($_POST['ico'])){
        update_post_meta($post_ID, 'ico', $_POST['ico']);
        }}
    },10,3); 
    
    
    add_action('widgets_init', function () {
        register_sidebar([
            
            'name'           => 'Kaires puses',
            'id'             => "side_kaire",
            'description'    => 'Kaires Puses',
        
            
        ] );
    });
       
        
      
    
    
    
    
    
    
   
        function bit_showprofile($user){
           ?>
           <h2>Contact Information</h2>
           <table class="form-table" role="presentation">
	<tbody>
		<tr>
			<th><label>Position </label></th>
			<td><input type="text" name="pareigos" id="pareigos"
				
				value="<?php echo get_user_meta($user->ID, 'pareigos', true) ?>" class="regular-text ltr"></td>
		</tr>
			<tr>
			<th><label>Facebook </label></th>
			<td><input type="text" name="facebook" id="facebook"
				
				value="<?php echo get_user_meta($user->ID, 'facebook', true) ?>" class="regular-text ltr"></td>
		</tr>
			<tr>
			<th><label>Linked In </label></th>
			<td><input type="text" name="linkedin" id="linkedin"
				
				value="<?php echo get_user_meta($user->ID, 'linkedin', true) ?>" class="regular-text ltr"></td>
		</tr>
			
			<tr>
			<th><label>Photo URL </label></th>
			<td><input type="text" name="photo" id="photo"
				
				value="<?php echo get_user_meta($user->ID, 'photo', true) ?>" class="regular-text ltr"></td>
		</tr>



	</tbody>
</table>
           
           <?php 
        }
        add_action('show_user_profile', 'bit_showprofile');
        add_action('edit_user_profile', 'bit_showprofile');
        
        
        
        function bit_updateprofile($id) {
         update_user_meta($id, 'pareigos', $_POST['pareigos']);
         update_user_meta($id, 'facebook', $_POST['facebook']);
         update_user_meta($id, 'linkedin', $_POST['linkedin']);
         update_user_meta($id, 'photo', $_POST['photo']);
        };
        
        add_action('personal_options_update','bit_updateprofile');
        add_action('edit_user_profile_update','bit_updateprofile');
        
        
        
        
        
        
        
        
        
        
        
        
        
        