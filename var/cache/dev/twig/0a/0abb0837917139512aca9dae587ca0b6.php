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

/* apropos.html.twig */
class __TwigTemplate_46685c574eedca6ff86b3daf58559277 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apropos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apropos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "apropos.html.twig", 1);
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
\t\t<section class=\"produit-section container\">
\t\t\t<div>
\t\t\t\t<h1>Qu'est ce que L.P.R</h1>
\t\t\t\t<p>Crée en 2019, L.P.R ou La Percée Républicaine est une communauté issue du mode de jeux Clone Wars Rôle Play du jeux video Garry's Mod.
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAyant rassemblé plus d'une cinquante de joueur au file des années, LPR est une communauté de passionné qui ce rassemble autour de leur passion commune, STAR WARS.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Nos projet les plus récents:</h1>
\t\t\t\t<div>
\t\t\t\t\t<h2><a style=\"color:green;\" href=\"https://la-percee-republicaine.web.app/\">Le 41st RP</a></h2>
\t\t\t\t\t<p>Ouvert le 8 septembre 2023, et fermé le 5 novembre de la même année, le 41st RP était un serveur sur lequelle vous pouviez incarnez l'ensemble des unités de la 41st légion. Adoptant un style ce voulant plus réaliste, le 41st RP proposait une immersion complete avec un style basé sur STAR WARS Battlefront 2</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h2 style=\"color:blue;\">le 501st RP</h2>
\t\t\t\t\t<p>Ouvert le 15 avril 2023, et fermé le 14 juillet 2023, le 501st RP était un serveur sur lequelle vous pouviez prendre par à des batailles aux sein de la 501st légion. Adoptant un style ce voulant au plus proche de la série The Clone Wars, le 501st RP proposait une immersion complete avec le style CGI.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Notre équipe</h1>
\t\t\t\t<p>L'équipe LPR est une petite équipe de bénévole, qui ce découpe en 4 catégorie, les modérateurs, chargés de faire respecter les règles de la communautés, les animateurs, chargés de crée les scénarios et l'animations pour les joueurs du serveur, les développeurs, chargés de programmés le serveur et ses addons afin d'assurer une expérience unique aux joueurs, et enfin les administrateurs, chargés de supervisé l'équipe et le projet.</p>
\t\t\t</div>
\t\t</section>
\t</main>
\t";
        // line 27
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
        return "apropos.html.twig";
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
        return array (  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<main>
\t\t<section class=\"produit-section container\">
\t\t\t<div>
\t\t\t\t<h1>Qu'est ce que L.P.R</h1>
\t\t\t\t<p>Crée en 2019, L.P.R ou La Percée Républicaine est une communauté issue du mode de jeux Clone Wars Rôle Play du jeux video Garry's Mod.
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAyant rassemblé plus d'une cinquante de joueur au file des années, LPR est une communauté de passionné qui ce rassemble autour de leur passion commune, STAR WARS.</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Nos projet les plus récents:</h1>
\t\t\t\t<div>
\t\t\t\t\t<h2><a style=\"color:green;\" href=\"https://la-percee-republicaine.web.app/\">Le 41st RP</a></h2>
\t\t\t\t\t<p>Ouvert le 8 septembre 2023, et fermé le 5 novembre de la même année, le 41st RP était un serveur sur lequelle vous pouviez incarnez l'ensemble des unités de la 41st légion. Adoptant un style ce voulant plus réaliste, le 41st RP proposait une immersion complete avec un style basé sur STAR WARS Battlefront 2</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h2 style=\"color:blue;\">le 501st RP</h2>
\t\t\t\t\t<p>Ouvert le 15 avril 2023, et fermé le 14 juillet 2023, le 501st RP était un serveur sur lequelle vous pouviez prendre par à des batailles aux sein de la 501st légion. Adoptant un style ce voulant au plus proche de la série The Clone Wars, le 501st RP proposait une immersion complete avec le style CGI.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h1>Notre équipe</h1>
\t\t\t\t<p>L'équipe LPR est une petite équipe de bénévole, qui ce découpe en 4 catégorie, les modérateurs, chargés de faire respecter les règles de la communautés, les animateurs, chargés de crée les scénarios et l'animations pour les joueurs du serveur, les développeurs, chargés de programmés le serveur et ses addons afin d'assurer une expérience unique aux joueurs, et enfin les administrateurs, chargés de supervisé l'équipe et le projet.</p>
\t\t\t</div>
\t\t</section>
\t</main>
\t{{ include('footer.html.twig') }}
{% endblock %}
", "apropos.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\apropos.html.twig");
    }
}
