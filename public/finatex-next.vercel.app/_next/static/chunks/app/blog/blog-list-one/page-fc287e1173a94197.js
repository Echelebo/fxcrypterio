(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[5001],{9658:function(e,a,t){Promise.resolve().then(t.t.bind(t,1749,23)),Promise.resolve().then(t.t.bind(t,5250,23)),Promise.resolve().then(t.bind(t,9390)),Promise.resolve().then(t.bind(t,9074))},743:function(e,a,t){"use strict";var s=t(3827);t(4090);var i=t(703),l=t(8792),n=t(6821),o=t(183),r=t(5385);a.Z=e=>{let{data:a,type:t}=e;return(0,s.jsxs)(s.Fragment,{children:["list-one"===t&&(0,s.jsxs)(l.default,{className:"blog-item flex max-md:flex-col md:items-center gap-7 gap-y-5",href:"/blog/blog-detail-one/[slug]",as:"/blog/blog-detail-one/"+a.title.toLowerCase().replace(/ /g,"-"),children:[(0,s.jsx)("div",{className:"w-full md:w-1/2",children:(0,s.jsx)("div",{className:"bg-img w-full overflow-hidden rounded-2xl",children:(0,s.jsx)(i.default,{width:5e3,height:5e3,className:"w-full h-full block",src:a.img,alt:a.title})})}),(0,s.jsxs)("div",{className:"w-full md:w-1/2",children:[(0,s.jsx)("div",{className:"caption2 py-1 px-3 bg-surface rounded-full inline-block capitalize",children:a.tag}),(0,s.jsx)("div",{className:"heading6 mt-2",children:a.title}),(0,s.jsxs)("div",{className:"date flex items-center gap-4 mt-2",children:[(0,s.jsxs)("div",{className:"author caption2 text-secondary",children:["by ",(0,s.jsxs)("span",{className:"text-on-surface",children:[a.author," "]})]}),(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(n.R,{weight:"bold"}),(0,s.jsx)("span",{className:"ml-1 caption2",children:a.date})]})]}),(0,s.jsx)("div",{className:"body3 text-secondary mt-4 pb-4",children:a.desc}),(0,s.jsx)("div",{className:"read font-bold underline",children:"Read More"})]})]}),"list-two"===t&&(0,s.jsx)(l.default,{className:"blog-item block",href:"/blog/blog-detail-one/[slug]",as:"/blog/blog-detail-one/"+a.title.toLowerCase().replace(/ /g,"-"),children:(0,s.jsxs)("div",{className:"w-full",children:[(0,s.jsx)("div",{className:"bg-img w-full overflow-hidden rounded-2xl",children:(0,s.jsx)(i.default,{width:5e3,height:5e3,className:"w-full h-full block",src:a.img,alt:a.title})}),(0,s.jsxs)("div",{className:"date flex items-center gap-4 mt-5",children:[(0,s.jsxs)("div",{className:"author caption2 text-secondary",children:["by ",(0,s.jsxs)("span",{className:"text-on-surface",children:[a.author," "]})]}),(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(n.R,{weight:"bold"}),(0,s.jsx)("span",{className:"ml-1 caption2",children:a.date})]}),(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(o.e,{}),(0,s.jsx)("span",{className:"ml-1 caption2",children:"19"})]}),(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(r.b,{}),(0,s.jsx)("span",{className:"ml-1 caption2",children:"130"})]})]}),(0,s.jsx)("div",{className:"heading6 mt-2",children:a.title}),(0,s.jsx)("div",{className:"body3 text-secondary mt-2 pb-4",children:a.desc}),(0,s.jsx)("div",{className:"read font-bold underline",children:"Read More"})]})}),"grid"===t&&(0,s.jsx)("div",{className:"blog-item",children:(0,s.jsxs)(l.default,{className:"blog-item-main h-full block bg-white border border-line overflow-hidden rounded-2xl hover-box-shadow duration-500",href:"/blog/blog-detail-one/[slug]",as:"/blog/blog-detail-one/"+a.title.toLowerCase().replace(/ /g,"-"),children:[(0,s.jsx)("div",{className:"bg-img w-full overflow-hidden",children:(0,s.jsx)(i.default,{width:5e3,height:5e3,className:"w-full h-full block",src:a.img,alt:a.title})}),(0,s.jsxs)("div",{className:"infor sm:p-6 p-4",children:[(0,s.jsx)("div",{className:"caption2 py-1 px-3 bg-surface rounded-full inline-block capitalize",children:a.tag}),(0,s.jsx)("div",{className:"heading6 mt-2",children:a.title}),(0,s.jsxs)("div",{className:"date flex items-center gap-4 mt-2",children:[(0,s.jsxs)("div",{className:"author caption2 text-secondary",children:["by ",(0,s.jsxs)("span",{className:"text-on-surface",children:[a.author," "]})]}),(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(n.R,{weight:"bold"}),(0,s.jsx)("span",{className:"ml-1 caption2",children:a.date})]})]})]})]})})]})}},9390:function(e,a,t){"use strict";t.r(a);var s=t(3827),i=t(4090),l=t(7907),n=t(3125),o=t(743),r=t(9602),g=t(75),c=t(293),d=t(6821),m=t(8792),h=t(703);a.default=()=>{let[e,a]=(0,i.useState)(0),t=5*e,p=(0,l.useSearchParams)(),b=p.get("category"),u=p.get("tag"),[x,v]=(0,i.useState)(b),[y,j]=(0,i.useState)(u),f=e=>{v(a=>a===e?null:e),a(0)},N=e=>{j(a=>a===e?null:e),a(0)},w=n.filter(e=>{let a=!0;x&&(a=e.category===x);let t=!0;return y&&(t=e.tag===y),a&&t});0===w.length&&(w=[{id:-1,category:"no-data",tag:"no-data",title:"no-data",date:"no-data",author:"no-data",avatar:"no-data",img:"",desc:"no-data",listImg:[]}]);let k=Math.ceil(w.length/5);0===k&&a(0);let A=w.slice(t,t+5);return(0,s.jsx)("div",{className:"list-blog lg:py-[100px] sm:py-16 py-10",children:(0,s.jsx)("div",{className:"container",children:(0,s.jsxs)("div",{className:"flex max-lg:flex-col gap-y-10",children:[(0,s.jsxs)("div",{className:"w-full lg:w-2/3",children:[(0,s.jsx)("div",{className:"list flex flex-col gap-y-10",children:A.map(e=>-1===e.id?(0,s.jsx)("div",{className:"no-data-blog",children:"No blogs match the selected criteria."},e.id):(0,s.jsx)(o.Z,{data:e,type:"list-one"},e.id))}),k>1&&(0,s.jsx)("div",{className:"list-pagination w-full flex items-center md:mt-10 mt-6",children:(0,s.jsx)(r.Z,{pageCount:k,onPageChange:e=>{a(e)}})})]}),(0,s.jsxs)("div",{className:"w-full lg:w-1/3 lg:pl-[55px]",children:[(0,s.jsxs)("div",{className:"search-block rounded-lg bg-surface h-[50px] relative",children:[(0,s.jsx)("input",{className:"rounded-lg bg-surface w-full h-full pl-4 pr-12",type:"text",placeholder:"Search"}),(0,s.jsx)(g.Y,{className:"absolute top-1/2 -translate-y-1/2 right-4 text-xl cursor-pointer"})]}),(0,s.jsxs)("div",{className:"cate-block md:mt-10 mt-6",children:[(0,s.jsx)("div",{className:"heading7",children:"Categories"}),(0,s.jsx)("div",{className:"list-nav mt-4",children:["financial planning","payment solution","cryptocurrency financial","blockchain","online banking","personal financial"].map(e=>(0,s.jsxs)("div",{className:"nav-item rounded-lg flex items-center justify-between p-3 cursor-pointer text-button text-secondary capitalize ".concat(e===x?"active":""),onClick:()=>f(e),children:[e,(0,s.jsx)(c.T,{weight:"bold"})]},e))})]}),(0,s.jsxs)("div",{className:"recent-post-block md:mt-10 mt-6",children:[(0,s.jsx)("div",{className:"recent-post-heading heading7",children:"Recent Posts"}),(0,s.jsx)("div",{className:"list-recent-post flex flex-col gap-6 mt-4",children:n.slice(4,7).map(e=>(0,s.jsxs)(m.default,{href:"/blog/blog-detail-one/[slug]",as:"/blog/blog-detail-one/"+e.title.toLowerCase().replace(/ /g,"-"),className:"recent-post-item flex items-start gap-4 cursor-pointer",children:[(0,s.jsx)("div",{className:"item-img flex-shrink-0 w-20 h-20 rounded",children:(0,s.jsx)(h.default,{width:5e3,height:5e3,src:e.img,alt:e.title,className:"w-full h-full object-cover"})}),(0,s.jsxs)("div",{className:"item-infor w-full",children:[(0,s.jsxs)("div",{className:"item-date flex items-center",children:[(0,s.jsx)(d.R,{weight:"bold"}),(0,s.jsx)("span",{className:"ml-1 caption2",children:e.date})]}),(0,s.jsx)("div",{className:"item-title mt-1",children:e.title})]})]},e.id))})]}),(0,s.jsxs)("div",{className:"tags-popular-block md:mt-10 mt-6",children:[(0,s.jsx)("div",{className:"tag-heading heading7",children:"Popular Tags"}),(0,s.jsx)("div",{className:"list-tag mt-4 flex flex-wrap gap-3",children:["featured","experience","interview","skill","business","design"].map(e=>(0,s.jsx)("div",{className:"caption2 py-2 px-4 rounded-2xl hover:bg-black hover:text-white duration-300 cursor-pointer ".concat(e===y?"bg-black text-white":"bg-surface"),onClick:()=>N(e),children:e},e))})]})]})]})})})}},9602:function(e,a,t){"use strict";var s=t(3827);t(4090);var i=t(482),l=t.n(i);a.Z=e=>{let{pageCount:a,onPageChange:t}=e;return(0,s.jsx)(l(),{previousLabel:"<",nextLabel:">",pageCount:a,pageRangeDisplayed:3,marginPagesDisplayed:2,onPageChange:e=>t(e.selected),containerClassName:"pagination",activeClassName:"active"})}},75:function(e,a,t){"use strict";t.d(a,{Y:function(){return b}});var s=t(4090),i=t(5451);let l=new Map([["bold",s.createElement(s.Fragment,null,s.createElement("path",{d:"M232.49,215.51,185,168a92.12,92.12,0,1,0-17,17l47.53,47.54a12,12,0,0,0,17-17ZM44,112a68,68,0,1,1,68,68A68.07,68.07,0,0,1,44,112Z"}))],["duotone",s.createElement(s.Fragment,null,s.createElement("path",{d:"M192,112a80,80,0,1,1-80-80A80,80,0,0,1,192,112Z",opacity:"0.2"}),s.createElement("path",{d:"M229.66,218.34,179.6,168.28a88.21,88.21,0,1,0-11.32,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"}))],["fill",s.createElement(s.Fragment,null,s.createElement("path",{d:"M168,112a56,56,0,1,1-56-56A56,56,0,0,1,168,112Zm61.66,117.66a8,8,0,0,1-11.32,0l-50.06-50.07a88,88,0,1,1,11.32-11.31l50.06,50.06A8,8,0,0,1,229.66,229.66ZM112,184a72,72,0,1,0-72-72A72.08,72.08,0,0,0,112,184Z"}))],["light",s.createElement(s.Fragment,null,s.createElement("path",{d:"M228.24,219.76l-51.38-51.38a86.15,86.15,0,1,0-8.48,8.48l51.38,51.38a6,6,0,0,0,8.48-8.48ZM38,112a74,74,0,1,1,74,74A74.09,74.09,0,0,1,38,112Z"}))],["regular",s.createElement(s.Fragment,null,s.createElement("path",{d:"M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"}))],["thin",s.createElement(s.Fragment,null,s.createElement("path",{d:"M226.83,221.17l-52.7-52.7a84.1,84.1,0,1,0-5.66,5.66l52.7,52.7a4,4,0,0,0,5.66-5.66ZM36,112a76,76,0,1,1,76,76A76.08,76.08,0,0,1,36,112Z"}))]]);var n=Object.defineProperty,o=Object.defineProperties,r=Object.getOwnPropertyDescriptors,g=Object.getOwnPropertySymbols,c=Object.prototype.hasOwnProperty,d=Object.prototype.propertyIsEnumerable,m=(e,a,t)=>a in e?n(e,a,{enumerable:!0,configurable:!0,writable:!0,value:t}):e[a]=t,h=(e,a)=>{for(var t in a||(a={}))c.call(a,t)&&m(e,t,a[t]);if(g)for(var t of g(a))d.call(a,t)&&m(e,t,a[t]);return e},p=(e,a)=>o(e,r(a));let b=(0,s.forwardRef)((e,a)=>s.createElement(i.Z,p(h({ref:a},e),{weights:l})));b.displayName="MagnifyingGlass"},3125:function(e){"use strict";e.exports=JSON.parse('[{"id":1,"tag":"featured","category":"financial planning","img":"/images/blog/item1.png","title":"Investment Opportunities Explore Options","author":"Avitex","avatar":"/images/member/avatar3.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item2.png","/images/blog/item3.png"]},{"id":2,"tag":"experience","category":"payment solution","img":"/images/blog/item2.png","title":"Credit Card Management Use Wisely","author":"Avitex","avatar":"/images/member/avatar4.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item4.png","/images/blog/item5.png"]},{"id":3,"tag":"interview","category":"cryptocurrency financial","img":"/images/blog/item3.png","title":"Savings Strategies Strong Foundation","author":"Avitex","avatar":"/images/member/avatar5.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item2.png","/images/blog/item1.png"]},{"id":4,"tag":"skill","category":"blockchain","img":"/images/blog/item4.png","title":"Stock Market Trends Analyze Movements","author":"Avitex","avatar":"/images/member/avatar3.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item3.png","/images/blog/item6.png"]},{"id":5,"tag":"business","category":"online banking","img":"/images/blog/item5.png","title":"Estate Planning Secure Your Legacy","author":"Avitex","avatar":"/images/member/avatar4.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item8.png","/images/blog/item2.png"]},{"id":6,"tag":"design","category":"personal financial","img":"/images/blog/item6.png","title":"Wealth Building Sustainable Growth","author":"Avitex","avatar":"/images/member/avatar5.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item5.png","/images/blog/item3.png"]},{"id":7,"tag":"featured","category":"financial planning","img":"/images/blog/item7.png","title":"Insurance Essentials Protect Your Assets","author":"Avitex","avatar":"/images/member/avatar3.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item4.png","/images/blog/item9.png"]},{"id":8,"tag":"experience","category":"payment solution","img":"/images/blog/item8.png","title":"Financial Freedom Achieve Your Goals","author":"Avitex","avatar":"/images/member/avatar4.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item6.png","/images/blog/item5.png"]},{"id":9,"tag":"interview","category":"cryptocurrency financial","img":"/images/blog/item9.png","title":"Real Estate Investing Build Wealth","author":"Avitex","avatar":"/images/member/avatar5.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item3.png","/images/blog/item10.png"]},{"id":10,"tag":"skill","category":"blockchain","img":"/images/blog/item10.png","title":"Debt Management Break the Cycle","author":"Avitex","avatar":"/images/member/avatar3.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item11.png","/images/blog/item12.png"]},{"id":11,"tag":"business","category":"online banking","img":"/images/blog/item11.png","title":"Tax Saving Tips Maximize Your Returns","author":"Avitex","avatar":"/images/member/avatar4.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item10.png","/images/blog/item6.png"]},{"id":12,"tag":"design","category":"personal financial","img":"/images/blog/item12.png","title":"Economic Outlook Navigating Market","author":"Avitex","avatar":"/images/member/avatar5.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item13.png","/images/blog/item10.png"]},{"id":13,"tag":"experience","category":"financial planning","img":"/images/blog/item13.png","title":"Insurance Essentials Protecting Your Assets","author":"Avitex","avatar":"/images/member/avatar3.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item11.png","/images/blog/item12.png"]},{"id":14,"tag":"interview","category":"cryptocurrency financial","img":"/images/blog/item4.png","title":"Retirement Planning Secure Your Future","author":"Avitex","avatar":"/images/member/avatar4.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item6.png","/images/blog/item2.png"]},{"id":15,"tag":"business","category":"blockchain","img":"/images/blog/item12.png","title":"Budgeting Tips Mastering Your Finances","author":"Avitex","avatar":"/images/member/avatar5.png","date":"2 days ago","desc":"The jobs report soundly beat expectations, with job gains broadly spread across the economy and about 60% higher…","listImg":["/images/blog/item7.png","/images/blog/item4.png"]}]')}},function(e){e.O(0,[862,199,9074,2971,8069,1744],function(){return e(e.s=9658)}),_N_E=e.O()}]);