@if (isset($array['array'][1]))
@foreach($array as $product)
   @foreach($product as $item)
   <tr>
     <td rowspan='7'><img style="width: 500px;" src={{url('images/'.$item['Ruta_Imagen'])}}/></td>
     <td>Identificador: <input type="text" id="con_id_v" value="{{ $item['ID_Producto'] }}"></td>
     <td>{{ $item['Nombre'] }}</td>
      <td></td>
      <td></td>
      <td></td>
        </tr>
        <tr>
          <td>Usuario que registro el producto:</td>
          <td >{{ $item['NombreCompleto'] }}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
          <td>Descripción:</td>
          <td >{{ $item['Descripcion'] }}</td>
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
        <td rowspan='4'></td>
        <td rowspan='4' colspan='5'></td>
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
            <button id="btn_mod_product" class="btn btn-primary" data-id="{{ $item['ID_Producto'] }}" type="button" >Modificar</button>
            <button id="btn_rech_product" class="btn btn-danger" data-id="{{ $item['ID_Producto'] }}" type="button">Eliminar</button>
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
  <td rowspan='7'><img style="width: 500px;" src={{url('images/'.$array['array'][0]['Ruta_Imagen'])}}/></td>
  <td>Identificador: <input type="text" id="con_id_v" value="{{ $array['array'][0]['ID_Producto'] }}"></td>
  <td>{{ $array['array'][0]['Nombre'] }}</td>
   <td></td>
   <td></td>
   <td></td>
     </tr>
     <tr>
       <td>Usuario que registro el producto:</td>
       <td >{{ $array['array'][0]['NombreCompleto'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
       <td>Descripción:</td>
       <td >{{ $array['array'][0]['Descripcion'] }}</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
     <tr>
     <td rowspan='4'></td>
     <td rowspan='4' colspan='5'></td>
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
         <button id="btn_mod_product" class="btn btn-primary" data-id="{{ $array['array'][0]['ID_Producto'] }}" type="button" >Modificar</button>
         <button id="btn_rech_product" class="btn btn-danger" data-id="{{ $array['array'][0]['ID_Producto'] }}" type="button">Eliminar</button>
       </td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
     </tr>
@endif
