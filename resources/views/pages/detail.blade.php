@extends('layouts.app')

@section('title', 'NOMADS')

@section('content')
<header class="detail-header"></header>

<main>
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">
        <nav>
          <ol class="breadcrumb p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Paket Travel</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
          </ol>
        </nav>
      </div>
      <div class="col-12 col-lg-8 px-lg-0 mb-3 mb-lg-0">
        <div class="card card-destination">
          <h1 class="destination-title mb-1">Nusa Penida</h1>
          <p class="destination-location">Republic of Indonesia Raya</p>
          <div class="gallery">
            <div class="xzoom-container">
              <img src="frontend/images/pic_featured.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/pic_featured.jpg" alt="Nusa Penida">
            </div>
            <div class="xzoom-thumbs">
              <a href="frontend/images/pic_featured.jpg">
                <img src="frontend/images/pic_featured.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_featured.jpg" alt="Nusa Penida">
              </a>
              <a href="frontend/images/pic_featured.jpg">
                <img src="frontend/images/pic_featured.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_featured.jpg" alt="Nusa Penida">
              </a>
              <a href="frontend/images/pic_featured.jpg">
                <img src="frontend/images/pic_featured.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_featured.jpg" alt="Nusa Penida">
              </a>
              <a href="frontend/images/pic_featured.jpg">
                <img src="frontend/images/pic_featured.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_featured.jpg" alt="Nusa Penida">
              </a>
              <a href="frontend/images/pic_featured.jpg">
                <img src="frontend/images/pic_featured.jpg" class="xzoom-gallery" width="128" xpreview="frontend/images/pic_featured.jpg" alt="Nusa Penida">
              </a>
            </div>
          </div>
          <h2 class="about-destination-title">Tentang Wisata</h2>
          <p class="destination-description">
            Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung 
            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung 
            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum 
            altitude of 524 metres. It is drier than the nearby island of Bali.
          </p>
          <p class="destination-description">
            Bali and a district of Klungkung Regency that includes the neighbouring small island of 
            Nusa Lembongan. The Badung Strait separates the island and Bali.
          </p>
          <div class="features row">
            <div class="features-item d-flex align-items-center col-sm-6 col-md-4">
              <img src="frontend/images/ic_event.png" alt="Featured Event">
              <div>
                <p class="features-title mb-0">Featured Event</p>
                <p class="features-event mb-0">Tari Kecak</p>
              </div>
            </div>
            <div class="features-item d-flex align-items-center col-sm-6 col-md-4 border-left pl-md-5">
              <img src="frontend/images/ic_language.png" alt="Featured Event">
              <div>
                <p class="features-title mb-0">Language</p>
                <p class="features-event mb-0">Bahasa Indonesia</p>
              </div>
            </div>
            <div class="features-item d-flex align-items-center col-sm-6 col-md-4 border-left pl-md-5">
              <img src="frontend/images/ic_foods.png" alt="Featured Event">
              <div>
                <p class="features-title mb-0">Foods</p>
                <p class="features-event mb-0">Local Foods</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card card-members">
          <h2 class="card-members-title">Members are going</h2>
          <div class="row members">
            <div class="col-1 col-lg-2">
              <img src="frontend/images/anggaphoto.jpg" alt="Angga Rizky">
            </div>
            <div class="col-1 col-lg-2">
              <img src="frontend/images/anggaphoto.jpg" alt="Angga Rizky">
            </div>
            <div class="col-1 col-lg-2">
              <img src="frontend/images/anggaphoto.jpg" alt="Angga Rizky">
            </div>
            <div class="col-1 col-lg-2">
              <img src="frontend/images/anggaphoto.jpg" alt="Angga Rizky">
            </div>
            <div class="col-1 col-lg-2">
              <div class="other-members d-flex justify-content-center align-items-center">
                <p>9+</p>
              </div>
            </div>
          </div>
          <hr>
          <h2 class="members-information-title">Trip Informations</h2>
          <table>
            <tr>
              <td>Date of Departure</td>
              <td align="right">22 Aug 2019</td>
            </tr>
            <tr>
              <td>Duration</td>
              <td align="right">4D 3N</td>
            </tr>
            <tr>
              <td>Type</td>
              <td align="right">Open Trip</td>
            </tr>
            <tr>
              <td>Price</td>
              <td align="right">$ 80,00 / person</td>
            </tr>
          </table>
          <a href="{{ route('checkout') }}" class="btn btn-join">Join Now</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('append-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.min.css') }}">
<link rel="stylesheet" href="{{ url('frontend/styles/detail.css') }}">
@endpush

@push('append-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomWidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15
    });
  });
</script>
@endpush