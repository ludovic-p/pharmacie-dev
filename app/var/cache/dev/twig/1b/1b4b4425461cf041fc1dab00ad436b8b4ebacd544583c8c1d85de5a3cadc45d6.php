<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ed0fb983b4766fc5489217957cf4fd6b7d7ae01987f8077446dd837f311b537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed0fb983b4766fc5489217957cf4fd6b7d7ae01987f8077446dd837f311b537->enter($__internal_5ed0fb983b4766fc5489217957cf4fd6b7d7ae01987f8077446dd837f311b537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_51a492fd2198932b73d1604613714c2d9f0876c07ab030ccdefa1bf7816d60ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a492fd2198932b73d1604613714c2d9f0876c07ab030ccdefa1bf7816d60ca->enter($__internal_51a492fd2198932b73d1604613714c2d9f0876c07ab030ccdefa1bf7816d60ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ed0fb983b4766fc5489217957cf4fd6b7d7ae01987f8077446dd837f311b537->leave($__internal_5ed0fb983b4766fc5489217957cf4fd6b7d7ae01987f8077446dd837f311b537_prof);

        
        $__internal_51a492fd2198932b73d1604613714c2d9f0876c07ab030ccdefa1bf7816d60ca->leave($__internal_51a492fd2198932b73d1604613714c2d9f0876c07ab030ccdefa1bf7816d60ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91cff5cb1855234f9f214665e64b396bede5bbedeb52397d3645761099f417bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cff5cb1855234f9f214665e64b396bede5bbedeb52397d3645761099f417bc->enter($__internal_91cff5cb1855234f9f214665e64b396bede5bbedeb52397d3645761099f417bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_971027d188b49eeaad91d30b29d967fbdf45086d024b14d5a1aa2830606e153d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971027d188b49eeaad91d30b29d967fbdf45086d024b14d5a1aa2830606e153d->enter($__internal_971027d188b49eeaad91d30b29d967fbdf45086d024b14d5a1aa2830606e153d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_971027d188b49eeaad91d30b29d967fbdf45086d024b14d5a1aa2830606e153d->leave($__internal_971027d188b49eeaad91d30b29d967fbdf45086d024b14d5a1aa2830606e153d_prof);

        
        $__internal_91cff5cb1855234f9f214665e64b396bede5bbedeb52397d3645761099f417bc->leave($__internal_91cff5cb1855234f9f214665e64b396bede5bbedeb52397d3645761099f417bc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d05bb280effd500598180f440f9429185f58c0c690d1331bf73badc3987ef98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d05bb280effd500598180f440f9429185f58c0c690d1331bf73badc3987ef98->enter($__internal_4d05bb280effd500598180f440f9429185f58c0c690d1331bf73badc3987ef98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a7172d72477b9ac6174034aeaa89984008c8cf2cb3338e28d5c079006589bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7172d72477b9ac6174034aeaa89984008c8cf2cb3338e28d5c079006589bcd->enter($__internal_3a7172d72477b9ac6174034aeaa89984008c8cf2cb3338e28d5c079006589bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a7172d72477b9ac6174034aeaa89984008c8cf2cb3338e28d5c079006589bcd->leave($__internal_3a7172d72477b9ac6174034aeaa89984008c8cf2cb3338e28d5c079006589bcd_prof);

        
        $__internal_4d05bb280effd500598180f440f9429185f58c0c690d1331bf73badc3987ef98->leave($__internal_4d05bb280effd500598180f440f9429185f58c0c690d1331bf73badc3987ef98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5696cf1b934876842aed5c1b73372281ad1ea6af47d3a52271361f4844a0827f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5696cf1b934876842aed5c1b73372281ad1ea6af47d3a52271361f4844a0827f->enter($__internal_5696cf1b934876842aed5c1b73372281ad1ea6af47d3a52271361f4844a0827f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9bd967c1ac8396015d148e5dfab819db6644039b26ef7f8371eefee8c367f39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd967c1ac8396015d148e5dfab819db6644039b26ef7f8371eefee8c367f39d->enter($__internal_9bd967c1ac8396015d148e5dfab819db6644039b26ef7f8371eefee8c367f39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9bd967c1ac8396015d148e5dfab819db6644039b26ef7f8371eefee8c367f39d->leave($__internal_9bd967c1ac8396015d148e5dfab819db6644039b26ef7f8371eefee8c367f39d_prof);

        
        $__internal_5696cf1b934876842aed5c1b73372281ad1ea6af47d3a52271361f4844a0827f->leave($__internal_5696cf1b934876842aed5c1b73372281ad1ea6af47d3a52271361f4844a0827f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pharmacie-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
