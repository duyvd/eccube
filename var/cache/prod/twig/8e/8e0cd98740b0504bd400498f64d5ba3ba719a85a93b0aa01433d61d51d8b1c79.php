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

/* Mypage\withdraw_complete.twig */
class __TwigTemplate_e7586a2d47bc971aef3d29aa63ee5a7d3077b0b79ea6e29b892f25ee1a5e86f9 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage\\withdraw_complete.twig", 11);
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
        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-withdrawCompleteRole\">
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <div class=\"ec-reportHeading\">
                            <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("退会が完了いたしました"), "html", null, true);
        echo "</h2>
                        </div>
                        <p class=\"ec-reportDescription\">";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用いただき誠にありがとうございました。
またのご来店をお待ちしております。
"), "html", null, true));
        // line 33
        echo "</p>
                        <p><a href=\"";
        // line 34
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\"
                              class=\"ec-blockBtn--cancel\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage\\withdraw_complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  85 => 34,  82 => 33,  78 => 31,  73 => 29,  60 => 21,  55 => 18,  51 => 17,  46 => 11,  44 => 15,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage\\withdraw_complete.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mypage\\withdraw_complete.twig");
    }
}
