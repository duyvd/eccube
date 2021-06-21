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

/* @admin/Product\index.twig */
class __TwigTemplate_fc3ddc041485defc8e5f32a36ec8f5360fa51b82c171a93270bbd434743fbda3 extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\index.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        
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

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tempusdominus-bootstrap-4.min.css", "admin"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 36
        echo "    <script>
        \$(function() {
            \$.when(
                \$.getScript(\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
            ).done(function() {
                // datetimepicker で value が消えてしまうので data-value に保持しておく
                \$('input.datetimepicker-input').each(function() {
                    \$(this).data('value', \$(this).val());
                });

                \$('input.datetimepicker-input').datetimepicker({
                    locale: '";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 49, $this->source); })()), "locale", [], "any", false, false, false, 49), "html", null, true);
        echo "',
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    },
                });

                // datetimepicker で value が消えてしまうので更新
                \$('input.datetimepicker-input').each(function() {
                    \$(this).val(\$(this).data('value'));
                });
            });

            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__in_progress"), "html", null, true);
        echo "\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__system_error"), "html", null, true);
        echo "\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete_message"), "html", null, true);
        echo "\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    ";
        // line 141
        echo "                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '";
        // line 145
        echo twig_escape_filter($this->env, twig_constant("Eccube\\Common\\Constant::TOKEN_NAME"), "html", null, true);
        echo "')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 188
        echo "    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product");
        echo "\">
            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 190, $this->source); })()), "_token", [], "any", false, false, false, 190), 'widget');
        echo "
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197), 'widget');
        echo "
                            ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3\" data-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span
                                        class=\"font-weight-bold\">";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse";
        // line 208
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 208, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"form-row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</label>
                                ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 214, $this->source); })()), "category_id", [], "any", false, false, false, 214), 'widget');
        echo "
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 215, $this->source); })()), "category_id", [], "any", false, false, false, 215), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status"), "html", null, true);
        echo "</p>
                                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 221, $this->source); })()), "status", [], "any", false, false, false, 221), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "status", [], "any", false, false, false, 222), 'errors', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock__short"), "html", null, true);
        echo "</p>
                                ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 228, $this->source); })()), "stock", [], "any", false, false, false, 228), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 229, $this->source); })()), "stock", [], "any", false, false, false, 229), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                ";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "
                            </label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 241
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 241, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 241), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 242, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 242), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col\">
                                    ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 247, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 247), 'widget');
        echo "
                                    ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 248, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 248), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 257
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 257, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 257), 'widget');
        echo "
                                    ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 258, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 258), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto\"><span>";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 262, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 262), 'widget');
        echo "
                                    ";
        // line 263
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 263, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 263), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 270
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 270, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 270), "eccube_form_options", [], "any", false, false, false, 270), "auto_render", [], "any", false, false, false, 270)) {
                // line 271
                echo "                    ";
                // line 272
                echo "                    <div class=\"row mb-2\">
                        ";
                // line 273
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 273), "eccube_form_options", [], "any", false, false, false, 273), "form_theme", [], "any", false, false, false, 273)) {
                    // line 274
                    echo "                            ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 274), "eccube_form_options", [], "any", false, false, false, 274), "form_theme", [], "any", false, false, false, 274)], true);
                    // line 275
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                        ";
                } else {
                    // line 277
                    echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                    // line 279
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 279), "label", [], "any", false, false, false, 279)), "html", null, true);
                    echo "</label>
                                    ";
                    // line 280
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                    ";
                    // line 281
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                </div>
                            </div>
                        ";
                }
                // line 285
                echo "                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
                ";
        // line 290
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 290, $this->source); })())) {
            // line 291
            echo "                    <span class=\"font-weight-bold ml-2\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 291, $this->source); })()), "totalItemCount", [], "any", false, false, false, 291)]);
            echo "</span>
                ";
        }
        // line 293
        echo "            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                ";
        // line 295
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 295, $this->source); })())], true, true);
        echo "
            </div>
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                ";
        // line 302
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 302, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 302, $this->source); })()), "totalItemCount", [], "any", false, false, false, 302))) {
            // line 303
            echo "                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"mr-2\">";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.bulk_actions"), "html", null, true);
            echo "</label>
                                    <div class=\"btn-group mr-2\" role=\"group\">
                                        <button ";
            // line 309
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__show"), "html", null, true);
            echo "</span>
                                        </button>
                                        <button ";
            // line 312
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_HIDE")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__hide"), "html", null, true);
            echo "</span>
                                        </button>
                                    </div>
                                    <button ";
            // line 316
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_bulk_product_status", ["id" => twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_ABOLISHED")]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular mr-2 action-submit\">
                                        ";
            // line 317
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__abolished"), "html", null, true);
            echo "
                                    </button>
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">";
            // line 319
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                            <div class=\"col-5 text-right\">
                                <div class=\"d-inline-block mr-2\">
                                    <div>
                                        <select class=\"custom-select\" onchange=\"location = this.value;\">
                                            ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 326, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 327
                echo "                                                <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 327) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 327, $this->source); })()))) {
                    echo "selected=\"\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 327)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 327)]), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 329
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 334
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_export");
            echo "\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_PRODUCT")]), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pl-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 353
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 354
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 355
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 356
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">";
            // line 358
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.display_status__short"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 359
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-2 pr-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 365, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                // line 366
                echo "                                        <tr id=\"ex-product-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 366), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"";
                // line 368
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 368), "html", null, true);
                echo "\" id=\"check_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 368), "html", null, true);
                echo "\" data-delete-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 368)]), "html", null, true);
                echo "\">
                                            </td>
                                            <td class=\"align-middle\">";
                // line 370
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 370), "html", null, true);
                echo "</td>
                                            ";
                // line 372
                echo "                                            <td class=\"align-middle\">
                                                <a href=\"";
                // line 373
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 373)]), "html", null, true);
                echo "\">
                                                    <img src=\"";
                // line 374
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, false, 374)), "save_image"), "html", null, true);
                echo "\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"";
                // line 379
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 379)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 379), "html", null, true);
                echo "</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 382
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 382), "html", null, true);
                echo "
                                                ";
                // line 383
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 383) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 383))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 383), "html", null, true);
                    echo "
                                                ";
                }
                // line 385
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 387
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, false, 387)), "html", null, true);
                echo "
                                                ";
                // line 388
                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "price02_min", [], "any", false, false, false, 388) != twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 388))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "price02_max", [], "any", false, false, false, 388)), "html", null, true);
                    echo "
                                                ";
                }
                // line 390
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 392
                if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 392)) {
                    // line 393
                    echo "                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"";
                    // line 394
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 394), "html", null, true);
                    echo "\"
                                                            data-message=\"";
                    // line 395
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class__confirm_title", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 395)]), "html", null, true);
                    echo "\"
                                                            data-class-load=\"";
                    // line 396
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_classes_load", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 396)]), "html", null, true);
                    echo "\"
                                                            data-class-url=\"";
                    // line 397
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_class", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 397), "return_product_list" => true]), "html", null, true);
                    echo "\">
                                                        ";
                    // line 398
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm"), "html", null, true);
                    echo "
                                                    </button>
                                                ";
                } else {
                    // line 401
                    echo "                                                    ";
                    // line 402
                    echo "                                                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["Product"], "stockunlimited_min", [], "any", false, false, false, 402)) {
                        // line 403
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 405
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "stock_min", [], "any", false, false, false, 405), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 407
                    echo "                                                ";
                }
                // line 408
                echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Product"], "status", [], "any", false, false, false, 410), "name", [], "any", false, false, false, 410), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 413
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "create_date", [], "any", false, false, false, 413)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle\">
                                                ";
                // line 416
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "update_date", [], "any", false, false, false, 416)), "html", null, true);
                echo "
                                            </td>
                                            <td class=\"align-middle pr-3\" colspan=\"3\">
                                                <div class=\"text-right\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"";
                // line 422
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.display"), "html", null, true);
                echo "\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"";
                // line 423
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 423)]), "html", null, true);
                echo "\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"";
                // line 429
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-toggle=\"modal\"
                                                           data-target=\"#confirmModal-";
                // line 432
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 432), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-";
                // line 435
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 435), "html", null, true);
                echo "\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-";
                // line 437
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 437), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            ";
                // line 442
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_title"), "html", null, true);
                echo "</h5>
                                                                        <button class=\"close\" type=\"button\"
                                                                                data-dismiss=\"modal\"
                                                                                aria-label=\"Close\"><span
                                                                                    aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            ";
                // line 451
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.copy__confirm_message"), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-dismiss=\"modal\">";
                // line 455
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                        </button>
                                                                        <a
                                                                                href=\"";
                // line 458
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_product_copy", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 458)]), "html", null, true);
                echo "\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                ";
                // line 461
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                                                                data-method=\"post\">
                                                                            ";
                // line 463
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.copy"), "html", null, true);
                echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 474
            echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
            // line 478
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 478, $this->source); })()), "totalItemCount", [], "any", false, false, false, 478) > 0)) {
                // line 479
                echo "                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    ";
                // line 480
                $this->loadTemplate("@admin/pager.twig", "@admin/Product\\index.twig", 480)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 480, $this->source); })()), "paginationData", [], "any", false, false, false, 480), "routes" => "admin_product_page"]));
                // line 481
                echo "                                </div>
                            ";
            }
            // line 483
            echo "                        </div>
                    </form>
                ";
        } elseif (        // line 485
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 485, $this->source); })())) {
            // line 486
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 488
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        } else {
            // line 493
            echo "                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">";
            // line 495
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 496
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            <div class=\"text-center text-muted\">";
            // line 497
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                ";
        }
        // line 501
        echo "            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title font-weight-bold\">";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_title"), "html", null, true);
        echo "</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p class=\"text-left\">";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__confirm_message"), "html", null, true);
        echo "</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete"), "html", null, true);
        echo "</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.permanently_delete__complete"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">";
        // line 534
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 540
        echo "                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-dismiss=\"modal\">
                        ";
        // line 543
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        ";
        // line 547
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_product_class"), "html", null, true);
        echo "
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Product\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1109 => 547,  1102 => 543,  1097 => 540,  1090 => 534,  1074 => 521,  1070 => 520,  1066 => 519,  1056 => 512,  1049 => 508,  1040 => 501,  1033 => 497,  1029 => 496,  1025 => 495,  1021 => 493,  1014 => 489,  1010 => 488,  1006 => 486,  1004 => 485,  1000 => 483,  996 => 481,  994 => 480,  991 => 479,  989 => 478,  983 => 474,  966 => 463,  961 => 461,  955 => 458,  949 => 455,  942 => 451,  930 => 442,  922 => 437,  917 => 435,  911 => 432,  905 => 429,  896 => 423,  892 => 422,  883 => 416,  877 => 413,  871 => 410,  867 => 408,  864 => 407,  858 => 405,  852 => 403,  849 => 402,  847 => 401,  841 => 398,  837 => 397,  833 => 396,  829 => 395,  825 => 394,  822 => 393,  820 => 392,  816 => 390,  809 => 388,  805 => 387,  801 => 385,  794 => 383,  790 => 382,  782 => 379,  774 => 374,  770 => 373,  767 => 372,  763 => 370,  754 => 368,  748 => 366,  744 => 365,  736 => 360,  732 => 359,  728 => 358,  724 => 357,  720 => 356,  716 => 355,  712 => 354,  708 => 353,  704 => 352,  687 => 338,  683 => 337,  678 => 335,  674 => 334,  667 => 329,  652 => 327,  648 => 326,  638 => 319,  633 => 317,  627 => 316,  621 => 313,  615 => 312,  610 => 310,  604 => 309,  599 => 307,  593 => 303,  591 => 302,  581 => 295,  577 => 293,  571 => 291,  569 => 290,  565 => 289,  561 => 287,  553 => 285,  546 => 281,  542 => 280,  538 => 279,  534 => 277,  528 => 275,  525 => 274,  523 => 273,  520 => 272,  518 => 271,  512 => 270,  503 => 263,  499 => 262,  494 => 260,  489 => 258,  484 => 257,  478 => 253,  470 => 248,  466 => 247,  460 => 244,  455 => 242,  450 => 241,  443 => 236,  433 => 229,  429 => 228,  425 => 227,  417 => 222,  413 => 221,  409 => 220,  401 => 215,  397 => 214,  393 => 213,  385 => 208,  377 => 203,  369 => 198,  365 => 197,  359 => 196,  350 => 190,  346 => 189,  343 => 188,  333 => 187,  282 => 145,  276 => 141,  244 => 111,  237 => 107,  197 => 70,  173 => 49,  162 => 41,  158 => 40,  154 => 39,  149 => 36,  139 => 35,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['product', 'product_master'] %}

{% block title %}{{ 'admin.product.product_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/tempusdominus-bootstrap-4.min.css', 'admin') }}\">
    <style type=\"text/css\">
        .datepicker-days th.dow:first-child,
        .datepicker-days td:first-child {
            color: #f00;
        }

        .datepicker-days th.dow:last-child,
        .datepicker-days td:last-child {
            color: #00f;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script>
        \$(function() {
            \$.when(
                \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
            ).done(function() {
                // datetimepicker で value が消えてしまうので data-value に保持しておく
                \$('input.datetimepicker-input').each(function() {
                    \$(this).data('value', \$(this).val());
                });

                \$('input.datetimepicker-input').datetimepicker({
                    locale: '{{ eccube_config.locale }}',
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    },
                });

                // datetimepicker で value が消えてしまうので更新
                \$('input.datetimepicker-input').each(function() {
                    \$(this).val(\$(this).data('value'));
                });
            });

            \$('#bulkDelete').on('click', function() {

                var modal = \$('#bulkDeleteModal');

                // 削除中のUI変更処理
                modal.find('button').attr('disabled', 'disabled');
                \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__in_progress'|trans }}\");
                \$('.progress', modal).show();

                var checkedList = \$('input[type=checkbox][data-delete-url]:checked');
                var totalCount = checkedList.length;
                var currentCount = 0;

                var promises = checkedList.map(function() {
                    return \$.ajax({
                        'url': \$(this).data('delete-url'),
                        'type': 'delete',
                        'data': {'_token': \$(this).attr('token-for-anchor')}
                    }).always(function() {
                        \$('.progress-bar', modal).css('width', (++currentCount / totalCount * 100) + '%');
                    });
                });

                var addError = function(errorMessage) {
                    \$('<li><span class=\"badge badge-danger\">ERROR</span> </li>')
                        .append(\$('<span></span>').text(errorMessage))
                        .appendTo('#bulkErrors');
                };

                \$.when.apply(\$, promises)
                    .done(function() {
                        // 削除できなかった場合はエラーメッセージを表示
                        var args = promises.length === 1 ? [arguments[0]] : [].slice.call(arguments).map(function(result) {
                            return result[0];
                        });
                        args.filter(function(result) {
                            return result.success === false;
                        }).forEach(function(result) {
                            addError(result.message);
                        });
                    })
                    .fail(function() {
                        // システムエラー
                        addError(\"{{ 'admin.product.permanently_delete__system_error'|trans }}\");
                    })
                    .always(function() {
                        \$('.progress', modal).hide();
                        \$('.modal-body p', modal).text(\"{{ 'admin.product.permanently_delete__complete_message'|trans }}\");
                        modal.find('button').removeAttr('disabled').toggle();
                    })
            });

            \$('#bulkDeleteDone').on('click', function() {
                location.reload(true);
            });

            toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            \$('input[id^=\"check_\"]').on('change', function() {
                \$('#trigger_check_all').prop('checked', false);
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#trigger_check_all').on('change', function() {
                var checked = \$(this).prop('checked');
                if (checked) {
                    \$('input[id^=\"check_\"]').prop('checked', true);
                } else {
                    \$('input[id^=\"check_\"]').prop('checked', false);
                }
                toggleBtnBulk('input[id^=\"check_\"]', '#btn_bulk');
            });

            \$('#form_bulk').find('.action-submit').on('click', function(event) {
                event.preventDefault();
                var form = \$(this).closest('form');
                if (!form.find('input:checkbox[name^=\"ids\"]:checked').length) {
                    {# TODO: should use modal instead of alert #}
                    alert('please check');
                    return false;
                }

                \$('<input />').attr('type', 'hidden').attr('name', '{{ constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME') }}')
                    .val(\$(this).attr('token-for-anchor'))
                    .appendTo(form);
                form.attr('action', \$(this).data('action')).submit();
                return false;
            });

            var dataClass = [];
            var modalClass = \$('#productClassesModal');
            \$('form#form_bulk').on('click', 'table.table button[data-class-url]', function() {
                var btnClass = \$(this);
                btnClass.attr('disabled', true);
                var productId = btnClass.data('product-id');

                if (dataClass[productId] != undefined) {
                    renderClass(dataClass[productId], btnClass);
                    return;
                }

                \$.ajax({
                    url: btnClass.data('class-load'),
                    type: 'GET',
                }).done(function(data) {
                    dataClass[productId] = data;
                    renderClass(dataClass[productId], btnClass);
                }).fail(function() {
                    alert('Failed');
                });
            });

            // Append html and show popup
            function renderClass(data, btnClass) {
                \$('div.modal-body', modalClass).html(data);
                \$('h5.modal-title', modalClass).text(btnClass.data('message'));
                \$('a.btn-ec-conversion', modalClass).attr('href', btnClass.data('class-url'));
                modalClass.modal('show');
                btnClass.attr('disabled', false);
            }
        });
    </script>
{% endblock javascript %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <form id='search_form' method=\"post\" action=\"{{ url('admin_product') }}\">
            {{ form_widget(searchForm._token) }}
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">

                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.multi_search_label'|trans }}\">{{ 'admin.product.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.id) }}
                            {{ form_errors(searchForm.id) }}
                        </div>
                        <div class=\"d-inline-block mb-3\" data-toggle=\"collapse\" href=\"#searchDetail\"
                             aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i
                                        class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i><span
                                        class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents collapse ec-collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col-6\">
                        <div class=\"form-row mb-2\">
                            <div class=\"col-6\">
                                <label class=\"col-form-label\">{{ 'admin.product.category'|trans }}</label>
                                {{ form_widget(searchForm.category_id) }}
                                {{ form_errors(searchForm.category_id) }}
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.display_status'|trans }}</p>
                                {{ form_widget(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.status, {'label_attr': {'class': 'checkbox-inline'}}) }}
                            </div>
                        </div>
                        <div class=\"form-row mb-2\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.product.stock__short'|trans }}</p>
                                {{ form_widget(searchForm.stock, {'label_attr': {'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.stock) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">
                                {{ 'admin.common.create_date'|trans }}
                            </label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.create_datetime_start) }}
                                    {{ form_errors(searchForm.create_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span>
                                </div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_end) }}
                                    {{ form_errors(searchForm.create_datetime_end) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\">{{ 'admin.common.update_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {# TODO: カレンダー表示の調整 #}
                                    {{ form_widget(searchForm.update_datetime_start) }}
                                    {{ form_errors(searchForm.update_datetime_start) }}
                                </div>
                                <div class=\"col-auto\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_end) }}
                                    {{ form_errors(searchForm.update_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {# エンティティ拡張の自動出力 #}
                {% for f in searchForm if f.vars.eccube_form_options.auto_render %}
                    {# TODO 1項目1行になるのを改善 #}
                    <div class=\"row mb-2\">
                        {% if f.vars.eccube_form_options.form_theme %}
                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                            {{ form_row(f) }}
                        {% else %}
                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>{{ f.vars.label|trans }}</label>
                                    {{ form_widget(f) }}
                                    {{ form_errors(f) }}
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.search'|trans }}</button>
                {% if pagination %}
                    <span class=\"font-weight-bold ml-2\">{{ 'admin.common.search_result'|trans({\"%count%\":pagination.totalItemCount})|raw }}</span>
                {% endif %}
            </div>
            <div class=\"c-outsideBlock__contents mb-5\">
                {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
            </div>
        </form>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                {% if pagination and pagination.totalItemCount %}
                    <form id=\"form_bulk\" method=\"POST\" action=\"\">
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\">
                                <div id=\"btn_bulk\" class=\"d-none\">
                                    <label class=\"mr-2\">{{ 'admin.common.bulk_actions'|trans }}</label>
                                    <div class=\"btn-group mr-2\" role=\"group\">
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__show'|trans }}</span>
                                        </button>
                                        <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_HIDE')}) }}\" class=\"btn btn-ec-regular action-submit\" type=\"button\">
                                            <span>{{ 'admin.product.display_status__hide'|trans }}</span>
                                        </button>
                                    </div>
                                    <button {{ csrf_token_for_anchor() }} data-action=\"{{ url('admin_product_bulk_product_status', {id: constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_ABOLISHED')}) }}\" class=\"btn btn-ec-regular mr-2 action-submit\">
                                        {{ 'admin.product.display_status__abolished'|trans }}
                                    </button>
                                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#bulkDeleteModal\" class=\"btn btn-ec-delete\">{{ 'admin.product.permanently_delete'|trans }}</button>
                                </div>
                            </div>
                            <div class=\"col-5 text-right\">
                                <div class=\"d-inline-block mr-2\">
                                    <div>
                                        <select class=\"custom-select\" onchange=\"location = this.value;\">
                                            {% for pageMax in pageMaxis %}
                                                <option {% if pageMax.name == page_count %}selected=\"\"{% endif %} value=\"{{ path('admin_product_page', {'page_no': 1, 'page_count': pageMax.name}) }}\">{{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_export') }}\">
                                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span>
                                        </a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_PRODUCT') }) }}\">
                                            <i class=\"fa fa-cog mr-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pl-3 pt-2 pb-2\">
                                            <input type=\"checkbox\" name=\"filter\" value=\"open\" id=\"trigger_check_all\">
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.product_id__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.image__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-nowrap\">{{ 'admin.product.display_status__short'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.create_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2\">{{ 'admin.common.update_date'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-2 pr-3\" colspan=\"3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Product in pagination %}
                                        <tr id=\"ex-product-{{ Product.id }}\">
                                            <td class=\"align-middle pl-3\">
                                                <input type=\"checkbox\" name=\"ids[]\" value=\"{{ Product.id }}\" id=\"check_{{ Product.id }}\" data-delete-url=\"{{ url('admin_product_product_delete', { id: Product.id }) }}\">
                                            </td>
                                            <td class=\"align-middle\">{{ Product.id }}</td>
                                            {# TODO: 画像のサイズをベタ指定しているので、styleguide側を直す #}
                                            <td class=\"align-middle\">
                                                <a href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">
                                                    <img src=\"{{ asset(Product.mainFileName|no_image_product, 'save_image') }}\"
                                                         style=\"max-width: 50px\">
                                                </a>
                                            </td>
                                            <td class=\"align-middle\"><a
                                                        href=\"{{ url('admin_product_product_edit', { id : Product.id }) }}\">{{ Product.name }}</a>
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.code_min }}
                                                {% if Product.code_min != Product.code_max %}{{ 'admin.common.separator__range'|trans }}{{ Product.code_max }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.price02_min|price }}
                                                {% if Product.price02_min != Product.price02_max %}{{ 'admin.common.separator__range'|trans }}{{ Product.price02_max|price }}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if Product.hasProductClass %}
                                                    <button type=\"button\" class=\"btn page-link text-dark d-inline-block\"
                                                            data-product-id=\"{{ Product.id }}\"
                                                            data-message=\"{{ 'admin.product.move_to_product_class__confirm_title'|trans({'%name%': Product.name}) }}\"
                                                            data-class-load=\"{{ url('admin_product_classes_load', { 'id' : Product.id }) }}\"
                                                            data-class-url=\"{{ url('admin_product_product_class', { 'id' : Product.id, 'return_product_list' : true }) }}\">
                                                        {{ 'admin.product.product_class__confirm'|trans }}
                                                    </button>
                                                {% else %}
                                                    {# 規格なし商品 は在庫数を表示 #}
                                                    {% if Product.stockunlimited_min %}
                                                        {{ 'admin.product.stock_unlimited__short'|trans }}
                                                    {% else %}
                                                        {{ Product.stock_min }}
                                                    {% endif %}
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.status.name }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.create_date|date_min }}
                                            </td>
                                            <td class=\"align-middle\">
                                                {{ Product.update_date|date_min }}
                                            </td>
                                            <td class=\"align-middle pr-3\" colspan=\"3\">
                                                <div class=\"text-right\">
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"{{ 'admin.common.display'|trans }}\"><a class=\"btn btn-ec-actionIcon\"
                                                                                                       href=\"{{ url('product_detail', {id:Product.id}) }}\"
                                                                                                       target=\"_blank\"><i
                                                                    class=\"fa fa-eye fa-lg text-secondary\"
                                                                    aria-hidden=\"true\"></i></a></div>
                                                    <div class=\"px-1 d-inline-block text-center\" data-tooltip=\"true\"
                                                         data-placement=\"top\"
                                                         title=\"{{ 'admin.common.copy'|trans }}\">
                                                        <a href=\"#\" class=\"btn btn-ec-actionIcon\"
                                                           data-toggle=\"modal\"
                                                           data-target=\"#confirmModal-{{ Product.id }}\">
                                                            <i class=\"fa fa-files-o fa-lg text-secondary\"
                                                               aria-hidden=\"true\"></i></a>
                                                        <div class=\"modal fade\" id=\"confirmModal-{{ Product.id }}\" tabindex=\"-1\"
                                                             role=\"dialog\"
                                                             aria-labelledby=\"confirmModal-{{ Product.id }}\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">
                                                                            {{ 'admin.product.copy__confirm_title'|trans }}</h5>
                                                                        <button class=\"close\" type=\"button\"
                                                                                data-dismiss=\"modal\"
                                                                                aria-label=\"Close\"><span
                                                                                    aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">
                                                                            {{ 'admin.product.copy__confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\"
                                                                                data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}
                                                                        </button>
                                                                        <a
                                                                                href=\"{{ url('admin_product_product_copy', {'id' : Product.id}) }}\"
                                                                                class=\"btn btn-ec-conversion\"
                                                                                data-confirm=\"false\"
                                                                                {{ csrf_token_for_anchor() }}
                                                                                data-method=\"post\">
                                                                            {{ 'admin.common.copy'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                            {% if pagination.totalItemCount > 0 %}
                                <div class=\"row justify-content-md-center mb-4 pb-4\">
                                    {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_product_page' } %}
                                </div>
                            {% endif %}
                        </div>
                    </form>
                {% elseif has_errors %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_invalid_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"card rounded border-0\">
                        <div class=\"card-body p-4\">
                            <div class=\"text-center text-muted mb-4 h5\">{{ 'admin.common.search_no_result'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_change_condition'|trans }}</div>
                            <div class=\"text-center text-muted\">{{ 'admin.common.search_try_advanced_search'|trans }}</div>
                        </div>
                    </div>
                {% endif %}
            </div>

            <!-- 完全に削除の確認モーダル-->
            <div class=\"modal fade\" id=\"bulkDeleteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\" data-keyboard=\"false\" data-backdrop=\"static\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title font-weight-bold\">{{ 'admin.product.permanently_delete__confirm_title'|trans }}</h5>
                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                        </div>
                        <div class=\"modal-body text-left\">
                            <p class=\"text-left\">{{ 'admin.product.permanently_delete__confirm_message'|trans }}</p>
                            <ul id=\"bulkErrors\"></ul>
                            <div class=\"progress\" style=\"display: none\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                            <button class=\"btn btn-ec-delete\" type=\"button\" id=\"bulkDelete\">{{ 'admin.product.permanently_delete' | trans }}</button>
                            <button class=\"btn btn-ec-regular\" id=\"bulkDeleteDone\" style=\"display: none\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.product.permanently_delete__complete'|trans }}</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"modal fade\" id=\"productClassesModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"productClassesModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title font-weight-bold\">{# Title #}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {# Append data list #}
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-v-sub\" type=\"button\" data-dismiss=\"modal\">
                        {{ 'admin.common.cancel'|trans }}
                    </button>
                    <a class=\"btn btn-ec-conversion\"
                       href=\"#\">
                        {{ 'admin.product.move_to_product_class'|trans }}
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /#productClassesModal -->
{% endblock %}

", "@admin/Product\\index.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Product\\index.twig");
    }
}
