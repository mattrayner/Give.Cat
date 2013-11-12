;(function(){
	var win = window,
		storage = win.localStorage;
	
	function init(){
		// Setup postMessage event listeners
		if (win.addEventListener) {
			win.addEventListener('message', onMessage, false);
		} else if(win.attachEvent) {
			win.attachEvent('onmessage', onMessage);
		}

		// Tell the parent window we're ready.
		win.parent.postMessage(JSON.stringify({ready:true}),"*");
	}
	
	function onMessage(e){
		request = JSON.parse(e.data);
		if (request.type === "get"){
			respond(get(request), e.origin);
		} else if (request.type === "set"){
			respond(set(request), e.origin);
		}
	}
	
	function get(request){
		return { key: "poked", val: storage.getItem("poked"), type: "get", _xds: request._xds };
	}
	
	function set(request){
		storage.setItem("poked", true);
		return { key: "poked", type: "set", _xds: request._xds };
	}
	
	function respond(response, origin){
		win.parent.postMessage(JSON.stringify(response),"*");
	}

	init();
})();