<?php
    include_once 'php/Menus.php';
    $menu = new Menu();
    $cabecera = $menu->Cabecera();
    $nav = $menu->Navegador();
?>
    
    <h1 class="display-4 text-center animate__animated animate__fadeInLeft">Tramites escolares</h1>
    <div class="text-center">
    <!-- <img src='./img/marca.jpeg' class='img-fluid animate__animated animate__fadeInLeft' alt='rayos'> -->

    </div>

<div class="row container-fluid animate__animated animate__fadeInLeft">
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Incripciones y reinscripciones</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Servicio sociál</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Residencias</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lenguas extranjeras</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cursos de verano</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Aspirantes</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Quejas y sugerencias</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Titulación integral</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/tramites/tramites_generales_2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ingenierias</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</div>
    
    <?php
    $pie_page = $menu->Footers();

?>