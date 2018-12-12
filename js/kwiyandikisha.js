var hovers= document.getElementById('non-desgree');
var sliders =document.getElementsByClassName('content_wrapperz');
var leftSides = document.getElementsByClassName('leftSide');
$(document).ready(function(){
    $(hovers).hover(function(){
        $(sliders).hide();
        $(leftSides).css('display','block');

    },function(){
   $(sliders).show();
   $(leftSides).hide();
    })
});
$(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

//   END OF THIS FO LIGHTBOXES$
