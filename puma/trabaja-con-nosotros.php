<!DOCTYPE html>
<html lang="es">
<head>
    <title>Trabajá con nosotros - Puma Energy Paraguay</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gilda+Display&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>
    <!-- header / navigation -->
    <?php include("includes/header.php"); ?>
    
    <!-- end header / navigation -->


    <!-- content -->
    <section class="title-talento-humano bg-main-title padding-row-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="main-titles font-italic text-white">Formá parte de nuestro equipo</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey pb-5">
        <div class="container bg-white position-relative info-contacto-row p-5">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 separador">
                    <p class="text-center mb-4">Queremos conocerte y que formes parte de nuestro plantel de profesionales. Completá este formulario y nuestro equipo de Talento Humano recibirá tus datos.</p>
                    <hr>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post" id="forma-parte-form" name="forma-parte-form" enctype="multipart/form-data" action="libraries/send-forma-parte.php">
                        <div class="form-group">
                            <label for="">* Nombre y Apellido</label>
                            <input type="text" class="form-control input" name="nombre" placeholder="" required>
                        </div>
        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-lg-6 mb-3">
                                    <label for="">* Correo electrónico</label>
                                    <input type="email" class="form-control input" name="email" placeholder="Ej: nombre@correo.com" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">* Teléfono / Celular</label>
                                    <input type="tel" class="form-control input" name="telefono" placeholder="Ej: 021 123 456 - 09xx 123 456)" required>
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-lg-6 mb-3">
                                    <label for="">* Edad</label>
                                    <input type="number" class="form-control input" name="edad" placeholder="" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">* Profesión actual</label>
                                    <input type="text" class="form-control input" name="profesion" placeholder="Ej: Asistente de directorio" required>
                                </div>
                            </div>
                        </div>
        
                        <div class="form-group">
                            <label for="">* Área a la que te postulás</label>
                            <select name="cargo_postula" id="cargo_postula" class="form-control" required>
                                <option value="--">--</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Comercial">Comercial</option>
                                <option value="Ventas">Ventas</option>
                                <option value="Informática">Informática</option>
                                <option value="Recepción">Recepción</option>
                                <option value="Cobranzas">Cobranzas</option>
                                <option value="Gerencia">Gerencia</option>
                                <option value="Otra">Otra área</option>
                            </select>
                        </div>
        
                        <div class="form-group">
                            <label for="">* Adjuntá tu Curriculum</label>
                            <input type="file" accept=".doc, .docx, .pdf" size="3000000" class="form-control-file" name="adjunto_cv" required>
                        </div>

                        <hr class="my-5">

                        <div class="form-group">
                            <p class="small">Al momento de cargar tu curriculum, considerá lo siguiente:</p>
                            <ul class="small">
                                <li>El documento no debe pesar más de 3Mb.</li>
                                <li>No incluir el escaneado de los diplomas y/o certificados.</li>
                                <li>Debe incluir una fotografía actualizada.</li>
                                <li>Los formatos permitidos son: .doc, .docx, .pdf</li>
                            </ul>
                        </div>
        
                        <input name="ipCliente" type="hidden" value="<?php $ipCliente = $_SERVER['REMOTE_ADDR']; echo $ipCliente ?>">
        
                        <div class="form-group mt-5">
                            <div class="form-row">
                                <div class="col-lg-6 offset-lg-3">
                                    <button class="btn btn-success btn-block" type="submit" name="submit">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end content -->


    <!-- footer -->
    <?php include("includes/footer.php"); ?>
    
    <!-- end footer -->

    <script async defer src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script async defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script async defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>