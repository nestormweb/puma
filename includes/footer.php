<div id="pre-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-white">
                    <img class="mb-4" src="images/logo-puma-energy-white.svg" width="240" alt="Puma Energy">
                    <p>Puma Energy <br>
                    Somos una empresa mundial de energía. <br>
                    Suministramos combustibles de alta calidad a millones de personas de manera segura, rápida, confiable y a un costo competitivo. <br>
                    Operamos en 47 países distribuidos en Asia, Europa, América, Oceanía y África.</p>

                    <p>Avda. España Nro. 1404 esq. Dr. Morra. <br>
                    Barrio Villa Mora, Asunción.</p>
                </div>

                <div class="col-lg-6">
                    <div class="pl-4">
                        <h4 class="mb-3 text-white text-uppercase">Contactanos</h4>

                        <form method="post" id="contact-form" name="contact-form" action="libraries/send-contacto.php">
                            <div class="form-group">
                                <input type="text" class="form-control input" name="nombre" placeholder="Nombre y Apellido" required>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-lg-6"><input type="email" class="form-control input" name="email" placeholder="Email" required></div>
                                    <div class="col-lg-6"><input type="tel" class="form-control input" name="telefono" placeholder="Teléfono (Ej: 021 123 456)"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control input" name="asunto" placeholder="Asunto" required>
                            </div>

                            <div class="form-group">
                                <textarea name="mensaje" class="form-control input" placeholder="Mensaje" cols="20" rows="6" required></textarea>
                            </div>

                            <input name="ipCliente" type="hidden" value="<?php $ipCliente = $_SERVER['REMOTE_ADDR']; echo $ipCliente ?>">

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <button class="btn btn-light btn-block" type="submit" name="submit">ENVIAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2">
                    <div class="copy">&copy Puma Energy <?php echo date("Y"); ?></div>
                </div>
    
                <div class="col-lg-8 d-flex justify-content-center">
                    <ul id="menu-footer" class="navigation">
                        <li><a href="la-empresa.php">La Empresa</a></li>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="estaciones.php">Estaciones</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="trabaja-con-nosotros.php">Trabajá con nosotros</a></li>
                    </ul>
                </div>
                    
                <div class="col-lg-2">
                    <ul class="redes float-right">
                        <li><a href="#https://www.facebook.com/PumaEnergyParaguay/"><img src="images/icono-facebook.svg" alt="Facebook"></a></li>
                        <li class="mr-1"><a href="https://www.instagram.com/pumaenergypy/"><img src="images/icono-instagram.svg" alt="Instagram"></a></li>
                        <li><a href="#"><img src="images/icono-linkedin.svg" alt="LinkedIn"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>