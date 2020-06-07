$(document).ready(function(){
   let products = $(".products__link");
    let totalProducts = products.length;
    for(let i = 0;i<totalProducts;i++){
        $(products[i]).on("click",function(event){
           event.preventDefault;
            let kid = $(products[i]).attr("id");
            console.log(kid);
            $.ajax({
                type: "POST",
                url: "includes/setKids.php",
                data: {kid: kid}
            }).done(function(){
                alert("Добавлено в корзину");
            }).fail(function(){
               alert("error"); 
            });
        });
    }
});