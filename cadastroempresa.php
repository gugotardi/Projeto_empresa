<?php
        $titulo = $_POST['titulo'];
        $telefone = ($_POST['telefone']);
        $endereco = ($_POST['endereco']);
        $cep = ($_POST['cep']);
        $cidade = ($_POST['cidade']);
        $estado = ($_POST['estado']);
        $descricao = ($_POST['descricao']);
        $categoria = ($_POST['categoria']);
        $connect = mysqli_connect("localhost:3306", "root", "", "empresa");
   
        $query = "INSERT INTO empresa(titulo,telefone,endereco,cep,cidade,estado,descricao,categoria)VALUES('$titulo','$telefone','$endereco','$cep','$cidade','$estado','$descricao','$categoria')";
        $insert = mysqli_query($connect,$query);
       
       if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Cadastrado com sucesso!');window.location.href='cadastroempresa.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse a empresa');window.location.href='cadastroempresa.html'</script>";
        }
      
    
?>

