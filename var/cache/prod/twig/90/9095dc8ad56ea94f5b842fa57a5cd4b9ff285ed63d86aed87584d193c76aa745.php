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

/* @admin/Order\mail_confirm.twig */
class __TwigTemplate_cb27a2cd86528f716fe25d398ebe5923d15b4b5138bb50ae1bf13bc32784d9e6 extends \Eccube\Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "order_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order\\mail_confirm.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<script>
\$(function() {
    \$('#template-change').on('change', function() {
        \$('#mode').val('change');
        \$('#order-mail-form').submit();
        return false;
    });

    \$('#back').on('click', function(e) {
        e.preventDefault();
        \$('#mode').val('back');
        \$('#order-mail-form').submit();
        return false;
    });
});
</script>
";
    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<div class=\"c-contentsArea__cols\">
    <div class=\"c-contentsArea__primaryCol\">
        <div class=\"c-primaryCol\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\">
                            <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_destination_info"), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#mailTo\" aria-expanded=\"false\" aria-controls=\"mailTo\"></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailTo\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 56), "html", null, true);
        echo "</span></div>
                            <div class=\"col-2\"><span>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 58)), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-2\"><span>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 62), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 62), "html", null, true);
        echo "（";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 62), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 62), "html", null, true);
        echo "）</span><br>〒";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 62), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 62), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 62), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 62), "html", null, true);
        echo "</div>
                            <div class=\"col-2\"><span>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-4\"><span>
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, false, 65)) {
            // line 66
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, false, 66)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "productName", [], "any", false, false, false, 66), "html", null, true);
            echo "
                                ";
            // line 67
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, false, 67)) > 2)) {
                // line 68
                echo "                                    ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_purchase_product_count", ["%count%" => (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "productOrderItems", [], "any", false, false, false, 68)) - 1)]);
                echo "
                                ";
            }
            // line 70
            echo "                            ";
        }
        // line 71
        echo "                            </span></div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-2\"><span>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-10\"><span class=\"badge badge-ec-blue\" style=\"background-color: #fff; color: ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, false, 75), "html", null, true);
        echo "; border-color: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatusColor", [], "any", false, false, false, 75), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, false, 75), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <form id=\"order-mail-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\">
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 82), 'widget');
        echo "
                <input id=\"mode\" type=\"hidden\" name=\"mode\">

                <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"row\">
                        <div class=\"col-8\"><span class=\"card-title\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_mail_info"), "html", null, true);
        echo "</span></div>
                        <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#mailCreate\" aria-expanded=\"false\" aria-controls=\"mailCreate\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                    </div>
                </div>
                <div class=\"collapse show ec-cardCollapse\" id=\"mailCreate\">
                    <div class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-3\">
                                <div class=\"d-inline-block\"><span>";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_template"), "html", null, true);
        echo "</span></div>
                            </div>
                            <div class=\"col\">
                                ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "data", [], "any", false, false, false, 99), "html", null, true);
        echo "
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "template", [], "any", false, false, false, 100), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "data", [], "any", false, false, false, 106), "html", null, true);
        echo "
                                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mail_subject", [], "any", false, false, false, 107), 'widget', ["type" => "hidden"]);
        echo "
                            </div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-3\"><span>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_body"), "html", null, true);
        echo "</span></div>
                            <div class=\"col\">
                                <div id=\"detail_box__tpl_data\" class=\"form-group tab-pane active\">
                                    ";
        // line 114
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "data", [], "any", false, false, false, 114)), "html", null, true));
        echo "
                                    <div style=\"display: none\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tpl_data", [], "any", false, false, false, 115), 'widget');
        echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\"><a class=\"c-baseLink\" href=\"javascript:void(0)\" id=\"back\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\"><button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"complete\">";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send"), "html", null, true);
        echo "</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Order\\mail_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 130,  281 => 125,  268 => 115,  264 => 114,  258 => 111,  251 => 107,  247 => 106,  240 => 104,  233 => 100,  229 => 99,  223 => 96,  212 => 88,  203 => 82,  199 => 81,  186 => 75,  182 => 74,  177 => 71,  174 => 70,  168 => 68,  166 => 67,  161 => 66,  159 => 65,  154 => 63,  138 => 62,  134 => 61,  128 => 58,  124 => 57,  120 => 56,  116 => 55,  105 => 47,  96 => 40,  92 => 39,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order\\mail_confirm.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Order\\mail_confirm.twig");
    }
}
