<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <title>Document</title>
</head>
<body>
  <div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Xem nhiều nhất hôm nay</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product/".$row['slug'].".html"."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<div class="row">
	
</div>

<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Follow us on Social Media</b></h3>
	  	</div>
	  	<div class='box-body'>
	  	<a class="btn btn-social-icon btn-facebook"><i class="fab fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter"><i class="fab fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-instagram"><i class="fab fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-google"><i class="fab fa-google-plus"></i></a>
	    	<a class="btn btn-social-icon btn-linkedin"><i class="fab fa-linkedin"></i></a>
	  	</div>
	</div>
</div>

</body>
</html>
