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

/* @admin/Store\plugin_confirm_uninstall_panel.twig */
class __TwigTemplate_805208c91910f406aca5df9bde4c911672d42cc863f4b6b17280245e45b6ca7b extends \Eccube\Twig\Template
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
        $context["is_supported_eccube_version"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_supported_eccube_version", [], "any", false, false, false, 11);
        // line 12
        echo "<div class=\"plugin-panel ";
        if ((($context["is_supported_eccube_version"] ?? null) == 0)) {
            echo "plugin-panel-not";
        }
        echo "\">
    <div class=\"plugin-logo\">
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_url", [], "any", false, false, false, 14), "html", null, true);
        echo "\" target=\"_blank\"><img class=\"img-rounded\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_image_url", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></a>
    </div>
    <div class=\"plugin-content-top\">
        <div class=\"plugin-title\">
            <a class=\"plugin-name\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "product_url", [], "any", false, false, false, 18), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</a>
        </div>
        <div class=\"plugin-description\">
            ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "summary", [], "any", false, false, false, 21), "html", null, true);
        echo "
        </div>
        <div class=\"plugin-description\">
            ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "promotion", [], "any", false, false, false, 24) == 1)) {
            // line 25
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 25), 500), "html", null, true);
            echo "
            ";
        } else {
            // line 27
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getEllipsis(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description", [], "any", false, false, false, 27), 400), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"plugin-content-bottom\">
        <dl class=\"plugin-meta dl-horizontal\">
            <dt class=\"plugin-price\">価格</dt><dd>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "price", [], "any", false, false, false, 34)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-download\">DL数</dt><dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "download_number", [], "any", false, false, false, 35), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-version\">プラグインバージョン</dt><dd>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "version", [], "any", false, false, false, 36), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-update\">最終更新日</dt><dd>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getTimeAgo(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "last_update_date", [], "any", false, false, false, 37)), "html", null, true);
        echo "</dd>
            <dt class=\"plugin-eccubeversion\">EC-CUBE対応バージョン</dt><dd>";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "eccube_version", [], "any", false, false, false, 38));
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
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 38) == false)) {
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
            <dt class=\"plugin-licence\">ライセンス</dt><dd>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "licence", [], "any", false, false, false, 39), "html", null, true);
        echo "</dd>
        </dl>
        ";
        // line 41
        if ((($context["is_supported_eccube_version"] ?? null) == 0)) {
            // line 42
            echo "            <p class=\"text-danger\">このプラグインはEC-CUBE ";
            echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::VERSION"), "html", null, true);
            echo "をサポートしていないため、正常に動作しない可能性があります。</p>
        ";
        }
        // line 44
        echo "        <p class=\"plugin-developer\">
            <strong>制作者</strong> : ";
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer_url", [], "any", false, false, false, 45))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer_url", [], "any", false, false, false, 45), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>";
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "developer", [], "any", false, false, false, 45), "html", null, true);
        }
        // line 46
        echo "        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_confirm_uninstall_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 46,  158 => 45,  155 => 44,  149 => 42,  147 => 41,  142 => 39,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  84 => 29,  78 => 27,  72 => 25,  70 => 24,  64 => 21,  56 => 18,  47 => 14,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_confirm_uninstall_panel.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_confirm_uninstall_panel.twig");
    }
}
