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

/* base.html.twig */
class __TwigTemplate_c070cf7d2a47cc77506d87ca71d4091b793c56fdd040cde0940456b69e15af7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'logIn' => [$this, 'block_logIn'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Escapade</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />

    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />
    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "</head>
<body>
<div id=\"fh5co-wrapper\">
    <div id=\"fh5co-page\">

        ";
        // line 95
        $this->displayBlock('header', $context, $blocks);
        // line 136
        echo "        <div class=\"container\">

            ";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "
        </div>
        ";
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 214
        echo "    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/icomoon.css"), "html", null, true);
        echo "\">
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\">
        <!-- Superfish -->
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/superfish.css"), "html", null, true);
        echo "\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <!-- CS Select -->
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/cs-select.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/cs-skin-border.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">



    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "        <!-- Modernizr JS -->
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Easing -->
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Waypoints -->
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/sticky.js"), "html", null, true);
        echo "\"></script>
        <!-- Stellar -->
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Superfish -->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/hoverIntent.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/superfish.js"), "html", null, true);
        echo "\"></script>
        <!-- Magnific Popup -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <!-- Date Picker -->
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <!-- CS Select -->
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/classie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/selectFx.js"), "html", null, true);
        echo "\"></script>
        <!-- Main JS -->
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 96
        echo "            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"icon-airplane\"></i>Escapade</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Acceuil</a></li>
                                <li >
                                    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo "\" >A propos de nous</a>

                                </li>
                                <li><a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel");
        echo "\">Hôtel</a></li>
                                <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("moyenT");
        echo "\">Moyen de transport</a></li>
                                <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("siteT");
        echo "\">Site Touristique</a></li>
                                <li><a href=\"/promotion/front\">Nos promotion</a></li>
                                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_indexfront");
        echo "\">Blog</a></li>

                                ";
        // line 115
        $this->displayBlock('logIn', $context, $blocks);
        // line 128
        echo "
                            </ul>

                        </nav>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_logIn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logIn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logIn"));

        // line 116
        echo "                                ";
        // line 117
        echo "                                    <li>
                                        <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"class=\"fh5co-sub-ddown\"><i class=\"icon-user\"></i></a>
                                        <ul class=\"fh5co-sub-menu\">

                                            <li><a href=\"#\">Connexion</a></li>
                                            <li><a href=\"#\">S'inscrire</a></li>


                                        </ul>
                                    </li>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 139
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 144
        echo "            <footer>
                <div id=\"footer\">
                    <div class=\"container\">
                        <div class=\"row row-bottom-padded-md\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>À propos du voyage</h3>
                                <p>
                                    Loin loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles</div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Top Flights Routes</h3>
                                <ul>
                                    <li><a href=\"#\">Manila flights</a></li>
                                    <li><a href=\"#\">Dubai flights</a></li>
                                    <li><a href=\"#\">Bangkok flights</a></li>
                                    <li><a href=\"#\">Tokyo Flight</a></li>
                                    <li><a href=\"#\">New York Flights</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Top Hotels</h3>
                                <ul>
                                    <li><a href=\"#\">Boracay Hotel</a></li>
                                    <li><a href=\"#\">Dubai Hotel</a></li>
                                    <li><a href=\"#\">Singapore Hotel</a></li>
                                    <li><a href=\"#\">Manila Hotel</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Interest</h3>
                                <ul>
                                    <li><a href=\"#\">Beaches</a></li>
                                    <li><a href=\"#\">Family Travel</a></li>
                                    <li><a href=\"#\">Budget Travel</a></li>
                                    <li><a href=\"#\">Food &amp; Drink</a></li>
                                    <li><a href=\"#\">Honeymoon and Romance</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Best Places</h3>
                                <ul>
                                    <li><a href=\"#\">Boracay Beach</a></li>
                                    <li><a href=\"#\">Dubai</a></li>
                                    <li><a href=\"#\">Singapore</a></li>
                                    <li><a href=\"#\">Hongkong</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Affordable</h3>
                                <ul>
                                    <li><a href=\"#\">Food &amp; Drink</a></li>
                                    <li><a href=\"#\">Fare Flights</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3 text-center\">
                                <p class=\"fh5co-social-icons\">
                                    <a href=\"#\"><i class=\"icon-twitter2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-facebook2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-instagram\"></i></a>
                                    <a href=\"#\"><i class=\"icon-dribbble2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-youtube\"></i></a>
                                </p>
                                <p>Copyright 2022 All Rights Reserved. <br>Made with <i class=\"icon-heart3\"></i> by <a>Eclair de génie</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 144,  424 => 143,  413 => 139,  403 => 138,  383 => 118,  380 => 117,  378 => 116,  368 => 115,  351 => 128,  349 => 115,  344 => 113,  339 => 111,  335 => 110,  331 => 109,  325 => 106,  320 => 104,  313 => 100,  307 => 96,  297 => 95,  283 => 86,  278 => 84,  274 => 83,  269 => 81,  264 => 79,  260 => 78,  255 => 76,  251 => 75,  246 => 73,  241 => 71,  237 => 70,  232 => 68,  227 => 66,  222 => 64,  216 => 61,  210 => 58,  207 => 57,  197 => 56,  182 => 50,  177 => 48,  173 => 47,  168 => 45,  163 => 43,  158 => 41,  153 => 39,  148 => 37,  143 => 35,  135 => 29,  125 => 28,  109 => 214,  107 => 143,  103 => 141,  101 => 138,  97 => 136,  95 => 95,  88 => 90,  86 => 56,  83 => 55,  81 => 28,  60 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Escapade</title>
    <link rel=\"shortcut icon\" href=\"{{ asset('images/logo.png')}}\">


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />

    <!-- Facebook and Twitter integration -->
    <meta property=\"og:title\" content=\"\"/>
    <meta property=\"og:image\" content=\"\"/>
    <meta property=\"og:url\" content=\"\"/>
    <meta property=\"og:site_name\" content=\"\"/>
    <meta property=\"og:description\" content=\"\"/>
    <meta name=\"twitter:title\" content=\"\" />
    <meta name=\"twitter:image\" content=\"\" />
    <meta name=\"twitter:url\" content=\"\" />
    <meta name=\"twitter:card\" content=\"\" />
    {% block stylesheets %}
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css')}}\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/icomoon.css')}}\">
        <!-- Bootstrap  -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.css')}}\">
        <!-- Superfish -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/superfish.css')}}\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific-popup.css')}}\">
        <!-- Date Picker -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap-datepicker.min.css')}}\">
        <!-- CS Select -->
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/cs-select.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/cs-skin-border.css')}}\">

        <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css')}}\">



    {% endblock %}

    {% block javascripts %}
        <!-- Modernizr JS -->
        <script src=\"{{ asset('front/js/modernizr-2.6.2.min.js')}}\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"{{ asset('front/js/respond.min.js')}}\"></script>
        <![endif]-->
        <!-- jQuery -->
        <script src=\"{{ asset('front/js/jquery.min.js')}}\"></script>
        <!-- jQuery Easing -->
        <script src=\"{{ asset('front/js/jquery.easing.1.3.js')}}\"></script>
        <!-- Bootstrap -->
        <script src=\"{{ asset('front/js/bootstrap.min.js')}}\"></script>
        <!-- Waypoints -->
        <script src=\"{{ asset('front/js/jquery.waypoints.min.js')}}\"></script>
        <script src=\"{{ asset('front/js/sticky.js')}}\"></script>
        <!-- Stellar -->
        <script src=\"{{ asset('front/js/jquery.stellar.min.js')}}\"></script>
        <!-- Superfish -->
        <script src=\"{{ asset('front/js/hoverIntent.js')}}\"></script>
        <script src=\"{{ asset('front/js/superfish.js')}}\"></script>
        <!-- Magnific Popup -->
        <script src=\"{{ asset('front/js/jquery.magnific-popup.min.js')}}\"></script>
        <script src=\"{{ asset('front/js/magnific-popup-options.js')}}\"></script>
        <!-- Date Picker -->
        <script src=\"{{ asset('front/js/bootstrap-datepicker.min.js')}}\"></script>
        <!-- CS Select -->
        <script src=\"{{ asset('front/js/classie.js')}}\"></script>
        <script src=\"{{ asset('front/js/selectFx.js')}}\"></script>
        <!-- Main JS -->
        <script src=\"{{ asset('front/js/main.js')}}\"></script>


    {% endblock %}
</head>
<body>
<div id=\"fh5co-wrapper\">
    <div id=\"fh5co-page\">

        {% block header %}
            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"{{ path ('home') }}\"><i class=\"icon-airplane\"></i>Escapade</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"{{ path ('home') }}\">Acceuil</a></li>
                                <li >
                                    <a href=\"{{ path ('apropos') }}\" >A propos de nous</a>

                                </li>
                                <li><a href=\"{{ path ('hotel') }}\">Hôtel</a></li>
                                <li><a href=\"{{ path ('moyenT') }}\">Moyen de transport</a></li>
                                <li><a href=\"{{ path ('siteT') }}\">Site Touristique</a></li>
                                <li><a href=\"/promotion/front\">Nos promotion</a></li>
                                <li><a href=\"{{ path ('app_blog_indexfront') }}\">Blog</a></li>

                                {% block logIn %}
                                {# <li><a href=\"{{ path ('panier') }}\"><i class='icon-shopping-cart'></i></a></li> #}
                                    <li>
                                        <a href=\"{{ path ('home') }}\"class=\"fh5co-sub-ddown\"><i class=\"icon-user\"></i></a>
                                        <ul class=\"fh5co-sub-menu\">

                                            <li><a href=\"#\">Connexion</a></li>
                                            <li><a href=\"#\">S'inscrire</a></li>


                                        </ul>
                                    </li>
                                {% endblock %}

                            </ul>

                        </nav>
                    </div>
                </div>
            </header>
        {% endblock %}
        <div class=\"container\">

            {% block content %}

            {% endblock %}

        </div>
        {% block footer %}
            <footer>
                <div id=\"footer\">
                    <div class=\"container\">
                        <div class=\"row row-bottom-padded-md\">
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>À propos du voyage</h3>
                                <p>
                                    Loin loin, derrière le mot montagnes, loin des pays Vokalia et Consonantia, vivent les textes aveugles</div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Top Flights Routes</h3>
                                <ul>
                                    <li><a href=\"#\">Manila flights</a></li>
                                    <li><a href=\"#\">Dubai flights</a></li>
                                    <li><a href=\"#\">Bangkok flights</a></li>
                                    <li><a href=\"#\">Tokyo Flight</a></li>
                                    <li><a href=\"#\">New York Flights</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Top Hotels</h3>
                                <ul>
                                    <li><a href=\"#\">Boracay Hotel</a></li>
                                    <li><a href=\"#\">Dubai Hotel</a></li>
                                    <li><a href=\"#\">Singapore Hotel</a></li>
                                    <li><a href=\"#\">Manila Hotel</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Interest</h3>
                                <ul>
                                    <li><a href=\"#\">Beaches</a></li>
                                    <li><a href=\"#\">Family Travel</a></li>
                                    <li><a href=\"#\">Budget Travel</a></li>
                                    <li><a href=\"#\">Food &amp; Drink</a></li>
                                    <li><a href=\"#\">Honeymoon and Romance</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Best Places</h3>
                                <ul>
                                    <li><a href=\"#\">Boracay Beach</a></li>
                                    <li><a href=\"#\">Dubai</a></li>
                                    <li><a href=\"#\">Singapore</a></li>
                                    <li><a href=\"#\">Hongkong</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-2 col-sm-2 col-xs-12 fh5co-footer-link\">
                                <h3>Affordable</h3>
                                <ul>
                                    <li><a href=\"#\">Food &amp; Drink</a></li>
                                    <li><a href=\"#\">Fare Flights</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3 text-center\">
                                <p class=\"fh5co-social-icons\">
                                    <a href=\"#\"><i class=\"icon-twitter2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-facebook2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-instagram\"></i></a>
                                    <a href=\"#\"><i class=\"icon-dribbble2\"></i></a>
                                    <a href=\"#\"><i class=\"icon-youtube\"></i></a>
                                </p>
                                <p>Copyright 2022 All Rights Reserved. <br>Made with <i class=\"icon-heart3\"></i> by <a>Eclair de génie</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}
    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
</body>
</html>", "base.html.twig", "C:\\Users\\asus\\escapade\\templates\\base.html.twig");
    }
}
