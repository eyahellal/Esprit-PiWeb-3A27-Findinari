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
class __TwigTemplate_cd0df2860b982fb2cb318a4237e7f8db extends Template
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

        yield "Community";
        
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
        yield "  <div class=\"community-shell\">
    <div class=\"community-card community-header\">
      <div>
        <span class=\"community-chip\">Community feed</span>
        <h1 class=\"community-title\">Share with the community</h1>
        <p class=\"community-subtitle\">Enjoy the feed</p>
      </div>
      <div class=\"community-chip\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["feedCount"]) || array_key_exists("feedCount", $context) ? $context["feedCount"] : (function () { throw new RuntimeError('Variable "feedCount" does not exist.', 13, $this->source); })()), "html", null, true);
        yield " posts</div>
    </div>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                yield "        <div class=\"alert ";
                yield ((($context["label"] == "success")) ? ("alert-success") : ("alert-danger"));
                yield " mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
    <div class=\"community-layout\">
      <div class=\"community-main-column\">
        <div class=\"community-card community-composer\">
          <div class=\"community-composer-grid\">
            <div class=\"community-avatar\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentUser"] ?? null), "prenom", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "U")) : ("U")), 0, 1)), "html", null, true);
        yield "</div>
            <div>
              <div class=\"d-flex justify-content-between gap-3 flex-wrap align-items-center mb-2\">
                <div>
                  <strong>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</strong>
                  <div class=\"community-helper\">Compose a post with image upload, GIFs, AI image generation and moderation.</div>
                </div>
                <div class=\"community-helper\"><span id=\"community-char-count\">0</span> / 2000</div>
              </div>

              ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 36, $this->source); })()), "canCreateCommunityPost", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["id" => "community-post-form", "data-moderated-form" => "1", "novalidate" => "novalidate"]]);
            yield "
                  ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 38, $this->source); })()), "contenu", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "community-textarea", "id" => "community-post-textarea", "placeholder" => "What is happening in your community today? Use #hashtags to make topics clickable."]]);
            yield "
                  ";
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 39, $this->source); })()), "contenu", [], "any", false, false, false, 39), 'errors');
            yield "
                  <div class=\"community-inline-error\" id=\"community-post-inline-error\"></div>
                  <div class=\"mt-3\">
                    <input
                      type=\"text\"
                      class=\"community-search\"
                      id=\"community-image-prompt\"
                      maxlength=\"500\"
                      placeholder=\"Describe the image to generate, for example: a young woman working on a laptop in a modern cafe, realistic photo\"
                    >
                    <div class=\"community-helper mt-2\">This field is used only for AI image generation. Your post text stays separate.</div>
                  </div>

                  <input type=\"hidden\" name=\"selected_gif_url\" id=\"community-selected-gif-url\">
                  <input type=\"hidden\" name=\"uploaded_image_url\" id=\"community-uploaded-image-url\">
                  <input type=\"hidden\" name=\"ai_image_url\" id=\"community-ai-image-url\">

                  <div class=\"community-media-preview\" id=\"community-media-preview\"></div>
                  <div class=\"community-helper\" id=\"community-media-status\"></div>

                  <div class=\"community-composer-actions\">
                    <div class=\"community-action-row\">
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-upload-image-trigger\">Upload image</button>
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-open-gif\">GIF</button>
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-generate-image\">Generate image</button>
                      <input type=\"file\" accept=\"image/*\" id=\"community-upload-image-input\" class=\"community-hidden-input\">
                    </div>
                    <button class=\"community-btn primary\" type=\"submit\">Post</button>
                  </div>
                ";
            // line 68
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["postForm"]) || array_key_exists("postForm", $context) ? $context["postForm"] : (function () { throw new RuntimeError('Variable "postForm" does not exist.', 68, $this->source); })()), 'form_end');
            yield "
              ";
        } else {
            // line 70
            yield "                <div class=\"community-empty-state\">Only users with the INFLUENCER role can create posts. You can still like and comment on posts.</div>
              ";
        }
        // line 72
        yield "            </div>
          </div>
        </div>

        <div class=\"community-card community-sidecard\">
          <form method=\"get\" action=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index");
        yield "\" class=\"community-search-wrap\" id=\"community-search-form\">
            <input type=\"text\" class=\"community-search\" id=\"community-live-search\" name=\"q\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("communityQuery", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["communityQuery"]) || array_key_exists("communityQuery", $context) ? $context["communityQuery"] : (function () { throw new RuntimeError('Variable "communityQuery" does not exist.', 78, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Search posts, authors or #hashtags...\">
            <select class=\"community-select\" name=\"filter\" id=\"community-live-filter\">
              <option value=\"all\" ";
        // line 80
        yield ((((isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 80, $this->source); })()) == "all")) ? ("selected") : (""));
        yield ">All posts</option>
              <option value=\"comment\" ";
        // line 81
        yield ((((isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 81, $this->source); })()) == "comment")) ? ("selected") : (""));
        yield ">With comments</option>
              <option value=\"media\" ";
        // line 82
        yield ((((isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 82, $this->source); })()) == "media")) ? ("selected") : (""));
        yield ">With media</option>
            </select>
            <button type=\"submit\" class=\"community-btn secondary\">Search</button>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index");
        yield "\" class=\"community-btn secondary\">Reset</a>
          </form>
        </div>

        <div class=\"community-feed\" id=\"community-feed-grid\">
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 91
            yield "            ";
            $context["shareText"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "displayText", [], "any", false, false, false, 91)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "displayText", [], "any", false, false, false, 91)) : (((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 91)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 91)) : ("Community post"))))));
            // line 92
            yield "            <article class=\"community-card community-post\" data-post-card data-search=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ((((((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "displayText", [], "any", false, false, false, 92) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 92), "prenom", [], "any", false, false, false, 92)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 92), "nom", [], "any", false, false, false, 92)) . " ") . Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityHashtags", [], "any", false, false, false, 92), " "))), "html", null, true);
            yield "\" data-media=\"";
            yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaItems", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\" data-comments=\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreCommentaires", [], "any", false, false, false, 92) > 0)) ? ("1") : ("0"));
            yield "\" data-post-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 92), "html", null, true);
            yield "\" data-post-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 92)])), "html_attr");
            yield "\" data-share-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 92, $this->source); })()), "html_attr");
            yield "\">
              <div class=\"community-post-top\">
                <div class=\"community-avatar\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 94), "prenom", [], "any", false, false, false, 94), 0, 1)), "html", null, true);
            yield "</div>
                <div>
                  <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" class=\"community-link-muted\">
                    <strong>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 97), "prenom", [], "any", false, false, false, 97), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 97), "nom", [], "any", false, false, false, 97), "html", null, true);
            yield "</strong>
                  </a>
                  <div class=\"community-meta-line\">
                    <span>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 100), "gmail", [], "any", false, false, false, 100), "html", null, true);
            yield "</span>
                    <span>•</span>
                    <span>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "relativeTime", [], "any", false, false, false, 102), "html", null, true);
            yield "</span>
                  </div>
                  ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityDisplayHtml", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "                    <div class=\"community-post-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityDisplayHtml", [], "any", false, false, false, 105);
                yield "</div>
                  ";
            }
            // line 107
            yield "                  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityHashtags", [], "any", false, false, false, 107))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 108
                yield "                    <div class=\"community-meta-line mt-2\">
                      ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityHashtags", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 110
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index", ["q" => $context["tag"], "filter" => "all"]), "html", null, true);
                    yield "\" class=\"community-hashtag\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                    yield "</a>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "                    </div>
                  ";
            }
            // line 114
            yield "                  ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaItems", [], "any", false, false, false, 114))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 115
                yield "                    <div class=\"community-post-media\">
                      ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "mediaItems", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                    // line 117
                    yield "                        <div class=\"community-post-media-item ";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 117) == "gif")) ? ("is-gif") : (""));
                    yield "\"><img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["media"], "url", [], "any", false, false, false, 117), "html", null, true);
                    yield "\" alt=\"Post media\" loading=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 117) == "gif")) ? ("eager") : ("lazy"));
                    yield "\" decoding=\"";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 117) == "gif")) ? ("sync") : ("async"));
                    yield "\"></div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['media'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "                    </div>
                  ";
            }
            // line 121
            yield "                </div>
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
            // line 136
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 136, $this->source); })()), "canLikeInCommunity", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 137
                yield "                    <div class=\"community-reaction-wrap\" data-reaction-wrap>
                      <div class=\"community-reaction-bar\">
                        ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(["👍", "❤️", "😂", "😮", "😢", "😡"]);
                foreach ($context['_seq'] as $context["_key"] => $context["reaction"]) {
                    // line 140
                    yield "                          <button type=\"button\" class=\"community-reaction-option\" data-reaction=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reaction"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["reaction"], "html", null, true);
                    yield "</button>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reaction'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                yield "                      </div>
                      <form method=\"post\" action=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 143)]), "html", null, true);
                yield "\" data-like-form>
                        <button class=\"community-btn secondary\" type=\"submit\"><span data-reaction-label>";
                // line 144
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isLikedBy", [(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 144, $this->source); })())], "method", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Liked") : ("Like"));
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreLikes", [], "any", false, false, false, 144), "html", null, true);
                yield ")</span></button>
                      </form>
                      <button type=\"button\" class=\"community-btn soft\" data-quick-reaction=\"❤️\">React</button>
                    </div>
                  ";
            } else {
                // line 149
                yield "                    <span class=\"community-stat\">Like unavailable</span>
                  ";
            }
            // line 151
            yield "                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 151)]), "html", null, true);
            yield "\" class=\"community-stat\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nombreCommentaires", [], "any", false, false, false, 151), "html", null, true);
            yield " comments</a>
                </div>
                <div class=\"community-post-actions-right\">
                  <div class=\"community-rating-pill\">
                    <span class=\"community-rating-stars\">
                      <span class=\"base\">★★★★★</span>
                      <span class=\"fill\" style=\"width: ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityRating", [], "any", false, false, false, 157), "percent", [], "any", false, false, false, 157), "html", null, true);
            yield "%\">★★★★★</span>
                    </span>
                    <span class=\"community-helper\"><strong>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityRating", [], "any", false, false, false, 159), "average", [], "any", false, false, false, 159), 1), "html", null, true);
            yield "</strong>/5 · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityRating", [], "any", false, false, false, 159), "total", [], "any", false, false, false, 159), "html", null, true);
            yield " vote";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityRating", [], "any", false, false, false, 159), "total", [], "any", false, false, false, 159) > 1)) ? ("s") : (""));
            yield "</span>
                  </div>
                  ";
            // line 161
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 161, $this->source); })()), "canLikeInCommunity", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 162
                yield "                    <div class=\"community-star-buttons\" data-rating-box data-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_rate", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 162)]), "html", null, true);
                yield "\" style=\"display:none\">
                      ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 164
                    yield "                        <button type=\"button\" class=\"community-rate-btn ";
                    yield ((($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "communityRating", [], "any", false, false, false, 164), "userRating", [], "any", false, false, false, 164))) ? ("active") : (""));
                    yield "\" data-star=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\">★</button>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                yield "                    </div>
                  ";
            }
            // line 168
            yield "                  ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 168, $this->source); })()), "canCreateCommunityPost", [], "any", false, false, false, 168)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 168, $this->source); })()), "communityAdmin", [], "any", false, false, false, 168))) {
                // line 169
                yield "                    <div class=\"community-share openable\">
                      <button type=\"button\" class=\"community-btn secondary\" data-share-toggle>•••</button>
                      <div class=\"community-share-menu\">
                        ";
                // line 172
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "utilisateur", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 172, $this->source); })()), "id", [], "any", false, false, false, 172)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 172, $this->source); })()), "canCreateCommunityPost", [], "any", false, false, false, 172))) {
                    // line 173
                    yield "                          <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 173)]), "html", null, true);
                    yield "\" class=\"community-share-item\">Edit post</a>
                        ";
                }
                // line 175
                yield "                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 175)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this post?');\">
                          <input type=\"hidden\" name=\"_token\" value=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_post_" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "idPost", [], "any", false, false, false, 176))), "html", null, true);
                yield "\">
                          <button type=\"submit\" class=\"community-share-item\">Delete post</button>
                        </form>
                      </div>
                    </div>
                  ";
            }
            // line 182
            yield "                </div>
              </div>
            </article>
          ";
            $context['_iterated'] = true;
        }
        // line 185
        if (!$context['_iterated']) {
            // line 186
            yield "            <div class=\"community-card community-empty-state\">No posts found.</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        yield "        </div>

        ";
        // line 190
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 190, $this->source); })()), "paginationData", [], "any", false, false, false, 190), "pageCount", [], "any", false, false, false, 190) > 1)) {
            // line 191
            yield "          <nav class=\"community-pagination\" aria-label=\"Community pagination\">
            ";
            // line 192
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["posts"] ?? null), "paginationData", [], "any", false, true, false, 192), "previous", [], "any", true, true, false, 192)) {
                // line 193
                yield "              <a class=\"community-page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index", ["page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 193, $this->source); })()), "paginationData", [], "any", false, false, false, 193), "previous", [], "any", false, false, false, 193), "q" => (isset($context["communityQuery"]) || array_key_exists("communityQuery", $context) ? $context["communityQuery"] : (function () { throw new RuntimeError('Variable "communityQuery" does not exist.', 193, $this->source); })()), "filter" => (isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 193, $this->source); })())]), "html", null, true);
                yield "\">‹</a>
            ";
            }
            // line 195
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 195, $this->source); })()), "paginationData", [], "any", false, false, false, 195), "pagesInRange", [], "any", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 196
                yield "              <a class=\"community-page-link ";
                yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 196, $this->source); })()), "paginationData", [], "any", false, false, false, 196), "current", [], "any", false, false, false, 196))) ? ("active") : (""));
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index", ["page" => $context["page"], "q" => (isset($context["communityQuery"]) || array_key_exists("communityQuery", $context) ? $context["communityQuery"] : (function () { throw new RuntimeError('Variable "communityQuery" does not exist.', 196, $this->source); })()), "filter" => (isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 196, $this->source); })())]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["posts"] ?? null), "paginationData", [], "any", false, true, false, 198), "next", [], "any", true, true, false, 198)) {
                // line 199
                yield "              <a class=\"community-page-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_index", ["page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 199, $this->source); })()), "paginationData", [], "any", false, false, false, 199), "next", [], "any", false, false, false, 199), "q" => (isset($context["communityQuery"]) || array_key_exists("communityQuery", $context) ? $context["communityQuery"] : (function () { throw new RuntimeError('Variable "communityQuery" does not exist.', 199, $this->source); })()), "filter" => (isset($context["communityFilter"]) || array_key_exists("communityFilter", $context) ? $context["communityFilter"] : (function () { throw new RuntimeError('Variable "communityFilter" does not exist.', 199, $this->source); })())]), "html", null, true);
                yield "\">›</a>
            ";
            }
            // line 201
            yield "          </nav>
        ";
        }
        // line 203
        yield "      </div>

      <aside class=\"community-side-column\">
        <div class=\"community-card community-trend-card\">
          <div class=\"d-flex justify-content-between align-items-center gap-3 mb-2\">
            <strong>Recommended for you</strong>
            <span class=\"community-chip\">For you</span>
          </div>
          <div class=\"community-helper mb-3\">Based on your likes, ratings, comments and matching hashtags.</div>
          <div class=\"community-suggestions\">
            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recommendations"]) || array_key_exists("recommendations", $context) ? $context["recommendations"] : (function () { throw new RuntimeError('Variable "recommendations" does not exist.', 213, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recommendation"]) {
            // line 214
            yield "              <a class=\"community-mini-post\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "idPost", [], "any", false, false, false, 214)]), "html", null, true);
            yield "\">
                <div class=\"community-avatar small\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "utilisateur", [], "any", false, false, false, 215), "prenom", [], "any", false, false, false, 215), 0, 1)), "html", null, true);
            yield "</div>
                <div>
                  <strong>";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "utilisateur", [], "any", false, false, false, 217), "prenom", [], "any", false, false, false, 217), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "utilisateur", [], "any", false, false, false, 217), "nom", [], "any", false, false, false, 217), "html", null, true);
            yield "</strong>
                  <p>";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "displayText", [], "any", false, false, false, 218), 0, 120) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recommendation"], "displayText", [], "any", false, false, false, 218)) > 120)) ? ("…") : (""))), "html", null, true);
            yield "</p>
                </div>
              </a>
            ";
            $context['_iterated'] = true;
        }
        // line 221
        if (!$context['_iterated']) {
            // line 222
            yield "              <div class=\"community-empty-state\">Interact with posts and the recommendation rail will fill up.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recommendation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<div class=\"community-modal\" id=\"community-gif-modal\">
  <div class=\"community-modal-panel\">
    <div class=\"d-flex justify-content-between align-items-center gap-3 mb-3\">
      <div>
        <h4 class=\"mb-1\">Choose a GIF</h4>
        <div class=\"community-helper\">Search on Giphy and click a GIF to attach it.</div>
      </div>
      <button type=\"button\" class=\"community-btn secondary\" data-community-close>Close</button>
    </div>
    <div class=\"community-search-wrap\" style=\"grid-template-columns:minmax(0,1fr) auto;\">
      <input type=\"text\" class=\"community-search\" id=\"community-gif-query\" placeholder=\"Search GIFs...\">
      <button type=\"button\" class=\"community-btn primary\" id=\"community-gif-search-btn\">Search</button>
    </div>
    <div class=\"community-gif-grid\" id=\"community-gif-grid\"></div>
  </div>
</div>

<script>
(function () {
  const textarea = document.getElementById('community-post-textarea');
  const imagePromptInput = document.getElementById('community-image-prompt');
  const charCount = document.getElementById('community-char-count');
  const preview = document.getElementById('community-media-preview');
  const postForm = document.getElementById('community-post-form');
  const inlineError = document.getElementById('community-post-inline-error');
  const gifModal = document.getElementById('community-gif-modal');
  const gifGrid = document.getElementById('community-gif-grid');
  const gifQuery = document.getElementById('community-gif-query');
  const hiddenGif = document.getElementById('community-selected-gif-url');
  const hiddenUpload = document.getElementById('community-uploaded-image-url');
  const hiddenAi = document.getElementById('community-ai-image-url');
  const uploadInput = document.getElementById('community-upload-image-input');
  const mediaStatus = document.getElementById('community-media-status');

  function hasAttachedMedia() {
    return Boolean((hiddenGif?.value || '').trim() || (hiddenUpload?.value || '').trim() || (hiddenAi?.value || '').trim());
  }

  function toggleError(message) {
    if (!inlineError) return;
    inlineError.textContent = message || '';
    inlineError.classList.toggle('show', !!message);
  }

  function updateCount() {
    if (textarea && charCount) {
      charCount.textContent = String(textarea.value.length);
    }
  }

  function setMediaStatus(message) {
    if (mediaStatus) {
      mediaStatus.textContent = message || '';
    }
  }

  function preloadImage(url, label) {
    return new Promise((resolve, reject) => {
      const image = new Image();
      const timer = window.setTimeout(() => {
        image.onload = null;
        image.onerror = null;
        reject(new Error('The media is taking too long to load.'));
      }, 20000);
      image.loading = 'lazy';
      image.alt = label || 'media';
      image.onload = () => {
        window.clearTimeout(timer);
        resolve(image);
      };
      image.onerror = () => {
        window.clearTimeout(timer);
        reject(new Error('The media could not be loaded.'));
      };
      image.src = url;
    });
  }

  async function addPreviewItem(url, type, label, key) {
    if (!preview || !url) return;
    const previewKey = key || (type + ':' + url);
    preview.querySelector('[data-preview-key=\"' + CSS.escape(previewKey) + '\"]')?.remove();
    const item = document.createElement('div');
    item.className = 'community-media-preview-item ' + (type === 'gif' ? 'is-gif' : '');
    item.dataset.previewKey = previewKey;
    try {
      const image = await preloadImage(url, label);
      item.appendChild(image);
    } catch (error) {
      item.innerHTML = '<div style=\"display:flex;height:100%;align-items:center;justify-content:center;padding:16px;text-align:center;color:#475467;font-weight:700;\">' + (label || 'Attachment added') + '</div>';
    }
    preview.prepend(item);
  }

  async function replacePreviewItem(url, type, label, key) {
    await addPreviewItem(url, type, label, key);
  }

  function shareTextOnly(box, network) {
    const text = (box.closest('[data-post-id]')?.dataset.shareText || '').trim();
    const localUrl = window.location.origin.includes('localhost') || window.location.origin.includes('127.0.0.1');
    const postCard = box.closest('[data-post-id]');
    const postUrl = localUrl ? '' : (postCard?.dataset.postUrl || '');

    if (network === 'copy') {
      navigator.clipboard?.writeText(text || postUrl || '');
      alert('Post content copied.');
      return;
    }
    if (network === 'native' && navigator.share) {
      navigator.share({text: text, url: postUrl || undefined}).catch(() => {});
      return;
    }
    if (network === 'x') {
      window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(postUrl ? (text + ' ' + postUrl) : text), '_blank', 'noopener,noreferrer');
      return;
    }
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

  async function loadGifs(query) {
    if (!gifGrid) return;
    gifGrid.innerHTML = '<div class=\"community-helper\">Loading GIFs...</div>';
    try {
      const response = await fetch('";
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_gif_search");
        yield "?q=' + encodeURIComponent(query || ''));
      const data = await response.json();
      if (!response.ok || data.error) {
        throw new Error(data.error || 'Unable to load GIFs right now.');
      }
      gifGrid.innerHTML = '';
      (data.items || []).forEach((gif) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'community-gif-card';
        btn.innerHTML = '<img src=\"' + (gif.preview || gif.url) + '\" alt=\"gif\">';
        btn.addEventListener('click', async function () {
          toggleError('');
          try {
            if (hiddenGif) hiddenGif.value = gif.url;
            await replacePreviewItem(gif.preview || gif.url, 'gif', 'GIF attached', 'selected-gif');
            setMediaStatus('GIF attached and ready to post.');
            gifModal?.classList.remove('open');
          } catch (error) {
            toggleError(error.message || 'Unable to attach this GIF.');
          }
        });
        gifGrid.appendChild(btn);
      });
      if (!gifGrid.innerHTML.trim()) {
        gifGrid.innerHTML = '<div class=\"community-empty-state\">' + (query ? 'No GIFs found for this search.' : 'No GIFs available right now.') + '</div>';
      }
    } catch (e) {
      gifGrid.innerHTML = '<div class=\"community-inline-error show\">' + (e.message || 'Unable to load GIFs right now.') + '</div>';
    }
  }

  updateCount();
  textarea?.addEventListener('input', updateCount);

  document.querySelectorAll('[data-share-toggle]').forEach((button) => {
    button.addEventListener('click', function () {
      const wrap = button.closest('.community-share');
      document.querySelectorAll('.community-share.open').forEach((node) => {
        if (node !== wrap) node.classList.remove('open');
      });
      wrap?.classList.toggle('open');
    });
  });
  document.querySelectorAll('[data-share-network]').forEach((button) => {
    button.addEventListener('click', function () {
      const box = button.closest('.community-share');
      if (box) shareTextOnly(box, button.dataset.shareNetwork);
      box?.classList.remove('open');
    });
  });
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.community-share')) {
      document.querySelectorAll('.community-share.open').forEach((node) => node.classList.remove('open'));
    }
  });

  document.getElementById('community-open-gif')?.addEventListener('click', async function () {
    gifModal?.classList.add('open');
    if (gifGrid && !gifGrid.dataset.loaded) {
      gifGrid.dataset.loaded = '1';
      await loadGifs('');
    }
  });
  document.getElementById('community-gif-search-btn')?.addEventListener('click', () => loadGifs(gifQuery?.value || ''));
  gifQuery?.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      loadGifs(gifQuery.value || '');
    }
  });
  document.querySelectorAll('[data-community-close]').forEach((button) => button.addEventListener('click', function () { gifModal?.classList.remove('open'); }));

  document.getElementById('community-upload-image-trigger')?.addEventListener('click', function () {
    uploadInput?.click();
  });
  uploadInput?.addEventListener('change', async function () {
    const file = uploadInput.files && uploadInput.files[0];
    if (!file) return;
    const tempUrl = URL.createObjectURL(file);
    const formData = new FormData();
    const controller = new AbortController();
    const timeoutId = window.setTimeout(() => controller.abort(), 30000);
    formData.append('file', file);
    toggleError('');
    setMediaStatus('Uploading image...');
    await addPreviewItem(tempUrl, 'image', 'Selected image', 'uploaded-image');
    try {
      const response = await fetch('";
        // line 451
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_media_upload");
        yield "', {
        method: 'POST',
        body: formData,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        signal: controller.signal
      });
      const data = await response.json();
      if (!response.ok || !data.url) {
        throw new Error(data.error || 'Upload failed');
      }
      if (hiddenAi) hiddenAi.value = '';
      if (hiddenUpload) hiddenUpload.value = data.url;
      await replacePreviewItem(data.url, 'image', 'Uploaded image', 'uploaded-image');
      setMediaStatus(data.warning || 'Image attached and ready to post.');
    } catch (e) {
      if (hiddenUpload) hiddenUpload.value = '';
      toggleError(e.name === 'AbortError' ? 'Image upload took too long. Please try again.' : (e.message || 'Unable to upload image.'));
      setMediaStatus('');
    } finally {
      window.clearTimeout(timeoutId);
      window.setTimeout(() => URL.revokeObjectURL(tempUrl), 15000);
      uploadInput.value = '';
    }
  });

  document.getElementById('community-generate-image')?.addEventListener('click', async function () {
    const button = this;
    const prompt = (imagePromptInput?.value || '').trim();
    if (!prompt) {
      toggleError('Please describe the image you want to generate in the AI image prompt field.');
      imagePromptInput?.focus();
      return;
    }
    const controller = new AbortController();
    const timeoutId = window.setTimeout(() => controller.abort(), 60000);
    toggleError('');
    setMediaStatus('Generating image...');
    button.disabled = true;
    try {
      const response = await fetch('";
        // line 490
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_ai_image");
        yield "', {
        method: 'POST',
        headers: {'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest'},
        body: JSON.stringify({prompt}),
        signal: controller.signal
      });
      const data = await response.json();
      if (!response.ok || !data.url) {
        throw new Error(data.error || 'Image generation failed');
      }
      if (hiddenUpload) hiddenUpload.value = '';
      if (hiddenAi) hiddenAi.value = data.url;
      await replacePreviewItem(data.url, 'image', 'AI image attached', 'ai-image');
      setMediaStatus(data.warning || 'AI image attached and ready to post.');
    } catch (e) {
      if (hiddenAi) hiddenAi.value = '';
      toggleError(e.name === 'AbortError' ? 'Image generation took too long. Please try again.' : (e.message || 'Unable to generate image.'));
      setMediaStatus('');
    } finally {
      window.clearTimeout(timeoutId);
      button.disabled = false;
    }
  });

  if (postForm && textarea) {
    postForm.addEventListener('submit', async function (event) {
      if (postForm.dataset.skipModeration === '1') {
        postForm.dataset.skipModeration = '0';
        return;
      }
      event.preventDefault();
      toggleError('');
      if (!(textarea.value || '').trim() && !hasAttachedMedia()) {
        toggleError('Add some text or attach a GIF/image before posting.');
        return;
      }
      try {
        const response = await fetch('";
        // line 527
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("community_moderate");
        yield "', {
          method: 'POST',
          headers: {'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest'},
          body: JSON.stringify({text: textarea.value || ''})
        });
        const data = await response.json();
        if (data.flagged) {
          toggleError(data.message || 'This content contains a blocked word or toxic language.');
          return;
        }
      } catch (error) {}
      postForm.dataset.skipModeration = '1';
      postForm.submit();
    });
  }

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
    wrap.querySelectorAll('[data-reaction]').forEach((option) => {
      option.addEventListener('click', function () {
        localStorage.setItem(storageKey, option.dataset.reaction || '👍');
        if (label) {
          const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
          label.textContent = (option.dataset.reaction || '👍') + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
        }
        wrap.classList.remove('open');
        likeForm?.requestSubmit();
      });
    });
    wrap.querySelectorAll('[data-quick-reaction]').forEach((button) => {
      button.addEventListener('click', function () {
        const reaction = button.dataset.quickReaction || 'Love';
        localStorage.setItem(storageKey, reaction);
        if (label) {
          const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
          label.textContent = reaction + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
        }
        wrap.classList.remove('open');
        likeForm?.requestSubmit();
      });
    });
  });

  document.querySelectorAll('[data-rating-box]').forEach((box) => {
    const stars = Array.from(box.querySelectorAll('[data-star]'));
    function paint(value) {
      stars.forEach((star) => star.classList.toggle('active', Number(star.dataset.star) <= value));
    }
    stars.forEach((star) => {
      star.addEventListener('click', async function () {
        const value = Number(star.dataset.star);
        paint(value);
        try {
          const body = new URLSearchParams({rating: String(value)});
          const response = await fetch(box.dataset.url, {
            method: 'POST',
            headers: {'X-Requested-With': 'XMLHttpRequest', 'Content-Type': 'application/x-www-form-urlencoded'},
            body
          });
          const data = await response.json();
          if (data.error) return;
          const info = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .community-helper');
          const fill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .fill');
          if (info) info.innerHTML = '<strong>' + Number(data.average || 0).toFixed(1) + '</strong>/5 · ' + Number(data.total || 0) + ' vote' + (Number(data.total || 0) > 1 ? 's' : '');
          if (fill) fill.style.width = Number(data.percent || 0) + '%';
        } catch (e) {}
      });
    });
  });

  const searchInput = document.getElementById('community-live-search');
  const filterInput = document.getElementById('community-live-filter');
  function applyLocalFilter() {
    const term = (searchInput?.value || '').trim().toLowerCase();
    const filter = filterInput?.value || 'all';
    document.querySelectorAll('[data-post-card]').forEach((card) => {
      const matchesTerm = !term || (card.dataset.search || '').includes(term);
      const matchesFilter = filter === 'all' || (filter === 'media' && card.dataset.media === '1') || (filter === 'comment' && card.dataset.comments === '1');
      card.style.display = matchesTerm && matchesFilter ? '' : 'none';
    });
  }
  searchInput?.addEventListener('input', applyLocalFilter);
  filterInput?.addEventListener('change', applyLocalFilter);
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
        return array (  943 => 527,  903 => 490,  861 => 451,  770 => 363,  629 => 224,  622 => 222,  620 => 221,  612 => 218,  606 => 217,  601 => 215,  596 => 214,  591 => 213,  579 => 203,  575 => 201,  569 => 199,  566 => 198,  553 => 196,  548 => 195,  542 => 193,  540 => 192,  537 => 191,  535 => 190,  531 => 188,  524 => 186,  522 => 185,  515 => 182,  506 => 176,  501 => 175,  495 => 173,  493 => 172,  488 => 169,  485 => 168,  481 => 166,  470 => 164,  466 => 163,  461 => 162,  459 => 161,  450 => 159,  445 => 157,  433 => 151,  429 => 149,  419 => 144,  415 => 143,  412 => 142,  401 => 140,  397 => 139,  393 => 137,  391 => 136,  374 => 121,  370 => 119,  355 => 117,  351 => 116,  348 => 115,  345 => 114,  341 => 112,  330 => 110,  326 => 109,  323 => 108,  320 => 107,  314 => 105,  312 => 104,  307 => 102,  302 => 100,  294 => 97,  290 => 96,  285 => 94,  269 => 92,  266 => 91,  261 => 90,  253 => 85,  247 => 82,  243 => 81,  239 => 80,  234 => 78,  230 => 77,  223 => 72,  219 => 70,  214 => 68,  182 => 39,  178 => 38,  173 => 37,  171 => 36,  160 => 30,  153 => 26,  146 => 21,  140 => 20,  129 => 18,  124 => 17,  120 => 16,  114 => 13,  105 => 6,  103 => 5,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Community{% endblock %}
{% block body %}
<section class=\"community-page\">
  {% include 'Community/_styles.html.twig' %}
  <div class=\"community-shell\">
    <div class=\"community-card community-header\">
      <div>
        <span class=\"community-chip\">Community feed</span>
        <h1 class=\"community-title\">Share with the community</h1>
        <p class=\"community-subtitle\">Enjoy the feed</p>
      </div>
      <div class=\"community-chip\">{{ feedCount }} posts</div>
    </div>

    {% for label, messages in app.flashes %}
      {% for message in messages %}
        <div class=\"alert {{ label == 'success' ? 'alert-success' : 'alert-danger' }} mb-3\">{{ message }}</div>
      {% endfor %}
    {% endfor %}

    <div class=\"community-layout\">
      <div class=\"community-main-column\">
        <div class=\"community-card community-composer\">
          <div class=\"community-composer-grid\">
            <div class=\"community-avatar\">{{ currentUser.prenom|default('U')|slice(0,1)|upper }}</div>
            <div>
              <div class=\"d-flex justify-content-between gap-3 flex-wrap align-items-center mb-2\">
                <div>
                  <strong>{{ currentUser.prenom }} {{ currentUser.nom }}</strong>
                  <div class=\"community-helper\">Compose a post with image upload, GIFs, AI image generation and moderation.</div>
                </div>
                <div class=\"community-helper\"><span id=\"community-char-count\">0</span> / 2000</div>
              </div>

              {% if currentUser.canCreateCommunityPost %}
                {{ form_start(postForm, {attr: {id: 'community-post-form', 'data-moderated-form': '1', novalidate: 'novalidate'}}) }}
                  {{ form_widget(postForm.contenu, {attr: {class: 'community-textarea', id: 'community-post-textarea', placeholder: 'What is happening in your community today? Use #hashtags to make topics clickable.'}}) }}
                  {{ form_errors(postForm.contenu) }}
                  <div class=\"community-inline-error\" id=\"community-post-inline-error\"></div>
                  <div class=\"mt-3\">
                    <input
                      type=\"text\"
                      class=\"community-search\"
                      id=\"community-image-prompt\"
                      maxlength=\"500\"
                      placeholder=\"Describe the image to generate, for example: a young woman working on a laptop in a modern cafe, realistic photo\"
                    >
                    <div class=\"community-helper mt-2\">This field is used only for AI image generation. Your post text stays separate.</div>
                  </div>

                  <input type=\"hidden\" name=\"selected_gif_url\" id=\"community-selected-gif-url\">
                  <input type=\"hidden\" name=\"uploaded_image_url\" id=\"community-uploaded-image-url\">
                  <input type=\"hidden\" name=\"ai_image_url\" id=\"community-ai-image-url\">

                  <div class=\"community-media-preview\" id=\"community-media-preview\"></div>
                  <div class=\"community-helper\" id=\"community-media-status\"></div>

                  <div class=\"community-composer-actions\">
                    <div class=\"community-action-row\">
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-upload-image-trigger\">Upload image</button>
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-open-gif\">GIF</button>
                      <button type=\"button\" class=\"community-btn secondary\" id=\"community-generate-image\">Generate image</button>
                      <input type=\"file\" accept=\"image/*\" id=\"community-upload-image-input\" class=\"community-hidden-input\">
                    </div>
                    <button class=\"community-btn primary\" type=\"submit\">Post</button>
                  </div>
                {{ form_end(postForm) }}
              {% else %}
                <div class=\"community-empty-state\">Only users with the INFLUENCER role can create posts. You can still like and comment on posts.</div>
              {% endif %}
            </div>
          </div>
        </div>

        <div class=\"community-card community-sidecard\">
          <form method=\"get\" action=\"{{ path('community_index') }}\" class=\"community-search-wrap\" id=\"community-search-form\">
            <input type=\"text\" class=\"community-search\" id=\"community-live-search\" name=\"q\" value=\"{{ communityQuery|default('') }}\" placeholder=\"Search posts, authors or #hashtags...\">
            <select class=\"community-select\" name=\"filter\" id=\"community-live-filter\">
              <option value=\"all\" {{ communityFilter == 'all' ? 'selected' : '' }}>All posts</option>
              <option value=\"comment\" {{ communityFilter == 'comment' ? 'selected' : '' }}>With comments</option>
              <option value=\"media\" {{ communityFilter == 'media' ? 'selected' : '' }}>With media</option>
            </select>
            <button type=\"submit\" class=\"community-btn secondary\">Search</button>
            <a href=\"{{ path('community_index') }}\" class=\"community-btn secondary\">Reset</a>
          </form>
        </div>

        <div class=\"community-feed\" id=\"community-feed-grid\">
          {% for post in posts %}
            {% set shareText = (post.displayText ?: post.titre ?: 'Community post')|striptags|trim %}
            <article class=\"community-card community-post\" data-post-card data-search=\"{{ (post.displayText ~ ' ' ~ post.utilisateur.prenom ~ ' ' ~ post.utilisateur.nom ~ ' ' ~ (post.communityHashtags|join(' ')))|lower }}\" data-media=\"{{ post.mediaItems is not empty ? '1' : '0' }}\" data-comments=\"{{ post.nombreCommentaires > 0 ? '1' : '0' }}\" data-post-id=\"{{ post.idPost }}\" data-post-url=\"{{ absolute_url(path('community_show', {id: post.idPost}))|e('html_attr') }}\" data-share-text=\"{{ shareText|e('html_attr') }}\">
              <div class=\"community-post-top\">
                <div class=\"community-avatar\">{{ post.utilisateur.prenom|slice(0,1)|upper }}</div>
                <div>
                  <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"community-link-muted\">
                    <strong>{{ post.utilisateur.prenom }} {{ post.utilisateur.nom }}</strong>
                  </a>
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
                      <button type=\"button\" class=\"community-btn soft\" data-quick-reaction=\"❤️\">React</button>
                    </div>
                  {% else %}
                    <span class=\"community-stat\">Like unavailable</span>
                  {% endif %}
                  <a href=\"{{ path('community_show', {id: post.idPost}) }}\" class=\"community-stat\">{{ post.nombreCommentaires }} comments</a>
                </div>
                <div class=\"community-post-actions-right\">
                  <div class=\"community-rating-pill\">
                    <span class=\"community-rating-stars\">
                      <span class=\"base\">★★★★★</span>
                      <span class=\"fill\" style=\"width: {{ post.communityRating.percent }}%\">★★★★★</span>
                    </span>
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
                    <div class=\"community-share openable\">
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
            </article>
          {% else %}
            <div class=\"community-card community-empty-state\">No posts found.</div>
          {% endfor %}
        </div>

        {% if posts.paginationData.pageCount > 1 %}
          <nav class=\"community-pagination\" aria-label=\"Community pagination\">
            {% if posts.paginationData.previous is defined %}
              <a class=\"community-page-link\" href=\"{{ path('community_index', {page: posts.paginationData.previous, q: communityQuery, filter: communityFilter}) }}\">‹</a>
            {% endif %}
            {% for page in posts.paginationData.pagesInRange %}
              <a class=\"community-page-link {{ page == posts.paginationData.current ? 'active' : '' }}\" href=\"{{ path('community_index', {page: page, q: communityQuery, filter: communityFilter}) }}\">{{ page }}</a>
            {% endfor %}
            {% if posts.paginationData.next is defined %}
              <a class=\"community-page-link\" href=\"{{ path('community_index', {page: posts.paginationData.next, q: communityQuery, filter: communityFilter}) }}\">›</a>
            {% endif %}
          </nav>
        {% endif %}
      </div>

      <aside class=\"community-side-column\">
        <div class=\"community-card community-trend-card\">
          <div class=\"d-flex justify-content-between align-items-center gap-3 mb-2\">
            <strong>Recommended for you</strong>
            <span class=\"community-chip\">For you</span>
          </div>
          <div class=\"community-helper mb-3\">Based on your likes, ratings, comments and matching hashtags.</div>
          <div class=\"community-suggestions\">
            {% for recommendation in recommendations %}
              <a class=\"community-mini-post\" href=\"{{ path('community_show', {id: recommendation.idPost}) }}\">
                <div class=\"community-avatar small\">{{ recommendation.utilisateur.prenom|slice(0,1)|upper }}</div>
                <div>
                  <strong>{{ recommendation.utilisateur.prenom }} {{ recommendation.utilisateur.nom }}</strong>
                  <p>{{ recommendation.displayText|slice(0, 120) ~ (recommendation.displayText|length > 120 ? '…' : '') }}</p>
                </div>
              </a>
            {% else %}
              <div class=\"community-empty-state\">Interact with posts and the recommendation rail will fill up.</div>
            {% endfor %}
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<div class=\"community-modal\" id=\"community-gif-modal\">
  <div class=\"community-modal-panel\">
    <div class=\"d-flex justify-content-between align-items-center gap-3 mb-3\">
      <div>
        <h4 class=\"mb-1\">Choose a GIF</h4>
        <div class=\"community-helper\">Search on Giphy and click a GIF to attach it.</div>
      </div>
      <button type=\"button\" class=\"community-btn secondary\" data-community-close>Close</button>
    </div>
    <div class=\"community-search-wrap\" style=\"grid-template-columns:minmax(0,1fr) auto;\">
      <input type=\"text\" class=\"community-search\" id=\"community-gif-query\" placeholder=\"Search GIFs...\">
      <button type=\"button\" class=\"community-btn primary\" id=\"community-gif-search-btn\">Search</button>
    </div>
    <div class=\"community-gif-grid\" id=\"community-gif-grid\"></div>
  </div>
</div>

<script>
(function () {
  const textarea = document.getElementById('community-post-textarea');
  const imagePromptInput = document.getElementById('community-image-prompt');
  const charCount = document.getElementById('community-char-count');
  const preview = document.getElementById('community-media-preview');
  const postForm = document.getElementById('community-post-form');
  const inlineError = document.getElementById('community-post-inline-error');
  const gifModal = document.getElementById('community-gif-modal');
  const gifGrid = document.getElementById('community-gif-grid');
  const gifQuery = document.getElementById('community-gif-query');
  const hiddenGif = document.getElementById('community-selected-gif-url');
  const hiddenUpload = document.getElementById('community-uploaded-image-url');
  const hiddenAi = document.getElementById('community-ai-image-url');
  const uploadInput = document.getElementById('community-upload-image-input');
  const mediaStatus = document.getElementById('community-media-status');

  function hasAttachedMedia() {
    return Boolean((hiddenGif?.value || '').trim() || (hiddenUpload?.value || '').trim() || (hiddenAi?.value || '').trim());
  }

  function toggleError(message) {
    if (!inlineError) return;
    inlineError.textContent = message || '';
    inlineError.classList.toggle('show', !!message);
  }

  function updateCount() {
    if (textarea && charCount) {
      charCount.textContent = String(textarea.value.length);
    }
  }

  function setMediaStatus(message) {
    if (mediaStatus) {
      mediaStatus.textContent = message || '';
    }
  }

  function preloadImage(url, label) {
    return new Promise((resolve, reject) => {
      const image = new Image();
      const timer = window.setTimeout(() => {
        image.onload = null;
        image.onerror = null;
        reject(new Error('The media is taking too long to load.'));
      }, 20000);
      image.loading = 'lazy';
      image.alt = label || 'media';
      image.onload = () => {
        window.clearTimeout(timer);
        resolve(image);
      };
      image.onerror = () => {
        window.clearTimeout(timer);
        reject(new Error('The media could not be loaded.'));
      };
      image.src = url;
    });
  }

  async function addPreviewItem(url, type, label, key) {
    if (!preview || !url) return;
    const previewKey = key || (type + ':' + url);
    preview.querySelector('[data-preview-key=\"' + CSS.escape(previewKey) + '\"]')?.remove();
    const item = document.createElement('div');
    item.className = 'community-media-preview-item ' + (type === 'gif' ? 'is-gif' : '');
    item.dataset.previewKey = previewKey;
    try {
      const image = await preloadImage(url, label);
      item.appendChild(image);
    } catch (error) {
      item.innerHTML = '<div style=\"display:flex;height:100%;align-items:center;justify-content:center;padding:16px;text-align:center;color:#475467;font-weight:700;\">' + (label || 'Attachment added') + '</div>';
    }
    preview.prepend(item);
  }

  async function replacePreviewItem(url, type, label, key) {
    await addPreviewItem(url, type, label, key);
  }

  function shareTextOnly(box, network) {
    const text = (box.closest('[data-post-id]')?.dataset.shareText || '').trim();
    const localUrl = window.location.origin.includes('localhost') || window.location.origin.includes('127.0.0.1');
    const postCard = box.closest('[data-post-id]');
    const postUrl = localUrl ? '' : (postCard?.dataset.postUrl || '');

    if (network === 'copy') {
      navigator.clipboard?.writeText(text || postUrl || '');
      alert('Post content copied.');
      return;
    }
    if (network === 'native' && navigator.share) {
      navigator.share({text: text, url: postUrl || undefined}).catch(() => {});
      return;
    }
    if (network === 'x') {
      window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(postUrl ? (text + ' ' + postUrl) : text), '_blank', 'noopener,noreferrer');
      return;
    }
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

  async function loadGifs(query) {
    if (!gifGrid) return;
    gifGrid.innerHTML = '<div class=\"community-helper\">Loading GIFs...</div>';
    try {
      const response = await fetch('{{ path('community_gif_search') }}?q=' + encodeURIComponent(query || ''));
      const data = await response.json();
      if (!response.ok || data.error) {
        throw new Error(data.error || 'Unable to load GIFs right now.');
      }
      gifGrid.innerHTML = '';
      (data.items || []).forEach((gif) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'community-gif-card';
        btn.innerHTML = '<img src=\"' + (gif.preview || gif.url) + '\" alt=\"gif\">';
        btn.addEventListener('click', async function () {
          toggleError('');
          try {
            if (hiddenGif) hiddenGif.value = gif.url;
            await replacePreviewItem(gif.preview || gif.url, 'gif', 'GIF attached', 'selected-gif');
            setMediaStatus('GIF attached and ready to post.');
            gifModal?.classList.remove('open');
          } catch (error) {
            toggleError(error.message || 'Unable to attach this GIF.');
          }
        });
        gifGrid.appendChild(btn);
      });
      if (!gifGrid.innerHTML.trim()) {
        gifGrid.innerHTML = '<div class=\"community-empty-state\">' + (query ? 'No GIFs found for this search.' : 'No GIFs available right now.') + '</div>';
      }
    } catch (e) {
      gifGrid.innerHTML = '<div class=\"community-inline-error show\">' + (e.message || 'Unable to load GIFs right now.') + '</div>';
    }
  }

  updateCount();
  textarea?.addEventListener('input', updateCount);

  document.querySelectorAll('[data-share-toggle]').forEach((button) => {
    button.addEventListener('click', function () {
      const wrap = button.closest('.community-share');
      document.querySelectorAll('.community-share.open').forEach((node) => {
        if (node !== wrap) node.classList.remove('open');
      });
      wrap?.classList.toggle('open');
    });
  });
  document.querySelectorAll('[data-share-network]').forEach((button) => {
    button.addEventListener('click', function () {
      const box = button.closest('.community-share');
      if (box) shareTextOnly(box, button.dataset.shareNetwork);
      box?.classList.remove('open');
    });
  });
  document.addEventListener('click', function (event) {
    if (!event.target.closest('.community-share')) {
      document.querySelectorAll('.community-share.open').forEach((node) => node.classList.remove('open'));
    }
  });

  document.getElementById('community-open-gif')?.addEventListener('click', async function () {
    gifModal?.classList.add('open');
    if (gifGrid && !gifGrid.dataset.loaded) {
      gifGrid.dataset.loaded = '1';
      await loadGifs('');
    }
  });
  document.getElementById('community-gif-search-btn')?.addEventListener('click', () => loadGifs(gifQuery?.value || ''));
  gifQuery?.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      loadGifs(gifQuery.value || '');
    }
  });
  document.querySelectorAll('[data-community-close]').forEach((button) => button.addEventListener('click', function () { gifModal?.classList.remove('open'); }));

  document.getElementById('community-upload-image-trigger')?.addEventListener('click', function () {
    uploadInput?.click();
  });
  uploadInput?.addEventListener('change', async function () {
    const file = uploadInput.files && uploadInput.files[0];
    if (!file) return;
    const tempUrl = URL.createObjectURL(file);
    const formData = new FormData();
    const controller = new AbortController();
    const timeoutId = window.setTimeout(() => controller.abort(), 30000);
    formData.append('file', file);
    toggleError('');
    setMediaStatus('Uploading image...');
    await addPreviewItem(tempUrl, 'image', 'Selected image', 'uploaded-image');
    try {
      const response = await fetch('{{ path('community_media_upload') }}', {
        method: 'POST',
        body: formData,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        signal: controller.signal
      });
      const data = await response.json();
      if (!response.ok || !data.url) {
        throw new Error(data.error || 'Upload failed');
      }
      if (hiddenAi) hiddenAi.value = '';
      if (hiddenUpload) hiddenUpload.value = data.url;
      await replacePreviewItem(data.url, 'image', 'Uploaded image', 'uploaded-image');
      setMediaStatus(data.warning || 'Image attached and ready to post.');
    } catch (e) {
      if (hiddenUpload) hiddenUpload.value = '';
      toggleError(e.name === 'AbortError' ? 'Image upload took too long. Please try again.' : (e.message || 'Unable to upload image.'));
      setMediaStatus('');
    } finally {
      window.clearTimeout(timeoutId);
      window.setTimeout(() => URL.revokeObjectURL(tempUrl), 15000);
      uploadInput.value = '';
    }
  });

  document.getElementById('community-generate-image')?.addEventListener('click', async function () {
    const button = this;
    const prompt = (imagePromptInput?.value || '').trim();
    if (!prompt) {
      toggleError('Please describe the image you want to generate in the AI image prompt field.');
      imagePromptInput?.focus();
      return;
    }
    const controller = new AbortController();
    const timeoutId = window.setTimeout(() => controller.abort(), 60000);
    toggleError('');
    setMediaStatus('Generating image...');
    button.disabled = true;
    try {
      const response = await fetch('{{ path('community_ai_image') }}', {
        method: 'POST',
        headers: {'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest'},
        body: JSON.stringify({prompt}),
        signal: controller.signal
      });
      const data = await response.json();
      if (!response.ok || !data.url) {
        throw new Error(data.error || 'Image generation failed');
      }
      if (hiddenUpload) hiddenUpload.value = '';
      if (hiddenAi) hiddenAi.value = data.url;
      await replacePreviewItem(data.url, 'image', 'AI image attached', 'ai-image');
      setMediaStatus(data.warning || 'AI image attached and ready to post.');
    } catch (e) {
      if (hiddenAi) hiddenAi.value = '';
      toggleError(e.name === 'AbortError' ? 'Image generation took too long. Please try again.' : (e.message || 'Unable to generate image.'));
      setMediaStatus('');
    } finally {
      window.clearTimeout(timeoutId);
      button.disabled = false;
    }
  });

  if (postForm && textarea) {
    postForm.addEventListener('submit', async function (event) {
      if (postForm.dataset.skipModeration === '1') {
        postForm.dataset.skipModeration = '0';
        return;
      }
      event.preventDefault();
      toggleError('');
      if (!(textarea.value || '').trim() && !hasAttachedMedia()) {
        toggleError('Add some text or attach a GIF/image before posting.');
        return;
      }
      try {
        const response = await fetch('{{ path('community_moderate') }}', {
          method: 'POST',
          headers: {'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest'},
          body: JSON.stringify({text: textarea.value || ''})
        });
        const data = await response.json();
        if (data.flagged) {
          toggleError(data.message || 'This content contains a blocked word or toxic language.');
          return;
        }
      } catch (error) {}
      postForm.dataset.skipModeration = '1';
      postForm.submit();
    });
  }

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
    wrap.querySelectorAll('[data-reaction]').forEach((option) => {
      option.addEventListener('click', function () {
        localStorage.setItem(storageKey, option.dataset.reaction || '👍');
        if (label) {
          const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
          label.textContent = (option.dataset.reaction || '👍') + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
        }
        wrap.classList.remove('open');
        likeForm?.requestSubmit();
      });
    });
    wrap.querySelectorAll('[data-quick-reaction]').forEach((button) => {
      button.addEventListener('click', function () {
        const reaction = button.dataset.quickReaction || 'Love';
        localStorage.setItem(storageKey, reaction);
        if (label) {
          const countMatch = (label.textContent || '').match(/\\((\\d+)\\)/);
          label.textContent = reaction + ' ' + (countMatch ? '(' + countMatch[1] + ')' : '');
        }
        wrap.classList.remove('open');
        likeForm?.requestSubmit();
      });
    });
  });

  document.querySelectorAll('[data-rating-box]').forEach((box) => {
    const stars = Array.from(box.querySelectorAll('[data-star]'));
    function paint(value) {
      stars.forEach((star) => star.classList.toggle('active', Number(star.dataset.star) <= value));
    }
    stars.forEach((star) => {
      star.addEventListener('click', async function () {
        const value = Number(star.dataset.star);
        paint(value);
        try {
          const body = new URLSearchParams({rating: String(value)});
          const response = await fetch(box.dataset.url, {
            method: 'POST',
            headers: {'X-Requested-With': 'XMLHttpRequest', 'Content-Type': 'application/x-www-form-urlencoded'},
            body
          });
          const data = await response.json();
          if (data.error) return;
          const info = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .community-helper');
          const fill = box.closest('.community-post-actions-right')?.querySelector('.community-rating-pill .fill');
          if (info) info.innerHTML = '<strong>' + Number(data.average || 0).toFixed(1) + '</strong>/5 · ' + Number(data.total || 0) + ' vote' + (Number(data.total || 0) > 1 ? 's' : '');
          if (fill) fill.style.width = Number(data.percent || 0) + '%';
        } catch (e) {}
      });
    });
  });

  const searchInput = document.getElementById('community-live-search');
  const filterInput = document.getElementById('community-live-filter');
  function applyLocalFilter() {
    const term = (searchInput?.value || '').trim().toLowerCase();
    const filter = filterInput?.value || 'all';
    document.querySelectorAll('[data-post-card]').forEach((card) => {
      const matchesTerm = !term || (card.dataset.search || '').includes(term);
      const matchesFilter = filter === 'all' || (filter === 'media' && card.dataset.media === '1') || (filter === 'comment' && card.dataset.comments === '1');
      card.style.display = matchesTerm && matchesFilter ? '' : 'none';
    });
  }
  searchInput?.addEventListener('input', applyLocalFilter);
  filterInput?.addEventListener('change', applyLocalFilter);
})();
</script>
{% endblock %}
", "Community/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\Community\\index.html.twig");
    }
}
