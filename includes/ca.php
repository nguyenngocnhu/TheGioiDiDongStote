<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Products / Services / Portfolios With Image Carousels / Sliders</title>

<!--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
-->

<!--
<link rel="stylesheet" href="http://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
-->

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

<!--
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
-->

<link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" />

<link rel="stylesheet" href="./style.css">

<style type="text/css">

.img-responsive {
  width: 100% !important;
  height: 250px !important;
}  

.item-details {
  width: 100% !important;
  height: 150px !important;  
}

html, body, h5, a, span {
   font-family: 'Roboto', sans-serif !important;
   font-weight: 500 !important;
}

</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" type="text/css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</head>
<body>
<!-- partial:index.partial.html -->
<!-- TESTIMONIALS -->
<section class="testimonials">
	<div class="container">
      <div class="row">
         <h1 class="text-center"><b>CHUYÊN TRANG THƯƠNG HIỆU</b></h1> 
         <br>
         <br>
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
           
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class=="img-responsive" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/03/banner/chuyentrang-HP-390x210-1.png" alt="">
                <div class="item-details">
									<h5>CHUYÊN TRANG LAPTOP<span>$NN</span></h5>
									<p>Mua ngay / Giảm sốc</p>
								</div>
              </div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/03/banner/chuyen-trang-lenovo-390x210.png" alt="yyyy">
                <div class="item-details">
											<h5>CHUYÊN TRANG LAPTOP<span>$NN</span></h5>
									<p>Mua ngay / Giảm sốc</p>
								</div>
              </div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/banner/chuyentrangsamsung-390-210-390x210.png" alt="hhhh">
                <div class="item-details">
										<h5>CHUYÊN TRANG SAMSUNG<span>$NN</span></h5>
									<p>Mua ngay / Giảm sốc</p>
								</div>
              </div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-responsive" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/05/banner/chuyentrang-APPLEDT-390x210.png" alt="hhhhh">
                <div class="item-details">
									<h5>CHUYÊN TRANG NHÀ TÁO<span>$NN</span></h5>
									<p>Mua ngay / Giảm sốc</p>
								</div>
              </div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
            <!--TESTIMONIAL 6 -->
          
            <!--END OF TESTIMONIAL 6 -->            
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

<!--

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>

-->

  <script  src="./script.js"></script>
<style>
  .testimonials {
  background-color:lemonchiffon;
  position: relative;
  padding-top: 80px;
}
.testimonials:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 30%;
  background-color: yellow;
}

#customers-testimonials .item-details {
  background-color: gold;
  color: black;
  padding: 20px 10px;
  text-align: left;
}
#customers-testimonials .item-details h5 {
  margin: 0 0 15px;
  font-size: 18px;
  line-height: 18px;
}
#customers-testimonials .item-details h5 span {
  color: red;
  float: right;
  padding-right: 20px;
}
#customers-testimonials .item-details p {
  font-size: 14px;
}
#customers-testimonials .item {
  text-align: center;
  margin-bottom: 80px;
}

.owl-carousel .owl-nav [class*=owl-] {
  transition: all 0.1s ease;
}

.owl-carousel .owl-nav [class*=owl-].disabled:hover {
  background-color: gold;
}

.owl-carousel {
  position: relative;
}

.owl-carousel .owl-next,
.owl-carousel .owl-prev {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  position: absolute;
  top: 30%;
  font-size: 20px;
  color: black;
  border: 1px solid yellow;
  text-align: center;
}

.owl-carousel .owl-prev {
  left: -70px;
}

.owl-carousel .owl-next {
  right: -70px;
}



style attribute {
    font-size: 30px;
    color: #f9ff00;
}

</style>
<script>
  jQuery(document).ready(function($) {
"use strict";
$('#customers-testimonials').owlCarousel( {
		loop: true,
		center: true,
		items: 3,
		margin: 30,
		autoplay: true,
		dots:true,
    nav:true,
		autoplayTimeout: 5000,
    autoplayHoverPause:true,
    stopOnHover:true,
		smartSpeed: 850,
  	navText: ['<i class="fa fa-arrow-alt-circle-left" style="font-size:30px;color:blue"></i>','<i class="fa fa-arrow-alt-circle-right" style="font-size:30px;color:blue"></i>'],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1170: {
				items: 3
			}
		}
	});
});
</script>
</body>
</html>
