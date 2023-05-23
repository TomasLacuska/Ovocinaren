

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

              <?php
               require('inc/config.php');
               $dsn = 'mysql:host=localhost;dbname=projekt;charset=utf8';
               $username = 'root';
               $password = '';
               $db =  new Database();

              try {
                  $pdo = new PDO($dsn,$username,$password);
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                  // Prepare and execute a query to fetch the products from the database
                  $stmt = $pdo->prepare("SELECT * FROM produkty");
                  $stmt->execute();

                  // fetchnce vsetky produkty
                  $produkty = $stmt->fetchAll(PDO::FETCH_ASSOC);
              } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();
              }

              // Prejde cez fetchnuté produkty a zobrazý ich do html
              foreach ($produkty as $produkt) {
                  $obrazok = $produkt['obrazok'];
                  $nazov = $produkt['nazov'];
                  $popis = $produkt['popis'];
              ?>

              <div class="product_box">
                  <a href="<?php echo $obrazok; ?>" class="pirobox"><img src="<?php echo $obrazok; ?>" alt="image" /></a>
                  <h6><?php echo $nazov; ?></h6>
                  <p><?php echo $popis; ?></p>
                  <div class="button"><a href="#">Detail</a></div>
              </div>

              <?php
              }
              ?>

            
            
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


