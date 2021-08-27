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

/* C:\xampp\htdocs\quemari/themes/quemari/partials/site/footer.htm */
class __TwigTemplate_885d8e95bbc010e15cb89dcbfd474a432dde5699bb1ad85704298cb24a202e15 extends \Twig\Template
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
        echo "<footer class=\"full_footer p_absoulte\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-3\">
                    <ul class=\"list-unstyled social_icon social_icon_two\">
                        <li><a href=\"https://www.facebook.com/ConsultoriayDesarrolloQuemari/\"><i class=\"social_facebook\" target=\"_blank\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/consultoriaydesarrolloquemari/\"><i class=\"social_instagram\" target=\"_blank\"></i></a></li>
                        <li><a href=\"https://www.linkedin.com/company/consultor%C3%ADa-y-desarrollo-quem%C3%A1ri/?originalSubdomain=mx\"><i class=\"social_linkedin\" target=\"_blank\"></i></a></li>
                    </ul>
                </div>
                
                <div class=\"col-sm-6 col-6\">
                    <div class=\"copyright\">&copy; 2020 <a href=\"www.quemari.com\">Consultoría y desarrollo Quemári</a>. Todos los derechos reservados</div>
                </div>
                <div class=\"col-sm-3 col-3\">
                    <div class=\"pr_details_nav h_slider_nav align-items-center\">
                        <span class=\"prev\" id=\"moveUp\">Prev</span>
                        <span class=\"next moveUp\" id=\"moveDown\">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"full_footer p_absoulte\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-sm-3 col-3\">
                    <ul class=\"list-unstyled social_icon social_icon_two\">
                        <li><a href=\"https://www.facebook.com/ConsultoriayDesarrolloQuemari/\"><i class=\"social_facebook\" target=\"_blank\"></i></a></li>
                        <li><a href=\"https://www.instagram.com/consultoriaydesarrolloquemari/\"><i class=\"social_instagram\" target=\"_blank\"></i></a></li>
                        <li><a href=\"https://www.linkedin.com/company/consultor%C3%ADa-y-desarrollo-quem%C3%A1ri/?originalSubdomain=mx\"><i class=\"social_linkedin\" target=\"_blank\"></i></a></li>
                    </ul>
                </div>
                
                <div class=\"col-sm-6 col-6\">
                    <div class=\"copyright\">&copy; 2020 <a href=\"www.quemari.com\">Consultoría y desarrollo Quemári</a>. Todos los derechos reservados</div>
                </div>
                <div class=\"col-sm-3 col-3\">
                    <div class=\"pr_details_nav h_slider_nav align-items-center\">
                        <span class=\"prev\" id=\"moveUp\">Prev</span>
                        <span class=\"next moveUp\" id=\"moveDown\">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>", "C:\\xampp\\htdocs\\quemari/themes/quemari/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
