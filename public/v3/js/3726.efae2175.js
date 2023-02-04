"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[3726],{3726:(e,s,t)=>{t.r(s),t.d(s,{default:()=>le});var r=t(9835),l=t(6970);const i={class:"row q-mx-md"},o={class:"col-12"},a={class:"row q-mx-md q-mt-md"},n={class:"col-12"},u=(0,r._)("div",{class:"text-h6"},"Info for new rule",-1),d={class:"row q-mx-md q-mt-md"},c={class:"col-12"},g=(0,r._)("div",{class:"text-h6"},"Triggers",-1),p=(0,r._)("div",{class:"row"},[(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Trigger")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Trigger on value")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Active?")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Stop processing after a hit")]),(0,r._)("div",{class:"col"}," del ")],-1),m={class:"col"},h={class:"col"},_={class:"col"},b={class:"col"},v={class:"col"},f=(0,r.Uk)("Del"),w=(0,r.Uk)("Add trigger"),y={class:"row q-mx-md q-mt-md"},E={class:"col-12"},V=(0,r._)("div",{class:"text-h6"},"Actions",-1),W=(0,r._)("div",{class:"row"},[(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Action")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Value")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Active?")]),(0,r._)("div",{class:"col"},[(0,r._)("strong",null,"Stop processing other actions")]),(0,r._)("div",{class:"col"}," del ")],-1),k={class:"col"},x={class:"col"},A={class:"col"},T={class:"col"},q={class:"col"},U=(0,r.Uk)("Del"),D=(0,r.Uk)("Add action"),S={class:"row q-mx-md"},R={class:"col-12"},C={class:"row"},I={class:"col-12 text-right"},H={class:"row"},Z={class:"col-12 text-right"},G=(0,r._)("br",null,null,-1);function Q(e,s,t,Q,j,P){const $=(0,r.up)("q-btn"),M=(0,r.up)("q-banner"),F=(0,r.up)("q-card-section"),B=(0,r.up)("q-input"),O=(0,r.up)("q-select"),K=(0,r.up)("q-card"),Y=(0,r.up)("q-checkbox"),z=(0,r.up)("q-card-actions"),J=(0,r.up)("q-page");return(0,r.wg)(),(0,r.j4)(J,null,{default:(0,r.w5)((()=>[(0,r._)("div",i,[(0,r._)("div",o,[""!==j.errorMessage?((0,r.wg)(),(0,r.j4)(M,{key:0,class:"bg-orange text-white","inline-actions":"",rounded:""},{action:(0,r.w5)((()=>[(0,r.Wm)($,{flat:"",label:"Dismiss",onClick:P.dismissBanner},null,8,["onClick"])])),default:(0,r.w5)((()=>[(0,r.Uk)((0,l.zw)(j.errorMessage)+" ",1)])),_:1})):(0,r.kq)("",!0)])]),(0,r._)("div",a,[(0,r._)("div",n,[(0,r.Wm)(K,{bordered:""},{default:(0,r.w5)((()=>[(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[u])),_:1}),(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[(0,r.Wm)(B,{modelValue:j.title,"onUpdate:modelValue":s[0]||(s[0]=e=>j.title=e),disable:P.disabledInput,error:j.hasSubmissionErrors.title,"error-message":j.submissionErrors.title,label:e.$t("form.title"),"bottom-slots":"",clearable:"",outlined:"",type:"text"},null,8,["modelValue","disable","error","error-message","label"]),(0,r.Wm)(O,{modelValue:j.rule_group_id,"onUpdate:modelValue":s[1]||(s[1]=e=>j.rule_group_id=e),disable:P.disabledInput,error:j.hasSubmissionErrors.rule_group_id,"error-message":j.submissionErrors.rule_group_id,options:j.ruleGroups,"bottom-slots":"",class:"q-pr-xs",dense:"",label:"Rule group","map-options":"",outlined:""},null,8,["modelValue","disable","error","error-message","options"]),(0,r.Wm)(O,{modelValue:j.trigger,"onUpdate:modelValue":s[2]||(s[2]=e=>j.trigger=e),disable:P.disabledInput,error:j.hasSubmissionErrors.trigger,"error-message":j.submissionErrors.trigger,options:j.initialTriggers,"bottom-slots":"",class:"q-pr-xs",dense:"","emit-value":"",label:"What fires a rule?","map-options":"",outlined:""},null,8,["modelValue","disable","error","error-message","options"])])),_:1})])),_:1})])]),(0,r._)("div",d,[(0,r._)("div",c,[(0,r.Wm)(K,{bordered:""},{default:(0,r.w5)((()=>[(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[g])),_:1}),(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[p,((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(j.triggers,((e,s)=>((0,r.wg)(),(0,r.iD)("div",{key:s,class:"row"},[(0,r._)("div",m,[(0,r.Wm)(O,{modelValue:e.type,"onUpdate:modelValue":s=>e.type=s,disable:P.disabledInput,error:j.hasSubmissionErrors.triggers[s].type,"error-message":j.submissionErrors.triggers[s].type,options:j.availableTriggers,"bottom-slots":"",class:"q-pr-xs",dense:"",label:"Trigger type","map-options":"",outlined:""},null,8,["modelValue","onUpdate:modelValue","disable","error","error-message","options"])]),(0,r._)("div",h,[e.type.needs_context?((0,r.wg)(),(0,r.j4)(B,{key:0,modelValue:e.value,"onUpdate:modelValue":s=>e.value=s,disable:P.disabledInput,error:j.hasSubmissionErrors.triggers[s].value,"error-message":j.submissionErrors.triggers[s].value,"bottom-slots":"",clearable:"",dense:"",label:"Trigger value",outlined:"",type:"text"},null,8,["modelValue","onUpdate:modelValue","disable","error","error-message"])):(0,r.kq)("",!0)]),(0,r._)("div",_,[(0,r.Wm)(Y,{modelValue:e.active,"onUpdate:modelValue":s=>e.active=s},null,8,["modelValue","onUpdate:modelValue"])]),(0,r._)("div",b,[(0,r.Wm)(Y,{modelValue:e.stop_processing,"onUpdate:modelValue":s=>e.stop_processing=s},null,8,["modelValue","onUpdate:modelValue"])]),(0,r._)("div",v,[(0,r.Wm)($,{color:"secondary",onClick:e=>P.removeTrigger(s)},{default:(0,r.w5)((()=>[f])),_:2},1032,["onClick"])])])))),128))])),_:1}),(0,r.Wm)(z,null,{default:(0,r.w5)((()=>[(0,r.Wm)($,{color:"primary",onClick:P.addTrigger},{default:(0,r.w5)((()=>[w])),_:1},8,["onClick"])])),_:1})])),_:1})])]),(0,r._)("div",y,[(0,r._)("div",E,[(0,r.Wm)(K,{bordered:""},{default:(0,r.w5)((()=>[(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[V])),_:1}),(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[W,((0,r.wg)(!0),(0,r.iD)(r.HY,null,(0,r.Ko)(j.actions,((e,s)=>((0,r.wg)(),(0,r.iD)("div",{key:s,class:"row"},[(0,r._)("div",k,[(0,r.Wm)(O,{modelValue:e.type,"onUpdate:modelValue":s=>e.type=s,disable:P.disabledInput,error:j.hasSubmissionErrors.actions[s].type,"error-message":j.submissionErrors.actions[s].type,options:j.availableActions,"bottom-slots":"",class:"q-pr-xs",dense:"",label:"Action type","map-options":"",outlined:""},null,8,["modelValue","onUpdate:modelValue","disable","error","error-message","options"])]),(0,r._)("div",x,[e.type.needs_context?((0,r.wg)(),(0,r.j4)(B,{key:0,modelValue:e.value,"onUpdate:modelValue":s=>e.value=s,disable:P.disabledInput,error:j.hasSubmissionErrors.actions[s].value,"error-message":j.submissionErrors.actions[s].value,"bottom-slots":"",clearable:"",dense:"",label:"Action value",outlined:"",type:"text"},null,8,["modelValue","onUpdate:modelValue","disable","error","error-message"])):(0,r.kq)("",!0)]),(0,r._)("div",A,[(0,r.Wm)(Y,{modelValue:e.active,"onUpdate:modelValue":s=>e.active=s},null,8,["modelValue","onUpdate:modelValue"])]),(0,r._)("div",T,[(0,r.Wm)(Y,{modelValue:e.stop_processing,"onUpdate:modelValue":s=>e.stop_processing=s},null,8,["modelValue","onUpdate:modelValue"])]),(0,r._)("div",q,[(0,r.Wm)($,{color:"secondary",onClick:e=>P.removeAction(s)},{default:(0,r.w5)((()=>[U])),_:2},1032,["onClick"])])])))),128))])),_:1}),(0,r.Wm)(z,null,{default:(0,r.w5)((()=>[(0,r.Wm)($,{color:"primary",onClick:P.addAction},{default:(0,r.w5)((()=>[D])),_:1},8,["onClick"])])),_:1})])),_:1})])]),(0,r._)("div",S,[(0,r._)("div",R,[(0,r.Wm)(K,{class:"q-mt-xs"},{default:(0,r.w5)((()=>[(0,r.Wm)(F,null,{default:(0,r.w5)((()=>[(0,r._)("div",C,[(0,r._)("div",I,[(0,r.Wm)($,{disable:P.disabledInput,color:"primary",label:"Submit",onClick:P.submitRule},null,8,["disable","onClick"])])]),(0,r._)("div",H,[(0,r._)("div",Z,[(0,r.Wm)(Y,{modelValue:j.doReturnHere,"onUpdate:modelValue":s[3]||(s[3]=e=>j.doReturnHere=e),disable:P.disabledInput,label:"Return here to create another one","left-label":""},null,8,["modelValue","disable"]),G,(0,r.Wm)(Y,{modelValue:j.doResetForm,"onUpdate:modelValue":s[4]||(s[4]=e=>j.doResetForm=e),disable:!j.doReturnHere||P.disabledInput,label:"Reset form after submission","left-label":""},null,8,["modelValue","disable"])])])])),_:1})])),_:1})])])])),_:1})}var j=t(1569);class P{post(e){let s="/api/v1/rules";return j.api.post(s,e)}}var $=t(3918),M=t(2416);const F={name:"Create",data(){return{submissionErrors:{triggers:[],actions:[]},hasSubmissionErrors:{triggers:[],actions:[]},submitting:!1,doReturnHere:!1,doResetForm:!1,errorMessage:"",ruleGroups:[],availableTriggers:[],availableActions:[],initialTriggers:[],title:"",rule_group_id:null,trigger:"store-journal",triggers:[],actions:[]}},computed:{disabledInput:function(){return this.submitting}},created(){this.resetForm(),this.getRuleGroups(),this.getRuleTriggers(),this.getRuleActions()},methods:{addTrigger:function(){this.triggers.push(this.getDefaultTrigger()),this.submissionErrors.triggers.push(this.getDefaultTriggerError()),this.hasSubmissionErrors.triggers.push(this.getDefaultHasTriggerError())},addAction:function(){this.actions.push(this.getDefaultAction()),this.submissionErrors.actions.push(this.getDefaultActionError()),this.hasSubmissionErrors.actions.push(this.getDefaultHasActionError())},getDefaultTriggerError:function(){return{type:"",value:"",stop_processing:"",active:""}},getDefaultActionError:function(){return{type:"",value:"",stop_processing:"",active:""}},getDefaultHasTriggerError:function(){return{type:!1,value:!1,stop_processing:!1,active:!1}},getDefaultHasActionError:function(){return{type:!1,value:!1,stop_processing:!1,active:!1}},removeTrigger:function(e){this.triggers.splice(e,1),this.submissionErrors.triggers.splice(e,1),this.hasSubmissionErrors.triggers.splice(e,1)},removeAction:function(e){this.actions.splice(e,1),this.submissionErrors.actions.splice(e,1),this.hasSubmissionErrors.actions.splice(e,1)},getDefaultTrigger:function(){return{type:{value:"description_is",needs_context:!0,label:this.$t("firefly.rule_trigger_description_is_choice")},value:"",stop_processing:!1,active:!0}},getDefaultAction:function(){return{type:{value:"add_tag",needs_context:!0,label:this.$t("firefly.rule_action_add_tag_choice")},value:"",stop_processing:!1,active:!0}},getRuleTriggers:function(){let e=new $.Z;e.get("firefly.search.operators").then((e=>{for(let s in e.data.data.value)if(e.data.data.value.hasOwnProperty(s)){let t=e.data.data.value[s];!1===t.alias&&"user_action"!==s&&this.availableTriggers.push({value:s,needs_context:t.needs_context,label:this.$t("firefly.rule_trigger_"+s+"_choice")})}}))},getRuleActions:function(){let e=new $.Z;e.get("firefly.rule-actions").then((e=>{for(let s in e.data.data.value)e.data.data.value.hasOwnProperty(s)&&this.availableActions.push({value:s,needs_context:!1,label:this.$t("firefly.rule_action_"+s+"_choice")})})).then((()=>{e.get("firefly.context-rule-actions").then((e=>{let s=e.data.data.value;for(let t in s){let e=s[t];for(let s in this.availableActions){let t=this.availableActions[s];t.value===e&&(this.availableActions[s].needs_context=!0)}}}))}))},resetForm:function(){this.initialTriggers=[{value:"store-journal",label:"When a transaction is stored"},{value:"update-journal",label:"When a transaction is updated"}],this.title="",this.rule_group_id=null,this.trigger="store-journal",this.triggers.push(this.getDefaultTrigger()),this.actions.push(this.getDefaultAction()),this.resetErrors()},getRuleGroups:function(){this.getGroupPage(1)},getGroupPage:function(e){let s=new M.Z;s.list(e,this.getCacheKey).then((s=>{e<parseInt(s.data.meta.pagination.total_pages)&&this.getGroupPage(e+1);let t=s.data.data;for(let e in t)if(t.hasOwnProperty(e)){let s=t[e];this.ruleGroups.push({value:parseInt(s.id),label:s.attributes.title})}}))},resetErrors:function(){this.submissionErrors={title:"",rule_group_id:"",triggers:[this.getDefaultTriggerError()],actions:[this.getDefaultActionError()]},this.hasSubmissionErrors={title:!1,rule_group_id:!1,triggers:[this.getDefaultHasTriggerError()],actions:[this.getDefaultHasActionError()]}},submitRule:function(){this.submitting=!0,this.errorMessage="",this.resetErrors();const e=this.buildRule();(new P).post(e).catch(this.processErrors).then(this.processSuccess)},buildRule:function(){let e={title:this.title,rule_group_id:this.rule_group_id,trigger:this.trigger,triggers:[],actions:[]};for(let s in this.triggers)e.triggers.push({type:this.triggers[s].type.value,value:this.triggers[s].value,stop_processing:this.triggers[s].stop_processing,active:this.triggers[s].active});for(let s in this.actions){let t=this.actions[s];console.log(t),e.actions.push({type:this.actions[s].type.value,value:this.actions[s].value,stop_processing:this.actions[s].stop_processing,active:this.actions[s].active})}return e},dismissBanner:function(){this.errorMessage=""},processSuccess:function(e){if(!e)return;this.submitting=!1;let s={level:"success",text:"I am new rule",show:!0,action:{show:!0,text:"Go to piggy",link:{name:"rules.show",params:{id:parseInt(e.data.data.id)}}}};this.$q.localStorage.set("flash",s),this.doReturnHere&&window.dispatchEvent(new CustomEvent("flash",{detail:{flash:this.$q.localStorage.getItem("flash")}})),this.doReturnHere||this.$router.go(-1)},processErrors:function(e){if(e.response){let s=e.response.data;this.errorMessage=s.message;for(let e in s.errors)if(s.errors.hasOwnProperty(e)){let t=e;if(t.includes(".")){let r=t.split("."),l=r[0],i=parseInt(r[1]),o=r[2];this.submissionErrors[l][i][o]=s.errors[e][0],this.hasSubmissionErrors[l][i][o]=!0}t.includes(".")||(this.submissionErrors[e]=s.errors[e][0],this.hasSubmissionErrors[e]=!0)}}this.submitting=!1}}};var B=t(1639),O=t(9885),K=t(7128),Y=t(8879),z=t(4458),J=t(3190),L=t(6611),N=t(7887),X=t(1221),ee=t(1821),se=t(9984),te=t.n(se);const re=(0,B.Z)(F,[["render",Q]]),le=re;te()(F,"components",{QPage:O.Z,QBanner:K.Z,QBtn:Y.Z,QCard:z.Z,QCardSection:J.Z,QInput:L.Z,QSelect:N.Z,QCheckbox:X.Z,QCardActions:ee.Z})}}]);