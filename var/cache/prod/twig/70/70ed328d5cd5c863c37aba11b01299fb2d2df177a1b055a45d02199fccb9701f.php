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

/* @admin/Store\unregisterd_plugin_table.twig */
class __TwigTemplate_b2a3f527b0d2683a5272de9687d88e75f54fbb2146f6951563c00f00ee5faabf extends \Eccube\Twig\Template
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
        echo "<div class=\"card-body p-0\">
    <table class=\"table table-sm\">
        <thead>
        <tr>
            <th class=\"border-top-0 pl-3 pt-2 pb-2\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.941"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.942"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.943"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.944"), "html", null, true);
        echo "</th>
            <th class=\"border-top-0 pt-2 pb-2\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.945"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Plugins"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Plugin"]) {
            // line 24
            echo "            <form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\" method=\"post\" action=\"\">
                <tr class=\"";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["Plugin"], "enabled", [], "any", false, false, false, 25) == false)) {
                echo "active";
            }
            echo "\">
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", true, true, false, 26)) {
                // line 27
                echo "                        <td class=\"align-middle pl-3\">
                            <strong>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            } else {
                // line 31
                echo "                        <td class=\"align-middle pl-3\">
                            <strong>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.946"), "html", null, true);
                echo "</strong>
                        </td>
                    ";
            }
            // line 35
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", true, true, false, 35)) {
                // line 36
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "version", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 38
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.947"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 40
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", true, true, false, 40)) {
                // line 41
                echo "                        <td class=\"align-middle\"><p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 41), "html", null, true);
                echo "</p>
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, true, false, 42), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 42), [], "array", false, true, false, 42), "const", [], "any", false, true, false, 42), "readme", [], "any", true, true, false, 42)) {
                    // line 43
                    echo "                                <a href=\"#\" class=\"view_readme\" data-toggle=\"modal\" data-target=\"#readmeModal\" data-name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Plugin"], "name", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" data-readme=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "config", [], "any", false, false, false, 43)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 43)] ?? null) : null), "const", [], "any", false, false, false, 43), "readme", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_table.897"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 45
                echo "                        </td>
                    ";
            } else {
                // line 47
                echo "                        <td class=\"align-middle\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.949"), "html", null, true);
                echo "</td>
                    ";
            }
            // line 49
            echo "                    <td class=\"align-middle\">
                        &nbsp;-&nbsp;
                    </td>
                    <td class=\"align-middle\">
                        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["unregisteredPluginsConfigPages"] ?? null), twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 53), [], "array", true, true, false, 53)) {
                // line 54
                echo "                            <a href='";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["unregisteredPluginsConfigPages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Plugin"], "code", [], "any", false, false, false, 54)] ?? null) : null), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.unregistered_plugin_table.950"), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 56
                echo "                            &nbsp;-&nbsp;
                        ";
            }
            // line 58
            echo "                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\unregisterd_plugin_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  168 => 58,  164 => 56,  156 => 54,  154 => 53,  148 => 49,  142 => 47,  138 => 45,  128 => 43,  126 => 42,  121 => 41,  118 => 40,  112 => 38,  106 => 36,  103 => 35,  97 => 32,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  77 => 25,  70 => 24,  66 => 23,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\unregisterd_plugin_table.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\unregisterd_plugin_table.twig");
    }
}
