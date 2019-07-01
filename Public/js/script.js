$(document).ready(function() {


    $(".add_form").click(function(){ 
        var html = $(".copy").html();
        $(".after-add_form").after(html);
    });


    $("body").on("click",".remove",function(){ 
        $(this).parents(".control-group").remove();
    });

  });