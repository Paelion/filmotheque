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

/* filmotheque/series.html.twig */
class __TwigTemplate_90a55453c0b8e2ddd56176ebef31f501ff8467bd4398db4bee85c9d037ea4738 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmotheque/series.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "filmotheque/series.html.twig", 1);
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
                <ul>
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 10
            echo "                        <li ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("singleSerie", ["id" => twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "nom", [], "any", false, false, false, 10)), "html", null, true);
            echo "<br>Produite de ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "anneeDebut", [], "any", false, false, false, 10), "d/m/Y "), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "anneeFin", [], "any", false, false, false, 10), "d/m/Y "), "html", null, true);
            echo "<br>Nombre de saisons : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "saisons", [], "any", false, false, false, 10), "html", null, true);
            echo "</a> </li><br>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </ul>

            </div>
            <div class=\"col-6\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSerie"]) || array_key_exists("formSerie", $context) ? $context["formSerie"] : (function () { throw new RuntimeError('Variable "formSerie" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formSerie"]) || array_key_exists("formSerie", $context) ? $context["formSerie"] : (function () { throw new RuntimeError('Variable "formSerie" does not exist.', 17, $this->source); })()), 'rest');
        echo "
                <select name=\"categorieId\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 20
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Catégorie : ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 20)), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSerie"]) || array_key_exists("formSerie", $context) ? $context["formSerie"] : (function () { throw new RuntimeError('Variable "formSerie" does not exist.', 24, $this->source); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "filmotheque/series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  119 => 22,  108 => 20,  104 => 19,  99 => 17,  95 => 16,  89 => 12,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">
                <ul>
                    {% for serie in series %}
                        <li {{serie.id}}><a href=\"{{ path('singleSerie', {id: serie.id})}}\">{{serie.nom|capitalize}}<br>Produite de {{ serie.anneeDebut | date('d/m/Y ')}} à {{ serie.anneeFin | date('d/m/Y ')}}<br>Nombre de saisons : {{ serie.saisons }}</a> </li><br>
                    {% endfor %}
                </ul>

            </div>
            <div class=\"col-6\">
                {{form_start(formSerie)}}
                {{form_rest(formSerie)}}
                <select name=\"categorieId\">
                    {% for categorie in categories %}
                        <option value=\"{{categorie.id}}\">Catégorie : {{ categorie.nom |capitalize}}</option>
                    {% endfor %}
                </select><br><br>
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                {{form_end(formSerie)}}

            </div>
        </div>
    </div>
{% endblock %}
", "filmotheque/series.html.twig", "/Users/pa/series/templates/filmotheque/series.html.twig");
    }
}
