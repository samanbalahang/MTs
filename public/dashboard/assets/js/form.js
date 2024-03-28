$(function(){
    var mds = document.querySelectorAll(".md-form");
    mds.forEach(function(md){
        var inputs = md.querySelectorAll("input");
        inputs.forEach(function(input){
            if(input.value != ""){
                input.classList.add("active");
                if(input.nextElementSibling){
                    input.nextElementSibling.classList.add("active")
                }
                // console.log(input.nextElementSibling);
            }
        })
    })

    $(".md-form").focusin("click",function(){
        var theinput =  $(this).find("input").val();
        if(theinput == ""){
           $(this).find("input~label").addClass("active");
        }
    });
   $("input").focusout(function(){
        var theinput =  $(this).val();
        if(theinput == ""){
            $(this).siblings("label").toggleClass("active");
        }
    });


   // select2
   $('select').select2();

});
