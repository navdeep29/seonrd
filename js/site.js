(function(){
    
  $('a[href*=#]').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
       && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
            || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top -75;
                $('html,body')
                .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                return false;
            }
        }
    });
   
    
var i= +$('.number .img').length;
var x = 1;

setInterval(function(){
    
    $(".img").fadeOut(2000);
    
    x++;
    $(".image"+x).fadeIn(1000);
    if(x==i){
        
        x=0;
       
       }
 
    
},5000);

$(window).scroll(function() {
    if ($(this).scrollTop() > 650) {
        $( ".header-container" ).css('opacity', 1);
    } else {
        console.log('there');
         $( ".header-container" ).css('opacity', 0.8);
    }
});


var url = "http://192.168.0.19/SEONRD/contact.php";
$("#help_form").submit(function(event){
       event.preventDefault();
       var name = $("input[name='fullname']").val();
       var email = $("input[name='email']").val();
       var message = $("#message").val();
       $.ajax({
            url: url,
            data: {"fullname": name, "email": email, "message": message},
            type: 'post'
        }).done(function(data){ 
            $("#info").html(data);
        });
       
       $('#help_form').trigger("reset");
    });


var slideIndex = 1;
function currentSlide(n) {
  slideIndex = n;
}

})();







