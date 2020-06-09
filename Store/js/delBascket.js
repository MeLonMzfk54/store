$(document).ready(function(){
   let del = $(".bascket__del");
    let delCount = $(del).length;
    for(let i = 0;i<delCount;i++){
        $(del[i]).on("click",function(){
           event.preventDefault();
            let delId = $(del[i]).attr("id");
            console.log(delId);
            $.ajax({
                type: "POST",
                url: "includes/deleteBascket.php",
                data: {delId: delId}
            }).done(function(){
               let count = +$(del[i]).siblings(".bascket__value").find(".bascket__count").text();
                let sum = +$(del[i]).siblings(".bascket__cost").find(".bascket__price").text();
                let resultSum = sum*count;
               let outerSum = +$(del[i]).parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text();
                 outerSum = outerSum - resultSum;
                $(del[i]).parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text(outerSum);
                $(del[i]).siblings(".bascket__cost").fadeOut();
                $(del[i]).siblings(".bascket__value").fadeOut();
                $(del[i]).siblings(".bascket__delete_txt").fadeIn();
                $(del[i]).fadeOut();
                
            }).fail(function(){
               alert("error"); 
            });
        });
    }
});