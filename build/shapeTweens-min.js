"use strict";define(["./TweenMax","./DrawSVGPlugin","./CustomEase"],function(e,a,n){return function(e){(new TimelineMax).staggerFromTo(e,1,{drawSVG:"0%"},{drawSVG:"100%",opacity:1,delay:1,ease:n.create("wavyline","M0,0 C0.25,0.46 0.45,0.94 1,1")},1)}});