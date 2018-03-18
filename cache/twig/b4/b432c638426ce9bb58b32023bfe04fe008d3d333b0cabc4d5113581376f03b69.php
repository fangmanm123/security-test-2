<?php

/* modular/project-intro.html.twig */
class __TwigTemplate_44252a41fcee7455f8102d08795d8b07543937ada442d44e5099ec3304abe33e extends Twig_Template
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
        echo "<section class=\"project-intro\">
\t<div class=\"project-intro-container\">

\t\t<div class=\"project-intro-info-container\">
\t\t\t<div class=\"project-intro-info\" data-start=\"opacity:1;;transform:translateY(0%);\" data-top-bottom=\"opacity:0;;transform:translateY(50%);\">
\t\t\t\t<h2>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
\t\t\t\t";
        // line 7
        echo ($context["content"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-intro-image-container\">

\t\t\t<div class=\"project-intro-image-laptop\" style=\"background-image: url(' ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_laptop", array());
        echo "');\" data-start=\"background-position:center -.5%;\" data-top-bottom=\"background-position:center 10%;\"></div>

\t\t\t";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "project_img_phone", array())) {
            // line 16
            echo "\t\t\t<div class=\"project-intro-image-phone\" style=\"background-image: url(' ";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_phone", array());
            echo "');\" data-start=\"background-position:63% -.5%;\" data-top-bottom=\"background-position:63% 15%\"></div>
\t\t\t";
        }
        // line 18
        echo "\t\t</div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_intro_background_image", array());
        echo "');\" data-0p=\"transform:scale(1.05);opacity:0.075;z-index:1;\" data-50p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 21,  56 => 18,  48 => 16,  46 => 15,  39 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-intro\">
\t<div class=\"project-intro-container\">

\t\t<div class=\"project-intro-info-container\">
\t\t\t<div class=\"project-intro-info\" data-start=\"opacity:1;;transform:translateY(0%);\" data-top-bottom=\"opacity:0;;transform:translateY(50%);\">
\t\t\t\t<h2>{{ page.title }}</h2>
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-intro-image-container\">

\t\t\t<div class=\"project-intro-image-laptop\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_laptop }}');\" data-start=\"background-position:center -.5%;\" data-top-bottom=\"background-position:center 10%;\"></div>

\t\t\t{% if header.project_img_phone %}
\t\t\t<div class=\"project-intro-image-phone\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_phone }}');\" data-start=\"background-position:63% -.5%;\" data-top-bottom=\"background-position:63% 15%\"></div>
\t\t\t{% endif %}
\t\t</div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_intro_background_image }}');\" data-0p=\"transform:scale(1.05);opacity:0.075;z-index:1;\" data-50p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
</section>
", "modular/project-intro.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-intro.html.twig");
    }
}
