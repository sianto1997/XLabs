/* JS */ gapi.loaded_0(function(_){var window=this;
var ra,sa;_.q=function(a){return function(){return _.ba[a].apply(this,arguments)}};_._DumpException=function(a){throw a;};_.ba=[];_.ea=_.ea||{};_.r=this;_.fa=function(a){return void 0!==a};
_.ja=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var c=Object.prototype.toString.call(a);if("[object Window]"==c)return"object";if("[object Array]"==c||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==c||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b};_.ka=function(a){return"array"==_.ja(a)};_.la=function(a){return"string"==typeof a};_.na="closure_uid_"+(1E9*Math.random()>>>0);ra=function(a,b,c){return a.call.apply(a.bind,arguments)};
sa=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}};_.t=function(a,b,c){_.t=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?ra:sa;return _.t.apply(null,arguments)};
_.ua=function(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var b=c.slice();b.push.apply(b,arguments);return a.apply(this,b)}};_.va=Date.now||function(){return+new Date};_.u=function(a,b){function c(){}c.prototype=b.prototype;a.K=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.iu=function(a,c,f){for(var g=Array(arguments.length-2),k=2;k<arguments.length;k++)g[k-2]=arguments[k];return b.prototype[c].apply(a,g)}};
_.wa=window.gadgets||{};_.Ba=window.osapi=window.osapi||{};_.google=window.google||{};
window.___jsl=window.___jsl||{};
(window.___jsl.cd=window.___jsl.cd||[]).push({gwidget:{parsetags:"explicit"},appsapi:{plus_one_service:"/plus/v1"},client:{jsonpOverride:!1,rms:"migrated"},csi:{rate:.01},poshare:{hangoutContactPickerServer:"https://plus.google.com"},gappsutil:{required_scopes:["https://www.googleapis.com/auth/plus.me","https://www.googleapis.com/auth/plus.people.recommended"],display_on_page_ready:!1},appsutil:{required_scopes:["https://www.googleapis.com/auth/plus.me","https://www.googleapis.com/auth/plus.people.recommended"],display_on_page_ready:!1},
"oauth-flow":{authUrl:"https://accounts.google.com/o/oauth2/auth",proxyUrl:"https://accounts.google.com/o/oauth2/postmessageRelay",redirectUri:"postmessage"},iframes:{sharebox:{params:{json:"&"},url:":socialhost:/:session_prefix:_/sharebox/dialog"},plus:{url:":socialhost:/:session_prefix:_/widget/render/badge?usegapi=1"},":socialhost:":"https://apis.google.com",":im_socialhost:":"https://plus.googleapis.com",domains_suggest:{url:"https://domains.google.com/suggest/flow"},card:{params:{s:"#",userid:"&"},
url:":socialhost:/:session_prefix:_/hovercard/internalcard"},":signuphost:":"https://plus.google.com",":gplus_url:":"https://plus.google.com",plusone:{url:":socialhost:/:session_prefix:_/+1/fastbutton?usegapi=1"},plus_share:{url:":socialhost:/:session_prefix:_/+1/sharebutton?plusShare=true&usegapi=1"},plus_circle:{url:":socialhost:/:session_prefix:_/widget/plus/circle?usegapi=1"},plus_followers:{url:":socialhost:/_/im/_/widget/render/plus/followers?usegapi=1"},configurator:{url:":socialhost:/:session_prefix:_/plusbuttonconfigurator?usegapi=1"},
appcirclepicker:{url:":socialhost:/:session_prefix:_/widget/render/appcirclepicker"},page:{url:":socialhost:/:session_prefix:_/widget/render/page?usegapi=1"},person:{url:":socialhost:/:session_prefix:_/widget/render/person?usegapi=1"},community:{url:":ctx_socialhost:/:session_prefix::im_prefix:_/widget/render/community?usegapi=1"},follow:{url:":socialhost:/:session_prefix:_/widget/render/follow?usegapi=1"},commentcount:{url:":socialhost:/:session_prefix:_/widget/render/commentcount?usegapi=1"},comments:{url:":socialhost:/:session_prefix:_/widget/render/comments?usegapi=1"},
youtube:{url:":socialhost:/:session_prefix:_/widget/render/youtube?usegapi=1"},reportabuse:{url:":socialhost:/:session_prefix:_/widget/render/reportabuse?usegapi=1"},additnow:{url:":socialhost:/additnow/additnow.html"},udc_webconsentflow:{url:"https://myaccount.google.com/webconsent?usegapi=1"},":source:":"1p"},poclient:{update_session:"google.updateSessionCallback"},"googleapis.config":{methods:{"pos.plusones.list":!0,"pos.plusones.get":!0,"pos.plusones.insert":!0,"pos.plusones.delete":!0,"pos.plusones.getSignupState":!0},
requestCache:{enabled:!0},versions:{pos:"v1"},rpc:"/rpc",root:"https://content.googleapis.com","root-1p":"https://clients6.google.com",sessionCache:{enabled:!0},transport:{isProxyShared:!0},xd3:"/static/proxy.html",developerKey:"AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ",auth:{useInterimAuth:!1}},report:{apis:["iframes\\..*","gadgets\\..*","gapi\\.appcirclepicker\\..*","gapi\\.client\\..*"],rate:1E-4}});

_.Ca=function(a,b){return b};_.B=function(a,b){var c=a.split("."),d=_.r;c[0]in d||!d.execScript||d.execScript("var "+c[0]);for(var e;c.length&&(e=c.shift());)!c.length&&_.fa(b)?d[e]=b:d[e]?d=d[e]:d=d[e]={}};_.D=function(a,b){b=_.Ca(a,b);_.B(a,b)};_.Da=window;_.Ea=window.document;_.Fa=_.Da.location;_.Ga=/\[native code\]/;_.Ha=function(a,b,c){return a[b]=a[b]||c};_.Ka=function(){var a;if((a=Object.create)&&_.Ga.test(a))a=a(null);else{a={};for(var b in a)a[b]=void 0}return a}; _.Ma=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)};_.Pa=function(a,b){a=a||{};for(var c in a)_.Ma(a,c)&&(b[c]=a[c])};_.Ra=function(a,b){if(!a)throw Error(b||"");};_.Sa=_.Ha(_.Da,"gapi",{});
_.Xa=function(a,b,c){var d=new RegExp("([#].*&|[#])"+b+"=([^&#]*)","g");b=new RegExp("([?#].*&|[?#])"+b+"=([^&#]*)","g");if(a=a&&(d.exec(a)||b.exec(a)))try{c=(0,window.decodeURIComponent)(a[2])}catch(e){}return c};_.$a=function(a,b,c){_.Ya(a,b,c,"add","at")};_.Ya=function(a,b,c,d,e){if(a[d+"EventListener"])a[d+"EventListener"](b,c,!1);else if(a[e+"tachEvent"])a[e+"tachEvent"]("on"+b,c)};_.bb=_.Ha(_.Da,"___jsl",_.Ka());_.Ha(_.bb,"I",0);_.Ha(_.bb,"hel",10);var cb,db,eb,fb,gb,hb;cb=function(a){var b=window.___jsl=window.___jsl||{};b[a]=b[a]||[];return b[a]};db=function(a){var b=window.___jsl=window.___jsl||{};b.cfg=!a&&b.cfg||{};return b.cfg};eb=function(a){return"object"===typeof a&&/\[native code\]/.test(a.push)};fb=function(a,b){if(b)for(var c in b)b.hasOwnProperty(c)&&(a[c]&&b[c]&&"object"===typeof a[c]&&"object"===typeof b[c]&&!eb(a[c])&&!eb(b[c])?fb(a[c],b[c]):b[c]&&"object"===typeof b[c]?(a[c]=eb(b[c])?[]:{},fb(a[c],b[c])):a[c]=b[c])};
gb=function(a){if(a&&!/^\s+$/.test(a)){for(;0==a.charCodeAt(a.length-1);)a=a.substring(0,a.length-1);var b;try{b=window.JSON.parse(a)}catch(c){}if("object"===typeof b)return b;try{b=(new Function("return ("+a+"\n)"))()}catch(d){}if("object"===typeof b)return b;try{b=(new Function("return ({"+a+"\n})"))()}catch(e){}return"object"===typeof b?b:{}}};
hb=function(a){db(!0);var b=window.___gcfg,c=cb("cu");if(b&&b!==window.___gu){var d={};fb(d,b);c.push(d);window.___gu=b}var b=cb("cu"),e=window.document.scripts||window.document.getElementsByTagName("script")||[],d=[],f=[];f.push.apply(f,cb("us"));for(var g=0;g<e.length;++g)for(var k=e[g],l=0;l<f.length;++l)k.src&&0==k.src.indexOf(f[l])&&d.push(k);0==d.length&&0<e.length&&e[e.length-1].src&&d.push(e[e.length-1]);for(e=0;e<d.length;++e)d[e].getAttribute("gapi_processed")||(d[e].setAttribute("gapi_processed",
!0),(f=d[e])?(g=f.nodeType,f=3==g||4==g?f.nodeValue:f.textContent||f.innerText||f.innerHTML||""):f=void 0,(f=gb(f))&&b.push(f));a&&(d={},fb(d,a),c.push(d));d=cb("cd");a=0;for(b=d.length;a<b;++a)fb(db(),d[a]);d=cb("ci");a=0;for(b=d.length;a<b;++a)fb(db(),d[a]);a=0;for(b=c.length;a<b;++a)fb(db(),c[a])};_.E=function(a,b){if(!a)return db();for(var c=a.split("/"),d=db(),e=0,f=c.length;d&&"object"===typeof d&&e<f;++e)d=d[c[e]];return e===c.length&&void 0!==d?d:b}; _.ib=function(a,b){var c=a;if("string"===typeof a){for(var d=c={},e=a.split("/"),f=0,g=e.length;f<g-1;++f)var k={},d=d[e[f]]=k;d[e[f]]=b}hb(c)};
var jb=function(){var a=window.__GOOGLEAPIS;a&&(a.googleapis&&!a["googleapis.config"]&&(a["googleapis.config"]=a.googleapis),_.Ha(_.bb,"ci",[]).push(a),window.__GOOGLEAPIS=void 0)};jb&&jb();hb();_.D("gapi.config.get",_.E);_.D("gapi.config.update",_.ib);
var nb,ob,qb,rb,sb,tb,vb,wb,yb,Ab,Bb,Db,Hb,Ib,Lb;_.kb=function(a){return!!a&&"object"===typeof a&&_.Ga.test(a.push)};_.lb=function(a,b,c){if(a){_.Ra(_.kb(a),"arrayForEach was called with a non array value");for(var d=0;d<a.length;d++)b.call(c,a[d],d)}};_.mb=function(a,b,c){if(a)if(_.kb(a))_.lb(a,b,c);else{_.Ra("object"===typeof a,"objectForEach was called with a non object value");c=c||a;for(var d in a)_.Ma(a,d)&&void 0!==a[d]&&b.call(c,a[d],d)}};
nb=function(a){a=a.sort();for(var b=[],c=void 0,d=0;d<a.length;d++){var e=a[d];e!=c&&b.push(e);c=e}return b};ob=function(){var a=[],b=_.bb.H;b&&_.mb(b,function(b){a.push.apply(a,b.L)});return nb(a)};_.pb=function(a){if(_.Ga.test(Object.keys))return Object.keys(a);var b=[],c;for(c in a)_.Ma(a,c)&&b.push(c);return b};wb={};yb=0;Ab=_.Ka();Bb=_.Ka();Db=function(a){return"number"===typeof a&&a>Math.random()};
_.Eb=function(a){if("undefined"===typeof qb){var b=_.E("report")||{},c=b.rate;Math.random();tb=b.timeout||1E3;rb=b.host||"https://plus.google.com";sb=b.path||"/_/widget/report";qb=[];Db(c)&&(qb=b.apis||[]);var b=b.apiRate||{},d;for(d in b)Db(b[d])&&qb.push(d)}for(d=0;d<qb.length;++d)if((new RegExp("^"+qb[d]+"$")).test(a))return!0;return!1};Hb=function(a){delete wb[a]};
Ib=function(){vb&&(_.Da.clearTimeout(vb),vb=0);vb=_.Da.setTimeout(function(){var a;a=window.document.location;a=a.protocol+"//"+a.host+a.pathname;var b=_.pb(Bb).join(":");a=[rb,sb,"?api=",(0,window.encodeURIComponent)(b),"&url=",(0,window.encodeURIComponent)(a),"&loaded=",(0,window.encodeURIComponent)(ob().join(":"))].join("");Bb=_.Ka();var b=new window.Image,c=yb++;wb[c]=b;b.onload=b.onerror=_.ua(Hb,c);b.src=a;vb=0},tb)};_.Kb=function(a){Ab[a]||(Bb[a]=!0,Ab[a]=!0,Ib())};Lb=_.Ca; _.Ca=function(a,b){var c=Lb(a,b);"function"===typeof b&&_.Eb(a)&&(c=function(c){_.Kb(a);return b.apply(this,arguments)});return c};

_.kj=window.googleapis&&window.googleapis.server||{};
var Xb={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},Yb=function(a){var b,c,d;b=/[\"\\\x00-\x1f\x7f-\x9f]/g;if(void 0!==a){switch(typeof a){case "string":return b.test(a)?'"'+a.replace(b,function(a){var b=Xb[a];if(b)return b;b=a.charCodeAt();return"\\u00"+Math.floor(b/16).toString(16)+(b%16).toString(16)})+'"':'"'+a+'"';case "number":return(0,window.isFinite)(a)?String(a):"null";case "boolean":case "null":return String(a);case "object":if(!a)return"null";b=[];if("number"===
typeof a.length&&!a.propertyIsEnumerable("length")){d=a.length;for(c=0;c<d;c+=1)b.push(Yb(a[c])||"null");return"["+b.join(",")+"]"}for(c in a)!/___$/.test(c)&&_.Ma(a,c)&&"string"===typeof c&&(d=Yb(a[c]))&&b.push(Yb(c)+":"+d);return"{"+b.join(",")+"}"}return""}},Zb=function(a){if(!a)return!1;if(/^[\],:{}\s]*$/.test(a.replace(/\\["\\\/b-u]/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))try{return eval("("+a+")")}catch(b){}return!1}, $b=!1,bc;try{$b=!!window.JSON&&'["a"]'===window.JSON.stringify(["a"])&&"a"===window.JSON.parse('["a"]')[0]}catch(ac){}bc=function(a){try{return window.JSON.parse(a)}catch(b){return!1}};_.dc=$b?window.JSON.stringify:Yb;_.ec=$b?bc:Zb;

_.ak=function(){var a=/\s*;\s*/;return{get:function(b,c){for(var d=b+"=",e=(window.document.cookie||"").split(a),f=0,g;g=e[f];++f)if(0==g.indexOf(d))return g.substr(d.length);return c}}}();
_.Pb=function(){function a(a,b){if(!(a<c)&&d)if(2===a&&d.warn)d.warn(b);else if(3===a&&d.error)try{d.error(b)}catch(g){}else d.log&&d.log(b)}var b=function(b){a(1,b)};_.Nb=function(b){a(2,b)};_.Mb=function(b){a(3,b)};_.Ob=function(){};b.INFO=1;b.WARNING=2;b.NONE=4;var c=1,d=window.console?window.console:window.opera?window.opera.postError:void 0;return b}();

_.I=_.I||{};
_.I=_.I||{};(function(){var a=[];_.I.YU=function(b){a.push(b)};_.I.lV=function(){for(var b=0,c=a.length;b<c;++b)a[b]()}})();
_.Qb=function(a){for(var b=0;b<this.length;b++)if(this[b]===a)return b;return-1};_.Sb=function(a,b){var c=_.Ha(_.bb,"watt",_.Ka());_.Ha(c,a,b)};_.I=_.I||{};
(function(){var a=null;_.I.qb=function(b){var c="undefined"===typeof b;if(null!==a&&c)return a;var d={};b=b||window.location.href;var e=b.indexOf("?"),f=b.indexOf("#");b=(-1===f?b.substr(e+1):[b.substr(e+1,f-e-1),"&",b.substr(f+1)].join("")).split("&");for(var e=window.decodeURIComponent?window.decodeURIComponent:window.unescape,f=0,g=b.length;f<g;++f){var k=b[f].indexOf("=");if(-1!==k){var l=b[f].substring(0,k),k=b[f].substring(k+1),k=k.replace(/\+/g," ");try{d[l]=e(k)}catch(m){}}}c&&(a=d);return d}; _.I.qb()})();
_.D("gadgets.util.getUrlParameters",_.I.qb);
_.Tb=window.console;_.Ub=function(a){_.Tb&&_.Tb.log&&_.Tb.log(a)};_.Vb=function(){};
_.Wb=function(){var a=window.gadgets&&window.gadgets.config&&window.gadgets.config.get;a&&_.ib(a());return{register:function(a,c,d){d&&d(_.E())},get:function(a){return _.E(a)},update:function(a,c){if(c)throw"Config replacement is not supported";_.ib(a)},Xa:function(){}}}();
_.D("gadgets.config.register",_.Wb.register);_.D("gadgets.config.get",_.Wb.get);_.D("gadgets.config.init",_.Wb.Xa);_.D("gadgets.config.update",_.Wb.update);
_.D("gadgets.json.stringify",_.dc);_.D("gadgets.json.parse",_.ec);_.Xa(_.Da.location.href,"rpctoken")&&_.$a(_.Ea,"unload",function(){});
var fc,ic;fc=function(){var a=_.Ea.readyState;return"complete"===a||"interactive"===a&&-1==window.navigator.userAgent.indexOf("MSIE")};_.gc=function(a){if(fc())a();else{var b=!1,c=function(){if(!b)return b=!0,a.apply(this,arguments)};_.Da.addEventListener?(_.Da.addEventListener("load",c,!1),_.Da.addEventListener("DOMContentLoaded",c,!1)):_.Da.attachEvent&&(_.Da.attachEvent("onreadystatechange",function(){fc()&&c.apply(this,arguments)}),_.Da.attachEvent("onload",c))}};_.hc=function(a,b){if(!fc())try{a()}catch(c){}_.gc(b)}; ic=ic||{};ic.Ty=null;ic.Dx=null;ic.lm=null;ic.frameElement=null;
ic=ic||{};
ic.xs||(ic.xs=function(){function a(a){"undefined"!=typeof window.addEventListener?window.addEventListener("message",a,!1):"undefined"!=typeof window.attachEvent&&window.attachEvent("onmessage",a);window.___jsl=window.___jsl||{};var b=window.___jsl;b.RPMQ=b.RPMQ||[];b.RPMQ.push(a)}function b(a){var b=(0,_.ec)(a.data);if(b&&b.f){(0,_.Ob)("gadgets.rpc.receive("+window.name+"): "+a.data);var d=_.K.Ff(b.f);e&&("undefined"!==typeof a.origin?a.origin!==d:a.domain!==/^.+:\/\/([^:]+).*/.exec(d)[1])?_.Mb("Invalid rpc message origin. "+
d+" vs "+(a.origin||"")):c(b,a.origin)}}var c,d,e=!0;return{Bh:function(){return"wpm"},A:function(){return!0},Xa:function(f,g){_.Wb.register("rpc",null,function(a){"true"===String((a&&a.rpc||{}).disableForceSecure)&&(e=!1)});c=f;d=g;a(b);d("..",!0);return!0},kb:function(a){d(a,!0);return!0},call:function(a,b,c){var d=_.K.Ff(a),e=_.K.Xt(a);d?window.setTimeout(function(){var a=(0,_.dc)(c);(0,_.Ob)("gadgets.rpc.send("+window.name+"): "+a);e.postMessage(a,d)},0):".."!=a&&_.Mb("No relay set (used as window.postMessage targetOrigin), cannot send cross-domain message"); return!0}}}());
ic=ic||{};
ic.Al||(ic.Al=function(){function a(a,b){H[b]=H[b]||function(){a.apply({},arguments)}}function b(){if(null===v&&window.document.body&&l){var a=l+"?cb="+Math.random()+"&origin="+A+"&jsl=1",c=window.document.createElement("div");c.style.height="1px";c.style.width="1px";a='<object height="1" width="1" id="___xpcswf" type="application/x-shockwave-flash"><param name="allowScriptAccess" value="always"></param><param name="movie" value="'+a+'"></param><embed type="application/x-shockwave-flash" allowScriptAccess="always" src="'+a+
'" height="1" width="1"></embed></object>';window.document.body.appendChild(c);c.innerHTML=a;v=c.firstChild}++x;null!==w&&(null!==v||50<=x)?window.clearTimeout(w):w=window.setTimeout(b,100)}function c(){G[".."]||(k(".."),y++,50<=y&&null!==C?(window.clearTimeout(C),C=null):C=window.setTimeout(c,100))}function d(){if(null!==v&&v.setup)for(;0<z.length;){var a=z.shift(),b=a.ZK;v.setup(a.xi,".."===b?_.K.Tn:b,".."===b?"INNER":"OUTER")}null!==w&&window.clearTimeout(w);w=null}function e(){G[".."]||null!==
C||(C=window.setTimeout(c,100))}function f(a,b,c){b=_.K.Ff(a);var d=_.K.og(a);v["sendMessage_"+(".."===a?_.K.Tn:a)+"_"+d+"_"+(".."===a?"INNER":"OUTER")].call(v,(0,_.dc)(c),b);return!0}function g(a,b){var c=(0,_.ec)(a),d=c._scr;d?(p(d,!0),G[d]=!0,".."!==d&&k(d,!0)):window.setTimeout(function(){n(c,b)},0)}function k(a,b){var c=_.K.Tn,d={};d._scr=b?"..":c;d._pnt=c;f(a,0,d)}var l=null,m=!1,n=null,p=null,v=null,z=[],w=null,x=0,y=0,C=null,G={},A=window.location.protocol+"//"+window.location.host,H;window.___jsl=
window.___jsl||{};H=window.___jsl._fm={};_.Wb.register("rpc",null,function(a){m&&(l=a&&a.rpc&&a.rpc.commSwf||"//xpc.googleusercontent.com/gadgets/xpc.swf")});a(d,"ready");a(e,"setupDone");a(g,"receiveMessage");return{Bh:function(){return"flash"},A:function(){return!0},Xa:function(a,b){n=a;p=b;return m=!0},kb:function(a,c){z.push({xi:c,ZK:a});null===v&&null===w&&(w=window.setTimeout(b,100));return!0},call:f,uD:g,B:d,C:e}}());
if(window.gadgets&&window.gadgets.rpc)"undefined"!=typeof _.K&&_.K||(_.K=window.gadgets.rpc,_.K.config=_.K.config,_.K.register=_.K.register,_.K.unregister=_.K.unregister,_.K.Iy=_.K.registerDefault,_.K.jA=_.K.unregisterDefault,_.K.ev=_.K.forceParentVerifiable,_.K.call=_.K.call,_.K.wj=_.K.getRelayUrl,_.K.Te=_.K.setRelayUrl,_.K.Zm=_.K.setAuthToken,_.K.jk=_.K.setupReceiver,_.K.og=_.K.getAuthToken,_.K.jr=_.K.removeReceiver,_.K.Kv=_.K.getRelayChannel,_.K.Sm=_.K.receive,_.K.Ey=_.K.receiveSameDomain,_.K.Aa=
_.K.getOrigin,_.K.Ff=_.K.getTargetOrigin,_.K.Xt=_.K._getTargetWin,_.K.tD=_.K._parseSiblingId);else{_.K=function(){function a(a,b){if(!ca[a]){var c=xa;b||(c=ta);ca[a]=c;for(var d=da[a]||[],e=0;e<d.length;++e){var f=d[e];f.t=G[a];c.call(a,f.f,f)}da[a]=[]}}function b(){function a(){Za=!0}pa||("undefined"!=typeof window.addEventListener?window.addEventListener("unload",a,!1):"undefined"!=typeof window.attachEvent&&window.attachEvent("onunload",a),pa=!0)}function c(a,c,d,e,f){G[c]&&G[c]===d||(_.Mb("Invalid gadgets.rpc token. "+
G[c]+" vs "+d),Qa(c,2));f.onunload=function(){J[c]&&!Za&&(Qa(c,1),_.K.jr(c))};b();e=(0,_.ec)((0,window.decodeURIComponent)(e))}function d(b,c){if(b&&"string"===typeof b.s&&"string"===typeof b.f&&b.a instanceof Array)if(G[b.f]&&G[b.f]!==b.t&&(_.Mb("Invalid gadgets.rpc token. "+G[b.f]+" vs "+b.t),Qa(b.f,2)),"__ack"===b.s)window.setTimeout(function(){a(b.f,!0)},0);else{b.c&&(b.callback=function(a){_.K.call(b.f,(b.g?"legacy__":"")+"__cb",null,b.c,a)});if(c){var d=e(c);b.origin=c;var f=b.r,g;try{g=e(f)}catch(k){}f&&
g==d||(f=c);b.referer=f}d=(x[b.s]||x[""]).apply(b,b.a);b.c&&"undefined"!==typeof d&&_.K.call(b.f,"__cb",null,b.c,d)}}function e(a){if(!a)return"";a=a.split("#")[0].split("?")[0];a=a.toLowerCase();0==a.indexOf("//")&&(a=window.location.protocol+a);-1==a.indexOf("://")&&(a=window.location.protocol+"//"+a);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");-1!=c&&(b=b.substring(0,c));a=a.substring(0,a.indexOf("://"));if("http"!==a&&"https"!==a&&"chrome-extension"!==a&&"file"!==a)throw Error("b");
var c="",d=b.indexOf(":");if(-1!=d){var e=b.substring(d+1),b=b.substring(0,d);if("http"===a&&"80"!==e||"https"===a&&"443"!==e)c=":"+e}return a+"://"+b+c}function f(a){if("/"==a.charAt(0)){var b=a.indexOf("|");return{id:0<b?a.substring(1,b):a.substring(1),origin:0<b?a.substring(b+1):null}}return null}function g(a){if("undefined"===typeof a||".."===a)return window.parent;var b=f(a);if(b)return window.top.frames[b.id];a=String(a);return(b=window.frames[a])?b:(b=window.document.getElementById(a))&&b.contentWindow?
b.contentWindow:null}function k(a,b){if(!0!==J[a]){"undefined"===typeof J[a]&&(J[a]=0);var c=g(a);".."!==a&&null==c||!0!==xa.kb(a,b)?!0!==J[a]&&10>J[a]++?window.setTimeout(function(){k(a,b)},500):(ca[a]=ta,J[a]=!0):J[a]=!0}}function l(a){(a=y[a])&&"/"===a.substring(0,1)&&(a="/"===a.substring(1,2)?window.document.location.protocol+a:window.document.location.protocol+"//"+window.document.location.host+a);return a}function m(a,b,c){b&&!/http(s)?:\/\/.+/.test(b)&&(0==b.indexOf("//")?b=window.location.protocol+
b:"/"==b.charAt(0)?b=window.location.protocol+"//"+window.location.host+b:-1==b.indexOf("://")&&(b=window.location.protocol+"//"+b));y[a]=b;"undefined"!==typeof c&&(C[a]=!!c)}function n(a,b){b=b||"";G[a]=String(b);k(a,b)}function p(a){a=(a.passReferrer||"").split(":",2);X=a[0]||"none";Aa=a[1]||"origin"}function v(b){"true"===String(b.useLegacyProtocol)&&(xa=ic.lm||ta,xa.Xa(d,a))}function z(a,b){function c(d){d=d&&d.rpc||{};p(d);var f=d.parentRelayUrl||"",f=e(W.parent||b)+f;m("..",f,"true"===String(d.useLegacyProtocol));
v(d);n("..",a)}!W.parent&&b?c({}):_.Wb.register("rpc",null,c)}function w(a,b,c){if(".."===a)z(c||W.rpctoken||W.ifpctok||"",b);else a:{var d=null;if("/"!=a.charAt(0)){if(!_.I)break a;d=window.document.getElementById(a);if(!d)throw Error("c`"+a);}d=d&&d.src;b=b||_.K.Aa(d);m(a,b);b=_.I.qb(d);n(a,c||b.rpctoken)}}var x={},y={},C={},G={},A=0,H={},J={},W={},ca={},da={},X=null,Aa=null,S=window.top!==window.self,qa=window.name,Qa=function(){},aa=window.console,ia=aa&&aa.log&&function(a){aa.log(a)}||function(){},
ta=function(){function a(b){return function(){ia(b+": call ignored")}}return{getCode:function(){return"noop"},isParentVerifiable:function(){return!0},init:a("init"),setup:a("setup"),call:a("call")}}();_.I&&(W=_.I.qb());var Za=!1,pa=!1,xa=function(){if("flash"==W.rpctx)return ic.Al;if("rmr"==W.rpctx)return ic.Ty;var a="function"===typeof window.postMessage?ic.xs:"object"===typeof window.postMessage?ic.xs:window.ActiveXObject?ic.Al?ic.Al:ic.Dx?ic.Dx:ic.lm:0<window.navigator.userAgent.indexOf("WebKit")?
ic.Ty:"Gecko"===window.navigator.product?ic.frameElement:ic.lm;a||(a=ta);return a}();x[""]=function(){ia("Unknown RPC service: "+this.s)};x.__cb=function(a,b){var c=H[a];c&&(delete H[a],c.call(this,b))};return{config:function(a){"function"===typeof a.$y&&(Qa=a.$y)},register:function(a,b){if("__cb"===a||"__ack"===a)throw Error("d");if(""===a)throw Error("e");x[a]=b},unregister:function(a){if("__cb"===a||"__ack"===a)throw Error("f");if(""===a)throw Error("g");delete x[a]},Iy:function(a){x[""]=a},jA:function(){delete x[""]},
ev:function(){},call:function(a,b,c,d){a=a||"..";var e="..";".."===a?e=qa:"/"==a.charAt(0)&&(e=_.K.Aa(window.location.href),e="/"+qa+(e?"|"+e:""));++A;c&&(H[A]=c);var g={s:b,f:e,c:c?A:0,a:Array.prototype.slice.call(arguments,3),t:G[a],l:!!C[a]},k;a:if("bidir"===X||"c2p"===X&&".."===a||"p2c"===X&&".."!==a){k=window.location.href;var l="?";if("query"===Aa)l="#";else if("hash"===Aa)break a;l=k.lastIndexOf(l);l=-1===l?k.length:l;k=k.substring(0,l)}else k=null;k&&(g.r=k);if(".."===a||null!=f(a)||window.document.getElementById(a))(k=
ca[a])||null===f(a)||(k=xa),0===b.indexOf("legacy__")&&(k=xa,g.s=b.substring(8),g.c=g.c?g.c:A),g.g=!0,g.r=e,k?(C[a]&&(k=ic.lm),!1===k.call(a,e,g)&&(ca[a]=ta,xa.call(a,e,g))):da[a]?da[a].push(g):da[a]=[g]},wj:l,Te:m,Zm:n,jk:w,og:function(a){return G[a]},jr:function(a){delete y[a];delete C[a];delete G[a];delete J[a];delete ca[a]},Kv:function(){return xa.Bh()},Sm:function(a,b){4<a.length?xa.uD(a,d):c.apply(null,a.concat(b))},Ey:function(a){a.a=Array.prototype.slice.call(a.a);window.setTimeout(function(){d(a)},
0)},Aa:e,Ff:function(a){var b=null,c=l(a);c?b=c:(c=f(a))?b=c.origin:b=".."==a?W.parent:window.document.getElementById(a).src;return e(b)},Xa:function(){!1===xa.Xa(d,a)&&(xa=ta);S?w(".."):_.Wb.register("rpc",null,function(a){a=a.rpc||{};p(a);v(a)})},Xt:g,tD:f,A:"__ack",Tn:qa||"..",D:0,C:1,B:2}}();_.K.Xa()};
_.K.config({$y:function(a){throw Error("h`"+a);}});_.Ob=_.Vb;_.D("gadgets.rpc.config",_.K.config);_.D("gadgets.rpc.register",_.K.register);_.D("gadgets.rpc.unregister",_.K.unregister);_.D("gadgets.rpc.registerDefault",_.K.Iy);_.D("gadgets.rpc.unregisterDefault",_.K.jA);_.D("gadgets.rpc.forceParentVerifiable",_.K.ev);_.D("gadgets.rpc.call",_.K.call);_.D("gadgets.rpc.getRelayUrl",_.K.wj);_.D("gadgets.rpc.setRelayUrl",_.K.Te);_.D("gadgets.rpc.setAuthToken",_.K.Zm);_.D("gadgets.rpc.setupReceiver",_.K.jk);_.D("gadgets.rpc.getAuthToken",_.K.og); _.D("gadgets.rpc.removeReceiver",_.K.jr);_.D("gadgets.rpc.getRelayChannel",_.K.Kv);_.D("gadgets.rpc.receive",_.K.Sm);_.D("gadgets.rpc.receiveSameDomain",_.K.Ey);_.D("gadgets.rpc.getOrigin",_.K.Aa);_.D("gadgets.rpc.getTargetOrigin",_.K.Ff);

_.L={};_.Uc={};window.iframer=_.Uc;
var Wc;_.M=function(a,b){return _.ba[a]=b};_.Vc=function(a){var b=_.ja(a);return"array"==b||"object"==b&&"number"==typeof a.length};Wc=0;_.Xc=function(a){return a[_.na]||(a[_.na]=++Wc)};_.Yc=function(a){var b=typeof a;return"object"==b&&null!=a||"function"==b};_.Zc=function(a){return"function"==_.ja(a)};_.$c=function(a){return"number"==typeof a};
_.ad=function(a,b){return 0==a.lastIndexOf(b,0)};_.bd=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")};_.cd=function(a,b){return Array(b+1).join(a)};_.dd=2147483648*Math.random()|0;_.ed=function(a){return String(a).replace(/\-([a-z])/g,function(a,c){return c.toUpperCase()})};
_.fd=Array.prototype;_.gd=_.fd.indexOf?function(a,b,c){return _.fd.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(_.la(a))return _.la(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1};
_.hd=_.fd.lastIndexOf?function(a,b,c){return _.fd.lastIndexOf.call(a,b,null==c?a.length-1:c)}:function(a,b,c){c=null==c?a.length-1:c;0>c&&(c=Math.max(0,a.length+c));if(_.la(a))return _.la(b)&&1==b.length?a.lastIndexOf(b,c):-1;for(;0<=c;c--)if(c in a&&a[c]===b)return c;return-1};_.id=_.fd.forEach?function(a,b,c){_.fd.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=_.la(a)?a.split(""):a,f=0;f<d;f++)f in e&&b.call(c,e[f],f,a)};
_.jd=_.fd.filter?function(a,b,c){return _.fd.filter.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=[],f=0,g=_.la(a)?a.split(""):a,k=0;k<d;k++)if(k in g){var l=g[k];b.call(c,l,k,a)&&(e[f++]=l)}return e};_.kd=_.fd.map?function(a,b,c){return _.fd.map.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=Array(d),f=_.la(a)?a.split(""):a,g=0;g<d;g++)g in f&&(e[g]=b.call(c,f[g],g,a));return e};
_.ld=_.fd.some?function(a,b,c){return _.fd.some.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=_.la(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&b.call(c,e[f],f,a))return!0;return!1};_.md=_.fd.every?function(a,b,c){return _.fd.every.call(a,b,c)}:function(a,b,c){for(var d=a.length,e=_.la(a)?a.split(""):a,f=0;f<d;f++)if(f in e&&!b.call(c,e[f],f,a))return!1;return!0};_.nd=function(a,b){return 0<=(0,_.gd)(a,b)}; _.od=function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(_.Vc(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}};

_.pd=function(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b};_.rd=function(a){var b=[],c=0,d;for(d in a)b[c++]=d;return b};_.sd=function(a,b){for(var c in a)if(a[c]==b)return!0;return!1};a:{var ud=_.r.navigator;if(ud){var vd=ud.userAgent;if(vd){_.td=vd;break a}}_.td=""}_.wd=function(a){return-1!=_.td.indexOf(a)};_.xd=function(){return _.wd("Trident")||_.wd("MSIE")};
var yd,zd,Ad,Bd,Cd,Dd,Ed,Hd,Jd;yd=/&/g;zd=/</g;Ad=/>/g;Bd=/"/g;Cd=/'/g;Dd=/\x00/g;Ed=/[\x00&<>"']/;_.Fd=function(){return _.wd("Opera")||_.wd("OPR")};_.Gd=function(a){if(!Ed.test(a))return a;-1!=a.indexOf("&")&&(a=a.replace(yd,"&amp;"));-1!=a.indexOf("<")&&(a=a.replace(zd,"&lt;"));-1!=a.indexOf(">")&&(a=a.replace(Ad,"&gt;"));-1!=a.indexOf('"')&&(a=a.replace(Bd,"&quot;"));-1!=a.indexOf("'")&&(a=a.replace(Cd,"&#39;"));-1!=a.indexOf("\x00")&&(a=a.replace(Dd,"&#0;"));return a};
Hd=function(a,b){return a<b?-1:a>b?1:0};_.Id=function(a,b,c){return 2>=arguments.length?_.fd.slice.call(a,b):_.fd.slice.call(a,b,c)};Jd="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");
_.Kd=function(a,b){for(var c=0,d=(0,_.bd)(String(a)).split("."),e=(0,_.bd)(String(b)).split("."),f=Math.max(d.length,e.length),g=0;0==c&&g<f;g++){var k=d[g]||"",l=e[g]||"",m=RegExp("(\\d*)(\\D*)","g"),n=RegExp("(\\d*)(\\D*)","g");do{var p=m.exec(k)||["","",""],v=n.exec(l)||["","",""];if(0==p[0].length&&0==v[0].length)break;c=Hd(0==p[1].length?0:(0,window.parseInt)(p[1],10),0==v[1].length?0:(0,window.parseInt)(v[1],10))||Hd(0==p[2].length,0==v[2].length)||Hd(p[2],v[2])}while(0==c)}return c};
_.Ld=function(a){return null==a?"":String(a)};_.Md=function(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<Jd.length;f++)c=Jd[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}};_.Nd=function(a,b,c){for(var d in a)b.call(c,a[d],d,a)};_.Od=function(a){var b=a.length;if(0<b){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]};_.Pd=function(a,b){var c=a.length-b.length;return 0<=c&&a.indexOf(b,c)==c}; _.Qd=function(){return _.wd("iPhone")&&!_.wd("iPod")&&!_.wd("iPad")};_.Rd=function(){return _.Qd()||_.wd("iPad")||_.wd("iPod")};
var Td,ce,de,je,le;_.Sd=_.Fd();_.N=_.xd();Td=_.wd("Edge");_.Ud=_.wd("Gecko")&&!(-1!=_.td.toLowerCase().indexOf("webkit")&&!_.wd("Edge"))&&!(_.wd("Trident")||_.wd("MSIE"))&&!_.wd("Edge");_.Vd=-1!=_.td.toLowerCase().indexOf("webkit")&&!_.wd("Edge");_.Wd=_.Vd&&_.wd("Mobile");_.Xd=_.wd("Macintosh");_.Yd=_.wd("Windows");_.Zd=_.wd("Linux")||_.wd("CrOS");_.$d=_.wd("Android");_.ae=_.Qd();_.be=_.wd("iPad");
ce=function(){var a=_.td;if(_.Ud)return/rv\:([^\);]+)(\)|;)/.exec(a);if(Td)return/Edge\/([\d\.]+)/.exec(a);if(_.N)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(_.Vd)return/WebKit\/(\S+)/.exec(a)};de=function(){var a=_.r.document;return a?a.documentMode:void 0};_.ee=function(){if(_.Sd&&_.r.opera){var a=_.r.opera.version;return _.Zc(a)?a():a}var a="",b=ce();b&&(a=b?b[1]:"");return _.N&&(b=de(),b>(0,window.parseFloat)(a))?String(b):a}();je={}; _.ke=function(a){return je[a]||(je[a]=0<=_.Kd(_.ee,a))};le=_.r.document;_.me=le&&_.N?de()||("CSS1Compat"==le.compatMode?(0,window.parseInt)(_.ee,10):5):void 0;

var zh,Bh,Ch;_.yh=function(a){return/^[\s\xa0]*$/.test(a)};zh=function(a){return Array.prototype.join.call(arguments,"")};_.Ah=function(a){return(0,window.encodeURIComponent)(String(a))};Bh=/^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#(.*))?$/;_.Dh=function(a){if(Ch){Ch=!1;var b=_.r.location;if(b){var c=b.href;if(c&&(c=(c=_.Dh(c)[3]||null)?(0,window.decodeURI)(c):c)&&c!=b.hostname)throw Ch=!0,Error();}}return a.match(Bh)};Ch=_.Vd;
_.Eh=function(a){if(a[1]){var b=a[0],c=b.indexOf("#");0<=c&&(a.push(b.substr(c)),a[0]=b=b.substr(0,c));c=b.indexOf("?");0>c?a[1]="?":c==b.length-1&&(a[1]=void 0)}return a.join("")};_.Fh=function(a,b,c){if(_.ka(b))for(var d=0;d<b.length;d++)_.Fh(a,String(b[d]),c);else null!=b&&c.push("&",a,""===b?"":"=",_.Ah(b))};_.Gh=function(a,b){for(var c in b)_.Fh(c,b[c],a);return a};_.Hh=function(a,b){_.Pd(a,"/")&&(a=a.substr(0,a.length-1));_.ad(b,"/")&&(b=b.substr(1));return zh(a,"/",b)};

var Gk;_.Ek=function(a){if(!_.Vc(a))return null;for(var b={},c=0;c<a.length;c++)b[a[c]]=a[c];return b};_.Fk=function(a,b){var c=a.length;if(c!=b.length)return!1;for(var d=0;d<c;++d){var e=a.charCodeAt(d),f=b.charCodeAt(d);65<=e&&90>=e&&(e+=32);65<=f&&90>=f&&(f+=32);if(e!=f)return!1}return!0};Gk=null;
_.Hk=function(a){if(null===Gk){var b=_.E("client/headers/response");b||(b=_.E("googleapis/headers/response"));Gk=_.Ek(b)}if(null!=Gk){if(Gk.hasOwnProperty(a))return!0;for(var c in Gk)if(Gk.hasOwnProperty(c)&&_.Fk(c,a))return!0}return!1};
_.Ik=function(a){a=String(a||"").split("\x00").join("");for(var b=[],c=!0,d=0,e=a.length;d<e;++d){var f=a.charAt(d),g=a.charCodeAt(d);if(55296<=g&&56319>=g&&d+1<e){var k=a.charAt(d+1),l=a.charCodeAt(d+1);56320<=l&&57343>=l&&(f+=k,g=65536+(g-55296<<10)+(l-56320),++d)}if(!(0<=g&&1114109>=g)||55296<=g&&57343>=g||64976<=g&&65007>=g||65534==(g&65534))g=65533,f=String.fromCharCode(g);k=!(32<=g&&126>=g)||" "==f||c&&":"==f||"\\"==f;!c||"/"!=f&&"?"!=f||(c=!1);"%"==f&&(d+2>=e?k=!0:(l=16*(0,window.parseInt)(a.charAt(d+
1),16)+(0,window.parseInt)(a.charAt(d+2),16),0<=l&&255>=l?(g=l,f=0==g?"":"%"+(256+l).toString(16).toUpperCase().substr(1),d+=2):k=!0));k&&(f=(0,window.encodeURIComponent)(f),1>=f.length&&(0<=g&&127>=g?f="%"+(256+g).toString(16).toUpperCase().substr(1):(g=65533,f=(0,window.encodeURIComponent)(String.fromCharCode(g)))));b.push(f)}a=b.join("");a=a.split("#")[0];a=a.split("?");b=a[0].split("/");c=[];d=0;for(e=b.length;d<e;++d)f=b[d],g=f.split("%2E").join("."),g=g.split((0,window.encodeURIComponent)("\uff0e")).join("."),
"."==g?d+1==e&&c.push(""):".."==g?(0<c.length&&c.pop(),d+1==e&&c.push("")):c.push(f);a[0]=c.join("/");for(a=a.join("?");a&&"/"==a.charAt(0);)a=a.substr(1);return"/"+a};_.Kk=function(a){var b=_.Ik(a);if(String(a)!=b)throw Error("G");(a=b)&&"/"==a.charAt(a.length-1)||(a=(a||"")+"/");_.K.register("init",function(){_.Kk(a)});_.Jk=a;_.I.qb(window.location.href)};
_.Lk="function"==typeof window.atob;
var Mk,Nk,Ok,Pk,Qk,Rk,Sk,Tk,Uk;Mk=null;Nk=function(a,b){if(null!=a)for(var c in a)if(a.hasOwnProperty(c)&&_.Fk(c,b))return{name:c,value:a[c]}};Ok=null;
Pk=function(a,b,c,d){var e=Nk(b,"X-Goog-Safety-Encoding");if(null!=e){if(_.Lk)a=window.atob(a);else{if(!Mk){var f="ABCDEFGHIJKLMNOPQRSTUVWXYZ",f=f+(f.toLowerCase()+"0123456789+/=");Mk={};for(var g=0;g<f.length;g++)Mk[f.charAt(g)]=g}for(var f=Mk,g=[],k=0;k<a.length;){var l=f[a.charAt(k++)],m=k<a.length?f[a.charAt(k)]:0;++k;var n=k<a.length?f[a.charAt(k)]:0;++k;var p=k<a.length?f[a.charAt(k)]:0;++k;if(null==l||null==m||null==n||null==p)throw Error();g.push(l<<2|m>>4);64!=n&&(g.push(m<<4&240|n>>2),64!=
p&&g.push(n<<6&192|p))}a=String.fromCharCode.apply(null,g)}f=Nk(b,"X-Goog-Safety-Content-Type");b["Content-Type"]=f.value;delete b[e.name];delete b[f.name]}return{body:a,headers:b,status:c,statusText:d}};Qk=function(){try{return new window.XMLHttpRequest}catch(a){}try{return new window.ActiveXObject("Msxml2.XMLHTTP")}catch(b){}return null};Rk=function(a,b){b=b||"0.1";var c=[];c.push(a||"google-api-javascript-client");b&&(c.push("/"),c.push(b));return c.join("")};
Sk=function(a,b){if(!a||!b)return!1;for(var c=0,d=b.length;c<d;++c){var e=b.charCodeAt(c);if(!(32<=e&&126>=e))return!1}null===Ok&&((c=_.E("client/headers/request"))||(c=_.E("googleapis/headers/request")),Ok=_.Ek(c));return null!=Ok?Ok.hasOwnProperty(a):!1};
Tk=function(a,b,c,d){a=a||{};var e=a.headers||{},f=a.httpMethod||"GET",g=String(a.url||""),k=a.urlParams||null,l=a.body||null,m=a.clientName||null,n=a.clientVersion||null;c=c||null;d=d||null;g=_.Ik(g);g=_.Jk+String(g||"/").substr(1);g=_.Eh(_.Gh([g],k));e["X-JavaScript-User-Agent"]=Rk(m,n);delete e["X-Origin"];c&&(e["X-Origin"]=c);delete e["X-Referer"];d&&(e["X-Referer"]=d);e["X-Goog-Encode-Response-If-Executable"]="base64";l&&"object"===typeof l&&(l=(0,_.dc)(l));var p=Qk();if(!p)throw Error("H");
p.open(f,g);p.onreadystatechange=function(){if(4==p.readyState&&0!==p.status){var a=p.responseText;var c=p.getAllResponseHeaders(),d={};if(c)for(var c=c.split("\r\n"),e=0;e<c.length;e++){var f=c[e],g=f.indexOf(": ");if(0<g){var k=f.substring(0,g),f=f.substring(g+2);_.Hk(k)&&(d[k]=f)}}a=Pk(a,d,p.status,p.statusText);b(a)}};p.onerror=function(){var c;c={error:{code:-1,message:"A network error occurred, and the request could not be completed."}};if("/rpc"==a.url){for(var d=a.body,e=[],f=0;f<d.length;f++){var g=
(0,_.dc)(c),g=(0,_.ec)(g);g.id=d[f].id;e.push(g)}c=e}c=(0,_.dc)(c);c=Pk(c);b(c)};for(var v in e)e.hasOwnProperty(v)&&(f=e[v],Sk(v,f)&&p.setRequestHeader(v,f));p.send(l?l:null)};Uk=function(a,b,c,d){var e={},f=0;if(0==a.length)b(e);else{var g=function(k){var l=k.key;Tk(k.params,function(c){e[l]={data:c};f++;a.length==f?b((0,_.dc)(e)):g(a[f])},c,d)};g(a[f])}};_.kj=_.kj||{};
_.kj.qJ=function(){_.K.register("makeHttpRequests",function(a){".."==this.f&&this.t==_.K.og("..")&&this.origin==_.K.Ff("..")&&Uk.call(this,a,this.callback,this.origin,this.referer)})};_.kj.Xa=function(){var a=String(window.location.pathname);18<=a.length&&"/static/proxy.html"==a.substr(a.length-18)&&(a=a.substr(0,a.length-18));a||(a="/");_.kj.$w(a)};_.kj.$w=function(a){var b=_.Ik(a);if(String(a)!=b)throw Error("G");_.kj.qJ();_.Kk(a);_.K.call("..","ready:"+_.K.og(".."))};
_.D("googleapis.ApiServer.makeHttpRequests",Uk);_.D("googleapis.ApiServer.initWithPath",_.Kk);_.D("googleapis.server.init",_.kj.Xa);_.D("googleapis.server.initWithPath",_.kj.$w);
});
// Google Inc.
