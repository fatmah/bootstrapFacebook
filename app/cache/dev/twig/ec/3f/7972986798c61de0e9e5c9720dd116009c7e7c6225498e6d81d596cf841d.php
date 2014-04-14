<?php

/* ProjetFirstBundle:Default:index.html.twig */
class __TwigTemplate_ec3f7972986798c61de0e9e5c9720dd116009c7e7c6225498e6d81d596cf841d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "locale"), "html", null, true);
        echo "
";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello", array(), "messages");
        // line 5
        if ($this->getContext($context, "fan")) {
            // line 6
            echo " fan
";
        } else {
            // line 8
            echo " not fan
";
        }
        // line 10
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("projet_first_test");
        echo "\">test</a>
<script type=\"text/javascript\">
   \$(document).ready(function() {

\t   ";
        // line 14
        if ((!(null === $this->getContext($context, "loginUrl")))) {
            // line 15
            echo "\t   var url = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "loginUrl"), "html", null, true);
            echo "\";
\t   newUrl = url.replace('amp;','');
\t   FB.getLoginStatus(function(response) {
\t\t   if (response.status === 'connected') {

\t\t\t  // the user is logged in and has authenticated your app, and response.authResponse supplies
\t\t\t // the user's ID, a valid access token, a signed request, and the time the access token and signed request each expire

\t\t   } else if (response.status === 'not_authorized') {
\t\t\t    // the user is logged in to Facebook, but has not authenticated your app
\t\t\t   
\t\t\t   FB.login(function(response) {
    \t\t\t   if (response.authResponse) {
    \t\t\t    \tFB.api('/me', function(response2) {
    \t\t\t       console.log('Good to see you, ' + response2.name + '.');
    \t\t\t     });
    \t\t\t   } else {
    \t\t\t\t   console.log('User cancelled login or did not fully authorize.');
    \t\t\t   }
    \t\t\t });
\t\t   } else {
\t\t\t   // the user isn't logged in to Facebook.
\t\t\t   FB.login(function(response) {
\t\t\t   });
\t\t\t  }
\t   });
\t    \t\t
\t       
\t   ";
        }
        // line 44
        echo "   \t});
</script>
";
    }

    public function getTemplateName()
    {
        return "ProjetFirstBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 44,  57 => 15,  55 => 14,  47 => 10,  43 => 8,  39 => 6,  37 => 5,  35 => 4,  31 => 3,  28 => 2,);
    }
}
