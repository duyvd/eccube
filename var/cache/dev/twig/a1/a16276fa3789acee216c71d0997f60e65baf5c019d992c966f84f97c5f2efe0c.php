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
class __TwigTemplate_8ab38b144e04f1239a74aee9d26950394eb472a193818d5466386985bc2b1b8c extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer\\delivery_edit.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@admin/Customer\\delivery_edit.twig"));

        // line 14
        $context["menus"] = [0 => "customer", 1 => "customer_edit"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Customer\\delivery_edit.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_address_registration"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sub_title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_management"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 22
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 26
        echo "
    <form name=\"customer_address_form\"
          role=\"form\"
          id=\"customer_address_form\"
          method=\"post\"
          action=\"";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "did" => twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_delivery_new", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        }
        echo "\"
          novalidate class=\"h-adr\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "_token", [], "any", false, false, false, 33), 'widget');
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["CustomerAddress"]) || array_key_exists("CustomerAddress", $context) ? $context["CustomerAddress"] : (function () { throw new RuntimeError('Variable "CustomerAddress" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), "name01", [], "any", false, false, false, 61), 'widget');
        echo "
                                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "name01", [], "any", false, false, false, 62), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "name02", [], "any", false, false, false, 65), 'widget');
        echo "
                                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), "name02", [], "any", false, false, false, 66), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "kana", [], "any", false, false, false, 79), "kana01", [], "any", false, false, false, 79), 'widget');
        echo "
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "kana", [], "any", false, false, false, 80), "kana01", [], "any", false, false, false, 80), 'errors');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "kana", [], "any", false, false, false, 83), "kana02", [], "any", false, false, false, 83), 'widget');
        echo "
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "kana", [], "any", false, false, false, 84), "kana02", [], "any", false, false, false, 84), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "company_name", [], "any", false, false, false, 95), 'widget');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "company_name", [], "any", false, false, false, 96), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "postal_code", [], "any", false, false, false, 108), 'widget');
        echo "
                                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "postal_code", [], "any", false, false, false, 109), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "address", [], "any", false, false, false, 120), "pref", [], "any", false, false, false, 120), 'widget');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "address", [], "any", false, false, false, 121), "pref", [], "any", false, false, false, 121), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "address", [], "any", false, false, false, 130), "addr01", [], "any", false, false, false, 130), 'widget');
        echo "
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "address", [], "any", false, false, false, 131), "addr01", [], "any", false, false, false, 131), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "address", [], "any", false, false, false, 140), "addr02", [], "any", false, false, false, 140), 'widget');
        echo "
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "address", [], "any", false, false, false, 141), "addr02", [], "any", false, false, false, 141), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "phone_number", [], "any", false, false, false, 150), 'widget');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "phone_number", [], "any", false, false, false, 151), 'errors');
        echo "
                                </div>
                            </div>

                            ";
        // line 156
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Customer"]) || array_key_exists("Customer", $context) ? $context["Customer"] : (function () { throw new RuntimeError('Variable "Customer" does not exist.', 184, $this->source); })()), "id", [], "any", false, false, false, 184)]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  443 => 193,  433 => 186,  428 => 184,  414 => 172,  407 => 171,  400 => 167,  396 => 166,  390 => 163,  386 => 161,  380 => 159,  377 => 158,  374 => 157,  368 => 156,  361 => 151,  357 => 150,  351 => 147,  342 => 141,  338 => 140,  326 => 131,  322 => 130,  310 => 121,  306 => 120,  292 => 109,  288 => 108,  283 => 106,  276 => 102,  267 => 96,  263 => 95,  257 => 92,  246 => 84,  242 => 83,  236 => 80,  232 => 79,  224 => 74,  213 => 66,  209 => 65,  203 => 62,  199 => 61,  191 => 56,  186 => 53,  179 => 49,  173 => 46,  169 => 44,  167 => 43,  161 => 40,  151 => 33,  142 => 31,  135 => 26,  125 => 25,  114 => 22,  104 => 21,  85 => 17,  66 => 16,  55 => 12,  53 => 19,  51 => 14,  38 => 12,);
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

{% extends '@admin/default_frame.twig' %}

{% set menus = ['customer', 'customer_edit'] %}

{% block title %}{{ 'admin.customer.customer_address_registration'|trans }}{% endblock %}
{% block sub_title %}{{ 'admin.customer.customer_management'|trans }}{% endblock %}

{% form_theme form '@admin/Form/bootstrap_4_horizontal_layout.html.twig' %}

{% block javascript %}
    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
{% endblock javascript %}

{% block main %}

    <form name=\"customer_address_form\"
          role=\"form\"
          id=\"customer_address_form\"
          method=\"post\"
          action=\"{%- if CustomerAddress.id %}{{ url('admin_customer_delivery_edit', { id : Customer.id, did: CustomerAddress.id }) }}{% else %}{{ url('admin_customer_delivery_new', { id: Customer.id }) }}{% endif -%}\"
          novalidate class=\"h-adr\">
        {{ form_widget(form._token) }}
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">{{ 'admin.customer.customer_address_info'|trans }}</span>
                        </div>
                        <div class=\"card-body\">
                            {% if CustomerAddress.id %}
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        {{ 'admin.common.id'|trans }}
                                    </div>
                                    <div class=\"col\">
                                        {{ CustomerAddress.id }}
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    {{ 'admin.common.name'|trans }}
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            {{ form_widget(form.name.name01) }}
                                            {{ form_errors(form.name.name01) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(form.name.name02) }}
                                            {{ form_errors(form.name.name02) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    {{ 'admin.common.kana'|trans }}
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col\">
                                            {{ form_widget(form.kana.kana01) }}
                                            {{ form_errors(form.kana.kana01) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(form.kana.kana02) }}
                                            {{ form_errors(form.kana.kana02) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3 mb-2\">
                                    {{ 'admin.common.company_name'|trans }}
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.company_name) }}
                                    {{ form_errors(form.company_name) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    {{ 'admin.common.address'|trans }}
                                </div>
                                <div class=\"col\">
                                    <div class=\"row mb-2\">
                                        <div class=\"col-auto pr-0 align-self-center\"><span>{{ 'admin.common.postal_symbol'|trans }}</span></div>
                                        <div class=\"col-2\">
                                            {{ form_widget(form.postal_code) }}
                                            {{ form_errors(form.postal_code) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col form-inline mb-2\">
                                    {{ form_widget(form.address.pref) }}
                                    {{ form_errors(form.address.pref) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.address.addr01) }}
                                    {{ form_errors(form.address.addr01) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    &nbsp;
                                </div>
                                <div class=\"col mb-2\">
                                    {{ form_widget(form.address.addr02) }}
                                    {{ form_errors(form.address.addr02) }}
                                </div>
                            </div>

                            <div class=\"row mb-2\">
                                <div class=\"col-3\">
                                    {{ 'admin.common.phone_number'|trans }}
                                </div>
                                <div class=\"col\">
                                    {{ form_widget(form.phone_number) }}
                                    {{ form_errors(form.phone_number) }}
                                </div>
                            </div>

                            {# エンティティ拡張の自動出力 #}
                            {% for f in form if f.vars.eccube_form_options.auto_render %}
                                {% if f.vars.eccube_form_options.form_theme %}
                                    {% form_theme f f.vars.eccube_form_options.form_theme %}
                                    {{ form_row(f) }}
                                {% else %}
                                    <div class=\"row mb-2\">
                                        <div class=\"col-3\">
                                            <span>{{ f.vars.label|trans }}</span>
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(f) }}
                                            {{ form_errors(f) }}
                                        </div>
                                    </div>
                                {% endif %}
                            {% endfor %}

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
                            <a class=\"c-baseLink\" href=\"{{ url('admin_customer_edit', { id: Customer.id }) }}\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                <span>{{ 'admin.customer.customer_registration'|trans }}</span></a>
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">{{ 'admin.common.registration'|trans }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

{% endblock %}
", "@admin/Customer\\delivery_edit.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Customer\\delivery_edit.twig");
    }
}
