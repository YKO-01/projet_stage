
<?php include "../include/template/style.php" ?>
<!--<div class="page_loader"></div>-->
<?php include "../include/template/header.php" ?>
<!-- Main header end -->

<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 modal-read">
                

                <div class="row modal-main">
                  <?php 
                                        
                     $statement=$pdo->prepare("SELECT * FROM apartements ");
                     
                     $statement->execute();

                     $row = $statement->fetchAll();
                     

                                     
                  
                  ?>
                  <?php foreach( $row as $row)
                  {
                  
                  ?>
                   
				
		           <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp delay-03s" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.php" class="property-img">
								                                    <div class="price-ratings-box">
                                        <p class="price">
                                           <?php echo $row['Price']?> درهم                                      </p>
                                    </div>
                                    <img class="d-block w-100" src="image/img_section/sec1.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="http://thavasu.com/demo/property-listing/listing/013v1332/1-bhk-house-for-rent"><?php echo $row['Name']?></a>
                                </h1>
                                <div class="location">
                                    <a href="http://thavasu.com/demo/property-listing/listing/013v1332/1-bhk-house-for-rent">
                                        <i class="fa fa-map-marker"></i><?php echo $row['Location']?>
                                    </a>
                                </div>
                                <div class="location">
                                    <i class="fa fa-clone"></i><?php echo $row['Description']?>                            </div>
                                
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-bed"></i><?php echo $row['Number_of_Bathrooms']?>                                 </li>
                                    <li>
                                        <i class="flaticon-bathtub"></i> <?php echo $row['Number_of_Bedrooms']?>
                                    </li>
                                    <li>
                                        <i class="flaticon-square"></i> <?php echo $row['Space_Aprtement']?>                                </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>	 
                    <?php } ?>
                    
                </div>

                 
               
            </div>

            <div class="col-lg-8 col-md-12  btn-read">
                <button class="btn btn-withe btn-learn">شاهد المزيد</button>
            </div>
        </div>
    </div>
	
		<div class="clearfix"></div>
<!--<div class="container">
	<div class="col-sm-12 text-center" style="margin:20px 0">
		<a href="" target="_blank">
			<img src="admin/uploads/google/" style="margin:auto;" class="img-responsive">
		</a>
	</div>
</div>
<div class="clearfix"></div>-->
	
	
	<div class="featured-properties content-area-9">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
            <p>Find Your Properties In Your City</p>
        </div>

        <div class="slick-slider-area">
            <div class="row slick-carousel slick-initialized slick-slider" data-slick="{&quot;slidesToShow&quot;: 4, &quot;responsive&quot;:[{&quot;breakpoint&quot;: 1024,&quot;settings&quot;:{&quot;slidesToShow&quot;: 2}}, {&quot;breakpoint&quot;: 768,&quot;settings&quot;:{&quot;slidesToShow&quot;: 1}}]}"><div class="slick-list draggable" style="padding: 0px;"><div class="slick-track" style="opacity: 1; width: 285px; transform: translate3d(428px, 0px, 0px);"><div class="slick-slide slick-current slick-center" data-slick-index="0" aria-hidden="true" style="width: 285px;"><div><div class="slick-slide-item" style="width: 100%; display: inline-block;">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="http://thavasu.com/demo/property-listing/listing/P0LF9048/arihant-arshiya" class="property-img" tabindex="-1">
                                <div class="listing-badges">
                                    <span class="featured">Featured</span>
                                </div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        $1000                                    </p>
                                    
                                </div>
                                <img class="d-block w-100" src="image/img_section/sec3.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="http://thavasu.com/demo/property-listing/listing/P0LF9048/arihant-arshiya" tabindex="-1">Arihant Arshiya</a>
                            </h1>
                            <div class="location">
                                <a href="http://thavasu.com/demo/property-listing/listing/P0LF9048/arihant-arshiya" tabindex="-1">
                                    <i class="fa fa-map-marker"></i>Chromepet,
                                </a>
                            </div>
							<div class="location">
                                
                                    <i class="fa fa-clone"></i>Nestled am...                                
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i>2                                </li>
                                <li>
                                    <i class="flaticon-bathtub"></i> 2                                </li>
                                <li>
                                    <i class="flaticon-transform"></i> 1000                                </li>
                              
                            </ul>
                        </div>
                        <div class="footer clearfix">
                             
                        </div> 
                    </div>
				  </div></div></div></div></div></div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
	
</div>


<!--<div class="clearfix"></div>
<div class="container">
	<div class="col-sm-12 text-center">
		<a href="https://www.google.com" target="_blank">
			<img src="image/img_logo/pub.jpg" style="margin:auto;" class="img-responsive">
		</a>
	</div>
</div>
<div class="clearfix"></div>-->


<!-- Footer start -->
<?php include "../include/template/footer.php" ?>
<!-- Footer end -->

<!-- Full Page Search -->
 
<?php include "../include/template/script.php" ?>