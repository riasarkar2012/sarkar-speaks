<?php

/* C:\xampp\htdocs\sarkarspeaks/themes/jtherczeg-corlate/pages/error.htm */
class __TwigTemplate_a9eccf15910e80cfa66576193135abdefae00dfcf97ce51ba4a13eb5f5282b5a extends Twig_Template
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
        // line 1
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>Ooops! An Error Occured.</h1>
        <p>We're so sorry, the page you requested cannot be displayed due to an error.</p>
        <p><small><em>Error code: 500</em></small></p>
\t\t<a class=\"btn btn-primary\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/pages/error.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"error\" class=\"container text-center\">
        <h1>Ooops! An Error Occured.</h1>
        <p>We're so sorry, the page you requested cannot be displayed due to an error.</p>
        <p><small><em>Error code: 500</em></small></p>
\t\t<a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->", "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/pages/error.htm", "");
    }
}
