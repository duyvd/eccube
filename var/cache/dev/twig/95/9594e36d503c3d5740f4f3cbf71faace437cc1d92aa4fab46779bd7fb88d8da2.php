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

/* Entry\activate.twig */
class __TwigTemplate_41f625b69db61bc8cd5cbdd72da3d7957ab7602fe5616d746a98fb1d62d24fde extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry\\activate.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Entry\\activate.twig"));

        // line 13
        $context["body_class"] = "registration_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry\\activate.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(完了)"), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"ec-registerCompleteRole\">
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <div class=\"ec-reportHeading\">
                    <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録ありがとうございます"), "html", null, true);
        echo "</h2>
                </div>
                <p class=\"ec-reportDescription\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録が完了しました。
それでは、ショッピングをお楽しみください。
"), "html", null, true));
        // line 29
        echo "</p>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        ";
        // line 32
        if ((isset($context["qtyInCart"]) || array_key_exists("qtyInCart", $context) ? $context["qtyInCart"] : (function () { throw new RuntimeError('Variable "qtyInCart" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                            <a class=\"ec-blockBtn--action\" style=\"margin-bottom: 3px\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 35
        echo "                        <a class=\"ec-blockBtn--cancel\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Entry\\activate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  101 => 33,  99 => 32,  94 => 29,  90 => 27,  85 => 25,  75 => 18,  71 => 16,  61 => 15,  50 => 11,  48 => 13,  35 => 11,);
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

{% set body_class = 'registration_page' %}

{% block main %}
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ '新規会員登録(完了)'|trans }}</h1>
        </div>
    </div>
    <div class=\"ec-registerCompleteRole\">
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <div class=\"ec-reportHeading\">
                    <h2>{{ '会員登録ありがとうございます'|trans }}</h2>
                </div>
                <p class=\"ec-reportDescription\">{{ '会員登録が完了しました。
それでは、ショッピングをお楽しみください。
'|trans|nl2br }}</p>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\">
                        {% if qtyInCart %}
                            <a class=\"ec-blockBtn--action\" style=\"margin-bottom: 3px\" href=\"{{ url('cart') }}\">{{ 'カートへ進む'|trans }}</a>
                        {% endif %}
                        <a class=\"ec-blockBtn--cancel\" href=\"{{ url('homepage') }}\">{{ 'トップページへ'|trans }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Entry\\activate.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Entry\\activate.twig");
    }
}
