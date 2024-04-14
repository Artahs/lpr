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

/* produit/show.html.twig */
class __TwigTemplate_801a6088ba843b7a7a9bf1e9d9b1882a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/show.html.twig", 1);
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
        echo "\t<main class=\"w-100 h-100\" style=\"overflow:hidden; margin-bottom:1%;\">
\t\t<section class=\"produit-section\">
\t\t\t<div class=\"d-flex\" style=\"justify-content:space-between;\">
\t\t\t\t<div class=\"mx-4\">
\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        echo "\" class=\"button-retour\">
\t\t\t\t\t\t<div class=\"button-retour-box\">
\t\t\t\t\t\t\t<span class=\"button-retour-elem\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 46 40\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"button-retour-elem\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 46 40\">
\t\t\t\t\t\t\t\t\t<path d=\"M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<a class=\"mx-4 produit-edit\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/wkvacbiw.json\" trigger=\"hover\" colors=\"primary:#ffffff\" style=\"width:25px;height:25px\"></lord-icon>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 30
            echo twig_include($this->env, $context, "produit/_delete_form.html.twig");
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 33
        echo "\t\t\t</div>
\t\t\t<div class=\"d-flex row mt-2\" style=\"color:white; height:50%;\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"container d-flex justify-content-center\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36)), "html", null, true);
        echo "\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
\t\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "html", null, true);
        echo "</p>

\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<span class=\"produit-prix\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 43, $this->source); })()), "prix", [], "any", false, false, false, 43), "html", null, true);
        echo "€</span>
\t\t\t\t\t\t";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            echo "\t\t\t\t\t\t\t<a class=\"mx-4 btn-compte\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_au_panier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">Ajouter au panier</a>
\t\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t\t<a class=\"mx-4 produit-prix button-achat\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a>
\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
\t";
        // line 54
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
        return "produit/show.html.twig";
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
        return array (  156 => 54,  149 => 49,  143 => 47,  137 => 45,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  115 => 36,  110 => 33,  104 => 30,  98 => 27,  95 => 26,  93 => 25,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<main class=\"w-100 h-100\" style=\"overflow:hidden; margin-bottom:1%;\">
\t\t<section class=\"produit-section\">
\t\t\t<div class=\"d-flex\" style=\"justify-content:space-between;\">
\t\t\t\t<div class=\"mx-4\">
\t\t\t\t\t<a href=\"{{ path('app_produit_index') }}\" class=\"button-retour\">
\t\t\t\t\t\t<div class=\"button-retour-box\">
\t\t\t\t\t\t\t<span class=\"button-retour-elem\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 46 40\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"button-retour-elem\">
\t\t\t\t\t\t\t\t<svg viewbox=\"0 0 46 40\">
\t\t\t\t\t\t\t\t\t<path d=\"M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t{% if is_granted('ROLE_ADMIN')%}
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<a class=\"mx-4 produit-edit\" href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\">
\t\t\t\t\t\t\t<lord-icon src=\"https://cdn.lordicon.com/wkvacbiw.json\" trigger=\"hover\" colors=\"primary:#ffffff\" style=\"width:25px;height:25px\"></lord-icon>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{{ include('produit/_delete_form.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"d-flex row mt-2\" style=\"color:white; height:50%;\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"container d-flex justify-content-center\"><img src=\"{{asset(produit.image)}}\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<h1>{{produit.nom}}</h1>
\t\t\t\t\t<p>{{produit.description}}</p>

\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<span class=\"produit-prix\">{{produit.prix}}€</span>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a class=\"mx-4 btn-compte\" href=\"{{path('ajouter_au_panier', {'id': produit.id})}}\">Ajouter au panier</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"mx-4 produit-prix button-achat\" href=\"{{ path('app_login') }}\">Se connecter</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</main>
\t{{ include('footer.html.twig') }}

{% endblock %}
", "produit/show.html.twig", "C:\\wamp64\\www\\projet\\BUT2_S4\\INFO4_PHP\\lpr\\templates\\produit\\show.html.twig");
    }
}
