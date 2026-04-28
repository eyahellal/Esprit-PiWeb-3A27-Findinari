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
class __TwigTemplate_8e4a6c00d191a5750b206f3c53373351 extends Template
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

        yield "Community post";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<section class=\"community-page\">
  ";
        // line 5
        yield from $this->load("Community/_styles.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "  <div class=\"community-shell\" style=\"max-width:980px;\">
    <div class=\"community-main-column\">
      <div class=\"community-card community-post\" data-post-id=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "idPost", [], "any", false, false, false, 8), "html", null, true);
        yield "\" data-share-text=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "displayText", [], "any", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "displayText", [], "any", false, false, false, 8)) : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8)) : ("Community post")))))), "html_attr");
        yield "\">
        <div class=\"community-post-top\">
          <div class=\"community-avatar\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "utilisateur", [], "any", false, false, false, 10), "prenom", [], "any", false, false, false, 10), 0, 1)), "html", null, true);
        yield "</div>
          <div>
            <strong>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "utilisateur", [], "any", false, false, false, 12), "prenom", [], "any", false, false, false, 12), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 12, $this->source); })()), "utilisateur", [], "any", false, false, false, 12), "nom", [], "any", false, false, false, 12), "html", null, true);
        yield "</strong>
            <div class=\"community-meta-line\">
              <span>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "utilisateur", [], "any", false, false, false, 14), "gmail", [], "any", false, false, false, 14), "html", null, true);
        yield "</span>
              <span>•</span>
              <span>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "relativeTime", [], "any", false, false, false, 16), "html", null, true);
        yield "</span>
            </div>
            ";
        // line 18
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "communityDisplayHtml", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "              <div class=\"community-post-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 19, $this->source); })()), "communityDisplayHtml", [], "any", false, false, false, 19);
            yield "</div>
            ";
        }
        // line 21
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "communityHashtags", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "              <div class=\"community-meta-line mt-2\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "communityHashtags", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                yield "                  <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index", ["q" => $context["tag"], "filter" => "all"]), "html", null, true);
                yield "\" class=\"community-hashtag\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                yield "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "              </div>
            ";
        }
        // line 28
        yield "            ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "mediaItems", [], "any", false, false, false, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "              <div class=\"community-post-media\">
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "mediaItems", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 31
                yield "                  <div class=\"community-post-media-item ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 31) == "gif")) ? ("is-gif") : (""));
                yield "\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["media"], "url", [], "any", false, false, false, 31), "html", null, true);
                yield "\" alt=\"Post media\" loading=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 31) == "gif")) ? ("eager") : ("lazy"));
                yield "\" decoding=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 31) == "gif")) ? ("sync") : ("async"));
                yield "\"></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['media'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "              </div>
            ";
        }
        // line 35
        yield "          </div>
          <div class=\"community-share\">
            <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>Share</button>
            <div class=\"community-share-menu\">
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"native\">Share</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"x\">Share to X</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"facebook\">Share to Facebook</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"copy\">Copy post text</button>
            </div>
          </div>
        </div>

        <div class=\"community-divider\"></div>
        <div class=\"community-post-actions\">
          <div class=\"community-post-actions-left\">
            ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 50, $this->source); })()), "canLikeInCommunity", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "              <div class=\"community-reaction-wrap\" data-reaction-wrap>
                <div class=\"community-reaction-bar\">
                  ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["👍", "❤️", "😂", "😮", "😢", "😡"]);
            foreach ($context['_seq'] as $context["_key"] => $context["reaction"]) {
                // line 54
                yield "                    <button type=\"button\" class=\"community-reaction-option\" data-reaction=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reaction"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reaction"], "html", null, true);
                yield "</button>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                </div>
                <form method=\"post\" action=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 57, $this->source); })()), "idPost", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" data-like-form>
                  <button class=\"community-btn secondary\" type=\"submit\"><span data-reaction-label>";
            // line 58
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 58, $this->source); })()), "isLikedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 58, $this->source); })())], "method", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Liked") : ("Like"));
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 58, $this->source); })()), "nombreLikes", [], "any", false, false, false, 58), "html", null, true);
            yield ")</span></button>
                </form>
                <button type=\"button\" class=\"community-btn soft\" data-quick-reaction=\"❤️\">Love</button>
              </div>
            ";
        } else {
            // line 63
            yield "              <span class=\"community-stat\">Like unavailable</span>
            ";
        }
        // line 65
        yield "            <span class=\"community-stat\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 65, $this->source); })()), "nombreCommentaires", [], "any", false, false, false, 65), "html", null, true);
        yield " comments</span>
          </div>
          <div class=\"community-post-actions-right\">
            <div class=\"community-rating-pill\">
              <span class=\"community-rating-stars\"><span class=\"base\">★★★★★</span><span class=\"fill\" style=\"width: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 69, $this->source); })()), "communityRating", [], "any", false, false, false, 69), "percent", [], "any", false, false, false, 69), "html", null, true);
        yield "%\">★★★★★</span></span>
              <span class=\"community-helper\"><strong>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 70, $this->source); })()), "communityRating", [], "any", false, false, false, 70), "average", [], "any", false, false, false, 70), 1), "html", null, true);
        yield "</strong>/5 · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 70, $this->source); })()), "communityRating", [], "any", false, false, false, 70), "total", [], "any", false, false, false, 70), "html", null, true);
        yield " vote";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 70, $this->source); })()), "communityRating", [], "any", false, false, false, 70), "total", [], "any", false, false, false, 70) > 1)) ? ("s") : (""));
        yield "</span>
            </div>
            ";
        // line 72
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 72, $this->source); })()), "canLikeInCommunity", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "              <div class=\"community-star-buttons\" data-rating-box data-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 73, $this->source); })()), "idPost", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" style=\"display:none\">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 75
                yield "                  <button type=\"button\" class=\"community-rate-btn ";
                yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "communityRating", [], "any", false, false, false, 75), "userRating", [], "any", false, false, false, 75))) ? ("active") : (""));
                yield "\" data-star=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">★</button>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "              </div>
            ";
        }
        // line 79
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 79, $this->source); })()), "utilisateur", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 79, $this->source); })()), "canCreateCommunityPost", [], "any", false, false, false, 79)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 79, $this->source); })()), "communityAdmin", [], "any", false, false, false, 79))) {
            // line 80
            yield "              <div class=\"community-share\">
                <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>•••</button>
                <div class=\"community-share-menu\">
                  ";
            // line 83
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 83, $this->source); })()), "utilisateur", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 83, $this->source); })()), "canCreateCommunityPost", [], "any", false, false, false, 83))) {
                // line 84
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 84, $this->source); })()), "idPost", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" class=\"community-share-item\">Edit post</a>
                  ";
            }
            // line 86
            yield "                  <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 86, $this->source); })()), "idPost", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Delete this post?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 87, $this->source); })()), "idPost", [], "any", false, false, false, 87))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"community-share-item\">Delete post</button>
                  </form>
                </div>
              </div>
            ";
        }
        // line 93
        yield "          </div>
        </div>
      </div>

      <div class=\"community-card community-sidecard\">
        <h3 class=\"mb-3\">Comments</h3>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 99, $this->source); })()), "commentaires", [], "any", false, false, false, 99));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 100
            yield "          <div class=\"community-comment\" id=\"comment-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 100), "html", null, true);
            yield "\">
            <div class=\"d-flex gap-3 align-items-start\">
              <div class=\"community-avatar small\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102), 0, 1)), "html", null, true);
            yield "</div>
              <div style=\"min-width:0;flex:1;\">
                <div class=\"d-flex justify-content-between align-items-start gap-3\">
                  <div>
                    <div class=\"community-meta-line\"><strong style=\"color:var(--community-text)\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 106), "prenom", [], "any", false, false, false, 106), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 106), "nom", [], "any", false, false, false, 106), "html", null, true);
            yield "</strong><span>•</span><span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "relativeTime", [], "any", false, false, false, 106), "html", null, true);
            yield "</span></div>
                    <div class=\"community-post-text\" style=\"margin-top:8px;\">";
            // line 107
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "communityDisplayHtml", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "communityDisplayHtml", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 107))) : (CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 107)));
            yield "</div>
                    ";
            // line 108
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "mediaItems", [], "any", false, false, false, 108))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "                      <div class=\"community-post-media\" style=\"margin-top:10px;\">
                        ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "mediaItems", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 111
                    yield "                          <div class=\"community-post-media-item ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 111) == "gif")) ? ("is-gif") : (""));
                    yield "\"><img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["media"], "url", [], "any", false, false, false, 111), "html", null, true);
                    yield "\" alt=\"Comment media\" loading=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 111) == "gif")) ? ("eager") : ("lazy"));
                    yield "\" decoding=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 111) == "gif")) ? ("sync") : ("async"));
                    yield "\"></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "                      </div>
                    ";
            }
            // line 115
            yield "                  </div>
                  ";
            // line 116
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "utilisateur", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116))) {
                // line 117
                yield "                    <div class=\"community-share\">
                      <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>•••</button>
                      <div class=\"community-share-menu\">
                        <a href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 120)]), "html", null, true);
                yield "\" class=\"community-share-item\">Edit comment</a>
                        <form method=\"post\" action=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 121)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this comment?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "idCommentaire", [], "any", false, false, false, 122))), "html", null, true);
                yield "\">
                          <button type=\"submit\" class=\"community-share-item\">Delete comment</button>
                        </form>
                      </div>
                    </div>
                  ";
            }
            // line 128
            yield "                </div>
              </div>
            </div>
          </div>
        ";
            $context['_iterated'] = true;
        }
        // line 132
        if (!$context['_iterated']) {
            // line 133
            yield "          <div class=\"community-empty-state\">No comments yet.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "
        ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 136, $this->source); })()), "canCommentInCommunity", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "          ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 137, $this->source); })()), 'form_start', ["attr" => ["id" => "community-comment-form", "novalidate" => "novalidate"]]);
            yield "
            ";
            // line 138
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 138, $this->source); })()), "contenu", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "community-textarea", "style" => "min-height:120px;"]]);
            yield "
            ";
            // line 139
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 139, $this->source); })()), "contenu", [], "any", false, false, false, 139), 'errors');
            yield "
            <div class=\"community-inline-error\" id=\"community-comment-inline-error\"></div>
            <input type=\"hidden\" name=\"comment_selected_gif_url\" id=\"community-comment-selected-gif-url\">
            <div class=\"community-media-preview\" id=\"community-comment-media-preview\"></div>
            <div class=\"community-helper\" id=\"community-comment-media-status\"></div>
            <div class=\"community-comment-toolbar\">
              <div class=\"community-emoji-wrap\" id=\"community-emoji-wrap\">
                <button type=\"button\" class=\"community-btn secondary\" id=\"community-emoji-toggle\">Emoji</button>
                <div class=\"community-emoji-box\">
                  ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["😀", "😍", "🔥", "👏", "🎉", "🚀", "💡", "👍", "❤️", "😂", "😮", "😢"]);
            foreach ($context['_seq'] as $context["_key"] => $context["emoji"]) {
                // line 149
                yield "                    <button type=\"button\" class=\"community-emoji-btn\" data-emoji=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["emoji"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["emoji"], "html", null, true);
                yield "</button>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['emoji'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                </div>
              </div>
              <button type=\"button\" class=\"community-btn secondary\" id=\"community-comment-open-gif\">GIF</button>
              <button type=\"submit\" class=\"community-btn primary\">Comment</button>
            </div>
          ";
            // line 156
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 156, $this->source); })()), 'form_end');
            yield "
        ";
        } else {
            // line 158
            yield "          <div class=\"community-empty-state\">You cannot comment with your current role.</div>
        ";
        }
        // line 160
        yield "      </div>
    </div>
  </div>
</section>
<div class=\"community-modal\" id=\"community-comment-gif-modal\">
  <div class=\"community-modal-panel\">
    <div class=\"d-flex justify-content-between align-items-center gap-3 mb-3\">
      <div>
        <h4 class=\"mb-1\">Choose a GIF</h4>
        <div class=\"community-helper\">Search on Giphy and attach a GIF to your comment.</div>
      </div>
      <button type=\"button\" class=\"community-btn secondary\" data-community-close>Close</button>
    </div>
    <div class=\"community-search-wrap\" style=\"grid-template-columns:minmax(0,1fr) auto;\">
      <input type=\"text\" class=\"community-search\" id=\"community-comment-gif-query\" placeholder=\"Search GIFs...\">
      <button type=\"button\" class=\"community-btn primary\" id=\"community-comment-gif-search-btn\">Search</button>
    </div>
    <div class=\"community-gif-grid\" id=\"community-comment-gif-grid\"></div>
  </div>
</div>
<script>
(function () {
  function shareTextOnly(box, network) {
    const text = (box.closest('[data-post-id]')?.dataset.shareText || '').trim();
    const localUrl = window.location.origin.includes('localhost') || window.location.origin.includes('127.0.0.1');
    const postUrl = localUrl ? '' : window.location.href;
    if (network === 'copy') { navigator.clipboard?.writeText(text || postUrl || ''); alert('Post content copied.'); return; }
    if (network === 'native' && navigator.share) { navigator.share({text: text, url: postUrl || undefined}).catch(() => {}); return; }
    if (network === 'x') { window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(postUrl ? (text + ' ' + postUrl) : text), '_blank', 'noopener,noreferrer'); return; }
    if (network === 'facebook') {
      if (postUrl) {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(postUrl), '_blank', 'noopener,noreferrer');
      } else {
        navigator.clipboard?.writeText(text || '');
        window.open('https://www.facebook.com/', '_blank', 'noopener,noreferrer');
        alert('The post text was copied. Paste it on Facebook because localhost links cannot be shared publicly.');
      }
    }
  }

  document.querySelectorAll('[data-share-toggle]').forEach((button) => button.addEventListener('click', function () {
    const wrap = button.closest('.community-share');
    document.querySelectorAll('.community-share.open').forEach((node) => { if (node !== wrap) node.classList.remove('open'); });
    wrap?.classList.toggle('open');
  }));
  document.querySelectorAll('[data-share-network]').forEach((button) => button.addEventListener('click', function () { const box = button.closest('.community-share'); if (box) shareTextOnly(box, button.dataset.shareNetwork); box?.classList.remove('open'); }));
  document.addEventListener('click', function (event) { if (!event.target.closest('.community-share')) document.querySelectorAll('.community-share.open').forEach((node) => node.classList.remove('open')); });

  let reactionTimer = null;
  document.querySelectorAll('[data-reaction-wrap]').forEach((wrap) => {
    const card = wrap.closest('[data-post-id]');
    const label = wrap.querySelector('[data-reaction-label]');
    const likeForm = wrap.querySelector('[data-like-form]');
    const storageKey = 'community-reaction-' + (card?.dataset.postId || '0');
    const saved = localStorage.getItem(storageKey);
    if (saved && label) {
      const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
      label.textContent = saved + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
    }
    const open = () => { clearTimeout(reactionTimer); wrap.classList.add('open'); };
    const close = () => { clearTimeout(reactionTimer); reactionTimer = setTimeout(() => wrap.classList.remove('open'), 300); };
    wrap.addEventListener('mouseenter', open);
    wrap.addEventListener('mouseleave', close);
    wrap.querySelectorAll('[data-reaction]').forEach((option) => option.addEventListener('click', function () {
      localStorage.setItem(storageKey, option.dataset.reaction || '👍');
      if (label) {
        const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
        label.textContent = (option.dataset.reaction || '👍') + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
      }
      wrap.classList.remove('open');
      likeForm?.requestSubmit();
    }));
    wrap.querySelectorAll('[data-quick-reaction]').forEach((button) => button.addEventListener('click', function () {
      const reaction = button.dataset.quickReaction || 'Love';
      localStorage.setItem(storageKey, reaction);
      if (label) {
        const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
        label.textContent = reaction + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
      }
      wrap.classList.remove('open');
      likeForm?.requestSubmit();
    }));
  });

  document.querySelectorAll('[data-rating-box]').forEach((box) => {
    const stars = Array.from(box.querySelectorAll('[data-star]'));
    function paint(value) { stars.forEach((star) => star.classList.toggle('active', Number(star.dataset.star) <= value)); }
    stars.forEach((star) => star.addEventListener('click', async function () {
      const value = Number(star.dataset.star); paint(value);
      try {
        const response = await fetch(box.dataset.url, {method:'POST', headers:{'X-Requested-With':'XMLHttpRequest','Content-Type':'application/x-www-form-urlencoded'}, body:new URLSearchParams({rating:String(value)})});
        const data = await response.json();
        const pill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .community-helper');
        const fill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .fill');
        if (pill) pill.innerHTML = '<strong>' + Number(data.average || 0).toFixed(1) + '</strong>/5 · ' + Number(data.total || 0) + ' vote' + (Number(data.total || 0) > 1 ? 's' : '');
        if (fill) fill.style.width = Number(data.percent || 0) + '%';
      } catch (e) {}
    }));
  });

  const emojiWrap = document.getElementById('community-emoji-wrap');
  const emojiToggle = document.getElementById('community-emoji-toggle');
  const textarea = document.getElementById('";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 262, $this->source); })()), "contenu", [], "any", false, false, false, 262), "vars", [], "any", false, false, false, 262), "id", [], "any", false, false, false, 262), "html", null, true);
        yield "');
  const commentGifModal = document.getElementById('community-comment-gif-modal');
  const commentGifGrid = document.getElementById('community-comment-gif-grid');
  const commentGifQuery = document.getElementById('community-comment-gif-query');
  const commentGifHidden = document.getElementById('community-comment-selected-gif-url');
  const commentMediaPreview = document.getElementById('community-comment-media-preview');
  const commentMediaStatus = document.getElementById('community-comment-media-status');
  emojiToggle?.addEventListener('click', function () { emojiWrap?.classList.toggle('open'); });
  document.querySelectorAll('[data-emoji]').forEach((button) => button.addEventListener('click', function () {
    if (!textarea) return;
    const emoji = button.dataset.emoji || '';
    const start = textarea.selectionStart || textarea.value.length;
    const end = textarea.selectionEnd || textarea.value.length;
    textarea.value = textarea.value.substring(0, start) + emoji + textarea.value.substring(end);
    textarea.focus();
    textarea.selectionStart = textarea.selectionEnd = start + emoji.length;
    emojiWrap?.classList.remove('open');
  }));

  const form = document.getElementById('community-comment-form');
  const inlineError = document.getElementById('community-comment-inline-error');
  function toggleError(message) { if (!inlineError) return; inlineError.textContent = message || ''; inlineError.classList.toggle('show', !!message); }
  function setCommentMediaStatus(message) { if (commentMediaStatus) commentMediaStatus.textContent = message || ''; }
  async function preloadImage(url, label) {
    return new Promise((resolve, reject) => {
      const image = new Image();
      const timer = window.setTimeout(() => {
        image.onload = null;
        image.onerror = null;
        reject(new Error('Image timed out'));
      }, 12000);
      image.onload = () => { window.clearTimeout(timer); image.alt = label || 'Attachment'; resolve(image); };
      image.onerror = () => { window.clearTimeout(timer); reject(new Error('Image failed to load')); };
      image.src = url;
    });
  }
  async function replaceCommentPreviewItem(url, type, label, key) {
    if (!commentMediaPreview) return;
    commentMediaPreview.querySelector('[data-preview-key=\"' + CSS.escape(key) + '\"]')?.remove();
    const item = document.createElement('div');
    item.className = 'community-media-preview-item ' + (type === 'gif' ? 'is-gif' : '');
    item.dataset.previewKey = key;
    try {
      const image = await preloadImage(url, label);
      item.appendChild(image);
    } catch (error) {
      item.innerHTML = '<div style=\"display:flex;height:100%;align-items:center;justify-content:center;padding:16px;text-align:center;color:#475467;font-weight:700;\">' + (label || 'Attachment added') + '</div>';
    }
    commentMediaPreview.prepend(item);
  }
  async function loadCommentGifs(query) {
    if (!commentGifGrid) return;
    commentGifGrid.innerHTML = '<div class=\"community-helper\">Loading GIFs...</div>';
    try {
      const response = await fetch('";
        // line 316
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_gif_search");
        yield "?q=' + encodeURIComponent(query || ''));
      const data = await response.json();
      if (!response.ok || data.error) throw new Error(data.error || 'Unable to load GIFs right now.');
      commentGifGrid.innerHTML = '';
      (data.items || []).forEach((gif) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'community-gif-card';
        btn.innerHTML = '<img src=\"' + (gif.preview || gif.url) + '\" alt=\"gif\">';
        btn.addEventListener('click', async function () {
          toggleError('');
          if (commentGifHidden) commentGifHidden.value = gif.url;
          await replaceCommentPreviewItem(gif.url, 'gif', 'GIF attached', 'comment-gif');
          setCommentMediaStatus('GIF attached to your comment.');
          commentGifModal?.classList.remove('open');
        });
        commentGifGrid.appendChild(btn);
      });
      if (!commentGifGrid.innerHTML.trim()) {
        commentGifGrid.innerHTML = '<div class=\"community-empty-state\">' + (query ? 'No GIFs found for this search.' : 'No GIFs available right now.') + '</div>';
      }
    } catch (e) {
      commentGifGrid.innerHTML = '<div class=\"community-inline-error show\">' + (e.message || 'Unable to load GIFs right now.') + '</div>';
    }
  }
  document.getElementById('community-comment-open-gif')?.addEventListener('click', async function () {
    commentGifModal?.classList.add('open');
    if (commentGifGrid && !commentGifGrid.dataset.loaded) {
      commentGifGrid.dataset.loaded = '1';
      await loadCommentGifs('');
    }
  });
  document.getElementById('community-comment-gif-search-btn')?.addEventListener('click', () => loadCommentGifs(commentGifQuery?.value || ''));
  commentGifQuery?.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      loadCommentGifs(commentGifQuery.value || '');
    }
  });
  if (form && textarea) {
    form.addEventListener('submit', async function (event) {
      if (form.dataset.skipModeration === '1') { form.dataset.skipModeration = '0'; return; }
      event.preventDefault();
      toggleError('');
      if (!(textarea.value || '').trim() && !(commentGifHidden?.value || '').trim()) {
        toggleError('Add some text or attach a GIF before commenting.');
        return;
      }
      try {
        const response = await fetch('";
        // line 365
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_moderate");
        yield "', {method:'POST', headers:{'Content-Type':'application/json', 'X-Requested-With':'XMLHttpRequest'}, body:JSON.stringify({text: textarea.value || ''})});
        const data = await response.json();
        if (data.flagged) { toggleError(data.message || 'This comment contains a blocked word or toxic language.'); return; }
      } catch (e) {}
      form.dataset.skipModeration = '1';
      form.submit();
    });
  }
})();
</script>
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
        return array (  716 => 365,  664 => 316,  607 => 262,  503 => 160,  499 => 158,  494 => 156,  487 => 151,  476 => 149,  472 => 148,  460 => 139,  456 => 138,  451 => 137,  449 => 136,  446 => 135,  439 => 133,  437 => 132,  429 => 128,  420 => 122,  416 => 121,  412 => 120,  407 => 117,  405 => 116,  402 => 115,  398 => 113,  383 => 111,  379 => 110,  376 => 109,  374 => 108,  370 => 107,  362 => 106,  355 => 102,  349 => 100,  344 => 99,  336 => 93,  327 => 87,  322 => 86,  316 => 84,  314 => 83,  309 => 80,  306 => 79,  302 => 77,  291 => 75,  287 => 74,  282 => 73,  280 => 72,  271 => 70,  267 => 69,  259 => 65,  255 => 63,  245 => 58,  241 => 57,  238 => 56,  227 => 54,  223 => 53,  219 => 51,  217 => 50,  200 => 35,  196 => 33,  181 => 31,  177 => 30,  174 => 29,  171 => 28,  167 => 26,  156 => 24,  152 => 23,  149 => 22,  146 => 21,  140 => 19,  138 => 18,  133 => 16,  128 => 14,  121 => 12,  116 => 10,  109 => 8,  105 => 6,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Community post{% endblock %}
{% block body %}
<section class=\"community-page\">
  {% include 'Community/_styles.html.twig' %}
  <div class=\"community-shell\" style=\"max-width:980px;\">
    <div class=\"community-main-column\">
      <div class=\"community-card community-post\" data-post-id=\"{{ post.idPost }}\" data-share-text=\"{{ (post.displayText ?: post.titre ?: 'Community post')|striptags|trim|e('html_attr') }}\">
        <div class=\"community-post-top\">
          <div class=\"community-avatar\">{{ post.utilisateur.prenom|slice(0,1)|upper }}</div>
          <div>
            <strong>{{ post.utilisateur.prenom }} {{ post.utilisateur.nom }}</strong>
            <div class=\"community-meta-line\">
              <span>{{ post.utilisateur.gmail }}</span>
              <span>•</span>
              <span>{{ post.relativeTime }}</span>
            </div>
            {% if post.communityDisplayHtml %}
              <div class=\"community-post-text\">{{ post.communityDisplayHtml|raw }}</div>
            {% endif %}
            {% if post.communityHashtags is not empty %}
              <div class=\"community-meta-line mt-2\">
                {% for tag in post.communityHashtags %}
                  <a href=\"{{ path('community_index', {q: tag, filter: 'all'}) }}\" class=\"community-hashtag\">{{ tag }}</a>
                {% endfor %}
              </div>
            {% endif %}
            {% if post.mediaItems is not empty %}
              <div class=\"community-post-media\">
                {% for media in post.mediaItems %}
                  <div class=\"community-post-media-item {{ media.type == 'gif' ? 'is-gif' : '' }}\"><img src=\"{{ media.url }}\" alt=\"Post media\" loading=\"{{ media.type == 'gif' ? 'eager' : 'lazy' }}\" decoding=\"{{ media.type == 'gif' ? 'sync' : 'async' }}\"></div>
                {% endfor %}
              </div>
            {% endif %}
          </div>
          <div class=\"community-share\">
            <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>Share</button>
            <div class=\"community-share-menu\">
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"native\">Share</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"x\">Share to X</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"facebook\">Share to Facebook</button>
              <button type=\"button\" class=\"community-share-item\" data-share-network=\"copy\">Copy post text</button>
            </div>
          </div>
        </div>

        <div class=\"community-divider\"></div>
        <div class=\"community-post-actions\">
          <div class=\"community-post-actions-left\">
            {% if currentUser.canLikeInCommunity %}
              <div class=\"community-reaction-wrap\" data-reaction-wrap>
                <div class=\"community-reaction-bar\">
                  {% for reaction in ['👍','❤️','😂','😮','😢','😡'] %}
                    <button type=\"button\" class=\"community-reaction-option\" data-reaction=\"{{ reaction }}\">{{ reaction }}</button>
                  {% endfor %}
                </div>
                <form method=\"post\" action=\"{{ path('community_like', {id: post.idPost}) }}\" data-like-form>
                  <button class=\"community-btn secondary\" type=\"submit\"><span data-reaction-label>{{ post.isLikedBy(currentUser) ? 'Liked' : 'Like' }} ({{ post.nombreLikes }})</span></button>
                </form>
                <button type=\"button\" class=\"community-btn soft\" data-quick-reaction=\"❤️\">Love</button>
              </div>
            {% else %}
              <span class=\"community-stat\">Like unavailable</span>
            {% endif %}
            <span class=\"community-stat\">{{ post.nombreCommentaires }} comments</span>
          </div>
          <div class=\"community-post-actions-right\">
            <div class=\"community-rating-pill\">
              <span class=\"community-rating-stars\"><span class=\"base\">★★★★★</span><span class=\"fill\" style=\"width: {{ post.communityRating.percent }}%\">★★★★★</span></span>
              <span class=\"community-helper\"><strong>{{ post.communityRating.average|number_format(1) }}</strong>/5 · {{ post.communityRating.total }} vote{{ post.communityRating.total > 1 ? 's' : '' }}</span>
            </div>
            {% if currentUser.canLikeInCommunity %}
              <div class=\"community-star-buttons\" data-rating-box data-url=\"{{ path('community_rate', {id: post.idPost}) }}\" style=\"display:none\">
                {% for i in 1..5 %}
                  <button type=\"button\" class=\"community-rate-btn {{ i <= post.communityRating.userRating ? 'active' : '' }}\" data-star=\"{{ i }}\">★</button>
                {% endfor %}
              </div>
            {% endif %}
            {% if (post.utilisateur.id == currentUser.id and currentUser.canCreateCommunityPost) or currentUser.communityAdmin %}
              <div class=\"community-share\">
                <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>•••</button>
                <div class=\"community-share-menu\">
                  {% if post.utilisateur.id == currentUser.id and currentUser.canCreateCommunityPost %}
                    <a href=\"{{ path('community_edit', {id: post.idPost}) }}\" class=\"community-share-item\">Edit post</a>
                  {% endif %}
                  <form method=\"post\" action=\"{{ path('community_delete', {id: post.idPost}) }}\" onsubmit=\"return confirm('Delete this post?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_post_' ~ post.idPost) }}\">
                    <button type=\"submit\" class=\"community-share-item\">Delete post</button>
                  </form>
                </div>
              </div>
            {% endif %}
          </div>
        </div>
      </div>

      <div class=\"community-card community-sidecard\">
        <h3 class=\"mb-3\">Comments</h3>
        {% for commentaire in post.commentaires %}
          <div class=\"community-comment\" id=\"comment-{{ commentaire.idCommentaire }}\">
            <div class=\"d-flex gap-3 align-items-start\">
              <div class=\"community-avatar small\">{{ commentaire.utilisateur.prenom|slice(0,1)|upper }}</div>
              <div style=\"min-width:0;flex:1;\">
                <div class=\"d-flex justify-content-between align-items-start gap-3\">
                  <div>
                    <div class=\"community-meta-line\"><strong style=\"color:var(--community-text)\">{{ commentaire.utilisateur.prenom }} {{ commentaire.utilisateur.nom }}</strong><span>•</span><span>{{ commentaire.relativeTime }}</span></div>
                    <div class=\"community-post-text\" style=\"margin-top:8px;\">{{ commentaire.communityDisplayHtml|default(commentaire.contenu)|raw }}</div>
                    {% if commentaire.mediaItems is not empty %}
                      <div class=\"community-post-media\" style=\"margin-top:10px;\">
                        {% for media in commentaire.mediaItems %}
                          <div class=\"community-post-media-item {{ media.type == 'gif' ? 'is-gif' : '' }}\"><img src=\"{{ media.url }}\" alt=\"Comment media\" loading=\"{{ media.type == 'gif' ? 'eager' : 'lazy' }}\" decoding=\"{{ media.type == 'gif' ? 'sync' : 'async' }}\"></div>
                        {% endfor %}
                      </div>
                    {% endif %}
                  </div>
                  {% if commentaire.utilisateur.id == currentUser.id %}
                    <div class=\"community-share\">
                      <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>•••</button>
                      <div class=\"community-share-menu\">
                        <a href=\"{{ path('community_comment_edit', {id: commentaire.idCommentaire}) }}\" class=\"community-share-item\">Edit comment</a>
                        <form method=\"post\" action=\"{{ path('community_comment_delete', {id: commentaire.idCommentaire}) }}\" onsubmit=\"return confirm('Delete this comment?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_comment_' ~ commentaire.idCommentaire) }}\">
                          <button type=\"submit\" class=\"community-share-item\">Delete comment</button>
                        </form>
                      </div>
                    </div>
                  {% endif %}
                </div>
              </div>
            </div>
          </div>
        {% else %}
          <div class=\"community-empty-state\">No comments yet.</div>
        {% endfor %}

        {% if currentUser.canCommentInCommunity %}
          {{ form_start(commentForm, {attr: {id: 'community-comment-form', novalidate: 'novalidate'}}) }}
            {{ form_widget(commentForm.contenu, {attr: {class: 'community-textarea', style: 'min-height:120px;'}}) }}
            {{ form_errors(commentForm.contenu) }}
            <div class=\"community-inline-error\" id=\"community-comment-inline-error\"></div>
            <input type=\"hidden\" name=\"comment_selected_gif_url\" id=\"community-comment-selected-gif-url\">
            <div class=\"community-media-preview\" id=\"community-comment-media-preview\"></div>
            <div class=\"community-helper\" id=\"community-comment-media-status\"></div>
            <div class=\"community-comment-toolbar\">
              <div class=\"community-emoji-wrap\" id=\"community-emoji-wrap\">
                <button type=\"button\" class=\"community-btn secondary\" id=\"community-emoji-toggle\">Emoji</button>
                <div class=\"community-emoji-box\">
                  {% for emoji in ['😀','😍','🔥','👏','🎉','🚀','💡','👍','❤️','😂','😮','😢'] %}
                    <button type=\"button\" class=\"community-emoji-btn\" data-emoji=\"{{ emoji }}\">{{ emoji }}</button>
                  {% endfor %}
                </div>
              </div>
              <button type=\"button\" class=\"community-btn secondary\" id=\"community-comment-open-gif\">GIF</button>
              <button type=\"submit\" class=\"community-btn primary\">Comment</button>
            </div>
          {{ form_end(commentForm) }}
        {% else %}
          <div class=\"community-empty-state\">You cannot comment with your current role.</div>
        {% endif %}
      </div>
    </div>
  </div>
</section>
<div class=\"community-modal\" id=\"community-comment-gif-modal\">
  <div class=\"community-modal-panel\">
    <div class=\"d-flex justify-content-between align-items-center gap-3 mb-3\">
      <div>
        <h4 class=\"mb-1\">Choose a GIF</h4>
        <div class=\"community-helper\">Search on Giphy and attach a GIF to your comment.</div>
      </div>
      <button type=\"button\" class=\"community-btn secondary\" data-community-close>Close</button>
    </div>
    <div class=\"community-search-wrap\" style=\"grid-template-columns:minmax(0,1fr) auto;\">
      <input type=\"text\" class=\"community-search\" id=\"community-comment-gif-query\" placeholder=\"Search GIFs...\">
      <button type=\"button\" class=\"community-btn primary\" id=\"community-comment-gif-search-btn\">Search</button>
    </div>
    <div class=\"community-gif-grid\" id=\"community-comment-gif-grid\"></div>
  </div>
</div>
<script>
(function () {
  function shareTextOnly(box, network) {
    const text = (box.closest('[data-post-id]')?.dataset.shareText || '').trim();
    const localUrl = window.location.origin.includes('localhost') || window.location.origin.includes('127.0.0.1');
    const postUrl = localUrl ? '' : window.location.href;
    if (network === 'copy') { navigator.clipboard?.writeText(text || postUrl || ''); alert('Post content copied.'); return; }
    if (network === 'native' && navigator.share) { navigator.share({text: text, url: postUrl || undefined}).catch(() => {}); return; }
    if (network === 'x') { window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(postUrl ? (text + ' ' + postUrl) : text), '_blank', 'noopener,noreferrer'); return; }
    if (network === 'facebook') {
      if (postUrl) {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(postUrl), '_blank', 'noopener,noreferrer');
      } else {
        navigator.clipboard?.writeText(text || '');
        window.open('https://www.facebook.com/', '_blank', 'noopener,noreferrer');
        alert('The post text was copied. Paste it on Facebook because localhost links cannot be shared publicly.');
      }
    }
  }

  document.querySelectorAll('[data-share-toggle]').forEach((button) => button.addEventListener('click', function () {
    const wrap = button.closest('.community-share');
    document.querySelectorAll('.community-share.open').forEach((node) => { if (node !== wrap) node.classList.remove('open'); });
    wrap?.classList.toggle('open');
  }));
  document.querySelectorAll('[data-share-network]').forEach((button) => button.addEventListener('click', function () { const box = button.closest('.community-share'); if (box) shareTextOnly(box, button.dataset.shareNetwork); box?.classList.remove('open'); }));
  document.addEventListener('click', function (event) { if (!event.target.closest('.community-share')) document.querySelectorAll('.community-share.open').forEach((node) => node.classList.remove('open')); });

  let reactionTimer = null;
  document.querySelectorAll('[data-reaction-wrap]').forEach((wrap) => {
    const card = wrap.closest('[data-post-id]');
    const label = wrap.querySelector('[data-reaction-label]');
    const likeForm = wrap.querySelector('[data-like-form]');
    const storageKey = 'community-reaction-' + (card?.dataset.postId || '0');
    const saved = localStorage.getItem(storageKey);
    if (saved && label) {
      const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
      label.textContent = saved + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
    }
    const open = () => { clearTimeout(reactionTimer); wrap.classList.add('open'); };
    const close = () => { clearTimeout(reactionTimer); reactionTimer = setTimeout(() => wrap.classList.remove('open'), 300); };
    wrap.addEventListener('mouseenter', open);
    wrap.addEventListener('mouseleave', close);
    wrap.querySelectorAll('[data-reaction]').forEach((option) => option.addEventListener('click', function () {
      localStorage.setItem(storageKey, option.dataset.reaction || '👍');
      if (label) {
        const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
        label.textContent = (option.dataset.reaction || '👍') + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
      }
      wrap.classList.remove('open');
      likeForm?.requestSubmit();
    }));
    wrap.querySelectorAll('[data-quick-reaction]').forEach((button) => button.addEventListener('click', function () {
      const reaction = button.dataset.quickReaction || 'Love';
      localStorage.setItem(storageKey, reaction);
      if (label) {
        const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
        label.textContent = reaction + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
      }
      wrap.classList.remove('open');
      likeForm?.requestSubmit();
    }));
  });

  document.querySelectorAll('[data-rating-box]').forEach((box) => {
    const stars = Array.from(box.querySelectorAll('[data-star]'));
    function paint(value) { stars.forEach((star) => star.classList.toggle('active', Number(star.dataset.star) <= value)); }
    stars.forEach((star) => star.addEventListener('click', async function () {
      const value = Number(star.dataset.star); paint(value);
      try {
        const response = await fetch(box.dataset.url, {method:'POST', headers:{'X-Requested-With':'XMLHttpRequest','Content-Type':'application/x-www-form-urlencoded'}, body:new URLSearchParams({rating:String(value)})});
        const data = await response.json();
        const pill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .community-helper');
        const fill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .fill');
        if (pill) pill.innerHTML = '<strong>' + Number(data.average || 0).toFixed(1) + '</strong>/5 · ' + Number(data.total || 0) + ' vote' + (Number(data.total || 0) > 1 ? 's' : '');
        if (fill) fill.style.width = Number(data.percent || 0) + '%';
      } catch (e) {}
    }));
  });

  const emojiWrap = document.getElementById('community-emoji-wrap');
  const emojiToggle = document.getElementById('community-emoji-toggle');
  const textarea = document.getElementById('{{ commentForm.contenu.vars.id }}');
  const commentGifModal = document.getElementById('community-comment-gif-modal');
  const commentGifGrid = document.getElementById('community-comment-gif-grid');
  const commentGifQuery = document.getElementById('community-comment-gif-query');
  const commentGifHidden = document.getElementById('community-comment-selected-gif-url');
  const commentMediaPreview = document.getElementById('community-comment-media-preview');
  const commentMediaStatus = document.getElementById('community-comment-media-status');
  emojiToggle?.addEventListener('click', function () { emojiWrap?.classList.toggle('open'); });
  document.querySelectorAll('[data-emoji]').forEach((button) => button.addEventListener('click', function () {
    if (!textarea) return;
    const emoji = button.dataset.emoji || '';
    const start = textarea.selectionStart || textarea.value.length;
    const end = textarea.selectionEnd || textarea.value.length;
    textarea.value = textarea.value.substring(0, start) + emoji + textarea.value.substring(end);
    textarea.focus();
    textarea.selectionStart = textarea.selectionEnd = start + emoji.length;
    emojiWrap?.classList.remove('open');
  }));

  const form = document.getElementById('community-comment-form');
  const inlineError = document.getElementById('community-comment-inline-error');
  function toggleError(message) { if (!inlineError) return; inlineError.textContent = message || ''; inlineError.classList.toggle('show', !!message); }
  function setCommentMediaStatus(message) { if (commentMediaStatus) commentMediaStatus.textContent = message || ''; }
  async function preloadImage(url, label) {
    return new Promise((resolve, reject) => {
      const image = new Image();
      const timer = window.setTimeout(() => {
        image.onload = null;
        image.onerror = null;
        reject(new Error('Image timed out'));
      }, 12000);
      image.onload = () => { window.clearTimeout(timer); image.alt = label || 'Attachment'; resolve(image); };
      image.onerror = () => { window.clearTimeout(timer); reject(new Error('Image failed to load')); };
      image.src = url;
    });
  }
  async function replaceCommentPreviewItem(url, type, label, key) {
    if (!commentMediaPreview) return;
    commentMediaPreview.querySelector('[data-preview-key=\"' + CSS.escape(key) + '\"]')?.remove();
    const item = document.createElement('div');
    item.className = 'community-media-preview-item ' + (type === 'gif' ? 'is-gif' : '');
    item.dataset.previewKey = key;
    try {
      const image = await preloadImage(url, label);
      item.appendChild(image);
    } catch (error) {
      item.innerHTML = '<div style=\"display:flex;height:100%;align-items:center;justify-content:center;padding:16px;text-align:center;color:#475467;font-weight:700;\">' + (label || 'Attachment added') + '</div>';
    }
    commentMediaPreview.prepend(item);
  }
  async function loadCommentGifs(query) {
    if (!commentGifGrid) return;
    commentGifGrid.innerHTML = '<div class=\"community-helper\">Loading GIFs...</div>';
    try {
      const response = await fetch('{{ path('community_gif_search') }}?q=' + encodeURIComponent(query || ''));
      const data = await response.json();
      if (!response.ok || data.error) throw new Error(data.error || 'Unable to load GIFs right now.');
      commentGifGrid.innerHTML = '';
      (data.items || []).forEach((gif) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'community-gif-card';
        btn.innerHTML = '<img src=\"' + (gif.preview || gif.url) + '\" alt=\"gif\">';
        btn.addEventListener('click', async function () {
          toggleError('');
          if (commentGifHidden) commentGifHidden.value = gif.url;
          await replaceCommentPreviewItem(gif.url, 'gif', 'GIF attached', 'comment-gif');
          setCommentMediaStatus('GIF attached to your comment.');
          commentGifModal?.classList.remove('open');
        });
        commentGifGrid.appendChild(btn);
      });
      if (!commentGifGrid.innerHTML.trim()) {
        commentGifGrid.innerHTML = '<div class=\"community-empty-state\">' + (query ? 'No GIFs found for this search.' : 'No GIFs available right now.') + '</div>';
      }
    } catch (e) {
      commentGifGrid.innerHTML = '<div class=\"community-inline-error show\">' + (e.message || 'Unable to load GIFs right now.') + '</div>';
    }
  }
  document.getElementById('community-comment-open-gif')?.addEventListener('click', async function () {
    commentGifModal?.classList.add('open');
    if (commentGifGrid && !commentGifGrid.dataset.loaded) {
      commentGifGrid.dataset.loaded = '1';
      await loadCommentGifs('');
    }
  });
  document.getElementById('community-comment-gif-search-btn')?.addEventListener('click', () => loadCommentGifs(commentGifQuery?.value || ''));
  commentGifQuery?.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      loadCommentGifs(commentGifQuery.value || '');
    }
  });
  if (form && textarea) {
    form.addEventListener('submit', async function (event) {
      if (form.dataset.skipModeration === '1') { form.dataset.skipModeration = '0'; return; }
      event.preventDefault();
      toggleError('');
      if (!(textarea.value || '').trim() && !(commentGifHidden?.value || '').trim()) {
        toggleError('Add some text or attach a GIF before commenting.');
        return;
      }
      try {
        const response = await fetch('{{ path('community_moderate') }}', {method:'POST', headers:{'Content-Type':'application/json', 'X-Requested-With':'XMLHttpRequest'}, body:JSON.stringify({text: textarea.value || ''})});
        const data = await response.json();
        if (data.flagged) { toggleError(data.message || 'This comment contains a blocked word or toxic language.'); return; }
      } catch (e) {}
      form.dataset.skipModeration = '1';
      form.submit();
    });
  }
})();
</script>
{% endblock %}
", "Community/show.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\Community\\show.html.twig");
    }
}
