  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
<div class="block-slider block-slider4">
    <ul class="" id="bxslider-home4">
        <li>
            <img src="img/GTR.jpg" alt="Slide" style="width: 50%; height: auto; float:left;">
            <div class="caption-group" style="text-align:right;">
                <h2 class="caption title">
                    <span class="primary">Jada Toys Fast & Furious Brian's<br> Nissan Skyline GT-R (BN34)<br> Drift Power Slide RC<br> Radio Remote Control Toy Race Car<br> with Extra Tires, 1:10 Scale, Silver/Blue (99701)</span>
                </h2>
                
                <a class="caption button-radius" href="?page=cart"><span class="icon"></span>Buy now</a>
            </div>
        </li>
    
        <li>
            <img src="img/NSX.jpg" alt="Slide" style="width: 50%; height: auto; float:left;">
            <div class="caption-group" style="text-align:right;">
                <h2 class="caption title">
                    <span class="primary">Honda NSX White<br> with Carbon Top 1/64 Diecast Model Car<br> by LCD Models 64004 w</span>
                </h2>
                
                <a class="caption button-radius" href="?page=cart"><span class="icon"></span>Buy now</a>
            </div>
        </li>
        <li>
        <img src="img/LandRover Lego.jpg" alt="Slide" style="width: 40%; height: auto; float:left;">
            <div class="caption-group" style="text-align:right;">
                <h2 class="caption title">
                    <span class="primary">Land Rover Classic Defender</span>
                </h2>
                
                <a class="caption button-radius" href="?page=cart"><span class="icon"></span>Buy now</a>
            </div>
        </li>
        <li>
        <img src="img/Optimus.jpg" alt="Slide" style="width: 40%; height: auto; float:left;">
            <div class="caption-group" style="text-align:right;">
                <h2 class="caption title">
                    <span class="primary">Transformers Generations War for Cybertron:<br> Siege Voyager Class WFC-S11 <br>Optimus Prime Action Figure</span>
                </h2>
                
                <a class="caption button-radius" href="?page=cart"><span class="icon"></span>Buy now</a>
            </div>
        </li>
        
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
			            
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product" style="margin-right: 10px; margin-left: 10px;">
    <div class="product-f-image">
        <img src="product-imgs/<?php echo $row['Pro_image']?>" style="width: 100%; height: auto; object-fit: cover;">
        <div class="product-hover">
            <a href="?page=detail&id=<?php echo  $row['Product_ID']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
        </div>
    </div>
    <h2><a href="?page=detail&id=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
    <div class="product-carousel-price">
        <ins>$<?php echo  $row['Price']?></ins> 
    </div> 
</div>


                <?php
                
                }
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/Hotwheels.jfif" alt="">
                            <img src="img/Lelogo.jpg" alt="">
                            <img src="img/LogoFish.jpg" alt="">
                            <img src="img/LogoNerf.png" alt="">
                                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

  