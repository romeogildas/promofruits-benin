@extends('layouts.site.app')

@section('title')
  <title>Promo Fruits-Bénin | Actualités</title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'actualite')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header @yield('page_class') parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Dernière</span> actualité</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">actualités</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Item Header Start -->
                        <div class="post-item-header">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li>07 fév, 2025</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/details-article2">Promo Fruits Investit dans l’Excellence : Formation et Partenariats Internationaux </a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Header End -->

                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/details-article2" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="images//actu/partIRA4.jpeg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->
                        
                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="/details-article2" class="readmore-btn">Lire la suite</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Item Header Start -->
                        <div class="post-item-header">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li>06 sept, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/details-article">Remise d'équipements aux agriculteurs de la plateforme IRA.</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Header End -->

                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/details-article" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="images/actu/remiseIRA1.jpeg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->
                        
                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="/details-article" class="readmore-btn">Lire la suite</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Item Header Start -->
                        <div class="post-item-header">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li>19 oct, 2019</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="/details-article3">Cérémonie d'accord de signature de subvention entre Promo Fruits Bénin et la Banque Africaine de Développement</a></h2>
                            </div>
                            <!-- Post Item Content End -->
                        </div>
                        <!-- Post Item Header End -->

                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="/details-article3" data-cursor-text="Voir">
                                <figure class="image-anime">
                                    <img src="images/actu/accIRA1.jpeg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->
                        
                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="/details-article3" class="readmore-btn">Lire la suite</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
