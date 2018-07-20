<html>
    <head>
    <Link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
    

<?php
  $resultado = $_POST['resultado']; 
  $connect = mysqli_connect("localhost:3306", "root", "", "empresa");
      if($resultado == " "|| $resultado == null){
       echo "<script language='javascript' type='text/javascript'>alert('O campo de busca não pode ser em branco');window.location.href='index.php';</script>";
             
    }else{
        echo"<h1>Business Finder Admin</h1><br>";
        echo"<h1>Busness</h1>";
        echo"<hr/>"; 
        $sql = "SELECT titulo FROM empresa WHERE titulo LIKE '%$resultado%' OR  endereco LIKE '%$resultado%' OR cep LIKE '%$resultado%' OR cidade LIKE '%$resultado%' OR categoria LIKE '%$resultado%' ";
        $result = mysqli_query($connect,$sql);
        $i=0;
        $y=1;
        $arrayRestaurantes["i"]= "";
    
         while ($row = mysqli_fetch_assoc($result)) {
              $arrayRestaurantes["i"] = $row["titulo"];
              echo'<p>'.$y.' '.$arrayRestaurantes["i"].'</p>';
              $i=$i+1;
              $y=$y+1;
            }
            
    }
     
     
     ?>
<center><a href="index.php">Return</a></center>
</body>
</html>