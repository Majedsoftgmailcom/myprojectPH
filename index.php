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
    <section class="wellcome continer">
        <h2> مرحباَ بكم في منصة <span> دوائي</span> <br> </h2>
        <p>منصة تساعدك للوصول للادوية بسرعة و بسهولة من خلال البحث عن الدواء<br> في اقرب صيدلية
        </p>
        <?php
        if (!isset($_SESSION['user'])) {
            echo  "<a id='b1' class='btn signUp'>تسجيل الدخول</a>";
            echo "<a href='search.php' id='b2' class='btn'> البحث عن الادوية</a>";
        } else {
            echo '<a href="search.php" id="b1" class="btn n1" style="left:43%"> البحث عن الادوية</a>';
        }

        ?>
        <!--login form-->
        <div class="form-modal">
            <div class="modal-content">
                <div class="content-wrapper">
                    <div class="close"> + </div>
                    <img class="s-img" src="profile.png">
                    <form action="sign.php" method="post">
                        <input type="text" placeholder="Name" required name="user">
                        <input type="password" placeholder="Password" required name="pass"><?php
                                                                                            if (isset($_SESSION['error']))
                                                                                                echo "<small><a style='color:red'>$error1</a></small>";
                                                                                            ?>
                        <button class="submit btn3" name="login"> Login </button>
                        <button id="signup" name="signUp"> signup </button>
                    </form>
                </div>
            </div>
        </div>
        <script src="main.js"></script>

        <!--login form-->
    </section>
    <!-- Three -->
    <section id="three" class="continer">
        <h2 class="title">مميزات المنصة</h2>
        <div class="inner">
            <article>
                <div class="content">

                    <div class="icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <h3>البحث</h3>
                    <p>تساعدك منصة دوائي علئ البحث
                        عن اقرب مكان لك للعثور علئ الدواء
                        من المنطقةالقريبة منك
                    </p>
                </div>
            </article>
            <article>
                <div class="  content">
                    <div class="icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <h3>تقليل التكلفة</h3>
                    <p>من خلال المنصة سوف تتمكن من تقليل نطاق البحث عن الادوية مما سيساعدك للحصول علئ الدواء بأقل تكلفة
                    </p>
                </div>
            </article>
            <article>
                <div class="content">
                    <div class="icon">
                        <i class="fa fa-info"></i>
                    </div>
                    <h3>معلومات</h3>
                    <p>توفر لك المنصة معلومات عن الادوية وعن الصيدليات وعن الاسعار الخاصة بالادوية </p>
                </div>
            </article>
        </div>
    </section>

    <section id="two" class="continer wrapper style1">
        <h2 class="title">مقالات</h2>

        <?php
        $i =1;
        require('con_string.php');
        $sql="select id,max(date)as dt from article_table ";
        $res=$con->query($sql);
       foreach ($res as $r) {
          $date_ = $r['dt'];
      
        $query = "SELECT * FROM article_table WHERE date=$date_ and id=$r[id]";
    }
        $result = $con->query($query);
      foreach ($result as $a) {
         
     

        echo '   <div class="inner1 continer">
            <article class="feature left">
                <span class="image"><img src="img/1.jpg" class="img" alt=""/></span>
                <div class="content">';
        echo "<h2>$a[title]</h2>
     <p style='
        line-height:24px;
	    overflow: hidden;
    	height: 100px;                    
' class='text_hide'>$a[article]</p>   

<a href='article_detils.php' class='button alt'>اكمل القراءة</a>

</div>
</article>

";
}
 $i += 1;
        $query = "SELECT * FROM article_table WHERE  id= $i";
        $result = $con->query($query);
        $a = $result->fetch_array();
        echo "
            <article class='feature right'>
                <span class='image'><img src='photo/login.jpg' class='img' alt='' /></span>
                <div class='content'>
                    <h2>$a[title]</h2> 
                       <p style='
        line-height:24px;
	    overflow: hidden;
    	height: 100px;                    
' class='text_hide'>$a[article]</p>
<a href='article_detils.php' class='button alt'>اكمل القراءة</a>
</div>
            </article>
        </div>
        
        <a href='article.php' style='courser:pointer ;text-align:center;position:absolute; left:45%;font-size:xx-large' > 
        <p>اقراء المزيد</p>    
        <i class='fa fa-arrow-down'></i>

        </a>
        </section>
        </section>
        ";
        ?>
        <!-----Contact----->
        <section id="contact">
            <div class="continer contact-row">
                <div class="contact-re-col">
                    <img src="images/contact.png" alt="contact">
                </div>
                <div class="contact-le-col">
                    <h1 class="title">تواصل معنا </h1>
                    <form action="contact.php" method='post'>
                        <input class="input1" type="text" placeholder="الاسم" name="c_name">
                        <input type="email" class="input1" placeholder="الايميل" name="email">
                        <textarea name="masseage" id="" class="input1" cols="55" rows="10" name="comments" placeholder="أكتب تعليق "></textarea>
                        <div class="btn-box">
                            <button class="common-btn" name="send">ارسال</button>
                        </div>
                    </form>
                    <div class="line">
                        <span class="line-1"></span><br>
                        <span class="line-2"></span><br>
                        <span class="line-3"></span>

                    </div>
                </div>

            </div>

        </section>

        <!----testemonial--->
        <div class="testemonial">
            <div class="small-continer">
                <h2 class="title">التعليقات</h2>

                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <img src="images/user-1.png" alt="user-1">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus cumque sapiente nesciunt asperiores maiores! Ipsa minima repellendus mollitia voluptas explicabo? Totam placeat quis libero odit ipsa beatae, veritatis quo?</p>

                        <h3> Sara Ali</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>

                        <img src="images/user-3.png" alt="user-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus cumque sapiente nesciunt asperiores maiores! Ipsa minima repellendus mollitia voluptas explicabo? Totam placeat quis libero odit ipsa beatae, veritatis quo?</p>
                        <h3> loara shan</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                    <div class="col-3">

                        <i class="fa fa-quote-left"></i>
                        <img src="images/user-2.png" alt="user-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus cumque sapiente nesciunt asperiores maiores! Ipsa minima repellendus mollitia voluptas explicabo? Totam placeat quis libero odit ipsa beatae, veritatis quo?</p>
                        <h3> Ali Mohammed</h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----brands---->
        <div class="brands" id="brands">
            <div class="small-continer">
                <h2 class="title">شركائنا</h2>
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
        <!-----/Contact------>

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
                                <a href="#three" class="w">مميزات المنصة</a>
                            </small><br>
                            <small>
                                <a href="#brand" class="w">شركائنا</a>
                            </small><br>
                            <small>
                                <a href="#contact" class="w">تواصل معنا</a>
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
    header("Location:index.php");
    session_destroy();
}

?>