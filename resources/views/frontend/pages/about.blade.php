@extends('frontend.layout.layout')

@section('content')

<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Hakkımızda</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section border-bottom" data-aos="fade">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6">
          <div class="block-16">
            <figure>
              <img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="ion-md-play"></span></a>

            </figure>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">


          <div class="site-section-heading pt-3 mb-4">
            <h2 class="text-black">Kuruluş hikayemiz</h2>
          </div>
          <p> Buraya güzel bir hikaye yazmak lazım. </p>
          <p>Hikayeyi de süsleyip püsleyip dramatize etmek lazım.</p>

        </div>
      </div>
    </div>
  </div>

  <div class="site-section border-bottom" data-aos="fade">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Takım</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">

          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="images/person_1.jpg" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4"> Aleyna Tilki</h3>
                <p class="block-38-subheading">CEO</p>
              </div>
              <div class="block-38-body">
                <p>Sesi fena değildir. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="images/person_2.jpg" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Wanda Nara</h3>
                <p class="block-38-subheading">Kurucu Ortağı</p>
              </div>
              <div class="block-38-body">
                <p>Pek bir işe yaramaz. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="images/person_3.jpg" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Mertens</h3>
                <p class="block-38-subheading">Pazarlamacı</p>
              </div>
              <div class="block-38-body">
                <p>İyi şut atar. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="block-38 text-center">
            <div class="block-38-img">
              <div class="block-38-header">
                <img src="images/person_4.jpg" alt="Image placeholder" class="mb-4">
                <h3 class="block-38-heading h4">Kerem Aktürkoğlu</h3>
                <p class="block-38-subheading">Satış Temsilcisi</p>
              </div>
              <div class="block-38-body">
                <p> Öylesine aldık işte.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
          <div class="icon mr-4 align-self-start">
            <span class="icon-truck"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Shipping</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
          <div class="icon mr-4 align-self-start">
            <span class="icon-refresh2"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Free Returns</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
          <div class="icon mr-4 align-self-start">
            <span class="icon-help"></span>
          </div>
          <div class="text">
            <h2 class="text-uppercase">Customer Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
