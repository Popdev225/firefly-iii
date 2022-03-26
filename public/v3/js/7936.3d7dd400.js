"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[7936],{7936:(e,t,a)=>{a.r(t),a.d(t,{default:()=>$});var i=a(3673),n=a(2323);const r=(0,i.Uk)("Edit"),s=(0,i.Uk)("Delete");function o(e,t,a,o,l,u){const g=(0,i.up)("q-th"),p=(0,i.up)("q-tr"),d=(0,i.up)("router-link"),c=(0,i.up)("q-td"),m=(0,i.up)("q-item-label"),h=(0,i.up)("q-item-section"),f=(0,i.up)("q-item"),w=(0,i.up)("q-list"),y=(0,i.up)("q-btn-dropdown"),b=(0,i.up)("q-table"),q=(0,i.up)("q-fab-action"),_=(0,i.up)("q-fab"),k=(0,i.up)("q-page-sticky"),R=(0,i.up)("q-page"),Z=(0,i.Q2)("close-popup");return(0,i.wg)(),(0,i.j4)(R,null,{default:(0,i.w5)((()=>[(0,i.Wm)(b,{title:e.$t("firefly.recurring"),rows:l.rows,columns:l.columns,"row-key":"id",onRequest:u.onRequest,pagination:l.pagination,"onUpdate:pagination":t[0]||(t[0]=e=>l.pagination=e),loading:l.loading,class:"q-ma-md"},{header:(0,i.w5)((e=>[(0,i.Wm)(p,{props:e},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(e.cols,(t=>((0,i.wg)(),(0,i.j4)(g,{key:t.name,props:e},{default:(0,i.w5)((()=>[(0,i.Uk)((0,n.zw)(t.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,i.w5)((e=>[(0,i.Wm)(p,{props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(c,{key:"name",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(d,{to:{name:"recurring.show",params:{id:e.row.id}},class:"text-primary"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,n.zw)(e.row.name),1)])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,i.Wm)(c,{key:"menu",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(y,{color:"primary",label:"Actions",size:"sm"},{default:(0,i.w5)((()=>[(0,i.Wm)(w,null,{default:(0,i.w5)((()=>[(0,i.wy)(((0,i.wg)(),(0,i.j4)(f,{clickable:"",to:{name:"recurring.edit",params:{id:e.row.id}}},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[r])),_:1})])),_:1})])),_:2},1032,["to"])),[[Z]]),(0,i.wy)(((0,i.wg)(),(0,i.j4)(f,{clickable:"",onClick:t=>u.deleteRecurring(e.row.id,e.row.name)},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[s])),_:1})])),_:1})])),_:2},1032,["onClick"])),[[Z]])])),_:2},1024)])),_:2},1024)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","onRequest","pagination","loading"]),(0,i.Wm)(k,{position:"bottom-right",offset:[18,18]},{default:(0,i.w5)((()=>[(0,i.Wm)(_,{label:"Actions",square:"","vertical-actions-align":"right","label-position":"left",color:"green",icon:"fas fa-chevron-up",direction:"up"},{default:(0,i.w5)((()=>[(0,i.Wm)(q,{color:"primary",square:"",to:{name:"recurring.create"},icon:"fas fa-exchange-alt",label:"New recurring transaction"},null,8,["to"])])),_:1})])),_:1})])),_:1})}var l=a(3617),u=a(2017),g=a(5474);class p{list(e,t){let a="/api/v1/recurrences";return g.api.get(a,{params:{page:e,cache:t}})}}const d={name:"Index",watch:{$route(e){"recurring.index"===e.name&&(this.page=1,this.updateBreadcrumbs(),this.triggerUpdate())}},data(){return{rows:[],pagination:{sortBy:"desc",descending:!1,page:1,rowsPerPage:5,rowsNumber:100},loading:!1,columns:[{name:"name",label:"Name",field:"name",align:"left"},{name:"menu",label:" ",field:"menu",align:"right"}]}},computed:{...(0,l.Se)("fireflyiii",["getRange","getCacheKey","getListPageSize"])},created(){this.pagination.rowsPerPage=this.getListPageSize},mounted(){if(this.type=this.$route.params.type,null===this.getRange.start||null===this.getRange.end){const e=(0,l.oR)();e.subscribe(((e,t)=>{"fireflyiii/setRange"===e.type&&(this.range={start:e.payload.start,end:e.payload.end},this.triggerUpdate())}))}null!==this.getRange.start&&null!==this.getRange.end&&(this.range={start:this.getRange.start,end:this.getRange.end},this.triggerUpdate())},methods:{deleteRecurring:function(e,t){this.$q.dialog({title:"Confirm",message:'Do you want to delete recurring transaction "'+t+'"?',cancel:!0,persistent:!0}).onOk((()=>{this.destroyRecurring(e)}))},destroyRecurring:function(e){new u.Z("recurrences").destroy(e).then((()=>{this.$store.dispatch("fireflyiii/refreshCacheKey"),this.triggerUpdate()}))},updateBreadcrumbs:function(){this.$route.meta.pageTitle="firefly.Recurring",this.$route.meta.breadcrumbs=[{title:"Recurring"}]},onRequest:function(e){this.page=e.pagination.page,this.triggerUpdate()},triggerUpdate:function(){if(this.loading)return;if(null===this.range.start||null===this.range.end)return;this.loading=!0;const e=new p;this.rows=[],e.list(this.page,this.getCacheKey).then((e=>{this.pagination.rowsPerPage=e.data.meta.pagination.per_page,this.pagination.rowsNumber=e.data.meta.pagination.total,this.pagination.page=this.page;for(let t in e.data.data)if(e.data.data.hasOwnProperty(t)){let a=e.data.data[t],i={id:a.id,name:a.attributes.title};this.rows.push(i)}this.loading=!1}))}}};var c=a(4260),m=a(4379),h=a(4993),f=a(8186),w=a(2414),y=a(3884),b=a(2226),q=a(7011),_=a(3414),k=a(2035),R=a(2350),Z=a(4264),W=a(9200),Q=a(9975),P=a(677),U=a(7518),C=a.n(U);const v=(0,c.Z)(d,[["render",o]]),$=v;C()(d,"components",{QPage:m.Z,QTable:h.Z,QTr:f.Z,QTh:w.Z,QTd:y.Z,QBtnDropdown:b.Z,QList:q.Z,QItem:_.Z,QItemSection:k.Z,QItemLabel:R.Z,QPageSticky:Z.Z,QFab:W.Z,QFabAction:Q.Z}),C()(d,"directives",{ClosePopup:P.Z})}}]);