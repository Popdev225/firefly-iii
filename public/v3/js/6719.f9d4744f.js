"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[6719],{6719:(e,t,a)=>{a.r(t),a.d(t,{default:()=>W});var o=a(9835),i=a(6970);const s={class:"row q-mx-md"},l={class:"col-12"},n={class:"text-h6"},r={class:"row"},d={class:"col-12 q-mb-xs"},u=(0,o._)("br",null,null,-1);function c(e,t,a,c,h,w){const b=(0,o.up)("q-card-section"),f=(0,o.up)("q-card"),k=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(k,null,{default:(0,o.w5)((()=>[(0,o._)("div",s,[(0,o._)("div",l,[(0,o.Wm)(f,{bordered:""},{default:(0,o.w5)((()=>[(0,o.Wm)(b,null,{default:(0,o.w5)((()=>[(0,o._)("div",n,(0,i.zw)(h.webhook.title),1)])),_:1}),(0,o.Wm)(b,null,{default:(0,o.w5)((()=>[(0,o._)("div",r,[(0,o._)("div",d,[(0,o.Uk)(" Name: "+(0,i.zw)(h.webhook.title),1),u])])])),_:1})])),_:1})])])])),_:1})}var h=a(9599);const w={name:"Show",data(){return{webhook:{},id:0}},created(){this.id=parseInt(this.$route.params.id),this.getWebhook()},methods:{getWebhook:function(){(new h.Z).get(this.id).then((e=>this.parseWebhook(e)))},parseWebhook:function(e){this.webhook={title:e.data.data.attributes.title}}}};var b=a(1639),f=a(9885),k=a(4458),p=a(3190),_=a(9984),m=a.n(_);const v=(0,b.Z)(w,[["render",c]]),W=v;m()(w,"components",{QPage:f.Z,QCard:k.Z,QCardSection:p.Z})}}]);