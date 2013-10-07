/**
 * New database version of the awwcat JS file
 *
 * Need to run AJAX (possibly on detection of JQuery)
 * Fall back if no AJAX
 * Need to convert the JSON into the actual array of cats
 **/

/**
 * Cat object - orientation and url of cat
 **/
function Cat(orientation,imageid){
	this.orientation=orientation;
	this.imageurl="//give.cat/api/img/"+imageid+".jpg";
}

/**
 * Object used to filter our cats into the appropriate size.
 **/
var giveCat = {
	init:function(myCats){
		//Set our cats
		this.myCats=myCats
	},
	landscape:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "hor"
								})
	},
	portrait:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "ver"
								})
	},
	square:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "squ"
								})
	}};

/**
 * Choose a random image from within our array
 **/
function Randomize(images){
	return Math.floor(Math.random()*images.length)
}

/**
 * Our array of cats along with their orientations (this is a fallback when AJAX fails
 **/
var myCats = [new Cat("hor",1),
				 new Cat("hor",2),
				 new Cat("hor",3),
				 new Cat("hor",4),
				 new Cat("hor",5),
				 new Cat("hor",6),
				 new Cat("hor",7),
				 new Cat("hor",8),
				 new Cat("hor",9),
				 new Cat("hor",10),
				 new Cat("hor",11),
				 new Cat("ver",12),
				 new Cat("ver",13),
				 new Cat("ver",14),
				 new Cat("ver",15),
				 new Cat("ver",16),
				 new Cat("ver",17),
				 new Cat("ver",18),
				 new Cat("squ",19),
				 new Cat("squ",20),
				 new Cat("squ",21),
				 new Cat("squ",22),
				 new Cat("squ",23),
				 new Cat("squ",24),
				 new Cat("squ",25),
				 new Cat("hor",26)];

/**
 * Calculate the orientation of any given image
 **/
function imageOrientation(image){
	var proportion=image.height/image.width;
	
	if(proportion>1)return"portrait";
	else if(proportion===1)return"square";
	else if(proportion<1)return"landscape"
}

var tempCatScript = null, catAttempts;

/**
 * Begin the process of grabbing our cats from the server
 * - Technically we're injecting the script into the browser
 **/
function grabCats(isRetry){
	if(tempCatScript){ console.log("alreadyTrying"); return; }//are we already trying?
	if(!isRetry){
		catAttempts = 0;
	}if(isRetry && catAttempts > 5){ randomizeCats(); return; }
	
	tempCatScript = document.createElement("script");
    tempCatScript.type = "text/javascript";
    tempCatScript.id = "tempscript";
    tempCatScript.src = "//give.cat/api/cats.php?callback=catsBeGot&requestid="
    	+ Math.floor(Math.random()*999999).toString();	
    		
    console.log("about to call");
    		
    catAttempts++;
    
    document.body.appendChild(tempCatScript);
    // catsBeGot invoked when finished
}

/**
 * We've got some cats!
 **/
function catsBeGot(data) {
	document.body.removeChild(tempCatScript);
	tempCatScript = null;
	
	console.log(data.generated);
	console.log(data.cats);
	
	var tempCats = new Array();
	for (var key in data.cats)
	{
		tempCats[tempCats.length] = new Cat(data.cats[key], key);
		console.log("ID: " + key + " -  Orientation: " + data.cats[key]);
	}
	
	if(tempCats.length > 0) myCats = tempCats;
	else	
		grabCats(true);
	
	randomizeCats();
}

/**
 *
 **/
function randomizeCats() {
	giveCat.init(myCats);

	var images=document.getElementsByTagName("img"),
		length=images.length;
		
	console.log(length);
		
	for(var i=0;i<length;i++){
		var orientation=imageOrientation(images[i]);
		
		console.log(orientation);
		
		if(orientation==="landscape"){
			var number=Randomize(giveCat.landscape());
			var img=giveCat.landscape()[number];
			
			images[i].src=img.imageurl
		}else if(orientation==="square"){
			var number=Randomize(giveCat.square());
			var img=giveCat.square()[number];
			
			images[i].src=img.imageurl
		}else if(orientation==="portrait"){
			var number=Randomize(giveCat.portrait());
			var img=giveCat.portrait()[number];
			
			images[i].src=img.imageurl;
		}
	}
}

/**
 * Create a self executing function that kicks this all off
 **/
(function(document){
	//Do some AJAX to get the JSONP
	//http://jsbin.com/omujex/10/edit - base it off of this wiki JSBIN
	grabCats(false);

	//Initialise the giveCat object with our array
	giveCat.init(myCats);
})(document);