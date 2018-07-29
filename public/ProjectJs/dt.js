$(document).ready(function(){
  jQuery.datetimepicker.setLocale('es');
  //jQuery.datetimepicker.setDateFormatter();
$('#con_dtfhs').datetimepicker({
  //format:'d/m/Y H:i'
  format: 'd/m/Y h:i:s A',
  formatTime:'h:i:s d',
  ampm: true
});
$('#con_dtfhr').datetimepicker({
  format: 'd/m/Y h:i:s A',
  formatTime:'h:i:s d',
  ampm: true
});
$('#con_dtfhp').datetimepicker({
  format: 'd/m/Y h:i:s A',
  formatTime:'h:i:s d',
  ampm: true
});
$('#con_dtfhv').datetimepicker({
  format: 'd/m/Y h:i:s A',
  formatTime:'h:i:s d',
  ampm: true
});

});
