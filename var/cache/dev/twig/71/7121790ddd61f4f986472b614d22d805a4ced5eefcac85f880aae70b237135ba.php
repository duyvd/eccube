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

/* @user_data/Product/Shopping/customize_index.twig */
class __TwigTemplate_f94b2c663f7e939aa694191d2329ff510a9a738d4f5355b70c3aaa31527ededb extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize_index.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@user_data/Product/Shopping/customize_index.twig"));

        // line 13
        $context["body_class"] = "cart_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/Product/Shopping/customize_index.twig", 11);
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
                echo "                    <div class=\"ec-cartRole__cart\">
                        <div class=\"ec-cartTable\">
                            <ol class=\"ec-cartHeader\">
                                <li class=\"ec-cartHeader__label\">";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("削除"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品内容"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                echo "</li>
                                <li class=\"ec-cartHeader__label\">";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計"), "html", null, true);
                echo "</li>
                            </ol>
                            ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Cart"], "CartItems", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["_key"] => $context["CartItem"]) {
                    // line 126
                    echo "                                ";
                    $context["ProductClass"] = twig_get_attribute($this->env, $this->source, $context["CartItem"], "ProductClass", [], "any", false, false, false, 126);
                    // line 127
                    echo "                                ";
                    $context["Product"] = twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 127, $this->source); })()), "Product", [], "any", false, false, false, 127);
                    // line 128
                    echo "                                <ul class=\"ec-cartRow\">
                                    <li class=\"ec-cartRow__delColumn\">
                                        <a href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "remove", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-icon\" data-method=\"put\" data-message=\"カートから商品を削除してもよろしいですか?\">
                                            <img src=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                    echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                    <li class=\"ec-cartRow__contentColumn\">
                                        <div class=\"ec-cartRow__img\">
                                            <a target=\"_blank\" href=\"";
                    // line 136
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
                    echo "\">
                                                <img src=\"";
                    // line 137
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 137, $this->source); })()), "MainListImage", [], "any", false, false, false, 137)), "save_image"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 137, $this->source); })()), "name", [], "any", false, false, false, 137), "html", null, true);
                    echo "\"/>
                                            </a>
                                        </div>
                                        <div class=\"ec-cartRow__summary\">
                                            <div class=\"ec-cartRow__name\">
                                                <a target=\"_blank\" href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 142, $this->source); })()), "id", [], "any", false, false, false, 142)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 142, $this->source); })()), "name", [], "any", false, false, false, 142), "html", null, true);
                    echo "</a>
                                                ";
                    // line 143
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 143, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 143) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 143, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143))) {
                        // line 144
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 144, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 144), "ClassName", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 144, $this->source); })()), "ClassCategory1", [], "any", false, false, false, 144), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 146
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 146, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 146) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 146, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146))) {
                        // line 147
                        echo "                                                    <br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 147, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 147), "ClassName", [], "any", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
                        echo "：";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 147, $this->source); })()), "ClassCategory2", [], "any", false, false, false, 147), "html", null, true);
                        echo "
                                                ";
                    }
                    // line 149
                    echo "                                            </div>
                                          ";
                    // line 151
                    echo "                                             ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 151, $this->source); })()), "material", [], "any", false, false, false, 151))) {
                        // line 152
                        echo "                                             <div class=\"ec-cartRow__unitPrice\">
                                                     ";
                        // line 153
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品素材"), "html", null, true);
                        echo "： <span class=\"product-material-default\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 153, $this->source); })()), "material", [], "any", false, false, false, 153), "html", null, true);
                        echo "</span>
                                              </div>
                                             ";
                    }
                    // line 156
                    echo "                                         ";
                    // line 157
                    echo "                                          ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 157, $this->source); })()), "outer_size", [], "any", false, false, false, 157))) {
                        // line 158
                        echo "                                              <div class=\"ec-cartRow__unitPrice\">
                                                     ";
                        // line 159
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("内寸"), "html", null, true);
                        echo "： <span class=\"product-outer_size-default\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 159, $this->source); })()), "outer_size", [], "any", false, false, false, 159)), "html", null, true);
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                        echo "</span>
                                                  </div>
                                             ";
                    }
                    // line 162
                    echo "                                             ";
                    // line 163
                    echo "                                             ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 163, $this->source); })()), "inner_size", [], "any", false, false, false, 163))) {
                        // line 164
                        echo "                                              <div class=\"ec-cartRow__unitPrice\">
                                                   ";
                        // line 165
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("外寸"), "html", null, true);
                        echo "： <span class=\"product-inner_size-default\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 165, $this->source); })()), "inner_size", [], "any", false, false, false, 165), "html", null, true);
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(cm)"), "html", null, true);
                        echo "</span>
                                               </div>
                                            ";
                    }
                    // line 168
                    echo "                                           ";
                    // line 169
                    echo "                                             ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 169, $this->source); })()), "self_weight", [], "any", false, false, false, 169) != 0)) {
                        // line 170
                        echo "                                              <div class=\"ec-productRole__code\">
                                                   ";
                        // line 171
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("自重"), "html", null, true);
                        echo "： <span class=\"product-self_weight-default\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 171, $this->source); })()), "self_weight", [], "any", false, false, false, 171), "html", null, true);
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Kg"), "html", null, true);
                        echo "</span>
                                               </div>
                                             ";
                    }
                    // line 174
                    echo "                                            <div class=\"ec-cartRow__unitPrice\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "price", [], "any", false, false, false, 174)), "html", null, true);
                    echo "</div>
                                            <div class=\"ec-cartRow__sutbtotalSP\">";
                    // line 175
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("小計："), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 175)), "html", null, true);
                    echo "</div>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__amountColumn\">
                                        <div class=\"ec-cartRow__amount\">";
                    // line 179
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 179)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountSP\">";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量："), "html", null, true);
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 180)), "html", null, true);
                    echo "</div>
                                        <div class=\"ec-cartRow__amountUpDown\">
                                            ";
                    // line 182
                    if ((twig_get_attribute($this->env, $this->source, $context["CartItem"], "quantity", [], "any", false, false, false, 182) > 1)) {
                        // line 183
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "down", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
                        echo "\" ";
                        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                        echo " class=\"ec-cartRow__amountDownButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 184
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus-dark.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </a>
                                            ";
                    } else {
                        // line 187
                        echo "                                                <div class=\"ec-cartRow__amountDownButtonDisabled\">
                                                    <span class=\"ec-cartRow__amountDownButton__icon\"><img src=\"";
                        // line 188
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/minus.svg"), "html", null, true);
                        echo "\" alt=\"reduce\"></span>
                                                </div>
                                            ";
                    }
                    // line 191
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_handle_item", ["operation" => "up", "productClassId" => twig_get_attribute($this->env, $this->source, (isset($context["ProductClass"]) || array_key_exists("ProductClass", $context) ? $context["ProductClass"] : (function () { throw new RuntimeError('Variable "ProductClass" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191)]), "html", null, true);
                    echo "\" ";
                    echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                    echo " class=\"ec-cartRow__amountUpButton load-overlay\" data-method=\"put\" data-confirm=\"false\">
                                                <span class=\"ec-cartRow__amountUpButton__icon\"><img src=\"";
                    // line 192
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/plus-dark.svg"), "html", null, true);
                    echo "\" alt=\"increase\"></span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class=\"ec-cartRow__subtotalColumn\">
                                        <div class=\"ec-cartRow__sutbtotal\">";
                    // line 197
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["CartItem"], "total_price", [], "any", false, false, false, 197)), "html", null, true);
                    echo "</div>
                                    </li>
                                </ul>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CartItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                echo "                        </div>
                    </div>
                    <div class=\"ec-cartRole__progress\">
                        ";
                // line 204
                if ((twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 204, $this->source); })()), "delivery_free_amount", [], "any", false, false, false, 204) && twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 204, $this->source); })()), "delivery_free_quantity", [], "any", false, false, false, 204))) {
                    // line 205
                    echo "                            <br/>
                            ";
                    // line 206
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 206, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 206, $this->source); })()), [], "array", false, false, false, 206)) {
                        // line 207
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 209
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」または「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 209, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 209, $this->source); })()), [], "array", false, false, false, 209)), "%quantity%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 209, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 209, $this->source); })()), [], "array", false, false, false, 209))]);
                        echo "
                            ";
                    }
                    // line 211
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 211, $this->source); })()), "delivery_free_amount", [], "any", false, false, false, 211)) {
                    // line 212
                    echo "                            <br/>
                            ";
                    // line 213
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 213, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 213, $this->source); })()), [], "array", false, false, false, 213)) {
                        // line 214
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 216
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%price%</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%price%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["least"]) || array_key_exists("least", $context) ? $context["least"] : (function () { throw new RuntimeError('Variable "least" does not exist.', 216, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 216, $this->source); })()), [], "array", false, false, false, 216))]);
                        echo "
                            ";
                    }
                    // line 218
                    echo "                        ";
                } elseif (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 218, $this->source); })()), "delivery_free_quantity", [], "any", false, false, false, 218)) {
                    // line 219
                    echo "                            <br/>
                            ";
                    // line 220
                    if (twig_get_attribute($this->env, $this->source, (isset($context["is_delivery_free"]) || array_key_exists("is_delivery_free", $context) ? $context["is_delivery_free"] : (function () { throw new RuntimeError('Variable "is_delivery_free" does not exist.', 220, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 220, $this->source); })()), [], "array", false, false, false, 220)) {
                        // line 221
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在送料無料です。"), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 223
                        echo "                                ";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("あと「<strong>%quantity%個</strong>」のお買い上げで<strong class=\"ec-color-red\">送料無料</strong>になります。", ["%quantity%" => twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 223, $this->source); })()), (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 223, $this->source); })()), [], "array", false, false, false, 223))]);
                        echo "
                            ";
                    }
                    // line 225
                    echo "                        ";
                }
                // line 226
                echo "                    </div>
                    <div class=\"ec-cartRole__actions\">
                        <div class=\"ec-cartRole__total\">";
                // line 228
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("合計："), "html", null, true);
                echo "<span class=\"ec-cartRole__totalAmount\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Cart"], "totalPrice", [], "any", false, false, false, 228)), "html", null, true);
                echo "</span>
                        </div>
                        <a class=\"ec-blockBtn--action\" href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_buystep", ["cart_key" => (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 230, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("レジに進む"), "html", null, true);
                echo "</a>
                        ";
                // line 231
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 231)) {
                    // line 232
                    echo "                            <a class=\"ec-blockBtn--cancel\" href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 234
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
            // line 236
            echo "            </form>
        ";
        } else {
            // line 238
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Carts"]) || array_key_exists("Carts", $context) ? $context["Carts"] : (function () { throw new RuntimeError('Variable "Carts" does not exist.', 238, $this->source); })()));
            foreach ($context['_seq'] as $context["CartIndex"] => $context["Cart"]) {
                // line 239
                echo "                ";
                $context["cartKey"] = twig_get_attribute($this->env, $this->source, $context["Cart"], "cart_key", [], "any", false, false, false, 239);
                // line 240
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "session", [], "any", false, false, false, 240), "flashbag", [], "any", false, false, false, 240), "get", [0 => (("eccube.front.cart." . (isset($context["cartKey"]) || array_key_exists("cartKey", $context) ? $context["cartKey"] : (function () { throw new RuntimeError('Variable "cartKey" does not exist.', 240, $this->source); })())) . ".request.error")], "method", false, false, false, 240));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 241
                    echo "                    <div class=\"ec-cartRole__error\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
                    // line 243
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
                    echo "\"></div>
                            <div class=\"ec-alert-warning__text\">
                                ";
                    // line 245
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
                // line 250
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['CartIndex'], $context['Cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "            <div class=\"ec-role\">
                <div class=\"ec-off3Grid\">
                    <div class=\"ec-off3Grid__cell\">
                        <div class=\"ec-alert-warning\">
                            <div class=\"ec-alert-warning__icon\"><img src=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/exclamation-white.svg"), "html", null, true);
            echo "\"></div>
                            <div class=\"ec-alert-warning__text\">";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在カート内に商品はございません。"), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 262
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@user_data/Product/Shopping/customize_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 262,  726 => 256,  722 => 255,  716 => 251,  710 => 250,  699 => 245,  694 => 243,  690 => 241,  685 => 240,  682 => 239,  677 => 238,  673 => 236,  658 => 234,  650 => 232,  648 => 231,  642 => 230,  635 => 228,  631 => 226,  628 => 225,  622 => 223,  616 => 221,  614 => 220,  611 => 219,  608 => 218,  602 => 216,  596 => 214,  594 => 213,  591 => 212,  588 => 211,  582 => 209,  576 => 207,  574 => 206,  571 => 205,  569 => 204,  564 => 201,  554 => 197,  546 => 192,  539 => 191,  533 => 188,  530 => 187,  524 => 184,  517 => 183,  515 => 182,  509 => 180,  505 => 179,  497 => 175,  492 => 174,  483 => 171,  480 => 170,  477 => 169,  475 => 168,  466 => 165,  463 => 164,  460 => 163,  458 => 162,  449 => 159,  446 => 158,  443 => 157,  441 => 156,  433 => 153,  430 => 152,  427 => 151,  424 => 149,  416 => 147,  413 => 146,  405 => 144,  403 => 143,  397 => 142,  387 => 137,  383 => 136,  375 => 131,  369 => 130,  365 => 128,  362 => 127,  359 => 126,  355 => 125,  350 => 123,  346 => 122,  342 => 121,  338 => 120,  333 => 117,  322 => 112,  317 => 110,  313 => 108,  308 => 107,  305 => 106,  288 => 105,  283 => 103,  280 => 102,  272 => 97,  267 => 94,  265 => 93,  259 => 90,  255 => 88,  252 => 87,  241 => 82,  236 => 80,  232 => 78,  227 => 77,  210 => 73,  204 => 71,  198 => 69,  196 => 68,  191 => 66,  187 => 64,  184 => 63,  166 => 62,  164 => 61,  156 => 56,  153 => 55,  150 => 54,  143 => 50,  140 => 49,  137 => 48,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  103 => 33,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  76 => 19,  71 => 16,  61 => 15,  50 => 11,  48 => 13,  35 => 11,);
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
                                          {# 商品素材 #}
                                             {% if Product.material is not empty %}
                                             <div class=\"ec-cartRow__unitPrice\">
                                                     {{ '商品素材'|trans }}： <span class=\"product-material-default\">{{ Product.material }}</span>
                                              </div>
                                             {% endif %}
                                         {# 内寸 #}
                                          {% if Product.outer_size is not empty %}
                                              <div class=\"ec-cartRow__unitPrice\">
                                                     {{ '内寸'|trans }}： <span class=\"product-outer_size-default\">{{ Product.outer_size|trans }}{{ '(cm)'|trans }}</span>
                                                  </div>
                                             {% endif %}
                                             {# 外寸 #}
                                             {% if Product.inner_size is not empty %}
                                              <div class=\"ec-cartRow__unitPrice\">
                                                   {{ '外寸'|trans }}： <span class=\"product-inner_size-default\">{{ Product.inner_size }}{{ '(cm)'|trans }}</span>
                                               </div>
                                            {% endif %}
                                           {# 自重 #}
                                             {% if Product.self_weight != 0 %}
                                              <div class=\"ec-productRole__code\">
                                                   {{ '自重'|trans }}： <span class=\"product-self_weight-default\">{{ Product.self_weight }}{{ 'Kg'|trans }}</span>
                                               </div>
                                             {% endif %}
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
", "@user_data/Product/Shopping/customize_index.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\user_data\\Product\\Shopping\\customize_index.twig");
    }
}
