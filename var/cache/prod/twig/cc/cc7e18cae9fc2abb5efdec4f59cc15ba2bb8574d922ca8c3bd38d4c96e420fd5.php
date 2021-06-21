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

/* Mail\forgot_mail.twig */
class __TwigTemplate_0277418e8984aa3739c42ad6370e93b308f8db704403b3b79d37219aaea173d2 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 16);
        echo "よりパスワード再発行手続きを希望された方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 19);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

パスワードを変更するには下記URLにアクセスし、パスワードの再設定を行ってください。

";
        // line 25
        echo ($context["reset_url"] ?? null);
        echo "

※URLの有効期限は";
        // line 27
        echo ($context["expire"] ?? null);
        echo "分以内です。有効期限を過ぎますとURLは無効となりますので、その場合、もう一度最初から手続きを行ってください。

";
    }

    public function getTemplateName()
    {
        return "Mail\\forgot_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  58 => 25,  49 => 19,  43 => 16,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail\\forgot_mail.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mail\\forgot_mail.twig");
    }
}
