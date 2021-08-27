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

/* C:\xampp\htdocs\quemari/themes/quemari/layouts/Layout.htm */
class __TwigTemplate_2057fb66f137dde8d11ad34124886c156a7195a3d550a2b33277f5b052ed14b3 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\" type=\"image/x-icon\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;display=swap\" rel=\"stylesheet\">
    <!-- Mapa -->
    <link rel=\"stylesheet\" href=\"jquery-jvectormap-2.0.1.css\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery-jvectormap-2.0.5.css");
        echo "\">
    
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/bootstrap/css/bootstrap.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/fullpage/fullpage.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/elagent-icon/style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assetes/vendors/animation/animate.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/magnify-popup/magnific-popup.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/swiper/swiper.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/spiling/splitting.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/custom.css");
        echo "\">
    <title>Quemari</title>
</head>
<body>
    
    <div id=\"wrapper\">
        <!-- Header -->
        ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "       
    
        <div class=\"main\">
        <!-- Content -->
            ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 37
        echo "        </div>
    
        <!-- Footer -->
        ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            
    </div><!-- End #wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.2.1.min.js");
        echo "\"></script>
    <script src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/bootstrap/js/popper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/bootstrap/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/fullpage/scroll-overflow.js");
        echo "\"></script>
    <script src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/wow/wow.min.js");
        echo "\"></script>
    <script src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/fullpage/fullpage.js");
        echo "\"></script>
    <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/parallax.js");
        echo "\"></script>
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/particale/particles.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/particale/app.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/magnify-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/swiper/swiper.min.js");
        echo "\"></script>
    <script src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendors/spiling/splitting.min.js");
        echo "\"></script>
    <script src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/universal-tilt.js");
        echo "\"></script>
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-jvectormap-2.0.5.js");
        echo "\"></script>
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-jvectormap-world-mill-en.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/layouts/Layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 61,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  125 => 41,  121 => 40,  116 => 37,  114 => 36,  105 => 32,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\" type=\"image/x-icon\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;display=swap\" rel=\"stylesheet\">
    <!-- Mapa -->
    <link rel=\"stylesheet\" href=\"jquery-jvectormap-2.0.1.css\" type=\"text/css\" media=\"screen\"/>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery-jvectormap-2.0.5.css'|theme }}\">
    
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/bootstrap/css/bootstrap.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/fullpage/fullpage.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/elagent-icon/style.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assetes/vendors/animation/animate.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/magnify-popup/magnific-popup.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/swiper/swiper.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/vendors/spiling/splitting.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\">
    <title>Quemari</title>
</head>
<body>
    
    <div id=\"wrapper\">
        <!-- Header -->
        {% partial 'site/header' %}       
    
        <div class=\"main\">
        <!-- Content -->
            {% page %}
        </div>
    
        <!-- Footer -->
        {% partial 'site/footer' %}
            
    </div><!-- End #wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"{{ 'assets/js/jquery-3.2.1.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/bootstrap/js/popper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/bootstrap/js/bootstrap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/fullpage/scroll-overflow.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/wow/wow.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/fullpage/fullpage.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/parallax.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/particale/particles.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/particale/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/magnify-popup/jquery.magnific-popup.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/swiper/swiper.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendors/spiling/splitting.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/universal-tilt.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery-jvectormap-2.0.5.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery-jvectormap-world-mill-en.js'|theme }}\"></script>
</body>
</html>", "C:\\xampp\\htdocs\\quemari/themes/quemari/layouts/Layout.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 32, "page" => 36);
        static $filters = array("theme" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
