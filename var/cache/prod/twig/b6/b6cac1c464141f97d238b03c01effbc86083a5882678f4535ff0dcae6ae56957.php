<?php

/* testBundle:Default:index.html.twig */
class __TwigTemplate_8b51b68c2f624f44b4058a2ff418536ce192bf7b23e1ebb5ff59f26c1da87038 extends Twig_Template
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
        echo "Hello World test!
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "testBundle:Default:index.html.twig", "C:\\wamp64\\www\\test_symfony\\src\\testBundle/Resources/views/Default/index.html.twig");
    }
}
