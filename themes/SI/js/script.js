$( document ).ready(function() {
  if( $(".shiftnav-inner").length ){
  }else{
  alert("Please Install ShiftNav - Responsive Mobile Menu Plugin for a mobile menu")  
}

 $('.header').click(function (e){
  if($(this).next('.content').css('display') != 'block'){
   $('.active').slideUp('fast').removeClass('active');
   $(this).next('.content').addClass('active').slideDown('slow');
   } else {
   $('.active').slideUp('fast').removeClass('active');
   }
  });

});


