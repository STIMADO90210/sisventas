<br>
    <br>
<div class="container">
   
    <div class="col-lg-6 col-lg-offset-3" style="background: #ffffff ">
       <br>
       <h1 class="text-center text-primary ">AGREGAR PRODUCTO</h1>
    <br>
    <?= validation_errors(); ?>
        <form class="form-group" method="post" action="" name="ingprod" id="ingprod">
            <div class="form-group">
                <small>Producto</small>
                <input class="form-control" name="" id="" >
            </div>
            <div class="form-group">
                <small>categoria</small>
                <select class="form-control" name="cate" id="cate">
                    <option value="" > SEELCCIONE</option>
                    <option value="1" >LINEA BLANCA </option>
                     <option value="2" >ENTRETENIMIENTO </option>
                      <option value="3" >INFORMATICA </option>
                    
                </select>
            </div>
            <div class="form-group">
                
                <div class="col-lg-8">
                    <small>	imagen</small>
                <input class="form-control" name="" id="" >
                </div> 
                <br>
                <button class="btn btn-primary" >Imagen</button>
            </div>
            <div class="form-group">
                <small>precio</small>
                <input class="form-control" name="" id="" >
            </div>
            <br>
            <button class="btn btn-primary col-lg-offset-1" type="submit" name="enviar">Guardar Producto</button>
            <br><br>
        </form>
    </div>
    
</div>
