<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../css/estilos-pagos.css">

    <link rel="stylesheet" href="../css/estilos.css" />
     <link rel="stylesheet" href="../css/estyloslogin.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
    <title>Confirmar pago</title>
</head>

<body>
    <?php
    include_once 'plantillanav.php'
    ?>
    <div class="container espaciado">     

            
            <div class="card5" style="width: 100%">
                <div class="card-header">
                    <div class="d-flex justify-content-center h-100">
                        <h3 class="titulo-pago">Confirma tu pago</h3>
                        <span><i></i></span>                                  
                    </div>
                    
                    </div>                
                        <div class="row">                            
                            
                                <div class="col-md-6">                                   
                                    <br>
                                    <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                                        <!-- indicadores -->
                                        <div class="carousel-indicators">
                                            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-mdb-target="#carouselVideoExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <video class="img-fluid" autoplay loop muted>
                                                    <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                                                </video>
                                                <div class="carousel-caption">
                                                    <h5>Hotel Dan Carton</h5>
                                                    <p>
                                                        Comodidad y descanso.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>                                    
                            
                                <div class="col-md-6">
                                <div class="row no-gutters">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Hotel Dan Carton</h5>
                                            <hr />
                                            <p class="card-text">
                                                <p class="texto-pago">
                                                    <strong>Direccíon :</strong> Calle 47 # 28-43 <br>
                                                    <strong>Telefonos  :</strong>  60 7  6973266<br>
                                                    centralreservas@hotelesdann.com
                                                </p>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="card-body">
                                            <h5 class="card-title">Detalles</h5>
                                            <div class="texto-pago">

                                                <label for=""><strong>Total :</strong> $ 250.000</label>
                                                <br>
                                                <h5 class="card-title">Forma de pago:</h5>
                                                
                                                <input name="medioPago" id="Contado" type="radio">
                                                <label for="Contado">Contado</label>
                                                <br>
                                                
                                                <input name="medioPago" id="Tarjeta" type="radio">
                                                <label for="Tarjeta">Tarjeta</label>
                                            </div>                                            
                                        </div>                                      
                                    </div>                                    
                                    
                                </div>
                                <div class="boton-pago">

                                    <button type="submit" class="btn btn-primary flotar-der">Reservar</button>                    
                                    <button type="submit" class="btn btn-primary flotar-der">Cancelar</button> 
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
            <?php
            include_once '../Modal/ModalPago.php';
            ?>

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>