"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[5361],{5361:(t,e,a)=>{a.r(e),a.d(e,{default:()=>$});var i=a(9835),n=a(6970);const s=(0,i.Uk)("Edit"),o=(0,i.Uk)("Delete"),r=(0,i.Uk)("Transactions without a budget");function l(t,e,a,l,u,d){const g=(0,i.up)("q-th"),p=(0,i.up)("q-tr"),m=(0,i.up)("router-link"),c=(0,i.up)("q-td"),h=(0,i.up)("q-item-label"),w=(0,i.up)("q-item-section"),f=(0,i.up)("q-item"),b=(0,i.up)("q-list"),y=(0,i.up)("q-btn-dropdown"),_=(0,i.up)("q-table"),k=(0,i.up)("q-btn"),q=(0,i.up)("q-fab-action"),Z=(0,i.up)("q-fab"),W=(0,i.up)("q-page-sticky"),Q=(0,i.up)("q-page"),U=(0,i.Q2)("close-popup");return(0,i.wg)(),(0,i.j4)(Q,null,{default:(0,i.w5)((()=>[(0,i.Wm)(_,{title:t.$t("firefly.budgets"),rows:u.rows,columns:u.columns,"row-key":"id",onRequest:d.onRequest,pagination:u.pagination,"onUpdate:pagination":e[0]||(e[0]=t=>u.pagination=t),loading:u.loading,class:"q-ma-md"},{header:(0,i.w5)((t=>[(0,i.Wm)(p,{props:t},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(t.cols,(e=>((0,i.wg)(),(0,i.j4)(g,{key:e.name,props:t},{default:(0,i.w5)((()=>[(0,i.Uk)((0,n.zw)(e.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,i.w5)((t=>[(0,i.Wm)(p,{props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(c,{key:"name",props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(m,{to:{name:"budgets.show",params:{id:t.row.id}},class:"text-primary"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,n.zw)(t.row.name),1)])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,i.Wm)(c,{key:"menu",props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(y,{color:"primary",label:"Actions",size:"sm"},{default:(0,i.w5)((()=>[(0,i.Wm)(b,null,{default:(0,i.w5)((()=>[(0,i.wy)(((0,i.wg)(),(0,i.j4)(f,{clickable:"",to:{name:"budgets.edit",params:{id:t.row.id}}},{default:(0,i.w5)((()=>[(0,i.Wm)(w,null,{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[s])),_:1})])),_:1})])),_:2},1032,["to"])),[[U]]),(0,i.wy)(((0,i.wg)(),(0,i.j4)(f,{clickable:"",onClick:e=>d.deleteBudget(t.row.id,t.row.name)},{default:(0,i.w5)((()=>[(0,i.Wm)(w,null,{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[o])),_:1})])),_:1})])),_:2},1032,["onClick"])),[[U]])])),_:2},1024)])),_:2},1024)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","onRequest","pagination","loading"]),(0,i._)("p",null,[(0,i.Wm)(k,{to:{name:"budgets.show",params:{id:0}}},{default:(0,i.w5)((()=>[r])),_:1},8,["to"])]),(0,i.Wm)(W,{position:"bottom-right",offset:[18,18]},{default:(0,i.w5)((()=>[(0,i.Wm)(Z,{label:"Actions",square:"","vertical-actions-align":"right","label-position":"left",color:"green",icon:"fas fa-chevron-up",direction:"up"},{default:(0,i.w5)((()=>[(0,i.Wm)(q,{color:"primary",square:"",to:{name:"budgets.create"},icon:"fas fa-exchange-alt",label:"New budget"},null,8,["to"])])),_:1})])),_:1})])),_:1})}var u=a(7913),d=a(1569);class g{list(t,e){let a="/api/v1/budgets";return d.api.get(a,{params:{page:t,cache:e}})}}var p=a(3555);const m={name:"Index",watch:{$route(t){"budgets.index"===t.name&&(this.page=1,this.updateBreadcrumbs(),this.triggerUpdate())}},data(){return{rows:[],pagination:{sortBy:"desc",descending:!1,page:1,rowsPerPage:5,rowsNumber:100},loading:!1,columns:[{name:"name",label:"Name",field:"name",align:"left"},{name:"menu",label:" ",field:"menu",align:"right"}],store:null}},computed:{},created(){this.store=(0,p.S)(),this.pagination.rowsPerPage=this.getListPageSize},mounted(){this.type=this.$route.params.type,null!==this.store.getRange.start&&null!==this.store.getRange.end||this.store.$onAction((({name:t,store:e,args:a,after:i,onError:n})=>{i((e=>{"setRange"===t&&(this.range=e,this.triggerUpdate())}))})),null!==this.store.getRange.start&&null!==this.store.getRange.end&&(this.range={start:this.store.getRange.start,end:this.store.getRange.end},this.triggerUpdate())},methods:{deleteBudget:function(t,e){this.$q.dialog({title:"Confirm",message:'Do you want to delete budget "'+e+'"? Any and all transactions linked to this budget will be spared.',cancel:!0,persistent:!0}).onOk((()=>{this.destroyBudget(t)}))},destroyBudget:function(t){new u.Z("budgets").destroy(t).then((()=>{this.store.refreshCacheKey(),this.triggerUpdate()}))},updateBreadcrumbs:function(){this.$route.meta.pageTitle="firefly.budgets",this.$route.meta.breadcrumbs=[{title:"budgets"}]},onRequest:function(t){this.page=t.pagination.page,this.triggerUpdate()},triggerUpdate:function(){if(this.loading)return;if(null===this.range.start||null===this.range.end)return;this.loading=!0;const t=new g;this.rows=[],t.list(this.page,this.getCacheKey).then((t=>{this.pagination.rowsPerPage=t.data.meta.pagination.per_page,this.pagination.rowsNumber=t.data.meta.pagination.total,this.pagination.page=this.page;for(let e in t.data.data)if(t.data.data.hasOwnProperty(e)){let a=t.data.data[e],i={id:a.id,name:a.attributes.name};this.rows.push(i)}this.loading=!1}))}}};var c=a(1639),h=a(9885),w=a(9497),f=a(9546),b=a(1682),y=a(7220),_=a(2045),k=a(3246),q=a(490),Z=a(1233),W=a(3115),Q=a(8879),U=a(3388),P=a(9361),R=a(935),B=a(2146),v=a(9984),C=a.n(v);const T=(0,c.Z)(m,[["render",l]]),$=T;C()(m,"components",{QPage:h.Z,QTable:w.Z,QTr:f.Z,QTh:b.Z,QTd:y.Z,QBtnDropdown:_.Z,QList:k.Z,QItem:q.Z,QItemSection:Z.Z,QItemLabel:W.Z,QBtn:Q.Z,QPageSticky:U.Z,QFab:P.Z,QFabAction:R.Z}),C()(m,"directives",{ClosePopup:B.Z})}}]);