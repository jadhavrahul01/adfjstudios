@extends('frontend.layouts.main')
@section('main-container')

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__area-1">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__shape">
          <img
            class="offcanvas__shape-1"
            src="assets/img/shape/offcanvas-shape-1.png"
            alt=""
          />
        </div>
        <div class="offcanvas__close">
          <button class="offcanvas__close-btn offcanvas-close-btn">
            <svg
              width="12"
              height="12"
              viewBox="0 0 12 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M11 1L1 11"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M1 1L11 11"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
        <div class="offcanvas__content">
          <div
            class="offcanvas__top mb-70 d-flex justify-content-between align-items-center"
          >
            <div class="offcanvas__logo logo">
              <a href="home-main.html">
                <img src="assets/img/logo/logo-black.svg" alt="logo" />
              </a>
            </div>
          </div>
          <div class="mobile-menu fix d-lg-none"></div>
          <div
            class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block"
          >
            <nav>
              <ul>
                <li><a href="home-main.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Service</a></li>
                <li><a href="blog-grid-2.html">Blog</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="offcanvas__btn">
            <a href="contact.html" class="tp-btn-offcanvas"
              >Getting Started <i class="fa-regular fa-chevron-right"></i
            ></a>
          </div>
          <div class="offcanvas__social">
            <h3 class="offcanvas__social-title">Follow :</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
          </div>
          <div class="offcanvas__contact">
            <p class="offcanvas__contact-call">
              <a href="tel:+964-742-44-763">+964 742 44 763</a>
            </p>
            <p class="offcanvas__contact-mail">
              <a href="mailto:hello@adfjstudios.com">hello@adfjstudios.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- search popup start -->
    <div class="search__popup">
      <div class="container">
        <div class="row">
          <div class="col-xxl-12">
            <div class="search__wrapper">
              <div
                class="search__top d-flex justify-content-between align-items-center"
              >
                <div class="search__logo">
                  <a href="home-main.html">
                    <img src="assets/img/logo/logo.svg" alt="" />
                  </a>
                </div>
                <div class="search__close">
                  <button
                    type="button"
                    class="search__close-btn search-close-btn"
                  >
                    <svg
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M17 1L1 17"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M1 1L17 17"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="search__form">
                <form action="#">
                  <div class="search__input">
                    <input
                      class="search-input-field"
                      type="text"
                      placeholder="Type here to search..."
                    />
                    <span class="search-focus-border"></span>
                    <button type="submit">
                      <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M19.0002 19.0002L17.2002 17.2002"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- search popup end -->

    <main>
      <!-- breadcrumb area start -->
      <section
        class="breadcrumb__area pt-130 pb-115 breadcrumb__style-10 black-bg p-relative z-index-1"
      >
        <div
          class="breadcrumb__bg-4 breadcrumb__bg-overlay m-img include-bg"
          data-background="assets/img/blog/breadcrumb/blog-breadcrumb-slider-3.jpg"
        ></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <div class="breadcrumb__content text-center">
                <h3 class="breadcrumb__title">Our Blog</h3>
                <div class="breadcrumb__list">
                  <span><a href="#">Home</a></span>
                  <span class="dvdr"
                    ><i class="fa-solid fa-circle-small"></i
                  ></span>
                  <span>Blog</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- breadcrumb area end -->

      <!-- postbox area start -->
      <section class="postbox__area grey-bg-4 pt-120 pb-120">
        <div class="container">
          <div class="row">
            <div class="col-xxl-8 col-lg-8">
              <div class="postbox__wrapper">
                <article class="postbox__item format-image mb-50 transition-3">
                  <div class="postbox__thumb w-img">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/blog-big-1.jpg" alt="" />
                    </a>
                  </div>
                  <div class="postbox__content">
                    <div class="postbox__meta">
                      <span>
                        <a href="#">
                          <svg
                            width="13"
                            height="14"
                            viewBox="0 0 13 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6667 13V11.6667C11.6667 10.9594 11.3857 10.2811 10.8856 9.78105C10.3855 9.28095 9.70724 9 9 9H3.66667C2.95942 9 2.28115 9.28095 1.78105 9.78105C1.28095 10.2811 1 10.9594 1 11.6667V13"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M6.33317 6.33333C7.80593 6.33333 8.99984 5.13943 8.99984 3.66667C8.99984 2.19391 7.80593 1 6.33317 1C4.86041 1 3.6665 2.19391 3.6665 3.66667C3.6665 5.13943 4.86041 6.33333 6.33317 6.33333Z"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                          Shahnewaz
                        </a>
                      </span>
                      <span>
                        <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M7.5 3.59961V7.49961L10.1 8.79961"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        January 22, 2022
                      </span>
                      <span>
                        <svg
                          width="14"
                          height="14"
                          viewBox="0 0 14 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          /></svg
                        >35
                      </span>
                    </div>
                    <h3 class="postbox__title">
                      <a href="blog-details.html"
                        >How to Clean Your Home Faster and More Efficiently</a
                      >
                    </h3>
                    <div class="postbox__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat […]
                      </p>
                    </div>
                    <div class="postbox__read-more">
                      <a href="blog-details.html" class="tp-btn">read more</a>
                    </div>
                  </div>
                </article>
                <article class="postbox__item format-video mb-50 transition-3">
                  <div class="postbox__thumb postbox__video w-img p-relative">
                    <a href="blog-details.html">
                      <img src="assets/img/blog/blog-big-1.jpg" alt="" />
                    </a>
                    <a
                      href="https://youtu.be/-WRZI63emjs"
                      class="play-btn pulse-btn popup-video"
                      ><i class="fas fa-play"></i
                    ></a>
                  </div>
                  <div class="postbox__content">
                    <div class="postbox__meta">
                      <span>
                        <a href="#">
                          <svg
                            width="13"
                            height="14"
                            viewBox="0 0 13 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M11.6667 13V11.6667C11.6667 10.9594 11.3857 10.2811 10.8856 9.78105C10.3855 9.28095 9.70724 9 9 9H3.66667C2.95942 9 2.28115 9.28095 1.78105 9.78105C1.28095 10.2811 1 10.9594 1 11.6667V13"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M6.33317 6.33333C7.80593 6.33333 8.99984 5.13943 8.99984 3.66667C8.99984 2.19391 7.80593 1 6.33317 1C4.86041 1 3.6665 2.19391 3.6665 3.66667C3.6665 5.13943 4.86041 6.33333 6.33317 6.33333Z"
                              stroke="currentColor"
                              stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                          Shahnewaz
                        </a>
                      </span>
                      <span>
                        <svg
                          width="15"
                          height="15"
                          viewBox="0 0 15 15"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                          <path
                            d="M7.5 3.59961V7.49961L10.1 8.79961"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                        January 22, 2022
                      </span>
                      <span>
                        <svg
                          width="14"
                          height="14"
                          viewBox="0 0 14 14"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M12.9718 6.66668C12.9741 7.54659 12.769 8.4146 12.3732 9.20001C11.9039 10.1412 11.1825 10.9328 10.2897 11.4862C9.39697 12.0396 8.36813 12.3329 7.31844 12.3333C6.4406 12.3356 5.57463 12.13 4.79106 11.7333L1 13L2.26369 9.20001C1.86791 8.4146 1.66281 7.54659 1.6651 6.66668C1.66551 5.61452 1.95815 4.58325 2.51025 3.68838C3.06236 2.79352 3.85211 2.0704 4.79106 1.60002C5.57463 1.20331 6.4406 0.997725 7.31844 1.00002H7.65099C9.03729 1.07668 10.3467 1.66319 11.3284 2.64726C12.3102 3.63132 12.8953 4.94378 12.9718 6.33334V6.66668Z"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          /></svg
                        >35
                      </span>
                    </div>
                    <h3 class="postbox__title">
                      <a href="blog-details.html"
                        >Four Ways a Clean Workplace Employees Happy and
                        Healthy</a
                      >
                    </h3>
                    <div class="postbox__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat […]
                      </p>
                    </div>
                    <div class="postbox__read-more">
                      <a href="blog-details.html" class="tp-btn">read more</a>
                    </div>
                  </div>
                </article>
                <article class="postbox__item format-quote mb-50 transition-3">
                  <div class="postbox__quote postbox__quote-style-3">
                    <div class="blog__grid-quote mb-30">
                      <div class="blog__grid-quote-icon">
                        <span>
                          <svg
                            width="24"
                            height="20"
                            viewBox="0 0 24 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M18.1161 0C19.2516 0 20.1806 0.232258 20.9032 0.696775C21.6258 1.16129 22.2194 1.75484 22.6839 2.47742C23.2516 3.30323 23.6129 4.20646 23.7677 5.1871C23.9226 6.16775 24 6.96775 24 7.5871C24 10.1161 23.3548 12.4129 22.0645 14.4774C20.7742 16.5419 18.7613 18.2194 16.0258 19.5097L15.329 18.1161C16.929 17.4452 18.2968 16.3871 19.4323 14.9419C20.6194 13.4968 21.2129 12.0258 21.2129 10.529C21.2129 9.90968 21.1355 9.36774 20.9806 8.90323C20.1548 9.5742 19.2 9.90968 18.1161 9.90968C16.7742 9.90968 15.6129 9.47097 14.6323 8.59355C13.6516 7.71613 13.1613 6.50323 13.1613 4.95484C13.1613 3.50968 13.6516 2.32258 14.6323 1.39355C15.6129 0.464517 16.7742 0 18.1161 0ZM4.95484 0C6.09032 0 7.01936 0.232258 7.74194 0.696775C8.46452 1.16129 9.05807 1.75484 9.52258 2.47742C10.0903 3.30323 10.4516 4.20646 10.6065 5.1871C10.7613 6.16775 10.8387 6.96775 10.8387 7.5871C10.8387 10.1161 10.1935 12.4129 8.90323 14.4774C7.6129 16.5419 5.6 18.2194 2.86452 19.5097L2.16774 18.1161C3.76774 17.4452 5.13548 16.3871 6.27097 14.9419C7.45806 13.4968 8.05161 12.0258 8.05161 10.529C8.05161 9.90968 7.97419 9.36774 7.81936 8.90323C6.99355 9.5742 6.03871 9.90968 4.95484 9.90968C3.6129 9.90968 2.45161 9.47097 1.47097 8.59355C0.490323 7.71613 0 6.50323 0 4.95484C0 3.50968 0.490323 2.32258 1.47097 1.39355C2.45161 0.464517 3.6129 0 4.95484 0Z"
                              fill="currentColor"
                            />
                          </svg>
                        </span>
                      </div>
                      <div class="blog__grid-quote-content">
                        <span>Social distancing</span>
                        <p>
                          Never ever think of giving up. Winners never quit and
                          quitters never win. Take all negative words out your
                          mental dictionary and focus on the...
                        </p>
                        <cite>Shahnewaz Sakil</cite>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="postbox__item format-audio mb-50 transition-3">
                  <div class="postbox__thumb postbox__audio w-img p-relative">
                    <iframe
                      allow="autoplay"
                      src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/316547873&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"
                    ></iframe>
                  </div>
                  <div class="postbox__content">
                    <div class="postbox__meta">
                      <span
                        ><i class="far fa-calendar-check"></i> July 21, 2020
                      </span>
                      <span
                        ><a href="#"
                          ><i class="far fa-user"></i> Shahnewaz</a
                        ></span
                      >
                      <span
                        ><a href="#"
                          ><i class="fal fa-comments"></i> 02 Comments</a
                        ></span
                      >
                    </div>
                    <h3 class="postbox__title">
                      <a href="blog-details.html"
                        >Time for Spring Cleaning? Use These Tips From the
                        Professionals</a
                      >
                    </h3>
                    <div class="postbox__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat […]
                      </p>
                    </div>
                    <div class="postbox__read-more">
                      <a href="blog-details.html" class="tp-btn">read more</a>
                    </div>
                  </div>
                </article>
                <article class="postbox__item format-image mb-50 transition-3">
                  <div
                    class="postbox__thumb postbox__slider swiper-container w-img p-relative"
                  >
                    <div class="swiper-wrapper">
                      <div class="postbox__slider-item swiper-slide">
                        <img src="assets/img/blog/blog-big-4.jpg" alt="" />
                      </div>
                      <div class="postbox__slider-item swiper-slide">
                        <img src="assets/img/blog/blog-big-5.jpg" alt="" />
                      </div>
                      <div class="postbox__slider-item swiper-slide">
                        <img src="assets/img/blog/blog-big-6.jpg" alt="" />
                      </div>
                    </div>
                    <div class="postbox__nav">
                      <button class="postbox-slider-button-next">
                        <i class="fa-regular fa-angle-right"></i>
                      </button>
                      <button class="postbox-slider-button-prev">
                        <i class="fa-regular fa-angle-left"></i>
                      </button>
                    </div>
                  </div>
                  <div class="postbox__content">
                    <div class="postbox__meta">
                      <span
                        ><i class="far fa-calendar-check"></i> July 21, 2020
                      </span>
                      <span
                        ><a href="#"
                          ><i class="far fa-user"></i> Shahnewaz</a
                        ></span
                      >
                      <span
                        ><a href="#"
                          ><i class="fal fa-comments"></i> 02 Comments</a
                        ></span
                      >
                    </div>
                    <h3 class="postbox__title">
                      <a href="blog-details.html"
                        >Visiting the Ads of the World blog is like visiting
                        museum</a
                      >
                    </h3>
                    <div class="postbox__text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat […]
                      </p>
                    </div>
                    <div class="postbox__read-more">
                      <a href="blog-details.html" class="tp-btn">read more</a>
                    </div>
                  </div>
                </article>
                <div class="tp-pagination tp-pagination-style-2 mt-20">
                  <nav>
                    <ul>
                      <li>
                        <a
                          href="blog.html"
                          class="tp-pagination-prev prev page-numbers"
                        >
                          <svg
                            width="16"
                            height="11"
                            viewBox="0 0 16 11"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M6.17749 10.105L1.62499 5.55248L6.17749 0.999981"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-miterlimit="10"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M14.3767 5.55249L1.75421 5.55249"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-miterlimit="10"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                          Prev
                        </a>
                      </li>
                      <li>
                        <a href="blog.html">1</a>
                      </li>
                      <li>
                        <span class="current">2</span>
                      </li>
                      <li>
                        <a href="blog.html">3</a>
                      </li>
                      <li>
                        <a href="blog.html" class="next page-numbers">
                          Next
                          <svg
                            width="16"
                            height="11"
                            viewBox="0 0 16 11"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M9.82422 1L14.3767 5.5525L9.82422 10.105"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-miterlimit="10"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                            <path
                              d="M1.625 5.55249H14.2475"
                              stroke="currentColor"
                              stroke-width="1.5"
                              stroke-miterlimit="10"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
              <div class="sidebar__wrapper pl-40">
                <div class="sidebar__widget mb-20">
                  <div class="sidebar__widget-content">
                    <div class="sidebar__search">
                      <form action="#">
                        <div class="sidebar__search-input">
                          <input
                            type="text"
                            placeholder="Enter your keywords..."
                          />
                          <button type="submit">
                            <svg
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M19.0002 19.0002L17.2002 17.2002"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="sidebar__widget mb-45">
                  <div class="sidebar__widget-content">
                    <div class="sidebar__author">
                      <div class="sidebar__author-thumb">
                        <img
                          src="assets/img/blog/sidebar/sidebar-author.jpg"
                          alt=""
                        />
                      </div>
                      <div class="sidebar__author-content">
                        <h3 class="sidebar__author-title">Colene Landin</h3>
                        <p>
                          Lorem ipsum dolor ametare elit consectetur adipiscing
                          Aenean pellentesque.
                        </p>

                        <div
                          class="sidebar__author-social d-flex align-items-center justify-content-center"
                        >
                          <a href="#"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
                          <a href="#"><i class="fa-brands fa-twitter"></i></a>
                          <a href="#"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sidebar__widget mb-45">
                  <h3 class="sidebar__widget-title">Category</h3>
                  <div class="sidebar__widget-content">
                    <ul>
                      <li>
                        <a href="blog.html">Business <span>10</span></a>
                      </li>
                      <li>
                        <a href="blog.html">Cleaning <span>08</span></a>
                      </li>
                      <li>
                        <a href="blog.html">Consultant <span>24</span></a>
                      </li>
                      <li>
                        <a href="blog.html">Creative <span>37</span></a>
                      </li>
                      <li>
                        <a href="blog.html">Technology <span>103</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="sidebar__widget mb-45">
                  <h3 class="sidebar__widget-title">Recent Post</h3>
                  <div class="sidebar__widget-content">
                    <div class="sidebar__post">
                      <div class="rc__post d-flex align-items-center">
                        <div class="rc__post-thumb">
                          <a href="blog-details.html"
                            ><img
                              src="assets/img/blog/sidebar/blog-sm-1.jpg"
                              alt=""
                          /></a>
                        </div>
                        <div class="rc__post-content">
                          <h3 class="rc__post-title">
                            <a href="blog-details.html"
                              >Business meeting 2021 in San Francisco</a
                            >
                          </h3>
                          <div class="rc__meta">
                            <span>
                              <svg
                                width="15"
                                height="15"
                                viewBox="0 0 15 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                />
                                <path
                                  d="M7.5 3.59961V7.49961L10.1 8.79961"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                /></svg
                              >July 21, 2022
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="rc__post d-flex align-items-center">
                        <div class="rc__post-thumb">
                          <a href="blog-details.html"
                            ><img
                              src="assets/img/blog/sidebar/blog-sm-2.jpg"
                              alt=""
                          /></a>
                        </div>
                        <div class="rc__post-content">
                          <h3 class="rc__post-title">
                            <a href="blog-details.html"
                              >Developing privacy user-centric apps</a
                            >
                          </h3>
                          <div class="rc__meta">
                            <span>
                              <svg
                                width="15"
                                height="15"
                                viewBox="0 0 15 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                />
                                <path
                                  d="M7.5 3.59961V7.49961L10.1 8.79961"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                /></svg
                              >July 21, 2022
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="rc__post d-flex align-items-center">
                        <div class="rc__post-thumb">
                          <a href="blog-details.html"
                            ><img
                              src="assets/img/blog/sidebar/blog-sm-3.jpg"
                              alt=""
                          /></a>
                        </div>
                        <div class="rc__post-content">
                          <h3 class="rc__post-title">
                            <a href="blog-details.html"
                              >Starting and Growing Web Design in 2022</a
                            >
                          </h3>
                          <div class="rc__meta">
                            <span>
                              <svg
                                width="15"
                                height="15"
                                viewBox="0 0 15 15"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                />
                                <path
                                  d="M7.5 3.59961V7.49961L10.1 8.79961"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                /></svg
                              >July 21, 2022
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sidebar__widget mb-40">
                  <h3 class="sidebar__widget-title">Tags</h3>
                  <div class="sidebar__widget-content">
                    <div class="tagcloud">
                      <a href="#">Techology</a>
                      <a href="#">Food</a>
                      <a href="#">Personality</a>
                      <a href="#">Life Style</a>
                      <a href="#">Travel</a>
                      <a href="#">Nature</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- postbox area end -->
    </main>


    @endsection
