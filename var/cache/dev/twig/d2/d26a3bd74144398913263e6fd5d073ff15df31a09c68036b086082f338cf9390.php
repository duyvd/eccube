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

/* Mail\shipping_notify.html.twig */
class __TwigTemplate_82c5f0b34db508370a8be4c40a3e900ce9b3cf0bddd5be3212d93ac4f0265d3a extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail\\shipping_notify.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mail\\shipping_notify.html.twig"));

        // line 11
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 17, $this->source); })()), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">????????????????????????????????????</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name01", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 31, $this->source); })()), "name02", [], "any", false, false, false, 31), "html", null, true);
        echo " ???<br>
                            <br>
                            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 33, $this->source); })()), "shop_name", [], "any", false, false, false, 33), "html", null, true);
        echo "?????????????????????<br/>
                            ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br/>
                            <br/>
                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 36, $this->source); })()), "tracking_number", [], "any", false, false, false, 36)) {
            // line 37
            echo "                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                ???????????????????????????";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 38, $this->source); })()), "tracking_number", [], "any", false, false, false, 38), "html", null, true);
            echo "
                                ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 39, $this->source); })()), "Delivery", [], "any", false, false, false, 39), "confirm_url", [], "any", false, false, false, 39)) {
                // line 40
                echo "                                    <br/>
                                    ??????????????????URL???";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 41, $this->source); })()), "Delivery", [], "any", false, false, false, 41), "confirm_url", [], "any", false, false, false, 41), "html", null, true);
                echo "
                                ";
            }
            // line 43
            echo "                                <br/>
                            ";
        }
        // line 45
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 48, $this->source); })()), "productOrderItems", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 49
            echo "                                ??????????????????";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 49), "html", null, true);
            echo "<br/>
                                ????????????";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 50), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 50), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 50), "html", null, true);
            echo "<br/>
                                ?????????";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 51)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ?????????????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name01", [], "any", false, false, false, 57), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 57, $this->source); })()), "name02", [], "any", false, false, false, 57), "html", null, true);
        echo " ???<br/>
                            ?????????(??????)???";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana01", [], "any", false, false, false, 58), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 58, $this->source); })()), "kana02", [], "any", false, false, false, 58), "html", null, true);
        echo " ???<br/>
                            ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 59, $this->source); })()), "company_name", [], "any", false, false, false, 59)) {
            // line 60
            echo "                                ????????????";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 60, $this->source); })()), "company_name", [], "any", false, false, false, 60), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 62
        echo "                            ??????????????????";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 62, $this->source); })()), "postal_code", [], "any", false, false, false, 62), "html", null, true);
        echo "<br/>
                            ?????????";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "Pref", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "addr01", [], "any", false, false, false, 63), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "addr02", [], "any", false, false, false, 63), "html", null, true);
        echo "<br/>
                            ???????????????";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 64, $this->source); })()), "phone_number", [], "any", false, false, false, 64), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ???????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "name01", [], "any", false, false, false, 69), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 69, $this->source); })()), "name02", [], "any", false, false, false, 69), "html", null, true);
        echo " ???<br/>
                            ?????????(??????)???";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 70, $this->source); })()), "kana01", [], "any", false, false, false, 70), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 70, $this->source); })()), "kana02", [], "any", false, false, false, 70), "html", null, true);
        echo " ???<br/>
                            ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 71, $this->source); })()), "company_name", [], "any", false, false, false, 71)) {
            // line 72
            echo "                                ????????????";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 72, $this->source); })()), "company_name", [], "any", false, false, false, 72), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 74
        echo "                            ??????????????????";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 74, $this->source); })()), "postal_code", [], "any", false, false, false, 74), "html", null, true);
        echo "<br/>
                            ?????????";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "Pref", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "addr01", [], "any", false, false, false, 75), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 75, $this->source); })()), "addr02", [], "any", false, false, false, 75), "html", null, true);
        echo "<br/>
                            ???????????????";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 76, $this->source); })()), "phone_number", [], "any", false, false, false, 76), "html", null, true);
        echo "<br/>
                            <br/>
                            ???????????????";
        // line 78
        ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 78, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 78))) ? (print ("????????????")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Shipping"]) || array_key_exists("Shipping", $context) ? $context["Shipping"] : (function () { throw new RuntimeError('Variable "Shipping" does not exist.', 78, $this->source); })()), "shipping_delivery_date", [], "any", false, false, false, 78)), "html", null, true))));
        echo "<br/>
                            ??????????????????";
        // line 79
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Shipping"] ?? null), "shipping_delivery_time", [], "any", false, false, false, 79), "????????????")) : ("????????????")), "html", null, true);
        echo "<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        ??????????????????";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 91, $this->source); })()), "shop_name", [], "any", false, false, false, 91), "html", null, true);
        echo "?????????????????????????????????<br/>
                        ??????????????????????????????????????????????????? <a href=\"mailto:";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 92, $this->source); })()), "email02", [], "any", false, false, false, 92), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 92, $this->source); })()), "email02", [], "any", false, false, false, 92), "html", null, true);
        echo "</a> ????????????????????????????????????????????????<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 94, $this->source); })()), "shop_name", [], "any", false, false, false, 94), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 95, $this->source); })()), "shop_name", [], "any", false, false, false, 95), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Mail\\shipping_notify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 95,  247 => 94,  240 => 92,  236 => 91,  221 => 79,  217 => 78,  212 => 76,  206 => 75,  201 => 74,  195 => 72,  193 => 71,  187 => 70,  181 => 69,  173 => 64,  167 => 63,  162 => 62,  156 => 60,  154 => 59,  148 => 58,  142 => 57,  137 => 54,  128 => 51,  120 => 50,  115 => 49,  111 => 48,  106 => 45,  102 => 43,  97 => 41,  94 => 40,  92 => 39,  88 => 38,  85 => 37,  83 => 36,  77 => 33,  70 => 31,  51 => 17,  43 => 11,);
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
<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"{{ url('homepage') }}\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">????????????????????????????????????</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            {{ Order.name01 }} {{ Order.name02 }} ???<br>
                            <br>
                            {{ BaseInfo.shop_name }}?????????????????????<br/>
                            ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br/>
                            <br/>
                            {% if Shipping.tracking_number %}
                                <hr style=\"border-top: 3px double #8c8b8b;\">
                                ???????????????????????????{{ Shipping.tracking_number }}
                                {% if Shipping.Delivery.confirm_url %}
                                    <br/>
                                    ??????????????????URL???{{ Shipping.Delivery.confirm_url }}
                                {% endif %}
                                <br/>
                            {% endif %}
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            {% for OrderItem in Shipping.productOrderItems %}
                                ??????????????????{{ OrderItem.product_code }}<br/>
                                ????????????{{ OrderItem.product_name }}  {{ OrderItem.classcategory_name1 }}  {{ OrderItem.classcategory_name2 }}<br/>
                                ?????????{{ OrderItem.quantity|number_format }}<br/>
                                <br/>
                            {% endfor %}
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ?????????????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????{{ Order.name01 }} {{ Order.name02 }} ???<br/>
                            ?????????(??????)???{{ Order.kana01 }} {{ Order.kana02 }} ???<br/>
                            {% if Order.company_name %}
                                ????????????{{ Order.company_name }}<br/>
                            {% endif %}
                            ??????????????????{{ Order.postal_code }}<br/>
                            ?????????{{ Order.Pref.name }}{{ Order.addr01 }}{{ Order.addr02 }}<br/>
                            ???????????????{{ Order.phone_number }}<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ???????????????<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ????????????{{ Shipping.name01 }} {{ Shipping.name02 }} ???<br/>
                            ?????????(??????)???{{ Shipping.kana01 }} {{ Shipping.kana02 }} ???<br/>
                            {% if Shipping.company_name %}
                                ????????????{{ Shipping.company_name }}<br/>
                            {% endif %}
                            ??????????????????{{ Shipping.postal_code }}<br/>
                            ?????????{{ Shipping.Pref.name }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}<br/>
                            ???????????????{{ Shipping.phone_number }}<br/>
                            <br/>
                            ???????????????{{ Shipping.shipping_delivery_date is empty ? '????????????' : Shipping.shipping_delivery_date|date_day }}<br/>
                            ??????????????????{{ Shipping.shipping_delivery_time|default('????????????') }}<br/>
                            <br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        ??????????????????{{ BaseInfo.shop_name }}?????????????????????????????????<br/>
                        ??????????????????????????????????????????????????? <a href=\"mailto:{{ BaseInfo.email02 }}\" style=\"text-decoration:none;\">{{ BaseInfo.email02 }}</a> ????????????????????????????????????????????????<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"{{ url('homepage') }}\" style=\"color:#aaaaaa;text-decoration:none;\">{{ BaseInfo.shop_name }}</a></div>
                        <div>copyright &copy; {{ BaseInfo.shop_name }} all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>

", "Mail\\shipping_notify.html.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mail\\shipping_notify.html.twig");
    }
}
