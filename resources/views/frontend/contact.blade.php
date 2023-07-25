@extends('frontend.layouts.main')
@section('main-container')

    <!-- offcanvas area start -->
    <div class="offcanvas__area offcanvas__area-4">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
          <button
            class="offcanvas__close-btn offcanvas__close-btn-4 offcanvas-close-btn"
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
        <div class="offcanvas__content">
          <div
            class="offcanvas__top mb-10 d-flex justify-content-between align-items-center"
          >
            <div class="offcanvas__logo logo">
              <a href="home-main.html">
                <img
                  src="{{url('frontend/img/logo/adfjlight.svg')}}"
                  alt="logo"
                  height="75px"
                  width="150px"
                />
              </a>
            </div>
          </div>
          <div class="offcanvas__inner d-none d-lg-block">
            <h4>We help to create visual strategies.</h4>
            <p>We want to hear from you. Let us know how we can help.</p>
            <img src="assets/img/shape/offcanvas-img-1.png" alt="" />
          </div>
          <div class="mobile-menu fix mb-40"></div>

          <div class="offcanvas__inner-btn mb-80">
            <a href="get-started.html" class="tp-btn-offcanvas-white w-100"
              >Get Started</a
            >
          </div>

          <div class="offcanvas__contact mb-40">
            <p class="offcanvas__contact-call">
              <a href="tel:+918390194975">+91 8390194975</a>
            </p>
            <p class="offcanvas__contact-mail">
              <a href="mailto:hello@adfjstudios.com">hello@adfjstudios.com</a>
            </p>
          </div>

          <div class="offcanvas__social-4">
            <a href="https://www.facebook.com/adfjstudios"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a href="https://twitter.com/adfjstudios?lang=en"
              ><i class="fa-brands fa-twitter"></i
            ></a>
            <a href="https://www.instagram.com/adfjstudios/"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="https://www.youtube.com/@AdFJStudios"
              ><i class="fa-brands fa-youtube"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <!-- search popup start -->
    <!-- <div class="search__popup">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="search__wrapper">
                     <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                           <a href="home-main.html">
                              <img src="assets/img/logo/logo.svg" alt="">
                           </a>
                        </div>
                        <div class="search__close">
                           <button type="button" class="search__close-btn search-close-btn">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                           </button>
                        </div>
                     </div>
                     <div class="search__form">
                        <form action="#">
                           <div class="search__input">
                              <input class="search-input-field" type="text" placeholder="Type here to search...">
                              <span class="search-focus-border"></span>
                              <button type="submit">
                                 <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
    <!-- search popup end -->

    <main>
      <!-- contact area start -->
      <section class="tp-section-area p-relative z-index-1 tp-section-spacing">
        <div
          class="tp-section-bg include-bg"
          data-background="{{url('frontend//img/contact/contact-bg.png')}}"
        ></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8">
              <div class="tp-section-wrapper-2 text-center">
                <span class="tp-section-subtitle-2 subtitle-mb-9"
                  >GET TO KNOW US</span
                >
                <h3 class="tp-section-title-2 font-70">
                  Have a project in mind? Let’s talk.
                </h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact area end -->

      <div class="contact__item-area contact__translate-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div
                class="contact__item text-center mb-30 transition-3 white-bg"
              >
                <div class="contact__icon">
                  <img
                    src="{{url('frontend/img/contact/icon/contact-icon-1.png')}}"
                    alt=""
                  />
                </div>
                <div class="contact__content">
                  <span class="contact-item-subtitle">Contact</span>
                  <p>
                    <a href="mailto:hello@adfjstudios.com"
                      >hello@adfjstudios.com</a
                    >
                  </p>
                  <p><a href="tel:+918390194975">+91 8390194975</a></p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div
                class="contact__item text-center mb-30 transition-3 white-bg"
              >
                <div class="contact__icon">
                  <img
                    src="{{url('frontend/img/contact/icon/contact-icon-3.png')}}"
                    alt=""
                  />
                </div>
                <div class="contact__content">
                  <span class="contact-item-subtitle">Location</span>
                  <p>
                    <a
                      href="https://goo.gl/maps/HQLFWmBQ75PordVB9"
                      target="_blank"
                      >Office No. 3, Indraprastha Complex, Boisar 401501,
                      MH(IN)</a
                    >
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div
                class="contact__item text-center mb-30 transition-3 white-bg"
              >
                <div class="contact__icon">
                  <img
                    src="{{url('frontend/img/contact/icon/contact-icon-2.png')}}"
                    alt=""
                  />
                </div>
                <div class="contact__content">
                  <span class="contact-item-subtitle">Social Media</span>
                  <p>Follow on social media</p>
                  <div class="contact__social">
                    <a href="https://www.facebook.com/adfjstudios"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="https://twitter.com/adfjstudios?lang=en"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="https://www.instagram.com/adfjstudios/"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="https://www.youtube.com/@AdFJStudios"
                      ><i class="fa-brands fa-youtube"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- contact form area start -->
      <section class="contact__form-area pt-90 mb-50">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="contact__form-2">
                <h3 class="contact__form-2-title">Send a message</h3>
                <script
                  charset="utf-8"
                  type="text/javascript"
                  src="//js.hsforms.net/forms/embed/v2.js"
                ></script>
                <script>
                  hbspt.forms.create({
                    region: "na1",
                    portalId: "40057864",
                    formId: "eaa9b7f4-ac93-4e4d-8630-dd2a84290c41",
                  });
                </script>
                <p class="ajax-response"></p>
                <div class="hub-cover"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact form area end -->
    </main>

@endsection
