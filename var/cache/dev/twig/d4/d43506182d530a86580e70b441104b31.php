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

/* politiquedeconfidentialite.html.twig */
class __TwigTemplate_6b7e3ddb804920eba7e7a1d9c9bef44a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiquedeconfidentialite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "politiquedeconfidentialite.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "politiquedeconfidentialite.html.twig", 1);
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
\t\t\t<div>
\t\t\t\t<h1>Conditions d'utilisation :</h1>
\t\t\t\t<h4>En utilisant ce site, vous acceptez les conditions d'utilisation suivantes :</h4>

\t\t\t\t<p>
\t\t\t\t\t<b>Création de compte :</b>
\t\t\t\t\tPour accéder à certaines fonctionnalités du site, vous devez créer un compte en fournissant un pseudo, une adresse e-mail et un mot de passe.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Utilisation du compte :</b>
\t\t\t\t\tVous êtes responsable de la confidentialité de votre compte et de vos informations de connexion. Vous vous engagez à ne pas partager vos identifiants de connexion avec des tiers.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Contenus du site :</b>
\t\t\t\t\tLes contenus présents sur ce site (textes, images, vidéos, etc.) sont protégés par des droits d'auteur. Vous vous engagez à ne pas reproduire, distribuer ou utiliser ces contenus sans autorisation préalable.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Utilisation du site :</b>
\t\t\t\t\tVous vous engagez à utiliser ce site conformément à la loi et aux bonnes pratiques. Tout usage abusif ou frauduleux du site est strictement interdit.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Responsabilité :</b>
\t\t\t\t\tLa Percée Républicaine décline toute responsabilité en cas de dommages directs ou indirects résultant de l'utilisation de ce site.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Modification des conditions :</b>
\t\t\t\t\tLa Percée Républicaine se réserve le droit de modifier ces conditions d'utilisation à tout moment. Les modifications prendront effet dès leur publication sur le site.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>En utilisant ce site, vous acceptez de respecter ces conditions d'utilisation. Si vous n'êtes pas d'accord avec ces conditions, veuillez ne pas utiliser ce site.</b>
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t</main>
\t";
        // line 39
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
        return "politiquedeconfidentialite.html.twig";
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
        return array (  106 => 39,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<main>
\t\t<section class=\"container produit-section\">
\t\t\t<div>
\t\t\t\t<h1>Conditions d'utilisation :</h1>
\t\t\t\t<h4>En utilisant ce site, vous acceptez les conditions d'utilisation suivantes :</h4>

\t\t\t\t<p>
\t\t\t\t\t<b>Création de compte :</b>
\t\t\t\t\tPour accéder à certaines fonctionnalités du site, vous devez créer un compte en fournissant un pseudo, une adresse e-mail et un mot de passe.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Utilisation du compte :</b>
\t\t\t\t\tVous êtes responsable de la confidentialité de votre compte et de vos informations de connexion. Vous vous engagez à ne pas partager vos identifiants de connexion avec des tiers.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Contenus du site :</b>
\t\t\t\t\tLes contenus présents sur ce site (textes, images, vidéos, etc.) sont protégés par des droits d'auteur. Vous vous engagez à ne pas reproduire, distribuer ou utiliser ces contenus sans autorisation préalable.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Utilisation du site :</b>
\t\t\t\t\tVous vous engagez à utiliser ce site conformément à la loi et aux bonnes pratiques. Tout usage abusif ou frauduleux du site est strictement interdit.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Responsabilité :</b>
\t\t\t\t\tLa Percée Républicaine décline toute responsabilité en cas de dommages directs ou indirects résultant de l'utilisation de ce site.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>Modification des conditions :</b>
\t\t\t\t\tLa Percée Républicaine se réserve le droit de modifier ces conditions d'utilisation à tout moment. Les modifications prendront effet dès leur publication sur le site.</p>

\t\t\t\t<p>
\t\t\t\t\t<b>En utilisant ce site, vous acceptez de respecter ces conditions d'utilisation. Si vous n'êtes pas d'accord avec ces conditions, veuillez ne pas utiliser ce site.</b>
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>
\t</main>
\t{{ include('footer.html.twig') }}
{% endblock %}
", "politiquedeconfidentialite.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\politiquedeconfidentialite.html.twig");
    }
}
