<?php

function home() {
    $msg_home = "BEM VINDO AO MEU CRUD!";
    return $msg_home;
}

function mensagem() {
    echo home();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"/>
    
    <title>Document</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Cadastro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=editar">Edição</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuarios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            
            <?php 
            include("config.php");
            
            switch(@$_REQUEST["page"]) {
                
                case "novo":
                    include("novo-usuario.php");
                break;

                case "listar":
                    include("listar-usuarios.php");
                break;

                case "editar":
                    include("editar-usuarios.php");
                break;    

                case "salvar":
                  include("salvar-usuario.php");
                break;  

                default:
                    mensagem();
            }
            
            ?>

        </div>
    </div>
</div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>