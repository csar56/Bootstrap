
if((window.innerHeight-80)<=800){
	document.getElementById("bg").height=window.innerHeight-80;
}
function cI(){
	var src = document.getElementById("bg").src;   
	var imgsrc = src.substring(src.lastIndexOf("/")+1);

	if  (imgsrc == "bg.jpg")
	{
	    document.getElementById("bg").src = "img/bggross.jpg";
	    document.getElementById("bg").height=window.innerHeight-80;
	}
	else 
	{
		
	    document.getElementById("bg").src = "img/bg.jpg";
	    document.getElementById("bg").height="600";
	}
}
