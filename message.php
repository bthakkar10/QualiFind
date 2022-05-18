
<?php
ob_start();
include "include/session.php";
include "include/header.php";

?>
    <main class="msgbody">
    <?php include_once "header.php"; ?>

<?php if($_SESSION["role"]=="recruiter"){?>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = $conn->prepare("SELECT * FROM rc_details WHERE unique_id = {$_SESSION['unique_id']}");
            $sql->execute();
            if($sql->rowCount() > 0){
              $row = $sql->fetch(PDO::FETCH_ASSOC);
            }
          ?>
          <img src="./recruiter/uploads/<?php echo $row['r_img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['r_name'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="msgsearch">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
  <?php }else
  {?>
 <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = $conn->prepare("SELECT * FROM st_details WHERE unique_id = {$_SESSION['unique_id']}");
            $sql->execute();
            if($sql->rowCount() > 0){
              $row = $sql->fetch(PDO::FETCH_ASSOC);
            }
          ?>
          <img src="./seeker/uploads/<?php echo $row['s_img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['s_name'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
      </header>
      <div class="msgsearch">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
  <?php }?>
     
    
        
    </main>

    

    	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
		<script src="message/javascript/users.js"></script>
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <?php include "include/footer.php"; ?>
    </body>
</html>