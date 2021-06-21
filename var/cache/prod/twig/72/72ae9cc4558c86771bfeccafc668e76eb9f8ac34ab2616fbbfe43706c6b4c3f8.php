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

/* @admin/Setting\Shop\csv.twig */
class __TwigTemplate_037e2df736f8705c4202999e171b1aa7a1aba8fa9b32c3d8c2e3aeac3070aa31 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_csv"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting\\Shop\\csv.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$(function() {

            function add(event) {
                \$('#' + event.data.from + ' option:selected')
                    .appendTo(\$('#' + event.data.to))
                    .prop('selected', false);
            }

            function addAll(event) {
                \$('#' + event.data.from + ' option').each(function() {
                    \$(this).appendTo(\$('#' + event.data.to));
                    \$(this).prop('selected', false);// 選択状態の解除
                });
            }

            \$('#add').on('click', {from: 'csv-not-output', to: 'csv-output'}, add);
            \$('#add-all').on('click', {from: 'csv-not-output', to: 'csv-output'}, addAll);
            \$('#remove').on('click', {from: 'csv-output', to: 'csv-not-output'}, add);
            \$('#remove-all').on('click', {from: 'csv-output', to: 'csv-not-output'}, addAll);

            \$('.move').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'up' ? \$op.first().prev().before(\$op) : \$op.last().next().after(\$op);
                }
            });

            \$('.move-most').click(function() {
                var \$op = \$('#csv-output option:selected');
                var val = \$(this).data('value');
                if (\$op.length) {
                    val == 'top' ? \$op.prependTo('#csv-output') : \$op.appendTo('#csv-output');
                }
            });

            \$('#csv-type').on('change', function() {
                var id = \$(this).val();
                var href = '";
        // line 60
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv");
        echo "' + '/' + id;
                location.href = href;
                return false;
            });

            \$('#csv-form').submit(function() {
                \$('#csv-not-output').children().prop('selected', true);
                \$('#csv-output').children().prop('selected', true);
            })
        });
    </script>
";
    }

    // line 73
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    <form id=\"csv-form\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_shop_csv", ["id" => ($context["id"] ?? null)]), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("_token"), "html", null, true);
        echo "\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_columns"), "html", null, true);
        echo "\">
                                <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_columns"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row mb-4 justify-content-between\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.csv.csv_type"), "html", null, true);
        echo "\">
                                        <span>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.csv_type"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-6\">
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "csv_type", [], "any", false, false, false, 94), 'widget', ["id" => "csv-type"]);
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect1\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.non_output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "csv_not_output", [], "any", false, false, false, 102), 'widget', ["id" => "csv-not-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add\"><i class=\"fa fa-arrow-right\"
                                                                                                  aria-hidden=\"true\"></i><span>&nbsp;";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__output"), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove\"><i class=\"fa fa-arrow-left\"
                                                                                                     aria-hidden=\"true\"><span>&nbsp;";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"add-all\"><i
                                                        class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"><span>&nbsp;";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_output"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block\" id=\"remove-all\"><i class=\"fa fa-arrow-circle-left\"
                                                                                                         aria-hidden=\"true\"><span>&nbsp;";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.operation__all_release"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"form-group\">
                                        <label for=\"FormControlSelect2\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.output_colmuns"), "html", null, true);
        echo "</label>
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "csv_output", [], "any", false, false, false, 141), 'widget', ["id" => "csv-output", "attr" => ["size" => "30"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-2 align-self-center\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\"><span>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order"), "html", null, true);
        echo "</span></div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"up\"><i class=\"fa fa-arrow-up\"
                                                                                                              aria-hidden=\"true\"><span>&nbsp;";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__up"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move\" data-value=\"down\"><i class=\"fa fa-arrow-down\"
                                                                                                                aria-hidden=\"true\"><span>&nbsp;";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__down"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"top\"><i class=\"fa fa-arrow-circle-up\"
                                                                                                                    aria-hidden=\"true\"><span>&nbsp;";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__top"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row mb-2\">
                                        <div class=\"col text-center\">
                                            <div class=\"btn btn-ec-regular btn-block move-most\" data-value=\"bottom\"><i class=\"fa fa-arrow-circle-down\"
                                                                                                                       aria-hidden=\"true\"><span>&nbsp;";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.order__bottom"), "html", null, true);
        echo "</span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            ";
        // line 179
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv.how_to_use"), "html", null, true));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting\\Shop\\csv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 195,  302 => 179,  292 => 172,  282 => 165,  272 => 158,  262 => 151,  254 => 146,  246 => 141,  242 => 140,  232 => 133,  222 => 126,  212 => 119,  202 => 112,  194 => 107,  186 => 102,  182 => 101,  172 => 94,  164 => 89,  160 => 88,  151 => 82,  147 => 81,  138 => 75,  133 => 74,  129 => 73,  113 => 60,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting\\Shop\\csv.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Setting\\Shop\\csv.twig");
    }
}
