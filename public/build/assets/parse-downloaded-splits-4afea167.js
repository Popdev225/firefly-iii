import{c as r}from"./create-empty-split-fb5bda92.js";import{f as o}from"./vendor-fca45885.js";function c(a){let n=[];for(let i in a)if(a.hasOwnProperty(i)){let e=a[i],t=r();t.bill_id=e.bill_id,t.bill_name=e.bill_name,t.budget_id=e.budget_id,t.budget_name=e.budget_name,t.category_name=e.category_name,t.category_id=e.category_id,t.piggy_bank_id=e.piggy_bank_id,t.piggy_bank_name=e.piggy_bank_name,t.book_date=e.book_date,t.due_date=e.due_date,t.interest_date=e.interest_date,t.invoice_date=e.invoice_date,t.payment_date=e.payment_date,t.process_date=e.process_date,t.external_url=e.external_url,t.internal_reference=e.internal_reference,t.notes=e.notes,t.tags=e.tags,t.amount=parseFloat(e.amount).toFixed(e.currency_decimal_places),t.currency_code=e.currency_code,e.foreign_amount!==null&&(t.forein_currency_code=e.foreign_currency_code,t.foreign_amount=parseFloat(e.foreign_amount).toFixed(e.foreign_currency_decimal_places)),t.date=o(new Date(e.date),"yyyy-MM-dd HH:mm"),t.description=e.description,t.destination_account={id:e.destination_id,name:e.destination_name,type:e.destination_type,alpine_name:e.destination_name},t.source_account={id:e.source_id,name:e.source_name,type:e.source_type,alpine_name:e.source_name},e.latitude!==null&&(t.hasLocation=!0,t.latitude=e.latitude,t.longitude=e.longitude,t.zoomLevel=e.zoom_level),n.push(t)}return n}export{c as p};
