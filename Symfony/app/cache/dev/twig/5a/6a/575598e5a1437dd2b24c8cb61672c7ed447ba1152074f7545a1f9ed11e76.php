<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_5a6a575598e5a1437dd2b24c8cb61672c7ed447ba1152074f7545a1f9ed11e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((!call_user_func_array($this->env->getFunction('ckeditor_is_loaded')->getCallable(), array()))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo call_user_func_array($this->env->getFunction('ckeditor_base_path')->getCallable(), array((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path"))));
                echo "\";
            </script>

            <script type=\"text/javascript\" src=\"";
                // line 10
                echo call_user_func_array($this->env->getFunction('ckeditor_js_path')->getCallable(), array((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path"))));
                echo "\"></script>
        ";
            }
            // line 12
            echo "
        <script type=\"text/javascript\">
            ";
            // line 14
            echo call_user_func_array($this->env->getFunction('ckeditor_destroy')->getCallable(), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            echo "

            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 17
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_plugin')->getCallable(), array((isset($context["plugin_name"]) ? $context["plugin_name"] : $this->getContext($context, "plugin_name")), (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 21
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_styles_set')->getCallable(), array((isset($context["style_name"]) ? $context["style_name"] : $this->getContext($context, "style_name")), (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 25
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_template')->getCallable(), array((isset($context["template_name"]) ? $context["template_name"] : $this->getContext($context, "template_name")), (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
            ";
            // line 28
            echo call_user_func_array($this->env->getFunction('ckeditor_replace')->getCallable(), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config"))));
            echo "
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  91 => 23,  82 => 21,  75 => 19,  62 => 16,  42 => 7,  36 => 5,  26 => 2,  20 => 1,  257 => 105,  254 => 104,  251 => 103,  246 => 92,  243 => 91,  238 => 94,  236 => 91,  233 => 90,  230 => 89,  222 => 83,  217 => 81,  212 => 80,  207 => 78,  201 => 75,  197 => 74,  193 => 73,  182 => 68,  177 => 66,  161 => 53,  157 => 52,  146 => 46,  142 => 44,  138 => 43,  134 => 42,  127 => 38,  123 => 37,  110 => 28,  96 => 20,  86 => 12,  81 => 11,  78 => 20,  72 => 8,  66 => 17,  55 => 96,  53 => 12,  50 => 88,  48 => 10,  41 => 15,  39 => 6,  34 => 4,  25 => 1,  121 => 35,  117 => 28,  114 => 31,  108 => 29,  106 => 27,  99 => 21,  92 => 24,  89 => 23,  83 => 22,  74 => 19,  69 => 18,  64 => 103,  57 => 14,  54 => 14,  47 => 11,  44 => 10,  33 => 6,  195 => 81,  191 => 80,  186 => 69,  179 => 67,  175 => 73,  170 => 71,  162 => 66,  158 => 65,  153 => 51,  145 => 58,  141 => 57,  136 => 55,  128 => 50,  124 => 36,  119 => 47,  111 => 42,  107 => 27,  102 => 25,  94 => 24,  90 => 13,  85 => 31,  77 => 26,  73 => 25,  68 => 23,  60 => 16,  56 => 17,  51 => 15,  45 => 12,  38 => 7,  31 => 5,  28 => 4,);
    }
}
