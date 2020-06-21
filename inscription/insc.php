<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../mesCSS/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php include('../entete.html');?>
    <section class="container">
        <div class="text-center" style="font-size:1.5em; font-weight:bold;">
            Quel type de compte voulez vous creer ?
        </div>
        <div class="row justify-content-center" style="position:relative;top:80px;">
            <div class="col-2">
            <a href="inscription.php?compte=etudiant"> <button class="btn btn-primary">Etudiant</button></a>
            </div>
            <div class="col-2 offset-1">
            <a href="inscription.php?compte=tuteur"> <button class="btn btn-primary">Tuteur</button></a>
            </div>
        </div>
    </section>
    
</body>
</html>