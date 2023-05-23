<style>
    <?php include 'templatemo_style.css'; ?>
</style>

<div id="templatemo_wrapper">
	<span class="fruit"></span>
    
    <?php include('partials/header.php'); ?>
    
    <div id="templatemo_main">
    
        <?php include('partials/sidebar.php'); ?>

                <?php
                $dsn = 'mysql:host=localhost;dbname=projekt';
                $username = 'root';
                $password = '';

                try {
                    $pdo = new PDO($dsn, $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // fetchnce featured produkt
                    $featuredProduktStmt = $pdo->prepare("SELECT * FROM produkty WHERE featured = 1 LIMIT 1");
                    $featuredProduktStmt->execute();
                    $featuredProdukt = $featuredProduktStmt->fetch(PDO::FETCH_ASSOC);

                    // fetchnce iný not featured produkt
                    $inyProduktStmt = $pdo->prepare("SELECT * FROM produkty WHERE featured = 0 LIMIT 1");
                    $inyProduktStmt->execute();
                    $inyProdukt = $inyProduktStmt->fetch(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
                <div id="templatemo_content">
                    <h1>Introducing Fruit Mix</h1>
                    <p>Fruit Mix is a <a href="#">free css template</a> for everyone. Feel free to download, edit and apply this template for your personal or business websites. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos used in this template. Praesent nulla ligula, condimentum sit amet vehicula non, faucibus quis risus.</p>
                    <p><a href="#">Aenean vestibulum</a>, ligula non facilisis tincidunt, turpis leo consectetur nibh, vitae tincidunt lectus augue commodo est. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. <a href="#">Cras purus libero</a>, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor.</p>
                    <div class="cleaner_h40"></div>
                    
                    <div class="box_w270 float_l">
                        <h3>Featured Product</h3>
                        <div class="image_wrapper"><a href="#"><img src="<?php echo $featuredProdukt['obrazok']; ?>" alt="image" /></a></div>
                        <p><?php echo $featuredProdukt['popis']; ?></p>
                        <div class="button"><a href="products.php">Detail</a></div>
                    </div>

                    <div class="box_w270 float_r">
                        <h3>Our Innovation</h3>
                        <div class="image_wrapper"><a href="#"><img src="<?php echo $inyProdukt['obrazok']; ?>" alt="image" /></a></div>
                        <p><?php echo $inyProdukt['popis']; ?></p>
                        <div class="button"><a href="products.php">Detail</a></div>
                    </div>
                </div> <!-- end of templatemo_content -->

    	
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_main -->

	<div class="cleaner"></div>
</div> <!-- end of wrapper -->

<?php include('partials/footer.php'); ?>
<!-- templatemo 238 fruit mix -->
<!-- 
Fruit Mix Template 
http://www.templatemo.com/preview/templatemo_238_fruit_mix 
-->
