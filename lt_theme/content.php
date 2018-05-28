

<!-- the rest of the content -->


    <?php the_content(); ?>


<?php 


    $custom_fields = get_post_custom(get_the_ID());
    $vals = get_cust_vals($custom_fields);

?>


     
    <!-- 
    ***************************
    ***************************
        CARD PROTOTYPE
    ***************************
    ***************************    
-->
 

<?php 
//Start Card Generator
    if (is_array($vals)){
        foreach ($vals as $val){
            $cust_vals = explode(",", $val);
    ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="text-center col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8"></div>
        <div class="card bg-dark text-white">
            <img class="card-img" style="max-width: 50rem;" src="<?php echo $cust_vals[2]?>"
                alt="Card image">
                <a href="<?php echo $cust_vals[3]?>">
                <div class="card-img-overlay d-flex">
                    <h1 class="card-text text-center card-h1 " style="font-weight: bolder"><?php echo $cust_vals[0]?></h1>
                </div></a>
        </div>
    </div>
</div>
<?php  
    }
} //End Card Generator?>

    

<!-- /.blog-post -->