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

/* Shopping\shipping_multiple.twig */
class __TwigTemplate_fde7ad57589f66ddb3d252e6374ef98e003ade7da6d3329e7a9554193a8f90e6 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping\\shipping_multiple.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<script>
\$(function() {
    \$('.add').click(function() {
        var data = \$(this).data();
        var idx = data.idx;
        var itemIdx = 0;
        var item = \$('#item' + idx);
        var row = \$('#item' + idx + '-0');

        // 既存のお届け先のrowをコピーして雛形とする
        var addrow = \$(row).clone();

        // 追加する要素のIndexを決定
        item.find('.shipping_item').each(function() {
            itemIdx = \$(this).attr('data-itemidx');
        });
        itemIdx = 1 + parseInt(itemIdx);

        // 行のID設定
        addrow.attr('id', 'item' + idx + '-' + itemIdx);
        addrow.attr('data-itemidx', itemIdx);

        // お届け先セレクトボックスのIDとNAME設定
        addrow.find('select').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][customer_address]');
        addrow.find('select').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_customer_address');

        // 数量のINPUTのIDとNAME設定
        addrow.find('input').attr('name', 'form[shipping_multiple][' + idx + '][shipping][' + itemIdx + '][quantity]');
        addrow.find('input').attr('id', 'form_shipping_multiple_' + idx + '_shipping_' + itemIdx + '_quantity');

        // その他、divやbuttonのID設定
        addrow.find('[id*=\"multiple_list__shipping_address\"]').attr('id', 'multiple_list__shipping_address--' + idx + '_' + itemIdx + '');
        addrow.find('[id*=\"multiple_list__shipping_quantity\"]').attr('id', 'multiple_list__shipping_quantity--' + idx + '_' + itemIdx + '');
        addrow.find('button').each(function() {
            \$(this).attr('id', 'button__delete--' + idx + '_' + itemIdx + '');
            \$(this).attr('data-itemidx', idx + '-' + itemIdx);
            \$(this).data('itemidx', idx + '-' + itemIdx);
            \$(this).removeAttr('style');
        });

        \$(item).append(\$(addrow));
    });

    \$(document).on('click', '.delete', function() {
        var data = \$(this).data();
        \$('#item' + data.itemidx).remove();
    });

});
</script>
";
    }

    // line 66
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の複数指定"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-AddAddress\">
        <form id=\"shipping-multiple-form\" method=\"post\" action=\"";
        // line 74
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple");
        echo "\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 75), 'widget');
        echo "
            <div class=\"ec-AddAddress__info\">
                <p>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("各商品のお届け先を選択してください。"), "html", null, true);
        echo "</p>
            </div>

            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 81
            echo "                <div class=\"text-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 81), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
            <div class=\"ec-AddAddress__new\"><a href=\"";
        // line 84
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_multiple_edit");
        echo "\" class=\"btn ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
        echo "</a></div>

            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderItems"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
            // line 87
            echo "                ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87);
            // line 88
            echo "                ";
            $context["itemvalue"] = 0;
            // line 89
            echo "                <div id=\"multiple_list__item_box--";
            echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
            echo "\" class=\"ec-AddAddress__add\">
                    <div class=\"ec-AddAddress__item\">
                        <div class=\"ec-AddAddress__itemThumb\">
                            <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 92), "MainListImage", [], "any", false, false, false, 92)), "save_image"), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"ec-AddAddress__itemtContent\">
                            <div class=\"ec-AddAddress__itemtTitle\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 95), "html", null, true);
            echo "
                            </div>
                            ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 97), "classCategory1", [], "any", false, false, false, 97)) {
                // line 98
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 98), "classCategory1", [], "any", false, false, false, 98), "html", null, true);
                echo "</div>
                            ";
            }
            // line 100
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 100), "classCategory2", [], "any", false, false, false, 100)) {
                // line 101
                echo "                                <div class=\"ec-AddAddress__itemtSize\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 101), "classCategory2", [], "any", false, false, false, 101), "html", null, true);
                echo "</div>
                            ";
            }
            // line 103
            echo "                            <div class=\"ec-AddAddress__itemtPrice\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 103)), "html", null, true);
            echo "</div>

                            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["compItemQuantities"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 106
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106) == $context["key"])) {
                    // line 107
                    echo "                                    <div class=\"ec-AddAddress__itemtNumber\" id=\"multiple_list__value--";
                    echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</div>
                                    ";
                    // line 108
                    $context["itemvalue"] = $context["value"];
                    // line 109
                    echo "                                ";
                }
                // line 110
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                        </div>
                    </div>

                    <div id=\"item";
            // line 114
            echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shipping_multiple", [], "any", false, false, false, 115)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["idx"] ?? null)] ?? null) : null), "shipping", [], "any", false, false, false, 115));
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
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 116
                echo "                            <div id=\"item";
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116), "html", null, true);
                echo "\" data-itemidx=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116), "html", null, true);
                echo "\" class=\"ec-AddAddress__select shipping_item item";
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "\">
                                <div id=\"multiple_list__shipping_address--";
                // line 117
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 117), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectAddress\">
                                    <div class=\"ec-select\">
                                        <label>";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
                echo "</label>
                                        ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "shipping"]]);
                echo "
                                        ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "customer_address", [], "any", false, false, false, 121), 'errors');
                echo "
                                    </div>
                                </div>
                                <div id=\"multiple_list__shipping_quantity--";
                // line 124
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 124), "html", null, true);
                echo "\" class=\"ec-AddAddress__selectNumber\">
                                    <div class=\"ec-input\">
                                        <label>";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</label>
                                        ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["compItemQuantities"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 128
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128) == $context["key"])) {
                        // line 129
                        echo "                                                ";
                        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "value", [], "any", false, false, false, 129)) : ($context["value"]));
                        // line 130
                        echo "                                                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "quantity"], "value" => ($context["quantity"] ?? null)]);
                        echo "
                                                ";
                        // line 131
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["shipping"], "quantity", [], "any", false, false, false, 131), 'errors');
                        echo "
                                            ";
                    }
                    // line 133
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "                                    </div>
                                </div>

                                <button id=\"button__delete--";
                // line 137
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 137), "html", null, true);
                echo "\" type=\"button\" class=\"btn ec-inlineBtn delete\"
                                        ";
                // line 138
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 138) == 0)) {
                    echo "style=\"display:none;\"";
                }
                // line 139
                echo "                                        data-itemidx=\"";
                echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 139), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</button>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </div>

                    <div id=\"multiple_list__add_button";
            // line 144
            echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
            echo "\" class=\"ec-AddAddress__btn\">
                        <button id=\"button__add";
            // line 145
            echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
            echo "\" type=\"button\" class=\"ec-inlineBtn add\" data-idx=\"";
            echo twig_escape_filter($this->env, ($context["idx"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先追加"), "html", null, true);
            echo "</button>
                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
            <div class=\"ec-AddAddress__actions\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button id=\"button__confirm\" type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("選択したお届け先に送る"), "html", null, true);
        echo "</button>
                        <a class=\"ec-blockBtn--cancel\" href=\"";
        // line 154
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping\\shipping_multiple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 154,  421 => 153,  415 => 149,  393 => 145,  389 => 144,  385 => 142,  363 => 139,  359 => 138,  353 => 137,  348 => 134,  342 => 133,  337 => 131,  332 => 130,  329 => 129,  326 => 128,  322 => 127,  318 => 126,  311 => 124,  305 => 121,  301 => 120,  297 => 119,  290 => 117,  279 => 116,  262 => 115,  258 => 114,  253 => 111,  247 => 110,  244 => 109,  242 => 108,  231 => 107,  228 => 106,  224 => 105,  217 => 103,  211 => 101,  208 => 100,  202 => 98,  200 => 97,  195 => 95,  189 => 92,  182 => 89,  179 => 88,  176 => 87,  159 => 86,  152 => 84,  149 => 83,  140 => 81,  136 => 80,  130 => 77,  125 => 75,  121 => 74,  113 => 69,  109 => 67,  105 => 66,  51 => 14,  47 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping\\shipping_multiple.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Shopping\\shipping_multiple.twig");
    }
}
