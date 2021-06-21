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

/* Mypage\withdraw.twig */
class __TwigTemplate_17878d103b44ea6fdd570eb5e25d8d35e95212c6aa3d3239d02419668d52e9b6 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        // line 13
        $context["mypageno"] = "withdraw";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage\\withdraw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続き"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <div class=\"ec-withdrawRole\">
            <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_withdraw");
        echo "\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 27), 'widget');
        echo "
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div style=\"font-size:100px;text-align:center;\">
                            <div class=\"ec-icon\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                        </div>
                        <p class=\"ec-withdrawRole__title\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続きの前にご確認ください"), "html", null, true);
        echo "
                        </p>
                        <p class=\"ec-withdrawRole__description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続きが完了した時点で、現在保存されている購入履歴やお届け先等の情報は、すべて削除されますのでご注意ください。"), "html", null, true);
        echo "
                        </p>
                    </div>
                </div>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--cancel\" name=\"mode\"
                                value=\"confirm\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会手続きへ"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage\\withdraw.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  94 => 35,  89 => 33,  84 => 31,  77 => 27,  73 => 26,  67 => 23,  60 => 21,  55 => 18,  51 => 17,  46 => 11,  44 => 15,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage\\withdraw.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mypage\\withdraw.twig");
    }
}
