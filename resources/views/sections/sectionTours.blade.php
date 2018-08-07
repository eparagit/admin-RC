@if (isset($array['array'][1]))
@foreach($array as $tour)
   @foreach($tour as $item)
<tr>
   <td rowspan='7'><img style="width: 500px;" src={{url('images/'.$item['Ruta_Imagen'])}}/></td>
   <td>Reg.<input type="text" id="con_id_v" value="{{ $item['ID_Viaje'] }}"></td>
   <td>{{ $item['NombreUsuario'] }}</td>
   <td></td>
   <td></td>
   <td></td>
     </tr>
     <tr>
     <td>Publicación:</td>
     <td >{{ $item['Titulo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Vencimiento:</td>
     <td >{{ $item['Vencimiento'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Tipo Viaje:</td>
     <td>{{ $item['TV_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Categoría:</td>
     <td>{{ $item['CV_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Costo:</td>
     <td>{{ $item['Costo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Cupo:</td>
     <td>{{ $item['Cupo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Titulo:</td>
     <td colspan='5'>{{ $item['Titulo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Lugar de Salida:</td>
     <td colspan='5'>{{ $item['Lugar_Salida'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Destino:</td>
     <td colspan='5'>{{ $item['Destino'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Fecha y Hora de Salida:</td>
     <td >{{ $item['FechaHora_Salida'] }}</td>
     <td></td>
     <td></td>
     <td>Fecha y Hora de Regreso:</td>
     <td>{{ $item['FechaHora_Regreso'] }}</td>
     </tr>
     <tr>
     <td rowspan='3'>Descripción:</td>
     <td rowspan='3' colspan='5'>{{ $item['V_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td rowspan='4'>Incluye:</td>
     <td rowspan='4' colspan='5'>{{ $item['Incluye'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td rowspan='4'>Requisitos:</td>
     <td rowspan='4' colspan='5'>{{ $item['Requisitos'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td colspan='6' align='center'>
       <button id="btn_apr" class="btn btn-success" data-id="{{ $item['ID_Viaje'] }}" type="button">Aprobar</button>
       <button id="btn_mod" class="btn btn-primary" data-id="{{ $item['ID_Viaje'] }}" type="button" >Modificar</button>
       <button id="btn_rech" class="btn btn-danger" data-id="{{ $item['ID_Viaje'] }}" type="button">Rechazar</button>
     </td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>

  @endforeach
@endforeach
@else

<tr>
   <td rowspan='7'><img style="width: 500px;" src={{url('images/'.$array["array"][0]['Ruta_Imagen'])}}/></td>
   <td>Reg.<input type="text" id="con_id_v" value="{{ $array['array'][0]['ID_Viaje'] }}"></td>
   <td>{{ $array['array'][0]['NombreUsuario'] }}</td>
   <td></td>
   <td></td>
   <td></td>
     </tr>
     <tr>
     <td>Publicación:</td>
     <td >{{ $array['array'][0]['Titulo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Vencimiento:</td>
     <td >{{ $array['array'][0]['Vencimiento'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Tipo Viaje:</td>
     <td>{{ $array['array'][0]['TV_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Categoría:</td>
     <td>{{ $array['array'][0]['CV_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Costo:</td>
     <td>{{ $array['array'][0]['Costo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Cupo:</td>
     <td>{{ $array['array'][0]['Cupo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Titulo:</td>
     <td colspan='5'>{{ $array['array'][0]['Titulo'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Lugar de Salida:</td>
     <td colspan='5'>{{ $array['array'][0]['Lugar_Salida'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Destino:</td>
     <td colspan='5'>{{ $array['array'][0]['Destino'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td>Fecha y Hora de Salida:</td>
     <td >{{ $array['array'][0]['FechaHora_Salida'] }}</td>
     <td></td>
     <td></td>
     <td>Fecha y Hora de Regreso:</td>
     <td>{{ $array['array'][0]['FechaHora_Regreso'] }}</td>
     </tr>
     <tr>
     <td rowspan='3'>Descripción:</td>
     <td rowspan='3' colspan='5'>{{ $array['array'][0]['V_Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td rowspan='4'>Incluye:</td>
     <td rowspan='4' colspan='5'>{{ $array['array'][0]['Incluye'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td rowspan='4'>Requisitos:</td>
     <td rowspan='4' colspan='5'>{{ $array['array'][0]['Requisitos'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td colspan='6' align='center'>
       <button id="btn_apr" class="btn btn-success" data-id="{{ $array['array'][0]['ID_Viaje'] }}" type="button">Aprobar</button>
       <button id="btn_mod" class="btn btn-primary" data-id="{{ $array['array'][0]['ID_Viaje'] }}" type="button">Modificar</button>
       <button id="btn_rech" class="btn btn-danger" data-id="{{ $array['array'][0]['ID_Viaje'] }}" type="button">Rechazar</button>
     </td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>

@endif
