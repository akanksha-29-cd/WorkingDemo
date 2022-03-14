		$(document).ready(function(){
			$("#small-img a").click(function(){

				var smallImgPath = $(this).attr("href");
				$("#big-img img").fadeOut(function(){
					$("#big-img img").attr("src", smallImgPath);
					$("#big-img img").fadeIn();
				});
				return false;
			});
		});