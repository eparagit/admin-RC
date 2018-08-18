$(document).ready(function(){
  $.ajax({
       type:"GET",
       data: {},
       url:"selectStatisticsForRating",
       success:function(data)
       {console.log(data);
         var tituloViaje = [];
         var valorViaje  = [];
         for(var i in data ){
           tituloViaje.push("Viaje " + data[i].Titulo);
           valorViaje.push(data[i].Valor);
         }  //console.log(valorViaje);
         var chartData =  {
             labels: tituloViaje,
             datasets : [
                        {
                          label: 'Votos',
                          backgroundColor: '#6EC6C3',
                          borderColor: 'rgba( 44, 146, 143   )',
                          hoverBackgroungColor: '#3F7876',
                          hoverBorderColor: '#3F7876',
                          data:valorViaje
                        }
                    ]
         };
         console.log(chartData);
         var cxt = $("#myChart");
         var barGraph = new Chart(cxt, {
                type:'bar',
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
