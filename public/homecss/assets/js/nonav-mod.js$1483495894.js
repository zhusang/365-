define("MSlider",[],function(){$.easing.jswing=$.easing.swing,$.extend($.easing,{def:"easeOutQuad",easeOutQuad:function(e,n,t,i,o){return-i*(n/=o)*(n-2)+t}});var e=document.createElement("div"),n="animation"in e.style||"-webkit-animation"in e.style,t=M.ua,i=t.ipad,o=t.iphone,a=i||o,s=t.android,r=a||s,d=function(e){this.isDelayed=!1,this.isMouseOn=!1,this.isTurning=!1,this.showIndex=0,this.banners=null,this.bannerNum=0,this.opts=$.extend({},this.defaults,e),this.autoTurnTimer=null,this.dotHoverTimer=null,this.isHoverTurn=!1,this.isInit=!1,this.bannerBoxWidth=0,this.init()};return d.prototype={defaults:{bannerBox:null,isLazyImage:!1,autoTime:!1,delayTime:!1,isTouchTurn:!0,turnMode:"normal",transDuration:500,addTurnBtn:!1,addTurnDot:!1,startIndex:0,callback:function(){}},init:function(){var e=this,n=e.opts.bannerBox;e.bannerBoxWidth=n.width(),$(window).scroll(function(){e.isInit||e.isElementInViewport(n[0])&&(e.initSlider(),e.isInit=!0)})},isElementInViewport:function(e){var n=e.getBoundingClientRect(),t=n.bottom,i=n.top,o=window.innerHeight||document.documentElement.clientHeight;return i>=0||t<=o},initSlider:function(){var e=this;e.banners=e.opts.bannerBox.find(".mslide_banner"),e.bannerNum=e.banners.length;var n=e.opts.bannerBox.find(".preload_box_0");n.addClass("mslide_banner_show"),setTimeout(function(){MoGu&&MoGu.dynamicImage&&MoGu.dynamicImage.checkImages()},17),e.showIndex=e.opts.startIndex,e.bannerNum<2||(setTimeout(function(){var n=e.opts.bannerBox.find(".preload_box_1");MoGu&&MoGu.dynamicImage&&MoGu.dynamicImage.preloadImages&&MoGu.dynamicImage.preloadImages(n)},800),e.opts.autoTime&&(a||e.opts.bannerBox.hover(function(){e.isMouseOn=!0},function(){e.isMouseOn=!1,e.isHoverTurn&&(e.isHoverTurn=!1,e.nextPage())}),e.opts.autoTime=e.opts.autoTime>1e3?e.opts.autoTime:1e3,e.resetAutoTurn()),e.opts.isTouchTurn&&e.initTouchTurn(),"default"==e.opts.addTurnBtn&&e.addDefaultBtn(),"default"==e.opts.addTurnDot?e.addDefaultDot():"animDot"==e.opts.addTurnDot?e.addAnimDot():"numDot"==e.opts.addTurnDot&&e.addNumDot(),r?e.opts.bannerBox.find(".mslide_toggle_btn").remove():e.initToggleBtn())},goPage:function(e){var n=this,t=n.opts.bannerBox.find(".mslide_banner_show"),i=this.showIndex,o="next";i>e&&(o="prev"),e>=n.bannerNum&&(e=0),e<0&&(e=n.bannerNum-1);var s=n.banners.eq(e);if(!n.isTurning&&!s.hasClass("mslide_banner_show")){n.isTurning=!0;var r=n.opts.transDuration;if("fade"==n.opts.turnMode)a?s.attr("style","z-index:2;display:block; -webkit-animation: fadeIn ease-in "+r+"ms;"):(s.css({"z-index":2}),s.fadeIn(r,"easeOutQuad").css("display","block")),setTimeout(function(){t.css({"z-index":0,display:"none"}),s.css({"z-index":1}),t.removeClass("mslide_banner_show"),s.addClass("mslide_banner_show"),n.isTurning=!1},r+10);else if("slide"==n.opts.turnMode){var d=n.bannerBoxWidth;d="prev"==o?-d:d,s.css({left:d}),s.addClass("mslide_banner_show"),t.animate({left:-d},r,"easeOutQuad"),s.animate({left:0},r,"easeOutQuad"),setTimeout(function(){t.removeClass("mslide_banner_show"),n.isTurning=!1},r+10)}else if("slideFade"==n.opts.turnMode){var d=n.opts.bannerBox.width()/4;d="prev"==o?-d:d,s.css({"z-index":2,left:d,opacity:0,display:"block"}),t.animate({left:-d,opacity:0},r),s.animate({left:0,opacity:1},r),setTimeout(function(){t.css({"z-index":0}),s.css({"z-index":1}),s.addClass("mslide_banner_show"),t.removeClass("mslide_banner_show"),n.isTurning=!1},r+10)}else t.removeClass("mslide_banner_show"),s.addClass("mslide_banner_show"),n.isTurning=!1;this.showIndex=e,setTimeout(function(){MoGu&&MoGu.dynamicImage&&MoGu.dynamicImage.checkImages()},100),setTimeout(function(){var t=0;t=e+1;var i=n.opts.bannerBox.find(".preload_box_"+t);MoGu&&MoGu.dynamicImage&&MoGu.dynamicImage.preloadImages&&MoGu.dynamicImage.preloadImages(i)},1e3),n.opts.callback&&n.opts.callback(e);var u=n.opts.bannerBox.find(".dot_default");u.length>e&&(u.removeClass("dot_show"),u.eq(e).addClass("dot_show")),n.opts.autoTime&&n.resetAutoTurn()}},prevPage:function(){var e=this;e.goPage(e.showIndex-1)},nextPage:function(){var e=this;e.goPage(e.showIndex+1)},initToggleBtn:function(){var e=this,n=e.opts.bannerBox;n.find(".mslide_next_btn").length>0&&n.on("click",".mslide_next_btn",function(n){n.preventDefault(),e.nextPage()}),n.find(".mslide_prev_btn").length>0&&n.on("click",".mslide_prev_btn",function(n){n.preventDefault(),e.prevPage()}),n.find(".dot_default").length>0&&!a&&(n.find(".dot_default").hover(function(){var n=$(this);clearInterval(e.dotHoverTimer),n.hasClass("dot_show")||(e.dotHoverTimer=setInterval(function(){e.isTurning||(e.goPage(n.index()),clearInterval(e.dotHoverTimer))},200))},function(){clearInterval(e.dotHoverTimer)}),n.on("click",".dot_default",function(n){n.preventDefault(),e.goPage($(this).index())}))},initTouchTurn:function(){var e=this,n=0,t=0,i=null,o=null,a={},s=e.opts.bannerBox;s.on("touchstart",function(e){i=e.originalEvent.touches[0],o&&clearTimeout(o),a.x1=i.clientX,a.y1=i.clientY}),s.on("touchmove",function(e){i=e.originalEvent.touches[0],a.x2=i.clientX,a.y2=i.clientY,n=Math.abs(a.x1-a.x2),t=Math.abs(a.y1-a.y2),n&&t/n<1.8&&e.preventDefault()}),s.on("touchend",function(i){if(n&&n>80&&t/n<1.8){var s=a.x1-a.x2;"slideFade"!=e.opts.turnMode&&"slide"!=e.opts.turnMode||(s=-s),o=setTimeout(function(){s>0?e.prevPage():e.nextPage(),a={}},0)}n=t=0}),s.on("touchcancel",function(){o&&clearTimeout(o),o=null})},addDefaultBtn:function(){var e=this,n='<a class="mslide_toggle_btn mslide_prev_btn" href="javascript:;" title="\u4e0a\u4e00\u5f20"></a><a class="mslide_toggle_btn mslide_next_btn" href="javascript:;" title="\u4e0b\u4e00\u5f20"></a>';e.opts.bannerBox.append(n)},addDefaultDot:function(){for(var e=this,n="",t=1;t<=e.bannerNum;t++){var i=1==t?"dot_show":"";n+='<a href="javascript:;" class="dot_default '+i+'"></a>'}var o='<div class="mslide_dot_box clearfix">'+n+"</div>";e.opts.bannerBox.append(o)},addAnimDot:function(){var e=this,t="",i='<span class="dot_show_img" ></span>',o=e.opts.autoTime||5e3;n&&(t=["-webkit-animation: rotate "+o+"ms cubic-bezier(0.6, 0, 0.6, 1) 1;","-moz-animation: rotate "+o+"ms cubic-bezier(0.6, 0, 0.6, 1) 1;","-o-animation: rotate "+o+"ms cubic-bezier(0.6, 0, 0.6, 1) 1;","animation: rotate "+o+"ms cubic-bezier(0.6, 0, 0.6, 1) 1;","background: none;"].join(""),i='<img class="dot_show_img" style="'+t+'" src="http://s8.mogucdn.com/pic/140829/o61vu_ieydmm3bmi2geodgmiytambqgiyde_40x40.png">');for(var a="",s=1;s<=e.bannerNum;s++){var r=1==s?"dot_show":"";a+='<a href="javascript:;" class="dot_default '+r+'">'+i+"</a>"}var d='<div class="mslide_dot_box anim_mslide_dot_box clearfix" >'+a+"</div>";e.opts.bannerBox.append(d)},addNumDot:function(){for(var e=this,n="",t=1;t<=e.bannerNum;t++){var i=1==t?"dot_show":"",o=t<10?"0"+t:t+"";n+='<a href="javascript:;" class="dot_default '+i+'">'+o+"</a>"}var a='<div class="mslide_dot_box num_mslide_dot_box clearfix" >'+n+"</div>";e.opts.bannerBox.append(a)},resetAutoTurn:function(){var e=this,n=e.opts.autoTime;clearInterval(e.autoTurnTimer),clearTimeout(e.autoTurnTimer),!e.isDelayed&&e.opts.delayTime?e.autoTurnTimer=setTimeout(function(){return e.isMouseOn?void(e.isHoverTurn=!0):(e.isDelayed=!0,void e.goPage(e.showIndex+1))},e.opts.delayTime):e.autoTurnTimer=setInterval(function(){return e.isMouseOn?void(e.isHoverTurn=!0):void e.goPage(e.showIndex+1)},n)}},d});define("fastbuy/Timer",["base/MoGu"],function(t){function e(t,e,n,r){e=e||600,"undefined"==typeof r&&(r=document.documentElement.scrollTop||document.body.scrollTop);var o=r+$(window).height();r-=e,o+=e;var i=[];return t.each(function(){var t=$(this);if("none"!==t.css("display")&&"hidden"!==t.css("visibility")&&0!==t.css("opacity")){var e=t.offset(),s=e.top,a=s+(e.height||t.height());if(e.width||t.width()){if(r>a||s>o)return void(n&&n(t,!1));n&&n(t,!0),i.push(this)}}}),$(i)}function n(t){this._startTime=(new Date).getTime(),this._nodes=null,this.options=$.extend({},n.DEFAULTS,t)}function r(t,e){var n=t/1e3,r=Math.floor(n/86400);n-=86400*r;var o=Math.floor(n/3600);n-=3600*o;var s=Math.floor(n/60);n-=60*s,n=Math.floor(n);var a="";return e.noday?(o+=24*r,a=i(e.format,[o,s,n])):a=i(e.format,[r,o,s,n]),a}var o=function(){function t(t){return Object.prototype.toString.call(t).slice(8,-1).toLowerCase()}function e(t,e){for(var n=[];e>0;n[--e]=t);return n.join("")}var n=function(){return n.cache.hasOwnProperty(arguments[0])||(n.cache[arguments[0]]=n.parse(arguments[0])),n.format.call(null,n.cache[arguments[0]],arguments)};return n.format=function(n,r){var i,s,a,u,h,c,f,l=1,p=n.length,d="",m=[];for(s=0;p>s;s++)if(d=t(n[s]),"string"===d)m.push(n[s]);else if("array"===d){if(u=n[s],u[2])for(i=r[l],a=0;a<u[2].length;a++){if(!i.hasOwnProperty(u[2][a]))throw o('[sprintf] property "%s" does not exist',u[2][a]);i=i[u[2][a]]}else i=u[1]?r[u[1]]:r[l++];if(/[^s]/.test(u[8])&&"number"!=t(i))throw o("[sprintf] expecting number but found %s",t(i));switch(u[8]){case"b":i=i.toString(2);break;case"c":i=String.fromCharCode(i);break;case"d":i=parseInt(i,10);break;case"e":i=u[7]?i.toExponential(u[7]):i.toExponential();break;case"f":i=u[7]?parseFloat(i).toFixed(u[7]):parseFloat(i);break;case"o":i=i.toString(8);break;case"s":i=(i=String(i))&&u[7]?i.substring(0,u[7]):i;break;case"u":i=Math.abs(i);break;case"x":i=i.toString(16);break;case"X":i=i.toString(16).toUpperCase()}i=/[def]/.test(u[8])&&u[3]&&i>=0?"+"+i:i,c=u[4]?"0"==u[4]?"0":u[4].charAt(1):" ",f=u[6]-String(i).length,h=u[6]?e(c,f):"",m.push(u[5]?i+h:h+i)}return m.join("")},n.cache={},n.parse=function(t){for(var e=t,n=[],r=[],o=0;e;){if(null!==(n=/^[^\x25]+/.exec(e)))r.push(n[0]);else if(null!==(n=/^\x25{2}/.exec(e)))r.push("%");else{if(null===(n=/^\x25(?:([1-9]\d*)\$|\(([^\)]+)\))?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-fosuxX])/.exec(e)))throw"[sprintf] huh?";if(n[2]){o|=1;var i=[],s=n[2],a=[];if(null===(a=/^([a-z_][a-z_\d]*)/i.exec(s)))throw"[sprintf] huh?";for(i.push(a[1]);""!==(s=s.substring(a[0].length));)if(null!==(a=/^\.([a-z_][a-z_\d]*)/i.exec(s)))i.push(a[1]);else{if(null===(a=/^\[(\d+)\]/.exec(s)))throw"[sprintf] huh?";i.push(a[1])}n[2]=i}else o|=2;if(3===o)throw"[sprintf] mixing positional and named placeholders is not (yet) supported";r.push(n)}e=e.substring(n[0].length)}return r},n}(),i=function(t,e){return e.unshift(t),o.apply(null,e)},s=Math.random().toString().replace(".","");return Function.prototype.bind||(Function.prototype.bind=function(t){if("function"!=typeof this)throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");var e=Array.prototype.slice.call(arguments,1),n=this,r=function(){},o=function(){return n.apply(this instanceof r?this:t,e.concat(Array.prototype.slice.call(arguments)))};return this.prototype&&(r.prototype=this.prototype),o.prototype=new r,o}),n.prototype={constructor:n,init:function(){this._nodes=$(this.options.selector),clearTimeout(this._timeout),this._refresh(),this._timeout=setInterval(this._refresh.bind(this),this.options.interval)},update:function(){this._nodes=$(this.options.selector)},_refresh:function(){var t=(new Date).getTime(),n=this._nodes;this.options.viewonly&&(n=e(n,this.options.offset,null,document.documentElement.scrollTop||document.body.scrollTop));var o=this;n.each(function(){var e=$(this),n=o.options,i=e.data(n.datattr);if("undefined"!=typeof i&&!e.data(s))return i-=t-o._startTime,300>=i?(i=0,e.html(r(i,n)),n.finish&&n.finish(e),void e.data(s,!0)):void e.html(r(i,n))})}},n.DEFAULTS={viewonly:!1,interval:500,offset:300,noday:!1,selector:".timer",datattr:"time-left",format:"%02d天%02d时%02d分%02d秒"},n.VERSION="0.0.2",t.Timer=t.Timer||n,n});define("module/template",[],function(){function e(e){return e.replace(y,"").replace(b,",").replace(w,"").replace(k,"").replace(j,"").split(x)}function r(e){return"'"+e.replace(/('|\\)/g,"\\$1").replace(/\r/g,"\\r").replace(/\n/g,"\\n")+"'"}function n(n,t){function a(e){return p+=e.split(/\n/).length-1,s&&(e=e.replace(/\s+/g," ").replace(/<!--[\w\W]*?-->/g,"")),e&&(e=m[1]+r(e)+m[2]+"\n"),e}function i(r){var n=p;if(u?r=u(r,t):c&&(r=r.replace(/\n/g,function(){return p++,"$line="+p+";"})),0===r.indexOf("=")){var a=f&&!/^=[=#]/.test(r);if(r=r.replace(/^=[=#]?|[\s;]*$/g,""),a){var i=r.replace(/\s*\([^\)]+\)/,"");$[i]||/^(include|print)$/.test(i)||(r="$escape("+r+")")}else r="$string("+r+")";r=m[1]+r+m[2]}return c&&(r="$line="+n+";"+r),v(e(r),function(e){if(e&&!d[e]){var r;r="print"===e?b:"include"===e?w:$[e]?"$utils."+e:g[e]?"$helpers."+e:"$data."+e,k+=e+"="+r+",",d[e]=!0}}),r+"\n"}var c=t.debug,o=t.openTag,l=t.closeTag,u=t.parser,s=t.compress,f=t.escape,p=1,d={$data:1,$filename:1,$utils:1,$helpers:1,$out:1,$line:1},h="".trim,m=h?["$out='';","$out+=",";","$out"]:["$out=[];","$out.push(",");","$out.join('')"],y=h?"$out+=text;return $out;":"$out.push(text);",b="function(){var text=''.concat.apply('',arguments);"+y+"}",w="function(filename,data){data=data||$data;var text=$utils.$include(filename,data,$filename);"+y+"}",k="'use strict';var $utils=this,$helpers=$utils.$helpers,"+(c?"$line=0,":""),j=m[0],x="return new String("+m[3]+");";v(n.split(o),function(e){e=e.split(l);var r=e[0],n=e[1];1===e.length?j+=a(r):(j+=i(r),n&&(j+=a(n)))});var T=k+j+x;c&&(T="try{"+T+"}catch(e){throw {filename:$filename,name:'Render Error',message:e.message,line:$line,source:"+r(n)+".split(/\\n/)[$line-1].replace(/^\\s+/,'')};}");try{var E=new Function("$data","$filename",T);return E.prototype=$,E}catch(S){throw S.temp="function anonymous($data,$filename) {"+T+"}",S}}var t=function(e,r){return"string"==typeof r?h(r,{filename:e}):c(e,r)};t.version="3.0.0",t.config=function(e,r){a[e]=r};var a=t.defaults={openTag:"<%",closeTag:"%>",escape:!0,cache:!0,compress:!1,parser:null},i=t.cache={};t.render=function(e,r){return h(e,r)};var c=t.renderFile=function(e,r){var n=t.get(e)||d({filename:e,name:"Render Error",message:"Template not found"});return r?n(r):n};t.get=function(e){var r;if(i[e])r=i[e];else if("object"==typeof document){var n=document.getElementById(e);if(n){var t=(n.value||n.innerHTML).replace(/^\s*|\s*$/g,"");r=h(t,{filename:e})}}return r};var o=function(e,r){return"string"!=typeof e&&(r=typeof e,"number"===r?e+="":e="function"===r?o(e.call(e)):""),e},l={"<":"&#60;",">":"&#62;",'"':"&#34;","'":"&#39;","&":"&#38;"},u=function(e){return l[e]},s=function(e){return o(e).replace(/&(?![\w#]+;)|[<>"']/g,u)},f=Array.isArray||function(e){return"[object Array]"==={}.toString.call(e)},p=function(e,r){var n,t;if(f(e))for(n=0,t=e.length;n<t;n++)r.call(e,e[n],n,e);else for(n in e)r.call(e,e[n],n)},$=t.utils={$helpers:{},$include:c,$string:o,$escape:s,$each:p};t.helper=function(e,r){g[e]=r};var g=t.helpers=$.$helpers;t.onerror=function(e){var r="Template Error\n\n";for(var n in e)r+="<"+n+">\n"+e[n]+"\n\n";"object"==typeof console&&console.error(r)};var d=function(e){return t.onerror(e),function(){return"{Template Error}"}},h=t.compile=function(e,r){function t(n){try{return new l(n,o)+""}catch(t){return r.debug?d(t)():(r.debug=!0,h(e,r)(n))}}r=r||{};for(var c in a)void 0===r[c]&&(r[c]=a[c]);var o=r.filename;try{var l=n(e,r)}catch(u){return u.filename=o||"anonymous",u.name="Syntax Error",d(u)}return t.prototype=l.prototype,t.toString=function(){return l.toString()},o&&r.cache&&(i[o]=t),t},v=$.$each,m="break,case,catch,continue,debugger,default,delete,do,else,false,finally,for,function,if,in,instanceof,new,null,return,switch,this,throw,true,try,typeof,var,void,while,with,abstract,boolean,byte,char,class,const,double,enum,export,extends,final,float,goto,implements,import,int,interface,long,native,package,private,protected,public,short,static,super,synchronized,throws,transient,volatile,arguments,let,yield,undefined",y=/\/\*[\w\W]*?\*\/|\/\/[^\n]*\n|\/\/[^\n]*$|"(?:[^"\\]|\\[\w\W])*"|'(?:[^'\\]|\\[\w\W])*'|\s*\.\s*[$\w\.]+/g,b=/[^\w$]+/g,w=new RegExp(["\\b"+m.replace(/,/g,"\\b|\\b")+"\\b"].join("|"),"g"),k=/^\d[^,]*|,\d[^,]*/g,j=/^,+|,+$/g,x=/^$|,+/;a.openTag="{{",a.closeTag="}}";var T=function(e,r){var n=r.split(":"),t=n.shift(),a=n.join(":")||"";return a&&(a=", "+a),"$helpers."+t+"("+e+a+")"};return a.parser=function(e,r){var e=e,n="";e.match(/('.*?')|(".*?")/)&&(n=e.match(/('.*?')|(".*?")/)[0],e=e.replace(/('.*?')|(".*?")/,"_defStr_")),e=e.replace(/\s+/g," "),e=e.replace(/^\s|\s$/g,"");var a=e.split(" "),i=a.shift(),c=a.join(" ");switch(i){case"from":var o=a[0],l=a[2],i=a[4];e=o-l>0?"for (var "+i+" = "+o+"; "+i+" >= "+l+"; "+i+"--) {":"for (var "+i+" = "+o+"; "+i+" <= "+l+"; "+i+"++) {";break;case"/from":e="}";break;case"if":e="if("+c+"){";break;case"else":a="if"===a.shift()?" if("+a.join(" ")+")":"",e="}else"+a+"{";break;case"/if":e="}";break;case"each":var u=a[0]||"$data",s=a[1]||"as",f=a[2]||"$value",p=a[3]||"$index",$=f+","+p;"as"!==s&&(u="[]"),e="$each(function(){ try { return "+u+"; } catch(e) { return {}; } }(), function("+$+"){";break;case"/each":e="});";break;case"echo":e="print("+c+");";break;case"print":case"include":e=i+"("+a.join(",")+");";break;case"jscode":e="try { "+c+"; } catch(err) {  }";break;default:if("default"==a[0]||"or"==a[0]){e=e.replace(/\sdefault\s/g," or ");var g=e.split(/\s\or\s/i);if(g.length){e="=function() {";for(var d=0;d<g.length;d++){var $=g[d];"_defStr_"==$&&($=n),e+="try { if(typeof("+$+')!=="undefined" && '+$+"!==null) return "+$+"; } catch(err) {  };"}e+='return "";}'}else e='=function() { return ""; }';break}if(/^\s*\|\s*[\w\$]/.test(c)){var h=!0;0===e.indexOf("#")&&(e=e.substr(1),h=!1);for(var d=0,v=e.split("|"),m=v.length,y=v[d++];d<m;d++)y=T(y,v[d]);e=(h?"=":"=#")+y}else e=t.helpers[i]?"=#"+i+"("+a.join(",")+");":"=function() { try { return "+e+'; } catch(err) { return ""; } }'}return e},t});define("module/base",[],function(){window._getQueryString=function(a,n){var n=n||window.location.search;if(!a){var r=n.substring(1,n.length).split(/[&=]/),e={};return $.each(r,function(a,n){a%2===0&&(e[n]=r[a+1])}),e}var t=new RegExp("(^|&)"+a+"=([^&]*)(&|$)"),o=n.substr(1).match(t);return null!=o?unescape(o[2]):null},window._getWallParam=function(a){var n="",r=$('.param_container .ajax_param[param-name|="'+a+'"]');return r.length>0&&(n=r.val()),n},window._setWallParam=function(a,n){var r=$('.ajax_param[param-name|="'+a+'"]');r.length>0?r.val(n):$(".param_container").append('<input type="hidden" class="ajax_param" param-name="'+a+'" value="'+n+'" />')},window._getWallAllParams=function(){var a={},n=$(".param_container").find(".ajax_param");return n.each(function(){var n=$(this);n.attr("param-name")&&(a[n.attr("param-name")]=n.val())}),a},window._setWallAllParams=function(a){$.map(a,function(a,n){_setWallParam(n,a)})},window._getCookie=function(a){var n,r=new RegExp("(^| )"+a+"=([^;]*)(;|$)");return(n=document.cookie.match(r))?unescape(n[2]):null},window._isEmptyObject=function(a){for(var n in a)return!1;return!0},window._getValueInObj=function(a,n){var r=$.map([].concat(n),function(n){var r=a,e=[];$.map(n.split(/\.|\[|\]|'|"/),function(a){""!==a&&e.push(a)});try{$.map(e,function(a){r=r[a]})}catch(t){window.console&&console.error&&console.error(t)}return r});return $.isArray(n)?r:r[0]},window._scrollTop=function(a){$(window).scrollTop(a)}}),require(["module/base"],function(){});define("module/temp",function(){function a(a,e){return a+(e||"#common_goods_wall")}function e(a){return null===a||"undefined"==typeof a?"":a}var t={ajaxParams:function(a,e){return'<input type="hidden" class="ajax_param" param-name="'+a+'" value="'+e+'" autocomplete="off">'},nav:{container:function(a,e){},sort:function(a,e){},definedPrice:function(a,e){},price:function(a,e){},tags:function(a,e){},doubleEleven:function(a,e){}},goods:{getGoodsHtml:function(a,e,t){},getWedgeImgHtml:function(a,e){},noGoods:function(a,e){}},pageTags:{dom:function(a,e){}}};t.nav.container=function(e){var t=e.result.wall,n=t.pager.url;if(n){var r=n.match("\\?[^/]*$","ig")?n.match("\\?[^/]*$","ig")[0].substr(1):"",s=n.replace(self.urlParams,""),o=new RegExp("#[\\w]+","ig"),l=i(o,r);""!==l&&"&"!==l.charAt(0)&&(l="&"+l),s=i(o,s);var c=a(s+l).replace("_page_","1"),d=e.result.param?e.result.param.ptpPartC:null;return['<form data-ptp-customc="'+d+'_tagList" action="'+c+'" class="price_custom" method="GET" >','<div class="sp_filter clearfix sort_nav">','<div class="nav_left fl clearfix">',"</div>",'<div class="nav_right fl clearfix">',"</div>","</div>","</form> "].join("")}},t.nav.sort=function(e,t){var i=e.result.sortList,n="";return $.each(i,function(e,i){n+='<a data-ptp-customc="'+t+'_sortList" sort-key="'+i.sortKey+'" class="sort fl" href="'+a(i.url)+'" data-mark="sort" tab-index="'+e+'">'+i.title+"</a>"}),""!==n?'<div class="sort_container fl">'+n+"</div>":""},t.nav.definedPrice=function(){return['<div class="price fl">','<div class="txt">','<span class="rmb">￥</span>','<input type="text" class="from" value="" name="minPrice">',"</div>",'<span class="divid">-</span>','<div class="txt">','<span class="rmb">￥</span>','<input type="text" class="to" value="" name="maxPrice">',"</div>",'<a class="sbt definedprice" href="#" data-mark="definedPrice">确定</a>',"</div>"].join("")},t.nav.price=function(e,i,n){var r=(t.nav,e.result.priceList),s="";return $.map(r,function(e,t){var r=n.replace("_minPrice_",e.min).replace("_maxPrice_",e.max);s+=['<li class="price_citem">',"<a data-ptp-customc='"+i+"_priceList' href='"+a(r)+"' data-mark='price'>"+e.min+"-"+e.max+"</a>","</li>"].join("")}),""!==s?'<ul class="price_choice fl">'+s+"</ul>":""};var i=function(a,e){var t=e.match(a);return t&&$.each(t,function(a){e=e.replace(t[a],"")}),e};t.nav.tags=function(a,i){var n=t.nav;n.urlParams=location.search;var r=a.result.tagList,s="",o=e(_getWallParam("tag"));return tagsStr=""===o?[]:o.split(","),$.map(r,function(a,e){var t=$.inArray(a.postkey,tagsStr)>=0?"checked":"";s+=['<a class="mgl" data-mark="tags" href="">',"<input "+t+' type="checkbox" value="'+a.postkey+'">','<label for="tag'+a.postkey+'">'+a.name+"</label>","</a>"].join("")}),['<div class="nav_inner fl">','<span class="nav_more"></span>','<div class="filters">','<input type="hidden" class="tagStr" value="" name="tag" data-ptp-customc="'+i+'_tagList">',s,"</div>","</div>"].join("")},t.nav.doubleEleven=function(a,e){var i=t.nav;i.urlParams=location.search;var n="",r=a.result.doubleEleven,s=r.itemMarks==a.result.param.itemMarks?'checked="checked"':"";return n+=['<div class="nav_eleven_box fl" id="nav_eleven_box">','<input type="checkbox" '+s+' mark-id="'+r.itemMarks+'" id="nav_eleven_check" class="nav_eleven_check fl">','<label for="nav_eleven_check" class="nav_eleven_lab fl">','<img class="nav_eleven_img" src="'+r.image+'">',"</label>",'<a class="nav_eleven_link" href="javascript:;" tpl-url="'+r.url+'"></a>',"</div>"].join("")},t.goods={isOnlyNormalGoods:!1,getItemHtml:function(a,e,t){if(a.type){if(this.isOnlyNormalGoods&&2!=a.type)return!1;switch(a.type){case 1:return this.getWedgeImgHtml(a,t);case 2:return this.getGoodsHtml(a,e,t);default:return!1}}return this.getGoodsHtml(a,e,t)},getGoodsHtml:function(a,e,t,i){var n='suffix-model="add_code" suffix-code="240x360.v1cAC"',r=_getWallParam("ratio");r&&(n='suffix-model="goods_dpr" suffix-ratio="'+r+'"');var s="";if($.each(a.leftbottom_taglist||[],function(a,e){s+='<img src="'+e+'" alt="" class="tagImage" style=""/>'}),1===a.activity)var o='<img src="'+a.activity_img+'" style="">';else if(a.lefttop_taglist){var o="",l=.5;$.each(a.lefttop_taglist,function(a,e){o+='<img src="'+e.img+'" style="width:'+Math.round(e.w*l)+'px;height:auto;">'})}var c="";a.hasSimilarity&&(c=['<a class="likeLink" href="'+a.similarityUrl+'" target="_blank">找相似&nbsp;','<img src="http://s16.mogucdn.com/p1/151209/upload_ie3wmyrvhftdmyzvguzdambqgayde_7x13.png">',"</a>"].join("")),a.link.indexOf("acm")<0&&(a.link=a.link+(a.link.indexOf("?")>0?"&":"?")+"acm="+a.acm+"-"+i);var d=a&&(a.index||0===a.index)?a.index:"";return['<div class="iwf goods_item" data-tradeitemid="'+a.tradeItemId+'" goods-index="'+d+'" >',c,'<a rel="nofollow" href="'+a.link+'" class="img J_dynamic_imagebox loading_bg_120" target="_blank" '+n+'  img-src="'+a.img+'" need-remove="no" data-ptp-customc="'+t+e+'" >',o?'<span class="icon_event_lefttop iwf_icon_taglist">'+o+"</span>":"","</a>",'<a rel="nofollow" target="_blank" href="'+a.link+'" class="goods_info_container">','<p class="title fl" style="',""===s?"height:44px;":"height:22px; white-space: nowrap; text-overflow: ellipsis;",'">'+a.title+"</p>",""!==s?'<p class="icon_event_leftBottom">'+s+"</p>":"",'<div class="goods_info fl">','<b class="price_info yahei">¥'+a.price+"</b>",'<span class="fav_num fr">'+a.cfav+'<img src="http://s18.mogucdn.com/p2/160908/upload_27g4f1ch6akie83hacb676j622b9l_32x30.png" alt=""></span>',"</div>","</a>","</div>"].join("")},getWedgeImgHtml:function(a,e){return['<div class="iwf">','<a rel="nofollow" href="'+a.link+'" class="img J_dynamic_imagebox" target="_blank" suffix-model="orig_narrow" ','img-src="'+a.image+'" need-remove="no" data-ptp-customc="'+e+'_wall_mait_source" style="width:100% !important;height:100% !important;">',"</a>","</div>"].join("")},noGoods:function(){return['<div class="selection_box search_noresult">',"<p>筛选条件太多啦，未找到相关结果</p>",'<a href="javascript:;" onclick="if(window.history){history.back();}else{self.location=document.referrer;}" class="backlast">点击返回上一步</a>',"</div>"].join("")},noMore:function(){return'<div id="like_list_nomore"><div>没有更多啦~</div></div>'},searchNoGoods:function(a){return['<div class="selection_box search_noresult">','<p class="search_nr_img"><img src="http://s18.mogucdn.com/p1/150917/upload_ieztizdegrsdkmlcgmzdambqgyyde_100x100.png"></p>','<p class="search_nr_desc">没有找到与“<span>'+a+"</span>”相关的商品</p>","</div>"].join("")}},t.pageTags.dom=function(a,e){var i=t.pageTags,r=n(e),s=a.result;i.nowPageNo=parseInt(_getWallParam("page"))||parseInt(_getQueryString("page"));var o=parseInt(s.wall.pager.total),l=parseInt(s.wall.pager.perPage);if(i.nowPageNo&&o&&l){var c=Math.ceil(o/l);c=c>100?100:c;var d,p,m="";if(i.nowPageNo>1&&(m+=r(i.nowPageNo-1,"&lt;")),7>c){d=1,p=c;for(var u=d;p>=u;u++)m+=r(u,u)}else{m+=r(1,1),i.nowPageNo>=1&&i.nowPageNo<=3?(d=2,p=5):i.nowPageNo>=c-2&&i.nowPageNo<=c?(d=c-4,p=c-1):(d=i.nowPageNo-2,p=i.nowPageNo+2),d>2&&(m+="<i>...</i>");for(var u=d;p>=u;u++)m+=r(u,u);c-1>p&&(m+="<i>...</i>"),m+=r(c,c)}return i.nowPageNo<c&&(m+=r(i.nowPageNo+1,"下一页&gt;")),'<div class="pagination pd_tb" style="display:none;">'+m+"</div>"}};var n=function(a){var e=t.pageTags;return function(t,i){var n=a.replace(/(_page_)/gi,t),r=t===e.nowPageNo?"c":"";return"<a href='"+n+"' rel='nofollow' class="+r+">"+i+"</a>"}};return MoGu.wall=MoGu.wall||{},MoGu.wall.temp=MoGu.wall.temp||t,t});require(["module/base"],function(){function o(o){o=o||32;for(var t="abcdefhijkmnprstwxyz2345678",a=t.length,n="",e=0;o>e;e++)n+=t.charAt(Math.floor(Math.random()*a));return n}var t=100,a=Date.now||function(){return(new Date).getTime()},n={opts:{objsClassName:"J_mod_hidebox",showCallback:null,showDistance:800},randomIdName:"",randomIdNum:0,modInner:{},init:function(){var n=this,e=$("."+n.opts.objsClassName);e.addClass("J_mod_show"),n.randomIdName="J_Dynmod_"+o(8)+"_";var d=a();$(window).scroll(function(o){var e=a();e-d>t&&(d=e,n.checkMod())})},checkMod:function(o){for(var t=o?o:$("body"),a=this,n=document.documentElement.scrollTop||document.body.scrollTop,e=t.find("."+a.opts.objsClassName),d=n-a.opts.showDistance,s=n+(document.documentElement.clientHeight||document.body.clientHeight)+a.opts.showDistance,m=e.length,i=0;m>i;i++){var c=e.eq(i),r=c.offset().top,h=r+c.height(),l=h>=d&&s>=r,u=""==!c.html();u&&c.addClass("J_mod_show"),!l&&u&&a.resetMod(c,"hide"),l&&!u&&a.resetMod(c,"show")}a.opts.showCallback&&a.opts.showCallback(),setTimeout(function(){MoGu.dynamicImage&&MoGu.dynamicImage.checkImages()},66)},resetMod:function(o,t){var a=this,n=a.modInner;o.attr("id")&&""!=o.attr("id")||(o.attr("id",a.randomIdName+a.randomIdNum),a.randomIdNum++),"hide"==t?(o.find(".J_loading").removeClass("J_loading"),o.find(".J_dynamic_img").attr("style",""),n[o.attr("id")]=o.html(),o.css({height:o.height()}),o.removeClass("J_mod_show"),o.html("")):(o.addClass("J_mod_show"),o.html(n[o.attr("id")]),o.css({height:"auto"}))},showCallback:function(){}};window.MoGu=window.MoGu||{},MoGu.dynamicDom||(n.init(),MoGu.dynamicDom=n),MoGu.dynamicDom=MoGu.dynamicDom||n});define("module/WallExposeLog",function(){var t=Date.now||function(){return(new Date).getTime()},e=200,i={},o=function(t){var e="",i=$('#wall_goods_box .ajax_param[param-name|="'+t+'"]');return i&&(e=i.val()),e};window.MoGu=window.MoGu||{};var a=function(t){var e=window.location.href,i=e.indexOf("isLog=true");i>-1&&window.console&&console.log&&console.log(t)},r=function(){var t=MoGu.mgVersion||MoGu.fn&&MoGu.fn.getAppVersion&&MoGu.fn.getAppVersion()||0;this.ver=t>0?t:"",this._mgjuuid=this.getCookie("__mgjuuid"),this.acms=[],this.cpcs=[],this.iids=[],this.indexs=[],this.cparams=[],this.ptpPartC="",this.eventid="70001",this.cpceventid="70004",this.fcid="",this.tabClickId="000000001",this.priceClickId="00000017",this.properties={tableName:"pop",fcid:"",q:""},this.defaultPos=0,this._timerAcm=null,this._timerCpc=null,this.firstExpose=!1,this.listenOpen=!0,this.init()};return r.prototype.init=function(){var i=this,o=t();$(window).scroll(function(a){if(i.listenOpen){var r=t();r-o>e&&(o=r,i.checkDomPos(),i.pushAcmLog(),i.pushCpcLog())}})},r.prototype.getBaseParams=function(t){var e=this;e.ptpPartC=t.param.ptpPartC,e.eventid=t.param.eventId||"70001",e.cpceventid=t.param.cpcEventId||"70004",e.fcid=t.param.fcid||"",e.properties={tableName:t.param.sort||"",fcid:t.param.fcid||"",q:o("q")||""}},r.prototype.resetBaseParams=function(){var t=this;t.ptpPartC="",t.eventid="",t.fcid="",t.acms=[],t.cpcs=[],t.iids=[],t.indexs=[],t.cparams=[],t.defaultPos=0,clearTimeout(t._timerAcm),clearTimeout(t._timerCpc),t.firstExpose=!1},r.prototype.getCookie=MoGu.fn&&MoGu.fn.getCookie||MoGu.util&&MoGu.util.getCookie||function(t){var e,i=new RegExp("(^| )"+t+"=([^;]*)(;|$)");return(e=document.cookie.match(i))?unescape(e[2]):null},r.prototype.collectListData=function(t){for(var e=0;e<t.length;e++){var o=t[e];o.isExposed=!1,i[o.tradeItemId]=t[e],(o.index||0===o.index)&&(i[o.tradeItemId+"_"+o.index]=t[e])}},r.prototype.checkDomPos=function(){var t=this,e=$(".J_scroll_wallbox").find(".goods_item"),o=e.length;if(o)for(var a=document.documentElement.scrollTop||document.body.scrollTop,r=$(window).height(),c=a+r,p=0;o>p;p++){var s=e.eq(p);if(!s.attr("is-exposed")){var n=s.offset().top,d=c>=n;if(d){s.attr("is-exposed","true");var u=s.attr("data-tradeitemid");if(!u)continue;var m=s.attr("goods-index"),l={};m?l=i[u+"_"+m]:(l=i[u],l.index=t.defaultPos,t.defaultPos++),l&&(t.collectItemData(l,l.index),l.isExposed=!0)}}}},r.prototype.collectItemData=function(t,e){var i=this;t.tradeItemId&&(i.acms.push(t.acm+"-"+e),i.iids.push(t.tradeItemId),i.indexs.push(e),t.cparam&&(i.cpcs.push(t.tradeItemId),i.cparams.push(t.cparam)))},r.prototype.pushAcmLog=function(){var t=this;clearTimeout(t._timerAcm),t._timerAcm=setTimeout(function(){var e={ver:t.ver,ptpPartC:t.ptpPartC,eventid:t.eventid,fcid:t.fcid,_mgjuuid:t._mgjuuid,acms:t.acms,cpcs:t.cpcs,iids:t.iids,indexs:t.indexs,properties:t.properties};t.iids.length?(a("触发图墙曝光打点"),a(e),t.pushLog(e,t.eventid)):a("没有图墙数据，无法触发商品打点"),t.acms=[],t.cpcs=[],t.iids=[],t.indexs=[]},400)},r.prototype.pushCpcLog=function(){var t=this;clearTimeout(t._timerCpc),t._timerCpc=setTimeout(function(){var e={ver:t.ver,ptpPartC:t.ptpPartC,eventid:t.cpceventid,fcid:t.fcid,_mgjuuid:t._mgjuuid,cparams:t.cparams};t.cparams.length?(a("触发cpc商品曝光打点."),a(e),t.pushLog(e,t.cpceventid)):a("没有cpc商品数据，无法触发cpc曝光打点"),t.cparams=[]},400)},r.prototype.pushLog=function(t,e){setTimeout(function(){if(window.logger&&logger.log)try{logger.log(e,t)}catch(i){a(i)}else if(window.detePtp&&detePtp.logFromtSend){var o=window.detePtp._collectParams||{};t.ptp_cnt=o.ptp_cnt||"",t.ptp_url=o.ptp_url||"",t.ptp_ref=o.ptp_ref||"";try{detePtp.logFromtSend("e",e,t)}catch(i){a(i)}}},1e3)},r.prototype.pushTabClickLog=function(t){var e=this,i={tableName:t.attr("tab-name")||t.text()||"",fcid:t.attr("tab-fcid")||o("fcid")||"",q_:o("q")||"",index:parseInt(t.attr("tab-index"),10)>=0?t.attr("tab-index"):"",labelName:t.attr("tab-label")||""};a("触发tab点击E事件"),a(i),e.pushLog(i,e.tabClickId)},r.prototype.pushPriceClickLog=function(t){var e=this,i="",r=o("minPrice"),c=o("maxPrice");""==r&&""==c||(i=r+"_"+c);var p={tableName:"筛选",name:o("q")||o("fcid")||"",priceType:i,defined:"0",serviceType:"",classfyTag:""};a("触发价格筛选按钮点击E事件"),a(p),e.pushLog(p,e.priceClickId)},r.prototype.scrollAjaxPushLog=function(t){var e=this;e.listenOpen&&(e.getBaseParams(t),e.collectListData(t.wall.docs),e.firstExpose||setTimeout(function(){e.firstExpose=!0,e.checkDomPos(),e.pushAcmLog(),e.pushCpcLog()},0))},MoGu.WallExposeLog=r,r}),require(["module/WallExposeLog"],function(t){});define("module/AjaxWallLoader",["module/base","module/temp"],function(a,o){window.MoGu=window.MoGu||{};var l=navigator.userAgent,t=l.indexOf("MSIE")>0,i=Date.now||function(){return(new Date).getTime()},e=t?200:50,n=function(a){var o={wallobj:$("#wall_goods_box"),bottomHeight:2e3,ajaxSuccBack:null,getItemHtmlFun:null,itemPackageNumMax:40};this.options=$.extend(o,a)||{},this.isLoading=!1,this.ajaxData={},this.isAjaxEnd=!1,this.container=null,this.emptyClick=0,this.itemPackageHtml="",this.itemPackageNum=0,this.itemIndex=0};return n.prototype={initLoaderTimer:function(){var a=this;a.container=a.options.wallobj.find(".J_scroll_wallbox"),a.isAllowAjax();var o=i();$(window).scroll(function(l){var t=i();t-o>e&&(o=t,a.isAllowAjax())})},isAllowAjax:function(){var a=this;if(!a.isAjaxEnd&&!a.isLoading){var o=document.documentElement.scrollTop||window.pageYOffset||document.body.scrollTop;o+$(window).height()>$(document).height()-a.options.bottomHeight&&a.getGoodsAjax()}},getGoodsAjax:function(){var a=this;a.isLoading=!0;var o=a.container,l=a.options.wallobj.find(".ajax_url").val(),t=(a.options.wallobj.find(".ajax_jsonp").val()||"",a.options.wallobj.find(".ajax_jsonpCallback").val()||"",a.options.wallobj.find(".ajax_param")),i={},e=[];t.each(function(a){var o=$(this);i[o.attr("param-name")]=o.val(),e.push(o.val())});var n=e.join("_");if(a.ajaxData[n]){a.isLoading=!1,$(".wall_loading").remove();var s=a.ajaxData[n];s.isOldAjax=!0,a.setBackParams(s),a.options.ajaxSuccBack&&a.options.ajaxSuccBack(s)}else 0==$(".wall_loading ,#loading_wrap ,#loading_wrap_v2").length&&o.append('<div class="wall_loading"><span>正在加载中。。。。</span></div>'),$.ajax({url:l,type:"get",dataType:"jsonp",data:i,success:function(o){if(null==o);else{var l,t,e="";if(e=o.success,o.returnCode?l=o.returnCode:o.status&&(l=o.status.code),t=o.result||o.data,(1001==l||"SUCCESS"==l||e)&&$.isPlainObject(t)){if(t.wallobj=a.options.wallobj,t.dataKey=n,t.params=i,"mait"==_getWallParam("cKey")){console.log(t);var s=(parseInt(t.nextPage)||2)-1;t.param={},t.param.page=s,t.wall={},t.wall.isEnd=t.isEnd,t.wall.docs=t.list}if(t.wall&&t.wall.docs)for(var c=t.wall.docs,d=0;d<c.length;d++){var r=c[d];r&&(r.index=a.itemIndex,a.itemIndex++)}a.ajaxData[n]=t,$(".wall_loading").remove(),a.isSureBack(i)&&(a.setBackParams(t),a.options.ajaxSuccBack&&a.options.ajaxSuccBack(t))}}},complete:function(){a.isLoading=!1,$(".wall_loading").remove()}})},setBackParams:function(a){a.wall&&a.wall.cpc_offset&&_setWallParam("cpc_offset",a.wall.cpc_offset)},packageItems:function(a){var o=this,l=!1;if(!a||!a.length)return o.emptyClick++,o.emptyClick>5&&(o.scrollEnd(),o.emptyClick=0),!1;o.emptyClick=0;for(var t=0;t<a.length;t++){var i=a[t],e="";e=o.options.getItemHtmlFun&&o.options.getItemHtmlFun(i),e&&(o.itemPackageHtml+=e||"",o.itemPackageNum++),o.itemPackageNum>=o.options.itemPackageNumMax&&(o.pushPackageDom(),l=!0)}l||setTimeout(function(){o.isAllowAjax()},50)},pushPackageDom:function(){var a=this;if(a.itemPackageHtml&&a.itemPackageNum){var o='<div class="goods_list_mod clearfix J_mod_hidebox">'+a.itemPackageHtml+"</div>";a.options.wallobj.find(".J_scroll_wallbox").append(o),a.itemPackageHtml="",a.itemPackageNum=0,a.options.wallobj.find(".J_scroll_wallbox").css("height","auto"),setTimeout(function(){MoGu.dynamicImage&&MoGu.dynamicImage.checkImages()},80)}},addNoGoodsTip:function(){var a=this,l=o.goods.noGoods&&o.goods.noGoods()||'<div class="no_goods_img"></div><p class="no_goods_tip">没有相关的商品结果哦~~</p>';a.options.wallobj.find(".J_scroll_wallbox").append(l)},addNoMoreTip:function(){var a=this,l=o.goods.noMore&&o.goods.noMore()||'<div id="like_list_nomore"><div>没有更多啦~</div></div>';a.options.wallobj.find(".J_scroll_wallbox").append(l)},scrollEnd:function(){var a=this;a.isAjaxEnd=!0,a.pushPackageDom()},isSureBack:function(a){var o=_getWallAllParams();return $.each(a,function(a,l){return o[a]!=l?!1:void 0}),!0},scrollReLoadAjax:function(a){var o=this;if(a&&a>0){var l=document.documentElement.scrollTop||document.body.scrollTop;l>a&&_scrollTop(a)}_setWallParam("page",1),o.reLoadAjax()},reLoadAjax:function(){var a=this,o=a.options.wallobj.find(".J_scroll_wallbox");o.css("height",$(window).height()),o.html(""),a.itemPackageHtml="",a.itemPackageNum=0,a.isAjaxEnd=!1,a.isLoading=!1,a.emptyClick=0,_setWallParam("cpc_offset",0),MoGu.wall&&MoGu.wall.wallExposeLog&&MoGu.wall.wallExposeLog.resetBaseParams&&MoGu.wall.wallExposeLog.resetBaseParams(),a.itemIndex=0,a.getGoodsAjax()},init:function(){this.initLoaderTimer()}},MoGu.AjaxWallLoader=n,n});define("module/wall-mod",["module/base","module/temp","module/AjaxWallLoader","module/WallExposeLog"],function(a,l,p,o){function t(a){var p=r.ptpCVal,o=r.ptpWallDoc;return a.cparam&&(o=r.ptpWallCpc),l.goods.getItemHtml(a,o,p)}function e(a){if(null!=a.wallobj){m.storeCommonVarFromInitData(a),c&&c.scrollAjaxPushLog(a);var l=a.wall.docs;n.packageItems(l),a.wall.isEnd&&(n.scrollEnd(),"1"==a.param.page&&a.wall&&a.wall.docs&&0==a.wall.docs.length&&n.addNoGoodsTip()),_setWallParam("page",parseInt(a.param.page)+1)}}MoGu.wall=MoGu.wall||{};var m=MoGu.wall,r={},n=new p({ajaxSuccBack:e,getItemHtmlFun:t,itemPackageNumMax:40}),c=new o;return m.temp=l,m.Common=r,m.ajaxWallLoader=n,m.wallExposeLog=c,m.storeCommonVarFromInitData=function(a){r=$.extend(r,{ptpWallDoc:a.param&&a.param.ptpWallDoc?a.param.ptpWallDoc:"",ptpWallCpc:a.param&&a.param.ptpWallCpc?a.param.ptpWallCpc:"",ptpCVal:a.param&&a.param.ptpPartC?a.param.ptpPartC:""})},m.init=function(){n.init()},m});