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

/* @admin/Store\template_add.twig */
class __TwigTemplate_af98bbdd27adb886586511d445ffe8f11c31234705fe1125a1f856c309ca88a6 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "store", 1 => "template", 2 => "template_install"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\template_add.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_install__page_title"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store"), "html", null, true);
    }

    // line 20
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_template_install");
        echo "\" enctype=\"multipart/form-data\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 22), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span class=\"card-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.upload_new_template"), "html", null, true);
        echo "</span></div>
                        <div class=\"card-body\">
                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_code"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                <div class=\"col-10\">
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 32), 'widget');
        echo "
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 33), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_name"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                <div class=\"col-10\">
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 40), 'widget');
        echo "
                                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 41), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-2\"><span>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.template_file"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    <br>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.template.file_format"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col-10\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 50), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 51), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\" id=\"aside_column\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 65
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_template");
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.back"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 73
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
        return "@admin/Store\\template_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 73,  159 => 66,  155 => 65,  138 => 51,  134 => 50,  128 => 47,  124 => 46,  116 => 41,  112 => 40,  107 => 38,  99 => 33,  95 => 32,  90 => 30,  84 => 27,  76 => 22,  71 => 21,  67 => 20,  60 => 16,  53 => 15,  48 => 11,  46 => 18,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\template_add.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\template_add.twig");
    }
}
