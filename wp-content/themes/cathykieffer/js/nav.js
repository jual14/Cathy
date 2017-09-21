//function which maintain the transition background-color of "li" before to load the page
(function (){

    var container, menu, links, details;
    container = document.getElementById('site-navigation');
    menu = container.getElementsByTagName('ul')[0];
    links = menu.getElementsByTagName('li');
    
    function changeMenuColor() {
        
        if (this == document.getElementById('menu-item-12')) {
            this.style.backgroundColor = "#faaf3a";
        } else if (this == document.getElementById('menu-item-14')) {
            this.style.backgroundColor = "#3fa9f5";
        } else if (this == document.getElementById('menu-item-16')) {
            this.style.backgroundColor = "green";
        } else if (this == document.getElementById('menu-item-59')) {
            this.style.backgroundColor = "#ff3399";
        } else if (this == document.getElementById('menu-item-17')) {
            this.style.backgroundColor = "#93278f";
        }
    };

    for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'click', changeMenuColor, true );
	}
    
})();

