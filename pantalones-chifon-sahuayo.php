<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
<div class="wrapper">
    <?php include("header.php") ?>
    <?php include("navbar.php") ?>
    
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            <!--SIDE NAV STARTS-->
            <?php include("opciones.php") ?>
            <div id="main_content">
            <div class="category_banner"> <img src="images/promo_cat_banner.jpg"/> </div>
            <!--SIDE NAV ENDS-->
                       
                
                <!--<ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="leisure_listing.html">Women</a></li>
                    <li class="active"><a href="#">Shirts & Blouses</a></li>
                </ul>-->
                
                
                <!--Product List Starts-->
                
                <div class="products_list products_slider">
                    <ul>
                        <li> <a class="product_image fancybox" href="images/blusas/espacio-500.jpg"><img src="images/blusas/miniaturas/espacio-miniatura.jpg"/></a>
                            <div class="product_info">
                                <h3>Pantalones</h3>
                            </div>
                            <div class="price_info">
                                <button class="price_add" title="" type="button"><span class="pr_price">$76.00</span></button>
                            </div>
                        </li>
                        <li> <a class="product_image fancybox" href="images/blusas/espacio-500.jpg"><img src="images/blusas/miniaturas/espacio-miniatura.jpg"/></a>
                            <div class="product_info">
                                <h3>Pantalones</h3>
                            </div>
                            <div class="price_info">
                                <button class="price_add" title="" type="button"><span class="pr_price">$76.00</span></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--Product List Ends-->
                              
               <?php include("footer.php") ?>
            
        </section>
        <!--Mid Section Ends-->
    </div>
    
</div>
</body>
</html>
