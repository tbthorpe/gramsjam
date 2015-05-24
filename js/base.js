$( function() {

var waypoint = new Waypoint({
  element: $('#header-content-1'),
  handler: function(direction) {
    if (direction == 'up'){
        $("#header").slideUp(100);
    } else {
        $("#header").slideDown(100);
    }
  },
  offset: -250 
});

$("#header ul li").on('click',function (e){
    var that = $(this);
    $("#header ul li").css('color','white');
    that.css('color','#333333');
    
    var el = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(el).offset().top - 86
    }, 1000);
});

});


