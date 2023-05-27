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

/* pages/recipe/show.html.twig */
class __TwigTemplate_6160ba4fee2aa83a86a100eed74241591dfe3312e696f7751536d293eb6f9e76 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tSymRecipe -
\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container\">

\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
\t\t<h1 class=\"mt-4\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>

\t\t<div class=\"recipe__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 20, $this->source); })()), "imageFile"), "html", null, true);
        echo "\">
\t\t</div>

\t\t<p>La moyenne de cette recette est de
\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 24, $this->source); })()), "average", [], "any", false, false, false, 24), 2, ".", ","), "html", null, true);
        echo "
\t\t\t/5</p>

\t\t<div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "createdAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 33, $this->source); })()), "time", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t<p>Temps (en minute) :
\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->minutesToHours(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 35, $this->source); })()), "time", [], "any", false, false, false, 35)), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t<p>Temps non renseigné</p>
\t\t\t";
        }
        // line 39
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 42, $this->source); })()), "time", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t<p>Difficulté :
\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 44, $this->source); })()), "difficulty", [], "any", false, false, false, 44), "html", null, true);
            echo "/5</p>
\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t<p>Difficulté non renseigné</p>
\t\t\t";
        }
        // line 48
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 51
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 51, $this->source); })()), "time", [], "any", false, false, false, 51)) {
            // line 52
            echo "\t\t\t\t<p>Pour
\t\t\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 53, $this->source); })()), "nbPeople", [], "any", false, false, false, 53), "html", null, true);
            echo "
\t\t\t\t\tpersonnes</p>
\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t<p>Nombre de personnes non renseigné</p>
\t\t\t";
        }
        // line 58
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 61, $this->source); })()), "price", [], "any", false, false, false, 61)) {
            // line 62
            echo "\t\t\t\t<p>Prix (en €) :
\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 63, $this->source); })()), "price", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>
\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t<p>Prix non renseigné</p>
\t\t\t";
        }
        // line 67
        echo "\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t";
        // line 70
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70);
        echo "
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Ingrédients</p>
\t\t\t";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 75, $this->source); })()), "ingredients", [], "any", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 76
            echo "\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</span>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t</div>

\t\t<div class=\"mark\">
\t\t\t";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form');
        echo "
\t\t\t</div>

\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/recipe/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 81,  243 => 78,  234 => 76,  230 => 75,  222 => 70,  217 => 67,  213 => 65,  208 => 63,  205 => 62,  203 => 61,  198 => 58,  194 => 56,  188 => 53,  185 => 52,  183 => 51,  178 => 48,  174 => 46,  169 => 44,  166 => 43,  164 => 42,  159 => 39,  155 => 37,  150 => 35,  147 => 34,  145 => 33,  138 => 29,  130 => 24,  123 => 20,  117 => 17,  114 => 16,  105 => 13,  102 => 12,  98 => 11,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tSymRecipe -
\t{{ recipe.name }}
{% endblock %}

{% block body %}
\t<div class=\"container\">

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success mt-4\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t<h1 class=\"mt-4\">{{ recipe.name }}</h1>

\t\t<div class=\"recipe__image\">
\t\t\t<img style=\"max-width: 500px;\" src=\"{{ vich_uploader_asset(recipe, 'imageFile') }}\">
\t\t</div>

\t\t<p>La moyenne de cette recette est de
\t\t\t{{ recipe.average|number_format(2, '.', ',') }}
\t\t\t/5</p>

\t\t<div>
\t\t\t<span class=\"badge bg-primary\">Créée le
\t\t\t\t{{ recipe.createdAt|date('d/m/Y') }}</span>
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Temps (en minute) :
\t\t\t\t\t{{ recipe.time|min_to_hour }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Temps non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Difficulté :
\t\t\t\t\t{{ recipe.difficulty }}/5</p>
\t\t\t{% else %}
\t\t\t\t<p>Difficulté non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.time %}
\t\t\t\t<p>Pour
\t\t\t\t\t{{ recipe.nbPeople }}
\t\t\t\t\tpersonnes</p>
\t\t\t{% else %}
\t\t\t\t<p>Nombre de personnes non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{% if recipe.price %}
\t\t\t\t<p>Prix (en €) :
\t\t\t\t\t{{ recipe.price }}</p>
\t\t\t{% else %}
\t\t\t\t<p>Prix non renseigné</p>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t{{ recipe.description|raw }}
\t\t</div>

\t\t<div class=\"mt-4\">
\t\t\t<p class=\"mt-4\">Ingrédients</p>
\t\t\t{% for ingredient in recipe.ingredients %}
\t\t\t\t<span class=\"badge bg-primary\">{{ ingredient.name }}</span>
\t\t\t{% endfor %}
\t\t</div>

\t\t<div class=\"mark\">
\t\t\t{{ form(form) }}
\t\t\t</div>

\t\t</div>
\t{% endblock %}
", "pages/recipe/show.html.twig", "C:\\Users\\melsa\\Documents\\Projet_fin_d_annee\\symrecipe\\templates\\pages\\recipe\\show.html.twig");
    }
}
