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
        $("#b_rcontracts").append("<span class='badge'>"+countc+"</span>");
      }else{
        $("#b_rcontracts").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"NewContractCounter",
    success:function(data){
      var countn="";
      $.each(data,function(v){
        var val=data[v];

        countn+=val['countContract'];

      });
      if(countn>0){
        $("#b_ncontracts").append("<span class='badge'>"+countn+"</span>");
      }else{
        $("#b_ncontracts").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"ContractCounter",
    success:function(data){
      var count="";
      $.each(data,function(v){
        var val=data[v];

        count+=val['countContract'];

      });
      if(count>0){
        $("#rcontracts").append("<span class='badge'>"+count+"</span>");
      }else{
        $("#rcontracts").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"RBookingCounter",
    success:function(data){

      var countrb="";
      $.each(data,function(v){
        var val=data[v];

        countrb+=val['countBooking'];

      });
      if(countrb>0){
        
        $("#b_rbooking").append("<span class='badge'>"+countrb+"</span>");
      }else{
        $("#b_rbooking").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"NewBookingCounter",
    success:function(data){

      var countnb="";
      $.each(data,function(v){
        var val=data[v];

        countnb+=val['countBooking'];

      });

      if(countnb>0){
        //alert(countnb);
        $("#b_ nbookingNew").append("<span class='badge'>"+countnb+"</span>");
      }else{
        $("#b_ nbookingNew").val();
      }

    }
  });
  $.ajax({
    type:"GET",
    data: {},
    url:"BookingCounter",
    success:function(data){
      var count="";
      $.each(data,function(v){
        var val=data[v];
        count+=val['countBooking'];
      });
      if(count>0){
        $("#rbooking").append("<span class='badge'>"+count+"</span>");
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
        $("#b_rtours").append("<span class='badge'>"+countt+"</span>");
      }else{
        $("#rtours").val();
      }

    }
  });
});
