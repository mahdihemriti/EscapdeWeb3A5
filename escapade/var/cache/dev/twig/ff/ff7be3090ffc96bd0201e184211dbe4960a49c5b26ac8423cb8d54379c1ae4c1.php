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

/* Front/panier.html.twig */
class __TwigTemplate_d2f215f60a069630f0b8142e4b459b3374cb7eceea84320de850852c947d30b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/panier.html.twig", 1);
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
        echo "<head>

    <!-- SITE TITTLE -->
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
    <![endif]-->

</head>

<body class=\"body-wrapper\">

<!--==================================
=            User Profile            =
===================================-->
<section class=\"dashboard section\">
    <!-- Container Start -->
    <div class=\"container\">
        <!-- Row Start -->
        <div class=\"row\">

            <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">
                <!-- Recently Favorited -->
                <div class=\"widget dashboard-container my-adslist\">
                    <h3 class=\"widget-header\">My Ads</h3>
                    <table class=\"table table-responsive product-dashboard-table\">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Title</th>
                            <th class=\"text-center\">Category</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new RuntimeError('Variable "factures" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 62
            echo "                        <tr>

                            <td class=\"product-details\">
                                <h3 class=\"title\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "prixtotal", [], "any", false, false, false, 65), "html", null, true);
            echo "</h3>
                                <span class=\"add-id\">";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", [], "any", false, false, false, 66), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                                <span><strong>Posted on: </strong><time>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "prixfinal", [], "any", false, false, false, 67), "html", null, true);
            echo "</time> </span>
                                <span class=\"status active\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "idclient", [], "any", false, false, false, 68), "nom", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
                                <span class=\"location\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "idpromotion", [], "any", false, false, false, 69), "taux", [], "any", false, false, false, 69), "html", null, true);
            echo "</span>
                            </td>
                            <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                            <td class=\"action\" data-title=\"Action\">
                                <div class=\"\">
                                    <ul class=\"list-inline justify-content-center\">
                                        <li class=\"list-inline-item\">
                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"view\" class=\"view\" href=\"category.html\">
                                                <i class=\"fa fa-eye\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a class=\"edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\" href=\"\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a class=\"delete\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\" href=\"\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "                            <tr>
                                <td colspan=\"5\">Table vide</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </tbody>
                    </table>

                </div>

                <!-- pagination -->

                <!-- pagination -->

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
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
        return "Front/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 99,  187 => 95,  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 65,  135 => 62,  130 => 61,  77 => 11,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
<head>

    <!-- SITE TITTLE -->
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
    <![endif]-->

</head>

<body class=\"body-wrapper\">

<!--==================================
=            User Profile            =
===================================-->
<section class=\"dashboard section\">
    <!-- Container Start -->
    <div class=\"container\">
        <!-- Row Start -->
        <div class=\"row\">

            <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">
                <!-- Recently Favorited -->
                <div class=\"widget dashboard-container my-adslist\">
                    <h3 class=\"widget-header\">My Ads</h3>
                    <table class=\"table table-responsive product-dashboard-table\">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Title</th>
                            <th class=\"text-center\">Category</th>
                            <th class=\"text-center\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for facture in factures %}
                        <tr>

                            <td class=\"product-details\">
                                <h3 class=\"title\">{{ facture.prixtotal }}</h3>
                                <span class=\"add-id\">{{ facture.date ? facture.date|date('Y-m-d') : '' }}</span>
                                <span><strong>Posted on: </strong><time>{{ facture.prixfinal }}</time> </span>
                                <span class=\"status active\">{{ facture.idclient.nom }}</span>
                                <span class=\"location\">{{ facture.idpromotion.taux }}</span>
                            </td>
                            <td class=\"product-category\"><span class=\"categories\">Laptops</span></td>
                            <td class=\"action\" data-title=\"Action\">
                                <div class=\"\">
                                    <ul class=\"list-inline justify-content-center\">
                                        <li class=\"list-inline-item\">
                                            <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"view\" class=\"view\" href=\"category.html\">
                                                <i class=\"fa fa-eye\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a class=\"edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\" href=\"\">
                                                <i class=\"fa fa-pencil\"></i>
                                            </a>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <a class=\"delete\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete\" href=\"\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\">Table vide</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                </div>

                <!-- pagination -->

                <!-- pagination -->

            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
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
{% endblock %}
", "Front/panier.html.twig", "C:\\Users\\asus\\escapade\\templates\\Front\\panier.html.twig");
    }
}
