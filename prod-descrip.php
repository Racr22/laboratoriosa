<?php include("includes/header.html")?>
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

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-2 col-sm-2">
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
        <div class="col">
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
            </div>
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md">
                        <img src="img/productos/prod-descrip.png">
                    </div>
                    <div class="col-md">
                        <h5>CODIGO 332</h5>
                        <h2>Boca de Vacuna 50ml</h2>
                        <p>Poseemos una <span class="font-weight-bold">gama de matricería que nos permite fabricar una amplia línea de envases y artículos plásticos</span></p>
                        <p style="background-color: #3ECFBC;color: white ;font-weight: bold;padding-left: 25;">CARACTERISTICAS</p>
                        <table class="table">
                            
                            <tbody>
                              <tr>
                                <th scope="row" class="text-primary">Capacidad</th>
                                <td>50 ml</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-primary">Diametro de Boca</th>
                                <td>20 ml</td>
                              </tr>
                              <tr>
                                <th scope="row" class="text-primary">Colores</th>
                                <td>A elección</td>
                              </tr>
                              <tr class="border-bottom">
                                <th scope="row" class="text-primary">Material</th>
                                <td>PP</td>
                              </tr>
                            </tbody>
                          </table>
                          <input type="button" class="btn text-white rounded-pill bg-primary" value="AÑADIR PRESUPUESTO">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md">
                        <p class="pl-3" style="background-color: #3ECFBC;color: white ;font-weight: bold;">PLANOS</p>
                        <img src="img/productos/prod-descrip2.png">
                    </div>
                    <div class="col-md">
                        <p class="pl-3" style="background-color: #3ECFBC;color: white ;font-weight: bold;">COLORES DISPONIBLES</p>
                        <img src="img/productos/cristal.png">
                        <img class="ml-4"src="img/productos/transparente.png">
                        <div class="row">
                            <div class="col-md">
                                <span class="px-3 text-muted">Cristal</span>
                                <span class="ml-1 text-center text-muted">Transparente</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md">
                                <p class="pl-3" style="background-color: #3ECFBC;color: white ;font-weight: bold;">CERTIFICADOS DE MATERIAL</p>
                                <i class="fas fa-download"></i><a class="ml-2 text-primary">Descargar Certificado</a>
                                <br>
                                <i class="fas fa-download"></i><a class="ml-2 text-primary">Descargar Certificado</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3 mb-2 font-weight-bold" style="background-color:#ECECEC ;color: #002D81;">PRODUCTOS RELACIONADOS<span class="float-right">+</span></div>
                <div class="row mt-5">
                    <div class="col-md">
                        <div class="card border-0">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                              <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card border-0">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                              <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card border-0">
                            <div class="card-img-top card-img-top-250">
                                <img class="img-fluid" src="img/productos/334.png" alt="Carousel 1">
                            </div>
                            <div class="card-block p-t-2">
                              <p class="font-weight-bold text-muted mt-3">CÓDIGO 334</p>
                                <div class="card-text font-weight-bold" style="color: darkblue;">Boca Vacuna 50 ml</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
<?php include("includes/footer.html")?>