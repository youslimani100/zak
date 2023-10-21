<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسيير الزوايا</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="barre_connexion" id="content">
 
        <a href='zawaia.php?deconnexion=true'><span>Déconnexion</span></a>
        
        <!-- tester si l'utilisateur est connecté -->
        <?php
        session_start();
        if(isset($_GET['deconnexion']))
        { 
        if($_GET['deconnexion']==true)
        { 
        session_unset();
        header("location:login.php");
        }
        }
        /* else if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
        // afficher un message
        echo "<br>Bonjour $user, vous êtes connectés";
        } */
       
       
        if(isset($_SESSION['username'])) 
        { 
            $user = $_SESSION['username'];
            echo "<br>المديرية الولائية : $user";}
        else { 
           header("location:login.php");
       }
       
        ?>
        
        </div>
        
    <div class="crud">
        <div class="head">
            <h2>تسيير الزوايا لولاية</h2>
            <p>قائمة الزوايا</p>

        </div>
        <div class="inputs">
            <div class="zaouia_inf">
           <input type="text" id="nomzawia" placeholder="اسم الزاوية">
            <input type="text" id="nomzawia" placeholder="الطريقة الصوفية">
            <input type="text" id="nomzawia" placeholder="عاملة">
            <input type="text" id="nomzawia" placeholder="نوع النشاط">
            <input type="text" id="nomzawia" placeholder="اسم مؤسس الزاوية">
            <input type="text" id="nomzawia" placeholder="سنة التأسيس هجري">
            <input type="text" id="nomzawia" placeholder="سنة التأسيس ميلادي">
            <input type="text" id="nomzawia" placeholder="البلدية (مقر الزاوية)">
            <input type="text" id="nomzawia" placeholder="عنوان الزاوية">
            <input type="text" id="nomzawia" placeholder="الهاتف الثابت">
            <input type="text" id="nomzawia" placeholder="الفاكس">
            <input type="text" id="nomzawia" placeholder="الهاتف النقال">
            <input type="text" id="nomzawia" placeholder="لبريد الإلكتروني">
            <input type="text" id="nomzawia" placeholder="موقع الزاوية  على خريطة maps">
            <input type="text" id="nomzawia" placeholder="صورة أمامية للزاوية">
            <input type="text" id="nomzawia" placeholder="الربط بشبكة الانترنيت">
            <input type="text" id="nomzawia" placeholder="منصات الزاوية على الأنترنيت">
            <!-- <input type="text" id="adressezawia" placeholder="عنوان الزاوية">
            <input type="tel" id="telezawia" placeholder="رقم الهاتف"> -->
            </div>
            
            <div class="chikh_zaouia_inf">
            <input type="text" id="nomzawia" placeholder="اسم شيخ الزاوية الحالي">
            <input type="text" id="nomzawia" placeholder="تاريخ ميلاد شيخ الزاوية الحالي">
            <input type="text" id="nomzawia" placeholder="صورة شخصية لشيخ الزاوية">
            <input type="text" id="nomzawia" placeholder="الفاكس"> 
            </div>

            <div class="zaouia_statiistique">
            <input type="text" id="nomzawia" placeholder="عدد مؤطري الزاوية الموظفين"> 
            <input type="text" id="nomzawia" placeholder="عدد مؤطري الزاوية الغير موظفين"> 
            <input type="text" id="nomzawia" placeholder="عدد الطلبة  الداخليين"> 
            <input type="text" id="nomzawia" placeholder="عدد الطلبة  الخارجيين"> 
            <input type="text" id="nomzawia" placeholder="عدد الطلبة الخارجيين ذكور">
            <input type="text" id="nomzawia" placeholder="عدد الطلبة الخارجيين إناث">
            <input type="text" id="nomzawia" placeholder="عدد الطلبة الأجانب">
            <input type="text" id="nomzawia" placeholder="دول الطلبة الأجانب">  
            </div>


            <div class="SelectWilaya">
                <label for="wilaya">الولاية:</label>
                <select name="wilaya" id="wilaya">
                    <option value="">--الولاية--</option>
                    <option value="alger">الجزائر</option>
                    <option value="oran">وهران</option>
                    <option value="laghouat">الأغواط</option>
                    <option value="adrar">أدرار</option>
                </select>

                <label for="daira">الدائرة:</label>
                <select name="wilaya" id="wilaya">
                    <option value="">--الولاية--</option>
                    <option value="alger">الجزائر</option>
                    <option value="oran">وهران</option>
                    <option value="laghouat">الأغواط</option>
                    <option value="adrar">أدرار</option>
                </select>

                <label for="commune">البلدية:</label>
                <select name="wilaya" id="wilaya">
                    <option value="">--الولاية--</option>
                    <option value="alger">الجزائر</option>
                    <option value="oran">وهران</option>
                    <option value="laghouat">الأغواط</option>
                    <option value="adrar">أدرار</option>
                </select>

            </div>
        <button>أنشئ</button>

        </div>
        <div class="outputs">
            <table>
                <tr>
                    <th>إسم الزاوية</th>
                    <th>العنوان</th>
                    <th>الولاية</th>
                    <th>الدائرة</th>
                    <th>البلدية</th>
                    <th>الموقع الجغرافي</th>
                    <th>الهاتف</th>
                    <th>تحيين</th>
                    <th>حذف</th>
                </tr>
            <tbody>
                <tr>
                    <td>الزاوية الرحمانية</td>
                    <td>الحي القديم</td>
                    <td>البلدية</td>
                    <td>بوفاريك</td>
                    <td>ولاد الشبل</td>
                    <td>5225.55</td>
                    <td>025242415</td>
                    <td><button id="update">تحيين</button></td>
                    <td><button id="delete">حذف</button></td>
                </tr>
                <tr>
                    <td>زاوية سيدي راشد</td>
                    <td>طريق الوئام</td>
                    <td>عنابة</td>
                    <td>بونة</td>
                    <td>بونة</td>
                    <td>2669.25</td>
                    <td>029659874</td>
                    <td><button id="update">تحيين</button></td>
                    <td><button id="delete">حذف</button></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</body>

</html>