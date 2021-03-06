<?php

/* modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig */
class __TwigTemplate_67bfaf8e3092679532c8a7f388754e7a2b4bb8c162df8849505ad58410a04964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 45, "set" => 46, "for" => 173];
        $filters = ["render" => 45, "clean_class" => 146, "merge" => 157, "without" => 170, "first" => 173];
        $functions = ["attach_library" => 40];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'set', 'for'],
                ['render', 'clean_class', 'merge', 'without', 'first'],
                ['attach_library']
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 39
        echo "
";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_paragraphs/bootstrap-paragraphs"), "html", null, true));
        echo "
";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_paragraphs/bp-carousel"), "html", null, true));
        echo "

";
        // line 45
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bp_width", []))) {
            // line 46
            echo "  ";
            $context["layout_width"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "bp_width", []), "#items", [], "array"), "getString", [], "method");
            // line 47
            echo "  ";
            $context["layout_width_classes"] = [0 => ((("paragraph--width--tiny" ==             // line 48
($context["layout_width"] ?? null))) ? ("paragraph--width--tiny") : ("")), 1 => ((("paragraph--width--narrow" ==             // line 49
($context["layout_width"] ?? null))) ? ("paragraph--width--narrow") : ("")), 2 => ((("paragraph--width--medium" ==             // line 50
($context["layout_width"] ?? null))) ? ("paragraph--width--medium") : ("")), 3 => ((("paragraph--width--wide" ==             // line 51
($context["layout_width"] ?? null))) ? ("paragraph--width--wide") : ("")), 4 => ((("paragraph--width--full" ==             // line 52
($context["layout_width"] ?? null))) ? ("paragraph--width--full") : (""))];
        }
        // line 56
        echo "
";
        // line 59
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bp_background", []))) {
            // line 60
            echo "  ";
            $context["layout_background"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "bp_background", []), "#items", [], "array"), "getString", [], "method");
            // line 61
            echo "  ";
            $context["layout_background_classes"] = [0 => ((("paragraph--color paragraph--color--rgba-black-slight" ==             // line 62
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-slight") : ("")), 1 => ((("paragraph--color paragraph--color--rgba-black-light" ==             // line 63
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-light") : ("")), 2 => ((("paragraph--color paragraph--color--rgba-black-strong" ==             // line 64
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-strong") : ("")), 3 => ((("paragraph--color paragraph--color--rgba-blue-slight" ==             // line 65
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-black-strong") : ("")), 4 => ((("paragraph--color paragraph--color--rgba-blue-light" ==             // line 66
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-blue-light") : ("")), 5 => ((("paragraph--color paragraph--color--rgba-blue-strong" ==             // line 67
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-blue-strong") : ("")), 6 => ((("paragraph--color paragraph--color--rgba-bluegrey-slight" ==             // line 68
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-slight") : ("")), 7 => ((("paragraph--color paragraph--color--rgba-bluegrey-light" ==             // line 69
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-light") : ("")), 8 => ((("paragraph--color paragraph--color--rgba-bluegrey-strong" ==             // line 70
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-bluegrey-strong") : ("")), 9 => ((("paragraph--color paragraph--color--rgba-brown-slight" ==             // line 71
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-slight") : ("")), 10 => ((("paragraph--color paragraph--color--rgba-brown-light" ==             // line 72
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-light") : ("")), 11 => ((("paragraph--color paragraph--color--rgba-brown-strong" ==             // line 73
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-brown-strong") : ("")), 12 => ((("paragraph--color paragraph--color--rgba-cyan-slight" ==             // line 74
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-slight") : ("")), 13 => ((("paragraph--color paragraph--color--rgba-cyan-light" ==             // line 75
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-light") : ("")), 14 => ((("paragraph--color paragraph--color--rgba-cyan-strong" ==             // line 76
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-cyan-strong") : ("")), 15 => ((("paragraph--color paragraph--color--rgba-green-slight" ==             // line 77
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-slight") : ("")), 16 => ((("paragraph--color paragraph--color--rgba-green-light" ==             // line 78
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-light") : ("")), 17 => ((("paragraph--color paragraph--color--rgba-green-strong" ==             // line 79
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-green-strong") : ("")), 18 => ((("paragraph--color paragraph--color--rgba-grey-slight" ==             // line 80
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-slight") : ("")), 19 => ((("paragraph--color paragraph--color--rgba-grey-light" ==             // line 81
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-light") : ("")), 20 => ((("paragraph--color paragraph--color--rgba-grey-strong" ==             // line 82
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-grey-strong") : ("")), 21 => ((("paragraph--color paragraph--color--rgba-indigo-slight" ==             // line 83
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-slight") : ("")), 22 => ((("paragraph--color paragraph--color--rgba-indigo-light" ==             // line 84
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-light") : ("")), 23 => ((("paragraph--color paragraph--color--rgba-indigo-strong" ==             // line 85
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-indigo-strong") : ("")), 24 => ((("paragraph--color paragraph--color--rgba-lime-slight" ==             // line 86
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-slight") : ("")), 25 => ((("paragraph--color paragraph--color--rgba-lime-light" ==             // line 87
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-light") : ("")), 26 => ((("paragraph--color paragraph--color--rgba-lime-strong" ==             // line 88
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-lime-strong") : ("")), 27 => ((("paragraph--color paragraph--color--rgba-orange-slight" ==             // line 89
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-slight") : ("")), 28 => ((("paragraph--color paragraph--color--rgba-orange-light" ==             // line 90
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-light") : ("")), 29 => ((("paragraph--color paragraph--color--rgba-orange-strong" ==             // line 91
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-orange-strong") : ("")), 30 => ((("paragraph--color paragraph--color--rgba-pink-slight" ==             // line 92
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-slight") : ("")), 31 => ((("paragraph--color paragraph--color--rgba-pink-light" ==             // line 93
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-light") : ("")), 32 => ((("paragraph--color paragraph--color--rgba-pink-strong" ==             // line 94
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-pink-strong") : ("")), 33 => ((("paragraph--color paragraph--color--rgba-purple-slight" ==             // line 95
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-slight") : ("")), 34 => ((("paragraph--color paragraph--color--rgba-purple-light" ==             // line 96
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-light") : ("")), 35 => ((("paragraph--color paragraph--color--rgba-purple-strong" ==             // line 97
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-purple-strong") : ("")), 36 => ((("paragraph--color paragraph--color--rgba-red-slight" ==             // line 98
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-slight") : ("")), 37 => ((("paragraph--color paragraph--color--rgba-red-light" ==             // line 99
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-light") : ("")), 38 => ((("paragraph--color paragraph--color--rgba-red-strong" ==             // line 100
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-red-strong") : ("")), 39 => ((("paragraph--color paragraph--color--rgba-stylish-slight" ==             // line 101
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-slight") : ("")), 40 => ((("paragraph--color paragraph--color--rgba-stylish-light" ==             // line 102
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-light") : ("")), 41 => ((("paragraph--color paragraph--color--rgba-stylish-strong" ==             // line 103
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-stylish-strong") : ("")), 42 => ((("paragraph--color paragraph--color--rgba-teal-slight" ==             // line 104
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-slight") : ("")), 43 => ((("paragraph--color paragraph--color--rgba-teal-light" ==             // line 105
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-light") : ("")), 44 => ((("paragraph--color paragraph--color--rgba-teal-strong" ==             // line 106
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-teal-strong") : ("")), 45 => ((("paragraph--color paragraph--color--rgba-white-slight" ==             // line 107
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-slight") : ("")), 46 => ((("paragraph--color paragraph--color--rgba-white-light" ==             // line 108
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-light") : ("")), 47 => ((("paragraph--color paragraph--color--rgba-white-strong" ==             // line 109
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-white-strong") : ("")), 48 => ((("paragraph--color paragraph--color--rgba-yellow-slight" ==             // line 110
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-slight") : ("")), 49 => ((("paragraph--color paragraph--color--rgba-yellow-light" ==             // line 111
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-light") : ("")), 50 => ((("paragraph--color paragraph--color--rgba-yellow-strong" ==             // line 112
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--rgba-yellow-strong") : ("")), 51 => ((("paragraph--color--transparent" ==             // line 113
($context["layout_background"] ?? null))) ? ("paragraph--color--transparent") : ("")), 52 => ((("paragraph--color paragraph--color--primary" ==             // line 114
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--primary") : ("")), 53 => ((("paragraph--color paragraph--color--secondary" ==             // line 115
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--secondary") : ("")), 54 => ((("paragraph--color paragraph--color--success" ==             // line 116
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--success") : ("")), 55 => ((("paragraph--color paragraph--color--info" ==             // line 117
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--info") : ("")), 56 => ((("paragraph--color paragraph--color--warning" ==             // line 118
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--warning") : ("")), 57 => ((("paragraph--color paragraph--color--danger" ==             // line 119
($context["layout_background"] ?? null))) ? ("paragraph--color paragraph--color--danger") : (""))];
        }
        // line 123
        echo "
";
        // line 126
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bp_slide_interval", []))) {
            // line 127
            echo "  ";
            $context["slide_interval"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "bp_slide_interval", []), "#items", [], "array"), "getString", [], "method");
            // line 128
            echo "  ";
            $context["slide_interval_classes"] = [0 => ((("false" ==             // line 129
($context["slide_interval"] ?? null))) ? ("false") : ("")), 1 => ((("1000" ==             // line 130
($context["slide_interval"] ?? null))) ? ("1000") : ("")), 2 => ((("2000" ==             // line 131
($context["slide_interval"] ?? null))) ? ("2000") : ("")), 3 => ((("3000" ==             // line 132
($context["slide_interval"] ?? null))) ? ("3000") : ("")), 4 => ((("4000" ==             // line 133
($context["slide_interval"] ?? null))) ? ("4000") : ("")), 5 => ((("5000" ==             // line 134
($context["slide_interval"] ?? null))) ? ("5000") : ("")), 6 => ((("6000" ==             // line 135
($context["slide_interval"] ?? null))) ? ("6000") : ("")), 7 => ((("7000" ==             // line 136
($context["slide_interval"] ?? null))) ? ("7000") : (""))];
        }
        // line 140
        echo "
";
        // line 144
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 146
($context["paragraph"] ?? null), "bundle", []))), 2 => ((        // line 147
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 3 => ("paragraph--id--" . $this->getAttribute($this->getAttribute(        // line 148
($context["paragraph"] ?? null), "id", []), "value", [])), 4 => "carousel", 5 => "slide"];
        // line 153
        echo "
";
        // line 155
        $context["width_field"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bp_width", []));
        // line 156
        if (($context["width_field"] ?? null)) {
            // line 157
            echo "  ";
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), ($context["layout_width_classes"] ?? null));
        }
        // line 159
        echo "
";
        // line 161
        $context["background_field"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bp_background", []));
        // line 162
        if (($context["background_field"] ?? null)) {
            // line 163
            echo "  ";
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), ($context["layout_background_classes"] ?? null));
        }
        // line 165
        echo "
";
        // line 167
        $context["paragraph_id"] = ("myCarousel-" . $this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "id", []), "value", []));
        // line 168
        echo "
";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "bp_slide_content", "bp_slide_interval", "bp_width", "bp_background"), "html", null, true));
        echo "
<div";
        // line 171
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "setAttribute", [0 => "id", 1 => ($context["paragraph_id"] ?? null)], "method"), "setAttribute", [0 => "data-interval", 1 => ($context["slide_interval_classes"] ?? null)], "method"), "setAttribute", [0 => "data-ride", 1 => "carousel"], "method"), "html", null, true));
        echo ">
  <ol class=\"carousel-indicators\">
    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "bp_slide_content", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 174
                echo "      <li class=\"";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo "active";
                }
                echo "\" data-slide-to=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
                echo "\" data-target=\"#";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["paragraph_id"] ?? null), "html", null, true));
                echo "\"></li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "  </ol>
  <div class=\"carousel-inner\" role=\"list\">
    ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "bp_slide_content", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 179
                echo "      <div class=\"paragraph--layout-slideshow__slide-";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["key"] + 1), "html", null, true));
                echo " item carousel-item";
                if ($this->getAttribute($context["loop"], "first", [])) {
                    echo " active";
                }
                echo "\" role=\"listitem\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["item"], "html", null, true));
                echo "</div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "  </div>
  <a class=\"left carousel-control\" href=\"#";
        // line 182
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["paragraph_id"] ?? null), "html", null, true));
        echo "\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#";
        // line 186
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["paragraph_id"] ?? null), "html", null, true));
        echo "\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 186,  273 => 182,  270 => 181,  251 => 179,  240 => 178,  236 => 176,  217 => 174,  206 => 173,  201 => 171,  197 => 170,  194 => 168,  192 => 167,  189 => 165,  185 => 163,  183 => 162,  181 => 161,  178 => 159,  174 => 157,  172 => 156,  170 => 155,  167 => 153,  165 => 148,  164 => 147,  163 => 146,  162 => 144,  159 => 140,  156 => 136,  155 => 135,  154 => 134,  153 => 133,  152 => 132,  151 => 131,  150 => 130,  149 => 129,  147 => 128,  144 => 127,  142 => 126,  139 => 123,  136 => 119,  135 => 118,  134 => 117,  133 => 116,  132 => 115,  131 => 114,  130 => 113,  129 => 112,  128 => 111,  127 => 110,  126 => 109,  125 => 108,  124 => 107,  123 => 106,  122 => 105,  121 => 104,  120 => 103,  119 => 102,  118 => 101,  117 => 100,  116 => 99,  115 => 98,  114 => 97,  113 => 96,  112 => 95,  111 => 94,  110 => 93,  109 => 92,  108 => 91,  107 => 90,  106 => 89,  105 => 88,  104 => 87,  103 => 86,  102 => 85,  101 => 84,  100 => 83,  99 => 82,  98 => 81,  97 => 80,  96 => 79,  95 => 78,  94 => 77,  93 => 76,  92 => 75,  91 => 74,  90 => 73,  89 => 72,  88 => 71,  87 => 70,  86 => 69,  85 => 68,  84 => 67,  83 => 66,  82 => 65,  81 => 64,  80 => 63,  79 => 62,  77 => 61,  74 => 60,  72 => 59,  69 => 56,  66 => 52,  65 => 51,  64 => 50,  63 => 49,  62 => 48,  60 => 47,  57 => 46,  55 => 45,  50 => 41,  46 => 40,  43 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Bootstrap Paragraphs template for displaying a Carousel.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   - id: The paragraph ID.
 *   - bundle: The type of the paragraph, for example, \"image\" or \"text\".
 *   - authorid: The user ID of the paragraph author.
 *   - createdtime: Formatted creation date. Preprocess functions can
 *     reformat it by calling format_date() with the desired parameters on
 *     \$variables['paragraph']->getCreatedTime().
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('bootstrap_paragraphs/bootstrap-paragraphs') }}
{{ attach_library('bootstrap_paragraphs/bp-carousel') }}

{# Renders Width field. #}
{# Sets class name from values in database. #}
{% if content.bp_width|render %}
  {% set layout_width = content.bp_width['#items'].getString() %}
  {% set layout_width_classes = [
    'paragraph--width--tiny' == layout_width ? 'paragraph--width--tiny',
    'paragraph--width--narrow' == layout_width ? 'paragraph--width--narrow',
    'paragraph--width--medium' == layout_width ? 'paragraph--width--medium',
    'paragraph--width--wide' == layout_width ? 'paragraph--width--wide',
    'paragraph--width--full' == layout_width ? 'paragraph--width--full',
  ]
  %}
{% endif %}

{# Renders Background field. #}
{# Sets class name from values in database. #}
{% if content.bp_background|render %}
  {% set layout_background = content.bp_background['#items'].getString() %}
  {% set layout_background_classes = [
    'paragraph--color paragraph--color--rgba-black-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-black-slight',
    'paragraph--color paragraph--color--rgba-black-light' == layout_background ? 'paragraph--color paragraph--color--rgba-black-light',
    'paragraph--color paragraph--color--rgba-black-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-black-strong',
    'paragraph--color paragraph--color--rgba-blue-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-black-strong',
    'paragraph--color paragraph--color--rgba-blue-light' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-light',
    'paragraph--color paragraph--color--rgba-blue-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-blue-strong',
    'paragraph--color paragraph--color--rgba-bluegrey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-slight',
    'paragraph--color paragraph--color--rgba-bluegrey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-light',
    'paragraph--color paragraph--color--rgba-bluegrey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-bluegrey-strong',
    'paragraph--color paragraph--color--rgba-brown-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-slight',
    'paragraph--color paragraph--color--rgba-brown-light' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-light',
    'paragraph--color paragraph--color--rgba-brown-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-brown-strong',
    'paragraph--color paragraph--color--rgba-cyan-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-slight',
    'paragraph--color paragraph--color--rgba-cyan-light' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-light',
    'paragraph--color paragraph--color--rgba-cyan-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-cyan-strong',
    'paragraph--color paragraph--color--rgba-green-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-green-slight',
    'paragraph--color paragraph--color--rgba-green-light' == layout_background ? 'paragraph--color paragraph--color--rgba-green-light',
    'paragraph--color paragraph--color--rgba-green-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-green-strong',
    'paragraph--color paragraph--color--rgba-grey-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-slight',
    'paragraph--color paragraph--color--rgba-grey-light' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-light',
    'paragraph--color paragraph--color--rgba-grey-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-grey-strong',
    'paragraph--color paragraph--color--rgba-indigo-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-slight',
    'paragraph--color paragraph--color--rgba-indigo-light' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-light',
    'paragraph--color paragraph--color--rgba-indigo-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-indigo-strong',
    'paragraph--color paragraph--color--rgba-lime-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-slight',
    'paragraph--color paragraph--color--rgba-lime-light' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-light',
    'paragraph--color paragraph--color--rgba-lime-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-lime-strong',
    'paragraph--color paragraph--color--rgba-orange-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-slight',
    'paragraph--color paragraph--color--rgba-orange-light' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-light',
    'paragraph--color paragraph--color--rgba-orange-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-orange-strong',
    'paragraph--color paragraph--color--rgba-pink-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-slight',
    'paragraph--color paragraph--color--rgba-pink-light' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-light',
    'paragraph--color paragraph--color--rgba-pink-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-pink-strong',
    'paragraph--color paragraph--color--rgba-purple-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-slight',
    'paragraph--color paragraph--color--rgba-purple-light' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-light',
    'paragraph--color paragraph--color--rgba-purple-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-purple-strong',
    'paragraph--color paragraph--color--rgba-red-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-red-slight',
    'paragraph--color paragraph--color--rgba-red-light' == layout_background ? 'paragraph--color paragraph--color--rgba-red-light',
    'paragraph--color paragraph--color--rgba-red-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-red-strong',
    'paragraph--color paragraph--color--rgba-stylish-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-slight',
    'paragraph--color paragraph--color--rgba-stylish-light' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-light',
    'paragraph--color paragraph--color--rgba-stylish-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-stylish-strong',
    'paragraph--color paragraph--color--rgba-teal-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-slight',
    'paragraph--color paragraph--color--rgba-teal-light' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-light',
    'paragraph--color paragraph--color--rgba-teal-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-teal-strong',
    'paragraph--color paragraph--color--rgba-white-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-white-slight',
    'paragraph--color paragraph--color--rgba-white-light' == layout_background ? 'paragraph--color paragraph--color--rgba-white-light',
    'paragraph--color paragraph--color--rgba-white-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-white-strong',
    'paragraph--color paragraph--color--rgba-yellow-slight' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-slight',
    'paragraph--color paragraph--color--rgba-yellow-light' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-light',
    'paragraph--color paragraph--color--rgba-yellow-strong' == layout_background ? 'paragraph--color paragraph--color--rgba-yellow-strong',
    'paragraph--color--transparent' == layout_background ? 'paragraph--color--transparent',
    'paragraph--color paragraph--color--primary' == layout_background ? 'paragraph--color paragraph--color--primary',
    'paragraph--color paragraph--color--secondary' == layout_background ? 'paragraph--color paragraph--color--secondary',
    'paragraph--color paragraph--color--success' == layout_background ? 'paragraph--color paragraph--color--success',
    'paragraph--color paragraph--color--info' == layout_background ? 'paragraph--color paragraph--color--info',
    'paragraph--color paragraph--color--warning' == layout_background ? 'paragraph--color paragraph--color--warning',
    'paragraph--color paragraph--color--danger' == layout_background ? 'paragraph--color paragraph--color--danger',
  ]
  %}
{% endif %}

{# Renders Slide Interval field. #}
{# Converts database values to classes supplied by template. #}
{% if content.bp_slide_interval|render %}
  {% set slide_interval = content.bp_slide_interval['#items'].getString() %}
  {% set slide_interval_classes = [
    'false' == slide_interval ? 'false',
    '1000' == slide_interval ? '1000',
    '2000' == slide_interval ? '2000',
    '3000' == slide_interval ? '3000',
    '4000' == slide_interval ? '4000',
    '5000' == slide_interval ? '5000',
    '6000' == slide_interval ? '6000',
    '7000' == slide_interval ? '7000',
  ]
  %}
{% endif %}

{# The template default set classes. #}
{# Sets Paragraph ID as class. #}
{%
set classes = [
'paragraph',
'paragraph--type--' ~ paragraph.bundle|clean_class,
view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
'paragraph--id--' ~ paragraph.id.value,
'carousel',
'slide',
]
%}

{# Merges Width field with classes. #}
{% set width_field = content.bp_width|render %}
{% if width_field %}
  {% set classes = classes|merge(layout_width_classes) %}
{% endif %}

{# Merges Background field with classes. #}
{% set background_field = content.bp_background|render %}
{% if background_field %}
  {% set classes = classes|merge(layout_background_classes) %}
{% endif %}

{# Sets Unique ID for Carousel from Paragraph ID. #}
{% set paragraph_id = 'myCarousel-' ~ paragraph.id.value %}

{# Prints Carousel template. #}
{{ content|without('bp_slide_content','bp_slide_interval', 'bp_width', 'bp_background') }}
<div{{ attributes.addClass(classes).setAttribute('id', paragraph_id).setAttribute('data-interval', slide_interval_classes).setAttribute('data-ride', 'carousel') }}>
  <ol class=\"carousel-indicators\">
    {% for key, item in content.bp_slide_content if key|first != '#' %}
      <li class=\"{% if loop.first %}active{% endif %}\" data-slide-to=\"{{ key }}\" data-target=\"#{{ paragraph_id }}\"></li>
    {% endfor %}
  </ol>
  <div class=\"carousel-inner\" role=\"list\">
    {% for key, item in content.bp_slide_content if key|first != '#' %}
      <div class=\"paragraph--layout-slideshow__slide-{{ key + 1 }} item carousel-item{% if loop.first %} active{% endif %}\" role=\"listitem\">{{ item }}</div>
    {% endfor %}
  </div>
  <a class=\"left carousel-control\" href=\"#{{ paragraph_id }}\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#{{ paragraph_id }}\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
", "modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig", "/Applications/MAMP/ur-connected/modules/contrib/bootstrap_paragraphs/templates/paragraph--bp-carousel.html.twig");
    }
}
