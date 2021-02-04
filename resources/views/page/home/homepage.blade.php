@extends('index')

@section('content')

<section id="top-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators"
        style="display: flex; justify-content: start; margin-left: 143px; margin-bottom: 50px;">
        <li class="bulat" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li class="bulat" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li class="bulat" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/image/img/jumbotron.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block" style="height: 270px; margin-left: -40px;">
            <div class="item">
              <h5>TO BECOME A</h5>
              <h2>LEADING INTEGRATED</h2>
              <h1>PROPERTY COMPANY</h1>
              <p>IN INDONESIA</p>
              <br>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/image/img/jumbotron1.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block" style="height: 250px; margin-left: -40px;">
            <div class="item">
              <h5>DELIVERING INTEGRATED QUALITY</h5>
              <h2>LIVING PRODUCTS</h2>
              <p>FOR THE NATION</p>
              <br>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/image/img/jumbotron2.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block" style="height: 300px; margin-left: -40px;">
            <div class="item">
              <h5>COMMITTED TO CONSTANTLY</h5>
              <h5>APPLY THE PRINCIPLES OF</h5>
              <h2>GOOD CORPORATE</h2>
              <h2>GOVERNANCE (GGC)</h2>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>



<section id="kedua">
    <div class="container1">
      <div class="grid">
        <div class="item itemku" style="background: url(/image/img/kedua1.webp);">
          <div class="konten">
            <div class="isi">
              <h2>PT BAKRIELAND DEVELOPMENT TBK</h2>
              <h4>Bakrieland is one of Bakrie Group of Companies, is an integrated property
                company (publicly listed with code: ELTY) engaged in property
                development and related operations.</h4>
              <div>
                <a href="{{ url('/info') }}"><button type="button">VIEW MORE</button></a>
              </div>
            </div>
          </div>
        </div>
        <div class="item" style="background: url(/image/img/kedua2.webp);">
          <div class="i-container">
            <div class="i-konten">
              <div class="isi-konten">
                <h3>PRESS RELEASE</h3>
                <div class="i-isi">
                  <div class="kiri">
                    <img src="/image/icon/icon1.webp" alt="">
                  </div>
                  <div class="kanan">
                    <p>Bakrieland Strengthens
                      Its Financial Structure
                      After Completion Of The
                      Global Bonds
                      Restructuring...</p>
                    <button type="button">VIEW MORE</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="ketiga">
    <div class="con-carousel" style="margin: 0 10px;">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/image/img/tiga.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="height: 100%; padding-top: 160px;">
              <img style="width: 60px; margin-bottom: 15px;" src="./assets/image/icon/icon3.webp" alt="">
              <h5 class="text1"">Annual General Meeting Of Shareholders</h5>
                <p class=" text2">SUMMARY OF THE MINUTES OF THE AGMS III</p>
                <button type="submit">VIEW MORE</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/image/img/tiga.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="height: 100%; padding-top: 160px;">
              <img style="width: 60px; margin-bottom: 15px;" src="./assets/image/icon/icon2.webp" alt="">
              <h5 class="text1"">Financial Information</h5>
                <p class=" text2">FINANCIAL HIGHLIGHT</p>
                <button type="submit">VIEW HIGHLIGHT</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/image/img/tiga.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="height: 100%; padding-top: 160px;">
              <img style="width: 60px; margin-bottom: 15px;" src="./assets/image/icon/icon3.webp" alt="">
              <h5 class="text1"">Annual General Meeting Of Shareholders</h5>
                <p class=" text2">SUMMARY OF THE MINUTES OF THE AGMS III</p>
                <button type="submit">VIEW MORE</button>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span style="border: 2px solid #e27026; border-radius: 5px;" class="carousel-control-prev-icon"
            aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span style="border: 2px solid #e27026; border-radius: 5px;" class="carousel-control-next-icon"
            aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
</section>


<section id="keempat">
    <div class="container1">
      <div class="grid">

        {{-- url(/image/img/empat1.webp); --}}
        @forelse ($hotels as $item)
        <div class="item" style="background: url('{{ Storage::url($item->image) }}')">
          <div class="container">
            <div class="wrap">
              <div class="kiri">
                <div class="konten">
                  <img src="/image/icon/icon-office.webp" alt="">
                  <p>7 Hotels</p>
                </div>
                <div class="konten">
                  <img src="/image/icon/icon-office.webp" alt="">
                  <p>7 Hotels</p>
                </div>
              </div>
              <div class="kanan">
                <div class="border1">
                  <img src="/image/icon/icon-all-projects.png" alt="">
                  <p>ALL PROJECTS</p>
                </div>
              </div>
            </div>
            <div class="bawah">
              <p>{{ $item->title }}</p>
            </div>
          </div>
        </div>

        @empty

        @endforelse
      </div>
    </div>
</section>


<section id="kelima">
    <div class="container1">
      <div class="grid">
            @forelse ($projects as $item)
            <div class="colom" style="background: url('{{ Storage::url($item->image) }}'); background-repeat: no-repeat; background-size: cover;">
                <div class="container">
                <div class="wrap">
                    <div class="kiri">
                        <div class="konten">
                            <img src="/image/icon/icon-office.webp" alt="">
                            <p>{{ $item->text1 }}</p>
                        </div>
                        <div class="konten">
                            <img src="/image/icon/icon-office.webp" alt="">
                            <p>{{ $item->text2 }}</p>
                        </div>
                        <div class="konten">
                            <img src="/image/icon/icon-office.webp" alt="">
                            <p>{{ $item->text3 }}</p>
                        </div>
                    </div>
                    <div class="kanan">
                    <div class="border1">
                        <p>ALL PROJECTS</p>
                    </div>
                    </div>
                </div>
                <div class="bawah">
                    <p style="margin-top: 183px;">{{ $item->title }}</p>
                </div>
                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
</section>

<section id="keenam">
    <!-- Swiper -->
    <div class="e-header">
      <h1>EVENTS & PROMOTIONS</h1>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">

        @forelse ($events as $item)
        <div class="swiper-slide">
            <div class="pembungkus">
                <div class="konten" style="margin-top: 50px">
                    <img src="{{ Storage::url($item->image) }}" alt="">
                </div>
                <div class="title">
                    <p>{{ date('d F Y', strtotime($item->tanggal)) }}</p>
                    <h1>{{ $item->title }}</h1>
                </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>
      <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
      <!-- Add Arrows -->

    </div>
</section>



<section id="ketujuh">
    <div class="container1">
      <div class="colom" style="background: url(/image/img/ketujuh1.webp);">
        <div class="wrap">
          <div class="konten">
            <h1>INTEGRATED</h1>
            <H1>CORPORATE SOCIAL RESPOSNSIBILITY</H1>
          </div>
        </div>
      </div>
      <div class="colom" style="background: url(/image/img/ketujuh2.png); background-repeat: no-repeat; background-size: cover;">
        <div class="wrap-satu">
          <div class="konten">
            <h1>MEDIA CLIPPING</h1>
          </div>
        </div>
      </div>
    </div>
</section>










@endsection
