<!DOCTYPE html>
<html>
  <head>
    <title>شركه السالماني للفورفورجيه</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css" >
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">السالماني</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.html">الصفحه الرئيسيه</a></li>
                <li class="active"><a href="#">المعرض</a></li>
                <li><a href="services.html">الخدمات</a></li>
                <li><a href="about.html">من نحن</a></li>
                <li><a href="contact.html">اتصل بنا</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://www.facebook.com/%D8%B4%D8%B1%D9%83%D9%87-%D8%A7%D9%84%D8%B3%D8%A7%D9%84%D9%85%D8%A7%D9%86%D9%8A-%D9%84%D9%84%D9%81%D9%88%D8%B1%D9%81%D9%88%D8%B1%D8%AC%D9%8A%D9%87-1853683731627427/" target="_blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/salmany_company/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">ابحث عن منتجك</h2>
            </div>
          </div>
        </div>
    
      </div>
      

      <div class="row" id="lightgallery">
        <?php

          $path = "images/imgs";
          $dir_handle = @opendir($path) or die("Unable to open folder");

          while (false !== ($file = readdir($dir_handle))) {

            if($file != '.' && $file != '..' && $file != 'Thumbs.db')
            {
              echo "<div class='col-sm-6 col-md-4 col-lg-3 col-xl-2 item' data-aos='fade' data-src='images/imgs/$file' alt='$file'>"; 
              echo "<a href='#'><img src='images/imgs/$file' alt='$file'  class='img-fluid'></a>";
              echo "</div>";
            }
          }
          closedir($dir_handle);

        ?>
       <!--
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/1.jpg">
          <a href="#"><img src="images/imgs/1.jpg"  class="img-fluid"></a>
        </div>
         <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/2.jpg">
          <a href="#"><img src="images/imgs/2.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/3.jpg">
          <a href="#"><img src="images/imgs/3.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/4.jpg">
          <a href="#"><img src="images/imgs/4.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/5.jpg">
          <a href="#"><img src="images/imgs/5.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/6.jpg">
          <a href="#"><img src="images/imgs/6.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/7.jpg">
          <a href="#"><img src="images/imgs/7.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/8.jpg">
          <a href="#"><img src="images/imgs/8.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/9.jpg">
          <a href="#"><img src="images/imgs/9.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/10.jpg">
          <a href="#"><img src="images/imgs/10.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/11.jpg">
          <a href="#"><img src="images/imgs/11.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/12.jpg">
          <a href="#"><img src="images/imgs/12.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/13.jpg">
          <a href="#"><img src="images/imgs/13.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/14.jpg">
          <a href="#"><img src="images/imgs/14.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/15.jpg">
          <a href="#"><img src="images/imgs/15.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/16.jpg">
          <a href="#"><img src="images/imgs/16.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/17.jpg">
          <a href="#"><img src="images/imgs/17.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/18.jpg">
          <a href="#"><img src="images/imgs/18.jpg"  class="img-fluid"></a>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/19.jpg">
          <a href="#"><img src="images/imgs/19.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/20.jpg">
          <a href="#"><img src="images/imgs/20.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/21.jpg">
          <a href="#"><img src="images/imgs/21.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/22.jpg">
          <a href="#"><img src="images/imgs/22.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/23.jpg">
          <a href="#"><img src="images/imgs/23.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/24.jpg">
          <a href="#"><img src="images/imgs/24.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/25.jpg">
          <a href="#"><img src="images/imgs/25.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/26.jpg">
          <a href="#"><img src="images/imgs/26.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/27.jpg">
          <a href="#"><img src="images/imgs/27.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/28.jpg">
          <a href="#"><img src="images/imgs/28.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/29.jpg">
          <a href="#"><img src="images/imgs/29.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/30.jpg">
          <a href="#"><img src="images/imgs/30.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/31.jpg">
          <a href="#"><img src="images/imgs/31.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/32.jpg">
          <a href="#"><img src="images/imgs/32.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/33.jpg">
          <a href="#"><img src="images/imgs/33.jpg"  class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/34.jpg">
          <a href="#"><img src="images/imgs/34.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/35.jpg">
          <a href="#"><img src="images/imgs/35.jpg"  class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/imgs/36.jpg">
          <a href="#"><img src="images/imgs/36.jpg"  class="img-fluid"></a>
        </div> -->

      </div>
    </div>
  </div>

  <div class="footer py-2">
    <div class="container-fluid text-center">
      <p class="copyright">
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
       جميع الحقوق محفوظة لشركة <a href="index.html">السالماني</a> سنة 2019©
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    

  <!-- Start Scroll To Top  -->
  <div class="scroll_top">
  <i class="fa fa-chevron-up"></i>
  </div>
  <!-- End Scroll To Top -->
  
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

    
  </body>
</html>