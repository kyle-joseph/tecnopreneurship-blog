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

/* C:\xampp\htdocs\progvenblog/themes/progven/partials/footer.htm */
class __TwigTemplate_730dadb60515a0fc072474b3f6a4ef8bc18fa76d991eda0e68ec91412703c916 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <ul class=\"list-inline text-center\">
                <li class=\"list-inline-item\">
                    <a href=\"#\">
                        <span class=\"fa-stack fa-lg\">
                            <i class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"#\">
                        <span class=\"fa-stack fa-lg\">
                            <i class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                        </span>
                    </a>
                </li>
                <li class=\"list-inline-item\">
                    <a href=\"https://github.com/kyle-joseph\" target=\"_blank\">
                        <span class=\"fa-stack fa-lg\">
                            <i class=\"fas fa-circle fa-stack-2x\"></i>
                            <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                        </span>
                    </a>
                </li>
            </ul>
            <p class=\"copyright text-muted\">Copyright &copy; ProgVen() 2020</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\progvenblog/themes/progven/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\progvenblog/themes/progven/partials/footer.htm", "");
    }
}
