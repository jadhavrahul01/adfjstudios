@extends('frontend.layouts.app')
@section('title', 'Graphic')
@section('page')


    <main>
        <!-- about top area start -->
        <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
            data-background="http://127.0.0.1:8000/frontend/img/about/about-breadcrumb.jpg"
            style="background-image: url(&quot;http://127.0.0.1:8000/frontend/img/about/about-breadcrumb.jpg&quot;);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="about__heading-content text-center p-relative z-index-1">
                            <span class="about__heading-subtitle">Graphics</span>
                            <h3 class="about__heading-title">Discover Our Story</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about top area end -->

        <section class="portfolio__area pb-75 pt-110 p-relative fix tp-el-section">
            <div class="portfolio__shape">
                <img decoding="async" class="portfolio__shape-20"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/circle-1.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-21"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-green.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-22"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-pink.png"
                    alt="Harry">
                <img decoding="async" class="portfolio__shape-23"
                    src="https://weblearnbd.net/wp/harry/wp-content/themes/harry/assets/img/portfolio/masonary/shape/polygon-yellow.png"
                    alt="Harry">
            </div>
            <div class="container-fluid tp-gx-20">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio__section-title-wrapper text-center mb-90 tp-el-content">
                            <span class="portfolio__section-title-pre tp-el-subtitle"> CHECK OUT OUR LATEST WORK </span>


                            <h2 class="portfolio__section-title tp-el-title">Portfolio Masonary</h2>
                        </div>
                    </div>
                </div>

                <!-- filter button -->
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__masonary-btn text-center mb-40">
                            {{-- <div class="masonary-menu filter-button-group tp-el-mas-btn">

                                <button data-filter="*" class="active tp-el-mas-btn">
                                    All Project
                                </button>


                                <button data-filter=".apps">
                                    Apps
                                </button>

                                <button data-filter=".branding">
                                    Branding
                                </button>

                                <button data-filter=".creative">
                                    Creative
                                </button>

                                <button data-filter=".packaging">
                                    Packaging
                                </button>

                                <button data-filter=".mockup">
                                    Mockup
                                </button>

                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="row tp-gx-20 grid" style="position: relative; height: 1799.76px;">


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item apps"
                        style="position: absolute; left: 0%; top: 0px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Apps" data-title="Magazine Cover" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-1.jpg"
                                        class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                                </a>

                                <div class="tp-img-reveal-wrapper" style="top: 504.4px; left: 465px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Magazine Cover</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Apps</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item branding"
                        style="position: absolute; left: 33.3198%; top: 0px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Branding" data-title="Logo Mockups" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-2.jpg"
                                        class="attachment-full size-full" alt="" decoding="async" loading="lazy">
                                </a>

                                <div class="tp-img-reveal-wrapper" style="top: 412.4px; left: 552px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Logo Mockups</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Branding</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item creative"
                        style="position: absolute; left: 66.6395%; top: 0px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Creative" data-title="Pattern Inspired" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="680"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-3.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper" style="top: 566.4px; left: 1040px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Pattern Inspired</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Creative</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item packaging"
                        style="position: absolute; left: 0%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Packaging" data-title="Product Design ">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-4.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Product Design </h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Packaging</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item mockup"
                        style="position: absolute; left: 33.3198%; top: 537px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Mockup" data-title="Branding Design" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="680"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-5.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper" style="top: 420.4px; left: 948px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Branding Design</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Mockup</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item creative"
                        style="position: absolute; left: 66.6395%; top: 724px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Creative" data-title="Original Coffee" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="680"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-6.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="portfolio__grid-video">
                                    <a href="https://www.youtube.com/watch?v=EW4ZYb3mCZk&amp;t=147s"
                                        class="portfolio-play-btn popup-video tp-el-video-btn">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="tp-img-reveal-wrapper" style="top: 485.4px; left: 1067px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Original Coffee</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Creative</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item mockup"
                        style="position: absolute; left: 0%; top: 1075px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Mockup" data-title="Visual Identity">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="680"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-8.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="portfolio__grid-video">
                                    <a href="https://www.youtube.com/watch?v=EW4ZYb3mCZk&amp;t=147s"
                                        class="portfolio-play-btn popup-video tp-el-video-btn">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="tp-img-reveal-wrapper">
                                    <div class="tp-img-reveal-wrapper__inner" style="overflow: hidden;">
                                        <div class="tp-img-reveal-wrapper__img" style="background-image:url()">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title">Visual Identity</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Mockup</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 tp-portfolio grid-item branding"
                        style="position: absolute; left: 33.3198%; top: 1261px;">
                        <div class="portfolio__grid-item mb-20 tp-el-box">
                            <div class="portfolio__grid-thumb tp-protfolio-masonary w-img fix tp-img-reveal tp-img-reveal-item"
                                data-fx="24" data-meta-tag="Branding" data-title=" UX Web Design" style="">
                                <a href="https://weblearnbd.net/wp/harry/portfolio/portfolio-details/">
                                    <img width="455" height="500"
                                        src="https://weblearnbd.net/wp/harry/wp-content/uploads/2023/01/portfolio-masonary-7.jpg"
                                        class="attachment-full size-full" alt="" decoding="async"
                                        loading="lazy"> </a>

                                <div class="tp-img-reveal-wrapper" style="top: 395.4px; left: 780px; opacity: 0;">
                                    <div class="tp-img-reveal-wrapper__inner"
                                        style="overflow: hidden; transform: translate(100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                        <div class="tp-img-reveal-wrapper__img"
                                            style="background-image: url(&quot;&quot;); transform: translate(-100%, 0%) matrix(1, 0, 0, 1, 0, 0);">
                                            <div class="portfolio__hover-wrapper tp-el-box">
                                                <h4 class="portfolio__hover-title tp-el-box-title"> UX Web Design</h4>
                                                <div class="portfolio__hover-category tp-el-box-tag">
                                                    <span>
                                                        <a href="#">Branding</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
    @endsection
