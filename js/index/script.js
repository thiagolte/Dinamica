$(document).ready(function() {
    $('.close_glass').on("click", function(){
        $(".glass_panel").hide();
    });
    
    $(".glass_panel").on("click", function(){
        $(".close_glass").trigger('click');
    });
                
    document.onkeyup = function (e) {
        if (e.which == 27) {
            $(".close_glass").trigger('click');
        }
    }
                         

});