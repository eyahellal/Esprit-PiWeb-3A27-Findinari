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

/* Community/show.html.twig */
class __TwigTemplate_e0994f42615176e6300dc86c67246537 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Post Community";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Community Post</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index");
        yield "\">Community</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Détail du post</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section-sm\">
    <div class=\"container community-shell\">

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "                <div class=\"alert ";
                yield ((($context["label"] == "success")) ? ("alert-success") : ("alert-danger"));
                yield " mb-4\">
                    ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "
        <div class=\"mb-4\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index");
        yield "\" class=\"btn btn-outline-primary\">
                Retour à Community
            </a>
        </div>

        <article class=\"card border-0 mb-4\">
            <div class=\"card-body p-4 p-lg-5\">

                <div class=\"d-flex justify-content-between gap-3 align-items-start\">
                    <div class=\"d-flex gap-3 align-items-start\">
                        <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\"
                             style=\"width:40px;height:40px;\">
                            ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "utilisateur", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), 0, 1)), "html", null, true);
        yield "
                        </div>

                        <div>
                            <div class=\"d-flex flex-wrap gap-2 align-items-center\">
                                <strong>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 49, $this->source); })()), "utilisateur", [], "any", false, false, false, 49), "prenom", [], "any", false, false, false, 49), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 49, $this->source); })()), "utilisateur", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        yield "</strong>
                                <span class=\"text-muted small\">
                                    ";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "dateCreation", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "dateCreation", [], "any", false, false, false, 51), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "
                                </span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 57
        if ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 57, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), "utilisateur", [], "any", false, false, false, 57)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), "utilisateur", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)))) {
            // line 58
            yield "                        <div class=\"d-flex gap-2\">
                            <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "idPost", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                Modifier
                            </a>

                            <form method=\"post\"
                                  action=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 64, $this->source); })()), "idPost", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\"
                                  onsubmit=\"return confirm('Supprimer ce post ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 66, $this->source); })()), "idPost", [], "any", false, false, false, 66))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    ";
        }
        // line 73
        yield "                </div>

                <div class=\"mt-4\">
                    ";
        // line 76
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 76, $this->source); })()), "contenu", [], "any", false, false, false, 76), "html", null, true));
        yield "
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <form method=\"post\" action=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 80, $this->source); })()), "idPost", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\">
                        <button class=\"btn btn-outline-primary btn-sm\" type=\"submit\">
                            👍 Like (";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 82, $this->source); })()), "nombreLikes", [], "any", false, false, false, 82), "html", null, true);
        yield ")
                        </button>
                    </form>

                    <span class=\"btn btn-outline-secondary btn-sm\">
                        💬 ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 87, $this->source); })()), "nombreCommentaires", [], "any", false, false, false, 87), "html", null, true);
        yield "
                    </span>
                </div>

            </div>
        </article>

        <div class=\"card border-0 mb-4\">
            <div class=\"card-body p-4 p-lg-5\">
                <h4>Ajouter un commentaire</h4>

                ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 98, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-3\">
                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 100, $this->source); })()), "contenu", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 101, $this->source); })()), "contenu", [], "any", false, false, false, 101), 'errors');
        yield "
                    </div>

                    <button class=\"btn btn-primary\" type=\"submit\">
                        Envoyer
                    </button>
                ";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 107, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <div class=\"card border-0\">
            <div class=\"card-body p-4 p-lg-5\">
                <h4>Tous les commentaires</h4>

                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 115, $this->source); })()), "commentaires", [], "any", false, false, false, 115));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 116
            yield "                    <div class=\"d-flex gap-3 mb-4\">
                        <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center\"
                             style=\"width:35px;height:35px;\">
                            ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 119), "nom", [], "any", false, false, false, 119), 0, 1)), "html", null, true);
            yield "
                        </div>

                        <div class=\"flex-grow-1\">
                            <div class=\"d-flex justify-content-between align-items-start gap-3\">
                                <div>
                                    <div class=\"d-flex gap-2 align-items-center mb-1\">
                                        <strong>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 126), "prenom", [], "any", false, false, false, 126), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 126), "nom", [], "any", false, false, false, 126), "html", null, true);
            yield "</strong>
                                        <span class=\"text-muted small\">
                                            ";
            // line 128
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateCreation", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateCreation", [], "any", false, false, false, 128), "d/m/Y H:i"), "html", null, true)) : (""));
            yield "
                                        </span>
                                    </div>
                                </div>

                                ";
            // line 133
            if ((((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 133, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 133)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133)))) {
                // line 134
                yield "                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 135)]), "html", null, true);
                yield "\"
                                           class=\"btn btn-sm btn-outline-secondary\">
                                            Modifier
                                        </a>

                                        <form method=\"post\"
                                              action=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 141)]), "html", null, true);
                yield "\"
                                              onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                            <input type=\"hidden\"
                                                   name=\"_token\"
                                                   value=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 145))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                ";
            }
            // line 152
            yield "                            </div>

                            <p class=\"mb-0\">
                                ";
            // line 155
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 155), "html", null, true));
            yield "
                            </p>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 159
        if (!$context['_iterated']) {
            // line 160
            yield "                    <div class=\"text-muted\">
                        Aucun commentaire pour ce post.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        yield "            </div>
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
        return "Community/show.html.twig";
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
        return array (  385 => 164,  376 => 160,  374 => 159,  365 => 155,  360 => 152,  350 => 145,  343 => 141,  334 => 135,  331 => 134,  329 => 133,  321 => 128,  314 => 126,  304 => 119,  299 => 116,  294 => 115,  283 => 107,  274 => 101,  270 => 100,  265 => 98,  251 => 87,  243 => 82,  238 => 80,  231 => 76,  226 => 73,  216 => 66,  211 => 64,  203 => 59,  200 => 58,  198 => 57,  189 => 51,  182 => 49,  174 => 44,  159 => 32,  155 => 30,  149 => 29,  140 => 26,  135 => 25,  130 => 24,  126 => 23,  112 => 12,  108 => 11,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Post Community{% endblock %}

{% block body %}
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Community Post</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('community_index') }}\">Community</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Détail du post</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section-sm\">
    <div class=\"container community-shell\">

        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert {{ label == 'success' ? 'alert-success' : 'alert-danger' }} mb-4\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"mb-4\">
            <a href=\"{{ path('community_index') }}\" class=\"btn btn-outline-primary\">
                Retour à Community
            </a>
        </div>

        <article class=\"card border-0 mb-4\">
            <div class=\"card-body p-4 p-lg-5\">

                <div class=\"d-flex justify-content-between gap-3 align-items-start\">
                    <div class=\"d-flex gap-3 align-items-start\">
                        <div class=\"rounded-circle bg-primary text-white d-flex align-items-center justify-content-center\"
                             style=\"width:40px;height:40px;\">
                            {{ post.utilisateur.nom|slice(0,1)|upper }}
                        </div>

                        <div>
                            <div class=\"d-flex flex-wrap gap-2 align-items-center\">
                                <strong>{{ post.utilisateur.prenom }} {{ post.utilisateur.nom }}</strong>
                                <span class=\"text-muted small\">
                                    {{ post.dateCreation ? post.dateCreation|date('d/m/Y H:i') : '' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    {% if currentUser and post.utilisateur and post.utilisateur.id == currentUser.id %}
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('community_edit', {id: post.idPost}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                                Modifier
                            </a>

                            <form method=\"post\"
                                  action=\"{{ path('community_delete', {id: post.idPost}) }}\"
                                  onsubmit=\"return confirm('Supprimer ce post ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.idPost) }}\">
                                <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    {% endif %}
                </div>

                <div class=\"mt-4\">
                    {{ post.contenu|nl2br }}
                </div>

                <div class=\"d-flex gap-2 mt-4\">
                    <form method=\"post\" action=\"{{ path('community_like', {id: post.idPost}) }}\">
                        <button class=\"btn btn-outline-primary btn-sm\" type=\"submit\">
                            👍 Like ({{ post.nombreLikes }})
                        </button>
                    </form>

                    <span class=\"btn btn-outline-secondary btn-sm\">
                        💬 {{ post.nombreCommentaires }}
                    </span>
                </div>

            </div>
        </article>

        <div class=\"card border-0 mb-4\">
            <div class=\"card-body p-4 p-lg-5\">
                <h4>Ajouter un commentaire</h4>

                {{ form_start(commentForm) }}
                    <div class=\"mb-3\">
                        {{ form_widget(commentForm.contenu, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(commentForm.contenu) }}
                    </div>

                    <button class=\"btn btn-primary\" type=\"submit\">
                        Envoyer
                    </button>
                {{ form_end(commentForm) }}
            </div>
        </div>

        <div class=\"card border-0\">
            <div class=\"card-body p-4 p-lg-5\">
                <h4>Tous les commentaires</h4>

                {% for commentaire in post.commentaires %}
                    <div class=\"d-flex gap-3 mb-4\">
                        <div class=\"rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center\"
                             style=\"width:35px;height:35px;\">
                            {{ commentaire.utilisateur.nom|slice(0,1)|upper }}
                        </div>

                        <div class=\"flex-grow-1\">
                            <div class=\"d-flex justify-content-between align-items-start gap-3\">
                                <div>
                                    <div class=\"d-flex gap-2 align-items-center mb-1\">
                                        <strong>{{ commentaire.utilisateur.prenom }} {{ commentaire.utilisateur.nom }}</strong>
                                        <span class=\"text-muted small\">
                                            {{ commentaire.dateCreation ? commentaire.dateCreation|date('d/m/Y H:i') : '' }}
                                        </span>
                                    </div>
                                </div>

                                {% if currentUser and commentaire.utilisateur and commentaire.utilisateur.id == currentUser.id %}
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('community_comment_edit', {id: commentaire.idCommentaire}) }}\"
                                           class=\"btn btn-sm btn-outline-secondary\">
                                            Modifier
                                        </a>

                                        <form method=\"post\"
                                              action=\"{{ path('community_comment_delete', {id: commentaire.idCommentaire}) }}\"
                                              onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                            <input type=\"hidden\"
                                                   name=\"_token\"
                                                   value=\"{{ csrf_token('delete_comment_' ~ commentaire.idCommentaire) }}\">
                                            <button class=\"btn btn-sm btn-outline-danger\" type=\"submit\">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                {% endif %}
                            </div>

                            <p class=\"mb-0\">
                                {{ commentaire.contenu|nl2br }}
                            </p>
                        </div>
                    </div>
                {% else %}
                    <div class=\"text-muted\">
                        Aucun commentaire pour ce post.
                    </div>
                {% endfor %}
            </div>
        </div>

    </div>
</section>
{% endblock %}", "Community/show.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\Community\\show.html.twig");
    }
}
