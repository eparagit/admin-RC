$(document).ready(function(){
  $.ajax({
    type:"GET",
    data: {},
    url:"RemainingContractCounter",
    success:function(data){
      var countc="";
      $.each(data,function(v){
        var val=data[v];

        countc+=val['countContract'];

      });
      if(countc>0){
        $("#rcontracts").append("<span class='badge'>"+countc+"</span>");
      }else{
        $("#rcontracts").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"RemainingBookingCounter",
    success:function(data){
      var countb="";
      $.each(data,function(v){
        var val=data[v];
        countb+=val['countBooking'];
      });
      if(countb>0){
        $("#rbooking").append("<span class='badge'>"+countb+"</span>");
      }else{
        $("#rbooking").val();
      }

    }
  });

  $.ajax({
    type:"GET",
    data: {},
    url:"RemainingTourCounter",
    success:function(data){
      var countt="";
      $.each(data,function(v){
        var val=data[v];
        countt+=val['tourCounter'];
      });
      if(countt>0){
        $("#rtours").append("<span class='badge'>"+countt+"</span>");
      }else{
        $("#rtours").val();
      }

    }
  });
});
