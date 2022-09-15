<?php

use Raider\Environment;
use Raider\Error\LoaderError;
use Raider\Error\RuntimeError;
use Raider\Markup;
use Raider\Sandbox\SecurityError;
use Raider\Sandbox\SecurityNotAllowedTagError;
use Raider\Sandbox\SecurityNotAllowedFilterError;
use Raider\Sandbox\SecurityNotAllowedFunctionError;
use Raider\Source;
use Raider\Template;

/* internal.plugin.class_template_php7 */
class __TwigTemplate_e8a25508b03e9307107a91530d1dfb6d1b733ec4e483b750df75e66bfff0ae0f extends Plenty\View\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        echo "<?php
namespace ";
        // line 4
        echo $this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "Namespace", []);
        echo ";

";
        // line 6
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "UseNamespacesList", [])) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "UseNamespacesList", []));
            foreach ($context['_seq'] as $context["_key"] => $context["useNamespace"]) {
                // line 8
                echo ($this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter(                $this->getFromContext('useNamespace', $context["useNamespace"]                )) . "
");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['useNamespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "Description", []) != "")) {
            // line 13
            echo "/**
";
            // line 14
            echo (" * " . $this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "Description", [])));
            // line 15
            echo "
 */";
            echo "
";
        }
        // line 18
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "isInterface", [])) {
            // line 19
            echo "interface ";
        } else {
            // line 21
            if ($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "isAbstract", [])) {
                // line 22
                echo "abstract ";
            }
            // line 24
            echo "class ";
        }
        // line 26
        echo ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "Name", []) . " ");
        // line 27
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "Extends", [])) {
            // line 28
            echo "extends";
            echo " ";
            echo ($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "Extends", []) . " ");
            echo "
";
        }
        // line 30
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "ImplementsList", [])) {
            // line 31
            echo "implements";
            echo " ";
            echo twig_join_filter($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "ImplementsList", []), ", ");
            echo "
";
        }
        // line 33
        echo "
{";
        // line 35
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "ConstList", [])) {
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "ConstList", []));
            foreach ($context['_seq'] as $context["_key"] => $context["const"]) {
                // line 37
                echo "

";
                // line 38
                if (($this->getAttribute(                $this->getFromContext('const', $context["const"]                ), "Description", []) != "")) {
                    // line 39
                    echo "\t/**
";
                    // line 40
                    echo ("\t * " . $this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter($this->getAttribute(                    $this->getFromContext('const', $context["const"]                    ), "Description", [])));
                    // line 41
                    echo "
\t */
";
                }
                // line 43
                echo "\tconst";
                echo " ";
                echo $this->getAttribute(                $this->getFromContext('const', $context["const"]                ), "Name", []);
                echo " = ";
                echo $this->getAttribute(                $this->getFromContext('const', $context["const"]                ), "Value", []);
                echo ";";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['const'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 46
        echo "
";
        // line 47
        if (($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "PropertyList", []) &&  !$this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "isInterface", []))) {
            // line 48
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "PropertyList", []));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 49
                echo "
";
                // line 50
                if ($this->getAttribute(                $this->getFromContext('property', $context["property"]                ), "DisplayType", [])) {
                    // line 51
                    echo "\t/**
";
                    // line 52
                    echo (("\t * @var " . $this->getAttribute(                    $this->getFromContext('property', $context["property"]                    ), "Type", [])) . "
");
                    // line 53
                    echo "\t */
\t";
                }
                // line 56
                echo $this->getAttribute(                $this->getFromContext('property', $context["property"]                ), "Visibility", []);
                // line 58
                if ($this->getAttribute(                $this->getFromContext('property', $context["property"]                ), "IsStatic", [])) {
                    // line 59
                    echo " static ";
                }
                // line 68
                echo "\t\t\$";
                echo $this->getAttribute(                $this->getFromContext('property', $context["property"]                ), "Name", []);
                // line 71
                if ($this->getAttribute(                $this->getFromContext('property', $context["property"]                ), "Value", [])) {
                    // line 72
                    echo (" = " . $this->getAttribute(                    $this->getFromContext('property', $context["property"]                    ), "Value", []));
                } elseif (($this->getAttribute(                $this->getFromContext('property',                 // line 73
$context["property"]                ), "Visibility", []) == "private")) {
                    // line 74
                    echo " = null";
                }
                // line 76
                echo ";";
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 80
        if ($this->getAttribute(        $this->getFromContext('class', ($context["class"] ?? null)        ), "MethodList", [])) {
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(            $this->getFromContext('class', ($context["class"] ?? null)            ), "MethodList", []));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 82
                echo "
";
                // line 83
                if (($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "Description", []) != "")) {
                    // line 84
                    echo "\t/**
";
                    // line 85
                    echo ("\t * " . $this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter($this->getAttribute(                    $this->getFromContext('method', $context["method"]                    ), "Description", [])));
                    // line 86
                    echo "
\t */
";
                }
                // line 88
                echo "\t";
                // line 89
                if (( !$this->getAttribute(                $this->getFromContext('class', ($context["class"] ?? null)                ), "isInterface", []) && ($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "MethodContent", []) == ""))) {
                    // line 90
                    if ( !$this->getAttribute(                    $this->getFromContext('method', $context["method"]                    ), "isProxy", [])) {
                        // line 91
                        echo "abstract ";
                    }
                }
                // line 94
                if ($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "isProtected", [])) {
                    // line 95
                    echo "protected ";
                } else {
                    // line 97
                    echo "public ";
                }
                // line 99
                if ($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "IsStatic", [])) {
                    // line 100
                    echo "static ";
                }
                // line 102
                echo "function ";
                echo $this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "Name", []);
                echo "(";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "Params", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["argument"]) {
                    // line 104
                    echo ("
\t\t" . $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "Type", []));
                    echo " ";
                    echo $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "Name", []);
                    // line 105
                    if ( !(null === $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "DefaultValue", []))) {
                        // line 106
                        echo (" = " . $this->getAttribute(                        $this->getFromContext('argument', $context["argument"]                        ), "DefaultValue", []));
                    }
                    // line 108
                    if ( !$this->getAttribute(                    $this->getFromContext('loop', $context["loop"]                    ), "last", [])) {
                        // line 109
                        echo ", ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['argument'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "
\t)";
                // line 113
                if ( !(null === $this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "ReturnType", []))) {
                    // line 114
                    echo (":" . $this->getAttribute(                    $this->getFromContext('method', $context["method"]                    ), "ReturnType", []));
                }
                // line 116
                if (($this->getAttribute(                $this->getFromContext('class', ($context["class"] ?? null)                ), "isInterface", []) || ($this->getAttribute(                $this->getFromContext('method', $context["method"]                ), "MethodContent", []) == ""))) {
                    // line 117
                    echo ";";
                } else {
                    // line 119
                    echo "
\t{";
                    // line 120
                    if ( !$this->getAttribute(                    $this->getFromContext('method', $context["method"]                    ), "isProxy", [])) {
                        // line 121
                        echo ("
\t\t" . $this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter($this->getAttribute(                        $this->getFromContext('method', $context["method"]                        ), "MethodContent", [])));
                    }
                    // line 123
                    echo "
\t}";
                }
                // line 125
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 128
        echo "
}";
    }

    public function getTemplateName()
    {
        return "internal.plugin.class_template_php7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 128,  309 => 125,  305 => 123,  301 => 121,  299 => 120,  296 => 119,  293 => 117,  291 => 116,  288 => 114,  286 => 113,  283 => 112,  268 => 109,  266 => 108,  263 => 106,  261 => 105,  256 => 104,  239 => 103,  235 => 102,  232 => 100,  230 => 99,  227 => 97,  224 => 95,  222 => 94,  218 => 91,  216 => 90,  214 => 89,  212 => 88,  207 => 86,  205 => 85,  202 => 84,  200 => 83,  197 => 82,  193 => 81,  191 => 80,  182 => 76,  179 => 74,  177 => 73,  175 => 72,  173 => 71,  170 => 68,  167 => 59,  165 => 58,  163 => 56,  159 => 53,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  143 => 48,  141 => 47,  138 => 46,  126 => 43,  121 => 41,  119 => 40,  116 => 39,  114 => 38,  110 => 37,  106 => 36,  104 => 35,  101 => 33,  94 => 31,  92 => 30,  85 => 28,  83 => 27,  81 => 26,  78 => 24,  75 => 22,  73 => 21,  70 => 19,  68 => 18,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  52 => 11,  44 => 8,  40 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "internal.plugin.class_template_php7", "");
    }
}
