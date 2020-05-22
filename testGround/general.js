/**
 * @author 	Kishan Wanigasinghe
 * website 	www.atox-d.com
 * Date		Apr-12-2010
 */
function cmntheadplus(test){
				//alert("my id is"+test);
				$("#"+test+">#cmntBody").show("blind", { direction: "vertical" }, 200);
				$("#"+test+">#cmntMore").effect("bounce", { times:3 }, 300);
				
}
function bounceThis(test){
				//alert("my id is "+test);
				$("#"+test+">#cmntHeader").effect("bounce", { times:4, direction:"up" }, 400);
				$("#"+test+">#cmntMore").effect("bounce", { times:3, direction:"right" }, 300);
}