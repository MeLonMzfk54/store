$(document).ready(function(){
  let wishes = $(".products__link_heart");
        let wishesTotal = wishes.length;
    for(let i = 0;i<wishesTotal;i++){
       $(wishes[i]).on("click",function(event){
           event.preventDefault();
        let lid = $(wishes[i]).attr("id");
        let id = $(wishes[i]).attr("data-id");
           console.log(id);
           console.log(lid);
          $.ajax({
              type: "POST",
              url: "includes/setLids.php",
              data: {Pid : lid, id: id}
          }).done(function(){
              alert("Добавлено в пожелания");
          }).fail(function(){
             alert("error"); 
          });
        });
    }
});