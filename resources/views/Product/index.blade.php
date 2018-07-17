<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

 <script src="ProjectJs/product.js" type="text/javascript"></script>


</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel- panel-default">
              <div class="panel-headding">Productos</div>

          <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Agregar Productos</button>
          <!--/Admin-RC/public//GoReg data-toggle="modal" data-target="#myModal"-->
              <div class="panel-body">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acción</th>
                      </tr>
                  </thead>
                    <tbody id="product-info">
                    </tbody>
                </table>

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
                              <input id="con_nomp" type="text" name="nombre">
                            </div>
                        </div>
                        <div class="col-4-md">
                            <div class="form-group">
                              <label>Descripción</label>
                              <input id="con_descp" type="text" name="descripción">
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button  type="button" class="btn btn-default" id="con_addp">Agregar</button>

                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </form>

                    </div>

                  </div>
                </div>
              </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </body>
    </html>
