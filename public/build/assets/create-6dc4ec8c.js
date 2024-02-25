import{a as m,d as y,f as d}from"./format-money-2cbd3c32.js";import{d as w,c as b}from"./create-empty-split-c1e678fd.js";import{l as v,a as T,b as C,c as P,p as _,d as E,s as L,e as c,f as S,g as D,h as A,i as k,j as x,k as h,m as p}from"./splice-errors-into-transactions-8731db70.js";import{l,i as r,m as B}from"./vendor-47e474ee.js";import"./get-4f3e9dd6.js";class M{post(t){let s="/api/v2/transactions";return m.post(s,t)}}let n=[],u=[];document.addEventListener("location-remove",e=>{u[e.detail.index].remove()});function O(e){let t=0;if(document.querySelector("#form")._x_dataStack[0].$data.entries[t].hasLocation===!1){u[t]=new l.marker(e.latlng,{draggable:!0}),u[t].on("dragend",U),u[t].addTo(n[t]);const o=new CustomEvent("location-set",{detail:{latitude:e.latlng.lat,longitude:e.latlng.lng,index:t,zoomLevel:n[t].getZoom()}});document.dispatchEvent(o)}}function F(e){let t=0;const s=new CustomEvent("location-zoom",{detail:{index:t,zoomLevel:n[t].getZoom()}});document.dispatchEvent(s)}function U(e){let t=e.target,s=t.getLatLng();t.setLatLng(new l.LatLng(s.lat,s.lng),{draggable:"true"});const o=new CustomEvent("location-move",{detail:{latitude:s.lat,longitude:s.lng,index:0}});document.dispatchEvent(o)}function z(e){if(e>0){console.warn("Corwardly refuse to add a map on split #"+(e+1));return}if(typeof n[e]>"u"){let t=document.getElementById("location_map");t&&(n[e]=l.map(t).setView([t.dataset.latitude,t.dataset.longitude],t.dataset.zoomLevel),l.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png",{maxZoom:19,attribution:'&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(n[e]),n[e].on("click",O),n[e].on("zoomend",F))}}const a=x();let I=function(){return{entries:[],formStates:{loadingCurrencies:!0,loadingBudgets:!0,loadingPiggyBanks:!0,loadingSubscriptions:!0,isSubmitting:!1,returnHereButton:!1,saveAsNewButton:!1,resetButton:!0,rulesButton:!0,webhooksButton:!0},formBehaviour:{formType:"create",foreignCurrencyEnabled:!0},formData:{defaultCurrency:null,enabledCurrencies:[],nativeCurrencies:[],foreignCurrencies:[],budgets:[],piggyBanks:[],subscriptions:[]},groupProperties:{transactionType:"unknown",title:null,id:null,totalAmount:0},notifications:{error:{show:!1,text:"",url:""},success:{show:!1,text:"",url:""},wait:{show:!1,text:""}},filters:{source:[],destination:[]},changedDateTime(e){console.warn("changedDateTime, event is not used")},changedDescription(e){console.warn("changedDescription, event is not used")},changedDestinationAccount(e){this.detectTransactionType()},changedSourceAccount(e){this.detectTransactionType()},detectTransactionType(){const e=this.entries[0].source_account.type??"unknown",t=this.entries[0].destination_account.type??"unknown";if(e==="unknown"&&t==="unknown"){this.groupProperties.transactionType="unknown",console.warn("Cannot infer transaction type from two unknown accounts.");return}if(e===t&&["Asset account","Loan","Debt","Mortgage"].includes(e)){this.groupProperties.transactionType="transfer",console.log('Transaction type is detected to be "'+this.groupProperties.transactionType+'".'),console.log("filter down currencies for transfer."),this.filterNativeCurrencies(this.entries[0].source_account.currency_code),this.filterForeignCurrencies(this.entries[0].destination_account.currency_code);return}if(e==="Asset account"&&["Expense account","Debt","Loan","Mortgage"].includes(t)){this.groupProperties.transactionType="withdrawal",console.log('[a] Transaction type is detected to be "'+this.groupProperties.transactionType+'".'),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(e==="Asset account"&&t==="unknown"){this.groupProperties.transactionType="withdrawal",console.log('[b] Transaction type is detected to be "'+this.groupProperties.transactionType+'".'),console.log(this.entries[0].source_account),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(["Debt","Loan","Mortgage"].includes(e)&&t==="Expense account"){this.groupProperties.transactionType="withdrawal",console.log('[c] Transaction type is detected to be "'+this.groupProperties.transactionType+'".'),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(e==="Revenue account"&&["Asset account","Debt","Loan","Mortgage"].includes(t)){this.groupProperties.transactionType="deposit",console.log('Transaction type is detected to be "'+this.groupProperties.transactionType+'".');return}if(e==="unknown"&&["Asset account","Debt","Loan","Mortgage"].includes(t)){this.groupProperties.transactionType="deposit",console.log('Transaction type is detected to be "'+this.groupProperties.transactionType+'".');return}if(["Debt","Loan","Mortgage"].includes(e)&&t==="Asset account"){this.groupProperties.transactionType="deposit",console.log('Transaction type is detected to be "'+this.groupProperties.transactionType+'".');return}console.warn('Unknown account combination between "'+e+'" and "'+t+'".')},formattedTotalAmount(){return this.entries.length===0?d(this.groupProperties.totalAmount,"EUR"):d(this.groupProperties.totalAmount,this.entries[0].currency_code??"EUR")},filterForeignCurrencies(e){let t=[],s;for(let o in this.formData.enabledCurrencies)if(this.formData.enabledCurrencies.hasOwnProperty(o)){let i=this.formData.enabledCurrencies[o];i.code===e&&(s=i)}t.push(s),this.formData.foreignCurrencies=t,t.length===1&&t[0].code===this.entries[0].source_account.currency_code&&(console.log("Foreign currency is same as source currency. Disable foreign amount."),this.formBehaviour.foreignCurrencyEnabled=!1),t.length===1&&t[0].code!==this.entries[0].source_account.currency_code&&(console.log("Foreign currency is NOT same as source currency. Enable foreign amount."),this.formBehaviour.foreignCurrencyEnabled=!0);for(let o in this.entries)this.entries.hasOwnProperty(o)&&(this.entries[o].foreign_currency_code=e)},filterNativeCurrencies(e){let t=[],s;for(let o in this.formData.enabledCurrencies)if(this.formData.enabledCurrencies.hasOwnProperty(o)){let i=this.formData.enabledCurrencies[o];i.code===e&&(s=i)}t.push(s),this.formData.nativeCurrencies=t;for(let o in this.entries)this.entries.hasOwnProperty(o)&&(this.entries[o].currency_code=e)},changedAmount(e){const t=parseInt(e.target.dataset.index);this.entries[t].amount=parseFloat(e.target.value),this.groupProperties.totalAmount=0;for(let s in this.entries)this.entries.hasOwnProperty(s)&&(this.groupProperties.totalAmount=this.groupProperties.totalAmount+parseFloat(this.entries[s].amount))},addedSplit(){},processUpload(e){this.showMessageOrRedirectUser()},processUploadError(e){this.notifications.success.show=!1,this.notifications.wait.show=!1,this.notifications.error.show=!0,this.formStates.isSubmitting=!1,this.notifications.error.text=r.t("firefly.errors_upload"),console.error(e)},init(){this.addSplit(),v().then(e=>{this.formStates.loadingCurrencies=!1,this.formData.defaultCurrency=e.defaultCurrency,this.formData.enabledCurrencies=e.enabledCurrencies,this.formData.nativeCurrencies=e.nativeCurrencies,this.formData.foreignCurrencies=e.foreignCurrencies}),T().then(e=>{this.formData.budgets=e,this.formStates.loadingBudgets=!1}),C().then(e=>{this.formData.piggyBanks=e,this.formStates.loadingPiggyBanks=!1}),P().then(e=>{this.formData.subscriptions=e,this.formStates.loadingSubscriptions=!1}),document.addEventListener("upload-success",e=>{this.processUpload(e),document.querySelectorAll("input[type=file]").value=""}),document.addEventListener("upload-error",e=>{this.processUploadError(e)}),document.addEventListener("location-move",e=>{this.entries[e.detail.index].latitude=e.detail.latitude,this.entries[e.detail.index].longitude=e.detail.longitude}),document.addEventListener("location-set",e=>{this.entries[e.detail.index].hasLocation=!0,this.entries[e.detail.index].latitude=e.detail.latitude,this.entries[e.detail.index].longitude=e.detail.longitude,this.entries[e.detail.index].zoomLevel=e.detail.zoomLevel}),document.addEventListener("location-zoom",e=>{this.entries[e.detail.index].hasLocation=!0,this.entries[e.detail.index].zoomLevel=e.detail.zoomLevel}),this.filters.source=["Asset account","Loan","Debt","Mortgage","Revenue account"],this.filters.destination=["Expense account","Loan","Debt","Mortgage","Asset account"]},submitTransaction(){this.notifications.error.show=!1,this.notifications.success.show=!1,this.notifications.wait.show=!1;for(let o in this.entries)this.entries.hasOwnProperty(o)&&(this.entries[o].errors=w());this.formStates.isSubmitting=!0,this.detectTransactionType();let e=_(this.entries,null,this.groupProperties.transactionType),t={group_title:this.groupProperties.title,fire_webhooks:this.formStates.webhooksButton,apply_rules:this.formStates.rulesButton,transactions:e};this.groupProperties.title===null&&e.length>1&&(t.group_title=e[0].description);let s=new M;console.log(t),s.post(t).then(o=>{const i=o.data.data;if(this.groupProperties.id=parseInt(i.id),this.groupProperties.title=i.attributes.group_title??i.attributes.transactions[0].description,E(this.groupProperties.id,i.attributes.transactions)>0){this.notifications.wait.show=!0,this.notifications.wait.text=r.t("firefly.wait_attachments");return}this.showMessageOrRedirectUser()}).catch(o=>{this.submitting=!1,console.log(o),typeof o.response<"u"&&this.parseErrors(o.response.data)})},showMessageOrRedirectUser(){if(this.notifications.error.show=!1,this.notifications.success.show=!1,this.notifications.wait.show=!1,this.formStates.returnHereButton){this.notifications.success.show=!0,this.notifications.success.url="transactions/show/"+this.groupProperties.id,this.notifications.success.text=r.t("firefly.stored_journal_js",{description:this.groupProperties.title}),this.formStates.resetButton&&(this.entries=[],this.addSplit(),this.groupProperties.totalAmount=0);return}window.location="transactions/show/"+this.groupProperties.id+"?transaction_group_id="+this.groupProperties.id+"&message=created"},parseErrors(e){this.notifications.error.show=!0,this.notifications.success.show=!1,this.notifications.wait.show=!1,this.formStates.isSubmitting=!1,this.notifications.error.text=r.t("firefly.errors_submission_v2",{errorMessage:e.message}),e.hasOwnProperty("errors")&&(this.entries=L(e.errors,this.entries))},addSplit(){this.entries.push(b()),setTimeout(()=>{B.init("select.ac-tags",{allowClear:!0,server:a.tag,liveServer:!0,clearEnd:!0,allowNew:!0,notFoundMessage:r.t("firefly.nothing_found"),noCache:!0,fetchOptions:{headers:{"X-CSRF-TOKEN":document.head.querySelector('meta[name="csrf-token"]').content}}});const e=this.entries.length-1;z(e);const t=function(s,o,i){return s.name_with_balance+'<br><small class="text-muted">'+r.t("firefly.account_type_"+s.type)+"</small>"};c({selector:"input.ac-source",serverUrl:a.account,onChange:S,onSelectItem:D,hiddenValue:this.entries[e].source_account.alpine_name}),c({selector:"input.ac-dest",serverUrl:a.account,filters:this.filters.destination,onRenderItem:t,onChange:A,onSelectItem:k}),c({selector:"input.ac-category",serverUrl:a.category,valueField:"id",labelField:"name",onChange:h,onSelectItem:h}),c({selector:"input.ac-description",serverUrl:a.description,valueField:"id",labelField:"description",onChange:p,onSelectItem:p})},150)},removeSplit(e){this.entries.splice(e,1),document.querySelector("#split-0-tab").click()},clearLocation(e){e.preventDefault();const t=e.currentTarget,s=parseInt(t.attributes["data-index"].value);this.entries[s].hasLocation=!1,this.entries[s].latitude=null,this.entries[s].longitude=null,this.entries[s].zoomLevel=null;const o=new CustomEvent("location-remove",{detail:{index:s}});return document.dispatchEvent(o),!1}}},g={transactions:I,dates:y};function f(){Object.keys(g).forEach(e=>{console.log(`Loading page component "${e}"`);let t=g[e]();Alpine.data(e,()=>t)}),Alpine.start()}document.addEventListener("firefly-iii-bootstrapped",()=>{console.log("Loaded through event listener."),f()});window.bootstrapped&&(console.log("Loaded through window variable."),f());
