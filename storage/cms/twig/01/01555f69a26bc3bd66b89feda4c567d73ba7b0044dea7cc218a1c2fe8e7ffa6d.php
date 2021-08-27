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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_one.htm */
class __TwigTemplate_a326b1434f40a35aa90888a4805f04b9ca10621ffb92d0dfae05559b25a05c0d extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_one\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/tr_one.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/tr_three.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_three p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/tr_two.png");
        echo "\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"w_content\">
                        <img class=\"circle_line\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/circle_line.png");
        echo "\" alt=\"\">
                            <h2 class=\"wow\">Creative Agency</h2>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"w_img_table text-center\">
                        <img class=\"first p_absoulte\" src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/banner/Asset1.png");
        echo "\" alt=\"\">
                        <img class=\"two p_absoulte\" src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/banner/Asset2.png");
        echo "\" alt=\"\">
                        <img class=\"flower p_absoulte\" src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/banner/Asset3.png");
        echo "\" alt=\"\">
                        <img class=\"laptop p_absoulte is-animated\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/banner/Asset4.png");
        echo "\" alt=\"\">
                        <img class=\"table_img wow fadeInLeft\" src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/banner/Asset5.png");
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_one.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  80 => 19,  76 => 18,  72 => 17,  68 => 16,  59 => 10,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_one\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/tr_one.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"{{ 'assets/img/home_three/tr_three.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_three p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"{{ 'assets/img/home_three/tr_two.png'|theme }}\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"w_content\">
                        <img class=\"circle_line\" src=\"{{ 'assets/img/home_one/circle_line.png'|theme }}\" alt=\"\">
                            <h2 class=\"wow\">Creative Agency</h2>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"w_img_table text-center\">
                        <img class=\"first p_absoulte\" src=\"{{'assets/img/home_three/banner/Asset1.png'|theme }}\" alt=\"\">
                        <img class=\"two p_absoulte\" src=\"{{'assets/img/home_three/banner/Asset2.png'|theme }}\" alt=\"\">
                        <img class=\"flower p_absoulte\" src=\"{{'assets/img/home_three/banner/Asset3.png'|theme }}\" alt=\"\">
                        <img class=\"laptop p_absoulte is-animated\" src=\"{{'assets/img/home_three/banner/Asset4.png'|theme }}\" alt=\"\">
                        <img class=\"table_img wow fadeInLeft\" src=\"{{'assets/img/home_three/banner/Asset5.png'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_one.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 2);
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
