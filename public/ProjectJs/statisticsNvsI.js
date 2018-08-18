$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectStatisticsNacionalvsInternational",
       success:function(data)
       {       console.log(data);
               var tituloViaje = [];
               var valorViaje  = [];
               for(var i in data ){
                 tituloViaje.push("Viaje " + data[i].Descripcion);
                 valorViaje.push(data[i].Cantidad);
               }
               var chartData =  {
                   labels: tituloViaje,
                   datasets : [
                              {
                                label: 'Tipo Viaje',
                                backgroundColor: [
                                     'rgba(255, 99, 132, 0.2)',
                                     'rgba(54, 162, 235, 0.2)'
                                 ],
                                 borderColor: [
                                     'rgba(255,99,132,1)',
                                     'rgba(54, 162, 235, 1)'
                                 ],
                                data:valorViaje
                              }
                          ]
               };
              console.log(chartData);
               var cxt = $("#chartPie");
               var barGraph = new Chart(cxt, {
                      type:'pie',
                      data: chartData,
                      options: {
                         scales: {
                             yAxes: [{
                                 ticks: {
                                     suggestedMin: 5,
                                     suggestedMax: 10
                                 }
                             }]
                         }
                     }
               });

       }

    });

});
