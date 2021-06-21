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

/* @admin/Customer\index.twig */
class __TwigTemplate_8b17ba89c595fc5af5fce20c40aa995c7caf7fa523d2c843a1dc7d4c21283c0c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer\\index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer\\index.twig"));

        // line 13
        $context["menus"] = [0 => "customer", 1 => "customer_master"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer\\index.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_list"), "html", null, true);
        
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
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

            // datetimepicker と競合するため HTML5 のカレンダ入力を無効に
            \$('input[type=\"date\"]').attr('type','text');

            \$.when(
                \$.getScript(\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/moment-with-locales.min.js", "admin"), "html", null, true);
        echo "\"),
                \$.getScript(\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tempusdominus-bootstrap-4.min.js", "admin"), "html", null, true);
        echo "\")
            ).done(function() {
                // datetimepicker で value が消えてしまうので data-value に保持しておく
                \$('input.datetimepicker-input').each(function() {
                    \$(this).data('value', \$(this).val());
                });

                \$('input.datetimepicker-input').not('#admin_search_customer_birth_start').not('#admin_search_customer_birth_end').datetimepicker({
                    locale: '";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 53, $this->source); })()), "locale", [], "any", false, false, false, 53), "html", null, true);
        echo "',
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    },
                });

                \$('#admin_search_customer_birth_start').datetimepicker({
                    locale: '";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 63, $this->source); })()), "locale", [], "any", false, false, false, 63), "html", null, true);
        echo "',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });

                \$('#admin_search_customer_birth_end').datetimepicker({
                    locale: '";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 73, $this->source); })()), "locale", [], "any", false, false, false, 73), "html", null, true);
        echo "',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });

                // datetimepicker で value が消えてしまうので更新
                \$('input.datetimepicker-input').each(function() {
                    \$(this).val(\$(this).data('value'));
                });
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 93
        echo "    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 94, $this->source); })()), "_token", [], "any", false, false, false, 94), 'widget');
        echo "
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.customer.multi_search_label"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.multi_search_label"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 101, $this->source); })()), "multi", [], "any", false, false, false, 101), 'widget');
        echo "
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 102, $this->source); })()), "multi", [], "any", false, false, false, 102), 'errors');
        echo "
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_detail"), "html", null, true);
        echo "</span></a></div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse";
        // line 108
        echo (((isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 108, $this->source); })())) ? (" show") : (""));
        echo "\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_status"), "html", null, true);
        echo "</p>
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 114, $this->source); })()), "customer_status", [], "any", false, false, false, 114), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 115, $this->source); })()), "customer_status", [], "any", false, false, false, 115), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_product"), "html", null, true);
        echo "</label>
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 122, $this->source); })()), "buy_product_name", [], "any", false, false, false, 122), 'widget');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 123, $this->source); })()), "buy_product_name", [], "any", false, false, false, 123), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.gender"), "html", null, true);
        echo "</p>
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 132, $this->source); })()), "sex", [], "any", false, false, false, 132), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 133, $this->source); })()), "sex", [], "any", false, false, false, 133), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_price"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 142, $this->source); })()), "buy_total_start", [], "any", false, false, false, 142), 'widget');
        echo "
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 143, $this->source); })()), "buy_total_start", [], "any", false, false, false, 143), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 147, $this->source); })()), "buy_total_end", [], "any", false, false, false, 147), 'widget');
        echo "
                                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 148, $this->source); })()), "buy_total_end", [], "any", false, false, false, 148), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.birth_month"), "html", null, true);
        echo "</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 160, $this->source); })()), "birth_month", [], "any", false, false, false, 160), 'widget');
        echo "
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 161, $this->source); })()), "birth_month", [], "any", false, false, false, 161), 'errors');
        echo "
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.purchase_count"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 172, $this->source); })()), "buy_times_start", [], "any", false, false, false, 172), 'widget');
        echo "
                                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 173, $this->source); })()), "buy_times_start", [], "any", false, false, false, 173), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 177, $this->source); })()), "buy_times_end", [], "any", false, false, false, 177), 'widget');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 178, $this->source); })()), "buy_times_end", [], "any", false, false, false, 178), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.birth_day"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 190, $this->source); })()), "birth_start", [], "any", false, false, false, 190), 'widget');
        echo "
                                    ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 191, $this->source); })()), "birth_start", [], "any", false, false, false, 191), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 195, $this->source); })()), "birth_end", [], "any", false, false, false, 195), 'widget');
        echo "
                                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 196, $this->source); })()), "birth_end", [], "any", false, false, false, 196), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 206, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 206), 'widget');
        echo "
                                    ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 207, $this->source); })()), "create_datetime_start", [], "any", false, false, false, 207), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 211, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 211), 'widget');
        echo "
                                    ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 212, $this->source); })()), "create_datetime_end", [], "any", false, false, false, 212), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.pref"), "html", null, true);
        echo "</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 224, $this->source); })()), "pref", [], "any", false, false, false, 224), 'widget');
        echo "
                                    ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 225, $this->source); })()), "pref", [], "any", false, false, false, 225), 'errors');
        echo "
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 236, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 236), 'widget');
        echo "
                                    ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 237, $this->source); })()), "update_datetime_start", [], "any", false, false, false, 237), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 241, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 241), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 242, $this->source); })()), "update_datetime_end", [], "any", false, false, false, 242), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"mb-3\">
                            <label>";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</label>
                            ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 252, $this->source); })()), "phone_number", [], "any", false, false, false, 252), 'widget');
        echo "
                            ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 253, $this->source); })()), "phone_number", [], "any", false, false, false, 253), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.last_buy_date"), "html", null, true);
        echo "</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    ";
        // line 261
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 261, $this->source); })()), "last_buy_start", [], "any", false, false, false, 261), 'widget');
        echo "
                                    ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 262, $this->source); })()), "last_buy_start", [], "any", false, false, false, 262), 'errors');
        echo "
                                </div>
                                <div class=\"col-auto text-center\"><span>";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__range"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 266, $this->source); })()), "last_buy_end", [], "any", false, false, false, 266), 'widget');
        echo "
                                    ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 267, $this->source); })()), "last_buy_end", [], "any", false, false, false, 267), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 275
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 275, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 275), "eccube_form_options", [], "any", false, false, false, 275), "auto_render", [], "any", false, false, false, 275)) {
                // line 276
                echo "                    ";
                // line 277
                echo "                    <div class=\"row mb-2\">
                        ";
                // line 278
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 278), "eccube_form_options", [], "any", false, false, false, 278), "form_theme", [], "any", false, false, false, 278)) {
                    // line 279
                    echo "                            ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 279), "eccube_form_options", [], "any", false, false, false, 279), "form_theme", [], "any", false, false, false, 279)], true);
                    // line 280
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                        ";
                } else {
                    // line 282
                    echo "                            <div class=\"col\">
                                <div class=\"mb-3\">
                                    <label>";
                    // line 284
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 284), "label", [], "any", false, false, false, 284)), "html", null, true);
                    echo "</label>
                                    ";
                    // line 285
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                    ";
                    // line 286
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                </div>
                            </div>
                        ";
                }
                // line 290
                echo "                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "            </div>
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
        echo "</button>
            ";
        // line 296
        if ((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 296, $this->source); })())) {
            // line 297
            echo "                <span class=\"font-weight-bold ml-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_result", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 297, $this->source); })()), "totalItemCount", [], "any", false, false, false, 297)]), "html", null, true);
            echo "</span>
            ";
        }
        // line 299
        echo "        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            ";
        // line 301
        echo twig_include($this->env, $context, "@admin/search_items.twig", ["form" => (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 301, $this->source); })())], true, true);
        echo "
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    ";
        // line 306
        if (((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 306, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 306, $this->source); })()), "totalItemCount", [], "any", false, false, false, 306))) {
            // line 307
            echo "                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-right\">
                                ";
            // line 312
            echo "                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        ";
            // line 314
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pageMaxis"]) || array_key_exists("pageMaxis", $context) ? $context["pageMaxis"] : (function () { throw new RuntimeError('Variable "pageMaxis" does not exist.', 314, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pageMax"]) {
                // line 315
                echo "                                            <option ";
                if ((twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 315) == (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 315, $this->source); })()))) {
                    echo " selected ";
                }
                // line 316
                echo "                                                    value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_page", ["page_no" => 1, "page_count" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 316)]), "html", null, true);
                echo "\">
                                                ";
                // line 317
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.count", ["%count%" => twig_get_attribute($this->env, $this->source, $context["pageMax"], "name", [], "any", false, false, false, 317)]), "html", null, true);
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageMax'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 324
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_export");
            echo "\"><i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
            echo "</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"";
            // line 325
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CUSTOMER")]), "html", null, true);
            echo "\"><i class=\"fa fa-cog mr-1 text-secondary\"></i><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
            echo "</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3 text-nowrap\">";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 337
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
            echo "</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pr-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 344, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Customer"]) {
                // line 345
                echo "                                        <tr id=\"ex-customer-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 345), "html", null, true);
                echo "\">
                                            <td class=\"align-middle pl-3\">";
                // line 346
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 346), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\"><a href=\"";
                // line 347
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 347)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "name01", [], "any", false, false, false, 347), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "name02", [], "any", false, false, false, 347), "html", null, true);
                echo "</a></td>
                                            <td class=\"align-middle\">";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "phone_number", [], "any", false, false, false, 348), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\">";
                // line 349
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, false, 349), "html", null, true);
                echo "</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pr-3\">
                                                <div class=\"text-right\">
                                                    ";
                // line 353
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Customer"], "Status", [], "any", false, false, false, 353), "id", [], "any", false, false, false, 353) == twig_constant("Eccube\\Entity\\Master\\CustomerStatus::PROVISIONAL"))) {
                    // line 354
                    echo "                                                        <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance_cus_";
                    // line 355
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 355), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_";
                    // line 359
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 359), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">";
                    // line 363
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_title"), "html", null, true);
                    echo "</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">";
                    // line 369
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.resend_confirm_message"), "html", null, true);
                    echo "</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                    // line 372
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                                        ";
                    // line 374
                    echo "                                                                        <a class=\"btn btn-ec-delete\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_resend", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 374)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " data-method=\"get\" data-confirm=\"false\">
                                                                            ";
                    // line 375
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.send"), "html", null, true);
                    echo "
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
                }
                // line 382
                echo "                                                    <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance-";
                // line 383
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 383), "html", null, true);
                echo "\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-";
                // line 387
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 387), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title font-weight-bold\">
                                                                        ";
                // line 392
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-left\">
                                                                    <p class=\"text-left\">
                                                                        ";
                // line 399
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Customer"], "email", [], "any", false, false, false, 399)]), "html", null, true);
                echo "</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                        ";
                // line 403
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "
                                                                    </button>
                                                                    <a href=\"";
                // line 405
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Customer"], "id", [], "any", false, false, false, 405)]), "html", null, true);
                echo "\" class=\"btn btn-ec-delete\"";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-confirm=\"false\">
                                                                        ";
                // line 406
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-right -->
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\">
                                    ";
            // line 419
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 419, $this->source); })()), "totalItemCount", [], "any", false, false, false, 419) > 0)) {
                // line 420
                echo "                                        ";
                $this->loadTemplate("@admin/pager.twig", "@admin/Customer\\index.twig", 420)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 420, $this->source); })()), "paginationData", [], "any", false, false, false, 420), "routes" => "admin_customer_page"]));
                // line 421
                echo "                                    ";
            }
            // line 422
            echo "                                </div>
                            </div>
                        </div>
                    ";
        } elseif (        // line 425
(isset($context["has_errors"]) || array_key_exists("has_errors", $context) ? $context["has_errors"] : (function () { throw new RuntimeError('Variable "has_errors" does not exist.', 425, $this->source); })())) {
            // line 426
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_invalid_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 429
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        } else {
            // line 433
            echo "                        <div class=\"card rounded border-0\">
                            <div class=\"card-body p-4\">
                                <div class=\"text-center text-muted mb-4 h5\">";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_no_result"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 436
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_change_condition"), "html", null, true);
            echo "</div>
                                <div class=\"text-center text-muted\">";
            // line 437
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search_try_advanced_search"), "html", null, true);
            echo "</div>
                            </div>
                        </div>
                    ";
        }
        // line 441
        echo "                </div>
            </div>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@admin/Customer\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  974 => 441,  967 => 437,  963 => 436,  959 => 435,  955 => 433,  948 => 429,  944 => 428,  940 => 426,  938 => 425,  933 => 422,  930 => 421,  927 => 420,  925 => 419,  920 => 416,  904 => 406,  898 => 405,  893 => 403,  886 => 399,  876 => 392,  868 => 387,  861 => 383,  856 => 382,  846 => 375,  839 => 374,  835 => 372,  829 => 369,  820 => 363,  813 => 359,  806 => 355,  801 => 354,  799 => 353,  792 => 349,  788 => 348,  780 => 347,  776 => 346,  771 => 345,  767 => 344,  758 => 338,  754 => 337,  750 => 336,  746 => 335,  731 => 325,  725 => 324,  718 => 319,  710 => 317,  705 => 316,  700 => 315,  696 => 314,  692 => 312,  686 => 307,  684 => 306,  676 => 301,  672 => 299,  666 => 297,  664 => 296,  660 => 295,  655 => 292,  647 => 290,  640 => 286,  636 => 285,  632 => 284,  628 => 282,  622 => 280,  619 => 279,  617 => 278,  614 => 277,  612 => 276,  606 => 275,  596 => 267,  592 => 266,  587 => 264,  582 => 262,  578 => 261,  572 => 258,  564 => 253,  560 => 252,  556 => 251,  544 => 242,  540 => 241,  535 => 239,  530 => 237,  526 => 236,  520 => 233,  509 => 225,  505 => 224,  499 => 221,  487 => 212,  483 => 211,  478 => 209,  473 => 207,  469 => 206,  463 => 203,  453 => 196,  449 => 195,  444 => 193,  439 => 191,  435 => 190,  429 => 187,  417 => 178,  413 => 177,  408 => 175,  403 => 173,  399 => 172,  393 => 169,  382 => 161,  378 => 160,  372 => 157,  360 => 148,  356 => 147,  351 => 145,  346 => 143,  342 => 142,  336 => 139,  327 => 133,  323 => 132,  319 => 131,  308 => 123,  304 => 122,  300 => 121,  291 => 115,  287 => 114,  283 => 113,  275 => 108,  268 => 104,  263 => 102,  259 => 101,  253 => 100,  244 => 94,  241 => 93,  231 => 92,  203 => 73,  190 => 63,  177 => 53,  166 => 45,  162 => 44,  158 => 43,  149 => 36,  139 => 35,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['customer', 'customer_master'] %}

{% block title %}{{ 'admin.customer.customer_list'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme searchForm '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

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

            // datetimepicker と競合するため HTML5 のカレンダ入力を無効に
            \$('input[type=\"date\"]').attr('type','text');

            \$.when(
                \$.getScript(\"{{ asset('assets/js/vendor/moment.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/moment-with-locales.min.js', 'admin') }}\"),
                \$.getScript(\"{{ asset('assets/js/vendor/tempusdominus-bootstrap-4.min.js', 'admin') }}\")
            ).done(function() {
                // datetimepicker で value が消えてしまうので data-value に保持しておく
                \$('input.datetimepicker-input').each(function() {
                    \$(this).data('value', \$(this).val());
                });

                \$('input.datetimepicker-input').not('#admin_search_customer_birth_start').not('#admin_search_customer_birth_end').datetimepicker({
                    locale: '{{ eccube_config.locale }}',
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    },
                });

                \$('#admin_search_customer_birth_start').datetimepicker({
                    locale: '{{ eccube_config.locale }}',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });

                \$('#admin_search_customer_birth_end').datetimepicker({
                    locale: '{{ eccube_config.locale }}',
                    format: 'YYYY-MM-DD',
                    useCurrent: false,
                    buttons: {
                        showToday: true,
                        showClose: true
                    }
                });

                // datetimepicker で value が消えてしまうので更新
                \$('input.datetimepicker-input').each(function() {
                    \$(this).val(\$(this).data('value'));
                });
            });
        });

    </script>
{% endblock javascript %}

{% block main %}
    <form name=\"search_form\" id=\"search_form\" method=\"post\" action=\"\">
        {{ form_widget(searchForm._token) }}
        <div class=\"c-outsideBlock\">
            <div class=\"c-outsideBlock__contents\">
                <div class=\"row justify-content-start\">
                    <div class=\"col-6\">
                        <div class=\"mb-2\">
                            <label class=\"col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.customer.multi_search_label'|trans }}\">{{ 'admin.customer.multi_search_label'|trans }}<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                            {{ form_widget(searchForm.multi) }}
                            {{ form_errors(searchForm.multi) }}
                        </div>
                        <div class=\"d-inline-block mb-3 collapsed\" data-toggle=\"collapse\" href=\"#searchDetail\" aria-expanded=\"false\" aria-controls=\"searchDetail\"><a><i class=\"fa font-weight-bold mr-1 fa-plus-square-o\"></i><span class=\"font-weight-bold\">{{ 'admin.common.search_detail'|trans }}</span></a></div>
                    </div>
                </div>
            </div>
            <div class=\"c-subContents ec-collapse collapse{{ has_errors ? ' show' }}\" id=\"searchDetail\">
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.customer.customer_status'|trans }}</p>
                                {{ form_widget(searchForm.customer_status, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.customer_status) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_product'|trans }}</label>
                            {{ form_widget(searchForm.buy_product_name) }}
                            {{ form_errors(searchForm.buy_product_name) }}
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"form-row\">
                            <div class=\"col-12\">
                                <p class=\"col-form-label\">{{ 'admin.common.gender'|trans }}</p>
                                {{ form_widget(searchForm.sex, { 'label_attr': { 'class': 'checkbox-inline'}}) }}
                                {{ form_errors(searchForm.sex) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_price'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_total_start) }}
                                    {{ form_errors(searchForm.buy_total_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_total_end) }}
                                    {{ form_errors(searchForm.buy_total_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.customer.birth_month'|trans }}</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    {{ form_widget(searchForm.birth_month) }}
                                    {{ form_errors(searchForm.birth_month) }}
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.purchase_count'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_times_start) }}
                                    {{ form_errors(searchForm.buy_times_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.buy_times_end) }}
                                    {{ form_errors(searchForm.buy_times_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.birth_day'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.birth_start) }}
                                    {{ form_errors(searchForm.birth_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.birth_end) }}
                                    {{ form_errors(searchForm.birth_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.create_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_start) }}
                                    {{ form_errors(searchForm.create_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.create_datetime_end) }}
                                    {{ form_errors(searchForm.create_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.pref'|trans }}</label>
                            <div class=\"row\">
                                <div class=\"col-5\">
                                    {{ form_widget(searchForm.pref) }}
                                    {{ form_errors(searchForm.pref) }}
                                </div>
                                <div class=\"col-7\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.common.update_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_start) }}
                                    {{ form_errors(searchForm.update_datetime_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.update_datetime_end) }}
                                    {{ form_errors(searchForm.update_datetime_end) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row mb-2\">
                    <div class=\"col\">
                        <div class=\"mb-3\">
                            <label>{{ 'admin.common.phone_number'|trans }}</label>
                            {{ form_widget(searchForm.phone_number) }}
                            {{ form_errors(searchForm.phone_number) }}
                        </div>
                    </div>
                    <div class=\"col\">
                        <div>
                            <label>{{ 'admin.order.last_buy_date'|trans }}</label>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col\">
                                    {{ form_widget(searchForm.last_buy_start) }}
                                    {{ form_errors(searchForm.last_buy_start) }}
                                </div>
                                <div class=\"col-auto text-center\"><span>{{ 'admin.common.separator__range'|trans }}</span></div>
                                <div class=\"col\">
                                    {{ form_widget(searchForm.last_buy_end) }}
                                    {{ form_errors(searchForm.last_buy_end) }}
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
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">{{ 'admin.common.search'|trans }}</button>
            {% if pagination %}
                <span class=\"font-weight-bold ml-2\">{{ 'admin.common.search_result'|trans({'%count%':pagination.totalItemCount}) }}</span>
            {% endif %}
        </div>
        <div class=\"c-outsideBlock__contents mb-5\">
            {{ include('@admin/search_items.twig', { 'form': searchForm }, ignore_missing = true) }}
        </div>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    {% if pagination and pagination.totalItemCount %}
                        <div class=\"row justify-content-between mb-2\">
                            <div class=\"col-6\"></div>

                            <div class=\"col-5 text-right\">
                                {#Dropdown page count#}
                                <div class=\"d-inline-block mr-2\">
                                    <select class=\"custom-select\" onchange=\"location = this.value;\">
                                        {% for pageMax in pageMaxis %}
                                            <option {% if pageMax.name == page_count %} selected {% endif %}
                                                    value=\"{{ path('admin_customer_page', {'page_no': 1, 'page_count': pageMax.name }) }}\">
                                                {{ 'admin.common.count'|trans({ '%count%': pageMax.name }) }}</option>
                                        {% endfor %}
                                    </select>
                                </div>

                                <div class=\"d-inline-block\">
                                    <div class=\"btn-group\" role=\"group\">
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_customer_export') }}\"><i class=\"fa fa-cloud-download mr-1 text-secondary\"></i><span>{{ 'admin.common.csv_download'|trans }}</span></a>
                                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CUSTOMER') }) }}\"><i class=\"fa fa-cog mr-1 text-secondary\"></i><span>{{ 'admin.setting.shop.csv_setting'|trans }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card rounded border-0 mb-4 d-block\">
                            <div class=\"card-body p-0\">
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-3 pl-3 text-nowrap\">{{ 'admin.customer.customer_id'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.name'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.phone_number'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">{{ 'admin.common.mail_address'|trans }}</th>
                                        <th class=\"border-top-0 pt-2 pb-3\">&nbsp;</th>
                                        <th class=\"border-top-0 pt-2 pb-3 pr-3\">&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for Customer in pagination %}
                                        <tr id=\"ex-customer-{{ Customer.id }}\">
                                            <td class=\"align-middle pl-3\">{{ Customer.id }}</td>
                                            <td class=\"align-middle\"><a href=\"{{ url('admin_customer_edit', { 'id': Customer.id}) }}\">{{ Customer.name01 }}&nbsp;{{ Customer.name02 }}</a></td>
                                            <td class=\"align-middle\">{{ Customer.phone_number }}</td>
                                            <td class=\"align-middle\">{{ Customer.email }}</td>
                                            <td class=\"align-middle\"></td>
                                            <td class=\"align-middle pr-3\">
                                                <div class=\"text-right\">
                                                    {% if Customer.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\CustomerStatus::PROVISIONAL') %}
                                                        <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.customer.resend'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance_cus_{{ Customer.id }}\">
                                                                <i class=\"fa fa-send fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                            </a>
                                                        </div>
                                                        <div class=\"modal fade\" id=\"discontinuance_cus_{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h5 class=\"modal-title font-weight-bold\">{{ 'admin.customer.resend_confirm_title'|trans }}</h5>
                                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                            <span aria-hidden=\"true\">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"modal-body text-left\">
                                                                        <p class=\"text-left\">{{ 'admin.customer.resend_confirm_message'|trans }}</p>
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">{{ 'admin.common.cancel'|trans }}</button>
                                                                        {# TODO: CSSの変更は別タスクでやります #}
                                                                        <a class=\"btn btn-ec-delete\" href=\"{{ url('admin_customer_resend', {'id' : Customer.id}) }}\" {{ csrf_token_for_anchor() }} data-method=\"get\" data-confirm=\"false\">
                                                                            {{ 'admin.common.send'|trans }}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    {% endif %}
                                                    <div class=\"px-1 d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'admin.common.delete'|trans }}\">
                                                        <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#discontinuance-{{ Customer.id }}\">
                                                            <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                        </a>
                                                    </div>
                                                    <div class=\"modal fade\" id=\"discontinuance-{{ Customer.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"discontinuance\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title font-weight-bold\">
                                                                        {{ 'admin.common.delete_modal__title'|trans }}</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                        <span aria-hidden=\"true\">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class=\"modal-body text-left\">
                                                                    <p class=\"text-left\">
                                                                        {{ 'admin.common.delete_modal__message'|trans({ '%name%' : Customer.email }) }}</p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                                        {{ 'admin.common.cancel'|trans }}
                                                                    </button>
                                                                    <a href=\"{{ url('admin_customer_delete', {'id' : Customer.id}) }}\" class=\"btn btn-ec-delete\"{{ csrf_token_for_anchor() }} data-method=\"delete\" data-confirm=\"false\">
                                                                        {{ 'admin.common.delete'|trans }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.text-right -->
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"row justify-content-md-center mb-4\">
                                    {% if pagination.totalItemCount > 0 %}
                                        {% include \"@admin/pager.twig\" with { 'pages' : pagination.paginationData, 'routes' : 'admin_customer_page' } %}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
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
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Customer\\index.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Customer\\index.twig");
    }
}
