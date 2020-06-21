<!DOCTYPE html>
<html>
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body style="background-color:white;">
<?php
include("entete.html");
?>
    
    <section class="container" >
        <div class="row">
            <article class=" col-12 text-center">
                <h1 class="text-center" style="margin-top:20px;">
                    Presentation
                </h1>
                <p >
                    <em style="text-decoration:">Bienvenue sur le site de tutorat de 3IL</em></br>
                    Ici tu peux beneficier d'aide pour surmonter les difficultés rencontrées dans ton parcours académique
                 </p>  
                   <p>
                    Le principe du tutorat est de mettre au service son expérience au service des autres étudiants dans le besoin <br />
                    Si tu es étudiant et que tu possèdes de connaissances poussées dans un domaine,<br> alors tu peux le mettre au service des autres, afin de les aider à s'ameliorer.
                </p>
            </article>
            <article class="col-12">
                <h2 class="text-center">Venez découvrir...</h2>
                <div class="overflow-hidden" id="anim" style="height:600px;">
        <!--          <ul class= "carousel-indicators">
                    <li data-target="#anim" data-slide-to="0"></li>
                    <li data-target="#anim" data-slide-to="1"></li>
                    <li data-target="#anim" data-slide-to="2"></li>
                    <li data-target="#anim" data-slide-to="3"></li>
                    <li data-target="#anim" data-slide-to="4"></li>
                    <li data-target="#anim" data-slide-to="5"></li>
                    <li data-target="#anim" data-slide-to="6"></li>

                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="images/1.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/2.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/3.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/4.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/5.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/6.jpg" alt="">

                    </div>
                    <div class="carousel-item">
                        <img src="images/7.jpg" alt="">

                    </div>
                    
                </div>
            
-->
            </div>
            </article>
               
            
        </div>
       
    </section>
    <footer>
    </footer>

<script>
var anim=document.getElementById('anim');
var i=1;
setInterval(function(){
    anim.innerHTML='<img class= "img-thumbnail" src=\'images/'+i+'.jpg\' width=100% >';
    i++;
    if(i==7){
        i=1;
    }
},2000);
/*
var car=document.querySelector(".carousel-inner");
for(var i=1; i<7; i++){
   var img=document.createElement('img');
   img.src='images/'+i+'.jpg';
   img.alt=i;
   var item = document.createElement('div');
   item.className="carousel-item";
   item.appendChild(img);
    car.appendChild(item);

}*/

</script>
</body>
</html>