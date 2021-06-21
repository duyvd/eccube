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

/* @admin/Store\plugin_install.twig */
class __TwigTemplate_4e5619b46da8776cd87ccb112bdfdad0d7e5be739f2aaabdb1c3a7f7977e7074 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_list"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\plugin_install.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "独自プラグインのアップロード";
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "オーナーズストア";
    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <form id=\"upload-form\" class=\"\" method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_install");
        echo "\" enctype=\"multipart/form-data\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 20), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <h5 class=\"box-title\">新規プラグインのアップロード</h5>
                        </div>

                        <div class=\"card-body\">
                            <div class=\"row\">
                                <label class=\"col-auto control-label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.install.label"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plugin_archive", [], "any", false, false, false, 33), 'widget', ["attr" => ["accept" => "application/zip,application/x-tar,application/x-gzip"]]);
        echo "
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 35
            echo "                                        <div class=\"errormsg text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35)), "html", null, true);
            echo "</div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                    <button class=\"btn btn-primary mt-3 px-5\" type=\"submit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload"), "html", null, true);
        echo "</button>
                                </div>
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
        return "@admin/Store\\plugin_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  101 => 35,  97 => 34,  93 => 33,  88 => 31,  74 => 20,  69 => 19,  65 => 18,  58 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_install.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_install.twig");
    }
}
