<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_129f8cf6222eea12021b0dfd8488ffb00086e253748b10b8cb8c0b716bc0168c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129f8cf6222eea12021b0dfd8488ffb00086e253748b10b8cb8c0b716bc0168c->enter($__internal_129f8cf6222eea12021b0dfd8488ffb00086e253748b10b8cb8c0b716bc0168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0c58899ebdb30d96b48d8584519526f24f04c9bf6705dd7853ca4719c0ca5151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c58899ebdb30d96b48d8584519526f24f04c9bf6705dd7853ca4719c0ca5151->enter($__internal_0c58899ebdb30d96b48d8584519526f24f04c9bf6705dd7853ca4719c0ca5151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_129f8cf6222eea12021b0dfd8488ffb00086e253748b10b8cb8c0b716bc0168c->leave($__internal_129f8cf6222eea12021b0dfd8488ffb00086e253748b10b8cb8c0b716bc0168c_prof);

        
        $__internal_0c58899ebdb30d96b48d8584519526f24f04c9bf6705dd7853ca4719c0ca5151->leave($__internal_0c58899ebdb30d96b48d8584519526f24f04c9bf6705dd7853ca4719c0ca5151_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da3d8a12f96cc55d62dbf7fce5a7664f1f64c8435e9aa4387e012bb7a8deb1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3d8a12f96cc55d62dbf7fce5a7664f1f64c8435e9aa4387e012bb7a8deb1c5->enter($__internal_da3d8a12f96cc55d62dbf7fce5a7664f1f64c8435e9aa4387e012bb7a8deb1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba767f106ca1af9ce90e829633c46222e4cbd2c4e814a37495f3b5f2a3cd89df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba767f106ca1af9ce90e829633c46222e4cbd2c4e814a37495f3b5f2a3cd89df->enter($__internal_ba767f106ca1af9ce90e829633c46222e4cbd2c4e814a37495f3b5f2a3cd89df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ba767f106ca1af9ce90e829633c46222e4cbd2c4e814a37495f3b5f2a3cd89df->leave($__internal_ba767f106ca1af9ce90e829633c46222e4cbd2c4e814a37495f3b5f2a3cd89df_prof);

        
        $__internal_da3d8a12f96cc55d62dbf7fce5a7664f1f64c8435e9aa4387e012bb7a8deb1c5->leave($__internal_da3d8a12f96cc55d62dbf7fce5a7664f1f64c8435e9aa4387e012bb7a8deb1c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67c4cabf26d165214f885a38687b4b8b7494ebe1bdc6376961265fa6c7894d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c4cabf26d165214f885a38687b4b8b7494ebe1bdc6376961265fa6c7894d6e->enter($__internal_67c4cabf26d165214f885a38687b4b8b7494ebe1bdc6376961265fa6c7894d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd1ed9253973f149a23aa6c5e41c9215c2d32cec116391a00bb6444bef3a1dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1ed9253973f149a23aa6c5e41c9215c2d32cec116391a00bb6444bef3a1dc2->enter($__internal_cd1ed9253973f149a23aa6c5e41c9215c2d32cec116391a00bb6444bef3a1dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cd1ed9253973f149a23aa6c5e41c9215c2d32cec116391a00bb6444bef3a1dc2->leave($__internal_cd1ed9253973f149a23aa6c5e41c9215c2d32cec116391a00bb6444bef3a1dc2_prof);

        
        $__internal_67c4cabf26d165214f885a38687b4b8b7494ebe1bdc6376961265fa6c7894d6e->leave($__internal_67c4cabf26d165214f885a38687b4b8b7494ebe1bdc6376961265fa6c7894d6e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4b231693b7ecfd9e55055012660637b043649749daba11eda9b258e2bd07017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b231693b7ecfd9e55055012660637b043649749daba11eda9b258e2bd07017->enter($__internal_d4b231693b7ecfd9e55055012660637b043649749daba11eda9b258e2bd07017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_999c4d7da281a75c5d3bced64ad5b049f369cf2b7208461c6a925adb8d0403e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999c4d7da281a75c5d3bced64ad5b049f369cf2b7208461c6a925adb8d0403e2->enter($__internal_999c4d7da281a75c5d3bced64ad5b049f369cf2b7208461c6a925adb8d0403e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_999c4d7da281a75c5d3bced64ad5b049f369cf2b7208461c6a925adb8d0403e2->leave($__internal_999c4d7da281a75c5d3bced64ad5b049f369cf2b7208461c6a925adb8d0403e2_prof);

        
        $__internal_d4b231693b7ecfd9e55055012660637b043649749daba11eda9b258e2bd07017->leave($__internal_d4b231693b7ecfd9e55055012660637b043649749daba11eda9b258e2bd07017_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pharmacie-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
