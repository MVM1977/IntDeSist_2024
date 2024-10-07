<div id="modalarchivo" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Seleccionar Archivos</h4>
            </div>
            <form method="post" id="detalle_form">
                <input type="hidden" id="reg_id" name="reg_id" class="form-control">
                <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-12 control-label" for="regd_obs">Observación</label>
                            <div class="col-12">
                                <textarea rows="3" id="regd_obs" name="regd_obs" class="form-control text-uppercase" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="regd_file">Seleccionar Archivo</label>
                            <div class="col-12">
                                <input type="file" id="regd_file" name="regd_file" />
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default btn-default" type="button">Cerrar</button>
                    <button class="btn btn-primary"  type="submit" name="action" value="add" id="btnagregarfile">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>