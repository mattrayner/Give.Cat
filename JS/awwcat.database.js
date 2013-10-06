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
									return myCats.orientation === "landscape"
								})
	},
	portrait:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "portrait"
								})
	},
	square:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "square"
								})
	}};

/**
 * Choose a random image from within our array
 **/
function Randomize(images){
	return Math.floor(Math.random()*images.length)
}

/**
 * Our array of cats along with their orientations
 **/
var myCats = [new Cat("landscape",1),
				 new Cat("landscape",2),
				 new Cat("landscape",3),
				 new Cat("landscape",4),
				 new Cat("landscape",5),
				 new Cat("landscape",6),
				 new Cat("landscape",7),
				 new Cat("landscape",8),
				 new Cat("landscape",9),
				 new Cat("landscape",10),
				 new Cat("landscape",11),
				 new Cat("portrait",12),
				 new Cat("portrait",13),
				 new Cat("portrait",14),
				 new Cat("portrait",15),
				 new Cat("portrait",16),
				 new Cat("portrait",17),
				 new Cat("portrait",18),
				 new Cat("square",19),
				 new Cat("square",20),
				 new Cat("square",21),
				 new Cat("square",22),
				 new Cat("square",23),
				 new Cat("square",24),
				 new Cat("square",25),
				 new Cat("landscape",26)];

/**
 * Calculate the orientation of any given image
 **/
function imageOrientation(image){
	var proportion=image.height/image.width;
	
	if(proportion>1)return"portrait";
	else if(proportion===1)return"square";
	else if(proportion<1)return"landscape"
}

/**
 * Create a self executing function that kicks this all off
 **/
(function(document){
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
			
			images[i].src=img.imageurl
		}
	}
	
	console.log("yay")
})(document);