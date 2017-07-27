<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5cfb65e663d3fd118db6c7e856ee22d038188ca84f535907541cf698660c05b7 extends Twig_Template
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
        $__internal_9c6d75a2c396a7d4743fab83bd3cb4bd94822bf532b91e62f829a060f4fb51b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6d75a2c396a7d4743fab83bd3cb4bd94822bf532b91e62f829a060f4fb51b0->enter($__internal_9c6d75a2c396a7d4743fab83bd3cb4bd94822bf532b91e62f829a060f4fb51b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c6d75a2c396a7d4743fab83bd3cb4bd94822bf532b91e62f829a060f4fb51b0->leave($__internal_9c6d75a2c396a7d4743fab83bd3cb4bd94822bf532b91e62f829a060f4fb51b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_038c430b02d3644d2155227765e6b99defdc9c50f6322c043496ccaddf93086d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038c430b02d3644d2155227765e6b99defdc9c50f6322c043496ccaddf93086d->enter($__internal_038c430b02d3644d2155227765e6b99defdc9c50f6322c043496ccaddf93086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_038c430b02d3644d2155227765e6b99defdc9c50f6322c043496ccaddf93086d->leave($__internal_038c430b02d3644d2155227765e6b99defdc9c50f6322c043496ccaddf93086d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d782e6f0a83bd73bbfa049f5a940f124b079e7f0bdfff8c43b73ebcd49ad9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d782e6f0a83bd73bbfa049f5a940f124b079e7f0bdfff8c43b73ebcd49ad9b8->enter($__internal_3d782e6f0a83bd73bbfa049f5a940f124b079e7f0bdfff8c43b73ebcd49ad9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d782e6f0a83bd73bbfa049f5a940f124b079e7f0bdfff8c43b73ebcd49ad9b8->leave($__internal_3d782e6f0a83bd73bbfa049f5a940f124b079e7f0bdfff8c43b73ebcd49ad9b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_92565c4f250d944fa356e66c19e9265059c1c80f55ff4d9884c116379bb26e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92565c4f250d944fa356e66c19e9265059c1c80f55ff4d9884c116379bb26e67->enter($__internal_92565c4f250d944fa356e66c19e9265059c1c80f55ff4d9884c116379bb26e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92565c4f250d944fa356e66c19e9265059c1c80f55ff4d9884c116379bb26e67->leave($__internal_92565c4f250d944fa356e66c19e9265059c1c80f55ff4d9884c116379bb26e67_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
