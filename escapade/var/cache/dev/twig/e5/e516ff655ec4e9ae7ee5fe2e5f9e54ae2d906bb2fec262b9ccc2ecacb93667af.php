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

/* facture/index.html.twig */
class __TwigTemplate_b1688466060942cf92697233b8af264029f8f0dfd32a31812946ac524ea578f5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "facture/index.html.twig", 1);
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
        echo "    <h1>Liste des factures</h1>
    <form>
        <div class=\"container\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"search\" class=\"form-control bg-light border-1 \" placeholder=\"Search for...\"
                       aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>

                </div>
            </div>
        </div>
    </form>

    <div class=\"container\" id=\"all\">
        ";
        // line 22
        $this->loadTemplate("facture/factureAjax.html.twig", "facture/index.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
    <br>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script
            src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"), "html", null, true);
        echo "\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("factureAjax");
        echo "\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  98 => 27,  93 => 25,  89 => 23,  87 => 22,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}


{% block content %}
    <h1>Liste des factures</h1>
    <form>
        <div class=\"container\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"search\" class=\"form-control bg-light border-1 \" placeholder=\"Search for...\"
                       aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>

                </div>
            </div>
        </div>
    </form>

    <div class=\"container\" id=\"all\">
        {% include 'facture/factureAjax.html.twig' %}
    </div>
    <br>
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script
            src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js')}}\">
    </script>
    <script>
        \$( document ).ready(function() {
            var currentRequest = null;
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                if(currentRequest != null) {
                    currentRequest.abort();
                }
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                currentRequest = \$.ajax({
                    url : \"{{ path('factureAjax') }}\",
                    type : 'GET',
                    data: {
                        'searchValue' : value
                    },
                    success : function(retour)
                    {
                        \$('#all').html(retour);
                    },
                });
                return false;
            });
        });
    </script>
{% endblock %}
", "facture/index.html.twig", "C:\\Users\\asus\\escapade\\templates\\facture\\index.html.twig");
    }
}
