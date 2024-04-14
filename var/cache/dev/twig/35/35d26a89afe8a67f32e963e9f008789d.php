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

/* produit/liste.html.twig */
class __TwigTemplate_fa4adddb2b5d8799440f1b74ff598154 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<main>
\t\t<section style=\"padding-top:10%\">
\t\t\t<div class=\"block-filtre p-2\">
\t\t\t\t<div>
\t\t\t\t\t<h2>Bienvenue sur notre boutique!</h2>
\t\t\t\t\t<p>Retrouvez ici la liste de nos articles uniques et originaux!</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Filtrer:</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"filtre\">
\t\t\t\t\t\t\t<a style=\"color:white;\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index_list");
        echo "\">Tous les produits</a>
\t\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<a style=\"color:white;\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index_list", ["categorie_name" => twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-filtre-droite\">
\t\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        echo "\">
\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/jgnvfzqg.json\" trigger=\"hover\" colors=\"primary:#ffffff\" style=\"width:48px;height:48px\"></lord-icon>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 31
            echo "\t\t\t\t\t<button class=\"Btn-add mx-4\">
\t\t\t\t\t\t<div class=\"sign\">+</div>
\t\t\t\t\t\t<a class=\"text\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            echo "\">Ajouter</a>
\t\t\t\t\t</button>
\t\t\t\t";
        }
        // line 36
        echo "\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div id=\"productsContainer\" class=\"justify-content-center\">
\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 40
            echo "\t\t\t\t\t\t<div class=\"list-card\">
\t\t\t\t\t\t\t<div class=\"list-card-img\" style=\"background-image: url(";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 41)), "html", null, true);
            echo ");\"></div>
\t\t\t\t\t\t\t<div class=\"list-card-txt\">
\t\t\t\t\t\t\t\t<div class=\"list-card-txt\">
\t\t\t\t\t\t\t\t\t<p class=\"list-card-titre\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<span class=\"list-card-prix\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 45), "html", null, true);
            echo "€</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"list-card-btn\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">En savoir plus</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
\t";
        // line 55
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
        return "produit/liste.html.twig";
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
        return array (  170 => 55,  164 => 51,  154 => 47,  149 => 45,  145 => 44,  139 => 41,  136 => 40,  132 => 39,  127 => 36,  121 => 33,  117 => 31,  115 => 30,  106 => 24,  100 => 20,  89 => 18,  85 => 17,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<main>
\t\t<section style=\"padding-top:10%\">
\t\t\t<div class=\"block-filtre p-2\">
\t\t\t\t<div>
\t\t\t\t\t<h2>Bienvenue sur notre boutique!</h2>
\t\t\t\t\t<p>Retrouvez ici la liste de nos articles uniques et originaux!</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<b>Filtrer:</b>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"filtre\">
\t\t\t\t\t\t\t<a style=\"color:white;\" href=\"{{ path('app_produit_index_list') }}\">Tous les produits</a>
\t\t\t\t\t\t\t{% for categorie in categories %}
\t\t\t\t\t\t\t\t<a style=\"color:white;\" href=\"{{ path('app_produit_index_list', {'categorie_name': categorie.nom}) }}\">{{ categorie.nom }}</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-filtre-droite\">
\t\t\t\t\t<a href=\"{{ path('app_produit_index') }}\">
\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/jgnvfzqg.json\" trigger=\"hover\" colors=\"primary:#ffffff\" style=\"width:48px;height:48px\"></lord-icon>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<button class=\"Btn-add mx-4\">
\t\t\t\t\t\t<div class=\"sign\">+</div>
\t\t\t\t\t\t<a class=\"text\" href=\"{{ path('app_produit_new') }}\">Ajouter</a>
\t\t\t\t\t</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div id=\"productsContainer\" class=\"justify-content-center\">
\t\t\t\t\t{% for produit in produits %}
\t\t\t\t\t\t<div class=\"list-card\">
\t\t\t\t\t\t\t<div class=\"list-card-img\" style=\"background-image: url({{asset(produit.image)}});\"></div>
\t\t\t\t\t\t\t<div class=\"list-card-txt\">
\t\t\t\t\t\t\t\t<div class=\"list-card-txt\">
\t\t\t\t\t\t\t\t\t<p class=\"list-card-titre\">{{produit.nom}}</p>
\t\t\t\t\t\t\t\t\t<span class=\"list-card-prix\">{{produit.prix}}€</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"list-card-btn\" href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">En savoir plus</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
\t{{ include('footer.html.twig') }}
{% endblock %}
", "produit/liste.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\produit\\liste.html.twig");
    }
}
