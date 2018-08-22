$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectStatisticsMostVisited",
       success:function(data)
       {
               var tituloViaje = [];
               var valorViaje  = [];
               for(var i in data ){
                 tituloViaje.push("Viaje " + data[i].Titulo);
                 valorViaje.push(data[i].Cantidad_Personas);
               }
               var chartData =  {
                   labels: tituloViaje,
                   datasets : [
                              {
                                label: 'Viajes Reservados',
                                backgroundColor: [
                                  'rgba(255, 206, 86, 0.2)',
                                  'rgba(75, 192, 192, 0.2)',
                                  'rgba(153, 102, 255, 0.2)',
                                  'rgba(255, 159, 64, 0.2)',
                                  'rgba(54, 162, 235, 0.2)',
                                  'rgba( 192, 235, 158 )',
                                  'rgba( 223, 184, 154 )'
                                 ],
                                 borderColor: [
                                   'rgba(255, 206, 86, 1)',
                                   'rgba(75, 192, 192, 1)',
                                   'rgba(153, 102, 255, 0.2)',
                                   'rgba(255, 159, 64, 0.2)',
                                   'rgba(54, 162, 235, 0.2)',
                                   'rgba( 192, 235, 158)',
                                   'rgba( 223, 184, 154 )'
                                 ],
                                data:valorViaje
                              }
                          ]
               };
               //console.log(chartData);
               var cxt = $("#chartVisited");
               var barGraph = new Chart(cxt, {
                      type:'doughnut',
                      data: chartData

               });

       }

    });

});
