<?php

/* SonataMediaBundle:Extra:pixlr_editor.html.twig */
class __TwigTemplate_bba817d0fd6efe0721099e626d4266112c20978eb06c1ec4ab9beb77ba70f53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
        <title>Pixlr Editor</title>

        <style>
            .header {
                text-align: center;
                background: none repeat scroll 0 0 #222222;
                border-bottom: 5px solid #B6B6B6;
                padding: 15px 0;
            }

            body.sonata-bc {
               padding-top: 0;
               margin: 0px;
               padding: 0px;
            }

            a.box {
                text-align: center;
                width: 120px;
                float: left;
                margin: 30px;
                margin-left: 35px;
                margin-right: 35px;

                padding: 30px;
                text-decoration: none;

                color: #B6B6B6;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                border:9px solid #B6B6B6;
                background-color:#222222;
                /*-webkit-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*-moz-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*box-shadow: #B3B3B3 3px 3px 3px*/
            }

            a.box:hover {
                color: #222222;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                border:9px solid #222222;
                background-color:#B6B6B6;
                text-decoration: none;
                /*-webkit-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*-moz-box-shadow: #B3B3B3 3px 3px 3px;*/
                /*box-shadow: #B3B3B3 3px 3px 3px*/
            }

            div.content {
                text-align: center;
                width: 550px;
                padding: 30px;
                margin-left: auto;
                margin-right: auto;
            }

            .footer {
                clear: both;
                text-align: center;
            }
        </style>
    </head>

    <body class=\"sonata-bc\">
        <div class=\"header\">
            <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/pixlr.png"), "html", null, true);
        echo "\" alt=\"Pixlr\"/>
        </div>

        <div class=\"content\">
            <div class=\"alert-message block-message warning\">
                ";
        // line 99
        echo $this->env->getExtension('translator')->trans("label.pixlr_warning", array(), "SonataMediaBundle");
        echo "
            </div>

            <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "mode" => "express")), "html", null, true);
        echo "\" class=\"box\">
                <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/express_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Express\" style=\"margin-left: -5px;\"/>
                ";
        // line 104
        echo $this->env->getExtension('translator')->trans("label.pixlr_express_editor", array(), "SonataMediaBundle");
        echo "
            </a>

            <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_pixlr_edit", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "media")), "mode" => "editor")), "html", null, true);
        echo "\" class=\"box\">
                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/extra/pixlr/editor_128.png"), "html", null, true);
        echo "\" alt=\"Pixlr Editor\" style=\"margin-left: -5px;\"/>
                ";
        // line 109
        echo $this->env->getExtension('translator')->trans("label.pixlr_advanced_editor", array(), "SonataMediaBundle");
        echo "
            </a>

            <div style=\"clear: both\"></div>
        </div>

        <div class=\"footer\">
            The Sonata Project is not linked to Pixlr and does not provide supports on the Pixlr service. <br />
            <a href=\"http://pixlr.com\" target=\"_blank\">Pixlr</a> is an external web service provided by <a href=\"http://usa.autodesk.com/adsk/servlet/pc/index?id=17483004&siteID=123112\" target=\"_blank\">Autodesk</a><br>
            <a href=\"http://pixlr.com/terms_of_service/\" target=\"_blank\">Pixlr's Terms of Service</a> and <a href=\"http://pixlr.com/privacy_policy/\" target=\"_blank\">Pixlr's Privacy Policy</a> <br />
        </div>
    </body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  677 => 199,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  297 => 77,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 143,  478 => 127,  473 => 140,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 113,  404 => 126,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 101,  307 => 82,  195 => 54,  392 => 120,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 91,  12 => 34,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 156,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 182,  352 => 123,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 66,  244 => 65,  205 => 84,  200 => 55,  188 => 49,  178 => 28,  118 => 103,  306 => 141,  303 => 140,  300 => 78,  286 => 80,  280 => 131,  274 => 68,  263 => 55,  236 => 109,  216 => 42,  70 => 22,  58 => 29,  76 => 82,  694 => 412,  685 => 406,  680 => 200,  678 => 202,  668 => 195,  663 => 199,  658 => 190,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 192,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 163,  542 => 321,  538 => 319,  526 => 310,  518 => 153,  514 => 152,  509 => 150,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 100,  429 => 255,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  335 => 86,  331 => 187,  326 => 83,  304 => 79,  291 => 75,  272 => 158,  267 => 156,  242 => 59,  152 => 63,  114 => 102,  104 => 43,  553 => 162,  550 => 161,  548 => 170,  541 => 168,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 133,  443 => 132,  424 => 88,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 119,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  346 => 102,  342 => 88,  325 => 93,  313 => 90,  310 => 80,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 74,  155 => 38,  146 => 99,  126 => 45,  124 => 51,  321 => 91,  318 => 80,  316 => 89,  288 => 81,  284 => 72,  279 => 70,  275 => 73,  256 => 61,  250 => 60,  237 => 64,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 63,  170 => 22,  150 => 101,  194 => 79,  186 => 51,  181 => 29,  161 => 71,  110 => 46,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 63,  257 => 149,  251 => 105,  248 => 116,  239 => 97,  228 => 52,  225 => 95,  213 => 126,  211 => 81,  197 => 54,  174 => 23,  148 => 48,  134 => 55,  127 => 43,  53 => 22,  20 => 11,  270 => 67,  253 => 148,  233 => 98,  212 => 88,  210 => 75,  206 => 58,  202 => 77,  198 => 80,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 22,  167 => 48,  165 => 281,  160 => 18,  137 => 48,  113 => 42,  100 => 94,  90 => 38,  81 => 29,  65 => 23,  129 => 46,  97 => 33,  84 => 35,  34 => 16,  77 => 14,  23 => 12,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 101,  229 => 96,  220 => 49,  214 => 99,  177 => 72,  169 => 69,  140 => 58,  132 => 108,  128 => 107,  107 => 44,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 65,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 44,  119 => 43,  102 => 42,  71 => 29,  67 => 30,  63 => 27,  59 => 22,  201 => 56,  196 => 65,  183 => 50,  171 => 102,  166 => 100,  163 => 66,  158 => 64,  156 => 93,  151 => 51,  142 => 46,  138 => 47,  136 => 109,  121 => 51,  117 => 43,  105 => 36,  91 => 29,  62 => 30,  49 => 22,  38 => 17,  93 => 35,  88 => 33,  78 => 24,  28 => 14,  94 => 39,  89 => 37,  85 => 32,  75 => 27,  68 => 22,  56 => 21,  27 => 16,  26 => 13,  24 => 14,  87 => 31,  46 => 19,  44 => 19,  31 => 15,  25 => 3,  21 => 2,  19 => 11,  79 => 31,  72 => 34,  69 => 30,  47 => 20,  40 => 19,  37 => 16,  22 => 12,  246 => 66,  157 => 17,  145 => 60,  139 => 45,  131 => 43,  123 => 95,  120 => 50,  115 => 15,  111 => 41,  108 => 99,  101 => 38,  98 => 34,  96 => 42,  83 => 16,  74 => 23,  66 => 14,  55 => 24,  52 => 26,  50 => 21,  43 => 20,  41 => 23,  35 => 20,  32 => 19,  29 => 25,  209 => 96,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 69,  164 => 19,  162 => 40,  154 => 16,  149 => 62,  147 => 61,  144 => 48,  141 => 67,  133 => 49,  130 => 54,  125 => 42,  122 => 104,  116 => 92,  112 => 41,  109 => 40,  106 => 44,  103 => 39,  99 => 37,  95 => 36,  92 => 41,  86 => 30,  82 => 21,  80 => 15,  73 => 34,  64 => 21,  60 => 17,  57 => 24,  54 => 27,  51 => 21,  48 => 25,  45 => 24,  42 => 18,  39 => 19,  36 => 17,  33 => 18,  30 => 14,);
    }
}
