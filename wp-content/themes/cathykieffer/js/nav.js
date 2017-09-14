(function (){

    var container, menu, links, details;
    container = document.getElementById('site-navigation');
    menu = container.getElementsByTagName('ul')[0];
    links = menu.getElementsByTagName('li');
    


    function Youpy() {
        // var test = document.styleSheets[1];
        // console.log(test);
        // // var border = this.style.borderColor.value();
        // myCss = this;
        // console.log(myCss);
        // var thisCssValue = window.getComputedStyle(myCss,null);
        // console.log(myCss);
        if (this == document.getElementById('menu-item-12')) {
            this.style.backgroundColor = "red";
        } else {
            this.style.backgroundColor = "black";
        }
        
    };

    for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'click', Youpy, true );
	}
    
})();
// ( function( $ ) {
	
   
//         $( "li" ).on("click",function() {
//             console.log("yes");
//             this.css("background-color","red");
//             // $("this").css("background-color","red !important");
//             // $("this").
//         });
    
// })(jQuery);

