<style>
<?php include 'templatemo_style.css'; ?>
</style>

<div id="templatemo_wrapper">
	<span class="fruit"></span>
    
    <?php include('partials/header.php'); ?>
    
    <div id="templatemo_main">
    
        <?php include('partials/sidebar.php'); ?>
        
        <div id="templatemo_content">
        
            <h1>Contact Information</h1>
            <p>Praesent laoreet posuere ante, et commodo erat interdum non. Sed a turpis odio, ac laoreet tortor. Nulla facilisi. <a href="#">Praesent eget enim</a> sed erat malesuada consectetur egestas dictum justo. Duis nec erat nulla, vel hendrerit neque. Donec blandit blandit tellus, ac feugiat erat condimentum ut. <a href="#">Mauris vehicula</a> lorem a lorem iaculis vitae facilisis mauris blandit.</p>
            
          <div class="cleaner_h50"></div>
            
            <div class="box_w270 float_l">
                <h6>Location One</h6>
                220-110 Quisque odio quam, <br />
                Pulvinar sit amet convallis, 10660<br />
                Venenatis ut turpis<br />
                <br />
                <strong>Email:</strong> <a href="#">contact@yourwebsite.com</a></div> 
            
            <div class="box_w270 float_r">
                <h6>Location Two</h6>
                440-330 Quisque odio quam, <br />
              	Etiam eu ipsum a arcu, 10420<br />
            	Phasellus est quam<br />
            	<br />
                <strong>Email:</strong> <a href="#">info@yourcompany.com</a></div>    
            
            
            <div class="cleaner_h50"></div>
            
            <div id="contact_form">
            
            	<h3>Send us a message</h3>
            
                <?php
                $dsn = 'mysql:host=localhost;dbname=projekt';
                $username = 'root';
                $password = '';

                try {
                    $pdo = new PDO($dsn, $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Check if the form is submitted
                    if (isset($_POST['submit'])) {
                        // Get form data
                        $author = $_POST['author'];
                        $email = $_POST['email'];
                        $phone = $_POST['url'];
                        $message = $_POST['text'];
                        if(empty($_POST["author"])||empty($_POST["email"]) || empty($_POST["url"]) || empty($_POST["text"])){
                          echo('Všetky polia musia byť vyplnené');
                        }else{

                        // Insert the form data into the database
                        $insertStmt = $pdo->prepare("INSERT INTO kontakt_formular (author, email, phone, message) VALUES (:author, :email, :phone, :message)");
                        
                        $insertStmt->execute(['author' => $author, 'email' => $email, 'phone' => $phone, 'message' => $message]);

                        // Display a success message
                        echo "Form data inserted successfully!";
                        }
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>

                <form method="post" name="contact" action="#">
                    <input type="hidden" name="post" value="Send" />
                    <label for="author">Name:</label>
                    <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner_h10"></div>

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner_h10"></div>

                    <label for="url">Phone:</label>
                    <input type="text" name="url" id="url" class="input_field" />
                    <div class="cleaner_h10"></div>

                    <label for="text">Message:</label>
                    <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner_h10"></div>

                    <input style="font-weight: bold;" type="submit" class="submit_btn" name="submit" id="submit" value=" Send " />
                    <input style="font-weight: bold;" type="reset" class="submit_btn" name="reset" id="reset" value=" Reset " />
                </form>

                
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
