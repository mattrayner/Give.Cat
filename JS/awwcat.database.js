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
	this.imageurl="http://give.cat/api/img/"+imageid+".jpg";
}

/**
 * Object used to filter our cats into the appropriate size.
 **/
var giveCat = {
	init:function(myCats){
		//Set our cats
		this.myCats=myCats;
	},
	landscape:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "hor";
								});
	},
	portrait:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "ver";
								});
	},
	square:function(){
		return this.myCats.filter(function(myCats){
									return myCats.orientation === "squ";
								});
	}};

/**
 * Choose a random image from within our array
 **/
function Randomize(images){
	return Math.floor(Math.random()*images.length);
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
	else if(proportion<1)return"landscape";
}

var tempCatScript = null, catAttempts;

/**
 * We've got some cats!
 **/
function catsBeGot(data) {
	//document.getElementsByTagName('head')[0].removeChild(tempCatScript);
	//tempCatScript = null;
	
	console.log(data);
	
	var tempCats = new Array();
	for (var key in data.cats)
	{
		tempCats[tempCats.length] = new Cat(data.cats[key], key);
		console.log("ID: " + key + " -  Orientation: " + data.cats[key]);
	}
	
	if(tempCats.length > 0) myCats = tempCats;
		
	randomizeCats();
}

/**
 * Look at all of the IMG tags within the document and change the cats!
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
			
			images[i].src=img.imageurl;
		}else if(orientation==="square"){
			var number=Randomize(giveCat.square());
			var img=giveCat.square()[number];
			
			images[i].src=img.imageurl;
		}else if(orientation==="portrait"){
			var number=Randomize(giveCat.portrait());
			var img=giveCat.portrait()[number];
			
			images[i].src=img.imageurl;
		}
	}
}

/**
 * Epic javascript function that basically checks if the script has been successfully loaded
 * - This gets us around the Content Security Policy (CSP)
 *
 * Solution found here: http://stackoverflow.com/questions/538745/how-to-tell-if-a-script-tag-failed-to-load (I love stake overflow!)
 **/
function jsLoader()
{
    var o = this;
	
	//An unstoppable repeat timer, when t=-1 means endless, when function f() returns true it can be stopped
    o.timer = function(t,i,d,f,fend,b) {
      if( t == -1 || t > 0 ){ setTimeout( function() { b=(f())?1:0; o.timer( (b)?0:(t>0)?--t:t, i+((d)?d:0), d, f, fend,b ); }, (b||i<0)?0.1:i ); }
      else if( typeof fend == 'function' )
            { setTimeout( fend, 1 ); }
    };

	o.addEvent = function( el, eventName, eventFunc ){
		if( typeof el != 'object' )
		{ return false; }
		
		if( el.addEventListener )
		{
			el.addEventListener ( eventName, eventFunc,false);
			return true;
		}
		
		if( el.attachEvent )
		{
			el.attachEvent("on"+eventName, eventFunc );
			return true;
		}
		
		return false;
	};

    o.require = function( s, delay, baSync, fCallback, fErr ) // add script to dom
    {
		tempCatScript = document.createElement('script'),
		oHead = document.getElementsByTagName('head')[0];
		if( !oHead )
		{ return false; }

		setTimeout( function() {
		var f = (typeof fCallback == 'function')?fCallback:function(){};
		fErr = (typeof fErr == 'function')?fErr:function(){alert('require: Cannot load resource -'+s);},
		fe = function(){ if(!tempCatScript.__es){tempCatScript.__es=true; tempCatScript.id='failed'; fErr(tempCatScript);}};
		tempCatScript.onload = function() {tempCatScript.id='loaded'; f(tempCatScript); };
		tempCatScript.type = 'text/javascript';
		tempCatScript.async = (typeof baSync == 'boolean')?baSync:false;
		tempCatScript.charset='utf-8';
		o.__es = false;
		o.addEvent( tempCatScript, 'error', fe ); // when supported
		// when error event is not supported fall back to timer
		o.timer( 15, 1000, 0, function() {return (tempCatScript.id == 'loaded');}, function(){ if(tempCatScript.id != 'loaded'){fe();}});
		tempCatScript.src = s;
		setTimeout( function() { try{ oHead.appendChild(tempCatScript);}catch(e){fe();}},1); 
		}, (typeof delay == 'number')?delay:1 );  
		return true;
	};
}

/**
 * Create a self executing function that kicks this all off
 **/
(function(document){
	var ol = new jsLoader();
	ol.require('http://give.cat/api/cats.php?callback=catsBeGot',800,true, function() {console.log("Cats Loaded!");},function() {console.log("Cats blocked by CSP"); randomizeCats();}); 
})(document);