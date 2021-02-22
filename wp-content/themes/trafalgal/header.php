<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma Namu Darbas</title>
   

<?php 
wp_head();
?>


</head>

<body>

    <div class="header-wrapper">

        <navigation>
            
            
        
            
            <nav>
                <div class="leftSide">
                    <a href="index.php"> <img  src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="logo" class="logo"></a>
                </div>
                <?php wp_nav_menu(
                [
                    'theme_location'=>'top-menu',
                    'container'=>'div',
                    'container_class'=> 'rightSide',
                    'container_id'=> 'rightSide',
                    
                ]
                
                );?>
                
                <img src="<?php echo get_template_directory_uri(); ?>/images/sandwich.svg" class="sandwich">
            </nav>
        </navigation>
    </div>