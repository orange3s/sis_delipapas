<div class="row" id="cpo_compra">
    <div class="col-lg-12 col-xs-12">
        
        <?php if ($this->session->userdata('info') != '') { ?>

            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?= $this->session->userdata('info') ?>
            </div>

        <?php $this->session->set_userdata('info', ''); } if ($this->session->userdata('error') != '') { ?>

            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                <?= $this->session->userdata('error') ?>
            </div>

        <?php $this->session->set_userdata('error', ''); } ?>
        
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Nueva Compra
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Buscar producto: </label>
                    </div>                    
                    <div class="table-responsive">
                        <table id="table-producto" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Codigo</th>
                                    <th style="text-align: center;">Tipo</th>
                                    <th style="text-align: center;">Nombre</th>
                                    <th style="text-align: center;">Precio</th>
                                    <th style="text-align: center;">Stock</th>
                                    <th style="text-align: center;">Observ.</th>
                                    <th style="text-align: center;">Cantidad</th>
                                    <th style="text-align: center;">Proveedor</th>
                                    <th style="text-align: center;">Carrito</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($producto as $row) { ?>
                                
                                    <tr style="background-color:none">
                                        <td style="text-align:center;vertical-align:middle"><?= $row->codi_prod ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $row->nomb_tipo ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $row->nomb_prod ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $row->prec_prod ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $row->stoc_prod ?></td>
                                        <td style="text-align:center;vertical-align:middle"><?= $row->obsv_prod ?></td>
                                        <td style="text-align:center;vertical-align:middle">
                                            <input id="cant_pro_compra" type="number" min="1" class="form-control" value="0" style="width:80px">
                                        </td>
                                        <td style="text-align:center;vertical-align:middle">
                                            <select id="codi_rol" class="form-control" name="codi_pro"><?php foreach ($proveedor as $r) { ?> <option value="<?= $r->codi_pro ?>"><?= $r->nomb_pro ?></option> <?php } ?></select>
                                        </td>
                                        <td style="text-align:center;vertical-align:middle">                                            
                                            <input name="agregar" type="button" class="tooltip-emp btn btn-primary btn-circle fa agregar_prod_compra" value="&#xf00c;" data-toggle="tooltip" data-placement="top" title="Agregar al carrito">                                              
                                        </td>
                                    </tr>
                                    
                                <?php } ?>
                                    
                            </tbody>
                        </table>
                    </div>
  
                    <?= form_open(base_url('caja/registrar_compra'), $form_compra) ?>
                    
                    <section id="detalle_compra" class="content invoice" style="width: 100%;">
                        <div class="form-group" id="cpo_det_compra">
                            <label> Detalle de la compra: </label>
                            <table id="detalle_productos_compra" class="table table-bordered">
                                <thead>
                                    <tr style="background-color: #428bca; color: white;">
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Código">Código</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Producto">Producto</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Cantidad">Cantidad</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Valor unitario">Valor unitario</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Proveedor">Proveedor</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Importe">Importe</span></th>
                                        <th style="text-align: center;"><span class="tooltip_ven" data-toggle="tooltip" data-placement="top" title="Opciones">Opciones</span></th>
                                        <th></th>
                                    </tr>
                                </thead>                                    
                                <tfoot>
                                    <tr>
                                        <td colspan="6" style="text-align: right;"><strong>Total:</strong></td>
                                        <td id="total_compra"></td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td colspan="8">
                                            <div class="callout callout-danger">
                                                <p class="text-danger">Busque y agregue un producto</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <div class="form-group"><label> Observaci&oacute;n de la compra: </label> <?= form_textarea($obsv_com) ?> </div>
                    <input id="tbl_compra_reg" name="tbl_compra" type="hidden">
                    <input id="total_compra_reg" name="total" type="hidden">
                    <input type="submit" value="Registrar compra" id="register_compra" name="registrar" class="btn btn-block btn-lg btn-primary" disabled>
                    
                    <?= form_close() ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>