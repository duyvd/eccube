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

/* @user_data/Product/Shopping/customize2_index.twig */
class __TwigTemplate_01b6276d74fd561ad79bbf6b302c731f316d3e09b8e2da4e060b257865b65b55 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize2_index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize2_index.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/Product/Shopping/customize2_index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        \$(function() {
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_redirect_to");
        echo "').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            ";
        // line 30
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 31
            echo "            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    var name = \$(this).text();
                    var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                    \$(form[index]).empty().append(input);
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    \$(hidden[index]).val(\$(form[index]).children('input').val());
                });

                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();

                \$.ajax({
                    url: \"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_customer");
            echo "\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }
                }).fail(function() {
                    alert('更新に失敗しました。入力内容を確認してください。');
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            ";
        }
        // line 95
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 100
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                ";
        // line 110
        $context["step"] = 1;
        // line 111
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 112, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 112, $this->source); })()) + 1);
        // line 113
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                    </div>
                </li>
                ";
        // line 117
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 118
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 119, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 119, $this->source); })()) + 1);
            // line 120
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 125
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 126, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 126, $this->source); })()) + 1);
        // line 127
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 132, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 132, $this->source); })()) + 1);
        // line 133
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 138, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 138, $this->source); })()) + 1);
        // line 139
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        ";
        // line 147
        echo twig_include($this->env, $context, "Shopping/alert.twig");
        echo "
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_confirm");
        echo "\">
        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "_token", [], "any", false, false, false, 151), 'widget');
        echo "
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "redirect_to", [], "any", false, false, false, 152), 'widget');
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 159
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 160
            echo "                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
            echo "</button>
                        </div>
                    ";
        }
        // line 164
        echo "                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo "<span class=\"customer-edit customer-name01\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 165, $this->source); })()), "name01", [], "any", false, false, false, 165), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-name02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 165, $this->source); })()), "name02", [], "any", false, false, false, 165), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                        <p class=\"ec-halfInput\"><span class=\"customer-edit customer-kana01\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 166, $this->source); })()), "kana01", [], "any", false, false, false, 166), "html", null, true);
        echo "</span> <span class=\"customer-edit customer-kana02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 166, $this->source); })()), "kana02", [], "any", false, false, false, 166), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-company_name\">";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 167, $this->source); })()), "companyName", [], "any", false, false, false, 167), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-zipInput\">〒<span class=\"customer-edit customer-postal_code\">";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 168, $this->source); })()), "postal_code", [], "any", false, false, false, 168), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-pref\">";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 169, $this->source); })()), "pref", [], "any", false, false, false, 169), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr01\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 169, $this->source); })()), "addr01", [], "any", false, false, false, 169), "html", null, true);
        echo "</span><span class=\"customer-edit customer-addr02\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 169, $this->source); })()), "addr02", [], "any", false, false, false, 169), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-telInput\"><span class=\"customer-edit customer-phone_number\">";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 170, $this->source); })()), "phone_number", [], "any", false, false, false, 170), "html", null, true);
        echo "</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-email\">";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), "html", null, true);
        echo "</span></p>
                    </div>
                    ";
        // line 173
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 174
            echo "                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お名前(カナ)"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
            echo "</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 243
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メールアドレス"), "html", null, true);
            echo "</label>
                                    <span class=\"ec-required\">";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("必須"), "html", null, true);
            echo "</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 264
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK"), "html", null, true);
            echo "</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("キャンセル"), "html", null, true);
            echo "</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 267, $this->source); })()), "name01", [], "any", false, false, false, 267), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 268, $this->source); })()), "name02", [], "any", false, false, false, 268), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 269, $this->source); })()), "kana01", [], "any", false, false, false, 269), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 270, $this->source); })()), "kana02", [], "any", false, false, false, 270), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 271, $this->source); })()), "companyName", [], "any", false, false, false, 271), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 272, $this->source); })()), "postal_code", [], "any", false, false, false, 272), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 273, $this->source); })()), "pref", [], "any", false, false, false, 273), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 274, $this->source); })()), "addr01", [], "any", false, false, false, 274), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 275, $this->source); })()), "addr02", [], "any", false, false, false, 275), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 276, $this->source); })()), "phone_number", [], "any", false, false, false, 276), "html", null, true);
            echo "\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 277, $this->source); })()), "email", [], "any", false, false, false, 277), "html", null, true);
            echo "\">
                    ";
        }
        // line 279
        echo "                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 284, $this->source); })()), "shippings", [], "any", false, false, false, 284));
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
            // line 285
            echo "                        ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 285);
            // line 286
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 287
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 287, $this->source); })()), "multiple", [], "any", false, false, false, 287)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
                echo ")";
            }
            // line 288
            echo "                            <div class=\"ec-orderDelivery__change\">
                                ";
            // line 289
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 290
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 290), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 290)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            } else {
                // line 292
                echo "                                    <button class=\"ec-inlineBtn\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 292), "html", null, true);
                echo "\" data-trigger=\"click\" data-path=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["shipping"], "id", [], "any", false, false, false, 292)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</button>
                                ";
            }
            // line 294
            echo "                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, false, 298));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 299
                echo "                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 301
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 301))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 301), "MainListImage", [], "any", false, false, false, 301)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 301), "html", null, true);
                echo "\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 303), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                                ";
                // line 304
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 304)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 304), "classCategory1", [], "any", false, false, false, 304))) {
                    // line 305
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 305), "classCategory1", [], "any", false, false, false, 305), "className", [], "any", false, false, false, 305), "name", [], "any", false, false, false, 305), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 305), "classCategory1", [], "any", false, false, false, 305), "html", null, true);
                    echo "</p>
     
                                                ";
                }
                // line 308
                echo "                                                ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 308)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 308), "classCategory2", [], "any", false, false, false, 308))) {
                    // line 309
                    echo "                                                    <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 309), "classCategory2", [], "any", false, false, false, 309), "className", [], "any", false, false, false, 309), "name", [], "any", false, false, false, 309), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 309), "classCategory2", [], "any", false, false, false, 309), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 311
                echo "                                                             
                                                ";
                // line 313
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 313), "material", [], "any", false, false, false, 313))) {
                    // line 314
                    echo "                                                        <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品素材"), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 314), "material", [], "any", false, false, false, 314), "html", null, true);
                    echo "</p>                                                    
                                                ";
                }
                // line 316
                echo "                                                ";
                // line 317
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 317), "outer_size", [], "any", false, false, false, 317))) {
                    // line 318
                    echo "                                                    <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 318), "outer_size", [], "any", false, false, false, 318)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 320
                echo "                                                ";
                // line 321
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 321), "inner_size", [], "any", false, false, false, 321))) {
                    // line 322
                    echo "                                                   <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("外寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 322), "inner_size", [], "any", false, false, false, 322), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 324
                echo "                                                ";
                // line 325
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 325), "self_weight", [], "any", false, false, false, 325) != 0)) {
                    // line 326
                    echo "                                                   <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("自重"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 326), "self_weight", [], "any", false, false, false, 326), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kg"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 327
                echo "               
                                                <p>";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, false, 328)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 328)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 328)), "html", null, true);
                echo "</span></p>
                                            </div>
                                        </div>
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 333
            echo "                            </ul>
                            <p>";
            // line 334
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 334, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, false, 337), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, false, 337), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, false, 337), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, false, 337), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                            <p>";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 338), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 338), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 338), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 338), "html", null, true);
            echo "</p>
                            <p>";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 339), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select\">
                                    <label>";
            // line 344
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                    ";
            // line 345
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "Shippings", [], "any", false, false, false, 345), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 345, $this->source); })()), [], "array", false, false, false, 345), "Delivery", [], "any", false, false, false, 345), 'widget', ["attr" => ["class" => "form-control", "data-trigger" => "change"]]);
            echo "
                                    ";
            // line 346
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "Shippings", [], "any", false, false, false, 346), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 346, $this->source); })()), [], "array", false, false, false, 346), "Delivery", [], "any", false, false, false, 346), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>";
            // line 349
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                    ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "Shippings", [], "any", false, false, false, 350), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 350, $this->source); })()), [], "array", false, false, false, 350), "shipping_delivery_date", [], "any", false, false, false, 350), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "Shippings", [], "any", false, false, false, 351), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 351, $this->source); })()), [], "array", false, false, false, 351), "shipping_delivery_date", [], "any", false, false, false, 351), 'errors');
            echo "
                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                    ";
            // line 355
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 355, $this->source); })()), "Shippings", [], "any", false, false, false, 355), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 355, $this->source); })()), [], "array", false, false, false, 355), "DeliveryTime", [], "any", false, false, false, 355), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    ";
            // line 356
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "Shippings", [], "any", false, false, false, 356), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 356, $this->source); })()), [], "array", false, false, false, 356), "DeliveryTime", [], "any", false, false, false, 356), 'errors');
            echo "
                                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                    <div class=\"ec-orderDelivery__edit\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"";
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_shipping_multiple");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先を追加する"), "html", null, true);
        echo "</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-radio\">
                        ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "Payment", [], "any", false, false, false, 370));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 371
            echo "                            <div style=\"display: block;\">
                                ";
            // line 372
            $context["Payment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "Payment", [], "any", false, false, false, 372), "vars", [], "any", false, false, false, 372), "choices", [], "any", false, false, false, 372), $context["key"], [], "array", false, false, false, 372), "data", [], "any", false, false, false, 372);
            // line 373
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["data-trigger" => "change"]]);
            echo "
                                ";
            // line 374
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Payment"]) || array_key_exists("Payment", $context) ? $context["Payment"] : (function () { throw new RuntimeError('Variable "Payment" does not exist.', 374, $this->source); })()), "payment_image", [], "any", false, false, false, 374))) {
                // line 375
                echo "                                    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["Payment"]) || array_key_exists("Payment", $context) ? $context["Payment"] : (function () { throw new RuntimeError('Variable "Payment" does not exist.', 375, $this->source); })()), "payment_image", [], "any", false, false, false, 375), "save_image"), "html", null, true);
                echo "\"></p>
                                ";
            }
            // line 377
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        echo "                    </div>
                    <div class=\"ec-input ";
        // line 380
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "Payment", [], "any", false, false, false, 380))) ? (" error") : (""));
        echo "\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), "Payment", [], "any", false, false, false, 380), 'errors');
        echo "</div>
                </div>
                ";
        // line 382
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 382, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 382) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 382, $this->source); })()), "Customer", [], "any", false, false, false, 382)))) {
            // line 383
            echo "                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>";
            // line 385
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                        </div>
                        <div class=\"ec-input ";
            // line 387
            echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "use_point", [], "any", false, false, false, 387))) ? (" error") : (""));
            echo "\">
                            <p>";
            // line 388
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%point% pt が利用可能です。", ["%point%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 388, $this->source); })()), "Customer", [], "any", false, false, false, 388), "Point", [], "any", false, false, false, 388))]), "html", null, true);
            echo "</p>
                            ";
            // line 389
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "use_point", [], "any", false, false, false, 389), 'widget', ["attr" => ["type" => "text", "class" => "form-control", "data-trigger" => "change"]]);
            echo "
                            ";
            // line 390
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 390, $this->source); })()), "use_point", [], "any", false, false, false, 390), 'errors');
            echo "
                        </div>
                    </div>
                ";
        }
        // line 394
        echo "                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"ec-input\">
                        ";
        // line 399
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 399, $this->source); })()), "message", [], "any", false, false, false, 399), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)"), "rows" => "6"]]);
        echo "
                        ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "message", [], "any", false, false, false, 400), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd class=\"ec-totalBox__specTotal\">";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 408, $this->source); })()), "subtotal", [], "any", false, false, false, 408)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 412, $this->source); })()), "charge", [], "any", false, false, false, 412)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 416, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, false, 416)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 418
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 418, $this->source); })()), "taxable_discount", [], "any", false, false, false, 418) < 0)) {
            // line 419
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 420
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 421
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 421, $this->source); })()), "taxable_discount", [], "any", false, false, false, 421)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 424
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 424, $this->source); })()), "taxable_total", [], "any", false, false, false, 424)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 425, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 425));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 426
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 431, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 431));
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
            // line 432
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 432)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 433
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 434
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 434), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 435)), "html", null, true);
            echo "</dd>
                        </dl>
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
        // line 438
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 438, $this->source); })()), "payment_total", [], "any", false, false, false, 438)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 439
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 439, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 439) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 439, $this->source); })()), "Customer", [], "any", false, false, false, 439)))) {
            // line 440
            echo "                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 442
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 443
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 443, $this->source); })()), "UsePoint", [], "any", false, false, false, 443)), "html", null, true);
            echo " pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">";
            // line 446
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                            <dd><span class=\"ec-font-bold\">";
            // line 447
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 447, $this->source); })()), "AddPoint", [], "any", false, false, false, 447)), "html", null, true);
            echo " pt</span></dd>
                        </dl>
                    </div>
                    ";
        }
        // line 451
        echo "                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("確認する"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 453
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに戻る"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@user_data/Product/Shopping/customize2_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1112 => 453,  1108 => 452,  1105 => 451,  1098 => 447,  1094 => 446,  1088 => 443,  1084 => 442,  1080 => 440,  1078 => 439,  1069 => 438,  1052 => 435,  1048 => 434,  1045 => 433,  1040 => 432,  1022 => 431,  1013 => 428,  1009 => 427,  1006 => 426,  1002 => 425,  993 => 424,  987 => 421,  983 => 420,  980 => 419,  978 => 418,  973 => 416,  969 => 415,  963 => 412,  959 => 411,  953 => 408,  949 => 407,  939 => 400,  935 => 399,  929 => 396,  925 => 394,  918 => 390,  914 => 389,  910 => 388,  906 => 387,  901 => 385,  897 => 383,  895 => 382,  888 => 380,  885 => 379,  878 => 377,  872 => 375,  870 => 374,  865 => 373,  863 => 372,  860 => 371,  856 => 370,  850 => 367,  840 => 362,  837 => 361,  818 => 356,  814 => 355,  810 => 354,  804 => 351,  800 => 350,  796 => 349,  790 => 346,  786 => 345,  782 => 344,  774 => 339,  765 => 338,  752 => 337,  746 => 334,  743 => 333,  727 => 328,  724 => 327,  715 => 326,  712 => 325,  710 => 324,  701 => 322,  698 => 321,  696 => 320,  687 => 318,  684 => 317,  682 => 316,  674 => 314,  671 => 313,  668 => 311,  660 => 309,  657 => 308,  648 => 305,  646 => 304,  638 => 303,  631 => 301,  627 => 299,  623 => 298,  617 => 294,  607 => 292,  597 => 290,  595 => 289,  592 => 288,  584 => 287,  581 => 286,  578 => 285,  561 => 284,  556 => 282,  551 => 279,  546 => 277,  542 => 276,  538 => 275,  534 => 274,  530 => 273,  526 => 272,  522 => 271,  518 => 270,  514 => 269,  510 => 268,  506 => 267,  501 => 265,  497 => 264,  484 => 254,  480 => 253,  467 => 243,  463 => 242,  443 => 225,  436 => 221,  428 => 216,  421 => 212,  417 => 211,  404 => 201,  390 => 190,  386 => 189,  372 => 178,  368 => 177,  363 => 174,  361 => 173,  356 => 171,  352 => 170,  344 => 169,  340 => 168,  336 => 167,  330 => 166,  320 => 165,  317 => 164,  311 => 161,  308 => 160,  306 => 159,  301 => 157,  293 => 152,  289 => 151,  285 => 150,  279 => 147,  269 => 140,  266 => 139,  263 => 138,  256 => 134,  253 => 133,  250 => 132,  243 => 128,  240 => 127,  237 => 126,  234 => 125,  227 => 121,  224 => 120,  221 => 119,  218 => 118,  216 => 117,  210 => 114,  207 => 113,  204 => 112,  201 => 111,  199 => 110,  189 => 103,  184 => 100,  174 => 99,  162 => 95,  124 => 60,  93 => 31,  91 => 30,  79 => 21,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
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
{% extends 'default_frame.twig' %}

{% form_theme form 'Form/form_div_layout.twig' %}

{% block javascript %}
    <script>
        \$(function() {
            var \$redirectCallback = function() {
                loadingOverlay();
                \$('#shopping_order_redirect_to').val(\$(this).attr('data-path'));
                \$('#shopping-form').attr('action', '{{ url(\"shopping_redirect_to\") }}').submit();
                setTimeout(function () {
                    loadingOverlay(\"hide\");
                }, 2000);
            };
            \$('[data-trigger]').each(function() {
                \$(this).on(\$(this).attr('data-trigger'), \$redirectCallback);
            });

            {% if is_granted('ROLE_USER') == false %}
            var edit = \$('.customer-edit');
            var hidden = \$('.customer-in');
            var form = \$('.customer-form');

            \$('#customer').click(function() {
                \$(edit).each(function(index) {
                    var name = \$(this).text();
                    var input = \$('<input id=\"edit' + index + '\" type=\"text\" />').val(name);
                    \$(form[index]).empty().append(input);
                });

                \$('.non-customer-display').hide();
                \$('.non-customer-edit').show();
                \$('.mod-button').show();
            });

            \$('#customer-ok').click(function() {
                \$(form).each(function(index) {
                    \$(hidden[index]).val(\$(form[index]).children('input').val());
                });

                var postData = {};
                \$(hidden).each(function() {
                    postData[\$(this).attr('name')] = \$(this).val();
                });

                loadingOverlay();

                \$.ajax({
                    url: \"{{ url('shopping_customer') }}\",
                    type: 'POST',
                    data: postData,
                    dataType: 'json'
                }).done(function(data) {
                    if (data.status == 'OK') {
                        \$(form).each(function(index) {
                            \$(edit[index]).empty().text(\$(form[index]).children('input').val());
                            \$(form[index]).empty();
                        });

                        // kana field
                        \$(edit[2]).empty().text(data.kana01);
                        \$(edit[3]).empty().text(data.kana02);
                        \$('#customer-kana01').val(data.kana01);
                        \$('#customer-kana02').val(data.kana02);
                    }
                }).fail(function() {
                    alert('更新に失敗しました。入力内容を確認してください。');
                }).always(function(data) {
                    // overlayを無効
                    loadingOverlay('hide');
                });

                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });

            \$('#customer-cancel').click(function() {
                \$('.non-customer-display').show();
                \$('.non-customer-edit').hide();
                \$('.mod-button').hide();
            });
            {% endif %}
        });
    </script>
{% endblock javascript %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'ご注文手続き'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                {% set step = 1 %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                    </div>
                </li>
                {% if is_granted('ROLE_USER') == false %}
                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                        </div>
                        <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                        </div>
                    </li>
                {% endif %}
                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ '完了'|trans }}
                    </div>
                </li>
            </ul>
        </div>

        <!-- アラートメッセージ -->
        {{ include('Shopping/alert.twig') }}
    </div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_confirm') }}\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.redirect_to) }}
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderAccount\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お客様情報'|trans }}</h2>
                    </div>
                    {% if is_granted('ROLE_USER') == false %}
                        <div class=\"ec-orderAccount__change non-customer-display\">
                            <button id=\"customer\" class=\"ec-inlineBtn\" type=\"button\">{{ '変更'|trans }}</button>
                        </div>
                    {% endif %}
                    <div class=\"ec-orderAccount__account non-customer-display\">
                        <p class=\"ec-halfInput\">{{ ''|trans }}<span class=\"customer-edit customer-name01\">{{ Order.name01 }}</span> <span class=\"customer-edit customer-name02\">{{ Order.name02 }}</span>{{ ' 様'|trans }}</p>
                        <p class=\"ec-halfInput\"><span class=\"customer-edit customer-kana01\">{{ Order.kana01 }}</span> <span class=\"customer-edit customer-kana02\">{{ Order.kana02 }}</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-company_name\">{{ Order.companyName }}</span></p>
                        <p class=\"ec-zipInput\">〒<span class=\"customer-edit customer-postal_code\">{{ Order.postal_code }}</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-pref\">{{ Order.pref }}</span><span class=\"customer-edit customer-addr01\">{{ Order.addr01 }}</span><span class=\"customer-edit customer-addr02\">{{ Order.addr02 }}</span></p>
                        <p class=\"ec-telInput\"><span class=\"customer-edit customer-phone_number\">{{ Order.phone_number }}</span></p>
                        <p class=\"ec-input\"><span class=\"customer-edit customer-email\">{{ Order.email }}</span></p>
                    </div>
                    {% if is_granted('ROLE_USER') == false %}
                        <div class=\"ec-borderedDefs  non-customer-edit\" style=\"display:none;\">
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'お名前'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-name01\"></span>
                                        <span class=\"customer-form customer-name02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'お名前(カナ)'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-kana01\"></span>
                                        <span class=\"customer-form customer-kana02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label\" for=\"nonmember_company_name\">{{ '会社名'|trans }}</label>
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput\">
                                        <span class=\"customer-form customer-company_name\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ '住所'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput\">
                                        <span>{{ '〒'|trans }}</span>
                                        <span class=\"customer-form customer-postal_code\"></span>
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\">
                                                    <img src=\"{{ asset('assets/icon/question-white.svg') }}\" alt=\"\">
                                                </div>
                                            </div>
                                            <a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\">
                                                <span>{{ '郵便番号検索'|trans }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=\"ec-select\">
                                        <span class=\"customer-form customer-address_pref\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr01\"></span>
                                    </div>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-address_addr02\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\" for=\"nonmember_phone_number\">{{ '電話番号'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput\">
                                        <span class=\"customer-form customer-phone_number\"></span>
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <label class=\"ec-label required\">{{ 'メールアドレス'|trans }}</label>
                                    <span class=\"ec-required\">{{ '必須'|trans }}</span>
                                </dt>
                                <dd>
                                    <div class=\"ec-input\">
                                        <span class=\"customer-form customer-email\"></span>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class=\"mod-button\" style=\"display:none;\">
                            <span id=\"customer-ok\"><button type=\"button\" class=\"ec-inlineBtn\">{{ 'OK'|trans }}</button></span>
                            <span id=\"customer-cancel\"><button type=\"button\" class=\"ec-inlineBtn\">{{ 'キャンセル'|trans }}</button></span>
                        </div>
                        <input type=\"hidden\" id=\"customer-name01\" class=\"customer-in\" name=\"customer_name01\" value=\"{{ Order.name01 }}\">
                        <input type=\"hidden\" id=\"customer-name02\" class=\"customer-in\" name=\"customer_name02\" value=\"{{ Order.name02 }}\">
                        <input type=\"hidden\" id=\"customer-kana01\" class=\"customer-in\" name=\"customer_kana01\" value=\"{{ Order.kana01 }}\">
                        <input type=\"hidden\" id=\"customer-kana02\" class=\"customer-in\" name=\"customer_kana02\" value=\"{{ Order.kana02 }}\">
                        <input type=\"hidden\" id=\"customer-company-name\" class=\"customer-in\" name=\"customer_company_name\" value=\"{{ Order.companyName }}\">
                        <input type=\"hidden\" id=\"customer-postal_code\" class=\"customer-in\" name=\"customer_postal_code\" value=\"{{ Order.postal_code }}\">
                        <input type=\"hidden\" id=\"customer-pref\" class=\"customer-in\" name=\"customer_pref\" value=\"{{ Order.pref }}\">
                        <input type=\"hidden\" id=\"customer-addr01\" class=\"customer-in\" name=\"customer_addr01\" value=\"{{ Order.addr01 }}\">
                        <input type=\"hidden\" id=\"customer-addr02\" class=\"customer-in\" name=\"customer_addr02\" value=\"{{ Order.addr02 }}\">
                        <input type=\"hidden\" id=\"customer-phone_number\" class=\"customer-in\" name=\"customer_phone_number\" value=\"{{ Order.phone_number }}\">
                        <input type=\"hidden\" id=\"customer-email\" class=\"customer-in\" name=\"customer_email\" value=\"{{ Order.email }}\">
                    {% endif %}
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ '配送情報'|trans }}</h2>
                    </div>
                    {% for shipping in Order.shippings %}
                        {% set idx = loop.index0 %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__title\">{{ 'お届け先'|trans }}{% if Order.multiple %}({{ loop.index }}){% endif %}
                            <div class=\"ec-orderDelivery__change\">
                                {% if is_granted('ROLE_USER') %}
                                    <button class=\"ec-inlineBtn\" data-id=\"{{ shipping.id }}\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping', {'id': shipping.id}) }}\">{{ '変更'|trans }}</button>
                                {% else %}
                                    <button class=\"ec-inlineBtn\" data-id=\"{{ shipping.id }}\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping_edit', {'id': shipping.id}) }}\">{{ '変更'|trans }}</button>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"ec-orderDelivery__item\">
                            <ul class=\"ec-borderedList\">
                                {% for orderItem in shipping.productOrderItems %}
                                    <li>
                                        <div class=\"ec-imageGrid\">
                                            <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                            <div class=\"ec-imageGrid__content\">
                                                <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                                {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                                    <p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
     
                                                {% endif %}
                                                {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                                    <p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                                {% endif %}
                                                             
                                                {# 商品素材 #}
                                                {% if orderItem.Product.material is not empty %}
                                                        <p> {{ '商品素材'|trans }}： {{ orderItem.Product.material }}</p>                                                    
                                                {% endif %}
                                                {# 内寸 #}
                                                {% if orderItem.Product.outer_size is not empty %}
                                                    <p> {{ '内寸'|trans }}：{{ orderItem.Product.outer_size|trans }}{{ '(cm)'|trans }}</p>
                                                {% endif %}
                                                {# 外寸 #}
                                                {% if orderItem.Product.inner_size is not empty %}
                                                   <p>{{ '外寸'|trans }}：{{ orderItem.Product.inner_size }}{{ '(cm)'|trans }}</p>
                                                {% endif %}
                                                {# 自重 #}
                                                {% if orderItem.Product.self_weight != 0 %}
                                                   <p>{{ '自重'|trans }}：{{ orderItem.Product.self_weight }}{{ 'Kg'|trans }}</p>
                                                {% endif %}               
                                                <p>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                            </div>
                                        </div>
                                    </li>
                                {% endfor %}
                            </ul>
                            <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                        </div>
                        <div class=\"ec-orderDelivery__address\">
                            <p>{{ ''|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ ' 様'|trans }}</p>
                            <p>{{ '〒'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                            <p>{{ shipping.phone_number }}</p>
                        </div>
                        <div class=\"ec-orderDelivery__actions\">
                            <div class=\"ec-selects\">
                                <div class=\"ec-select\">
                                    <label>{{ '配送方法'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].Delivery, { 'attr': { 'class': 'form-control', 'data-trigger': 'change' }}) }}
                                    {{ form_errors(form.Shippings[idx].Delivery) }}
                                </div>
                                <div class=\"ec-select ec-select__delivery\">
                                    <label>{{ 'お届け日'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].shipping_delivery_date, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.Shippings[idx].shipping_delivery_date) }}
                                </div>
                                <div class=\"ec-select ec-select__time\">
                                    <label>{{ 'お届け時間'|trans }}</label>
                                    {{ form_widget(form.Shippings[idx].DeliveryTime, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.Shippings[idx].DeliveryTime) }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"ec-orderDelivery__edit\">
                        <button type=\"button\" class=\"ec-inlineBtn\" data-trigger=\"click\" data-path=\"{{ path('shopping_shipping_multiple') }}\">{{ 'お届け先を追加する'|trans }}</button>
                    </div>
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お支払方法'|trans }}</h2>
                    </div>
                    <div class=\"ec-radio\">
                        {% for key, child in form.Payment %}
                            <div style=\"display: block;\">
                                {% set Payment = form.Payment.vars.choices[key].data %}
                                {{ form_widget(child, { 'attr': { 'data-trigger': 'change' }}) }}
                                {% if Payment.payment_image is not null %}
                                    <p><img src=\"{{ asset(Payment.payment_image, 'save_image') }}\"></p>
                                {% endif %}
                            </div>
                        {% endfor %}
                    </div>
                    <div class=\"ec-input {{ has_errors(form.Payment) ? ' error' }}\">{{ form_errors(form.Payment) }}</div>
                </div>
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                    <div class=\"ec-orderPayment\">
                        <div class=\"ec-rectHeading\">
                            <h2>{{ '利用ポイント'|trans }}</h2>
                        </div>
                        <div class=\"ec-input {{ has_errors(form.use_point) ? ' error' }}\">
                            <p>{{ '%point% pt が利用可能です。'|trans({ '%point%': Order.Customer.Point|number_format }) }}</p>
                            {{ form_widget(form.use_point, { 'attr': { 'type': 'text', 'class': 'form-control', 'data-trigger': 'change' }}) }}
                            {{ form_errors(form.use_point) }}
                        </div>
                    </div>
                {% endif %}
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お問い合わせ'|trans }}</h2>
                    </div>
                    <div class=\"ec-input\">
                        {{ form_widget(form.message, {'attr': {'class': 'form-control', 'placeholder': 'お問い合わせ事項がございましたら、こちらにご入力ください。(3000文字まで)'|trans, 'rows': '6'}}) }}
                        {{ form_errors(form.message) }}
                    </div>
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '小計'|trans }}</dt>
                        <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '手数料'|trans }}</dt>
                        <dd>{{ Order.charge|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '送料'|trans }}</dt>
                        <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                    </dl>
                    {% if Order.taxable_discount < 0 %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '値引き'|trans }}</dt>
                        <dd>{{ Order.taxable_discount|price }}</dd>
                    </dl>
                    {% endif %}
                    <div class=\"ec-totalBox__total\">{{ '合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% for rate, total in Order.taxable_total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }}</dd>
                    </dl>
                    {% endfor %}
                    {% for item in Order.tax_free_discount_items %}
                        {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ item.product_name }}</dt>
                            <dd>{{ item.total_price|price }}</dd>
                        </dl>
                    {% endfor %}
                    <div class=\"ec-totalBox__paymentTotal\">{{ 'お支払い合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                    <div class=\"ec-totalBox__pointBlock\">
                        <dl class=\"ec-totalBox__spec\">
                            <dt>{{ 'ご利用ポイント'|trans }}</dt>
                            <dd>{{ Order.UsePoint|number_format }} pt</dd>
                        </dl>
                        <dl class=\"ec-totalBox__spec\">
                            <dt><span class=\"ec-font-bold\">{{ '加算ポイント'|trans }}</span></dt>
                            <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                        </dl>
                    </div>
                    {% endif %}
                    <div class=\"ec-totalBox__btn\">
                        <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '確認する'|trans }}</button>
                        <a href=\"{{ url(\"cart\") }}\" class=\"ec-blockBtn--cancel\">{{ 'カートに戻る'|trans }}</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@user_data/Product/Shopping/customize2_index.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\user_data\\Product\\Shopping\\customize2_index.twig");
    }
}
