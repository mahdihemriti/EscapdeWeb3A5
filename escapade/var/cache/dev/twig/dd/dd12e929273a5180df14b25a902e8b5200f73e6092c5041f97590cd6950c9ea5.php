<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Front/apropos.html.twig */
class __TwigTemplate_00b7cd5730f1a0080a74aec82194c93dbf659b59f4da3ecff0660dd74bb95938 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/apropos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/apropos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/apropos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Escapade</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">


    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"Profil/plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"Profil/plugins/bootstrap/css/bootstrap-slider.css\">
    <!-- Font Awesome -->
    <link href=\"Profil/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
    <link href=\"Profil/plugins/slick-carousel/slick/slick.css\" rel=\"stylesheet\">
    <link href=\"Profil/plugins/slick-carousel/slick/slick-theme.css\" rel=\"stylesheet\">
    <!-- Fancy Box -->
    <link href=\"Profil/plugins/fancybox/jquery.fancybox.pack.css\" rel=\"stylesheet\">
    <link href=\"Profil/plugins/jquery-nice-select/css/nice-select.css\" rel=\"stylesheet\">
    <!-- CUSTOM CSS -->
    <link href=\"Profil/css/style.css\" rel=\"stylesheet\">



    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>



</head>

<body class=\"body-wrapper\">

<!--================================
=            Page Title            =
=================================-->
<section class=\"page-title\">
    <!-- Container Start -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
                <!-- Title text -->
                <h3>About Us</h3>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"about-img\">
                    <img src=\"Profil/images/about/about.jpg\" class=\"img-fluid w-100 rounded\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 pt-5 pt-lg-0\">
                <div class=\"about-content\">
                    <h3 class=\"font-weight-bold\">Introduction</h3>
                    <p>Difficile de le contredire mais difficile également de l’accepter,
                        le monde est devenu techno-dépendant avec l’apparition des applications mobiles, des applications desktop et des sites web qui soit disant nous facilite la vie, l'Homme est désormais accros à la technologie et ne peut pas se passer de son Smartphone ou de son ordinateur.
                        Aujourd’hui, il existe des applications et des sites pour pratiquement tout, c’est la solution ‘digitale’ pour l’organisation des sociétés .
                        .</p>
                    <h3 class=\"font-weight-bold\">How we can help</h3>
                    <p>L’agence de voyage Escapade a été fondée en 2022 par une équipe dynamique constituée de 5 étudiants d’ESPRIT. Notre agence est née d’une véritable passion pour l’organisation et l’adaptation des voyages selon l’envie des voyageurs.  Notre agence accompagne, identifie l’ensemble des besoins de ses voyageurs pour proposer un voyage sur mesure payé en dinars avec ou sans carte bancaire.
                        Pour les applications et les sites existants, ils proposent des voyages organisés ou bien seulement des destinations. Et du coup , ils ne répondent plus aux besoins de tous les clients, le public cible est alors limité. D’où la réservation des voyages n’est plus pratique et devient assez gênante. De plus, pour les gens qui veulent tout organiser à leurs goûts,  ils arrivent des fois à annuler leurs voyages pour des détails manquants ou non voulus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"mb-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"heading text-center text-capitalize font-weight-bold py-5\">
                    <h2>our team</h2>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team1.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Brahim Céline</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team2.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Daghrour Myriam</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team3.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Hemriti Mahdi</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team4.jpg\"  >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Youssef Bechir</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team5.png\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Gayess Mouhib</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- JAVASCRIPTS -->
<script src=\"Profil/plugins/jQuery/jquery.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/popper.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/bootstrap-slider.js\"></script>
<!-- tether js -->
<script src=\"Profil/plugins/tether/js/tether.min.js\"></script>
<script src=\"Profil/plugins/raty/jquery.raty-fa.js\"></script>
<script src=\"Profil/plugins/slick-carousel/slick/slick.min.js\"></script>
<script src=\"Profil/plugins/jquery-nice-select/js/jquery.nice-select.min.js\"></script>
<script src=\"Profil/plugins/fancybox/jquery.fancybox.pack.js\"></script>
<script src=\"Profil/plugins/smoothscroll/SmoothScroll.min.js\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
<script src=\"Profil/plugins/google-map/gmap.js\"></script>
<script src=\"Profil/js/script.js\"></script>

</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Escapade</title>
    <link rel=\"shortcut icon\" href=\"{{ asset ('images/logo.png') }}\">


    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"Profil/plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"Profil/plugins/bootstrap/css/bootstrap-slider.css\">
    <!-- Font Awesome -->
    <link href=\"Profil/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\">
    <!-- Owl Carousel -->
    <link href=\"Profil/plugins/slick-carousel/slick/slick.css\" rel=\"stylesheet\">
    <link href=\"Profil/plugins/slick-carousel/slick/slick-theme.css\" rel=\"stylesheet\">
    <!-- Fancy Box -->
    <link href=\"Profil/plugins/fancybox/jquery.fancybox.pack.css\" rel=\"stylesheet\">
    <link href=\"Profil/plugins/jquery-nice-select/css/nice-select.css\" rel=\"stylesheet\">
    <!-- CUSTOM CSS -->
    <link href=\"Profil/css/style.css\" rel=\"stylesheet\">



    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>



</head>

<body class=\"body-wrapper\">

<!--================================
=            Page Title            =
=================================-->
<section class=\"page-title\">
    <!-- Container Start -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
                <!-- Title text -->
                <h3>About Us</h3>
            </div>
        </div>
    </div>
    <!-- Container End -->
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"about-img\">
                    <img src=\"Profil/images/about/about.jpg\" class=\"img-fluid w-100 rounded\" alt=\"\">
                </div>
            </div>
            <div class=\"col-lg-6 pt-5 pt-lg-0\">
                <div class=\"about-content\">
                    <h3 class=\"font-weight-bold\">Introduction</h3>
                    <p>Difficile de le contredire mais difficile également de l’accepter,
                        le monde est devenu techno-dépendant avec l’apparition des applications mobiles, des applications desktop et des sites web qui soit disant nous facilite la vie, l'Homme est désormais accros à la technologie et ne peut pas se passer de son Smartphone ou de son ordinateur.
                        Aujourd’hui, il existe des applications et des sites pour pratiquement tout, c’est la solution ‘digitale’ pour l’organisation des sociétés .
                        .</p>
                    <h3 class=\"font-weight-bold\">How we can help</h3>
                    <p>L’agence de voyage Escapade a été fondée en 2022 par une équipe dynamique constituée de 5 étudiants d’ESPRIT. Notre agence est née d’une véritable passion pour l’organisation et l’adaptation des voyages selon l’envie des voyageurs.  Notre agence accompagne, identifie l’ensemble des besoins de ses voyageurs pour proposer un voyage sur mesure payé en dinars avec ou sans carte bancaire.
                        Pour les applications et les sites existants, ils proposent des voyages organisés ou bien seulement des destinations. Et du coup , ils ne répondent plus aux besoins de tous les clients, le public cible est alors limité. D’où la réservation des voyages n’est plus pratique et devient assez gênante. De plus, pour les gens qui veulent tout organiser à leurs goûts,  ils arrivent des fois à annuler leurs voyages pour des détails manquants ou non voulus.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"mb-5\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"heading text-center text-capitalize font-weight-bold py-5\">
                    <h2>our team</h2>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team1.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Brahim Céline</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team2.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Daghrour Myriam</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team3.jpg\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Hemriti Mahdi</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team4.jpg\"  >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Youssef Bechir</h5>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"card my-3 my-lg-0\">
                    <img  src=\"Profil/images/team/team5.png\" >
                    <div class=\"card-body bg-gray text-center\">
                        <h5 class=\"card-title\">Ben Gayess Mouhib</h5>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- JAVASCRIPTS -->
<script src=\"Profil/plugins/jQuery/jquery.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/popper.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"Profil/plugins/bootstrap/js/bootstrap-slider.js\"></script>
<!-- tether js -->
<script src=\"Profil/plugins/tether/js/tether.min.js\"></script>
<script src=\"Profil/plugins/raty/jquery.raty-fa.js\"></script>
<script src=\"Profil/plugins/slick-carousel/slick/slick.min.js\"></script>
<script src=\"Profil/plugins/jquery-nice-select/js/jquery.nice-select.min.js\"></script>
<script src=\"Profil/plugins/fancybox/jquery.fancybox.pack.js\"></script>
<script src=\"Profil/plugins/smoothscroll/SmoothScroll.min.js\"></script>
<!-- google map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places\"></script>
<script src=\"Profil/plugins/google-map/gmap.js\"></script>
<script src=\"Profil/js/script.js\"></script>

</body>

{% endblock %}", "Front/apropos.html.twig", "C:\\Users\\asus\\escapade\\templates\\Front\\apropos.html.twig");
    }
}
