<!DOCTYPE HTML>
<html>
<head>
    <?php include("headconten.php") ?>
    <script type="text/javascript">$(document).ready(function(){activarItemMenu("inicio")});</script>
</head>
<title>Galis Boutique</title>
<body>
<div class="wrapper">
    <?php include("header.php") ?>
    <?php include("navbar.php") ?>
    
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--Banner Starts-->
            <div id="banner_section">
                <div class="flexslider">
                    <ul class="slides">
                        <li> <img src="images/Amplia-variedad-de-productos.jpg" />
                            <!--<div class="flex-caption">
                     <h3>Explore the summer collection!</h3>
              </div>-->
                        </li>
                        <li> <img src="images/atencion-personalizada.jpg" />
                            <!--<div class="flex-caption">
                      <h3>Shop now!</h3>
               </div> -->
                        </li>
                        <li> <img src="images/Contacto.jpg" /> </li>
                    </ul>
                </div>
                <div class="promo_banner">
                    <div class="home_banner"><a href="#"><img src="images/Acerca-de-Galis.jpg"></a></div>
                    <div class="home_banner"><a href="#"><img src="images/Contacto-v2.jpg"></a></div>
                    <div class="home_banner"><a href="#"><img src="images/Facebook.jpg"></a></div>
                </div>
            </div>
            <!--Banner Ends-->
           <?php include("page.php")  ?>
        </section>
        <?php include("footer.php") ?>
    </div>
    
</div>
</body>
</html>
