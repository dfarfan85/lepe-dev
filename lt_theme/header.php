<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="David Farfan and Alex Roberts">
    <meta name="theme-color" content="#212121">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>

</head>



<body>

<!--THIS IS THE MOBILE NAVBAR-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark justify-content-around" <?php if (is_admin_bar_showing()) echo 'style="top:2rem;'?>">
        <a id="brand-logo" class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
            <img src="<?php bloginfo('template_url'); ?>/images/lepe-tendwell-logo.png" class="d-inline-block align-top" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <button class="navbar-toggler" type="button" data-target="#navbarNav" aria-expanded="false">
            <a href="tel:619-432-3405 ">
                <i class="fas fa-phone"></i>
            </a>
        </button>
        <button class="navbar-toggler" type="button" data-target="#navbarNav">
            <a href="mailto:offers@lepetendwell.com">
                <i class="far fa-envelope"></i>
            </a>
        </button>



        <div class="collapse navbar-collapse" id="navbarNav">
                <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'header-menu',
                    'container' => '',
                    'menu_class' => 'navbar-nav ml-auto' ) ); ?>

        </div>
    </nav>
   
    <div class="container-fluid text-center lepe-logo-container">
        <img class="lepe-logo" src="<?php bloginfo('template_url'); ?>/images/lepe-tendwell-logo.png">
    </div>
<?php 
    if (!is_front_page() && get_post_ancestors(get_the_ID())) {
        $page_ancestors = get_post_ancestors(get_the_ID());
        echo '
        <nav aria-label="breadcrumb" class="sticky-top breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="' . get_bloginfo( 'wpurl' ) . '">Home</a></li>';
                if($page_ancestors){
                    foreach($page_ancestors as $page_ancestor){
                        $page_ancestor_data = get_post($page_ancestor);
                        $parent_url = esc_url(get_permalink($page_ancestor));
                        //print_r($page_ancestor_data);
                        echo ('<li class="breadcrumb-item"><a href="' . $parent_url . '">' .(apply_filters( "the_title", get_the_title( end ( $page_ancestors ) ) )) .'</a></li>');  
                    }
                    
                }
                
        echo '
                <li class="breadcrumb-item">' . get_the_title() . '</li>
            </ol>
            </nav>';        
        
    }
?>
           
    <div class="content-container"> 
    <!-- Close content-container in footer.php -->
        
