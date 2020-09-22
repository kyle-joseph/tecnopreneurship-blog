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

/* C:\xampp\htdocs\progvenblog/plugins/rainlab/blog/components/categories/items.htm */
class __TwigTemplate_901bcb6dae37377551fbd272960d944a86de41230faf9df73144e5b605221220 extends \Twig\Template
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
        $tags = array("for" => 1, "set" => 2, "if" => 4, "partial" => 12);
        $filters = array("escape" => 3, "length" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'partial'],
                ['escape', 'length'],
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", [], "any", false, false, true, 2);
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "\" style=\"text-decoration: none;\">
    <li ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 4) == ($context["currentCategorySlug"] ?? null))) {
                echo "class=\"list-group-item active\"";
            } else {
                echo "class=\"list-group-item\"";
            }
            echo ">
        ";
            // line 5
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
        <!-- ";
            // line 6
            if (($context["postCount"] ?? null)) {
                // line 7
                echo "            <span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["postCount"] ?? null), 7, $this->source), "html", null, true);
                echo "</span>
        ";
            }
            // line 8
            echo " -->

        ";
            // line 10
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, true, 10)) > 0)) {
                // line 11
                echo "            <ul>
                ";
                // line 12
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = twig_get_attribute($this->env, $this->source,                 // line 13
$context["category"], "children", [], "any", false, false, true, 13)                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 14
($context["currentCategorySlug"] ?? null)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((                // line 12
($context["__SELF__"] ?? null) . "::items")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 16
                echo "            </ul>
        ";
            }
            // line 18
            echo "    </li>
</a> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\progvenblog/plugins/rainlab/blog/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 18,  112 => 16,  109 => 12,  107 => 14,  105 => 13,  103 => 12,  100 => 11,  98 => 10,  94 => 8,  88 => 7,  86 => 6,  82 => 5,  74 => 4,  69 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\progvenblog/plugins/rainlab/blog/components/categories/items.htm", "");
    }
}
