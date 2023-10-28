<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style_login.css" media="screen" type="text/css" />
</head>

<body>
    <div class="barre_header">
        <h1>البرنامج المعلوماتي لتسير الزوايا</h1>
    </div>
    <div id="container">
        <!-- zone de connexion -->

        <form action="verification.php" method="POST">
            <h1>حساب المستخدم</h1>

            <label><b>إسم المستخدم</b></label>
            <input type="text" placeholder="أدخل كلمة المستخدم" name="username" required>

            <label><b>كلمة المرور</b></label>
            <input type="password" placeholder="أدخل كلمة المرور" name="password" required>

            <input type="submit" id='submit' value='دخـول'>
            <?php
session_start();
if(isset($_SESSION['username'])) { header('Location: zawaia.php');}
else{
     if(isset($_GET['erreur'])){
    $err = $_GET['erreur'];
    if($err==1 || $err==2)
    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    }
 ?>
        </form>
    </div>
</body>

</html>