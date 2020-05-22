$(document).ready(function(){  
  
    //When mouse rolls over  
    $("#menu li").mouseover(function(){  
        $(this).stop().animate({height:'70px'},{queue:false, duration:600, easing: 'easeOutBounce'})  
    });  
  
    //When mouse is removed  
    $("#menu li").mouseout(function(){  
        $(this).stop().animate({height:'50px'},{queue:false, duration:1200, easing: 'easeOutElastic'})  
    });  
  
}); 