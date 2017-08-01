
<div class="container">
  <?php if ((isset($_POST["enviado"])) && ($_POST["enviado"]== "form1"))
{
$archifoto= $_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],"images/".$archifoto);?>
  <script>

opener.document.form1.imagen.value="<?php echo  $archifoto  ?>";
self.close();

</script>


  <?php

}else{

?>
    <br>
        <br></br>
        <div class="container">
        <form action="subirimg.php" method="post" enctype="multipart/form-data" name="form1" id="form1" >
    <p><input name="imagen" class="btn btn-primary btn-lg " type="file" size="50" /></p>
    <p><input name="botton" type="submit" class="btn btn-success btn-lg " id="botton" value="Subir Imagen"  /></p>
    <input name="enviado" type="hidden" value="form1" />
    
    
  </form>
        </div>
  <?php }?>
</div>
