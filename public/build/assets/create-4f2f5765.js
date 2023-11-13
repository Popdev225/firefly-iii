var q=Object.defineProperty;var H=(n,e,t)=>e in n?q(n,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):n[e]=t;var C=(n,e,t)=>(H(n,typeof e!="symbol"?e+"":e,t),t);import{x as P,w as M,J as j,z as R,I as $,A as z,y as V}from"./load-translations-7cdd7b0e.js";function T(){return{id:"",name:"",alpine_name:""}}function B(){let e=P(new Date,"yyyy-MM-dd HH:mm");return{description:"",amount:"",currency_code:"EUR",source_account:T(),destination_account:T(),date:e}}function W(n,e){let t=[];for(let s in n)if(n.hasOwnProperty(s)){const i=n[s];let o={};o.description=i.description,o.source_name=i.source_account.name,o.destination_name=i.destination_account.name,o.amount=i.amount,o.date=i.date,o.currency_code=i.currency_code,typeof i.source_account.id<"u"&&i.source_account.id.toString()!==""&&(o.source_id=i.source_account.id),typeof i.destination_account.id<"u"&&i.destination_account.id.toString()!==""&&(o.destination_id=i.destination_account.id),o.type=e,t.push(o)}return t}const A={showAllSuggestions:!1,suggestionsThreshold:1,maximumItems:0,autoselectFirst:!0,ignoreEnter:!1,updateOnSelect:!1,highlightTyped:!1,highlightClass:"",fullWidth:!1,fixed:!1,fuzzy:!1,startsWith:!1,preventBrowserAutocomplete:!1,itemClass:"",activeClasses:["bg-primary","text-white"],labelField:"label",valueField:"value",searchFields:["label"],queryParam:"query",items:[],source:null,hiddenInput:!1,hiddenValue:"",clearControl:"",datalist:"",server:"",serverMethod:"GET",serverParams:{},serverDataKey:"data",fetchOptions:{},liveServer:!1,noCache:!0,debounceTime:300,notFoundMessage:"",onRenderItem:(n,e,t)=>e,onSelectItem:(n,e)=>{},onServerResponse:(n,e)=>n.json(),onChange:(n,e)=>{},onBeforeFetch:n=>{},onAfterFetch:n=>{}},x="is-loading",k="is-active",p="show",_="next",y="prev",g=new WeakMap;let L=0,v=0;function U(n,e=300){let t;return(...s)=>{clearTimeout(t),t=setTimeout(()=>{n.apply(this,s)},e)}}function G(n){return n.normalize("NFD").replace(/[\u0300-\u036f]/g,"")}function b(n){return n?G(n.toString()).toLowerCase():""}function K(n,e){if(n.indexOf(e)>=0)return!0;let t=0;for(let s=0;s<e.length;s++){const i=e[s];if(i!=" "&&(t=n.indexOf(i,t)+1,t<=0))return!1}return!0}function O(n,e){return n.parentNode.insertBefore(e,n.nextSibling)}function J(n){var e=document.createElement("textarea");return e.innerHTML=n,e.value}function w(n,e){for(const[t,s]of Object.entries(e))n.setAttribute(t,s)}function X(n){n.ariaLabel=n.innerText,n.innerHTML=n.innerText.split("").map(e=>e+"&zwj;").join("")}class S{constructor(e,t={}){C(this,"handleEvent",e=>{["scroll","resize"].includes(e.type)?(this._timer&&window.cancelAnimationFrame(this._timer),this._timer=window.requestAnimationFrame(()=>{this[`on${e.type}`](e)})):this[`on${e.type}`](e)});if(!(e instanceof HTMLElement)){console.error("Invalid element",e);return}g.set(e,this),L++,v++,this._searchInput=e,this._configure(t),this._preventInput=!1,this._keyboardNavigation=!1,this._searchFunc=U(()=>{this._loadFromServer(!0)},this._config.debounceTime),this._configureSearchInput(),this._configureDropElement(),this._config.fixed&&(document.addEventListener("scroll",this,!0),window.addEventListener("resize",this));const s=this._getClearControl();s&&s.addEventListener("click",this),["focus","change","blur","input","keydown"].forEach(i=>{this._searchInput.addEventListener(i,this)}),["mousemove","mouseleave"].forEach(i=>{this._dropElement.addEventListener(i,this)}),this._fetchData()}static init(e="input.autocomplete",t={}){document.querySelectorAll(e).forEach(i=>{this.getOrCreateInstance(i,t)})}static getInstance(e){return g.has(e)?g.get(e):null}static getOrCreateInstance(e,t={}){return this.getInstance(e)||new this(e,t)}dispose(){v--,["focus","change","blur","input","keydown"].forEach(t=>{this._searchInput.removeEventListener(t,this)}),["mousemove","mouseleave"].forEach(t=>{this._dropElement.removeEventListener(t,this)});const e=this._getClearControl();e&&e.removeEventListener("click",this),this._config.fixed&&v<=0&&(document.removeEventListener("scroll",this,!0),window.removeEventListener("resize",this)),this._dropElement.parentElement.removeChild(this._dropElement),g.delete(this._searchInput)}_getClearControl(){if(this._config.clearControl)return document.querySelector(this._config.clearControl)}_configure(e={}){this._config=Object.assign({},A);const t={...e,...this._searchInput.dataset},s=i=>["true","false","1","0",!0,!1].includes(i)&&!!JSON.parse(i);for(const[i,o]of Object.entries(A)){if(t[i]===void 0)continue;const r=t[i];switch(typeof o){case"number":this._config[i]=parseInt(r);break;case"boolean":this._config[i]=s(r);break;case"string":this._config[i]=r.toString();break;case"object":if(Array.isArray(o))if(typeof r=="string"){const a=r.includes("|")?"|":",";this._config[i]=r.split(a)}else this._config[i]=r;else this._config[i]=typeof r=="string"?JSON.parse(r):r;break;case"function":this._config[i]=typeof r=="string"?window[r]:r;break;default:this._config[i]=r;break}}}_configureSearchInput(){if(this._searchInput.autocomplete="off",this._searchInput.spellcheck=!1,w(this._searchInput,{"aria-autocomplete":"list","aria-haspopup":"menu","aria-expanded":"false",role:"combobox"}),this._searchInput.id&&this._config.preventBrowserAutocomplete){const e=document.querySelector(`[for="${this._searchInput.id}"]`);e&&X(e)}this._hiddenInput=null,this._config.hiddenInput&&(this._hiddenInput=document.createElement("input"),this._hiddenInput.type="hidden",this._hiddenInput.value=this._config.hiddenValue,this._hiddenInput.name=this._searchInput.name,this._searchInput.name="_"+this._searchInput.name,O(this._searchInput,this._hiddenInput))}_configureDropElement(){this._dropElement=document.createElement("ul"),this._dropElement.id="ac-menu-"+L,this._dropElement.classList.add("dropdown-menu","autocomplete-menu","p-0"),this._dropElement.style.maxHeight="280px",this._config.fullWidth||(this._dropElement.style.maxWidth="360px"),this._config.fixed&&(this._dropElement.style.position="fixed"),this._dropElement.style.overflowY="auto",this._dropElement.style.overscrollBehavior="contain",this._dropElement.style.textAlign="unset",O(this._searchInput,this._dropElement),this._searchInput.setAttribute("aria-controls",this._dropElement.id)}onclick(e){e.target.matches(this._config.clearControl)&&this.clear()}oninput(e){this._preventInput||(this._hiddenInput&&(this._hiddenInput.value=null),this.showOrSearch())}onchange(e){const t=this._searchInput.value,s=Object.values(this._items).find(i=>i.label===t);this._config.onChange(s,this)}onblur(e){this.hideSuggestions()}onfocus(e){this.showOrSearch()}onkeydown(e){switch(e.keyCode||e.key){case 13:case"Enter":if(this.isDropdownVisible()){const s=this.getSelection();s&&s.click(),(s||!this._config.ignoreEnter)&&e.preventDefault()}break;case 38:case"ArrowUp":e.preventDefault(),this._keyboardNavigation=!0,this._moveSelection(y);break;case 40:case"ArrowDown":e.preventDefault(),this._keyboardNavigation=!0,this.isDropdownVisible()?this._moveSelection(_):this.showOrSearch(!1);break;case 27:case"Escape":this.isDropdownVisible()&&(this._searchInput.focus(),this.hideSuggestions());break}}onmousemove(e){this._keyboardNavigation=!1}onmouseleave(e){this.removeSelection()}onscroll(e){this._positionMenu()}onresize(e){this._positionMenu()}getConfig(e=null){return e!==null?this._config[e]:this._config}setConfig(e,t){this._config[e]=t}setData(e){this._items={},this._addItems(e)}enable(){this._searchInput.setAttribute("disabled","")}disable(){this._searchInput.removeAttribute("disabled")}isDisabled(){return this._searchInput.hasAttribute("disabled")||this._searchInput.disabled||this._searchInput.hasAttribute("readonly")}isDropdownVisible(){return this._dropElement.classList.contains(p)}clear(){this._searchInput.value="",this._hiddenInput&&(this._hiddenInput.value="")}getSelection(){return this._dropElement.querySelector("a."+k)}removeSelection(){const e=this.getSelection();e&&e.classList.remove(...this._activeClasses())}_activeClasses(){return[...this._config.activeClasses,k]}_isItemEnabled(e){if(e.style.display==="none")return!1;const t=e.firstElementChild;return t.tagName==="A"&&!t.classList.contains("disabled")}_moveSelection(e=_,t=null){const s=this.getSelection();if(s){const i=e===_?"nextSibling":"previousSibling";t=s.parentNode;do t=t[i];while(t&&!this._isItemEnabled(t));t?(s.classList.remove(...this._activeClasses()),e===y?t.parentNode.scrollTop=t.offsetTop-t.parentNode.offsetTop:t.offsetTop>t.parentNode.offsetHeight-t.offsetHeight&&(t.parentNode.scrollTop+=t.offsetHeight)):s&&(t=s.parentElement)}else{if(e===y)return t;if(!t)for(t=this._dropElement.firstChild;t&&!this._isItemEnabled(t);)t=t.nextSibling}if(t){const i=t.querySelector("a");i.classList.add(...this._activeClasses()),this._searchInput.setAttribute("aria-activedescendant",i.id),this._config.updateOnSelect&&(this._searchInput.value=i.dataset.label)}else this._searchInput.setAttribute("aria-activedescendant","");return t}_shouldShow(){return this.isDisabled()?!1:this._searchInput.value.length>=this._config.suggestionsThreshold}showOrSearch(e=!0){if(e&&!this._shouldShow()){this.hideSuggestions();return}this._config.liveServer?this._searchFunc():this._config.source?this._config.source(this._searchInput.value,t=>{this.setData(t),this._showSuggestions()}):this._showSuggestions()}_createGroup(e){const t=this._createLi(),s=document.createElement("span");return t.append(s),s.classList.add("dropdown-header","text-truncate"),s.innerHTML=e,t}_createItem(e,t){let s=t.label;if(this._config.highlightTyped){const r=b(s).indexOf(e);r!==-1&&(s=s.substring(0,r)+`<mark class="${this._config.highlightClass}">${s.substring(r,r+e.length)}</mark>`+s.substring(r+e.length,s.length))}s=this._config.onRenderItem(t,s,this);const i=this._createLi(),o=document.createElement("a");if(i.append(o),o.id=this._dropElement.id+"-"+this._dropElement.children.length,o.classList.add("dropdown-item","text-truncate"),this._config.itemClass&&o.classList.add(...this._config.itemClass.split(" ")),o.setAttribute("data-value",t.value),o.setAttribute("data-label",t.label),o.setAttribute("tabindex","-1"),o.setAttribute("role","menuitem"),o.setAttribute("href","#"),o.innerHTML=s,t.data)for(const[r,a]of Object.entries(t.data))o.dataset[r]=a;return o.addEventListener("mouseenter",r=>{this._keyboardNavigation||(this.removeSelection(),i.querySelector("a").classList.add(...this._activeClasses()))}),o.addEventListener("mousedown",r=>{r.preventDefault()}),o.addEventListener("click",r=>{r.preventDefault(),this._preventInput=!0,this._searchInput.value=J(t.label),this._hiddenInput&&(this._hiddenInput.value=t.value),this._config.onSelectItem(t,this),this.hideSuggestions(),this._preventInput=!1}),i}_showSuggestions(){if(document.activeElement!=this._searchInput)return;const e=b(this._searchInput.value);this._dropElement.innerHTML="";const t=Object.keys(this._items);let s=0,i=null;const o=[];for(let r=0;r<t.length;r++){const a=t[r],c=this._items[a],h=this._config.showAllSuggestions||e.length===0;let l=e.length==0&&this._config.suggestionsThreshold===0;!h&&e.length>0&&this._config.searchFields.forEach(d=>{const f=b(c[d]);let m=!1;if(this._config.fuzzy)m=K(f,e);else{const E=f.indexOf(e);m=this._config.startsWith?E===0:E>=0}m&&(l=!0)});const N=l||e.length===0;if(h||l){if(s++,c.group&&!o.includes(c.group)){const f=this._createGroup(c.group);this._dropElement.appendChild(f),o.push(c.group)}const d=this._createItem(e,c);if(!i&&N&&(i=d),this._dropElement.appendChild(d),this._config.maximumItems>0&&s>=this._config.maximumItems)break}}if(i&&this._config.autoselectFirst&&(this.removeSelection(),this._moveSelection(_,i)),s===0)if(this._config.notFoundMessage){const r=this._createLi();r.innerHTML=`<span class="dropdown-item">${this._config.notFoundMessage}</span>`,this._dropElement.appendChild(r),this._showDropdown()}else this.hideSuggestions();else this._showDropdown()}_createLi(){const e=document.createElement("li");return e.setAttribute("role","presentation"),e}_showDropdown(){this._dropElement.classList.add(p),this._dropElement.setAttribute("role","menu"),w(this._searchInput,{"aria-expanded":"true"}),this._positionMenu()}toggleSuggestions(e=!0){this._dropElement.classList.contains(p)?this.hideSuggestions():this.showOrSearch(e)}hideSuggestions(){this._dropElement.classList.remove(p),w(this._searchInput,{"aria-expanded":"false"}),this.removeSelection()}getInput(){return this._searchInput}getDropMenu(){return this._dropElement}_positionMenu(){const e=window.getComputedStyle(this._searchInput),t=this._searchInput.getBoundingClientRect(),s=e.direction==="rtl",i=this._config.fullWidth,o=this._config.fixed;let r=null,a=null;o&&(r=t.x,a=t.y+t.height,s&&!i&&(r-=this._dropElement.offsetWidth-t.width)),this._dropElement.style.transform="unset",i&&(this._dropElement.style.width=this._searchInput.offsetWidth+"px"),r!==null&&(this._dropElement.style.left=r+"px"),a!==null&&(this._dropElement.style.top=a+"px");const c=this._dropElement.getBoundingClientRect(),h=window.innerHeight;if(c.y+c.height>h){const l=i?t.height+4:t.height;this._dropElement.style.transform="translateY(calc(-100.1% - "+l+"px))"}}_fetchData(){this._items={},this._addItems(this._config.items);const e=this._config.datalist;if(e){const t=document.querySelector(`#${e}`);if(t){const s=Array.from(t.children).map(i=>{const o=i.getAttribute("value")??i.innerHTML.toLowerCase(),r=i.innerHTML;return{value:o,label:r}});this._addItems(s)}else console.error(`Datalist not found ${e}`)}this._setHiddenVal(),this._config.server&&!this._config.liveServer&&this._loadFromServer()}_setHiddenVal(){if(this._config.hiddenInput&&!this._config.hiddenValue)for(const[e,t]of Object.entries(this._items))t.label==this._searchInput.value&&(this._hiddenInput.value=e)}_addItems(e){const t=Object.keys(e);for(let s=0;s<t.length;s++){const i=t[s],o=e[i];if(o.group&&o.items){o.items.forEach(c=>c.group=o.group),this._addItems(o.items);continue}const r=typeof o=="string"?o:o.label,a=typeof o!="object"?{}:o;a.label=o[this._config.labelField]??r,a.value=o[this._config.valueField]??i,a.label&&(this._items[a.value]=a)}}_loadFromServer(e=!1){this._abortController&&this._abortController.abort(),this._abortController=new AbortController;let t=this._searchInput.dataset.serverParams||{};typeof t=="string"&&(t=JSON.parse(t));const s=Object.assign({},this._config.serverParams,t);if(s[this._config.queryParam]=this._searchInput.value,this._config.noCache&&(s.t=Date.now()),s.related){const a=document.getElementById(s.related);if(a){s.related=a.value;const c=a.getAttribute("name");c&&(s[c]=a.value)}}const i=new URLSearchParams(s);let o=this._config.server,r=Object.assign(this._config.fetchOptions,{method:this._config.serverMethod||"GET",signal:this._abortController.signal});r.method==="POST"?r.body=i:o+="?"+i.toString(),this._searchInput.classList.add(x),this._config.onBeforeFetch(this),fetch(o,r).then(a=>this._config.onServerResponse(a,this)).then(a=>{const c=a[this._config.serverDataKey]||a;this.setData(c),this._setHiddenVal(),this._abortController=null,e&&this._showSuggestions()}).catch(a=>{a.name==="AbortError"||this._abortController.signal.aborted||console.error(a)}).finally(a=>{this._searchInput.classList.remove(x),this._config.onAfterFetch(this)})}}class Y{post(e){let t="/api/v2/transactions";return M.post(t,e)}}class Q{list(e){return M.get("/api/v2/currencies",{params:e})}}let u;const I={description:"/api/v2/autocomplete/transaction-descriptions",account:"/api/v2/autocomplete/accounts"};let Z=function(){return{count:0,totalAmount:0,transactionType:"unknown",showSuccessMessage:!1,showErrorMessage:!1,entries:[],loadingCurrencies:!0,defaultCurrency:{},enabledCurrencies:[],nativeCurrencies:[],foreignCurrencies:[],filters:{source:[],destination:[]},errorMessageText:"",detectTransactionType(){const n=this.entries[0].source_account.type??"unknown",e=this.entries[0].destination_account.type??"unknown";if(n==="unknown"&&e==="unknown"){this.transactionType="unknown",console.warn("Cannot infer transaction type from two unknown accounts.");return}if(n===e&&["Asset account","Loan","Debt","Mortgage"].includes(n)){this.transactionType="transfer",console.log('Transaction type is detected to be "'+this.transactionType+'".'),console.log("filter down currencies for transfer.");return}if(n==="Asset account"&&["Expense account","Debt","Loan","Mortgage"].includes(e)){this.transactionType="withdrawal",console.log('[a] Transaction type is detected to be "'+this.transactionType+'".'),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(n==="Asset account"&&e==="unknown"){this.transactionType="withdrawal",console.log('[b] Transaction type is detected to be "'+this.transactionType+'".'),console.log(this.entries[0].source_account),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(["Debt","Loan","Mortgage"].includes(n)&&e==="Expense account"){this.transactionType="withdrawal",console.log('[c] Transaction type is detected to be "'+this.transactionType+'".'),this.filterNativeCurrencies(this.entries[0].source_account.currency_code);return}if(n==="Revenue account"&&["Asset account","Debt","Loan","Mortgage"].includes(e)){this.transactionType="deposit",console.log('Transaction type is detected to be "'+this.transactionType+'".');return}if(["Debt","Loan","Mortgage"].includes(n)&&e==="Asset account"){this.transactionType="deposit",console.log('Transaction type is detected to be "'+this.transactionType+'".');return}console.warn('Unknown account combination between "'+n+'" and "'+e+'".')},selectSourceAccount(n,e){const t=parseInt(e._searchInput.attributes["data-index"].value);document.querySelector("#form")._x_dataStack[0].$data.entries[t].source_account={id:n.id,name:n.name,alpine_name:n.name,type:n.type,currency_code:n.currency_code},console.log("Changed source account into a known "+n.type.toLowerCase()),document.querySelector("#form")._x_dataStack[0].detectTransactionType()},filterNativeCurrencies(n){console.log('filterNativeCurrencies("'+n+'")');let e=[],t;for(let s in this.enabledCurrencies)if(this.enabledCurrencies.hasOwnProperty(s)){let i=this.enabledCurrencies[s];i.code===n&&(t=i)}e.push(t),this.nativeCurrencies=e;for(let s in this.entries)this.entries.hasOwnProperty(s)&&(this.entries[s].currency_code=n)},changedAmount(n){const e=parseInt(n.target.dataset.index);this.entries[e].amount=parseFloat(n.target.value),this.totalAmount=0;for(let t in this.entries)this.entries.hasOwnProperty(t)&&(this.totalAmount=this.totalAmount+parseFloat(this.entries[t].amount));console.log("Changed amount to "+this.totalAmount)},selectDestAccount(n,e){const t=parseInt(e._searchInput.attributes["data-index"].value);document.querySelector("#form")._x_dataStack[0].$data.entries[t].destination_account={id:n.id,name:n.name,alpine_name:n.name,type:n.type,currency_code:n.currency_code},console.log("Changed destination account into a known "+n.type.toLowerCase()),document.querySelector("#form")._x_dataStack[0].detectTransactionType()},loadCurrencies(){console.log("Loading user currencies."),new Q().list({}).then(e=>{for(let t in e.data.data)if(e.data.data.hasOwnProperty(t)){let s=e.data.data[t];if(s.attributes.enabled){let i={id:s.id,name:s.attributes.name,code:s.attributes.code,default:s.attributes.default,symbol:s.attributes.symbol,decimal_places:s.attributes.decimal_places};i.default&&(this.defaultCurrency=i),this.enabledCurrencies.push(i),this.nativeCurrencies.push(i)}}this.loadingCurrencies=!1,console.log(this.enabledCurrencies)})},changeSourceAccount(n,e){if(console.log("changeSourceAccount"),typeof n>"u"){const t=parseInt(e._searchInput.attributes["data-index"].value);if(document.querySelector("#form")._x_dataStack[0].$data.entries[t].source_account.name===e._searchInput.value){console.warn('Ignore hallucinated source account name change to "'+e._searchInput.value+'"'),document.querySelector("#form")._x_dataStack[0].detectTransactionType();return}document.querySelector("#form")._x_dataStack[0].$data.entries[t].source_account={name:e._searchInput.value,alpine_name:e._searchInput.value},console.log('Changed source account into a unknown account called "'+e._searchInput.value+'"'),document.querySelector("#form")._x_dataStack[0].detectTransactionType()}},changeDestAccount(n,e){if(document.querySelector("#form")._x_dataStack[0].$data.entries[0].destination_account,typeof n>"u"){const t=parseInt(e._searchInput.attributes["data-index"].value);if(document.querySelector("#form")._x_dataStack[0].$data.entries[t].destination_account.name===e._searchInput.value){console.warn('Ignore hallucinated destination account name change to "'+e._searchInput.value+'"'),document.querySelector("#form")._x_dataStack[0].detectTransactionType();return}document.querySelector("#form")._x_dataStack[0].$data.entries[t].destination_account={name:e._searchInput.value,alpine_name:e._searchInput.value},console.log('Changed destination account into a unknown account called "'+e._searchInput.value+'"'),document.querySelector("#form")._x_dataStack[0].detectTransactionType()}},showError:!1,showSuccess:!1,addedSplit(){console.log("addedSplit"),S.init("input.ac-source",{server:I.account,serverParams:{types:this.filters.source},fetchOptions:{headers:{"X-CSRF-TOKEN":document.head.querySelector('meta[name="csrf-token"]').content}},hiddenInput:!0,preventBrowserAutocomplete:!0,highlightTyped:!0,liveServer:!0,onChange:this.changeSourceAccount,onSelectItem:this.selectSourceAccount,onRenderItem:function(n,e,t){return n.name_with_balance+'<br><small class="text-muted">'+u.t("firefly.account_type_"+n.type)+"</small>"}}),S.init("input.ac-dest",{server:I.account,serverParams:{types:this.filters.destination},fetchOptions:{headers:{"X-CSRF-TOKEN":document.head.querySelector('meta[name="csrf-token"]').content}},hiddenInput:!0,preventBrowserAutocomplete:!0,liveServer:!0,highlightTyped:!0,onSelectItem:this.selectDestAccount,onChange:this.changeDestAccount,onRenderItem:function(n,e,t){return n.name_with_balance+'<br><small class="text-muted">'+u.t("firefly.account_type_"+n.type)+"</small>"}}),this.filters.destination=[],S.init("input.ac-description",{server:I.description,fetchOptions:{headers:{"X-CSRF-TOKEN":document.head.querySelector('meta[name="csrf-token"]').content}},valueField:"id",labelField:"description",highlightTyped:!0,onSelectItem:console.log})},init(){Promise.all([R("language","en_US")]).then(n=>{u=new $;const e=n[0].replace("-","_");u.locale=e,z(u,e).then(()=>{this.addSplit()})}),this.loadCurrencies(),this.filters.source=["Asset account","Loan","Debt","Mortgage","Revenue account"],this.filters.destination=["Expense account","Loan","Debt","Mortgage","Asset account"]},submitTransaction(){this.detectTransactionType();let n=W(this.entries,this.transactionType),e={group_title:null,fire_webhooks:!1,apply_rules:!1,transactions:n};n.length>1&&(e.group_title=n[0].description);let t=new Y;console.log(e),t.post(e).then(s=>{this.showSuccessMessage=!0,console.log(s),window.location="transactions/show/"+s.data.data.id+"?transaction_group_id="+s.data.data.id+"&message=created"}).catch(s=>{this.showErrorMessage=!0,this.errorMessageText=s.response.data.message})},addSplit(){this.entries.push(B())},removeSplit(n){this.entries.splice(n,1),document.querySelector("#split-0-tab").click()},formattedTotalAmount(){return V(this.totalAmount,"EUR")}}},D={transactions:Z,dates:j};function F(){Object.keys(D).forEach(n=>{console.log(`Loading page component "${n}"`);let e=D[n]();Alpine.data(n,()=>e)}),Alpine.start()}document.addEventListener("firefly-iii-bootstrapped",()=>{console.log("Loaded through event listener."),F()});window.bootstrapped&&(console.log("Loaded through window variable."),F());
