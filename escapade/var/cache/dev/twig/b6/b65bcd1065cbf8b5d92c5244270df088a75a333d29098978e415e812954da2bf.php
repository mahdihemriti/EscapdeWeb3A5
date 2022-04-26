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

/* home/index.html.twig */
class __TwigTemplate_122ad504612c056f457fe65cca72f6a12fdf602b0e34700deb7b8dd818a2a21c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        <div class=\"fh5co-overlay\"></div>
        <div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
            <div class=\"desc\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-5 col-md-5\">
                            <div class=\"tabulation animate-box\">

                                <!-- Nav tabs -->
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li role=\"presentation\" class=\"active\">
                                        <a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">Flights</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">Hotels</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"#packages\" aria-controls=\"packages\" role=\"tab\" data-toggle=\"tab\">Packages</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"flights\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">From:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">To:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Check In:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Check Out:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Class:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>Economy</option>
                                                        <option value=\"economy\">Economy</option>
                                                        <option value=\"first\">First</option>
                                                        <option value=\"business\">Business</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Flight\">
                                            </div>
                                        </div>
                                    </div>

                                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"hotels\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-12 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">City:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Return:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Check Out:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Rooms:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"economy\">1</option>
                                                        <option value=\"first\">2</option>
                                                        <option value=\"business\">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Hotel\">
                                            </div>
                                        </div>
                                    </div>

                                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"packages\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">City:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">Destination:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Departs:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Return:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Rooms:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"economy\">1</option>
                                                        <option value=\"first\">2</option>
                                                        <option value=\"business\">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Packages\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"desc2 animate-box\">
                            <div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
                                <p>HandCrafted by <a href=\"http://frehtml5.co/\" target=\"_blank\" class=\"fh5co-site-name\">FreeHTML5.co</a></p>
                                <h2>Exclusive Limited Time Offer</h2>
                                <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                                <span class=\"price\">\$599</span>
                                <!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Hot Tours</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                    <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                        <div class=\"desc\">
                            <span></span>
                            <h3>New York</h3>
                            <span>3 nights + Flight 5*Hotel</span>
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
                            <span>4 nights + Flight 5*Hotel</span>
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
                            <span>2 nights + Flight 4*Hotel</span>
                            <span class=\"price\">\$1,000</span>
                            <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 text-center animate-box\">
                    <p><a class=\"btn btn-primary btn-outline btn-lg\" href=\"#\">See All Offers <i class=\"icon-arrow-right22\"></i></a></p>
                </div>
            </div>
        </div>
    </div>

    <div id=\"fh5co-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">

                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-hotairballoon\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Family Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Travel Plans</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-wallet\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Honeymoon</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">

                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-wine\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Business Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-genius\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Solo Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-chat\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Explorer</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=\"fh5co-destination\">
        <div class=\"tour-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul id=\"fh5co-destination-list\" class=\"animate-box\">
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-1.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Los Angeles</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-2.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Hongkong</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-3.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Italy</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-4.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Philippines</h2>
                                </div>
                            </a>
                        </li>

                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-5.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Japan</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-half text-center\">
                            <div class=\"title-bg\">
                                <div class=\"case-studies-summary\">
                                    <h2>Most Popular Destinations</h2>
                                    <span><a href=\"#\">View All Destinations</a></span>
                                </div>
                            </div>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-6.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Paris</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-7.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Singapore</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-8.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Madagascar</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-9.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Egypt</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-10.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Indonesia</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Recent From Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row row-bottom-padded-md\">
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-1.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">30% Discount to Travel All Around the World</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-2.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">Planning for Vacation</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-3.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">Visit Tokyo Japan</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-md-block\"></div>
            </div>

            <div class=\"col-md-12 text-center animate-box\">
                <p><a class=\"btn btn-primary btn-outline btn-lg\" href=\"#\">See All Post <i class=\"icon-arrow-right22\"></i></a></p>
            </div>

        </div>
    </div>
    <!-- fh5co-blog-section -->
    <div id=\"fh5co-testimonial\" style=\"background-image:url(images/img_bg_1.jpg);\">
        <div class=\"container\">
            <div class=\"row animate-box\">
                <div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
                    </div>


                </div>
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, Founder <a href=\"#\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
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
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"fh5co-hero\">
        <div class=\"fh5co-overlay\"></div>
        <div class=\"fh5co-cover\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/cover_bg_1.jpg);\">
            <div class=\"desc\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-5 col-md-5\">
                            <div class=\"tabulation animate-box\">

                                <!-- Nav tabs -->
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li role=\"presentation\" class=\"active\">
                                        <a href=\"#flights\" aria-controls=\"flights\" role=\"tab\" data-toggle=\"tab\">Flights</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"#hotels\" aria-controls=\"hotels\" role=\"tab\" data-toggle=\"tab\">Hotels</a>
                                    </li>
                                    <li role=\"presentation\">
                                        <a href=\"#packages\" aria-controls=\"packages\" role=\"tab\" data-toggle=\"tab\">Packages</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class=\"tab-content\">
                                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"flights\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">From:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">To:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Check In:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Check Out:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Class:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>Economy</option>
                                                        <option value=\"economy\">Economy</option>
                                                        <option value=\"first\">First</option>
                                                        <option value=\"business\">Business</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Flight\">
                                            </div>
                                        </div>
                                    </div>

                                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"hotels\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-12 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">City:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Return:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Check Out:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Rooms:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"economy\">1</option>
                                                        <option value=\"first\">2</option>
                                                        <option value=\"business\">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Hotel\">
                                            </div>
                                        </div>
                                    </div>

                                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"packages\">
                                        <div class=\"row\">
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">City:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"from-place\" placeholder=\"Los Angeles, USA\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <div class=\"input-field\">
                                                    <label for=\"from\">Destination:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"to-place\" placeholder=\"Tokyo, Japan\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-start\">Departs:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-start\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt alternate\">
                                                <div class=\"input-field\">
                                                    <label for=\"date-end\">Return:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"date-end\" placeholder=\"mm/dd/yyyy\"/>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 mt\">
                                                <section>
                                                    <label for=\"class\">Rooms:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"economy\">1</option>
                                                        <option value=\"first\">2</option>
                                                        <option value=\"business\">3</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Adult:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xxs-12 col-xs-6 mt\">
                                                <section>
                                                    <label for=\"class\">Children:</label>
                                                    <select class=\"cs-select cs-skin-border\">
                                                        <option value=\"\" disabled selected>1</option>
                                                        <option value=\"1\">1</option>
                                                        <option value=\"2\">2</option>
                                                        <option value=\"3\">3</option>
                                                        <option value=\"4\">4</option>
                                                    </select>
                                                </section>
                                            </div>
                                            <div class=\"col-xs-12\">
                                                <input type=\"submit\" class=\"btn btn-primary btn-block\" value=\"Search Packages\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class=\"desc2 animate-box\">
                            <div class=\"col-sm-7 col-sm-push-1 col-md-7 col-md-push-1\">
                                <p>HandCrafted by <a href=\"http://frehtml5.co/\" target=\"_blank\" class=\"fh5co-site-name\">FreeHTML5.co</a></p>
                                <h2>Exclusive Limited Time Offer</h2>
                                <h3>Fly to Hong Kong via Los Angeles, USA</h3>
                                <span class=\"price\">\$599</span>
                                <!-- <p><a class=\"btn btn-primary btn-lg\" href=\"#\">Get Started</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id=\"fh5co-tours\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Hot Tours</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 fh5co-tours animate-box\" data-animate-effect=\"fadeIn\">
                    <div href=\"#\"><img src=\"images/place-1.jpg\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                        <div class=\"desc\">
                            <span></span>
                            <h3>New York</h3>
                            <span>3 nights + Flight 5*Hotel</span>
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
                            <span>4 nights + Flight 5*Hotel</span>
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
                            <span>2 nights + Flight 4*Hotel</span>
                            <span class=\"price\">\$1,000</span>
                            <a class=\"btn btn-primary btn-outline\" href=\"#\">Book Now <i class=\"icon-arrow-right22\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-12 text-center animate-box\">
                    <p><a class=\"btn btn-primary btn-outline btn-lg\" href=\"#\">See All Offers <i class=\"icon-arrow-right22\"></i></a></p>
                </div>
            </div>
        </div>
    </div>

    <div id=\"fh5co-features\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">

                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-hotairballoon\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Family Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-search\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Travel Plans</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-wallet\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Honeymoon</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4 animate-box\">

                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-wine\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Business Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>

                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-genius\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Solo Travel</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>

                </div>
                <div class=\"col-md-4 animate-box\">
                    <div class=\"feature-left\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-chat\"></i>
\t\t\t\t\t\t\t</span>
                        <div class=\"feature-copy\">
                            <h3>Explorer</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                            <p><a href=\"#\">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id=\"fh5co-destination\">
        <div class=\"tour-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <ul id=\"fh5co-destination-list\" class=\"animate-box\">
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-1.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Los Angeles</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-2.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Hongkong</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-3.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Italy</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-4.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Philippines</h2>
                                </div>
                            </a>
                        </li>

                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-5.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Japan</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-half text-center\">
                            <div class=\"title-bg\">
                                <div class=\"case-studies-summary\">
                                    <h2>Most Popular Destinations</h2>
                                    <span><a href=\"#\">View All Destinations</a></span>
                                </div>
                            </div>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-6.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Paris</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-7.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Singapore</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-8.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Madagascar</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-9.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Egypt</h2>
                                </div>
                            </a>
                        </li>
                        <li class=\"one-forth text-center\" style=\"background-image: url(images/place-10.jpg); \">
                            <a href=\"#\">
                                <div class=\"case-studies-summary\">
                                    <h2>Indonesia</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id=\"fh5co-blog-section\" class=\"fh5co-section-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
                    <h3>Recent From Blog</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row row-bottom-padded-md\">
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-1.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">30% Discount to Travel All Around the World</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-2.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">Planning for Vacation</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-sm-block\"></div>
                <div class=\"col-lg-4 col-md-4 col-sm-6\">
                    <div class=\"fh5co-blog animate-box\">
                        <a href=\"#\"><img class=\"img-responsive\" src=\"images/place-3.jpg\" alt=\"\"></a>
                        <div class=\"blog-text\">
                            <div class=\"prod-title\">
                                <h3><a href=\"#\">Visit Tokyo Japan</a></h3>
                                <span class=\"posted_by\">Sep. 15th</span>
                                <span class=\"comment\"><a href=\"\">21<i class=\"icon-bubble2\"></i></a></span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <p><a href=\"#\">Learn More...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"clearfix visible-md-block\"></div>
            </div>

            <div class=\"col-md-12 text-center animate-box\">
                <p><a class=\"btn btn-primary btn-outline btn-lg\" href=\"#\">See All Post <i class=\"icon-arrow-right22\"></i></a></p>
            </div>

        </div>
    </div>
    <!-- fh5co-blog-section -->
    <div id=\"fh5co-testimonial\" style=\"background-image:url(images/img_bg_1.jpg);\">
        <div class=\"container\">
            <div class=\"row animate-box\">
                <div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
                    <h2>Happy Clients</h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
                    </div>

                </div>
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, CEO <a href=\"http://freehtml5.co/\" target=\"_blank\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
                    </div>


                </div>
                <div class=\"col-md-4\">
                    <div class=\"box-testimony animate-box\">
                        <blockquote>
                            <span class=\"quote\"><span><i class=\"icon-quotes-right\"></i></span></span>
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                        <p class=\"author\">John Doe, Founder <a href=\"#\">FREEHTML5.co</a> <span class=\"subtext\">Creative Director</span></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "home/index.html.twig", "C:\\Users\\asus\\escapade\\templates\\home\\index.html.twig");
    }
}
