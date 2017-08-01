
<div class="container">
    <br><br>
    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Manteniemiento Productos</h1>
            <button class="pull-right btn btn-default"><?= anchor('C_ingprodu', 'Nuevo Producto'); ?></button>
            <br> <br>
        </div>
        <div class="panel-body">
            <table class="table table-condensed text-center">
                <tr>
                    
                    <td style="background: #a00;color:white">id</td>
                    <td style="background: #a00;color:white">producto</td>
                    <td style="background: #a00;color:white"> Categoria</td>
                    <td colspan="2" style="background:#a00;color:white"> Acciones</td>
                </tr>
                <? foreach ($productos as $item) { ?>
                <tr>
                    <td ><?= $item->id; ?></td>
                    <td ><?= $item->producto; ?></td>
                    <td ><?= $item->precio; ?></td>
                    <td ><button class="btn btn-primary btn-block " style="color:white;"><?= anchor('C_admin', 'Editar'); ?></button></td>
                    <td ><button class="btn btn-danger btn-block " style="color:white;"><?= anchor('C_admin', 'Eliminar'); ?></button></td>
                    
                </tr>
                <? } ?>
            </table>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</div>
