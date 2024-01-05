import{n as y,s as l,o as d,q as b,r as k,t as c,u as f,v as N,w as C,x as D,y as g,z as i,D as P,E as _,f as B,G as x,H as O,J as E,K as S,M as T,N as U,O as W,Q as q,R as L,U as Q,V,W as Y,X as $,Y as j,Z as z,_ as I,$ as X,a0 as G,a1 as H,a2 as F,a3 as J,a4 as K,a5 as Z,a6 as tt,a7 as et,a8 as at,a9 as st,aa as nt,ab as rt,ac as dt,ad as lt,ae as it,af as ot,ag as ut}from"./vendor-97200597.js";const v="/",h=y.create({baseURL:v,withCredentials:!0});y.defaults.withCredentials=!0;y.defaults.baseURL=v;class R{getByName(t){return h.get("/api/v1/preferences/"+t)}getByNameNow(t){return h.get("/api/v1/preferences/"+t)}postByName(t,e){return h.post("/api/v1/preferences",{name:t,data:e})}}class A{post(t,e){let s="/api/v1/preferences";return h.post(s,{name:t,data:e})}}function gt(a,t=null){return new R().getByName(a).then(s=>Promise.resolve(p(a,s))).catch(()=>{new A().post(a,t).then(o=>Promise.resolve(p(a,o)))})}function p(a,t){return t.data.data.attributes.data}function w(a,t=null){const e=window.store.get("cacheValid");if(e&&window.hasOwnProperty(a))return Promise.resolve(window[a]);const s=window.store.get(a);return e&&typeof s<"u"?Promise.resolve(s):new R().getByName(a).then(u=>Promise.resolve(m(a,u))).catch(()=>{new A().post(a,t).then(n=>Promise.resolve(m(a,n)))})}function m(a,t){let e=t.data.data.attributes.data;return window.store.set(a,e),e}function ct(a,t){let e,s;switch(a){case"last365":e=l(g(t,365)),s=d(t);break;case"last90":e=l(g(t,90)),s=d(t);break;case"last30":e=l(g(t,30)),s=d(t);break;case"last7":e=l(g(t,7)),s=d(t);break;case"YTD":e=D(t),s=d(t);break;case"QTD":e=b(t),s=d(t);break;case"MTD":e=c(t),s=d(t);break;case"1D":e=l(t),s=d(t);break;case"1W":e=l(N(t,{weekStartsOn:1})),s=d(C(t,{weekStartsOn:1}));break;case"1M":e=l(c(t)),s=d(f(t));break;case"3M":e=l(b(t)),s=d(k(t));break;case"6M":t.getMonth()<=5&&(e=new Date(t),e.setMonth(0),e.setDate(1),e=l(e),s=new Date(t),s.setMonth(5),s.setDate(30),s=d(e)),t.getMonth()>5&&(e=new Date(t),e.setMonth(6),e.setDate(1),e=l(e),s=new Date(t),s.setMonth(11),s.setDate(31),s=d(e));break;case"1Y":e=new Date(t),e.setMonth(0),e.setDate(1),e=l(e),s=new Date(t),s.setMonth(11),s.setDate(31),s=d(s);break}return{start:e,end:s}}i.addPlugin(P);window.bootstrapped=!1;window.store=i;gt("lastActivity").then(a=>{const t=i.get("lastActivity");i.set("cacheValid",t===a),i.set("lastActivity",a),console.log("Server value: "+a),console.log("Local value:  "+t),console.log("Cache valid:  "+(t===a))}).then(()=>{Promise.all([w("viewRange"),w("darkMode"),w("locale"),w("language")]).then(a=>{if(!i.get("start")||!i.get("end")){const e=ct(a[0],new Date);i.set("start",e.start),i.set("end",e.end)}window.__localeId__=a[2],i.set("language",a[3]),i.set("locale",a[3]);const t=new Event("firefly-iii-bootstrapped");document.dispatchEvent(t),window.bootstrapped=!0})});window.axios=y;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";window.Alpine=_;const M={bg:x,cs:O,da:E,de:S,el:T,enGB:U,enUS:W,es:q,ca:L,fi:Q,fr:V,hu:Y,id:$,it:j,ja:z,ko:I,nb:X,nn:G,nl:H,pl:F,ptBR:J,pt:K,ro:Z,ru:tt,sk:et,sl:at,sv:st,tr:nt,uk:rt,vi:dt,zhTW:lt,zhCN:it};function r(a,t="PP"){let e=window.__localeId__.replace("_","");return B(a,t,{locale:M[e]??M[e.slice(0,2)]??M.enUS})}const ht=()=>({range:{start:null,end:null},defaultRange:{start:null,end:null},language:"en_US",init(){this.range={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.defaultRange={start:new Date(window.store.get("start")),end:new Date(window.store.get("end"))},this.language=window.store.get("language"),this.locale=window.store.get("locale"),this.locale=this.locale==="equal"?this.language:this.locale,window.__localeId__=this.language,this.buildDateRange(),window.store.observe("start",a=>{this.range.start=new Date(a)}),window.store.observe("end",a=>{this.range.end=new Date(a),this.buildDateRange()})},buildDateRange(){let a=this.getNextRange(),t=this.getPrevRange(),e=this.lastDays(7),s=this.lastDays(30),o=this.mtd(),u=this.ytd(),n=document.getElementsByClassName("daterange-holder")[0];n.textContent=r(this.range.start)+" - "+r(this.range.end),n.setAttribute("data-start",r(this.range.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.range.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-current")[0],n.textContent=r(this.defaultRange.start)+" - "+r(this.defaultRange.end),n.setAttribute("data-start",r(this.defaultRange.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(this.defaultRange.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-next")[0],n.textContent=r(a.start)+" - "+r(a.end),n.setAttribute("data-start",r(a.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(a.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-prev")[0],n.textContent=r(t.start)+" - "+r(t.end),n.setAttribute("data-start",r(t.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(t.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-7d")[0],n.setAttribute("data-start",r(e.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(e.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-90d")[0],n.setAttribute("data-start",r(s.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(s.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-mtd")[0],n.setAttribute("data-start",r(o.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(o.end,"yyyy-MM-dd")),n=document.getElementsByClassName("daterange-ytd")[0],n.setAttribute("data-start",r(u.start,"yyyy-MM-dd")),n.setAttribute("data-end",r(u.end,"yyyy-MM-dd"))},getNextRange(){let a=c(this.range.start),t=ot(a,1),e=f(t);return{start:t,end:e}},getPrevRange(){let a=c(this.range.start),t=ut(a,1),e=f(t);return{start:t,end:e}},ytd(){let a=new Date;return{start:D(this.range.start),end:a}},mtd(){let a=new Date;return{start:c(this.range.start),end:a}},lastDays(a){let t=new Date;return{start:g(t,a),end:t}},changeDateRange(a){a.preventDefault();let t=a.currentTarget,e=new Date(t.getAttribute("data-start")),s=new Date(t.getAttribute("data-end"));return window.store.set("start",e),window.store.set("end",s),!1}});async function yt(a,t){{t=t.replace("-","_");const s=await(await fetch(`./v2/i18n/${t}.json`)).json();a.store(s)}}export{A as P,h as a,ht as d,w as g,yt as l};
