<?php include 'includes/session.php'; ?>
<?php
	$conn = $pdo->open();

	$slug = $_GET['product'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, products.name AS prodname, category.name AS catname, products.id AS prodid FROM products LEFT JOIN category ON category.id=products.category_id WHERE slug = :slug");
	    $stmt->execute(['slug' => $slug]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	//page view
	$now = date('Y-m-d');
	if($product['date_view'] == $now){
		$stmt = $conn->prepare("UPDATE products SET counter=counter+1 WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid']]);
	}
	else{
		$stmt = $conn->prepare("UPDATE products SET counter=1, date_view=:now WHERE id=:id");
		$stmt->execute(['id'=>$product['prodid'], 'now'=>$now]);
	}
?>

<!DOCTYPE html>
<html lang="vi">
<!-- Header -->
<head>
    <base href="http://www.itlearngroup.click/"/>
  	<meta charset="utf-8">
  	<title><?php echo $product['prodname']; ?></title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
  	
    <meta name="description" content="<?php echo $product['share']; ?>"/>
    <meta name="keywords" content="<?php echo $product['catname']; ?>"/>
    <meta name="author" content="LearnIT_Group"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    
    <meta property="og:title" content="<?php echo $product['prodname']; ?>"/>
    <meta property="og:description" content="<?php echo $product['share']; ?>"/>
    <meta property="og:image" content="http://www.itlearngroup.click/images/<?php echo $product['photo']; ?>"/>
    <meta property="og:url" content="http://www.itlearngroup.click/product/<?php echo $product['slug']; ?>.html"/>
    <meta property="og:type" content="product"/>
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" >
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

  	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  	<!-- Custom CSS -->
    <style type="text/css">
    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px){ 
      #navbar-search-input{ 
        width: 60px; 
      }
      #navbar-search-input:focus{ 
        width: 100px; 
      }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px){ 
      #navbar-search-input{ 
        width: 150px; 
      }
      #navbar-search-input:focus{ 
        width: 250px; 
      } 
    }

    .word-wrap{
      overflow-wrap: break-word;
    }
    .prod-body{
      height:300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    .register-box{
      margin-top:20px;
    }

    #trending{
      list-style: none;
      padding:10px 5px 10px 15px;
    }
    #trending li {
      padding-left: 1.3em;
    }
    #trending li:before {
      content: "\f046";
      font-family: FontAwesome;
      display: inline-block;
      margin-left: -1.3em; 
      width: 1.3em;
    }

    /*Magnify*/
    .magnify > .magnify-lens {
      width: 100px;
      height: 100px;
    }

    </style>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-16D1SWJSY2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-16D1SWJSY2');
    </script>
</head>






<body class="hold-transition skin-blue layout-top-nav">
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
	<?php include 'includes/navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>


<section class="wrapper">
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img class="img-hover-zoom" src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" alt="<?php echo $product['prodname']; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline" id="productForm">
		            			<div class="form-group" style="margin-bottom: 50p">
			            			<div class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
			            			<button type="submit" class=" bb button "><i class="fa fa-shopping-cart"></i> Thêm vào giỏ </button>
			            		</div>
			            		
			            		<?php include 'includes/style_share.php'; ?>
                                <div class="fb-share-button" data-href="" data-layout="button" data-size="large" style="padding-top: 30px; padding-left: 100px"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header" style="text-align: center;"><strong><?php echo $product['prodname']; ?></strong></h1>
		            		<h3><b><?php echo number_format($product['price']); ?> VNĐ</b></h3>
		            		<p><b>Danh mục:</b> <a href="category/<?php echo $product['cat_slug']; ?>.html"><?php echo $product['catname']; ?></a></p>
		            		<p><b>Mô tả sản phẩm:</b></p>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
		            </div>
		            <br>
				    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        	
	        </div>
	        
	      </section>
	    </div>
	  </div>
	  
	
  	<?php $pdo->close(); ?>
  	<?php include 'includes/footer.php'; ?>
</section>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>
<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>
<?php include 'includes/livechat.php'; ?>
<style>
    .img-hover-zoom {
    border: solid 5px white;
  border-radius: 10px;
  background: #f5f5f5;
  box-shadow: 0 30px 20px -20px rgba(0,0,0,0.3);
  box-sizing: border-box;
}
.img-hover-zoom {
 padding: 30px;
transform: scale(1);
transition: all 0.5s;
 }
 .img-hover-zoom:hover {
transform: scale(1.1);
 }

body:before{
  content:'';
  height:100%;
  display:block;
  vertical-align:middle;
}
.bb{
  background:yellow;
  color:black;
  border:none;
  position:relative;
  height:50px;
  font-size:1.3em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
 .bb:hover{
  background:#fff;
  color:yellow;
}
.bb:before,.bb:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:1.5px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
.bb:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.bb:hover:before,.bb:hover:after{
  width:100%;
  transition:800ms ease all;
}
</style>
</body>
</html>