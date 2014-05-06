<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_b77c81df28e83672b83d7cf44826c320d8014b6606146bd65733d1cc0a23946e extends Twig_Template
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
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 6
            echo call_user_func_array($this->env->getFunction('ckeditor_base_path')->getCallable(), array((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path"))));
            echo "\";
        </script>

        <script type=\"text/javascript\" src=\"";
            // line 9
            echo call_user_func_array($this->env->getFunction('ckeditor_js_path')->getCallable(), array((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path"))));
            echo "\"></script>

        <script type=\"text/javascript\">
            ";
            // line 12
            echo call_user_func_array($this->env->getFunction('ckeditor_destroy')->getCallable(), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            echo "

            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 15
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_plugin')->getCallable(), array((isset($context["plugin_name"]) ? $context["plugin_name"] : $this->getContext($context, "plugin_name")), (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 19
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_styles_set')->getCallable(), array((isset($context["style_name"]) ? $context["style_name"] : $this->getContext($context, "style_name")), (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
            ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 23
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_template')->getCallable(), array((isset($context["template_name"]) ? $context["template_name"] : $this->getContext($context, "template_name")), (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
            ";
            // line 26
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
        return array (  104 => 26,  101 => 25,  92 => 23,  88 => 22,  76 => 19,  72 => 18,  60 => 15,  45 => 9,  39 => 6,  36 => 5,  20 => 1,  256 => 116,  253 => 115,  250 => 114,  246 => 104,  243 => 103,  238 => 105,  236 => 103,  233 => 102,  230 => 101,  225 => 107,  223 => 101,  220 => 100,  217 => 99,  209 => 93,  204 => 91,  199 => 90,  194 => 88,  188 => 85,  184 => 84,  176 => 79,  172 => 78,  169 => 77,  167 => 76,  127 => 39,  123 => 38,  119 => 37,  110 => 31,  98 => 21,  95 => 20,  89 => 13,  85 => 21,  80 => 11,  77 => 10,  71 => 8,  65 => 118,  63 => 114,  56 => 14,  54 => 99,  51 => 12,  49 => 20,  42 => 15,  35 => 8,  26 => 2,  75 => 28,  69 => 17,  62 => 21,  53 => 15,  43 => 9,  40 => 10,  34 => 4,  29 => 4,);
    }
}
