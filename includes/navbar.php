<header class="main-header fixed-top">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="item active">
      <img style="width:100%"
        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/07/banner/1200x44-1200x44-7.png"
        alt="First slide">
    </div>
    <div class="item">
      <img style="width:100%"
        src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/08/banner/topbar-desk-1200x44-2.png"
        alt="Second slide">
    </div>

    <div class="item">
      <img style="width:100%"
        src=" https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/07/banner/Lap-1200-44-1200x44-1.png"
        alt="Second slide">
    </div>
  </div>
 
</div>
   
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.html" class="navbar-brand text-black" style="display: flex; align-items: center;">
            <img class="ny xin"src="https://cdn.haitrieu.com/wp-content/uploads/2021/11/Logo-The-Gioi-Di-Dong-MWG.png" alt="Logo" style="height: 30px; margin-right: 10px;"> 
            <strong><i>THẾ GIỚI DI ĐỘNG</i></strong> 
        </a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>


      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.html">TRANG CHỦ</a></li>
          <li><a href="#">CHÚNG TÔI</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">DANH MỤC <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <?php
             
                $conn = $pdo->open();
                try{
                  $stmt = $conn->prepare("SELECT * FROM category");
                  $stmt->execute();
                  foreach($stmt as $row){
                    echo "
                      <li><a href='category/".$row['cat_slug'].".html'>".$row['name']."</a></li>
                    ";                  
                  }
                }
                catch(PDOException $e){
                  echo "There is some problem in connection: " . $e->getMessage();
                }

                $pdo->close();

              ?>
            </ul>
          </li>
        </ul>
        <form method="POST" class="navbar-form navbar-left" action="search.html">
            <div class="search-wrapper">
                <input type="text" class="search-input" id="navbar-search-input" name="keyword" placeholder="Bạn tìm gì?..." autocomplete="off" maxlength="100">
                <button class="search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-shopping-cart"></i>
              <span class="label label-success cart_count"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
              <li>
                <ul class="menu" id="cart_menu">
                </ul>
              </li>
              <li class="footer"><a href="cart_view.html">Go to Cart</a></li>
            </ul>
          </li>
          <?php
            if(isset($_SESSION['user'])){
              $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
              echo '
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="'.$image.'" class="user-image" alt="User Image">
                    <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="'.$image.'" class="img-circle" alt="User Image">

                      <p>
                        '.$user['firstname'].' '.$user['lastname'].'
                        <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                      </p>
                    </li>
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="profile.html" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="logout.html" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
              ';
            }
            else{
              echo "
                <li><a href='login.html'>ĐĂNG NHẬP</a></li>
                <li><a href='signup.html'>ĐĂNG KÍ</a></li>
              ";
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
</header>
<style>
    .skin-blue .main-header .navbar {
    background-color: #d0cd2b;
    
}
.skin-blue .main-header .navbar .nav>li>a {
    color: #000;
}
.search-wrapper {
    position: relative;
    display: inline-block;
}
#navbar-search-input {
    width: 250px;
}
.search-input {
    width: 550px; 
    height: 40px; 
    padding-right: 40px; /* khoảng cách từ viền phải của ô input tới chữ cuối cùng */
    border: none; 
    outline: none; 
    border-radius: 4px;
}

.search-button {
    position: absolute;
    right: 5px; 
    top: 50%; 
    transform: translateY(-50%); 
    background: none; 
    border: none; 
    font-size: 14px; 
    cursor: pointer; 
    border-radius: 4px;
}
.main-header{
    display:block;
    position:fixed;
    width: 100%;
}
}
</style>