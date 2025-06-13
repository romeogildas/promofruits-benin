@extends('layouts.site.app')
@section('title')
  <title> Promo Fruits-Bénin | Qui sommes-nous </title>
@endsection

@section('styles')
    <style>
        @media (max-width: 991px) {
            .page-gallery {
                margin-top: -30 !important;
            }
        }

        @media (min-width: 992px) {
            .page-gallery {
                margin-top: -125px;
            }
        }
    
        .service-entry p {
            text-align: justify;
            text-justify: inter-word;
            word-spacing: 2px;
            line-height: 1.6;
        }

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


        .gout {
            list-style-type: none;
            padding-left: 0;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .gout {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 480px) {
            .gout {
                grid-template-columns: repeat(1, 1fr);
            }
        }


        .liste-responsive {
        list-style-type: none;
        padding-left: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr); 
        gap: 10px;
        width: 100%;
    }

    .liste-responsive li {
        text-transform: none !important;
    }

    @media screen and (max-width: 768px) {
        .liste-responsive {
            grid-template-columns: repeat(1, 1fr); 
        }
    }
    
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
@endsection

@section('page_class', 'about')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header @yield('page_class') parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"> <span>Qui sommes</span>-nous ?</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">qui sommes-nous</li>
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

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-contemt">

                        <!-- Service Entry Start -->
                        <div class="service-entry" style="text-align: justify; width: 100%; max-width: 1200px; margin: auto;">
                            <p class="wow fadeInUp"><strong>PROMO FRUITS BENIN</strong> est une entreprise spécialisée dans la production et la commercialisation de jus de fruit en canettes et en tétra-packs, qui sont des produits de grande consommation. <br> Depuis sa création, <strong>PROMO FRUITS BENIN</strong> s'est engagée à fournir des produits de qualité irréprochable dans un contexte concurrentiel de plus en plus difficile, en visant à être la référence dans son secteur d'activité.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Ainsi, pour réaliser cette ambition, la Direction Générale s'est engagée à obtenir la certification <strong>HACCP</strong> et les enregistrements de la <strong>DANA</strong>, de l'<strong>UEMOA</strong> et de la <strong>CEDEAO</strong>, ainsi qu'à adopter un Système de Management de la Sécurité des Denrées Alimentaires (SMSDA) répondant aux exigences de la norme internationale <strong>ISO 22000 version 2018</strong> pour une performance globale de <strong>PROMO FRUITS BENIN</strong> dont les objectifs stratégiques sont les suivants :</p>
                            <ul class="wow fadeInUp liste-responsive" data-wow-delay="0.3s">
                                <li style="width: 100%; text-transform: none !important;">✅ la pérennisation des activités de <strong>PROMO FRUITS BENIN</strong> par la prévention des incidents liés à la sécurité des denrées alimentaires.</li>
                                <li style="width: 100%; text-transform: none !important;">✅ la fourniture de produits sains et sûrs, conformes aux normes internationales et aux exigences légales et réglementaires en matière d'innocuité de nos produits aux plans biologique, chimique et physique.</li>
                                <li style="width: 100%; text-transform: none !important;">✅ l'amélioration continue de nos procédés de fabrication de jus de fruits par la veille technologique et le développement des capacités de notre personnel à réagir aux situations d'urgences réelles ou potentielles.</li>
                                <li style="width: 100%; text-transform: none !important;">✅ la maîtrise de nos coûts de fabrication tout en garantissant la qualité sanitaire de nos produits.</li>
                            </ul>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">La présente politique de sécurité des denrées alimentaires sera mise en œuvre, communiquée en interne et aux parties intéressées en externe, suivie, mesurée et revue à intervalle régulier lors des revues de direction de notre système de management de sécurité des denrées alimentaires pour son amélioration continue.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">Le Responsable de l'équipe chargée de la sécurité des denrées alimentaires assure la conduite et la coordination du SMSDA et chaque agent s'engage résolument à s'impliquer dans cette démarche. Il est aussi chargé de sensibiliser le personnel aux exigences clients, normatives, réglementaires et de rendre compte de son fonctionnement à la direction.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Pour ma part, je m'engage à rechercher et mettre à disposition les ressources nécessaires au bon déroulement de notre système de sécurité des denrées alimentaires et à communiquer sur l'importance de maintenir ce système efficace.</p>
                            <hr style="margin: 30px 0; border-top: 2px solid #FFD700;">

                            <h3 class="wow fadeInUp" data-wow-delay="0.7s" style="text-align: center; margin-bottom: 20px;">Notre Expérience et Nos Produits</h3>

                            <p class="wow fadeInUp" data-wow-delay="0.8s">Avec ses 21 années d'expérience, <strong>PROMO FRUITS BENIN</strong> est une entreprise spécialisée dans la production et la transformation de plusieurs types de fruits. Connu pour notre excellent jus d'ananas, nous avons voulu offrir plus de saveurs et de choix à nos consommateurs.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.9s">Nous avons ainsi élargi notre gamme avec :</p>

                            <ul class="wow fadeInUp gout" data-wow-delay="0.3s">
                                <li>🍍 Cocktail ananas-gingembre</li>
                                <li>🍹 Cocktail de fruits</li>
                                <li>🥭 Cocktail ananas-mangue</li>
                                <li>🍊 Cocktail ananas-orange</li>
                                <li>🍍 Concentré d'ananas</li>
                                <li>🍊 Concentré d'orange</li>
                            </ul>


                            <p class="wow fadeInUp" data-wow-delay="1.1s">Depuis 2003, nous avons travaillé selon les exigences de nos consommateurs pour améliorer chaque produit. Nous avons également acquis plusieurs certifications pour respecter les normes de production internationales et représenter fièrement le Bénin au-delà de nos frontières.</p>
                        </div>
                        <!-- Service Entry End -->

                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->


    <!-- Page Contact Us Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-our-mission.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Notre mission</h3>
                                <p id="short-mission"></p>
                                <span class="readmore-btn" onclick="showPopup('mission')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-our-vision.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Notre vision</h3>
                                <p id="short-vision"></p>
                                <span class="readmore-btn" onclick="showPopup('vision')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-our-value.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Nos valeurs</h3>
                                <p id="short-values"></p>
                                <span class="readmore-btn" onclick="showPopup('values')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                         <!-- Popup Section -->
                        <div class="popup-overlay" id="popup-overlay"></div>
                        <div class="popup" id="popup">
                            <button class="close-btn" onclick="closePopup()">X</button>
                            <h3 id="popup-title"></h3>
                            <p id="popup-text"></p>
                        </div>
                            <!-- Mission Vision Box End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->


    <!-- Début de la section Nos Certifications -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Début du titre de la section -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Nos Certifications</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Découvrez nos certifications obtenues avec engagement et excellence.
                        </p>
                    </div>
                    <!-- Fin du titre de la section -->
                </div>
            </div>

            <!-- Début de la section Nos Certifications -->
            <div class="page-gallery" id="nos-certifications">
                <div class="container">
                    <!-- gallery section start -->
                    <div class="row gallery-items page-gallery-box">
                        <?php for ($i = 0; $i <= 6; $i++): ?>
                            <div class="col-lg-4 col-6">
                                <!-- image gallery start -->
                                <div class="photo-gallery wow fadeInUp" data-wow-delay="<?= ($i - 0) * 0.2 ?>s" style="border: 3px solid #4CAF50; border-radius: 10px; padding: 5px;">
                                    <a href="images/certif/<?= $i ?>.jpeg" data-cursor-text="Agrandir">
                                        <figure class="image-anime">
                                            <img src="images/certif/<?= $i ?>.jpeg" alt="Certification <?= $i ?>">
                                        </figure>
                                    </a>
                                </div>
                                <!-- image gallery end -->
                            </div>
                        <?php endfor; ?>
                    </div>
                    <!-- gallery section end -->
                </div>
            </div>
            <!-- Fin de la section Nos Certifications -->
        </div>
    </div>


@endsection

@section('scripts')
<script>
    const content = {
        mission: "Promo Fruits s'est donné comme mission de créer un marché d'écoulement rémunérateur pour chaque type de fruit à travers la transformation à grande échelle. Par ailleurs, nous articulons nos efforts pour l'optimisation des rendements à l'hectare afin d'améliorer le revenu des petits producteurs. Pour chaque consommateur de nos produits, nous garantissons un produit sans additif chimique issu d'une agriculture plus saine et durable pour un bien-être parfait.",
        
        vision: "Notre vision est de devenir un acteur incontournable dans la valorisation des fruits locaux en Afrique, en offrant des produits sains et naturels à grande échelle. Nous aspirons à un monde où chaque fruit cultivé trouve sa place dans une chaîne de transformation durable, réduisant ainsi le gaspillage et améliorant les conditions de vie des producteurs.",
        
        values: "Chez Promo Fruits, nous nous engageons à respecter des valeurs fondamentales : la qualité, l’innovation, l’intégrité et le respect de l’environnement. Nous croyons en une production responsable, en une relation de confiance avec nos partenaires et en une alimentation saine et accessible à tous."
    };

    function getShortText(text, limit) {
        // Supprimer la ponctuation et les espaces pour le comptage
        let cleanText = text.replace(/[^a-zA-ZÀ-ÿ]/g, ""); 
        let count = 0, result = "";

        for (let char of text) {
            if (/[a-zA-ZÀ-ÿ]/.test(char)) count++; // Compter uniquement les lettres
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