$(document).ready(function(){
  var mybodyid = $('body').attr('id');
  var mynavid = '#nav' + mybodyid;
  /* e.g. for 3.shtml:
      mybodyid is 'part3'
      mynavid  is '#navpart3'
   */
  $(mynavid).attr('id','iamhere');
});