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

/* @admin/Product\product_class.twig */
class __TwigTemplate_9a543a6a0d38ae41fb0ed94891086fc1cad603d23376f4086f02435aadc6aeca extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\product_class.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\product_class.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["clearForm"]) || array_key_exists("clearForm", $context) ? $context["clearForm"] : (function () { throw new RuntimeError('Variable "clearForm" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\product_class.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script>
        \$(function() {

            // 無制限チェックボックス初期表示
            \$('input[id\$=_stock_unlimited]').each(function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });


            // 無制限チェックボックス
            \$('input[id\$=_stock_unlimited]').on('click', function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });

            // 登録チェックボックス
            \$('#check-all').click(function() {
                var checked = \$('#check-all').prop('checked');
                if (checked) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });

            // 1行目をコピーボタン
            \$('#copy').on('click', function(event) {
                event.preventDefault();

                var check = \$('#product_class_matrix_product_classes_0_add').prop('checked');
                \$('input[id\$=_add]').prop('checked', check);

                var product_code = \$('#product_class_matrix_product_classes_0_code').val();
                \$('input[id\$=_code]').val(product_code);

                var stock = \$('#product_class_matrix_product_classes_0_stock').val();
                \$('input[id\$=_stock]').val(stock);

                var stock_unlimited = \$('#product_class_matrix_product_classes_0_stock_unlimited').prop('checked');
                // 無制限チェックボックス
                \$('input[id\$=_stock_unlimited]').each(function() {
                    var index = \$(this).attr('id').match(/\\d+/);

                    if (stock_unlimited) {
                        \$(this).prop('checked', true);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                    } else {
                        \$(this).prop('checked', false);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                    }
                });

                var sale_limit = \$('#product_class_matrix_product_classes_0_sale_limit').val();
                \$('input[id\$=_sale_limit]').val(sale_limit);

                var price01 = \$('#product_class_matrix_product_classes_0_price01').val();
                \$('input[id\$=_price01]').val(price01);

                var price02 = \$('#product_class_matrix_product_classes_0_price02').val();
                \$('input[id\$=_price02]').val(price02);

                var delivery_fee = \$('#product_class_matrix_product_classes_delivery_fee').val();
                \$('input[id\$=_delivery_fee]').val(delivery_fee);

                var delivery_duration = \$('#product_class_matrix_product_classes_0_delivery_duration').val();
                \$('select[id\$=_delivery_duration]').val(delivery_duration);

                var tax_rate = \$('#product_class_matrix_product_classes_0_tax_rate').val();
                \$('input[id\$=_tax_rate]').val(tax_rate);

                var sale_type = \$('#product_class_matrix_product_classes_0_sale_type').val();
                \$('select[id\$=_sale_type]').val(sale_type);
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 114
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 118, $this->source); })()), "hasProductClass", [], "any", false, false, false, 118)) {
            // line 119
            echo "
                        ";
            // line 121
            echo "                        <div id=\"ex-product_class-header\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title align-middle\">";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 124, $this->source); })()), "name", [], "any", false, false, false, 124), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    ";
            // line 128
            echo "                                    <button class=\"btn btn-ec-delete\" type=\"button\"
                                            data-toggle=\"modal\"
                                            data-target=\"#initializationConfirm\">";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset"), "html", null, true);
            echo "
                                    </button>
                                    ";
            // line 133
            echo "                                    <div class=\"modal fade\" id=\"initializationConfirm\" tabindex=\"-1\"
                                         role=\"dialog\"
                                         aria-labelledby=\"deleteConfirm\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p class=\"text-left\">
                                                        ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_message"), "html", null, true);
            echo "</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                            data-dismiss=\"modal\">
                                                        ";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "
                                                    </button>
                                                    <form method=\"post\"
                                                          action=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class_clear", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 154, $this->source); })()), "id", [], "any", false, false, false, 154), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 154, $this->source); })())]), "html", null, true);
            echo "\">
                                                        ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["clearForm"]) || array_key_exists("clearForm", $context) ? $context["clearForm"] : (function () { throw new RuntimeError('Variable "clearForm" does not exist.', 155, $this->source); })()), "_token", [], "any", false, false, false, 155), 'widget');
            echo "
                                                        <button class=\"btn btn-ec-delete\" type=\"submit\">
                                                            ";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__reset_confirm_excecute"), "html", null, true);
            echo "
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"ex-product_class-body\" class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col\">
                                    <div class=\"d-inline-block mr-2\">
                                        <span>";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"d-inline-block\">
                                        <span>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 174, $this->source); })()), "name", [], "any", false, false, false, 174), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 174, $this->source); })()), "backend_name", [], "any", false, false, false, 174), "html", null, true);
            echo "]</span>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 178
            if ((isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 178, $this->source); })())) {
                // line 179
                echo "                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"d-inline-block mr-2\">
                                            <span>";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</span>
                                        </div>
                                        <div class=\"d-inline-block\">
                                            <span>";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 185, $this->source); })()), "name", [], "any", false, false, false, 185), "html", null, true);
                echo " [";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 185, $this->source); })()), "backend_name", [], "any", false, false, false, 185), "html", null, true);
                echo "]</span>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            // line 190
            echo "                        </div>
                    ";
        } else {
            // line 192
            echo "                        ";
            // line 193
            echo "                        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 193, $this->source); })())]), "html", null, true);
            echo "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <span class=\"card-title align-middle\">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 198, $this->source); })()), "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</span>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        ";
            // line 202
            echo "                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">
                                            ";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__create"), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-row mb-2\">
                                    ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "class_name1", [], "any", false, false, false, 210), 'widget');
            echo "
                                    ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "class_name1", [], "any", false, false, false, 211), 'errors');
            echo "
                                </div>
                                <div class=\"form-row\">
                                    ";
            // line 214
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "class_name2", [], "any", false, false, false, 214), 'widget');
            echo "
                                    ";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "class_name2", [], "any", false, false, false, 215), 'errors');
            echo "
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 220
        echo "                </div>

                ";
        // line 222
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "product_classes", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 223, $this->source); })()), "id", [], "any", false, false, false, 223), "return_product_list" => (isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 223, $this->source); })())]), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "class_name1", [], "any", false, false, false, 225), "vars", [], "any", false, false, false, 225), "full_name", [], "any", false, false, false, 225), "html", null, true);
            echo "\"
                               value=\"";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "class_name1", [], "any", false, false, false, 226), "vars", [], "any", false, false, false, 226), "value", [], "any", false, false, false, 226), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "class_name2", [], "any", false, false, false, 227), "vars", [], "any", false, false, false, 227), "full_name", [], "any", false, false, false, 227), "html", null, true);
            echo "\"
                               value=\"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "class_name2", [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "value", [], "any", false, false, false, 228), "html", null, true);
            echo "\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\">
                                            ";
            // line 234
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.procuct_class_count", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 235
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "product_classes", [], "any", false, false, false, 235))]), "html", null, true);
            // line 236
            echo "</span>
                                        ";
            // line 237
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "product_classes", [], "any", false, false, false, 237), 'errors');
            echo "
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <button type=\"button\" id=\"copy\" class=\"btn btn-ec-regular\">
                                            <i class=\"fa fa-files-o mr-1\"></i>
                                            <span>";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy_first_line"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">";
            // line 253
            (((isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 253, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName1"]) || array_key_exists("ClassName1", $context) ? $context["ClassName1"] : (function () { throw new RuntimeError('Variable "ClassName1" does not exist.', 253, $this->source); })()), "name", [], "any", false, false, false, 253), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 254
            (((isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 254, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ClassName2"]) || array_key_exists("ClassName2", $context) ? $context["ClassName2"] : (function () { throw new RuntimeError('Variable "ClassName2" does not exist.', 254, $this->source); })()), "name", [], "any", false, false, false, 254), "html", null, true))) : (print ("")));
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 258
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2\">";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</th>
                                    ";
            // line 260
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 260, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 260)) {
                // line 261
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 263
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 263, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 263)) {
                // line 264
                echo "                                        <th class=\"pt-2 pb-2\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</th>
                                    ";
            }
            // line 266
            echo "                                    <th class=\"pt-2 pb-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</th>
                                    <th class=\"pt-2 pb-2 pr-3\">";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</th>

                                    ";
            // line 270
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "product_classes", [], "any", false, false, false, 270));
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
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 271
                echo "                                        ";
                // line 272
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 272)) {
                    // line 273
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["product_class_form"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 273), "eccube_form_options", [], "any", false, false, false, 273), "auto_render", [], "any", false, false, false, 273)) {
                            // line 274
                            echo "                                                <th class=\"pt-2 pb-2\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 274), "label", [], "any", false, false, false, 274)), "html", null, true);
                            echo "</th>
                                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 276
                    echo "                                        ";
                }
                // line 277
                echo "                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            echo "
                                    </thead>
                                    ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "product_classes", [], "any", false, false, false, 280));
            foreach ($context['_seq'] as $context["_key"] => $context["product_class_form"]) {
                // line 281
                echo "                                        <tr id=\"ex-product_class-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 281), "name", [], "any", false, false, false, 281), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">
                                                ";
                // line 283
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "checked", [], "any", false, false, false, 283), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 286
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 286), "value", [], "any", false, false, false, 286), "ClassCategory1", [], "any", false, false, false, 286), "html", null, true);
                echo "
                                                ";
                // line 287
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory1", [], "any", false, false, false, 287), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product_class_form"], "vars", [], "any", false, false, false, 290), "value", [], "any", false, false, false, 290), "ClassCategory2", [], "any", false, false, false, 290), "html", null, true);
                echo "
                                                ";
                // line 291
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "ClassCategory2", [], "any", false, false, false, 291), 'widget');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 294
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, false, 294), 'widget');
                echo "
                                                ";
                // line 295
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "code", [], "any", false, false, false, 295), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-5\">
                                                        ";
                // line 300
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, false, 300), 'widget');
                echo "
                                                        ";
                // line 301
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock", [], "any", false, false, false, 301), 'errors');
                echo "
                                                    </div>
                                                    <div class=\"col-auto\">
                                                        <div class=\"form-check form-check-inline\">
                                                            ";
                // line 305
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "stock_unlimited", [], "any", false, false, false, 305), 'widget');
                echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        ";
                // line 313
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, false, 313), 'widget');
                echo "
                                                        ";
                // line 314
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_limit", [], "any", false, false, false, 314), 'errors');
                echo "
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 319
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, false, 319), 'widget');
                echo "
                                                ";
                // line 320
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price01", [], "any", false, false, false, 320), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 323
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, false, 323), 'widget');
                echo "
                                                ";
                // line 324
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "price02", [], "any", false, false, false, 324), 'errors');
                echo "
                                            </td>
                                            ";
                // line 326
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 326, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 326)) {
                    // line 327
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 328
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, false, 328), 'widget');
                    echo "
                                                    ";
                    // line 329
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_fee", [], "any", false, false, false, 329), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 332
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 332, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 332)) {
                    // line 333
                    echo "                                                <td class=\"align-middle\">
                                                    ";
                    // line 334
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, false, 334), 'widget');
                    echo "
                                                    ";
                    // line 335
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "tax_rate", [], "any", false, false, false, 335), 'errors');
                    echo "
                                                </td>
                                            ";
                }
                // line 338
                echo "                                            <td class=\"align-middle\">
                                                ";
                // line 339
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, false, 339), 'widget');
                echo "
                                                ";
                // line 340
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "delivery_duration", [], "any", false, false, false, 340), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle pr-3\">
                                                ";
                // line 343
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, false, 343), 'widget');
                echo "
                                                ";
                // line 344
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["product_class_form"], "sale_type", [], "any", false, false, false, 344), 'errors');
                echo "
                                            </td>
                                            ";
                // line 347
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["product_class_form"]);
                foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 347), "eccube_form_options", [], "any", false, false, false, 347), "auto_render", [], "any", false, false, false, 347)) {
                        // line 348
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 348), "eccube_form_options", [], "any", false, false, false, 348), "form_theme", [], "any", false, false, false, 348)) {
                            // line 349
                            echo "                                                    ";
                            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 349), "eccube_form_options", [], "any", false, false, false, 349), "form_theme", [], "any", false, false, false, 349)], true);
                            // line 350
                            echo "                                                    ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                            echo "
                                                ";
                        } else {
                            // line 352
                            echo "                                                    <td class=\"align-middle pr-3\">
                                                        ";
                            // line 353
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                            echo "
                                                        ";
                            // line 354
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                            echo "
                                                    </td>
                                                ";
                        }
                        // line 357
                        echo "                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 358
                echo "                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_class_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                            ";
            // line 368
            if ((isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 368, $this->source); })())) {
                // line 369
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 371
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            } else {
                // line 374
                echo "                                                <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 374, $this->source); })()), "id", [], "any", false, false, false, 374)]), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>";
                // line 376
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                                </a>
                                            ";
            }
            // line 379
            echo "                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" name=\"";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "save", [], "any", false, false, false, 384), "vars", [], "any", false, false, false, 384), "full_name", [], "any", false, false, false, 384), "html", null, true);
            echo "\" type=\"submit\">
                                                    ";
            // line 385
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
            echo "
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                ";
        } else {
            // line 396
            echo "                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                        ";
            // line 401
            if ((isset($context["return_product_list"]) || array_key_exists("return_product_list", $context) ? $context["return_product_list"] : (function () { throw new RuntimeError('Variable "return_product_list" does not exist.', 401, $this->source); })())) {
                // line 402
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product", ["resume" => 1]);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 404
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            } else {
                // line 407
                echo "                                            <a class=\"c-baseLink\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 407, $this->source); })()), "id", [], "any", false, false, false, 407)]), "html", null, true);
                echo "\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>";
                // line 409
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            // line 412
            echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 418
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Product\\product_class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  894 => 418,  886 => 412,  880 => 409,  874 => 407,  868 => 404,  862 => 402,  860 => 401,  853 => 396,  839 => 385,  835 => 384,  828 => 379,  822 => 376,  816 => 374,  810 => 371,  804 => 369,  802 => 368,  792 => 360,  785 => 358,  778 => 357,  772 => 354,  768 => 353,  765 => 352,  759 => 350,  756 => 349,  753 => 348,  747 => 347,  742 => 344,  738 => 343,  732 => 340,  728 => 339,  725 => 338,  719 => 335,  715 => 334,  712 => 333,  709 => 332,  703 => 329,  699 => 328,  696 => 327,  694 => 326,  689 => 324,  685 => 323,  679 => 320,  675 => 319,  667 => 314,  663 => 313,  652 => 305,  645 => 301,  641 => 300,  633 => 295,  629 => 294,  623 => 291,  619 => 290,  613 => 287,  609 => 286,  603 => 283,  597 => 281,  593 => 280,  589 => 278,  575 => 277,  572 => 276,  562 => 274,  556 => 273,  553 => 272,  551 => 271,  533 => 270,  528 => 267,  523 => 266,  517 => 264,  514 => 263,  508 => 261,  506 => 260,  502 => 259,  498 => 258,  494 => 257,  490 => 256,  486 => 255,  482 => 254,  478 => 253,  464 => 242,  456 => 237,  453 => 236,  451 => 235,  450 => 234,  441 => 228,  437 => 227,  433 => 226,  429 => 225,  425 => 224,  420 => 223,  418 => 222,  414 => 220,  406 => 215,  402 => 214,  396 => 211,  392 => 210,  382 => 203,  379 => 202,  373 => 198,  366 => 194,  361 => 193,  359 => 192,  355 => 190,  343 => 185,  337 => 182,  332 => 179,  330 => 178,  319 => 174,  313 => 171,  296 => 157,  291 => 155,  287 => 154,  281 => 151,  273 => 146,  263 => 139,  255 => 133,  250 => 130,  246 => 128,  240 => 124,  235 => 121,  232 => 119,  230 => 118,  224 => 114,  214 => 113,  116 => 22,  106 => 21,  87 => 16,  68 => 15,  57 => 11,  55 => 19,  53 => 18,  51 => 13,  38 => 11,);
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
{% extends '@admin/default_frame.twig' %}

{% set menus = ['product', 'product_edit'] %}

{% block title %}{{ 'admin.product.product_class_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}
{% form_theme clearForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script>
        \$(function() {

            // 無制限チェックボックス初期表示
            \$('input[id\$=_stock_unlimited]').each(function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });


            // 無制限チェックボックス
            \$('input[id\$=_stock_unlimited]').on('click', function() {
                var check = \$(this).prop('checked');
                var index = \$(this).attr('id').match(/\\d+/);

                if (check) {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                } else {
                    \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                }
            });

            // 登録チェックボックス
            \$('#check-all').click(function() {
                var checked = \$('#check-all').prop('checked');
                if (checked) {
                    \$('input[id\$=_checked]').prop('checked', true);
                } else {
                    \$('input[id\$=_checked]').prop('checked', false);
                }
            });

            // 1行目をコピーボタン
            \$('#copy').on('click', function(event) {
                event.preventDefault();

                var check = \$('#product_class_matrix_product_classes_0_add').prop('checked');
                \$('input[id\$=_add]').prop('checked', check);

                var product_code = \$('#product_class_matrix_product_classes_0_code').val();
                \$('input[id\$=_code]').val(product_code);

                var stock = \$('#product_class_matrix_product_classes_0_stock').val();
                \$('input[id\$=_stock]').val(stock);

                var stock_unlimited = \$('#product_class_matrix_product_classes_0_stock_unlimited').prop('checked');
                // 無制限チェックボックス
                \$('input[id\$=_stock_unlimited]').each(function() {
                    var index = \$(this).attr('id').match(/\\d+/);

                    if (stock_unlimited) {
                        \$(this).prop('checked', true);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', true);
                    } else {
                        \$(this).prop('checked', false);
                        \$('#product_class_matrix_product_classes_' + index + '_stock').prop('disabled', false);
                    }
                });

                var sale_limit = \$('#product_class_matrix_product_classes_0_sale_limit').val();
                \$('input[id\$=_sale_limit]').val(sale_limit);

                var price01 = \$('#product_class_matrix_product_classes_0_price01').val();
                \$('input[id\$=_price01]').val(price01);

                var price02 = \$('#product_class_matrix_product_classes_0_price02').val();
                \$('input[id\$=_price02]').val(price02);

                var delivery_fee = \$('#product_class_matrix_product_classes_delivery_fee').val();
                \$('input[id\$=_delivery_fee]').val(delivery_fee);

                var delivery_duration = \$('#product_class_matrix_product_classes_0_delivery_duration').val();
                \$('select[id\$=_delivery_duration]').val(delivery_duration);

                var tax_rate = \$('#product_class_matrix_product_classes_0_tax_rate').val();
                \$('input[id\$=_tax_rate]').val(tax_rate);

                var sale_type = \$('#product_class_matrix_product_classes_0_sale_type').val();
                \$('select[id\$=_sale_type]').val(sale_type);
            });
        });
    </script>
{% endblock javascript %}


{% block main %}
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    {% if Product.hasProductClass %}

                        {# 規格あり商品 #}
                        <div id=\"ex-product_class-header\" class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title align-middle\">{{ Product.name }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    {# 規格の初期化ボタン #}
                                    <button class=\"btn btn-ec-delete\" type=\"button\"
                                            data-toggle=\"modal\"
                                            data-target=\"#initializationConfirm\">{{ 'admin.product.product_class__reset'|trans }}
                                    </button>
                                    {# 規格の初期化モーダル #}
                                    <div class=\"modal fade\" id=\"initializationConfirm\" tabindex=\"-1\"
                                         role=\"dialog\"
                                         aria-labelledby=\"deleteConfirm\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">{{ 'admin.product.product_class__reset_confirm_title'|trans }}</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\"
                                                            aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    <p class=\"text-left\">
                                                        {{ 'admin.product.product_class__reset_confirm_message'|trans }}</p>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button class=\"btn btn-ec-sub\" type=\"button\"
                                                            data-dismiss=\"modal\">
                                                        {{ 'admin.common.cancel'|trans }}
                                                    </button>
                                                    <form method=\"post\"
                                                          action=\"{{ url('admin_product_product_class_clear', { id: Product.id, return_product_list: return_product_list }) }}\">
                                                        {{ form_widget(clearForm._token) }}
                                                        <button class=\"btn btn-ec-delete\" type=\"submit\">
                                                            {{ 'admin.product.product_class__reset_confirm_excecute'|trans }}
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"ex-product_class-body\" class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col\">
                                    <div class=\"d-inline-block mr-2\">
                                        <span>{{ 'admin.product.class_category1__short'|trans }}</span>
                                    </div>
                                    <div class=\"d-inline-block\">
                                        <span>{{ ClassName1.name }} [{{ 'admin.product.class_name__backend_name'|trans }}{{ 'admin.common.separator__colon'|trans }}{{ ClassName1.backend_name }}]</span>
                                    </div>
                                </div>
                            </div>
                            {% if ClassName2 %}
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div class=\"d-inline-block mr-2\">
                                            <span>{{ 'admin.product.class_category2__short'|trans }}</span>
                                        </div>
                                        <div class=\"d-inline-block\">
                                            <span>{{ ClassName2.name }} [{{ 'admin.product.class_name__backend_name'|trans }}{{ 'admin.common.separator__colon'|trans }}{{ ClassName2.backend_name }}]</span>
                                        </div>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% else %}
                        {# 規格なし商品 #}
                        <form method=\"post\" action=\"{{ url('admin_product_product_class', { id: Product.id, return_product_list: return_product_list }) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <span class=\"card-title align-middle\">{{ Product.name }}</span>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        {# 商品規格の設定ボタン #}
                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">
                                            {{ 'admin.product.product_class__create'|trans }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-row mb-2\">
                                    {{ form_widget(form.class_name1) }}
                                    {{ form_errors(form.class_name1) }}
                                </div>
                                <div class=\"form-row\">
                                    {{ form_widget(form.class_name2) }}
                                    {{ form_errors(form.class_name2) }}
                                </div>
                            </div>
                        </form>
                    {% endif %}
                </div>

                {% if form.product_classes|length > 0 %}
                    <form method=\"post\" action=\"{{ url('admin_product_product_class', {'id': Product.id, return_product_list: return_product_list }) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('_token') }}\">
                        <input type=\"hidden\" name=\"{{ form.class_name1.vars.full_name }}\"
                               value=\"{{ form.class_name1.vars.value }}\">
                        <input type=\"hidden\" name=\"{{ form.class_name2.vars.full_name }}\"
                               value=\"{{ form.class_name2.vars.value }}\">
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row justify-content-between\">
                                    <div class=\"col-6\">
                                        <span class=\"align-middle\">
                                            {{ 'admin.product.procuct_class_count'|trans({
                                                '%count%' : form.product_classes|length
                                            }) }}</span>
                                        {{ form_errors(form.product_classes) }}
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <button type=\"button\" id=\"copy\" class=\"btn btn-ec-regular\">
                                            <i class=\"fa fa-files-o mr-1\"></i>
                                            <span>{{ 'admin.product.copy_first_line'|trans }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"ex-product_class\" class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <th class=\"pt-2 pb-2 pl-3\">
                                        <input type=\"checkbox\" id=\"check-all\">
                                    </th>
                                    <th class=\"pt-2 pb-2\">{{ ClassName1 ? ClassName1.name }}</th>
                                    <th class=\"pt-2 pb-2\">{{ ClassName2 ? ClassName2.name }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.stock__short'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.sale_limit'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.normal_price'|trans }}</th>
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.sale_price'|trans }}</th>
                                    {% if BaseInfo.option_product_delivery_fee %}
                                        <th class=\"pt-2 pb-2\">{{ 'admin.product.delivery_fee'|trans }}</th>
                                    {% endif %}
                                    {% if BaseInfo.option_product_tax_rule %}
                                        <th class=\"pt-2 pb-2\">{{ 'admin.product.tax_rate'|trans }}</th>
                                    {% endif %}
                                    <th class=\"pt-2 pb-2\">{{ 'admin.product.delivery_duration'|trans }}</th>
                                    <th class=\"pt-2 pb-2 pr-3\">{{ 'admin.product.sale_type'|trans }}</th>

                                    {# エンティティ拡張の自動出力 #}
                                    {% for product_class_form in form.product_classes %}
                                        {# product_class_formはcollection typeなので, 1行目だけ出力する #}
                                        {% if loop.first %}
                                            {% for f in product_class_form if f.vars.eccube_form_options.auto_render %}
                                                <th class=\"pt-2 pb-2\">{{ f.vars.label|trans }}</th>
                                            {% endfor %}
                                        {% endif %}
                                    {% endfor %}

                                    </thead>
                                    {% for product_class_form in form.product_classes %}
                                        <tr id=\"ex-product_class-{{ product_class_form.vars.name }}\">
                                            <td class=\"align-middle pl-3\">
                                                {{ form_widget(product_class_form.checked) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ product_class_form.vars.value.ClassCategory1 }}
                                                {{ form_widget(product_class_form.ClassCategory1) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ product_class_form.vars.value.ClassCategory2 }}
                                                {{ form_widget(product_class_form.ClassCategory2) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.code) }}
                                                {{ form_errors(product_class_form.code) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-5\">
                                                        {{ form_widget(product_class_form.stock) }}
                                                        {{ form_errors(product_class_form.stock) }}
                                                    </div>
                                                    <div class=\"col-auto\">
                                                        <div class=\"form-check form-check-inline\">
                                                            {{ form_widget(product_class_form.stock_unlimited) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                <div class=\"form-row\">
                                                    <div class=\"col-6\">
                                                        {{ form_widget(product_class_form.sale_limit) }}
                                                        {{ form_errors(product_class_form.sale_limit) }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.price01) }}
                                                {{ form_errors(product_class_form.price01) }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.price02) }}
                                                {{ form_errors(product_class_form.price02) }}
                                            </td>
                                            {% if BaseInfo.option_product_delivery_fee %}
                                                <td class=\"align-middle\">
                                                    {{ form_widget(product_class_form.delivery_fee) }}
                                                    {{ form_errors(product_class_form.delivery_fee) }}
                                                </td>
                                            {% endif %}
                                            {% if BaseInfo.option_product_tax_rule %}
                                                <td class=\"align-middle\">
                                                    {{ form_widget(product_class_form.tax_rate) }}
                                                    {{ form_errors(product_class_form.tax_rate) }}
                                                </td>
                                            {% endif %}
                                            <td class=\"align-middle\">
                                                {{ form_widget(product_class_form.delivery_duration) }}
                                                {{ form_errors(product_class_form.delivery_duration) }}
                                            </td>
                                            <td class=\"align-middle pr-3\">
                                                {{ form_widget(product_class_form.sale_type) }}
                                                {{ form_errors(product_class_form.sale_type) }}
                                            </td>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in product_class_form if f.vars.eccube_form_options.auto_render %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <td class=\"align-middle pr-3\">
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </td>
                                                {% endif %}
                                            {% endfor %}
                                        </tr>
                                    {% endfor %}
                                </table>
                            </div>
                        </div>
                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                            {% if return_product_list %}
                                                <a class=\"c-baseLink\" href=\"{{ url('admin_product', {'resume': 1}) }}\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>{{ 'admin.product.product_list'|trans }}</span>
                                                </a>
                                            {% else %}
                                                <a class=\"c-baseLink\" href=\"{{ url('admin_product_product_edit', {'id': Product.id}) }}\">
                                                    <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                    <span>{{ 'admin.product.product_registration'|trans }}</span>
                                                </a>
                                            {% endif %}
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" name=\"{{ form.save.vars.full_name }}\" type=\"submit\">
                                                    {{ 'admin.common.registration'|trans }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                {% else %}
                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\">
                                        {% if return_product_list %}
                                            <a class=\"c-baseLink\" href=\"{{ url('admin_product', {'resume': 1}) }}\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>{{ 'admin.product.product_list'|trans }}</span>
                                            </a>
                                        {% else %}
                                            <a class=\"c-baseLink\" href=\"{{ url('admin_product_product_edit', {'id': Product.id}) }}\">
                                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                                <span>{{ 'admin.product.product_registration'|trans }}</span>
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product\\product_class.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Product\\product_class.twig");
    }
}
