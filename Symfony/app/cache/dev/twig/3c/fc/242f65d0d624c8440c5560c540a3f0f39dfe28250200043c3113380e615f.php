<?php

/* mooclineExoBundle:Create:apercuexport.html.twig */
class __TwigTemplate_3cfc242f65d0d624c8440c5560c540a3f0f39dfe28250200043c3113380e615f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Mooc'Line</title>

  
  ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "   
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
 <body>

  
    <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
          <a class=\"navbar-brand\" href=\"#\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"active\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\">Accueil</a></li>
            <li><a href=\"#\">Cours</a></li>
            <li><a href=\"#\">Institutions</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Spécialité <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                 <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Science</li>
                <li><a href=\"#\">Mathématique</a></li>
                <li><a href=\"#\">Physique</a></li>
                <li><a href=\"#\">Chimie</a></li>
                <li><a href=\"#\">Informatique</a></li>
                <li><a href=\"#\">Science et vie de la Terre</a></li>
                 <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Langue</li>
                <li><a href=\"#\">Anglais</a></li>
                <li><a href=\"#\">Français</a></li>
                <li><a href=\"#\">Espagnol</a></li>
                 <li><a href=\"#\">Chinois</a></li>
                  <li><a href=\"#\">Arabe</a></li>
                <li class=\"divider\"></li>
                <li class=\"dropdown-header\">Economie</li>
                <li><a href=\"#\">Marketing</a></li>
                <li><a href=\"#\">Communication</a></li>
                 <li><a href=\"#\">Management</a></li>
              </ul>
            </li>
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">
          <li>
          <form class=\"navbar-form navbar-left\" role=\"search\">
            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>

          </form>
       </li>
            <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
        <li><a href=\"login.php\">Se connecter</a></li>
        <li><a href=\"form.php\">S'inscrire</a></li>
          </ul>
        </div>
      </div>
    </div>

  <div class=\"container\">
        <div class=\"row centered-form\">
      <div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
              <h2 class=\"panel-title\"> <strong>";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["nomEx"]) ? $context["nomEx"] : $this->getContext($context, "nomEx")), "html", null, true);
        echo " type : ";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo " <br/>nombre de Questions : ";
        echo twig_escape_filter($this->env, (isset($context["numbQuestion"]) ? $context["numbQuestion"] : $this->getContext($context, "numbQuestion")), "html", null, true);
        echo " </strong> </small></h2>
          </div>
          <div class=\"panel-body\">
            








            <form  method=\"POST\" ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            


            ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Questions"));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 118
            echo "

            <h4>";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'label');
            echo "</h4><br/>
            ";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "question"), 'widget');
            echo "


            <h4>Reponses</h4>
            <ul class=\"Reponses\">
              ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "Reponses"));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 127
                echo "                <li>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), 'row');
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "            </ul>
            <br/>
            <hr/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
            ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
           
            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider"), 'row');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exporter"), 'row');
        echo " <br/>
            ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder"), 'row');
        echo " <br/>
            </form>
            <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moocline_exo_createQuestion", array("type" => (isset($context["vtype"]) ? $context["vtype"] : $this->getContext($context, "vtype")))), "html", null, true);
        echo "\">Reprendre</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  <footer></footer>
</body>
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
  ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    
  ";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Create:apercuexport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 20,  250 => 17,  244 => 9,  198 => 134,  160 => 49,  129 => 39,  113 => 40,  104 => 31,  100 => 36,  76 => 27,  232 => 6,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 45,  263 => 20,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 18,  165 => 121,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 85,  23 => 1,  148 => 73,  118 => 36,  84 => 29,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 61,  126 => 59,  70 => 30,  58 => 19,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 120,  146 => 113,  134 => 40,  127 => 101,  110 => 140,  81 => 27,  53 => 91,  34 => 6,  114 => 141,  195 => 133,  191 => 12,  186 => 129,  175 => 78,  170 => 71,  153 => 117,  124 => 44,  90 => 32,  77 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 83,  278 => 86,  268 => 85,  264 => 84,  258 => 106,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 55,  132 => 59,  128 => 45,  107 => 140,  61 => 20,  273 => 96,  269 => 94,  254 => 105,  243 => 9,  240 => 8,  238 => 98,  235 => 7,  230 => 89,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 51,  135 => 61,  119 => 47,  102 => 50,  71 => 19,  67 => 104,  63 => 103,  59 => 14,  38 => 17,  94 => 34,  89 => 38,  85 => 30,  75 => 24,  68 => 24,  56 => 18,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 42,  78 => 26,  46 => 10,  27 => 8,  44 => 9,  31 => 4,  28 => 6,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 12,  151 => 54,  142 => 8,  138 => 157,  136 => 48,  121 => 43,  117 => 74,  105 => 51,  91 => 27,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 2,  79 => 18,  72 => 25,  69 => 22,  47 => 19,  40 => 22,  37 => 7,  22 => 3,  246 => 92,  157 => 118,  145 => 52,  139 => 62,  131 => 52,  123 => 37,  120 => 53,  115 => 51,  111 => 52,  108 => 73,  101 => 30,  98 => 43,  96 => 35,  83 => 34,  74 => 51,  66 => 21,  55 => 18,  52 => 21,  50 => 15,  43 => 15,  41 => 9,  35 => 11,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 19,  164 => 50,  162 => 17,  154 => 69,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 46,  125 => 76,  122 => 58,  116 => 35,  112 => 34,  109 => 38,  106 => 32,  103 => 49,  99 => 135,  95 => 27,  92 => 33,  86 => 23,  82 => 22,  80 => 28,  73 => 28,  64 => 18,  60 => 54,  57 => 19,  54 => 19,  51 => 26,  48 => 14,  45 => 22,  42 => 16,  39 => 15,  36 => 12,  33 => 6,  30 => 11,);
    }
}
