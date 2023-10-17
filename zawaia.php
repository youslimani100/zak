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
            echo "<br>Bonjour--- $user ----, vous êtes Connecter Ok";}
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
            <input type="text" id="nomzawia" placeholder="اسم الزاوية">
            <input type="text" id="adressezawia" placeholder="عنوان الزاوية">
            <input type="tel" id="telezawia" placeholder="رقم الهاتف">
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