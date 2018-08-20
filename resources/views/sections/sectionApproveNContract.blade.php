<form class="form-group" accept-charset="UTF-8" action="approvalNewContract" method="POST" enctype="multipart/form-data">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
           <div class="col-lg-2">
               <div class="form-group">
                 <label >Contratación</label>
                 <input class="form-control" name="con_id_modal" id="con_id_modal"  type="text" value="{{ $array['array'][0]['ID_Contratacion'] }}" required />
               </div>
           </div>
           </div>
             <div class="row">
           <div class="col-lg-8">
               <div class="form-group">
                 <label >Cliente</label>
                 <input class="form-control" name="con_cliente_modal" id="con_cliente_modal"  type="text" value="{{ $array['array'][0]['NombreCompleto'] }}{{ $array['array'][0]['PrimerApellido'] }}" required />
               </div>
           </div>
           </div>
             <div class="row">
               <div class="col-lg-12">
               <h4>Detalles</h4>
               </div>
             </div>
             <div class="row">
           <div class="col-lg-6">
               <div class="form-group">
                 <label >Servicio</label>
                 <input class="form-control" name="con_servicio_modal" id="con_servicio_modal"  type="text" value="{{ $array['array'][0]['Descripcion_S'] }}" required />
               </div>
           </div>

           <div class="col-lg-6">
               <div class="form-group">
                 <label >Tipo de Evento</label>
                 <input class="form-control" name="con_evento_modal" id="con_evento_modal"  type="text" value="{{ $array['array'][0]['Descripcion_ET'] }}" required />
               </div>
           </div>
            </div>
             <div class="row">
           <div class="col-lg-6">
               <div class="form-group">
                 <label >Fecha de Solicitud</label>
                 <input class="form-control" name="con_fsolicitud_modal" id="con_fsolicitud_modal"  type="text" value="{{ $array['array'][0]['FechaTramite'] }}" required />
               </div>
           </div>
           <div class="col-lg-6">
               <div class="form-group">
                 <label >Fecha del Evento</label>
                 <input class="form-control" name="con_fevento_modal" id="con_fevento_modal"  type="text" value="{{ $array['array'][0]['FechaServicio'] }}" required />
               </div>
           </div>
            </div>
               <div class="row">
           <div class="col-lg-6">
               <div class="form-group">
                 <h4>Costo Total</h4>
                 <input class="form-control" name="con_costoT_modal" id="con_costoT_modal"  type="text" value="" required />
               </div>
               </div>
           </div>
        </div>
        <div class="row">
          <div class="col-12">
             <button class="btn btn-success" style="width:100%;" type="submit">Guardar</button>
          </div>
        </div>
</form>
