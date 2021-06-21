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

/* @admin/Order\search_customer.twig */
class __TwigTemplate_da2322663766b713f75ecfad2adb6af2ac55971a153da6b158583e2316b8a8db extends \Eccube\Twig\Template
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
    \$('.set-customer').on('click', function() {
        \$.ajax({
            url: '";
        // line 14
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_customer_by_id");
        echo "',
            type: 'POST',
            dataType: 'json',
            data: {'id': this.dataset.customer}
        }).done(function(data) {
            // 顧客情報をフォームにセットする.
            \$('#order_CustomerId').html(data['id']);
            \$('#order_Customer').val(data['id']);
            \$('#order_name_name01').val(data['name01']);
            \$('#order_name_name02').val(data['name02']);
            \$('#order_kana_kana01').val(data['kana01']);
            \$('#order_kana_kana02').val(data['kana02']);
            \$('#order_postal_code').val(data['postal_code']);
            \$('#order_address_pref').val(data['pref']);
            \$('#order_address_addr01').val(data['addr01']);
            \$('#order_address_addr02').val(data['addr02']);
            \$('#order_email').val(data['email']);
            \$('#order_phone_number').val(data['phone_number']);
            \$('#order_company_name').val(data['company_name']);
            // モーダルを閉じる.
            \$('#searchCustomerModal').modal('hide');
        }).fail(function(data) {
            alert('search customer(by id) failed.');
        });
    });

    // 会員検索
    \$('#customer_pagination a').on('click', function(event) {
        if (!\$(this).parent().is('.active')) {
            var list = \$('#searchCustomerModalList');
            list.children().remove();

            \$.ajax({
                url: \$(this).attr('href'),
                type: 'GET',
                dataType: 'html'
            }).done(function(data) {
                \$('#searchCustomerModalList').html(data);
            }).fail(function(data) {
                alert('search customer failed.');
            });
        }
        event.preventDefault();
    });
</script>

<table class=\"table table-striped\">
    <thead class=\"table-active\">
    <tr>
        <th class=\"pt-2 pb-2 pl-3\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "</th>
        <th class=\"pt-2 pb-2 pl-5\">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
            // line 72
            echo "        <tr>
            <td class=\"text-center\"><span>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, false, 75), "html", null, true);
            echo "</span></td>
            <td><span>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, false, 76), "html", null, true);
            echo "</span></td>
            <td>
                <div class=\"row justify-content-end pr-2\">
                    <button type=\"button\" class=\"btn btn-ec-actionIcon set-customer\" data-customer=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\"><i class=\"fa fa-plus fa-lg text-secondary\" aria-hidden=\"true\"></i></button>
                </div>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </tbody>
</table>
";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 86) > 0)) {
            // line 87
            echo "    <div id=\"customer_pagination\" class=\"row justify-content-md-center mb-4\">
        ";
            // line 88
            $this->loadTemplate("@admin/pager.twig", "@admin/Order\\search_customer.twig", 88)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 88), "routes" => "admin_order_search_customer_html_page"]));
            // line 89
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Order\\search_customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 89,  159 => 88,  156 => 87,  154 => 86,  150 => 84,  139 => 79,  133 => 76,  129 => 75,  125 => 74,  121 => 73,  118 => 72,  114 => 71,  106 => 66,  102 => 65,  98 => 64,  94 => 63,  42 => 14,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order\\search_customer.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Order\\search_customer.twig");
    }
}
