(window.webpackJsonp=window.webpackJsonp||[]).push([[9],{422:function(t,e,s){t.exports=s(431)},431:function(t,e,s){"use strict";s.r(e);var i=s(17),n=s(39),a=s(22),r=s(38),o=s(40),c=s(7),d=s(41),l={name:"Edit",created:function(){var t=window.location.pathname.split("/");this.groupId=parseInt(t[t.length-1]),this.getTransactionGroup(),this.getAllowedOpposingTypes(),this.getCustomFields()},data:function(){return{successMessage:"",errorMessage:"",warningMessage:"",transactions:[],originalTransactions:[],groupTitle:"",originalGroupTitle:"",transactionType:"any",groupId:0,groupTitleErrors:[],customFields:{},returnedGroupId:0,returnedGroupTitle:"",date:new Date,time:new Date,originalDate:new Date,originalTime:new Date,submittedTransaction:!1,submittedLinks:!1,submittedAttachments:!1,inError:!1,allowedOpposingTypes:{},destinationAllowedTypes:[],sourceAllowedTypes:[],enableSubmit:!0,stayHere:!1}},components:{Alert:n.a,SplitPills:a.a,SplitForm:r.a,TransactionGroupTitle:o.a},watch:{submittedTransaction:function(){this.finalizeSubmit()},submittedLinks:function(){this.finalizeSubmit()},submittedAttachments:function(){this.finalizeSubmit()}},methods:{getTransactionGroup:function(){var t=this;axios.get("./api/v1/transactions/"+this.groupId).then((function(e){t.parseTransactionGroup(e.data)})).catch((function(t){}))},parseTransactionGroup:function(t){var e=t.data.attributes,s=e.transactions.reverse();for(var i in this.groupTitle=e.group_title,this.originalGroupTitle=e.group_title,s)if(s.hasOwnProperty(i)&&/^0$|^[1-9]\d*$/.test(i)&&i<=4294967294){var n=this.parseTransaction(parseInt(i),s[i]);this.transactions.push(n),this.originalTransactions.push(d(n)),this.parseLinks(parseInt(n.transaction_journal_id),parseInt(i))}},parseTransaction:function(t,e){var s;0===t&&(this.transactionType=e.type.charAt(0).toUpperCase()+e.type.slice(1),this.sourceAllowedTypes=[e.source_type],this.destinationAllowedTypes=[e.destination_type],this.date=new Date(e.date),this.time=new Date(e.date),this.originalDate=new Date(e.date),this.originalTime=new Date(e.date));var i=Object(c.b)();return i.description=e.description,i.transaction_journal_id=parseInt(e.transaction_journal_id),i.source_account_id=e.source_id,i.source_account_name=e.source_name,i.source_account_type=e.source_type,i.destination_account_id=e.destination_id,i.destination_account_name=e.destination_name,i.destination_account_type=e.destination_type,i.amount=e.amount,i.currency_id=e.currency_id,i.foreign_amount=e.foreign_amount,i.foreign_currency_id=e.foreign_currency_id,i.category=e.category_name,i.budget_id=e.budget_id,i.bill_id=null!==(s=e.bill_id)&&void 0!==s?s:0,i.tags=e.tags,i.interest_date=e.interest_date?e.interest_date.substr(0,10):"",i.book_date=e.book_date?e.book_date.substr(0,10):"",i.process_date=e.process_date?e.process_date.substr(0,10):"",i.due_date=e.due_date?e.due_date.substr(0,10):"",i.payment_date=e.payment_date?e.payment_date.substr(0,10):"",i.invoice_date=e.invoice_date?e.invoice_date.substr(0,10):"",i.internal_reference=e.internal_reference,i.external_url=e.external_uri,i.external_id=e.external_id,i.notes=e.notes,i.location={zoom_level:e.zoom_level,longitude:e.longitude,latitude:e.latitude},i.zoom_level=e.zoom_level,i.longitude=e.longitude,i.latitude=e.latitude,i.errors=Object(c.a)(),i},parseLinks:function(t,e){var s=this;axios.get("./api/v1/transaction-journals/"+t+"/links").then((function(i){var n=i.data.data;for(var a in n)n.hasOwnProperty(a)&&/^0$|^[1-9]\d*$/.test(a)&&a<=4294967294&&s.parseLink(n[a],t,e)}))},parseLink:function(t,e,s){var i=this,n=[],a=parseInt(t.attributes.inward_id),r="inward";a===e&&(a=parseInt(t.attributes.outward_id),r="outward"),n.push(new Promise((function(i){i({link:t,journalId:e,opposingId:a,index:s,direction:r})}))),n.push(axios.get("./api/v1/transaction-journals/"+a)),n.push(axios.get("./api/v1/transaction_links/"+t.attributes.link_type_id)),Promise.all(n).then((function(e){var s=e[1].data.data.attributes.transactions,n=e[0].opposingId,a={};for(var r in s)s.hasOwnProperty(r)&&/^0$|^[1-9]\d*$/.test(r)&&r<=4294967294&&s[r].transaction_journal_id===n&&(a=s[r]);var o=e[0].index,c=e[0].direction,d=e[2].data.data.id,l={id:t.id,link_type_id:d+"-"+c,transaction_group_id:e[1].data.data.id,transaction_journal_id:a.transaction_journal_id,description:a.description,type:a.type,currency_code:a.currency_code,amount:a.amount};i.transactions[o].links.push(l),i.originalTransactions[o].links.push(l)}))},getAllowedOpposingTypes:function(){var t=this;axios.get("./api/v1/configuration/firefly.allowed_opposing_types").then((function(e){t.allowedOpposingTypes=e.data.data.value}))},getCustomFields:function(){var t=this;axios.get("./api/v1/preferences/transaction_journal_optional_fields").then((function(e){t.customFields=e.data.data.attributes.data}))},uploadedAttachment:function(t){console.log("event: uploadedAttachment"),console.log(t)},storeLocation:function(t){this.transactions[t.index].zoom_level=t.zoomLevel,this.transactions[t.index].longitude=t.lng,this.transactions[t.index].latitude=t.lat},storeAccountValue:function(t){var e=t.direction,s=t.index;this.transactions[s][e+"_account_id"]=t.id,this.transactions[s][e+"_account_type"]=t.type,this.transactions[s][e+"_account_name"]=t.name},storeDate:function(t){this.date=t.date},storeTime:function(t){this.time=t.time},storeField:function(t){var e=t.field;"category"===e&&(e="category_name"),this.transactions[t.index][e]=t.value},removeTransaction:function(t){this.transactions.splice(t.index,1),this.originalTransactions=[]},storeGroupTitle:function(t){this.groupTitle=t},selectedAttachments:function(t){for(var e in this.transactions)this.transactions.hasOwnProperty(e)&&/^0$|^[1-9]\d*$/.test(e)&&e<=4294967294&&parseInt(this.transactions[e].transaction_journal_id)===parseInt(t)&&(this.transactions[e].selectedAttachments=!0)},addTransaction:function(){var t=Object(c.b)();t.errors=Object(c.a)(),this.transactions.push(t)},submitTransaction:function(){var t={transactions:[]},e=!1,s=!1,i=!1;this.groupTitle!==this.originalGroupTitle&&(t.group_title=this.groupTitle,e=!0);var n=this.originalTransactions.length;for(var a in this.transactions)if(this.transactions.hasOwnProperty(a)&&/^0$|^[1-9]\d*$/.test(a)&&a<=4294967294){var r=this.transactions[a],o=this.originalTransactions.hasOwnProperty(a)?this.originalTransactions[a]:{},l={},u=["description","source_account_id","source_account_name","destination_account_id","destination_account_name","amount","foreign_amount","foreign_currency_id","category_name","budget_id","bill_id","interest_date","book_date","due_date","payment_date","invoice_date","external_url","internal_reference","external_id","notes","zoom_level","longitude","latitude"];for(var p in u)if(u.hasOwnProperty(p)&&/^0$|^[1-9]\d*$/.test(p)&&p<=4294967294){var h=u[p];r[h]!==o[h]&&(l[h]=r[h],e=!0)}0!==r.piggy_bank_id&&(l.piggy_bank_id=r.piggy_bank_id,e=!0),JSON.stringify(r.tags)!==JSON.stringify(o.tags)&&(l.tags=r.tags,e=!0),this.compareLinks(r.links)!==this.compareLinks(o.links)&&(s=!0),void 0!==r.selectedAttachments&&!0===r.selectedAttachments&&(i=!0);var _="invalid";if(this.date.toISOString()!==this.originalDate.toISOString()||this.time.toISOString()!==this.originalTime.toISOString()){console.log("Date and/or time is changed"),e=!0;var g=this.date;g.setHours(this.time.getHours()),g.setMinutes(this.time.getMinutes()),g.setSeconds(this.time.getSeconds()),_=Object(c.c)(g),l.date=_}(0===Object.keys(l).length&&n>1||0!==Object.keys(l).length)&&(l.transaction_journal_id=o.transaction_journal_id,t.transactions.push(d(l)),e=!0)}console.log("submitTransaction"),console.log("shouldUpload : "+i),console.log("shouldLinks  : "+s),console.log("shouldSubmit : "+e),e&&this.submitUpdate(t,s,i),e||(this.submittedTransaction=!0),s||(this.submittedLinks=!0),i||(this.submittedAttachments=!0),!e&&s&&this.submitTransactionLinks(),console.log("Done with submit methd.")},compareLinks:function(t){var e=[];for(var s in t)t.hasOwnProperty(s)&&/^0$|^[1-9]\d*$/.test(s)&&s<=4294967294&&e.push({amount:t[s].amount,currency_code:t[s].currency_code,description:t[s].description,link_type_id:t[s].link_type_id,transaction_group_id:t[s].transaction_group_id,type:t[s].type});return JSON.stringify(e)},submitUpdate:function(t,e,s){var i=this;console.log("submitUpdate"),this.inError=!1;var n="./api/v1/transactions/"+this.groupId;console.log(t),axios.put(n,t).then((function(t){console.log("Response is OK!"),i.submittedTransaction=!0,e&&(console.log("Need to update links."),i.submitTransactionLinks()),e||console.log("No need to update links."),i.returnedGroupId=parseInt(t.data.data.id),i.returnedGroupTitle=null===t.data.data.attributes.group_title?t.data.data.attributes.transactions[0].description:t.data.data.attributes.group_title})).catch((function(t){console.log("error :("),console.log(t.response.data),i.enableSubmit=!0,i.submittedTransaction=!0,i.submittedAttachments=!0,i.submittedLinks=!0,i.inError=!0,i.parseErrors(t.response.data)}))},parseErrors:function(t){for(var e in this.transactions)this.transactions.hasOwnProperty(e)&&/^0$|^[1-9]\d*$/.test(e)&&e<=4294967294&&this.resetErrors({index:e});var s,i,n;for(var a in this.successMessage="",this.errorMessage=this.$t("firefly.errors_submission"),void 0===t.errors&&(this.successMessage="",this.errorMessage=t.message),t.errors)if(t.errors.hasOwnProperty(a)){if("group_title"===a){this.groupTitleErrors=t.errors[a];continue}if("group_title"!==a)switch(i=parseInt(a.split(".")[1]),n=a.split(".")[2]){case"amount":case"description":case"date":case"tags":s={index:i,field:n,errors:t.errors[a]},this.setTransactionError(s);break;case"budget_id":s={index:i,field:"budget",errors:t.errors[a]},this.setTransactionError(s);break;case"bill_id":s={index:i,field:"bill",errors:t.errors[a]},this.setTransactionError(s);break;case"piggy_bank_id":s={index:i,field:"piggy_bank",errors:t.errors[a]},this.setTransactionError(s);break;case"category_name":s={index:i,field:"category",errors:t.errors[a]},this.setTransactionError(s);break;case"source_name":case"source_id":s={index:i,field:"source",errors:t.errors[a]},this.setTransactionError(s);break;case"destination_name":case"destination_id":s={index:i,field:"destination",errors:t.errors[a]},this.setTransactionError(s);break;case"foreign_amount":case"foreign_currency":s={index:i,field:"foreign_amount",errors:t.errors[a]},this.setTransactionError(s)}this.transactions[i]}},setTransactionError:function(t){this.transactions[t.index].errors[t.field]=t.errors},resetErrors:function(t){this.transactions[t.index].errors=d(Object(c.a)())},deleteOriginalLinks:function(t){for(var e in console.log(t.links),t.links)if(t.links.hasOwnProperty(e)&&/^0$|^[1-9]\d*$/.test(e)&&e<=4294967294){var s="/api/v1/transaction_links/"+t.links[e].id;axios.delete(s).then((function(t){}))}},submitTransactionLinks:function(){var t=0,e=[];for(var s in console.log("submitTransactionLinks()"),this.transactions)if(this.transactions.hasOwnProperty(s)&&/^0$|^[1-9]\d*$/.test(s)&&s<=4294967294){var i=this.transactions[s],n=this.originalTransactions.hasOwnProperty(s)?this.originalTransactions[s]:{},a=this.compareLinks(i.links),r=this.compareLinks(n.links);if(a!==r)for(var o in"[]"!==r&&this.deleteOriginalLinks(n),console.log("links are different!"),i.links)if(i.links.hasOwnProperty(o)&&/^0$|^[1-9]\d*$/.test(o)&&o<=4294967294){var c=i.links[o],d={inward_id:i.transaction_journal_id,outward_id:i.transaction_journal_id,link_type_id:"something"},l=c.link_type_id.split("-");d.link_type_id=l[0],"inward"===l[1]&&(d.inward_id=c.transaction_journal_id),"outward"===l[1]&&(d.outward_id=c.transaction_journal_id),console.log(d),t++,e.push(axios.post("./api/v1/transaction_links",d).then((function(t){})))}}0!==t?Promise.all(e).then((function(){this.submittedLinks=!0})):this.submittedLinks=!0},finalizeSubmit:function(){if(console.log("now in finalizeSubmit()"),console.log("submittedTransaction : "+this.submittedTransaction),console.log("submittedLinks       : "+this.submittedLinks),console.log("submittedAttachments : "+this.submittedAttachments),this.submittedTransaction&&this.submittedAttachments&&this.submittedLinks){var t,e;if(console.log("all true"),console.log("inError         = "+this.inError),console.log("stayHere        = "+this.stayHere),console.log("returnedGroupId = "+this.returnedGroupId),!0===this.stayHere&&!1===this.inError&&0===this.returnedGroupId&&(console.log("no error + no changes + no redirect"),this.errorMessage="",this.successMessage="",this.warningMessage=this.$t("firefly.transaction_updated_no_changes",{ID:this.returnedGroupId,title:this.returnedGroupTitle})),!1===this.stayHere&&!1===this.inError&&0===this.returnedGroupId)console.log("no error + no changes + redirect"),window.location.href=(null!==(t=window.previousURL)&&void 0!==t?t:"/")+"?transaction_group_id="+this.groupId+"&message=no_change";if(!0===this.stayHere&&!1===this.inError&&0!==this.returnedGroupId&&(console.log("no error + changes + redirect"),this.errorMessage="",this.warningMessage="",this.successMessage=this.$t("firefly.transaction_updated_link",{ID:this.returnedGroupId,title:this.returnedGroupTitle})),!1===this.stayHere&&!1===this.inError&&0!==this.returnedGroupId)console.log("no error + changes + redirect"),window.location.href=(null!==(e=window.previousURL)&&void 0!==e?e:"/")+"?transaction_group_id="+this.groupId+"&message=updated";for(var s in console.log("end of the line"),this.enableSubmit=!0,this.submittedTransaction=!1,this.submittedLinks=!1,this.submittedAttachments=!1,this.inError=!1,this.transactions)this.transactions.hasOwnProperty(s)&&/^0$|^[1-9]\d*$/.test(s)&&s<=4294967294&&this.transactions.hasOwnProperty(s)}}}},u=s(1),p=Object(u.a)(l,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("Alert",{attrs:{message:t.errorMessage,type:"danger"}}),t._v(" "),s("Alert",{attrs:{message:t.successMessage,type:"success"}}),t._v(" "),s("Alert",{attrs:{message:t.warningMessage,type:"warning"}}),t._v(" "),s("SplitPills",{attrs:{transactions:t.transactions}}),t._v(" "),s("div",{staticClass:"tab-content"},t._l(this.transactions,(function(e,i){return s("SplitForm",{key:i,attrs:{count:t.transactions.length,transaction:e,"allowed-opposing-types":t.allowedOpposingTypes,"custom-fields":t.customFields,date:t.date,time:t.time,index:i,"transaction-type":t.transactionType,"destination-allowed-types":t.destinationAllowedTypes,"source-allowed-types":t.sourceAllowedTypes,"allow-switch":!1,"submitted-transaction":t.submittedTransaction},on:{"uploaded-attachments":function(e){return t.uploadedAttachment(e)},"set-marker-location":function(e){return t.storeLocation(e)},"set-account":function(e){return t.storeAccountValue(e)},"set-date":function(e){return t.storeDate(e)},"set-time":function(e){return t.storeTime(e)},"set-field":function(e){return t.storeField(e)},"remove-transaction":function(e){return t.removeTransaction(e)},"selected-attachments":function(e){return t.selectedAttachments(e)}}})})),1),t._v(" "),s("div",{staticClass:"row"},[s("div",{staticClass:"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"},[t.transactions.length>1?s("div",{staticClass:"card"},[s("div",{staticClass:"card-body"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col"},[s("TransactionGroupTitle",{attrs:{errors:this.groupTitleErrors},on:{"set-group-title":function(e){return t.storeGroupTitle(e)}},model:{value:this.groupTitle,callback:function(e){t.$set(this,"groupTitle",e)},expression:"this.groupTitle"}})],1)])])]):t._e()]),t._v(" "),s("div",{staticClass:"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-body"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col"},[s("div",{staticClass:"text-xs d-none d-lg-block d-xl-block"},[t._v("\n                 \n              ")]),t._v(" "),s("button",{staticClass:"btn btn-outline-primary btn-block",on:{click:t.addTransaction}},[s("i",{staticClass:"far fa-clone"}),t._v(" "+t._s(t.$t("firefly.add_another_split"))+"\n              ")])]),t._v(" "),s("div",{staticClass:"col"},[s("div",{staticClass:"text-xs d-none d-lg-block d-xl-block"},[t._v("\n                 \n              ")]),t._v(" "),s("button",{staticClass:"btn btn-info btn-block",attrs:{disabled:!t.enableSubmit},on:{click:t.submitTransaction}},[t.enableSubmit?s("span",[s("i",{staticClass:"far fa-save"}),t._v(" "+t._s(t.$t("firefly.update_transaction")))]):t._e(),t._v(" "),t.enableSubmit?t._e():s("span",[s("i",{staticClass:"fas fa-spinner fa-spin"})])])])]),t._v(" "),s("div",{staticClass:"row"},[s("div",{staticClass:"col"},[t._v("\n               \n            ")]),t._v(" "),s("div",{staticClass:"col"},[s("div",{staticClass:"form-check"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.stayHere,expression:"stayHere"}],staticClass:"form-check-input",attrs:{id:"stayHere",type:"checkbox"},domProps:{checked:Array.isArray(t.stayHere)?t._i(t.stayHere,null)>-1:t.stayHere},on:{change:function(e){var s=t.stayHere,i=e.target,n=!!i.checked;if(Array.isArray(s)){var a=t._i(s,null);i.checked?a<0&&(t.stayHere=s.concat([null])):a>-1&&(t.stayHere=s.slice(0,a).concat(s.slice(a+1)))}else t.stayHere=n}}}),t._v(" "),s("label",{staticClass:"form-check-label",attrs:{for:"stayHere"}},[s("span",{staticClass:"small"},[t._v(t._s(t.$t("firefly.after_update_create_another")))])])])])])])])])])],1)}),[],!1,null,"7b268106",null).exports,h=s(2),_=s.n(h);s(16),_.a.config.productionTip=!1;var g=s(19),m={};new _.a({i18n:g,store:i.a,render:function(t){return t(p,{props:m})},beforeCreate:function(){this.$store.commit("initialiseStore"),this.$store.dispatch("updateCurrencyPreference")}}).$mount("#transactions_edit")}},[[422,0,1]]]);
//# sourceMappingURL=edit.js.map