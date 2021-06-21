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

/* @admin/Product\class_category.twig */
class __TwigTemplate_00deee46d41c6a11b502d3aeb5212c11bae9d09675b5232d6a92ba6f29fd0bdd extends \Eccube\Twig\Template
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
        // line 13
        $context["menus"] = [0 => "product", 1 => "class_name"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\class_category.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            var sortable = \$('.sortable-item');
            sortable.each(function() {
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
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category_sort_no_move");
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
                items.find('a').removeClass('disabled');
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
            sortable.on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            sortable.on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            sortable.on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            sortable.on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            sortable.find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
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
    }

    // line 134
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\">
                        <div class=\"row\">
                            <div class=\"col\"><span class=\"card-title\">";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                    <div id=\"ex-class_category\" class=\"card-body\">
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-auto\"><span>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ClassName"] ?? null), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "</span></div>
                        </div>
                        <div class=\"row mb-2\">
                            <div class=\"col-auto\"><span>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
        echo "</span></div>
                            <div class=\"col-auto\"><span>";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ClassName"] ?? null), "backend_name", [], "any", false, false, false, 151), "html", null, true);
        echo "</span></div>
                        </div>
                    </div>
                </div>
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-header\"><span class=\"card-title\">";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category"), "html", null, true);
        echo "</span></div>
                    <div id=\"ex-class_category-edit\" class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">

                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category", ["class_name_id" => twig_get_attribute($this->env, $this->source, ($context["ClassName"] ?? null), "id", [], "any", false, false, false, 162)]), "html", null, true);
        echo "\">
                                        <div class=\"col-auto align-self-center\"><span>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category_name__short"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-3 mr-2\">
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 165), 'widget');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 166), 'widget');
        echo "
                                            ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 167), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto align-self-center\"><span>";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-3\">
                                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, false, 171), 'widget');
        echo "
                                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, false, 172), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-1\"><strong>";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClassCategories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ClassCategory"]) {
            // line 187
            echo "                                    <li id=\"ex-class_category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-classname-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "ClassName", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 187), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "sortNo", [], "any", false, false, false, 187), "html", null, true);
            echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 190), "html", null, true);
            echo "</div>
                                            <div class=\"col d-flex align-items-center\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "name", [], "any", false, false, false, 191), "html", null, true);
            echo " ［";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "backend_name", [], "any", false, false, false, 191), "html", null, true);
            echo "］</div>
                                            <div class=\"col-auto text-right\">
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-up ";
            // line 193
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 193)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-down ";
            // line 196
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 196)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" href=\"\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-visible\" href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category_visibility", ["class_name_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "ClassName", [], "any", false, false, false, 202), "id", [], "any", false, false, false, 202), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\"
                                                   data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 203
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "visible", [], "any", false, false, false, 203)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_hide")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.to_show"))), "html", null, true);
            echo "\"
                                                   data-confirm=\"false\" data-method=\"put\" ";
            // line 204
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " >
                                                    <i class=\"fa fa-toggle-";
            // line 205
            echo ((twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "visible", [], "any", false, false, false, 205)) ? ("on") : ("off"));
            echo " fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                </a>
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                       data-url=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category_delete", ["class_name_id" => twig_get_attribute($this->env, $this->source, ($context["ClassName"] ?? null), "id", [], "any", false, false, false, 209), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 209)]), "html", null, true);
            echo "\"
                                                       data-message=\"";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "name", [], "any", false, false, false, 210)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"form-row d-none mode-edit\" method=\"post\" action=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category_edit", ["class_name_id" => twig_get_attribute($this->env, $this->source, ($context["ClassName"] ?? null), "id", [], "any", false, false, false, 216), "id" => twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 216)]), "html", null, true);
            echo "\">
                                            ";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 217)] ?? null) : null), "_token", [], "any", false, false, false, 217), 'widget');
            echo "
                                            <div class=\"col-3 mr-2\">
                                                ";
            // line 219
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["forms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 219)] ?? null) : null), "name", [], "any", false, false, false, 219), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["forms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 219)] ?? null) : null), "name", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "value", [], "any", false, false, false, 219)]]);
            echo "
                                                ";
            // line 220
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["forms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 220)] ?? null) : null), "name", [], "any", false, false, false, 220), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category__backend_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["forms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 224)] ?? null) : null), "backend_name", [], "any", false, false, false, 224), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["forms"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 224)] ?? null) : null), "backend_name", [], "any", false, false, false, 224), "vars", [], "any", false, false, false, 224), "value", [], "any", false, false, false, 224)]]);
            echo "
                                                ";
            // line 225
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["forms"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 225)] ?? null) : null), "backend_name", [], "any", false, false, false, 225), 'errors');
            echo "
                                            </div>
                                            ";
            // line 227
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["forms"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["ClassCategory"], "id", [], "any", false, false, false, 227)] ?? null) : null), "visible", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "d-none"]]);
            echo "
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </form>
                                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                ";
        // line 245
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
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 258
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 260
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
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 277
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\"></div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Product\\class_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 278,  539 => 277,  528 => 269,  516 => 260,  511 => 258,  506 => 256,  492 => 245,  482 => 237,  463 => 232,  457 => 229,  452 => 227,  447 => 225,  443 => 224,  438 => 222,  433 => 220,  429 => 219,  424 => 217,  420 => 216,  411 => 210,  407 => 209,  402 => 207,  397 => 205,  393 => 204,  389 => 203,  385 => 202,  379 => 199,  369 => 196,  359 => 193,  350 => 191,  346 => 190,  333 => 187,  316 => 186,  310 => 183,  306 => 182,  296 => 175,  290 => 172,  286 => 171,  281 => 169,  276 => 167,  272 => 166,  268 => 165,  263 => 163,  259 => 162,  250 => 156,  242 => 151,  238 => 150,  232 => 147,  228 => 146,  220 => 141,  212 => 135,  208 => 134,  123 => 52,  99 => 31,  95 => 30,  91 => 29,  86 => 28,  82 => 27,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product\\class_category.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Product\\class_category.twig");
    }
}
