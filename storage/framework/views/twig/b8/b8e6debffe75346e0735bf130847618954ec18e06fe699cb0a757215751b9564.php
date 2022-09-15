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

/* internal.plugin.functions_stub */
class __TwigTemplate_4d44cf5b131fdd80d43037ab458c8943df1028c66aae488035b628464367cb95 extends Plenty\View\Template
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
        // line 1
        echo "<?php

";
        // line 3
        if (        $this->getFromContext('functionsList', ($context["functionsList"] ?? null)        )) {
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(            $this->getFromContext('functionsList', ($context["functionsList"] ?? null)            ));
            foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
                // line 5
                if (($this->getAttribute(                $this->getFromContext('function', $context["function"]                ), "Description", []) != "")) {
                    // line 6
                    echo twig_escape_filter($this->env, ("\t " . $this->env->getExtension('Plenty\View\Extensions\PHP8CoreExtension')->twig_trim_filter($this->getAttribute(                    $this->getFromContext('method', ($context["method"] ?? null)                    ), "Description", []))), "html", null, true);
                }
                // line 8
                echo "function ";
                echo twig_escape_filter($this->env, $this->getAttribute(                $this->getFromContext('function', $context["function"]                ), "Name", []), "html", null, true);
                echo "(";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(                $this->getFromContext('function', $context["function"]                ), "Params", []));
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
                    // line 10
                    echo twig_escape_filter($this->env, ("
\t\t" . $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "Type", [])), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "Name", []), "html", null, true);
                    // line 11
                    if ( !(null === $this->getAttribute(                    $this->getFromContext('argument', $context["argument"]                    ), "DefaultValue", []))) {
                        // line 12
                        echo twig_escape_filter($this->env, (" = " . $this->getAttribute(                        $this->getFromContext('argument', $context["argument"]                        ), "DefaultValue", [])), "html", null, true);
                    }
                    // line 14
                    if ( !$this->getAttribute(                    $this->getFromContext('loop', $context["loop"]                    ), "last", [])) {
                        // line 15
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
                // line 18
                echo "
\t)";
                // line 19
                if ( !(null === $this->getAttribute(                $this->getFromContext('function', $context["function"]                ), "ReturnType", []))) {
                    // line 20
                    echo twig_escape_filter($this->env, (":" . $this->getAttribute(                    $this->getFromContext('function', $context["function"]                    ), "ReturnType", [])), "html", null, true);
                }
                // line 22
                echo "
\t{ return null; }";
                // line 24
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "internal.plugin.functions_stub";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  101 => 22,  98 => 20,  96 => 19,  93 => 18,  78 => 15,  76 => 14,  73 => 12,  71 => 11,  66 => 10,  49 => 9,  45 => 8,  42 => 6,  40 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "internal.plugin.functions_stub", "");
    }
}
