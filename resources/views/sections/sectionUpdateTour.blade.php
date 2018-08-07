<form class="form-group" accept-charset="UTF-8" action="updateTour" method="POST" enctype="multipart/form-data">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
          <div class="col-lg-7">
              <div class="form-group">
                <label >Imagen del Tour</label>
                <input type="hidden" value="{{$array['array'][0]['Ruta_Imagen']}}" name="imagenVieja_modal" id="imagenVieja_modal"/>
                <input type="hidden" value="{{$array['array'][0]['ID_Viaje']}}" name="idtour_modal" id="idtour_modal"/>
                <img type="file" style="width:300px; height:200px;" src={{url('images/'.$array['array'][0]['Ruta_Imagen'])}} >
              </div>
          </div>
          <div class="col-lg-5">
              <div class="form-group">
                <label >Cambiar Imagen</label>
                <input type="file" name="image_modal" id="image_modal" accept="image/*"  class="form-control">
              </div>
          </div>
        </div>
        <div class="row">
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Titulo</label>
                 <input class="form-control" name="con_titulo_modal" id="con_titulo_modal"  type="text" value="{{ $array['array'][0]['Titulo'] }}" required />
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Lugar de Salida</label>
                 <input class="form-control" name="con_lsalida_modal" id="con_lsalida_modal"  type="text" value="{{ $array['array'][0]['Lugar_Salida'] }}" required />
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Destino</label>
                 <input class="form-control" name="con_destino_modal" id="con_destino_modal"  type="text" value="{{ $array['array'][0]['Destino'] }}" required />
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Tipo de viaje</label>
                    <input type="hidden" value="{{ $array['array'][0]['tipo_viaje_ID'] }}" id="valueTipViaje_ModalInput"/>
                 <select class="form-control" id="tviaje_modal" name="tviaje_modal" >
                  <option value="0">Seleccione</option>
                 </select>
               </div>
           </div>
        </div>

        <div class="row">
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Categoría</label>
                 <input type="hidden" value="{{ $array['array'][0]['categoria_viaje_ID'] }}" id="valueCatViaje_ModalInput"/>
                 <select class="form-control"  id="cviaje_modal" name="cviaje_modal" >
                  <option value="0">Seleccione</option>
                 </select>
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Cupo</label>
                 <input class="form-control"  id="con_cupo_modal" name="con_cupo_modal" type="number" value="{{ $array['array'][0]['Cupo'] }}" required />
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label>Costo colones</label>
                 <input class="form-control" name="con_costo_modal" id="con_costo_modal" type="number" value="{{ $array['array'][0]['Costo'] }}" required>
               </div>
           </div>
           <div class="col-lg-3">
               <div class="form-group">
                 <label >Fecha de salida</label>
                 <input type="text" id="con_dtfhs_modal" name="con_dtfhs_modal" class="form-control" value="{{ $array['array'][0]['FechaHora_Salida'] }}" required />
               </div>
           </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                  <label>Fecha de regreso</label>
                   <input type="text" id="con_dtfhr_modal"  name="con_dtfhr_modal" class="form-control" value="{{ $array['array'][0]['FechaHora_Regreso'] }}" required />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                  <label>Fecha de vencimiento</label>
                  <input type="text" id="con_dtfhv_modal"  name="con_dtfhv_modal" class="form-control" value="{{ $array['array'][0]['Vencimiento'] }}" required />
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
              <div class="form-group">
                <label>Descripción del tour</label>
                <textarea class="form-control" name="con_descripcion_modal" id="con_descripcion_modal" type="text" required >{{ $array['array'][0]['V_Descripcion'] }}</textarea>
              </div>
          </div>
           <div class="col-lg-4">
               <div class="form-group">
                 <label >Requisitos</label>
                 <textarea  class="form-control" id="con_requisitos_modal" name="con_requisitos_modal" type="text" required>{{ $array['array'][0]['Requisitos'] }}</textarea>
               </div>
           </div>
           <div class="col-lg-4">
               <div class="form-group">
                 <label>Incluye</label>
                  <textarea class="form-control" id="con_incluye_modal"  name="con_incluye_modal"  type="email" required>{{ $array['array'][0]['Incluye'] }}</textarea>
               </div>
           </div>
        </div>
        <div class="row">
          <div class="col-12">
             <button class="btn btn-success" style="width:100%;" type="submit">Guardar</button>
          </div>
        </div>

</form>
