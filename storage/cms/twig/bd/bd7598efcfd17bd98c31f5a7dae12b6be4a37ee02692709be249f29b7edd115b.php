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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_three.htm */
class __TwigTemplate_44070ecdd047a23248bf3ba25ce29d7ff603a4d5b81e478977a16ffaa431ea8a extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_three third\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/pijom.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.50\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/plan.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_four p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/triangle.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_five p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.10\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/square.png");
        echo "\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\" style=\"margin:20px;\">Nuestros servicios</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">1.</div>
                        <img class=\"icon p_absoulte\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/software_color.png");
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                    
                        <h3>Desarrollo de software a la medida</h3>
                        <ul>
                            <li>Portal web empresarial</li>
                            <li>Desarrollo de aplicaciones moviles</li>
                            <li>Ecommerce</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">2.</div>
                        <img class=\"icon p_absoulte\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/ayuda.png");
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                        
                        <h3>Consultoria</h3>
                        <ul>
                            <li>Analisis de negocios</li>
                            <li>Procesos de negocio</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">3.</div>
                        <img class=\"icon p_absoulte\" src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/megafono_color.png");
        echo "\" alt=\"\" style=\"width:80px; height:80px;\">
                        
                        <h3>Marketing digital</h3>
                        <ul>
                            <li>Storytelling</li>
                            <li>Manejo de redes sociales</li>
                            <li>KPI´s</li>
                            <li>Marketing con influencers</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_three.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  82 => 27,  65 => 13,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_three third\">
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/pijom.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.50\" src=\"{{ 'assets/img/home_three/plan.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_four p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"{{ 'assets/img/home_three/triangle.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_five p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.10\" src=\"{{ 'assets/img/home_three/square.png'|theme }}\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <h2 class=\"s_section_title\" style=\"margin:20px;\">Nuestros servicios</h2>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">1.</div>
                        <img class=\"icon p_absoulte\" src=\"{{'assets/img/home_three/software_color.png'|theme}}\" alt=\"\" style=\"width:80px; height:80px;\">
                    
                        <h3>Desarrollo de software a la medida</h3>
                        <ul>
                            <li>Portal web empresarial</li>
                            <li>Desarrollo de aplicaciones moviles</li>
                            <li>Ecommerce</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">2.</div>
                        <img class=\"icon p_absoulte\" src=\"{{'assets/img/home_three/ayuda.png'|theme}}\" alt=\"\" style=\"width:80px; height:80px;\">
                        
                        <h3>Consultoria</h3>
                        <ul>
                            <li>Analisis de negocios</li>
                            <li>Procesos de negocio</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"scroll_service_item\">
                        <div class=\"number\">3.</div>
                        <img class=\"icon p_absoulte\" src=\"{{'assets/img/home_three/megafono_color.png'|theme}}\" alt=\"\" style=\"width:80px; height:80px;\">
                        
                        <h3>Marketing digital</h3>
                        <ul>
                            <li>Storytelling</li>
                            <li>Manejo de redes sociales</li>
                            <li>KPI´s</li>
                            <li>Marketing con influencers</li>
                        </ul>
                        <a href=\"#\" class=\"p_btn\">Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_three.htm", "");
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
