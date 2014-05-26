<?php

/* mooclineExoBundle:Default:creation.html.twig */
class __TwigTemplate_7476403344fa9a80035c5609dcca487660c7bf195039e21a64fd9b2b6306fbec extends Twig_Template
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
        echo "<?php 
\tsession_start(); 
\trequire_once (\"auth.php\"); 
?>

<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Mooc'Line</title>

\t
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "   
\t
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
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/livre.jpg"), "html", null, true);
        echo "\" alt=\"Home\" href=\"#\" style=\"heigh:20px ; width : 40px\">
              'Line</a>
        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><span>         </span></li>
            <li class=\"active\"><a href=\"";
        // line 55
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
         \t<form class=\"navbar-form navbar-left\" role=\"search\">
        \t\t<div class=\"form-group\">
        \t\t  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        \t\t</div>
    \t\t   <!-- <button type=\"submit\" class=\"btn btn-default\">Submit</button  -->
\t\t      </form>
  \t\t </li>
            <li><a><span style=​\"margin:​3px -5px 0px 2px;​​\">​|​</span></a></li>
\t\t    <li><a href=\"login.php\">Se connecter</a></li>
\t\t    <li><a href=\"form.php\">S'inscrire</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

\t<div class=\"container\">
        <div class=\"row centered-form\">
\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t    \t\t<h2 class=\"panel-title\"> <strong>Creation QCM</strong> </small></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<form  method=\"POST\" ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "question"), 'row');
        echo "

\t\t\t\t\t\t<h4>Reponses</h4>
\t\t\t\t\t\t<ul class=\"Reponses\" data-prototype=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Reponses"), "vars"), "prototype"), 'widget'));
        echo "\" >
\t\t\t\t\t\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Reponses"));
        foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
            // line 118
            echo "\t\t\t\t\t\t\t\t<li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), 'row');
            echo "</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t

          <script>

          // Récupère le div qui contient la collection de tags
          var collectionHolder = \$('ul.Reponses');

          // ajoute un lien « add a tag »
          var \$addReponseLink = \$('<a href=\"#\" class=\"add_reponse_link\">Ajouter une reponse</a>');
          var \$newLinkLi = \$('<li></li>').append(\$addReponseLink);

          jQuery(document).ready(function() {
              
              collectionHolder.find('li').each(function() {
                addReponseFormDeleteLink(\$(this));
              });

              // ajoute l'ancre « ajouter un tag » et li à la balise ul
              collectionHolder.append(\$newLinkLi);

              \$addReponseLink.on('click', function(e) {
                // empêche le lien de créer un « # » dans l'URL
                e.preventDefault();

                // ajoute un nouveau formulaire tag (voir le prochain bloc de code)
                addReponseForm(collectionHolder, \$newLinkLi);
              });
          });

          function addReponseForm(collectionHolder, \$newLinkLi) {
              // Récupère l'élément ayant l'attribut data-prototype comme expliqué plus tôt
              var prototype = collectionHolder.attr('data-prototype');

              // Remplace '__name__' dans le HTML du prototype par un nombre basé sur
              // la longueur de la collection courante
              var newForm = prototype.replace(/__name__/g, collectionHolder.children().length);

              // Affiche le formulaire dans la page dans un li, avant le lien \"ajouter un tag\"
              var \$newFormLi = \$('<li></li>').append(newForm);
              \$newLinkLi.before(\$newFormLi);
              addReponseFormDeleteLink(\$newFormLi);
          }


          function addReponseFormDeleteLink(\$tagFormLi) {
            var \$removeFormA = \$('<a href=\"#\">Supprimer cette reponse</a>');
            \$tagFormLi.append(\$removeFormA);

            \$removeFormA.on('click', function(e) {
                // empêche le lien de créer un « # » dans l'URL
                e.preventDefault();

                // supprime l'élément li pour le formulaire de tag
                \$tagFormLi.remove();
            });
          }



          </script>

  \t\t\t\t\t</ul><br/>

            ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
            ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\"/>
\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  
  <footer></footer>
</body>
</html>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fstyle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "mooclineExoBundle:Default:creation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 23,  276 => 22,  267 => 13,  255 => 10,  234 => 184,  260 => 20,  250 => 17,  244 => 9,  198 => 134,  160 => 49,  129 => 47,  113 => 40,  104 => 32,  100 => 36,  76 => 27,  232 => 6,  228 => 19,  225 => 18,  205 => 7,  202 => 6,  155 => 120,  65 => 45,  263 => 12,  259 => 19,  256 => 19,  253 => 18,  239 => 8,  172 => 68,  165 => 120,  184 => 9,  180 => 26,  150 => 88,  292 => 85,  223 => 28,  216 => 10,  200 => 19,  188 => 10,  152 => 117,  23 => 3,  148 => 116,  118 => 41,  84 => 28,  249 => 103,  242 => 99,  226 => 92,  210 => 85,  206 => 17,  194 => 17,  190 => 77,  185 => 85,  178 => 71,  174 => 6,  137 => 111,  126 => 59,  70 => 30,  58 => 19,  257 => 105,  251 => 103,  236 => 7,  233 => 6,  222 => 17,  212 => 9,  207 => 78,  197 => 18,  161 => 120,  146 => 52,  134 => 40,  127 => 101,  110 => 39,  81 => 27,  53 => 91,  34 => 15,  114 => 41,  195 => 133,  191 => 12,  186 => 129,  175 => 78,  170 => 71,  153 => 117,  124 => 45,  90 => 32,  77 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 24,  278 => 86,  268 => 85,  264 => 84,  258 => 11,  252 => 80,  247 => 10,  241 => 77,  229 => 73,  220 => 27,  214 => 139,  177 => 127,  169 => 17,  140 => 55,  132 => 59,  128 => 45,  107 => 140,  61 => 20,  273 => 21,  269 => 94,  254 => 105,  243 => 9,  240 => 8,  238 => 98,  235 => 7,  230 => 183,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 89,  208 => 8,  204 => 20,  179 => 67,  159 => 94,  143 => 51,  135 => 48,  119 => 47,  102 => 37,  71 => 25,  67 => 21,  63 => 20,  59 => 19,  38 => 17,  94 => 34,  89 => 30,  85 => 30,  75 => 26,  68 => 25,  56 => 16,  87 => 35,  21 => 1,  26 => 12,  93 => 28,  88 => 32,  78 => 55,  46 => 10,  27 => 8,  44 => 26,  31 => 4,  28 => 5,  201 => 82,  196 => 38,  183 => 27,  171 => 77,  166 => 16,  163 => 62,  158 => 70,  156 => 118,  151 => 53,  142 => 113,  138 => 157,  136 => 48,  121 => 44,  117 => 74,  105 => 38,  91 => 33,  62 => 21,  49 => 15,  24 => 7,  25 => 1,  19 => 1,  79 => 23,  72 => 26,  69 => 49,  47 => 19,  40 => 8,  37 => 7,  22 => 3,  246 => 92,  157 => 118,  145 => 52,  139 => 62,  131 => 48,  123 => 37,  120 => 42,  115 => 51,  111 => 52,  108 => 37,  101 => 30,  98 => 36,  96 => 35,  83 => 34,  74 => 51,  66 => 23,  55 => 18,  52 => 21,  50 => 15,  43 => 9,  41 => 9,  35 => 4,  32 => 10,  29 => 3,  209 => 137,  203 => 136,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 9,  176 => 20,  173 => 126,  168 => 67,  164 => 50,  162 => 65,  154 => 54,  149 => 67,  147 => 58,  144 => 158,  141 => 62,  133 => 78,  130 => 46,  125 => 76,  122 => 58,  116 => 35,  112 => 34,  109 => 38,  106 => 32,  103 => 49,  99 => 35,  95 => 34,  92 => 33,  86 => 31,  82 => 22,  80 => 28,  73 => 27,  64 => 21,  60 => 54,  57 => 19,  54 => 20,  51 => 17,  48 => 14,  45 => 22,  42 => 21,  39 => 15,  36 => 8,  33 => 6,  30 => 3,);
    }
}
