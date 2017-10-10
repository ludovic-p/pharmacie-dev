<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10d1c0efd6486d0632a17132315f811474f872944086521cd54e435429bc8270 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a8f8339b99d327cd2f64f002a0fee03fb69810bc2e0c794694b423a1585b1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8f8339b99d327cd2f64f002a0fee03fb69810bc2e0c794694b423a1585b1a9->enter($__internal_7a8f8339b99d327cd2f64f002a0fee03fb69810bc2e0c794694b423a1585b1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_13eca17c5f722fc1d43509a5c7ec2c35939076da7abd3b855dbf5b5435beb16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13eca17c5f722fc1d43509a5c7ec2c35939076da7abd3b855dbf5b5435beb16e->enter($__internal_13eca17c5f722fc1d43509a5c7ec2c35939076da7abd3b855dbf5b5435beb16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8f8339b99d327cd2f64f002a0fee03fb69810bc2e0c794694b423a1585b1a9->leave($__internal_7a8f8339b99d327cd2f64f002a0fee03fb69810bc2e0c794694b423a1585b1a9_prof);

        
        $__internal_13eca17c5f722fc1d43509a5c7ec2c35939076da7abd3b855dbf5b5435beb16e->leave($__internal_13eca17c5f722fc1d43509a5c7ec2c35939076da7abd3b855dbf5b5435beb16e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e5b9b57fee9bf960160b88ff37f9f56a2e526417008a210ef23800c251a13e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5b9b57fee9bf960160b88ff37f9f56a2e526417008a210ef23800c251a13e9->enter($__internal_8e5b9b57fee9bf960160b88ff37f9f56a2e526417008a210ef23800c251a13e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_731047064d0db1565fc987d29484f82c03fc016a560b54cfd64b411a38bc2aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731047064d0db1565fc987d29484f82c03fc016a560b54cfd64b411a38bc2aa7->enter($__internal_731047064d0db1565fc987d29484f82c03fc016a560b54cfd64b411a38bc2aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_731047064d0db1565fc987d29484f82c03fc016a560b54cfd64b411a38bc2aa7->leave($__internal_731047064d0db1565fc987d29484f82c03fc016a560b54cfd64b411a38bc2aa7_prof);

        
        $__internal_8e5b9b57fee9bf960160b88ff37f9f56a2e526417008a210ef23800c251a13e9->leave($__internal_8e5b9b57fee9bf960160b88ff37f9f56a2e526417008a210ef23800c251a13e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\pharmacie-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
