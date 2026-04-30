<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* Community/index.html.twig */
class __TwigTemplate_cacc4d7c1ef534f2a357d384b19e5e44 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Community";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<section class=\"section\">
  <div class=\"container\">
    <div class=\"row justify-content-center mb-4\">
      <div class=\"col-lg-10\">
        <div class=\"bg-white rounded shadow-sm p-4 d-flex justify-content-between align-items-center\">
          <div>
            <h2 class=\"mb-1\">Community</h2>
            <p class=\"mb-0 text-muted\">Posts, commentaires et likes avec le style du template existant.</p>
          </div>
          <a href=\"#create-post-box\" class=\"btn btn-primary\">Créer un post</a>
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center mb-4\">
      <div class=\"col-lg-10\">
        <div id=\"create-post-box\" class=\"bg-white rounded shadow-sm p-4\">
          <h4 class=\"mb-3\">Créer un post</h4>

          ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-3\">
              ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 27, $this->source); })()), "contenu", [], "any", false, false, false, 27), 'label');
        yield "
              ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 28, $this->source); })()), "contenu", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Écrire quelque chose..."]]);
        yield "
              ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 29, $this->source); })()), "contenu", [], "any", false, false, false, 29), 'errors');
        yield "
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Publier</button>
          ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center\">
      <div class=\"col-lg-10\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 41
            yield "          <div class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body p-4\">
              <div class=\"d-flex justify-content-between align-items-start gap-3\">
                <div>
                  <h4 class=\"mb-1\">";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 45), "html", null, true)) : ("Publication"));
            yield "</h4>
                  <p class=\"text-muted mb-0\">
                    ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 47), "prenom", [], "any", false, false, false, 47), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47), "html", null, true);
            yield "
                    ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                      • ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "dateCreation", [], "any", false, false, false, 49), "d/m/Y H:i"), "html", null, true);
                yield "
                    ";
            }
            // line 51
            yield "                  </p>
                </div>
                <span class=\"badge bg-primary-subtle text-primary border\">
                  ";
            // line 54
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "typePost", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "typePost", [], "any", false, false, false, 54), "html", null, true)) : ("STATUT"));
            yield "
                </span>
              </div>

              <p class=\"mt-3 mb-4\">
                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 59), 0, 240), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 59)) > 240)) {
                yield "...";
            }
            // line 60
            yield "              </p>

              <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <div class=\"text-muted\">
                  👍 ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreLikes", [], "any", false, false, false, 64), "html", null, true);
            yield " &nbsp; | &nbsp; 💬 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreCommentaires", [], "any", false, false, false, 64), "html", null, true);
            yield "
                </div>

                <div class=\"d-flex gap-2 flex-wrap\">
                  <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Voir</a>

                  ";
            // line 70
            if ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 70, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 70)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)))) {
                // line 71
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>

                    <form method=\"post\" action=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 74))), "html", null, true);
                yield "\">
                      <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                    </form>
                  ";
            }
            // line 78
            yield "                </div>
              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "          <div class=\"alert alert-info\">Aucun post pour le moment. Crée le premier post.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "      </div>
    </div>
  </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Community/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  255 => 85,  248 => 83,  246 => 82,  238 => 78,  231 => 74,  227 => 73,  221 => 71,  219 => 70,  214 => 68,  205 => 64,  199 => 60,  194 => 59,  186 => 54,  181 => 51,  175 => 49,  173 => 48,  167 => 47,  162 => 45,  156 => 41,  151 => 40,  141 => 33,  134 => 29,  130 => 28,  126 => 27,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Community{% endblock %}

{% block body %}
<section class=\"section\">
  <div class=\"container\">
    <div class=\"row justify-content-center mb-4\">
      <div class=\"col-lg-10\">
        <div class=\"bg-white rounded shadow-sm p-4 d-flex justify-content-between align-items-center\">
          <div>
            <h2 class=\"mb-1\">Community</h2>
            <p class=\"mb-0 text-muted\">Posts, commentaires et likes avec le style du template existant.</p>
          </div>
          <a href=\"#create-post-box\" class=\"btn btn-primary\">Créer un post</a>
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center mb-4\">
      <div class=\"col-lg-10\">
        <div id=\"create-post-box\" class=\"bg-white rounded shadow-sm p-4\">
          <h4 class=\"mb-3\">Créer un post</h4>

          {{ form_start(postForm) }}
            <div class=\"mb-3\">
              {{ form_label(postForm.contenu) }}
              {{ form_widget(postForm.contenu, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Écrire quelque chose...'}}) }}
              {{ form_errors(postForm.contenu) }}
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Publier</button>
          {{ form_end(postForm) }}
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center\">
      <div class=\"col-lg-10\">
        {% for post in posts %}
          <div class=\"card border-0 shadow-sm mb-4\">
            <div class=\"card-body p-4\">
              <div class=\"d-flex justify-content-between align-items-start gap-3\">
                <div>
                  <h4 class=\"mb-1\">{{ post.titre ?: 'Publication' }}</h4>
                  <p class=\"text-muted mb-0\">
                    {{ post.utilisateur.prenom }} {{ post.utilisateur.nom }}
                    {% if post.dateCreation %}
                      • {{ post.dateCreation|date('d/m/Y H:i') }}
                    {% endif %}
                  </p>
                </div>
                <span class=\"badge bg-primary-subtle text-primary border\">
                  {{ post.typePost ?: 'STATUT' }}
                </span>
              </div>

              <p class=\"mt-3 mb-4\">
                {{ post.contenu|slice(0, 240) }}{% if post.contenu|length > 240 %}...{% endif %}
              </p>

              <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-2\">
                <div class=\"text-muted\">
                  👍 {{ post.nombreLikes }} &nbsp; | &nbsp; 💬 {{ post.nombreCommentaires }}
                </div>

                <div class=\"d-flex gap-2 flex-wrap\">
                  <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"btn btn-sm btn-outline-primary\">Voir</a>

                  {% if currentUser and post.utilisateur and post.utilisateur.id == currentUser.id %}
                    <a href=\"{{ path('community_edit', {id: post.idPost}) }}\" class=\"btn btn-sm btn-outline-secondary\">Modifier</a>

                    <form method=\"post\" action=\"{{ path('community_delete', {id: post.idPost}) }}\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.idPost) }}\">
                      <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">Supprimer</button>
                    </form>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        {% else %}
          <div class=\"alert alert-info\">Aucun post pour le moment. Crée le premier post.</div>
        {% endfor %}
      </div>
    </div>
  </div>
</section>
{% endblock %}", "Community/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\Community\\index.html.twig");
    }
}
