@include('partials.header')
<div data-elementor-type="wp-page" data-elementor-id="6" class="elementor elementor-6" data-elementor-post-type="page">
<section class="elementor-section elementor-top-section elementor-element elementor-element-57cd224e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57cd224e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;background_motion_fx_scale_effect&quot;:&quot;yes&quot;,&quot;background_motion_fx_devices&quot;:[&quot;desktop&quot;],&quot;background_motion_fx_scale_direction&quot;:&quot;in-out-in&quot;,&quot;background_motion_fx_scale_range&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:&quot;21&quot;,&quot;end&quot;:&quot;76&quot;}},&quot;background_motion_fx_scale_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:4,&quot;sizes&quot;:[]}}">
<style>
/* Isolate the hero section's stacking context so carousel can't bleed outside */
.elementor-element.elementor-element-57cd224e{position:relative !important;overflow:hidden !important;isolation:isolate !important;}
/* Remove Elementor's original background image */
.elementor-6 .elementor-element.elementor-element-57cd224e:not(.elementor-motion-effects-element-type-background),
.elementor-6 .elementor-element.elementor-element-57cd224e > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:none !important;}
/* Push motion effects layer behind carousel */
.elementor-element-57cd224e > .elementor-motion-effects-container{z-index:0 !important;}
/* Carousel bg layer */
#heroCarouselBg{position:absolute;top:0;left:0;width:100%;height:100%;z-index:1;}
.hero-bg-slide{position:absolute;top:0;left:0;width:100%;height:100%;background-size:cover;background-position:center;opacity:0;transition:opacity 1.2s ease-in-out;}
.hero-bg-slide.active{opacity:1;}
/* Overlay sits above carousel bg */
.elementor-element-57cd224e > .elementor-background-overlay{z-index:2 !important;}
/* Content above overlay */
.elementor-element-57cd224e > .elementor-container{position:relative !important;z-index:3 !important;}
.elementor-element-57cd224e .elementor-column,
.elementor-element-57cd224e .elementor-widget-wrap,
.elementor-element-57cd224e .elementor-widget{position:relative !important;z-index:3 !important;}
/* Carousel controls above content */
.hero-carousel-btn{position:absolute;top:50%;transform:translateY(-50%);z-index:4;background:rgba(0,0,0,0.35);border:none;color:#fff;width:28px;height:28px;border-radius:50%;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:11px;transition:background 0.3s;}
.hero-carousel-btn:hover{background:rgba(0,0,0,0.6);}
.hero-carousel-btn.prev{left:20px;}
.hero-carousel-btn.next{right:20px;}
.hero-carousel-dots{position:absolute;bottom:24px;left:50%;transform:translateX(-50%);z-index:4;display:flex;gap:8px;}
.hero-carousel-dots span{display:block;width:10px;height:10px;border-radius:50%;border:2px solid rgba(255,255,255,0.85);background:transparent;cursor:pointer;transition:background 0.3s;}
.hero-carousel-dots span.active{background:#fff;}
</style>
<div id="heroCarouselBg">
<div class="hero-bg-slide active" style="background-image:url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1400&q=90');background-position:center center;"></div>
<div class="hero-bg-slide" style="background-image:url('/wp-content/uploads/2022/05/men-workers-in-container-logistics-in-port-shipmen-2022-03-16-08-00-31-utc-scaled.jpg');"></div>
<div class="hero-bg-slide" style="background-image:url('/assets/images/aerial-view-cargo-ship-cargo-container-harbor.jpg');"></div>
</div>
<button class="hero-carousel-btn prev" onclick="heroSlidePrev()" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
<button class="hero-carousel-btn next" onclick="heroSlideNext()" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
<div class="hero-carousel-dots"><span class="active" aria-label="Slide 1"></span><span aria-label="Slide 2"></span><span aria-label="Slide 3"></span></div>
<div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2f25bc38" data-id="2f25bc38" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-365bfa4a elementor-invisible elementor-widget elementor-widget-heading" data-id="365bfa4a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h1 class="elementor-heading-title elementor-size-default"> From Origin to Destination, We've Got It Covered. </h1></div></div><div class="elementor-element elementor-element-6614140f elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6614140f" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<style>.elementor-widget-divider{--divider-border-style:none;--divider-border-width:1px;--divider-color:#0c0d0e;--divider-icon-size:20px;--divider-element-spacing:10px;--divider-pattern-height:24px;--divider-pattern-size:20px;--divider-pattern-url:none;--divider-pattern-repeat:repeat-x}.elementor-widget-divider .elementor-divider{display:flex}.elementor-widget-divider .elementor-divider__text{font-size:15px;line-height:1;max-width:95%}.elementor-widget-divider .elementor-divider__element{margin:0 var(--divider-element-spacing);flex-shrink:0}.elementor-widget-divider .elementor-icon{font-size:var(--divider-icon-size)}.elementor-widget-divider .elementor-divider-separator{display:flex;margin:0;direction:ltr}.elementor-widget-divider--view-line_icon .elementor-divider-separator,.elementor-widget-divider--view-line_text .elementor-divider-separator{align-items:center}.elementor-widget-divider--view-line_icon .elementor-divider-separator:after,.elementor-widget-divider--view-line_icon .elementor-divider-separator:before,.elementor-widget-divider--view-line_text .elementor-divider-separator:after,.elementor-widget-divider--view-line_text .elementor-divider-separator:before{display:block;content:"";border-block-end:0;flex-grow:1;border-block-start:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-left .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-left .elementor-divider__element{margin-left:0}.elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-right .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-right .elementor-divider__element{margin-right:0}.elementor-widget-divider--element-align-start .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-start .elementor-divider-separator:before{content:none}.elementor-widget-divider--element-align-start .elementor-divider__element{margin-inline-start:0}.elementor-widget-divider--element-align-end .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type{flex-grow:0;flex-shrink:100}.elementor-widget-divider--element-align-end .elementor-divider-separator:after{content:none}.elementor-widget-divider--element-align-end .elementor-divider__element{margin-inline-end:0}.elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator{border-block-start:var(--divider-border-width) var(--divider-border-style) var(--divider-color)}.elementor-widget-divider--separator-type-pattern{--divider-border-style:none}.elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,.elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,.elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator{width:100%;min-height:var(--divider-pattern-height);-webkit-mask-size:var(--divider-pattern-size) 100%;mask-size:var(--divider-pattern-size) 100%;-webkit-mask-repeat:var(--divider-pattern-repeat);mask-repeat:var(--divider-pattern-repeat);background-color:var(--divider-color);-webkit-mask-image:var(--divider-pattern-url);mask-image:var(--divider-pattern-url)}.elementor-widget-divider--no-spacing{--divider-pattern-size:auto}.elementor-widget-divider--bg-round{--divider-pattern-repeat:round}.rtl .elementor-widget-divider .elementor-divider__text{direction:rtl}.e-con-inner>.elementor-widget-divider,.e-con>.elementor-widget-divider{width:var(--container-widget-width,100%);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div><div class="elementor-element elementor-element-3d3cd8cf elementor-hidden-mobile elementor-widget elementor-widget-heading" data-id="3d3cd8cf" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">Global logistics built on trust, precision, and performance. At ApexPrimeLink-Xpress, we provide seamless freight and supply chain solutions across air, ocean, road, and rail. Backed by industry expertise and a worldwide network, we simplify complex logistics, ensuring every shipment is handled with care and delivered on time. Wherever your business operates, we're committed to keeping your supply chain connected.</div></div></div><div class="elementor-element elementor-element-5a0e858b elementor-invisible elementor-widget elementor-widget-button" data-id="5a0e858b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="{{ url('/track-now') }}"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span> <span class="elementor-button-text">Track Shipment</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-48760520" data-id="48760520" data-element_type="column">
<div class="elementor-widget-wrap"></div></div></div></section>
<script>
(function(){
  var slides=document.querySelectorAll('#heroCarouselBg .hero-bg-slide'),
      dots=document.querySelectorAll('.hero-carousel-dots span'),
      idx=0, timer;
  function show(n){
    slides[idx].classList.remove('active');
    dots[idx].classList.remove('active');
    idx=(n+slides.length)%slides.length;
    slides[idx].classList.add('active');
    dots[idx].classList.add('active');
  }
  function reset(){clearInterval(timer);timer=setInterval(function(){show(idx+1);},5000);}
  window.heroSlideNext=function(){show(idx+1);reset();};
  window.heroSlidePrev=function(){show(idx-1);reset();};
  dots.forEach(function(d,i){d.addEventListener('click',function(){show(i);reset();});});
  reset();
})();
</script>
<section class="elementor-section elementor-top-section elementor-element elementor-element-17020dde elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="17020dde" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55485a39" data-id="55485a39" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-7607f521 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7607f521" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-22e6040f elementor-invisible" data-id="22e6040f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;100&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8dd693 elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-image" data-id="8dd693" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="32" height="32" src="/wp-content/uploads/2022/04/icon-tracking.png" class="attachment-full size-full wp-image-26" alt=""/></div></div><div class="elementor-element elementor-element-43743ea3 elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading" data-id="43743ea3" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h4 class="elementor-heading-title elementor-size-default">Track Your Shipment</h4></div></div><div class="elementor-element elementor-element-1e34aec2 elementor-widget elementor-widget-heading" data-id="1e34aec2" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">Track your shipments with apexprimelink-xpress. Just enter MAT, Waybill, BOL, or PO number here. In some cases, you may need to exclude prefixes (e.g., NAD, NTL, etc.) and use the number only.</div></div></div><div class="elementor-element elementor-element-664a098a elementor-align-justify elementor-widget elementor-widget-button" data-id="664a098a" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="{{ url('/track-now') }}"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span> <span class="elementor-button-text">Track a shipment</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-40dfe7a2 elementor-invisible" data-id="40dfe7a2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-29a4a9ed elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-image" data-id="29a4a9ed" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="32" height="32" src="/wp-content/uploads/2022/04/icon-search-sch.png" class="attachment-full size-full wp-image-30" alt=""/></div></div><div class="elementor-element elementor-element-49ab7f69 elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading" data-id="49ab7f69" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h4 class="elementor-heading-title elementor-size-default">Search Schedules</h4></div></div><div class="elementor-element elementor-element-5a59e9a8 elementor-widget elementor-widget-heading" data-id="5a59e9a8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">The First World Class Logistic Company.</div></div></div><div class="elementor-element elementor-element-1c919ac2 elementor-align-justify elementor-widget elementor-widget-button" data-id="1c919ac2" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-search"></i> </span> <span class="elementor-button-text">Search Schedules</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-12d078a6 elementor-invisible" data-id="12d078a6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;300&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-50d5193a elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-image" data-id="50d5193a" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="32" height="32" src="/wp-content/uploads/2022/04/icon-pickup.png" class="attachment-full size-full wp-image-33" alt="blank" onerror="this.style.display='none';this.nextElementSibling.style.display='inline-block'"/><i class="fas fa-box-open" style="display:none;font-size:32px;color:inherit;"></i></div></div><div class="elementor-element elementor-element-45072e29 elementor-widget__width-auto elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading" data-id="45072e29" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h4 class="elementor-heading-title elementor-size-default">Book Pickup Now</h4></div></div><div class="elementor-element elementor-element-1e32a08f elementor-widget elementor-widget-heading" data-id="1e32a08f" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">Book for pickup of your parcel. We will contact you right away or within 12 hours to confirm your booking.</div></div></div><div class="elementor-element elementor-element-57dec811 elementor-align-justify elementor-widget elementor-widget-button" data-id="57dec811" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="{{ url('/contact') }}"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-calendar-alt"></i> </span> <span class="elementor-button-text">Book Now</span> </span> </a></div></div></div></div></div></div></section></div></div></div></section>
<!-- ===== STATS COUNTER STRIP ===== -->
<section style="background:linear-gradient(135deg,#0D2B1E 0%,#132B1E 100%);padding:52px 0;">
    <style>
        .ot-stats-wrap{max-width:1200px;margin:0 auto;padding:0 20px;display:grid;grid-template-columns:repeat(4,1fr);gap:0;text-align:center;}
        @media(max-width:768px){.ot-stats-wrap{grid-template-columns:repeat(2,1fr);}}
        .ot-stat-item{padding:24px 10px;border-right:1px solid rgba(255,255,255,0.1);}
        .ot-stat-item:last-child{border-right:none;}
        @media(max-width:768px){.ot-stat-item:nth-child(2){border-right:none;}.ot-stat-item:nth-child(3){border-right:none;}}
        .ot-stat-icon{font-size:24px;color:rgba(244,163,6,0.75);margin-bottom:12px;}
        .ot-stat-num{font-size:clamp(38px,5vw,56px);font-weight:800;color:#f4a306;line-height:1;font-family:Arial,sans-serif;}
        .ot-stat-label{font-size:12px;color:rgba(255,255,255,0.7);letter-spacing:2px;text-transform:uppercase;margin-top:10px;font-weight:600;}
    </style>
    <div class="ot-stats-wrap">
        <div class="ot-stat-item">
            <div class="ot-stat-icon"><i class="fas fa-box"></i></div>
            <div class="ot-stat-num">50K+</div>
            <div class="ot-stat-label">Shipments Delivered</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-icon"><i class="fas fa-globe"></i></div>
            <div class="ot-stat-num">80+</div>
            <div class="ot-stat-label">Countries Served</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-icon"><i class="fas fa-award"></i></div>
            <div class="ot-stat-num">10+</div>
            <div class="ot-stat-label">Years of Experience</div>
        </div>
        <div class="ot-stat-item">
            <div class="ot-stat-icon"><i class="fas fa-check-circle"></i></div>
            <div class="ot-stat-num">98%</div>
            <div class="ot-stat-label">On-Time Delivery Rate</div>
        </div>
    </div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-5a6bdf19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5a6bdf19" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-351873b" data-id="351873b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-645e0814 elementor-widget elementor-widget-heading" data-id="645e0814" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h5 class="elementor-heading-title elementor-size-default">ABOUT US</h5></div></div><div class="elementor-element elementor-element-73a35e95 elementor-invisible elementor-widget elementor-widget-heading" data-id="73a35e95" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h2 class="elementor-heading-title elementor-size-default">End-to-End Logistics Solutions</h2></div></div><div class="elementor-element elementor-element-260ff89a elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="260ff89a" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div><div class="elementor-element elementor-element-62d5f51d elementor-widget elementor-widget-text-editor" data-id="62d5f51d" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<style>.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>At apexprimelink-xpress, we have built our reputation on one simple promise: your shipment is our responsibility from the moment it leaves your hands to the moment it reaches its destination. With decades of combined industry expertise and a passion for operational excellence, we have grown into a trusted logistics partner for businesses of all sizes  from local enterprises to multinational corporations.</p>
<p>Our integrated approach combines cutting-edge technology with a dedicated team of logistics professionals, giving you real-time visibility, proactive communication, and solutions that adapt to your unique supply chain needs. Whether it is a single parcel or a full fleet movement, we bring the same level of care, urgency, and professionalism to every delivery.</p>
<p>&#8220;We do not just transport goods  we deliver confidence.&#8221;</p></div></div><div class="elementor-element elementor-element-1a54547c elementor-invisible elementor-widget elementor-widget-button" data-id="1a54547c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="{{url('about')}}"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">read more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7ad583af" data-id="7ad583af" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-28bf4e05 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="28bf4e05" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-694eade1 elementor-hidden-tablet elementor-hidden-phone" data-id="694eade1" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-200fd906 elementor-invisible elementor-widget elementor-widget-image" data-id="200fd906" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="378" height="500" src="/wp-content/uploads/2022/04/bg-popup.jpg" class="attachment-full size-full wp-image-110" alt="blank"/></div></div></div></div><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-476381da" data-id="476381da" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-77a5068c elementor-invisible elementor-widget elementor-widget-image" data-id="77a5068c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="472" height="501" src="/assets/images/team1.avif" class="attachment-full size-full wp-image-34" alt="Our team" style="width:100%;height:100%;object-fit:cover;border-radius:4px;"/></div></div></div></div></div></section></div></div></div></section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-2e42fbc3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2e42fbc3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44010e9" data-id="44010e9" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-207f3b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="207f3b5" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-10df1887" data-id="10df1887" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-31a45f48 elementor-invisible elementor-widget elementor-widget-heading" data-id="31a45f48" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h5 class="elementor-heading-title elementor-size-default">Services</h5></div></div><div class="elementor-element elementor-element-25fb6155 elementor-invisible elementor-widget elementor-widget-heading" data-id="25fb6155" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h2 class="elementor-heading-title elementor-size-default">Our Logistic Services</h2></div></div><div class="elementor-element elementor-element-5a47daaa elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5a47daaa" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div><div class="elementor-element elementor-element-4b839898 elementor-widget elementor-widget-heading" data-id="4b839898" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">apexprimelink-xpress prides itself on its customer-centric focus, safety supremacy, and partnership formation. We are big enough to deliver extensive global logistics services, yet agile enough to provide the personal attention every client deserves.</div></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-b12f00f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b12f00f" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fddcd35 elementor-invisible" data-id="fddcd35" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-418bdd5c elementor-widget elementor-widget-image" data-id="418bdd5c" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/assets/images/cargo-ship-sailing-through-ocean.jpg" class="attachment-full size-full wp-image-27" alt="Intermodal transport" style="width:100%;height:230px;object-fit:cover;object-position:center;display:block;"/></div></div><div class="elementor-element elementor-element-747dad5a elementor-widget elementor-widget-heading" data-id="747dad5a" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="intermodal/index.html">Intermodal</a></h3></div></div><div class="elementor-element elementor-element-4d72a640 elementor-widget elementor-widget-heading" data-id="4d72a640" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="intermodal/index.html">We perform comprehensive Intermodal transportation services, including: </a></div></div></div><div class="elementor-element elementor-element-1e08790f elementor-align-left elementor-widget elementor-widget-button" data-id="1e08790f" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="intermodal/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6407f2 elementor-invisible" data-id="6407f2" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-787662a2 elementor-widget elementor-widget-image" data-id="787662a2" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/dedicated-transportation.jpg" class="attachment-full size-full wp-image-31" alt="Dedicated transportation" style="object-fit:cover;"/></div></div><div class="elementor-element elementor-element-569af471 elementor-widget elementor-widget-heading" data-id="569af471" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="dedicated/index.html">Dedicated</a></h3></div></div><div class="elementor-element elementor-element-3f5d29c8 elementor-widget elementor-widget-heading" data-id="3f5d29c8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="dedicated/index.html">Dedicated Trucking solutions to meet even the most complex transportation challenges. </a></div></div></div><div class="elementor-element elementor-element-423157d6 elementor-align-left elementor-widget elementor-widget-button" data-id="423157d6" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="dedicated/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a794b02 elementor-invisible" data-id="2a794b02" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;400&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1054c282 elementor-widget elementor-widget-image" data-id="1054c282" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/services-truckload.jpg" class="attachment-full size-full wp-image-36" alt="blank"/></div></div><div class="elementor-element elementor-element-27add2a6 elementor-widget elementor-widget-heading" data-id="27add2a6" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="truckload/index.html">Truckload</a></h3></div></div><div class="elementor-element elementor-element-3006a63a elementor-widget elementor-widget-heading" data-id="3006a63a" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="truckload/index.html">Truck freight services are commonly used for domestic and cross-border deliveries. Working with an established freight forwarding provider gives you access to a strong network of carriers throughout the World.</a></div></div></div><div class="elementor-element elementor-element-f5cad4d elementor-align-left elementor-widget elementor-widget-button" data-id="f5cad4d" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="truckload/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-4dc2bb88 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4dc2bb88" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5a17d38d elementor-invisible" data-id="5a17d38d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-434c5e16 elementor-widget elementor-widget-image" data-id="434c5e16" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/assets/images/air-cargo.jpg" class="attachment-full size-full wp-image-376" alt="Air freight" style="object-fit:cover;"/></div></div><div class="elementor-element elementor-element-7059de75 elementor-widget elementor-widget-heading" data-id="7059de75" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="air-freight/index.html">AIR FREIGHT </a></h3></div></div><div class="elementor-element elementor-element-165070f7 elementor-widget elementor-widget-heading" data-id="165070f7" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="air-freight/index.html">When your freight needs to be at its destination and you need fast, professional service to get it there, air freight from apexprimelink-xpress is the solution you need.</a></div></div></div><div class="elementor-element elementor-element-79f98c83 elementor-align-left elementor-widget elementor-widget-button" data-id="79f98c83" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="air-freight/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23b132e4 elementor-invisible" data-id="23b132e4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-49c336be elementor-widget elementor-widget-image" data-id="49c336be" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/pet-1-1568x1042-1.jpg" class="attachment-full size-full wp-image-469" alt="Pet shipment" style="width:100%;height:230px;object-fit:cover;object-position:center;display:block;"/></div></div><div class="elementor-element elementor-element-49167f8d elementor-widget elementor-widget-heading" data-id="49167f8d" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="pet-shipment/index.html">Pet Shipment</a></h3></div></div><div class="elementor-element elementor-element-64a311a3 elementor-widget elementor-widget-heading" data-id="64a311a3" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="pet-shipment/index.html">We have a large &lsquo;family&rsquo; of pets of our own (cats and dogs) and definitely know how much your beloved pets mean to you!</a></div></div></div><div class="elementor-element elementor-element-319c8a93 elementor-align-left elementor-widget elementor-widget-button" data-id="319c8a93" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-676b530f elementor-invisible" data-id="676b530f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;400&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-4b35547a elementor-widget elementor-widget-image" data-id="4b35547a" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/services-ltl.jpg" class="attachment-full size-full wp-image-53" alt="blank"/></div></div><div class="elementor-element elementor-element-22c78baf elementor-widget elementor-widget-heading" data-id="22c78baf" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="pickup-delivery%ef%bf%bc/index.html">Pickup & Delivery</a></h3></div></div><div class="elementor-element elementor-element-465a6416 elementor-widget elementor-widget-heading" data-id="465a6416" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="pickup-delivery%ef%bf%bc/index.html">We offer a wide variety of custom pickup and delivery options to meet any budget. You may also choose to drop off items at one of our nationwide warehouse locations.</a></div></div></div><div class="elementor-element elementor-element-39e4a171 elementor-align-left elementor-widget elementor-widget-button" data-id="39e4a171" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="pickup-delivery%ef%bf%bc/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-f0ad851 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f0ad851" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a54305a elementor-invisible" data-id="a54305a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-0ef3eab elementor-widget elementor-widget-image" data-id="0ef3eab" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/custom-creating.jpg" class="attachment-full size-full wp-image-437" alt="Custom shipping crates" style="object-fit:cover;"/></div></div><div class="elementor-element elementor-element-e453989 elementor-widget elementor-widget-heading" data-id="e453989" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="custom-shipping-crates/index.html">CUSTOM SHIPPING CRATES</a></h3></div></div><div class="elementor-element elementor-element-9dc1c6e elementor-widget elementor-widget-heading" data-id="9dc1c6e" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="custom-shipping-crates/index.html">apexprimelink-xpress crates and ships heavy, oversized, and fragile items, including fine china and crystal, paintings and sculptures, machinery, and industrial equipment.</a></div></div></div><div class="elementor-element elementor-element-4ac7de6 elementor-align-left elementor-widget elementor-widget-button" data-id="4ac7de6" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="custom-shipping-crates/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2a6f73f elementor-invisible" data-id="2a6f73f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-e6b5bf0 elementor-widget elementor-widget-image" data-id="e6b5bf0" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="600" height="600" src="/wp-content/uploads/2022/04/student-moving.jpg" class="attachment-full size-full wp-image-429" alt="blank"/></div></div><div class="elementor-element elementor-element-39cc17e elementor-widget elementor-widget-heading" data-id="39cc17e" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="college-student-moves/index.html">COLLEGE STUDENT MOVES</a></h3></div></div><div class="elementor-element elementor-element-583f4f0 elementor-widget elementor-widget-heading" data-id="583f4f0" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="college-student-moves/index.html">Are you or one of your children heading to or from college this year. Let apexprimelink-xpressease the burden of moving your belongings to school or home for the summer. We can provide come to you home or school residence and professionally pack all of your items for you.</a></div></div></div><div class="elementor-element elementor-element-7efa363 elementor-align-left elementor-widget elementor-widget-button" data-id="7efa363" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="college-student-moves/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e6ef698 elementor-invisible" data-id="e6ef698" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;400&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-945a401 elementor-widget elementor-widget-image" data-id="945a401" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="372" height="230" src="/wp-content/uploads/2022/04/Specialty-Freight.jpg" class="attachment-full size-full wp-image-422" alt="Specialty freight" style="object-fit:cover;"/></div></div><div class="elementor-element elementor-element-c60bb16 elementor-widget elementor-widget-heading" data-id="c60bb16" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default"><a href="specialty-freight/index.html">SPECIALTY FREIGHT</a></h3></div></div><div class="elementor-element elementor-element-6cc6867 elementor-widget elementor-widget-heading" data-id="6cc6867" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"><a href="specialty-freight/index.html">apexprimelink-xpress offers innovative solutions for specialty freight challenges. We pack, crate, and ship, art, machinery, antiques, furniture, and equipment all over the world. Our specialists will provide consultation on the most efficient, time-sensitive, and cost-effective manner to pack and ship your specialty freight worldwide.</a></div></div></div>




<div class="elementor-element elementor-element-996c0d5 elementor-widget elementor-widget-heading" data-id="996c0d5" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="truckload/index.html"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">Learn more</span> </span> </a></div></div></div></div></div></div></section></div></div></div>



</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-4cf3a373 elementor-section-full_width elementor-hidden-mobile elementor-section-height-default elementor-section-height-default" data-id="4cf3a373" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-545ad8ec" data-id="545ad8ec" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-3dc131d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3dc131d8" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-62aa1c7a" data-id="62aa1c7a" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-6f3080c3 elementor-invisible elementor-widget elementor-widget-heading" data-id="6f3080c3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h5 class="elementor-heading-title elementor-size-default">WHY CHOOSE US</h5></div></div><div class="elementor-element elementor-element-40b5645e elementor-invisible elementor-widget elementor-widget-heading" data-id="40b5645e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h2 class="elementor-heading-title elementor-size-default">Why Our Customers Choose Us!</h2></div></div><div class="elementor-element elementor-element-166fc385 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="166fc385" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div><div class="elementor-element elementor-element-54757559 elementor-widget elementor-widget-heading" data-id="54757559" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default">We take safety, service and the environment seriously, working to our core strategy and backed by a sound structure of knowledge and superior expertise.</div></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-70067535 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="70067535" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2acc1001" data-id="2acc1001" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-346272c9 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="346272c9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;100&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="60" height="63" src="/wp-content/uploads/2022/04/icon-globe-maps.png" class="attachment-full size-full wp-image-51" alt="blank"/></div></div><div class="elementor-element elementor-element-2b8f3652 elementor-widget elementor-widget-heading" data-id="2b8f3652" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">10+ Years of Experience</h3></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2df6afb6" data-id="2df6afb6" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-57f0e393 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="57f0e393" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;200&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="64" height="64" src="/wp-content/uploads/2022/04/icon-teams.png" class="attachment-full size-full wp-image-46" alt="blank"/></div></div><div class="elementor-element elementor-element-7b30e209 elementor-widget elementor-widget-heading" data-id="7b30e209" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">Experience Team</h3></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-325000cd" data-id="325000cd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-433adc7b elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="433adc7b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;300&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="64" height="64" src="/wp-content/uploads/2022/04/icon-telephone.png" class="attachment-full size-full wp-image-75" alt="blank"/></div></div><div class="elementor-element elementor-element-30dee298 elementor-widget elementor-widget-heading" data-id="30dee298" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">Fast Response</h3></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-7ab85d0c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7ab85d0c" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-24ab26b" data-id="24ab26b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-6831baaf elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="6831baaf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;400&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="64" height="64" src="/wp-content/uploads/2022/04/icon-globe-maps.png" class="attachment-full size-full wp-image-46" alt="blank"/></div></div><div class="elementor-element elementor-element-1198b9c4 elementor-widget elementor-widget-heading" data-id="1198b9c4" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">Experience Team</h3></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23518923" data-id="23518923" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-357b885f elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="357b885f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;500&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="64" height="64" src="/wp-content/uploads/2022/04/icon-telephone.png" class="attachment-full size-full wp-image-75" alt="blank"/></div></div><div class="elementor-element elementor-element-55acb3a5 elementor-widget elementor-widget-heading" data-id="55acb3a5" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">Fast Response</h3></div></div></div></div><div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-252f313a" data-id="252f313a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-4e6f9b12 elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="4e6f9b12" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:&quot;600&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="62" height="62" src="/wp-content/uploads/2022/04/icon-box-shield.png" class="attachment-full size-full wp-image-90" alt="blank"/></div></div><div class="elementor-element elementor-element-7a51b128 elementor-widget elementor-widget-heading" data-id="7a51b128" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h3 class="elementor-heading-title elementor-size-default">Guarantees</h3></div></div></div></div></div></section></div></div></div></section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-2f71b510 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2f71b510" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4bce7a1" data-id="4bce7a1" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-2edf2486 elementor-invisible elementor-widget elementor-widget-image" data-id="2edf2486" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="336" height="481" src="/wp-content/uploads/2022/04/food-delivery-application.png" class="attachment-large size-large wp-image-64" alt="blank"/></div></div><div class="elementor-element elementor-element-47f8c53b elementor-widget elementor-widget-spacer" data-id="47f8c53b" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<style>.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container{height:100%;width:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty,.e-con>.elementor-widget-spacer.elementor-widget-empty{position:relative;min-height:22px;min-width:22px}.e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,.e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon{position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;padding:0;width:22px;height:22px}</style>		<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2e0edffc" data-id="2e0edffc" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-12645a5b elementor-widget elementor-widget-heading" data-id="12645a5b" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h5 class="elementor-heading-title elementor-size-default">SUPPLY CHAIN RESILIENCE</h5></div></div><div class="elementor-element elementor-element-27daf6ae elementor-headline--style-highlight elementor-invisible elementor-widget elementor-widget-animated-headline" data-id="27daf6ae" data-element_type="widget" data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;Ready for anything.&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}" data-widget_type="animated-headline.default">
<div class="elementor-widget-container">  <h2 class="elementor-headline"> <span class="elementor-headline-plain-text elementor-headline-text-wrapper">Built for disruption.</span> <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper"> <span class="elementor-headline-dynamic-text elementor-headline-text-active">Ready for anything.</span> </span> </h2></div></div><div class="elementor-element elementor-element-323f8da7 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="323f8da7" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div><div class="elementor-element elementor-element-7c8752a6 elementor-invisible elementor-widget elementor-widget-button" data-id="7c8752a6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"> <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="{{url('about')}}"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon"> <i aria-hidden="true" class="fas fa-angle-double-right"></i> </span> <span class="elementor-button-text">read more</span> </span> </a></div></div></div></div></div><div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2e98cadd elementor-hidden-tablet" data-id="2e98cadd" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1d0797ce elementor-invisible elementor-widget elementor-widget-image" data-id="1d0797ce" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="574" height="653" src="/wp-content/uploads/2022/04/men-with-prokes2.jpg" class="attachment-large size-large wp-image-69" alt="blank"/></div></div></div></div></div></section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-339457d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="339457d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
<div class="elementor-background-overlay"></div><div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-342e628d" data-id="342e628d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section class="elementor-section elementor-inner-section elementor-element elementor-element-3fb3ee1b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3fb3ee1b" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3e5a7e78" data-id="3e5a7e78" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-220f8ad2 elementor-invisible elementor-widget elementor-widget-heading" data-id="220f8ad2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h5 class="elementor-heading-title elementor-size-default">testimonials</h5></div></div><div class="elementor-element elementor-element-1201f167 elementor-invisible elementor-widget elementor-widget-heading" data-id="1201f167" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h2 class="elementor-heading-title elementor-size-default">What Our Customers Are Saying</h2></div></div><div class="elementor-element elementor-element-5fd35412 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5fd35412" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider"> <span class="elementor-divider-separator"> </span></div></div></div></div></div></div></section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-2cc1dbe7 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2cc1dbe7" data-element_type="section">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-502ba604" data-id="502ba604" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1405e71d elementor-widget__width-auto elementor-invisible elementor-widget elementor-widget-image" data-id="1405e71d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container"> <img decoding="async" width="521" height="399" src="/assets/images/joe.avif" class="attachment-full size-full" alt="Joe T. James"/></div></div><div class="elementor-element elementor-element-7819ba3d elementor-view-stacked elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon" data-id="7819ba3d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceInUp&quot;}" data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<div class="elementor-icon"> <i aria-hidden="true" class="fas fa-quote-left"></i></div></div></div></div></div></div><div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-386f5408" data-id="386f5408" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-371ad373 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="371ad373" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container"> <p>When it comes to packaging, crating, and shipping, certain words carry a great deal of weight words like experience, know-how, and integrity. Our long list of happy clients will tell you they rely on us because we're unrivaled in these areas.</p></div></div><div class="elementor-element elementor-element-53566789 elementor-widget elementor-widget-heading" data-id="53566789" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container"> <h4 class="elementor-heading-title elementor-size-default">Joe T. James  </h4></div></div><div class="elementor-element elementor-element-1aba2948 elementor-widget elementor-widget-heading" data-id="1aba2948" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="elementor-heading-title elementor-size-default"> - Mega international</div></div></div></div></div></div></section></div></div></div></section>
<!-- Testimonials Section -->
<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed elementor-section-height-default" style="background:#f4f6f9;padding:70px 0;">
    <style>
        .ot-testimonials-wrap{max-width:1200px;margin:0 auto;padding:0 20px;}
        .ot-testimonials-header{text-align:center;margin-bottom:50px;}
        .ot-testimonials-header h5{color:#f4a306;font-size:13px;letter-spacing:2px;text-transform:uppercase;margin-bottom:10px;}
        .ot-testimonials-header h2{font-size:32px;font-weight:700;color:#0D2B1E;margin-bottom:14px;}
        .ot-testimonials-header .ot-divider{width:60px;height:3px;background:#f4a306;margin:0 auto;}
        .ot-testimonials-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:30px;}
        @media(max-width:900px){.ot-testimonials-grid{grid-template-columns:1fr 1fr;}}
        @media(max-width:600px){.ot-testimonials-grid{grid-template-columns:1fr;}}
        .ot-testimonial-card{background:#fff;border-radius:10px;padding:32px 28px;box-shadow:0 4px 20px rgba(0,0,0,0.07);position:relative;display:flex;flex-direction:column;gap:16px;transition:transform 0.2s;}
        .ot-testimonial-card:hover{transform:translateY(-4px);}
        .ot-testimonial-stars{color:#f4a306;font-size:16px;letter-spacing:2px;}
        .ot-testimonial-text{font-size:15px;color:#555;line-height:1.75;font-style:italic;flex:1;}
        .ot-testimonial-text::before{content:'\201C';font-size:48px;color:#f4a306;line-height:0;vertical-align:-18px;margin-right:4px;}
        .ot-testimonial-author{display:flex;align-items:center;gap:14px;margin-top:10px;}
        .ot-testimonial-avatar{width:48px;height:48px;border-radius:50%;background:#0D2B1E;color:#fff;display:flex;align-items:center;justify-content:center;font-size:18px;font-weight:700;flex-shrink:0;}
        .ot-testimonial-name{font-weight:700;color:#0D2B1E;font-size:15px;}
        .ot-testimonial-role{font-size:13px;color:#f4a306;}
    </style>
    <div class="ot-testimonials-wrap">
        <div class="ot-testimonials-header">
            <h5>Testimonials</h5>
            <h2>What Our Clients Say</h2>
            <div class="ot-divider"></div>
        </div>
        <div class="ot-testimonials-grid">
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="ot-testimonial-text">apexprimelink-xpress handled our international shipment flawlessly. Real-time tracking kept us informed every step of the way, and our goods arrived two days ahead of schedule. Absolutely outstanding service.</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">JM</div>
                    <div>
                        <div class="ot-testimonial-name">James Mitchell</div>
                        <div class="ot-testimonial-role">Operations Manager, NordTech AS</div>
                    </div>
                </div>
            </div>
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="ot-testimonial-text">I was nervous about shipping my pet internationally, but the team at apexprimelink-xpress made the entire process stress-free. They communicated every detail and my dog arrived safe and happy. Highly recommend!</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">SL</div>
                    <div>
                        <div class="ot-testimonial-name">Sofia Larsen</div>
                        <div class="ot-testimonial-role">Private Customer, Oslo</div>
                    </div>
                </div>
            </div>
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="ot-testimonial-text">We have been partnering with apexprimelink-xpress for over three years for all our freight needs. Their dedication to meeting deadlines and their professional team have made them an invaluable part of our supply chain.</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">RJ</div>
                    <div>
                        <div class="ot-testimonial-name">Richard J</div>
                        <div class="ot-testimonial-role">Supply Chain Director, GlobalMart Ltd</div>
                    </div>
                </div>
            </div>
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                <p class="ot-testimonial-text">The air freight service was exactly what we needed for our time-sensitive cargo. Competitive pricing and a transparent process from booking to delivery. We will definitely use them again.</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">AM</div>
                    <div>
                        <div class="ot-testimonial-name">Anna M&#252;ller</div>
                        <div class="ot-testimonial-role">Logistics Coordinator, EuroMed GmbH</div>
                    </div>
                </div>
            </div>
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="ot-testimonial-text">Moving to Norway was daunting, but apexprimelink-xpress handled our household belongings with exceptional care. Every item arrived in perfect condition. The team was responsive and professional throughout.</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">TC</div>
                    <div>
                        <div class="ot-testimonial-name">Thomas Chen</div>
                        <div class="ot-testimonial-role">Private Customer, Sandefjord</div>
                    </div>
                </div>
            </div>
            <div class="ot-testimonial-card">
                <div class="ot-testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="ot-testimonial-text">From custom shipping crates to final-mile delivery, apexprimelink-xpress covered everything for our exhibition equipment. They truly deliver confidence exactly as they promise. A partner we trust completely.</p>
                <div class="ot-testimonial-author">
                    <div class="ot-testimonial-avatar">PB</div>
                    <div>
                        <div class="ot-testimonial-name">Priya Bhandari</div>
                        <div class="ot-testimonial-role">Events Manager, ArtWorld Exhibitions</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== AFFILIATED PARTNERS ===== --}}
<style>
.ot-partners-section {
    background: #fff;
    padding: 56px 0 52px;
    border-top: 1px solid #eef0f5;
    border-bottom: 1px solid #eef0f5;
    overflow: hidden;
}
.ot-partners-heading {
    text-align: center;
    margin-bottom: 36px;
}
.ot-partners-heading .ot-label {
    display: inline-block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #e63946;
    margin-bottom: 8px;
}
.ot-partners-heading h3 {
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    font-weight: 800;
    color: #0D2B1E;
    margin: 0;
    line-height: 1.3;
}
.ot-partners-heading p {
    font-size: 14px;
    color: #777;
    margin: 8px 0 0;
}
.ot-partners-track-wrap {
    position: relative;
    overflow: hidden;
}
.ot-partners-track-wrap::before,
.ot-partners-track-wrap::after {
    content: '';
    position: absolute;
    top: 0; bottom: 0;
    width: 80px;
    z-index: 2;
    pointer-events: none;
}
.ot-partners-track-wrap::before { left: 0; background: linear-gradient(to right, #fff, transparent); }
.ot-partners-track-wrap::after  { right: 0; background: linear-gradient(to left, #fff, transparent); }
.ot-partners-track {
    display: flex;
    gap: 52px;
    align-items: center;
    width: max-content;
    padding: 12px 0;
    animation: ot-scroll 32s linear infinite;
}
.ot-partners-track:hover { animation-play-state: paused; }
@keyframes ot-scroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.ot-partner-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    opacity: 0.4;
    transition: opacity 0.3s;
    cursor: default;
    white-space: nowrap;
}
.ot-partner-item:hover { opacity: 1; }
.ot-wordmark {
    font-family: Arial, 'Helvetica Neue', sans-serif;
    font-weight: 900;
    font-size: 22px;
    letter-spacing: -0.5px;
    line-height: 1;
    padding: 4px 0;
}
.ot-wordmark.dhl       { color: #D40511; letter-spacing: 2px; }
.ot-wordmark.fedex     { background: linear-gradient(90deg, #4D148C 50%, #FF6600 50%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 24px; }
.ot-wordmark.ups       { color: #351C15; font-size: 20px; }
.ot-wordmark.maersk    { color: #42B0D5; font-size: 20px; font-weight: 700; }
.ot-wordmark.msc       { color: #2E7D32; font-size: 26px; letter-spacing: 3px; }
.ot-wordmark.schenker  { color: #E00000; font-size: 18px; letter-spacing: 1px; }
.ot-wordmark.kn        { color: #002D62; font-size: 20px; }
.ot-wordmark.xpo       { color: #216BCC; font-size: 24px; letter-spacing: 1px; }
.ot-wordmark.cma       { color: #2E7D32; font-size: 18px; letter-spacing: 1px; }
.ot-wordmark.ceva      { color: #E2001A; font-size: 22px; letter-spacing: 2px; }
.ot-wordmark.dsv       { color: #E2001A; font-size: 26px; letter-spacing: 3px; }
.ot-wordmark.geodis    { color: #F7A800; font-size: 19px; font-weight: 700; }
.ot-partner-sub {
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #bbb;
}
.ot-partners-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}
</style>

<section class="ot-partners-section">
    <div class="ot-partners-container">
        <div class="ot-partners-heading">
            <div class="ot-label">Trusted Network</div>
            <h3>Affiliated with the World's Leading Logistics Companies</h3>
            <p>Delivering worldwide through a powerful network of global industry partners.</p>
        </div>
    </div>
    <div class="ot-partners-track-wrap">
        <div class="ot-partners-track">
            <!-- Set A -->
            <div class="ot-partner-item"><div class="ot-wordmark dhl">DHL</div><div class="ot-partner-sub">Express &amp; Freight</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark fedex">FedEx</div><div class="ot-partner-sub">Global Courier</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark ups">UPS</div><div class="ot-partner-sub">United Parcel Service</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark maersk">MAERSK</div><div class="ot-partner-sub">Ocean Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark msc">MSC</div><div class="ot-partner-sub">Mediterranean Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark schenker">DB SCHENKER</div><div class="ot-partner-sub">Freight &amp; Logistics</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark kn">KUEHNE+NAGEL</div><div class="ot-partner-sub">Sea &amp; Air Freight</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark xpo">XPO</div><div class="ot-partner-sub">Logistics Solutions</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark cma">CMA CGM</div><div class="ot-partner-sub">Container Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark ceva">CEVA</div><div class="ot-partner-sub">Contract Logistics</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark dsv">DSV</div><div class="ot-partner-sub">Road, Air &amp; Sea</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark geodis">GEODIS</div><div class="ot-partner-sub">Supply Chain</div></div>
            <!-- Set B duplicate for seamless loop -->
            <div class="ot-partner-item"><div class="ot-wordmark dhl">DHL</div><div class="ot-partner-sub">Express &amp; Freight</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark fedex">FedEx</div><div class="ot-partner-sub">Global Courier</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark ups">UPS</div><div class="ot-partner-sub">United Parcel Service</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark maersk">MAERSK</div><div class="ot-partner-sub">Ocean Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark msc">MSC</div><div class="ot-partner-sub">Mediterranean Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark schenker">DB SCHENKER</div><div class="ot-partner-sub">Freight &amp; Logistics</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark kn">KUEHNE+NAGEL</div><div class="ot-partner-sub">Sea &amp; Air Freight</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark xpo">XPO</div><div class="ot-partner-sub">Logistics Solutions</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark cma">CMA CGM</div><div class="ot-partner-sub">Container Shipping</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark ceva">CEVA</div><div class="ot-partner-sub">Contract Logistics</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark dsv">DSV</div><div class="ot-partner-sub">Road, Air &amp; Sea</div></div>
            <div class="ot-partner-item"><div class="ot-wordmark geodis">GEODIS</div><div class="ot-partner-sub">Supply Chain</div></div>
        </div>
    </div>
</section>

<!-- ===== FULL-WIDTH CTA BANNER ===== -->
<section style="background:linear-gradient(90deg,#f4a306 0%,#e8940a 100%);padding:60px 20px;text-align:center;">
    <style>
        .ot-cta-wrap{max-width:780px;margin:0 auto;}
        .ot-cta-wrap h2{font-size:clamp(22px,4vw,36px);font-weight:800;color:#0D2B1E;margin:0 0 14px;line-height:1.25;}
        .ot-cta-wrap p{font-size:16px;color:rgba(26,26,46,0.8);margin:0 0 28px;line-height:1.6;}
        .ot-cta-btn{display:inline-block;background:#0D2B1E;color:#f4a306;font-size:14px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;padding:15px 36px;border-radius:4px;text-decoration:none;transition:background 0.3s,color 0.3s;}
        .ot-cta-btn:hover{background:#fff;color:#0D2B1E;}
    </style>
    <div class="ot-cta-wrap">
        <h2>Ready to Ship? Let Us Handle the Rest.</h2>
        <p>Get a free quote or track your shipment right now. Our logistics experts are available around the clock to assist you.</p>
        <a class="ot-cta-btn" href="{{ url('/contact') }}"><i class="fas fa-paper-plane" style="margin-right:8px;"></i>Get a Free Quote</a>
        &nbsp;&nbsp;
        <a class="ot-cta-btn" href="{{ url('/track-now') }}" style="background:transparent;border:2px solid #0D2B1E;color:#0D2B1E;"><i class="fas fa-map-marker-alt" style="margin-right:8px;"></i>Track Shipment</a>
    </div>
</section>

@include('partials.footer')