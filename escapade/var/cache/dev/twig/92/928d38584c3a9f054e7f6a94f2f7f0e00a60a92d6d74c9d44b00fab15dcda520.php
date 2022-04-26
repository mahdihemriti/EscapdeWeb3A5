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

/* Front/siteT.html.twig */
class __TwigTemplate_8fbd2a41a9f5e77a46ff10acb079cc7f0e1ef8f9eddebbcb8eab85844c5cd714 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/siteT.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/siteT.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/siteT.html.twig", 1);
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
        echo "<div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                <h3>Popular hotel &amp; hostel destinations</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row row-bottom-padded-md\">
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>New York</h3>
                        <span>3 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-2.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Philippines</h3>
                        <span>4 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-3.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Hongkong</h3>
                        <span>2 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>New York</h3>
                        <span>3 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-2.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Philippines</h3>
                        <span>4 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-3.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Hongkong</h3>
                        <span>2 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/siteT.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block content %}
<div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                <h3>Popular hotel &amp; hostel destinations</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class=\"row row-bottom-padded-md\">
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>New York</h3>
                        <span>3 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-2.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Philippines</h3>
                        <span>4 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-3.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Hongkong</h3>
                        <span>2 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>New York</h3>
                        <span>3 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-2.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Philippines</h3>
                        <span>4 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                <div href=\"#\"><img src=\"images/place-3.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    <div class=\"desc\">
                        <span></span>
                        <h3>Hongkong</h3>
                        <span>2 nights</span>
                        <span class=\"price\">\$1,000</span>
                        <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Front/siteT.html.twig", "C:\\Users\\asus\\escapade\\templates\\Front\\siteT.html.twig");
    }
}
