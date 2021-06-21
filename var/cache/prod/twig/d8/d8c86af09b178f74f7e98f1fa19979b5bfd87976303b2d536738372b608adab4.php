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

/* @admin/Store\plugin_search.twig */
class __TwigTemplate_ce88be9cea9776dd150c45061d0e1281379029b55626479894338b1c39a952e1 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_owners_search"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\plugin_search.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.885"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_search.884"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        .border-bt {
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }
        #plugin-list a img{
            max-height: 180px;
        }
        #plugin-list .info{
            min-height: 50%;
        }
        .plugin-ver li span{
            display: inline-block;
        }
    </style>
";
    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 39
        if ((twig_length_filter($this->env, ($context["Categories"] ?? null)) > 0)) {
            // line 40
            echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-body p-0\">
                            <div class=\"row\">
                                <div class=\"col-12 p-4\">
                                    ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search", ["category_id" => $context["key"]]), "html", null, true);
                echo "\" class=\"px-3 text-dark\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</a>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 52
        echo "
                <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search");
        echo "\" class=\"plugin-search\" name=\"search\">
                    <div class=\"c-outsideBlock\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "_token", [], "any", false, false, false, 55), 'widget');
        echo "
                        <div class=\"c-outsideBlock__contents mb-4\">
                            <div class=\"row justify-content-start\">
                                <div class=\"col-3 pl-0\">
                                    <label class=\"col-form-label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59)), "html", null, true);
        echo "</label>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "category_id", [], "any", false, false, false, 60), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "price_type", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "label", [], "any", false, false, false, 63)), "html", null, true);
        echo "</label>
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "price_type", [], "any", false, false, false, 64), 'widget');
        echo "
                                </div>
                                <div class=\"col-3\">
                                    <label class=\"col-form-label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "keyword", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "label", [], "any", false, false, false, 67)), "html", null, true);
        echo "</label>
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "keyword", [], "any", false, false, false, 68), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"c-outsideBlock__contents mb-2 pl-0\">
                            <button class=\"btn btn-ec-conversion px-5 py-2\" type=\"submit\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_button"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                    <div class=\"row justify-content-between mb-2\">
                        <div class=\"col-12 text-right\">
                            <div class=\"d-inline-block mr-2\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "sort", [], "any", false, false, false, 79), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                            <div class=\"d-inline-block\">
                                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "page_count", [], "any", false, false, false, 82), 'widget', ["attr" => ["onchange" => "document.forms.search.submit();"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </form>

                <div id=\"plugin-list\" class=\"card rounded border-0 my-4\">
                    <div class=\"card-header\">
                        <h5>";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_owners_search.search_results", ["%number%" => twig_length_filter($this->env, ($context["pagination"] ?? null)), "%total%" => ($context["total"] ?? null)]), "html", null, true);
        echo "</h5>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 93
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 0)) {
            // line 94
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                <div class=\"row border-bt pb-2 mb-3\">
                                    ";
                // line 96
                echo twig_include($this->env, $context, "@admin/Store/plugin_search_panel.twig");
                echo "
                                </div>
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                    </div>

                    ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 102) > 0)) {
            // line 103
            echo "                        <div class=\"row justify-content-md-center mb-4\">
                            ";
            // line 104
            $this->loadTemplate("@admin/pager.twig", "@admin/Store\\plugin_search.twig", 104)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 104), "routes" => "admin_store_plugin_owners_search_page"]));
            // line 105
            echo "                        </div>
                    ";
        }
        // line 107
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 107,  260 => 105,  258 => 104,  255 => 103,  253 => 102,  249 => 100,  246 => 99,  229 => 96,  226 => 95,  208 => 94,  206 => 93,  200 => 90,  189 => 82,  183 => 79,  174 => 73,  166 => 68,  162 => 67,  156 => 64,  152 => 63,  146 => 60,  142 => 59,  135 => 55,  130 => 53,  127 => 52,  120 => 47,  109 => 45,  105 => 44,  99 => 40,  97 => 39,  92 => 36,  88 => 35,  70 => 20,  66 => 19,  59 => 17,  52 => 16,  47 => 12,  45 => 14,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_search.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_search.twig");
    }
}
