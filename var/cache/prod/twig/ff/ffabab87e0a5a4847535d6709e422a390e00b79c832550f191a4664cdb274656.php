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

/* Mail\shipping_notify.twig */
class __TwigTemplate_0d9d3a316a478142a7f873667312d99ad0ad359817256643aefd659f6c938558 extends \Eccube\Twig\Template
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
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 12);
        echo " 様

お客さまがご注文された以下の商品を発送いたしました。商品の到着まで、今しばらくお待ちください。

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, false, 16)) {
            // line 17
            echo "お問い合わせ番号：";
            echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "tracking_number", [], "any", false, false, false, 17);
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, false, 18), "confirm_url", [], "any", false, false, false, 18)) {
                // line 19
                echo "お問い合わせURL：";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Delivery", [], "any", false, false, false, 19), "confirm_url", [], "any", false, false, false, 19);
                echo "
";
            }
        }
        // line 22
        echo "
************************************************
　ご注文商品明細
************************************************

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "productOrderItems", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 28
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 28);
            echo "
商品名：";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 29);
            echo "
数量：";
            // line 30
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 30));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
============================================

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 39);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 39);
        echo " 様
お名前(カナ)：";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 40);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 40);
        echo " 様
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 41)) {
            // line 42
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 42);
            echo "
";
        }
        // line 44
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 44);
        echo "
住所：";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 45);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 45);
        echo "
電話番号：";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 46);
        echo "

************************************************
　配送情報
************************************************

お名前：";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name01", [], "any", false, false, false, 52);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "name02", [], "any", false, false, false, 52);
        echo " 様
お名前(カナ)：";
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana01", [], "any", false, false, false, 53);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "kana02", [], "any", false, false, false, 53);
        echo " 様
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, false, 54)) {
            // line 55
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "company_name", [], "any", false, false, false, 55);
            echo "
";
        }
        // line 57
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "postal_code", [], "any", false, false, false, 57);
        echo "
住所：";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "Pref", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58);
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr01", [], "any", false, false, false, 58);
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "addr02", [], "any", false, false, false, 58);
        echo "
電話番号：";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "phone_number", [], "any", false, false, false, 59);
        echo "

お届け日：";
        // line 61
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 61))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_date", [], "any", false, false, false, 61))));
        echo "
お届け時間：";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 62), "指定なし")) : ("指定なし"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Mail\\shipping_notify.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 62,  179 => 61,  174 => 59,  168 => 58,  163 => 57,  157 => 55,  155 => 54,  149 => 53,  143 => 52,  134 => 46,  128 => 45,  123 => 44,  117 => 42,  115 => 41,  109 => 40,  103 => 39,  95 => 33,  86 => 30,  78 => 29,  73 => 28,  69 => 27,  62 => 22,  55 => 19,  53 => 18,  48 => 17,  46 => 16,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail\\shipping_notify.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mail\\shipping_notify.twig");
    }
}
