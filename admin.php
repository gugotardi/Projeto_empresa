<html>
<head>
    <style>p.alinha{padding-left: 100em }</style>
    <Link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
    <center><a href="cadastroempresa.html">Register</a></center>
</body>
</html>
<?php
  $login_cookie = $_COOKIE['login'];
  $connect = mysqli_connect("localhost:3306", "root", "", "empresa");
    if(isset($login_cookie)){
      echo"<h1>Business Finder Admin</h1><br>";
      echo"<h1>Busness</h1>";
      echo"<hr/>";  
    }
    $sql = "SELECT * FROM empresa";
    $result = mysqli_query($connect,$sql);
    $i=0;
    $y=1;
    $arrayRestaurantes["i"]= "";
    if($result == null){
        echo "No Business found";
    }else{
  
       while ($row = mysqli_fetch_assoc($result)) {
         $arrayRestaurantes["i"] = $row["titulo"];
         echo'<p>'.$y.' '.$arrayRestaurantes["i"].'</p>';
         $i=$i+1;
         $y=$y+1;
       }
       
      
       
    }
    ?>


