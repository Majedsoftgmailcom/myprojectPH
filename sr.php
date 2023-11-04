<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="stylesheet" type="text/css"  href="w3.css"/>
    <meta charset="utf-8" />
    <meta name="keywords" content="sport-rakwan,soprt,football"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel='stylesheet' type='text/css' media='screen' href='css//w3.css'>
    <title>منصة الادوية </title>
    <style>

    </style>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
</head>
<body style="background: url('photo/2.jpg');background-size: 100%; padding-right: 5px;">
<div class="headr">
<CENTER>
<abbr title="تصميم /خلدون خالد هادي غانم" >
 <div class="titel"> منصة الادوية </div>
</abbr>
</CENTER>
</div>
    <!-- //MENUE -->
    <div class="topnav" dir="RTL">
  <a  href="index.php">الرئيسية الصفحة</a>
    <a class="active" href="sr.php"> صفحة الادوية</a>
  <a href="footer.php">التواصل</a>
  <a  href ="login1.php">تسجيل الدخول</a>
  <a href ="admin.php">أعدادات الموقع </a>
</div>
<br>
   <img src="photo/5.ico" alt="noooooo " height="100PX" width="100PX" >
          <input type="text" size="100PX" name="serch" id="serch" class="" placeholder="Search here" / >
        </div>
         <table id="table" class="w3-table-all">
    <tr class="tablehead" style= "background-color:black">
     
        <td style='text-align: center;'>اسم الدواء</td>
        <td style='text-align: center;' >اسم الصيدلية </th>
        <td style="text-align: center;" >العنوان </td>
        <td style="text-align: center;" >صورة المنتج </td>
    </tr>
    <tbody id="tbody">
        <?php
include('con_string.php');
$add=$con->query("select *  from drug,pharma,drug_serch where drug.id=drug_serch.id_drug and pharma.id =drug_serch.id_pharm");
while ($a=$add->fetch_array()) {
    echo"<tr class=' w3-hover-blue'>";
    echo "<td style='text-align: center;'>".$a['drug_name'];
    echo "<td style='text-align: center;' >".$a['pharm_name'];    
    echo "<td style='text-align: center;' >".$a['loc'];
    $pic=$a['imag'];
    echo"<img src='".$pic."'/>";
    echo"<tr>";
}
   ?>
   </tbody>
</table>
</form>
</center>
 </form>
<script>
                $(document).ready(function() {
				$("#serch").on("keyup", function() {
					var value = $(this).val().toLowerCase();
					$("#tbody tr").filter(function() {
						$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
					});
				});
			});
		</script>
            <div class="alert alert-danger" id="error"  style="width: 25%;margin: auto;display: none;"></div>
  <div style="position: fixed;;top:0;background: rgba(0,0,0,0.4); width: 100%;height: 100%;z-index: -1"></div>
</body>
</html>
