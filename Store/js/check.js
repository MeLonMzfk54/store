$(document).ready(function(){
   if(!$("div").is(".products__item")){
       $(".cabinet").css('height','80vh');
   }else{
       $(".cabinet").css('height','auto');
   }

//    let deletes = $(".products__link_delete");
//    let deletesTotal = $(deletes).length;
//    for(let i =0;deletesTotal;i++){
//        $(deletes[i]).on("click",function(){
//            console.log("hello");
//        });
//    }

});