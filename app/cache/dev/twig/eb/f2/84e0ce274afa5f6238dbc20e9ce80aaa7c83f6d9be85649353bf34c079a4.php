<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_ebf284e0ce274afa5f6238dbc20e9ce80aaa7c83f6d9be85649353bf34c079a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 133,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 104,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 125,  236 => 109,  216 => 100,  70 => 33,  58 => 25,  76 => 35,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 184,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  542 => 321,  538 => 319,  526 => 310,  518 => 307,  514 => 306,  509 => 158,  504 => 156,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  439 => 260,  429 => 255,  422 => 134,  420 => 127,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  335 => 188,  331 => 187,  326 => 94,  304 => 86,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  152 => 38,  114 => 44,  104 => 43,  553 => 186,  550 => 326,  548 => 173,  541 => 180,  537 => 178,  531 => 312,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 167,  506 => 166,  502 => 155,  499 => 154,  496 => 161,  489 => 131,  483 => 129,  479 => 153,  475 => 152,  462 => 146,  448 => 140,  443 => 138,  424 => 254,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  346 => 102,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 135,  255 => 74,  184 => 47,  155 => 53,  146 => 34,  126 => 48,  124 => 31,  321 => 91,  318 => 90,  316 => 89,  288 => 81,  284 => 106,  279 => 78,  275 => 103,  256 => 121,  250 => 93,  237 => 70,  232 => 136,  222 => 81,  215 => 78,  191 => 69,  153 => 72,  170 => 79,  150 => 55,  194 => 53,  186 => 111,  181 => 80,  161 => 71,  110 => 45,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 92,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 109,  289 => 112,  281 => 105,  277 => 78,  271 => 76,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 60,  148 => 64,  134 => 45,  127 => 32,  53 => 27,  20 => 11,  270 => 4,  253 => 148,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 88,  185 => 86,  180 => 62,  175 => 43,  172 => 51,  167 => 48,  165 => 77,  160 => 76,  137 => 46,  113 => 46,  100 => 36,  90 => 38,  81 => 20,  65 => 29,  129 => 49,  97 => 63,  84 => 34,  34 => 18,  77 => 27,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 136,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 87,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 86,  268 => 127,  264 => 2,  258 => 81,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 57,  214 => 99,  177 => 61,  169 => 57,  140 => 55,  132 => 44,  128 => 58,  107 => 40,  61 => 29,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 63,  230 => 61,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 107,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  201 => 65,  196 => 65,  183 => 82,  171 => 102,  166 => 100,  163 => 45,  158 => 75,  156 => 93,  151 => 63,  142 => 61,  138 => 61,  136 => 60,  121 => 51,  117 => 45,  105 => 41,  91 => 34,  62 => 28,  49 => 23,  38 => 18,  93 => 39,  88 => 37,  78 => 36,  28 => 14,  94 => 35,  89 => 35,  85 => 36,  75 => 31,  68 => 24,  56 => 28,  27 => 14,  26 => 14,  24 => 13,  87 => 28,  46 => 19,  44 => 20,  31 => 15,  25 => 12,  21 => 11,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 74,  40 => 19,  37 => 20,  22 => 12,  246 => 99,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 41,  108 => 42,  101 => 42,  98 => 38,  96 => 40,  83 => 25,  74 => 52,  66 => 28,  55 => 24,  52 => 24,  50 => 22,  43 => 21,  41 => 20,  35 => 17,  32 => 16,  29 => 15,  209 => 96,  203 => 93,  199 => 67,  193 => 73,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 55,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 69,  106 => 36,  103 => 46,  99 => 41,  95 => 37,  92 => 19,  86 => 43,  82 => 35,  80 => 41,  73 => 34,  64 => 27,  60 => 22,  57 => 18,  54 => 153,  51 => 16,  48 => 15,  45 => 14,  42 => 23,  39 => 25,  36 => 17,  33 => 16,  30 => 15,);
    }
}
