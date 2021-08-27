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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/site/header.htm */
class __TwigTemplate_df1a14317b4ae059d350f4293350bd2c5cf155b8c91b443c4ea9488117528c47 extends \Twig\Template
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
        echo "<header class=\"header_area p_absoulte m_p\">
        <nav class=\"navbar navbar-expand-lg\" id=\"header\">
            <div class=\"container-fluid\">
                <div class=\"logo_info\">
                    <a class=\"navbar-brand logo_two\" href=\"#\"><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logoBlanco.png");
        echo "\" srcset=\"img/wlogo@2x.png 2x\" alt=\"\" style=\"width:100px;height:40px;\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/dark_logo.png");
        echo "\" srcset=\"img/dark_logo2x.png 2x\" alt=\"\"></a>
                    <div class=\"h_contact_info\">
                        <a href=\"tel:+524776401479\">(+52) 477 64 01 479</a>
                        <a href=\"mailto:info@quemari.com\">info@quemari.com</a>
                    </div>
                </div>
                ";
        // line 24
        echo "                </div>
            </div>
        </nav>
    </header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 24,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header_area p_absoulte m_p\">
        <nav class=\"navbar navbar-expand-lg\" id=\"header\">
            <div class=\"container-fluid\">
                <div class=\"logo_info\">
                    <a class=\"navbar-brand logo_two\" href=\"#\"><img src=\"{{'assets/img/logoBlanco.png'|theme}}\" srcset=\"img/wlogo@2x.png 2x\" alt=\"\" style=\"width:100px;height:40px;\"><img src=\"{{'assets/img/dark_logo.png'|theme}}\" srcset=\"img/dark_logo2x.png 2x\" alt=\"\"></a>
                    <div class=\"h_contact_info\">
                        <a href=\"tel:+524776401479\">(+52) 477 64 01 479</a>
                        <a href=\"mailto:info@quemari.com\">info@quemari.com</a>
                    </div>
                </div>
                {#<button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"menu_toggle\">
                        <span class=\"hamburger\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class=\"hamburger-cross\">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>#}
                </div>
            </div>
        </nav>
    </header>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
