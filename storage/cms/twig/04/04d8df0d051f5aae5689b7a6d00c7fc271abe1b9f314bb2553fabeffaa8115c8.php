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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_five.htm */
class __TwigTemplate_fdb8e297452c08c83b1cba3de9f6cc78f10a48f3699df6a1d1392f4357ab957c extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_five\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/wave.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/blue_plan.png");
        echo "\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\">Socios Estrategicos</h2>
            <div class=\"sc_clients_logo_info\">
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/asegel.jpg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/blue.jpg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/genero.jpg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/logoSIMX.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/SPEARHEAD.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/TECVINT.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/socios/VMImpactoVisual.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_five.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_five\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/wave.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"{{ 'assets/img/home_three/blue_plan.png'|theme }}\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\">Socios Estrategicos</h2>
            <div class=\"sc_clients_logo_info\">
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/asegel.jpg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/blue.jpg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/genero.jpg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/logoSIMX.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/SPEARHEAD.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/TECVINT.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/socios/VMImpactoVisual.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_five.htm", "");
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
