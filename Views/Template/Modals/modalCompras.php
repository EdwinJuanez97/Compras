<!-- Modal -->
<div class="modal fade" id="modalFormCompras" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal">Nueva Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <form id="formProductos" name="formProductos" class="form-horizontal">
                    <input type="hidden" id="idProducto" name="idProducto" value="">
                    <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>

                    <!-- Nombre del producto y el Proveedor -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label">Producto <span class="required">*</span></label>
                                <input class="form-control" id="txtproducto" name="txtproducto" type="text">
                            </div>
                            <div class="form-group col-md-6"">
                                <label class=" control-label">Proveedor <span class="required">*</span></label>
                                <input class="form-control" id="txtproveedor" name="txtproveedor" type="text">
                            </div>
                        </div>

                        <!-- Cantidad y Precio de Compra -->
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-label">Cantidad <span class="required">*</span></label>
                                    <input class="form-control" id="txtcantidad" name="txtcantidad" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">Precio de Compra <span class="required">*</span></label>
                                    <input class="form-control" id="txtpreciocompra" name="txtpreciocompra" type="text">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" id="btnAddRow"><i class="fas fa-plus"></i> Agregar</button>
                    </div>

                    <!--   TABLA DE COMPRAS DENTRO DEL MODAL -->
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Acciones</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>SubTotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Botones de Guardar y Cerrar -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <button id="btnActionForm" class="btn btn-primary btn-lg btn-block" type="submit">
                                <i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                        </div>
                        <div class="form-group col-md-6">
                            <button class="btn btn-danger btn-lg btn-block" type="button" data-dismiss="modal">
                                <i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>