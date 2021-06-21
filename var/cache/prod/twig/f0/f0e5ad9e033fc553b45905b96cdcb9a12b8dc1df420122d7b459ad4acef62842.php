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

/* @admin/Store\plugin_confirm_panel.twig */
class __TwigTemplate_95c4129438661ab28f8562422e4f0c645c179e2fb7f0c0650b33583602eecd60 extends \Eccube\Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"col-4\">
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "store_url", [], "any", false, false, false, 12), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 13), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
<div class=\"col\">
    <div class=\"info\">
        <h5 class=\"font-weight-bold mb-4\">
            ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "
        </h5>
        <div>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "short_description", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
        ";
        // line 21
        if ((($context["is_update"] ?? null) == false)) {
            // line 22
            echo "            <p class=\"text-danger mb-4 mt-3\"><span class=\"font-weight-bold text-body\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
            echo " </span> ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 22)), "html", null, true);
            echo "<small> (";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo ")</small></p>
        ";
        }
        // line 24
        echo "        <div class=\"row\">
            <div class=\"col-7\">
                ";
        // line 26
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_info.twig");
        echo "
            </div>
        </div>
    </div>
    ";
        // line 30
        $context["version_check"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version_check", [], "any", false, false, false, 30);
        // line 31
        echo "    ";
        if ((($context["version_check"] ?? null) == false)) {
            // line 32
            echo "        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"alert alert-danger border border-danger\">
                    <p class=\"text-danger mb-0\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.modal.note", ["%version%" => twig_constant("Eccube\\Common\\Constant::VERSION")]), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    ";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_confirm_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  95 => 36,  89 => 32,  86 => 31,  84 => 30,  77 => 26,  73 => 24,  63 => 22,  61 => 21,  57 => 20,  52 => 18,  44 => 13,  40 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_confirm_panel.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_confirm_panel.twig");
    }
}
