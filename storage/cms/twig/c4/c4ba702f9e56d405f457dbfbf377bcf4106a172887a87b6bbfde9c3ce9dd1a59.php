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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/section_seven.htm */
class __TwigTemplate_fd8879c4b0bd91d53571f32736d19dcfe705def43b532d3b975872380b2be1dc extends \Twig\Template
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
        echo "<div class=\"section wave_two_section_seven\">
            <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/round.png");
        echo "\" alt=\"\"></div>
            <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/clients_plan.png");
        echo "\" alt=\"\"></div>
            <div class=\"t_three p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/blue_plan.png");
        echo "\" alt=\"\"></div>
            <img class=\"dot_one p_absoulte\" src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/dot.png");
        echo "\" alt=\"\">
            <img class=\"dot_two p_absoulte\" src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home_three/dot-1.png");
        echo "\" alt=\"\">
            <div class=\"intro\">
                <div class=\"container custom_container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two w_contact_text\">
                                <h2 style=\"font-size:20px; width: 300px;\">Informacion de contacto</h2>
                                <ul class=\"list-unstyled w_contact_info\">
                                    <li><i class=\"icon_phone\"></i><a href=\"tel:+524776401479\">(52+)4776401479</a> </li>
                                </ul>
                                <ul class=\"list-unstyled w_contact_info\">
                                    <li><i class=\"icon_mail_alt\"></i><a href=\"mailto:info@quemari.com\">info@quemari.com</a></li>
                                </ul>
                                <ul class=\"list-unstyled w_contact_info\" style=\"width:350px; heigth:250px;\">
                                    <li><i class=\"icon_pin_alt\"></i>San Francisco #104-B Col. La Martinica<br>Leon, Gto.<br>CP 37020</li>
                                </ul>
                            </div>    
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two w_contact_text\">
                                <figure class=\"footer-logo\"><a href=\"/\"><img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logoBlanco.png");
        echo "\" style=\"width:350px; heigth:250px;\" alt=\"\"></a></figure>
                                <p>Para empresas, negocios y emprendedores que quieren crear una presencia en linea, Consultoria y Desarrollo Quemari es una empresa que cuenta con el personal especializado en tecnologia, procesos y valores a diferencia de empresas, partners o freelance que solo buscan un interes economico y no el ccrecimiento de tu empresa.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_seven.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"section wave_two_section_seven\">
            <div class=\"t_first p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/round.png'|theme }}\" alt=\"\"></div>
            <div class=\"t_two p_absoulte\"><img class=\"layer layer2\" data-depth=\"0.20\" src=\"{{ 'assets/img/home_three/clients_plan.png'|theme }}\" alt=\"\"></div>
            <div class=\"t_three p_absoulte\"><img class=\"layer layer2\" data-depth=\"-0.20\" src=\"{{ 'assets/img/home_three/blue_plan.png'|theme }}\" alt=\"\"></div>
            <img class=\"dot_one p_absoulte\" src=\"{{ 'assets/img/home_three/dot.png'|theme }}\" alt=\"\">
            <img class=\"dot_two p_absoulte\" src=\"{{ 'assets/img/home_three/dot-1.png'|theme }}\" alt=\"\">
            <div class=\"intro\">
                <div class=\"container custom_container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two w_contact_text\">
                                <h2 style=\"font-size:20px; width: 300px;\">Informacion de contacto</h2>
                                <ul class=\"list-unstyled w_contact_info\">
                                    <li><i class=\"icon_phone\"></i><a href=\"tel:+524776401479\">(52+)4776401479</a> </li>
                                </ul>
                                <ul class=\"list-unstyled w_contact_info\">
                                    <li><i class=\"icon_mail_alt\"></i><a href=\"mailto:info@quemari.com\">info@quemari.com</a></li>
                                </ul>
                                <ul class=\"list-unstyled w_contact_info\" style=\"width:350px; heigth:250px;\">
                                    <li><i class=\"icon_pin_alt\"></i>San Francisco #104-B Col. La Martinica<br>Leon, Gto.<br>CP 37020</li>
                                </ul>
                            </div>    
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"w_content_two w_contact_text\">
                                <figure class=\"footer-logo\"><a href=\"/\"><img src=\"{{'assets/img/logoBlanco.png'|theme}}\" style=\"width:350px; heigth:250px;\" alt=\"\"></a></figure>
                                <p>Para empresas, negocios y emprendedores que quieren crear una presencia en linea, Consultoria y Desarrollo Quemari es una empresa que cuenta con el personal especializado en tecnologia, procesos y valores a diferencia de empresas, partners o freelance que solo buscan un interes economico y no el ccrecimiento de tu empresa.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/section_seven.htm", "");
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
