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

/* Product\detail.twig */
class __TwigTemplate_8ea12c5cb352d6f4ebf14cadc859f38d11b53d8e7a0230ad724fc91e26dc16dc extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product\\detail.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product\\detail.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product\\detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "    <script>
        eccube.classCategories = ";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson((isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 97, $this->source); })()));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 108)) {
            // line 109
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 110
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 112
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 112)) {
            // line 113
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113));
            echo ", null);
        ";
        }
        // line 115
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 145)) {
            // line 146
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 154
        echo "
                ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 155)) {
            // line 156
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 164
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-overlay, .ec-modal .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 215
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 216
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 222, $this->source); })()), "ProductImage", [], "any", false, false, false, 222));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 223
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 225
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"/></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 229, $this->source); })()), "ProductImage", [], "any", false, false, false, 229));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 230
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 230), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 238
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 239, $this->source); })()), "name", [], "any", false, false, false, 239), "html", null, true);
        echo "</h2>
                    </div>
                    ";
        // line 242
        echo "                    <ul class=\"ec-productRole__tags\">
                        ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 243, $this->source); })()), "Tags", [], "any", false, false, false, 243));
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 244
            echo "                            <li class=\"ec-productRole__tag tag_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 244), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["Tag"], "html", null, true);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                    </ul>
                    ";
        // line 248
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 248, $this->source); })()), "hasProductClass", [], "any", false, false, false, 248)) {
            // line 249
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 250
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 250, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 250)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 250, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 250) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 250, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 250)))) {
                // line 251
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 251, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 251)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 252
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 253
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 253, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 253)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 253, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 253)))) {
                // line 254
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 254, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 254)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 254, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 254)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 255
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                            ";
            }
            // line 257
            echo "                        </div>
                    ";
        } else {
            // line 259
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 259, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 259))) {
                // line 260
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 260, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 260)), "html", null, true);
                echo "</span>
                            <span class=\"ec-productRole__priceRegularTax\">";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 263
            echo "                    ";
        }
        // line 264
        echo "                    ";
        // line 265
        echo "                    <div class=\"ec-productRole__price\">
                        ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 266, $this->source); })()), "hasProductClass", [], "any", false, false, false, 266)) {
            // line 267
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 267, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 267) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 267, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 267))) {
                // line 268
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 269
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 269, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 269)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 270
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            } else {
                // line 273
                echo "                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 274
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 274, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 274)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 274, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 274)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 275
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 278
            echo "                        ";
        } else {
            // line 279
            echo "                            <div class=\"ec-price\">
                                <span class=\"ec-price__price\">";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 280, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 280)), "html", null, true);
            echo "</span>
                                <span class=\"ec-price__tax\">";
            // line 281
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 284
        echo "                    </div>
                    ";
        // line 286
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 286, $this->source); })()), "code_min", [], "any", false, false, false, 286))) {
            // line 287
            echo "                        <div class=\"ec-productRole__code\">
                            ";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品コード"), "html", null, true);
            echo "： <span class=\"product-code-default\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 288, $this->source); })()), "code_min", [], "any", false, false, false, 288), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 288, $this->source); })()), "code_min", [], "any", false, false, false, 288) != twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 288, $this->source); })()), "code_max", [], "any", false, false, false, 288))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 288, $this->source); })()), "code_max", [], "any", false, false, false, 288), "html", null, true);
            }
            echo "</span>
                        </div>
                    ";
        }
        // line 291
        echo "                    ";
        // line 292
        echo "                    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 292, $this->source); })()), "ProductCategories", [], "any", false, false, false, 292))) {
            // line 293
            echo "                        <div class=\"ec-productRole__category\">
                            <div>";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("関連カテゴリ"), "html", null, true);
            echo "</div>
                            ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 295, $this->source); })()), "ProductCategories", [], "any", false, false, false, 295));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 296
                echo "                                <ul>
                                    <li>
                                        ";
                // line 298
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 298), "path", [], "any", false, false, false, 298));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 299
                    echo "                                            <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 299), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 299), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 299) == false)) {
                        // line 300
                        echo "                                            <span>＞</span>";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "                        </div>
                    ";
        }
        // line 307
        echo "                    <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 308
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 308, $this->source); })()), "stock_find", [], "any", false, false, false, 308)) {
            // line 309
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 310
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 310)) {
                // line 311
                echo "                                    <div class=\"ec-select\">
                                        ";
                // line 312
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 312), 'widget');
                echo "
                                        ";
                // line 313
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 313, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 313), 'errors');
                echo "
                                    </div>
                                    ";
                // line 315
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 315)) {
                    // line 316
                    echo "                                        <div class=\"ec-select\">
                                            ";
                    // line 317
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 317, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 317), 'widget');
                    echo "
                                            ";
                    // line 318
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 318), 'errors');
                    echo "
                                        </div>
                                    ";
                }
                // line 321
                echo "                                ";
            }
            // line 322
            echo "                                <div class=\"ec-numberInput\"><span>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
                                    ";
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "quantity", [], "any", false, false, false, 323), 'widget');
            echo "
                                    ";
            // line 324
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 324, $this->source); })()), "quantity", [], "any", false, false, false, 324), 'errors');
            echo "
                                </div>
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    ";
            // line 329
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        } else {
            // line 333
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 335
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 339
        echo "
                        ";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <div class=\"ec-modal-overlay\">
                            <div class=\"ec-modal-wrap\">
                                <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></span>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <span class=\"ec-inlineBtn--cancel\">";
        // line 349
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</span>
                                        <a href=\"";
        // line 350
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 356
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 356, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 356)) {
            // line 357
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 357, $this->source); })()), "id", [], "any", false, false, false, 357)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"ec-productRole__btn\">
                                ";
            // line 359
            if (((isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 359, $this->source); })()) == false)) {
                // line 360
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        ";
                // line 361
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 364
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">";
                // line 365
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りに追加済です。"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 368
            echo "                            </div>
                        </form>
                    ";
        }
        // line 371
        echo "                    <div class=\"ec-productRole__description\">";
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 371, $this->source); })()), "description_detail", [], "any", false, false, false, 371));
        echo "
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 376
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 376, $this->source); })()), "freearea", [], "any", false, false, false, 376)) {
            // line 377
            echo "             <div class=\"ec-productRole__description\">
                 ";
            // line 378
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 378, $this->source); })()), "freearea", [], "any", false, false, false, 378)));
            echo "
            </div>
        ";
        }
        // line 381
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Product\\detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 381,  820 => 378,  817 => 377,  815 => 376,  806 => 371,  801 => 368,  795 => 365,  792 => 364,  786 => 361,  783 => 360,  781 => 359,  775 => 357,  773 => 356,  762 => 350,  758 => 349,  752 => 346,  748 => 345,  740 => 340,  737 => 339,  730 => 335,  726 => 333,  719 => 329,  711 => 324,  707 => 323,  702 => 322,  699 => 321,  693 => 318,  689 => 317,  686 => 316,  684 => 315,  679 => 313,  675 => 312,  672 => 311,  670 => 310,  667 => 309,  665 => 308,  660 => 307,  656 => 305,  648 => 302,  633 => 300,  624 => 299,  607 => 298,  603 => 296,  599 => 295,  595 => 294,  592 => 293,  589 => 292,  587 => 291,  575 => 288,  572 => 287,  569 => 286,  566 => 284,  560 => 281,  556 => 280,  553 => 279,  550 => 278,  544 => 275,  538 => 274,  535 => 273,  529 => 270,  525 => 269,  522 => 268,  520 => 267,  518 => 266,  515 => 265,  513 => 264,  510 => 263,  505 => 261,  498 => 260,  495 => 259,  491 => 257,  486 => 255,  477 => 254,  475 => 253,  471 => 252,  464 => 251,  462 => 250,  459 => 249,  456 => 248,  453 => 246,  442 => 244,  438 => 243,  435 => 242,  430 => 239,  427 => 238,  420 => 232,  401 => 230,  384 => 229,  380 => 227,  371 => 225,  363 => 223,  358 => 222,  350 => 216,  340 => 215,  317 => 201,  307 => 194,  277 => 167,  272 => 164,  263 => 158,  259 => 156,  257 => 155,  254 => 154,  245 => 148,  241 => 146,  239 => 145,  207 => 115,  199 => 113,  197 => 112,  192 => 110,  189 => 109,  187 => 108,  173 => 97,  170 => 96,  160 => 95,  73 => 16,  63 => 15,  52 => 11,  50 => 13,  37 => 11,);
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

{% set body_class = 'product_page' %}

{% block stylesheet %}
    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
{% endblock %}

{% block javascript %}
    <script>
        eccube.classCategories = {{ class_categories_as_json(Product)|raw }};

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        {% if form.classcategory_id2 is defined %}
        fnSetClassCategories(
            \$('#form1'), {{ form.classcategory_id2.vars.value|json_encode|raw }}
        );
        {% elseif form.classcategory_id1 is defined %}
        eccube.checkStock(\$('#form1'), {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);
        {% endif %}
    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                {% if form.classcategory_id1 is defined %}
                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                {% endif %}

                {% if form.classcategory_id2 is defined %}
                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                {% endif %}

                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('.ec-modal').show()

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"{{ url('block_cart') }}\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('{{ 'カートへの追加に失敗しました。'|trans }}');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });

        \$('.ec-modal-overlay, .ec-modal .ec-inlineBtn--cancel').on('click', function() {
            \$('.ec-modal').hide()
        });
    </script>
{% endblock %}

{% block main %}
    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">

                    <div class=\"item_visual\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slide-item\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% else %}
                            <div class=\"slide-item\"><img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/></div>
                        {% endfor %}
                    </div>
                    <div class=\"item_nav\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slideThumb\" data-index=\"{{ loop.index0 }}\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    {# 商品名 #}
                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">{{ Product.name }}</h2>
                    </div>
                    {# タグ #}
                    <ul class=\"ec-productRole__tags\">
                        {% for Tag in Product.Tags %}
                            <li class=\"ec-productRole__tag tag_{{ Tag.id }}\">{{ Tag }}</li>
                        {% endfor %}
                    </ul>
                    {# 通常価格 #}
                    {% if Product.hasProductClass -%}
                        <div class=\"ec-productRole__priceRegular\">
                            {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
                                <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
                            {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
                                <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
                            {% endif %}
                        </div>
                    {% else %}
                        {% if Product.getPrice01Max is not null %}
                            <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
                            <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
                        {% endif %}
                    {% endif %}
                    {# 販売価格 #}
                    <div class=\"ec-productRole__price\">
                        {% if Product.hasProductClass -%}
                            {% if Product.getPrice02IncTaxMin == Product.getPrice02IncTaxMax %}
                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                    <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
                                </div>
                            {% else %}
                                <div class=\"ec-price\">
                                    <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                                    <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
                                </div>
                            {% endif %}
                        {% else %}
                            <div class=\"ec-price\">
                                <span class=\"ec-price__price\">{{ Product.getPrice02IncTaxMin|price }}</span>
                                <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
                            </div>
                        {% endif %}
                    </div>
                    {# 商品コード #}
                    {% if Product.code_min is not empty %}
                        <div class=\"ec-productRole__code\">
                            {{ '商品コード'|trans }}： <span class=\"product-code-default\">{{ Product.code_min }}{% if Product.code_min != Product.code_max %} ～ {{ Product.code_max }}{% endif %}</span>
                        </div>
                    {% endif %}
                    {# 関連カテゴリ #}
                    {% if Product.ProductCategories is not empty %}
                        <div class=\"ec-productRole__category\">
                            <div>{{ '関連カテゴリ'|trans }}</div>
                            {% for ProductCategory in Product.ProductCategories %}
                                <ul>
                                    <li>
                                        {% for Category in ProductCategory.Category.path %}
                                            <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a> {%- if loop.last == false %}
                                            <span>＞</span>{% endif -%}
                                        {% endfor %}
                                    </li>
                                </ul>
                            {% endfor %}
                        </div>
                    {% endif %}
                    <form action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\" id=\"form1\" name=\"form1\">
                        {% if Product.stock_find %}
                            <div class=\"ec-productRole__actions\">
                                {% if form.classcategory_id1 is defined %}
                                    <div class=\"ec-select\">
                                        {{ form_widget(form.classcategory_id1) }}
                                        {{ form_errors(form.classcategory_id1) }}
                                    </div>
                                    {% if form.classcategory_id2 is defined %}
                                        <div class=\"ec-select\">
                                            {{ form_widget(form.classcategory_id2) }}
                                            {{ form_errors(form.classcategory_id2) }}
                                        </div>
                                    {% endif %}
                                {% endif %}
                                <div class=\"ec-numberInput\"><span>{{ '数量'|trans }}</span>
                                    {{ form_widget(form.quantity) }}
                                    {{ form_errors(form.quantity) }}
                                </div>
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    {{ 'カートに入れる'|trans }}
                                </button>
                            </div>
                        {% else %}
                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    {{ 'ただいま品切れ中です。'|trans }}
                                </button>
                            </div>
                        {% endif %}

                        {{ form_rest(form) }}
                    </form>
                    <div class=\"ec-modal\">
                        <div class=\"ec-modal-overlay\">
                            <div class=\"ec-modal-wrap\">
                                <span class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span></span>
                                <div id=\"ec-modal-header\" class=\"text-center\">{{ 'カートに追加しました。'|trans }}</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <span class=\"ec-inlineBtn--cancel\">{{ 'お買い物を続ける'|trans }}</span>
                                        <a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'カートへ進む'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% if BaseInfo.option_favorite_product %}
                        <form action=\"{{ url('product_add_favorite', {id:Product.id}) }}\" method=\"post\">
                            <div class=\"ec-productRole__btn\">
                                {% if is_favorite == false %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\">
                                        {{ 'お気に入りに追加'|trans }}
                                    </button>
                                {% else %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--cancel\"
                                            disabled=\"disabled\">{{ 'お気に入りに追加済です。'|trans }}
                                    </button>
                                {% endif %}
                            </div>
                        </form>
                    {% endif %}
                    <div class=\"ec-productRole__description\">{{ Product.description_detail|raw|nl2br }}
                    </div>
                </div>
            </div>
        </div>
        {% if Product.freearea %}
             <div class=\"ec-productRole__description\">
                 {{ include(template_from_string(Product.freearea)) }}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "Product\\detail.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Product\\detail.twig");
    }
}
