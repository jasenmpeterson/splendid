define(["./axios","./TweenMax"],function(e,t){return function(t,n){function r(t){e.interceptors.request.use(function(e){return TweenLite.to(o,.5,{opacity:1,ease:Power2.easeOut,zIndex:30}),TweenLite.to(c,.5,{opacity:1,ease:Power2.easeOut}),e},function(e){return Promise.reject(e)}),e.interceptors.response.use(function(e){return e},function(e){return Promise.reject(e)}),e.get(n+"/wp-json/wp/v2/dental_services/"+t).then(function(e){TweenLite.to(c,.5,{opacity:0,ease:Power2.easeIn}),TweenLite.to(o,.2,{opacity:0,ease:Power2.easeOut,zIndex:-1}),console.log(e);const t=e.data.content.rendered;document.querySelector(".services.FlexContainer .content .service").innerHTML="",document.querySelector(".services.FlexContainer .content .service").innerHTML=t;const n=e.data.title.rendered;document.querySelector(".services.FlexContainer .content .serviceTitle").innerHTML="",document.querySelector(".services.FlexContainer .content .serviceTitle").innerHTML=n.replace(" ","<br/>")}).catch(function(e){console.log(e)})}const o=document.querySelector(".services.ajaxcontent"),c=document.querySelector(".services.ajaxloader");for(var i=0;i<t.length;i++)t[i].addEventListener("click",function(){r(this.getAttribute("data-id")),document.querySelector(".ajaxbutton.active").classList.remove("active"),this.classList.add("active")})}});