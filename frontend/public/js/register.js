(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{212:function(s,t,i){s.exports=i(213)},213:function(s,t,i){"use strict";i.r(t);i(5),i(8);i(214)},214:function(s,t,i){window.$=window.jQuery=i(4),i(153)},5:function(s,t,i){"use strict";var a={name:"Dashboard",mounted:function(){console.log("Dashboard mounted.")}},e=i(1),n=Object(e.a)(a,(function(){var s=this,t=s.$createElement,i=s._self._c||t;return i("div",[i("top-boxes"),s._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-lg-12 col-md-12 col-sm-12 col-xs-12"},[i("main-account")],1)]),s._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-lg-12 col-md-12 col-sm-12 col-xs-12"},[i("main-account-list")],1)]),s._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-budget-chart")],1),s._v(" "),i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-category-chart")],1)]),s._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-debit-chart")],1),s._v(" "),i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-credit-chart")],1)]),s._v(" "),i("div",{staticClass:"row"},[i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-bills-chart")],1),s._v(" "),i("div",{staticClass:"col-lg-6 col-md-6 col-sm-12 col-xs-12"},[i("main-piggy-list")],1)])],1)}),[],!1,null,null,null);t.a=n.exports},8:function(s,t,i){"use strict";var a={name:"TopBoxes",data:function(){return{summary:[],balances:[],billsPaid:[],billsUnpaid:[],leftToSpend:[],netWorth:[]}},mounted:function(){this.prepareComponent()},methods:{prepareComponent:function(){var s=this;axios.get("./api/v1/summary/basic?start="+window.sessionStart+"&end="+window.sessionEnd).then((function(t){s.summary=t.data,s.buildComponent()}))},buildComponent:function(){this.getBalanceEntries(),this.getBillsEntries(),this.getLeftToSpend(),this.getNetWorth()},getBalanceEntries:function(){this.balances=this.getKeyedEntries("balance-in-")},getNetWorth:function(){this.netWorth=this.getKeyedEntries("net-worth-in-")},getLeftToSpend:function(){this.leftToSpend=this.getKeyedEntries("left-to-spend-in-")},getBillsEntries:function(){this.billsPaid=this.getKeyedEntries("bills-paid-in-"),this.billsUnpaid=this.getKeyedEntries("bills-unpaid-in-")},getKeyedEntries:function(s){var t=[];for(var i in this.summary)this.summary.hasOwnProperty(i)&&s===i.substr(0,s.length)&&t.push(this.summary[i]);return t}}},e=i(1),n=Object(e.a)(a,(function(){var s=this,t=s.$createElement,i=s._self._c||t;return i("div",{staticClass:"row"},[i("div",{staticClass:"col-md-3 col-sm-6 col-12"},[i("div",{staticClass:"info-box"},[s._m(0),s._v(" "),i("div",{staticClass:"info-box-content"},[i("span",{staticClass:"info-box-text"},[s._v(s._s(s.$t("firefly.balance")))]),s._v(" "),s.balances.length>0?i("span",{staticClass:"info-box-number"},[s._v(s._s(s.balances[0].value_parsed))]):s._e(),s._v(" "),s._m(1),s._v(" "),i("span",{staticClass:"progress-description"},s._l(s.balances,(function(t){return i("span",[s._v(s._s(t.sub_title)),i("br")])})),0)])])]),s._v(" "),i("div",{staticClass:"col-12 col-sm-6 col-md-3"},[i("div",{staticClass:"info-box"},[s._m(2),s._v(" "),i("div",{staticClass:"info-box-content"},[i("span",{staticClass:"info-box-text"},[i("span",[s._v(s._s(s.$t("firefly.bills_to_pay")))])]),s._v(" "),1===s.billsUnpaid.length&&s.billsPaid.length>0?i("span",{staticClass:"info-box-number"},[s._v(s._s(s.billsUnpaid[0].value_parsed))]):s._e(),s._v(" "),s._m(3),s._v(" "),i("span",{staticClass:"progress-description"},[1===s.billsUnpaid.length&&1===s.billsPaid.length?i("span",[s._v(s._s(s.$t("firefly.paid"))+": "+s._s(s.billsPaid[0].value_parsed))]):s._e(),s._v(" "),s.billsUnpaid.length>1?i("span",s._l(s.billsUnpaid,(function(t,a){return i("span",{key:t.key},[s._v("\n                            "+s._s(t.value_parsed)),a+1!==s.billsUnpaid.length?i("span",[s._v(", ")]):s._e()])})),0):s._e()])])])]),s._v(" "),i("div",{staticClass:"clearfix hidden-md-up"}),s._v(" "),i("div",{staticClass:"col-12 col-sm-6 col-md-3"},[i("div",{staticClass:"info-box"},[s._m(4),s._v(" "),i("div",{staticClass:"info-box-content"},[i("span",{staticClass:"info-box-text"},[i("span",[s._v(s._s(s.$t("firefly.left_to_spend")))])]),s._v(" "),s.leftToSpend.length>0?i("span",{staticClass:"info-box-number"},[s._v(s._s(s.leftToSpend[0].value_parsed))]):s._e(),s._v(" "),s._m(5),s._v(" "),i("span",{staticClass:"progress-description"},s._l(s.leftToSpend,(function(t,a){return i("span",{key:t.key},[s._v("\n                            "+s._s(t.value_parsed)),a+1!==s.leftToSpend.length?i("span",[s._v(", ")]):s._e()])})),0)])])]),s._v(" "),i("div",{staticClass:"col-12 col-sm-6 col-md-3"},[i("div",{staticClass:"info-box"},[s._m(6),s._v(" "),i("div",{staticClass:"info-box-content"},[i("span",{staticClass:"info-box-text"},[i("span",[s._v(s._s(s.$t("firefly.net_worth")))])]),s._v(" "),s.netWorth.length>0?i("span",{staticClass:"info-box-number"},[s._v(s._s(s.netWorth[0].value_parsed))]):s._e(),s._v(" "),s._m(7),s._v(" "),i("span",{staticClass:"progress-description"},s._l(s.netWorth,(function(t,a){return i("span",{key:t.key},[s._v("\n                            "+s._s(t.value_parsed)),a+1!==t.length?i("span",[s._v(", ")]):s._e()])})),0)])])])])}),[function(){var s=this.$createElement,t=this._self._c||s;return t("span",{staticClass:"info-box-icon"},[t("i",{staticClass:"far fa-bookmark text-info"})])},function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"progress bg-info"},[t("div",{staticClass:"progress-bar",staticStyle:{width:"0"}})])},function(){var s=this.$createElement,t=this._self._c||s;return t("span",{staticClass:"info-box-icon"},[t("i",{staticClass:"far fa-calendar-alt text-teal"})])},function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"progress bg-teal"},[t("div",{staticClass:"progress-bar",staticStyle:{width:"0"}})])},function(){var s=this.$createElement,t=this._self._c||s;return t("span",{staticClass:"info-box-icon"},[t("i",{staticClass:"fas fa-money-bill text-success"})])},function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"progress bg-success"},[t("div",{staticClass:"progress-bar",staticStyle:{width:"0"}})])},function(){var s=this.$createElement,t=this._self._c||s;return t("span",{staticClass:"info-box-icon"},[t("i",{staticClass:"fas fa-money-bill text-success"})])},function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"progress bg-success"},[t("div",{staticClass:"progress-bar",staticStyle:{width:"0"}})])}],!1,null,"73f14a2e",null);t.a=n.exports}},[[212,0,1]]]);
//# sourceMappingURL=register.js.map