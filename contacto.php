<?php include "include/header.php"; ?>
    <div class="container">
        <section>

            <h4>Póngase en contacto con Stemprocell®</h4>

            <p>Sólo debe llenar el siguiente formulario de contacto y nosotros nos comunicaremos con usted para
                responder a sus preguntas y proporcionarle la información solicitada.</p>

            <section>
                <form action="contacto.php" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Nombres">
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Correo Electrónico">
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Numero de teléfono">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 col-md-12">


                                <textarea name="interesado" id="interesado" rows="5"
                                          class="form-control" placeholder="Estoy interesad@ en...."></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">

                            <div class="col">
                                    <textarea name="comentarios" id="comentarios" rows="5"
                                              class="form-control" placeholder="Comentarios"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">

                                <button class="btn btn-secondary btn-lg btn-block" type="submit">Enviar</button>

                            </div>
                        </div>
                    </div>
                </form>
            </section>


        </section>
    </div>
<?php include "include/footer.php"; ?>