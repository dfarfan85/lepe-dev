

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
    ?>
    <div class="container-fluid">
    <div class="row justify-content-center">    
        <?php
        $iter_num = 1;
        $fadeTransition = '';
        foreach ($vals as $val){
            $cust_vals = explode(",", $val);
            if ($iter_num % 2 == 0){
                $fadeTransition = 'fadeInRight';
            }
            else {$fadeTransition = 'fadeInLeft';}
    ?>


        <div class="animated <?php echo $fadeTransition;?> card-container text-center col-8 col-sm-8 col-md-5 col-lg-5 col-xl-5" style="visibility: visible; animation-name: <?php echo $fadeTransition;?>;" id="<?php echo $iter_num; $iter_num +=1;?>" >
            <div class="card bg-dark text-white">
                <img class="card-img"  src="<?php echo $cust_vals[2]?>"
                    alt="Card image">
                    <a href="<?php echo $cust_vals[3]?>">
                    <div class="card-img-overlay d-flex">
                        <h1 class="card-text text-center card-h1 " style="font-weight: bolder"><?php echo $cust_vals[0]?></h1>
                    </div></a>
            </div>
        </div>
    

<?php  
    }
?>
</div></div>
<?php    
} //End Card Generator?>

    

<!-- /.blog-post -->