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

/* Shopping\shipping_edit.twig */
class __TwigTemplate_45df2c902598d341bbb0fb2e99ce0663c2aabdc0570863d65f30f74274da04d8 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Form/form_div_layout.twig"], true);
        // line 15
        $context["body_class"] = "cart_page";
        // line 17
        if (twig_test_empty($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 18
            $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("商品購入/お届け先の変更");
        }
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Shopping\\shipping_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の追加"), "html", null, true);
            echo "</h1>
            ";
        } else {
            // line 32
            echo "                <h1>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先の変更"), "html", null, true);
            echo "</h1>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <div class=\"ec-role\">
        <div class=\"ec-registerRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <form method=\"post\" action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping_edit", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
        echo "\" class=\"h-adr\">
                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 43), 'widget');
        echo "
                        <div class=\"ec-borderedDefs\">
                            <dl>
                                <dt>
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 50
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 50), "name01", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 50), "name02", [], "any", false, false, false, 50))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 51), "name01", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "姓"]]);
        echo "
                                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 52), "name02", [], "any", false, false, false, 52), 'widget', ["attr" => ["placeholder" => "名"]]);
        echo "
                                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 53), "name01", [], "any", false, false, false, 53), 'errors');
        echo "
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 54), "name02", [], "any", false, false, false, 54), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "お名前(カナ)"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 63
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 63), "kana01", [], "any", false, false, false, 63), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 63), "kana02", [], "any", false, false, false, 63))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 64), "kana01", [], "any", false, false, false, 64), 'widget', ["attr" => ["placeholder" => "セイ"]]);
        echo "
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 65), "kana02", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => "メイ"]]);
        echo "
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 66), "kana01", [], "any", false, false, false, 66), 'errors');
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 67), "kana02", [], "any", false, false, false, 67), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "会社名"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-halfInput";
        // line 76
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 76))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 77), 'widget');
        echo "
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 78), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "住所"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-zipInput";
        // line 87
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 87))) ? (" error") : (""));
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
        echo "</span>
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 88), 'widget');
        echo "
                                        <div class=\"ec-zipInputHelp\">
                                            <div class=\"ec-zipInputHelp__icon\">
                                                <div class=\"ec-icon\"><img
                                                            src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/question-white.svg"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                            </div><a href=\"https://www.post.japanpost.jp/zipcode/\" target=\"_blank\"><span>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("郵便番号検索"), "html", null, true);
        echo "</span></a>
                                        </div>
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 96), 'errors');
        echo "
                                    </div>

                                    <div class=\"ec-select";
        // line 99
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 99), "pref", [], "any", false, false, false, 99))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 100), "pref", [], "any", false, false, false, 100), 'widget');
        echo "
                                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 101), "pref", [], "any", false, false, false, 101), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 103
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 103), "addr01", [], "any", false, false, false, 103))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 104), "addr01", [], "any", false, false, false, 104), 'widget', ["attr" => ["placeholder" => "市区町村名(例：大阪市北区)"]]);
        echo "
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 105), "addr01", [], "any", false, false, false, 105), 'errors');
        echo "
                                    </div>
                                    <div class=\"ec-input";
        // line 107
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 107), "addr02", [], "any", false, false, false, 107))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 108), "addr02", [], "any", false, false, false, 108), 'widget', ["attr" => ["placeholder" => "番地・ビル名(例：西梅田1丁目6-8)"]]);
        echo "
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 109), "addr02", [], "any", false, false, false, 109), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "ec-label"], "label" => "電話番号"]);
        echo "
                                </dt>
                                <dd>
                                    <div class=\"ec-telInput";
        // line 118
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 118))) ? (" error") : (""));
        echo "\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 119), 'widget');
        echo "
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 120), 'errors');
        echo "
                                    </div>
                                </dd>
                            </dl>
                            ";
        // line 125
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 125), "eccube_form_options", [], "any", false, false, false, 125), "auto_render", [], "any", false, false, false, 125)) {
                // line 126
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 126), "eccube_form_options", [], "any", false, false, false, 126), "form_theme", [], "any", false, false, false, 126)) {
                    // line 127
                    echo "                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 127), "eccube_form_options", [], "any", false, false, false, 127), "form_theme", [], "any", false, false, false, 127)], true);
                    // line 128
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                ";
                } else {
                    // line 130
                    echo "                                    <dl>
                                        <dt>
                                            ";
                    // line 132
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'label');
                    echo "
                                        </dt>
                                        <dd>
                                            <div class=\"";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 135), "eccube_form_options", [], "any", false, false, false, 135), "style_class", [], "any", false, false, false, 135), "html", null, true);
                    echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors($context["f"])) ? (" error") : (""));
                    echo "\">
                                                ";
                    // line 136
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                ";
                    // line 137
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                            </div>
                                        </dd>
                                    </dl>
                                ";
                }
                // line 142
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                        </div>
                        <div class=\"ec-RegisterRole__actions\">
                            <div class=\"ec-off4Grid\">
                                <div class=\"ec-off4Grid__cell\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("登録する"), "html", null, true);
        echo "</button>
                                    ";
        // line 148
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 149
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping_shipping", ["id" => ($context["shippingId"] ?? null)]), "html", null, true);
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        } else {
            // line 151
            echo "                                        <a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("shopping");
            echo "\" class=\"ec-blockBtn--cancel\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("戻る"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 153
        echo "                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Shopping\\shipping_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 153,  366 => 151,  358 => 149,  356 => 148,  352 => 147,  346 => 143,  339 => 142,  331 => 137,  327 => 136,  322 => 135,  316 => 132,  312 => 130,  306 => 128,  303 => 127,  300 => 126,  294 => 125,  287 => 120,  283 => 119,  279 => 118,  273 => 115,  264 => 109,  260 => 108,  256 => 107,  251 => 105,  247 => 104,  243 => 103,  238 => 101,  234 => 100,  230 => 99,  224 => 96,  219 => 94,  214 => 92,  207 => 88,  201 => 87,  195 => 84,  186 => 78,  182 => 77,  178 => 76,  172 => 73,  163 => 67,  159 => 66,  155 => 65,  151 => 64,  147 => 63,  141 => 60,  132 => 54,  128 => 53,  124 => 52,  120 => 51,  116 => 50,  110 => 47,  103 => 43,  98 => 41,  89 => 34,  83 => 32,  77 => 30,  75 => 29,  70 => 26,  66 => 25,  61 => 22,  57 => 21,  52 => 11,  49 => 18,  47 => 17,  45 => 15,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Shopping\\shipping_edit.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\default\\Shopping\\shipping_edit.twig");
    }
}
