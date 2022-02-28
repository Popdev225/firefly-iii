"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[5681],{5681:(e,t,a)=>{a.r(t),a.d(t,{default:()=>$});var i=a(3673),o=a(2323);const s=(0,i.Uk)("Edit"),n=(0,i.Uk)("Delete");function l(e,t,a,l,r,p){const d=(0,i.up)("q-th"),u=(0,i.up)("q-tr"),g=(0,i.up)("router-link"),c=(0,i.up)("q-td"),w=(0,i.up)("q-item-label"),h=(0,i.up)("q-item-section"),m=(0,i.up)("q-item"),f=(0,i.up)("q-list"),b=(0,i.up)("q-btn-dropdown"),k=(0,i.up)("q-table"),y=(0,i.up)("q-fab-action"),q=(0,i.up)("q-fab"),_=(0,i.up)("q-page-sticky"),W=(0,i.up)("q-page"),Z=(0,i.Q2)("close-popup");return(0,i.wg)(),(0,i.j4)(W,null,{default:(0,i.w5)((()=>[(0,i.Wm)(k,{title:e.$t("firefly.webhooks"),rows:r.rows,columns:r.columns,"row-key":"id",onRequest:p.onRequest,pagination:r.pagination,"onUpdate:pagination":t[0]||(t[0]=e=>r.pagination=e),loading:r.loading,class:"q-ma-md"},{header:(0,i.w5)((e=>[(0,i.Wm)(u,{props:e},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(e.cols,(t=>((0,i.wg)(),(0,i.j4)(d,{key:t.name,props:e},{default:(0,i.w5)((()=>[(0,i.Uk)((0,o.zw)(t.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,i.w5)((e=>[(0,i.Wm)(u,{props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(c,{key:"title",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(g,{to:{name:"webhooks.show",params:{id:e.row.id}},class:"text-primary"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,o.zw)(e.row.title),1)])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,i.Wm)(c,{key:"menu",props:e},{default:(0,i.w5)((()=>[(0,i.Wm)(b,{color:"primary",label:"Actions",size:"sm"},{default:(0,i.w5)((()=>[(0,i.Wm)(f,null,{default:(0,i.w5)((()=>[(0,i.wy)(((0,i.wg)(),(0,i.j4)(m,{clickable:"",to:{name:"webhooks.edit",params:{id:e.row.id}}},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(w,null,{default:(0,i.w5)((()=>[s])),_:1})])),_:1})])),_:2},1032,["to"])),[[Z]]),(0,i.wy)(((0,i.wg)(),(0,i.j4)(m,{clickable:"",onClick:t=>p.deleteWebhook(e.row.id,e.row.title)},{default:(0,i.w5)((()=>[(0,i.Wm)(h,null,{default:(0,i.w5)((()=>[(0,i.Wm)(w,null,{default:(0,i.w5)((()=>[n])),_:1})])),_:1})])),_:2},1032,["onClick"])),[[Z]])])),_:2},1024)])),_:2},1024)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["title","rows","columns","onRequest","pagination","loading"]),(0,i.Wm)(_,{position:"bottom-right",offset:[18,18]},{default:(0,i.w5)((()=>[(0,i.Wm)(q,{label:"Actions",square:"","vertical-actions-align":"right","label-position":"left",color:"green",icon:"fas fa-chevron-up",direction:"up"},{default:(0,i.w5)((()=>[(0,i.Wm)(y,{color:"primary",square:"",to:{name:"webhooks.create"},icon:"fas fa-exchange-alt",label:"New webhook"},null,8,["to"])])),_:1})])),_:1})])),_:1})}var r=a(3617),p=a(5474);class d{destroy(e){let t="/api/v1/webhooks/"+e;return p.api["delete"](t)}}class u{list(e,t){let a="/api/v1/webhooks";return p.api.get(a,{params:{page:e,cache:t}})}}const g={name:"Index",watch:{$route(e){"webhooks.index"===e.name&&(this.page=1,this.updateBreadcrumbs(),this.triggerUpdate())}},data(){return{rows:[],pagination:{sortBy:"desc",descending:!1,page:1,rowsPerPage:5,rowsNumber:100},loading:!1,columns:[{name:"title",label:"Title",field:"title",align:"left"},{name:"menu",label:" ",field:"menu",align:"right"}]}},computed:{...(0,r.Se)("fireflyiii",["getCacheKey","getListPageSize"])},created(){this.pagination.rowsPerPage=this.getListPageSize},mounted(){this.triggerUpdate()},methods:{deleteWebhook:function(e,t){this.$q.dialog({title:"Confirm",message:'Do you want to delete webhook "'+t+'"?',cancel:!0,persistent:!0}).onOk((()=>{this.destroyWebhook(e)}))},destroyWebhook:function(e){let t=new d;t.destroy(e).then((()=>{this.$store.dispatch("fireflyiii/refreshCacheKey"),this.triggerUpdate()}))},updateBreadcrumbs:function(){this.$route.meta.pageTitle="firefly.webhooks",this.$route.meta.breadcrumbs=[{title:"webhooks"}]},onRequest:function(e){this.page=e.pagination.page,this.triggerUpdate()},triggerUpdate:function(){if(this.loading)return;this.loading=!0;const e=new u;this.rows=[],e.list(this.page,this.getCacheKey).then((e=>{this.pagination.rowsPerPage=e.data.meta.pagination.per_page,this.pagination.rowsNumber=e.data.meta.pagination.total,this.pagination.page=this.page;for(let t in e.data.data)if(e.data.data.hasOwnProperty(t)){let a=e.data.data[t],i={id:a.id,title:a.attributes.title};this.rows.push(i)}this.loading=!1}))}}};var c=a(4260),w=a(4379),h=a(4993),m=a(8186),f=a(2414),b=a(3884),k=a(2226),y=a(7011),q=a(3414),_=a(2035),W=a(2350),Z=a(4264),Q=a(9200),P=a(9975),U=a(677),C=a(7518),v=a.n(C);const T=(0,c.Z)(g,[["render",l]]),$=T;v()(g,"components",{QPage:w.Z,QTable:h.Z,QTr:m.Z,QTh:f.Z,QTd:b.Z,QBtnDropdown:k.Z,QList:y.Z,QItem:q.Z,QItemSection:_.Z,QItemLabel:W.Z,QPageSticky:Z.Z,QFab:Q.Z,QFabAction:P.Z}),v()(g,"directives",{ClosePopup:U.Z})}}]);