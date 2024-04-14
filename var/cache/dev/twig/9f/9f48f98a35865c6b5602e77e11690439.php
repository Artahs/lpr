<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* registration/register.html.twig */
class __TwigTemplate_0f6e6d66887b6aea3bd4cd0bcfe385ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LPR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <section class=\"d-flex flex-column h-100\">
        <div class=\"container log-form text-color-white\">
            <h1>Créer votre compte</h1>

            <div class=\"d-flex justify-content-center\" style=\"color:white;\">
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), 'errors');
        echo "

                <div class=\"mb-3\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "pseudo", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"mb-3\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "plainPassword", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-check mb-3\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "agreeTerms", [], "any", false, false, false, 57), 'row', ["attr" => ["class" => "form-check-input"]]);
        echo "
                </div>

                <button type=\"submit\" class=\"m-2 btn btn-lg btn-primary\" style=\"color;white;\">S'inscrire</button>
                ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <div class=\"container d-flex justify-content-center\">
            <p>Vous avez déjà un compte? <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connectez-vous !</a></p>
        </div>
    </section>
    ";
        // line 68
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  143 => 68,  137 => 65,  130 => 61,  123 => 57,  117 => 54,  111 => 51,  105 => 48,  99 => 45,  95 => 44,  88 => 39,  78 => 38,  59 => 36,  36 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Inscription
{% endblock %}

{% block body %}
\t<section class=\"d-flex flex-column h-100\">
\t\t<div class=\"container log-form text-color-white\">
\t\t\t<h1>Creer votre compte</h1>

\t\t\t<div class=\"d-flex justify-content-center\">{{ form_errors(registrationForm) }}

\t\t\t\t{{ form_start(registrationForm) }}
\t\t\t\t{{ form_row(registrationForm.pseudo)}}
\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t{{ form_row(registrationForm.plainPassword, {
            label: 'Mot de passe'
        }) }}
\t\t\t\t{{ form_row(registrationForm.agreeTerms,{
                label: \"Accepter les conditions d'utilisation\"}
                ) }}

\t\t\t\t<button type=\"submit\" class=\"btn bg-primary\">S'inscrire</button>
\t\t\t\t{{ form_end(registrationForm) }}</div>
\t\t</div>
\t\t<div class=\"container d-flex justify-content-center\">
\t\t\t<p>Vous avez déjà compte?
\t\t\t\t<a href=\"{{path('app_login')}}\">Connectez-vous !</a>
\t\t\t</p>
\t\t</div>
\t</section>
\t{{ include('footer.html.twig') }}
{% endblock %} #}
{% extends 'base.html.twig' %}

{% block title %}LPR{% endblock %}

{% block body %}
    <section class=\"d-flex flex-column h-100\">
        <div class=\"container log-form text-color-white\">
            <h1>Créer votre compte</h1>

            <div class=\"d-flex justify-content-center\" style=\"color:white;\">
                {{ form_start(registrationForm, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                {{ form_errors(registrationForm) }}

                <div class=\"mb-3\">
                    {{ form_row(registrationForm.pseudo, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"mb-3\">
                    {{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-check mb-3\">
                    {{ form_row(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                </div>

                <button type=\"submit\" class=\"m-2 btn btn-lg btn-primary\" style=\"color;white;\">S'inscrire</button>
                {{ form_end(registrationForm) }}
            </div>
        </div>
        <div class=\"container d-flex justify-content-center\">
            <p>Vous avez déjà un compte? <a href=\"{{ path('app_login') }}\">Connectez-vous !</a></p>
        </div>
    </section>
    {{ include('footer.html.twig') }}
{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\registration\\register.html.twig");
    }
}
