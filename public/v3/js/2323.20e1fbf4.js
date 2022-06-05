"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[2323],{2323:(e,t,s)=>{s.r(t),s.d(t,{default:()=>g});var a=s(9835);function n(e,t,s,n,r,i){const o=(0,a.up)("ApexChart");return(0,a.wg)(),(0,a.iD)("div",null,[(0,a.Wm)(o,{width:"100%",ref:"chart",height:"350",type:"line",options:r.options,series:r.series},null,8,["options","series"])])}s(702);var r=s(1569),i=s(8898);class o{overview(e,t){let s=(0,i.Z)(e.start,"y-MM-dd"),a=(0,i.Z)(e.end,"y-MM-dd");return r.api.get("/api/v1/chart/account/overview",{params:{start:s,end:a,cache:t}})}}var l=s(9302),h=s(3555);const d={name:"HomeChart",computed:{},data(){return{range:{start:null,end:null},loading:!1,currencies:[],options:{theme:{mode:"dark"},dataLabels:{enabled:!1},noData:{text:"Loading..."},chart:{id:"vuechart-home",toolbar:{show:!0,tools:{download:!1,selection:!1,pan:!1}}},yaxis:{labels:{formatter:this.numberFormatter}},labels:[],xaxis:{categories:[]}},series:[],locale:"en-US",dateFormat:"MMMM d, y",store:null}},created(){const e=(0,l.Z)();this.locale=e.lang.getLocale(),this.dateFormat=this.$t("config.month_and_day_fns")},mounted(){this.store=(0,h.S)();const e=(0,l.Z)();this.options.theme.mode=e.dark.isActive?"dark":"light",null!==this.range.start&&null!==this.range.end||this.store.$onAction((({name:e,store:t,args:s,after:a,onError:n})=>{a((t=>{"setRange"===e&&(this.range=t,this.buildChart())}))})),null!==this.store.getRange.start&&null!==this.store.getRange.end&&this.buildChart()},methods:{numberFormatter:function(e,t){var s;let a=null!==(s=this.currencies[t])&&void 0!==s?s:"EUR";return Intl.NumberFormat(this.locale,{style:"currency",currency:a}).format(e)},buildChart:function(){if(null!==this.store.getRange.start&&null!==this.store.getRange.end){let e=this.store.getRange.start,t=this.store.getRange.end;if(!1===this.loading){this.loading=!0;const s=new o;this.generateStaticLabels({start:e,end:t}),s.overview({start:e,end:t},this.getCacheKey).then((e=>{this.generateSeries(e.data)}))}}},generateSeries:function(e){let t;this.series=[];for(let s in e)if(e.hasOwnProperty(s)){t={},t.name=e[s].label,t.data=[],this.currencies.push(e[s].currency_code);for(let a in e[s].entries)t.data.push(e[s].entries[a]);this.series.push(t)}this.loading=!1},generateStaticLabels:function(e){let t,s=new Date(e.start),a=[];while(s<=e.end)a.push((0,i.Z)(s,this.dateFormat)),t=s.setDate(s.getDate()+1),s=new Date(t);this.options={...this.options,labels:a}}},components:{ApexChart:(0,a.RC)((()=>s.e(4736).then(s.t.bind(s,7092,23))))}};var c=s(1639);const u=(0,c.Z)(d,[["render",n]]),g=u}}]);