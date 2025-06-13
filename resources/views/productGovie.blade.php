@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Nos produits Govié</title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'govie')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header @yield('page_class') parallaxie">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Les Jus <span>Govié </span></h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Govié</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Nos produits Section Start -->
  <div class="our-causes">
    <div class="container">
      <div class="row section-row align-items-center">
        <div class="col-lg-12">
          <!-- Section Title Start -->
          <div class="section-title">
            <h3 class="wow fadeInUp">Nos produits</h3>
            <h2 class="text-anime-style-2" data-cursor="-opaque">Les jus Govié</h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Nous mettons un point d'honneur à offrir des jus naturels et délicieux, créés à partir de fruits frais sélectionnés pour leurs bienfaits.</p>
          </div>
          <!-- Section Title End -->
        </div>
      </div>

      <div class="row">
        
        <!-- Produit 1 : Jus de Fructose -->
        <div class="col-lg-4 col-md-6">
          <!-- Causes Item Start -->
          <div class="causes-item wow fadeInUp">
            <div class="causes-image">
              <figure class="image-anime">
                <img src="images/govie/govie fructose.webp" alt="Jus de Fructose">
              </figure>
            </div>
            <div class="causes-body">
              <div class="causes-content">
                <h3>Jus de Fructose</h3>
                <p>Un nectar naturellement sucré, plein de vitamines et d’énergie, parfait pour un rafraîchissement tout au long de la journée.</p>
              </div>
            </div>
          </div>
          <!-- Causes Item End -->
        </div>

        <!-- Produit 2 : Jus d'Ananas -->
        <div class="col-lg-4 col-md-6">
          <!-- Causes Item Start -->
          <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="causes-image">
              <figure class="image-anime">
                <img src="images/govie/govie ananas.webp" alt="Jus d'Ananas">
              </figure>
            </div>
            <div class="causes-body">
              <div class="causes-content">
                <h3>Jus d'Ananas</h3>
                <p>Un jus tropical, riche en vitamine C, qui booste le système immunitaire et apporte une touche sucrée et acidulée.</p>
              </div>
            </div>
          </div>
          <!-- Causes Item End -->
        </div>

        <!-- Produit 3 : Jus de Mangue -->
        <div class="col-lg-4 col-md-6">
          <!-- Causes Item Start -->
          <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
            <div class="causes-image">
              <figure class="image-anime">
                <img src="images/govie/govie mangue.webp" alt="Jus de Mangue">
              </figure>
            </div>
            <div class="causes-body">
              <div class="causes-content">
                <h3>Jus de Mangue</h3>
                <p>Un nectar velouté, sucré et naturellement parfumé, parfait pour se rafraîchir et se nourrir en vitamines.</p>
              </div>
            </div>
          </div>
          <!-- Causes Item End -->
        </div>

        <!-- Produit 4 : Nectar de Mangue -->
        <div class="col-lg-4 col-md-6">
          <!-- Causes Item Start -->
          <div class="causes-item wow fadeInUp" data-wow-delay="0.6s">
            <div class="causes-image">
              <figure class="image-anime">
                <img src="images/govie/nectar de mangue.webp" alt="Nectar de Mangue">
              </figure>
            </div>
            <div class="causes-body">
              <div class="causes-content">
                <h3>Nectar de Mangue</h3>
                <p>Un concentré de mangue, doux et savoureux, pour une expérience fruitée intense.</p>
              </div>
            </div>
          </div>
          <!-- Causes Item End -->
        </div>

        <!-- Produit 5 : Nectar d'Orange -->
        <div class="col-lg-4 col-md-6">
          <!-- Causes Item Start -->
          <div class="causes-item wow fadeInUp" data-wow-delay="0.8s">
            <div class="causes-image">
              <figure class="image-anime">
                <img src="images/govie/nectar d'orange.webp" alt="Nectar d'Orange">
              </figure>
            </div>
            <div class="causes-body">
              <div class="causes-content">
                <h3>Nectar d'Orange</h3>
                <p>Un jus vitaminé, frais et pétillant, idéal pour démarrer la journée en pleine forme.</p>
              </div>
            </div>
          </div>
          <!-- Causes Item End -->
        </div>

      </div>
    </div>
  </div>
  <!-- Nos produits Section End -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
