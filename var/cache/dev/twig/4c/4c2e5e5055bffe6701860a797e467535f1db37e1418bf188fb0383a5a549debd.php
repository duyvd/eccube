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
class __TwigTemplate_e2df7a8465d64965cc74cb828b7488e6202808f8e6791906ce788a73e9670d56 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail\\shipping_notify.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail\\shipping_notify.twig"));

        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 12, $this->source); })()), "name02", [], "any", false, false, false, 12);
        echo " ???

?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 16, $this->source); })()), "tracking_number", [], "any", false, false, false, 16)) {
            // line 17
            echo "???????????????????????????";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 17, $this->source); })()), "tracking_number", [], "any", false, false, false, 17);
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 18, $this->source); })()), "Delivery", [], "any", false, false, false, 18), "confirm_url", [], "any", false, false, false, 18)) {
                // line 19
                echo "??????????????????URL???";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 19, $this->source); })()), "Delivery", [], "any", false, false, false, 19), "confirm_url", [], "any", false, false, false, 19);
                echo "
";
            }
        }
        // line 22
        echo "
************************************************
????????????????????????
************************************************

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 27, $this->source); })()), "productOrderItems", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 28
            echo "??????????????????";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 28);
            echo "
????????????";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 29);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 29);
            echo "
?????????";
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
?????????????????????
************************************************
????????????";
        // line 39
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name01", [], "any", false, false, false, 39);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 39, $this->source); })()), "name02", [], "any", false, false, false, 39);
        echo " ???
?????????(??????)???";
        // line 40
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana01", [], "any", false, false, false, 40);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 40, $this->source); })()), "kana02", [], "any", false, false, false, 40);
        echo " ???
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 41, $this->source); })()), "company_name", [], "any", false, false, false, 41)) {
            // line 42
            echo "????????????";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "company_name", [], "any", false, false, false, 42);
            echo "
";
        }
        // line 44
        echo "??????????????????";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 44, $this->source); })()), "postal_code", [], "any", false, false, false, 44);
        echo "
?????????";
        // line 45
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "Pref", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45);
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "addr01", [], "any", false, false, false, 45);
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 45, $this->source); })()), "addr02", [], "any", false, false, false, 45);
        echo "
???????????????";
        // line 46
        echo twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 46, $this->source); })()), "phone_number", [], "any", false, false, false, 46);
        echo "

************************************************
???????????????
************************************************

????????????";
        // line 52
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "name01", [], "any", false, false, false, 52);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 52, $this->source); })()), "name02", [], "any", false, false, false, 52);
        echo " ???
?????????(??????)???";
        // line 53
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 53, $this->source); })()), "kana01", [], "any", false, false, false, 53);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 53, $this->source); })()), "kana02", [], "any", false, false, false, 53);
        echo " ???
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 54, $this->source); })()), "company_name", [], "any", false, false, false, 54)) {
            // line 55
            echo "????????????";
            echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 55, $this->source); })()), "company_name", [], "any", false, false, false, 55);
            echo "
";
        }
        // line 57
        echo "??????????????????";
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 57, $this->source); })()), "postal_code", [], "any", false, false, false, 57);
        echo "
?????????";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "Pref", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58);
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "addr01", [], "any", false, false, false, 58);
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 58, $this->source); })()), "addr02", [], "any", false, false, false, 58);
        echo "
???????????????";
        // line 59
        echo twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 59, $this->source); })()), "phone_number", [], "any", false, false, false, 59);
        echo "

???????????????";
        // line 61
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 61, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 61))) ? ("????????????") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 61, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 61))));
        echo "
??????????????????";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 62), "????????????")) : ("????????????"));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  189 => 62,  185 => 61,  180 => 59,  174 => 58,  169 => 57,  163 => 55,  161 => 54,  155 => 53,  149 => 52,  140 => 46,  134 => 45,  129 => 44,  123 => 42,  121 => 41,  115 => 40,  109 => 39,  101 => 33,  92 => 30,  84 => 29,  79 => 28,  75 => 27,  68 => 22,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  43 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% autoescape false %}
{{ Order.name01 }} {{ Order.name02 }} ???

?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????

{% if Shipping.tracking_number %}
???????????????????????????{{ Shipping.tracking_number }}
{% if Shipping.Delivery.confirm_url %}
??????????????????URL???{{ Shipping.Delivery.confirm_url }}
{% endif %}
{% endif %}

************************************************
????????????????????????
************************************************

{% for OrderItem in Shipping.productOrderItems %}
??????????????????{{ OrderItem.product_code }}
????????????{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}
?????????{{ OrderItem.quantity|number_format }}

{% endfor %}

============================================

************************************************
?????????????????????
************************************************
????????????{{ Order.name01 }} {{ Order.name02 }} ???
?????????(??????)???{{ Order.kana01 }} {{ Order.kana02 }} ???
{% if Order.company_name %}
????????????{{ Order.company_name }}
{% endif %}
??????????????????{{ Order.postal_code }}
?????????{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}
???????????????{{ Order.phone_number }}

************************************************
???????????????
************************************************

????????????{{ Shipping.name01 }} {{ Shipping.name02 }} ???
?????????(??????)???{{ Shipping.kana01 }} {{ Shipping.kana02 }} ???
{% if Shipping.company_name %}
????????????{{ Shipping.company_name }}
{% endif %}
??????????????????{{ Shipping.postal_code }}
?????????{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}
???????????????{{ Shipping.phone_number }}

???????????????{{ Shipping.shipping_delivery_date is empty ? '????????????' : Shipping.shipping_delivery_date|date_day }}
??????????????????{{ Shipping.shipping_delivery_time|default('????????????') }}
{% endautoescape %}
", "Mail\\shipping_notify.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mail\\shipping_notify.twig");
    }
}
