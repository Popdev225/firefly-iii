(window.webpackJsonp=window.webpackJsonp||[]).push([[8],{333:function(t,e,i){t.exports=i(459)},459:function(t,e,i){"use strict";i.r(e);var n=i(34),s=i(14),a=i(67),r=i(46),o=i(68),c=i(66),d=i(29);function u(t,e){var i=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),i.push.apply(i,n)}return i}function l(t){for(var e=1;e<arguments.length;e++){var i=null!=arguments[e]?arguments[e]:{};e%2?u(Object(i),!0).forEach((function(e){p(t,e,i[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(i)):u(Object(i)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(i,e))}))}return t}function p(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}var h=Object(s.b)("transactions/create"),_=(h.mapState,h.mapGetters),f=(h.mapActions,h.mapMutations),m={name:"Create",components:{SplitForm:c.a,Alert:a.a,SplitPills:r.a,TransactionGroupTitle:o.a},created:function(){this.getAllowedOpposingTypes(),this.getAccountToTransaction(),this.getCustomFields(),this.addTransaction()},data:function(){return{errorMessage:"",successMessage:"",customFields:{},enableSubmit:!0,createAnother:!1,resetFormAfter:!1,submittedTransaction:!1,submittedLinks:!1,submittedAttachments:!1,inError:!1,submittedAttCount:{},groupTitleErrors:[],returnedGroupId:0,returnedGroupTitle:"",accountToTransaction:{},allowedOpposingTypes:{},defaultSourceAllowedTypes:["Asset account","Loan","Debt","Mortgage","Revenue account"],defaultDestinationAllowedTypes:["Asset account","Loan","Debt","Mortgage","Expense account"],sourceAllowedTypes:["Asset account","Loan","Debt","Mortgage","Revenue account"],destinationAllowedTypes:["Asset account","Loan","Debt","Mortgage","Expense account"],date:new Date,time:new Date}},computed:l({},_(["transactionType","transactions","groupTitle"])),watch:{submittedTransaction:function(){this.finalizeSubmit()},submittedLinks:function(){this.finalizeSubmit()},submittedAttachments:function(){this.finalizeSubmit()}},methods:l(l({},f(["setGroupTitle","addTransaction","deleteTransaction","setTransactionError","setTransactionType","resetErrors","updateField","resetTransactions"])),{},{removeTransaction:function(t){this.$store.commit("transactions/create/deleteTransaction",t)},finalizeSubmit:function(){var t=this;if(this.submittedTransaction&&this.submittedAttachments&&this.submittedLinks){var e;if(!1===this.createAnother&&!1===this.inError)return void(window.location.href=(null!==(e=window.previousURL)&&void 0!==e?e:"/")+"?transaction_group_id="+this.returnedGroupId+"&message=created");for(var i in!1===this.inError&&(this.errorMessage="",this.successMessage=this.$t("firefly.transaction_stored_link",{ID:this.returnedGroupId,title:this.returnedGroupTitle})),this.enableSubmit=!0,this.submittedTransaction=!1,this.submittedLinks=!1,this.submittedAttachments=!1,this.inError=!1,this.transactions)this.transactions.hasOwnProperty(i)&&/^0$|^[1-9]\d*$/.test(i)&&i<=4294967294&&this.transactions.hasOwnProperty(i)&&this.updateField({index:i,field:"transaction_journal_id",value:0});this.submittedAttCount=[],this.resetFormAfter&&(this.resetTransactions(),setTimeout((function(){return t.addTransaction()}),50))}},submitTransaction:function(){var t=this;this.enableSubmit=!1;var e=this.convertData();axios.post("./api/v1/transactions",e).then((function(i){t.submittedTransaction=!0,t.submitTransactionLinks(e,i),t.submitAttachments(e,i),t.returnedGroupId=parseInt(i.data.data.id),t.returnedGroupTitle=null===i.data.data.attributes.group_title?i.data.data.attributes.transactions[0].description:i.data.data.attributes.group_title})).catch((function(e){t.enableSubmit=!0,t.submittedTransaction=!0,t.submittedAttachments=!0,t.submittedLinks=!0,t.inError=!0,t.parseErrors(e.response.data)}))},submitAttachments:function(t,e){var i=e.data.data.attributes.transactions;for(var n in t.transactions)t.transactions.hasOwnProperty(n)&&/^0$|^[1-9]\d*$/.test(n)&&n<=4294967294&&i.hasOwnProperty(n)&&this.updateField({index:n,field:"transaction_journal_id",value:i[n].transaction_journal_id})},uploadedAttachment:function(t){var e="str"+t;this.submittedAttCount[e]=1,Object.keys(this.submittedAttCount).length===this.transactions.length&&(this.submittedAttachments=!0)},storeLocation:function(t){var e=t.hasMarker?t.zoomLevel:null,i=t.hasMarker?t.lat:null,n=t.hasMarker?t.lng:null;this.updateField({index:t.index,field:"zoom_level",value:e}),this.updateField({index:t.index,field:"latitude",value:i}),this.updateField({index:t.index,field:"longitude",value:n})},storeAccountValue:function(t){this.updateField({index:t.index,field:t.direction+"_account_id",value:t.id}),this.updateField({index:t.index,field:t.direction+"_account_type",value:t.type}),this.updateField({index:t.index,field:t.direction+"_account_name",value:t.name}),this.updateField({index:t.index,field:t.direction+"_account_currency_id",value:t.currency_id}),this.updateField({index:t.index,field:t.direction+"_account_currency_code",value:t.currency_code}),this.updateField({index:t.index,field:t.direction+"_account_currency_symbol",value:t.currency_symbol}),this.calculateTransactionType(t.index)},storeField:function(t){this.updateField(t)},storeDate:function(t){this.date=t.date},storeTime:function(t){this.time=t.time},storeGroupTitle:function(t){this.setGroupTitle({groupTitle:t})},calculateTransactionType:function(t){if(0===t){var e=this.transactions[0].source_account_type,i=this.transactions[0].destination_account_type;if(null===e||null===i)return void this.setTransactionType("any");if(""===e||""===i)return void this.setTransactionType("any");var n=this.accountToTransaction[e];if(void 0!==n){var s=n[i];if(void 0!==n[i])return void this.setTransactionType(s)}"Asset account"!==e&&this.updateField({index:0,field:"destination_account_id",value:null}),"Asset account"!==i&&this.updateField({index:0,field:"source_account_id",value:null}),this.setTransactionType("any")}},submitTransactionLinks:function(t,e){var i=[],n=e.data.data.attributes.transactions,s=0;for(var a in t.transactions)if(t.transactions.hasOwnProperty(a)&&/^0$|^[1-9]\d*$/.test(a)&&a<=4294967294){var r=t.transactions[a];if(n.hasOwnProperty(a)){var o=n[a];for(var c in r.links)if(r.links.hasOwnProperty(c)&&/^0$|^[1-9]\d*$/.test(c)&&c<=4294967294){var d=r.links[c];s++,0===d.outward_id&&(d.outward_id=o.transaction_journal_id),0===d.inward_id&&(d.inward_id=o.transaction_journal_id),i.push(axios.post("./api/v1/transaction_links",d).then((function(t){})))}}}0!==s?Promise.all(i).then((function(){this.submittedLinks=!0})):this.submittedLinks=!0},parseErrors:function(t){for(var e in this.transactions)this.resetErrors({index:e});var i,n,s;for(var a in this.successMessage="",this.errorMessage=this.$t("firefly.errors_submission"),void 0===t.errors&&(this.successMessage="",this.errorMessage=t.message),t.errors)if(t.errors.hasOwnProperty(a)){if("group_title"===a){this.groupTitleErrors=t.errors[a];continue}if("group_title"!==a)switch(n=parseInt(a.split(".")[1]),s=a.split(".")[2]){case"amount":case"description":case"date":case"tags":i={index:n,field:s,errors:t.errors[a]},this.setTransactionError(i);break;case"budget_id":i={index:n,field:"budget",errors:t.errors[a]},this.setTransactionError(i);break;case"bill_id":i={index:n,field:"bill",errors:t.errors[a]},this.setTransactionError(i);break;case"piggy_bank_id":i={index:n,field:"piggy_bank",errors:t.errors[a]},this.setTransactionError(i);break;case"category_name":i={index:n,field:"category",errors:t.errors[a]},this.setTransactionError(i);break;case"source_name":case"source_id":i={index:n,field:"source",errors:t.errors[a]},this.setTransactionError(i);break;case"destination_name":case"destination_id":i={index:n,field:"destination",errors:t.errors[a]},this.setTransactionError(i);break;case"foreign_amount":case"foreign_currency":i={index:n,field:"foreign_amount",errors:t.errors[a]},this.setTransactionError(i)}this.transactions[n]}},convertData:function(){var t={transactions:[]};for(var e in this.groupTitle.length>0&&(t.group_title=this.groupTitle),this.transactions)this.transactions.hasOwnProperty(e)&&/^0$|^[1-9]\d*$/.test(e)&&e<=4294967294&&t.transactions.push(this.convertSplit(e,this.transactions[e]));return t.transactions.length>1&&""!==t.transactions[0].description&&(t.group_title=t.transactions[0].description),t.transactions.length>1&&(t=this.synchronizeAccounts(t)),t},synchronizeAccounts:function(t){for(var e in t.transactions)t.transactions.hasOwnProperty(e)&&/^0$|^[1-9]\d*$/.test(e)&&e<=4294967294&&("Transfer"===this.transactionType&&(t.transactions[e].source_name=null,t.transactions[e].destination_name=null,e>0&&(t.transactions[e].source_id=t.transactions[0].source_id,t.transactions[e].destination_id=t.transactions[0].destination_id)),"Deposit"===this.transactionType&&(t.transactions[e].destination_name=null,e>0&&(t.transactions[e].destination_id=t.transactions[0].destination_id)),"Withdrawal"===this.transactionType&&(t.transactions[e].source_name=null,e>0&&(t.transactions[e].source_id=t.transactions[0].source_id)));return t},switchAccounts:function(t){var e=this.transactions[t].source_account_id,i=this.transactions[t].source_account_name,n=this.transactions[t].source_account_type,s=this.transactions[t].destination_account_id,a=this.transactions[t].destination_account_name,r=this.transactions[t].destination_account_type;this.updateField({index:0,field:"source_account_id",value:s}),this.updateField({index:0,field:"source_account_name",value:a}),this.updateField({index:0,field:"source_account_type",value:r}),this.updateField({index:0,field:"destination_account_id",value:e}),this.updateField({index:0,field:"destination_account_name",value:i}),this.updateField({index:0,field:"destination_account_type",value:n}),this.calculateTransactionType(0)},convertSplit:function(t,e){var i,n,s,a,r="invalid";if(this.time instanceof Date&&!isNaN(this.time)&&this.date instanceof Date&&!isNaN(this.date)){var o=new Date(this.date);o.setHours(this.time.getHours()),o.setMinutes(this.time.getMinutes()),o.setSeconds(this.time.getSeconds()),r=Object(d.c)(o)}var c,u,l,p={description:e.description,date:r,type:this.transactionType,source_id:null!==(i=e.source_account_id)&&void 0!==i?i:null,source_name:null!==(n=e.source_account_name)&&void 0!==n?n:null,destination_id:null!==(s=e.destination_account_id)&&void 0!==s?s:null,destination_name:null!==(a=e.destination_account_name)&&void 0!==a?a:null,currency_id:e.currency_id,amount:e.amount,budget_id:e.budget_id,category_name:e.category,tags:e.tags,interest_date:e.interest_date,book_date:e.book_date,process_date:e.process_date,due_date:e.due_date,payment_date:e.payment_date,invoice_date:e.invoice_date,internal_reference:e.internal_reference,external_url:e.external_url,notes:e.notes,external_id:e.external_id,zoom_level:e.zoom_level,longitude:e.longitude,latitude:e.latitude,order:0,reconciled:!1};0!==e.piggy_bank_id&&(p.piggy_bank_id=e.piggy_bank_id),0!==e.bill_id&&(p.bill_id=e.bill_id),0!==e.foreign_currency_id&&""!==e.foreign_amount&&(p.foreign_currency_id=e.foreign_currency_id),""!==e.foreign_amount&&(p.foreign_amount=e.foreign_amount),c=this.transactionType?this.transactionType.toLowerCase():"any",u=this.transactions[0].source_account_type,l=this.transactions[0].destination_account_type,p.currency_id=e.source_account_currency_id,"any"===c&&["asset","Asset account","Loan","Debt","Mortgage"].includes(u)&&(c="withdrawal"),"any"===c&&["asset","Asset account","Loan","Debt","Mortgage"].includes(l)&&(c="deposit",p.currency_id=e.destination_account_currency_id),p.type=c;var h=[];for(var _ in e.links)if(e.links.hasOwnProperty(_)&&/^0$|^[1-9]\d*$/.test(_)&&_<=4294967294){var f=e.links[_],m=f.link_type_id.split("-"),v="outward"===m[1]?0:parseInt(f.transaction_journal_id),y="inward"===m[1]?0:parseInt(f.transaction_journal_id),b={link_type_id:parseInt(m[0]),inward_id:v,outward_id:y};h.push(b)}return p.links=h,p},getAllowedOpposingTypes:function(){var t=this;axios.get("./api/v1/configuration/firefly.allowed_opposing_types").then((function(e){t.allowedOpposingTypes=e.data.data.value}))},getAccountToTransaction:function(){var t=this;axios.get("./api/v1/configuration/firefly.account_to_transaction").then((function(e){t.accountToTransaction=e.data.data.value}))},getCustomFields:function(){var t=this;axios.get("./api/v1/preferences/transaction_journal_optional_fields").then((function(e){t.customFields=e.data.data.attributes.data}))},setDestinationAllowedTypes:function(t){0!==t.length?this.destinationAllowedTypes=t:this.destinationAllowedTypes=this.defaultDestinationAllowedTypes},setSourceAllowedTypes:function(t){0!==t.length?this.sourceAllowedTypes=t:this.sourceAllowedTypes=this.defaultSourceAllowedTypes}})},v=i(4),y=Object(v.a)(m,(function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("alert",{attrs:{message:t.errorMessage,type:"danger"}}),t._v(" "),i("alert",{attrs:{message:t.successMessage,type:"success"}}),t._v(" "),i("SplitPills",{attrs:{transactions:t.transactions}}),t._v(" "),i("div",{staticClass:"tab-content"},t._l(this.transactions,(function(e,n){return i("SplitForm",{key:n,attrs:{"allowed-opposing-types":t.allowedOpposingTypes,count:t.transactions.length,"custom-fields":t.customFields,date:t.date,"destination-allowed-types":t.destinationAllowedTypes,index:n,"source-allowed-types":t.sourceAllowedTypes,"submitted-transaction":t.submittedTransaction,time:t.time,transaction:e,"transaction-type":t.transactionType},on:{"uploaded-attachments":function(e){return t.uploadedAttachment(e)},"set-marker-location":function(e){return t.storeLocation(e)},"set-account":function(e){return t.storeAccountValue(e)},"switch-accounts":function(e){return t.switchAccounts(e)},"set-date":function(e){return t.storeDate(e)},"set-time":function(e){return t.storeTime(e)},"set-field":function(e){return t.storeField(e)},"remove-transaction":function(e){return t.removeTransaction(e)},"set-dest-types":function(e){return t.setDestinationAllowedTypes(e)},"set-src-types":function(e){return t.setSourceAllowedTypes(e)}}})})),1),t._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"},[t.transactions.length>1?i("div",{staticClass:"card"},[i("div",{staticClass:"card-body"},[i("div",{staticClass:"row"},[i("div",{staticClass:"col"},[i("TransactionGroupTitle",{attrs:{errors:this.groupTitleErrors},on:{"set-group-title":function(e){return t.storeGroupTitle(e)}},model:{value:this.groupTitle,callback:function(e){t.$set(this,"groupTitle",e)},expression:"this.groupTitle"}})],1)])])]):t._e()]),t._v(" "),i("div",{staticClass:"col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"},[i("div",{staticClass:"card card-primary"},[i("div",{staticClass:"card-body"},[i("div",{staticClass:"row"},[i("div",{staticClass:"col"},[i("div",{staticClass:"text-xs d-none d-lg-block d-xl-block"},[t._v("\n                 \n              ")]),t._v(" "),i("button",{staticClass:"btn btn-outline-primary btn-block",on:{click:t.addTransaction}},[i("i",{staticClass:"far fa-clone"}),t._v(" "+t._s(t.$t("firefly.add_another_split"))+"\n              ")])]),t._v(" "),i("div",{staticClass:"col"},[i("div",{staticClass:"text-xs d-none d-lg-block d-xl-block"},[t._v("\n                 \n              ")]),t._v(" "),i("button",{staticClass:"btn btn-success btn-block",attrs:{disabled:!t.enableSubmit},on:{click:t.submitTransaction}},[t.enableSubmit?i("span",[i("i",{staticClass:"far fa-save"}),t._v(" "+t._s(t.$t("firefly.store_transaction")))]):t._e(),t._v(" "),t.enableSubmit?t._e():i("span",[i("i",{staticClass:"fas fa-spinner fa-spin"})])])])]),t._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col"},[t._v("\n               \n            ")]),t._v(" "),i("div",{staticClass:"col"},[i("div",{staticClass:"form-check"},[i("input",{directives:[{name:"model",rawName:"v-model",value:t.createAnother,expression:"createAnother"}],staticClass:"form-check-input",attrs:{id:"createAnother",type:"checkbox"},domProps:{checked:Array.isArray(t.createAnother)?t._i(t.createAnother,null)>-1:t.createAnother},on:{change:function(e){var i=t.createAnother,n=e.target,s=!!n.checked;if(Array.isArray(i)){var a=t._i(i,null);n.checked?a<0&&(t.createAnother=i.concat([null])):a>-1&&(t.createAnother=i.slice(0,a).concat(i.slice(a+1)))}else t.createAnother=s}}}),t._v(" "),i("label",{staticClass:"form-check-label",attrs:{for:"createAnother"}},[i("span",{staticClass:"small"},[t._v(t._s(t.$t("firefly.create_another")))])])]),t._v(" "),i("div",{staticClass:"form-check"},[i("input",{directives:[{name:"model",rawName:"v-model",value:t.resetFormAfter,expression:"resetFormAfter"}],staticClass:"form-check-input",attrs:{id:"resetFormAfter",disabled:!t.createAnother,type:"checkbox"},domProps:{checked:Array.isArray(t.resetFormAfter)?t._i(t.resetFormAfter,null)>-1:t.resetFormAfter},on:{change:function(e){var i=t.resetFormAfter,n=e.target,s=!!n.checked;if(Array.isArray(i)){var a=t._i(i,null);n.checked?a<0&&(t.resetFormAfter=i.concat([null])):a>-1&&(t.resetFormAfter=i.slice(0,a).concat(i.slice(a+1)))}else t.resetFormAfter=s}}}),t._v(" "),i("label",{staticClass:"form-check-label",attrs:{for:"resetFormAfter"}},[i("span",{staticClass:"small"},[t._v(t._s(t.$t("firefly.reset_after")))])])])])])])])])])],1)}),[],!1,null,"1b78c213",null).exports,b=i(10),g=i.n(b);i(41),g.a.config.productionTip=!1;var T=i(43),A={};new g.a({i18n:T,store:n.a,render:function(t){return t(y,{props:A})},beforeCreate:function(){this.$store.commit("initialiseStore"),this.$store.dispatch("updateCurrencyPreference")}}).$mount("#transactions_create")}},[[333,0,1]]]);
//# sourceMappingURL=create.js.map