@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Nos produits IRA </title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'ira')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header @yield('page_class') parallaxie">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Les Jus <span>IRA</span></h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">IRA</li>
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
          <h2 class="text-anime-style-2" data-cursor="-opaque">Les jus IRA</h2>
          <p class="wow fadeInUp" data-wow-delay="0.2s">
            Des jus frais et naturels, alliant saveur et bienfaits, avec toute la richesse des fruits tropicaux. Retrouvez notre jus d’ananas pur, nos mélanges ananas-gingembre, ananas-mangue, cocktail ananas-orange et notre concentré d’ananas, au format (320 ml et 1 L) pour une expérience authentique et rafraîchissante.
          </p>
        </div>
        <!-- Section Title End -->
      </div>
    </div>

    <div class="row">
      <?php 
        $descriptions = [
          2 => "Un jus tropical, riche en vitamine C, qui booste le système immunitaire.",
          3 => "Savourez la fraîcheur d’un ananas mûr pressé à la perfection.",
          4 => "Désaltérant et naturel, parfait pour les journées ensoleillées.",
          5 => "Un goût sucré et acidulé qui éveille les papilles.",
          6 => "Fait à partir d’ananas frais pour une explosion de saveur.",
          7 => "Une boisson 100% fruit, sans sucre ajouté ni conservateur.",
          8 => "Un pur plaisir tropical, directement dans votre verre.",
          9 => "Revitalisez-vous avec ce jus aux arômes exotiques.",
          10 => "Riche en enzymes, ce jus favorise la digestion.",
          11 => "Un jus doux et équilibré, parfait pour toute la famille.",
          12 => "Un mélange naturel de fraîcheur et de bien-être.",
          13 => "Récolté à maturité pour une saveur authentique.",
          14 => "Idéal pour les pauses saines et gourmandes.",
          15 => "Un jus artisanal à la texture onctueuse et naturelle.",
          16 => "Un goût pur, issu de fruits cueillis localement.",
          17 => "Énergie, fraîcheur et santé en une seule gorgée.",
          18 => "Une boisson rafraîchissante au parfum envoûtant d’ananas."
        ];
    
        for ($i = 2; $i <= 18; $i++) {
          echo '
            <div class="col-lg-4 col-md-6">
              <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="causes-image">
                  <figure class="image-anime">
                    <img src="images/prod/'.$i.'.jpeg" alt="Produit '.$i.'">
                  </figure>
                </div>
                <div class="causes-body">
                  <div class="causes-content">
                    <p>'.$descriptions[$i].'</p>
                  </div>
                </div>
              </div>
            </div>
          ';
        }
      ?>
    </div>

  </div>
</div>


@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
