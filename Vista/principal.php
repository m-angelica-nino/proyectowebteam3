<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <title>Donde me quedo.com</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/estilos.css" />
  <link rel="stylesheet" href="../css/estilosprincipal.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" />
</head>

<body>

  <?php
  include_once('plantillanav.php');
  ?>
  <div class="wrap">

    <h1>RESERVA TU HOTEL</h1>
    <section class="">
      <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Filtros +
        </button>
      </p>

      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <!---FORMULARIO DE FILTROS -->
          <br>
          <form>
            <div class="form-row">
              <div class="form-group col-md-8">

                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Sincelejo" />
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputState">Tipo de Habitación</label>
                    <select id="inputState" class="form-control">
                      <option selected>Suit</option>
                      <option>Doble</option>
                      <option>Sencilla</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">N° Personas</label>
                    <input type="number" value="2" min="1" max="8" class="form-control" />
                  </div>
                </div>
                <!-- -->
                <div class="form-row">
                  <div class="form-group col-md-5">

                    <label for="inputCity">Rango De Precios</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="number" value="125000" min="1" max="1000000" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">

                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Fecha Entrada</label>
                    <input type="date" class="form-control" id="inputZip" placeholder="2021/09/01" />
                  </div>
                  <div class="form-group col-md-3">
                    <label for="inputZip">Fecha Salida</label>
                    <input type="date" class="form-control" id="inputZip" placeholder="2021/09/15" />
                  </div>
                </div>

              </div>
              <div class="form-group col-md-3">
                <br>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ParqueaderoCheck" name="ParqueaderoCheck" />
                    <label class="form-check-label" for="ParqueaderoCheck">
                      Parqueadero
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="desayunoCheck" name="desayunoCheck" />
                    <label class="form-check-label" for="desayunoCheck">
                      Desayuno
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="piscinaCheck" name="piscinaCheck" />
                    <label class="form-check-label" for="piscinaCheck">
                      Piscina
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary alin">
              Filtrar
            </button>
          </form>
        </div>
      </div>
    </section>

    <div class="store-wrapper">
      <section class="products-list">
        <!-- inicio de seccion de carga-->
        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="col-sm-3">
              <img class="card-img tam" src="../src/images/danncarlton.jpeg" alt="Suresh Dasari Card" />
            </div>
            <div class="col-sm-5">
              <div class="card-body">
                <h5 class="card-title">Hotel Dann Carlton </h5>
                <hr />
                <p class="card-text">
                  Hotel Dann Carlton se ubica en Calle 47 #28-43 de Bucaramanga, distancia de 9 minutos del centro. <br>
                  5 estrellas <br>
                  Wi-Fi gratis <br>
                  Restaurante <br>
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card-body">
                <h5 class="card-title"> Precios</h5>
                <p class="card-text">
                  $235.000
                </p>
                <a href="#" class="btn btn-primary alin">Reservar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="col-sm-3">
              <img class="card-img tam" src="../src/images/tryp.jpg" alt="Suresh Dasari Card" />
            </div>
            <div class="col-sm-5">
              <div class="card-body">
                <h5 class="card-title">Tryp</h5>
                <hr />
                <p class="card-text">
                  Hotel Tryp Bucaramanga ubicado en Carrera 38 No. 48 - 66 distancia de 11 minutos del centro. <br>
                  4 estrellas <br>
                  Wi-Fi gratis <br>
                  Restaurante <br>
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card-body">
                <h5 class="card-title">Precios</h5>
                <p class="card-text">
                  $210.700
                </p>
                <a href="#" class="btn btn-primary alin">Reservar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="col-sm-3">
              <img class="card-img tam" src="../src/images/hampton.jpg" alt="Suresh Dasari Card" />
            </div>
            <div class="col-sm-5">
              <div class="card-body">
                <h5 class="card-title">Hampton by Hilton</h5>
                <hr />
                <p class="card-text">
                  Hotel Hampton By Hilton Bucaramanga se ubica en Barrio Cabecera <br>
                  Carrera 33 #46-07 distancia de 10 minutos del centro. <br>
                  4 estrellas <br>

                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card-body">
                <h5 class="card-title">Precios</h5>
                <p class="card-text">
                  $202.500
                </p>
                <a href="#" class="btn btn-primary alin">Reservar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="col-sm-3">
              <img class="card-img tam" src="../src/images/buenavista.jpg" alt="Suresh Dasari Card" />
            </div>
            <div class="col-sm-5">
              <div class="card-body">
                <h5 class="card-title">Hotel Buenavista</h5>
                <hr />
                <p class="card-text">
                  Hotel Buena Vista Express se ubica en Diag 15 No. 58-40 de Bucaramanga <br>
                  distancia de 4 minutos del centro. Aeropuerto Internacional Palonegro 7,8 km del hotel.<br>
                  3 estrellas <br>
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card-body">
                <h5 class="card-title">Precios</h5>
                <p class="card-text">
                  $175.000
                </p>
                <a href="#" class="btn btn-primary alin">Reservar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card" style="width: 100%">
          <div class="row no-gutters">
            <div class="col-sm-3">
              <img class="card-img tam" src="../src/images/chicamocha.jpg" alt="Suresh Dasari Card" />
            </div>
            <div class="col-sm-5">
              <div class="card-body">
                <h5 class="card-title">Hotel Chicamocha</h5>
                <hr />
                <p class="card-text">
                  Hotel Chicamocha se ubica en Calle 34 No. 31 -24 distancia de 15 minutos del centro. <br>
                  4 estrellas <br>
                </p>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card-body">
                <h5 class="card-title">Precios</h5>
                <p class="card-text">
                  $135.000
                </p>
                <a href="#" class="btn btn-primary alin">Reservar</a>
              </div>
            </div>
          </div>
        </div>

        

        <div id="sfcztnm42u52y2hdcw64prc52g98t48f51g"></div>
        <img src="https://counter10.stat.ovh/private/contadorvisitasgratis.php?c=ztnm42u52y2hdcw64prc52g98t48f51g" border="0" title="contador de visitas html" alt="contador de visitas html"></a></noscript>

        <!-- fin de seccion de carga-->

      </section>
    </div>
  </div>
  <div class="cardA text-white bg-info mb-3" style="max-width: 18rem;">
          <div class="card-header">Descubre</div>
          <div class="card-body">
            <h5 class="cardA-title">!LAS MEJORES OFERTAS¡¡¡</h5>
            <p class="card-text">Suscríbete y verás los mejores precios.</p>
            <div label for="exampleInputEmail1" class="form-label">email</div>
            <a href="#" class="btn btn-primary alin">Suscribirme</a>
          </div>
        </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="https://counter10.stat.ovh/private/counter.js?c=ztnm42u52y2hdcw64prc52g98t48f51g&down=async" async></script>
  <noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas html">
</body>

</html>