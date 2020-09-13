var acc = document.getElementsByClassName("accordion");

for ( var i = 0; i <acc.legth; i++ ) {
	acc[i].style.display = 'none';
}

var i;

for (i = 0; i < acc.length; i++) {
	acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		        panel.style.maxHeight = null; 
		}
		else {
	      		panel.style.maxHeight = panel.scrollHeight + "px";
	      	} 
	});
}
