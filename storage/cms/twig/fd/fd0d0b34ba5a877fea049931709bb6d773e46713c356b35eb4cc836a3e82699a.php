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

/* C:\xampp\htdocs\progvenblog/plugins/kyle/contact/components/contactform/default.htm */
class __TwigTemplate_607daa13ee1e9e3bfb7c1cb4235953c217bd7eafb5e537a9f3c52a0e80b5601a extends \Twig\Template
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
        $tags = array("for" => 14);
        $filters = array("escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
        echo "<!-- <form data-request=\"onSend\">
  <div class=\"form-group\">
    <input type=\"text\" name=\"txtName\" class=\"form-control textField\" placeholder=\"Your Name\">
  </div>
  <div class=\"form-group\">
    <input type=\"text\" name=\"txtEmail\" class=\"form-control textField\" placeholder=\"Your Email\">
  </div>
  <div class=\"form-group\">
    <textarea name=\"txtMsg\" class=\"form-control\" placeholder=\"Your Message\"></textarea>
  </div>
  <div class=\"form-group\">
    <input type=\"submit\" class=\"btn btnContact\" value=\"Send\">
  </div>
  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, true, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 15
            echo "  <p style=\"padding: 0; color: #EC2828;\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 15, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</form> -->

<!-- Main Content -->
<form data-request=\"onSend\">
  <div class=\"control-group\">
    <div class=\"form-group floating-label-form-group controls\">
      <label>Name</label>
      <input type=\"text\" name=\"txtName\" class=\"form-control\" placeholder=\"Name\">
    </div>
  </div>
  <div class=\"control-group\">
    <div class=\"form-group floating-label-form-group controls\">
      <label>Email Address</label>
      <input type=\"email\" name=\"txtEmail\" class=\"form-control\" placeholder=\"Email Address\">
    </div>
  </div>
  <div class=\"control-group\">
    <div class=\"form-group floating-label-form-group controls\">
      <label>Message</label>
      <textarea name=\"txtMsg\" rows=\"5\" class=\"form-control\" placeholder=\"Message\"></textarea>
    </div>
  </div>
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "all", [], "method", false, false, true, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            echo "  <p style=\"padding: 0; color: #EC2828;\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["error"], 40, $this->source), "html", null, true);
            echo "</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  <br>
  <input type=\"submit\" name=\"btnSubmit\" class=\"btn btn-primary\" value=\"Send\">
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\progvenblog/plugins/kyle/contact/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 42,  118 => 40,  114 => 39,  90 => 17,  81 => 15,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "C:\\xampp\\htdocs\\progvenblog/plugins/kyle/contact/components/contactform/default.htm", "");
    }
}
