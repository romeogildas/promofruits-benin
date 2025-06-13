@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Détails de l'article </title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'detail_actualite')

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
            <div class="col-lg-12" style="text-align: justify;">
                <!-- Image en vedette de l'article -->
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="images/actu/remiseIRA1.jpeg" alt="Remise d'équipements">
                    </figure>
                </div>
                <!-- Fin de l'image en vedette -->

                <!-- Contenu de l'article -->
                <div class="post-content">
                    <!-- Début de l'article -->
                    <div class="post-entry">
                        <h2 class="wow fadeInUp">Remise d'Équipements aux Agriculteurs de la Plateforme IRA </h2>
                        <p class="wow fadeInUp">Dans le cadre de son engagement pour le développement agricole durable, la plateforme IRA a procédé à une remise d’équipements essentiels aux agriculteurs partenaires. Cette initiative vise à moderniser les pratiques agricoles, améliorer les rendements et renforcer l’autonomie des producteurs.</p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.2s">Des équipements performants pour une agriculture innovante</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">Les agriculteurs bénéficiaires ont reçu du matériel de qualité, incluant des motos, mini camionnettes, glacières et tricycles. Ces outils permettront d’optimiser les cultures et de garantir une production plus efficace et respectueuse de l’environnement.</p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.4s">Un engagement fort pour la communauté agricole</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Lors de la cérémonie, les représentants de la plateforme IRA ont réaffirmé leur volonté d’accompagner les producteurs dans leur transition vers une agriculture plus productive et durable. « Ces équipements sont un pas de plus vers l’amélioration des conditions de travail de nos agriculteurs », a souligné un responsable de l’initiative.</p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.6s">Un avenir prometteur pour l’agriculture locale</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">Avec cette action, la plateforme IRA confirme son rôle clé dans la promotion de l’innovation agricole et du développement rural. Les bénéficiaires, enthousiastes, expriment leur gratitude et leur détermination à maximiser l’impact de ces outils sur leurs exploitations.</p>

                        <!-- Galerie d'images -->
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA2.jpeg" class="img-fluid rounded shadow" alt="Remise d'équipements">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA3.jpeg" class="img-fluid rounded shadow" alt="Agriculteurs recevant du matériel">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA4.jpeg" class="img-fluid rounded shadow" alt="Cérémonie de remise">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA5.jpeg" class="img-fluid rounded shadow" alt="Matériel agricole">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA6.jpeg" class="img-fluid rounded shadow" alt="Agriculteurs et représentants">
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4 image-anime reveal">
                                <img src="images/actu/remiseIRA7.jpeg" class="img-fluid rounded shadow" alt="Discours de clôture">
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
                                        <a href="#">agriculture</a>
                                        <a href="#">innovation</a>
                                        <a href="#">développement rural</a>
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
