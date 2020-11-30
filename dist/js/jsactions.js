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
      var get = [];
      $(".add").each(function(index,element){
         get.push($(element).attr("value"));
      });
      $("rect").removeClass("balls add");
      $(this).remove();

   	if (max_game < 10) {

			$.get("src/checks.php",{"data":get},function(checks){
            var checkout = JSON.parse(checks);
            var $svg = "";var sum = 0;
            for (var i = 0; i < 4; i++) {
               $svg = '<svg class="bd-placeholder-img rounded-circle" width="30" height="30" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">' + 
                        '<rect width="100%" height="100%" fill="' + checkout.return[i] + '" class="balls-table"></rect></svg>';
               sum += checkout.position[i];
            }
         });

         $.get("view/balls.php",function(data){
				
            $("#game").append(data);

			});

   	}else{
   		alert("You almost get it, just click on restart and try again dude!");
   	}
   	max_game++
	});
});