@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Détails de l'article </title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'detail2_actualite')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header @yield('page_class') parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Détails</span> de l'article</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">accueil</a></li>
                                <li class="breadcrumb-item"><a href="/article">articles</a></li>
                                <li class="breadcrumb-item active" aria-current="page">détails</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Détail de l'Article -->
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Image en vedette de l'article -->
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="images/actu/partIRA1.jpeg" alt="Formation du personnel">
                    </figure>
                </div>
                <!-- Fin de l'image en vedette -->

                <!-- Contenu de l'article -->
                <div class="post-content" style="text-align: justify;">
                    <!-- Début de l'article -->
                    <div class="post-entry">
                        <h2 class="wow fadeInUp">Promo Fruits Renforce Son Personnel Grâce à des Formations Internationales</h2>
                        <p class="wow fadeInUp">Conscient que le personnel est un facteur clé du développement, Promo Fruits a signé des accords de coopération avec l’Ambassade d’Afrique du Sud pour renforcer les capacités de ses employés à l’échelle internationale.</p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.2s">Un partenariat pour l’excellence</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">Dans le cadre de cette collaboration, cinq agents de Promo Fruits suivent actuellement une formation en électromécanique au centre Shukela, situé à Durban, Afrique du Sud. Cette formation leur permet d’acquérir les compétences nécessaires pour optimiser et entretenir les équipements de production.</p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.4s">Des formations en Chine et au Maroc</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">D’autres employés de Promo Fruits sont en formation en Chine et au Maroc pour se perfectionner sur :</p>
                        <ul class="wow fadeInUp" data-wow-delay="0.6s">
                            <li>Les normes et audits de qualité</li>
                            <li>La gestion de la production</li>
                            <li>L’amélioration des processus industriels</li>
                        </ul>

                        <h3 class="wow fadeInUp" data-wow-delay="0.7s">Un investissement durable</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Ces formations s’inscrivent dans une stratégie de développement à long terme, permettant à Promo Fruits de se positionner comme un acteur clé de l’industrie agroalimentaire, en garantissant des produits de qualité et une production optimisée.</p>

                        <!-- Galerie d'images -->
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/partIRA2.jpeg" class="img-fluid rounded shadow" alt="Formation en électromécanique">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/partIRA3.jpeg" class="img-fluid rounded shadow" alt="Agents en formation">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/partIRA4.jpeg" class="img-fluid rounded shadow" alt="Partenariat avec l’ambassade">
                            </div>
                        </div>
                        <!-- Fin de la galerie d'images -->
                    </div>
                    <!-- Fin de l'article -->

                    <!-- Liens des tags de l'article -->
                    <div class="post-tag-links">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <!-- Début des tags -->
                                <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                    <span class="tag-links">
                                        Tags :
                                        <a href="#">formation</a>
                                        <a href="#">développement</a>
                                        <a href="#">agroalimentaire</a>
                                    </span>
                                </div>
                                <!-- Fin des tags -->
                            </div>

                    <div class="col-lg-4">
                        <!-- Début des liens sociaux -->
                        <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=CURRENT_PAGE_URL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=CURRENT_PAGE_URL" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?url=CURRENT_PAGE_URL&text=Découvrez cet article !" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Fin des liens sociaux -->
                    </div>
                        </div>
                    </div>
                    <!-- Fin des liens des tags -->
                </div>
                <!-- Fin du contenu de l'article -->
            </div>
        </div>
    </div>
</div>
<!-- Fin de la page Détail de l'Article -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
