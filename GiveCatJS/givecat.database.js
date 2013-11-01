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

//GLOBAL VARS USED THROUGHOUT
var currentCatVersion=parseFloat("0.7"),CSPON=false,versionBoxOpacity=0.0,initialLoad=!document.contains(document.getElementById("giveCatFaderInfoBox")),tempCatScript=null, catAttempts;

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
var myCats=[new Cat("hor",1),
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
	
	if(proportion>1)return"p";
	else if(proportion===1)return"s";
	else if(proportion<1)return"l";
}

/**
 * We've got some cats!
 **/
function catsBeGot(data) {	
	var tempCats = new Array();
	for (var key in data.cats)
	{
		tempCats[tempCats.length] = new Cat(data.cats[key], key);
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
		
	if(initialLoad){injectProgress(length);}
	
	for(var i=0;i<length;i++){
		var orientation=imageOrientation(images[i]);
		
		//Set the width of the img tag to the displayed width
		//Set the height of the img tag to the displayed height
		images[i].width = images[i].clientWidth;
		images[i].height = images[i].clientHeight;
		
		//The current cat image
		var img;
		
		if(orientation==="l"){
			var number=Randomize(giveCat.landscape());
			img=giveCat.landscape()[number];
		}else if(orientation==="s"){
			var number=Randomize(giveCat.square());
			img=giveCat.square()[number];
		}else if(orientation==="p"){
			var number=Randomize(giveCat.portrait());
			img=giveCat.portrait()[number];
		}else{img=giveCat.portrait()[0]} //If all else fails - the 1st portrait image
		
		//Set the image src
		images[i].src=img.imageurl;
	}

	//Run a check on the current version of Give Cat (if we can)
	var ol = new jsLoader();
	ol.require("http://give.cat/api/version.js",800,true,hideProgressBox(),hideProgressBox()); 
}

/**
 * Check the version of GiveCat we have against the server
 **/
function checkVersion(data){
	//Don't spam people if they have already seen an upgrade message
	if(data['version'] != null && data['version'] > currentCatVersion && !document.contains(document.getElementById("giveCatFaderInfoBox"))){
		//A string to add to our page
		var domString = '<div style="display:block;width:80%;padding-top:15px;margin:0auto;margin-bottom:20px;border:1px solid transparent;border-radius:4px;color:#468847;background-color:#dff0d8;border-color: #d6e9c6;position:fixed;top:5px;left:50%;margin-left:-40%;z-index:501;text-align:center;" id="giveCatFaderInfoBox"><span style="width:28px;height:28px;display:block;float:left;margin-top:-7px;margin-bottom:7px;margin-left:7px;margin-right:-7px;background:url(http://give.cat/assets/img/catprogressspinner.gif) top left no-repeat;"></span><b>Thanks for using Give Cat</b>. Just to let you know, a newer version is available! <a href="http://give.cat/">Check it out</a>.</div>';
		
		var bodyE = document.getElementsByTagName("body")[0];
		bodyE.innerHTML = domString + bodyE.innerHTML;
		
		setTimeout(function(){document.getElementsById("giveCatFaderInfoBox").style.display = "none";}, 6500);
	}
}

/**
 * Inject a progress div showing that we are doing stuff
 *
 * @param	int	number of images we are changing
 **/
function injectProgress(numberOfImages){
	var domString = '<div style="display:block; width: 80%; padding-top: 15px; margin: 0 auto; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; color: #468847; background-color: #dff0d8; border-color: #d6e9c6; position: fixed; bottom:5px; left: 50%; margin-left: -40%; z-index: 500; text-align: center;" id="giveCatFaderProgressBox"><strong>We\'re currently making '+numberOfImages+' images squishier!</strong> Please wait.<span style="width:80%; height: 10px; display: block; margin: 0 auto; background: url(http://give.cat/assets/img/catprogressbar.gif) top left repeat-x; margin-bottom: 15px;"></span></div>';
	
	var bodyE = document.getElementsByTagName("body")[0];
	bodyE.innerHTML = bodyE.innerHTML + domString;
}

function hideProgressBox(){
	initialLoad = false;
	document.getElementById("giveCatFaderProgressBox").style.display = "none";
}

/**
 * 
 *
function fadeIn(elementToFade){
	console.log('fade in - '+elementToFade);
	
    var element = document.getElementById(elementToFade);

    versionBoxOpacity += 0.1;
    
    element.style.opacity = versionBoxOpacity;
    if(versionBoxOpacity > 1.0) {
        versionBoxOpacity = 1.0;
        element.style.opacity = versionBoxOpacity;
        //Wait 5 seconds and hide the message about a new version
		setTimeout(fadeOut(elementToFade), 6500);
    } else {
        setTimeout(fadeIn(elementToFade), 10);
    }
}

function fadeOut(elementToFade){
	console.log('fade out - '+elementToFade);
    var element = document.getElementById(elementToFade);

    versionBoxOpacity -= 0.1;
    
    element.style.opacity = versionBoxOpacity;
    if(versionBoxOpacity < 0.0) {
        versionBoxOpacity = 0.0;
        element.style.opacity = versionBoxOpacity;
        element.style.display = "none";
    } else {
        setTimeout(fadeOut(elementToFade),10);
    }
}*/

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
      else if( typeof fend == "function" )
            { setTimeout( fend, 1 ); }
    };

	o.addEvent = function( el, eventName, eventFunc ){
		if( typeof el != "object" )
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
		tempCatScript = document.createElement("script"),
		oHead = document.getElementsByTagName("head")[0];
		if( !oHead )
		{ return false; }

		setTimeout( function() {
		var f = (typeof fCallback == "function")?fCallback:function(){};
		fErr = (typeof fErr == "function")?fErr:function(){alert("require: Cannot load resource -"+s);},
		fe = function(){ if(!tempCatScript.__es){tempCatScript.__es=true; tempCatScript.id="failed"; fErr(tempCatScript);}};
		tempCatScript.onload = function() {tempCatScript.id="loaded"; f(tempCatScript); };
		tempCatScript.type = "text/javascript";
		tempCatScript.async = (typeof baSync == "boolean")?baSync:false;
		tempCatScript.charset="utf-8";
		o.__es = false;
		o.addEvent( tempCatScript, "error", fe ); // when supported
		// when error event is not supported fall back to timer
		o.timer( 15, 1000, 0, function() {return (tempCatScript.id == "loaded");}, function(){ if(tempCatScript.id != "loaded"){fe();}});
		tempCatScript.src = s;
		setTimeout( function() { try{ oHead.appendChild(tempCatScript);}catch(e){fe();}},1); 
		}, (typeof delay == "number")?delay:1 );  
		return true;
	};
}

/**
 * Create a self executing function that kicks this all off
 **/
(function(document){
	var ol = new jsLoader();
	ol.require("http://give.cat/api/cats.php?callback=catsBeGot",800,true, function(){},function(){CSPON=true;randomizeCats();}); 
})(document);