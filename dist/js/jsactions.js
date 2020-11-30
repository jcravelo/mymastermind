var num = '';
var max_game = 1;
var ncolor = ''; 
$(document).ready(function(){
	$(".balls-table").livequery("click",function(event){
		num = $(this).attr("value");
	});
	$(".add").livequery("click",function(event){
		if (num!='' && $(this).hasClass("add")) {
			$(this).attr("fill",colorsJS[num]).attr("value",num);
		}
	});
	$(".check").livequery("click",function(event){
      var count = 0; var get = [];
      $(".add").each(function(index,element){
         get.push($(element).attr("value"));
         if ($(element).attr("value") >= 0) {count++;}
      });
      // $("rect").removeClass("balls add");$(this).remove();

   	if (max_game < 10) {
         if (count == 4){
            $.get("src/checks.php",{"data":get},function(checks){
               var checkout = JSON.parse(checks);
               var $svg = '<ul style="list-style-type: none;margin: 0;padding: 0;">';var sum = 0;
               for (var i = 0; i < 4; i++) {
                  $svg += '<li style="display: inline-block;padding: 20px;"><img src="images/' + checkout.return[i] + '.gif"></li>'; sum += checkout.position[i];
               }  $svg += "<ul>";
               $(".results").append($svg)
               if(sum == 4){alert("Congrats, you won!!"); return true;}
            });

            $.get("view/balls.php",function(data){
               
               $("#game").append(data);

            });
            $("rect").removeClass("balls add");$(this).remove();

         }
   	}else{
   		alert("You almost get it, just click on restart and try again dude!");
   	}
   	max_game++
	});
});