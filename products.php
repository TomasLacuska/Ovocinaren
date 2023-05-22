

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.7, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

<style>
    <?php include 'templatemo_style.css'; ?>
</style>

<div id="templatemo_wrapper">
	<span class="fruit"></span>
    
    <?php include('partials/header.php'); ?>
    
    <div id="templatemo_main">
    
        <?php include('partials/sidebar.php'); ?>
        
        <div id="templatemo_content">
        
          <h1>High Quality Products</h1>
            <p>Morbi sed nulla ac est cursus suscipit eu ac lectus. Curabitur  ullamcorper nibh nisi, sed eleifend dolor. Pellentesque adipiscing  sollicitudin sapien nec aliquet. Cras rutrum ullamcorper metus, vitae  consectetur dolor vulputate a. Sed nec eros egestas nisl tincidunt  aliquet at in est.</p>  
            
            <div class="cleaner_h40"></div>
            
            <div class="product_box">
                            
                <a href="images/product/01_l.jpg"  class="pirobox"><img src="images/product/01.jpg" alt="image" /></a>
                
              <h6>Lorem ipsum dolor sit amet</h6>
                <p>Etiam et mi et magna molestie iaculis.</p>
                <div class="button"><a href="#">Detail</a></div>
                    
          </div>
             
            <div class="product_box">
                        
                <a href="images/product/02_l.jpg"  class="pirobox"><img src="images/product/02.jpg" alt="image" /></a>
                
                <h6>Curabitur ullamcorper nibh</h6>
                <p> Vivamus condimentum ligula sit amet lacus.</p>
                <div class="button"><a href="#">Detail</a></div>
                
          </div>

             
            <div class="product_box">
                        
                <a href="images/product/03_l.jpg"  class="pirobox"><img src="images/product/03.jpg" alt="image" /></a>
                
                <h6>Senean condimentum ipsum</h6>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia.</p>
                <div class="button"><a href="#">Detail</a></div>
                
          </div>
             
            <div class="product_box">
                        
                <a href="images/product/04_l.jpg"  class="pirobox"><img src="images/product/04.jpg" alt="image" /></a>
                
                <h6>Nam quis commodo ligula</h6>
                <p> Phasellus est quam, congue sed laoreet eu, sodales sit.</p>
                <div class="button"><a href="#">Detail</a></div>
                
          </div>
             
            <div class="product_box">
                        
                <a href="images/product/05_l.jpg"  class="pirobox"><img src="images/product/05.jpg" alt="image" /></a>
                
                <h6>Lorem ipsum dolor sit </h6>
                <p> Duis fermentum sem nec ipsum lacinia fermentum.</p>
                <div class="button"><a href="#">Detail</a></div>
                
          </div>
             
            <div class="product_box">
                        
                <a href="images/product/06_l.jpg"  class="pirobox"><img src="images/product/06.jpg" alt="image" /></a>
                
                <h6>Phasellus est quam</h6>
                <p> Etiam eu ipsum a arcu sodales consequat sit amet at orci.</p>
                <div class="button"><a href="#">Detail</a></div>
                
          </div>
        
           
            
            
        </div> <!-- end of templatemo_content -->
    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->

<?php include('partials/footer.php'); ?>>
<!-- templatemo 238 fruit mix -->
<!-- 
Fruit Mix Template 
http://www.templatemo.com/preview/templatemo_238_fruit_mix 
-->
