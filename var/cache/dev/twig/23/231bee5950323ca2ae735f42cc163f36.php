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

/* objectif/index.html.twig */
class __TwigTemplate_4c67264bea741fbc816767517cf52e80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "objectif/index.html.twig"));

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

        yield "Mes objectifs";
        
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
        yield "
<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Syne:wght@600&display=swap');

  .obj-page { padding: 2rem; font-family: 'DM Sans', sans-serif; }

  .obj-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.25rem;
  }
  .obj-title {
    font-family: 'Syne', sans-serif;
    font-size: 26px;
    font-weight: 600;
  }
  .btn-new {
    background: #1a9e6e;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
  }
  .btn-new:hover { background: #157a55; color: #fff; }
  .btn-new-disabled {
    background: #ccc;
    color: #888;
    border: none;
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
    cursor: not-allowed;
    opacity: 0.6;
  }

  .flash-success {
    background: #e1f5ee;
    color: #0f6e56;
    border: 0.5px solid #9fe1cb;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }
  .flash-error {
    background: #fcebeb;
    color: #a32d2d;
    border: 0.5px solid #f09595;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }

  .wallet-filter { margin-bottom: 1.5rem; }
  .wallet-select {
    padding: 8px 14px;
    border-radius: 10px;
    border: 0.5px solid #ccc;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
    background: #fff;
    color: #333;
    cursor: pointer;
    min-width: 280px;
  }
  .wallet-select:focus { outline: none; border-color: #1a9e6e; }

  .obj-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 2rem;
  }
  .stat-box { background: #f5f5f3; border-radius: 8px; padding: 1rem; text-align: center; }
  .stat-num { font-size: 22px; font-weight: 500; }
  .stat-label { font-size: 12px; color: #888; margin-top: 2px; }

  .obj-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 1rem;
  }
  .obj-card {
    background: #fff;
    border: 0.5px solid #e0e0dc;
    border-radius: 12px;
    padding: 1.25rem;
    position: relative;
    overflow: hidden;
  }
  .card-accent { position: absolute; top: 0; left: 0; width: 4px; height: 100%; }
  .accent-termine  { background: #1a9e6e; }
  .accent-en_cours { background: #e9a000; }
  .accent-echoue   { background: #c0392b; }

  .card-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 12px;
  }
  .card-title { font-weight: 500; font-size: 15px; padding-left: 12px; flex: 1; }
  .badge-statut { font-size: 11px; font-weight: 500; padding: 3px 10px; border-radius: 20px; white-space: nowrap; }
  .badge-termine  { background: #e1f5ee; color: #0f6e56; }
  .badge-en_cours { background: #faeeda; color: #854f0b; }
  .badge-echoue   { background: #fcebeb; color: #a32d2d; }

  .card-body { padding-left: 12px; }

  .progress-bg { height: 6px; background: #f0f0ee; border-radius: 3px; overflow: hidden; margin: 10px 0 4px; }
  .progress-fill { height: 100%; border-radius: 3px; }
  .fill-termine  { background: #1a9e6e; }
  .fill-en_cours { background: #e9a000; }
  .fill-echoue   { background: #c0392b; }
  .progress-pct { font-size: 12px; color: #888; margin-bottom: 4px; }

  .card-meta { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-top: 12px; }
  .meta-label { font-size: 12px; color: #888; }
  .meta-val   { font-size: 13px; font-weight: 500; }

  .wallet-info {
    display: flex; align-items: center; gap: 8px;
    margin-top: 10px; padding: 8px 10px;
    background: #f5f5f3; border-radius: 8px; font-size: 12px;
  }
  .wallet-pays  { font-weight: 500; color: #333; }
  .wallet-solde { color: #1a9e6e; font-weight: 500; margin-left: auto; }
  .wallet-devise { color: #888; }

  .contrib-list { margin-top: 12px; padding-left: 12px; }
  .contrib-list-title {
    font-size: 12px; color: #888; margin-bottom: 6px;
    display: flex; align-items: center; justify-content: space-between;
    cursor: pointer; user-select: none;
  }
  .contrib-items { display: none; flex-direction: column; gap: 5px; }
  .contrib-items.open { display: flex; }
  .contrib-row {
    display: flex; align-items: center; justify-content: space-between;
    padding: 5px 8px; background: #f9f9f7; border-radius: 7px; font-size: 12px;
  }
  .contrib-row-info { display: flex; flex-direction: column; gap: 1px; }
  .contrib-montant { font-weight: 500; color: #333; }
  .contrib-date    { color: #aaa; font-size: 11px; }
  .btn-del-contrib {
    background: none; border: none; color: #c0392b;
    font-size: 14px; cursor: pointer; padding: 2px 6px;
    border-radius: 5px; line-height: 1;
  }
  .btn-del-contrib:hover { background: #fcebeb; }

  .card-actions {
    display: flex; gap: 8px; margin-top: 14px;
    padding-top: 12px; border-top: 0.5px solid #e0e0dc;
  }
  .btn-edit {
    flex: 1; padding: 7px; border-radius: 8px;
    border: 0.5px solid #ccc; background: transparent;
    font-size: 13px; cursor: pointer; text-align: center;
    text-decoration: none; color: inherit; display: block;
  }
  .btn-edit:hover { background: #f5f5f3; }
  .btn-del {
    padding: 7px 14px; border-radius: 8px;
    border: 0.5px solid rgba(240,149,133,0.5);
    background: transparent; font-size: 13px; color: #a32d2d; cursor: pointer;
  }
  .btn-del:hover { background: #fcebeb; }

  .btn-contrib {
    width: 100%; margin-top: 10px; padding: 8px; border-radius: 8px;
    border: 0.5px solid #1a9e6e; background: transparent;
    font-size: 13px; color: #1a9e6e; cursor: pointer; font-weight: 500;
  }
  .btn-contrib:hover { background: #e1f5ee; }

  .contrib-form { display: none; flex-direction: column; gap: 8px; margin-top: 10px; }
  .contrib-form.open { display: flex; }
  .contrib-input {
    width: 100%; padding: 7px 10px; border-radius: 8px;
    border: 0.5px solid #ccc; font-size: 13px; font-family: 'DM Sans', sans-serif;
  }
  .contrib-input:focus { outline: none; border-color: #1a9e6e; }
  .btn-submit-contrib {
    padding: 8px; border-radius: 8px; background: #1a9e6e;
    color: #fff; border: none; font-size: 13px; cursor: pointer;
    font-weight: 500; font-family: 'DM Sans', sans-serif;
  }
  .btn-submit-contrib:hover { background: #157a55; }

  .objectif-atteint {
    margin-top: 10px; padding: 8px; border-radius: 8px;
    background: #e1f5ee; color: #0f6e56;
    font-size: 13px; font-weight: 500; text-align: center;
  }
  .empty-msg {
    color: #888; padding: 3rem; text-align: center;
    grid-column: 1 / -1; font-size: 15px;
  }
  .wallet-notice {
    background: #faeeda;
    color: #854f0b;
    border: 0.5px solid #f0c06e;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }
</style>

<div class=\"obj-page\">

  ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "flashes", ["success"], "method", false, false, false, 223));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 224
            yield "    <div class=\"flash-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "flashes", ["error"], "method", false, false, false, 226));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 227
            yield "    <div class=\"flash-error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["msg"], "html", null, true);
            yield "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['msg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "
  <div class=\"obj-header\">
    <h1 class=\"obj-title\">Mes objectifs</h1>
    ";
        // line 232
        if ((($tmp = (isset($context["selectedWalletId"]) || array_key_exists("selectedWalletId", $context) ? $context["selectedWalletId"] : (function () { throw new RuntimeError('Variable "selectedWalletId" does not exist.', 232, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 233
            yield "      <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_new");
            yield "\" class=\"btn-new\">+ Nouvel objectif</a>
    ";
        } else {
            // line 235
            yield "      <button class=\"btn-new-disabled\" disabled title=\"Sélectionnez un wallet pour créer un objectif\">
        + Nouvel objectif
      </button>
    ";
        }
        // line 239
        yield "  </div>

  <div class=\"wallet-filter\">
    <select class=\"wallet-select\" onchange=\"window.location.href=this.value\">
      <option value=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_index");
        yield "\"
              ";
        // line 244
        yield (((null === (isset($context["selectedWalletId"]) || array_key_exists("selectedWalletId", $context) ? $context["selectedWalletId"] : (function () { throw new RuntimeError('Variable "selectedWalletId" does not exist.', 244, $this->source); })()))) ? ("selected") : (""));
        yield ">
        Tous les wallets
      </option>
      ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 247, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["w"]) {
            // line 248
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_index", ["wallet_id" => $context["id"]]), "html", null, true);
            yield "\"
                ";
            // line 249
            yield ((((isset($context["selectedWalletId"]) || array_key_exists("selectedWalletId", $context) ? $context["selectedWalletId"] : (function () { throw new RuntimeError('Variable "selectedWalletId" does not exist.', 249, $this->source); })()) == $context["id"])) ? ("selected") : (""));
            yield ">
          ";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "pays", [], "array", false, false, false, 250), "html", null, true);
            yield " · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "devise", [], "array", false, false, false, 250), "html", null, true);
            yield " — Solde : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "solde", [], "array", false, false, false, 250), 2, ",", " "), "html", null, true);
            yield "
        </option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['w'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        yield "    </select>
  </div>

  ";
        // line 256
        if ((($tmp =  !(isset($context["selectedWalletId"]) || array_key_exists("selectedWalletId", $context) ? $context["selectedWalletId"] : (function () { throw new RuntimeError('Variable "selectedWalletId" does not exist.', 256, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 257
            yield "    <div class=\"wallet-notice\">
      Sélectionnez un wallet pour pouvoir créer un objectif.
    </div>
  ";
        }
        // line 261
        yield "
  ";
        // line 262
        $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 262, $this->source); })()));
        // line 263
        yield "  ";
        $context["en_cours"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 263, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 263, $this->source); })()), "statut", [], "any", false, false, false, 263) == "EN_COURS"); }));
        // line 264
        yield "  ";
        $context["termines"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 264, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 264, $this->source); })()), "statut", [], "any", false, false, false, 264) == "TERMINE"); }));
        // line 265
        yield "  <div class=\"obj-stats\">
    <div class=\"stat-box\"><div class=\"stat-num\">";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 266, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-label\">Total</div></div>
    <div class=\"stat-box\"><div class=\"stat-num\">";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["en_cours"]) || array_key_exists("en_cours", $context) ? $context["en_cours"] : (function () { throw new RuntimeError('Variable "en_cours" does not exist.', 267, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-label\">En cours</div></div>
    <div class=\"stat-box\"><div class=\"stat-num\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["termines"]) || array_key_exists("termines", $context) ? $context["termines"] : (function () { throw new RuntimeError('Variable "termines" does not exist.', 268, $this->source); })()), "html", null, true);
        yield "</div><div class=\"stat-label\">Terminés</div></div>
  </div>

  <div class=\"obj-cards\">
    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 272, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["obj"]) {
            // line 273
            yield "
      ";
            // line 274
            $context["statutClass"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "statut", [], "any", false, false, false, 274));
            // line 275
            yield "      ";
            $context["totalContrib"] = 0;
            // line 276
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "contributiongoals", [], "any", false, false, false, 276));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 277
                yield "        ";
                $context["totalContrib"] = ((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 277, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["c"], "montant", [], "any", false, false, false, 277));
                // line 278
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            yield "      ";
            $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "montant", [], "any", false, false, false, 279) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 279, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "montant", [], "any", false, false, false, 279)) * 100))) : (0));
            // line 280
            yield "      ";
            $context["pct"] = ((((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 280, $this->source); })()) > 100)) ? (100) : ((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 280, $this->source); })())));
            // line 281
            yield "      ";
            $context["walletInfo"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "walletId", [], "any", false, false, false, 281), [], "array", true, true, false, 281)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 281, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "walletId", [], "any", false, false, false, 281), [], "array", false, false, false, 281)) : (null));
            // line 282
            yield "
      <div class=\"obj-card\">
        <div class=\"card-accent accent-";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutClass"]) || array_key_exists("statutClass", $context) ? $context["statutClass"] : (function () { throw new RuntimeError('Variable "statutClass" does not exist.', 284, $this->source); })()), "html", null, true);
            yield "\"></div>

        <div class=\"card-head\">
          <span class=\"card-title\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "titre", [], "any", false, false, false, 287), "html", null, true);
            yield "</span>
          <span class=\"badge-statut badge-";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutClass"]) || array_key_exists("statutClass", $context) ? $context["statutClass"] : (function () { throw new RuntimeError('Variable "statutClass" does not exist.', 288, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "statut", [], "any", false, false, false, 288), "html", null, true);
            yield "</span>
        </div>

        <div class=\"card-body\">
          <div class=\"progress-bg\">
            <div class=\"progress-fill fill-";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statutClass"]) || array_key_exists("statutClass", $context) ? $context["statutClass"] : (function () { throw new RuntimeError('Variable "statutClass" does not exist.', 293, $this->source); })()), "html", null, true);
            yield "\" style=\"width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 293, $this->source); })()), "html", null, true);
            yield "%\"></div>
          </div>
          <div class=\"progress-pct\">
            ";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 296, $this->source); })()), 0, ",", " "), "html", null, true);
            yield " /
            ";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "montant", [], "any", false, false, false, 297), 0, ",", " "), "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 297, $this->source); })()), "html", null, true);
            yield "%
          </div>

          <div class=\"card-meta\">
            <div>
              <div class=\"meta-label\">Date début</div>
              <div class=\"meta-val\">";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "dateDebut", [], "any", false, false, false, 303), "d/m/Y"), "html", null, true);
            yield "</div>
            </div>
            <div>
              <div class=\"meta-label\">Durée</div>
              <div class=\"meta-val\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "duree", [], "any", false, false, false, 307), "html", null, true);
            yield " mois</div>
            </div>
          </div>

          ";
            // line 311
            if ((($tmp = (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 311, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 312
                yield "            <div class=\"wallet-info\">
              <span style=\"font-size:14px;\">🌍</span>
              <span class=\"wallet-pays\">";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 314, $this->source); })()), "pays", [], "array", false, false, false, 314), "html", null, true);
                yield "</span>
              <span class=\"wallet-devise\">";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 315, $this->source); })()), "devise", [], "array", false, false, false, 315), "html", null, true);
                yield "</span>
              <span class=\"wallet-solde\">
                Solde : ";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 317, $this->source); })()), "solde", [], "array", false, false, false, 317), 2, ",", " "), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 317, $this->source); })()), "devise", [], "array", false, false, false, 317), "html", null, true);
                yield "
              </span>
            </div>
          ";
            }
            // line 321
            yield "
          ";
            // line 322
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "contributiongoals", [], "any", false, false, false, 322)) > 0)) {
                // line 323
                yield "            <div class=\"contrib-list\">
              <div class=\"contrib-list-title\" onclick=\"toggleContribList(";
                // line 324
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 324), "html", null, true);
                yield ")\">
                Contributions (";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "contributiongoals", [], "any", false, false, false, 325)), "html", null, true);
                yield ")
                <span id=\"arrow-";
                // line 326
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 326), "html", null, true);
                yield "\">▼</span>
              </div>
              <div class=\"contrib-items\" id=\"contrib-list-";
                // line 328
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 328), "html", null, true);
                yield "\">
                ";
                // line 329
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "contributiongoals", [], "any", false, false, false, 329));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 330
                    yield "                  <div class=\"contrib-row\">
                    <div class=\"contrib-row-info\">
                      <span class=\"contrib-montant\">";
                    // line 332
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "montant", [], "any", false, false, false, 332), 2, ",", " "), "html", null, true);
                    yield "</span>
                      <span class=\"contrib-date\">";
                    // line 333
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "date", [], "any", false, false, false, 333), "d/m/Y"), "html", null, true);
                    yield "</span>
                    </div>
                    <form method=\"POST\"
                          action=\"";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contribution_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 336)]), "html", null, true);
                    yield "\"
                          onsubmit=\"return confirm('Supprimer cette contribution ? Le montant sera remboursé dans le wallet.')\">
                      <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 338
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_contrib" . CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 338))), "html", null, true);
                    yield "\">
                      <button class=\"btn-del-contrib\" type=\"submit\" title=\"Supprimer et rembourser\">✕</button>
                    </form>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                yield "              </div>
            </div>
          ";
            }
            // line 346
            yield "
        </div>

        <div class=\"card-actions\">
          <a href=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 350)]), "html", null, true);
            yield "\" class=\"btn-edit\">Modifier</a>
          <form method=\"POST\" action=\"";
            // line 351
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 351)]), "html", null, true);
            yield "\" style=\"display:inline\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 352
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 352))), "html", null, true);
            yield "\">
            <button class=\"btn-del\" onclick=\"return confirm('Supprimer cet objectif ? Toutes les contributions seront remboursées.')\">Supprimer</button>
          </form>
        </div>

        ";
            // line 357
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "statut", [], "any", false, false, false, 357) != "TERMINE")) {
                // line 358
                yield "          ";
                $context["resteAAtteindre"] = (CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "montant", [], "any", false, false, false, 358) - (isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 358, $this->source); })()));
                // line 359
                yield "          <button class=\"btn-contrib\" onclick=\"toggleContrib(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 359), "html", null, true);
                yield ")\">
            + Ajouter une contribution
          </button>
          <form method=\"POST\"
                action=\"";
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_contribuer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 363)]), "html", null, true);
                yield "\"
                class=\"contrib-form\"
                id=\"contrib-";
                // line 365
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["obj"], "id", [], "any", false, false, false, 365), "html", null, true);
                yield "\">
            <small style=\"color:#888; font-size:11px;\">
              ";
                // line 367
                if ((($tmp = (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 367, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 368
                    yield "                Solde disponible : ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 368, $this->source); })()), "solde", [], "array", false, false, false, 368), 2, ",", " "), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["walletInfo"]) || array_key_exists("walletInfo", $context) ? $context["walletInfo"] : (function () { throw new RuntimeError('Variable "walletInfo" does not exist.', 368, $this->source); })()), "devise", [], "array", false, false, false, 368), "html", null, true);
                    yield " —
              ";
                }
                // line 370
                yield "              Max contributible : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["resteAAtteindre"]) || array_key_exists("resteAAtteindre", $context) ? $context["resteAAtteindre"] : (function () { throw new RuntimeError('Variable "resteAAtteindre" does not exist.', 370, $this->source); })()), 2, ",", " "), "html", null, true);
                yield "
            </small>
            <input type=\"number\"
                   name=\"montant\"
                   class=\"contrib-input\"
                   placeholder=\"Montant à contribuer\"
                   min=\"0.01\"
                   step=\"0.01\"
                   max=\"";
                // line 378
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resteAAtteindre"]) || array_key_exists("resteAAtteindre", $context) ? $context["resteAAtteindre"] : (function () { throw new RuntimeError('Variable "resteAAtteindre" does not exist.', 378, $this->source); })()), "html", null, true);
                yield "\"
                   required>
            <button type=\"submit\" class=\"btn-submit-contrib\">Confirmer</button>
          </form>
        ";
            } else {
                // line 383
                yield "          <div class=\"objectif-atteint\">✓ Objectif atteint !</div>
        ";
            }
            // line 385
            yield "
      </div>

    ";
            $context['_iterated'] = true;
        }
        // line 388
        if (!$context['_iterated']) {
            // line 389
            yield "      <p class=\"empty-msg\">
        ";
            // line 390
            if ((($tmp = (isset($context["selectedWalletId"]) || array_key_exists("selectedWalletId", $context) ? $context["selectedWalletId"] : (function () { throw new RuntimeError('Variable "selectedWalletId" does not exist.', 390, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 391
                yield "          Aucun objectif pour ce wallet. Créez votre premier objectif !
        ";
            } else {
                // line 393
                yield "          Sélectionnez un wallet pour voir ou créer vos objectifs.
        ";
            }
            // line 395
            yield "      </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['obj'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        yield "  </div>

</div>

<script>
function toggleContrib(id) {
  const form = document.getElementById('contrib-' + id);
  form.classList.toggle('open');
  if (form.classList.contains('open')) {
    form.querySelector('input[type=\"number\"]').focus();
  }
}
function toggleContribList(id) {
  const list  = document.getElementById('contrib-list-' + id);
  const arrow = document.getElementById('arrow-' + id);
  list.classList.toggle('open');
  arrow.textContent = list.classList.contains('open') ? '▲' : '▼';
}
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
        return "objectif/index.html.twig";
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
        return array (  744 => 397,  737 => 395,  733 => 393,  729 => 391,  727 => 390,  724 => 389,  722 => 388,  715 => 385,  711 => 383,  703 => 378,  691 => 370,  683 => 368,  681 => 367,  676 => 365,  671 => 363,  663 => 359,  660 => 358,  658 => 357,  650 => 352,  646 => 351,  642 => 350,  636 => 346,  631 => 343,  620 => 338,  615 => 336,  609 => 333,  605 => 332,  601 => 330,  597 => 329,  593 => 328,  588 => 326,  584 => 325,  580 => 324,  577 => 323,  575 => 322,  572 => 321,  563 => 317,  558 => 315,  554 => 314,  550 => 312,  548 => 311,  541 => 307,  534 => 303,  523 => 297,  519 => 296,  511 => 293,  501 => 288,  497 => 287,  491 => 284,  487 => 282,  484 => 281,  481 => 280,  478 => 279,  472 => 278,  469 => 277,  464 => 276,  461 => 275,  459 => 274,  456 => 273,  451 => 272,  444 => 268,  440 => 267,  436 => 266,  433 => 265,  430 => 264,  427 => 263,  425 => 262,  422 => 261,  416 => 257,  414 => 256,  409 => 253,  396 => 250,  392 => 249,  387 => 248,  383 => 247,  377 => 244,  373 => 243,  367 => 239,  361 => 235,  355 => 233,  353 => 232,  348 => 229,  339 => 227,  334 => 226,  325 => 224,  321 => 223,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mes objectifs{% endblock %}
{% block body %}

<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&family=Syne:wght@600&display=swap');

  .obj-page { padding: 2rem; font-family: 'DM Sans', sans-serif; }

  .obj-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.25rem;
  }
  .obj-title {
    font-family: 'Syne', sans-serif;
    font-size: 26px;
    font-weight: 600;
  }
  .btn-new {
    background: #1a9e6e;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
  }
  .btn-new:hover { background: #157a55; color: #fff; }
  .btn-new-disabled {
    background: #ccc;
    color: #888;
    border: none;
    padding: 10px 20px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 500;
    cursor: not-allowed;
    opacity: 0.6;
  }

  .flash-success {
    background: #e1f5ee;
    color: #0f6e56;
    border: 0.5px solid #9fe1cb;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }
  .flash-error {
    background: #fcebeb;
    color: #a32d2d;
    border: 0.5px solid #f09595;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }

  .wallet-filter { margin-bottom: 1.5rem; }
  .wallet-select {
    padding: 8px 14px;
    border-radius: 10px;
    border: 0.5px solid #ccc;
    font-size: 13px;
    font-family: 'DM Sans', sans-serif;
    background: #fff;
    color: #333;
    cursor: pointer;
    min-width: 280px;
  }
  .wallet-select:focus { outline: none; border-color: #1a9e6e; }

  .obj-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 2rem;
  }
  .stat-box { background: #f5f5f3; border-radius: 8px; padding: 1rem; text-align: center; }
  .stat-num { font-size: 22px; font-weight: 500; }
  .stat-label { font-size: 12px; color: #888; margin-top: 2px; }

  .obj-cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 1rem;
  }
  .obj-card {
    background: #fff;
    border: 0.5px solid #e0e0dc;
    border-radius: 12px;
    padding: 1.25rem;
    position: relative;
    overflow: hidden;
  }
  .card-accent { position: absolute; top: 0; left: 0; width: 4px; height: 100%; }
  .accent-termine  { background: #1a9e6e; }
  .accent-en_cours { background: #e9a000; }
  .accent-echoue   { background: #c0392b; }

  .card-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 12px;
  }
  .card-title { font-weight: 500; font-size: 15px; padding-left: 12px; flex: 1; }
  .badge-statut { font-size: 11px; font-weight: 500; padding: 3px 10px; border-radius: 20px; white-space: nowrap; }
  .badge-termine  { background: #e1f5ee; color: #0f6e56; }
  .badge-en_cours { background: #faeeda; color: #854f0b; }
  .badge-echoue   { background: #fcebeb; color: #a32d2d; }

  .card-body { padding-left: 12px; }

  .progress-bg { height: 6px; background: #f0f0ee; border-radius: 3px; overflow: hidden; margin: 10px 0 4px; }
  .progress-fill { height: 100%; border-radius: 3px; }
  .fill-termine  { background: #1a9e6e; }
  .fill-en_cours { background: #e9a000; }
  .fill-echoue   { background: #c0392b; }
  .progress-pct { font-size: 12px; color: #888; margin-bottom: 4px; }

  .card-meta { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-top: 12px; }
  .meta-label { font-size: 12px; color: #888; }
  .meta-val   { font-size: 13px; font-weight: 500; }

  .wallet-info {
    display: flex; align-items: center; gap: 8px;
    margin-top: 10px; padding: 8px 10px;
    background: #f5f5f3; border-radius: 8px; font-size: 12px;
  }
  .wallet-pays  { font-weight: 500; color: #333; }
  .wallet-solde { color: #1a9e6e; font-weight: 500; margin-left: auto; }
  .wallet-devise { color: #888; }

  .contrib-list { margin-top: 12px; padding-left: 12px; }
  .contrib-list-title {
    font-size: 12px; color: #888; margin-bottom: 6px;
    display: flex; align-items: center; justify-content: space-between;
    cursor: pointer; user-select: none;
  }
  .contrib-items { display: none; flex-direction: column; gap: 5px; }
  .contrib-items.open { display: flex; }
  .contrib-row {
    display: flex; align-items: center; justify-content: space-between;
    padding: 5px 8px; background: #f9f9f7; border-radius: 7px; font-size: 12px;
  }
  .contrib-row-info { display: flex; flex-direction: column; gap: 1px; }
  .contrib-montant { font-weight: 500; color: #333; }
  .contrib-date    { color: #aaa; font-size: 11px; }
  .btn-del-contrib {
    background: none; border: none; color: #c0392b;
    font-size: 14px; cursor: pointer; padding: 2px 6px;
    border-radius: 5px; line-height: 1;
  }
  .btn-del-contrib:hover { background: #fcebeb; }

  .card-actions {
    display: flex; gap: 8px; margin-top: 14px;
    padding-top: 12px; border-top: 0.5px solid #e0e0dc;
  }
  .btn-edit {
    flex: 1; padding: 7px; border-radius: 8px;
    border: 0.5px solid #ccc; background: transparent;
    font-size: 13px; cursor: pointer; text-align: center;
    text-decoration: none; color: inherit; display: block;
  }
  .btn-edit:hover { background: #f5f5f3; }
  .btn-del {
    padding: 7px 14px; border-radius: 8px;
    border: 0.5px solid rgba(240,149,133,0.5);
    background: transparent; font-size: 13px; color: #a32d2d; cursor: pointer;
  }
  .btn-del:hover { background: #fcebeb; }

  .btn-contrib {
    width: 100%; margin-top: 10px; padding: 8px; border-radius: 8px;
    border: 0.5px solid #1a9e6e; background: transparent;
    font-size: 13px; color: #1a9e6e; cursor: pointer; font-weight: 500;
  }
  .btn-contrib:hover { background: #e1f5ee; }

  .contrib-form { display: none; flex-direction: column; gap: 8px; margin-top: 10px; }
  .contrib-form.open { display: flex; }
  .contrib-input {
    width: 100%; padding: 7px 10px; border-radius: 8px;
    border: 0.5px solid #ccc; font-size: 13px; font-family: 'DM Sans', sans-serif;
  }
  .contrib-input:focus { outline: none; border-color: #1a9e6e; }
  .btn-submit-contrib {
    padding: 8px; border-radius: 8px; background: #1a9e6e;
    color: #fff; border: none; font-size: 13px; cursor: pointer;
    font-weight: 500; font-family: 'DM Sans', sans-serif;
  }
  .btn-submit-contrib:hover { background: #157a55; }

  .objectif-atteint {
    margin-top: 10px; padding: 8px; border-radius: 8px;
    background: #e1f5ee; color: #0f6e56;
    font-size: 13px; font-weight: 500; text-align: center;
  }
  .empty-msg {
    color: #888; padding: 3rem; text-align: center;
    grid-column: 1 / -1; font-size: 15px;
  }
  .wallet-notice {
    background: #faeeda;
    color: #854f0b;
    border: 0.5px solid #f0c06e;
    border-radius: 8px;
    padding: 10px 16px;
    margin-bottom: 1.5rem;
    font-size: 14px;
  }
</style>

<div class=\"obj-page\">

  {% for msg in app.flashes('success') %}
    <div class=\"flash-success\">{{ msg }}</div>
  {% endfor %}
  {% for msg in app.flashes('error') %}
    <div class=\"flash-error\">{{ msg }}</div>
  {% endfor %}

  <div class=\"obj-header\">
    <h1 class=\"obj-title\">Mes objectifs</h1>
    {% if selectedWalletId %}
      <a href=\"{{ path('objectif_new') }}\" class=\"btn-new\">+ Nouvel objectif</a>
    {% else %}
      <button class=\"btn-new-disabled\" disabled title=\"Sélectionnez un wallet pour créer un objectif\">
        + Nouvel objectif
      </button>
    {% endif %}
  </div>

  <div class=\"wallet-filter\">
    <select class=\"wallet-select\" onchange=\"window.location.href=this.value\">
      <option value=\"{{ path('objectif_index') }}\"
              {{ selectedWalletId is null ? 'selected' : '' }}>
        Tous les wallets
      </option>
      {% for id, w in wallets %}
        <option value=\"{{ path('objectif_index', {wallet_id: id}) }}\"
                {{ selectedWalletId == id ? 'selected' : '' }}>
          {{ w['pays'] }} · {{ w['devise'] }} — Solde : {{ w['solde']|number_format(2, ',', ' ') }}
        </option>
      {% endfor %}
    </select>
  </div>

  {% if not selectedWalletId %}
    <div class=\"wallet-notice\">
      Sélectionnez un wallet pour pouvoir créer un objectif.
    </div>
  {% endif %}

  {% set total    = objectifs|length %}
  {% set en_cours = objectifs|filter(o => o.statut == 'EN_COURS')|length %}
  {% set termines = objectifs|filter(o => o.statut == 'TERMINE')|length %}
  <div class=\"obj-stats\">
    <div class=\"stat-box\"><div class=\"stat-num\">{{ total }}</div><div class=\"stat-label\">Total</div></div>
    <div class=\"stat-box\"><div class=\"stat-num\">{{ en_cours }}</div><div class=\"stat-label\">En cours</div></div>
    <div class=\"stat-box\"><div class=\"stat-num\">{{ termines }}</div><div class=\"stat-label\">Terminés</div></div>
  </div>

  <div class=\"obj-cards\">
    {% for obj in objectifs %}

      {% set statutClass = obj.statut|lower %}
      {% set totalContrib = 0 %}
      {% for c in obj.contributiongoals %}
        {% set totalContrib = totalContrib + c.montant %}
      {% endfor %}
      {% set pct = obj.montant > 0 ? ((totalContrib / obj.montant) * 100)|round : 0 %}
      {% set pct = pct > 100 ? 100 : pct %}
      {% set walletInfo = wallets[obj.walletId] is defined ? wallets[obj.walletId] : null %}

      <div class=\"obj-card\">
        <div class=\"card-accent accent-{{ statutClass }}\"></div>

        <div class=\"card-head\">
          <span class=\"card-title\">{{ obj.titre }}</span>
          <span class=\"badge-statut badge-{{ statutClass }}\">{{ obj.statut }}</span>
        </div>

        <div class=\"card-body\">
          <div class=\"progress-bg\">
            <div class=\"progress-fill fill-{{ statutClass }}\" style=\"width: {{ pct }}%\"></div>
          </div>
          <div class=\"progress-pct\">
            {{ totalContrib|number_format(0, ',', ' ') }} /
            {{ obj.montant|number_format(0, ',', ' ') }} — {{ pct }}%
          </div>

          <div class=\"card-meta\">
            <div>
              <div class=\"meta-label\">Date début</div>
              <div class=\"meta-val\">{{ obj.dateDebut|date('d/m/Y') }}</div>
            </div>
            <div>
              <div class=\"meta-label\">Durée</div>
              <div class=\"meta-val\">{{ obj.duree }} mois</div>
            </div>
          </div>

          {% if walletInfo %}
            <div class=\"wallet-info\">
              <span style=\"font-size:14px;\">🌍</span>
              <span class=\"wallet-pays\">{{ walletInfo['pays'] }}</span>
              <span class=\"wallet-devise\">{{ walletInfo['devise'] }}</span>
              <span class=\"wallet-solde\">
                Solde : {{ walletInfo['solde']|number_format(2, ',', ' ') }} {{ walletInfo['devise'] }}
              </span>
            </div>
          {% endif %}

          {% if obj.contributiongoals|length > 0 %}
            <div class=\"contrib-list\">
              <div class=\"contrib-list-title\" onclick=\"toggleContribList({{ obj.id }})\">
                Contributions ({{ obj.contributiongoals|length }})
                <span id=\"arrow-{{ obj.id }}\">▼</span>
              </div>
              <div class=\"contrib-items\" id=\"contrib-list-{{ obj.id }}\">
                {% for c in obj.contributiongoals %}
                  <div class=\"contrib-row\">
                    <div class=\"contrib-row-info\">
                      <span class=\"contrib-montant\">{{ c.montant|number_format(2, ',', ' ') }}</span>
                      <span class=\"contrib-date\">{{ c.date|date('d/m/Y') }}</span>
                    </div>
                    <form method=\"POST\"
                          action=\"{{ path('contribution_delete', {id: c.id}) }}\"
                          onsubmit=\"return confirm('Supprimer cette contribution ? Le montant sera remboursé dans le wallet.')\">
                      <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_contrib'~c.id) }}\">
                      <button class=\"btn-del-contrib\" type=\"submit\" title=\"Supprimer et rembourser\">✕</button>
                    </form>
                  </div>
                {% endfor %}
              </div>
            </div>
          {% endif %}

        </div>

        <div class=\"card-actions\">
          <a href=\"{{ path('objectif_edit', {id: obj.id}) }}\" class=\"btn-edit\">Modifier</a>
          <form method=\"POST\" action=\"{{ path('objectif_delete', {id: obj.id}) }}\" style=\"display:inline\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~obj.id) }}\">
            <button class=\"btn-del\" onclick=\"return confirm('Supprimer cet objectif ? Toutes les contributions seront remboursées.')\">Supprimer</button>
          </form>
        </div>

        {% if obj.statut != 'TERMINE' %}
          {% set resteAAtteindre = obj.montant - totalContrib %}
          <button class=\"btn-contrib\" onclick=\"toggleContrib({{ obj.id }})\">
            + Ajouter une contribution
          </button>
          <form method=\"POST\"
                action=\"{{ path('objectif_contribuer', {id: obj.id}) }}\"
                class=\"contrib-form\"
                id=\"contrib-{{ obj.id }}\">
            <small style=\"color:#888; font-size:11px;\">
              {% if walletInfo %}
                Solde disponible : {{ walletInfo['solde']|number_format(2, ',', ' ') }} {{ walletInfo['devise'] }} —
              {% endif %}
              Max contributible : {{ resteAAtteindre|number_format(2, ',', ' ') }}
            </small>
            <input type=\"number\"
                   name=\"montant\"
                   class=\"contrib-input\"
                   placeholder=\"Montant à contribuer\"
                   min=\"0.01\"
                   step=\"0.01\"
                   max=\"{{ resteAAtteindre }}\"
                   required>
            <button type=\"submit\" class=\"btn-submit-contrib\">Confirmer</button>
          </form>
        {% else %}
          <div class=\"objectif-atteint\">✓ Objectif atteint !</div>
        {% endif %}

      </div>

    {% else %}
      <p class=\"empty-msg\">
        {% if selectedWalletId %}
          Aucun objectif pour ce wallet. Créez votre premier objectif !
        {% else %}
          Sélectionnez un wallet pour voir ou créer vos objectifs.
        {% endif %}
      </p>
    {% endfor %}
  </div>

</div>

<script>
function toggleContrib(id) {
  const form = document.getElementById('contrib-' + id);
  form.classList.toggle('open');
  if (form.classList.contains('open')) {
    form.querySelector('input[type=\"number\"]').focus();
  }
}
function toggleContribList(id) {
  const list  = document.getElementById('contrib-list-' + id);
  const arrow = document.getElementById('arrow-' + id);
  list.classList.toggle('open');
  arrow.textContent = list.classList.contains('open') ? '▲' : '▼';
}
</script>

{% endblock %}", "objectif/index.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\objectif\\index.html.twig");
    }
}
