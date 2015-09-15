<?php

/* main.twig */
class __TwigTemplate_7a17b8ffbbd5a0d2876ddb08b2f8772c2dcd5ae319a4180483d6bc2e28d4e43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'pic' => array($this, 'block_pic'),
            'mainContent' => array($this, 'block_mainContent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>
  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>

<body>
<!--
  <div id=\"feedback\" class=\"success\">
    <h3>Success!</h3>
    <p>You're reading all about Emerson.</p>
  </div>
-->

";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "
  <div class=\"emerson\">
   ";
        // line 36
        $this->displayBlock('pic', $context, $blocks);
        // line 37
        echo "  </div>

  <main>
    ";
        // line 40
        $this->displayBlock('mainContent', $context, $blocks);
        // line 42
        echo "   </main>
    
";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <title>Ralph Waldo Emerson</title>
        <meta name=\"description\" content=\"Ralph Waldo Emerson\">
        <meta name=\"author\" content=\"Treehouse\">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"css/master.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <script src=\"js/global.js\"></script>
  ";
    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        // line 26
        echo "  <header>
    <h1>Ralph Waldo Emerson</h1>
    <nav>
      <a href=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo " class=\"selected\">About</a>
      <a href=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("contact"), "html", null, true);
        echo ">Contact</a>
    </nav>
  </header>
  ";
    }

    // line 36
    public function block_pic($context, array $blocks = array())
    {
        echo " <img src=\"images/emerson.jpg\" alt=\"Picture of Ralph Waldo Emerson\">";
    }

    // line 40
    public function block_mainContent($context, array $blocks = array())
    {
        // line 41
        echo "    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "  <footer>
    <p>A project from <strong><a href=\"http://teamtreehouse.com\">Treehouse</a></strong></p>
    <nav>
     <a href=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo " class=\"selected\">About</a>
      <a href=";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->site("contact"), "html", null, true);
        echo ">Contact</a>
    </nav>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  127 => 48,  122 => 45,  119 => 44,  115 => 41,  112 => 40,  106 => 36,  98 => 30,  94 => 29,  89 => 26,  86 => 25,  74 => 6,  71 => 5,  65 => 53,  63 => 44,  59 => 42,  57 => 40,  52 => 37,  50 => 36,  46 => 34,  44 => 25,  32 => 15,  30 => 5,  24 => 1,);
    }
}
