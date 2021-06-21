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

/* Cart\customize_index.twig */
class __TwigTemplate_579a3efbdcda385973434081ed80608171ea7426e4a27348f82e85b67e136e06 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cart\\customize_index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Cart\\customize_index.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Cart\\customize_index.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ショッピングカート"), "html", null, true);
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
        echo "                <li class=\"ec-progress__item is-complete\">
                    <div class=\"ec-progress__number\">";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 28, $this->source); })()) + 1);
        // line 29
        echo "                    </div>
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
            echo "                    <li class=\"ec-progress__item\">
                        <div class=\"ec-progress__number\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()), "html", null, true);
            $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "                        </div>
                        <div class=\"ec-progress__label\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お客様情報"), "html", null, true);
            echo "
                        </div>
                    </li>
                ";
        }
        // line 41
        echo "                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 42, $this->source); })()) + 1);
        // line 43
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご注文手続き"), "html", null, true);
        echo "
                    </div>
                </li>
                <li class=\"ec-progress__item\">
                    <div class=\"ec-progress__number\">";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()), "html", null, true);
        $context["step"] = ((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 48, $this->source); })()) + 1);
        // line 49
        echo "                    </div>
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
        echo "                    </div>
                    <div class=\"ec-progress__label\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("完了"), "html", null, true);
        echo "
                    </div>
                </li>
            </ul>
        </div>
        ";
        // line 61
        $context["productStr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "flashbag", [], "any", false, false, false, 61), "get", [0 => "eccube.front.request.product"], "method", false, false, false, 61);
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", [0 => "eccube.front.request.error"], "method", false, false, false, 62));
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
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 63
            echo "            ";
            $context["idx"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63);
            // line 64
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                    <div class=\"ec-alert-warning__text\">
                        ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["productStr"] ?? null), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 68, $this->source); })()), [], "array", true, true, false, 68)) {
                // line 69
                echo "                            ";
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"], ["%product%" => twig_get_attribute($this->env, $this->source, (isset($context["productStr"]) || array_key_exists("productStr", $context) ? $context["productStr"] : (function () { throw new RuntimeError('Variable "productStr" does not exist.', 69, $this->source); })()), (isset($context["idx"]) || array_key_exists("idx", $context) ? $context["idx"] : (function () { throw new RuntimeError('Variable "idx" does not exist.', 69, $this->source); })()), [], "array", false, false, false, 69)]), "html", null, true));
                echo "
                        ";
            } else {
                // line 71
                echo "                            ";
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                echo "
                        ";
            }
            // line 73
            echo "                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "session", [], "any", false, false, false, 77), "flashbag", [], "any", false, false, false, 77), "get", [0 => "eccube.front.cart.error"], "method", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 78
            echo "            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                    <div class=\"ec-alert-warning__text\">
                        ";
            // line 82
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        ";
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 87, $this->source); })()) > 0)) {
            // line 88
            echo "            <div class=\"ec-cartRole__totalText\">
                <p>
                    ";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品の合計金額は「<strong>%price%</strong>」です。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 90, $this->source); })()))]);
            echo "
                </p>
            </div>
            ";
            // line 93
            if ((twig_length_filter($this->env, (isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 93, $this->source); })())) > 1)) {
                // line 94
                echo "                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__text\">
                            ";
                // line 97
                echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("同時購入できない商品がカートに含まれています。"), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 102
            echo "
            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
            echo "\">

                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 105, $this->source); })()));
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
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 106
                echo "                    ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, false, 106);
                // line 107
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "session", [], "any", false, false, false, 107), "flashbag", [], "any", false, false, false, 107), "get", [0 => (("eccube.front.cart." . (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 107, $this->source); })())) . ".request.error")], "method", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 108
                    echo "                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                                <div class=\"ec-alert-warning__text\">
                                    ";
                    // line 112
                    echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                    echo "
                                </div>
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "
                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品内容"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
                echo "</li>
                            </ol>
                            ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 127
                    echo "                                ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, false, 127);
                    // line 128
                    echo "                                ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 128, $this->source); })()), "Product", [], "any", false, false, false, 128);
                    // line 129
                    echo "                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "remove", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"";
                    // line 132
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 138, $this->source); })()), "MainListImage", [], "any", false, false, false, 138)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 138, $this->source); })()), "name", [], "any", false, false, false, 138), "html", null, true);
                    echo "\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 143, $this->source); })()), "id", [], "any", false, false, false, 143)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 143, $this->source); })()), "name", [], "any", false, false, false, 143), "html", null, true);
                    echo "</a>
                                                ";
                    // line 144
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 144, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 144) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 144, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 144), "id", [], "any", false, false, false, 144))) {
                        // line 145
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 145, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 145), "ClassName", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 145, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 145), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 147
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 147, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 147) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 147, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147))) {
                        // line 148
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 148, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 148), "ClassName", [], "any", false, false, false, 148), "name", [], "any", false, false, false, 148), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 148, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 148), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 150
                    echo "                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">";
                    // line 151
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, false, 151)), "html", null, true);
                    echo "</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">";
                    // line 152
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 152)), "html", null, true);
                    echo "</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">";
                    // line 156
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 156)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountSP\">";
                    // line 157
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 157)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            ";
                    // line 159
                    if ((twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 159) > 1)) {
                        // line 160
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "down", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo " class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 161
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </a>
                                            ";
                    } else {
                        // line 164
                        echo "                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </div>
                                            ";
                    }
                    // line 168
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "up", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"";
                    // line 169
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
                    echo "\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 174)), "html", null, true);
                    echo "</div>
                                    </li>
                                </ul>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        ";
                // line 181
                if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 181, $this->source); })()), "delivery_free_amount", [], "any", false, false, false, 181) && twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 181, $this->source); })()), "delivery_free_quantity", [], "any", false, false, false, 181))) {
                    // line 182
                    echo "                            <br/>
                            ";
                    // line 183
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 183, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 183, $this->source); })()), [], "array", false, false, false, 183)) {
                        // line 184
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 186
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 186, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 186, $this->source); })()), [], "array", false, false, false, 186)), "%quantity%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 186, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 186, $this->source); })()), [], "array", false, false, false, 186))]);
                        echo "
                            ";
                    }
                    // line 188
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 188, $this->source); })()), "delivery_free_amount", [], "any", false, false, false, 188)) {
                    // line 189
                    echo "                            <br/>
                            ";
                    // line 190
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 190, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 190, $this->source); })()), [], "array", false, false, false, 190)) {
                        // line 191
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 193
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 193, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 193, $this->source); })()), [], "array", false, false, false, 193))]);
                        echo "
                            ";
                    }
                    // line 195
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 195, $this->source); })()), "delivery_free_quantity", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "                            <br/>
                            ";
                    // line 197
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 197, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 197, $this->source); })()), [], "array", false, false, false, 197)) {
                        // line 198
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 200
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%quantity%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 200, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 200, $this->source); })()), [], "array", false, false, false, 200))]);
                        echo "
                            ";
                    }
                    // line 202
                    echo "                        ";
                }
                // line 203
                echo "                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">";
                // line 205
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計："), "html", null, true);
                echo "<span class=\"ec-cartRole__totalAmount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Cart"], "totalPrice", [], "any", false, false, false, 205)), "html", null, true);
                echo "</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"";
                // line 207
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_buystep", ["cart_key" => (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 207, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("レジに進む"), "html", null, true);
                echo "</a>
                        ";
                // line 208
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 208)) {
                    // line 209
                    echo "                            <a class=\"ec-blockBtn--cancel\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 211
                echo "                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "            </form>
        ";
        } else {
            // line 215
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 216
                echo "                ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, false, 216);
                // line 217
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "session", [], "any", false, false, false, 217), "flashbag", [], "any", false, false, false, 217), "get", [0 => (("eccube.front.cart." . (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 217, $this->source); })())) . ".request.error")], "method", false, false, false, 217));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 218
                    echo "                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 220
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
                    // line 222
                    echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["error"]), "html", null, true));
                    echo "
                            </div>
                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">";
            // line 233
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 239
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Cart\\customize_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  670 => 239,  661 => 233,  657 => 232,  651 => 228,  645 => 227,  634 => 222,  629 => 220,  625 => 218,  620 => 217,  617 => 216,  612 => 215,  608 => 213,  593 => 211,  585 => 209,  583 => 208,  577 => 207,  570 => 205,  566 => 203,  563 => 202,  557 => 200,  551 => 198,  549 => 197,  546 => 196,  543 => 195,  537 => 193,  531 => 191,  529 => 190,  526 => 189,  523 => 188,  517 => 186,  511 => 184,  509 => 183,  506 => 182,  504 => 181,  499 => 178,  489 => 174,  481 => 169,  474 => 168,  468 => 165,  465 => 164,  459 => 161,  452 => 160,  450 => 159,  444 => 157,  440 => 156,  432 => 152,  428 => 151,  425 => 150,  417 => 148,  414 => 147,  406 => 145,  404 => 144,  398 => 143,  388 => 138,  384 => 137,  376 => 132,  370 => 131,  366 => 129,  363 => 128,  360 => 127,  356 => 126,  351 => 124,  347 => 123,  343 => 122,  339 => 121,  333 => 117,  322 => 112,  317 => 110,  313 => 108,  308 => 107,  305 => 106,  288 => 105,  283 => 103,  280 => 102,  272 => 97,  267 => 94,  265 => 93,  259 => 90,  255 => 88,  252 => 87,  241 => 82,  236 => 80,  232 => 78,  227 => 77,  210 => 73,  204 => 71,  198 => 69,  196 => 68,  191 => 66,  187 => 64,  184 => 63,  166 => 62,  164 => 61,  156 => 56,  153 => 55,  150 => 54,  143 => 50,  140 => 49,  137 => 48,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  103 => 33,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  76 => 19,  71 => 16,  61 => 15,  50 => 11,  48 => 13,  35 => 11,);
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

{% set body_class = 'cart_page' %}

{% block main %}

    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>{{ 'ショッピングカート'|trans }}</h1>
        </div>
    </div>

    <div class=\"ec-cartRole\">
        <div class=\"ec-cartRole__progress\">
            <ul class=\"ec-progress\">
                {% set step = 1 %}
                <li class=\"ec-progress__item is-complete\">
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
                <li class=\"ec-progress__item\">
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
        {% set productStr = app.session.flashbag.get('eccube.front.request.product') %}
        {% for error in app.session.flashbag.get('eccube.front.request.error') %}
            {% set idx = loop.index0 %}
            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                    <div class=\"ec-alert-warning__text\">
                        {% if productStr[idx] is defined %}
                            {{ error|trans({'%product%':productStr[idx]})|nl2br }}
                        {% else %}
                            {{ error|trans|nl2br }}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
        {% for error in app.session.flashbag.get('eccube.front.cart.error') %}
            <div class=\"ec-cartRole__error\">
                <div class=\"ec-alert-warning\">
                    <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                    <div class=\"ec-alert-warning__text\">
                        {{ error|trans|nl2br }}
                    </div>
                </div>
            </div>
        {% endfor %}
        {% if totalQuantity > 0 %}
            <div class=\"ec-cartRole__totalText\">
                <p>
                    {{ '商品の合計金額は「<strong>%price%</strong>」です。'|trans({ '%price%': totalPrice|price })|raw }}
                </p>
            </div>
            {% if Carts|length > 1 %}
                <div class=\"ec-cartRole__error\">
                    <div class=\"ec-alert-warning\">
                        <div class=\"ec-alert-warning__text\">
                            {{ '同時購入できない商品がカートに含まれています。'|trans|nl2br }}
                        </div>
                    </div>
                </div>
            {% endif %}

            <form name=\"form\" id=\"form_cart\" class=\"ec-cartRole\" method=\"post\" action=\"{{ url('cart') }}\">

                {% for CartIndex,Cart in Carts %}
                    {% set cartKey = Cart.cart_key %}
                    {% for error in app.session.flashbag.get('eccube.front.cart.' ~ cartKey ~ '.request.error') %}
                        <div class=\"ec-cartRole__error\">
                            <div class=\"ec-alert-warning\">
                                <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                                <div class=\"ec-alert-warning__text\">
                                    {{ error|trans|nl2br }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">{{ '削除'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '商品内容'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '数量'|trans }}</li>
                                <li class=\"ec-cartHeader__label\">{{ '小計'|trans }}</li>
                            </ol>
                            {% for CartItem in Cart.CartItems %}
                                {% set ProductClass = CartItem.ProductClass %}
                                {% set Product = ProductClass.Product %}
                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"{{ url('cart_handle_item', {'operation': 'remove', 'productClassId': ProductClass.id }) }}\" {{ csrf_token_for_anchor() }} class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"{{ asset('assets/icon/cross.svg') }}\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"{{ url('product_detail', {id : Product.id} ) }}\">
                                                <img src=\"{{ asset(Product.MainListImage|no_image_product, 'save_image') }}\" alt=\"{{ Product.name }}\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"{{ url('product_detail', {id : Product.id} ) }}\">{{ Product.name }}</a>
                                                {% if ProductClass.ClassCategory1 and ProductClass.ClassCategory1.id %}
                                                    <br>{{ ProductClass.ClassCategory1.ClassName.name }}：{{ ProductClass.ClassCategory1 }}
                                                {% endif %}
                                                {% if ProductClass.ClassCategory2 and ProductClass.ClassCategory2.id %}
                                                    <br>{{ ProductClass.ClassCategory2.ClassName.name }}：{{ ProductClass.ClassCategory2 }}
                                                {% endif %}
                                            </div>
                                            <div class=\"ec-cartRow__unitPrice\">{{ CartItem.price|price }}</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">{{ '小計：'|trans }}{{ CartItem.total_price|price }}</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">{{ CartItem.quantity|number_format }}</div>
                                        <div class=\"ec-cartRow__amountSP\">{{ '数量：'|trans }}{{ CartItem.quantity|number_format }}</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            {% if CartItem.quantity > 1 %}
                                                <a href=\"{{ url('cart_handle_item', {'operation': 'down', 'productClassId': ProductClass.id}) }}\" {{ csrf_token_for_anchor() }} class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"{{ asset('assets/icon/minus-dark.svg') }}\" alt=\"reduce\"></span>
                                                </a>
                                            {% else %}
                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"{{ asset('assets/icon/minus.svg') }}\" alt=\"reduce\"></span>
                                                </div>
                                            {% endif %}
                                            <a href=\"{{ url('cart_handle_item', {'operation': 'up', 'productClassId': ProductClass.id}) }}\" {{ csrf_token_for_anchor() }} class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"{{ asset('assets/icon/plus-dark.svg') }}\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">{{ CartItem.total_price|price }}</div>
                                    </li>
                                </ul>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        {% if BaseInfo.delivery_free_amount and BaseInfo.delivery_free_quantity %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%price%': least[cartKey]|price, '%quantity%': quantity[cartKey]|number_format })|raw }}
                            {% endif %}
                        {% elseif BaseInfo.delivery_free_amount %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%price%': least[cartKey]|price })|raw }}
                            {% endif %}
                        {% elseif BaseInfo.delivery_free_quantity %}
                            <br/>
                            {% if is_delivery_free[cartKey] %}
                                {{ '現在送料無料です。'|trans }}
                            {% else %}
                                {{ 'あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。'|trans({ '%quantity%': quantity[cartKey]|number_format })|raw }}
                            {% endif %}
                        {% endif %}
                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">{{ '合計：'|trans }}<span class=\"ec-cartRole__totalAmount\">{{ Cart.totalPrice|price }}</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"{{ path('cart_buystep', {'cart_key':cartKey}) }}\">{{ 'レジに進む'|trans }}</a>
                        {% if loop.last %}
                            <a class=\"ec-blockBtn--cancel\" href=\"{{ path('homepage') }}\">{{ 'お買い物を続ける'|trans }}</a>
                        {% endif %}
                    </div>
                {% endfor %}
            </form>
        {% else %}
            {% for CartIndex,Cart in Carts %}
                {% set cartKey = Cart.cart_key %}
                {% for error in app.session.flashbag.get('eccube.front.cart.' ~ cartKey ~ '.request.error') %}
                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                            <div class=\"ec-alert-warning__text\">
                                {{ error|trans|nl2br }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"{{ asset('assets/icon/exclamation-white.svg') }}\"></div>
                            <div class=\"ec-alert-warning__text\">{{ '現在カート内に商品はございません。'|trans }}</div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

{% endblock %}
", "Cart\\customize_index.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\default\\Cart\\customize_index.twig");
    }
}
