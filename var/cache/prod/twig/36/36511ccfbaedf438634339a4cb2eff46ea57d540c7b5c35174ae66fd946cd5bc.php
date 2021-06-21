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

/* @admin/Store\plugin_search_panel.twig */
class __TwigTemplate_6d6ab169ad28f3a9ae408a0b032601455a8f248df6e7526b35301b7ad6838297 extends \Eccube\Twig\Template
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
        echo "
<div class=\"col-sm-2 pr-2 pr-sm-3\">
    <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\" data-code=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "code", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <img class=\"w-100 img-responsive\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 14), $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("noimage_plugin_list.png", "save_image"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
    </a>
</div>
<div class=\"col-sm-6 col-md-7\">
    <div class=\"info\">
        <h5>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "store_url", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"font-weight-bold\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</a>（";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.latest"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, false, 20), "html", null, true);
        echo "）
        </h5>
        <h6>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "short_description", [], "any", false, false, false, 22), "html", null, true);
        echo "</h6>
    </div>
    <div class=\"row\">
        <div class=\"col-auto col-md-5 col-lg-6\">
            <p class=\"plg-prices text-danger\"><span class=\"font-weight-bold text-dark\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.price"), "html", null, true);
        echo " </span> ";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 26)), "html", null, true);
        echo "<small> (";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
        echo ")</small></p>
        </div>
        <div class=\"col-auto col-md-7 col-lg-2\">
            ";
        // line 29
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 29)) {
            // line 30
            echo "            <dl class=\"text-dark\">
                <dd class=\"d-inline-block\"><span class=\"pr-1 font-weight-bold\">";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.dl"), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "downloads", [], "any", false, false, false, 31)), "html", null, true);
            echo "</dd>
            </dl>
            ";
        }
        // line 34
        echo "        </div>
        <div class=\"col-auto col-md-7 col-lg-4\">
            <dl class=\"text-dark\">
                <dd class=\"d-inline-block ml-4\"><span class=\"pr-1 font-weight-bold\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.support"), "html", null, true);
        echo "</span> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "supported_versions", [], "any", false, false, false, 37));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37) == false)) {
                echo ", ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</dd>
            </dl>
        </div>
    </div>
</div>
<div class=\"col-sm-4 col-md-3 text-right\">
    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_owners_store_url", [], "any", false, false, false, 43), "html", null, true);
        echo "/gateway/purchase/?product_id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "\" method=\"post\" target=\"_blank\">
        <a href=\"#\" data-toggle=\"modal\" data-target=\"#searchPluginModal-";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\" class=\"btn btn-ec-regular\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.detail"), "html", null, true);
        echo "</a>
        ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "update_status", [], "any", false, false, false, 45) == 1)) {
            // line 46
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.free"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "update_status", [], "any", false, false, false, 49) == 2)) {
            // line 50
            echo "            <a href=\"#\" class=\"btn btn-ec-regular\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.installed"), "html", null, true);
            echo "</a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "update_status", [], "any", false, false, false, 51) == 3)) {
            // line 52
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install_confirm", ["id" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin.update"), "html", null, true);
            echo "
            </a>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "update_status", [], "any", false, false, false, 55) == 4)) {
            // line 56
            echo "            <input type=\"hidden\" name=\"mode\" value=\"link_site\" />
            <input type=\"hidden\" name=\"public_key\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "authentication_key", [], "any", false, false, false, 57), "html", null, true);
            echo "\" />
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.install.fee"), "html", null, true);
            echo "\" />
        ";
        }
        // line 60
        echo "    </form>
</div>

<!-- Modal -->
";
        // line 64
        echo twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig");
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_search_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 64,  202 => 60,  197 => 58,  193 => 57,  190 => 56,  188 => 55,  183 => 53,  178 => 52,  176 => 51,  171 => 50,  169 => 49,  164 => 47,  159 => 46,  157 => 45,  151 => 44,  145 => 43,  103 => 37,  98 => 34,  90 => 31,  87 => 30,  85 => 29,  75 => 26,  68 => 22,  58 => 20,  47 => 14,  41 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_search_panel.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_search_panel.twig");
    }
}
