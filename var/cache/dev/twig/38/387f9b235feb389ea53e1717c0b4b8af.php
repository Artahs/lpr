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

/* panier/show.html.twig */
class __TwigTemplate_6641fe0f5e8d79685f5aa802ba3e5c6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"produit-section\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<div>
\t\t\t\t<h1>Panier</h1>
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 10
            echo "\t\t\t\t\t\t<div class=\"d-flex m-2\">
\t\t\t\t\t\t\t<div class=\"panier-img\" style=\"background-image:url(";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 11)), "html", null, true);
            echo ");\"></div>
\t\t\t\t\t\t\t<div class=\"d-flex text-center\">
\t\t\t\t\t\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 15), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"button-del mx-4\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimer_du_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 448 512\" class=\"svgIcon-del\">
\t\t\t\t\t\t\t\t\t<path d=\"M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"mx-5\">
\t\t\t\t<h2>Total :
\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t€
\t\t\t\t</h2>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 36
        if ( !twig_test_empty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "\t\t\t<a class=\"btn-compte mx-5\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commander_panier");
            echo "\">Passer la commande</a>
\t\t";
        } else {
            // line 39
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            echo "\" class=\"btn-compte mx-5\">Retourner à la boutique</a>
\t\t";
        }
        // line 41
        echo "\t</section>
\t";
        // line 42
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
        return "panier/show.html.twig";
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
        return array (  144 => 42,  141 => 41,  135 => 39,  129 => 37,  127 => 36,  119 => 31,  112 => 26,  99 => 19,  92 => 15,  87 => 13,  82 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<section class=\"produit-section\">
\t\t<div class=\"d-flex justify-content-between\">
\t\t\t<div>
\t\t\t\t<h1>Panier</h1>
\t\t\t\t<ul>
\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t<div class=\"d-flex m-2\">
\t\t\t\t\t\t\t<div class=\"panier-img\" style=\"background-image:url({{asset(produit.image)}});\"></div>
\t\t\t\t\t\t\t<div class=\"d-flex text-center\">
\t\t\t\t\t\t\t\t<p>{{ produit.nom }}
\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t{{ produit.prix }}
\t\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"button-del mx-4\" href=\"{{ path('supprimer_du_panier', {'id': produit.id}) }}\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 448 512\" class=\"svgIcon-del\">
\t\t\t\t\t\t\t\t\t<path d=\"M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"mx-5\">
\t\t\t\t<h2>Total :
\t\t\t\t\t{{ total }}
\t\t\t\t\t€
\t\t\t\t</h2>
\t\t\t</div>
\t\t</div>
\t\t{% if produits is not empty %}
\t\t\t<a class=\"btn-compte mx-5\" href=\"{{ path('commander_panier') }}\">Passer la commande</a>
\t\t{% else %}
\t\t\t<a href=\"{{ path('app_produit_index') }}\" class=\"btn-compte mx-5\">Retourner à la boutique</a>
\t\t{% endif %}
\t</section>
\t{{ include('footer.html.twig') }}
{% endblock %}
", "panier/show.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\panier\\show.html.twig");
    }
}
