<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<script type="text/javascript">$(document).ready(function(){activarItemMenu("blusas")});</script>
<body>
<div class="wrapper">
    <?php include("header.php") ?>
    <?php include("navbar.php") ?>

    
    <div class="section_container">
        <!--Mid Section Starts-->
        <section>
            
            <div class="row"><!-- inicio de row-->
    <h3 class="letra-titulo">Envíanos un mensaje</h3>
    <hr>
    </div><!-- fin del row-->
    <form data-validate="parsley" action="mail.php?e=true" data-validate="parsley" class="container" role="form" method="post">
        <div class="row">
            <div class="col-sm-5">
                <div class="control-group">
                <label for="nom">Nombre</label>
                <input class="form-control" name="nombre" placeholder="Ingresa tu nombre" type="text" id="nom" data-required="true">
                </div>
                <br>
                <div class="control-group">
                <label for="nomemp">Nombre de la empresa</label>
                <input class="form-control" name="empresa" placeholder="Tu empresa" type="text" id="nomemp" data-required="true">
                </div>
                <br>
                <div class="control-group">
                <label for="mail">Correo electrónico</label>
                <input class="form-control" name="email" placeholder="Ingresa tu e-mail" type="text" id="mail" data-required="true" data-type="email">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="control-group">
                <label for="tel">Teléfono</label>
                <input class="form-control" name="telefono" type="text" placeholder="Ingresa tu teléfono" id="tel" data-required="true" data-type="phone">
                </div>

                <div class="control-group">
                <label for="mensaje">Mensaje</label><br>
                <textarea name="mensaje" class="form-control" placeholder="¿Como podemos ayudarte?" id="mensaje" cols="30" rows="6" data-required="true"></textarea>
                </div>
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-default boton-enviar btn-lg letra-blanca" value="Enviar">
    </form>
            
            
        </section>
        <!--Mid Section Ends-->
        <?php include("footer.php") ?>
    </div>
    
</div>
</body>
</html>
