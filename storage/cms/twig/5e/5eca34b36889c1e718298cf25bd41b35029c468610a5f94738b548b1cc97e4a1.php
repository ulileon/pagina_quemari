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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_two.htm */
class __TwigTemplate_7a40ce947b9268ee2736921438390e34caca4cebc4890da1806d7bf082dc5d22 extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_two\">
            <div id=\"particles-js\" class=\"p_absoulte\"></div>
            <img class=\"t_two p_absoulte\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_one/triangle_shap_two.png");
        echo "\" alt=\"\">
            <img class=\"t_shap p_absoulte\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/shap.png");
        echo "\" alt=\"\">
            <img class=\"b_shap p_absoulte\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/shap_two.png");
        echo "\" alt=\"\">
            <img class=\"dot_one p_absoulte\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/dot.png");
        echo "\" alt=\"\">
            <img class=\"dot_two p_absoulte\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/dot-1.png");
        echo "\" alt=\"\">
            <div class=\"text\">Quemari</div>
            <div class=\"s_round r_one p_absoulte\"></div>
            <div class=\"s_round r_two p_absoulte\"></div>
            <div class=\"s_round r_three p_absoulte\"></div>
            <div class=\"s_round r_four p_absoulte\"></div>
            <div class=\"s_round r_five p_absoulte\"></div>
            <div class=\"s_round r_six p_absoulte\"></div>
            <div class=\"s_round r_seven p_absoulte\"></div>
            <div class=\"s_round r_eight p_absoulte\"></div>
            <div class=\"s_round r_nine p_absoulte\"></div>
            <div class=\"s_round r_ten p_absoulte\"></div>
            <div class=\"s_round r_eleven p_absoulte\"></div>
            <div class=\"intro\">
                <div class=\"container custom_container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-6\">
                            <div class=\"w_portfolio_img\">
                                <div class=\"round p_absoulte\"></div>
                                <img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/odoo_applications.png");
        echo "\" alt=\"\" style=\"width:500px;heigth:5000px;\">
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two\">
                                <h2>Odoo ERP</h2>
                                <p>Odoo ERP cuenta con modulos administrativos y contables, con los cuales podras tener la indormacion importante de tu empresa en un solo lugar.</p>
                                <p>Ventas, compras, inventarios, contabilidad, facturacion electronica, manufactura, RH, ecommerce, punto de venta (Tienda y Restaurant), son algunos de los modulos con los que cuenta esta magnifica herramienta</p>
                                <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_two.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_two\">
            <div id=\"particles-js\" class=\"p_absoulte\"></div>
            <img class=\"t_two p_absoulte\" src=\"{{ 'assets/img/home_one/triangle_shap_two.png'|theme }}\" alt=\"\">
            <img class=\"t_shap p_absoulte\" src=\"{{ 'assets/img/home_three/shap.png'|theme }}\" alt=\"\">
            <img class=\"b_shap p_absoulte\" src=\"{{ 'assets/img/home_three/shap_two.png'|theme }}\" alt=\"\">
            <img class=\"dot_one p_absoulte\" src=\"{{ 'assets/img/home_three/dot.png'|theme }}\" alt=\"\">
            <img class=\"dot_two p_absoulte\" src=\"{{ 'assets/img/home_three/dot-1.png'|theme }}\" alt=\"\">
            <div class=\"text\">Quemari</div>
            <div class=\"s_round r_one p_absoulte\"></div>
            <div class=\"s_round r_two p_absoulte\"></div>
            <div class=\"s_round r_three p_absoulte\"></div>
            <div class=\"s_round r_four p_absoulte\"></div>
            <div class=\"s_round r_five p_absoulte\"></div>
            <div class=\"s_round r_six p_absoulte\"></div>
            <div class=\"s_round r_seven p_absoulte\"></div>
            <div class=\"s_round r_eight p_absoulte\"></div>
            <div class=\"s_round r_nine p_absoulte\"></div>
            <div class=\"s_round r_ten p_absoulte\"></div>
            <div class=\"s_round r_eleven p_absoulte\"></div>
            <div class=\"intro\">
                <div class=\"container custom_container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-6\">
                            <div class=\"w_portfolio_img\">
                                <div class=\"round p_absoulte\"></div>
                                <img src=\"{{ 'assets/img/home_three/odoo_applications.png'|theme }}\" alt=\"\" style=\"width:500px;heigth:5000px;\">
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two\">
                                <h2>Odoo ERP</h2>
                                <p>Odoo ERP cuenta con modulos administrativos y contables, con los cuales podras tener la indormacion importante de tu empresa en un solo lugar.</p>
                                <p>Ventas, compras, inventarios, contabilidad, facturacion electronica, manufactura, RH, ecommerce, punto de venta (Tienda y Restaurant), son algunos de los modulos con los que cuenta esta magnifica herramienta</p>
                                <a href=\"#\" class=\"p_btn\">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_two.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 3);
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
