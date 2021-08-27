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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_four.htm */
class __TwigTemplate_96eb1883f175c522815889b029f10a892e44b0ef0392177a242470aec0e19ea0 extends \Twig\Template
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
        echo "<div class=\"section wave_one_section_four wave_two_section_four\">
    <div class=\"bg-title\">
        <div class=\"layer layer2\" data-depth=\"-0.20\">Que Mari</div>
    </div>
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/h_pijom1.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.50\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/plan.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_four p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/h_pijom2.png");
        echo "\" alt=\"\"></div>
    <div class=\"t_five p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.10\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/triangle_shap_five.png");
        echo "\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"w_content_two\">
                        <h2>PORTAFOLIO</h2>
                        <p>Somo una empresa especializada en servicios de consultoria y desarrollo de Tecnologia de la informacion y procesos de negocio, originaria de la ciudad de León Guanajuato. Nuestra mision es generar servicios que brinden un valor agregado para negocios, aplicando metodlogias internacionales y los mas altos estandares disponibles. Establecemos relaciones comerciales a largo plazo con nuestros clientes, brindandoles ideas innovadoras, recursos y soluciones para mejorar el rendimiento de su negocio, optimizar su trabajo y dar un nuevo impulso al rendimiento general.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"w_mockup_img\">
                        <div class=\"img_screen one\"><img src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/screen_three.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"img_screen two\"><img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/screen_two.jpg");
        echo "\" alt=\"\"></div>
                        <div class=\"img_screen three\"><img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/screen_two.jpg");
        echo "\" alt=\"\"></div>
                        <img class=\"img_four\" src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/code.jpg");
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
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_four.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  80 => 22,  76 => 21,  72 => 20,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_one_section_four wave_two_section_four\">
    <div class=\"bg-title\">
        <div class=\"layer layer2\" data-depth=\"-0.20\">Que Mari</div>
    </div>
    <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/h_pijom1.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.50\" src=\"{{ 'assets/img/home_three/plan.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_four p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.30\" src=\"{{ 'assets/img/home_three/h_pijom2.png'|theme }}\" alt=\"\"></div>
    <div class=\"t_five p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.10\" src=\"{{ 'assets/img/home_one/triangle_shap_five.png'|theme }}\" alt=\"\"></div>
    <div class=\"intro\">
        <div class=\"container custom_container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <div class=\"w_content_two\">
                        <h2>PORTAFOLIO</h2>
                        <p>Somo una empresa especializada en servicios de consultoria y desarrollo de Tecnologia de la informacion y procesos de negocio, originaria de la ciudad de León Guanajuato. Nuestra mision es generar servicios que brinden un valor agregado para negocios, aplicando metodlogias internacionales y los mas altos estandares disponibles. Establecemos relaciones comerciales a largo plazo con nuestros clientes, brindandoles ideas innovadoras, recursos y soluciones para mejorar el rendimiento de su negocio, optimizar su trabajo y dar un nuevo impulso al rendimiento general.</p>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"w_mockup_img\">
                        <div class=\"img_screen one\"><img src=\"{{ 'assets/img/home_one/screen_three.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"img_screen two\"><img src=\"{{ 'assets/img/home_one/screen_two.jpg'|theme }}\" alt=\"\"></div>
                        <div class=\"img_screen three\"><img src=\"{{ 'assets/img/home_one/screen_two.jpg'|theme }}\" alt=\"\"></div>
                        <img class=\"img_four\" src=\"{{ 'assets/img/home_one/code.jpg'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_four.htm", "");
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
