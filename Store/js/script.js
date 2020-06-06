$(".header__burger").click(function(){
   $(".header__burger").toggleClass("active__burger");
    $(".header__navbar").toggleClass("active__navbar");
    $(".header__right").toggleClass("active__right");
});

if($(".hello__text").text() != ""){
    if($(".hello__text").text() == "Неверный логин или пароль"){
     $(".sign__inner").css("display","none");
    $(".hello__link").text("Попробовать еще раз");   
    }else if($(".hello__text").text() != "Неверный логин или пароль"){
        $(".sign__inner").css("display","none");
    $(".hello__link").text("Выйти");   
    }
}else if ($(".hello__text").text() == ""){
    $(".hello__link").css("padding","0");
}