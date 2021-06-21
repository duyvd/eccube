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

/* @user_data/Product/Shopping/customize_confirm.twig */
class __TwigTemplate_0c42cd53266f587b4812244c6b2b00301a750c36f23001d36f43895500bcaefa extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize_confirm.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize_confirm.twig"));

        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), [0 => "Form/form_div_layout.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/Product/Shopping/customize_confirm.twig", 11);
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
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容のご確認"), "html", null, true);
        echo "</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            ";
        // line 26
        $context["step"] = 1;
        // line 27
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()) + 1);
        // line 29
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートの商品"), "html", null, true);
        echo "
                </div>
            </li>
            ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") == false)) {
            // line 34
            echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "                    </div>
                    <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                    </div>
                </li>
            ";
        }
        // line 41
        echo "            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()) + 1);
        // line 43
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()) + 1);
        // line 49
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文内容確認"), "html", null, true);
        echo "
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 54, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 54, $this->source); })()) + 1);
        // line 55
        echo "                </div>
                <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping_checkout");
        echo "\">
    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "_token", [], "any", false, false, false, 64), 'widget');
        echo "
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 72, $this->source); })()), "name01", [], "any", false, false, false, 72), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 72, $this->source); })()), "name02", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
        echo "</p>
                    <p class=\"ec-halfInput\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "kana01", [], "any", false, false, false, 73), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 73, $this->source); })()), "kana02", [], "any", false, false, false, 73), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 74, $this->source); })()), "companyName", [], "any", false, false, false, 74), "html", null, true);
        echo "</span></p>
                    <p class=\"ec-zipInput\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 75, $this->source); })()), "postal_code", [], "any", false, false, false, 75), "html", null, true);
        echo "</p>
                    <p class=\"ec-input\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "pref", [], "any", false, false, false, 76), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "addr01", [], "any", false, false, false, 76), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 76, $this->source); })()), "addr02", [], "any", false, false, false, 76), "html", null, true);
        echo "</p>
                    <p class=\"ec-telInput\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 77, $this->source); })()), "phone_number", [], "any", false, false, false, 77), "html", null, true);
        echo "</span></p>
                    <p class=\"ec-input\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), "html", null, true);
        echo "</span></p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 85, $this->source); })()), "shippings", [], "any", false, false, false, 85));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 86
            echo "                    ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 86);
            // line 87
            echo "                    ";
            $context["isShowReducedTaxMess"] = false;
            // line 88
            echo "                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "productOrderItems", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 91
                echo "                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct((((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 93))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 93), "MainListImage", [], "any", false, false, false, 93)))), "save_image"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 93), "html", null, true);
                echo "\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 95), "html", null, true);
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                echo "</p>
                                        ";
                // line 96
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 96)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 96), "classCategory1", [], "any", false, false, false, 96))) {
                    // line 97
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 97), "classCategory1", [], "any", false, false, false, 97), "className", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 97), "classCategory1", [], "any", false, false, false, 97), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 99
                echo "                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 99)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 99), "classCategory2", [], "any", false, false, false, 99))) {
                    // line 100
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 100), "classCategory2", [], "any", false, false, false, 100), "className", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 100), "classCategory2", [], "any", false, false, false, 100), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 102
                echo "

                                                 ";
                // line 105
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 105), "material", [], "any", false, false, false, 105))) {
                    // line 106
                    echo "                                                        <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品素材"), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 106), "material", [], "any", false, false, false, 106), "html", null, true);
                    echo "</p>                                                    
                                                ";
                }
                // line 108
                echo "                                                ";
                // line 109
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 109), "outer_size", [], "any", false, false, false, 109))) {
                    // line 110
                    echo "                                                    <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 110), "outer_size", [], "any", false, false, false, 110)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 112
                echo "                                                ";
                // line 113
                echo "                                                ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 113), "inner_size", [], "any", false, false, false, 113))) {
                    // line 114
                    echo "                                                   <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("外寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 114), "inner_size", [], "any", false, false, false, 114), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 116
                echo "                                                ";
                // line 117
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 117), "self_weight", [], "any", false, false, false, 117) != 0)) {
                    // line 118
                    echo "                                                   <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("自重"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 118), "self_weight", [], "any", false, false, false, 118), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kg"), "html", null, true);
                    echo "</p>
                                                ";
                }
                // line 120
                echo "
                                        
                                        <p>";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "priceIncTax", [], "any", false, false, false, 122)), "html", null, true);
                echo " × ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 122)), "html", null, true);
                echo "<span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "totalPrice", [], "any", false, false, false, 122)), "html", null, true);
                echo "</span></p>
                                    </div>
                                </div>
                            </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                        </ul>
                        <p>";
            // line 128
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 128, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(""), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name01", [], "any", false, false, false, 131), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "name02", [], "any", false, false, false, 131), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana01", [], "any", false, false, false, 131), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "kana02", [], "any", false, false, false, 131), "html", null, true);
            echo ")";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" 様"), "html", null, true);
            echo "</p>
                        <p>";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 132), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 132), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 132), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 132), "html", null, true);
            echo "</p>
                        <p>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 133), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo "</label>
                                ";
            // line 139
            $context["delivery_fee"] = 0;
            // line 140
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping"], "order_items", [], "any", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                if (twig_get_attribute($this->env, $this->source, $context["item"], "isDeliveryFee", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                                    ";
                    $context["delivery_fee"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 141);
                    // line 142
                    echo "                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 143, $this->source); })()), "Shippings", [], "any", false, false, false, 143), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 143, $this->source); })()), [], "array", false, false, false, 143), "Delivery", [], "any", false, false, false, 143), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["delivery_fee"]) || array_key_exists("delivery_fee", $context) ? $context["delivery_fee"] : (function () { throw new RuntimeError('Variable "delivery_fee" does not exist.', 143, $this->source); })())), "html", null, true);
            echo ")
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo "</label>
                                ";
            // line 147
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 147, $this->source); })()), "Shippings", [], "any", false, false, false, 147), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 147, $this->source); })()), [], "array", false, false, false, 147), "shipping_delivery_date", [], "any", false, false, false, 147)) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 147, $this->source); })()), "Shippings", [], "any", false, false, false, 147), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 147, $this->source); })()), [], "array", false, false, false, 147), "shipping_delivery_date", [], "any", false, false, false, 147))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo "</label>
                                ";
            // line 151
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 151, $this->source); })()), "Shippings", [], "any", false, false, false, 151), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 151, $this->source); })()), [], "array", false, false, false, 151), "shipping_delivery_time", [], "any", false, false, false, 151)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 151, $this->source); })()), "Shippings", [], "any", false, false, false, 151), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 151, $this->source); })()), [], "array", false, false, false, 151), "shipping_delivery_time", [], "any", false, false, false, 151)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払方法"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
        // line 162
        $context["charge"] = 0;
        // line 163
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 163, $this->source); })()), "order_items", [], "any", false, false, false, 163));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if (twig_get_attribute($this->env, $this->source, $context["item"], "isCharge", [], "any", false, false, false, 163)) {
                // line 164
                echo "                        ";
                $context["charge"] = twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 164);
                // line 165
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 166, $this->source); })()), "Payment", [], "any", false, false, false, 166), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["charge"]) || array_key_exists("charge", $context) ? $context["charge"] : (function () { throw new RuntimeError('Variable "charge" does not exist.', 166, $this->source); })())), "html", null, true);
        echo ")
                </div>
            </div>
            ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 169, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 169) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 169, $this->source); })()), "Customer", [], "any", false, false, false, 169)))) {
            // line 170
            echo "            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("利用ポイント"), "html", null, true);
            echo "</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    ";
            // line 175
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 175, $this->source); })()), "use_point", [], "any", false, false, false, 175)), "html", null, true);
            echo " pt
                </div>
            </div>
            ";
        }
        // line 179
        echo "            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"ec-input\">
                    ";
        // line 184
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 184, $this->source); })()), "message", [], "any", false, false, false, 184), "html", null, true));
        echo "
                </div>
            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                    <dd class=\"ec-totalBox__specTotal\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 192, $this->source); })()), "subtotal", [], "any", false, false, false, 192)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 196, $this->source); })()), "charge", [], "any", false, false, false, 196)), "html", null, true);
        echo "</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 200, $this->source); })()), "deliveryFeeTotal", [], "any", false, false, false, 200)), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 202
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 202, $this->source); })()), "taxable_discount", [], "any", false, false, false, 202) < 0)) {
            // line 203
            echo "                <dl class=\"ec-totalBox__spec\">
                    <dt>";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                    <dd>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 205, $this->source); })()), "taxable_discount", [], "any", false, false, false, 205)), "html", null, true);
            echo "</dd>
                </dl>
                ";
        }
        // line 208
        echo "                <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 208, $this->source); })()), "taxable_total", [], "any", false, false, false, 208)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 209, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 209));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 210
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 215, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 215));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 216
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 216)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 217
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 218
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 218), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 219
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 219)), "html", null, true);
            echo "</dd>
                    </dl>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い合計"), "html", null, true);
        echo "<span class=\"ec-totalBox__price\">";
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 222, $this->source); })()), "payment_total", [], "any", false, false, false, 222)), "html", null, true);
        echo "</span><span class=\"ec-totalBox__taxLabel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                ";
        // line 223
        if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 223, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 223) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 223, $this->source); })()), "Customer", [], "any", false, false, false, 223)))) {
            // line 224
            echo "                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 227
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 227, $this->source); })()), "UsePoint", [], "any", false, false, false, 227)), "html", null, true);
            echo " pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</span></dt>
                        <dd><span class=\"ec-font-bold\">";
            // line 231
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 231, $this->source); })()), "AddPoint", [], "any", false, false, false, 231)), "html", null, true);
            echo " pt</span></dd>
                    </dl>
                </div>
                ";
        }
        // line 235
        echo "                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("注文する"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("shopping");
        echo "\" class=\"ec-blockBtn--cancel\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続きに戻る"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@user_data/Product/Shopping/customize_confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 237,  718 => 236,  715 => 235,  708 => 231,  704 => 230,  698 => 227,  694 => 226,  690 => 224,  688 => 223,  679 => 222,  662 => 219,  658 => 218,  655 => 217,  650 => 216,  632 => 215,  623 => 212,  619 => 211,  616 => 210,  612 => 209,  603 => 208,  597 => 205,  593 => 204,  590 => 203,  588 => 202,  583 => 200,  579 => 199,  573 => 196,  569 => 195,  563 => 192,  559 => 191,  549 => 184,  543 => 181,  539 => 179,  532 => 175,  526 => 172,  522 => 170,  520 => 169,  511 => 166,  504 => 165,  501 => 164,  495 => 163,  493 => 162,  487 => 159,  482 => 156,  463 => 151,  459 => 150,  453 => 147,  449 => 146,  440 => 143,  433 => 142,  430 => 141,  424 => 140,  422 => 139,  418 => 138,  410 => 133,  401 => 132,  388 => 131,  382 => 128,  379 => 127,  363 => 122,  359 => 120,  350 => 118,  347 => 117,  345 => 116,  336 => 114,  333 => 113,  331 => 112,  322 => 110,  319 => 109,  317 => 108,  309 => 106,  306 => 105,  302 => 102,  294 => 100,  291 => 99,  283 => 97,  281 => 96,  273 => 95,  266 => 93,  262 => 91,  258 => 90,  254 => 88,  251 => 87,  248 => 86,  231 => 85,  226 => 83,  218 => 78,  214 => 77,  208 => 76,  203 => 75,  199 => 74,  193 => 73,  184 => 72,  178 => 69,  170 => 64,  166 => 63,  156 => 56,  153 => 55,  150 => 54,  143 => 50,  140 => 49,  137 => 48,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  103 => 33,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  76 => 19,  71 => 16,  61 => 15,  50 => 11,  48 => 13,  35 => 11,);
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

{% form_theme form 'Form/form_div_layout.twig' %}

{% block main %}

<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>{{ 'ご注文内容のご確認'|trans }}</h1>
    </div>
</div>

<div class=\"ec-cartRole\">
    <div class=\"ec-cartRole__progress\">
        <ul class=\"ec-progress\">
            {% set step = 1 %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'カートの商品'|trans }}
                </div>
            </li>
            {% if is_granted('ROLE_USER') == false %}
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                    </div>
                    <div class=\"ec-progress__label\">{{ 'お客様情報'|trans }}
                    </div>
                </li>
            {% endif %}
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文手続き'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item is-complete\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ 'ご注文内容確認'|trans }}
                </div>
            </li>
            <li class=\"ec-progress__item\">
                <div class=\"ec-progress__number\">{{ step }}{% set step = step + 1 %}
                </div>
                <div class=\"ec-progress__label\">{{ '完了'|trans }}
                </div>
            </li>
        </ul>
    </div>
</div>

    <form id=\"shopping-form\" method=\"post\" action=\"{{ url('shopping_checkout') }}\">
    {{ form_widget(form._token) }}
    <div class=\"ec-orderRole\">
        <div class=\"ec-orderRole__detail\">
            <div class=\"ec-orderAccount\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お客様情報'|trans }}</h2>
                </div>
                <div class=\"ec-orderAccount__account\">
                    <p class=\"ec-halfInput\">{{ ''|trans }}{{ Order.name01 }} {{ Order.name02 }}</span>{{ ' 様'|trans }}</p>
                    <p class=\"ec-halfInput\">{{ Order.kana01 }}</span> {{ Order.kana02 }}</p>
                    <p class=\"ec-input\">{{ Order.companyName }}</span></p>
                    <p class=\"ec-zipInput\">{{ '〒'|trans }}{{ Order.postal_code }}</p>
                    <p class=\"ec-input\">{{ Order.pref }}{{ Order.addr01 }}{{ Order.addr02 }}</p>
                    <p class=\"ec-telInput\">{{ Order.phone_number }}</span></p>
                    <p class=\"ec-input\">{{ Order.email }}</span></p>
                </div>
            </div>
            <div class=\"ec-orderDelivery\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '配送情報'|trans }}</h2>
                </div>
                {% for shipping in Order.shippings %}
                    {% set idx = loop.index0 %}
                    {% set isShowReducedTaxMess = false %}
                    <div class=\"ec-orderDelivery__item\">
                        <ul class=\"ec-borderedList\">
                            {% for orderItem in shipping.productOrderItems %}
                            <li>
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\"><img src=\"{{ asset((orderItem.product is null ? null : orderItem.product.MainListImage)|no_image_product, 'save_image') }}\" alt=\"{{ orderItem.productName }}\"></div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>{{ orderItem.productName }}{% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}</p>
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory1 %}
                                            <p>{{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}</p>
                                        {% endif %}
                                        {% if orderItem.productClass is not null and orderItem.productClass.classCategory2 %}
                                            <p>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}</p>
                                        {% endif %}


                                                 {# 商品素材 #}
                                                {% if orderItem.Product.material is not empty %}
                                                        <p> {{ '商品素材'|trans }}： {{ orderItem.Product.material }}</p>                                                    
                                                {% endif %}
                                                {# 内寸 #}
                                                {% if orderItem.Product.outer_size is not empty %}
                                                    <p> {{ '内寸'|trans }}：{{ orderItem.Product.outer_size|trans }}{{ '(cm)'|trans }}</p>
                                                {% endif %}
                                                {# 外寸 #}
                                                {% if orderItem.Product.inner_size is not empty %}
                                                   <p>{{ '外寸'|trans }}：{{ orderItem.Product.inner_size }}{{ '(cm)'|trans }}</p>
                                                {% endif %}
                                                {# 自重 #}
                                                {% if orderItem.Product.self_weight != 0 %}
                                                   <p>{{ '自重'|trans }}：{{ orderItem.Product.self_weight }}{{ 'Kg'|trans }}</p>
                                                {% endif %}

                                        
                                        <p>{{ orderItem.priceIncTax|price }} × {{ orderItem.quantity|number_format }}<span>{{ '小計：'|trans }}{{ orderItem.totalPrice|price }}</span></p>
                                    </div>
                                </div>
                            </li>
                            {% endfor %}
                        </ul>
                        <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__address\">
                        <p>{{ ''|trans }}{{ shipping.name01 }} {{ shipping.name02 }} ({{ shipping.kana01 }} {{ shipping.kana02 }}){{ ' 様'|trans }}</p>
                        <p>{{ '〒'|trans }}{{ shipping.postal_code }} {{ shipping.pref }}{{ shipping.addr01 }}{{ shipping.addr02 }}</p>
                        <p>{{ shipping.phone_number }}</p>
                    </div>
                    <div class=\"ec-orderDelivery__actions\">
                        <div class=\"ec-selects\">
                            <div class=\"ec-select\">
                                <label>{{ '配送方法'|trans }}</label>
                                {% set delivery_fee = 0 %}
                                {% for item in shipping.order_items if item.isDeliveryFee %}
                                    {% set delivery_fee = item.total_price %}
                                {% endfor %}
                                {{ Order.Shippings[idx].Delivery }}({{ delivery_fee|price }})
                            </div>
                            <div class=\"ec-select ec-select__delivery\">
                                <label>{{ 'お届け日'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_date? Order.Shippings[idx].shipping_delivery_date|date_day_with_weekday : '指定なし'|trans }}
                            </div>
                            <div class=\"ec-select ec-select__time\">
                                <label>{{ 'お届け時間'|trans }}</label>
                                {{ Order.Shippings[idx].shipping_delivery_time?: '指定なし'|trans }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お支払方法'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {% set charge = 0 %}
                    {% for item in Order.order_items if item.isCharge %}
                        {% set charge = item.total_price %}
                    {% endfor %}
                    {{ Order.Payment }}({{ charge|price }})
                </div>
            </div>
            {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
            <div class=\"ec-orderPayment\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ '利用ポイント'|trans }}</h2>
                </div>
                <div class=\"ec-blockRadio\">
                    {{ Order.use_point|number_format }} pt
                </div>
            </div>
            {% endif %}
            <div class=\"ec-orderConfirm\">
                <div class=\"ec-rectHeading\">
                    <h2>{{ 'お問い合わせ'|trans }}</h2>
                </div>
                <div class=\"ec-input\">
                    {{ Order.message|nl2br }}
                </div>
            </div>
        </div>
        <div class=\"ec-orderRole__summary\">
            <div class=\"ec-totalBox\">
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '小計'|trans }}</dt>
                    <dd class=\"ec-totalBox__specTotal\">{{ Order.subtotal|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '手数料'|trans }}</dt>
                    <dd>{{ Order.charge|price }}</dd>
                </dl>
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '送料'|trans }}</dt>
                    <dd>{{ Order.deliveryFeeTotal|price }}</dd>
                </dl>
                {% if Order.taxable_discount < 0 %}
                <dl class=\"ec-totalBox__spec\">
                    <dt>{{ '値引き'|trans }}</dt>
                    <dd>{{ Order.taxable_discount|price }}</dd>
                </dl>
                {% endif %}
                <div class=\"ec-totalBox__total\">{{ '合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% for rate, total in Order.taxable_total_by_tax_rate %}
                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>{{ '税率 %rate% %対象'|trans({ '%rate%': rate }) }}</dt>
                        <dd>{{ total|price }}</dd>
                    </dl>
                {% endfor %}
                {% for item in Order.tax_free_discount_items %}
                    {% if loop.first %}<div class=\"ec-totalBox__total\"></div>{% endif %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ item.product_name }}</dt>
                        <dd>{{ item.total_price|price }}</dd>
                    </dl>
                {% endfor %}
                <div class=\"ec-totalBox__paymentTotal\">{{ 'お支払い合計'|trans }}<span class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                {% if BaseInfo.isOptionPoint and Order.Customer is not null %}
                <div class=\"ec-totalBox__pointBlock\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ 'ご利用ポイント'|trans }}</dt>
                        <dd>{{ Order.UsePoint|number_format }} pt</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt><span class=\"ec-font-bold\">{{ '加算ポイント'|trans }}</span></dt>
                        <dd><span class=\"ec-font-bold\">{{ Order.AddPoint|number_format }} pt</span></dd>
                    </dl>
                </div>
                {% endif %}
                <div class=\"ec-totalBox__btn\">
                    <button type=\"submit\" class=\"ec-blockBtn--action\">{{ '注文する'|trans }}</button>
                    <a href=\"{{ url('shopping') }}\" class=\"ec-blockBtn--cancel\">{{ 'ご注文手続きに戻る'|trans }}</a>
                </div>
            </div>
        </div>
    </div>
</form>
{% endblock %}
", "@user_data/Product/Shopping/customize_confirm.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\user_data\\Product\\Shopping\\customize_confirm.twig");
    }
}
