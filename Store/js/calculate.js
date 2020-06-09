$(document).ready(function(){
    let value = 1;
    
    let pluses = $(".bascket__plus");
    let plusesTotal = $(pluses).length;
    let result = 0;
    let newValue = 0;
    let sum = 0;
    let resultSum = 0;
    let pivotSum = 0;
    for(let i =0;i<plusesTotal;i++){
        $(pluses[i]).on("click",function(){
           result = +$(pluses[i]).siblings(".bascket__count").text();
            if(result >= 0){
                $(pluses[i]).siblings(".bascket__minus").fadeIn();
            }
            newValue = result + value;
            result = newValue;
            
             sum = +$(pluses[i]).parent(".bascket__value").siblings(".bascket__cost").find(".bascket__price").text();
            $(pluses[i]).siblings(".bascket__count").text(newValue);
    
               pivotSum= +$(pluses[i]).parent(".bascket__value").parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text();
               
            resultSum = pivotSum+sum;
           $(function() {
	
		$({numberValue: pivotSum}).animate({numberValue: resultSum}, {
		
			duration: 500, 
			easing: "linear",
			
			step: function(val) {
			$(pluses[i]).parent(".bascket__value").parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text(Math.ceil(val)); 
				
			}
			
		});
		
	});
            
        });
    }
    let minuses = $(".bascket__minus");
    let minusesTotal = $(minuses).length;
    for(let i =0;i<minusesTotal;i++){
        $(minuses[i]).on("click",function(){
            result = +$(pluses[i]).siblings(".bascket__count").text();
            if(result == 1){
                $(minuses[i]).fadeOut();
            }
            newValue = result - value;
            result = newValue;
            
            sum = +$(minuses[i]).parent(".bascket__value").siblings(".bascket__cost").find(".bascket__price").text();
            $(minuses[i]).siblings(".bascket__count").text(newValue);
            
            pivotSum= +$(minuses[i]).parent(".bascket__value").parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text();
            
            resultSum = pivotSum - sum;
              $(function() {
	
		$({numberValue: pivotSum}).animate({numberValue: resultSum}, {
		
			duration: 500, 
			easing: "linear",
			
			step: function(val) {
			$(minuses[i]).parent(".bascket__value").parent(".bascket__item").parent(".bascket__block").siblings(".bascket__result").find(".bascket__result_sum").text(Math.ceil(val));
				
			}
			
		});
		
	});
            
        });
    }
});