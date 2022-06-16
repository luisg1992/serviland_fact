<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assets/js/archivo.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table id="myTable" class=" table order-list">
    <thead>
        <tr>
            <td>DESCIPCIÓN</td>
            <td>CANTIDAD</td>
            <td>PRECIO UNITARIO</td>
            <td>MONTO</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-sm-7">
                <input type="text" name="desc" class="form-control" />
            </td>
            <td class="col-sm-1">
                <input type="mail" name="cant"  class="form-control"/>
            </td>
            <td class="col-sm-1">
                <input type="text" name="pu"  class="form-control"/>
            </td>
            <td class="col-sm-1">
                <input type="text" name="monto"  class="form-control"/>
            </td>
            <td class="col-sm-2"><a class="deleteRow"></a>

            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align: left;">
                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Agregar Producto" />
            </td>
        </tr>
        <tr>
        </tr>
    </tfoot>
</table>
</div>  
<script>
    function calcMonto(){
        var monto = form.getElementByName('monto');
    }
</script>