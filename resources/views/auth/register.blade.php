@extends('layouts.master')

@section("importer")

<style>
    .wpcf7 input[type=password]{
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    --wp--preset--font-size--normal: 16px;
    --wp--preset--font-size--huge: 42px;
    -webkit-font-smoothing: antialiased;
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
    --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
    --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
    --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
    --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
    --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
    --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
    --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
    visibility: visible;
    font: inherit;
    color: inherit;
    line-height: inherit;
    border-radius: 0;
    font-family: "Marcellus"!important;
    box-sizing: border-box;
    font-size: 15px !important;
    font-weight: 500;
    position: relative;
    float: left;
    width: 100%;
    padding: 15px;
    outline: none;
    background: #fff;
    margin: 0 !important;
    max-width: 100%;
    border: 1px solid #d6d5d9 !important;
    direction: ltr;
}

.widget li a:after,
        .widget_nav_menu li a:after,
        .custom-widget.widget_recent_entries li a:after {
            color: #1c0c3d;
        }
        
        body,
        p,
        .lovepost a,
        a.woocommerce-LoopProduct-link,
        .widget ul li a,
        .widget p,
        .widget span,
        .widget ul li,
        .the_content ul li,
        .the_content ol li,
        #recentcomments li,
        .custom-widget h4,
        .custom-widget h4 span,
        .widget.des_cubeportfolio_widget h4,
        .widget.des_recent_posts_widget h4,
        .custom-widget ul li a,
        .aio-icon-description,
        li:not(.ticker li),
        .smile_icon_list li .icon_description p,
        #recentcomments li span,
        .wpb-js-composer .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-title>a,
        .related_posts_listing .related_post .excerpt,
        .testimonials-slide-content .text-container span p,
        .testimonials-slide-content .text-container span,
        .testimonials-slide-content .text-container p,
        .vc_row .widget.des_recent_posts_widget .ult-item-wrap .excerpt p,
        .metas-comments p {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #1c0c3d;
        }
        
        p:not(.metas-container p),
        .widget p,
        .widget span,
        .testimonials p {
            line-height: 1.7em !important;
        }
        
        .info-circle-text {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
        }
        
        .wpb-js-composer .vc_tta-color-grey.vc_tta-style-outline .vc_tta-tab>a {
            color: #1c0c3d !important;
        }
        
        .page_content.sidebar .tagcloud a {
            color: #1c0c3d;
        }
        
        .map_info_text {
            font-family: 'Inter', 'Arial', 'sans-serif', sans-serif;
            font-weight: normal;
            font-size: 15px;
            color: #1c0c3d !important;
        }
        
        .woocommerce ul.products li.product .price ins,
        .woocommerce-page ul.products li.product .price ins,
        .woocommerce #content div.product p.price ins,
        .woocommerce #content div.product span.price ins,
        .woocommerce div.product p.price ins,
        .woocommerce div.product span.price ins,
        .woocommerce-page #content div.product p.price ins,
        .woocommerce-page #content div.product span.price ins,
        .woocommerce-page div.product p.price ins,
        .woocommerce-page div.product span.price ins,
        .woocommerce-page ul.product_list_widget ins,
        .woocommerce ul.products li.product .price ins,
        .woocommerce ul.products li.product .price span {
            color: #1c0c3d !important;
            background: transparent !important;
        }
        
        a.pageXofY .pageX,
        .pricing .bestprice .name,
        .filter li a:hover,
        .widget_links ul li a:hover,
        #contacts a:hover,
        .title-color,
        .ms-staff-carousel .ms-staff-info h4,
        .filter li a:hover,
        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus,
        a.go-about:hover,
        .text_color,
        .navbar-nav .dropdown-menu a:hover,
        .profile .profile-name,
        #elements h4,
        #contact li a:hover,
        #agency-slider h5,
        .ms-showcase1 .product-tt h3,
        .filter li a.active,
        .contacts li i,
        .big-icon i,
        .navbar-default.dark .navbar-brand:hover,
        .navbar-default.dark .navbar-brand:focus,
        a.p-button.border:hover,
        .navbar-default.light-menu .navbar-nav>li>a.selected,
        .navbar-default.light-menu .navbar-nav>li>a.hover_selected,
        .navbar-default.light-menu .navbar-nav>li>a.selected:hover,
        .navbar-default.light-menu .navbar-nav>li>a.hover_selected:hover,
        .navbar-default.light-menu .navbar-nav>li>a.selected,
        .navbar-default.light-menu .navbar-nav>li>a.hover_selected,
        .navbar-default.light-menu .navbar-nav>.open>a,
        .navbar-default.light-menu .navbar-nav>.open>a:hover,
        .navbar-default.light-menu .navbar-nav>.open>a:focus,
        .light-menu .dropdown-menu>li>a:focus,
        a.social:hover:before,
        .symbol.colored i,
        .icon-nofill,
        .slidecontent-bi .project-title-bi p a:hover,
        .grid .figcaption a.thumb-link:hover,
        .tp-caption a:hover,
        .btn-1d:hover,
        .btn-1d:active,
        #contacts .tweet_text a,
        #contacts .tweet_time a,
        .social-font-awesome li a:hover,
        h2.post-title a:hover,
        .tags a:hover,
        .nyssa-button-color span,
        #contacts .form-success p,
        .nav-container .social-icons-fa a i:hover,
        .the_title h2 a:hover,
        .widget ul li a:hover,
        .widget_nav_menu .current-menu-item>a,
        .team-position,
        .nav-container .nyssa_minicart li a:hover,
        body.style9 .nyssa_minicart li a:hover,
        .metas-container i,
        .widget-contact-content i,
        .woocommerce.widget_shopping_cart ul.cart_list li a:hover,
        .woocommerce.widget_shopping_cart ul.product_list_widget li a:hover,
        .woocommerce ul.products li.product a.add_to_cart_button.ajax_add_to_cart:hover:after,
        .woocommerce-page ul.products li.product a.add_to_cart_button.ajax_add_to_cart:hover:after,
        .woocommerce ul.products li.product a.product_type_variable:hover:after,
        .woocommerce-page ul.products li.product a.product_type_variable:hover:after,
        .woocommerce ul.products li.product a.product_type_grouped:hover:after,
        .woocommerce-page ul.products li.product a.product_type_grouped:hover:after,
        .woocommerce-page ul.products li.product a.product_type_simple:hover:after,
        .widget-contact-content.centered i,
        p.vc_custom_heading.heading_border {
            color: #5a24b1;
        }
        
        #pbd-alp-load-posts a {
            background-color: #5a24b1;
            border-color: #5a24b1;
        }
        
        .wpb-js-composer .vc_tta-color-grey.vc_tta-style-outline .vc_tta-tab.vc_active>a {
            background: #5a24b1 !important;
            color: #fff !important;
            border-color: #5a24b1 !important;
        }
        
        .vc_toggle_square .vc_toggle_icon,
        p.vc_custom_heading.heading_border::before {
            background-color: #5a24b1 !important;
        }
        
        body:not(.page-template-blog-template):not(.page-template-blog-masonry-template) .page_content blockquote {
            border-left: 4px solid #5a24b1 !important;
        }
        
        body .ls-roundedflat .ls-nav-prev:hover,
        body .ls-roundedflat .ls-nav-next:hover,
        body .ls-roundedflat .ls-bottom-slidebuttons a.ls-nav-active,
        body .ls-roundedflat .ls-bottom-slidebuttons a:hover,
        .widget>h2:after,
        .widget>h4:after,
        .custom-widget>h4:after,
        .widget .widget-contact-content>h4:after,
        #footer-instagram p.clear a,
        .woocommerce #content input.button.alt:hover,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce-page #content input.button.alt:hover,
        .woocommerce-page #respond input#submit.alt:hover,
        .woocommerce-page a.button.alt:hover,
        .woocommerce-page button.button.alt:hover,
        .woocommerce-page input.button.alt:hover,
        .cd-overlay-content span,
        .cd-nav-bg-fake,
        .nyssa-labeled h4,
        .top-bar .phone-mail li.text_field,
        .colored_bg,
        .nyssa_recent_posts .post-quote,
        .cbp-popup-singlePageInline .cbp-popup-close:hover:after,
        a#send-comment,
        .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat:focus,
        .vc_btn3.vc_btn3-color-juicy-pink.vc_btn3-style-flat:hover,
        .vc_btn3.vc_btn3-color-juicy-pink:focus,
        .vc_btn3.vc_btn3-color-juicy-pink:hover,
        .page-template-blog-masonry-grid-template .metas a:hover,
        .social-shares ul li a:hover i {
            background: #5a24b1 !important;
            color: #fff !important;
        }
        
        .woocommerce #content input.button,
        .woocommerce #respond input#submit,
        .woocommerce a.button:not(.add_to_cart_button):not(.product_type_simple),
        .woocommerce button.button,
        .woocommerce input.button,
        .woocommerce-page #content input.button,
        .woocommerce-page #respond input#submit,
        .woocommerce-page a.button:not(.add_to_cart_button):not(.product_type_simple),
        .woocommerce-page button.button:not(.add_to_cart_button),
        .woocommerce-page input.button,
        .woocommerce #content div.product form.cart .button,
        .woocommerce div.product form.cart .button,
        .woocommerce-page #content div.product form.cart .button,
        .woocommerce-page div.product form.cart .button,
        .nav-container a.button.nyssa_minicart_cart_but,
        body.style9 a.button.nyssa_minicart_cart_but,
        .nav-container a.button.nyssa_minicart_checkout_but,
        body.style9 a.button.nyssa_minicart_checkout_but {
            color: #5a24b1 !important;
            border: 2px solid #5a24b1 !important;
        }
        
        .woocommerce #content input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:not(.add_to_cart_button):not(.product_type_simple):hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce-page #content input.button:hover,
        .woocommerce-page #respond input#submit:hover,
        .woocommerce-page a.button:not(.add_to_cart_button):not(.product_type_simple):hover,
        .woocommerce-page button.button:hover,
        .woocommerce-page input.button:hover,
        .woocommerce #content div.product form.cart .button:hover,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce-page #content div.product form.cart .button:hover,
        .woocommerce-page div.product form.cart .button:hover,
        .nav-container a.button.nyssa_minicart_cart_but:hover,
        body.style9 a.button.nyssa_minicart_cart_but:hover,
        .nav-container a.button.nyssa_minicart_checkout_but:hover,
        body.style9 a.button.nyssa_minicart_checkout_but:hover,
        body .button-dark:hover input {
            background: #5a24b1 !important;
            border: 2px solid #5a24b1 !important;
        }
        
        .testimonials.style1 .testimonial span a,
        .metas a:hover(.page-template-blog-masonry-grid-template .metas a:hover),
        .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a,
        .related_posts_listing .related_post .title:hover,
        .nyssa_breadcrumbs a:hover,
        .mail-box .news-l .opacity-icon i,
        div.nav-style-6>ul>.menu_items_wrapper>li>a:hover,
        a.aio-icon-read:hover,
        .t-author a,
        .page-template-blog-masonry-template .posts_category_filter li:hover,
        .page-template-blog-masonry-grid-template .posts_category_filter li:hover,
        .posts_category_filter li.selected,
        .dark .header_style2_contact_info .email-contact .email a:hover,
        single-post .post a:hover,
        .des_recent_posts_widget.widget .title a:hover h4,
        .special_tabs.icontext .label a:hover,
        header.navbar .nav-container .header_style2_contact_info i,
        .special_tabs.icontext .label.current a,
        .special_tabs.text .label.current a,
        .special_tabs.icontext .label.current i,
        .special_tabs.text .label a:hover,
        .info-circle-def .info-circle-icon,
        .woocommerce-page.woocommerce-page ul.products li.product a.add_to_cart_button:hover,
        .woocommerce ul.products li.product a.add_to_cart_button:hover,
        .woocommerce-page ul.products li.product a.add_to_cart_button:hover,
        .woocommerce-page ul.products li.product a.product_type_grouped:hover,
        .woocommerce-page ul.products li.product a.product_type_external:hover,
        .woocommerce ul.products li.product a.product_type_grouped:hover,
        .woocommerce ul.products li.product a.product_type_external:hover,
        {
            color: #5a24b1 !important;
        }
        
        .nyssa-form-simple.dark .bt-contact a:not(.button-dark) span input:hover {
            border: 1px solid #5a24b1 !important;
            background: #5a24b1 !important;
        }
        
        .info-circle-active {
            border: 1px solid #5a24b1 !important;
            background: #5a24b1 !important;
            color: #000 !important;
        }
        
        .testimonials.style1 .testimonial span a,
        .tabs.wc-tabs a:hover,
        .tabs.wc-tabs .active a {
            color: #5a24b1 !important;
        }
        
        body.page-template-blog-masonry-grid-template .metas a:hover,
        body .button-dark:hover input {
            color: #fff !important;
        }
        
        .widget:not(.contact-widget-container):not(.instagram_widget):not(.recent_posts_widget_2) li a:hover:after,
        .widget_nav_menu li a:hover:after,
        .footer_sidebar ul li a:hover:after {
            border-bottom-color: #5a24b1 !important;
        }
        
        .special_tabs.horizontal.text .tab-selector .label:hover .title a:before,
        .ult_btn10_span:hover:before,
        a.aio-icon-read:hover:before {
            border-bottom-color: #5a24b1 !important;
        }
        
        .ult_cl_link_1 .ult_btn10_span:hover:before,
        .ult_cl_link_1 .ult_btn10_span:before {
            border: none !important;
        }
        
        .aio-icon-read,
        .tp-caption a.text_color {
            color: #5a24b1 !important;
        }
        
        #big_footer .social-icons-fa a:not(.social-network) i {
            color: #a79fbe;
        }
        
        #big_footer .social-icons-fa a:not(.social-network) i:hover {
            color: #feb4c3;
        }
        
        .homepage_parallax .home-logo-text a.light:hover,
        .homepage_parallax .home-logo-text a.dark:hover,
        .widget li a:hover:before,
        .widget_nav_menu li a:hover:before,
        .footer_sidebar ul li a:hover:before,
        .custom-widget li a:hover:before,
        .archive .the_title h2 a:hover,
        .page-template-blog-template .the_title h2 a:hover,
        .home.blog .blog-default.wideblog .container .the_title h2 a:hover,
        .blog-default-bg-masonry .the_title h2 a:hover,
        .product-title:hover,
        .testimonials.style1 .testimonial-nav li a.active:after,
        .post-listing .metas-container a:hover,
        .special_tabs.icontext .label.current,
        .special_tabs.icontext.horizontal .label.current a,
        .special_tabs.text.horizontal .label.current a,
        .special_tabs.icontext.horizontal .label.current i,
        .special_tabs.vertical:not(.icon) .label.current i,
        .special_tabs.vertical .label.current a,
        .special_tabs.vertical:not(.icon) .label:hover i,
        .widget li a:hover,
        .widget_nav_menu li a:hover,
        .footer_sidebar ul li a:hover,
        .custom-widget li a:hover,
        .metas-container i,
        .related_posts_listing .related_post .title:hover {
            color: #5a24b1 !important;
        }
        
        .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-title>a i.vc_tta-controls-icon:before {
            border-color: #5a24b1 !important;
        }
        
        .widget.widget_pages li:not(li:first-child),
        .widget.widget_meta li:not(li:first-child),
        .widget.widget_recent_comments li:not(li:first-child),
        .widget.widget_recent_entries li:not(li:first-child),
        .widget.widget_nav_menu li:not(li:first-child),
        .widget.widget_archive li:not(li:first-child),
        .widget.widget_categories li:not(li:first-child),
        .wp-block-latest-posts li:not(li:first-child),
        .wp-block-latest-comments li:not(li:first-child),
        .product-categories li:not(li:first-child) {
            border-top: 1px solid #d6d5d9 !important;
        }
        
        .special_tabs.icontext.vertical .tab-selector,
        .special_tabs.text.vertical .tab-selector {
            border-right: 1px solid #d6d5d9 !important;
        }
        
        .special_tabs.vertical:not(.icon) .tab-selector .label,
        .minicart_total_checkout {
            border-bottom: 1px solid #d6d5d9 !important;
        }
        
        .special_tabs.icontext .tab-selector .label:last-child,
        .special_tabs.text .tab-selector .label:last-child {
            border-bottom: none !important;
        }
        
        .widget_nav_menu li:not(.nyssa-push-sidebar-content li):last-child,
        .footer_sidebar ul li:not(.social-icons-fa li):not(.slick-dots li):last-child,
        .widget.widget_archive li:last-child,
        .widget.widget_categories li:last-child {
            border-bottom: 1px solid #d6d5d9 !important;
        }
        
        a.sf-button.hide-icon,
        .tabs li.current,
        .readmore:hover,
        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus,
        a.p-button:hover,
        a.p-button.colored,
        .light #contacts a.p-button,
        .tagcloud a:hover,
        .rounded.fill,
        .colored-section,
        .pricing .bestprice .price,
        .pricing .bestprice .signup,
        .signup:hover,
        .divider.colored,
        .services-graph li span,
        .no-touch .hi-icon-effect-1a .hi-icon:hover,
        .hi-icon-effect-1b .hi-icon:hover,
        .no-touch .hi-icon-effect-1b .hi-icon:hover,
        .symbol.colored .line-left,
        .symbol.colored .line-right,
        .projects-overlay #projects-loader,
        .panel-group .panel.active .panel-heading,
        .double-bounce1,
        .double-bounce2,
        .nyssa-button-color-1d:after,
        .container1>div,
        .container2>div,
        .container3>div,
        .cbp-l-caption-buttonLeft:hover,
        .cbp-l-caption-buttonRight:hover,
        .post-content a:hover .post-quote,
        .post-listing .post a:hover .post-quote,
        .nyssa-button-color-1d:after,
        .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,
        .woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range,
        .errorbutton,
        .woocommerce span.onsale,
        .woocommerce-page span.onsale,
        .page-template-blog-template .post-quote:hover,
        .single-post .post-quote,
        .bt-contact a span input:hover,
        .page-template-blog-masonry-template .metas p[data-rel='metas-categories'] a,
        .home.blog .metas p[data-rel='metas-categories'] a,
        .archive .masonry .metas p[data-rel='metas-categories'] a,
        .page-template-blog-masonry-template .metas p[data-rel='metas-tags'] a,
        .widget h2:after,
        .widget h4:after,
        .custom-widget h4:after,
        .woocommerce .woocommerce-info,
        .woocommerce-page .woocommerce-info,
        .nav-container a.button.nyssa_minicart_cart_but,
        body.style9 a.button.nyssa_minicart_cart_but,
        .nav-container a.button.nyssa_minicart_checkout_but,
        body.style9 a.button.nyssa_minicart_checkout_but,
        #primary_footer .footer_sidebar>h4::before,
        #primary_footer .footer_sidebar>.widget>h4::before,
        #primary_footer .widget .widget-contact-content h4::before,
        #primary_footer .widget h4::before,
        #primary_footer .widget .widget-contact-content>h4::before,
        .widget>h2::before,
        .widget>h4::before,
        .custom-widget>h4::before,
        .select2-container--default .select2-results__option--highlighted[data-selected],
        .special_tabs.horizontal.text .tab-selector .label:before,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:hover:after,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:focus:after,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:active:after,
        .dropdown-menu li:hover>a:after,
        .widget:not(.widget_recent_comments):not(.widget_rss) li a:hover::after,
        .widget_nav_menu li a:hover::after,
        .footer_sidebar ul li a:hover::after,
        .custom-widget li a:hover::after,
        .woocommerce ul.products li.product .onsale,
        .woocommerce-page ul.products li.product .onsale,
        .notfounderrorbg,
        .errorbutton,
        .modal-popup-link .tooltip-content,
        .woocommerce span.onsale,
        .woocommerce-page span.onsale,
        .page-template-blog-template .blog-read-more,
        .archive .blog-read-more,
        header.navbar-default.nyssa-underlining .navbar-nav>li:hover>a::before,
        .navbar-collapse ul.navbar-nav>li.current-menu-item>a::before,
        .navbar-collapse ul.navbar-nav>li.current-menu-ancestor>a::before,
        .navbar-collapse ul.navbar-nav>li>a.selected::before,
        .recentpostsvc a.blog-read-more {
            background-color: #5a24b1;
        }
        
        .nyssa-button-color,
        .tagcloud a:hover {
            border: 1px solid #5a24b1;
        }
        
        .des-pages .current .postpagelinks,
        .des-pages a .postpagelinks:hover,
        .navigation a.page:hover {
            border: 1px solid #5a24b1;
            background-color: #5a24b1;
            color: #fff !important;
        }
        
        .bt-contact a.button-dark span input {
            border: 2px solid #fff !important;
            background: #fff !important;
        }
        
        .bt-contact a.button-dark span input:hover {
            border: 1px solid #5a24b1;
        }
        
        #nav-below:not(.navigation_with_thumbnails) .nav-previous,
        #nav-below:not(.navigation_with_thumbnails) .nav-next,
        #nav-below:not(.navigation_with_thumbnails) .next-posts,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts,
        #nav-below:not(.navigation_with_thumbnails) .nav-previous a,
        #nav-below:not(.navigation_with_thumbnails) .nav-next a,
        #nav-below:not(.navigation_with_thumbnails) .nav-next i,
        #nav-below:not(.navigation_with_thumbnails) .next-posts a,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts a,
        #nav-below:not(.navigation_with_thumbnails) .nav-previous i,
        #nav-below:not(.navigation_with_thumbnails) .next-posts i,
        .single .blog-read-more,
        .home.blog .blog-read-more,
        .btn-contact-left input,
        .single #commentform .form-submit #submit,
        a#send-comment,
        .bt-contact a span input {
            color: #5a24b1;
        }
        
        #nav-below:not(.navigation_with_thumbnails) .nav-previous:hover,
        #nav-below:not(.navigation_with_thumbnails) .nav-next:hover,
        #nav-below:not(.navigation_with_thumbnails) .next-posts:hover,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts:hover,
        .single .blog-read-more:hover,
        .home.blog .blog-read-more:hover,
        .btn-contact-left input:hover,
        .single #commentform .form-submit #submit:hover,
        a#send-comment:hover {
            background: #5a24b1;
        }
        
        #nav-below:not(.navigation_with_thumbnails) .nav-previous:hover a,
        #nav-below:not(.navigation_with_thumbnails) .nav-next:hover a,
        #nav-below:not(.navigation_with_thumbnails) .next-posts:hover a,
        #nav-below:not(.navigation_with_thumbnails) .nav-next:hover i,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts:hover a,
        #nav-below:not(.navigation_with_thumbnails) .nav-previous:hover i,
        #nav-below:not(.navigation_with_thumbnails) .next-posts:hover i,
        .single .blog-read-more:hover,
        .home.blog .blog-read-more:hover,
        .btn-contact-left input:hover,
        .single #commentform .form-submit #submit:hover,
        a#send-comment:hover,
        .bt-contact a:hover span input {
            color: #fff !important;
        }
        
        #nav-below:not(.navigation_with_thumbnails) .nav-previous,
        #nav-below:not(.navigation_with_thumbnails) .nav-next,
        #nav-below:not(.navigation_with_thumbnails) .next-posts,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts,
        .single .blog-read-more,
        .home.blog .blog-read-more,
        .btn-contact-left input,
        .single #commentform .form-submit #submit,
        a#send-comment,
        .bt-contact a:not(.button-dark) span input,
        .bt-contact a:hover span input {
            border: 2px solid #5a24b1 !important;
        }
        /* New Borders Color */
        
        .widget_search input,
        .wpcf7 textarea,
        .wpcf7 input[type='text'],
        .wpcf7 input[type='email'],
        .wpcf7 input[type='tel'],
        .wpcf7 .select2-container--default .select2-selection--single,
        table td,
        table th,
        .vc_row .widget.des_recent_posts_widget .ult-item-wrap,
        #respond #comment,
        #comments #commentform input,
        .post-content,
        .des-pages a .postpagelinks,
        .navigation a.page,
        .woocommerce.widget_shopping_cart ul.product_list_widget,
        .related_posts_listing .related_post .related_post_bg {
            border: 1px solid #d6d5d9 !important;
        }
        
        .woocommerce .woocommerce-info .showcoupon {
            color: #fff !important;
            opacity: 0.8;
        }
        
        .aio-icon-tooltip .aio-icon:hover:after {
            box-shadow: 0 0 0 1px #5a24b1 !important;
        }
        
        .just-icon-align-left .aio-icon:hover,
        .aio-icon-tooltip .aio-icon:hover,
        .btn-contact-left.inversecolor input:hover,
        .light .nyssa_little_shopping_bag .overview span.minicart_items,
        .nyssa_little_shopping_bag .overview span.minicart_items,
        #mc_embed_signup input#mc-embedded-subscribe:hover,
        #mc_embed_signup input#mc-embedded-subscribe:focus,
        .team_member_profile_content .aio-icon.circle:hover,
        .special_tabs.icon .current .nyssa_icon_special_tabs,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:hover:after,
        header .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:focus:after,
        header .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:active:after,
        header .dropdown-menu li:hover>a:after,
        .cbp-popup-singlePageInline .cbp-popup-close:hover,
        .cbp-nav-next:hover,
        .cbp-nav-prev:hover {
            background-color: #5a24b1;
        }
        
        .wpcf7 .dark input:not([type='submit']),
        .wpcf7 .dark textarea,
        .wpcf7 .dark .select2-container--default .select2-selection--single {
            border: 1px solid #77767f !important;
            background-color: transparent !important;
        }
        
        .aio-icon-tooltip .aio-icon:hover,
        .btn-contact-left.inversecolor input:hover,
        .flex-control-paging li a.flex-active,
        .cbp-nav-pagination-item:hover:after,
        .cbp-nav-pagination-active:after,
        .footer_newsletter form input.button,
        .newsletter_shortcode form input.button {
            background-color: #5a24b1 !important;
        }
        
        .cbp-nav-pagination-item:hover,
        .cbp-nav-pagination-active {
            border: 2px solid #5a24b1 !important;
        }
        
        .aio-icon-tooltip .aio-icon.none:hover {
            background-color: transparent !important;
        }
        
        .widget .slick-dots li.slick-active i,
        .style-light .slick-dots li.slick-active i,
        .style-dark .slick-dots li.slick-active i,
        .style-dark .slick-dots li i:after,
        .testimonials-style2.style-dark .slick-next:after,
        .testimonials-style2.style-dark .slick-prev:after {
            background: #5a24b1 !important;
            opacity: 1;
        }
        
        .widget.des_testimonials_widget .ult-carousel-wrapper .slick-dots li.slick-active i,
        .des_recent_posts_widget .ult-carousel-wrapper .slick-dots li.slick-active i,
        .des_team_widget .ult-carousel-wrapper .slick-dots li.slick-active i {
            border: 1px solid #5a24b1 !important;
            background: #5a24b1 !important;
            color: #5a24b1 !important;
        }
        
        .woocommerce-page a.button.wc-forward:hover,
        .woocommerce-page a.button.wc-forward.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce #payment #place_order:hover,
        .woocommerce-page #payment #place_order:hover,
        .woocommerce .cart .button:hover,
        .woocommerce .checkout_coupon .button:hover,
        .woocommerce .cart input.button:hover,
        .woocommerce-page .cart .button:hover,
        .woocommerce-page .cart input.button:hover,
        .woocommerce .cart-collaterals .cart_totals a.button.alt:hover,
        .woocommerce-page .cart-collaterals .cart_totals a.button.alt:hover {
            background-color: #5a24b1;
            color: #fff !important;
        }
        
        .nav-container a.button.nyssa_minicart_checkout_but:hover,
        .nav-container a.button.nyssa_minicart_cart_but:hover,
        body.style9 a.button.nyssa_minicart_checkout_but:hover,
        body.style9 a.button.nyssa_minicart_cart_but:hover {
            background-color: #5a24b1 !important;
            color: #fff !important;
        }
        
        .nyssa-button-color-1d:hover,
        .nyssa-button-color-1d:active {
            border: 1px double #5a24b1;
        }
        
        .nyssa-button-color {
            background-color: #5a24b1;
            color: #5a24b1;
        }
        
        .cbp-l-caption-alignCenter .cbp-l-caption-buttonLeft:hover,
        .cbp-l-caption-alignCenter .cbp-l-caption-buttonRight:hover {
            background: #5a24b1 !important;
            border: 2px solid #5a24b1 !important;
            color: #fff !important;
        }
        
        .widget_posts .tabs li.current {
            border: 1px solid #5a24b1;
        }
        
        .hi-icon-effect-1 .hi-icon:after {
            box-shadow: 0 0 0 3px #5a24b1;
        }
        
        .colored-section:after {
            border: 20px solid #5a24b1;
        }
        
        .filter li a.active,
        .filter li a:hover,
        .panel-group .panel.active .panel-heading {
            border: 1px solid #5a24b1;
        }
        
        .navbar-default.light-menu.border .navbar-nav>li>a.selected:before,
        .navbar-default.light-menu.border .navbar-nav>li>a.hover_selected:before,
        .navbar-default.light-menu.border .navbar-nav>li>a.selected:hover,
        .navbar-default.light-menu.border .navbar-nav>li>a.hover_selected:hover,
        .navbar-default.light-menu.border .navbar-nav>li>a.selected,
        .navbar-default.light-menu.border .navbar-nav>li>a.hover_selected {
            border-bottom: 1px solid #5a24b1;
        }
        
        .doubleborder {
            border: 6px double #5a24b1;
        }
        
        .special_tabs.icon .current .nyssa_icon_special_tabs {
            border: 1px solid #5a24b1;
        }
        
        .nyssa-button-color {
            border: 1px solid #5a24b1;
        }
        
        .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link) a,
        .dl-menuwrapper li:not(.nyssa_mega_hide_link) a,
        .gosubmenu,
        .nav-container .nyssa_minicart ul li,
        body.style9 .nyssa_minicart ul li {
            font-family: 'Inter', 'Arial', 'sans-serif', sans-serif;
            font-weight: normal;
            font-size: 15px;
            color: #3c3940;
            letter-spacing: 0px;
        }
        
        .nav-style-6 ul.menu-depth-1 li a {
            font-family: 'Inter', 'Arial', 'sans-serif', sans-serif !important;
            font-weight: normal;
            font-size: 15px !important;
            color: #3c3940;
            letter-spacing: 0px;
        }
        
        header.navbar-default.hover-line .navbar-nav>li:hover>a:before,
        header.hover-line.navbar-default .navbar-nav>li:hover>a.selected:before,
        header.hover-line.navbar-default .navbar-nav>li.current-menu-item>a:before,
        header.hover-line.header_after_scroll.navbar-default .navbar-nav>li.current-menu-item>a:before,
        header.hover-line.header_after_scroll.navbar-default .navbar-nav>li:hover>a:before,
        header.hover-line.header_after_scroll.navbar-default .navbar-nav>li:hover>a.selected:before {
            border-bottom-color: #ffffff !important;
        }
        
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:before,
        header .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link) a,
        .dl-back {
            color: #3c3940;
        }
        /* changed the overs from lis to as to acommodate style8 */
        
        .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link)>a:hover,
        .dl-menu li:not(.nyssa_mega_hide_link):hover>a,
        .dl-menu li:not(.nyssa_mega_hide_link):hover>a,
        .dl-menu li:not(.nyssa_mega_hide_link):hover>.gosubmenu,
        .dl-menu li.dl-back:hover,
        .navbar-nav:not(.cd-primary-nav) .dropdown-menu a:hover i,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:hover:before {
            color: #5a24b1 !important;
        }
        
        .dl-menu li:not(.nyssa_mega_hide_link):hover a:after {
            background-color: #5a24b1 !important;
        }
        
        .menu-simple ul.menu-depth-1,
        .menu-simple ul.menu-depth-1 ul,
        .menu-simple ul.menu-depth-1,
        .menu-simple #dl-menu ul {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        .navbar-collapse .nyssa_mega_menu ul.menu-depth-2,
        .navbar-collapse .nyssa_mega_menu ul.menu-depth-2 ul {
            background-color: transparent !important;
        }
        
        .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>a {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link):hover>a,
        .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>a,
        .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>a,
        .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>.gosubmenu,
        .dl-menuwrapper li.dl-back:hover,
        .navbar-nav .dropdown-menu a:hover i,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link):hover>a:before {
            color: #5a24b1;
        }
        
        .menu-simple li:not(.nyssa_mega_menu) li.menu-item-depth-1:hover>a,
        .menu-simple li.menu-item-depth-2:hover>a,
        .menu-simple li.menu-item-depth-3:hover>a {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        .menu-square li:not(.nyssa_mega_menu) li.menu-item-depth-1:hover>a,
        .menu-square li.menu-item-depth-2:hover>a,
        .menu-square li.menu-item-depth-3:hover>a {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        .navbar-collapse li:not(.nyssa_mega_menu) ul.menu-depth-1 li:not(:first-child) {
            border-top: 1px solid rgba(255, 255, 255, 0) !important;
        }
        
        .navbar-collapse li.nyssa_mega_menu ul.menu-depth-2 {
            border-right: 1px solid rgba(255, 255, 255, 0) !important;
        }
        
        .rtl .navbar-collapse li.nyssa_mega_menu ul.menu-depth-2 {
            border-left: 1px solid #ffffff;
        }
        
        header #dl-menu li:not(:last-child) a {
            border-bottom: 1px solid #ffffff;
        }
        
        .navbar-collapse ul.navbar-nav>li>a,
        .navbar-collapse>.header_style2_menu>ul>li>a,
        .nyssa-header-button a,
        div.nav-style-6>ul>.menu_items_wrapper>li>a {
            font-family: 'Inter', 'Arial', 'sans-serif', sans-serif;
            font-weight: 600 !important;
            font-size: 15px;
            color: #b6b1c3;
            text-transform: none;
            letter-spacing: 0px;
        }
        
        .nyssa-header-button a {
            background: #feb4c3;
            color: #ffffff;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            -ms-border-radius: 25px;
            -o-border-radius: 25px;
            border-radius: 25px;
        }
        
        .nyssa-header-button a:hover {
            background: #5a24b1;
            color: #ffffff !important;
        }
        
        .navbar-collapse>.header_style2_menu>ul>li>a:hover,
        .navbar-collapse>.header_style2_menu>ul>li.current-menu-ancestor>a,
        .navbar-collapse>.header_style2_menu>ul>li.current-menu-item>a,
        .navbar-collapse>.header_style2_menu>ul>li>a.selected,
        .navbar-collapse>.header_style2_menu>ul>li>a.hover_selected,
        .navbar-collapse ul.navbar-nav>li>a:hover,
        .navbar-collapse ul.navbar-nav>li.current-menu-ancestor>a,
        .navbar-collapse ul.navbar-nav>li.current-menu-item>a,
        .navbar-collapse ul.navbar-nav>li>a.selected,
        .navbar-collapse ul.navbar-nav>li>a.hover_selected,
        body.style9 .navbar-collapse ul.navbar-nav li.mobile-opened>a {
            color: #ffffff !important;
        }
        /* 2020 header borders */
        
        header.navbar:not(.header_after_scroll),
        header.navbar:not(.header_after_scroll) .navbar-right {
            border-color: rgba(255, 255, 255, 0) !important;
        }
        
        header.navbar.header_after_scroll,
        header.navbar.header_after_scroll .navbar-right {
            border-color: rgba(255, 255, 255, 0) !important;
        }
        /* endof 2020 header borders */
        
        .header.navbar .navbar-collapse ul li:hover a {
            background: #ffffff;
            color: #fff !important;
        }
        
        .cover-test-img {
            background-color: rgba(90, 36, 177, 0.25);
        }
        
        body .vc_general.vc_btn3:hover,
        body .slider-button:hover,
        body .btn-contact-left input:hover,
        body .bt-contact a span input:hover,
        #nav-below:not(.navigation_with_thumbnails) .nav-previous:hover,
        #nav-below:not(.navigation_with_thumbnails) .nav-next:hover,
        #nav-below:not(.navigation_with_thumbnails) .next-posts:hover,
        #nav-below:not(.navigation_with_thumbnails) .prev-posts:hover,
        .single .blog-read-more:hover,
        .woocommerce #content input.button:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce-page #content input.button:hover,
        .woocommerce-page #respond input#submit:hover,
        .woocommerce-page a.button:hover,
        .woocommerce-page button.button:hover,
        .woocommerce-page input.button:hover,
        .woocommerce #content div.product form.cart .button:hover,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce-page #content div.product form.cart .button:hover,
        .woocommerce-page div.product form.cart .button:hover,
        header .nyssa-header-button a:hover,
        body .button-dark:hover input,
        .blog-read-more:hover {
            -webkit-box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            -moz-box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            background-color: rgba(90, 36, 177, 1) !important;
        }
        
        .dark .btn-contact-left input[type='submit'] {
            background-color: #fff !important;
            border: 2px solid transparent !important;
        }
        
        .dark .btn-contact-left input[type='submit']:hover {
            -webkit-box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            -moz-box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            box-shadow: 0px 6px 9px 0px rgba(90, 36, 177, 0.5) !important;
            background-color: rgba(90, 36, 177, 1) !important;
            color: #fff !important;
        }
        
        header.navbar-default.nyssa-underlining .navbar-nav>li:hover>a:before,
        .navbar-collapse ul.navbar-nav>li.current-menu-item>a:before,
        .navbar-collapse ul.navbar-nav>li.current-menu-ancestor>a:before,
        .navbar-collapse ul.navbar-nav>li>a.selected:before {
            background: #ffffff !important;
        }
        
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:hover:after,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:focus:after,
        .dropdown-menu li.menu-item-has-children:not(.nyssa_mega_hide_link)>a:active:after,
        .dropdown-menu li:hover>a:after {
            background: #ffffff !important;
        }
        
        header.navbar-default.header_after_scroll .navbar-collapse ul.navbar-nav>li.current-menu-item>a:before,
        header.navbar-default.header_after_scroll .navbar-collapse ul.navbar-nav>li.current-menu-ancestor>a:before,
        header.navbar-default.header_after_scroll .navbar-collapse ul.navbar-nav>li>a.selected:before,
        header.navbar-default.header_after_scroll .navbar-nav>li:hover>a:before {
            background: #5a24b1 !important;
        }
        
        header.style2 .navbar-nav>li,
        .navbar-default.menu-square.style2 .navbar-nav>li {
            padding-top: 0px;
        }
        
        header.style2 {
            padding-bottom: 32px;
        }
        
        header.style2 .header_style2_menu {
            margin-top: 32px !important;
        }
        
        .navbar-default .navbar-nav>li>a {
            padding-top: 32px;
            padding-bottom: 30px;
        }
        
        .navbar-default .navbar-nav>li {
            padding-right: 20px;
            padding-left: 20px;
        }
        
        header.style5 .nyssa_right_header_icons,
        header.style1 .nyssa_right_header_icons,
        header.style2 .nyssa_right_header_icons,
        header.style4 .nyssa_right_header_icons,
        header.style6 .nyssa_right_header_icons,
        header.style7 .nyssa_right_header_icons {
            padding-top: 32px;
            padding-bottom: 30px;
        }
        
        body #big_footer .tagcloud a:hover {
            color: #fff !important;
        }
        
        header.style2 .header_style2_menu {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        header:not(.header_after_scroll) .navbar-nav>li>ul {
            margin-top: 30px;
        }
        
        header:not(.header_after_scroll) .dl-menuwrapper button:after {
            background: #ffffff;
            box-shadow: 0 6px 0 #ffffff, 0 12px 0 #ffffff;
        }
        
        .nyssa_minicart_wrapper {
            padding-top: 30px;
        }
        
        li.nyssa_mega_hide_link>a,
        li.nyssa_mega_hide_link>a:hover {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            font-size: 15px !important;
            color: #1c0c3d;
            letter-spacing: 0px !important;
        }
        
        .nav-container .nyssa_minicart li a,
        body.style9 .nyssa_minicart li a {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #3c3940;
            letter-spacing: 0px;
        }
        
        .dl-trigger {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 600 !important;
            font-size: 15px;
            letter-spacing: 0px;
        }
        
        .nyssa_minicart {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        .master_container a:not(.the_author):not(.the_cats):not(.the_tags):not(.blog-read-more):not(.button):not(.the_title):not(.vc_btn3):not(.special_tabs_linkage):not(.widget a):not(.blog-read-more):not(.ult_colorlink):not(.page-numbers):not(.tabs a):not(.the_title h2 a):not(.woocommerce-info a):not(.nav-next a):not(.nav-previous a):not(.widget a):not(.custom-widget a):not(.fn a),
        .page_content a:not(.the_author):not(.the_cats):not(.the_tags):not(.button):not(.the_title):not(.vc_btn3):not(.special_tabs_linkage):not(.widget a):not(.blog-read-more):not(.ult_colorlink):not(.page-numbers):not(.tabs a):not(.the_title h2 a):not(.woocommerce-info a):not(.nav-next a):not(.nav-previous a):not(.widget a):not(.custom-widget a):not(.fn a),
        header a,
        #big_footer a,
        .comment-body a,
        .logged-in-as a,
        #reply-title a {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #5a24b1
        }
        
        .widget a:not(#primary_footer .widget a):not(.buttons a):not(.tagcloud a):not(.blog-read-more),
        .custom-widget a:not(#primary_footer .custom-widget a):not(.buttons a):not(.tagcloud a)not(.blog-read-more) {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #1c0c3d !important;
        }
        
        .widget a:not(#primary_footer .widget a):not(.buttons a):not(.tagcloud a)not(.blog-read-more):hover,
        .custom-widget a:not(#primary_footer .custom-widget a):not(.buttons a):not(.tagcloud a)not(.blog-read-more):hover,
        .the_title h2 a:hover {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #5a24b1 !important;
        }
        
        .widget .tagcloud a,
        .custom-widget .tagcloud a,
        .widget .tagcloud a:hover,
        .custom-widget .tagcloud a:hover {
            color: #fff !important;
        }
        
        .master_container a:not(.the_author):not(.metas-container a):not(.button):not(.vc_btn3):not(.page):not(.ult_colorlink):not(.special_tabs_linkage):not(.navcontentens-side a):not(.page):not(.the_title a):not(.page):not(.nav-previous a),
        .page_content a:not(.the_author):not(.metas-container a):not(.button):not(.vc_btn3):not(.special_tabs_linkage):not(.page):not(.ult_colorlink):not(.page):not(.the_title a):not(.page-numbers):not(.wp-block-group a) {
            line-height: 1.7em;
        }
        
        .master_container a:hover:not(.vc_btn3):not(.page):not(.button):not(.special_tabs_linkage):not(.widget li a):not(.page-numbers):not(.tabs a):not(.fn a),
        .page_content a:hover:not(.vc_btn3):not(.page):not(.button):not(.special_tabs_linkage):not(.widget li a):not(.page-numbers):not(.tabs a):not(.fn a),
        .comment-body a:hover,
        .logged-in-as a:hover,
        #reply-title a:hover {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            font-size: 15px;
            color: #383440
        }
        
        .t-author-style1 a:hover {
            font-size: 10px !important;
            font-weight: 800;
        }
        
        .master_container h6 a {
            color: #5a24b1 !important;
        }
        
        .master_container h6 a:hover {
            color: #383440 !important;
        }
        
        .archive .the_title h2 a,
        .page-template-blog-template .the_title h2 a,
        .home.blog .blog-default.wideblog .container .the_title h2 a,
        body.blog .blog-default-bg .the_title h2 a {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 600 !important;
            font-size: 55px !important;
            color: #1c0c3d!important
        }
        
        .blog-default-bg-masonry .the_title h2 a,
        .des_recent_posts_widget.widget .title h4,
        .related_posts_listing .related_post .title,
        .home.blog .blog-default.wideblog .container .blog-default-bg-masonry .the_title h2 a,
        body.blog .blog-default-bg .blog-default-bg-masonry .the_title h2 a {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 600 !important;
            font-size: 22px !important;
            color: #1c0c3d!important
        }
        
        .nyssa-masonry-grid .blog-default-bg-masonry .the_title h2 a {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            font-size: 25px !important;
            color: #ffffff!important
        }
        
        .page_content .vc_column-inner a:not(.blog-read-more):not(.add_to_cart_button):hover:not(.woocommerce-LoopProduct-link):hover:not(.vc_btn3):not(.ult_price_action_button):not(.cbp-l-caption-buttonLeft):not(.cbp-l-caption-buttonRight):hover:not(.flip_link a):hover:not(.ubtn-link):hover:not(.special_tabs_linkage):hover:not(.ult_colorlink):not(.ult-social-icon):not(.cbp-l-loadMore-link):not(.rs-layer):not(.vc_tta-tab a),
        header a:not(.cart_list_product_title a):not(.nyssa-header-button a):not(.nav a):not(.nyssa_minicart a):hover,
        #big_footer a:not(.submit):hover,
        .page-template-blog-masonry-template .posts_category_filter li:active,
        .page-template-blog-masonry-template .posts_category_filter li:focus,
        .page-template-blog-masonry-grid-template .posts_category_filter li:active,
        .page-template-blog-masonry-grid-template .posts_category_filter li:focus,
        .master_container a:active,
        .master_container .vc_column-inner a:not(.vc_btn3):not(.blog-read-more):not(.cbp-l-caption-buttonLeft):not(.cbp-l-caption-buttonRight):hover:not(.title):hover:not(.add_to_cart_button):hover:not(.woocommerce-LoopProduct-link):hover:not(.flip_link a).page_content .vc_column-inner a:not(.blog-read-more):not(.add_to_cart_button):hover:not(.woocommerce-LoopProduct-link):hover:not(.vc_btn3):not(.ult_price_action_button):not(.cbp-l-loadMore-link):not(.rs-layer):not(.vc_tta-tab a):not(.cbp-l-caption-buttonLeft):not(.cbp-l-caption-buttonRight):hover:not(.flip_link a):hover:not(.ubtn-link):hover:not(.special_tabs_linkage):hover:not(.ult_colorlink),
        header a:not(.cart_list_product_title a):not(.nyssa-header-button a):not(.nav a):not(.nyssa_minicart a):hover,
        #big_footer a:not(.submit):hover,
        .page-template-blog-masonry-template .posts_category_filter li:active,
        .page-template-blog-masonry-template .posts_category_filter li:focus,
        .page-template-blog-masonry-grid-template .posts_category_filter li:active,
        .page-template-blog-masonry-grid-template .posts_category_filter li:focus,
        .master_container a:active,
        .master_container .vc_column-inner a:not(.vc_btn3):not(.blog-read-more):not(.cbp-l-caption-buttonLeft):not(.cbp-l-caption-buttonRight):hover:not(.title):hover:not(.add_to_cart_button):hover:not(.woocommerce-LoopProduct-link):hover:not(.flip_link a):hover:not(.ubtn-link):hover:not(.special_tabs_linkage):hover:not(.ult_colorlink):not(.ult_price_action_button):not(.cbp-l-loadMore-link):not(.rs-layer):not(.vc_tta-tab a) {
            color: #383440 !important;
        }
        
        #main .flip-box-wrap .flip_link a:hover,
        .woocommerce #content nav.woocommerce-pagination ul li a:focus,
        .woocommerce #content nav.woocommerce-pagination ul li a:hover,
        .woocommerce #content nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce-page #content nav.woocommerce-pagination ul li a:focus,
        .woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
        .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
        .woocommerce-page nav.woocommerce-pagination ul li a:focus,
        .woocommerce-page nav.woocommerce-pagination ul li a:hover,
        .woocommerce-page nav.woocommerce-pagination ul li span.current {
            background-color: #5a24b1 !important;
            color: #fff !important;
        }
        
        #big_footer a:not(.submit):not(.tag-cloud-link):not(.social-network):hover {
            color: #feb4c3 !important;
        }
        
        .ult_tabmenu.style2 li.ult_tab_li a:hover,
        .ult_price_action_button:hover {
            color: #fff !important;
        }
        
        .single_about_author a:hover {
            color: #383440 !important;
        }
        
        h1 {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            font-size: 70px;
            color: #1c0c3d;
            line-height: 1em;
            letter-spacing: -2px;
            text-transform: none;
        }
        
        h2:not(.the_title h2):not(.woocommerce-loop-product__title):not(.cart_totals h2):not(.woocommerce-tabs h2):not(.related h2):not(h2.secondaryTitle):not(.uvc-main-heading h2):not(h2.ult-responsive),
        .woocommerce #content div.product .product_title,
        .woocommerce div.product .product_title,
        .woocommerce-page #content div.product .product_title,
        .woocommerce-page div.product .product_title {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            font-size: 52px;
            color: #1c0c3d;
            line-height: 1.19em;
            letter-spacing: -1px;
            text-transform: none;
        }
        
        .woocommerce h2.woocommerce-loop-product__title,
        .woocommerce #content div.product p.price,
        .woocommerce #content div.product span.price,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce-page #content div.product p.price,
        .woocommerce-page #content div.product span.price,
        .woocommerce-page div.product p.price,
        .woocommerce-page div.product span.price {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            color: #1c0c3d;
        }
        
        .uvc-main-heading h2,
        h2.uvc-type-wrap {
            letter-spacing: -1px;
        }
        
        h3:not(.woocommerce-billing-fields h3):not(.woocommerce-additional-fields h3):not(h3#order_review_heading):not(h3.aio-icon-title):not(h3.ult-ih-heading):not(h3.ult-responsive):not(h3.related_posts_title):not(#comments-title):not(.comment-reply-title):not(#ship-to-different-address) {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            font-size: 32px;
            color: #1c0c3d;
            line-height: 1.2em;
            letter-spacing: 0px;
            text-transform: none;
        }
        
        .testimonials.style1 .testimonial span.t-author-style1,
        .testimonials.style1 .testimonial span a,
        .testimonials.style1 .testimonial span a:hover,
        .testimonials.style1 .testimonial span.t-author-style1,
        .testimonials.style1 .testimonial span.t-author-style1:hover {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 600 !important;
        }
        
        .testimonials.style1 .testimonial span a {
            font-size: 13px !Important
        }
        
        h4 {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            font-size: 24px;
            color: #1c0c3d;
            line-height: 1.3em;
            letter-spacing: 0px;
            text-transform: none;
        }
        
        .ult-item-wrap .title h4 {
            font-size: 16px !important;
        }
        
        .wpb_content_element .wpb_accordion_header.ui-accordion-header-active a {
            color: #5a24b1;
        }
        
        h5:not(.title) {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 600;
            font-size: 19px;
            color: #1c0c3d;
            line-height: 1.3em;
            letter-spacing: 0px;
            text-transform: none;
        }
        
        h6,
        h6 a {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 500;
            font-size: 17px;
            color: #5e4f7d;
            line-height: 1.3em;
            letter-spacing: 0px;
            text-transform: none;
        }
        
        header.navbar,
        .header_style9_left_container {
            background-color: rgba(28, 12, 61, 0);
        }
        
        header.header_with_after_scroll_t2.header_force_opacity {
            background-color: rgba(28, 12, 61, 1);
        }
        
        body,
        #main,
        .master_container,
        .related_posts_listing .related_post .related_post_bg,
        .blog-default,
        .header_style8_contents_bearer .navbar-collapse:after,
        .header_style9_contents_bearer .navbar-collapse:after,
        .cbp-popup-singlePageInline .cbp-popup-content>div,
        .cbp-lazyload,
        .blog-normal-with-sidebar .post-listing .vc_col-sm-12:last-child .wpb_wrapper,
        .page-template-blog-template .post-listing .vc_col-sm-4 .wpb_wrapper,
        .archive .post-listing .vc_col-sm-4 .wpb_wrapper {
            background-color: #ffffff !important;
        }
        
        section.page_content,
        body:not(#boxed_layout),
        body:not(#boxed_layout) #main,
        body:not(#boxed_layout) .master_container,
        body:not(#boxed_layout) .blog-default,
        .vc_row .widget.des_recent_posts_widget .ult-item-wrap,
        table td,
        table th,
        .vc_row .widget.des_recent_posts_widget .ult-item-wrap,
        #respond #comment,
        #respond #commentform input:not([type='submit']),
        #respond #commentform label textarea,
        #comments #commentform input:not([type='submit']),
        .vendor,
        .cbp-popup-singlePageInline .cbp-popup-content>div,
        body:not(.search) article.portfolio,
        .vc_tta-color-white.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-body,
        .vc_tta-color-white.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-body::after,
        .vc_tta-color-white.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-body::before,
        .vc_tta-color-white.vc_tta-style-modern .vc_tta-panel .vc_tta-panel-heading {
            background-color: #ffffff;
        }
        
        .footer_custom_text * {
            font-family: 'Inter', 'Arial', 'sans-serif !important';
            font-weight: normal !important;
            font-size: 12px !important;
            color: #78718f !important;
        }
        
        header .header_style2_contact_info {
            margin-top: 20px !important;
            margin-bottom: 20px !important;
        }
        
        header .navbar-header,
        header.style4 .nav-container .navbar-header {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 0px;
            height: 40px;
        }
        
        header a.navbar-brand img {
            max-height: 40px;
        }
        
        header.navbar.header_after_scroll {
            background-color: rgba(255, 255, 255, 1)
        }
        
        header.header_after_scroll a.navbar-brand img.logo_after_scroll {
            max-height: 35px;
        }
        
        header.header_after_scroll .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link) a,
        header.header_after_scroll .dl-menuwrapper li:not(.nyssa_mega_hide_link) a,
        header.header_after_scroll .gosubmenu {
            color: #3c3940;
        }
        
        header.header_after_scroll .dl-back {
            color: #3c3940;
        }
        
        header.header_after_scroll .navbar-collapse ul.menu-depth-1 li:not(.nyssa_mega_hide_link):hover>a,
        header.header_after_scroll .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>a,
        header.header_after_scroll .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>a,
        header.header_after_scroll .dl-menuwrapper li:not(.nyssa_mega_hide_link):hover>header.header_after_scroll .gosubmenu,
        header.header_after_scroll .dl-menuwrapper li.dl-back:hover,
        header.header_after_scroll.navbar .nav-container .dropdown-menu li:hover {
            color: #5a24b1 !important;
        }
        
        header #dl-menu ul,
        header.header_after_scroll #dl-menu ul {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        header.header_after_scroll .navbar-collapse .nyssa_mega_menu ul.menu-depth-2,
        header.header_after_scroll .navbar-collapse .nyssa_mega_menu ul.menu-depth-2 ul {
            background-color: transparent !important;
        }
        
        header li:not(.nyssa_mega_menu) ul.menu-depth-1 li:hover,
        header li.nyssa_mega_menu li.menu-item-depth-1 li:hover,
        header #dl-menu ul li:hover,
        header.header_after_scroll li:not(.nyssa_mega_menu) ul.menu-depth-1 li:hover,
        header.header_after_scroll li.nyssa_mega_menu li.menu-item-depth-1 li:hover,
        header.header_after_scroll #dl-menu ul li:hover {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        header.header_after_scroll .navbar-collapse li:not(.nyssa_mega_menu) ul.menu-depth-1 li:not(:first-child) {
            border-top: 1px solid rgba(255, 255, 255, 0) !important;
        }
        
        header.header_after_scroll .navbar-collapse li.nyssa_mega_menu ul.menu-depth-2 {
            border-right: 1px solid rgba(255, 255, 255, 0) !important;
        }
        
        header.header_after_scroll #dl-menu li:not(:last-child) a,
        header.header_after_scroll #dl-menu ul li:not(:last-child) a {
            border-bottom: 1px solid rgba(255, 255, 255, 0) !important;
        }
        
        header #dl-menu ul li:not(:last-child) a,
        header.header_after_scroll #dl-menu ul li:not(:last-child) a {
            border-bottom: 1px solid rgba(234, 231, 240, 0.45) !important;
        }
        
        .header_after_scroll .navbar-collapse ul.navbar-nav>li>a,
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li>a {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 600;
            font-size: 15px;
            color: #1c0c3d;
            text-transform: none;
            letter-spacing: 0px;
        }
        
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li>a:hover,
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li.current-menu-ancestor>a,
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li.current-menu-item>a,
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li>a.selected,
        .header_after_scroll .navbar-collapse>.header_style2_menu>ul>li>a.hover_selected,
        .header_after_scroll .navbar-collapse ul.navbar-nav>li>a:hover,
        .header_after_scroll .navbar-collapse ul.navbar-nav>li.current-menu-ancestor>a,
        .header_after_scroll .navbar-collapse ul.navbar-nav>li.current-menu-item>a,
        .header_after_scroll .navbar-collapse ul.navbar-nav>li>a.selected,
        .header_after_scroll .navbar-collapse ul.navbar-nav>li>a.hover_selected {
            color: #5a24b1 !important;
        }
        
        .header_after_scroll .dl-menuwrapper button:after {
            background: #5a24b1;
            box-shadow: 0 6px 0 #5a24b1, 0 12px 0 #5a24b1;
        }
        
        header.light .dl-menuwrapper button:after,
        header.header_after_scroll.light .dl-menuwrapper button:after {
            background: #101010;
            box-shadow: 0 6px 0 #101010, 0 12px 0 #101010;
        }
        
        header.dark .dl-menuwrapper button:after,
        header.header_after_scroll.dark .dl-menuwrapper button:after {
            background: #fff;
            box-shadow: 0 6px 0 #fff, 0 12px 0 #fff;
        }
        
        header.header_after_scroll.navbar-default .navbar-nav>li>a,
        header.headerclone.navbar-default .navbar-nav>li>a {
            padding-top: 26px;
            padding-bottom: 27px;
            /*margin-bottom:27px;*/
            margin-bottom: 0px;
        }
        
        header.header_after_scroll.navbar-default .navbar-nav>li,
        header.headerclone.navbar-default .navbar-nav>li {
            padding-right: 20px;
            padding-left: 20px;
            margin-bottom: 0px;
        }
        
        header.header_after_scroll .nyssa-header-button {
            margin-top: 26px;
        }
        
        header.header_after_scroll.style2 .navbar-nav>li,
        .navbar-default.menu-square.style2 .navbar-nav>li {
            padding-top: 0px;
        }
        
        header.header_after_scroll.style2 {
            padding-bottom: 32px;
        }
        
        header.header_after_scroll.style2 .header_style2_menu {
            margin-top: 32px !important;
        }
        
        header.header_after_scroll.style5 .nyssa_right_header_icons,
        header.header_after_scroll.style1 .nyssa_right_header_icons,
        header.header_after_scroll.style2 .nyssa_right_header_icons,
        header.header_after_scroll.style4 .nyssa_right_header_icons,
        header.header_after_scroll.style6 .nyssa_right_header_icons,
        header.header_after_scroll.style7 .nyssa_right_header_icons {
            padding-top: 26px;
            padding-bottom: 27px;
        }
        
        header.header_after_scroll .navbar-nav>li>ul {
            margin-top: 0px !important;
        }
        
        header.header_after_scroll .nyssa_minicart_wrapper {
            padding-top: 27px;
        }
        
        header.header_after_scroll .header_style2_contact_info {
            margin-top: 16px !important;
            margin-bottom: 16px !important;
        }
        
        header.header_after_scroll .navbar-header,
        header.style4.header_after_scroll .nav-container .navbar-header,
        header.headerclone.header_after_scroll .navbar-header {
            margin-top: 16px;
            margin-bottom: 16px;
            margin-left: 0px;
            height: 35px;
        }
        
        @media only screen and (max-width: 767px) {
            .page_content.left {
                border-right: none !important;
            }
            .page_content.right {
                border-left: none !important;
            }
            body header.header_after_scroll .nav-container .navbar-header {
                margin-top: 17px!important;
                margin-bottom: 17px!important;
                height: 35px!important;
            }
            body header.header_after_scroll a.navbar-brand img,
            body header.header_after_scroll a.navbar-brand img.logo_after_scroll {
                max-height: 35px;
            }
        }
        
        header.header_after_scroll a.navbar-brand h1 {
            font-size: !important;
        }
        
        #primary_footer>.container,
        #primary_footer>.no-fcontainer {
            padding-top: 80px;
            padding-bottom: 80px;
        }
        /* #primary_footer */
        
        #big_footer {
            background-repeat: no-repeat;
            background-position: center center;
            -o-background-size: cover !important;
            -moz-background-size: cover !important;
            -webkit-background-size: cover !important;
            background-size: cover !important;
            background: url(https://preview.treethemes.com/nyssa/demo1-clean/wp-content/uploads/sites/2/2023/01/nyssa_footerdark.svg) no-repeat;
            background-size: cover !important;
        }
        
        #primary_footer input:not(input[type='submit']),
        #primary_footer textarea {
            background: transparent;
        }
        
        header.header_not_fixed ul.menu-depth-1,
        header.header_not_fixed ul.menu-depth-1 ul,
        header.header_not_fixed ul.menu-depth-1 ul li,
        header.header_not_fixed #dl-menu ul {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        header.header_not_fixed li:not(.nyssa_mega_menu) ul.menu-depth-1 li:hover,
        header.header_not_fixed li.nyssa_mega_menu li.menu-item-depth-1 li:hover,
        header.header_not_fixed #dl-menu ul li:hover {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        #primary_footer input:not(input[type='submit']),
        #primary_footer textarea {
            border: 1px solid #1f1d1d !important;
        }
        
        #big_footer .widget-newsletter input {
            background: #1f1d1d !important;
        }
        
        .footer_sidebar .contact-widget-container input,
        .footer_sidebar .contact-widget-container textarea {
            border: 1px solid #1f1d1d !important;
        }
        
        html .widget_nav_menu .sub-menu li:last-child,
        html .menu .sub-menu li:last-child {
            border-bottom: none !important;
        }
        
        .footer_sidebar table td,
        .footer_sidebar table th,
        .footer_sidebar .wp-caption {
            border: 1px solid #1f1d1d;
        }
        
        #primary_footer a {
            color: #a79fbe;
        }
        
        #primary_footer,
        #primary_footer p,
        #big_footer input,
        #big_footer textarea,
        .widget-contact-info-content,
        #primary_footer .content-left-author span,
        #primary_footer .rssSummary,
        #primary_footer .rss-date,
        #primary_footer cite,
        #primary_footer li {
            color: #a79fbe;
        }
        
        #primary_footer .footer_sidebar>h4,
        #primary_footer .footer_sidebar>.widget>h4,
        #primary_footer .widget .widget-contact-content h4,
        #primary_footer .footer_sidebar>h4 a.rsswidget,
        #primary_footer .footer_sidebar h4.widget_title_span {
            color: #f4f2fa;
        }
        
        #primary_footer input,
        #primary_footer textarea {
            border: 1px solid #1f1d1d;
        }
        
        #primary_footer hr,
        .footer_sidebar ul li:not(.social-icons-fa li):not(.slick-dots li),
        #big_footer .forms input,
        #big_footer .recent_posts_widget_2 .recentcomments_listing li {
            border-top: 1px solid #1f1d1d !important;
        }
        
        .footer_sidebar ul li:not(.social-icons-fa li):not(.slick-dots li):last-child,
        #big_footer .recent_posts_widget_2 .recentcomments_listing li:last-child {
            border-bottom: 1px solid #1f1d1d !important;
        }
        
        #primary_footer a {
            color: #a79fbe;
        }
        
        #primary_footer,
        #primary_footer p,
        #big_footer input,
        #big_footer textarea,
        .mail-news .banner p {
            color: #a79fbe;
        }
        
        #primary_footer .footer_sidebar>h4,
        #primary_footer .footer_sidebar>.widget>h4,
        .mail-news h4 {
            color: #f4f2fa !important;
        }
        
        #secondary_footer {
            background-color: rgba(31, 29, 29, 0);
            padding-top: 20px;
            padding-bottom: 40px;
        }
        
        header ul.menu-depth-1,
        header ul.menu-depth-1 ul,
        header ul.menu-depth-1 ul li,
        header.header_after_scroll ul.menu-depth-1,
        header.header_after_scroll ul.menu-depth-1 ul,
        header.header_after_scroll ul.menu-depth-1 ul li,
        header.header_after_scroll #dl-menu ul {
            background-color: rgba(255, 255, 255, 1) !important;
        }
        
        #secondary_footer .social-icons-fa a i {
            font-size: 22px;
            line-height: 22px;
            color: #a79fbe;
        }
        
        #secondary_footer .social-icons-fa a i:before {
            font-size: 22px;
        }
        
        #secondary_footer .social-icons-fa a:hover i {
            color: #feb4c3;
        }
        /* Mobile Header Options */
        
        @media only screen and (max-width: 767px) {
            body header .nav-container .navbar-header {
                margin-top: 17px!important;
                margin-bottom: 17px!important;
                height: 35px!important;
            }
            body header a.navbar-brand img,
            body header a.navbar-brand img {
                max-height: 35px;
            }
            .dl-menuwrapper .dl-menu {
                top: calc(80% + 17px + 12px);
            }
            .header_after_scroll .dl-menuwrapper .dl-menu {
                top: calc(80% + 17px + 12px);
            }
            .style4 .dl-menuwrapper .dl-menu {
                top: calc(150% + 17px);
            }
            .style4.header_after_scroll .dl-menuwrapper .dl-menu {
                top: calc(150% + 17px);
            }
            header .nav-container .dl-menuwrapper {
                margin-top: calc(17px + 3px);
            }
            header.header_after_scroll .nav-container .dl-menuwrapper {
                margin-top: calc(17px + 3px);
            }
        }
        /* Mobile Header Options */
        
        @media only screen and (max-width: 1024px) {
            .present-container {
                padding: 100px 25px !important;
            }
            .present-container h1.page_title {
                font-size: 36px !important;
                letter-spacing: 0px !important;
                text-indent: 0px !important;
                margin-top: 50px !important;
            }
            body .page_content.left {
                border-right: none !important;
            }
            body .page_content.right {
                border-left: none !important;
            }
            .pageTitle h2.secondaryTitle {
                font-size: 16px !important;
                letter-spacing: 0px !important;
                margin-top: 20px !important;
                text-indent: 0px !important;
            }
            .single-post .present-container {
                padding: 100px 15px !important;
            }
            .single-post .present-container h1.page_title {
                font-size: 36px !important;
                letter-spacing: 0px !important;
                text-indent: 0px !important;
                margin-top: 50px !important;
            }
            .single-post .pageTitle h2.secondaryTitle {
                font-size: 16px !important;
                letter-spacing: 0px !important;
                margin-top: 20px !important;
                text-indent: 0px !important;
            }
            .woocommerce-page .present-container {
                padding: 100px 15px !important;
            }
            .woocommerce-page .present-container h1.page_title {
                font-size: 36px !important;
                letter-spacing: 0px !important;
                text-indent: 0px !important;
                margin-top: 50px !important;
            }
            .woocommerce-page .pageTitle h2.secondaryTitle {
                font-size: 16px !important;
                letter-spacing: 0px !important;
                margin-top: 20px !important;
                text-indent: 0px !important;
            }
            body,
            p,
            .lovepost a,
            a.woocommerce-LoopProduct-link,
            .widget ul li a,
            .widget p,
            .widget span,
            .widget ul li,
            .the_content ul li,
            .the_content ol li,
            #recentcomments li,
            .custom-widget h4,
            .custom-widget h4 span,
            .widget.des_cubeportfolio_widget h4,
            .widget.des_recent_posts_widget h4,
            .custom-widget ul li a,
            .aio-icon-description,
            li,
            .smile_icon_list li .icon_description p,
            #recentcomments li span,
            .wpb-js-composer .vc_tta-color-grey.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-title>a,
            .related_posts_listing .related_post .excerpt,
            .testimonials-slide-content .text-container span p,
            .testimonials-slide-content .text-container span,
            .testimonials-slide-content .text-container p,
            .vc_row .widget.des_recent_posts_widget .ult-item-wrap .excerpt p,
            .master_container a,
            .page_content a,
            .metas-comments p {
                font-size: 15px !important;
            }
            .vc_row h1 {
                font-size: 44px !important;
                letter-spacing: 0px;
            }
            .vc_row h2:not(.the_title h2):not(.woocommerce-loop-product__title):not(.cart_totals h2):not(.woocommerce-tabs h2):not(.related h2):not(h2.secondaryTitle):not(.uvc-main-heading h2):not(h2.ult-responsive) {
                font-size: 39px !important;
                letter-spacing: 0px;
            }
            .uvc-main-heading h2,
            h2.uvc-type-wrap {
                font-size: 39px !important;
                letter-spacing: 0px;
            }
            .vc_row h3:not(.woocommerce-billing-fields h3):not(.woocommerce-additional-fields h3):not(h3#order_review_heading):not(h3.aio-icon-title):not(h3.ult-ih-heading):not(h3.ult-responsive):not(h3.related_posts_title):not(#comments-title):not(.comment-reply-title):not(#ship-to-different-address) {
                font-size: 28px !important;
                letter-spacing: 0px;
            }
            .vc_row h4,
            .mail-news h4 {
                font-size: 24px !important;
                letter-spacing: 0px;
            }
            .vc_row h5,
            .share-buttons h5 {
                font-size: 20px !important;
                letter-spacing: 0px;
            }
            .vc_row h6 {
                font-size: 17px !important;
                letter-spacing: 0px;
            }
            .archive .the_title h2 a,
            .page-template-blog-template .the_title h2 a,
            .home.blog .blog-default.wideblog .container .the_title h2 a,
            body.blog .blog-default-bg .the_title h2 a,
            .archive .the_title h2,
            .page-template-blog-template .the_title h2,
            .home.blog .blog-default.wideblog .container .the_title h2,
            body.blog .blog-default-bg .the_title h2 {
                font-size: 28px !important;
            }
            .blog-default-bg-masonry .the_title h2,
            .home.blog .blog-default.wideblog .container .blog-default-bg-masonry .the_title h2 a,
            body.blog .blog-default-bg .blog-default-bg-masonry .the_title h2 a {
                font-size: 20px !important;
            }
        }
        
        @media only screen and (max-width: 1300px) {
            .nyssa-masonry-grid .blog-default-bg-masonry .the_title h2 a {
                font-size: 24px !important;
            }
        }
        
        #nyssa_website_load .introloading_logo {
            margin-left: 25px !important;
        }
        
        #nyssa_website_load .introloading_logo {
            margin-top: 5px !important;
        }
        
        #nyssa_website_load .introloading_logo img {
            height: 40px !important;
        }
        
        .footer_logo .footer_logo_retina,
        .footer_logo .footer_logo_normal {
            height: 50px !important;
            max-height: 50px !important;
        }
        
        #secondary_footer .footer_logo {
            margin-bottom: 20px !important;
        }
        
        header.style2 .search_input {
            height: calc(100% + 32px);
        }
        
        body>.search_input {
            background-color: rgba(255, 255, 255, 1);
        }
        
        body>.search_input input.search_input_value {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 800;
        }
        
        body>.search_input input.search_input_value {
            font-size: 90px;
            color: #1c0c3d;
        }
        
        body>.search_input .search_close i {
            color: #1c0c3d;
        }
        
        body>.search_input .search_close,
        body>.search_input input.search_input_value::placeholder {
            color: #1c0c3d;
        }
        
        .nyssa_search_input .searchinput:after {
            background: #1c0c3d;
            margin-top: 68px;
        }
        
        body>.search_input .ajax_search_results {
            margin-top: 90px;
        }
        
        body>.search_input input.search_input_value::-webkit-input-placeholder,
        body>.search_input input.search_input_value::-moz-placeholder,
        body>.search_input input.search_input_value:-ms-input-placeholder,
        body>.search_input input.search_input_value:-moz-placeholder,
        body>.search_input input.search_input_value::placeholder {
            color: #1c0c3d;
        }
        
        body>.search_input .ajax_search_results ul {
            background-color: rgba(255, 255, 255, 0.98);
        }
        
        body>.search_input .ajax_search_results ul li.selected {
            background-color: rgba(242, 242, 242, 0.98);
        }
        
        body>.search_input .ajax_search_results ul li {
            border-bottom: 1px solid #dedede;
        }
        
        body>.search_input .ajax_search_results ul li a {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 800;
            font-size: 14px;
            color: #696969
        }
        
        body>.search_input .ajax_search_results ul li.selected a {
            color: #3d3d3d
        }
        
        body>.search_input .ajax_search_results ul li a span,
        body>.search_input .ajax_search_results ul li a span i {
            font-family: 'Helvetica Neue', 'Arial', 'sans-serif';
            font-weight: inherit;
            font-size: 12px;
            color: #c2c2c2
        }
        
        body>.search_input .ajax_search_results ul li.selected a span {
            color: #c2c2c2
        }
        
        .nyssa_breadcrumbs,
        .nyssa_breadcrumbs a,
        .nyssa_breadcrumbs span {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 500;
            color: #e6e4ed;
            font-size: 14px;
        }
        
        #menu_top_bar>li ul {
            background: #ffffff;
        }
        
        #menu_top_bar>li ul li:hover {
            background: #ffffff;
        }
        
        #menu_top_bar>li ul a {
            color: #929099 !important;
        }
        
        #menu_top_bar>li ul a:hover,
        #menu_top_bar>li ul li:hover>a {
            color: #5a24b1 !important;
        }
        
        header.navbar .nav-container .nyssa_right_header_icons .icon,
        header .menu-controls .icon,
        header.style2 span.social_container i,
        header .menu-controls .icon,
        header .social_container i,
        header.style4 .nyssa_dynamic_shopping_bag .dripicons-cart,
        header.style4 .search_trigger .dripicons-search {
            color: #f9f3ff !important;
        }
        
        header.navbar .hamburguer-trigger-menu-icon span {
            background-color: #f9f3ff;
        }
        
        header.style1 .search_trigger i,
        header.style1 .search_trigger_mobile i,
        header.style7 .search_trigger i,
        header.style7 .search_trigger_mobile i,
        header.style3 .search_trigger i,
        header.style3 .search_trigger_mobile i,
        header.style4 .search_trigger i,
        header.style4 .search_trigger_mobile i,
        header.style5 .search_trigger i,
        header.style4 .search_trigger_mobile i,
        .nyssa_little_shopping_bag .title i {
            color: #f9f3ff;
        }
        
        header.style6.light .cd-nav-trigger .cd-icon,
        header.style6.light .cd-nav-trigger .cd-icon::before,
        header.style6.light .cd-nav-trigger .cd-icon:after {
            background-color: #1c0c3d !important;
        }
        
        header.style6.dark .cd-nav-trigger .cd-icon,
        header.style6.dark .cd-nav-trigger .cd-icon::before,
        header.style6.dark .cd-nav-trigger .cd-icon:after {
            background-color: #f9f3ff !important;
        }
        
        .header-style6-panel-open header.style6 .cd-nav-trigger .cd-icon,
        .header-style6-panel-open header.style6 .cd-nav-trigger .cd-icon::before,
        .header-style6-panel-open header.style6 .cd-nav-trigger .cd-icon:after {
            background-color: #ffffff !important;
        }
        
        header.navbar .nav-container .nyssa_right_header_icons .icon:hover,
        header .menu-controls .nyssa_right_header_icons .icon:hover,
        header.style2 span.social_container:hover i,
        header .social_container:hover i,
        header.style4 .nyssa_dynamic_shopping_bag .dripicons-cart:hover,
        header.style4 .search_trigger .dripicons-search:hover {
            color: #f9f3ff !important;
        }
        
        header.header_after_scroll.navbar .nav-container .nyssa_right_header_icons .icon,
        header .menu-controls .nyssa_right_header_icons .icon,
        header.header_after_scroll .social_container i {
            color: #333 !important;
        }
        
        header.header_after_scroll.navbar .hamburguer-trigger-menu-icon span {
            background-color: #333;
        }
        
        header.style1.header_after_scroll .search_trigger i,
        header.style1.header_after_scroll .search_trigger_mobile i,
        header.style7.header_after_scroll .search_trigger i,
        header.style7.header_after_scroll .search_trigger_mobile i,
        header.header_after_scroll .nyssa_little_shopping_bag .title i,
        header.style3.header_after_scroll .search_trigger i,
        header.style3.header_after_scroll .search_trigger_mobile i,
        header.style4.header_after_scroll .search_trigger i,
        header.style4.header_after_scroll .search_trigger_mobile i,
        header.style5.header_after_scroll .search_trigger i,
        header.style5.header_after_scroll .search_trigger_mobile i {
            color: #333;
        }
        
        header.header_after_scroll.navbar .nav-container .nyssa_right_header_icons .icon:hover,
        header .menu-controls .nyssa_right_header_icons .icon:hover,
        header.header_after_scroll .social_container:hover i {
            color: #333 !important;
        }
        
        .cd-overlay-content span,
        .cd-nav-bg-fake {}
        
        .nyssa-push-sidebar.nyssa-push-sidebar-right,
        .nyssa-push-sidebar-content .contact-form input[type='text'],
        .nyssa-push-sidebar-content .contact-form input[type='email'],
        .nyssa-push-sidebar-content .contact-widget-container textarea {
            background-color: #0f0624 !important;
        }
        
        .nyssa-push-sidebar .widget h2>.widget_title_span,
        .nyssa-push-sidebar .wpb_content_element .wpb_accordion_header a,
        .nyssa-push-sidebar .custom-widget h4,
        .nyssa-push-sidebar .widget.des_cubeportfolio_widget h4,
        .nyssa-push-sidebar .widget.des_recent_posts_widget h4,
        .nyssa-push-sidebar .widget h4,
        .nyssa-push-sidebar h4,
        .nyssa-push-sidebar .widget h2>.widget_title_span a.rsswidget,
        .nyssa-push-sidebar-content h4,
        .nyssa-push-sidebar-content .wp-block-group h2 {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            color: #ffffff !important;
            font-size: 18px !important;
            text-align: left;
            margin-top: 30px;
        }
        
        .nyssa-push-sidebar-content .des_recent_posts_widget .ult_horizontal h4 {
            font-size: 20px !important;
        }
        
        .nyssa-push-sidebar .hamburguer-trigger-menu-icon.sidebar-opened {
            background-color: #ffffff !important;
        }
        
        .nyssa-push-sidebar select,
        .nyssa-push-sidebar .widget_search input,
        .nyssa-push-sidebar .wp-block-search .wp-block-search__input {
            color: #0f0624 !important;
        }
        
        .nyssa-push-sidebar a:not(.vc_btn3),
        .nyssa-push-sidebar .select2-container--default .select2-results__option[data-selected=true],
        .nyssa-push-sidebar .select2-results__option,
        #nyssa-push-sidebar-content ul li {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            color: #feb4c3 !important;
            font-size: 15px;
            line-height: 1.7em;
        }
        
        .nyssa-push-sidebar a:hover:not(.vc_btn3) {
            color: #b6b0c4 !important;
        }
        
        .nyssa-push-sidebar p,
        .nyssa-push-sidebar .widget ul li,
        .nyssa-push-sidebar .widget span,
        nyssa-push-sidebar-content .contact-form input,
        .nyssa-push-sidebar-content .contact-form input:not(.submit),
        .nyssa-push-sidebar-content .contact-widget-container textarea {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: normal;
            color: #b6b0c4 !important;
            font-size: 15px;
        }
        
        .nyssa-push-sidebar-content input[placeholder]::placeholder,
        .nyssa-push-sidebar-content input[placeholder]::-webkit-input-placeholder {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: normal !important;
            color: #b6b0c4 !important;
            font-size: 15px !important;
        }
        
        .nyssa-push-sidebar-content input[type],
        .nyssa-push-sidebar-content textarea {
            border: 1px solid rgba(182, 176, 196, .5) !important;
        }
        
        .nyssa-push-sidebar-content .widget_nav_menu li:first-child {
            border: none !important;
        }
        
        .widget h2>.widget_title_span,
        .custom-widget h4,
        .custom-widget h4 span,
        .widget.des_cubeportfolio_widget h4,
        .widget.des_recent_posts_widget>h4,
        .sidebar .widget>h4,
        .widget_title_span,
        .widget .widget-contact-content>h4,
        .widget h2>.widget_title_span a.rsswidget,
        .widget h2>.widget_title_span,
        .wpb_content_element .wpb_accordion_header a,
        .widget.des_cubeportfolio_widget h4,
        .widget.des_recent_posts_widget h4,
        .contact-widget-container h4,
        a#send-comment,
        .widget h4,
        .widget h2,
        .widget>h4,
        .custom-widget h4,
        .widget.des_testimonials_widget .featured_image_widget {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            color: #1c0c3d !important;
            font-size: 17px !important;
        }
        
        #big_footer .widget h2>.widget_title_span,
        #big_footer .custom-widget h4,
        #big_footer .custom-widget h4 span,
        #big_footer .widget.des_cubeportfolio_widget h4,
        #big_footer .widget.des_recent_posts_widget>h4,
        #primary_footer .footer_sidebar>h4,
        #primary_footer .widget h4,
        #primary_footer .widget .widget-contact-content h4,
        #big_footer .widget h2>.widget_title_span a.rsswidget,
        #primary_footer .footer_sidebar>h4 a.rsswidget,
        #primary_footer .footer_sidebar h4.widget_title_span {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            font-size: 17px !important;
        }
        
        #primary_footer .widget.des_recent_posts_widget .ult_horizontal h4 {
            font-family: 'Inter', 'Arial', 'sans-serif' !important;
            font-weight: 700 !important;
            color: #f4f2fa !important;
            text-transform: unset;
            text-indent: 0;
            font-size: 20px !important;
            letter-spacing: 0 !important;
        }
        
        #nyssa-push-sidebar-content .widget h2>.widget_title_span,
        #nyssa-push-sidebar-content .custom-widget h4,
        #nyssa-push-sidebar-content .custom-widget h4 span,
        #nyssa-push-sidebar-content .widget.des_cubeportfolio_widget h4,
        #nyssa-push-sidebar-content .widget.des_recent_posts_widget h4,
        #nyssa-push-sidebar-content .widget h2>.widget_title_span a.rsswidget,
        .nyssa-push-sidebar h4,
        .nyssa-push-sidebar .widget h4,
        .nyssa-push-sidebar h4 {
            font-family: 'Inter', 'Arial', 'sans-serif';
            font-weight: 700;
            font-size: 17px;
        }
        
        .overflow-hidden-box {
            overflow: hidden;
        }
        /*.lord-icon.left {    pointer-events: none;}*/
        
        .colored_text .rs_splitted_chars {
            color: #feb4c3 !important;
            font-size: 0.8em
        }
        
        .colored_text_2 .rs_splitted_chars {
            color: #5a24b1 !important;
            font-size: 0.8em
        }
        
        .colored_text_3 .rs_splitted_chars {
            color: #17b088 !important;
            font-size: 0.8em
        }
        
        .colored_text_4 .rs_splitted_chars {
            color: #fddb60 !important;
            font-size: 0.8em
        }
        
        .colored_text_5 .rs_splitted_chars {
            color: #b496d6 !important;
            font-size: 0.8em
        }
        
        .sidebar-box .textwidget p {
            text-align: center;
            margin: 20px 0 0;
        }
        
        #nyssa-push-sidebar-contentr h4,
        #nyssa-push-sidebar-content .sidebar-box,
        .nyssa-push-sidebar h4,
        .nyssa-push-sidebar .widget h4,
        .nyssa-push-sidebar h4 {
            text-align: center !important;
            margin-top: -10px !important;
        }
        
        #nyssa-push-sidebar-content .sidebar-box img {
            max-width: 75% !important;
        }
        
        .woocommerce header.navbar {
            background-color: rgba(255, 255, 255, 1) !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://preview.treethemes.com/nyssa/demo1/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1" type="text/css" media="all">
    <style id="lizr-gutenberg-style-inline-css" type="text/css">
        .wp-block-lizr-gutenberg {
            color: #010101
        }
    </style>
    <link rel="stylesheet" id="wc-blocks-vendors-style-css" href="https://preview.treethemes.com/nyssa/demo1/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=9.1.5" type="text/css" media="all">
    <link rel="stylesheet" id="wc-blocks-style-css" href="https://preview.treethemes.com/nyssa/demo1/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css?ver=9.1.5" type="text/css" media="all">
    <link rel="stylesheet" id="classic-theme-styles-css" href="https://preview.treethemes.com/nyssa/demo1/wp-includes/css/classic-themes.min.css?ver=1" type="text/css" media="all">
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }
        
        :where(.is-layout-flex) {
            gap: 0.5em;
        }
        
        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        
        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        
        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }
        
        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }
        
        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }
        
        body .is-layout-flex {
            display: flex;
        }
        
        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }
        
        body .is-layout-flex>* {
            margin: 0;
        }
        
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        
        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }
        
        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }
        
        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }
        
        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }
        
        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }
        
        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
        
        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }
        
        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }
        
        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }
        
        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }
        
        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }
        
        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }
        
        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }
        
        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }
        
        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }
        
        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }
        
        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }
        
        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }
        
        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }
        
        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }
        
        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }
        
        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }
        
        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }
        
        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }
        
        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }
        
        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }
        
        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
        
        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }
        
        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
        
        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }

        #main{
            height:auto;
        }
        #main > div{
            height:auto;
        }

        @media (min-width: 1963px){
            #section-1502 > div > section > div:nth-child(3){
                top: -40vh!important;
            }
        }
        
        @media (min-width: 1636px){
            #section-1502 > div > section > div:nth-child(3){
                top: -50vh!important;
            }
        }

        @media (min-width: 1636px){
            #section-1502 > div > section > div:nth-child(3){
                top: -50vh!important;
            }
        }

        @media (min-width: 1454px){
            #section-1502 > div > section > div:nth-child(3){
                top: -60vh!important;
            }
        }

        @media (max-width: 755px){
            #section-1502 > div > section > div:nth-child(3){
                top: -40vh!important;
            }
        }

</style>

@endsection

@section('content')

<div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="ult-spacer spacer-642ed1202a4ff" data-id="642ed1202a4ff" data-height="550" data-height-mobile="200" data-height-tab="" data-height-tab-portrait="400" data-height-mobile-landscape="200" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Row Backgrounds -->
<div class="upb_bg_img" data-ultimate-bg="url(https://preview.treethemes.com/nyssa/demo1/wp-content/uploads/sites/8/2023/01/myhq-workspaces-ZMK4lzeuCLo-unsplash.jpg)" data-image-id="id^2949|url^https://preview.treethemes.com/nyssa/demo1/wp-content/uploads/sites/8/2023/01/myhq-workspaces-ZMK4lzeuCLo-unsplash.jpg|caption^null|alt^null|title^myhq-workspaces-ZMK4lzeuCLo-unsplash|description^null" data-ultimate-bg-style="vcpb-default" data-bg-img-repeat="no-repeat" data-bg-img-size="cover" data-bg-img-position="" data-parallx_sense="30" data-bg-override="ex-full" data-bg_img_attach="scroll" data-upb-overlay-color="rgba(28,12,61,0.4)" data-upb-bg-animation="" data-fadeout="" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="6.10.0" data-is_old_vc="" data-theme-support="" data-overlay="true" data-overlay-color="rgba(28,12,61,0.4)" data-overlay-pattern="" data-overlay-pattern-opacity="0.8" data-overlay-pattern-size="" data-overlay-pattern-attachment="scroll"></div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="ult-spacer spacer-642ed1202ad89" data-id="642ed1202ad89" data-height="0" data-height-mobile="100" data-height-tab="0" data-height-tab-portrait="100" data-height-mobile-landscape="100" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid" style="top: -72vh;">
    <div class="wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1671743775252">
            <div class="wpb_wrapper">
                <div class="ult-content-box-container medium-padding-mobile">
                    <div class="ult-content-box" 
                    style="background-color:#ffffff;box-shadow: 10px 10px 30px 10px rgba(28,12,61,0.06) ;padding:60px;margin-top:0px;margin-right:28%;margin-bottom:0px;margin-left:28%;-webkit-transition: all 700ms ease;-moz-transition: all 700ms ease;-ms-transition: all 700ms ease;-o-transition: all 700ms ease;transition: all 700ms ease;" 
                    data-hover_box_shadow=" 10px 10px 30px 10px rgba(28,12,61,0.06) " 
                    data-responsive_margins="margin:0px;" 
                    data-normal_margins="margin-top:0px;margin-right:18%;margin-bottom:0px;margin-left:18%;" data-bg="#ffffff">
                        
                        <h4 style="text-align: center" class="vc_custom_heading">Enregistrement</h4>
                        <div class="vc_empty_space" style="height: 50px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                        <div class="wpcf7 no-js" id="wpcf7-f827-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('register') }}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                <div class="nyssa-multiple-fields">
                                    @csrf
                                    <div class="f-name">
                                        <p>
                                            Nom et prénom <span class="cforms-required">*</span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="text" name="name"/>
                                            </span>
                                        </p>
                                        @error('name')
                                            <span class="cforms-required" role="alert">
                                                <h5 style="color: red;">{{ $message }}</h5>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="f-email">
                                        <p>
                                            L'email <span class="cforms-required">*</span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" value="" type="email" name="email"/>
                                            </span>
                                        </p>
                                        @error('email')
                                            <span class="cforms-required" role="alert">
                                                <h5 style="color: red;">{{ $message }}</h5>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="f-name">
                                        <p>
                                            Mot de passe <span class="cforms-required">*</span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="password" name="password"/>
                                            </span>
                                        </p>
                                        @error('password')
                                            <span class="cforms-required" role="alert">
                                                <h5 style="color: red;">{{ $message }}</h5>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="f-email">
                                        <p>
                                            Confirmation <span class="cforms-required">*</span>
                                        </p>
                                        <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                <input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" value="" type="password" name="password_confirmation"/>
                                            </span>
                                        </p>
                                        @error('password_confirmation')
                                            <span class="cforms-required" role="alert">
                                                <h5 style="color: red;">{{ $message }}</h5>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="bt-contact">
                                        <p style="display: flex;justify-content: center;align-items: center;">
                                            <a class="btn-contact-left">
                                                <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Soumettre"/>
                                            </a>
                                        </p>
                                        <a href="/login" style="text-decoration: underline;">Se connecter</a>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection