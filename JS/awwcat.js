/**
 * Cat object - orientation and url of cat
 **/
function Cat(orientation,imageurl){
	this.orientation=orientation;
	this.imageurl=imageurl
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
										  return this.myCats.filter(
										  								function(myCats){
										  													return myCats.orientation === "landscape"
										  								}
										  							   )
										  },
					portrait:function(){
										return this.myCats.filter(
																		function(myCats){
																							return myCats.orientation === "portrait"
																		}
																	)
										},
					square:function(){
										return this.myCats.filter(
																		function(myCats){
																							return myCats.orientation === "square"
																						   }
																	)
									}
				};

/**
 * Choose a random image from within our array
 **/
function Randomize(images){
	return Math.floor(Math.random()*images.length)
}

/**
 * Our array of cats along with their orientations
 **/
var myCats = [new Cat("landscape","//give.cat/assets/img/aww/l1.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l2.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l3.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l4.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l5.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l6.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l7.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l8.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l9.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l10.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l11.jpg"),
				 new Cat("landscape","//give.cat/assets/img/aww/l12.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p1.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p2.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p3.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p4.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p5.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p6.jpg"),
				 new Cat("portrait","//give.cat/assets/img/aww/p7.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s1.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s2.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s3.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s4.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s5.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s6.jpg"),
				 new Cat("square","//give.cat/assets/img/aww/s7.jpg")];

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