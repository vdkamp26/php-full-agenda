<?php

include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    
    <link rel="stylesheet" href="css/estilo.css">

    <title>Almoxarifado Audax</title>
</head>
<body>



    <header class="bg-#E5E5E5">
    <div class="container">
      
        <nav class="navbar navbar-expand-lg navbar-#E5E5E5 bg-#E5E5E5">
        <a class="navbar-brand" href="#"></a>    
         
        
           
       
         
        
        <div class="collapse" id="conteudoNavbarSuportado"></div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php?menuop=inicio">Inicio</a></li>
                <li class="nav-item "><a class="nav-link" href="index.php?menuop=usuarios">Usuarios</a></li>
                <li class="nav-item "><a class="nav-link" href="index.php?menuop=materiais">Materiais</a></li>
                <li class="nav-item "><a class="nav-link" href="index.php?menuop=solicitador">Solicitador</a></li>
                <li class="nav-item "><a class="nav-link" href="index.php?menuop=aprovador">Aprovador</a></li>

                
            </ul>

        </nav>

    </div>
    </header>

    <main>
        <div class="container">
          <?php
        

               $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"usuarios";
               switch ($menuop) {
                    case 'inicio':
                        include("paginas/Inicio/home.php");
                       break;
                    case 'usuarios':
                        include("paginas/Usuarios/user.php");
                       break;
                    case 'cad-user':
                        include("paginas/Usuarios/cad-user.php");
                       break;
                    case 'insert-user':
                        include("paginas/Usuarios/inser-user.php");
                       break;
                    case 'edit-user':
                        include("paginas/Usuarios/edit-user.php");
                       break;
                    case 'update-user':
                        include("paginas/Usuarios/update-user.php");
                       break;
                    case 'delete-user':
                        include("paginas/Usuarios/delete-user.php");
                       break;
                    case 'materiais':
                        include("paginas/Materiais/mtr.php");
                       break;
                    case 'cad-mtr':
                        include("paginas/Materiais/cad-mtr.php");
                       break;
                    case 'insert-mtr':
                        include("paginas/Materiais/insert-mtr.php");
                       break;
                    case 'delete-mtr':
                        include("paginas/Materiais/delete-mtr.php");
                       break;
                    case 'update-mtr':
                        include("paginas/Materiais/update-mtr.php");
                       break;
                    case 'edit-mtr':
                        include("paginas/Materiais/edit-mtr.php");
                       break;
                    case 'solicitador':
                        include("paginas/Solicitador/sol.php");
                       break;
                    case 'aprovador':
                        include("paginas/Aprovador/apv.php");
                       break;
                   default:
                        include("paginas/Usuarios/user.php");
                       break;
               } 
          ?>
        </div>
    </main>
               <footer class="container-fluid  bg">

               <div class="text-center">Almoxarifado Audax</div>

               </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




</body>
</html>

