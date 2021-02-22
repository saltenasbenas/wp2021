<?php
/*
 * Plugin Name: Informacijos iskiepis
 *
 * Description: Pridejau prenumeratoriu registracija tiesiai i mySQL
 * Author: Benjaminas Saltenas
 *
 */

add_action('admin_menu', function () {
    


add_menu_page(
    __('Registracija', 'kursai'),
    __('kursai'), 
    'manage_options', 
    'kursai_menu',
    function () {
        
        global $wpdb;
        $users=$wpdb->get_results("SELECT * FROM `{$wpdb->prefix}_kursai_registracijos`");
        
        
        ?>
        <h1>Subscriber List</h1>
        <table border="1" >
          <tr>
            <th>ID</th>
            <th>Courses</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
          <?php foreach ($users as $user){?>
          <tr>
            <td><?php echo $user->id?></td>
            <td><?php echo $user->kursai_id?></td>
            <td><?php echo $user->name?></td>
            <td><?php echo $user->email?></td>
          </tr>
          <?php }?>
        </table>

        <?php 
        
        
        
        
        
        
    },
    'dashicons-chart-pie',
    '4');

});

register_activation_hook(__FILE__, function () {
    
    global $wpdb;
  
    $sql="CREATE TABLE `{$wpdb->prefix}_kursai_registracijos` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `kursai_id` INT NOT NULL ,
        `name` VARCHAR(64) NOT NULL ,
        `email` VARCHAR(64) NOT NULL ,
        PRIMARY KEY (`id`))
         ENGINE = InnoDB ".$wpdb->get_charset_collate();
    require_once (ABSPATH.'/wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
});
    $kursai_msg='';
    if (isset($_POST['kursai_registracija'])) {
        $wpdb->insert("{$wpdb->prefix}_kursai_registracijos",
        [
            "kursai_id"=>strip_tags($_POST['kursai_id']),
            "name"=>strip_tags($_POST['kursai_name']),
            "email"=>strip_tags($_POST['kursai_email'])
            
        ]);
        $kursai_msg='Thank You!';
        
    }
    


add_shortcode('kursu_registracija', function () {
   
    global $kursai_msg;
    if ($kursai_msg=='') {
      
    return 
   ' <form method="post" >
    <input type="hidden" name="kursai_registracija" value="1"><br>
    <input type="text" name="kursai_id" placeholder="ID"><br>
    <input type="text" name="kursai_name" placeholder="Name"><br>
    <input type="text" name="kursai_email" placeholder="Email"><br>
    <input type="submit" value="Subscribe Us"> 
    </form>'; 
    }else {
        return $kursai_msg;
    }
    
});


class kursai_widget extends WP_Widget {
    function __construct() {
        parent::__construct('kursai_widget', 'Kursu widget');
        
    }
    public function widget($args, $instance) {
        echo ' <form method="post" >
    <input type="hidden" name="kursai_registracija" value="1"><br>
    <input type="text" name="kursai_id" placeholder="ID"><br>
    <input type="text" name="kursai_name" placeholder="Name"><br>
    <input type="text" name="kursai_email" placeholder="Email"><br>
    <input type="submit" value="Subscribe Us">
    </form>'; 
        
    }
} 


add_action('widgets_init', function () {
    register_widget('kursai_widget');
});

   



