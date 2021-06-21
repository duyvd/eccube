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

/* Mypage\change_complete.twig */
class __TwigTemplate_744c89edc85b5e26cdde4a7902ac6620a2acb003aa3253e86aa34c217b46af61 extends \Eccube\Twig\Template
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
        $context["mypageno"] = "change";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage\\change_complete.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員情報編集(完了)"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage\\change_complete.twig", 23)->display($context);
        // line 24
        echo "        </div>
        <div class=\"ec-registerCompleteRole\">
            <div class=\"ec-off2Grid ec-text-ac\">
                <div class=\"ec-off2Grid__cell\">
                    <div class=\"ec-reportHeading\">
                        <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録内容の変更が完了いたしました"), "html", null, true);
        echo "</h2>
                    </div>
                    <p class=\"ec-reportDescription\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("それでは、引き続きショッピングをお楽しみください。"), "html", null, true);
        echo "</p>
                    <div class=\"ec-off4Grid\">
                        <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\"
                                                          href=\"";
        // line 34
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage\\change_complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  81 => 31,  76 => 29,  69 => 24,  67 => 23,  60 => 21,  55 => 18,  51 => 17,  46 => 11,  44 => 15,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage\\change_complete.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mypage\\change_complete.twig");
    }
}
