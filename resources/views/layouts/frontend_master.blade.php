<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi"/>
    <title>Migration</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/scroll_button.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugin.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/responsive.css">
  </head>

  <body>
    <!--================================
        PRELOADER START
    =================================-->
    <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <p class="preloader-text text-center">Gateway Migration</p>
    </div>
    <!--================================
        PRELOADER END
    =================================-->
    <!--================================
        MENU START
    =================================-->
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="nav_left_item">
              <div class="nav_logo">
                <img src="{{ asset('frontend_assets') }}/images/migratin_logo.png" alt="migratin_logo.png">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="nav_right_item">
              <div class="nav_apply_btn">
                <h3>Be a Canadian immigrant</h3>
                <div class="nav_apply_btn_img">
                  <img src="{{ asset('frontend_assets') }}/images/migration_apply_img.png" alt="migration_apply_img.png">
                </div>
                <h3>Apply Now</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!--================================
        MENU END
    =================================-->

        {{-- =====frontend content start --}}
        @yield('frontend_content')
        {{-- =====frontend content end --}}
    <!--================================
        FOTM PART START
    =================================-->
    <section id="contact_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact_item">
              <div class="tf__design_form">
                <h2 class="has-animation">GET TOUCH US?</h2>
                <p class="">
                  Send Your CV for free Assessment.
                </p>
                @if (session('assess_success'))
                    <div class="alert alert-success">
                        <strong>{{ session('assess_success') }}</strong>
                    </div>
                @endif
                <form action="{{ url('assessment/data/post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input required type="text" name="name" value="{{ old('name') }}" class="" placeholder="Enter Your Name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small><br><br>
                            @enderror
                            <label for="" class="mb-3">Name</label><br>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="email" value="{{ old('email') }}" class="" type="email" placeholder="Enter Your Email">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small><br>
                            @enderror
                            <label for="" class="mb-3">Email</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="phone_number" value="{{ old('phone_number') }}" class="" type="tel" placeholder="Enter Mobil No">
                            @error('phone_number')
                                <small class="text-danger">{{ $message }}</small><br>
                            @enderror
                            <label for="" class="mb-3">Phone Number</label><br>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="location" class="" type="text" placeholder="Enter Your Location">
                            @error('location')
                            <small class="text-danger">{{ $message }}</small><br>
                            @enderror
                            <label for="" class="mb-3">Location</label><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="applicant_cv_name" class="" type="file">
                            @error('applicant_cv_name')
                            <small class="text-danger">{{ $message }}</small><br>
                            @enderror
                            <label for="" class="mb-3">Upload Your CV</label><br>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <input name="spouse_cv_name" class="" type="file">
                            @error('spouse_cv_name')
                            <small class="text-danger">{{ $message }}</small><br>
                            @enderror
                            <label for="">Upload Your Spouse's CV</label><br><br>
                        </div>

                    </div>
                    <div class="col-12 col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <textarea name="message" class="" placeholder="Enter Your Message"></textarea>
                        @error('message')
                            <small class="text-danger">{{ $message }}</small><br>
                        @enderror
                        <label for="" class="mb-3">Subject Here</label><br>
                    </div>
                    <button type="submit" class="mt-2 common_btn">Submit Form</button>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================
        FORM PART END
    =================================-->

    <!-- =======================
    incorporation part start
    =========================== -->
<section id="incorporatation_part">
  <div class="section-title text-center">
    <h2>Incorporated With</h2>
    <div class="section-title-bar"></div>
  </div>
  <div class="container brands_marg_resp">
    <div class="row">
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/BSTI.jpg" alt="BSTI.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/buet.jpg" alt="buet.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/civil.jpg" alt="civil.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/DCCI.jpg" alt="DCCI.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/dgdp.jpg" alt="dgdp.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/health.jpg" alt="health.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/idp IELTS.jpg" alt="idp IELTS.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/lion.jpg" alt="lion.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/pearson.jpg" alt="pearson.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/basis.jpg" alt="basis.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/IELTS.jpg" alt="IELTS.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/SME Foundation.jpg"
              alt="SME Foundation.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img src="{{ asset('frontend_assets') }}/images/basis.jpg" alt="basis.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/biaa.jpg" alt="biaa.jpg">
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-3 col-lg-2">
        <div class="incorpo_item">
          <div class="corpo_img">
            <img class="indivi_height_img" src="{{ asset('frontend_assets') }}/images/atab.jpg" alt="atab.jpg">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =======================
        incorporation part end
    =========================== -->
<!-- =======================
      contact part start
  =========================== -->
<section id="contact_part" style="position: relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="contact_border_item"></div>
      </div>
      <div class="col-lg-2">
        <div class="footer_logo_item">
          <div class="img">
            <img src="{{ asset('frontend_assets') }}/images/migratin_logo.png" alt="migratin_logo.png">
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="contact_border_item"></div>
      </div>
    </div>
    <div class="row">
      <div class="contact_item_padd col-6 col-sm-6 col-md-6 col-lg-2">
        <div class="contact_item">
          <h6 class="mb-3">Company</h2>
            <div class="section_title_bar"></div>
            <ul class="contact_list_style">
              <li>
                <a href="#banner_part">Concern of</a>
              </li>
              <li>
                <a href="#">Gateway Group</a>
              </li>
              <li>
                <a href="{{ route('privacy.policy') }}">Terms and conditions</a>
              </li>
            </ul>
        </div>
      </div>
      <div class="contact_item_padd contact_item_res_posi col-6 col-sm-6 col-md-6 col-lg-2">
        <div class="contact_item">
          <h6 class="mb-3">Services</h2>
            <div class="section_title_bar"></div>
            <ul class="contact_list_style">
              <li>
                <a href="#about_part">Know Us</a>
              </li>
              <li>
                <a href="#service_part">Services</a>
              </li>
              <li>
                <a href="#">Media</a>
              </li>
              <li>
                <a href="#">Career</a>
              </li>
              <li>
                <a href="#contact_part">Contact Us</a>
              </li>
            </ul>
        </div>
      </div>
      <div class="contact_item_padd col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="contact_item">
          <h6 class="mb-3">Gateway Migration</h2>
            <div class="section_title_bar"></div>
            <div class="conatct_location">
              <a href="#gateway_location_part">Gateway Migration Center #55/A, 4th Floor, Road #4/A, (Satmasjid Road, Beside
                ULAB University), Dhanmondi, Dhaka-1209.</a>
              <a href="mailto::info@gatewaymigration.com">
                <i class="fa-regular fa-envelope"></i>
                info@gatewaymigration.com
              </a>
              <storng style="color: green;">Mobile/WhatsApp</storng>
              <a href="tel::017 666 666 73">
                <i class="fa-solid fa-phone-volume">
                </i>017 666 666 73
              </a>
              <a href="tel::017 666 666 74">
                <i class="fa-solid fa-phone-volume">
                </i>017 666 666 74
              </a>
               <a href="tel::017 666 666 75">
                <i class="fa-solid fa-phone-volume">
                </i>017 666 666 75
              </a>
              </a>
            </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="gate_location" style="margin-bottom: -6px">
           <iframe style="width: 100%; height:200px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.0990213902453!2d90.3740442145885!3d23.74031619401259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b5180f0e0b%3A0x40db947af49195c8!2sGateway%20migration%20limited!5e0!3m2!1sen!2sbd!4v1701932927305!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 

        </div>
      </div>
    </div>
    <div class="btm_border_contact"></div>
  </div>
</section>
<!-- =======================
        contact part end
    =========================== -->
<!-- =======================
        footer part start
    =========================== -->
        <footer id="footer_part" class="bg-purple text-white text-center py-2">
        <div class="container">
            <p> Copyright© 2023 <samp class="footer_color_it"> Gateway Migration </samp> All rights reserved. Design and Developed by
            <samp class="footer_color_it"> Gateway IT. </samp></p>
            <div class="row" style="position: relative">
            <div class="contact_social_icon">
                <a href="https://www.facebook.com/profile.php?id=100070130896267">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                <i class="fab fa-twitter marg_contact_icon"></i>
                </a>
                <a href="#">
                <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            </div>
        </div>
        </footer>
        {{-- Design and Develop by Md Yamin Mia phone: 01316587380--}}
<!-- =======================
        footer part end
    =========================== -->

{{-- social_icons_main_item start --}}
<div class="main_social_icons">
  <div class="show_icon">
    <i class="fa-solid fa-bars"></i>
  </div>
  <div class="hide_icons">
    <a class="hide_icons_face" href="https://www.facebook.com/profile.php?id=100070130896267">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a class="hide_icons_twi" href="#">
      <i class="fab fa-twitter marg_contact_icon"></i>
    </a>
    <a class="hide_icons_linkd" href="#">
      <i class="fab fa-linkedin-in"></i>
    </a>
  </div>
</div>
{{-- social_icons_main_item end --}}


    <!--================================
        SCROLL BUTTON START
    =================================-->
    <div class="progress active c-pointer">
      <svg
        class="progress-svg"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
      </svg>
    </div>
    <!--================================
        SCROLL BUTTON END
    =================================-->

    <!--================================
        CURSOR START
    =================================-->
    <div id="magic-cursor">
      <div id="ball"></div>
    </div>
    <!--================================
        CURSOR END
    =================================-->

    <script src="{{ asset('frontend_assets') }}/js/plugin.js"></script>
    <!--scroll button js-->
    <script src="{{ asset('frontend_assets') }}/js/scroll_button.js"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('frontend_assets') }}/js/sticky_sidebar.js"></script>
    <!-- Animation -->
    <script src="{{ asset('frontend_assets') }}/js/animation.js"></script>
    <!--main/custom js-->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>
  </body>

</html>
