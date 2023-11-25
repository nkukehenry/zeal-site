<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/site/img/favicon.png">

<script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script>
<script>class RocketLazyLoadScripts{constructor(){this.v="1.2.3",this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",t=>{this.persisted=t.persisted}),window.addEventListener("DOMContentLoaded",()=>{this._preconnect3rdParties()}),this.delayedScripts={normal:[],async:[],defer:[]},this.trash=[],this.allJQueries=[]}_addUserInteractionListener(t){if(document.hidden){t._triggerListener();return}this.triggerEvents.forEach(e=>window.addEventListener(e,t.userEventHandler,{passive:!0})),window.addEventListener("touchstart",t.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",t.touchStartHandler),document.addEventListener("visibilitychange",t.userEventHandler)}_removeUserInteractionListener(){this.triggerEvents.forEach(t=>window.removeEventListener(t,this.userEventHandler,{passive:!0})),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(t){"HTML"!==t.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),t.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"onclick","rocket-onclick"),this._pendingClickStarted())}_onTouchMove(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this._pendingClickFinished()}_onTouchEnd(t){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(t){t.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(t.target,"rocket-onclick","onclick"),this.interceptedClicks.push(t),t.preventDefault(),t.stopPropagation(),t.stopImmediatePropagation(),this._pendingClickFinished()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach(t=>{t.target.dispatchEvent(new MouseEvent("click",{view:t.view,bubbles:!0,cancelable:!0}))})}_waitForPendingClicks(){return new Promise(t=>{this._isClickPending?this._pendingClickFinished=t:t()})}_pendingClickStarted(){this._isClickPending=!0}_pendingClickFinished(){this._isClickPending=!1}_renameDOMAttribute(t,e,r){t.hasAttribute&&t.hasAttribute(e)&&(event.target.setAttribute(r,event.target.getAttribute(e)),event.target.removeAttribute(e))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let t=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(e=>{if(e.hasAttribute("src")){let r=new URL(e.html).origin;r!==location.origin&&t.push({src:r,crossOrigin:e.crossOrigin||"module"===e.getAttribute("data-rocket-type")})}}),t=[...new Map(t.map(t=>[JSON.stringify(t),t])).values()],this._batchInjectResourceHints(t,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(this),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(t){console.error(t)}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._waitForPendingClicks().then(()=>{this._replayClicks()}),this._emptyTrash()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach(t=>{t.hasAttribute("data-rocket-src")?t.hasAttribute("async")&&!1!==t.async?this.delayedScripts.async.push(t):t.hasAttribute("defer")&&!1!==t.defer||"module"===t.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(t):this.delayedScripts.normal.push(t):this.delayedScripts.normal.push(t)})}async _transformScript(t){return new Promise((await this._littleBreath(),navigator.userAgent.indexOf("Firefox/index.html")>0||""===navigator.vendor)?e=>{let r=document.createElement("script");[...t.attributes].forEach(t=>{let e=t.nodeName;"type"!==e&&("data-rocket-type"===e&&(e="type"),"data-rocket-src"===e&&(e="src"),r.setAttribute(e,t.nodeValue))}),t.text&&(r.text=t.text),r.hasAttribute("src")?(r.addEventListener("load",e),r.addEventListener("error",e)):(r.text=t.text,e());try{t.parentNode.replaceChild(r,t)}catch(i){e()}}:async e=>{function r(){t.setAttribute("data-rocket-status","failed"),e()}try{let i=t.getAttribute("data-rocket-type"),n=t.getAttribute("data-rocket-src");t.text,i?(t.type=i,t.removeAttribute("data-rocket-type")):t.removeAttribute("type"),t.addEventListener("load",function r(){t.setAttribute("data-rocket-status","executed"),e()}),t.addEventListener("error",r),n?(t.removeAttribute("data-rocket-src"),t.src=n):t.src="data:text/javascript;base64,"+window.btoa(unescape(encodeURIComponent(t.text)))}catch(s){r()}})}async _loadScriptsFromList(t){let e=t.shift();return e&&e.isConnected?(await this._transformScript(e),this._loadScriptsFromList(t)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(t,e){var r=document.createDocumentFragment();t.forEach(t=>{let i=t.getAttribute&&t.getAttribute("data-rocket-src")||t.src;if(i){let n=document.createElement("link");n.href=i,n.rel=e,"preconnect"!==e&&(n.as="script"),t.getAttribute&&"module"===t.getAttribute("data-rocket-type")&&(n.crossOrigin=!0),t.crossOrigin&&(n.crossOrigin=t.crossOrigin),t.integrity&&(n.integrity=t.integrity),r.appendChild(n),this.trash.push(n)}}),document.head.appendChild(r)}_delayEventListeners(t){let e={};function r(t,r){!function t(r){!e[r]&&(e[r]={originalFunctions:{add:r.addEventListener,remove:r.removeEventListener},eventsToRewrite:[]},r.addEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.add.apply(r,arguments)},r.removeEventListener=function(){arguments[0]=i(arguments[0]),e[r].originalFunctions.remove.apply(r,arguments)});function i(t){return e[r].eventsToRewrite.indexOf(t)>=0?"rocket-"+t:t}}(t),e[t].eventsToRewrite.push(r)}function i(t,e){let r=t[e];Object.defineProperty(t,e,{get:()=>r||function(){},set(i){t["rocket"+e]=r=i}})}r(document,"DOMContentLoaded"),r(window,"DOMContentLoaded"),r(window,"load"),r(window,"pageshow"),r(document,"readystatechange"),i(document,"onreadystatechange"),i(window,"onload"),i(window,"onpageshow")}_delayJQueryReady(t){let e;function r(r){if(r&&r.fn&&!t.allJQueries.includes(r)){r.fn.ready=r.fn.init.prototype.ready=function(e){return t.domReadyFired?e.bind(document)(r):document.addEventListener("rocket-DOMContentLoaded",()=>e.bind(document)(r)),r([])};let i=r.fn.on;r.fn.on=r.fn.init.prototype.on=function(){if(this[0]===window){function t(t){return t.split(" ").map(t=>"load"===t||0===t.indexOf("load.")?"rocket-jquery-load":t).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=t(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach(e=>{let r=arguments[0][e];delete arguments[0][e],arguments[0][t(e)]=r})}return i.apply(this,arguments),this},t.allJQueries.push(r)}e=r}r(window.jQuery),Object.defineProperty(window,"jQuery",{get:()=>e,set(t){r(t)}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach(t=>t(window).trigger("rocket-jquery-load")),await this._littleBreath();let t=new Event("rocket-pageshow");t.persisted=this.persisted,window.dispatchEvent(t),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){let t=new Map;document.write=document.writeln=function(e){let r=document.currentScript;r||console.error("WPRocket unable to document.write this: "+e);let i=document.createRange(),n=r.parentElement,s=t.get(r);void 0===s&&(s=r.nextSibling,t.set(r,s));let a=document.createDocumentFragment();i.setStart(a,0),a.appendChild(i.createContextualFragment(e)),n.insertBefore(a,s)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise(t=>setTimeout(t)):new Promise(t=>requestAnimationFrame(t))}_emptyTrash(){this.trash.forEach(t=>t.remove())}static run(){let t=new RocketLazyLoadScripts;t._addUserInteractionListener(t)}}RocketLazyLoadScripts.run();</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<link data-minify="1" rel='stylesheet' id='wpmm_css-css' href='<?php echo base_url(); ?>assets/site/custom/css/wpmm70f0.css?ver=1683709233' type='text/css' media='all' />
<!-- <script type="rocketlazyloadscript" data-rocket-type='text/javascript' data-rocket-src='<?php echo base_url(); ?>assets/site/custom/js/rate.js?ver=1.1.1' id='jquery-js' defer></script> -->
<!-- <link data-minify="1" href="<?php echo base_url(); ?>assets/site/custom/css/homea9a4.css?ver=1683709234" rel="stylesheet">
<link data-minify="1" href="<?php echo base_url(); ?>assets/site/custom/css/responsive70f0.css?ver=1683709233" rel="stylesheet">
<link data-minify="1" href="<?php echo base_url(); ?>assets/site/custom/css/flags.css" rel="stylesheet"> -->
<link data-minify="1" href="<?php echo base_url(); ?>assets/site/custom/css/custom.css" rel="stylesheet"> 
<link data-minify="1" href="<?php echo base_url(); ?>assets/site/custom/css/flag-icons.min.css" rel="stylesheet"> 

<link href="<?php echo base_url(); ?>assets/site/custom/css/converter.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/site/custom/fonts/myFonts.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/site/custom/fonts/googleFonts.css" rel="stylesheet">



<?php

$CI =& get_instance();
$CI->load->model('Model_common');

$language = $CI->Model_common->get_language_data();

foreach ($language as $lang) {
    define($lang['name'], $lang['value']);
}

$class_name = '';
$segment_2 = 0;
$segment_3 = 0;
$class_name = $this->router->fetch_class();
$segment_2 = $this->uri->segment('2');
$segment_3 = $this->uri->segment('3');

if($class_name == 'home')
{
    echo '<meta name="description" content="'.$page_home['meta_description'].'">';
    echo '<meta name="keywords" content="'.$page_home['meta_keyword'].'">';
    echo '<title>'.$page_home['title'].'</title>';
}
if($class_name == 'about')
{
    echo '<meta name="description" content="'.$page_about['md_about'].'">';
    echo '<meta name="keywords" content="'.$page_about['mk_about'].'">';
    echo '<title>'.$page_about['mt_about'].'</title>';
}
if($class_name == 'faq')
{
    echo '<meta name="description" content="'.$page_faq['md_faq'].'">';
    echo '<meta name="keywords" content="'.$page_faq['mk_faq'].'">';
    echo '<title>'.$page_faq['mt_faq'].'</title>';
}
if($class_name == 'team')
{
    echo '<meta name="description" content="'.$page_team['md_team'].'">';
    echo '<meta name="keywords" content="'.$page_team['mk_team'].'">';
    echo '<title>'.$page_team['mt_team'].'</title>';
}
if($class_name == 'team_member')
{
    $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
    echo '<meta name="description" content="'.$single_team_member['meta_description'].'">';
    echo '<meta name="keywords" content="'.$single_team_member['meta_keyword'].'">';
    echo '<title>'.$single_team_member['meta_title'].'</title>';
}
if($class_name == 'portfolio')
{
    echo '<meta name="description" content="'.$page_portfolio['md_portfolio'].'">';
    echo '<meta name="keywords" content="'.$page_portfolio['mk_portfolio'].'">';
    echo '<title>'.$page_portfolio['mt_portfolio'].'</title>';
}
if($class_name == 'testimonial')
{
    echo '<meta name="description" content="'.$page_testimonial['md_testimonial'].'">';
    echo '<meta name="keywords" content="'.$page_testimonial['mk_testimonial'].'">';
    echo '<title>'.$page_testimonial['mt_testimonial'].'</title>';
}
if($class_name == 'contact')
{
    echo '<meta name="description" content="'.$page_contact['md_contact'].'">';
    echo '<meta name="keywords" content="'.$page_contact['mk_contact'].'">';
    echo '<title>'.$page_contact['mt_contact'].'</title>';
}
if($class_name == 'search')
{
    echo '<meta name="description" content="'.$page_search['md_search'].'">';
    echo '<meta name="keywords" content="'.$page_search['mk_search'].'">';
    echo '<title>'.$page_search['mt_search'].'</title>';
}
if($class_name == 'terms-and-conditions')
{
    echo '<meta name="description" content="'.$page_term['md_term'].'">';
    echo '<meta name="keywords" content="'.$page_term['mk_term'].'">';
    echo '<title>'.$page_term['mt_term'].'</title>';
}
if($class_name == 'privacy-policy')
{
    echo '<meta name="description" content="'.$page_privacy['md_privacy'].'">';
    echo '<meta name="keywords" content="'.$page_privacy['mk_privacy'].'">';
    echo '<title>'.$page_privacy['mt_privacy'].'</title>';
}
if($class_name == 'pricing')
{
    echo '<meta name="description" content="'.$page_pricing['md_pricing'].'">';
    echo '<meta name="keywords" content="'.$page_pricing['mk_pricing'].'">';
    echo '<title>'.$page_pricing['mt_pricing'].'</title>';
}
if($class_name == 'photo_gallery')
{
    echo '<meta name="description" content="'.$page_photo_gallery['md_photo_gallery'].'">';
    echo '<meta name="keywords" content="'.$page_photo_gallery['mk_photo_gallery'].'">';
    echo '<title>'.$page_photo_gallery['mt_photo_gallery'].'</title>';
}
if($class_name == 'service')
{
    if($segment_3 == 0) {
        echo '<meta name="description" content="'.$page_service['md_service'].'">';
        echo '<meta name="keywords" content="'.$page_service['mk_service'].'">';
        echo '<title>'.$page_service['mt_service'].'</title>';  
    } else {
        $single_service = $this->Model_service->service_detail($segment_3);
        echo '<meta name="description" content="'.$single_service['meta_description'].'">';
        echo '<meta name="keywords" content="'.$single_service['meta_keyword'].'">';
        echo '<title>'.$single_service['meta_title'].'</title>';
    }       
}
if($class_name == 'category')
{
    $single_category = $this->Model_category->category_by_id($segment_2);
    echo '<meta name="description" content="'.$single_category['meta_description'].'">';
    echo '<meta name="keywords" content="'.$single_category['meta_keyword'].'">';
    echo '<title>'.$single_category['meta_title'].'</title>';     
}
if($class_name == 'news')
{
    if($segment_3 == 0) {
        echo '<meta name="description" content="'.$page_news['md_news'].'">';
        echo '<meta name="keywords" content="'.$page_news['mk_news'].'">';
        echo '<title>'.$page_news['mt_news'].'</title>';
    } else {
        $news_single_item = $this->Model_news->news_detail($segment_3);
        echo '<meta name="description" content="'.$news_single_item['meta_description'].'">';
        echo '<meta name="keywords" content="'.$news_single_item['meta_keyword'].'">';
        echo '<title>'.$news_single_item['meta_title'].'</title>';
        $og_id = $news_single_item['news_id'];
        $og_photo = $news_single_item['photo'];
        $og_title = $news_single_item['news_title'];
        $og_description = $news_single_item['news_content_short'];
        echo '<meta property="og:title" content="'.$og_title.'">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:url" content="'.base_url().'news/view/'.$og_id.'">';
        echo '<meta property="og:description" content="'.$og_description.'">';
        echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
    }
}
if($class_name == 'event')
{
    if($segment_3 == 0) {
        echo '<meta name="description" content="'.$page_event['md_event'].'">';
        echo '<meta name="keywords" content="'.$page_event['mk_event'].'">';
        echo '<title>'.$page_event['mt_event'].'</title>';
    } else {
        $event_single_item = $this->Model_event->event_detail($segment_3);
        echo '<meta name="description" content="'.$event_single_item['meta_description'].'">';
        echo '<meta name="keywords" content="'.$event_single_item['meta_keyword'].'">';
        echo '<title>'.$event_single_item['meta_title'].'</title>';
        $og_id = $event_single_item['event_id'];
        $og_photo = $event_single_item['photo'];
        $og_title = $event_single_item['event_title'];
        $og_description = $event_single_item['event_content_short'];
        echo '<meta property="og:title" content="'.$og_title.'">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:url" content="'.base_url().'event/view/'.$og_id.'">';
        echo '<meta property="og:description" content="'.$og_description.'">';
        echo '<meta property="og:image" content="'.base_url().'public/uploads/'.$og_photo.'">';
    }
}
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/flaticon.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/remixicon.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/odometer.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/fancybox.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/aos.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/dark-theme.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/css/glossy-buttons.css">

<style>

.fx-rates{
    background-image: url(<?php echo base_url(); ?>assets/site/img/map.png);
    background-position:bottom left;
    background-size:40%;
    background-repeat:no-repeat;
}

@media screen and (max-width: 780px) {

    .navbar-collapse{
    min-width: 100%;
    background-image: url(<?php echo base_url(); ?>assets/site/img/map.png);
    background-position:right;
    background-size:contain;
    background-repeat:no-repeat;
   }
    
}

.rounded{
    border-radius: 30px!important;
}

.btn{

    padding-top: 7px!important;
    padding-bottom: 7px!important;
}

.btn-outline{

}

.page-wrapper{
    margin:0px!important;
    padding:0px!important;
}

.navbar-collapse {
    margin-top: 0px!important;
}

</style>
</head>
<body>


<div class="preloader js-preloader">
<div class="loader loader-inner-1">
<div class="loader loader-inner-2">
<div class="loader loader-inner-3">
</div>
</div>
</div>
</div>



<!-- Theme Switch -->
<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>


<div class="page-wrapper">

<header class="header-wrap style2">
<div class="header-bottom">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="<?php echo base_url(); ?>">
<img class="logo-light" src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo" width="200px">
<img class="logo-dark" src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="logo"  width="200px">
</a>
<div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
<div class="menu-close d-lg-none">
<a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
</div>
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a href="<?php echo base_url(); ?>" class="nav-link active">
Home
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('about'); ?>" class="nav-link">
 About Us
</a>
</li>
<li class="nav-item">
<a href="<?php echo base_url('faq'); ?>" class="nav-link">Faqs</a>
</li>

<!-- <li class="nav-item">
<a href="#" class="nav-link">
Blog
</a>
<li> -->
<li class="nav-item">
<a href="<?php echo base_url('contact'); ?>" class="nav-link">Contact Us</a>
</li>
<li class="nav-item d-lg-none">
<a href="tel:+256755544555" class="nav-link btn rounded style1">Call  +256 755 544 555<</a>
</li>
</ul>

<div class="other-options md-none">

<div class="option-item">
<a href="tel:+256755544555" class="btn  rounded style1">Call  +256 755 544 555</a>
</div>
</div>

</div>

</nav>
<div class="mobile-bar-wrap">
    <div class="mobile-menu d-lg-none" >
      <a href="javascript:void(0)" class="menu-trigger"><i class="ri-menu-line"></i></a>
    </div>
</div>
</div>
</div>
</header>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/site/custom/css/social.css">

<section class="banner">
    <div class="banner-social-icons_wrapper">
    <!-- <center> -->
        <?php foreach($social as $media): ?>
            <a href="https://www.linkedin.com/company/2629703/" class="<?php echo $media['social_icon']; ?> twitter-bg" target="_blank" title="linkedin" style="width: 50px; text-align: center;">
                <img width="32" height="32" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2032%2032'%3E%3C/svg%3E" alt="icon" data-lazy-src="https://www.efsme.com/wp-content/uploads/2022/02/linkedin.svg"><noscript> <i class="ri-phone-fill"></i> </noscript>
            </a>
        <?php endforeach; ?>
    </div>
</section>
