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

    <section id="two" class="continer wrapper style1">
        <h2 class="title">مقالات</h2>

        <?php
        require('con_string.php');
        $d = date("y/m/d");
      
        $i = 1;
        $query = "SELECT * FROM article_table";
        $result = $con->query($query);
        echo '   <div class="row continer">';
      foreach ($result as $a) {
        echo ' <article class=" col-7">
                <span class="image"><img src="img/1.jpg" class="img" alt=""/></span>
                <div class="content">';
        echo "<h3>$a[title]</h3>
     <p style='
        line-height:24px;
	    overflow: hidden;
    	height: 100px;                    
' class='text_hide'>$a[article]</p> 
<h5>$a[date]</h5> 
<form action='article_detils.php' method='post'>   
<input type='text' name='serch' id='serch' style='display:none; '> 
 <input type='submit' value='اكمل القراءة' id='sub'name='$a[id]' />
 <input type='submit' value='$a[id]' id='sub1'name='$a[id]' />
 </form> 
</div>
</article>
";
}
        ?>
        </div>
        </section>
        </section>
    
    
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
        
        <script>
   
            var t = document.getElementById('sub1');

           
               
                    document.getElementById("serch").value =t.value;
                   

             
       
        </script>
</body>

</html>
<?php
if (isset($_POST['exit'])) {
    header("Location:");
    session_destroy();
}

?>