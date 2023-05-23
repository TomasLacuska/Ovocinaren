<style>
    <?php include 'templatemo_style.css'; ?>
</style>

<div id="templatemo_wrapper">
	<span class="fruit"></span>
    
    <?php include('partials/header.php'); ?>
    
    <div id="templatemo_main">
    
    <?php include('partials/sidebar.php'); ?>>
        
        <div id="templatemo_content">
        
            <h1>Latest News</h1>
            
            <p>In ac libero urna. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor. </p>  
            
            <div class="cleaner_h40"></div>
            


                <?php
                // Assuming you have a PDO database connection established
                $dsn = 'mysql:host=localhost;dbname=projekt';
                $username = 'root';
                $password = '';

                try {
                    $pdo = new PDO($dsn, $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Fetch news items from the database
                    $novinyStmt = $pdo->prepare("SELECT * FROM noviny");
                    $novinyStmt->execute();
                    $novinyPolozky = $novinyStmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>

                <?php foreach ($novinyPolozky as $novina): ?>
                    <div class="news_box">
                        <h2><?php echo $novina['nazov']; ?></h2>

                        <div class="left">
                            <a href="#"><img src="<?php echo $novina['obrazok']; ?>" alt="image" /></a>
                        </div>

                        <div class="right">
                            <p><?php echo $novina['obsah']; ?></p>
                            <div class="button"><a href="#">Detail</a></div>
                        </div>

                        <div class="cleaner"></div>
                    </div>
                <?php endforeach; ?>

            



            
            
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
