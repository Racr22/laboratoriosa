<?php
include("includes/header.html");
?>
<head>

<style type="text/css">
    .list-group-item-action{
        border-style:none;
    }
    .list-group a,.list-group-item-action.active{
        background-color: dark;
    }
    .a:active{
       color:dark;
    }
    </style>
</head>
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-3 mx-5">
      <h5>Seleccione categorias y sus filtros</h5>
        <div class="list-group" id="list-tab" role="tablist">
        <li class="list-group-item font-weight-bold border-0">Categorias</li>
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Boca Vacuna</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Boca Rosca</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Varios</a>
        </div>
        <div class="list-group">
        <li class="list-group-item font-weight-bold border-0">Diametro de Boca</li>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">20 mm</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">30 mm</a>
        </div>
        <div class="list-group">
        <li class="list-group-item font-weight-bold border-0">Capacidades</li>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">10 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">20 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">25 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">50 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">100 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">220 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">500 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">750 ml</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">1000 ml</a>
        </div>
        <div class="list-group">
        <li class="list-group-item font-weight-bold border-0">Formatos</li>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">Ciclindricos</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">Rectangulares</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">Especiales</a>
        </div>
        <div class="list-group">
        <li class="list-group-item font-weight-bold border-0">Materiales</li>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">PPP</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="">PVC</a>
        </div>
    </div>
        <div class="col-md-7">
        <div class="row">
            <div class="col border border-1 text-center">
                <h4 class="font-bold"><img class="float-left" src="img/productos/iconos/botella vacuna.png">Boca Vacuna</h4>
            </div>
            <div class="col border border-1 ml-3  text-center">
            <h4 class="font-bold"><img class="float-left" src="img/productos/iconos/botella rosca.png">Boca Rosca</h4>
            </div>
            <div class="col border border-1 ml-3  text-center">
            <h4 class="font-bold"><img class="float-left" src="img/productos/iconos/botella varios.png">Varios</h4>
            </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show mt-3 active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

                        <div class="row row-equal">
                            <div class="col">
                                <div class="card border-0">
                                    <a href="./prod-descrip.php"><div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/331.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 331</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca de Vacuna 100ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0">
                                <a href="./prod-descrip.php"> <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid border-0" src="img/productos/332.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                        <p class="font-weight-bold text-muted mt-3">CÓDIGO 332</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    
                                </div>
                                </a>
                            </div>
                            <div class="col">
                                <div class="card border-0">
                                <a href="./prod-descrip.php"> <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-5">
                            <a href="./prod-descrip.php">  <div class="card border-0">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mt-5">
                            <a href="./prod-descrip.php">  <div class="card border-0">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mt-5">
                            <a href="./prod-descrip.php">   <div class="card border-0">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-5">
                            <a href="./prod-descrip.php">    <div class="card border-0">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mt-5">
                            <a href="./prod-descrip.php">    <div class="card border-0">
                                    <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col mt-5">
                                <div class="card border-0">
                                <a href="./prod-descrip.php">     <div class="card-img-top card-img-top-250">
                                        <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                                    </div>
                                    <div class="card-block p-t-2">
                                      <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                        <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Diametro ipsum dolor sit amet, consectetur adipisicing elit. Quasi repellat quod hic placeat officia corrupti ipsum possimus ut ratione, dicta illo fugiat tempora quidem. Unde ducimus fugiat repellat quod excepturi.</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                </div>
        </div>
        <nav aria-label="...">
            <ul class="pagination my-5">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item disabled" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
              <li class="page-item disabled">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>
    </div>
    
    
    </div>

</div>
<?php include("includes/footer.html")?>