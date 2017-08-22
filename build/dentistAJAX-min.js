"use strict";define(["./axios","./TweenMax"],function(e,t){return function(t,n){function o(t){e.interceptors.request.use(function(e){return TweenLite.to(a,.5,{opacity:1,ease:Power2.easeOut,zIndex:3e3}),TweenLite.to(i,.5,{opacity:1,display:"block",ease:Power2.easeOut}),e},function(e){return Promise.reject(e)}),e.interceptors.response.use(function(e){return e},function(e){return Promise.reject(e)}),e.get(n+"/wp-json/wp/v2/dentist/"+t).then(function(e){TweenLite.to(i,.1,{opacity:0,display:"none"}),TweenLite.to(a,.2,{opacity:1,ease:Power2.easeOut}),c=e.data.content.rendered,s=document.querySelector(".dentists.ajaxcontent .description"),s.innerHTML="",s.innerHTML=c,u=e.data.title.rendered,d=document.querySelector(".dentists.ajaxcontent .dentist-name"),d.innerHTML="",d.innerHTML=u,TweenLite.fromTo(d,.5,{opacity:0,y:"20rem"},{opacity:1,delay:.5,y:"0",ease:CustomEase.create("wavyline","M0,0 C0.25,0.46 0.45,0.94 1,1")}),TweenLite.fromTo(s,.5,{opacity:0,y:"40rem"},{opacity:1,y:"0",delay:1,ease:CustomEase.create("wavyline","M0,0 C0.25,0.46 0.45,0.94 1,1")}),TweenLite.fromTo(r,.5,{opacity:0,y:"40rem"},{opacity:1,y:"0",delay:1.5,ease:CustomEase.create("wavyline","M0,0 C0.25,0.46 0.45,0.94 1,1")})}).catch(function(e){console.log(e)}),r.addEventListener("click",function(){TweenLite.to(a,.1,{opacity:0,ease:Power4.easeIn,zIndex:-1}),TweenLite.to(d,.1,{opacity:0,ease:Power4.easeIn}),TweenLite.to(s,.1,{opacity:0,ease:Power4.easeIn}),TweenLite.to(r,.1,{opacity:0,ease:Power4.easeIn})})}for(var a=document.querySelector(".dentists.ajaxcontent"),i=document.querySelector(".dentists.ajaxcontent .ajaxloader"),r=document.querySelector(".dentists.ajaxcontent .ajax-close-button"),c=null,s=null,u=null,d=null,y=0;y<t.length;y++)t[y].addEventListener("click",function(){o(this.getAttribute("data-id"))})}});