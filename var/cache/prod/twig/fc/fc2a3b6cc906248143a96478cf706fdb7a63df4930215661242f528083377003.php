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

/* Mail\customer_withdraw_mail.twig */
class __TwigTemplate_fab37bdcdf015170350f5418d9df7362a6eecec0bb6201bdf9bf090f684f773e extends \Eccube\Twig\Template
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
        echo "より退会手続きを希望された方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 19);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "name01", [], "any", false, false, false, 23);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "name02", [], "any", false, false, false, 23);
        echo " 様

";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 25);
        echo "でございます。

退会手続きが完了いたしました。
";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 28);
        echo "をご利用いただき誠にありがとうございました。

またのご利用を心よりお待ち申し上げます。
";
    }

    public function getTemplateName()
    {
        return "Mail\\customer_withdraw_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  63 => 25,  56 => 23,  49 => 19,  43 => 16,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail\\customer_withdraw_mail.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mail\\customer_withdraw_mail.twig");
    }
}
