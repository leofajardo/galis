<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galis Boutique</title>
	<?php include("head.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
        $(window.location.hash).modal('show');
    	});
	</script>
</head>
<body>
<!-- Modal de mensaje bien -->
<div class="modal fade" id="g" tabindex="-1" role="dialog" aria-labelledby="gLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="gLabel">Galis Boutique</h4>
      </div>
      <div class="modal-body">
        <h2>Gracias</h2>
        <h4>Su mensaje se ha enviado correctamente</h4>
        <p>En breve recibirá una respuesta en su e-mail</p>
      </div>
      <div class="modal-footer">
      	<a href="index.php" class="btn btn-success">Aceptar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal de mensaje mal -->
<div class="modal fade" id="b" tabindex="-1" role="dialog" aria-labelledby="bLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="bLabel">Galis Boutique</h4>
      </div>
      <div class="modal-body">
        <h2>Lo sentimos</h2>
        <h4>Su mensaje no se pudo enviar</h4>
        <p>Porfavor intentelo de nuevo</p>
      </div>
      <div class="modal-footer">
      	<a href="contacto.php" class="btn btn-danger">Aceptar</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>

<?php
if(isset($_GET['e'])){
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(isset($_POST['empresa']))//el correo se envia desde la pagina de contacto
{
	$empresa=$_POST['empresa'];
	$formcontent="De: $nombre\nTelefono: $telefono\nE-mail: $email\nEmpresa: $empresa\nMensaje: $mensaje";
}
else//el correo se envia desde el formulario lateral en cualquier pagina
	$formcontent="De: $nombre\nTelefono: $telefono\nE-mail: $email\nMensaje: $mensaje";

$recipient = "ventas@galisboutique.com";
$subject = "Un nuevo mensaje de $email";
$mailheader = "From: $email";

$res=mail($recipient, $subject, $formcontent, $mailheader);
if($res)
	echo "<script type='text/javascript'>window.location='mail.php#g';</script>";
else
	echo "<script type='text/javascript'>window.location='mail.php#b';</script>";
}
?>