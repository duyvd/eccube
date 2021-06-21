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
class __TwigTemplate_422837bbaba36791e96c073905244fbb2ba2723aca8ca3b18f790de1657661a2 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage\\withdraw.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Mypage\\withdraw.twig"));

        // line 13
        $context["mypageno"] = "withdraw";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage\\withdraw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_withdraw");
        echo "\">
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "_token", [], "any", false, false, false, 27), 'widget');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  122 => 42,  112 => 35,  107 => 33,  102 => 31,  95 => 27,  91 => 26,  85 => 23,  78 => 21,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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
{% extends 'default_frame.twig' %}

{% set mypageno = 'withdraw' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ '退会手続き'|trans }}</h1>
            </div>
            {{ include('Mypage/navi.twig') }}
        </div>
        <div class=\"ec-withdrawRole\">
            <form method=\"post\" action=\"{{ url('mypage_withdraw') }}\">
                {{ form_widget(form._token) }}
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div style=\"font-size:100px;text-align:center;\">
                            <div class=\"ec-icon\"><img src=\"{{ asset('assets/icon/exclamation.svg') }}\" alt=\"\"></div>
                        </div>
                        <p class=\"ec-withdrawRole__title\">{{ '退会手続きの前にご確認ください'|trans }}
                        </p>
                        <p class=\"ec-withdrawRole__description\">{{ '退会手続きが完了した時点で、現在保存されている購入履歴やお届け先等の情報は、すべて削除されますのでご注意ください。'|trans }}
                        </p>
                    </div>
                </div>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        <button type=\"submit\" class=\"ec-blockBtn--cancel\" name=\"mode\"
                                value=\"confirm\">{{ '退会手続きへ'|trans }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "Mypage\\withdraw.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Mypage\\withdraw.twig");
    }
}
