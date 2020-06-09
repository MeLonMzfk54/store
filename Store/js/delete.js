$(document).ready(function(){
    let del = $(".products__link_delete");
    let delCount = del.length;
    for(let i =0; i<delCount;i++){
        $(del[i]).on("click",function(event){
            event.preventDefault();
            let delId = $(del[i]).attr("id");
            console.log(delId);
            $.ajax({
                type: "POST",
                url: "includes/deleteWishes.php",
                data: {delId: delId}
            }).done(function(){
                $(del[i]).parent(".products__price").fadeOut();
                $(del[i]).parent(".products__price").siblings(".products__name").text("Удалено");
            }).fail(function(){
               alert("error"); 
            });
        });
    }
});