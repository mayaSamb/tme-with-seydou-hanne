<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link  rel="stylesheet" href="style.css"> 
    <style>
 .card{
     margin-left: auto;
     margin-right: auto;
 }
 
    </style>
</head>
<body style="background-color: #141227;">

   <img src="logoban.png" alt="" height="80" width="100">

   
       <a class="btn" style="margin-left: 1145px;background-color: #B88A38;" href="inscription.php">S'inscrire</a>
   <br>
       <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h3 class="card-title" style="text-align: center;">Connexion</h3>
                <br>
                <img src="profil.png" alt="Admin" class="rounded-circle " style="margin-left: 150px;" width="150" id="photoprofil">

                <br><br>
                <div class= "container">

<form action="traitementc.php" method="post">
<?php
if (isset($_GET['msg']) && !empty($_GET[' msg']) && $_GET['msg'] ==='erreur'){
    echo'<div class="alert alert-danger" role = "alert"> login non valide 
    </div>';
}
elseif(isset($_GET[ 'msg']) && !empty($_GET[' msg']) && $_GET['msg'] ==='no submit'){
    echo'<div class="alert alert-warning" role = "alert"> 
    Renseignez votre login et votre mot de passe.
    </div>';
}
?>
<div class="form-group">
                <input class="form-control" type="email" placeholder="E-mail" name="login">
                <br><br>

                <input class="form-control" type="password" placeholder="Mot de passe" name="mdp">
                <br><br><br>

                <button type="submit" class="btn" style="margin-left: 180px;background-color: #B88A38;">Connexion</button>

                <br><br>

    </div>
       </div>

</body>
</html>