import{e as w,b as p,_}from"./booking.4045b20c.js";import{au as g,U as s,av as f,r as m,p as o,aw as t,aX as A,aY as v,aZ as b,at as L}from"./stepForm.7f17f3bc.js";const P=g({loader:()=>_(()=>import(""+(window.__dynamic_handler__||function(e){return e})("./stepForm.7f17f3bc.js")+"").then(function(e){return e.a_}),(window.__dynamic_preload__ || function(importer) { return importer; })(["assets/stepForm.7f17f3bc.js","assets/stepForm.56735d16.css"]))});typeof window.ameliaShortcodeData=="undefined"&&(window.ameliaShortcodeData=[{counter:null}]);const u=window.wpAmeliaUrls.wpAmeliaPluginURL+"v3/public/";window.__dynamic_handler__=function(e){return u+"assets/"+e};window.__dynamic_preload__=function(e){return e.map(a=>u+a)};window.ameliaShortcodeDataTriggered!==void 0&&window.ameliaShortcodeDataTriggered.forEach(e=>{let a=!1,l=setInterval(function(){let n=document.getElementById(e.trigger);!a&&n!==null&&typeof n!="undefined"&&(a=!0,clearInterval(l),n.onclick=function(){let r=setInterval(function(){let i=document.getElementsByClassName("amelia-skip-load-"+e.counter);if(i.length){clearInterval(r);for(let d=0;d<i.length;d++)i[d].classList.contains("amelia-v2-booking-"+e.counter+"-loaded")||c(e)}},1e3)})},1e3)});window.ameliaShortcodeData.forEach(e=>{c(e)});function c(e){const a=s(window.wpAmeliaSettings);let l=f({setup(){const n=s(window.wpAmeliaUrls),r=s(window.wpAmeliaLabels),i=m(window.localeLanguage[0]);o("settings",t(a)),o("baseUrls",t(n)),o("labels",t(r)),o("localLanguage",t(i)),o("shortcodeData",t(m(e)))}});a.googleTag.id&&l.use(A,{config:{id:window.wpAmeliaSettings.googleTag.id}}),a.facebookPixel.id&&(v(),b(window.wpAmeliaSettings.facebookPixel.id)),l.component("StepFormWrapper",P).use(L({modules:{entities:w,booking:p}})).mount(`#amelia-v2-booking${e.counter!==null?"-"+e.counter:""}`)}window.amelia={load:c};
