

<?php
  include "thuvien.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vuthibacdk12cntt2";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
        $sql = "SELECT * 
        FROM sanpham1 
        ORDER BY RAND()";
    //Bước 3
    $result = mysqli_query($conn, $sql);

 
    ?>
    <style>
      .product-name{
        text-transform: uppercase;
    
      }
      </style>

</head>
        <!-- =====  BANNER STRAT  ===== -->
    <div class="container banner mt_20">
      <div class="main-banner owl-carousel"> 
          <div class="item"><a href="#"><img src="ass/images/h.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="ass/images/t.png" alt="Main Banner" class="img-responsive" /></a></div>
     
      </div>
    </div>
</div>
<div class="container">
     <!-- =====  SUB BANNER END  ===== -->
     <div class="row ">
        <div class="col-sm-12 mtb_10">
          <!-- =====  PRODUCT TAB  ===== -->
          <div id="product-tab" class="mt_50">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">IPAD MỎNG NHẸ</h2>
            </div>
           
            <div class="tab-content clearfix box">
              <div class="tab-pane active" id="nArrivals">
              
                <div class="nArrivals owl-carousel"> <?php       $limit = 8; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?> 
                  <div class="product-grid">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> 
                        <a href="chitiet.php?masp=<?php echo $row["masp"] ?>"  >
                                        <img data-name="product_image" alt="iPod Classic" title="iPod Classic"  class="img-responsive" src="upload/<?php echo $row["img1"] ?>" alt="" class="card-image"  >
                          
                            <img src="upload/<?php echo $row["img2"] ?>" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                         
                          
                          <div class="button-group text-center">
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                            <div class="compare"><a href="#"><span>Compare</span></a></div>
                            <form action="cart.php" method="post" >
                                           
                                            <input type="submit"  name="addcart" class="add-to-cart">
                                            <input type="hidden" name="soluong" value="1">
                                            <input type="hidden" name="tensp" value="<?php echo $row["tensp"] ?>">
                                            <input type="hidden" name="dongiamoi" value="<?php echo $row["dongiamoi"] ?> 000 VNĐ">
                                            <input type="hidden" name="img1" value="<?php echo $row["img1"] ?>">   
                                    </form>
                            <!-- <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div> -->
                          </div>
                        </div>
                        <div class="caption product-detail text-center">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                          <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php echo $row["tensp"] ?></a></h6>
                          <span class="price"><span class="amount"><span class="currencySymbol"></span><?php echo $row["dongiamoi"] ?> 000 VNĐ</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>  
                  <?php 
                            $count++;    
                            }     ?>  
               
                </div> 
              </div>
            </div>
          </div>
                        </div>
          <!-- =====  PRODUCT TAB  END ===== -->
          <!-- =====  SUB BANNER  STRAT ===== -->
           <div class="container">
          <div class="row">
            <div class="cms_banner mt_50">
              <div class="col-sm-12 mt_10">
                <div id="subbanner3" class="sub-hover">
                  <div class="sub-img"> <a href="#"><img src="ass/images/c.jpg" alt="Sub Banner3" class="img-responsive"></a></div>
                </div>
              </div>
            </div>
          </div>
                        </div>
          <!-- =====  SUB BANNER END  ===== -->
          <!-- =====  PRODUCT TAB  ===== -->
         
          <!-- =====  PRODUCT TAB  END ===== -->
      