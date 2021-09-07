<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Reserva Hotel</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../css/estilos.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700"
      rel="stylesheet"
    />

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <?php
      include_once('plantillanav.php');
    ?>
    <div class="wrap">
      <h1>RESERVA TU HOTEL</h1>
      <section class="">
        <p>
          <button
            class="btn btn-primary"
            type="button"
            data-toggle="collapse"
            data-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
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
                      <input type="text" class="form-control" id="inputCity" placeholder="Sincelejo"/>
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
                      <input type="text" class="form-control" id="inputZip" placeholder="2021/09/01" />
                    </div>
                    <div class="form-group col-md-3">
                      <label for="inputZip">Fecha Salida</label>
                      <input type="text" class="form-control" id="inputZip" placeholder="2021/09/15" />
                    </div>
                  </div>

                </div>
                <div class="form-group col-md-3">
                  <br>
                  <div class="form-group">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="ParqueaderoCheck"
                        name="ParqueaderoCheck"
                      />
                      <label class="form-check-label" for="ParqueaderoCheck">
                        Parqueadero
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="desayunoCheck"
                        name="desayunoCheck"
                      />
                      <label class="form-check-label" for="desayunoCheck">
                        Desayuno
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="piscinaCheck"
                        name="piscinaCheck"
                      />
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
                <img
                  class="card-img tam"
                  src="../src/images/beach.jpg"
                  alt="Suresh Dasari Card"
                />
              </div>
              <div class="col-sm-5">
                <div class="card-body">
                  <h5 class="card-title">Isla grande</h5>
                  <hr />
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card-body">
                  <h5 class="card-title">Precios</h5>
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                  <a href="#" class="btn btn-primary alin">Reservar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card" style="width: 100%">
            <div class="row no-gutters">
              <div class="col-sm-3">
                <img
                  class="card-img tam"
                  src="../src/images/cafetero.jpg"
                  alt="Suresh Dasari Card"
                />
              </div>
              <div class="col-sm-5">
                <div class="card-body">
                  <h5 class="card-title">Baiha beach Resort</h5>
                  <hr />
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card-body">
                  <h5 class="card-title">Precios</h5>
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                  <a href="#" class="btn btn-primary alin">Reservar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card" style="width: 100%">
            <div class="row no-gutters">
              <div class="col-sm-3">
                <img
                  class="card-img tam"
                  src="../src/images/central.jpg"
                  alt="Suresh Dasari Card"
                />
              </div>
              <div class="col-sm-5">
                <div class="card-body">
                  <h5 class="card-title">Panorama Hotel</h5>
                  <hr />
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card-body">
                  <h5 class="card-title">Precios</h5>
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                  <a href="#" class="btn btn-primary alin">Reservar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card" style="width: 100%">
            <div class="row no-gutters">
              <div class="col-sm-3">
                <img
                  class="card-img tam"
                  src="../src/images/panorama.jpg"
                  alt="Suresh Dasari Card"
                />
              </div>
              <div class="col-sm-5">
                <div class="card-body">
                  <h5 class="card-title">Hotel Confort</h5>
                  <hr />
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card-body">
                  <h5 class="card-title">Precios</h5>
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                  <a href="#" class="btn btn-primary alin">Reservar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="card" style="width: 100%">
            <div class="row no-gutters">
              <div class="col-sm-3">
                <img
                  class="card-img tam"
                  src="../src/images/resort.jpg"
                  alt="Suresh Dasari Card"
                />
              </div>
              <div class="col-sm-5">
                <div class="card-body">
                  <h5 class="card-title">Meriland Hotel</h5>
                  <hr />
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card-body">
                  <h5 class="card-title">Precios</h5>
                  <p class="card-text">
                    Suresh Dasari is a founder and technical lead developer in
                    tutlane.
                  </p>
                  <a href="#" class="btn btn-primary alin">Reservar</a>
                </div>
              </div>
            </div>
          </div>
           <!-- fin de seccion de carga-->
        </section>
      </div>
    </div>
  </body>
</html>
