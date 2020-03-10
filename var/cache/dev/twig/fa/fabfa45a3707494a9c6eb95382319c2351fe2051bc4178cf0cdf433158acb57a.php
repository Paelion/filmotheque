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

/* filmotheque/index.html.twig */
class __TwigTemplate_37c3edb963643c69dca14a625d5cf11e9045b53cc6a6de4b3e52124c2a120f79 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmotheque/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "filmotheque/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h2>Séries</h2><br>
                <p> Il y a ";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 9, $this->source); })())), "html", null, true);
        echo " series dans la filmothèque.</p>
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series");
        echo "\">
                    <button class=\"btn btn-warning\">Page Series</button>
                </a>
            </div>
            <div class=\"col-6\">
                <h2>Categories : </h2><br>
                <p> Il y a ";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 16, $this->source); })())), "html", null, true);
        echo " categories disponibles.</p><hr>
                <div>
                    <p style=\"font-size: 22px;\">Ajouter une categorie :</p>
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategories"]) || array_key_exists("formCategories", $context) ? $context["formCategories"] : (function () { throw new RuntimeError('Variable "formCategories" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCategories"]) || array_key_exists("formCategories", $context) ? $context["formCategories"] : (function () { throw new RuntimeError('Variable "formCategories" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
                </div>

                <hr>
                <ul>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "                        <li ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 26)), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "serie", [], "any", false, false, false, 26)), "html", null, true);
            echo "</a> </li><br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </ul>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "filmotheque/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  101 => 26,  97 => 25,  89 => 20,  85 => 19,  79 => 16,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h2>Séries</h2><br>
                <p> Il y a {{ series |length }} series dans la filmothèque.</p>
                <a href=\"{{ path('series') }}\">
                    <button class=\"btn btn-warning\">Page Series</button>
                </a>
            </div>
            <div class=\"col-6\">
                <h2>Categories : </h2><br>
                <p> Il y a {{ categories |length }} categories disponibles.</p><hr>
                <div>
                    <p style=\"font-size: 22px;\">Ajouter une categorie :</p>
                    {{ form_start(formCategories) }}
                    {{ form_end(formCategories) }}
                </div>

                <hr>
                <ul>
                    {% for categorie in categories %}
                        <li {{ categorie.id }}><a href=\"{{ path('categories') }}\">{{ categorie.nom|capitalize }}  {{categorie.serie|length}}</a> </li><br>
                    {% endfor %}
                </ul>
            </div>

        </div>
    </div>
{% endblock %}
", "filmotheque/index.html.twig", "/Users/pa/series/templates/filmotheque/index.html.twig");
    }
}
