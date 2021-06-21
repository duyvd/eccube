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

/* @admin/Product\customize_product.twig */
class __TwigTemplate_1b675aac14d57d821e8ae0bafdc0824b8c2f7f97037f4870e0f5554a964038d4 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\customize_product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\customize_product.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\customize_product.twig", 11);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            ";
        // line 62
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 62, $this->source); })()) == false)) {
            // line 63
            echo "            if (\$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "class", [], "any", false, false, false, 63), "stock_unlimited", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "class", [], "any", false, false, false, 64), "stock", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "class", [], "any", false, false, false, 66), "stock", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "class", [], "any", false, false, false, 68), "stock_unlimited", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "class", [], "any", false, false, false, 70), "stock", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "class", [], "any", false, false, false, 72), "stock", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 76
        echo "            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "add_images", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "prototype", [], "any", false, false, false, 79), 'widget');
        echo "';
            var proto_del = '";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "delete_images", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'widget');
        echo "';
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "images", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "save_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
            \$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "add_images", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 88
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "temp_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
            \$widget.val('";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "delete_images", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 94
            echo "            \$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = ";
        // line 130
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "add_images", [], "any", false, false, false, 130)), 0), "html", null, true);
        echo ";
            \$('#";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "product_image", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_product_image_add");
        echo "\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "product_image", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "html", null, true);
        echo "').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 232
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "_token", [], "any", false, false, false, 258), 'widget');
        echo "
        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "return_link", [], "any", false, false, false, 259), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 283, $this->source); })()), "id", [], "any", false, false, false, 283)) {
            // line 284
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 287
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 296
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "name", [], "any", false, false, false, 306), 'widget');
        echo "
                                        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "name", [], "any", false, false, false, 307), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 310
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 310, $this->source); })()) == false)) {
            // line 311
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 314
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 317
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 322
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "class", [], "any", false, false, false, 322), "sale_type", [], "any", false, false, false, 322), 'widget');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 326
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                ";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                                ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 344, $this->source); })()), "product_image", [], "any", false, false, false, 344), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                                ";
        // line 345
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "product_image", [], "any", false, false, false, 345), 'errors');
        echo "
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    ";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.material"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 364, $this->source); })()), "material", [], "any", false, false, false, 364), 'widget');
        echo "
                                        ";
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 365, $this->source); })()), "material", [], "any", false, false, false, 365), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.outer_size"), "html", null, true);
        echo "</span>                                          
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 375
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "outer_size", [], "any", false, false, false, 375), 'widget');
        echo "
                                        ";
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 376, $this->source); })()), "outer_size", [], "any", false, false, false, 376), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.inner_size"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "inner_size", [], "any", false, false, false, 386), 'widget');
        echo "
                                        ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "inner_size", [], "any", false, false, false, 387), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.self_weight"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "self_weight", [], "any", false, false, false, 400), 'widget');
        echo "
                                        ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "self_weight", [], "any", false, false, false, 401), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.load_weight"), "html", null, true);
        echo "</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 411
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 411, $this->source); })()), "load_weight", [], "any", false, false, false, 411), 'widget');
        echo "
                                        ";
        // line 412
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "load_weight", [], "any", false, false, false, 412), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 425
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "description_detail", [], "any", false, false, false, 425), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), "description_detail", [], "any", false, false, false, 426), 'errors');
        echo "
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    ";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "description_list", [], "any", false, false, false, 449), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 450, $this->source); })()), "description_list", [], "any", false, false, false, 450), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 455
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 455, $this->source); })()) == false)) {
            // line 456
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 459
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 461
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 467
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "class", [], "any", false, false, false, 467), "price02", [], "any", false, false, false, 467), 'widget');
            echo "
                                                ";
            // line 468
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 468, $this->source); })()), "class", [], "any", false, false, false, 468), "price02", [], "any", false, false, false, 468), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 475
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 476
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 482
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "class", [], "any", false, false, false, 482), "price01", [], "any", false, false, false, 482), 'widget');
            echo "
                                                ";
            // line 483
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 483, $this->source); })()), "class", [], "any", false, false, false, 483), "price01", [], "any", false, false, false, 483), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 490
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 492
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 498
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 498, $this->source); })()), "class", [], "any", false, false, false, 498), "stock", [], "any", false, false, false, 498), 'widget');
            echo "
                                                ";
            // line 499
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 499, $this->source); })()), "class", [], "any", false, false, false, 499), "stock", [], "any", false, false, false, 499), 'errors');
            echo "
                                                ";
            // line 501
            echo "                                                ";
            // line 502
            echo "                                                ";
            // line 503
            echo "                                                ";
            // line 504
            echo "                                                ";
            // line 505
            echo "                                                ";
            // line 506
            echo "                                                ";
            // line 507
            echo "                                                ";
            // line 508
            echo "                                                ";
            // line 509
            echo "                                                ";
            // line 510
            echo "                                                ";
            // line 511
            echo "                                                ";
            // line 512
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "class", [], "any", false, false, false, 512), "stock_unlimited", [], "any", false, false, false, 512), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 517
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 527
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "search_word", [], "any", false, false, false, 527), 'widget');
        echo "
                                            ";
        // line 528
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "search_word", [], "any", false, false, false, 528), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 533
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 533, $this->source); })()) == false)) {
            // line 534
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 537
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 538
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 544
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "class", [], "any", false, false, false, 544), "code", [], "any", false, false, false, 544), 'widget');
            echo "
                                                ";
            // line 545
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 545, $this->source); })()), "class", [], "any", false, false, false, 545), "code", [], "any", false, false, false, 545), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 552
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 553
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 559
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 559, $this->source); })()), "class", [], "any", false, false, false, 559), "sale_limit", [], "any", false, false, false, 559), 'widget');
            echo "
                                                ";
            // line 560
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "class", [], "any", false, false, false, 560), "sale_limit", [], "any", false, false, false, 560), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 567
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 568
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 574
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 574, $this->source); })()), "class", [], "any", false, false, false, 574), "delivery_duration", [], "any", false, false, false, 574), 'widget');
            echo "
                                                ";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 575, $this->source); })()), "class", [], "any", false, false, false, 575), "delivery_duration", [], "any", false, false, false, 575), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 580
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 580, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 580)) {
                // line 581
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 584
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 589
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "class", [], "any", false, false, false, 589), "delivery_fee", [], "any", false, false, false, 589), 'widget');
                echo "
                                                    ";
                // line 590
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 590, $this->source); })()), "class", [], "any", false, false, false, 590), "delivery_fee", [], "any", false, false, false, 590), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 595
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 595, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 595)) {
                // line 596
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 599
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 604
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "class", [], "any", false, false, false, 604), "tax_rate", [], "any", false, false, false, 604), 'widget');
                echo "
                                                    ";
                // line 605
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 605, $this->source); })()), "class", [], "any", false, false, false, 605), "tax_rate", [], "any", false, false, false, 605), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 610
            echo "                                ";
        }
        // line 611
        echo "
                                ";
        // line 613
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 613), "eccube_form_options", [], "any", false, false, false, 613), "auto_render", [], "any", false, false, false, 613)) {
                // line 614
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 614), "eccube_form_options", [], "any", false, false, false, 614), "form_theme", [], "any", false, false, false, 614)) {
                    // line 615
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 615), "eccube_form_options", [], "any", false, false, false, 615), "form_theme", [], "any", false, false, false, 615)], true);
                    // line 616
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 618
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                    // line 620
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 620), "label", [], "any", false, false, false, 620)), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                    // line 624
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                    ";
                    // line 625
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 630
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 631
        echo "
                                ";
        // line 632
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 632, $this->source); })()) == false)) {
            // line 633
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 633, $this->source); })()), "class", [], "any", false, false, false, 633));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 633), "eccube_form_options", [], "any", false, false, false, 633), "auto_render", [], "any", false, false, false, 633)) {
                    // line 634
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 634), "eccube_form_options", [], "any", false, false, false, 634), "form_theme", [], "any", false, false, false, 634)) {
                        // line 635
                        echo "                                            ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 635), "eccube_form_options", [], "any", false, false, false, 635), "form_theme", [], "any", false, false, false, 635)], true);
                        // line 636
                        echo "                                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                        ";
                    } else {
                        // line 638
                        echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                        // line 640
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 640), "label", [], "any", false, false, false, 640)), "html", null, true);
                        echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                        // line 644
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                        ";
                        // line 645
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 650
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 651
            echo "                                ";
        }
        // line 652
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 656
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 656, $this->source); })()))) {
            // line 657
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 662
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 664
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    ";
            // line 679
            if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 679, $this->source); })()) == true)) {
                // line 680
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">";
                // line 682
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 683
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 684
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 685
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pr-3 pt-2 pb-2\">";
                // line 686
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 689
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 689, $this->source); })()), "ProductClasses", [], "any", false, false, false, 689));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 690
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, false, 690) == 1)) {
                        // line 691
                        echo "                                                    <tr>
                                                        <td class=\"pl-3\">";
                        // line 692
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, false, 692)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, false, 692), "name", [], "any", false, false, false, 692), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 693
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, false, 693)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, false, 693), "name", [], "any", false, false, false, 693), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 694
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, false, 694), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 695
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 695)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, false, 695), "html", null, true);
                        }
                        echo "</td>
                                                        <td class=\"pr-3\">";
                        // line 696
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, false, 696)), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 699
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 700
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 703
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 705
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_class", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 705, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 706
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 708
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 714
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 736
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 740
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 740, $this->source); })()), "free_area", [], "any", false, false, false, 740), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 741
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 741, $this->source); })()), "free_area", [], "any", false, false, false, 741), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 753
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 753, $this->source); })()))) {
            // line 754
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 760
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 760, $this->source); })())]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 761
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 767
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 772
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 795
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 814
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 816
        $macros["renderMacro"] = $this;
        // line 817
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 817, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 818
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 819
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [(isset($context["ChoicedCategoryIds"]) || array_key_exists("ChoicedCategoryIds", $context) ? $context["ChoicedCategoryIds"] : (function () { throw new RuntimeError('Variable "ChoicedCategoryIds" does not exist.', 819, $this->source); })()), $context["TopCategory"], twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 819, $this->source); })()), "Category", [], "any", false, false, false, 819)], 819, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 822
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 822, $this->source); })()), "Category", [], "any", false, false, false, 822), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 827
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 829
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 840
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 854
        if ((twig_length_filter($this->env, (isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 854, $this->source); })())) > 0)) {
            // line 855
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 855, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 856
                echo "                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 857
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 857), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 860
            echo "                                ";
        }
        // line 861
        echo "
                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">";
        // line 866
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 871
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 871, $this->source); })()), "Tag", [], "any", false, false, false, 871), 'widget');
        echo "
                                    </div>
                                    ";
        // line 873
        if ((twig_length_filter($this->env, (isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 873, $this->source); })())) > 0)) {
            // line 874
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 874, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 875
                echo "                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 877
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 877), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 877), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 880
            echo "                                    ";
        }
        // line 881
        echo "
                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 887
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 891
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 918
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 918, $this->source); })()), "create_date", [], "any", false, false, false, 918)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>";
        // line 924
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 927
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 927, $this->source); })()), "update_date", [], "any", false, false, false, 927)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>";
        // line 933
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 936
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 936, $this->source); })()), "Creator", [], "any", false, false, false, 936)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 936, $this->source); })()), "Creator", [], "any", false, false, false, 936), "name", [], "any", false, false, false, 936), "html", null, true))) : (print ("")));
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 949
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 964
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 964, $this->source); })()), "note", [], "any", false, false, false, 964), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 965
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 965, $this->source); })()), "note", [], "any", false, false, false, 965), 'errors');
        echo "
                            </div>
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
                            <a class=\"c-baseLink\" href=\"";
        // line 977
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 977), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 977)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 977), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 977), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 979
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 986
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 986, $this->source); })()), "Status", [], "any", false, false, false, 986), 'widget');
        echo "
                                ";
        // line 987
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 987, $this->source); })()), "Status", [], "any", false, false, false, 987), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 990
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 802
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 803
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 804
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 805
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 805, $this->source); })()), "id", [], "any", false, false, false, 805), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 805, $this->source); })()), "id", [], "any", false, false, false, 805), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 805, $this->source); })()), "id", [], "any", false, false, false, 805), (isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 805, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 806
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 806, $this->source); })()), "id", [], "any", false, false, false, 806), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 806, $this->source); })()), "name", [], "any", false, false, false, 806), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 808
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 808, $this->source); })()), "children", [], "any", false, false, false, 808));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 809
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [(isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 809, $this->source); })()), $context["ChildCategory"], (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 809, $this->source); })())], 809, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 811
            echo "                                        </ul>
                                    </li>
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
        return "@admin/Product\\customize_product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1899 => 811,  1890 => 809,  1886 => 808,  1879 => 806,  1869 => 805,  1866 => 804,  1863 => 803,  1842 => 802,  1823 => 990,  1817 => 987,  1813 => 986,  1803 => 979,  1799 => 978,  1795 => 977,  1780 => 965,  1776 => 964,  1758 => 949,  1753 => 947,  1739 => 936,  1733 => 933,  1724 => 927,  1718 => 924,  1709 => 918,  1703 => 915,  1685 => 900,  1672 => 891,  1670 => 890,  1664 => 887,  1656 => 881,  1653 => 880,  1642 => 877,  1638 => 875,  1633 => 874,  1631 => 873,  1626 => 871,  1618 => 866,  1611 => 861,  1608 => 860,  1599 => 857,  1596 => 856,  1591 => 855,  1589 => 854,  1572 => 840,  1557 => 829,  1555 => 828,  1551 => 827,  1542 => 822,  1533 => 819,  1530 => 818,  1525 => 817,  1523 => 816,  1519 => 814,  1509 => 795,  1483 => 772,  1476 => 767,  1465 => 761,  1461 => 760,  1453 => 754,  1451 => 753,  1436 => 741,  1432 => 740,  1425 => 736,  1406 => 720,  1402 => 719,  1395 => 714,  1385 => 708,  1383 => 706,  1379 => 705,  1375 => 703,  1370 => 700,  1364 => 699,  1358 => 696,  1350 => 695,  1346 => 694,  1340 => 693,  1334 => 692,  1331 => 691,  1328 => 690,  1324 => 689,  1318 => 686,  1314 => 685,  1310 => 684,  1306 => 683,  1302 => 682,  1298 => 680,  1296 => 679,  1278 => 664,  1273 => 662,  1266 => 657,  1264 => 656,  1258 => 652,  1255 => 651,  1248 => 650,  1240 => 645,  1236 => 644,  1229 => 640,  1225 => 638,  1219 => 636,  1216 => 635,  1213 => 634,  1207 => 633,  1205 => 632,  1202 => 631,  1195 => 630,  1187 => 625,  1183 => 624,  1176 => 620,  1172 => 618,  1166 => 616,  1163 => 615,  1160 => 614,  1154 => 613,  1151 => 611,  1148 => 610,  1140 => 605,  1136 => 604,  1128 => 599,  1123 => 596,  1120 => 595,  1112 => 590,  1108 => 589,  1100 => 584,  1095 => 581,  1093 => 580,  1085 => 575,  1081 => 574,  1072 => 568,  1068 => 567,  1058 => 560,  1054 => 559,  1045 => 553,  1041 => 552,  1031 => 545,  1027 => 544,  1018 => 538,  1014 => 537,  1009 => 534,  1007 => 533,  999 => 528,  995 => 527,  986 => 521,  982 => 520,  977 => 517,  968 => 512,  966 => 511,  964 => 510,  962 => 509,  960 => 508,  958 => 507,  956 => 506,  954 => 505,  952 => 504,  950 => 503,  948 => 502,  946 => 501,  942 => 499,  938 => 498,  929 => 492,  924 => 490,  914 => 483,  910 => 482,  901 => 476,  897 => 475,  887 => 468,  883 => 467,  874 => 461,  869 => 459,  864 => 456,  862 => 455,  854 => 450,  850 => 449,  841 => 443,  837 => 442,  824 => 432,  815 => 426,  811 => 425,  803 => 420,  799 => 419,  789 => 412,  785 => 411,  778 => 407,  769 => 401,  765 => 400,  757 => 395,  752 => 393,  743 => 387,  739 => 386,  732 => 382,  723 => 376,  719 => 375,  712 => 371,  703 => 365,  699 => 364,  691 => 359,  686 => 357,  673 => 347,  668 => 345,  664 => 344,  660 => 343,  645 => 331,  640 => 329,  636 => 328,  632 => 326,  625 => 322,  617 => 317,  611 => 314,  607 => 313,  603 => 311,  601 => 310,  595 => 307,  591 => 306,  583 => 301,  578 => 299,  573 => 296,  566 => 292,  558 => 287,  554 => 286,  550 => 284,  548 => 283,  531 => 269,  518 => 259,  514 => 258,  504 => 251,  498 => 248,  485 => 238,  477 => 232,  467 => 231,  406 => 179,  397 => 173,  373 => 152,  358 => 140,  347 => 132,  343 => 131,  339 => 130,  305 => 99,  300 => 96,  291 => 94,  286 => 93,  277 => 90,  273 => 89,  268 => 88,  263 => 87,  254 => 84,  250 => 83,  245 => 82,  241 => 81,  237 => 80,  233 => 79,  228 => 76,  221 => 72,  216 => 70,  211 => 68,  206 => 66,  201 => 64,  196 => 63,  194 => 62,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  156 => 40,  146 => 39,  120 => 22,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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

{% block title %}{{ 'admin.product.product_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.product.product_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fileupload/jquery.fileupload-ui.css', 'admin') }}\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }
    </style>
{% endblock stylesheet %}

{% block javascript %}
    <script src=\"{{ asset('assets/js/vendor/fileupload/vendor/jquery.ui.widget.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.iframe-transport.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-process.js', 'admin') }}\"></script>
    <script src=\"{{ asset('assets/js/vendor/fileupload/jquery.fileupload-validate.js', 'admin') }}\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            {% if has_class == false %}
            if (\$(\"#{{ form.class.stock_unlimited.vars.id }}\").prop(\"checked\")) {
                \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
            }
            \$(\"#{{ form.class.stock_unlimited.vars.id }}\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#{{ form.class.stock.vars.id }}\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#{{ form.class.stock.vars.id }}\").removeAttr(\"disabled\");
                }
            });
            {% endif %}
            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '{{ form_widget(form.add_images.vars.prototype) }}';
            var proto_del = '{{ form_widget(form.delete_images.vars.prototype) }}';
            {% for image in form.images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(image.vars.value, 'save_image') }}'));
            var \$widget = \$('{{ form_widget(image) }}');
            \$widget.val('{{ image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for add_image in form.add_images %}
            var \$img = \$(proto_img.replace(/__path__/g, '{{ asset(add_image.vars.value, 'temp_image') }}'));
            var \$widget = \$('{{ form_widget(add_image) }}');
            \$widget.val('{{ add_image.vars.value }}');
            \$(\"#thumb\").append(\$img.append(\$widget));
            {% endfor %}
            {% for delete_image in form.delete_images %}
            \$(\"#thumb\").append('{{ form_widget(delete_image) }}');
            {% endfor %}
            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"{{ 'admin.common.drag_and_drop_description'|trans }}\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = {{ form.add_images|length|default(0) }};
            \$('#{{ form.product_image.vars.id }}').fileupload({
                url: \"{{ url('admin_product_image_add') }}\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '{{ asset('', 'temp_image') }}' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"{{ 'admin.common.upload_error'|trans }}\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"{{ 'admin.common.upload_error'|trans }}\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#{{ form.product_image.vars.id }}').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$(this).addClass('disabled');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
{% endblock javascript %}

{% block main %}
    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">{{ 'admin.common.move_to_confirm_title'|trans }}</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_save_and_move'|trans }}
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        {{ 'admin.common.move_to_confirm_move_only'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        {{ form_widget(form._token) }}
        {{ form_widget(form.return_link) }}
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        {{ 'admin.product.product__card_title'|trans }}
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                {% if Product.id %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.product_id'|trans }}\">
                                                <span>{{ 'admin.product.product_id'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>{{ Product.id }}</p>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.name'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.name) }}
                                        {{ form_errors(form.name) }}
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.sale_type'|trans }}\">
                                                <span>{{ 'admin.product.sale_type'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            {{ form_widget(form.class.sale_type) }}
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"{{ 'tooltip.product.image'|trans }}\">
                                            <span>{{ 'admin.product.image'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>{{ 'admin.product.image_size'|trans }}
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                {{ 'admin.common.drag_and_drop_image_description'|trans }}
                                                {{ form_widget(form.product_image, { attr : { accept : 'image/*', style : 'display:none;' } }) }}
                                                {{ form_errors(form.product_image) }}
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    {{ 'admin.common.file_select'|trans }}
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.material'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.material) }}
                                        {{ form_errors(form.material) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.outer_size'|trans }}</span>                                          
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.outer_size) }}
                                        {{ form_errors(form.outer_size) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.inner_size'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.inner_size) }}
                                        {{ form_errors(form.inner_size) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.self_weight'|trans }}</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                {{ 'admin.common.required'|trans }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.self_weight) }}
                                        {{ form_errors(form.self_weight) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>{{ 'admin.product.load_weight'|trans }}</span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        {{ form_widget(form.load_weight) }}
                                        {{ form_errors(form.load_weight) }}
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.description_detail'|trans }}\">
                                            <span>{{ 'admin.product.description_detail'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        {{ form_widget(form.description_detail, { attr : { rows : \"8\"} }) }}
                                        {{ form_errors(form.description_detail) }}
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    {{ 'admin.product.description_list__add'|trans }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.description_list'|trans }}\">
                                                <span>{{ 'admin.product.description_list'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                {{ form_widget(form.description_list, { attr : { rows : \"4\"} }) }}
                                                {{ form_errors(form.description_list) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.sale_price'|trans }}</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price02) }}
                                                {{ form_errors(form.class.price02) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.normal_price'|trans }}\">
                                                <span>{{ 'admin.product.normal_price'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.price01) }}
                                                {{ form_errors(form.class.price01) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>{{ 'admin.product.stock'|trans }}</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    {{ 'admin.common.required'|trans }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                {{ form_widget(form.class.stock) }}
                                                {{ form_errors(form.class.stock) }}
                                                {# TODO: form_layoutの調整 #}
                                                {#<div class=\"form-check mb-2\">#}
                                                {#<input class=\"form-check-input\"#}
                                                {#id=\"{{ form.class.stock_unlimited.vars.id }}\"#}
                                                {#name=\"{{ form.class.stock_unlimited.vars.full_name }}\"#}
                                                {#type=\"checkbox\"#}
                                                {#value=\"{{ form.class.stock_unlimited.vars.value }}\">#}
                                                {#<label class=\"form-check-label\"#}
                                                {#for=\"{{ form.class.stock_unlimited.vars.id }}\">#}
                                                {#{{ 'admin.product.product.stock_unlimited'|trans }}#}
                                                {#</label>#}
                                                {#</div>#}
                                                {{ form_widget(form.class.stock_unlimited) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.search_word'|trans }}\">
                                            <span>{{ 'admin.product.search_word'|trans }}</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            {{ form_widget(form.search_word) }}
                                            {{ form_errors(form.search_word) }}
                                        </div>
                                    </div>
                                </div>

                                {% if has_class == false %}
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.product_code'|trans }}\">
                                                <span>{{ 'admin.product.product_code'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.code) }}
                                                {{ form_errors(form.class.code) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.sale_limit'|trans }}\">
                                                <span>{{ 'admin.product.sale_limit'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.sale_limit) }}
                                                {{ form_errors(form.class.sale_limit) }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"{{ 'tooltip.product.delivery_duration'|trans }}\">
                                                <span>{{ 'admin.product.delivery_duration'|trans }}</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                {{ form_widget(form.class.delivery_duration) }}
                                                {{ form_errors(form.class.delivery_duration) }}
                                            </div>
                                        </div>
                                    </div>

                                    {% if BaseInfo.option_product_delivery_fee %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.delivery_fee'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.delivery_fee) }}
                                                    {{ form_errors(form.class.delivery_fee) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                    {% if BaseInfo.option_product_tax_rule %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>{{ 'admin.product.tax_rate'|trans }}</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(form.class.tax_rate) }}
                                                    {{ form_errors(form.class.tax_rate) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endif %}

                                {# エンティティ拡張の自動出力 #}
                                {% for f in form if f.vars.eccube_form_options.auto_render %}
                                    {% if f.vars.eccube_form_options.form_theme %}
                                        {% form_theme f f.vars.eccube_form_options.form_theme %}
                                        {{ form_row(f) }}
                                    {% else %}
                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>{{ f.vars.label|trans }}</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    {{ form_widget(f) }}
                                                    {{ form_errors(f) }}
                                                </div>
                                            </div>
                                        </div>
                                    {% endif %}
                                {% endfor %}

                                {% if has_class == false %}
                                    {% for f in form.class if f.vars.eccube_form_options.auto_render %}
                                        {% if f.vars.eccube_form_options.form_theme %}
                                            {% form_theme f f.vars.eccube_form_options.form_theme %}
                                            {{ form_row(f) }}
                                        {% else %}
                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>{{ f.vars.label|trans }}</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        {{ form_widget(f) }}
                                                        {{ form_errors(f) }}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}

                            </div>
                        </div>
                    </div>
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"{{ 'tooltip.product.product_class'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.product_class__card_title'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    {% if has_class == true %}
                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">{{ 'admin.product.class_category1__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.class_category2__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.product_code__short'|trans }}</th>
                                            <th class=\"pt-2 pb-2\">{{ 'admin.product.stock'|trans }}</th>
                                            <th class=\"pr-3 pt-2 pb-2\">{{ 'admin.product.price'|trans }}</th>
                                            </thead>
                                            <tbody>
                                            {% for Class in Product.ProductClasses %}
                                                {% if Class.visible == 1 %}
                                                    <tr>
                                                        <td class=\"pl-3\">{% if Class.hasClassCategory1 %}{{ Class.ClassCategory1.name }}{% endif %}</td>
                                                        <td>{% if Class.hasClassCategory2 %}{{ Class.ClassCategory2.name }}{% endif %}</td>
                                                        <td>{{ Class.code }}</td>
                                                        <td>{% if Class.stock_unlimited %}{{ 'admin.product.stock_unlimited__short'|trans }}{% else %}{{ Class.stock }}{% endif %}</td>
                                                        <td class=\"pr-3\">{{ Class.price02|price }}</td>
                                                    </tr>
                                                {% endif %}
                                            {% endfor %}
                                            </tbody>
                                        </table>
                                    {% endif %}

                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"{{ path('admin_product_product_class', { 'id' : id }) }}\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                               '%name%' : 'admin.product.product_class_registration'|trans
                                           }) }}\">{{ 'admin.product.product_class__confirm_of_product'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.product.free_area'|trans }}\">
                                        <span class=\"card-title\">{{ 'admin.product.free_area__card_title'|trans }}</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>{{ 'admin.product.free_area'|trans }}</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            {{ form_widget(form.free_area, {id: 'wysiwyg-area', attr : { rows : \"8\"} }) }}
                                            {{ form_errors(form.free_area) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    {% if id is not null %}
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"{{ url('product_detail', {id:id}) }}\"
                                           title=\"{{ 'admin.product.preview'|trans }}\">{{ 'admin.product.preview'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">{{ 'admin.product.category__product_card_title'|trans }}</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"{{ 'admin.product.search_category'|trans }}\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {% macro tree(ChoicedIds, Category, form) %}
                                    {% import _self as selfMacro %}
                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_{{ Category.id }}\" name=\"admin_product[Category][]\" value=\"{{ Category.id }}\" {% if Category.id in ChoicedIds %}checked{% endif %}>
                                        <label for=\"admin_product_category_{{ Category.id }}\">{{ Category.name }}</label>
                                        <ul class=\"list-unstyled\">
                                            {% for child,ChildCategory in Category.children %}
                                                {{ selfMacro.tree(ChoicedIds, ChildCategory, form) }}
                                            {% endfor %}
                                        </ul>
                                    </li>
                                {% endmacro %}

                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    {% import _self as renderMacro %}
                                    {% for TopCategory in TopCategories %}
                                        <ul class=\"list-unstyled\">
                                            {{ renderMacro.tree(ChoicedCategoryIds, TopCategory, form.Category) }}
                                        </ul>
                                    {% endfor %}
                                    {{ form_errors(form.Category) }}
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"{{ path('admin_product_category') }}\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.category_management'|trans}) }}\">{{ 'admin.product.move_to_category'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            {{ 'admin.product.tag__product_card_title'|trans }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                {% if(Tags|length > 0) %}
                                    {% for Tag in Tags %}
                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">{{ Tag.name }}</button>
                                        </div>
                                    {% endfor %}
                                {% endif %}

                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">{{ 'admin.product.save_tag'|trans }}</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        {{ form_widget(form.Tag) }}
                                    </div>
                                    {% if(TagsList|length > 0) %}
                                        {% for Tag in TagsList %}
                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"{{ Tag.id }}\">{{ Tag.name }}</button>
                                            </div>
                                        {% endfor %}
                                    {% endif %}

                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"{{ path('admin_product_tag') }}\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"{{ 'admin.common.move_to_confirm_message'|trans({
                                           '%name%' : 'admin.product.tag_management'|trans }) }}\">{{ 'admin.product.move_to_tag'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">{{ 'admin.product.create_date__card_title'|trans }}</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>{{ 'admin.common.create_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.create_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>{{ 'admin.common.update_date'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.update_date|date_min }}</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>{{ 'admin.common.last_updater'|trans }}</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：{{ Product.Creator ? Product.Creator.name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"{{ 'tooltip.product.shop_memo'|trans }}\">
                                        <span class=\"card-title\">
                                            {{ 'admin.common.shop_memo'|trans }}
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                {{ form_widget(form.note, { attr : { rows : \"8\"} }) }}
                                {{ form_errors(form.note) }}
                            </div>
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
                            <a class=\"c-baseLink\" href=\"{{ path('admin_product_page', { page_no : app.session.get('eccube.admin.product.search.page_no')|default('1') } ) }}\"
                               data-action=\"confirm\" title=\"{{ 'admin.common.move_to_confirm_message'|trans({'%name%' : 'admin.product.product_list'|trans }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>{{ 'admin.product.product_list'|trans }}</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                {{ form_widget(form.Status) }}
                                {{ form_errors(form.Status) }}
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endblock %}
", "@admin/Product\\customize_product.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\admin\\Product\\customize_product.twig");
    }
}
