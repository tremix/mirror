<?php

/* themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_f4e57dbd333f200bbd42aec38d06a9cbe4ddb3b79a3242409e6d164eee9d88ce extends Twig_Template
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
        $tags = array("include" => 7, "if" => 13);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
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

        // line 7
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/message.html.twig"), "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"body-page gva-body-page\">
\t";
        // line 10
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", 10)->display($context);
        // line 11
        echo "   ";
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", 11)->display($context);
        // line 12
        echo "\t
\t";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 14
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 18
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 23
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 26
        echo "\t

\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 29
            echo "\t\t\t<div class=\"help show\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 38
        echo "
\t\t";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", array())) {
            // line 40
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 44
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 47
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full\">
\t\t\t\t";
        // line 62
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", 62)->display($context);
        // line 63
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 67
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 73
        echo "
\t\t";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 75
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 83
        echo "\t\t
\t\t";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", array())) {
            // line 85
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 89
        echo "
\t</div>

</div>

";
        // line 94
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", 94)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 94,  199 => 89,  193 => 86,  190 => 85,  188 => 84,  185 => 83,  177 => 78,  172 => 75,  170 => 74,  167 => 73,  160 => 69,  156 => 67,  154 => 66,  149 => 63,  147 => 62,  140 => 57,  131 => 51,  125 => 47,  123 => 46,  119 => 44,  113 => 41,  110 => 40,  108 => 39,  105 => 38,  97 => 33,  91 => 29,  89 => 28,  85 => 26,  79 => 24,  76 => 23,  74 => 22,  68 => 18,  62 => 15,  59 => 14,  57 => 13,  54 => 12,  51 => 11,  49 => 10,  45 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_megaland/templates/page/page-layout/page--layout--fw.html.twig", "C:\\laragon\\www\\mirror\\themes\\gavias_megaland\\templates\\page\\page-layout\\page--layout--fw.html.twig");
    }
}
