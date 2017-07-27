<?php

/* base.html.twig */
class __TwigTemplate_be47cfbbdc10fd7fbe2dd0f97fc323c0ef09dcfcb15b05afb27294b5df36d72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d093671bd0a6753b124488d6e91af1c5c201c42d0ab3153cad9f824ac99e529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d093671bd0a6753b124488d6e91af1c5c201c42d0ab3153cad9f824ac99e529->enter($__internal_2d093671bd0a6753b124488d6e91af1c5c201c42d0ab3153cad9f824ac99e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_2d093671bd0a6753b124488d6e91af1c5c201c42d0ab3153cad9f824ac99e529->leave($__internal_2d093671bd0a6753b124488d6e91af1c5c201c42d0ab3153cad9f824ac99e529_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_b721bfd865a4d232024f2411737201e6d41570c29fbdf36935fa3806c28937cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b721bfd865a4d232024f2411737201e6d41570c29fbdf36935fa3806c28937cb->enter($__internal_b721bfd865a4d232024f2411737201e6d41570c29fbdf36935fa3806c28937cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_b721bfd865a4d232024f2411737201e6d41570c29fbdf36935fa3806c28937cb->leave($__internal_b721bfd865a4d232024f2411737201e6d41570c29fbdf36935fa3806c28937cb_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d237c815848d98c5497687469c5f19c69192a58dfdf70ac81493c791229d33d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d237c815848d98c5497687469c5f19c69192a58dfdf70ac81493c791229d33d7->enter($__internal_d237c815848d98c5497687469c5f19c69192a58dfdf70ac81493c791229d33d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_d237c815848d98c5497687469c5f19c69192a58dfdf70ac81493c791229d33d7->leave($__internal_d237c815848d98c5497687469c5f19c69192a58dfdf70ac81493c791229d33d7_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_aeff5c7864690c5f89115f5c9aec5d9b41a8212cb89b765111871e419d03a45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeff5c7864690c5f89115f5c9aec5d9b41a8212cb89b765111871e419d03a45d->enter($__internal_aeff5c7864690c5f89115f5c9aec5d9b41a8212cb89b765111871e419d03a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_aeff5c7864690c5f89115f5c9aec5d9b41a8212cb89b765111871e419d03a45d->leave($__internal_aeff5c7864690c5f89115f5c9aec5d9b41a8212cb89b765111871e419d03a45d_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_ab8e3722d9c13ca4cf6aa5c4c7d7ef6dd7f233c59b22a67dc7e08b260f10fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8e3722d9c13ca4cf6aa5c4c7d7ef6dd7f233c59b22a67dc7e08b260f10fa41->enter($__internal_ab8e3722d9c13ca4cf6aa5c4c7d7ef6dd7f233c59b22a67dc7e08b260f10fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_ab8e3722d9c13ca4cf6aa5c4c7d7ef6dd7f233c59b22a67dc7e08b260f10fa41->leave($__internal_ab8e3722d9c13ca4cf6aa5c4c7d7ef6dd7f233c59b22a67dc7e08b260f10fa41_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_80bcaee8f1bf31a449bef1785d1d46d5a0579b05f3f4b8a637f69add0ef099dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80bcaee8f1bf31a449bef1785d1d46d5a0579b05f3f4b8a637f69add0ef099dc->enter($__internal_80bcaee8f1bf31a449bef1785d1d46d5a0579b05f3f4b8a637f69add0ef099dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_80bcaee8f1bf31a449bef1785d1d46d5a0579b05f3f4b8a637f69add0ef099dc->leave($__internal_80bcaee8f1bf31a449bef1785d1d46d5a0579b05f3f4b8a637f69add0ef099dc_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_f0fe163fc2131910035fe1045cbd8bbbedd8b9f669c32c6a27155b600e700889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fe163fc2131910035fe1045cbd8bbbedd8b9f669c32c6a27155b600e700889->enter($__internal_f0fe163fc2131910035fe1045cbd8bbbedd8b9f669c32c6a27155b600e700889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f0fe163fc2131910035fe1045cbd8bbbedd8b9f669c32c6a27155b600e700889->leave($__internal_f0fe163fc2131910035fe1045cbd8bbbedd8b9f669c32c6a27155b600e700889_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c275b1c5618208935e93e5ed748314085920724a8428c86fe18cc8260393588d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c275b1c5618208935e93e5ed748314085920724a8428c86fe18cc8260393588d->enter($__internal_c275b1c5618208935e93e5ed748314085920724a8428c86fe18cc8260393588d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c275b1c5618208935e93e5ed748314085920724a8428c86fe18cc8260393588d->leave($__internal_c275b1c5618208935e93e5ed748314085920724a8428c86fe18cc8260393588d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
