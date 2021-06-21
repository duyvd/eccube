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

/* @admin/Product\product.twig */
class __TwigTemplate_66972e98465abbc5e648ee17f3b49325ea9b2a0a2f432bff587dc963ef9a1237 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Product\\product.twig"));

        // line 13
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product\\product.twig", 11);
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
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "description_detail", [], "any", false, false, false, 362), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), "description_detail", [], "any", false, false, false, 363), 'errors');
        echo "
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    ";
        // line 369
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
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "description_list", [], "any", false, false, false, 386), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 387, $this->source); })()), "description_list", [], "any", false, false, false, 387), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 392
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 392, $this->source); })()) == false)) {
            // line 393
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 396
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 398
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "class", [], "any", false, false, false, 404), "price02", [], "any", false, false, false, 404), 'widget');
            echo "
                                                ";
            // line 405
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })()), "class", [], "any", false, false, false, 405), "price02", [], "any", false, false, false, 405), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 412
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 413
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "class", [], "any", false, false, false, 419), "price01", [], "any", false, false, false, 419), 'widget');
            echo "
                                                ";
            // line 420
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "class", [], "any", false, false, false, 420), "price01", [], "any", false, false, false, 420), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 427
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 429
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 435, $this->source); })()), "class", [], "any", false, false, false, 435), "stock", [], "any", false, false, false, 435), 'widget');
            echo "
                                                ";
            // line 436
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), "class", [], "any", false, false, false, 436), "stock", [], "any", false, false, false, 436), 'errors');
            echo "
                                                ";
            // line 438
            echo "                                                ";
            // line 439
            echo "                                                ";
            // line 440
            echo "                                                ";
            // line 441
            echo "                                                ";
            // line 442
            echo "                                                ";
            // line 443
            echo "                                                ";
            // line 444
            echo "                                                ";
            // line 445
            echo "                                                ";
            // line 446
            echo "                                                ";
            // line 447
            echo "                                                ";
            // line 448
            echo "                                                ";
            // line 449
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "class", [], "any", false, false, false, 449), "stock_unlimited", [], "any", false, false, false, 449), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 454
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "search_word", [], "any", false, false, false, 464), 'widget');
        echo "
                                            ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "search_word", [], "any", false, false, false, 465), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 470
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 470, $this->source); })()) == false)) {
            // line 471
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 474
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 475
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 481
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "class", [], "any", false, false, false, 481), "code", [], "any", false, false, false, 481), 'widget');
            echo "
                                                ";
            // line 482
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "class", [], "any", false, false, false, 482), "code", [], "any", false, false, false, 482), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 490
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 496
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "class", [], "any", false, false, false, 496), "sale_limit", [], "any", false, false, false, 496), 'widget');
            echo "
                                                ";
            // line 497
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), "class", [], "any", false, false, false, 497), "sale_limit", [], "any", false, false, false, 497), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 504
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 505
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 511
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 511, $this->source); })()), "class", [], "any", false, false, false, 511), "delivery_duration", [], "any", false, false, false, 511), 'widget');
            echo "
                                                ";
            // line 512
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 512, $this->source); })()), "class", [], "any", false, false, false, 512), "delivery_duration", [], "any", false, false, false, 512), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 517
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 517, $this->source); })()), "option_product_delivery_fee", [], "any", false, false, false, 517)) {
                // line 518
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 521
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 526
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), "class", [], "any", false, false, false, 526), "delivery_fee", [], "any", false, false, false, 526), 'widget');
                echo "
                                                    ";
                // line 527
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 527, $this->source); })()), "class", [], "any", false, false, false, 527), "delivery_fee", [], "any", false, false, false, 527), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 532
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 532, $this->source); })()), "option_product_tax_rule", [], "any", false, false, false, 532)) {
                // line 533
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 536
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 541
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 541, $this->source); })()), "class", [], "any", false, false, false, 541), "tax_rate", [], "any", false, false, false, 541), 'widget');
                echo "
                                                    ";
                // line 542
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 542, $this->source); })()), "class", [], "any", false, false, false, 542), "tax_rate", [], "any", false, false, false, 542), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 547
            echo "                                ";
        }
        // line 548
        echo "
                                ";
        // line 550
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 550, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 550), "eccube_form_options", [], "any", false, false, false, 550), "auto_render", [], "any", false, false, false, 550)) {
                // line 551
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 551), "eccube_form_options", [], "any", false, false, false, 551), "form_theme", [], "any", false, false, false, 551)) {
                    // line 552
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 552), "eccube_form_options", [], "any", false, false, false, 552), "form_theme", [], "any", false, false, false, 552)], true);
                    // line 553
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 555
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                    // line 557
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 557), "label", [], "any", false, false, false, 557)), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                    // line 561
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                    ";
                    // line 562
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 567
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 568
        echo "
                                ";
        // line 569
        if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 569, $this->source); })()) == false)) {
            // line 570
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 570, $this->source); })()), "class", [], "any", false, false, false, 570));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 570), "eccube_form_options", [], "any", false, false, false, 570), "auto_render", [], "any", false, false, false, 570)) {
                    // line 571
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 571), "eccube_form_options", [], "any", false, false, false, 571), "form_theme", [], "any", false, false, false, 571)) {
                        // line 572
                        echo "                                            ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 572), "eccube_form_options", [], "any", false, false, false, 572), "form_theme", [], "any", false, false, false, 572)], true);
                        // line 573
                        echo "                                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                        ";
                    } else {
                        // line 575
                        echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                        // line 577
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 577), "label", [], "any", false, false, false, 577)), "html", null, true);
                        echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                        // line 581
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                        ";
                        // line 582
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 587
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 588
            echo "                                ";
        }
        // line 589
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 593
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 593, $this->source); })()))) {
            // line 594
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 599
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 601
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
            // line 616
            if (((isset($context["has_class"]) || array_key_exists("has_class", $context) ? $context["has_class"] : (function () { throw new RuntimeError('Variable "has_class" does not exist.', 616, $this->source); })()) == true)) {
                // line 617
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">";
                // line 619
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 620
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 621
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 622
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pr-3 pt-2 pb-2\">";
                // line 623
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 626
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 626, $this->source); })()), "ProductClasses", [], "any", false, false, false, 626));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 627
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, false, 627) == 1)) {
                        // line 628
                        echo "                                                    <tr>
                                                        <td class=\"pl-3\">";
                        // line 629
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, false, 629)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 630
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, false, 630)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, false, 630), "name", [], "any", false, false, false, 630), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 631
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, false, 631), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 632
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 632)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, false, 632), "html", null, true);
                        }
                        echo "</td>
                                                        <td class=\"pr-3\">";
                        // line 633
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, false, 633)), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 636
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 637
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 640
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 642
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_product_class", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 642, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 643
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 645
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 651
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 657
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
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 677
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 677, $this->source); })()), "free_area", [], "any", false, false, false, 677), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 678
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 678, $this->source); })()), "free_area", [], "any", false, false, false, 678), 'errors');
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
        // line 690
        if ( !(null === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 690, $this->source); })()))) {
            // line 691
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 697
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 697, $this->source); })())]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 698
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
        // line 704
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 709
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
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 751
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 753
        $macros["renderMacro"] = $this;
        // line 754
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TopCategories"]) || array_key_exists("TopCategories", $context) ? $context["TopCategories"] : (function () { throw new RuntimeError('Variable "TopCategories" does not exist.', 754, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 755
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 756
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [(isset($context["ChoicedCategoryIds"]) || array_key_exists("ChoicedCategoryIds", $context) ? $context["ChoicedCategoryIds"] : (function () { throw new RuntimeError('Variable "ChoicedCategoryIds" does not exist.', 756, $this->source); })()), $context["TopCategory"], twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 756, $this->source); })()), "Category", [], "any", false, false, false, 756)], 756, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 759
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 759, $this->source); })()), "Category", [], "any", false, false, false, 759), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 764
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 765
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 766
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
        // line 777
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
        // line 791
        if ((twig_length_filter($this->env, (isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 791, $this->source); })())) > 0)) {
            // line 792
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Tags"]) || array_key_exists("Tags", $context) ? $context["Tags"] : (function () { throw new RuntimeError('Variable "Tags" does not exist.', 792, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 793
                echo "                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 794
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 794), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 797
            echo "                                ";
        }
        // line 798
        echo "
                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">";
        // line 803
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 808
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 808, $this->source); })()), "Tag", [], "any", false, false, false, 808), 'widget');
        echo "
                                    </div>
                                    ";
        // line 810
        if ((twig_length_filter($this->env, (isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 810, $this->source); })())) > 0)) {
            // line 811
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["TagsList"]) || array_key_exists("TagsList", $context) ? $context["TagsList"] : (function () { throw new RuntimeError('Variable "TagsList" does not exist.', 811, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 812
                echo "                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 814
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 814), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 814), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 817
            echo "                                    ";
        }
        // line 818
        echo "
                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 824
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 827
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 828
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
        // line 837
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
        // line 852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 855
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 855, $this->source); })()), "create_date", [], "any", false, false, false, 855)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 864
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 864, $this->source); })()), "update_date", [], "any", false, false, false, 864)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>";
        // line 870
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 873
        ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 873, $this->source); })()), "Creator", [], "any", false, false, false, 873)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 873, $this->source); })()), "Creator", [], "any", false, false, false, 873), "name", [], "any", false, false, false, 873), "html", null, true))) : (print ("")));
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
        // line 884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 886
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
        // line 901
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 901, $this->source); })()), "note", [], "any", false, false, false, 901), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 902
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 902, $this->source); })()), "note", [], "any", false, false, false, 902), 'errors');
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
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 914), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 914)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 914), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 914), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 916
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 923
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 923, $this->source); })()), "Status", [], "any", false, false, false, 923), 'widget');
        echo "
                                ";
        // line 924
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 924, $this->source); })()), "Status", [], "any", false, false, false, 924), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 927
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

    // line 739
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

            // line 740
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 741
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 742
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 742, $this->source); })()), "id", [], "any", false, false, false, 742), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 742, $this->source); })()), "id", [], "any", false, false, false, 742), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 742, $this->source); })()), "id", [], "any", false, false, false, 742), (isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 742, $this->source); })()))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 743
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 743, $this->source); })()), "id", [], "any", false, false, false, 743), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 743, $this->source); })()), "name", [], "any", false, false, false, 743), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 745
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 745, $this->source); })()), "children", [], "any", false, false, false, 745));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 746
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [(isset($context["ChoicedIds"]) || array_key_exists("ChoicedIds", $context) ? $context["ChoicedIds"] : (function () { throw new RuntimeError('Variable "ChoicedIds" does not exist.', 746, $this->source); })()), $context["ChildCategory"], (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })())], 746, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 748
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
        return "@admin/Product\\product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1785 => 748,  1776 => 746,  1772 => 745,  1765 => 743,  1755 => 742,  1752 => 741,  1749 => 740,  1728 => 739,  1709 => 927,  1703 => 924,  1699 => 923,  1689 => 916,  1685 => 915,  1681 => 914,  1666 => 902,  1662 => 901,  1644 => 886,  1639 => 884,  1625 => 873,  1619 => 870,  1610 => 864,  1604 => 861,  1595 => 855,  1589 => 852,  1571 => 837,  1558 => 828,  1556 => 827,  1550 => 824,  1542 => 818,  1539 => 817,  1528 => 814,  1524 => 812,  1519 => 811,  1517 => 810,  1512 => 808,  1504 => 803,  1497 => 798,  1494 => 797,  1485 => 794,  1482 => 793,  1477 => 792,  1475 => 791,  1458 => 777,  1443 => 766,  1441 => 765,  1437 => 764,  1428 => 759,  1419 => 756,  1416 => 755,  1411 => 754,  1409 => 753,  1405 => 751,  1395 => 732,  1369 => 709,  1362 => 704,  1351 => 698,  1347 => 697,  1339 => 691,  1337 => 690,  1322 => 678,  1318 => 677,  1311 => 673,  1292 => 657,  1288 => 656,  1281 => 651,  1271 => 645,  1269 => 643,  1265 => 642,  1261 => 640,  1256 => 637,  1250 => 636,  1244 => 633,  1236 => 632,  1232 => 631,  1226 => 630,  1220 => 629,  1217 => 628,  1214 => 627,  1210 => 626,  1204 => 623,  1200 => 622,  1196 => 621,  1192 => 620,  1188 => 619,  1184 => 617,  1182 => 616,  1164 => 601,  1159 => 599,  1152 => 594,  1150 => 593,  1144 => 589,  1141 => 588,  1134 => 587,  1126 => 582,  1122 => 581,  1115 => 577,  1111 => 575,  1105 => 573,  1102 => 572,  1099 => 571,  1093 => 570,  1091 => 569,  1088 => 568,  1081 => 567,  1073 => 562,  1069 => 561,  1062 => 557,  1058 => 555,  1052 => 553,  1049 => 552,  1046 => 551,  1040 => 550,  1037 => 548,  1034 => 547,  1026 => 542,  1022 => 541,  1014 => 536,  1009 => 533,  1006 => 532,  998 => 527,  994 => 526,  986 => 521,  981 => 518,  979 => 517,  971 => 512,  967 => 511,  958 => 505,  954 => 504,  944 => 497,  940 => 496,  931 => 490,  927 => 489,  917 => 482,  913 => 481,  904 => 475,  900 => 474,  895 => 471,  893 => 470,  885 => 465,  881 => 464,  872 => 458,  868 => 457,  863 => 454,  854 => 449,  852 => 448,  850 => 447,  848 => 446,  846 => 445,  844 => 444,  842 => 443,  840 => 442,  838 => 441,  836 => 440,  834 => 439,  832 => 438,  828 => 436,  824 => 435,  815 => 429,  810 => 427,  800 => 420,  796 => 419,  787 => 413,  783 => 412,  773 => 405,  769 => 404,  760 => 398,  755 => 396,  750 => 393,  748 => 392,  740 => 387,  736 => 386,  727 => 380,  723 => 379,  710 => 369,  701 => 363,  697 => 362,  689 => 357,  685 => 356,  673 => 347,  668 => 345,  664 => 344,  660 => 343,  645 => 331,  640 => 329,  636 => 328,  632 => 326,  625 => 322,  617 => 317,  611 => 314,  607 => 313,  603 => 311,  601 => 310,  595 => 307,  591 => 306,  583 => 301,  578 => 299,  573 => 296,  566 => 292,  558 => 287,  554 => 286,  550 => 284,  548 => 283,  531 => 269,  518 => 259,  514 => 258,  504 => 251,  498 => 248,  485 => 238,  477 => 232,  467 => 231,  406 => 179,  397 => 173,  373 => 152,  358 => 140,  347 => 132,  343 => 131,  339 => 130,  305 => 99,  300 => 96,  291 => 94,  286 => 93,  277 => 90,  273 => 89,  268 => 88,  263 => 87,  254 => 84,  250 => 83,  245 => 82,  241 => 81,  237 => 80,  233 => 79,  228 => 76,  221 => 72,  216 => 70,  211 => 68,  206 => 66,  201 => 64,  196 => 63,  194 => 62,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  156 => 40,  146 => 39,  120 => 22,  115 => 21,  105 => 20,  86 => 16,  67 => 15,  56 => 11,  54 => 18,  52 => 13,  39 => 11,);
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
", "@admin/Product\\product.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Product\\product.twig");
    }
}
