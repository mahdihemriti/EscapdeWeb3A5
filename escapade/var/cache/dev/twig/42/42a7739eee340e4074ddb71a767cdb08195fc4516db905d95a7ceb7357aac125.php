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

/* hotel/index.html.twig */
class __TwigTemplate_79fa08d573bd883460d90f420a4211ae1c4c41970d8e96ddb221abe68728cc14 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
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
        echo "    <div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Book A Flight</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row row-bottom-padded-md\">
                <div class=\"col-md-12 animate-box\">
                    <h2 class=\"heading-title\">Todays Flight Deal</h2>
                </div>
                <div class=\"col-md-6 animate-box\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h4>Better Deals, More Abilities</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class=\"col-md-12\">
                            <h4>Keep up with the news of your airline</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class=\"col-md-12\">
                            <h4>In-Flight Experience</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 animate-box\">
                    <img class=\"img-responsive\" src=\"images/cover_bg_3.jpg\" alt=\"travel\">
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">United States Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-MNL</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$1000
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">Qatar Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-MNL</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$790
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">Philippine Airline</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>MNL-HK</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$500
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">China Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-LAS</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$900
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
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
                    <div href=\"#\"><img src=\"images/place-4.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
                    <div href=\"#\"><img src=\"images/place-5.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
                    <div href=\"#\"><img src=\"images/place-6.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
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
                    <h3>Book A Flight</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row row-bottom-padded-md\">
                <div class=\"col-md-12 animate-box\">
                    <h2 class=\"heading-title\">Todays Flight Deal</h2>
                </div>
                <div class=\"col-md-6 animate-box\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h4>Better Deals, More Abilities</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class=\"col-md-12\">
                            <h4>Keep up with the news of your airline</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class=\"col-md-12\">
                            <h4>In-Flight Experience</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 animate-box\">
                    <img class=\"img-responsive\" src=\"images/cover_bg_3.jpg\" alt=\"travel\">
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">United States Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-MNL</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$1000
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">Qatar Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-MNL</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$790
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">Philippine Airline</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>MNL-HK</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$500
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
                    <a href=\"#\" class=\"flight-book\">
                        <div class=\"plane-name\">
                            <span class=\"p-flight\">China Airways</span>
                        </div>
                        <div class=\"desc\">
                            <div class=\"left\">
                                <h4>HK-LAS</h4>
                                <span>Dec 20 - Dec29</span>
                            </div>
                            <div class=\"right\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down22\"></i>
\t\t\t\t\t\t\t\t\t\t\$900
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </div>
                    </a>
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
                    <div href=\"#\"><img src=\"images/place-4.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
                    <div href=\"#\"><img src=\"images/place-5.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
                    <div href=\"#\"><img src=\"images/place-6.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
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
    </div>
{% endblock %}
", "hotel/index.html.twig", "C:\\Users\\asus\\escapade\\templates\\hotel\\index.html.twig");
    }
}
