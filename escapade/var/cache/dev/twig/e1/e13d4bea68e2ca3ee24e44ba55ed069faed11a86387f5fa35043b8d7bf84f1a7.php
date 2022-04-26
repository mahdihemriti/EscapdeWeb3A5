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

/* promotion/promotionFront.html.twig */
class __TwigTemplate_4c28de91b331107905f69582307c594da10247a7e804dbbc7e220e08c5f2aad5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/promotionFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "promotion/promotionFront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "promotion/promotionFront.html.twig", 1);
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
        echo "    <div class=\"fh5co-hero\">


    <div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Nos promotions</h3>
                    <p>L'aventure en vaut la peine</p>
                </div>
            </div>

            <div class=\"row\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 18
            echo "
                <div class=\"col-md-6 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                    <div href=\"#\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/1.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\">
                        <div class=\"desc\">
                            <h3>Taux: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "taux", [], "any", false, false, false, 22), "html", null, true);
            echo " %</h3>
                            <span>Date début : ";
            // line 23
            ((twig_get_attribute($this->env, $this->source, $context["promotion"], "datedebut", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datedebut", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                            <span class=\"price\">Date Fin: ";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["promotion"], "datefin", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "datefin", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                        </div>
                    </div>
                </div>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
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
        return "promotion/promotionFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 31,  104 => 24,  100 => 23,  96 => 22,  91 => 20,  87 => 18,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"fh5co-hero\">


    <div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Nos promotions</h3>
                    <p>L'aventure en vaut la peine</p>
                </div>
            </div>

            <div class=\"row\">
    {% for promotion in promotions %}

                <div class=\"col-md-6 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                    <div href=\"#\"><img src=\"{{ asset('images/1.jpg') }}\" class=\"img-responsive\">
                        <div class=\"desc\">
                            <h3>Taux: {{ promotion.taux }} %</h3>
                            <span>Date début : {{ promotion.datedebut ? promotion.datedebut|date('Y-m-d') : '' }}</span>
                            <span class=\"price\">Date Fin: {{ promotion.datefin ? promotion.datefin|date('Y-m-d') : '' }}</span>
                        </div>
                    </div>
                </div>


                {% endfor %}

        </div>
        </div>
    </div>
    </div>



{% endblock %}", "promotion/promotionFront.html.twig", "C:\\Users\\asus\\escapade\\templates\\promotion\\promotionFront.html.twig");
    }
}
