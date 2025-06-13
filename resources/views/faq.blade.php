@extends('layouts.site.app')
@section('title')
  <title> Promo Fruits Bénin | FAQ </title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('page_class', 'faq')

@section('content')

    <!-- En-tête de page Start -->
    <div class="page-header @yield('page_class') parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Boîte d'en-tête de page Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>F</span>. <span>A</span>. <span>Q</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Foire Aux Questions</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Boîte d'en-tête de page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête de page End -->

    <!-- Section FAQ Start -->
    <div class="page-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Barre latérale Start -->
                    <div class="page-single-sidebar">
                        <div class="page-sidebar-catagery-list wow fadeInUp">
                            <ul>
                                <li><a href="#general_faqs">Général</a></li>
                                <li><a href="#promo_fruits">Promo Fruits Bénin</a></li>
                                <li><a href="#partenariat">Devenir Partenaire</a></li>
                                <li><a href="#livraison">Livraison & Commandes</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Barre latérale End -->
                </div>

                <div class="col-lg-8">
                    <!-- FAQ Général Start -->
                    <div class="page-faqs-accordion" id="general_faqs">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Questions Générales</h2>
                        </div>
                        <div class="faq-accordion" id="accordion">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                        Qu'est-ce que Promo Fruits Bénin ?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>Promo Fruits Bénin est une industrie agroalimentaire spécialisée dans la transformation et la commercialisation de fruits tropicaux. Créée en 2001 par un groupe de producteurs sous la coopérative IRA, elle vise à valoriser les productions locales en proposant des produits de qualité sur le marché.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Général End -->

                    <!-- FAQ Promo Fruits Bénin Start -->
                    <div class="page-faqs-accordion" id="promo_fruits">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">À Propos de Promo Fruits Bénin</h2>
                        </div>
                        <div class="faq-accordion" id="accordion2">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                        Quels types de produits proposez-vous ?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Promo Fruits Bénin propose :</p>
                                        <ul>
                                            <li>Des jus de fruits en cannette et en Gable Top sans additifs chimiques</li>
                                            <li>Du nectar de fruits en cannette et en Gable Top</li>
                                            <li>Des tranches d’ananas et autres fruits tropicaux en conserve</li>
                                            <li>Des concentrés d’ananas et purée de mangue</li>
                                            <li>Du pur jus en poche aseptique de 200L</li>
                                            <li>Des jus en doy pack de 150 ml</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="headingDG">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDG">
                                        Qui est le Directeur Général de Promo Fruits Bénin ?
                                    </button>
                                </h2>
                                <div id="collapseDG" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Le Directeur Général de Promo Fruits Bénin est Mr Dieudonnée ALLADJODJO.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Promo Fruits Bénin End -->

                    <!-- FAQ Partenariat Start -->
                    <div class="page-faqs-accordion" id="partenariat">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Devenir Partenaire</h2>
                        </div>
                        <div class="faq-accordion" id="accordion3">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading6">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                        Comment devenir partenaire de Promo Fruits Bénin ?
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Nous collaborons avec des producteurs, distributeurs et revendeurs. Pour devenir partenaire, veuillez nous contacter via notre formulaire en ligne ou par téléphone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Partenariat End -->

                    <!-- FAQ Livraison Start -->
                    <div class="page-faqs-accordion" id="livraison">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Livraison & Commandes</h2>
                        </div>
                        <div class="faq-accordion" id="accordion4">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading7">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                                        Comment passer une commande et se faire livrer ?
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Vous pouvez passer commande via notre site web ou en nous contactant directement. La livraison est assurée dans plusieurs villes avec des délais variant selon la destination.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Livraison End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section FAQ End -->
@endsection('content')