<?php
session_start();
if (!isset($_SESSION['user']))
    $login = "نسحيل الدخول";
else
    $login = $_SESSION['user'];
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    $error1 = "Worng passowrd or user name";
}
unset($_SESSION['error']);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">
    <title>منصة دوائي</title>
</head>

<body dir="rtl">
    <header class="continer">
        <h1>منصة<span> دوائي</span></h1>
        <nav>
            <ul>
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="search.php">صفحة البحث</a></li>
                <li><a href="about.php">عن المنصة</a></li>
                <?php

                if (isset($_SESSION['grant']) && $_SESSION['grant'] == 'admin')
                    echo '  <li><a href="admin.php"> اعدادت الموقع</a></li>';

                if (isset($_SESSION['user']))
                    echo "
        <li><form action='' method='post'>
            <button class='btn' name='exit' style='
             margin: -2px 5px 10px 0;
             background:#333;
             border-radius:10%;
             padding:4px 40px; 
             color:#ffe;
            '> Exit </button>            
            </form></li>

            <li><a href='about.php' class='btn' style='
             padding:10px; 
             background:#fff;
             border-radius:80%;
            border:2px solid #0bd386;
             color:#333;'>$login</a></li>";
                else
                    echo "<li><a href='login.php'class='btn'>$login </a></li>"; ?>
            </ul>
        </nav>
    </header>
  <section class="wellcome continer" style="background: url(photo/login.jpg);">
    <h2> مرحباَ بكم في منصة <span> دوائي</span> <br> </h2>
    <p>منصة تساعدك للوصول للادوية بشكل بسهولة من خلال البحث عن الدواء<br> في اقرب صيدلية
    </p>
    <input type='text' size='100PX' name='serch' id='serch' class='' placeholder='Search here' />
    <?php
      include('con_string.php');
      $add = $con->query("select *  from loc");
    echo" <select 
   style='
   position: absolute;
   top: 75%;
   left:30%;
   padding: 10px 200px;
   background:#0cb8b6;
   border:none;
   '
    class='common-btn' name='loc' id='loc'>";
      while ($a = $add->fetch_array()) {
        echo "
       
        <option value='$a[loc_name]'>$a[loc_name]</option>
         
        ";
      }
      ?> 
       </select> 

  </section>
  </div>
  <h2 class="title">Feautered Product</h2>
  <center>
    <div class="row">
      <div class="col-6">
        <img src="images/product-1.jpg" alt="red">
        <h4>Red T-Shirt</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p> $ 50.00</p>
      </div>
      <div class="col-6">
        <img src="images/product-2.jpg" alt="red">
        <h4>Black Shose</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
        <p> $ 50.00</p>
      </div>
      <div class="col-6">
        <img src="images/product-3.jpg" alt="red">
        <h4>Gray Shoes</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>

        <p> $ 50.00</p>
      </div>
      <div class="col-6">
        <img src="images/product-3.jpg" alt="red">
        <h4>Gray Shoes</h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
        </div>

        <p> $ 50.00</p>
      </div>
      <?php
      include('con_string.php');
      $add = $con->query("select *  from drugs,	pharmasy,phrma_drug	 where drugs.no=phrma_drug	.d_no and pharmasy.no =phrma_drug	.p_no");
      echo "<div class='row'>";
      while ($a = $add->fetch_array()) {
        echo "
      <div id='tbody' class='col-4'>
      <h4>$a[drug_name]</h4>
      <p>$a[loc]</p>
      <p>$a[info]</p>
    </div>
";
      }
      ?>
      <script>
        $(document).ready(function() {
          $("#serch").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbody h4").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
      <!-----Footer------>
    </div>
    </div>
  </center>
  
    
    <!-----Footer------>
       
        <!-----Footer------>
        <section id="footer">
            <div class="continer footer-row">
                <hr>
                <div class="footer-le-col">
                    <div class="footer-title">

                        <div class="link-title">
                            <h4>التواصل</h4>
                            <small>
                                <a href="gmail.com" class="w">Gmail</a>
                            </small><br>
                            <small>
                                <a href="instgram.com" class="w">Insgram</a>
                            </small><br>
                            <small>
                                <a href="facebook.com" class="w">Facebook </a>
                            </small>
                        </div>
                        <div class="link-title">
                            <h4>عن المنصة</h4>
                            <small>
                                <a href="index.php #three" class="w">مميزات المنصة</a>
                            </small><br>
                            <small>
                                <a href="index.php #brand" class="w">شركائنا</a>
                            </small><br>
                            <small>
                                <a href="index.php #contact" class="w">تواصل معنا</a>
                            </small>
                        </div>
                        <div class="link-title">
                            <h4>تصفح</h4>
                            <small>
                                <a href="index.php" class="w">الرئيسية</a>
                            </small><br>
                            <small>
                                <a href="article.php" class="w">المقالات</a>
                            </small><br>
                            <small>
                                <a href="about.php" class="w">عن المنصة</a>
                            </small>
                        </div>
                    </div>
                </div>
                <div class="footer-re-col">
                    <div class="footer-info">
                        <div class="copyright">
                            <small>Support@dwai.com</small><br>
                            <small>Copyright 2022<br>Mohammed Al-srori </small>
                        </div>
                        <div class="footer-logo">
                            <h1>منصة<span> دوائي</span></h1><select class="common-btn">
                                <option value="none" hidden>اللغة</option>
                                <option value="Eng">انجليزي</option>
                                <option value="Ar">عربي</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----/Footer------>
        <div class="social-icon">
            <img src="images/facebook.png" alt="facebook">
            <img src="images/instagram.png" alt="instagram">
            <img src="images/twitter.png" alt="twitter">
        </div>
</body>

</html>

<?php
if (isset($_POST['exit'])) {
  session_destroy();
  header("location:search.php");
}
