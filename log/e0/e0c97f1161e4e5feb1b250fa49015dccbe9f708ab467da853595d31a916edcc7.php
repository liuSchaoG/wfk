<?php

/* index.html */
class __TwigTemplate_a3ca43410d20b35c87a4de73c797dbf9f2799e66c1d71adda7451e67fc723914 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t
\t</head>
\t<body style=\"background-color: red;\">
\t\t<h1>这是视图啊111111</h1>
\t\t";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "
\t\t<img src=\"\" alt=\"\" width=\"100%\" height=\"100%\">
\t</body>
</html>





";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Users/pro_liu/project_RET/wfk/app/view/index/index.html");
    }
}
