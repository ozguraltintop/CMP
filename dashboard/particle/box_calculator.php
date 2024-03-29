<!doctype html>
<html class="no-js " lang="en">
<head>
<?php include 'head.php';?>
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- JQuery DataTable Css -->
<link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/color_skins.css">
<style type="text/css">
	:root {
  --bg: #e7efef;
  --face-1: #be8e64;
  --face-2: #dba776;
  --face-3: #e7b37e;
  --face-4: #f3bf86;
  --face-5: #eab37b;
  --face-6: #7d3712;
  --flap-one: #edb678;
  --flap-two: #efc08a;
  --flap-three: #ebbb84;
  --flap-four: #f2c592;
  --flap-five: #efbb80;
  --tape: #b07c54;
  --no-of-steps: 23;
}
*,
*:after,
*:before {
  box-sizing: border-box;
  transform-style: preserve-3d;
}
.centermania {
  background: #ffff0;
  min-height: 100vh;
  display: grid;
  place-items: center;
  perspective: 100vmin;
  overflow: hidden;
  

}
input {
  position: fixed;
  top: 0;
  left: 0;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border-width: 0;
}
.close,
.open {
  position: fixed;
  height: 100vh;
  width: 100vw;
  z-index: 2;
  transform: scale(var(--scale, 1)) translate3d(0, 0, 50vmin);
  transition: transform 0s var(--reveal-delay, calc(((var(--no-of-steps, 15) + 1) * var(--delay, 0.2)) * 1s));
}
#package:checked ~ .close,
.open {
  --scale: 0;
  --reveal-delay: 0s;
}
#package:checked ~ .open {
  --scale: 1;
  --reveal-delay: calc(((var(--no-of-steps, 15) + 1) * var(--delay, 0.2)) * 1s);
}
[for='s'] {
  --top: 1rem;
}
[for='m'] {
  --top: calc(1rem + 49px);
}
[for='l'] {
  --top: calc(1rem + 98px);
}
[for='xl'] {
  --top: calc(1rem + 147px);
}
#s:checked ~ .s,
#m:checked ~ .m,
#l:checked ~ .l,
#xl:checked ~ .xl {
  border-color: #e63b19;
}
.size-label {
  position: fixed;
  top: var(--top);
  right: 1rem;
  z-index: 3;
  font-family: sans-serif;
  font-weight: bold;
  color: #262626;
  height: 44px;
  width: 44px;
  display: grid;
  place-items: center;
  background: #fcfcfc;
  border-radius: 50%;
  cursor: pointer;
  border: 4px solid #8bb1b1;
  transform: translate(0, calc(var(--y, 0) * 1%)) scale(var(--scale, 1));
  transition: transform 0.1s;
}
.size-label:hover {
  --y: -5;
}
.size-label:active {
  --y: 2;
  --scale: 0.9;
}
#package:checked ~ .scene {
  --packaged: 1;
}
#s:checked ~ .scene {
  --height: 10;
  --width: 20;
  --depth: 20;
}
#m:checked ~ .scene {
  --height: 20;
  --width: 20;
  --depth: 20;
}
#l:checked ~ .scene {
  --height: 20;
  --width: 30;
  --depth: 20;
}
#xl:checked ~ .scene {
  --height: 30;
  --width: 20;
  --depth: 30;
}
.scene {
  transform: rotateX(calc(var(--rotate-x, -24) * 1deg)) rotateY(calc(var(--rotate-y, -32) * 1deg)) rotateX(90deg) translate3d(0, 0, calc(var(--height, 20) * -0.5vmin));
}
.scene *,
.scene *:after,
.scene *:before {
  --step-delay: calc(var(--step, 1) - ((1 - var(--packaged, 0)) * (var(--step) - ((var(--no-of-steps) + 1) - var(--step)))));
  transition: transform calc(var(--speed, 0.2) * 1s) calc((var(--step-delay) * var(--delay, 0.2)) * 1s) ease-in-out, opacity calc(var(--speed, 0.2) * 1s) calc((var(--step-delay) * var(--delay, 0.2)) * 1s) ease-in-out;
}
.package__side--extra {
  --step: 1;
}
.package__side--tabbed {
  --step: 2;
}
.package__side--flipped,
.package__side--tabbed:after {
  --step: 3;
}
.package__side--extra > .package__flap--bottom {
  --step: 4;
}
.package__side--tabbed > .package__flap--bottom {
  --step: 5;
}
.package__side--main > .package__flap--bottom {
  --step: 6;
}
.package__side--flipped > .package__flap--bottom {
  --step: 7;
}
.package__tape--bottom {
  --step: 8;
}
.package__wrapper {
  --step: 9;
}
.package,
.package__shadow {
  --step: 10;
}
.package__icon--html {
  --step: 12;
}
.package__icon--css {
  --step: 13;
}
.package__icon--js {
  --step: 14;
}
.package__side--extra > .package__flap--top {
  --step: 16;
}
.package__side--tabbed > .package__flap--top {
  --step: 17;
}
.package__side--main > .package__flap--top {
  --step: 18;
}
.package__side--flipped > .package__flap--top {
  --step: 19;
}
.package__tape--top {
  --step: 20;
}
.package__branding,
.package__branding--shadow,
.package__label,
.package__label--shadow {
  --step: 21;
}
.package__label:after {
  --step: 22;
}
.package__label:before {
  --step: 23;
}
.package {
  height: calc(var(--height, 20) * 1vmin);
  width: calc(var(--width, 20) * 1vmin);
  transform-origin: 50% 100%;
  transform: rotateX(calc(var(--packaged, 0) * -90deg));
}
.package__icon {
  --speed: 0.5;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40%;
  transform: translate(-50%, -50%) translate3d(calc(var(--x, 0) * 1%), calc((((1 - var(--packaged, 0)) * (var(--y, 0) * (max(var(--height), var(--depth), var(--width)))))) * -1.25vmin), calc(var(--z, 0) * 1vmin));
  opacity: var(--packaged, 0);
}
.package__icon--js {
  --x: 60;
  --y: 1.4;
  --z: 0;
  fill: #f7df1e;
}
.package__icon--html {
  --x: 0;
  --y: 1.6;
  --z: -3;
  fill: #e34f26;
}
.package__icon--css {
  --x: -50;
  --y: 1.2;
  --z: 3;
  fill: #1572b6;
}
.package__content {
  width: calc(min(var(--height), var(--width)) * 1vmin);
  height: calc(var(--height) * 1vmin);
  position: absolute;
  left: 50%;
  bottom: 0%;
  transform-origin: 50% 100%;
  transform: translate(-50%, 0) rotateX(0deg) rotateY(0deg) translate3d(0, 0, calc(var(--depth, 20) * 0.5vmin)) rotateY(45deg);
}
.package__shadow {
  position: absolute;
  height: calc(var(--depth, 20) * 1vmin);
  width: 100%;
  top: 100%;
  left: 0;
  background: rgba(89,89,89,0.75);
  transform-origin: 50% 0;
  transform: scale(0.99) scaleY(var(--packaged, 0));
}
.package__wrapper {
  transform: translate(0, calc((var(--packaged, 0) * var(--depth, 20)) * -1vmin));
}
.package__tape {
  background: var(--tape);
  height: 4vmin;
  width: 94%;
  left: 50%;
  position: absolute;
  transform-origin: 0 50%;
  transform: translate3d(-50%, var(--offset-y), -2px) scaleX(var(--packaged, 0));
}
.package__tape--bottom {
  --offset-y: 50%;
  bottom: 0;
}
.package__tape--top {
  --offset-y: -50%;
  top: 0;
}
.package__direction {
  display: inline-flex;
  align-items: center;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 1.75vmin;
  transform: rotateY(180deg) translate3d(0, 0, 1px);
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 5%;
  justify-content: flex-end;
  color: #1a1a1a;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}
.package__direction svg {
  fill: currentColor;
  width: 8%;
  min-width: 2vmin;
}
.package__label {
  height: 20%;
  width: 30%;
  background: #fafafa;
  position: absolute;
  right: 10%;
  top: 20%;
  border-radius: 5%;
  opacity: var(--packaged, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transform: rotateY(180deg) translate3d(0, 0, calc((1 - (var(--packaged, 0))) * 10vmin));
}
.package__label--shadow {
  transform: rotateY(180deg) translate3d(0, 0, 0) scale(calc(var(--packaged, 0) * 0.99));
  background: #1a1a1a;
}
.package__label:after,
.package__label:before {
  content: '';
  position: absolute;
  height: 20%;
  width: var(--line-length, 70%);
  top: var(--line, 20%);
  left: 10%;
  background: #1a1a1a;
  transform-origin: 0 50%;
  transform: scaleX(var(--packaged, 0));
}
.package__label:before {
  --line: 50%;
  --line-length: 40%;
}
.package__flap {
  width: 99.5%;
  height: 49.5%;
  background: var(--flap-bg, var(--face-4));
  position: absolute;
  left: 50%;
  transform: translate(-50%, 0) rotateX(calc((var(--packaged, 0) * var(--rotation, -90)) * 1deg));
}
.package__flap--top {
  transform-origin: 50% 100%;
  bottom: 100%;
}
.package__flap--bottom {
  --rotation: 90;
  top: 100%;
  transform-origin: 50% 0%;
}
.package__branding {
  height: 30%;
  position: absolute;
  top: 10%;
  left: 10%;
  transform: rotateY(180deg) translate3d(0, 0, 1px) rotate(-20deg) translate3d(0, 0, calc((1 - (var(--packaged, 0))) * 10vmin));
  opacity: var(--packaged, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.package__branding--shadow {
  transform: rotateY(180deg) translate3d(0, 0, 1px) rotate(-20deg) translate3d(0, 0, 0) scale(var(--packaged, 0));
  filter: brightness(0);
}
.package__side {
  height: calc(var(--height, 20) * 1vmin);
  position: absolute;
  top: 0;
}
.package__side:not(.package__side--main),
.package__side:not(.package__side--main):after {
  transform: rotateY(calc((var(--packaged, 0) * var(--rotation, 90)) * 1deg));
}
.package__side--extra > .package__flap--bottom,
.package__side--tabbed > .package__flap--bottom {
  top: 98%;
}
.package__side--extra > .package__flap--top,
.package__side--tabbed > .package__flap--top {
  bottom: 98%;
}
.package__side--main {
  background: var(--face-5);
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%) translate3d(0, 0, 0);
  width: calc(var(--width, 20) * 1vmin);
}
.package__side--main > .package__flap {
  height: calc(var(--depth, 20) * 0.495vmin);
}
.package__side--tabbed {
  --rotation: -90;
  left: 100%;
  background: var(--face-2);
  width: calc(var(--depth, 20) * 1vmin);
  transform-origin: 0% 50%;
}
.package__side--tabbed > .package__flap {
  height: calc(var(--width, 20) * 0.495vmin);
  --flap-bg: var(--face-3);
}
.package__side--tabbed:after {
  content: '';
  position: absolute;
  left: 99.5%;
  height: 100%;
  width: 10%;
  background: var(--face-3);
  clip-path: polygon(0 0%, 100% 20%, 100% 80%, 0 100%);
  -webkit-clip-path: polygon(0 0%, 100% 20%, 100% 80%, 0 100%);
  transform-origin: 0% 50%;
}
.package__side--extra {
  right: 100%;
  background: var(--face-2);
  width: calc(var(--depth, 20) * 1vmin);
  transform-origin: 100% 50%;
}
.package__side--extra > .package__flap {
  height: calc(var(--width, 20) * 0.495vmin);
  --flap-bg: var(--face-3);
}
.package__side--flipped {
  background: var(--face-3);
  right: 100%;
  width: calc(var(--width, 20) * 1vmin);
  transform-origin: 100% 50%;
}
.package__side--flipped > .package__flap {
  height: calc(var(--depth, 20) * 0.495vmin);
  --flap-bg: var(--face-4);
}
.package__side--extra > .package__flap.package__flap--top {
  --flap-bg: var(--flap-one);
}
.package__side--extra > .package__flap.package__flap--bottom {
  --flap-bg: var(--flap-two);
}
.package__side--tabbed > .package__flap.package__flap--bottom {
  --flap-bg: var(--flap-three);
}
.package__side--flipped > .package__flap.package__flap--bottom {
  --flap-bg: var(--flap-four);
}
.package__side--main > .package__flap.package__flap--top {
  --flap-bg: var(--flap-five);
}

</style>
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/house.svg" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>        
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">        
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">                            
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>                         <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>                    
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<?php include '../leftMenu.php'; ?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Customer List</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Modules</a></li>
                        <li class="breadcrumb-item active">Box Calculator</li>
                    </ul>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Examples -->
      <div align="center" class="centermania">
				<input id="package" type="checkbox"/>
				<input id="s" type="radio" name="size"/>
				<label class="size-label s" for="s">S</label>
				<input id="m" type="radio" name="size" checked="checked"/>
				<label class="size-label m" for="m">M</label>
				<input id="l" type="radio" name="size"/>
				<label class="size-label l" for="l">L</label>
				<input id="xl" type="radio" name="size"/>
				<label class="size-label xl" for="xl">XL</label>
				<label class="close" for="package">Close /</label>
				<label class="open" for="package">Open</label>
				<div class="scene">
				  <div class="package__wrapper">
				    <div class="package__shadow"></div>
				    <div class="package">
				      <div class="package__content">
				        <svg class="package__icon package__icon--css" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				          <title>CSS3</title>
				          <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"></path>
				        </svg>
				        <svg class="package__icon package__icon--html" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				          <title>HTML5</title>
				          <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"></path>
				        </svg>
				        <svg class="package__icon package__icon--js" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				          <title>JavaScript</title>
				          <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"></path>
				        </svg>
				      </div>
				      <div class="package__side package__side--main">
				        <div class="package__flap package__flap--top">
				          <div class="package__tape package__tape--top"></div>
				        </div>
				        <div class="package__flap package__flap--bottom">
				          <div class="package__tape package__tape--bottom"></div>
				        </div>
				        <div class="package__side package__side--tabbed">
				          <div class="package__flap package__flap--top">
				          </div>
				          <div class="package__flap package__flap--bottom">
				          </div><img class="package__branding package__branding--shadow" src="https://turkeycargo.com.tr/wp-content/uploads/2019/05/cropped-deneme.fw_-e1624971799167.png" style="width:100px"/>
				        </div>
				        <div class="package__side package__side--extra">
				          <div class="package__flap package__flap--top">
				          </div>
				          <div class="package__flap package__flap--bottom">
				          </div>
				          <div class="package__side package__side--flipped">
				            <div class="package__flap package__flap--top">
				            </div>
				            <div class="package__flap package__flap--bottom">
				            </div><span class="package__direction">
				              <svg viewBox="0 0 256 512" title="long-arrow-alt-up">
				                <path d="M88 166.059V468c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12V166.059h46.059c21.382 0 32.09-25.851 16.971-40.971l-86.059-86.059c-9.373-9.373-24.569-9.373-33.941 0l-86.059 86.059c-15.119 15.119-4.411 40.971 16.971 40.971H88z"></path>
				              </svg><span>whiskway</span>
				              <svg viewBox="0 0 256 512" title="long-arrow-alt-up">
				                <path d="M88 166.059V468c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12V166.059h46.059c21.382 0 32.09-25.851 16.971-40.971l-86.059-86.059c-9.373-9.373-24.569-9.373-33.941 0l-86.059 86.059c-15.119 15.119-4.411 40.971 16.971 40.971H88z"></path>
				              </svg></span><span class="package__label package__label--shadow"></span><span class="package__label"></span>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>
				</div>
        <!-- #Basic Examples --> 

    </div>
</section>


<!-- Jquery Core Js --> 
<script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 
<script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js --> 

<!-- Jquery DataTable Plugin Js --> 
<script src="../assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="../assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="../assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>