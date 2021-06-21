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

/* @admin/Store\plugin_handler.twig */
class __TwigTemplate_520246dd6196adba406e1889f4ef5fd0d15b2b97bc45ef35597fe4ecc897e333 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "store", 1 => "plugin", 2 => "plugin_handler"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Store\\plugin_handler.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.828"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.829"), "html", null, true);
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "

    ";
        // line 22
        if ((twig_length_filter($this->env, ($context["handlersPerEvent"] ?? null)) > 0)) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["handlersPerEvent"] ?? null));
            foreach ($context['_seq'] as $context["event"] => $context["handlersPerType"]) {
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["handlersPerType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 25
                    echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"box\">
                            <div class=\"box-header with-arrow\">
                                ";
                    // line 29
                    echo twig_escape_filter($this->env, $context["event"], "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div class=\"table_list\">
                                    <div class=\"table-responsive with-border\">
                                        <table class=\"table table-striped\">
                                            <thead>
                                            <tr>
                                                <th>";
                    // line 37
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.830"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.831"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.832"), "html", null, true);
                    echo "</th>
                                                <th>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.833"), "html", null, true);
                    echo "</th>
                                            </tr>
                                            </thead>
                                            ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["handlers"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 44
                        echo "                                                <tbody>
                                                    <tr>
                                                        <td class=\"member_id\">
                                                            ";
                        // line 47
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["handler"], "plugin", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["handler"], "handler", [], "any", false, false, false, 50), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"member_name\">
                                                            ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["handler"], "priority", [], "any", false, false, false, 53), "html", null, true);
                        echo "
                                                        </td>
                                                        <td class=\"icon_edit\">
                                                            <div class=\"dropdown\">
                                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                        // line 59
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59))) {
                            // line 60
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_up", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                            echo "\">上へ</a>
                                                                    ";
                        }
                        // line 62
                        echo "                                                                    ";
                        if ((true != twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 62))) {
                            // line 63
                            echo "                                                                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_handler_down", ["id" => twig_get_attribute($this->env, $this->source, $context["handler"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.835"), "html", null, true);
                            echo "</a>
                                                                    ";
                        }
                        // line 65
                        echo "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['event'], $context['handlersPerType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
        } else {
            // line 83
            echo "        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header with-arrow\">
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.836"), "html", null, true);
            echo "
                    </div><!-- /.box-header -->
                    <div class=\"box-header with-arrow\">
                        <h3 class=\"box-title\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.store.plugin_handler.837"), "html", null, true);
            echo "</h3>
                    </div><!-- /.box-header -->
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@admin/Store\\plugin_handler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 90,  233 => 87,  227 => 83,  224 => 82,  218 => 81,  203 => 71,  184 => 65,  176 => 63,  173 => 62,  167 => 60,  165 => 59,  156 => 53,  150 => 50,  144 => 47,  139 => 44,  122 => 43,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  91 => 29,  85 => 25,  80 => 24,  75 => 23,  73 => 22,  69 => 20,  65 => 19,  58 => 17,  51 => 16,  46 => 12,  44 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Store\\plugin_handler.twig", "C:\\xampp\\htdocs\\eccube\\src\\Eccube\\Resource\\template\\admin\\Store\\plugin_handler.twig");
    }
}
