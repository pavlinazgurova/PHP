<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_92728739dec9375701dd7e19f30429fbda93a80c31c9ce8abb7dafb60a4cd372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac4cbc36663091206cd85fa99bf2f6ec0e4faa1b6991fcbad488a705b9cb55ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4cbc36663091206cd85fa99bf2f6ec0e4faa1b6991fcbad488a705b9cb55ae->enter($__internal_ac4cbc36663091206cd85fa99bf2f6ec0e4faa1b6991fcbad488a705b9cb55ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac4cbc36663091206cd85fa99bf2f6ec0e4faa1b6991fcbad488a705b9cb55ae->leave($__internal_ac4cbc36663091206cd85fa99bf2f6ec0e4faa1b6991fcbad488a705b9cb55ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce908b85c810dd1483bc3dc8e1ca6273ef22cf2b151ec2bf2496c9d6b4f06182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce908b85c810dd1483bc3dc8e1ca6273ef22cf2b151ec2bf2496c9d6b4f06182->enter($__internal_ce908b85c810dd1483bc3dc8e1ca6273ef22cf2b151ec2bf2496c9d6b4f06182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce908b85c810dd1483bc3dc8e1ca6273ef22cf2b151ec2bf2496c9d6b4f06182->leave($__internal_ce908b85c810dd1483bc3dc8e1ca6273ef22cf2b151ec2bf2496c9d6b4f06182_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef30d5b76ac4c3360319b716a4ea624ac71da9fe273db3514749a0db7a1950db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef30d5b76ac4c3360319b716a4ea624ac71da9fe273db3514749a0db7a1950db->enter($__internal_ef30d5b76ac4c3360319b716a4ea624ac71da9fe273db3514749a0db7a1950db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef30d5b76ac4c3360319b716a4ea624ac71da9fe273db3514749a0db7a1950db->leave($__internal_ef30d5b76ac4c3360319b716a4ea624ac71da9fe273db3514749a0db7a1950db_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3094d6b0013973bea244c63683e859c87cc0af35082234640c544a9db19712bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3094d6b0013973bea244c63683e859c87cc0af35082234640c544a9db19712bb->enter($__internal_3094d6b0013973bea244c63683e859c87cc0af35082234640c544a9db19712bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3094d6b0013973bea244c63683e859c87cc0af35082234640c544a9db19712bb->leave($__internal_3094d6b0013973bea244c63683e859c87cc0af35082234640c544a9db19712bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
