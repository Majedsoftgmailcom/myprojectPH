<?php
session_start();
if (!isset($_SESSION['user']))
    $login = "نسحيل الدخول";
else
    $login = $_SESSION['user'];

if (isset($_SESSION['grant']))
    echo "<script> alert('create ')</script>";
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
                <li><a href="index.html">الرئيسية</a></li>
                <li><a href="search.php">صفحة البحث</a></li>
                <li><a href="about.html">عن المنصة</a></li>
                <?php
                if (isset($_SESSION['user']))
                    echo "
        <li><form action='' method='post'>
            <button class='btn' name='exit' style='
             margin: 2px 5px;
             background:#333;
             border-radius:3%;
             padding:4px 30px; 
             color:#ffe;
            '> Exit </button>            
            </form></li>

            <li><a href='about.html' class='btn' style='
             padding:7px; 
             background:#fff;
             border-radius:200%;
             border:2px solid #0bd386;
             color:#333;'>$login</a></li>";
                else
                    echo "<li><a href='login.php'class='btn'>$login </a></li>"; ?>
            </ul>
        </nav>
    </header>
            <?php
            include('con_string.php');
            $add = $con->query("select *  from drugs where no =1");
            $a=$add->fetch_array();
    echo '<div class="small-continer single-proudect">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery-1.jpg" alt="gallery-1" width="100%" id="ProudectImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images/gallery-1.jpg" alt="red" width="100px" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-2.jpg" alt="red" width="100px" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-3.jpg" alt="red" width="100px" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="images/gallery-4.jpg" alt="red" width="100px" class="small-img">
                    </div>
                    </div>
                </div>
    ';
            echo "
            <div class='col-2'>
                <p>الرئيسية / الادوية</p>
                <h2 style='color:#0b6ad3'>$a[drug_name]</h2>
                <h4 style='font-size:15pt;color:#14315a'>$a[price] ر.ل </h4>
                <br>
                <h3>تفاصيل الدواء  <i class='fa fa-indent'></i></h3>
                <br>
                <hr>
                <p style='font-size:small'>$a[info]<a>read more</a> </p>
            </div>
            </div>
        
    </div>";
            ?>
            <!----title---->
            <div class='continer ">
                <div class="relatted-proudect">
                    <div class="small-continer">
                        <div class="row row-2">
                            <h2>الاعلئ تقييماً</h2>
                            <a href="proudoct.php">عرض المزيد</a>
                        </div>
                    </div>
                    <!----product---->
                    <div class="small-continer ">

                        <?php
                        include('con_string.php');
                        $add = $con->query("select *  from drugs");
                        echo '<div class="row">';
                        while ($a = $add->fetch_array()) {
                            echo "
                    <div class='col-6'>
                     <a href='prodect detaills.html'><img src='images/product-1.jpg' alt='red'></a>
                        <h4>$a[drug_name]</h4>
                        <h3>$a[price]ر.ل</h3>
                        <div class='rating'>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star'></i>
                            <i class='fa fa-star-o'></i>
                        </div>
                        </div>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!----brands---->
        <div class="brands">
            <div class="small-continer">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-coca-cola.png" alt="logo-coca-cola">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="logo-godrej">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-oppo.png" alt="logo-oppo">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-paypal.png" alt="logo-paypal">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-philips.png" alt="logo-philips">
                    </div>
                </div>
            </div>
        </div>
        <script>
            var MenuItem = document.getElementById("menu");
            var ProudectImg = document.getElementById("ProudectImg");
            var SmallImg = document.getElementsByClassName("small-img");
            SmallImg[0].onclick = function() {
                ProudectImg.src = SmallImg[0].src;
            }

            SmallImg[1].onclick = function() {
                ProudectImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function() {
                ProudectImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function() {
                ProudectImg.src = SmallImg[3].src;
            }

            MenuItem.style.maxHeight = "0px";

            function menuToggle() {
                if (MenuItem.style.maxHeight == "0px") {
                    MenuItem.style.maxHeight = "200px";
                } else {
                    MenuItem.style.maxHeight = "0px";
                }
            }
        </script>

        <!-----Footer------>
        <section id="footer">
            <div class="continer footer-row">
                <hr>
                <div class="footer-le-col">
                    <div class="footer-title">

                        <div class="link-title">
                            <h4>التواصل</h4>
                            <small>
                                <a href="index.html" class="w">Gmail</a>
                            </small><br>
                            <small>
                                <a href="index.html" class="w">Insgram</a>
                            </small><br>
                            <small>
                                <a href="about.html" class="w">Facebook </a>
                            </small>
                        </div>
                        <div class="link-title">
                            <h4>عن المنصة</h4>
                            <small>
                                <a href="index.html" class="w">مميزات المنصة</a>
                            </small><br>
                            <small>
                                <a href="index.html" class="w">شركائنا</a>
                            </small><br>
                            <small>
                                <a href="about.html" class="w">خدماتنا</a>
                            </small>
                        </div>
                        <div class="link-title">
                            <h4>تصفح</h4>
                            <small>
                                <a href="index.html" class="w">الرئيسية</a>
                            </small><br>
                            <small>
                                <a href="index.html" class="w">الرئيسية</a>
                            </small><br>
                            <small>
                                <a href="about.html" class="w">عن المنصة</a>
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
    header("Location:index.php");
}
?>

</html>
</body>