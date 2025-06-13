@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Accueil </title>
@endsection('title')

@section('styles')
    <style>
        .mission-vision-content p {
            display: inline;
        }

        .read-more-btn {
            color: #e67e22; 
            cursor: pointer;
            text-decoration: underline;
            margin-left: 5px;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .read-more-btn:hover {
            color: #d35400; 
        }

        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: #fffaf0; 
            padding: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            z-index: 1000;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .popup h3 {
            margin-top: 0;
            color: #27ae60; 
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
            z-index: 999;
        }

        .close-btn {
            background: #2ecc71; 
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 20px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        .close-btn:hover {
            background: #27ae60; 
        }

    </style>
@endsection('styles')

@section('content')

    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/home2.jpeg" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Bienvenue chez <br><span>Promo Fruits Bénin</span></h1><br>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Votre référence en jus 100% naturel, pressé avec soin pour une explosion de saveurs et de bienfaits pour votre santé.</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Content Body Start -->
                                        <br><br><div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="/contact" class="btn-default">rejoignez-nous</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->  
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/homeHeader02.png" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Chez <br> <span>Promo Fruits Bénin</span></h1> <br>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nos jus sont sans additifs ni conservateurs, préparés avec des ananas soigneusement sélectionnés pour vous offrir une expérience saine et rafraîchissante à chaque gorgée. <br> Fraîcheur garantie !</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Content Body Start -->
                                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="/contact" class="btn-default">rejoignez-nous</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->  
                                        
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                 <!-- Hero Slide Start -->
                 <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/homeHeader03.png" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Chez <br> <span>Promo Fruits Bénin</span></h1> <br>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Chaque gorgée de nos jus vous offre une explosion de fraîcheur et de bienfaits, sans additifs ni conservateurs. <br> Une expérience pure et revitalisante, à savourer sans modération !</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Content Body Start -->
                                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="/contact" class="btn-default">rejoignez-nous</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->  
                                        
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>        
    </div>
    <!-- Hero Section End -->
 

    <!-- Our Approah Section Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Approach Box Content Start -->
                    <div class="our-approach-box-content">
                        <!-- Our Approach Content Start -->
                        <div class="our-approach-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Qui sommes-nous ?</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify;"><strong>PROMO FRUITS BENIN</strong> est une entreprise spécialisée dans la production et la commercialisation de jus de fruit en canettes et en tétra-packs, qui sont des produits de grande consommation. <br> Depuis sa création, <strong>PROMO FRUITS BENIN</strong> s'est engagée à fournir des produits de qualité irréprochable dans un contexte concurrentiel de plus en plus difficile, en visant à être la référence dans son secteur d'activité.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Our Approach Button Start -->
                            <div class="our-approach-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="/about" class="btn-default">Lire plus</a>
                            </div>
                            <!-- Our Approach Button End -->

                            <!-- Mission Vision Box Start -->
                            <div class="mission-vision-box wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Mission Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-mission.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Notre mission</h3>
                                        <p id="short-mission"></p>
                                        <span class="readmore-btn" onclick="showPopup('mission')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Mission End -->

                                <!-- Vision Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-vision.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Notre vision</h3>
                                        <p id="short-vision"></p>
                                        <span class="readmore-btn" onclick="showPopup('vision')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Vision End -->

                                <!-- Valeurs Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-value.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Nos valeurs</h3>
                                        <p id="short-values"></p>
                                        <span class="readmore-btn" onclick="showPopup('values')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Valeurs End -->
                            </div>

                            <!-- Popup Section -->
                            <div class="popup-overlay" id="popup-overlay"></div>
                            <div class="popup" id="popup">
                                <button class="close-btn" onclick="closePopup()">X</button>
                                <h3 id="popup-title"></h3>
                                <p id="popup-text" style="text-align: justify;"></p>
                            </div>
                            <!-- Mission Vision Box End -->
                        </div>
                        <!-- Our Approach Content End -->

                        <!-- Our Approach Image Start -->
                        <div class="our-approach-image">
                            <figure class="image-anime">
                                <img src="images/banner1.jpeg" alt="">
                            </figure>
                        </div>
                        <!-- Our Approach Image End -->
                    </div>
                    <!-- Our Approach Box Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approah Section End -->
    
   <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Images Start -->
                    <div class="why-choose-images">
                        <div class="why-choose-image-1">
                            <figure class="image-anime">
                                <img src="images/new/jus_mangue.png" alt="Promo Fruits Bénin" />
                            </figure>
                        </div>
                        <div class="why-choose-image-2">
                            <figure class="image-anime">
                                <img src="images/new/mangue.png" alt="Promo Fruits Bénin" />
                            </figure>
                        </div>
                    </div>
                    <!-- Why Choose Images End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Pourquoi choisir Promo Fruits Bénin</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Des fruits frais et de qualité, directement du producteur à votre table</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify;">Chez Promo Fruits Bénin, nous mettons un point d'honneur à fournir des fruits frais et savoureux tout en garantissant la qualité et l'authenticité. Grâce à notre approche directe avec les producteurs locaux, nous vous offrons des prix compétitifs et un service rapide.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>Fruits frais et locaux</li>
                                <li>Livraison rapide et fiable</li>
                                <li>Prix compétitifs et abordables</li>
                                <li>Engagement envers la qualité</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->

                        <!-- Why Choose Counters Start -->
                        <div class="why-choose-counters">
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">21</span>+</h2>
                                <p>Années d'expérience</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                            
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">150</span>+</h2>
                                <p>Partenaires locaux</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                            
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">55000</span>+</h2>
                                <p>Clients satisfaits</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                        </div>
                        <!-- Why Choose Counters End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->


    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker" style="padding-bottom: 50px;">
        <h2 class="section-title" style="text-align: center;">Nos Prix et Licences</h2>
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src=""> Meilleur acteur agricole en 2009</span>
                <span><img src=""> Nominée au grand Oscar 2010 de l’innovation</span>
                <span><img src=""> Certifié HACCP en Janvier 2017</span>
                <span><img src=""> Certifié ISO 22000 VERSION 2018</span>
                <span><img src=""> Certifié SGF IRMAV</span>
                <span><img src=""> Certifié conforme aux réglementations USDA Organic (7 CFR 205)</span>
            </div>
    
            <div class="scrolling-content">
                <span><img src=""> Meilleur acteur agricole en 2009</span>
                <span><img src=""> Nominée au grand Oscar 2010 de l’innovation</span>
                <span><img src=""> Certifié HACCP en Janvier 2017</span>
                <span><img src=""> Certifié ISO 22000 VERSION 2018</span>
                <span><img src=""> Certifié SGF IRMAV</span>
                <span><img src=""> Certifié conforme aux réglementations USDA Organic (7 CFR 205)</span>
            </div>
        </div>
        <div class="hero-btn" style="text-align: center; margin-top: 20px;">
            <a href="/about#nos-certifications" class="btn-default" style="display: inline-block; padding: 15px 55px;">Les Preuves</a>
        </div>
    </div>
    <!-- Scrolling Ticker End -->


    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Testimonials Image Start -->
                    <div class="testimonials-image">
                        <div class="testimonials-img">
                            <figure class="image-anime reveal">
                                <img src="images/prod/1.jpeg" alt="">
                            </figure>
                        </div>

                        <div class="client-review-box"><p>Plus de</p>
                            <h2> <span class="counter">550</span>k</h2>
                            <p>de clients fidèles</p>
                        </div> 
                    </div>
                    <!-- Testimonials Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Témoignages</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Ce que les gens disent de nous</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider" style="text-align: justify;">
                            <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Balayer">
                                <!-- Témoignage 1 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/mission.jpeg" alt="Amadou Diallo">
                                                    </figure>
                                                </div>    
                                                <div class="author-content">
                                                    <h3>Amadou Diallo</h3>
                                                    <p>Entrepreneur</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>"Depuis que j'ai découvert cette entreprise, ma vision de la consommation locale a totalement changé. 
                                            Les produits sont d'une qualité irréprochable et le service client est toujours disponible pour répondre à mes questions. 
                                            Je recommande vivement à toute personne soucieuse de consommer des produits sains et naturels."</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Témoignage 2 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/mission.jpeg" alt="Awa Koné">
                                                    </figure>
                                                </div>    
                                                <div class="author-content">
                                                    <h3>Awa Koné</h3>
                                                    <p>Commerçante</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star-half-alt"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>"En tant que commerçante, j'ai toujours recherché des fournisseurs fiables. 
                                            Grâce à eux, j'ai pu améliorer la qualité de mes produits et fidéliser ma clientèle. 
                                            Leurs produits sont frais et leurs délais de livraison respectés, ce qui est essentiel pour mon activité. 
                                            Merci pour votre professionnalisme et votre engagement envers la qualité."</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Témoignage 3 -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-info">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/mission.jpeg" alt="Kwame Mensah">
                                                    </figure>
                                                </div>    
                                                <div class="author-content">
                                                    <h3>Kwame Mensah</h3>
                                                    <p>Consultant</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <p>"Ce qui m'a impressionné, c'est la transparence et l'éthique de cette entreprise. 
                                            Ils mettent un point d'honneur à offrir des produits de qualité et à soutenir les producteurs locaux. 
                                            En tant que consultant, j'ai souvent affaire à des entreprises qui ne tiennent pas toujours leurs promesses, 
                                            mais ici, j'ai trouvé un partenaire fiable et engagé. Bravo pour cette belle initiative !"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <div class="testimonial-pagination"></div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonials Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

@endsection('content')

@section('scripts')
<script>
    const content = {
        mission: "Promo Fruits s'est donné comme mission de créer un marché d'écoulement rémunérateur pour chaque type de fruit à travers la transformation à grande échelle. Par ailleurs, nous articulons nos efforts pour l'optimisation des rendements à l'hectare afin d'améliorer le revenu des petits producteurs. Pour chaque consommateur de nos produits, nous garantissons un produit sans additif chimique issu d'une agriculture plus saine et durable pour un bien-être parfait.",
        
        vision: "Notre vision est de devenir un acteur incontournable dans la valorisation des fruits locaux en Afrique, en offrant des produits sains et naturels à grande échelle. Nous aspirons à un monde où chaque fruit cultivé trouve sa place dans une chaîne de transformation durable, réduisant ainsi le gaspillage et améliorant les conditions de vie des producteurs.",
        
        values: "Chez Promo Fruits, nous nous engageons à respecter des valeurs fondamentales : la qualité, l’innovation, l’intégrité et le respect de l’environnement. Nous croyons en une production responsable, en une relation de confiance avec nos partenaires et en une alimentation saine et accessible à tous."
    };

    function getShortText(text, limit) {
        let cleanText = text.replace(/[^a-zA-ZÀ-ÿ]/g, ""); 
        let count = 0, result = "";

        for (let char of text) {
            if (/[a-zA-ZÀ-ÿ]/.test(char)) count++; 
            result += char;
            if (count >= limit) break;
        }

        return result + "...";
    }

    document.getElementById("short-mission").innerText = getShortText(content.mission, 40);
    document.getElementById("short-vision").innerText = getShortText(content.vision, 40);
    document.getElementById("short-values").innerText = getShortText(content.values, 40);

    function showPopup(section) {
        document.getElementById("popup-title").innerText = 
            section === "mission" ? "Notre mission" :
            section === "vision" ? "Notre vision" : "Nos valeurs";
            
        document.getElementById("popup-text").innerText = content[section];
        document.getElementById("popup").style.display = "block";
        document.getElementById("popup-overlay").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
        document.getElementById("popup-overlay").style.display = "none";
    }
</script>

@endsection('scripts')