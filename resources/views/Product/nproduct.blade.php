 <!--Modal-->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nuevo Producto</h4>
      </div>
      <form action="" method="POST" id="fp-insert">
        <div class="modal-body">
        <div class="col-4-md">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" name="nombre">
            </div>
        </div>
        <div class="col-4-md">
            <div class="form-group">
              <label>Descripción</label>
              <input type="text" name="descripción">
            </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-success pull-left">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>

    </div>

  </div>
</div>
