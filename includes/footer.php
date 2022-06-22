<footer>
    <div class="p-3 mb-2 fondofooter text-white">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center">
                    <h4>Plataformas de desarrollo</h4>
                    <h5>Integrantes</h5>
                    <p>Hernandez Gonzalo (gonzalo.hernandez@davinci.edu.ar)<br> Montes de Oca Romina (romina.montes@davinci.edu.ar)  <br> Tercic Lucia. (maria.tercic@davinci.edu.ar)</p>
                    
                </div>

                <div class="col-sm text-center">
                    <h4>Recibi las novedades</h4>

                    <form class="mi-form" method="POST">
                        <div class="form-group">
                            <label for="inputAddress"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Direccion de email">
                            <small id="emailHelp" class="form-text text-muted">No vamos a compartir tu email con nadie.</small>
                        </div>

                        <button id="modal" class="mb-2 btn-block btn-warning" class="btn btn-primary">Quiero suscribirme</button>

                        <div id="tvesModal" class="modalContainer">
                            <div class="modal-content">
                            <button id="cerrar" class="close" >×</button>
                                <h2>Gracias!</h2>
                                <p>Ya te suscribiste!</p>
                            </div>
                        </div>


                        <?php

                        if (isset($_REQUEST['email'])) {

                            $contenido = file_get_contents('json/email.json'); //carga archivo json
                            $contenido_decodificado = json_decode($contenido, true);  //crea un array para php
                            $a_email = array('email' => $_REQUEST['email']); //agrega nueva info al array
                            $contenido_decodificado[date('YmdHisU')] = $a_email; //agrega contenido
                            $js = json_encode($contenido_decodificado); //codifica nuevamente
                            file_put_contents('json/email.json', $js); //agrega el contenido

                        
                        }
                        ?>

                    </form>
                </div>


                <div class="col-sm text-center">
                    <h5>En cada minuto hay muchos días, aprovechalos soñando en grande</h5>
                    <p>Aglaya Design es una agencia de diseño donde podes encontrar creaciones de diversos artistas para inspirarte ...</p>

                    <h6>Seguinos en las redes sociales</h6>
                    <ul class="justify-content-center list-group list-group-horizontal redes ">

                        <li class="list-group-item fondofooter border-0">
                            <a href="https://www.facebook.com/" target="new">
                                <i class="fab fa-facebook-f"></i>

                            </a>
                        </li>
                        <li class="list-group-item fondofooter border-0">
                            <a href="https://www.twitter.com/" target="new">
                                <i class="fab fa-twitter"></i>

                            </a>
                        </li>
                        <li class="list-group-item fondofooter border-0">
                            <a href="https://www.instagram.com/" target="new">
                                <i class="fab fa-instagram"></i>

                            </a>
                        </li>
                        <li class="list-group-item fondofooter border-0">
                            <a href="https://www.youtube.com.ar/" target="new">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>


        <div class="text-center">
            <p><strong> Escuela de Arte Multimedial Da Vinci - DMN4AV - Primer Cuatrimestre - Año 2022</strong></p>

        </div>
    </div>
</footer>
<script type='text/javascript' src="includes/func/func.js"> </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js " integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI " crossorigin="anonymous "></script>
</body>

</html>