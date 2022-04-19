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

/* facture/show.html.twig */
class __TwigTemplate_c33d208e5800a8cce47ebdb360741463f832d5abbcdea4d2c7667467c8016ac4 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "facture/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Facture</h1>

    <table class=\"table\">
        <tbody>
             <tr>
                <th>Prix total</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 12, $this->source); })()), "prixtotal", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Date</th>
                <td>";
        // line 17
        ((twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>

            <tr>
                <th>Prix final</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 22, $this->source); })()), "prixfinal", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>


            <tr>
                <th>Client</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 28, $this->source); })()), "idclient", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>

                <th>Promotion</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 33, $this->source); })()), "idpromotion", [], "any", false, false, false, 33), "taux", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
             <tr>

                 <th>

                 </th>
                 <td>
                     <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_edit", ["idf" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 41, $this->source); })()), "idf", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\"><i class=\"fa fa-pen\"></i></a>
                 </td>
                 <td>
                     ";
        // line 44
        echo twig_include($this->env, $context, "facture/_delete_form.html.twig");
        echo "
                 </td>
             </tr>

        </tbody>
    </table>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
        echo "\">Retour à la liste</a>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  126 => 44,  120 => 41,  109 => 33,  101 => 28,  92 => 22,  84 => 17,  76 => 12,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}



{% block content %}
    <h1>Facture</h1>

    <table class=\"table\">
        <tbody>
             <tr>
                <th>Prix total</th>
                <td>{{ facture.prixtotal }}</td>
            </tr>

            <tr>
                <th>Date</th>
                <td>{{ facture.date ? facture.date|date('Y-m-d') : '' }}</td>
            </tr>

            <tr>
                <th>Prix final</th>
                <td>{{ facture.prixfinal }}</td>
            </tr>


            <tr>
                <th>Client</th>
                <td>{{ facture.idclient.nom }}</td>
            </tr>
            <tr>

                <th>Promotion</th>
                <td>{{ facture.idpromotion.taux }}</td>
            </tr>
             <tr>

                 <th>

                 </th>
                 <td>
                     <a href=\"{{ path('app_facture_edit', {'idf': facture.idf}) }}\"><i class=\"fa fa-pen\"></i></a>
                 </td>
                 <td>
                     {{ include('facture/_delete_form.html.twig') }}
                 </td>
             </tr>

        </tbody>
    </table>

    <a href=\"{{ path('app_facture_index') }}\">Retour à la liste</a>



{% endblock %}
", "facture/show.html.twig", "C:\\Users\\asus\\escapade\\templates\\facture\\show.html.twig");
    }
}
