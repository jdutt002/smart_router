<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php 
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'practice');
        define('DB_USER','root');
        define('DB_PASSWORD','');
        
        $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
        $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
        
        $ID = $_POST['user'];
        $Password = $_POST['pass'];
        function sign_in()
        {
            session_start();

         if(!empty($_POST['user'])) {
         $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
         $row = mysql_fetch_array($query) or die(mysql_error()); 
         if(!empty($row['userName']) AND !empty($row['pass'])) { 
                 $_SESSION['userName'] = $row['pass']; 
                 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 

         } else { 
             echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 

         } 



         if(isset($_POST['submit']))
         {
                 SignIn();
         }
     }
 }

        ?>
    </body>
</html>
