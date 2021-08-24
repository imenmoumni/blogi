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

/* blog/show.html.twig */
class __TwigTemplate_d3ff7fb9e6dab0529849aa324e1728006de183dd84b3b8d7ae630ad5a1def820 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<article>

<h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " </h1>
<div class=\"metadata\">Ecrit  le ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "createdAT", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo " à
";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "createdAT", [], "any", false, false, false, 10), "H:i"), "html", null, true);
        echo "  dans la categorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "category", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " </div>
<div class=\"content\">
<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"\">
";
        // line 13
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13);
        echo "
</div>
</article>

<section id=\"commentaires\">
<h1>";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "comments", [], "any", false, false, false, 18)), "html", null, true);
        echo " commentaires : </h1>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "comments", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "<div class=\"comment\">
<div class=\"row\">
<div class=\"col-3\">
";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 23), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 23), "d/m/Y à H:i"), "html", null, true);
            // line 24
            echo " </small>)
</div>
<div class=\"col\">
";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 27);
            echo "

</div>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 35, $this->source); })()), 'form_start');
            echo "
";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 36, $this->source); })()), "author", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "votre nom"]]);
            echo "
";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 37, $this->source); })()), "content", [], "any", false, false, false, 37), 'row', ["attr" => ["placeholder" => "votre commentaire"]]);
            echo "

<button type=\"submit\" class=\"btn btn-success\">Commenter!</button>
";
            // line 40
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 40, $this->source); })()), 'form_end');
            echo "


";
        } else {
            // line 43
            echo " 
<h2> Vous ne pouvez pas commenter  si vous n'étes pas connecté! </h2>
<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion 
</a>
";
        }
        // line 48
        echo "
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  167 => 45,  163 => 43,  156 => 40,  150 => 37,  146 => 36,  142 => 35,  140 => 34,  137 => 33,  125 => 27,  120 => 24,  116 => 23,  111 => 20,  107 => 19,  103 => 18,  95 => 13,  91 => 12,  84 => 10,  80 => 9,  76 => 8,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% form_theme commentForm 'bootstrap_4_layout.html.twig' %}

{% block body %}

<article>

<h1> {{ article.title }} </h1>
<div class=\"metadata\">Ecrit  le {{article.createdAT | date ('d/m/Y')}} à
{{ article.createdAT | date ('H:i')}}  dans la categorie {{article.category.title}} </div>
<div class=\"content\">
<img src=\"{{ article.image }}\" alt=\"\">
{{ article.content | raw}}
</div>
</article>

<section id=\"commentaires\">
<h1>{{article.comments | length }} commentaires : </h1>
{% for comment in article.comments %}
<div class=\"comment\">
<div class=\"row\">
<div class=\"col-3\">
{{comment.author}} (<small>{{comment.createdAt | date
('d/m/Y à H:i')}} </small>)
</div>
<div class=\"col\">
{{comment.content | raw}}

</div>
</div>
</div>
{% endfor %}

{% if app.user  %}
{{ form_start(commentForm)}}
{{ form_row(commentForm.author,{'attr' :{'placeholder':\"votre nom\"}})}}
{{ form_row(commentForm.content,{'attr' :{'placeholder':\"votre commentaire\"}})}}

<button type=\"submit\" class=\"btn btn-success\">Commenter!</button>
{{form_end (commentForm)}}


{% else %} 
<h2> Vous ne pouvez pas commenter  si vous n'étes pas connecté! </h2>
<a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">Connexion 
</a>
{% endif %}

</section>
{% endblock %}", "blog/show.html.twig", "/opt/lampp/htdocs/business/templates/blog/show.html.twig");
    }
}
