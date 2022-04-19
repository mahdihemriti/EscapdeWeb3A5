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

/* back/login.html.twig */
class __TwigTemplate_8ce1f0a8748975012eb15d0ee2ff316a9b68185ce9df11bc0ae9ecc56702dab4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href=\"back/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"back/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div  class=\"col-lg-6 d-none d-lg-block\">
                            <img src=\"images/log.jpg\" width=\"400\" >
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                </div>
                                <form class=\"user\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control form-control-user\"
                                               id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                               placeholder=\"Enter Email Address...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                               id=\"exampleInputPassword\" placeholder=\"Password\">
                                    </div>

                                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                                        Login
                                    </a>


                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscrit");
        echo "\">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src=\"back/vendor/jquery/jquery.min.js\"></script>
<script src=\"back/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"back/vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"back/js/sb-admin-2.min.js\"></script>

</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "back/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 68,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href=\"back/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link
            href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
            rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"back/css/sb-admin-2.min.css\" rel=\"stylesheet\">

</head>

<body class=\"bg-gradient-primary\">

<div class=\"container\">

    <!-- Outer Row -->
    <div class=\"row justify-content-center\">

        <div class=\"col-xl-10 col-lg-12 col-md-9\">

            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <!-- Nested Row within Card Body -->
                    <div class=\"row\">
                        <div  class=\"col-lg-6 d-none d-lg-block\">
                            <img src=\"images/log.jpg\" width=\"400\" >
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Welcome Back!</h1>
                                </div>
                                <form class=\"user\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control form-control-user\"
                                               id=\"exampleInputEmail\" aria-describedby=\"emailHelp\"
                                               placeholder=\"Enter Email Address...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" class=\"form-control form-control-user\"
                                               id=\"exampleInputPassword\" placeholder=\"Password\">
                                    </div>

                                    <a href=\"index.html\" class=\"btn btn-primary btn-user btn-block\">
                                        Login
                                    </a>


                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"forgot-password.html\">Forgot Password?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path ('inscrit') }}\">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src=\"back/vendor/jquery/jquery.min.js\"></script>
<script src=\"back/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

<!-- Core plugin JavaScript-->
<script src=\"back/vendor/jquery-easing/jquery.easing.min.js\"></script>

<!-- Custom scripts for all pages-->
<script src=\"back/js/sb-admin-2.min.js\"></script>

</body>

</html>
", "back/login.html.twig", "C:\\Users\\asus\\escapade\\templates\\back\\login.html.twig");
    }
}
