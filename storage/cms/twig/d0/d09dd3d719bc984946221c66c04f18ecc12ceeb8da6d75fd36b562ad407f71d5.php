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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_six.htm */
class __TwigTemplate_86d7436c7bc25d5ebdbe0c9ffc21f54a99233e1ce99ecbad6832cca0bd729f2b extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_six\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/clients_plan_bottom.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/clients_plan.png");
        echo "\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\">CLIENTES</h2>
            <div class=\"sc_clients_logo_info\">
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/AibeFruitsTestimonios.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/apotex.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/canto.jpg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/flexbeel.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/inmsa.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/solfort.jpg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/KnowledgeTransferLLC.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/distintec.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/mueblerias_alonso.jpeg");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/cmillonario.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/clientes/intresco.png");
        echo "\" alt=\"\" style=\"max-height: 50px;\"></a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_six.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  90 => 17,  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_six\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/clients_plan_bottom.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"{{ 'assets/img/home_three/clients_plan.png'|theme }}\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\">CLIENTES</h2>
            <div class=\"sc_clients_logo_info\">
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/AibeFruitsTestimonios.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/apotex.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/canto.jpg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/flexbeel.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/inmsa.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/solfort.jpg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/KnowledgeTransferLLC.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/distintec.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/mueblerias_alonso.jpeg'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/cmillonario.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
                <a href=\"#\" class=\"c_logo_item\"><img src=\"{{ 'assets/img/clientes/intresco.png'|theme }}\" alt=\"\" style=\"max-height: 50px;\"></a>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_six.htm", "");
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
