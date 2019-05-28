// $(document).ready(function(){
 
//     function slideSwitch() {
//     var $active = $('#slideshow IMG.active');

//     if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

//     var $next =  $active.next().length ? $active.next()
//         : $('#slideshow IMG:first');

//     $active.addClass('last-active');
        
//     $next.css({opacity: 0.0})
//         .addClass('active')
//         .animate({opacity: 1.0}, 1000, function() {
//             $active.removeClass('active last-active');
//         });
// }

// $(function() {
//     setInterval( slideSwitch(), 5000 );
// });
 






// });



var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); 
}

