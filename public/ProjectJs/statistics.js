$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectStatisticsForRating",
       success:function(data)
       {
         var tituloViaje = [];
         var valorViaje  = [];
         for(var i in data ){
           tituloViaje.push("Viaje " + data[i].Titulo);
           valorViaje.push(data[i].Valor);
         }
         var chartData =  {
             labels: tituloViaje,
             datasets : [
                        {
                          label: 'Votos',
                          backgroundColor: 'rgb( 248, 123, 184 )',
                          borderColor: 'rgba( 215, 37, 123 )',
                          hoverBackgroungColor: 'rgba( 231, 25, 125 )',
                          hoverBorderColor: 'rgba( 231, 25, 125 )',
                          data:valorViaje
                        }
                    ]
         };
         var cxt = $("#myChart");
         var barGraph = new Chart(cxt, {
                type:'bar',
                data: chartData,
                options: {
                   scales: {
                       yAxes: [{
                           ticks: {
                               suggestedMin: 5,
                               suggestedMax: 20
                           }
                       }]
                   }
               }
         });
       }

    });

});
