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

/* filmotheque/singleSerie.html.twig */
class __TwigTemplate_c287875a0d5dbc56d3a3901e729f055a50b8ee1b82a0dd5d65eeff756febedd8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "filmotheque/singleSerie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "filmotheque/singleSerie.html.twig", 1);
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
                <h2>Plus de détails sur le serie : ";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8)), "html", null, true);
        echo "</h2><br>
                <ul>
                        <div>";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10)), "html", null, true);
        echo "<br>Produite de ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 10, $this->source); })()), "anneeDebut", [], "any", false, false, false, 10), "d/m/Y "), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 10, $this->source); })()), "anneeFin", [], "any", false, false, false, 10), "d/m/Y "), "html", null, true);
        echo "<br>Nombre de saisons : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 10, $this->source); })()), "saisons", [], "any", false, false, false, 10), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 10, $this->source); })()), "categorieId", [], "any", false, false, false, 10), "html", null, true);
        echo " </div><br>
                </ul>
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\"><button class=\"btn btn-danger\">Supprimer cette série</button></a>
            </div>
            <div class=\"col-6\">
                <h2>Modifier les informations de cette serie :</h2><br>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 17, $this->source); })()), 'rest');
        echo "
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdate"]) || array_key_exists("formUpdate", $context) ? $context["formUpdate"] : (function () { throw new RuntimeError('Variable "formUpdate" does not exist.', 19, $this->source); })()), 'form_end');
        echo "

            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "filmotheque/singleSerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 19,  94 => 17,  90 => 16,  83 => 12,  70 => 10,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h2>Plus de détails sur le serie : {{series.nom|capitalize}}</h2><br>
                <ul>
                        <div>{{series.nom|capitalize}}<br>Produite de {{ series.anneeDebut | date('d/m/Y ')}} à {{ series.anneeFin | date('d/m/Y ')}}<br>Nombre de saisons : {{ series.saisons }}<br>{{ series.categorieId }} </div><br>
                </ul>
                <a href=\"{{path(\"remove\", {id: series.id})}}\"><button class=\"btn btn-danger\">Supprimer cette série</button></a>
            </div>
            <div class=\"col-6\">
                <h2>Modifier les informations de cette serie :</h2><br>
                {{form_start(formUpdate)}}
                {{form_rest(formUpdate)}}
                <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                {{form_end(formUpdate)}}

            </div>

        </div>
    </div>
{% endblock %}
", "filmotheque/singleSerie.html.twig", "/Users/pa/series/templates/filmotheque/singleSerie.html.twig");
    }
}
