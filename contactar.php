<?php
if(isset($_POST['accion']) && $_POST['accion']=="enviar_comentario"){
$mensaje = addslashes($_POST['mensaje']);
if(mail("tuemail@email.com","Formulario de Contacto",$mensaje)){
echo "Gracias por enviar el email, pronto lo leeremos.";
}else{
echo "No se pudo enviar el email.";
}
}else{
?>
<form action="contactar.php" method="post">
<p>
<label for="mensaje">Mensaje</label>
<textarea name="mensaje"></textarea>
</p>
<p>
<input type="submit" value="Enviar" />
<input type="hidden" name="accion" value="enviar_comentario">
</p>
</form>
<?}