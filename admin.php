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

    <div class="">
        <center>
            <form method="POST">
                <img src="photo/set.ico" alt="noooooo " height="20px" width="10%" class="w3-image">
                <div class="w3-hover-blue" style="background-color: #78b3e4; width: 50%;height: 2%;font-weight:bold">
                    <label>اسم الدواء </label><br>
                    <input type=" text" name="NAME_D" id="NAME_D" class="w3-input" style=" width: 95%;" readonly /><br>
                    <label>اسم الصيدلية</label><br>
                    <input type=" text" name="name_P" id="name_P" class="w3-input" style=" width: 95%;" /><br>
                    <label> العنوان</label><br>
                    <input type=" text" name="LOC" id="LOC" class="w3-input" style=" width: 95%;" /><br>
                    <button name="add" id="add" class="btn">اظافة</button>
                    <button name="edit" id="edit" class="btn">تعديل</button>
                    <button name="del" id="del" class="btn">حدف</button>
                    <button name="save" id="save" class="btn">حفظ التغييرات</button>
                </div>
                <img src="photo/5.ico" alt="noooooo " height="100PX" width="100PX">
                <input type="text" name="serch" id="serch" placeholder="Search here" 
                style="top:70%;" />
                <table id="table" class="w3-table-all">
                    <tr class="tablehead" style="background-color:navy;color: white;">
                        <td style='text-align: center;'>اسم الدواء</td>
                        <td style='text-align: center;'>اسم الصيدلية </th>
                        <td style="text-align: center;">العنوان </td>
                    </tr>
                    <tbody id="tbody">
                        <?php
                        include('con_string.php');
                        $add = $con->query("select *  from drugs,	pharmasy,phrma_drug where drugs.no=phrma_drug.d_no and pharmasy.no =phrma_drug.p_no");
                        while ($a = $add->fetch_array()) {
                            echo "<tr class=' w3-hover-blue'>";
                            echo "<td style='text-align: center;'>" . $a['drug_name'];
                            echo "<td style='text-align: center;' >" . $a['loc'];

                            echo "<tr>";
                        }
                        if (!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['id'])) {
                            $n = $_POST['name'];
                            $pass = $_POST['pass'];
                            $id = $_POST['id'];
                        }
                        //امر التعديل
                        if (isset($_POST['edit'])) {
                            if (!empty($_POST['name'] && $_POST['pass'])) {
                                $query = "update tabuser set username='$n',pass='$pass' where id='$id'";
                                if ($con->query($query) == TRUE) {
                                    echo "تمت تعديل سجل ";
                                } else {
                                    echo "خطاء: " . $query . "<br>" . $con->error;
                                }
                            } else
                                echo "يجب تحديد السجل المراد تعديلة   ";
                        }

                        //لأظافة شخص جديد
                        if (isset($_POST['add'])) {
                            if (!empty($_POST['name'] && $_POST['pass'])) {
                                $query = "INSERT INTO tabuser(username,pass) VALUES ('$n','$pass')";
                                if ($con->query($query) == TRUE) {
                                    echo "تمت أظافة سجل جديد";
                                } else {
                                    echo "خطاء: " . $query . "<br>" . $con->error;
                                }
                            } else
                                echo "يجب تعبئة الحقول   ";
                        }

                        //امر المسح
                        if (isset($_POST['del'])) {
                            if (!empty($_POST['id'])) {
                                $id = $_POST['id'];
                                $query = "delete from tabuser where id='$id'";
                                if ($con->query($query) == TRUE) {
                                    echo "تم حف سجل بنجاح";
                                } else
                                    echo "خطاء: " . $query . "<br>" . $con->error;
                            } else
                                echo "يجب تحديد الحقل الي تريد مسحه";
                        }
                        //برمجة زر الحفظ 
                        if (isset($_POST['save'])) {
                            $sql_fil = "tab_backup.csv";
                            $table_name = "tabuser";
                            $sql = "commit ";
                            $result = $con->query($sql);
                            if (!$result) {
                                die('لم يتم الحفظ: ' . $con->error);
                            } else {
                                echo "تم الحفظ ";
                                $con->close();
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </center>
        </form>
        <script>
            var table = document.getElementById('table');

            for (var i = 1; i < table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById("NAME_D").value = this.cells[0].innerHTML;
                    document.getElementById("name_P").value = this.cells[1].innerHTML;
                    document.getElementById("LOC").value = this.cells[2].innerHTML;

                };
            }
            $(document).ready(function() {
                $("#serch").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#tbody tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
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
        <div class="alert alert-danger" id="error" style="width: 25%;margin: auto;display: none;"></div>
        <div style="position: fixed;;top:0;background: rgba(0,0,0,0.3); width: 100%;height: 100%;z-index: -1"></div>

</body>

</html>