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
        require('algeria_cities.php');
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


        if (isset($_SESSION['username'])) {
            $user = $_SESSION['username'];
            echo "<br>المديرية الولائية : $user";
        } else {
            header("location:login.php");
        }

        ?>

    </div>

    <div class="crud">
        <div class="head">
            <h2>تسيير الزوايا لولاية</h2>
            <p>قائمة الزوايا</p>

        </div>


        <?php
        // require('config.php');

        if (!empty($_POST["creer_zaouia"])) {
            $nom_zaouia = $_POST["nom_zaouia"];
            $tariqua_zaouia = $_POST["tariqua_zaouia"];
            $type_activite = $_POST["type_activite"];
            $fondateur_zaouia = $_POST["fondateur_zaouia"];
            $annee_m_zaouia = $_POST["annee_m_zaouia"];

            //$connexion = mysqli_connect("localhost", "root", "", "contact_form") or die("Erreur de connexion: " . mysqli_error($connexion));

            $connexion = mysqli_connect("localhost", "root", "", "bdd_login") or die("Erreur de connexion: " . mysqli_error($connexion));
            $result = mysqli_query($connexion, "INSERT INTO  zaouia  (nom_zaouia , tariqua_sofia, type_activite, fondateur_zaouia,annee_etablissement_mil) VALUES ('" . $nom_zaouia . "', '" . $tariqua_zaouia . "','" . $type_activite . "','" . $fondateur_zaouia . "','" . $annee_m_zaouia . "')");
            if ($result) {
                $db_msg = "Vos informations de contact sont enregistrées avec succés.";
                $type_db_msg = "success";
            } else {
                $db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
                $type_db_msg = "error";
            }
        }
        ?>











        <form id="form" enctype="multipart/form-data" action="" onsubmit="" method="post">
            <div class="inputs">
                <div class="zaouia_inf">
                    <input type="text" id="nom_zaouia" name="nom_zaouia" type="text" placeholder="اسم الزاوية">
                    <input type="text" id="natariqua_zaouiame" name="tariqua_zaouia" type="text"
                        placeholder="الطريقة الصوفية">
                    <input type="text" id="natype_activiteme" name="type_activite" type="text" placeholder="نوع النشاط">
                    <input type="text" id="fondateur_zaouia" name="fondateur_zaouia" type="text"
                        placeholder="اسم مؤسس الزاوية">
                    <input type="date" id="annee_m_zaouia" name="annee_m_zaouia" type="text"
                        placeholder="سنة التأسيس ميلادي">
                    <!--     <input type="text" placeholder="سنة التأسيس هجري">
                <input type="text" placeholder="عاملة">
                <input type="text" placeholder="البلدية (مقر الزاوية)">
                <input type="text" placeholder="عنوان الزاوية">
                <input type="text" placeholder="الهاتف الثابت">
                <input type="text" placeholder="الفاكس">
                <input type="text" placeholder="الهاتف النقال">
                <input type="text" placeholder="لبريد الإلكتروني">
                <input type="text" placeholder="موقع الزاوية  على خريطة maps">
                <input type="text" placeholder="صورة أمامية للزاوية">
                <input type="text" placeholder="الربط بشبكة الانترنيت">
                <input type="text" placeholder="منصات الزاوية على الأنترنيت">
                 <input type="text" id="adressezawia" placeholder="عنوان الزاوية">
             <input type="tel" id="telezawia" placeholder="رقم الهاتف"> 
            </div>
        </div>

        <div class="chikh_zaouia_inf">
            <input type="text" placeholder="اسم شيخ الزاوية الحالي">
            <input type="text" placeholder="تاريخ ميلاد شيخ الزاوية الحالي">
            <input type="text" placeholder="صورة شخصية لشيخ الزاوية">
            <input type="text" placeholder="الفاكس">
        </div>
        <div class="zaouia_statiistique">
            <input type="text" placeholder="عدد مؤطري الزاوية الموظفين">
            <input type="text" placeholder="عدد مؤطري الزاوية الغير موظفين">
            <input type="text" placeholder="عدد الطلبة  الداخليين">
            <input type="text" placeholder="عدد الطلبة  الخارجيين">
            <input type="text" placeholder="عدد الطلبة الخارجيين ذكور">
            <input type="text" placeholder="عدد الطلبة الخارجيين إناث">
            <input type="text" placeholder="عدد الطلبة الأجانب">
            <input type="text" placeholder="دول الطلبة الأجانب">
        </div>
 -->

                    <!-- <div class="SelectWilaya">
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
                -->
                    <input type="submit" name="creer_zaouia" value="أنشئ" />

                </div>

        </form>

    </div>




    <?php
    $connexion = mysqli_connect("localhost", "root", "", "bdd_login") or die("Erreur de connexion: " . mysqli_error($connexion));
    $htmlresult = '';    
  if($list_zaouia = mysqli_query($connexion,"SELECT  `nom_zaouia`, `tariqua_sofia`, `fondateur_zaouia`, `annee_etablissement_mil` FROM `zaouia` WHERE 1"))
  {
    $htmlresult .= '
                <table>
                <tr>
                <th>إسم الزاوية</th>
                <th>الطريقة</th>
                <th>عاملة</th>
                <th>مِؤسس الزاوية</th>
                <th>سنة التأسيس م</th>
            </tr>
                 ';
    echo $htmlresult;
  while ($ligne_zaouia = $list_zaouia->fetch_assoc())
  {
    $htmlresult .= '<tr><td>'.$ligne_zaouia["nom_zaouia"].'</td>.<td>'.$ligne_zaouia["tariqua_sofia"].'</td>.<td>'.$ligne_zaouia["fondateur_zaouia"].'</td>.<td>'.$ligne_zaouia["annee_etablissement_mil"].'</td>';
    $htmlresult .='<td><button id="update">تحيين</button></td>
                    <td><button id="delete">حذف</button></td></tr>';
}
  echo $htmlresult;
}

  

?>









   <!--  <div class="outputs">
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
    </div> -->
    </div>
</body>
<?php

function insert_zaouia()
{
}
?>

</html>