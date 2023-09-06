<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/7e4fd77c55610a1fdb6e824db/51e06a9e0bddeadb3290ebea6.js");</script>
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>

	  <div class="content-wrapper">
	      	  <img class="na" src="https://scontent.fsgn5-9.fna.fbcdn.net/v/t1.6435-9/173060048_4172533122793824_7142463652885348382_n.png?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=olsQ_TXS8_UAX-BxmVx&_nc_ht=scontent.fsgn5-9.fna&oh=00_AfA6k1fihA6DOWA-spQBNxkioRvmzQZrWrJF9gCTaEN8JQ&oe=64F524F6" alt="Sakura" />
 
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                 <div class="item active">
		                    <img src="https://cdn.tgdd.vn/Files/2016/05/23/832119/e490db11c87b35ce45cf7296ac60b16a1169c9208ac8c8a1f5pimgpsh_fullsize_distr.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="https://cdn.tgdd.vn/Files/2015/04/25/635920/banner-home.jpg" alt="Second slide">
		                  </div>
		                 
		                  <div class="item">
		                    <img src=" https://cdn.tgdd.vn/Files/2016/04/28/821583/tgdd-mung-30thang4-800-300.jpg" alt="Second slide">
		                  </div>
		                </div>
		               
		            </div>
		            <div class="qk">
		                <br>
		                <br>
		             <h2 class="text-center">SẢN PHẨM BÁN CHẠY NHẤT</h2>
		            
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid' style='text-align: center;'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product/".$row['slug'].".html"."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>".number_format($row['price'])." VNĐ</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
		</div>
		<img class="na"src="https://cdn.tgdd.vn/2023/08/banner/1200x150-tgdd-1200x150-2.png" alt="Sakura" />

		         <div id="mc_embed_shell">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
  <style type="text/css">
        #mc_embed_signup{background:#fff; false;clear:left; font:14px Helvetica,Arial,sans-serif; width: 600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

  
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2f49b785a02fd69f129febf1b/f9e21550c21d38880ecc38d9c.js");</script>

<div id="mc_embed_shell">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-061523.css" rel="stylesheet" type="text/css">
  <style type="text/css">
        #mc_embed_signup{background:#fff; false;clear:left; font:14px Helvetica,Arial,sans-serif; width: 600px;}
        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" class="text-white">
    <form action="https://click.us21.list-manage.com/subscribe/post?u=2f49b785a02fd69f129febf1b&amp;id=639f7d3a5d&amp;f_id=004cd4e6f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
        <div id="mc_embed_signup_scroll"><h2>ĐĂNG KÝ NGAY ĐỂ NHẬN ƯU ĐÃI BẤT NGỜ!</h2>
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
            <div class="mc-field-group"><label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label><input type="email" name="EMAIL" class="required email text-black" id="mce-EMAIL" required="" value=""><span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span></div><div class="mc-field-group"><label for="mce-FNAME">Họ và tên <span class="asterisk">*</span></label><input type="text" name="FNAME" class="required text text-black" id="mce-FNAME" value="" required=""></div>
        <div id="mce-responses" class="clear foot">
            <div class="response" id="mce-error-response" style="display: none;"></div>
            <div class="response" id="mce-success-response" style="display: none;"></div>
        </div>
    <div aria-hidden="true" style="position: absolute; left: -5000px;">
        /* real people should not fill this in and expect good things - do not remove this or risk form bot signups */
        <input type="text" name="b_2f49b785a02fd69f129febf1b_639f7d3a5d" tabindex="-1" value="">
    </div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="button" value="Subscribe">
<p style="margin: 0px auto;"><a href="http://eepurl.com/ix5ALM" title="Mailchimp - email marketing made easy and fun"><span style="display: inline-block; background-color: transparent; border-radius: 4px;"><img class="refferal_badge" src="https://digitalasset.intuit.com/render/content/dam/intuit/mc-fe/en_us/images/intuit-mc-rewards-text-dark.svg" alt="Intuit Mailchimp" style="width: 220px; height: 40px; display: flex; padding: 2px 0px; justify-content: center; align-items: center;"></span></a></p>
            </div>
        </div>
</form>
</div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
</div>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
	        	</div>
	        	<div class="col-sm-3">
				<?php include 'includes/sidebar.php'; ?>

	        	</div>
	        </div>
	      </section>
	     
	    </div>
	    
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]=EMAIL;ftypes[0]=merge;,fnames[1]=FNAME;ftypes[1]=merge;,fnames[2]=LNAME;ftypes[2]=merge;,fnames[3]=ADDRESS;ftypes[3]=merge;,fnames[4]=PHONE;ftypes[4]=merge;,fnames[5]=BIRTHDAY;ftypes[5]=merge;false}(jQuery));var $mcj = jQuery.noConflict(true);</script></div>
	  </div>
  
</div>
<?php include 'includes/ca.php'; ?>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<?php include 'includes/livechat.php'; ?>





<style>
	ul.feed-list {
    list-style: none;
    margin: 0;
    padding: 0;
}

ul.feed-list li.feed-item {
    margin-bottom: 10px;
}

ul.feed-list li.feed-item a.feed-link {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

ul.feed-list li.feed-item span.feed-date {
    color: #777;
}

.na{

  width: 100%;
 
  object-fit: contain;
}
}
.content-wrapper {
    min-height: 100%;
    background-color: white;
   
}
.qk{

}
#mc_embed_signup{
   width:100%;
   background-color:black;
   padding-right:20px;
   border: 10px solid;
border-image-source: conic-gradient(red, orange, yellow, green, blue);
border-image-slice: 1;
color: white;

}
</style>

<script type="text/javascript" src="https://web.cmbliss.com/webtools/hotline/js/hotline.js"></script><script type="text/javascript">$("body").hotline({phone:"0986822596",p_bottom:true,bottom:0,p_left:true,left:0,bg_color:"#e60808",abg_color:"rgba(230, 8, 8, 0.7)",show_bar:true,position:"fixed",});</script>

</body>
</html>