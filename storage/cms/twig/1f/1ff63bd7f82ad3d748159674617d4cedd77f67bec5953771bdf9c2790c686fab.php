<?php

/* C:\xampp\htdocs\sarkarspeaks/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_1d95df40d8276da825ae714ae71f0c521fdd75ca5396d9a3b7c294d71f2afae8 extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Ria Sarkar. All Rights Reserved.  
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/about");
        echo "\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/contact");
        echo "\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
\t\t\t\t&copy;  {{ \"now\"|date(\"Y\") }} Ria Sarkar. All Rights Reserved.  
            </div>
            <div class=\"col-sm-4\">
                <ul class=\"pull-right\">
                    <li><a href=\"{{ 'home'|page }}\">Home</a></li>
                    <li><a href=\"{{ 'samples/about'|page }}\">About Us</a></li>
                    <li><a href=\"#\">Faq</a></li>
                    <li><a href=\"{{ 'samples/contact'|page }}\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>", "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/partials/footer.htm", "");
    }
}
