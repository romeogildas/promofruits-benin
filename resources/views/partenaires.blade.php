@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Nos partenairs </title>
@endsection('title')

@section('styles')
  <style>
        .sidebar-cta-box {
            position: relative;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain; 
            border-radius: 30px;
            text-align: center;
            padding: 40px;
            overflow: hidden;
            z-index: 1;
            border: 3px solid #FFA500;
            transition: border-color 1s ease-in-out, background-image 1s ease-in-out;
        }
  </style>
@endsection('styles')

@section('page_class', 'partenaire')

@section('content')


  <!-- Page Header Start -->
  <div class="page-header @yield('page_class') parallaxie">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-2" data-cursor="-opaque">Nos <span>Partenaires </span></h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Partenaires</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->



    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Sidebar Category List Start -->
                        <div class="page-sidebar-catagery-list wow fadeInUp">
                            
                            <!-- Sidebar CTA Box Start -->
                            <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Cta Content Start -->
                                <div class="icon-box">
                                    <img src="images/icon-cta.svg" alt="">
                                </div>
                                
                                <!-- Sidebar CTA Content Start -->
                                <div class="sidebar-cta-content">
                                <p><strong>Promo Fruits Bénin</strong> en un mot</p>

                                </div>
                                <!-- Sidebar CTA Content End -->
                                
                                <!-- Sidebar CTA Button Start -->
                                <div class="sidebar-cta-btn">
                                    <a href="/contact" class="btn-default">Contactez-nous</a>
                                </div>
                                <!-- Sidebar CTA Button End -->
                            </div>
                            <!-- Sidebar CTA Box End -->
                        </div>
                        <!-- Page Sidebar Category List End -->

                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8" style="text-align: justify;">
                    <!-- Service Single Content Start -->
                     <!-- Titre de la Section Début -->
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Notre engagement</h2>
                    </div>
                    <!-- Titre de la Section Fin -->
                    <div class="common-text wow fadeInUp">
                        <p>
                            Bienvenue dans l’avenir que nous travaillons à bâtir ensemble avec nos partenaires agriculteurs. Notre dynamique dans l’univers 
                            <strong>Promo Fruits</strong> est de faire de chaque producteur travaillant fidèlement avec nous, un agriculteur qui vit pleinement de ses efforts. 
                            Dans notre vision de partenariat, nos décisions et perspectives sont prises pour assurer un futur où ensemble et graduellement nous bâtissons un 
                            avenir prospère. Pour <strong>Promo Fruits</strong>, chaque producteur ayant choisi de travailler avec nous est un allié, et pour cela nous mettons tout 
                            en œuvre pour lui assurer une récolte saine et conséquente. Nos techniciens sont présents aux côtés de chaque producteur sur le terrain pour veiller 
                            à une saison de récolte fructueuse et nous demeurons à votre écoute à chaque étape de croissance jusqu’à ce que nous réceptionnions les fruits de votre 
                            production dans nos entrepôts. Dans notre vision, vous êtes un précieux partenaire.
                        </p>
                        <p>
                            Nous sommes la marque du fruit pressé et pour tenir cette ligne de conduite, <strong>Promo Fruits</strong> veille à vos côtés à obtenir des fruits mûrs 
                            et juteux. <strong>Promo Fruits</strong> ayant à cœur de faire bénéficier le maximum de producteurs, nous œuvrons à travers des producteurs agriculteurs 
                            sérieux fédérés en association afin de leur rendre toutes les ressources nécessaires à la production disponibles. Nos années d’expériences et la multitude 
                            de possibilités que nous offrons particulièrement à chaque producteur agriculteur fait de nous le meilleur garant pour une saison réussie. Nous en avons 
                            l’expérience, la méthode et les moyens dont vous voyez les photos.
                        </p>
                        <p>
                            Voici les explications de notre Directeur Général sur comment devenir un producteur agriculteur affilié à <strong>Promo Fruits</strong>, les lignes de notre 
                            engagement envers vous et les obligations que nous attendons dans notre relation mutuelle de croissance.
                        </p>
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->


<!-- Notre Section Partenaires Début -->
<div class="our-features" style="padding-top: 0px;">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Titre de la Section Début -->
                <div class="section-title">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez nos partenaires affiliés</h2>
                </div>
                <!-- Titre de la Section Fin -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Boîte de Partenaires Début -->
                <div class="member-about-box tab-content wow fadeInUp" data-wow-delay="0.6s" id="myTabContent">
                    <!-- Onglets Début -->
                    <div class="member-about-nav">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="personal-info-tab" data-bs-toggle="tab" data-bs-target="#personal_info" type="button" role="tab" aria-selected="true">Nos Producteurs</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="professional-skills-tab" data-bs-toggle="tab" data-bs-target="#professional_skills" type="button" role="tab" aria-selected="false">Partenaires Techniques</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="award-win-tab" data-bs-toggle="tab" data-bs-target="#award_win" type="button" role="tab" aria-selected="false">Nos Distributeurs</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Onglets Fin -->

                    <!-- Nos Producteurs -->
                    <div class="tab-pane fade" id="personal_info" role="tabpanel">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/yoplait.png" alt="Yoplait" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Yoplait</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/coca-cola.png" alt="Coca-Cola" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Coca-Cola</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Partenaires Techniques -->
                    <div class="tab-pane fade show active" id="professional_skills" role="tabpanel">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/superu.png" alt="superu" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Super U</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/superu.png" alt="Kraft Heinz" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Super U</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/nestle.png" alt="Nestlé" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Nestlé</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/pepsico.png" alt="PepsiCo" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>PepsiCo</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nos Distributeurs -->
                    <div class="tab-pane fade" id="award_win" role="tabpanel">
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/pepsico.png" alt="Auchan" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Distributeur 1</h5>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="partner-logo p-3 shadow rounded bg-white">
                                    <img src="images/pepsico.png" alt="Casino" class="img-fluid mb-2" style="max-height: 50px;">
                                    <h5>Distributeur 2</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boîte de Partenaires Fin -->
            </div>
        </div>
    </div>
</div>
<!-- Notre Section Partenaires Fin -->






@endsection('content')

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebarBox = document.querySelector(".sidebar-cta-box");
        const images = [
            "url('../images/new/jus.png')",
            "url('../images/new/pasteque.png')",
            "url('../images/new/ananas.png')"
        ];
        const borderColors = ["#FFA500", "#32CD32", "#FF4500"];
        let currentIndex = 0;

        function changeBackground() {
            sidebarBox.style.backgroundImage = images[currentIndex];
            sidebarBox.style.borderColor = borderColors[currentIndex];

            currentIndex = (currentIndex + 1) % images.length;
        }

        setInterval(changeBackground, 3000); 
    });
</script>
@endsection