$(document).ready(function(){
	alert("hello imran");

   $("#btn").click(function(event) {
   	
     //  alert("Hello you pressed a button good boy");

   	  });



//     $("p").on('click',function() {
	
// 	//event.preventDefault();
	
//     //$("p").css({"background-color","yellow"});

// //$(this).css("background-color", "yellow");

//     $(this).hide();

// //$(this).slideToggle();

// });



$("#i").dblclick(function()
  {
    $(this).hide();
  });



$("#e").mouseenter(function(event) {
	/* Act on the event */

alert("entering to paragraph");

});



$("#l").mouseleave(function(event) {

  alert("mouse left");
	/* Act on the event */
});




$("#hover").hover(function() {
	/* Stuff to do when the mouse enters the element */

alert("entering");

}, function() {
	/* Stuff to do when the mouse leaves the element */

alert("leaving");

});




$("input").focus(function(event) {

	$(this).css("background-color", "yellow");

});

	$("input").blur(function(){
    
     $(this).css("background-color", "green");
  });









$("div p").on({
	       mouseenter :function(argument) {
	$(this).css("background-color","lightgray");
         }, 

         mouseleave :function(){
        
    $(this).css("background-color","orange");
          },

    click:function(){

   $(this).css("background-color","lightblue");

}

})


















});