<?php 
include('connection.php');
include('header.php');
?>


      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <center>
          <h3 class="section-title">Searching Results</h3>
        </center>
          <hr>
        </header>
        <?php 
       if (isset ($_REQUEST['search'])){

$title = $_POST['title'];

            $query = "SELECT * FROM `rooms` WHERE name='$title' " ;

$sql = mysqli_query($conn, $query);
        $r=0;
        while ($rows= mysqli_fetch_array($sql)) {
          $r=$r+1;
            $id         = $rows['id'];
            $name       = $rows['name'];
            
            $img=         $rows['pic'];
        
        ?>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/<?php echo $rows["pic"]; ?>" class="img-responsive" style="max-width: 100%; margin-left: auto; margin-right: auto; height: 160px;" /><br />
              <br>
                <h4><?php echo $rows['name'];?></h4>
                
                  
              </div>
            </div>
          </div>
<?php }
}
?>
            <?php 
       if (isset ($_REQUEST['search'])){

$title = $_POST['title'];

            $query = "SELECT * FROM `rooms` WHERE  `date`='$title' " ;

$sql = mysqli_query($conn, $query);
        $r=0;
        while ($rows= mysqli_fetch_array($sql)) {
          $r=$r+1;
            $id         = $rows['id'];
            $name       = $rows['name'];
            
            $img=         $rows['pic'];
        
        ?>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/<?php echo $rows["pic"]; ?>" class="img-responsive" style="max-width: 100%; margin-left: auto; margin-right: auto; height: 160px;" /><br />
              <br>
                <h4><?php echo $rows['name'];?></h4>
                
                  
              </div>
            </div>
          </div>
<?php }
}
?>
  <?php 
       if (isset ($_REQUEST['search'])){

$title = $_POST['title'];

            $query = "SELECT * FROM `rooms` WHERE  price='$title' " ;

$sql = mysqli_query($conn, $query);
        $r=0;
        while ($rows= mysqli_fetch_array($sql)) {
          $r=$r+1;
            $id         = $rows['id'];
            $name       = $rows['name'];
            
            $img=         $rows['pic'];
        
        ?>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/<?php echo $rows["pic"]; ?>" class="img-responsive" style="max-width: 100%; margin-left: auto; margin-right: auto; height: 160px;" /><br />
              <br>
                <h4><?php echo $rows['name'];?></h4>
                
                  
              </div>
            </div>
          </div>
<?php }
}
?>

          
                
             
        
          

         

      </div>
    </section><!-- End Portfolio Section -->


        


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>