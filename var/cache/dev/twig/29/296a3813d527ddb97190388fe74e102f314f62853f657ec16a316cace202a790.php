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

/* @user_data/Mypage/customize_history.twig */
class __TwigTemplate_bfba7eac1d3922823e86046bbd3c63a0a70ba74ed4b13c95cef0a3c0d8293f2f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Mypage/customize_history.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Mypage/customize_history.twig"));

        // line 13
        $context["mypageno"] = "index";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/Mypage/customize_history.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文履歴詳細"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "@user_data/Mypage/customize_history.twig", 23)->display($context);
        // line 24
        echo "        </div>

        ";
        // line 26
        $context["remessage"] = false;
        // line 27
        echo "
        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文日時"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 33, $this->source); })()), "create_date", [], "any", false, false, false, 33)), "html", null, true);
        echo "</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文番号"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 37, $this->source); })()), "order_no", [], "any", false, false, false, 37), "html", null, true);
        echo "</dd>
                    </div>
                    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 39, $this->source); })()), "option_mypage_order_status_display", [], "any", false, false, false, 39)) {
            // line 40
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文状況"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 42, $this->source); })()), "CustomerOrderStatus", [], "any", false, false, false, 42), "html", null, true);
            echo "</dd>
                        </div>
                    ";
        }
        // line 45
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 45, $this->source); })()), "isOptionPoint", [], "any", false, false, false, 45)) {
            // line 46
            echo "                        <div class=\"ec-definitions\">
                            <dt>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご利用ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 48
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 48, $this->source); })()), "usePoint", [], "any", false, false, false, 48)), "html", null, true);
            echo " pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("加算ポイント"), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 52, $this->source); })()), "addPoint", [], "any", false, false, false, 52)), "html", null, true);
            echo " pt</dd>
                        </div>
                    ";
        }
        // line 55
        echo "
                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送情報"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 61, $this->source); })()), "Shippings", [], "any", false, false, false, 61));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 62
            echo "                        ";
            $context["isShowReducedTaxMess"] = false;
            // line 63
            echo "                        <div class=\"ec-orderDelivery__title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 63, $this->source); })()), "multiple", [], "any", false, false, false, 63)) {
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
                echo ")";
            }
            echo "</div>
                        ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["orderItem"]) {
                // line 65
                echo "                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        ";
                // line 68
                if ((null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
                    echo "\"/>
                                        ";
                } else {
                    // line 71
                    echo "                                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 71), "MainListImage", [], "any", false, false, false, 71)), "save_image"), "html", null, true);
                    echo "\"
                                                 alt=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 72), "html", null, true);
                    echo "\"/>
                                        ";
                }
                // line 74
                echo "                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            ";
                // line 77
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 77)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 77), "Status", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77) == twig_constant("Eccube\\Entity\\Master\\ProductStatus::DISPLAY_SHOW")))) {
                    // line 78
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 78), "html", null, true);
                    echo "</a>
                                            ";
                } else {
                    // line 80
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productName", [], "any", false, false, false, 80), "html", null, true);
                    echo "
                                            ";
                }
                // line 81
                echo " ×";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 81), "html", null, true);
                echo " ";
                if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["orderItem"])) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※"), "html", null, true);
                    $context["isShowReducedTaxMess"] = true;
                }
                // line 82
                echo "                                        </p>
                                        ";
                // line 83
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 83))) {
                    // line 84
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 84), "ClassCategory1", [], "any", false, false, false, 84))) {
                        // line 85
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 85), "classCategory1", [], "any", false, false, false, 85), "className", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 85), "classCategory1", [], "any", false, false, false, 85), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 87
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "ProductClass", [], "any", false, false, false, 87), "ClassCategory2", [], "any", false, false, false, 87)) {
                        // line 88
                        echo "                                                <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 88), "classCategory2", [], "any", false, false, false, 88), "className", [], "any", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 88), "classCategory2", [], "any", false, false, false, 88), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 90
                    echo "                                        ";
                }
                // line 91
                echo "                                        
                                         ";
                // line 93
                echo "                                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 93), "material", [], "any", false, false, false, 93))) {
                    // line 94
                    echo "                                            <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品素材"), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 94), "material", [], "any", false, false, false, 94), "html", null, true);
                    echo "</p>                                                    
                                        ";
                }
                // line 96
                echo "                                        ";
                // line 97
                echo "                                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 97), "outer_size", [], "any", false, false, false, 97))) {
                    // line 98
                    echo "                                            <p> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 98), "outer_size", [], "any", false, false, false, 98)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 100
                echo "                                        ";
                // line 101
                echo "                                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 101), "inner_size", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("外寸"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 102), "inner_size", [], "any", false, false, false, 102), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 104
                echo "                                        ";
                // line 105
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 105), "self_weight", [], "any", false, false, false, 105) != 0)) {
                    // line 106
                    echo "                                            <p>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("自重"), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "Product", [], "any", false, false, false, 106), "self_weight", [], "any", false, false, false, 106), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kg"), "html", null, true);
                    echo "</p>
                                        ";
                }
                // line 107
                echo " 


                                        <p>";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, false, 110)), "html", null, true);
                echo "
                                            × ";
                // line 111
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderItem"], "quantity", [], "any", false, false, false, 111)), "html", null, true);
                echo "</p>
                                        ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["orderItem"], "product", [], "any", false, false, false, 112) && (twig_get_attribute($this->env, $this->source, $context["orderItem"], "price_inc_tax", [], "any", false, false, false, 112) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 112), "price02IncTax", [], "any", false, false, false, 112)))) {
                    // line 113
                    echo "                                            <p class=\"ec-color-accent\">
                                                ";
                    // line 114
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("【現在価格】"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItem"], "productClass", [], "any", false, false, false, 114), "price02IncTax", [], "any", false, false, false, 114)), "html", null, true);
                    echo "</p>
                                            ";
                    // line 115
                    $context["remessage"] = true;
                    // line 116
                    echo "                                        ";
                }
                // line 117
                echo "
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "                        <p>";
            (((isset($context["isShowReducedTaxMess"]) || array_key_exists("isShowReducedTaxMess", $context) ? $context["isShowReducedTaxMess"] : (function () { throw new RuntimeError('Variable "isShowReducedTaxMess" does not exist.', 122, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※ は軽減税率対象商品です。"), "html", null, true))) : (print ("")));
            echo "</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 124), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 124), "html", null, true);
            echo "&nbsp;
                                (";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 125), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 125), "html", null, true);
            echo ")</p>
                            <p>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 126), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, false, 126), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, false, 126), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, false, 126), "html", null, true);
            echo "</p>
                            <p>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 127), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("配送方法"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 131), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け日"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 135
            echo twig_escape_filter($this->env, _twig_default_filter($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day_with_weekday($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 135)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし")), "html", null, true);
            echo "</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け時間"), "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 139
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 139), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("指定なし"))), "html", null, true);
            echo "</dd>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い情報"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お支払い方法"), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 147, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 147), "html", null, true);
        echo "</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</h2>
                    </div>
                    <p>";
        // line 153
        echo nl2br(twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", true, true, false, 153)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 153), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("記載なし"))), "html", null, true));
        echo "</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール配信履歴一覧"), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 159, $this->source); })()), "MailHistories", [], "any", false, false, false, 159));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
            // line 160
            echo "                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 161)), "html", null, true);
            echo "</div>
                            <div class=\"ec-orderMail__link\"><a>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 162), "html", null, true);
            echo "</a></div>
                            <div class=\"ec-orderMail__body\">";
            // line 163
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 163), "html", null, true));
            echo "<p class=\"ec-orderMail__close\"><a>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("閉じる"), "html", null, true);
            echo "</a></p></div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 166
            echo "                        <p class=\"ec-reportDescription\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メール履歴はありません。"), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 174, $this->source); })()), "subtotal", [], "any", false, false, false, 174)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("手数料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 178, $this->source); })()), "charge", [], "any", false, false, false, 178)), "html", null, true);
        echo "</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("送料"), "html", null, true);
        echo "</dt>
                        <dd>";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 182, $this->source); })()), "delivery_fee_total", [], "any", false, false, false, 182)), "html", null, true);
        echo "</dd>
                    </dl>
                    ";
        // line 184
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 184, $this->source); })()), "taxable_discount", [], "any", false, false, false, 184) < 0)) {
            // line 185
            echo "                    <dl class=\"ec-totalBox__spec\">
                        <dt>";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("値引き"), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 187, $this->source); })()), "taxable_discount", [], "any", false, false, false, 187)), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        // line 190
        echo "                    <div class=\"ec-totalBox__total\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 191, $this->source); })()), "taxable_total", [], "any", false, false, false, 191)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 193, $this->source); })()), "taxable_total_by_tax_rate", [], "any", false, false, false, 193));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 194
            echo "                    <dl class=\"ec-totalBox__taxRate\">
                        <dt>";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税率 %rate% %対象", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</dt>
                        <dd>";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</dd>
                    </dl>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 199, $this->source); })()), "tax_free_discount_items", [], "any", false, false, false, 199));
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
            // line 200
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 200)) {
                echo "<div class=\"ec-totalBox__total\"></div>";
            }
            // line 201
            echo "                        <dl class=\"ec-totalBox__spec\">
                            <dt>";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 202), "html", null, true);
            echo "</dt>
                            <dd>";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 203)), "html", null, true);
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
        // line 206
        echo "                    <div class=\"ec-totalBox__paymentTotal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計"), "html", null, true);
        echo "<span
                                class=\"ec-totalBox__price\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 207, $this->source); })()), "payment_total", [], "any", false, false, false, 207)), "html", null, true);
        echo "</span><span
                                class=\"ec-totalBox__taxLabel\">";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
        echo "</span></div>
                    ";
        // line 209
        if ((isset($context["stockOrder"]) || array_key_exists("stockOrder", $context) ? $context["stockOrder"] : (function () { throw new RuntimeError('Variable "stockOrder" does not exist.', 209, $this->source); })())) {
            // line 210
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage_order", ["order_no" => twig_get_attribute($this->env, $this->source, (isset($context["Order"]) || array_key_exists("Order", $context) ? $context["Order"] : (function () { throw new RuntimeError('Variable "Order" does not exist.', 210, $this->source); })()), "order_no", [], "any", false, false, false, 210)]), "html", null, true);
            echo "\"
                       class=\"ec-blockBtn--action load-overlay\" ";
            // line 211
            echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
            echo " data-method=\"put\"
                       data-confirm=\"false\">";
            // line 212
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("再注文する"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 214
        echo "                </div>
                ";
        // line 215
        if ((isset($context["remessage"]) || array_key_exists("remessage", $context) ? $context["remessage"] : (function () { throw new RuntimeError('Variable "remessage" does not exist.', 215, $this->source); })())) {
            // line 216
            echo "                    <p class=\"ec-color-accent\">
                        <strong>";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("※金額が変更されている商品があるため、再注文時はご注意ください。"), "html", null, true);
            echo "</strong>
                    </p>
                ";
        }
        // line 220
        echo "            </div>
        </div>
        <div class=\"ec-role\">
            <a href=\"";
        // line 223
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mypage");
        echo "\" class=\"ec-inlineBtn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
        echo "</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@user_data/Mypage/customize_history.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 223,  700 => 220,  694 => 217,  691 => 216,  689 => 215,  686 => 214,  681 => 212,  677 => 211,  672 => 210,  670 => 209,  666 => 208,  662 => 207,  657 => 206,  640 => 203,  636 => 202,  633 => 201,  628 => 200,  610 => 199,  601 => 196,  597 => 195,  594 => 194,  590 => 193,  586 => 192,  582 => 191,  577 => 190,  571 => 187,  567 => 186,  564 => 185,  562 => 184,  557 => 182,  553 => 181,  547 => 178,  543 => 177,  537 => 174,  533 => 173,  526 => 168,  517 => 166,  507 => 163,  503 => 162,  499 => 161,  496 => 160,  491 => 159,  486 => 157,  479 => 153,  474 => 151,  465 => 147,  460 => 145,  455 => 142,  438 => 139,  434 => 138,  428 => 135,  424 => 134,  418 => 131,  414 => 130,  408 => 127,  399 => 126,  393 => 125,  387 => 124,  381 => 122,  371 => 117,  368 => 116,  366 => 115,  361 => 114,  358 => 113,  356 => 112,  352 => 111,  348 => 110,  343 => 107,  334 => 106,  331 => 105,  329 => 104,  320 => 102,  317 => 101,  315 => 100,  306 => 98,  303 => 97,  301 => 96,  293 => 94,  290 => 93,  287 => 91,  284 => 90,  276 => 88,  273 => 87,  265 => 85,  262 => 84,  260 => 83,  257 => 82,  249 => 81,  243 => 80,  235 => 78,  233 => 77,  228 => 74,  223 => 72,  218 => 71,  212 => 69,  210 => 68,  205 => 65,  201 => 64,  191 => 63,  188 => 62,  171 => 61,  166 => 59,  160 => 55,  154 => 52,  150 => 51,  144 => 48,  140 => 47,  137 => 46,  134 => 45,  128 => 42,  124 => 41,  121 => 40,  119 => 39,  114 => 37,  110 => 36,  104 => 33,  100 => 32,  93 => 27,  91 => 26,  87 => 24,  85 => 23,  78 => 21,  73 => 18,  63 => 17,  52 => 11,  50 => 15,  48 => 13,  35 => 11,);
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

{% set mypageno = 'index' %}

{% set body_class = 'mypage' %}

{% block main %}
    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>{{ 'マイページ'|trans }}/{{ 'ご注文履歴詳細'|trans }}</h1>
            </div>
            {% include 'Mypage/navi.twig' %}
        </div>

        {% set remessage = false %}

        <div class=\"ec-orderRole\">
            <div class=\"ec-orderRole__detail\">
                <div class=\"ec-orderOrder\">
                    <div class=\"ec-definitions\">
                        <dt>{{ 'ご注文日時'|trans }}</dt>
                        <dd>{{ Order.create_date|date_sec }}</dd>
                    </div>
                    <div class=\"ec-definitions\">
                        <dt>{{ 'ご注文番号'|trans }}</dt>
                        <dd>{{ Order.order_no }}</dd>
                    </div>
                    {% if BaseInfo.option_mypage_order_status_display %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'ご注文状況'|trans }}</dt>
                            <dd>{{ Order.CustomerOrderStatus }}</dd>
                        </div>
                    {% endif %}
                    {% if BaseInfo.isOptionPoint %}
                        <div class=\"ec-definitions\">
                            <dt>{{ 'ご利用ポイント'|trans }}</dt>
                            <dd>{{ Order.usePoint|number_format }} pt</dd>
                        </div>
                        <div class=\"ec-definitions\">
                            <dt>{{ '加算ポイント'|trans }}</dt>
                            <dd>{{ Order.addPoint|number_format }} pt</dd>
                        </div>
                    {% endif %}

                </div>
                <div class=\"ec-orderDelivery\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ '配送情報'|trans }}</h2>
                    </div>
                    {% for Shipping in Order.Shippings %}
                        {% set isShowReducedTaxMess = false %}
                        <div class=\"ec-orderDelivery__title\">{{ 'お届け先'|trans }}{% if Order.multiple %}({{ loop.index }}){% endif %}</div>
                        {% for orderItem in Shipping.productOrderItems %}
                            <div class=\"ec-orderDelivery__item\">
                                <div class=\"ec-imageGrid\">
                                    <div class=\"ec-imageGrid__img\">
                                        {% if orderItem.product is null %}
                                            <img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/>
                                        {% else %}
                                            <img src=\"{{ asset(orderItem.Product.MainListImage|no_image_product, 'save_image') }}\"
                                                 alt=\"{{ orderItem.productName }}\"/>
                                        {% endif %}
                                    </div>
                                    <div class=\"ec-imageGrid__content\">
                                        <p>
                                            {% if orderItem.Product is not null and orderItem.Product.Status.id == constant('Eccube\\\\Entity\\\\Master\\\\ProductStatus::DISPLAY_SHOW') %}
                                                <a href=\"{{ url('product_detail', {'id': orderItem.Product.id}) }}\">{{ orderItem.productName }}</a>
                                            {% else %}
                                                {{ orderItem.productName }}
                                            {% endif %} ×{{ orderItem.quantity }} {% if is_reduced_tax_rate(orderItem) %}{{ '※'|trans }}{% set isShowReducedTaxMess = true %}{% endif %}
                                        </p>
                                        {% if orderItem.ProductClass is not null %}
                                            {% if orderItem.ProductClass.ClassCategory1 is not null %}
                                                {{ orderItem.productClass.classCategory1.className.name }}：{{ orderItem.productClass.classCategory1 }}
                                            {% endif %}
                                            {% if orderItem.ProductClass.ClassCategory2 %}
                                                <br>{{ orderItem.productClass.classCategory2.className.name }}：{{ orderItem.productClass.classCategory2 }}
                                            {% endif %}
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


                                        <p>{{ orderItem.price_inc_tax|price }}
                                            × {{ orderItem.quantity|number_format }}</p>
                                        {% if orderItem.product and orderItem.price_inc_tax != orderItem.productClass.price02IncTax %}
                                            <p class=\"ec-color-accent\">
                                                {{ '【現在価格】'|trans }}{{ orderItem.productClass.price02IncTax|price }}</p>
                                            {% set remessage = true %}
                                        {% endif %}

                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        <p>{{ isShowReducedTaxMess ? '※ は軽減税率対象商品です。'|trans }}</p>
                        <div class=\"ec-orderDelivery__address\">
                            <p>{{ Shipping.name01 }}&nbsp;{{ Shipping.name02 }}&nbsp;
                                ({{ Shipping.kana01 }}&nbsp;{{ Shipping.kana02 }})</p>
                            <p>{{ '〒'|trans }}{{ Shipping.postal_code }} {{ Shipping.Pref }}{{ Shipping.addr01 }}{{ Shipping.addr02 }}</p>
                            <p>{{ Shipping.phone_number }}</p>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ '配送方法'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_name }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'お届け日'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_date|date_day_with_weekday|default('指定なし'|trans) }}</dd>
                        </div>
                        <div class=\"ec-definitions--soft\">
                            <dt>{{ 'お届け時間'|trans }} :</dt>
                            <dd>{{ Shipping.shipping_delivery_time|default('指定なし'|trans) }}</dd>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"ec-orderPayment\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お支払い情報'|trans }}</h2>
                    </div>
                    <p>{{ 'お支払い方法'|trans }} : {{ Order.PaymentMethod }}</p>
                </div>
                <div class=\"ec-orderConfirm\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'お問い合わせ'|trans }}</h2>
                    </div>
                    <p>{{ Order.message|default('記載なし'|trans)|nl2br }}</p>
                </div>
                <div class=\"ec-orderMails\">
                    <div class=\"ec-rectHeading\">
                        <h2>{{ 'メール配信履歴一覧'|trans }}</h2>
                    </div>
                    {% for MailHistory in Order.MailHistories %}
                        <div class=\"ec-orderMail\">
                            <div class=\"ec-orderMail__time\">{{ MailHistory.send_date|date_sec }}</div>
                            <div class=\"ec-orderMail__link\"><a>{{ MailHistory.mail_subject }}</a></div>
                            <div class=\"ec-orderMail__body\">{{ MailHistory.mail_body|nl2br }}<p class=\"ec-orderMail__close\"><a>{{ '閉じる'|trans }}</a></p></div>
                        </div>
                    {% else %}
                        <p class=\"ec-reportDescription\">{{ 'メール履歴はありません。'|trans }}</p>
                    {% endfor %}
                </div>
            </div>
            <div class=\"ec-orderRole__summary\">
                <div class=\"ec-totalBox\">
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '小計'|trans }}</dt>
                        <dd>{{ Order.subtotal|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '手数料'|trans }}</dt>
                        <dd>{{ Order.charge|price }}</dd>
                    </dl>
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '送料'|trans }}</dt>
                        <dd>{{ Order.delivery_fee_total|price }}</dd>
                    </dl>
                    {% if Order.taxable_discount < 0 %}
                    <dl class=\"ec-totalBox__spec\">
                        <dt>{{ '値引き'|trans }}</dt>
                        <dd>{{ Order.taxable_discount|price }}</dd>
                    </dl>
                    {% endif %}
                    <div class=\"ec-totalBox__total\">{{ '合計'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.taxable_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
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
                    <div class=\"ec-totalBox__paymentTotal\">{{ '合計'|trans }}<span
                                class=\"ec-totalBox__price\">{{ Order.payment_total|price }}</span><span
                                class=\"ec-totalBox__taxLabel\">{{ '税込'|trans }}</span></div>
                    {% if stockOrder %}
                        <a href=\"{{ url('mypage_order', {'order_no': Order.order_no }) }}\"
                       class=\"ec-blockBtn--action load-overlay\" {{ csrf_token_for_anchor() }} data-method=\"put\"
                       data-confirm=\"false\">{{ '再注文する'|trans }}</a>
                    {% endif %}
                </div>
                {% if remessage %}
                    <p class=\"ec-color-accent\">
                        <strong>{{ '※金額が変更されている商品があるため、再注文時はご注意ください。'|trans }}</strong>
                    </p>
                {% endif %}
            </div>
        </div>
        <div class=\"ec-role\">
            <a href=\"{{ url('mypage') }}\" class=\"ec-inlineBtn\">{{ '戻る'|trans }}</a>
        </div>
    </div>
{% endblock %}
", "@user_data/Mypage/customize_history.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\user_data\\Mypage\\Customize_history.twig");
    }
}
