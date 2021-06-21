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

/* @admin/Order\order_item_type.twig */
class __TwigTemplate_e9c1ad76db1aaf337561882db2eda9f6d96bda2111d902e728e05ef2c60ba626 extends \Eccube\Twig\Template
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
        echo "<script>
    // 受注明細行を追加する.
    function fnAddOrderItem(\$row, product_id, type, product_name, tax_type) {
        var prototype = \$collectionHolder.data('prototype');
        index++;
        var newForm = prototype.replace(/__name__/g, index);
        \$collectionHolder.children('tbody').append(newForm);
        var \$lastRow = \$collectionHolder.children('tbody').children('tr').last;

        \$(\$lastRow).find(formIdPrefix + index + '_price').val(0);
        \$(\$lastRow).find(formIdPrefix + index + '_quantity').val(1);
        \$(\$lastRow).find(formIdPrefix + index + '_order_item_type').val(type);
        \$(\$lastRow).find(formIdPrefix + index + '_product_name').val(product_name);
        \$(\$lastRow).find(formIdPrefix + index + '_tax_type').val(tax_type);

        // モーダル閉じる.
        \$('#addOrderItemType').modal('hide');

        // 再計算のためsubmit.
        \$('#form1').submit();

        return false;
    }
</script>


<table class=\"table table-striped table-sm mb-3\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_item_type"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pr-3\"></th>
    </tr>
    </thead>

    <tbody>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderItemTypes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItemType"]) {
            // line 48
            echo "        <form name=\"product_form";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
            <tr>
                <td class=\"align-middle pl-3\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td class=\"align-middle pl-3\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "TaxType", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td class=\"align-middle pr-3 text-right\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon\" onclick=\"fnAddOrderItem(\$(this).parent().parent(), null, ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "OrderItemType", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["OrderItemType"], "TaxType", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), "html", null, true);
            echo "')\" name=\"mode\" value=\"modal\">
                        <i class=\"fa fa-plus fa-lg font-weight-bold text-secondary\"></i>
                    </button>
                </td>
            </tr>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItemType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "@admin/Order\\order_item_type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 60,  100 => 53,  95 => 51,  91 => 50,  85 => 48,  81 => 47,  72 => 41,  68 => 40,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order\\order_item_type.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Order\\order_item_type.twig");
    }
}
