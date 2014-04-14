<?php

/* ::base.html.twig */
class __TwigTemplate_86ef2736fe46eab3cc3ce1db106289188f328e17a7bc9a0ba1cf16892ba4862f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
          <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "scheme") . "://") . $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "httpHost")), "html", null, true);
        echo "\" />
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    ";
        // line 10
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "      <script type=\"text/javascript\">
          \$( document ).ready(function() {
      \$(\"#lang\").change(function() {
    \t  path = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_first_changlocal", array("locale" => "var", "PHPSESSID" => $this->getAttribute($this->getContext($context, "session"), "getId", array(), "method"))), "html", null, true);
        echo "\";

    \t  document.location.href= path.replace(\"var\",\$(this).val());
    \t});
          FB.init({
             appId: ";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "app_id"), "html", null, true);
        echo ",
             status: true,
             cookie: true,
             xfbml: true,
             oauth: true
          });
          FB.Canvas.setSize({height:600});
          setTimeout(\"FB.Canvas.setAutoGrow()\",500);
          (function(d, s, id){
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) {return;}
              js = d.createElement(s); js.id = id;
              js.src = \"//connect.facebook.net/en_US/all.js\";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

      });
          </script>
    <body>
    \t<div id=\"fb-root\"></div>
                   <form>
                  <select id=\"lang\">
                     <option value=\"fr\" ";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "fr")) {
            echo "selected";
        }
        echo ">Français</option>
                     <option value=\"en\"  ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "en")) {
            echo "selected";
        }
        echo ">English</option>
                     <option value=\"es\" ";
        // line 47
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "es")) {
            echo "selected";
        }
        echo ">Español</option>
                     <option value=\"de\"  ";
        // line 48
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "de")) {
            echo "selected";
        }
        echo ">Deutsch</option>
                     <option value=\"it\"  ";
        // line 49
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "it")) {
            echo "selected";
        }
        echo ">Italiano</option>
                     <option value=\"pt\"  ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "pt")) {
            echo "selected";
        }
        echo ">Português</option>
                     <option value=\"ru\"  ";
        // line 51
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale") == "ru")) {
            echo "selected";
        }
        echo ">Russe</option>
                      </select>
               </form>
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "       <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("front/js/uniform/jquery.uniform.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"//connect.facebook.net/en_US/all.js\"></script>
        ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 54,  157 => 12,  152 => 11,  149 => 10,  144 => 7,  138 => 6,  131 => 55,  129 => 54,  121 => 51,  115 => 50,  109 => 49,  103 => 48,  97 => 47,  91 => 46,  85 => 45,  60 => 23,  52 => 18,  47 => 15,  45 => 10,  39 => 8,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }
}
