<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Donde me quedo</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../css/estilos.css" />
    <link rel="stylesheet" href="../css/estilosprincipal.css" />
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
</head>
<body>
<?php
      include_once('plantillanav.php');
    ?>

    <!-- <div class="jumbotron">  -->
    



<div class="card" style="width: 30rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">Crea tu cuenta</h5>
    <p class="card-text">Ingresa tus datos para crear tu cuenta.</p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="nombreHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ciudad</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="ciudadHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="telefonoHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="direccionHelp">    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
  </div>
  <button type="submit" class="btn btn-primary">Crear Cuenta</button>
  
</form>
  </div>
</div>



    
</body>
</html>