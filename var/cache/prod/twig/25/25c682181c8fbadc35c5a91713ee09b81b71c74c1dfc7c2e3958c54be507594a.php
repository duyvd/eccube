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

/* @admin/Customer\delivery_edit.twig */
class __TwigTemplate_7cfbc4b8054da6f783d4ac407ce676f0cc5992977e89fd425e541489a260d2a1 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "customer", 1 => "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer\\delivery_edit.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_registration"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
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
    <form name=\"customer_address_form\"
          role=\"form\"
          id=\"customer_address_form\"
          method=\"post\"
          action=\"";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["CustomerAddress"] ?? null), "id", [], "any", false, false, false, 31)) {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, false, 31), "did" => twig_get_attribute($this->env, $this->source, ($context["CustomerAddress"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
        }
        echo "\"
          novalidate class=\"h-adr\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 33), 'widget');
        echo "
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_info"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["CustomerAddress"] ?? null), "id", [], "any", false, false, false, 43)) {
            // line 44
            echo "                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"col\">
                                        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["CustomerAddress"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                    </div>
                                </div>
                            ";
        }
        // line 53
        echo "
                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    ";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 61), "name01", [], "any", false, false, false, 61), 'widget');
        echo "
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 62), "name01", [], "any", false, false, false, 62), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 65), "name02", [], "any", false, false, false, 65), 'widget');
        echo "
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 66), "name02", [], "any", false, false, false, 66), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 79), "kana01", [], "any", false, false, false, 79), 'widget');
        echo "
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 80), "kana01", [], "any", false, false, false, 80), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 83), "kana02", [], "any", false, false, false, 83), 'widget');
        echo "
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 84), "kana02", [], "any", false, false, false, 84), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3 mb-2\">
                                    ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 95), 'widget');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 96), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-auto pr-0 align-self-center\"><span>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-2\">
                                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 108), 'widget');
        echo "
                                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 109), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col form-inline mb-2\">
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 120), "pref", [], "any", false, false, false, 120), 'widget');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 121), "pref", [], "any", false, false, false, 121), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 130), "addr01", [], "any", false, false, false, 130), 'widget');
        echo "
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 131), "addr01", [], "any", false, false, false, 131), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 140), "addr02", [], "any", false, false, false, 140), 'widget');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 141), "addr02", [], "any", false, false, false, 141), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "
                                </div>
                                <div class=\"col\">
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 150), 'widget');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 151), 'errors');
        echo "
                                </div>
                            </div>

                            ";
        // line 156
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 156), "eccube_form_options", [], "any", false, false, false, 156), "auto_render", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 157), "eccube_form_options", [], "any", false, false, false, 157), "form_theme", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 158), "eccube_form_options", [], "any", false, false, false, 158), "form_theme", [], "any", false, false, false, 158)], true);
                    // line 159
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                ";
                } else {
                    // line 161
                    echo "                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <span>";
                    // line 163
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 163), "label", [], "any", false, false, false, 163)), "html", null, true);
                    echo "</span>
                                        </div>
                                        <div class=\"col\">
                                            ";
                    // line 166
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 167
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </div>
                                ";
                }
                // line 171
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "id", [], "any", false, false, false, 184)]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_registration"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

";
    }

    public function getTemplateName()
    {
        return "@admin/Customer\\delivery_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 193,  379 => 186,  374 => 184,  360 => 172,  353 => 171,  346 => 167,  342 => 166,  336 => 163,  332 => 161,  326 => 159,  323 => 158,  320 => 157,  314 => 156,  307 => 151,  303 => 150,  297 => 147,  288 => 141,  284 => 140,  272 => 131,  268 => 130,  256 => 121,  252 => 120,  238 => 109,  234 => 108,  229 => 106,  222 => 102,  213 => 96,  209 => 95,  203 => 92,  192 => 84,  188 => 83,  182 => 80,  178 => 79,  170 => 74,  159 => 66,  155 => 65,  149 => 62,  145 => 61,  137 => 56,  132 => 53,  125 => 49,  119 => 46,  115 => 44,  113 => 43,  107 => 40,  97 => 33,  88 => 31,  81 => 26,  77 => 25,  72 => 22,  68 => 21,  61 => 17,  54 => 16,  49 => 12,  47 => 19,  45 => 14,  38 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Customer\\delivery_edit.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Customer\\delivery_edit.twig");
    }
}
