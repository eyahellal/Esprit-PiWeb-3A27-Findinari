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

/* Community/_feed.html.twig */
class __TwigTemplate_5c3f1c969f8a40a627e8f9a7fdf98bfb extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/_feed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Community/_feed.html.twig"));

        // line 1
        if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()) == 4)) {
            // line 2
            yield "<div class=\"community-shell mt-5 pt-4 border-top\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 4
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 5
                    yield "            <div class=\"alert ";
                    yield ((($context["label"] == "success")) ? ("alert-success") : ("alert-danger"));
                    yield " mb-4\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                    yield "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "
    <div class=\"community-toolbar card border-0 mb-4\">
        <div class=\"card-body p-4 p-lg-5\">
            <div class=\"d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4\">
                <div>
                    <span class=\"community-badge\">Community feed</span>
                    <h3 class=\"mt-2 mb-1\">Share ideas with the Fin-Dinari community</h3>
                    <p class=\"text-muted mb-0\">Publiez un statut, recherchez des posts et interagissez avec les derniers échanges.</p>
                </div>
            </div>

            <form method=\"get\" action=\"";
            // line 19
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_details", ["id" => 4]);
            yield "\" class=\"mb-4\">
                <label class=\"form-label fw-semibold\">Rechercher un post</label>
                <div class=\"d-flex flex-column flex-lg-row gap-3 align-items-stretch\">
                    <div class=\"community-search-shell flex-grow-1\">
                        <input type=\"text\" name=\"q\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("communityQuery", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["communityQuery"]) || array_key_exists("communityQuery", $context) ? $context["communityQuery"] : (function () { throw new RuntimeError('Variable "communityQuery" does not exist.', 23, $this->source); })()), "")) : ("")), "html", null, true);
            yield "\" class=\"form-control shadow-none community-search-input\" placeholder=\"Rechercher par contenu ou utilisateur...\">
                    </div>
                    <button class=\"btn btn-primary community-search-btn\">Recherche</button>
                </div>
            </form>

            <div class=\"community-composer-head\">
                <div class=\"d-flex align-items-start gap-3\">
                    <div class=\"community-avatar\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "nom", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "D")) : ("D")), 0, 1)), "html", null, true);
            yield "</div>
                    <div>
                        <strong>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 33, $this->source); })()), "communityHandle", [], "any", false, false, false, 33), "html", null, true);
            yield "</strong>
                        <div class=\"text-muted small\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 34, $this->source); })()), "displayName", [], "any", false, false, false, 34), "html", null, true);
            yield "</div>
                    </div>
                </div>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm community-upload-btn\" disabled>Upload file</button>
            </div>

            ";
            // line 40
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 40, $this->source); })()), 'form_start');
            yield "
                <div class=\"community-editor-shell\">
                    ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 42, $this->source); })()), "contenu", [], "any", false, false, false, 42), 'widget');
            yield "
                </div>
                ";
            // line 44
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 44, $this->source); })()), "contenu", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "errors", [], "any", false, false, false, 44)) > 0)) {
                // line 45
                yield "                    <div class=\"text-danger small mt-2\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 45, $this->source); })()), "contenu", [], "any", false, false, false, 45), 'errors');
                yield "</div>
                ";
            }
            // line 47
            yield "                <div class=\"d-flex justify-content-end mt-3\">
                    <button class=\"btn btn-primary px-4 community-action-btn\">Publier</button>
                </div>
            ";
            // line 50
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 50, $this->source); })()), 'form_end');
            yield "
        </div>
    </div>

    <div class=\"community-feed d-flex flex-column gap-4\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 55, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 56
                yield "            <article class=\"community-post card border-0\">
                <div class=\"card-body p-4 p-lg-5\">
                    <div class=\"d-flex align-items-start justify-content-between gap-3\">
                        <a href=\"";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 59)]), "html", null, true);
                yield "\" class=\"d-flex gap-3 community-meta-link flex-grow-1\">
                            <div class=\"community-avatar gradient\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), 0, 1)), "html", null, true);
                yield "</div>
                            <div>
                                <div class=\"d-flex align-items-center flex-wrap gap-2\">
                                    <strong>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 63), "communityHandle", [], "any", false, false, false, 63), "html", null, true);
                yield "</strong>
                                    <span class=\"text-muted small\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 64), "displayName", [], "any", false, false, false, 64), "html", null, true);
                yield "</span>
                                    <span class=\"community-dot\"></span>
                                    <span class=\"text-muted small\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "relativeTime", [], "any", false, false, false, 66), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                        </a>
                        ";
                // line 70
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isOwnedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 70, $this->source); })())], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 71
                    yield "                            <details class=\"community-menu\">
                                <summary aria-label=\"Actions du post\">•••</summary>
                                <div class=\"community-menu-box\">
                                    <a class=\"community-menu-link\" href=\"";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 74)]), "html", null, true);
                    yield "\">Modifier</a>
                                    <form method=\"post\" action=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 75)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 76))), "html", null, true);
                    yield "\">
                                        <button class=\"community-menu-button text-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </details>
                        ";
                }
                // line 82
                yield "                    </div>

                    <a href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" class=\"community-post-link mt-4\">
                        <div class=\"community-post-content\">";
                // line 85
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "contenu", [], "any", false, false, false, 85), "html", null, true));
                yield "</div>
                    </a>

                    <div class=\"community-actions d-flex flex-wrap align-items-center gap-2 mt-4\">
                        <form method=\"post\" action=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\">
                            <button class=\"btn ";
                // line 90
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isLikedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 90, $this->source); })())], "method", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-primary") : ("btn-outline-primary"));
                yield " btn-sm community-action-btn\" type=\"submit\">
                                ";
                // line 91
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isLikedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 91, $this->source); })())], "method", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Dislike") : ("Like"));
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreLikes", [], "any", false, false, false, 91), "html", null, true);
                yield ")
                            </button>
                        </form>
                        <a href=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 94)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm community-action-btn\">
                            Commentaire (";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreCommentaires", [], "any", false, false, false, 95), "html", null, true);
                yield ")
                        </a>
                    </div>

                    <div class=\"community-inline-comment mt-4\">
                        ";
                // line 100
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForms"]) || array_key_exists("commentForms", $context) ? $context["commentForms"] : (function () { throw new RuntimeError('Variable "commentForms" does not exist.', 100, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 100), [], "array", false, false, false, 100), 'form_start');
                yield "
                            <div class=\"community-inline-row\">
                                <div class=\"community-comment-shell\">";
                // line 102
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForms"]) || array_key_exists("commentForms", $context) ? $context["commentForms"] : (function () { throw new RuntimeError('Variable "commentForms" does not exist.', 102, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 102), [], "array", false, false, false, 102), "contenu", [], "any", false, false, false, 102), 'widget');
                yield "</div>
                                <div class=\"community-comment-actions\">
                                    <span class=\"community-caption\">Ajoutez un commentaire à ce post.</span>
                                    <button class=\"btn btn-primary community-action-btn\" type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                            ";
                // line 108
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForms"]) || array_key_exists("commentForms", $context) ? $context["commentForms"] : (function () { throw new RuntimeError('Variable "commentForms" does not exist.', 108, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 108), [], "array", false, false, false, 108), "contenu", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "errors", [], "any", false, false, false, 108)) > 0)) {
                    // line 109
                    yield "                                <div class=\"text-danger small mt-2\">";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForms"]) || array_key_exists("commentForms", $context) ? $context["commentForms"] : (function () { throw new RuntimeError('Variable "commentForms" does not exist.', 109, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 109), [], "array", false, false, false, 109), "contenu", [], "any", false, false, false, 109), 'errors');
                    yield "</div>
                            ";
                }
                // line 111
                yield "                        ";
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForms"]) || array_key_exists("commentForms", $context) ? $context["commentForms"] : (function () { throw new RuntimeError('Variable "commentForms" does not exist.', 111, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 111), [], "array", false, false, false, 111), 'form_end');
                yield "
                    </div>

                    <div class=\"community-comments-preview mt-4\">
                        <div class=\"small text-muted mb-3\">Les 3 derniers commentaires</div>
                        ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "recentCommentaires", [3], "method", false, false, false, 116));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                    // line 117
                    yield "                            <div class=\"community-comment-preview d-flex gap-3 mb-3\" id=\"comment-preview-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 117), "html", null, true);
                    yield "\">
                                <div class=\"community-mini-avatar\">";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118), 0, 1)), "html", null, true);
                    yield "</div>
                                <div class=\"flex-grow-1\">
                                    <div class=\"d-flex justify-content-between gap-2 align-items-start\">
                                        <a href=\"";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 121)]), "html", null, true);
                    yield "#comment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 121), "html", null, true);
                    yield "\" class=\"text-decoration-none text-reset flex-grow-1\">
                                            <div class=\"d-flex flex-wrap gap-2 align-items-center mb-1\">
                                                <strong class=\"small\">";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 123), "communityHandle", [], "any", false, false, false, 123), "html", null, true);
                    yield "</strong>
                                                <span class=\"text-muted small\">";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "relativeTime", [], "any", false, false, false, 124), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div class=\"small text-muted\">";
                    // line 126
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 126), 0, 180), "html", null, true);
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 126)) > 180)) {
                        yield "...";
                    }
                    yield "</div>
                                        </a>
                                        ";
                    // line 128
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "canBeManagedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 128, $this->source); })())], "method", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 129
                        yield "                                            <details class=\"community-menu\">
                                                <summary aria-label=\"Actions du commentaire\">•••</summary>
                                                <div class=\"community-menu-box\">
                                                    <a class=\"community-menu-link\" href=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 132)]), "html", null, true);
                        yield "\">Modifier</a>
                                                    <form method=\"post\" action=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 133)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 134
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 134))), "html", null, true);
                        yield "\">
                                                        <button class=\"community-menu-button text-danger\" type=\"submit\">Supprimer</button>
                                                    </form>
                                                </div>
                                            </details>
                                        ";
                    }
                    // line 140
                    yield "                                    </div>
                                </div>
                            </div>
                        ";
                    $context['_iterated'] = true;
                }
                // line 143
                if (!$context['_iterated']) {
                    // line 144
                    yield "                            <div class=\"text-muted small\">Aucun commentaire pour le moment.</div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                yield "                    </div>
                </div>
            </article>
        ";
                $context['_iterated'] = true;
            }
            // line 149
            if (!$context['_iterated']) {
                // line 150
                yield "            <div class=\"card border-0 community-panel\">
                <div class=\"card-body community-empty\">
                    Aucun post trouvé. Publiez le premier message de la communauté.
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            yield "    </div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "Community/_feed.html.twig";
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
        return array (  393 => 156,  382 => 150,  380 => 149,  373 => 146,  366 => 144,  364 => 143,  357 => 140,  348 => 134,  344 => 133,  340 => 132,  335 => 129,  333 => 128,  325 => 126,  320 => 124,  316 => 123,  309 => 121,  303 => 118,  298 => 117,  293 => 116,  284 => 111,  278 => 109,  276 => 108,  267 => 102,  262 => 100,  254 => 95,  250 => 94,  242 => 91,  238 => 90,  234 => 89,  227 => 85,  223 => 84,  219 => 82,  210 => 76,  206 => 75,  202 => 74,  197 => 71,  195 => 70,  188 => 66,  183 => 64,  179 => 63,  173 => 60,  169 => 59,  164 => 56,  159 => 55,  151 => 50,  146 => 47,  140 => 45,  138 => 44,  133 => 42,  128 => 40,  119 => 34,  115 => 33,  110 => 31,  99 => 23,  92 => 19,  79 => 8,  73 => 7,  62 => 5,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if id == 4 %}
<div class=\"community-shell mt-5 pt-4 border-top\">
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert {{ label == 'success' ? 'alert-success' : 'alert-danger' }} mb-4\">{{ message }}</div>
        {% endfor %}
    {% endfor %}

    <div class=\"community-toolbar card border-0 mb-4\">
        <div class=\"card-body p-4 p-lg-5\">
            <div class=\"d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4\">
                <div>
                    <span class=\"community-badge\">Community feed</span>
                    <h3 class=\"mt-2 mb-1\">Share ideas with the Fin-Dinari community</h3>
                    <p class=\"text-muted mb-0\">Publiez un statut, recherchez des posts et interagissez avec les derniers échanges.</p>
                </div>
            </div>

            <form method=\"get\" action=\"{{ path('app_service_details', {id: 4}) }}\" class=\"mb-4\">
                <label class=\"form-label fw-semibold\">Rechercher un post</label>
                <div class=\"d-flex flex-column flex-lg-row gap-3 align-items-stretch\">
                    <div class=\"community-search-shell flex-grow-1\">
                        <input type=\"text\" name=\"q\" value=\"{{ communityQuery|default('') }}\" class=\"form-control shadow-none community-search-input\" placeholder=\"Rechercher par contenu ou utilisateur...\">
                    </div>
                    <button class=\"btn btn-primary community-search-btn\">Recherche</button>
                </div>
            </form>

            <div class=\"community-composer-head\">
                <div class=\"d-flex align-items-start gap-3\">
                    <div class=\"community-avatar\">{{ currentUser.nom|default('D')|slice(0,1)|upper }}</div>
                    <div>
                        <strong>{{ currentUser.communityHandle }}</strong>
                        <div class=\"text-muted small\">{{ currentUser.displayName }}</div>
                    </div>
                </div>
                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm community-upload-btn\" disabled>Upload file</button>
            </div>

            {{ form_start(postForm) }}
                <div class=\"community-editor-shell\">
                    {{ form_widget(postForm.contenu) }}
                </div>
                {% if postForm.contenu.vars.errors|length > 0 %}
                    <div class=\"text-danger small mt-2\">{{ form_errors(postForm.contenu) }}</div>
                {% endif %}
                <div class=\"d-flex justify-content-end mt-3\">
                    <button class=\"btn btn-primary px-4 community-action-btn\">Publier</button>
                </div>
            {{ form_end(postForm) }}
        </div>
    </div>

    <div class=\"community-feed d-flex flex-column gap-4\">
        {% for post in posts %}
            <article class=\"community-post card border-0\">
                <div class=\"card-body p-4 p-lg-5\">
                    <div class=\"d-flex align-items-start justify-content-between gap-3\">
                        <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"d-flex gap-3 community-meta-link flex-grow-1\">
                            <div class=\"community-avatar gradient\">{{ post.utilisateur.nom|slice(0,1)|upper }}</div>
                            <div>
                                <div class=\"d-flex align-items-center flex-wrap gap-2\">
                                    <strong>{{ post.utilisateur.communityHandle }}</strong>
                                    <span class=\"text-muted small\">{{ post.utilisateur.displayName }}</span>
                                    <span class=\"community-dot\"></span>
                                    <span class=\"text-muted small\">{{ post.relativeTime }}</span>
                                </div>
                            </div>
                        </a>
                        {% if post.isOwnedBy(currentUser) %}
                            <details class=\"community-menu\">
                                <summary aria-label=\"Actions du post\">•••</summary>
                                <div class=\"community-menu-box\">
                                    <a class=\"community-menu-link\" href=\"{{ path('community_edit', {id: post.idPost}) }}\">Modifier</a>
                                    <form method=\"post\" action=\"{{ path('community_delete', {id: post.idPost}) }}\" onsubmit=\"return confirm('Supprimer ce post ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.idPost) }}\">
                                        <button class=\"community-menu-button text-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </details>
                        {% endif %}
                    </div>

                    <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"community-post-link mt-4\">
                        <div class=\"community-post-content\">{{ post.contenu|nl2br }}</div>
                    </a>

                    <div class=\"community-actions d-flex flex-wrap align-items-center gap-2 mt-4\">
                        <form method=\"post\" action=\"{{ path('community_like', {id: post.idPost}) }}\">
                            <button class=\"btn {{ post.isLikedBy(currentUser) ? 'btn-primary' : 'btn-outline-primary' }} btn-sm community-action-btn\" type=\"submit\">
                                {{ post.isLikedBy(currentUser) ? 'Dislike' : 'Like' }} ({{ post.nombreLikes }})
                            </button>
                        </form>
                        <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"btn btn-outline-secondary btn-sm community-action-btn\">
                            Commentaire ({{ post.nombreCommentaires }})
                        </a>
                    </div>

                    <div class=\"community-inline-comment mt-4\">
                        {{ form_start(commentForms[post.idPost]) }}
                            <div class=\"community-inline-row\">
                                <div class=\"community-comment-shell\">{{ form_widget(commentForms[post.idPost].contenu) }}</div>
                                <div class=\"community-comment-actions\">
                                    <span class=\"community-caption\">Ajoutez un commentaire à ce post.</span>
                                    <button class=\"btn btn-primary community-action-btn\" type=\"submit\">Envoyer</button>
                                </div>
                            </div>
                            {% if commentForms[post.idPost].contenu.vars.errors|length > 0 %}
                                <div class=\"text-danger small mt-2\">{{ form_errors(commentForms[post.idPost].contenu) }}</div>
                            {% endif %}
                        {{ form_end(commentForms[post.idPost]) }}
                    </div>

                    <div class=\"community-comments-preview mt-4\">
                        <div class=\"small text-muted mb-3\">Les 3 derniers commentaires</div>
                        {% for commentaire in post.recentCommentaires(3) %}
                            <div class=\"community-comment-preview d-flex gap-3 mb-3\" id=\"comment-preview-{{ commentaire.idCommentaire }}\">
                                <div class=\"community-mini-avatar\">{{ commentaire.utilisateur.nom|slice(0,1)|upper }}</div>
                                <div class=\"flex-grow-1\">
                                    <div class=\"d-flex justify-content-between gap-2 align-items-start\">
                                        <a href=\"{{ path('community_show', {id: post.idPost}) }}#comment-{{ commentaire.idCommentaire }}\" class=\"text-decoration-none text-reset flex-grow-1\">
                                            <div class=\"d-flex flex-wrap gap-2 align-items-center mb-1\">
                                                <strong class=\"small\">{{ commentaire.utilisateur.communityHandle }}</strong>
                                                <span class=\"text-muted small\">{{ commentaire.relativeTime }}</span>
                                            </div>
                                            <div class=\"small text-muted\">{{ commentaire.contenu|slice(0, 180) }}{% if commentaire.contenu|length > 180 %}...{% endif %}</div>
                                        </a>
                                        {% if commentaire.canBeManagedBy(currentUser) %}
                                            <details class=\"community-menu\">
                                                <summary aria-label=\"Actions du commentaire\">•••</summary>
                                                <div class=\"community-menu-box\">
                                                    <a class=\"community-menu-link\" href=\"{{ path('community_comment_edit', {id: commentaire.idCommentaire}) }}\">Modifier</a>
                                                    <form method=\"post\" action=\"{{ path('community_comment_delete', {id: commentaire.idCommentaire}) }}\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment_' ~ commentaire.idCommentaire) }}\">
                                                        <button class=\"community-menu-button text-danger\" type=\"submit\">Supprimer</button>
                                                    </form>
                                                </div>
                                            </details>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <div class=\"text-muted small\">Aucun commentaire pour le moment.</div>
                        {% endfor %}
                    </div>
                </div>
            </article>
        {% else %}
            <div class=\"card border-0 community-panel\">
                <div class=\"card-body community-empty\">
                    Aucun post trouvé. Publiez le premier message de la communauté.
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endif %}
", "Community/_feed.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\Community\\_feed.html.twig");
    }
}
