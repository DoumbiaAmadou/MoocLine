<?php

/* mooclineCompteBundle:Admin:invitation.html.twig */
class __TwigTemplate_274e331c325dac17015af1d6f481262f8cac5fb5ffeffa358151a91ade9d5543 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Création compte responsable Organisation ";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 9
    public function block_body_html($context, array $blocks = array())
    {
        // line 10
        echo "

<p> Nous avons étudié votre demande d'intégrer Mooc'Line.
Nous avons le plaisir de vous accueillir dans nos organisations.
</p>
<p>
Veuillez trouver ci-dessous quelques informations utiles.
</p>
<p>
Code d'invitation: <strong> ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "html", null, true);
        echo " </strong>
</p>
<p>
Greetings, <br />
the Mooc'Line team
</p>

";
    }

    public function getTemplateName()
    {
        return "mooclineCompteBundle:Admin:invitation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  53 => 10,  50 => 9,  45 => 5,  42 => 3,  36 => 1,  32 => 9,  29 => 8,  27 => 3,  24 => 2,  22 => 1,);
    }
}
