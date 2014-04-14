<?php

/* SonataMediaBundle:Provider:view_youtube.html.twig */
class __TwigTemplate_abdd718fc2ea0f3c65cf16ecb2eb263bb312a08d0edd972ded17e423e37522ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute($this->getContext($context, "options"), "html5")) {
            // line 13
            echo "    <iframe width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "height"), "html", null, true);
            echo "\" src=\"//www.youtube.com/embed/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "player_url_parameters"), "html", null, true);
            echo "\" frameborder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "border"), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "allowFullScreen")) {
                echo " allowfullscreen";
            }
            echo "></iframe>
";
        } else {
            // line 15
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "allowFullScreen")) {
                // line 16
                echo "        ";
                $context["allowFullScreen"] = "true";
                // line 17
                echo "    ";
            } else {
                // line 18
                echo "        ";
                $context["allowFullScreen"] = "false";
                // line 19
                echo "    ";
            }
            // line 20
            echo "    <object width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "width"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "height"), "html", null, true);
            echo "\">
        <param name=\"movie\" value=\"//www.youtube.com/v/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "player_url_parameters"), "html", null, true);
            echo "\"></param>
        <param name=\"allowFullScreen\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "allowFullScreen"), "html", null, true);
            echo "\"></param>
        <param name=\"allowscriptaccess\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "allowScriptAccess"), "html", null, true);
            echo "\"></param>
        <param name=\"wmode\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "wmode"), "html", null, true);
            echo "\">
        
        <embed
            src=\"//www.youtube.com/v/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference"), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "player_url_parameters"), "html", null, true);
            echo "\"
            type=\"application/x-shockwave-flash\"
            allowscriptaccess=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "allowScriptAccess"), "html", null, true);
            echo "\"
            allowfullscreen=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "allowFullScreen"), "html", null, true);
            echo "\"
            width=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "width"), "html", null, true);
            echo "\"
            height=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "height"), "html", null, true);
            echo "\"
            wmode=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "options"), "player_parameters"), "wmode"), "html", null, true);
            echo "\">
        </embed>
    </object>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  677 => 199,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  297 => 77,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 143,  478 => 127,  473 => 140,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 113,  404 => 126,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 101,  307 => 82,  195 => 54,  392 => 120,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 156,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 182,  352 => 123,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 66,  244 => 65,  205 => 38,  200 => 55,  188 => 49,  178 => 28,  118 => 46,  306 => 141,  303 => 140,  300 => 78,  286 => 80,  280 => 131,  274 => 68,  263 => 55,  236 => 109,  216 => 42,  70 => 22,  58 => 22,  76 => 82,  694 => 412,  685 => 406,  680 => 200,  678 => 202,  668 => 195,  663 => 199,  658 => 190,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 192,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 163,  542 => 321,  538 => 319,  526 => 310,  518 => 153,  514 => 152,  509 => 150,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 100,  429 => 255,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  335 => 86,  331 => 187,  326 => 83,  304 => 79,  291 => 75,  272 => 158,  267 => 156,  242 => 59,  152 => 63,  114 => 39,  104 => 18,  553 => 162,  550 => 161,  548 => 170,  541 => 168,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 133,  443 => 132,  424 => 88,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 119,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  346 => 102,  342 => 88,  325 => 93,  313 => 90,  310 => 80,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 30,  155 => 38,  146 => 99,  126 => 45,  124 => 42,  321 => 91,  318 => 80,  316 => 89,  288 => 81,  284 => 72,  279 => 70,  275 => 73,  256 => 61,  250 => 60,  237 => 64,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 62,  170 => 55,  150 => 101,  194 => 53,  186 => 51,  181 => 29,  161 => 71,  110 => 64,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 63,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 52,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 47,  148 => 48,  134 => 80,  127 => 43,  53 => 35,  20 => 1,  270 => 67,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  202 => 77,  198 => 35,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 22,  167 => 48,  165 => 281,  160 => 59,  137 => 46,  113 => 42,  100 => 41,  90 => 27,  81 => 29,  65 => 35,  129 => 56,  97 => 33,  84 => 27,  34 => 15,  77 => 27,  23 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 99,  177 => 48,  169 => 69,  140 => 97,  132 => 47,  128 => 47,  107 => 33,  61 => 23,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 65,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 44,  119 => 93,  102 => 42,  71 => 55,  67 => 30,  63 => 28,  59 => 24,  201 => 56,  196 => 65,  183 => 50,  171 => 102,  166 => 100,  163 => 188,  158 => 75,  156 => 93,  151 => 61,  142 => 46,  138 => 47,  136 => 81,  121 => 51,  117 => 43,  105 => 36,  91 => 29,  62 => 24,  49 => 20,  38 => 17,  93 => 33,  88 => 39,  78 => 24,  28 => 13,  94 => 16,  89 => 37,  85 => 45,  75 => 27,  68 => 22,  56 => 23,  27 => 4,  26 => 13,  24 => 13,  87 => 31,  46 => 19,  44 => 20,  31 => 14,  25 => 3,  21 => 2,  19 => 11,  79 => 33,  72 => 16,  69 => 15,  47 => 21,  40 => 19,  37 => 16,  22 => 12,  246 => 66,  157 => 104,  145 => 59,  139 => 45,  131 => 43,  123 => 95,  120 => 40,  115 => 45,  111 => 40,  108 => 37,  101 => 35,  98 => 34,  96 => 33,  83 => 32,  74 => 23,  66 => 14,  55 => 24,  52 => 23,  50 => 22,  43 => 18,  41 => 18,  35 => 5,  32 => 15,  29 => 14,  209 => 96,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 44,  164 => 72,  162 => 40,  154 => 49,  149 => 62,  147 => 69,  144 => 48,  141 => 67,  133 => 49,  130 => 46,  125 => 42,  122 => 45,  116 => 92,  112 => 47,  109 => 41,  106 => 44,  103 => 32,  99 => 31,  95 => 30,  92 => 31,  86 => 30,  82 => 21,  80 => 28,  73 => 26,  64 => 21,  60 => 17,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  45 => 16,  42 => 15,  39 => 21,  36 => 16,  33 => 18,  30 => 1,);
    }
}
