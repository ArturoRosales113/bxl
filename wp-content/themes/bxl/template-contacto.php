<?php /* Template Name: Contacto */ ?>
<?php get_header();?>
        <section class="py-5 my-5">
            <div class="row justify-content-center align-items-centerw-100">
                <div class="col-10 col-lg-6 text-center">
                    <img src="<?php bloginfo('template_directory');?>/img/logo_bx.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center align-items-center py-5">
                <div class="col-10">
                    <div class="row justify-content-center">
                        <div class="col-5 text-center">
                            <h5 class="py-5 text-center">Formulario de contacto</h5>
                            <form action="" class="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <textarea name="mensaje" id="" cols="30" class="form-control" placeholder="Escribe tu mensaje..." rows="10"></textarea>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Acepto haber leído el <a href="">aviso de privacidad</a></label>
                                </div>
                                <button type="submit" class="btn bg-gris-2 text-uppercase">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row align-items-center bg-gris">
                <div class="col-12 col-lg-6 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15043.1724344507!2d-96.86363!3d19.507535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc875857f3cb0f7eb!2sPlaza+Xanat!5e0!3m2!1ses-419!2smx!4v1559074028744!5m2!1ses-419!2smx" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <h1>ubicación</h1>
                            <p><i class="fas fa-map-marker color-naranja"></i>&nbsp;Carretera Federal Xalapa - Veracruz km 4+300, Colonia El Olmo, 91194, Xalapa - Enriquez, Veracruz </p>
                            <p><i class="fas fa-phone color-naranja"></i>&nbsp;01 228 237 7905</p>
                            <p><i class="fas fa-envelope color-naranja"></i>&nbsp;contacto@cortinaslistasparainstalar.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

<?php 
get_footer();
?>