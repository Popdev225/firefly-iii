"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[4647],{4647:(t,e,a)=>{a.r(e),a.d(e,{default:()=>P});var i=a(9835),s=a(6970);const r=(0,i.Uk)("Edit"),o=(0,i.Uk)("Delete");function n(t,e,a,n,l,p){const u=(0,i.up)("q-th"),g=(0,i.up)("q-tr"),d=(0,i.up)("router-link"),h=(0,i.up)("q-td"),m=(0,i.up)("q-item-label"),c=(0,i.up)("q-item-section"),w=(0,i.up)("q-item"),f=(0,i.up)("q-list"),b=(0,i.up)("q-btn-dropdown"),y=(0,i.up)("q-table"),_=(0,i.up)("q-page"),k=(0,i.Q2)("close-popup");return(0,i.wg)(),(0,i.j4)(_,null,{default:(0,i.w5)((()=>[(0,i.Wm)(y,{pagination:l.pagination,"onUpdate:pagination":e[0]||(e[0]=t=>l.pagination=t),columns:l.columns,loading:l.loading,rows:l.rows,title:t.$t("firefly.object_groups"),class:"q-ma-md","row-key":"id",onRequest:p.onRequest},{header:(0,i.w5)((t=>[(0,i.Wm)(g,{props:t},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(t.cols,(e=>((0,i.wg)(),(0,i.j4)(u,{key:e.name,props:t},{default:(0,i.w5)((()=>[(0,i.Uk)((0,s.zw)(e.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,i.w5)((t=>[(0,i.Wm)(g,{props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(h,{key:"title",props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(d,{to:{name:"groups.show",params:{id:t.row.id}},class:"text-primary"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,s.zw)(t.row.title),1)])),_:2},1032,["to"])])),_:2},1032,["props"]),(0,i.Wm)(h,{key:"menu",props:t},{default:(0,i.w5)((()=>[(0,i.Wm)(b,{color:"primary",label:"Actions",size:"sm"},{default:(0,i.w5)((()=>[(0,i.Wm)(f,null,{default:(0,i.w5)((()=>[(0,i.wy)(((0,i.wg)(),(0,i.j4)(w,{to:{name:"groups.edit",params:{id:t.row.id}},clickable:""},{default:(0,i.w5)((()=>[(0,i.Wm)(c,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[r])),_:1})])),_:1})])),_:2},1032,["to"])),[[k]]),(0,i.wy)(((0,i.wg)(),(0,i.j4)(w,{clickable:"",onClick:e=>p.deleteGroup(t.row.id,t.row.title)},{default:(0,i.w5)((()=>[(0,i.Wm)(c,null,{default:(0,i.w5)((()=>[(0,i.Wm)(m,null,{default:(0,i.w5)((()=>[o])),_:1})])),_:1})])),_:2},1032,["onClick"])),[[k]])])),_:2},1024)])),_:2},1024)])),_:2},1032,["props"])])),_:2},1032,["props"])])),_:1},8,["pagination","columns","loading","rows","title","onRequest"])])),_:1})}var l=a(7913),p=a(1569);class u{list(t,e,a){let i="/api/v1/object_groups";return p.api.get(i,{params:{page:e,cache:a,type:t}})}}var g=a(3555);const d={name:"Index",watch:{$route(t){"groups.index"===t.name&&(this.page=1,this.updateBreadcrumbs(),this.triggerUpdate())}},data(){return{rows:[],pagination:{sortBy:"desc",descending:!1,page:1,rowsPerPage:5,rowsNumber:100},loading:!1,columns:[{name:"title",label:"Title",field:"title",align:"left"},{name:"menu",label:" ",field:"menu",align:"right"}],store:null}},computed:{},created(){this.pagination.rowsPerPage=this.getListPageSize,this.store=(0,g.S)()},mounted(){this.type=this.$route.params.type,null!==this.store.getRange.start&&null!==this.store.getRange.end||this.store.$onAction((({name:t,$store:e,args:a,after:i,onError:s})=>{i((e=>{"setRange"===t&&(this.range=e,this.triggerUpdate())}))})),null!==this.store.getRange.start&&null!==this.store.getRange.end&&(this.range={start:this.store.getRange.start,end:this.store.getRange.end},this.triggerUpdate())},methods:{deleteGroup:function(t,e){this.$q.dialog({title:"Confirm",message:'Do you want to delete group "'+e+'"? Any resources in this group will be saved.',cancel:!0,persistent:!0}).onOk((()=>{this.destroyGroup(t)}))},destroyGroup:function(t){new l.Z("object_groups").destroy(t).then((()=>{this.store.refreshCacheKey(),this.triggerUpdate()}))},updateBreadcrumbs:function(){this.$route.meta.pageTitle="firefly.groups",this.$route.meta.breadcrumbs=[{title:"groups"}]},onRequest:function(t){this.page=t.pagination.page,this.triggerUpdate()},triggerUpdate:function(){if(this.loading)return;if(null===this.range.start||null===this.range.end)return;this.loading=!0;const t=new u;this.rows=[],t.list(this.page,this.getCacheKey).then((t=>{this.pagination.rowsPerPage=t.data.meta.pagination.per_page,this.pagination.rowsNumber=t.data.meta.pagination.total,this.pagination.page=this.page;for(let e in t.data.data)if(t.data.data.hasOwnProperty(e)){let a=t.data.data[e],i={id:a.id,title:a.attributes.title};this.rows.push(i)}this.loading=!1}))}}};var h=a(1639),m=a(9885),c=a(9497),w=a(3532),f=a(1682),b=a(7220),y=a(2045),_=a(3246),k=a(490),q=a(1233),Z=a(3115),W=a(2146),Q=a(9984),R=a.n(Q);const U=(0,h.Z)(d,[["render",n]]),P=U;R()(d,"components",{QPage:m.Z,QTable:c.Z,QTr:w.Z,QTh:f.Z,QTd:b.Z,QBtnDropdown:y.Z,QList:_.Z,QItem:k.Z,QItemSection:q.Z,QItemLabel:Z.Z}),R()(d,"directives",{ClosePopup:W.Z})}}]);