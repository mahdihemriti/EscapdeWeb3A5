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

/* Front/profil.html.twig */
class __TwigTemplate_c775a0f5db351e726b684ca27c28ba865cbd69b24fef80eefd9ac330db25d8f3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <head>

        <!-- SITE TITTLE -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Escapade</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">


        <!-- PLUGINS CSS STYLE -->
        <!-- <link href=\"plugins/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\"> -->
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


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body class=\"body-wrapper\">



    <!--==================================
    =            User Profile            =
    ===================================-->

    <section class=\"user-profile section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1 col-lg-3 offset-lg-0\">
                    <div class=\"sidebar\">
                        <!-- User Widget -->
                        <div class=\"widget user\">
                            <!-- User Image -->
                            <div class=\"image d-flex justify-content-center\">
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Profil/images/user/user-thumb.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"\">
                            </div>
                            <!-- User Name -->
                            <h5 class=\"text-center\">NOM</h5>
                        </div>
                        <!-- Dashboard Links -->
                        <div class=\"widget dashboard-links\">
                            <ul>
                                <li><a class=\"my-1 d-inline-block\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">

                    <!-- Edit Personal Info -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"widget personal-info\">
                                <h3 class=\"widget-header user\" >Edit Personal Information</h3>
                                <form action=\"#\">
                                    <!-- First Name -->
                                    <div class=\"form-group\">
                                        <label for=\"first-name\">Nom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"first-name\">
                                    </div>
                                    <!-- Last Name -->
                                    <div class=\"form-group\">
                                        <label for=\"last-name\">Prénom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"last-name\">
                                    </div>
                                    <!-- File chooser -->
                                    <div class=\"form-group choose-file d-inline-flex\">
                                        <i class=\"fa fa-user text-center px-3\"></i>
                                        <input type=\"file\" class=\"form-control-file mt-2 pt-1\" id=\"input-file\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Email</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Date de naissance</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Numéro téléphone</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Ville</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"new-password\">Nouveau mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"new-password\">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"confirm-password\">Confirmer nouveau mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"confirm-password\">
                                    </div>

                                    <!-- Submit button -->
                                    <button class=\"btn btn-transparent\">Modifier</button>
                                </form>
                            </div>
                        </div>
                        ";
        // line 179
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Bottom -->


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
        return "Front/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 179,  138 => 67,  127 => 59,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
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


        <!-- PLUGINS CSS STYLE -->
        <!-- <link href=\"plugins/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\"> -->
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


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

    </head>

    <body class=\"body-wrapper\">



    <!--==================================
    =            User Profile            =
    ===================================-->

    <section class=\"user-profile section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 offset-md-1 col-lg-3 offset-lg-0\">
                    <div class=\"sidebar\">
                        <!-- User Widget -->
                        <div class=\"widget user\">
                            <!-- User Image -->
                            <div class=\"image d-flex justify-content-center\">
                                <img src=\"{{ asset ('Profil/images/user/user-thumb.jpg') }}\" alt=\"\" class=\"\">
                            </div>
                            <!-- User Name -->
                            <h5 class=\"text-center\">NOM</h5>
                        </div>
                        <!-- Dashboard Links -->
                        <div class=\"widget dashboard-links\">
                            <ul>
                                <li><a class=\"my-1 d-inline-block\" href=\"{{ path ('home') }}\">Home</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-10 offset-md-1 col-lg-9 offset-lg-0\">

                    <!-- Edit Personal Info -->
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"widget personal-info\">
                                <h3 class=\"widget-header user\" >Edit Personal Information</h3>
                                <form action=\"#\">
                                    <!-- First Name -->
                                    <div class=\"form-group\">
                                        <label for=\"first-name\">Nom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"first-name\">
                                    </div>
                                    <!-- Last Name -->
                                    <div class=\"form-group\">
                                        <label for=\"last-name\">Prénom</label>
                                        <input type=\"text\" class=\"form-control\" id=\"last-name\">
                                    </div>
                                    <!-- File chooser -->
                                    <div class=\"form-group choose-file d-inline-flex\">
                                        <i class=\"fa fa-user text-center px-3\"></i>
                                        <input type=\"file\" class=\"form-control-file mt-2 pt-1\" id=\"input-file\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Email</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Date de naissance</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Numéro téléphone</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- Emal -->
                                    <div class=\"form-group\">
                                        <label for=\"comunity-name\">Ville</label>
                                        <input type=\"text\" class=\"form-control\" id=\"comunity-name\">
                                    </div>
                                    <!-- New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"new-password\">Nouveau mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"new-password\">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"confirm-password\">Confirmer nouveau mot de passe</label>
                                        <input type=\"password\" class=\"form-control\" id=\"confirm-password\">
                                    </div>

                                    <!-- Submit button -->
                                    <button class=\"btn btn-transparent\">Modifier</button>
                                </form>
                            </div>
                        </div>
                        {#
                        <div class=\"col-lg-6 col-md-6\">
                            <!-- Change Password -->
                            <div class=\"widget change-password\">
                                <h3 class=\"widget-header user\">Edit Password</h3>
                                <form action=\"#\">
                                    <!-- Current Password -->
                                    <div class=\"form-group\">
                                        <label for=\"current-password\">Current Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"current-password\">
                                    </div>
                                    <!-- New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"new-password\">New Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"new-password\">
                                    </div>
                                    <!-- Confirm New Password -->
                                    <div class=\"form-group\">
                                        <label for=\"confirm-password\">Confirm New Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"confirm-password\">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class=\"btn btn-transparent\">Change Password</button>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6\">
                            <!-- Change Email Address -->
                            <div class=\"widget change-email mb-0\">
                                <h3 class=\"widget-header user\">Edit Email Address</h3>
                                <form action=\"#\">
                                    <!-- Current Password -->
                                    <div class=\"form-group\">
                                        <label for=\"current-email\">Current Email</label>
                                        <input type=\"email\" class=\"form-control\" id=\"current-email\">
                                    </div>
                                    <!-- New email -->
                                    <div class=\"form-group\">
                                        <label for=\"new-email\">New email</label>
                                        <input type=\"email\" class=\"form-control\" id=\"new-email\">
                                    </div>
                                    <!-- Submit Button -->
                                    <button class=\"btn btn-transparent\">Change email</button>
                                </form>
                            </div>
                        </div>
                        #}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Bottom -->


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
", "Front/profil.html.twig", "C:\\Users\\asus\\escapade\\templates\\Front\\profil.html.twig");
    }
}
