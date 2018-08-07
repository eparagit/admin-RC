<form class="form-group" accept-charset="UTF-8" action="updateProduct" method="POST" enctype="multipart/form-data">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
          <div class="col-lg-7">
              <div class="form-group">
                <label >Imagen del Tour</label>
                <input type="hidden" value="{{$array['array'][0]['Ruta_Imagen']}}" name="imagenViejaProducto_modal" id="imagenViejaProducto_modal"/>
                <input type="hidden" value="{{$array['array'][0]['ID_Producto']}}" name="idProducto_modal" id="idProducto_modal"/>
                <input type="hidden" value="{{$array['array'][0]['usuario_ID']}}" name="idusuario_modal" id="idusuario_modal"/>
                <img type="file" style="width:300px; height:200px;" src={{url('images/'.$array['array'][0]['Ruta_Imagen'])}} >
              </div>
          </div>
          <div class="col-lg-5">
              <div class="form-group">
                <label >Cambiar Imagen</label>
                <input type="file" name="imageProducto_modal" id="imageProducto_modal" accept="image/*"  class="form-control">
              </div>
          </div>
        </div>
        <div class="row">
           <div class="col-lg-6">
               <div class="form-group">
                 <label >Titulo</label>
                 <input class="form-control" name="tituloProducto_modal" id="tituloProducto_modal"  type="text" value="{{ $array['array'][0]['Nombre'] }}" required />
               </div>
           </div>
           <div class="col-lg-6">
               <div class="form-group">
                 <label >Descripción</label>
                 <textarea class="form-control" name="descripcionProducto_modal" id="descripcionProducto_modal"  type="text" required >{{ $array['array'][0]['Descripcion'] }}</textarea>
               </div>
           </div>
        </div>
        <div class="row">
          <div class="col-12">
             <button class="btn btn-success" style="width:100%;" type="submit">Guardar</button>
          </div>
        </div>

</form>
