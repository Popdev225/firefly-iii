(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{297:function(t,s,a){t.exports=a(424)},424:function(t,s,a){"use strict";a.r(s);var e={name:"Index",props:{accountTypes:String},data:function(){return{accounts:[]}},created:function(){var t=this;axios.get("./api/v1/accounts?type="+this.$props.accountTypes).then((function(s){t.loadAccounts(s.data.data)}))},methods:{loadAccounts:function(t){for(var s in t)if(t.hasOwnProperty(s)&&/^0$|^[1-9]\d*$/.test(s)&&s<=4294967294){var a=t[s];"asset"===a.attributes.type&&null!==a.attributes.account_role&&(a.attributes.account_role=this.$t("firefly.account_role_"+a.attributes.account_role)),"asset"===a.attributes.type&&null===a.attributes.account_role&&(a.attributes.account_role=this.$t("firefly.Default asset account")),null===a.attributes.iban&&(a.attributes.iban=a.attributes.account_number),this.accounts.push(a)}}}},c=a(1),n=Object(c.a)(e,(function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"row"},[a("div",{staticClass:"col-lg-12 col-md-12 col-sm-12 col-xs-12"},[a("div",{staticClass:"card"},[t._m(0),t._v(" "),a("div",{staticClass:"card-body p-0"},[a("table",{staticClass:"table table-sm table-striped"},[a("caption",{staticStyle:{display:"none"}},[t._v(t._s(t.$t("list.name")))]),t._v(" "),a("thead",[a("tr",[a("th",{attrs:{scope:"col"}},[t._v(" ")]),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("list.name")))]),t._v(" "),"asset"===t.$props.accountTypes?a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("list.role")))]):t._e(),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("list.iban")))]),t._v(" "),a("th",{staticStyle:{"text-align":"right"},attrs:{scope:"col"}},[t._v(t._s(t.$t("list.currentBalance")))]),t._v(" "),a("th",{attrs:{scope:"col"}},[t._v(t._s(t.$t("list.balanceDiff")))])])]),t._v(" "),a("tbody",t._l(t.accounts,(function(s){return a("tr",[a("td",[a("div",{staticClass:"btn-group btn-group-xs"},[a("a",{staticClass:"btn btn-xs btn-default",attrs:{href:"./accounts/edit/"+s.id}},[a("i",{staticClass:"fa fas fa-pencil-alt"})]),t._v(" "),a("a",{staticClass:"btn btn-xs btn-danger",attrs:{href:"./accounts/delete/"+s.id}},[a("i",{staticClass:"fa far fa-trash"})])])]),t._v(" "),a("td",[t._v(t._s(s.attributes.name)+"\n              ")]),t._v(" "),"asset"===t.$props.accountTypes?a("td",[t._v("\n              "+t._s(s.attributes.account_role)+"\n            ")]):t._e(),t._v(" "),a("td",[t._v("\n              "+t._s(s.attributes.iban)+"\n            ")]),t._v(" "),a("td",{staticStyle:{"text-align":"right"}},[t._v("\n              "+t._s(Intl.NumberFormat("en-US",{style:"currency",currency:s.attributes.currency_code}).format(s.attributes.current_balance))+"\n            ")]),t._v(" "),a("td",[t._v("diff")])])})),0)])]),t._v(" "),a("div",{staticClass:"card-footer"},[t._v("\n        Footer stuff.\n      ")])])])])}),[function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"card-header"},[s("h3",{staticClass:"card-title"},[this._v("Title thing")]),this._v(" "),s("div",{staticClass:"card-tools"},[s("div",{staticClass:"input-group input-group-sm",staticStyle:{width:"150px"}},[s("input",{staticClass:"form-control float-right",attrs:{type:"text",name:"table_search",placeholder:"Search"}}),this._v(" "),s("div",{staticClass:"input-group-append"},[s("button",{staticClass:"btn btn-default",attrs:{type:"submit"}},[s("i",{staticClass:"fas fa-search"})])])])])])}],!1,null,"d668ce46",null).exports;a(15);var i=a(18),r={};new Vue({i18n:i,render:function(t){return t(n,{props:r})}}).$mount("#accounts")}},[[297,0,1]]]);
//# sourceMappingURL=index.js.map