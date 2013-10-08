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
     var oo = document.createElement('script'),
     oHead = document.getElementsByTagName('head')[0];
     if( !oHead )
      { return false; }

     setTimeout( function() {
     var f = (typeof fCallback == 'function')?fCallback:function(){};
     fErr = (typeof fErr == 'function')?fErr:function(){alert('require: Cannot load resource -'+s);},
     fe = function(){ if(!oo.__es){oo.__es=true; oo.id='failed'; fErr(oo);}};
     oo.onload = function() {oo.id='loaded'; f(oo); };
     oo.type = 'text/javascript';
     oo.async = (typeof baSync == 'boolean')?baSync:false;
     oo.charset='utf-8';
     o.__es = false;
     o.addEvent( oo, 'error', fe ); // when supported
     // when error event is not supported fall back to timer
     o.timer( 15, 1000, 0, function() {return (oo.id == 'loaded');}, function(){ if(oo.id != 'loaded'){fe();}});
     oo.src = s;
     setTimeout( function() { try{ oHead.appendChild(oo);}catch(e){fe();}},1); 
     }, (typeof delay == 'number')?delay:1 );  
     return true;
    };
}

/**
 * Does the script execute correctly?
 **/
function foo(data){
 console.log("worked");
 console.log(data);
}

/**
 * Document to ne loaded (includes example call back)
 **/
(function(document){
	var ol = new jsLoader();
     ol.require('//give.cat/api/cats.php?callback=foo',800,true, function() {console.log("CSP is disabled - cats loaded")},function() {console.log("CSP enabled - cats API blocked - rolling back to default cats")});   
})(document);