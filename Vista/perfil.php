<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/estilos-perfil.css" />
</head>

<body>
<?php
    include_once 'plantillanavbaroffline.php'
    ?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="../src/imgUsuarios/Juan_Elias.jpeg" alt="" />
                        <div class="file btn btn-lg btn-primary">
                            Cambiar Imagen
                            <input type="file" name="img-perfil" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="profile-head">
                        <h5>
                            Juan Elias Vergara
                        </h5>
                        <h6>
                            Sincelejo - Sucre
                        </h6>
                        <p class="proile-rating">Reservas : <span>8</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos de perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos Reservas</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active centrar" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>usuario</label>
                                </div>
                                <div class="col-md-3">
                                    <p>JEVORT</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Nombre</label>
                                </div>
                                <div class="col-md-3">
                                    <p>Juan Vergara</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-3">
                                    <p>jevort@gmail.com</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Telefono</label>
                                </div>
                                <div class="col-md-3">
                                    <p>305 2399951</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Direccion</label>
                                </div>
                                <div class="col-md-3">
                                    <p>Sincelejo - Sucre</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Hotel</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Direccion</th>
                                        <th scope="col">Fecha Llegada</th>
                                        <th scope="col">Fecha Salida</th>
                                        <th scope="col">Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                    <tr>
                                        <td>Dan carton</td>
                                        <td>Bucaramanga</td>
                                        <td>Cl 53 18 34</td>
                                        <td>2021/08/15</td>
                                        <td>2021/08/18</td>
                                        <td>$ 250000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.js"></script>
</body>

</html>