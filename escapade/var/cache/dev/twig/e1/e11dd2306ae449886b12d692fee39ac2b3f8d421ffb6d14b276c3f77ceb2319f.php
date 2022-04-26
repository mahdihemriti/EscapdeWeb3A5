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

/* Front/reclamation.html.twig */
class __TwigTemplate_ff756ac40705def1a6f8d8e33406ecd6367c2375e4ef944ca8ee52e7c0f43890 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/reclamation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/reclamation.html.twig", 1);
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
        echo "    <div id=\"fh5co-contact\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Contact Information</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <form action=\"#\">
                <div class=\"row animate-box\">
                    <div class=\"col-md-6\">
                        <h3 class=\"section-title\">Our Address</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class=\"contact-info\">
                            <li><i class=\"icon-location-pin\"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class=\"icon-phone2\"></i>+ 1235 2355 98</li>
                            <li><i class=\"icon-mail\"></i><a href=\"#\">info@yoursite.com</a></li>
                            <li><i class=\"icon-globe2\"></i><a href=\"#\">www.yoursite.com</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"\" class=\"form-control\" id=\"\" cols=\"30\" rows=\"7\" placeholder=\"Message\"></textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Front/reclamation.html.twig";
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
    <div id=\"fh5co-contact\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Contact Information</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <form action=\"#\">
                <div class=\"row animate-box\">
                    <div class=\"col-md-6\">
                        <h3 class=\"section-title\">Our Address</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class=\"contact-info\">
                            <li><i class=\"icon-location-pin\"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class=\"icon-phone2\"></i>+ 1235 2355 98</li>
                            <li><i class=\"icon-mail\"></i><a href=\"#\">info@yoursite.com</a></li>
                            <li><i class=\"icon-globe2\"></i><a href=\"#\">www.yoursite.com</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <textarea name=\"\" class=\"form-control\" id=\"\" cols=\"30\" rows=\"7\" placeholder=\"Message\"></textarea>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "Front/reclamation.html.twig", "C:\\Users\\asus\\escapade\\templates\\Front\\reclamation.html.twig");
    }
}
