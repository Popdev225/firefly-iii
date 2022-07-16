"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[6676],{6676:(e,s,r)=>{r.r(s),r.d(s,{default:()=>O});var t=r(9835),a=r(6970);const o={class:"row q-mx-md"},l={class:"col-12"},i={class:"row q-mx-md q-mt-md"},n={class:"col-12"},m=(0,t._)("div",{class:"text-h6"},"Info for new subscription",-1),u={class:"row"},d={class:"col-12 q-mb-xs"},b={class:"row"},c={class:"col-12 q-mb-xs"},p={class:"row"},h={class:"col-6 q-mb-xs q-pr-xs"},_={class:"col-6 q-mb-xs q-pl-xs"},f={class:"row"},q={class:"col-12 q-mb-xs"},g={class:"row q-mx-md"},w={class:"col-12"},v={class:"row"},x={class:"col-12 text-right"},y={class:"row"},E={class:"col-12 text-right"},V=(0,t._)("br",null,null,-1);function S(e,s,r,S,k,W){const I=(0,t.up)("q-btn"),$=(0,t.up)("q-banner"),C=(0,t.up)("q-card-section"),M=(0,t.up)("q-input"),R=(0,t.up)("q-select"),Z=(0,t.up)("q-card"),F=(0,t.up)("q-checkbox"),Q=(0,t.up)("q-page");return(0,t.wg)(),(0,t.j4)(Q,null,{default:(0,t.w5)((()=>[(0,t._)("div",o,[(0,t._)("div",l,[""!==k.errorMessage?((0,t.wg)(),(0,t.j4)($,{key:0,"inline-actions":"",rounded:"",class:"bg-orange text-white"},{action:(0,t.w5)((()=>[(0,t.Wm)(I,{flat:"",onClick:W.dismissBanner,label:"Dismiss"},null,8,["onClick"])])),default:(0,t.w5)((()=>[(0,t.Uk)((0,a.zw)(k.errorMessage)+" ",1)])),_:1})):(0,t.kq)("",!0)])]),(0,t._)("div",i,[(0,t._)("div",n,[(0,t.Wm)(Z,{bordered:""},{default:(0,t.w5)((()=>[(0,t.Wm)(C,null,{default:(0,t.w5)((()=>[m])),_:1}),(0,t.Wm)(C,null,{default:(0,t.w5)((()=>[(0,t._)("div",u,[(0,t._)("div",d,[(0,t.Wm)(M,{"error-message":k.submissionErrors.name,error:k.hasSubmissionErrors.name,"bottom-slots":"",disable:W.disabledInput,type:"text",clearable:"",modelValue:k.name,"onUpdate:modelValue":s[0]||(s[0]=e=>k.name=e),label:e.$t("form.name"),outlined:""},null,8,["error-message","error","disable","modelValue","label"])])]),(0,t._)("div",b,[(0,t._)("div",c,[(0,t.Wm)(M,{"error-message":k.submissionErrors.date,error:k.hasSubmissionErrors.date,"bottom-slots":"",disable:W.disabledInput,type:"date",modelValue:k.date,"onUpdate:modelValue":s[1]||(s[1]=e=>k.date=e),label:e.$t("form.date"),hint:"The next date you expect the subscription to hit",outlined:""},null,8,["error-message","error","disable","modelValue","label"])])]),(0,t._)("div",p,[(0,t._)("div",h,[(0,t.Wm)(M,{"error-message":k.submissionErrors.amount_min,error:k.hasSubmissionErrors.amount_min,"bottom-slots":"",disable:W.disabledInput,type:"number",modelValue:k.amount_min,"onUpdate:modelValue":s[2]||(s[2]=e=>k.amount_min=e),label:e.$t("form.amount_min"),outlined:""},null,8,["error-message","error","disable","modelValue","label"])]),(0,t._)("div",_,[(0,t.Wm)(M,{"error-message":k.submissionErrors.amount_max,error:k.hasSubmissionErrors.amount_max,rules:[e=>parseFloat(e)>=parseFloat(k.amount_min)||"Must be more than minimum amount"],"bottom-slots":"",disable:W.disabledInput,type:"number",modelValue:k.amount_max,"onUpdate:modelValue":s[3]||(s[3]=e=>k.amount_max=e),label:e.$t("form.amount_max"),outlined:""},null,8,["error-message","error","rules","disable","modelValue","label"])]),(0,t._)("div",f,[(0,t._)("div",q,[(0,t.Wm)(R,{"error-message":k.submissionErrors.repeat_freq,error:k.hasSubmissionErrors.repeat_freq,outlined:"",modelValue:k.repeat_freq,"onUpdate:modelValue":s[4]||(s[4]=e=>k.repeat_freq=e),options:k.repeatFrequencies,label:"Outlined"},null,8,["error-message","error","modelValue","options"])])])])])),_:1})])),_:1})])]),(0,t._)("div",g,[(0,t._)("div",w,[(0,t.Wm)(Z,{class:"q-mt-xs"},{default:(0,t.w5)((()=>[(0,t.Wm)(C,null,{default:(0,t.w5)((()=>[(0,t._)("div",v,[(0,t._)("div",x,[(0,t.Wm)(I,{disable:W.disabledInput,color:"primary",label:"Submit",onClick:W.submitSubscription},null,8,["disable","onClick"])])]),(0,t._)("div",y,[(0,t._)("div",E,[(0,t.Wm)(F,{disable:W.disabledInput,modelValue:k.doReturnHere,"onUpdate:modelValue":s[5]||(s[5]=e=>k.doReturnHere=e),"left-label":"",label:"Return here to create another one"},null,8,["disable","modelValue"]),V,(0,t.Wm)(F,{modelValue:k.doResetForm,"onUpdate:modelValue":s[6]||(s[6]=e=>k.doResetForm=e),"left-label":"",disable:!k.doReturnHere||W.disabledInput,label:"Reset form after submission"},null,8,["modelValue","disable"])])])])),_:1})])),_:1})])])])),_:1})}var k=r(1569);class W{post(e){let s="/api/v1/bills";return k.api.post(s,e)}}var I=r(8898);const $={name:"Create",data(){return{submissionErrors:{},hasSubmissionErrors:{},submitting:!1,doReturnHere:!1,doResetForm:!1,errorMessage:"",repeatFrequencies:[],name:"",date:"",repeat_freq:"monthly",amount_min:"",amount_max:""}},computed:{disabledInput:function(){return this.submitting}},created(){this.date=(0,I.Z)(new Date,"y-MM-dd"),this.repeatFrequencies=[{label:this.$t("firefly.repeat_freq_weekly"),value:"weekly"},{label:this.$t("firefly.repeat_freq_monthly"),value:"monthly"},{label:this.$t("firefly.repeat_freq_quarterly"),value:"quarterly"},{label:this.$t("firefly.repeat_freq_half-year"),value:"half-year"},{label:this.$t("firefly.repeat_freq_yearly"),value:"yearly"}],this.resetForm()},methods:{resetForm:function(){this.name="",this.date=(0,I.Z)(new Date,"y-MM-dd"),this.repeat_freq="monthly",this.amount_min="",this.amount_max="",this.resetErrors()},resetErrors:function(){this.submissionErrors={name:"",date:"",repeat_freq:"",amount_min:"",amount_max:""},this.hasSubmissionErrors={name:!1,date:!1,repeat_freq:!1,amount_min:!1,amount_max:!1}},submitSubscription:function(){this.submitting=!0,this.errorMessage="",this.resetErrors();const e=this.buildSubscription();let s=new W;s.post(e).catch(this.processErrors).then(this.processSuccess)},buildSubscription:function(){let e={name:this.name,date:this.date,repeat_freq:this.repeat_freq,amount_min:this.amount_min,amount_max:this.amount_max};return e},dismissBanner:function(){this.errorMessage=""},processSuccess:function(e){if(!e)return;this.submitting=!1;let s={level:"success",text:"I am new subscription lol",show:!0,action:{show:!0,text:"Go to account",link:{name:"subscriptions.show",params:{id:parseInt(e.data.data.id)}}}};this.$q.localStorage.set("flash",s),this.doReturnHere&&window.dispatchEvent(new CustomEvent("flash",{detail:{flash:this.$q.localStorage.getItem("flash")}})),this.doReturnHere||this.$router.go(-1)},processErrors:function(e){if(e.response){let s=e.response.data;this.errorMessage=s.message,console.log(s);for(let e in s.errors)s.errors.hasOwnProperty(e)&&(this.submissionErrors[e]=s.errors[e][0],this.hasSubmissionErrors[e]=!0)}this.submitting=!1}}};var C=r(1639),M=r(9885),R=r(7128),Z=r(8879),F=r(4458),Q=r(3190),U=r(6611),H=r(7887),B=r(1221),D=r(9984),T=r.n(D);const j=(0,C.Z)($,[["render",S]]),O=j;T()($,"components",{QPage:M.Z,QBanner:R.Z,QBtn:Z.Z,QCard:F.Z,QCardSection:Q.Z,QInput:U.Z,QSelect:H.Z,QCheckbox:B.Z})}}]);