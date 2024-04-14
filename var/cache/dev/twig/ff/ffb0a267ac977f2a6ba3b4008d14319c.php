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

/* mentionlegal.html.twig */
class __TwigTemplate_fb111671bda6a7d52c8629bc9f210ab2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentionlegal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentionlegal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentionlegal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<main>
\t\t<section class=\"container produit-section\">
\t\t\t<h1>Mentions légales :</h1>
\t\t\t<div>
\t\t\t\t<h2>Informations sur la structure :</h2>
\t\t\t\t<p>Nom : La Percée Républicaine</p>
\t\t\t\t<p>Contact : <a href=\"https://discord.gg/uBuP3a4tak\">Discord</a></p>
\t\t\t\t<p>Directeur de la publication : Arthas</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h2>Hébergeur du site :</h2>
\t\t\t\t<p>Nom de l'hébergeur : Always Data</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h2>Propriété intellectuelle :</h2>
\t\t\t\t<p>Tous les contenus présents sur ce site (textes, images, vidéos, etc.) sont la propriété intellectuelle de La Percée Républicaine ou de leurs propriétaires respectifs. Toute reproduction, distribution ou utilisation sans autorisation préalable est strictement interdite.</p>

\t\t\t<h2>Protection des données personnelles :</h2>
\t\t<p>Les informations collectées lors de la création d'un compte (pseudo, e-mail, mot de passe) sont utilisées uniquement dans le cadre de l'utilisation du site. Aucune autre donnée n'est collectée. Les données personnelles des utilisateurs ne sont ni vendues ni transmises à des tiers.</p>
\t</div>
</section></main>";
        // line 23
        echo twig_include($this->env, $context, "footer.html.twig");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mentionlegal.html.twig";
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
        return array (  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<main>
\t\t<section class=\"container produit-section\">
\t\t\t<h1>Mentions légales :</h1>
\t\t\t<div>
\t\t\t\t<h2>Informations sur la structure :</h2>
\t\t\t\t<p>Nom : La Percée Républicaine</p>
\t\t\t\t<p>Contact : <a href=\"https://discord.gg/uBuP3a4tak\">Discord</a></p>
\t\t\t\t<p>Directeur de la publication : Arthas</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h2>Hébergeur du site :</h2>
\t\t\t\t<p>Nom de l'hébergeur : Always Data</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h2>Propriété intellectuelle :</h2>
\t\t\t\t<p>Tous les contenus présents sur ce site (textes, images, vidéos, etc.) sont la propriété intellectuelle de La Percée Républicaine ou de leurs propriétaires respectifs. Toute reproduction, distribution ou utilisation sans autorisation préalable est strictement interdite.</p>

\t\t\t<h2>Protection des données personnelles :</h2>
\t\t<p>Les informations collectées lors de la création d'un compte (pseudo, e-mail, mot de passe) sont utilisées uniquement dans le cadre de l'utilisation du site. Aucune autre donnée n'est collectée. Les données personnelles des utilisateurs ne sont ni vendues ni transmises à des tiers.</p>
\t</div>
</section></main>{{ include('footer.html.twig') }}{% endblock %}
", "mentionlegal.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\mentionlegal.html.twig");
    }
}
