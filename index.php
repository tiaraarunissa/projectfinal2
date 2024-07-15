           <?php
           if(isset($_GET['x']) && $_GET['x'] == 'home'){
               $page = "home.php";
               include "main.php";
           }if(isset($_GET['x']) && $_GET['x'] == 'pencatatanriwayatkesehatan'){
            $page = "pencatatanriwayatkesehatan.php";
            include "main.php";
           }if(isset($_GET['x']) && $_GET['x'] == 'jadwalkesehatan'){
            $page = "jadwalkesehatan.php";
            include "main.php";
           }if(isset($_GET['x']) && $_GET['x'] == 'informasikesehatan'){
            $page = "informasikesehatan.php";
            include "main.php";
           }if(isset($_GET['x']) && $_GET['x'] == 'admin'){
            $page = "admin.php";
            include "main.php";
           }if(isset($_GET['x']) && $_GET['x'] == 'login'){
            include "login.php";
           }else{
            include "main.php";
           }
           ?>
          