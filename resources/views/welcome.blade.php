@extends('layouts.frontend_master')
@section('frontend_content')
    <!--================================
        BANNER START
    =================================-->
    <section id="banner_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_content">
              <div class="banner_round_main_items">
                <div class="banner_round_circle_white">
                  <div class="banner_round_circle_red">
                    <div class="banner_round_item">
                      <h5>Express Entry Pathway</h5>
                    </div>
                  </div>
                </div>
                <div class="banner_round_circle_white">
                  <div class="banner_round_circle_red">
                    <div class="banner_round_item">
                      <h5>Express Entry PNP way</h5>
                    </div>
                  </div>
                </div>
                <div class="banner_round_circle_white">
                  <div class="banner_round_circle_red">
                    <div class="banner_round_item">
                      <h5>PNP Pathway</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================
        BANNER END
    =================================-->
    <!--================================
        ABOUT START
    =================================-->
    <section id="about_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about_contents">
              <h5>
                Welcome…! Gateway migration limited offers a full range of immigration and visa consultancy to immigration seeker who
                wanted to be a permanent resident in abroad. The experience and expertise of gateway migration ensures that you obtain a
                permanent residency best suited to your interest and human capital portfolio.

              </h5>
            </div>
            <div class="about_others_content">
              <h5 class="text-danger">Book your ielts exam date</h5>
              <p>
                Gateway is IELTS Exams registration Center in dhanmondi, You can register for IELTS, pay the test fees and collect your
                result sheet for British Council and IDP
              </p>
            </div>
            <div class="about_others_content">
              <h5 class="text-danger">Get Free IELTS Preparation Course:</h5>
              <p>
                Start preparing for IELTS under supervision of our own teacher. We are British Council & idp Associate, We provides
                unlimited IELTS classes, Mock Test and IELTS course materials free.
              </p>
            </div>
          </div>
          <div class="row about_brand_items">
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand_pic1.jpg" alt="brand_pic1.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand_pic2.jpg" alt="brand_pic2.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand_pic3.jpg" alt="brand_pic3.jpg">
              </div>
            </div><br><br>
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand4.jpg" alt="brand_pic4.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand_pic5.jpg" alt="brand_pic5.jpg">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="brand_pic">
                <img src="{{ asset('frontend_assets') }}/images/brand_pic5.jpg" alt="brand_pic5.jpg">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================
        ABOUT END
    =================================-->
@endsection


