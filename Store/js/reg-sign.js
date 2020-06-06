$(document).ready(function(){
   $(".sign__enter").click(function(){
   $(".registration").fadeIn();
    $(".sign").fadeOut();
       $("title").text("Регистрация");
});

$(".registration__enter").click(function(){
   $(".sign").fadeIn();
    $(".registration").fadeOut();
    $("title").text("Авторизация");
}); 
    
$(".overlay__close").click(function(){
    $(".overlay").fadeOut();
});
    
    $("#registration__form-id").submit(function(){
        const mailPattern = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
        if($(".reg__name").val() == "" || $(".reg__pass").val() == "" || $(".reg__pass2").val() != $(".reg__pass").val() || ($(".reg__mail").val() == "" || !mailPattern.test($(".reg__mail").val()))){
            if($(".reg__name").val() == ""){
                $(".reg__name").css("border","2px solid red");
            }else if ($(".reg__name").val() != ""){
                $(".reg__name").css("border","none");
                $(".reg__name").css("border-bottom","2px solid white");
            }
            
            if($(".reg__pass").val() == ""){
                $(".reg__pass").css("border","2px solid red");
            }else if ($(".reg__pass").val() != ""){
                $(".reg__pass").css("border","none");
                $(".reg__pass").css("border-bottom","2px solid white");
            }
            
            if($(".reg__pass2").val() != $(".reg__pass").val()){
                $(".reg__pass2").css("border","2px solid red");
            }else if ($(".reg__pass2").val() == $(".reg__pass").val()){
                $(".reg__pass2").css("border","none");
                $(".reg__pass2").css("border-bottom","2px solid white");
            }
            
            if($(".reg__mail").val() == "" || !mailPattern.test($(".reg__mail").val())){
                $(".reg__mail").css("border","2px solid red");
            }else if ($(".reg__mail").val() != "" || mailPattern.test($(".reg__mail").val())){
                $(".reg__mail").css("border","none");
                $(".reg__mail").css("border-bottom","2px solid white");
            }
      
        }else{
             $.ajax({
            type: "POST",
            url:"includes/reg.php",
            data: $(this).serialize()
        }).done(function(){
             $(".overlay").fadeIn();
            $(this).find("input").val("");
            $("#registration__form-id").trigger("reset");
            $(".sign").fadeIn();
            $(".registration").fadeOut();
        });
        return false;   
        }   
        
    });
});

