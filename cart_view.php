<?php
	include 'includes/session.php';

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM cart LEFT JOIN products on products.id=cart.product_id WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$user['id']]);

		$total = 0;
		foreach($stmt as $row){
			$subtotal = $row['price'] * $row['quantity'];
			$total += $subtotal;
		}

		$pdo->close();

	
	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 <br>
	  <br> <br> <br> <br>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<h1 class="page-header">GIỎ HÀNG CỦA BẠN</h1>
	        		<div class="box box-solid">
	        			<div class="box-body">
		        		<table class="table table-bordered">
		        			<thead>
		        				<th></th>
		        				<th>Hình ảnh</th>
		        				<th>Tên</th>
		        				<th>Giá</th>
		        				<th width="20%">Số lượng</th>
		        				<th>Tổng cộng</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
	        			</div>
	        		</div>
				    <div><b>VUI LÒNG CHỌN PHƯƠNG THỨC THANH TOÁN</b></div>
	        		<?php
	        			if(isset($_SESSION['user'])){
	        			    echo "
	        				    <form action='congthanhtoan.php' method='post'>
    						        <input type='hidden' name='total' value='".$total."'>
    						        <button class='nyy' name='redirect' id='redirect'>
    						            <img src='https://cdn.haitrieu.com/wp-content/uploads/2022/10/Icon-VNPAY-QR.png' width='24' height='24' />
    						            Ví điện tử 
    						            <span style='font-weight: bold'>
    						            <span style='color:red'>VN</span><span style='color:blue'>PAY</span>
    						            </span>
						            </button>
					            </form>
<span></span>
	        					<div id='paypal-button'></div>
	        				";
	        			}
	        			else{
	        				echo "
	        					<h4>You need to <a href='login.html'>Login</a> to checkout.</h4>
	        				";
	        			}
	        		?>
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
</div>

<?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		}
	});
}
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

	client: {
        //sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
        sandbox:    'Aecl1QNg7nt27e5cuvyQUN6AA4RTwA0azFQDWWh0faFQFC12tdNItmYniuVgiv-Bp8QJi35Mcn4QsVft',
    },

    commit: true, // Show a 'Pay Now' button

    style: {
    	color: 'gold',
    	size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: total, 
                        	currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
			window.location = 'sales.php?pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>
<style>
	.nyy{
	    background-color: white;
        color: black;
          padding: 5px 10px 20px 10px;
          border: none;
          border-radius: 24px;
          font-size: 16px;
          cursor: pointer;
          height: 32px;
	}
</style>
</body>
</html>