<?php

/* C:\xampp\htdocs\sarkarspeaks/themes/jtherczeg-corlate/partials/testimonials.htm */
class __TwigTemplate_5abaaa04e63fe34532d1ce09f1cadd0b7436cd6bb0e8968c45f7a042122d8dcb extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/testimonials1.png");
        echo "\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img src=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/testimonials1.png");
        echo "\" class=\"img-responsive img-circle\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-xs-12 col-sm-4 wow fadeInDown\">
                    <div class=\"testimonial\">
                        <h2>Testimonials</h2>
                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img class=\"img-responsive img-circle\" src=\"{{ 'assets/images/testimonials1.png'|theme }}\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                         <div class=\"media testimonial-inner\">
                            <div class=\"pull-left\">
                                <img src=\"{{ 'assets/images/testimonials1.png'|theme }}\" class=\"img-responsive img-circle\">
                            </div>
                            <div class=\"media-body\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                <span><strong>-John Doe/</strong> Director of corlate.com</span>
                            </div>
                         </div>

                    </div>
                </div>", "C:\\xampp\\htdocs\\sarkarspeaks/themes/jtherczeg-corlate/partials/testimonials.htm", "");
    }
}
