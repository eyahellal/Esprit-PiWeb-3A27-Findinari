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

/* admin/dashboard.html.twig */
class __TwigTemplate_5be5ff4f763fe5e854de42f0654afc89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard — Fin-Dinari</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --danger-light: #fef2f2;
            --success: #22c55e;
            --success-light: #dcfce7;
            --warning: #f59e0b;
            --warning-light: #fff8e6;
            --info: #0ea5e9;
            --info-light: #e6f6ff;
            --bg: #f4f7f4;
            --surface: #ffffff;
            --border: #e4ebe4;
            --text-primary: #1a2e1a;
            --text-secondary: #4b6b4b;
            --text-muted: #8faa8f;
            --sidebar-width: 270px;
            --topbar-height: 72px;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-card: 0 2px 16px rgba(22,163,74,.07);
            --shadow-hover: 0 8px 28px rgba(22,163,74,.20);
            --transition: .22s cubic-bezier(.4,0,.2,1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            font-size: 14.5px;
            line-height: 1.6;
        }

        .layout { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 100;
            padding: 28px 18px 24px;
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 10px 28px;
            border-bottom: 1px solid var(--border);
            margin-bottom: 18px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            color: var(--brand);
            letter-spacing: -0.5px;
        }

        .nav-section {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.9px;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 8px 12px 6px;
            margin-top: 4px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: var(--text-secondary);
            padding: 11px 14px;
            border-radius: var(--radius-md);
            margin-bottom: 4px;
            font-weight: 600;
            font-size: 14px;
            transition: background var(--transition), color var(--transition), transform var(--transition);
            position: relative;
        }

        .side-link:hover {
            background: var(--brand-light);
            color: var(--brand);
            transform: translateX(2px);
        }

        .side-link.active {
            background: var(--brand-light);
            color: var(--brand);
            box-shadow: inset 3px 0 0 var(--brand);
        }

        .side-link svg { width: 18px; height: 18px; flex-shrink: 0; }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .content {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 28px;
            min-width: 0;
        }

        .topbar {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 26px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
        }

        .topbar-title { font-size: 22px; font-weight: 800; letter-spacing: -0.4px; }
        .topbar-title span { color: var(--brand); }

        .topbar-right { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }

        .avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: var(--brand-light);
            color: var(--brand);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        .flash {
            padding: 14px 18px;
            border-radius: var(--radius-md);
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            border: 1px solid transparent;
            animation: fadeSlideDown .3s ease;
        }

        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .flash.success { background: var(--success-light); color: #166534; border-color: #b2f5d1; }
        .flash.danger  { background: var(--danger-light);  color: #9b1c1c; border-color: #fdb9b9; }
        .flash svg { flex-shrink: 0; width: 18px; height: 18px; }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px 22px 20px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: transform var(--transition), box-shadow var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 80px;
            border-radius: 50%;
            background: var(--card-accent, var(--brand-light));
            transform: translate(25px, -25px);
            opacity: .55;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .card-icon {
            width: 46px; height: 46px;
            border-radius: 14px;
            background: var(--card-accent, var(--brand-light));
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        .card-icon svg { width: 22px; height: 22px; }

        .card-body { flex: 1; min-width: 0; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card-link { text-decoration: none; }

        .card.c-purple  { --card-accent: #dcfce7; } .card.c-purple  .card-icon svg { color: var(--brand); }
        .card.c-green   { --card-accent: #d1fae5; } .card.c-green   .card-icon svg { color: var(--brand-dark); }
        .card.c-amber   { --card-accent: #fff8e6; } .card.c-amber   .card-icon svg { color: var(--warning); }
        .card.c-blue    { --card-accent: #e6f6ff; } .card.c-blue    .card-icon svg { color: var(--info); }
        .card.c-red     { --card-accent: #fef2f2; } .card.c-red     .card-icon svg { color: var(--danger); }

        .section {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-card);
            margin-bottom: 26px;
            overflow: hidden;
        }

        .section-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-title svg { width: 18px; height: 18px; color: var(--brand); }

        .section-body { padding: 24px 26px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
        @media (max-width: 640px) { .form-grid { grid-template-columns: 1fr; } }

        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group label { font-size: 12.5px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }

        input[type=\"text\"],
        input[type=\"email\"],
        input[type=\"password\"],
        select,
        textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: #fafbff;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(105,108,255,.14);
            background: #fff;
        }

        input::placeholder { color: var(--text-muted); font-weight: 400; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 10px 18px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none;
            transition: filter var(--transition), transform var(--transition), box-shadow var(--transition);
            white-space: nowrap;
        }

        .btn:hover { filter: brightness(1.08); transform: translateY(-1px); }
        .btn:active { transform: translateY(0); filter: brightness(.97); }

        .btn-primary   { background: var(--brand);   color: #fff; box-shadow: 0 4px 14px rgba(34,197,94,.35); }
        .btn-danger    { background: var(--danger);   color: #fff; box-shadow: 0 4px 14px rgba(239,68,68,.28); }
        .btn-success   { background: var(--success);  color: #fff; box-shadow: 0 4px 14px rgba(34,197,94,.28); }
        .btn-secondary { background: #f0f2f7;         color: var(--text-secondary); }
        .btn-warning   { background: var(--warning);  color: #fff; box-shadow: 0 4px 14px rgba(245,158,11,.28); }
        .btn-sm        { padding: 7px 13px; font-size: 12.5px; border-radius: 6px; }
        .btn svg       { width: 15px; height: 15px; }

        .table-wrapper { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background: #f8f9fd;
            border-bottom: 2px solid var(--border);
        }

        th {
            text-align: left;
            padding: 13px 16px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .7px;
            white-space: nowrap;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
            color: var(--text-primary);
        }

        tbody tr {
            transition: background var(--transition);
        }

        tbody tr:hover { background: #fafbff; }
        tbody tr:last-child td { border-bottom: none; }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .badge.admin       { background: var(--brand-light);   color: var(--brand-dark); }
        .badge.user        { background: var(--info-light);     color: var(--info); }
        .badge.influencer  { background: var(--warning-light);  color: var(--warning); }
        .badge.active      { background: #dcfce7; color: #166534; }
        .badge.inactive    { background: #fef2f2; color: #b91c1c; }

        .badge::before {
            content: '';
            width: 6px; height: 6px;
            border-radius: 50%;
            background: currentColor;
        }

        .role-form,
        .status-form {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .role-form select {
            padding: 7px 10px;
            border-radius: 6px;
            margin: 0;
            font-size: 13px;
            min-width: 110px;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-muted);
        }

        .empty-state svg { width: 44px; height: 44px; margin-bottom: 12px; opacity: .45; }
        .empty-state p { font-size: 14px; font-weight: 600; }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--text-muted); }

        .stars { display: inline-flex; gap: 2px; }
        .star { color: #d1d5db; font-size: 14px; }
        .star.filled { color: var(--warning); }

        .form-divider { height: 1px; background: var(--border); margin: 18px 0; }

        .filters-bar {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: end;
        }

        .filters-bar .form-group.flex-grow {
            flex: 1;
            min-width: 260px;
        }

        .filters-bar .form-group.fixed-width {
            min-width: 220px;
        }

        .filters-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<div class=\"layout\">

   <aside class=\"sidebar\">
    <div class=\"brand\">
        <div class=\"brand-icon\">
            <img src=\"";
        // line 472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Fin-Dinari Logo\">
        </div>
        <span class=\"brand-name\">Fin-Dinari</span>
    </div>

    <div class=\"nav-section\">Main</div>

    <!-- DASHBOARD -->
    <a class=\"side-link ";
        // line 480
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "request", [], "any", false, false, false, 480), "attributes", [], "any", false, false, false, 480), "get", ["_route"], "method", false, false, false, 480) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/>
            <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/>
            <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/>
            <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/>
        </svg>
        Dashboard
    </a>

    <!-- WALLETS -->
    <a class=\"side-link ";
        // line 492
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 492, $this->source); })()), "request", [], "any", false, false, false, 492), "attributes", [], "any", false, false, false, 492), "get", ["_route"], "method", false, false, false, 492) == "app_admin_wallets")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/>
            <path d=\"M2 10h20\"/>
        </svg>
        Manage Wallets
    </a>

    <!-- OBLIGATIONS -->
    <a class=\"side-link ";
        // line 502
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 502, $this->source); })()), "request", [], "any", false, false, false, 502), "attributes", [], "any", false, false, false, 502), "get", ["_route"], "method", false, false, false, 502) == "app_admin_obligations")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 503
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_obligations");
        yield "\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83\"/>
            <circle cx=\"12\" cy=\"12\" r=\"3\"/>
        </svg>
        Manage Obligations
    </a>

    <div class=\"sidebar-footer\">
        <a class=\"side-link\" href=\"";
        // line 512
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\"/>
                <polyline points=\"9 22 9 12 15 12 15 22\"/>
            </svg>
            Back to site
        </a>

        <a class=\"side-link\" href=\"";
        // line 520
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
            </svg>
            Logout
        </a>
    </div>
</aside>
    <main class=\"content\">

        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Admin <span>Dashboard</span></div>
            </div>
            <div class=\"topbar-right\">
                <a href=\"";
        // line 537
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\" class=\"btn btn-primary\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                    Wallets
                </a>
                <div class=\"welcome-text\">Welcome back, <strong>";
        // line 541
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "prenom", [], "any", false, false, false, 541), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "nom", [], "any", false, false, false, 541), "html", null, true);
        yield "</strong></div>
                <div class=\"avatar\">";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 542, $this->source); })()), "user", [], "any", false, false, false, 542), "prenom", [], "any", false, false, false, 542))), "html", null, true);
        yield "</div>
            </div>
        </div>

        ";
        // line 546
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 546, $this->source); })()), "flashes", ["success"], "method", false, false, false, 546));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 547
            yield "            <div class=\"flash success\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M22 11.08V12a10 10 0 11-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/></svg>
                ";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 552
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 552, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 552));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 553
            yield "            <div class=\"flash danger\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"/></svg>
                ";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 558
        yield "
        <div class=\"cards\">
            <div class=\"card c-purple\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 00-3-3.87\"/><path d=\"M16 3.13a4 4 0 010 7.75\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Users</div>
                    <div class=\"card-value\">";
        // line 566
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 566, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>

            <div class=\"card c-blue\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Feedbacks</div>
                    <div class=\"card-value\">";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFeedbacks"]) || array_key_exists("totalFeedbacks", $context) ? $context["totalFeedbacks"] : (function () { throw new RuntimeError('Variable "totalFeedbacks" does not exist.', 576, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>

            <div class=\"card c-red\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Admins</div>
                    <div class=\"card-value\">";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 586, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>

            <div class=\"card c-amber\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Influencers</div>
                    <div class=\"card-value\">";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["influencerCount"]) || array_key_exists("influencerCount", $context) ? $context["influencerCount"] : (function () { throw new RuntimeError('Variable "influencerCount" does not exist.', 596, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>

            <a class=\"card c-green card-link\" href=\"";
        // line 600
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\" style=\"text-decoration:none;\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Wallets</div>
                    <div class=\"card-value\" style=\"font-size:15px;font-weight:700;color:var(--brand);padding-top:4px;\">Manage →</div>
                </div>
            </a>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><line x1=\"19\" y1=\"8\" x2=\"19\" y2=\"14\"/><line x1=\"22\" y1=\"11\" x2=\"16\" y2=\"11\"/></svg>
                    Create Admin Account
                </div>
            </div>
            <div class=\"section-body\">
                <form method=\"post\" action=\"";
        // line 619
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_create_admin");
        yield "\">
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Last name</label>
                            <input type=\"text\" name=\"nom\" placeholder=\"e.g. Dupont\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>First name</label>
                            <input type=\"text\" name=\"prenom\" placeholder=\"e.g. Marie\" required>
                        </div>
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" name=\"gmail\" placeholder=\"admin@example.com\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            <input type=\"password\" name=\"password\" placeholder=\"Min. 8 characters\" required>
                        </div>
                    </div>
                    <div class=\"form-divider\"></div>
                    <button class=\"btn btn-primary\" type=\"submit\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><line x1=\"19\" y1=\"8\" x2=\"19\" y2=\"14\"/><line x1=\"22\" y1=\"11\" x2=\"16\" y2=\"11\"/></svg>
                        Create Admin
                    </button>
                </form>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 00-3-3.87\"/><path d=\"M16 3.13a4 4 0 010 7.75\"/></svg>
                    All Users
                </div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                    ";
        // line 656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("filteredUsersCount", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["filteredUsersCount"]) || array_key_exists("filteredUsersCount", $context) ? $context["filteredUsersCount"] : (function () { throw new RuntimeError('Variable "filteredUsersCount" does not exist.', 656, $this->source); })()), Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 656, $this->source); })())))) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 656, $this->source); })())))), "html", null, true);
        yield " shown / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 656, $this->source); })()), "html", null, true);
        yield " total
                </span>
            </div>

            <div class=\"section-body\" style=\"padding-bottom: 0;\">
                <form method=\"get\" action=\"";
        // line 661
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"filters-bar\">
                    <div class=\"form-group flex-grow\">
                        <label>Search user by name</label>
                        <input type=\"text\" name=\"q\" value=\"";
        // line 664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 664, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Search by first name or last name\">
                    </div>

                    <div class=\"form-group fixed-width\">
                        <label>Sort by</label>
                        <select name=\"sort\">
                            <option value=\"name_asc\" ";
        // line 670
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 670, $this->source); })()) == "name_asc")) {
            yield "selected";
        }
        yield ">Name A → Z</option>
                            <option value=\"name_desc\" ";
        // line 671
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 671, $this->source); })()) == "name_desc")) {
            yield "selected";
        }
        yield ">Name Z → A</option>
                            <option value=\"role_asc\" ";
        // line 672
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 672, $this->source); })()) == "role_asc")) {
            yield "selected";
        }
        yield ">Role A → Z</option>
                            <option value=\"role_desc\" ";
        // line 673
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 673, $this->source); })()) == "role_desc")) {
            yield "selected";
        }
        yield ">Role Z → A</option>
                            <option value=\"status_asc\" ";
        // line 674
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 674, $this->source); })()) == "status_asc")) {
            yield "selected";
        }
        yield ">Status A → Z</option>
                            <option value=\"status_desc\" ";
        // line 675
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 675, $this->source); })()) == "status_desc")) {
            yield "selected";
        }
        yield ">Status Z → A</option>
                            <option value=\"id_asc\" ";
        // line 676
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 676, $this->source); })()) == "id_asc")) {
            yield "selected";
        }
        yield ">Oldest ID</option>
                            <option value=\"id_desc\" ";
        // line 677
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 677, $this->source); })()) == "id_desc")) {
            yield "selected";
        }
        yield ">Newest ID</option>
                        </select>
                    </div>

                    <div class=\"filters-actions\">
                        <button class=\"btn btn-primary\" type=\"submit\">Apply</button>
                        <a href=\"";
        // line 683
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-secondary\">Reset</a>
                    </div>
                </form>
            </div>

            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Change Role</th>
                            <th>Activate / Deactivate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 703
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 703, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 704
            yield "                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 705
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 705), "html", null, true);
            yield "</td>
                            <td>
                    <a href=\"";
            // line 707
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 707)]), "html", null, true);
            yield "\" style=\"text-decoration:none;color:inherit;\">
                        <div style=\"display:flex;align-items:center;gap:10px;\">
                            <div style=\"width:34px;height:34px;border-radius:50%;background:var(--brand-light);color:var(--brand-dark);font-weight:800;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;\">
                                ";
            // line 710
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 710))), "html", null, true);
            yield "
                            </div>
                            <span style=\"font-weight:700;color:var(--brand-dark);\">
                                ";
            // line 713
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 713), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 713), "html", null, true);
            yield "
                            </span>
                        </div>
                    </a>
                </td>
                            <td style=\"color:var(--text-secondary);\">";
            // line 718
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "gmail", [], "any", false, false, false, 718), "html", null, true);
            yield "</td>

                            <td>
                                <span class=\"badge ";
            // line 721
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 721) == "ADMIN")) {
                yield "admin";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 721) == "INFLUENCER")) {
                yield "influencer";
            } else {
                yield "user";
            }
            yield "\">
                                    ";
            // line 722
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 722), "html", null, true);
            yield "
                                </span>
                            </td>

                            <td>
                                ";
            // line 727
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 727) == "ACTIF")) {
                // line 728
                yield "                                    <span class=\"badge active\">ACTIF</span>
                                ";
            } else {
                // line 730
                yield "                                    <span class=\"badge inactive\">INACTIF</span>
                                ";
            }
            // line 732
            yield "                            </td>

                            <td>
                                <form method=\"post\" action=\"";
            // line 735
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_role", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 735)]), "html", null, true);
            yield "\" class=\"role-form\">
                                    <select name=\"role\">
                                        <option value=\"USER\" ";
            // line 737
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 737) == "USER")) {
                yield "selected";
            }
            yield ">USER</option>
                                        <option value=\"ADMIN\" ";
            // line 738
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 738) == "ADMIN")) {
                yield "selected";
            }
            yield ">ADMIN</option>
                                        <option value=\"INFLUENCER\" ";
            // line 739
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 739) == "INFLUENCER")) {
                yield "selected";
            }
            yield ">INFLUENCER</option>
                                    </select>
                                    <button class=\"btn btn-success btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg>
                                        Save
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form method=\"post\" action=\"";
            // line 749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 749)]), "html", null, true);
            yield "\" class=\"status-form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle_status_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 750))), "html", null, true);
            yield "\">
                                    <input type=\"hidden\" name=\"statut\" value=\"";
            // line 751
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 751) == "ACTIF")) {
                yield "INACTIF";
            } else {
                yield "ACTIF";
            }
            yield "\">

                                    ";
            // line 753
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 753) == "ACTIF")) {
                // line 754
                yield "                                        <button class=\"btn btn-warning btn-sm\" type=\"submit\" onclick=\"return confirm('Deactivate this account?');\">
                                            Deactivate
                                        </button>
                                    ";
            } else {
                // line 758
                yield "                                        <button class=\"btn btn-success btn-sm\" type=\"submit\" onclick=\"return confirm('Activate this account?');\">
                                            Activate
                                        </button>
                                    ";
            }
            // line 762
            yield "                                </form>
                            </td>

                            <td>
                                <form method=\"post\" action=\"";
            // line 766
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 766)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 767))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 775
        if (!$context['_iterated']) {
            // line 776
            yield "                        <tr>
                            <td colspan=\"8\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/></svg>
                                    <p>No users found for this search.</p>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 785
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                    Feedbacks
                </div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">";
        // line 796
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalFeedbacks"]) || array_key_exists("totalFeedbacks", $context) ? $context["totalFeedbacks"] : (function () { throw new RuntimeError('Variable "totalFeedbacks" does not exist.', 796, $this->source); })()), "html", null, true);
        yield " total</span>
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Rating</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 811
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 811, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feedback"]) {
            // line 812
            yield "                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 813
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 813), "html", null, true);
            yield "</td>
                            <td style=\"color:var(--text-secondary);font-weight:600;\">";
            // line 814
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "userEmail", [], "any", false, false, false, 814), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"stars\">
                                    ";
            // line 817
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 818
                yield "                                        <span class=\"star ";
                if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 818))) {
                    yield "filled";
                }
                yield "\">★</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 820
            yield "                                </div>
                                <div style=\"font-size:11.5px;color:var(--text-muted);font-weight:700;margin-top:2px;\">";
            // line 821
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "rating", [], "any", false, false, false, 821), "html", null, true);
            yield "/5</div>
                            </td>
                            <td style=\"max-width:280px;color:var(--text-secondary);\">";
            // line 823
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "message", [], "any", false, false, false, 823), "html", null, true);
            yield "</td>
                            <td style=\"color:var(--text-muted);font-size:13px;font-weight:600;white-space:nowrap;\">
                                ";
            // line 825
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 825)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "createdAt", [], "any", false, false, false, 825), "d M Y, H:i"), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td>
                                <form method=\"post\" action=\"";
            // line 828
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_feedback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 828)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Delete this feedback?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 829
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_feedback_admin_" . CoreExtension::getAttribute($this->env, $this->source, $context["feedback"], "id", [], "any", false, false, false, 829))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 837
        if (!$context['_iterated']) {
            // line 838
            yield "                        <tr>
                            <td colspan=\"6\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                                    <p>No feedbacks found yet.</p>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['feedback'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 847
        yield "                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.html.twig";
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
        return array (  1179 => 847,  1165 => 838,  1163 => 837,  1150 => 829,  1146 => 828,  1140 => 825,  1135 => 823,  1130 => 821,  1127 => 820,  1116 => 818,  1112 => 817,  1106 => 814,  1102 => 813,  1099 => 812,  1094 => 811,  1076 => 796,  1063 => 785,  1049 => 776,  1047 => 775,  1034 => 767,  1030 => 766,  1024 => 762,  1018 => 758,  1012 => 754,  1010 => 753,  1001 => 751,  997 => 750,  993 => 749,  978 => 739,  972 => 738,  966 => 737,  961 => 735,  956 => 732,  952 => 730,  948 => 728,  946 => 727,  938 => 722,  928 => 721,  922 => 718,  912 => 713,  906 => 710,  900 => 707,  895 => 705,  892 => 704,  887 => 703,  864 => 683,  853 => 677,  847 => 676,  841 => 675,  835 => 674,  829 => 673,  823 => 672,  817 => 671,  811 => 670,  802 => 664,  796 => 661,  786 => 656,  746 => 619,  724 => 600,  717 => 596,  704 => 586,  691 => 576,  678 => 566,  668 => 558,  659 => 555,  655 => 553,  650 => 552,  641 => 549,  637 => 547,  633 => 546,  626 => 542,  620 => 541,  613 => 537,  593 => 520,  582 => 512,  570 => 503,  566 => 502,  554 => 493,  550 => 492,  536 => 481,  532 => 480,  521 => 472,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin Dashboard — Fin-Dinari</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
    <style>
        :root {
            --brand: #16a34a;
            --brand-light: #dcfce7;
            --brand-dark: #15803d;
            --danger: #ef4444;
            --danger-light: #fef2f2;
            --success: #22c55e;
            --success-light: #dcfce7;
            --warning: #f59e0b;
            --warning-light: #fff8e6;
            --info: #0ea5e9;
            --info-light: #e6f6ff;
            --bg: #f4f7f4;
            --surface: #ffffff;
            --border: #e4ebe4;
            --text-primary: #1a2e1a;
            --text-secondary: #4b6b4b;
            --text-muted: #8faa8f;
            --sidebar-width: 270px;
            --topbar-height: 72px;
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --shadow-card: 0 2px 16px rgba(22,163,74,.07);
            --shadow-hover: 0 8px 28px rgba(22,163,74,.20);
            --transition: .22s cubic-bezier(.4,0,.2,1);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            font-size: 14.5px;
            line-height: 1.6;
        }

        .layout { display: flex; min-height: 100vh; }

        .sidebar {
            width: var(--sidebar-width);
            background: var(--surface);
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0; left: 0; bottom: 0;
            z-index: 100;
            padding: 28px 18px 24px;
            overflow-y: auto;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 10px 28px;
            border-bottom: 1px solid var(--border);
            margin-bottom: 18px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-size: 22px;
            font-weight: 800;
            color: var(--brand);
            letter-spacing: -0.5px;
        }

        .nav-section {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.9px;
            text-transform: uppercase;
            color: var(--text-muted);
            padding: 8px 12px 6px;
            margin-top: 4px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 11px;
            text-decoration: none;
            color: var(--text-secondary);
            padding: 11px 14px;
            border-radius: var(--radius-md);
            margin-bottom: 4px;
            font-weight: 600;
            font-size: 14px;
            transition: background var(--transition), color var(--transition), transform var(--transition);
            position: relative;
        }

        .side-link:hover {
            background: var(--brand-light);
            color: var(--brand);
            transform: translateX(2px);
        }

        .side-link.active {
            background: var(--brand-light);
            color: var(--brand);
            box-shadow: inset 3px 0 0 var(--brand);
        }

        .side-link svg { width: 18px; height: 18px; flex-shrink: 0; }

        .sidebar-footer {
            margin-top: auto;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .content {
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 28px;
            min-width: 0;
        }

        .topbar {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 26px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
        }

        .topbar-title { font-size: 22px; font-weight: 800; letter-spacing: -0.4px; }
        .topbar-title span { color: var(--brand); }

        .topbar-right { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }

        .avatar {
            width: 38px; height: 38px;
            border-radius: 50%;
            background: var(--brand-light);
            color: var(--brand);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        .flash {
            padding: 14px 18px;
            border-radius: var(--radius-md);
            margin-bottom: 20px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            border: 1px solid transparent;
            animation: fadeSlideDown .3s ease;
        }

        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .flash.success { background: var(--success-light); color: #166534; border-color: #b2f5d1; }
        .flash.danger  { background: var(--danger-light);  color: #9b1c1c; border-color: #fdb9b9; }
        .flash svg { flex-shrink: 0; width: 18px; height: 18px; }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px 22px 20px;
            box-shadow: var(--shadow-card);
            border: 1px solid var(--border);
            display: flex;
            align-items: flex-start;
            gap: 16px;
            transition: transform var(--transition), box-shadow var(--transition);
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 80px; height: 80px;
            border-radius: 50%;
            background: var(--card-accent, var(--brand-light));
            transform: translate(25px, -25px);
            opacity: .55;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .card-icon {
            width: 46px; height: 46px;
            border-radius: 14px;
            background: var(--card-accent, var(--brand-light));
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        .card-icon svg { width: 22px; height: 22px; }

        .card-body { flex: 1; min-width: 0; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card-link { text-decoration: none; }

        .card.c-purple  { --card-accent: #dcfce7; } .card.c-purple  .card-icon svg { color: var(--brand); }
        .card.c-green   { --card-accent: #d1fae5; } .card.c-green   .card-icon svg { color: var(--brand-dark); }
        .card.c-amber   { --card-accent: #fff8e6; } .card.c-amber   .card-icon svg { color: var(--warning); }
        .card.c-blue    { --card-accent: #e6f6ff; } .card.c-blue    .card-icon svg { color: var(--info); }
        .card.c-red     { --card-accent: #fef2f2; } .card.c-red     .card-icon svg { color: var(--danger); }

        .section {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-card);
            margin-bottom: 26px;
            overflow: hidden;
        }

        .section-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .section-title {
            font-size: 16px;
            font-weight: 800;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .section-title svg { width: 18px; height: 18px; color: var(--brand); }

        .section-body { padding: 24px 26px; }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 14px; }
        @media (max-width: 640px) { .form-grid { grid-template-columns: 1fr; } }

        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-group label { font-size: 12.5px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }

        input[type=\"text\"],
        input[type=\"email\"],
        input[type=\"password\"],
        select,
        textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: #fafbff;
            color: var(--text-primary);
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(105,108,255,.14);
            background: #fff;
        }

        input::placeholder { color: var(--text-muted); font-weight: 400; }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 10px 18px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none;
            transition: filter var(--transition), transform var(--transition), box-shadow var(--transition);
            white-space: nowrap;
        }

        .btn:hover { filter: brightness(1.08); transform: translateY(-1px); }
        .btn:active { transform: translateY(0); filter: brightness(.97); }

        .btn-primary   { background: var(--brand);   color: #fff; box-shadow: 0 4px 14px rgba(34,197,94,.35); }
        .btn-danger    { background: var(--danger);   color: #fff; box-shadow: 0 4px 14px rgba(239,68,68,.28); }
        .btn-success   { background: var(--success);  color: #fff; box-shadow: 0 4px 14px rgba(34,197,94,.28); }
        .btn-secondary { background: #f0f2f7;         color: var(--text-secondary); }
        .btn-warning   { background: var(--warning);  color: #fff; box-shadow: 0 4px 14px rgba(245,158,11,.28); }
        .btn-sm        { padding: 7px 13px; font-size: 12.5px; border-radius: 6px; }
        .btn svg       { width: 15px; height: 15px; }

        .table-wrapper { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead tr {
            background: #f8f9fd;
            border-bottom: 2px solid var(--border);
        }

        th {
            text-align: left;
            padding: 13px 16px;
            font-size: 12px;
            font-weight: 700;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .7px;
            white-space: nowrap;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
            color: var(--text-primary);
        }

        tbody tr {
            transition: background var(--transition);
        }

        tbody tr:hover { background: #fafbff; }
        tbody tr:last-child td { border-bottom: none; }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .badge.admin       { background: var(--brand-light);   color: var(--brand-dark); }
        .badge.user        { background: var(--info-light);     color: var(--info); }
        .badge.influencer  { background: var(--warning-light);  color: var(--warning); }
        .badge.active      { background: #dcfce7; color: #166534; }
        .badge.inactive    { background: #fef2f2; color: #b91c1c; }

        .badge::before {
            content: '';
            width: 6px; height: 6px;
            border-radius: 50%;
            background: currentColor;
        }

        .role-form,
        .status-form {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .role-form select {
            padding: 7px 10px;
            border-radius: 6px;
            margin: 0;
            font-size: 13px;
            min-width: 110px;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-muted);
        }

        .empty-state svg { width: 44px; height: 44px; margin-bottom: 12px; opacity: .45; }
        .empty-state p { font-size: 14px; font-weight: 600; }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--text-muted); }

        .stars { display: inline-flex; gap: 2px; }
        .star { color: #d1d5db; font-size: 14px; }
        .star.filled { color: var(--warning); }

        .form-divider { height: 1px; background: var(--border); margin: 18px 0; }

        .filters-bar {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: end;
        }

        .filters-bar .form-group.flex-grow {
            flex: 1;
            min-width: 260px;
        }

        .filters-bar .form-group.fixed-width {
            min-width: 220px;
        }

        .filters-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<div class=\"layout\">

   <aside class=\"sidebar\">
    <div class=\"brand\">
        <div class=\"brand-icon\">
            <img src=\"{{ asset('images/logo.png') }}\" alt=\"Fin-Dinari Logo\">
        </div>
        <span class=\"brand-name\">Fin-Dinari</span>
    </div>

    <div class=\"nav-section\">Main</div>

    <!-- DASHBOARD -->
    <a class=\"side-link {{ app.request.attributes.get('_route') == 'app_admin_dashboard' ? 'active' : '' }}\"
       href=\"{{ path('app_admin_dashboard') }}\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/>
            <rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/>
            <rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/>
            <rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/>
        </svg>
        Dashboard
    </a>

    <!-- WALLETS -->
    <a class=\"side-link {{ app.request.attributes.get('_route') == 'app_admin_wallets' ? 'active' : '' }}\"
       href=\"{{ path('app_admin_wallets') }}\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/>
            <path d=\"M2 10h20\"/>
        </svg>
        Manage Wallets
    </a>

    <!-- OBLIGATIONS -->
    <a class=\"side-link {{ app.request.attributes.get('_route') == 'app_admin_obligations' ? 'active' : '' }}\"
       href=\"{{ path('app_admin_obligations') }}\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <path d=\"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83\"/>
            <circle cx=\"12\" cy=\"12\" r=\"3\"/>
        </svg>
        Manage Obligations
    </a>

    <div class=\"sidebar-footer\">
        <a class=\"side-link\" href=\"{{ path('app_home') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\"/>
                <polyline points=\"9 22 9 12 15 12 15 22\"/>
            </svg>
            Back to site
        </a>

        <a class=\"side-link\" href=\"{{ path('app_logout') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4\"/>
                <polyline points=\"16 17 21 12 16 7\"/>
                <line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/>
            </svg>
            Logout
        </a>
    </div>
</aside>
    <main class=\"content\">

        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Admin <span>Dashboard</span></div>
            </div>
            <div class=\"topbar-right\">
                <a href=\"{{ path('app_admin_wallets') }}\" class=\"btn btn-primary\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                    Wallets
                </a>
                <div class=\"welcome-text\">Welcome back, <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong></div>
                <div class=\"avatar\">{{ app.user.prenom|first|upper }}</div>
            </div>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"flash success\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M22 11.08V12a10 10 0 11-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/></svg>
                {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"flash danger\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"/></svg>
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"cards\">
            <div class=\"card c-purple\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 00-3-3.87\"/><path d=\"M16 3.13a4 4 0 010 7.75\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Users</div>
                    <div class=\"card-value\">{{ totalUsers }}</div>
                </div>
            </div>

            <div class=\"card c-blue\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Feedbacks</div>
                    <div class=\"card-value\">{{ totalFeedbacks }}</div>
                </div>
            </div>

            <div class=\"card c-red\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Admins</div>
                    <div class=\"card-value\">{{ adminCount }}</div>
                </div>
            </div>

            <div class=\"card c-amber\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Influencers</div>
                    <div class=\"card-value\">{{ influencerCount }}</div>
                </div>
            </div>

            <a class=\"card c-green card-link\" href=\"{{ path('app_admin_wallets') }}\" style=\"text-decoration:none;\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Wallets</div>
                    <div class=\"card-value\" style=\"font-size:15px;font-weight:700;color:var(--brand);padding-top:4px;\">Manage →</div>
                </div>
            </a>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><line x1=\"19\" y1=\"8\" x2=\"19\" y2=\"14\"/><line x1=\"22\" y1=\"11\" x2=\"16\" y2=\"11\"/></svg>
                    Create Admin Account
                </div>
            </div>
            <div class=\"section-body\">
                <form method=\"post\" action=\"{{ path('app_admin_create_admin') }}\">
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Last name</label>
                            <input type=\"text\" name=\"nom\" placeholder=\"e.g. Dupont\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>First name</label>
                            <input type=\"text\" name=\"prenom\" placeholder=\"e.g. Marie\" required>
                        </div>
                    </div>
                    <div class=\"form-grid\">
                        <div class=\"form-group\">
                            <label>Email address</label>
                            <input type=\"email\" name=\"gmail\" placeholder=\"admin@example.com\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            <input type=\"password\" name=\"password\" placeholder=\"Min. 8 characters\" required>
                        </div>
                    </div>
                    <div class=\"form-divider\"></div>
                    <button class=\"btn btn-primary\" type=\"submit\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><line x1=\"19\" y1=\"8\" x2=\"19\" y2=\"14\"/><line x1=\"22\" y1=\"11\" x2=\"16\" y2=\"11\"/></svg>
                        Create Admin
                    </button>
                </form>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/><path d=\"M23 21v-2a4 4 0 00-3-3.87\"/><path d=\"M16 3.13a4 4 0 010 7.75\"/></svg>
                    All Users
                </div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                    {{ filteredUsersCount|default(users|length) }} shown / {{ totalUsers }} total
                </span>
            </div>

            <div class=\"section-body\" style=\"padding-bottom: 0;\">
                <form method=\"get\" action=\"{{ path('app_admin_dashboard') }}\" class=\"filters-bar\">
                    <div class=\"form-group flex-grow\">
                        <label>Search user by name</label>
                        <input type=\"text\" name=\"q\" value=\"{{ search|default('') }}\" placeholder=\"Search by first name or last name\">
                    </div>

                    <div class=\"form-group fixed-width\">
                        <label>Sort by</label>
                        <select name=\"sort\">
                            <option value=\"name_asc\" {% if sort == 'name_asc' %}selected{% endif %}>Name A → Z</option>
                            <option value=\"name_desc\" {% if sort == 'name_desc' %}selected{% endif %}>Name Z → A</option>
                            <option value=\"role_asc\" {% if sort == 'role_asc' %}selected{% endif %}>Role A → Z</option>
                            <option value=\"role_desc\" {% if sort == 'role_desc' %}selected{% endif %}>Role Z → A</option>
                            <option value=\"status_asc\" {% if sort == 'status_asc' %}selected{% endif %}>Status A → Z</option>
                            <option value=\"status_desc\" {% if sort == 'status_desc' %}selected{% endif %}>Status Z → A</option>
                            <option value=\"id_asc\" {% if sort == 'id_asc' %}selected{% endif %}>Oldest ID</option>
                            <option value=\"id_desc\" {% if sort == 'id_desc' %}selected{% endif %}>Newest ID</option>
                        </select>
                    </div>

                    <div class=\"filters-actions\">
                        <button class=\"btn btn-primary\" type=\"submit\">Apply</button>
                        <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-secondary\">Reset</a>
                    </div>
                </form>
            </div>

            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Change Role</th>
                            <th>Activate / Deactivate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in users %}
                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">{{ user.id }}</td>
                            <td>
                    <a href=\"{{ path('app_admin_user_show', {id: user.id}) }}\" style=\"text-decoration:none;color:inherit;\">
                        <div style=\"display:flex;align-items:center;gap:10px;\">
                            <div style=\"width:34px;height:34px;border-radius:50%;background:var(--brand-light);color:var(--brand-dark);font-weight:800;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;\">
                                {{ user.prenom|first|upper }}
                            </div>
                            <span style=\"font-weight:700;color:var(--brand-dark);\">
                                {{ user.prenom }} {{ user.nom }}
                            </span>
                        </div>
                    </a>
                </td>
                            <td style=\"color:var(--text-secondary);\">{{ user.gmail }}</td>

                            <td>
                                <span class=\"badge {% if user.role == 'ADMIN' %}admin{% elseif user.role == 'INFLUENCER' %}influencer{% else %}user{% endif %}\">
                                    {{ user.role }}
                                </span>
                            </td>

                            <td>
                                {% if user.statut == 'ACTIF' %}
                                    <span class=\"badge active\">ACTIF</span>
                                {% else %}
                                    <span class=\"badge inactive\">INACTIF</span>
                                {% endif %}
                            </td>

                            <td>
                                <form method=\"post\" action=\"{{ path('app_admin_user_role', {id: user.id}) }}\" class=\"role-form\">
                                    <select name=\"role\">
                                        <option value=\"USER\" {% if user.role == 'USER' %}selected{% endif %}>USER</option>
                                        <option value=\"ADMIN\" {% if user.role == 'ADMIN' %}selected{% endif %}>ADMIN</option>
                                        <option value=\"INFLUENCER\" {% if user.role == 'INFLUENCER' %}selected{% endif %}>INFLUENCER</option>
                                    </select>
                                    <button class=\"btn btn-success btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg>
                                        Save
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form method=\"post\" action=\"{{ path('app_admin_user_status', {id: user.id}) }}\" class=\"status-form\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('toggle_status_' ~ user.id) }}\">
                                    <input type=\"hidden\" name=\"statut\" value=\"{% if user.statut == 'ACTIF' %}INACTIF{% else %}ACTIF{% endif %}\">

                                    {% if user.statut == 'ACTIF' %}
                                        <button class=\"btn btn-warning btn-sm\" type=\"submit\" onclick=\"return confirm('Deactivate this account?');\">
                                            Deactivate
                                        </button>
                                    {% else %}
                                        <button class=\"btn btn-success btn-sm\" type=\"submit\" onclick=\"return confirm('Activate this account?');\">
                                            Activate
                                        </button>
                                    {% endif %}
                                </form>
                            </td>

                            <td>
                                <form method=\"post\" action=\"{{ path('app_admin_user_delete', {id: user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_user_' ~ user.id) }}\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"8\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><path d=\"M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2\"/><circle cx=\"9\" cy=\"7\" r=\"4\"/></svg>
                                    <p>No users found for this search.</p>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                    Feedbacks
                </div>
                <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">{{ totalFeedbacks }} total</span>
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Rating</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for feedback in feedbacks %}
                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">{{ feedback.id }}</td>
                            <td style=\"color:var(--text-secondary);font-weight:600;\">{{ feedback.userEmail }}</td>
                            <td>
                                <div class=\"stars\">
                                    {% for i in 1..5 %}
                                        <span class=\"star {% if i <= feedback.rating %}filled{% endif %}\">★</span>
                                    {% endfor %}
                                </div>
                                <div style=\"font-size:11.5px;color:var(--text-muted);font-weight:700;margin-top:2px;\">{{ feedback.rating }}/5</div>
                            </td>
                            <td style=\"max-width:280px;color:var(--text-secondary);\">{{ feedback.message }}</td>
                            <td style=\"color:var(--text-muted);font-size:13px;font-weight:600;white-space:nowrap;\">
                                {{ feedback.createdAt ? feedback.createdAt|date('d M Y, H:i') : '—' }}
                            </td>
                            <td>
                                <form method=\"post\" action=\"{{ path('app_admin_feedback_delete', {id: feedback.id}) }}\" onsubmit=\"return confirm('Delete this feedback?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_feedback_admin_' ~ feedback.id) }}\">
                                    <button class=\"btn btn-danger btn-sm\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><path d=\"M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z\"/></svg>
                                    <p>No feedbacks found yet.</p>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
</body>
</html>", "admin/dashboard.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\dashboard.html.twig");
    }
}
