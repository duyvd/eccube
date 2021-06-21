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

/* @admin/Product\category.twig */
class __TwigTemplate_23fa4f964e7ab4f6de619cb7faa4ce0a7e57592dceac9cf3b83c8343123a523d extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\category.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "class_category"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\category.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management"), "html", null, true);
        
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 131
        echo "    ";
        // line 132
        echo "    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 141
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">
                                    ";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "
                                </a>
                            </li>
                            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 152, $this->source); })()), "path", [], "any", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["ParentCategory"]) {
            // line 153
            echo "                                ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 153))) {
                // line 154
                echo "                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                echo "\">
                                            ";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ParentCategory"], "name", [], "any", false, false, false, 156), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
            }
            // line 160
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ParentCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_export");
        echo "\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.csv_download"), "html", null, true);
        echo "</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_setting_shop_csv", ["id" => twig_constant("\\Eccube\\Entity\\Master\\CsvType::CSV_TYPE_CATEGORY")]), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                            <span>";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.csv_setting"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"";
        // line 188
        if (twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)]), "html", null, true);
        } elseif ((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 188, $this->source); })())) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188)]), "html", null, true);
        } else {
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        }
        echo "\"
                                          enctype=\"multipart/form-data\">
                                        ";
        // line 190
        if ((twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 190, $this->source); })()), "hierarchy", [], "any", false, false, false, 190) <= twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 190, $this->source); })()), "eccube_category_nest_level", [], "any", false, false, false, 190))) {
            // line 191
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "_token", [], "any", false, false, false, 191), 'widget');
            echo "
                                            <div class=\"form-row mb-3\">
                                                <div class=\"col-auto\">
                                                    ";
            // line 194
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "name", [], "any", false, false, false, 194), 'widget');
            echo "
                                                    ";
            // line 195
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "name", [], "any", false, false, false, 195), 'errors');
            echo "
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        ";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
            echo "
                                                    </button>
                                                </div>
                                            </div>
                                            ";
            // line 204
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 204), "eccube_form_options", [], "any", false, false, false, 204), "auto_render", [], "any", false, false, false, 204)) {
                    // line 205
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 205), "eccube_form_options", [], "any", false, false, false, 205), "form_theme", [], "any", false, false, false, 205)) {
                        // line 206
                        echo "                                                    ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 206), "eccube_form_options", [], "any", false, false, false, 206), "form_theme", [], "any", false, false, false, 206)], true);
                        // line 207
                        echo "                                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                                ";
                    } else {
                        // line 209
                        echo "                                                    <div class=\"form-row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>";
                        // line 211
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 211), "label", [], "any", false, false, false, 211)), "html", null, true);
                        echo "</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
                        // line 214
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                            ";
                        // line 215
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                        </div>
                                                    </div>
                                                ";
                    }
                    // line 219
                    echo "                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                        ";
        }
        // line 221
        echo "                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-2\"><strong>";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 230
        if ((twig_length_filter($this->env, (isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 230, $this->source); })())) > 0)) {
            // line 231
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 231, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 232
                echo "                                        <li id=\"ex-category-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 232), "html", null, true);
                echo "\" class=\"list-group-item sortable-item\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 232), "html", null, true);
                echo "\" data-sort-no=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "sort_no", [], "any", false, false, false, 232), "html", null, true);
                echo "\">
                                            ";
                // line 233
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 233) != twig_get_attribute($this->env, $this->source, (isset($context["TargetCategory"]) || array_key_exists("TargetCategory", $context) ? $context["TargetCategory"] : (function () { throw new RuntimeError('Variable "TargetCategory" does not exist.', 233, $this->source); })()), "id", [], "any", false, false, false, 233))) {
                    // line 234
                    echo "                                                <div class=\"row justify-content-around mode-view\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">";
                    // line 236
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 236), "html", null, true);
                    echo "</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 238)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 238), "html", null, true);
                    echo "</a>
                                                    </div>
                                                    <div class=\"col-auto text-right\">
                                                        <a class=\"btn btn-ec-actionIcon action-up mr-2 ";
                    // line 241
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 241)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down mr-2 ";
                    // line 246
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 246)) {
                        echo " disabled ";
                    }
                    echo "\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon mr-2 action-edit\"
                                                           href=\"";
                    // line 252
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 252)]), "html", null, true);
                    echo "\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"";
                    // line 254
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
                    echo "\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"";
                    // line 258
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                    echo "\">
                                                            <a class=\"btn btn-ec-actionIcon";
                    // line 259
                    if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "Children", [], "any", false, false, false, 259)) > 0) || twig_get_attribute($this->env, $this->source, $context["Category"], "hasProductCategories", [], "any", false, false, false, 259))) {
                        echo " disabled";
                    }
                    echo "\"
                                                               data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                               data-url=\"";
                    // line 261
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 261)]), "html", null, true);
                    echo "\"
                                                               data-message=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 262)]), "html", null, true);
                    echo "\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"form-row d-none mode-edit\" method=\"POST\" action=\"";
                    // line 268
                    ((((isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 268, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Parent"]) || array_key_exists("Parent", $context) ? $context["Parent"] : (function () { throw new RuntimeError('Variable "Parent" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category"))));
                    echo "\" enctype=\"multipart/form-data\">
                                                    ";
                    // line 269
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 269, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 269), [], "array", false, false, false, 269), "_token", [], "any", false, false, false, 269), 'widget');
                    echo "
                                                    <div class=\"col-auto align-items-center\">
                                                        ";
                    // line 271
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 271, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 271), [], "array", false, false, false, 271), "name", [], "any", false, false, false, 271), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 271, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 271), [], "array", false, false, false, 271), "name", [], "any", false, false, false, 271), "vars", [], "any", false, false, false, 271), "value", [], "any", false, false, false, 271)]]);
                    echo "
                                                        ";
                    // line 272
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 272, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 272), [], "array", false, false, false, 272), "name", [], "any", false, false, false, 272), 'errors');
                    echo "
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">";
                    // line 275
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
                    // line 278
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                    echo "</button>
                                                    </div>
                                                    ";
                    // line 281
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 281, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 281), [], "array", false, false, false, 281));
                    foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 281), "eccube_form_options", [], "any", false, false, false, 281), "auto_render", [], "any", false, false, false, 281)) {
                            // line 282
                            echo "                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>";
                            // line 285
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 285), "label", [], "any", false, false, false, 285)), "html", null, true);
                            echo "</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                ";
                            // line 288
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                            echo "
                                                                ";
                            // line 289
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                            echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 294
                    echo "                                                </form>
                                            ";
                }
                // line 296
                echo "                                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            echo "                                ";
        }
        // line 299
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                ";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body text-left\">
                                            <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                ";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 320
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 357
        echo "
        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_all"), "html", null, true);
        echo "</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            ";
        // line 367
        $macros["renderMacro"] = $this;
        // line 368
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 368, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 369
            echo "                                <ul class=\"list-unstyled\">
                                    ";
            // line 370
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [$context["TopCategory"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 370), "id", [], "any", true, true, false, 370)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "Parent", [], "any", false, true, false, 370), "id", [], "any", false, false, false, 370), null)) : (null)), 0, (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 370, $this->source); })())], 370, $context, $this->getSourceContext());
            echo "
                                </ul>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function macro_tree($__Category__ = null, $__TargetId__ = null, $__level__ = null, $__Ids__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "TargetId" => $__TargetId__,
            "level" => $__level__,
            "Ids" => $__Ids__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 336
            echo "            ";
            $macros["selfMacro"] = $this;
            // line 337
            echo "            ";
            $context["level"] = ((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 337, $this->source); })()) + 1);
            // line 338
            echo "            <li>
                <label ";
            // line 339
            if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 339, $this->source); })()), "children", [], "any", false, false, false, 339)) > 0) && !twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 339, $this->source); })()), "id", [], "any", false, false, false, 339), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 339, $this->source); })())))) {
                echo "class=\"collapsed\"
                       ";
            }
            // line 340
            echo "data-toggle=\"collapse\"
                       href=\"#directory_category";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 341, $this->source); })()), "id", [], "any", false, false, false, 341), "html", null, true);
            echo "\"
                       aria-expanded=\"";
            // line 342
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 342, $this->source); })()), "id", [], "any", false, false, false, 342), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 342, $this->source); })()))) {
                echo "true";
            }
            echo "\"
                       aria-controls=\"directory_category";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 343, $this->source); })()), "id", [], "any", false, false, false, 343), "html", null, true);
            echo "\"></label>
                <span>
                    <a href=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_category_show", ["parent_id" => twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345)]), "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 345, $this->source); })()), "id", [], "any", false, false, false, 345) == (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 345, $this->source); })()))) {
                echo " class=\"font-weight-bold\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 345, $this->source); })()), "name", [], "any", false, false, false, 345), "html", null, true);
            echo "
                        (";
            // line 346
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 346, $this->source); })()), "children", [], "any", false, false, false, 346)), "html", null, true);
            echo ")</a></span>
                ";
            // line 347
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 347, $this->source); })()), "children", [], "any", false, false, false, 347)) > 0)) {
                // line 348
                echo "                    <ul class=\"collapse list-unstyled ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 348, $this->source); })()), "id", [], "any", false, false, false, 348), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 348, $this->source); })()))) {
                    echo "show";
                }
                echo "\"
                        id=\"directory_category";
                // line 349
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 349, $this->source); })()), "id", [], "any", false, false, false, 349), "html", null, true);
                echo "\">
                        ";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 350, $this->source); })()), "children", [], "any", false, false, false, 350));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 351
                    echo "                            ";
                    echo twig_call_macro($macros["selfMacro"], "macro_tree", [$context["ChildCategory"], (isset($context["TargetId"]) || array_key_exists("TargetId", $context) ? $context["TargetId"] : (function () { throw new RuntimeError('Variable "TargetId" does not exist.', 351, $this->source); })()), (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 351, $this->source); })()), (isset($context["Ids"]) || array_key_exists("Ids", $context) ? $context["Ids"] : (function () { throw new RuntimeError('Variable "Ids" does not exist.', 351, $this->source); })())], 351, $context, $this->getSourceContext());
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "                    </ul>
                ";
            }
            // line 355
            echo "            </li>
        ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product\\category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  874 => 355,  870 => 353,  861 => 351,  857 => 350,  853 => 349,  846 => 348,  844 => 347,  840 => 346,  830 => 345,  825 => 343,  819 => 342,  815 => 341,  812 => 340,  807 => 339,  804 => 338,  801 => 337,  798 => 336,  776 => 335,  760 => 373,  751 => 370,  748 => 369,  743 => 368,  741 => 367,  732 => 363,  724 => 357,  717 => 331,  705 => 322,  700 => 320,  695 => 318,  681 => 307,  671 => 299,  668 => 298,  653 => 296,  649 => 294,  637 => 289,  633 => 288,  627 => 285,  622 => 282,  616 => 281,  611 => 278,  605 => 275,  599 => 272,  595 => 271,  590 => 269,  586 => 268,  577 => 262,  573 => 261,  566 => 259,  562 => 258,  555 => 254,  550 => 252,  543 => 248,  536 => 246,  530 => 243,  523 => 241,  515 => 238,  510 => 236,  506 => 234,  504 => 233,  495 => 232,  477 => 231,  475 => 230,  469 => 227,  465 => 226,  458 => 221,  455 => 220,  448 => 219,  441 => 215,  437 => 214,  431 => 211,  427 => 209,  421 => 207,  418 => 206,  415 => 205,  409 => 204,  402 => 199,  395 => 195,  391 => 194,  384 => 191,  382 => 190,  371 => 188,  352 => 172,  347 => 170,  342 => 168,  337 => 166,  330 => 161,  324 => 160,  317 => 156,  313 => 155,  310 => 154,  307 => 153,  303 => 152,  297 => 149,  293 => 148,  284 => 141,  274 => 140,  258 => 132,  256 => 131,  246 => 130,  151 => 44,  128 => 24,  124 => 23,  120 => 22,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% set menus = ['product', 'class_category'] %}

{% block title %}{{ 'admin.product.category_management'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.core.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.widget.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js', 'admin') }}\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '{{ url('admin_product_category_sort_no_move') }}',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.action-up').removeClass('disabled');
                items.find('a.action-down').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            var groupItem = \$('.list-group-item');
            groupItem.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            groupItem.on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });

            groupItem.find('.is-invalid').each(function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>
{% endblock %}

{% block stylesheet %}
    {#TODO: Move to css file#}
    <style>
        .c-directoryTree ul > li > ul li:not(:last-of-type) > label:before,
        .c-directoryTree ul > li > ul li:last-of-type > label:before {
            margin-right: 1.6em;
        }
    </style>
{% endblock %}

{% block main %}
    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents mb-2\">
            <div class=\"row\">
                <div class=\"col-6\">
                    <nav aria-label=\"breadcrumb\" role=\"navigation\">
                        <ol class=\"breadcrumb mb-2 p-0\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"{{ url('admin_product_category') }}\">
                                    {{ 'admin.product.category_all'|trans }}
                                </a>
                            </li>
                            {% for ParentCategory in TargetCategory.path %}
                                {% if ParentCategory.id is not null %}
                                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                                        <a href=\"{{ url('admin_product_category_show', { parent_id : ParentCategory.id }) }}\">
                                            {{ ParentCategory.name }}
                                        </a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ol>
                    </nav>
                </div>
                <div class=\"col-6 text-right\">
                    <div class=\"btn-group\" role=\"group\">
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_product_category_export') }}\">
                            <i class=\"fa fa-cloud-download mr-1 text-secondary\"></i>
                            <span>{{ 'admin.common.csv_download'|trans }}</span>
                        </a>
                        <a class=\"btn btn-ec-regular\" href=\"{{ url('admin_setting_shop_csv', { id : constant('\\\\Eccube\\\\Entity\\\\Master\\\\CsvType::CSV_TYPE_CATEGORY') }) }}\">
                            <i class=\"fa fa-cog mr-1 text-secondary\"></i>
                            <span>{{ 'admin.setting.shop.csv_setting'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div id=\"ex-primaryCol\" class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\"
                                          action=\"{% if TargetCategory.id %}{{ path('admin_product_category_edit', {id: TargetCategory.id}) }}{% elseif Parent %}{{ url('admin_product_category_show', {'parent_id': Parent.id}) }}{% else %}{{ url('admin_product_category') }}{% endif %}\"
                                          enctype=\"multipart/form-data\">
                                        {% if TargetCategory.hierarchy <= eccube_config.eccube_category_nest_level %}
                                            {{ form_widget(form._token) }}
                                            <div class=\"form-row mb-3\">
                                                <div class=\"col-auto\">
                                                    {{ form_widget(form.name) }}
                                                    {{ form_errors(form.name) }}
                                                </div>
                                                <div class=\"col-auto\">
                                                    <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                        {{ 'admin.common.create__new'|trans }}
                                                    </button>
                                                </div>
                                            </div>
                                            {# エンティティ拡張の自動出力 #}
                                            {% for f in form if f.vars.eccube_form_options.auto_render %}
                                                {% if f.vars.eccube_form_options.form_theme %}
                                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                                    {{ form_row(f) }}
                                                {% else %}
                                                    <div class=\"form-row mb-3\">
                                                        <div class=\"col-3\">
                                                            <span>{{ f.vars.label|trans }}</span>
                                                        </div>
                                                        <div class=\"col\">
                                                            {{ form_widget(f) }}
                                                            {{ form_errors(f) }}
                                                        </div>
                                                    </div>
                                                {% endif %}
                                            {% endfor %}
                                        {% endif %}
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>{{ 'admin.common.id'|trans }}</strong></div>
                                        <div class=\"col-2\"><strong>{{ 'admin.product.category'|trans }}</strong></div>
                                    </div>
                                </li>
                                {% if Categories|length > 0 %}
                                    {% for Category in Categories %}
                                        <li id=\"ex-category-{{ Category.id }}\" class=\"list-group-item sortable-item\" data-id=\"{{ Category.id }}\" data-sort-no=\"{{ Category.sort_no }}\">
                                            {% if Category.id != TargetCategory.id %}
                                                <div class=\"row justify-content-around mode-view\">
                                                    <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                                    <div class=\"col-auto d-flex align-items-center\">{{ Category.id }}</div>
                                                    <div class=\"col d-flex align-items-center\">
                                                        <a href=\"{{ url('admin_product_category_show',  { parent_id : Category.id }) }}\">{{ Category.name }}</a>
                                                    </div>
                                                    <div class=\"col-auto text-right\">
                                                        <a class=\"btn btn-ec-actionIcon action-up mr-2 {% if loop.first %} disabled {% endif %}\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.up'|trans }}\">
                                                            <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon action-down mr-2 {% if loop.last %} disabled {% endif %}\" href=\"\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.down'|trans }}\">
                                                            <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                        </a>
                                                        <a class=\"btn btn-ec-actionIcon mr-2 action-edit\"
                                                           href=\"{{ url('admin_product_category_edit', {id: Category.id}) }}\"
                                                           data-tooltip=\"true\" data-placement=\"top\"
                                                           title=\"{{ 'admin.common.edit'|trans }}\">
                                                            <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                        </a>
                                                        <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\"
                                                             title=\"{{ 'admin.common.delete'|trans }}\">
                                                            <a class=\"btn btn-ec-actionIcon{% if Category.Children|length > 0 or Category.hasProductCategories %} disabled{% endif %}\"
                                                               data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                               data-url=\"{{ url('admin_product_category_delete', {id: Category.id}) }}\"
                                                               data-message=\"{{ 'admin.common.delete_modal__message'|trans({ \"%name%\" : Category.name }) }}\">
                                                                <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form class=\"form-row d-none mode-edit\" method=\"POST\" action=\"{{ (Parent and Parent.id) ? url('admin_product_category_show', {'parent_id': Parent.id}) : url('admin_product_category') }}\" enctype=\"multipart/form-data\">
                                                    {{ form_widget(forms[Category.id]._token) }}
                                                    <div class=\"col-auto align-items-center\">
                                                        {{ form_widget(forms[Category.id].name, {'attr': {'data-origin-value': forms[Category.id].name.vars.value}}) }}
                                                        {{ form_errors(forms[Category.id].name) }}
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-conversion\" type=\"submit\">{{ 'admin.common.decision'|trans }}</button>
                                                    </div>
                                                    <div class=\"col-auto align-items-center\">
                                                        <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">{{ 'admin.common.cancel'|trans }}</button>
                                                    </div>
                                                    {# エンティティ拡張の自動出力 #}
                                                    {% for f in forms[Category.id] if f.vars.eccube_form_options.auto_render %}
                                                    <div class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                                                        <div class=\"row\">
                                                            <div class=\"col-3\">
                                                                <span>{{ f.vars.label|trans }}</span>
                                                            </div>
                                                            <div class=\"col-9\">
                                                                {{ form_widget(f) }}
                                                                {{ form_errors(f) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {% endfor %}
                                                </form>
                                            {% endif %}
                                        </li>
                                    {% endfor %}
                                {% endif %}
                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                {{ 'admin.common.delete_modal__title'|trans }}
                                            </h5>
                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body text-left\">
                                            <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                {{ 'admin.common.cancel'|trans }}
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" {{ csrf_token_for_anchor() }}
                                               data-method=\"delete\" data-confirm=\"false\">
                                                {{ 'admin.common.delete'|trans }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>{{ 'admin.common.drag_and_drop_description'|trans }}</p>
            </div>
        </div>

        {% macro tree(Category, TargetId, level, Ids) %}
            {% import _self as selfMacro %}
            {% set level = level + 1 %}
            <li>
                <label {% if (Category.children|length > 0) and (Category.id not in Ids) %}class=\"collapsed\"
                       {% endif %}data-toggle=\"collapse\"
                       href=\"#directory_category{{ Category.id }}\"
                       aria-expanded=\"{% if Category.id in Ids %}true{% endif %}\"
                       aria-controls=\"directory_category{{ Category.id }}\"></label>
                <span>
                    <a href=\"{{ url('admin_product_category_show', { parent_id : Category.id }) }}\"{%if (Category.id == TargetId) %} class=\"font-weight-bold\"{% endif %}>{{ Category.name }}
                        ({{ Category.children|length }})</a></span>
                {% if Category.children|length > 0 %}
                    <ul class=\"collapse list-unstyled {% if Category.id in Ids %}show{% endif %}\"
                        id=\"directory_category{{ Category.id }}\">
                        {% for ChildCategory in Category.children %}
                            {{ selfMacro.tree(ChildCategory, TargetId, level, Ids) }}
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endmacro %}

        <div class=\"c-contentsArea__secondaryCol\">
            <div id=\"ex-secondaryCol\" class=\"c-secondaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <span class=\"card-title\"><a
                                    href=\"{{ url('admin_product_category') }}\">{{ 'admin.product.category_all'|trans }}</a></span>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"c-directoryTree mb-3\">
                            {% import _self as renderMacro %}
                            {% for TopCategory in TopCategories %}
                                <ul class=\"list-unstyled\">
                                    {{ renderMacro.tree(TopCategory, TargetCategory.Parent.id | default(null), 0, Ids) }}
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@admin/Product\\category.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Product\\category.twig");
    }
}
