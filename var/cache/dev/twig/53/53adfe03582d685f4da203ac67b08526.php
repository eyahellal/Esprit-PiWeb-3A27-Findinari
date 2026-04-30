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

/* admin/management_dashboard.html.twig */
class __TwigTemplate_d0655f261dbee069e2f4104342583c07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/management_dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/management_dashboard.html.twig"));

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
        /* Charts */
.charts-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 26px; }
@media (max-width: 900px) { .charts-row { grid-template-columns: 1fr; } }
.chart-card { background: var(--surface); border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-card); padding: 20px; }
.chart-title { font-size: 14px; font-weight: 800; color: var(--text-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
.chart-title i { color: var(--brand); }

/* Two column layout */
.two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 26px; }
@media (max-width: 900px) { .two-col { grid-template-columns: 1fr; } }

/* Progress bars */
.progress-bar { height: 6px; background: #e4ebe4; border-radius: 99px; overflow: hidden; }
.progress-fill { height: 100%; border-radius: 99px; transition: width .5s ease; }
.progress-label { display: flex; justify-content: space-between; font-size: 11px; color: var(--text-muted); font-weight: 600; margin-top: 3px; }

/* Card sub text */
.card-sub { font-size: 12px; color: var(--text-muted); font-weight: 600; margin-top: 4px; }

/* Extra card colors */
.card.c-teal { --card-accent: #e6fffa; }
.card.c-teal .card-icon i { color: #0d9488; }
.card.c-green .card-icon i { color: var(--brand-dark); }
.card.c-purple .card-icon i { color: var(--brand); }
.card.c-blue .card-icon i { color: var(--info); }
.card.c-amber .card-icon i { color: var(--warning); }
.card.c-red .card-icon i { color: var(--danger); }

/* Extra badges */
.badge.income { background: #dcfce7; color: #166534; }
.badge.expense { background: #fef2f2; color: #b91c1c; }
.badge.depense { background: #fef2f2; color: #b91c1c; }
.badge.expired { background: #fef2f2; color: #b91c1c; }
.badge.recurring { background: #fff8e6; color: #92400e; }
    </style>
</head>
<body>
<div class=\"layout\">

  <aside class=\"sidebar\">
    <div class=\"brand\">
        <div class=\"brand-icon\">
            <img src=\"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Fin-Dinari Logo\">
        </div>
        <span class=\"brand-name\">Fin-Dinari</span>
    </div>

    <div class=\"nav-section\">Main</div>

    <!-- DASHBOARD -->
    <a class=\"side-link ";
        // line 514
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 514, $this->source); })()), "request", [], "any", false, false, false, 514), "attributes", [], "any", false, false, false, 514), "get", ["_route"], "method", false, false, false, 514) == "app_admin_dashboard")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 515
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

    <!-- MANAGEMENT -->
    <a class=\"side-link ";
        // line 526
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 526, $this->source); })()), "request", [], "any", false, false, false, 526), "attributes", [], "any", false, false, false, 526), "get", ["_route"], "method", false, false, false, 526) == "app_admin_management")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 527
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_management");
        yield "\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/>
            <path d=\"M2 10h20\"/>
        </svg>
        Management
    </a>
     <!-- WALLETS -->
    <a class=\"side-link ";
        // line 535
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 535, $this->source); })()), "request", [], "any", false, false, false, 535), "attributes", [], "any", false, false, false, 535), "get", ["_route"], "method", false, false, false, 535) == "app_admin_wallets")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 536
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
        // line 545
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 545, $this->source); })()), "request", [], "any", false, false, false, 545), "attributes", [], "any", false, false, false, 545), "get", ["_route"], "method", false, false, false, 545) == "app_admin_obligations")) ? ("active") : (""));
        yield "\"
       href=\"";
        // line 546
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
        // line 555
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                <path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\"/>
                <polyline points=\"9 22 9 12 15 12 15 22\"/>
            </svg>
            Back to site
        </a>
        <a class=\"side-link\" href=\"";
        // line 562
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_tickets");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"/>
            </svg>
            Ticket et message
        </a>
        <a class=\"side-link\" href=\"";
        // line 568
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

    <!-- ═══ MAIN CONTENT ═══ -->
    <main class=\"content\">

        <!-- Topbar -->
        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Management <span>Overview</span></div>
            </div>
            <div style=\"display:flex;align-items:center;gap:14px;\">
                <div class=\"welcome-text\">Welcome, <strong>";
        // line 588
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "prenom", [], "any", false, false, false, 588), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "nom", [], "any", false, false, false, 588), "html", null, true);
        yield "</strong></div>
                <div class=\"avatar\">";
        // line 589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 589, $this->source); })()), "user", [], "any", false, false, false, 589), "prenom", [], "any", false, false, false, 589))), "html", null, true);
        yield "</div>
            </div>
        </div>

        <!-- Flash Messages -->
        ";
        // line 594
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 594, $this->source); })()), "flashes", ["success"], "method", false, false, false, 594));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 595
            yield "            <div class=\"flash success\"><i class=\"fas fa-check-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 597, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 597));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 598
            yield "            <div class=\"flash danger\"><i class=\"fas fa-exclamation-circle\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        yield "
        <!-- ═══ STATS CARDS ═══ -->
        <div class=\"cards\">
            <div class=\"card c-green\">
                <div class=\"card-icon\"><i class=\"fas fa-wallet\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Wallets</div>
                    <div class=\"card-value\">";
        // line 607
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalWallets"]) || array_key_exists("totalWallets", $context) ? $context["totalWallets"] : (function () { throw new RuntimeError('Variable "totalWallets" does not exist.', 607, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"card-sub\">";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalBalance"]) || array_key_exists("totalBalance", $context) ? $context["totalBalance"] : (function () { throw new RuntimeError('Variable "totalBalance" does not exist.', 608, $this->source); })()), 2), "html", null, true);
        yield " total balance</div>
                </div>
            </div>
            <div class=\"card c-purple\">
                <div class=\"card-icon\"><i class=\"fas fa-folder\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Categories</div>
                    <div class=\"card-value\">";
        // line 615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCategories"]) || array_key_exists("totalCategories", $context) ? $context["totalCategories"] : (function () { throw new RuntimeError('Variable "totalCategories" does not exist.', 615, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"card-sub\">";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeCategories"]) || array_key_exists("activeCategories", $context) ? $context["activeCategories"] : (function () { throw new RuntimeError('Variable "activeCategories" does not exist.', 616, $this->source); })()), "html", null, true);
        yield " active · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inactiveCategories"]) || array_key_exists("inactiveCategories", $context) ? $context["inactiveCategories"] : (function () { throw new RuntimeError('Variable "inactiveCategories" does not exist.', 616, $this->source); })()), "html", null, true);
        yield " inactive</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-icon\"><i class=\"fas fa-chart-pie\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Budgets</div>
                    <div class=\"card-value\">";
        // line 623
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalBudgets"]) || array_key_exists("totalBudgets", $context) ? $context["totalBudgets"] : (function () { throw new RuntimeError('Variable "totalBudgets" does not exist.', 623, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"card-sub\">";
        // line 624
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["activeBudgets"]) || array_key_exists("activeBudgets", $context) ? $context["activeBudgets"] : (function () { throw new RuntimeError('Variable "activeBudgets" does not exist.', 624, $this->source); })()), "html", null, true);
        yield " active · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["expiredBudgets"]) || array_key_exists("expiredBudgets", $context) ? $context["expiredBudgets"] : (function () { throw new RuntimeError('Variable "expiredBudgets" does not exist.', 624, $this->source); })()), "html", null, true);
        yield " expired</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-icon\"><i class=\"fas fa-exchange-alt\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Transactions</div>
                    <div class=\"card-value\">";
        // line 631
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalTransactions"]) || array_key_exists("totalTransactions", $context) ? $context["totalTransactions"] : (function () { throw new RuntimeError('Variable "totalTransactions" does not exist.', 631, $this->source); })()), "html", null, true);
        yield "</div>
                    <div class=\"card-sub\">";
        // line 632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recurringCount"]) || array_key_exists("recurringCount", $context) ? $context["recurringCount"] : (function () { throw new RuntimeError('Variable "recurringCount" does not exist.', 632, $this->source); })()), "html", null, true);
        yield " recurring</div>
                </div>
            </div>
            <div class=\"card c-teal\">
                <div class=\"card-icon\"><i class=\"fas fa-arrow-up\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Income</div>
                    <div class=\"card-value\" style=\"font-size:24px;color:var(--brand-dark);\">";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalIncome"]) || array_key_exists("totalIncome", $context) ? $context["totalIncome"] : (function () { throw new RuntimeError('Variable "totalIncome" does not exist.', 639, $this->source); })()), 2), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-red\">
                <div class=\"card-icon\"><i class=\"fas fa-arrow-down\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Expense</div>
                    <div class=\"card-value\" style=\"font-size:24px;color:var(--danger);\">";
        // line 646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalExpense"]) || array_key_exists("totalExpense", $context) ? $context["totalExpense"] : (function () { throw new RuntimeError('Variable "totalExpense" does not exist.', 646, $this->source); })()), 2), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>

        <!-- ═══ CHARTS ═══ -->
        <div class=\"charts-row\">
            <div class=\"chart-card\">
                <div class=\"chart-title\"><i class=\"fas fa-chart-line\"></i> Monthly Income vs Expense</div>
                <div style=\"height:220px;\"><canvas id=\"monthlyChart\"></canvas></div>
            </div>
            <div class=\"chart-card\">
                <div class=\"chart-title\"><i class=\"fas fa-chart-pie\"></i> Spending by Category</div>
                <div style=\"height:220px;\"><canvas id=\"categoryChart\"></canvas></div>
            </div>
        </div>

        <!-- ═══ BUDGET USAGE + TOP CATEGORIES ═══ -->
        <div class=\"two-col\">
            <!-- Budget Usage -->
            <div class=\"section\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><i class=\"fas fa-chart-pie\"></i> Budget Usage</div>
                </div>
                <div class=\"section-body\">
                    ";
        // line 671
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["budgetUsage"]) || array_key_exists("budgetUsage", $context) ? $context["budgetUsage"] : (function () { throw new RuntimeError('Variable "budgetUsage" does not exist.', 671, $this->source); })()))) {
            // line 672
            yield "                        <div class=\"empty-state\"><i class=\"fas fa-chart-pie\"></i><p>No budgets yet</p></div>
                    ";
        } else {
            // line 674
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["budgetUsage"]) || array_key_exists("budgetUsage", $context) ? $context["budgetUsage"] : (function () { throw new RuntimeError('Variable "budgetUsage" does not exist.', 674, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
                // line 675
                yield "                            <div style=\"margin-bottom:14px;\">
                                <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;\">
                                    <span style=\"font-weight:700;font-size:13px;\">";
                // line 677
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "category", [], "any", false, false, false, 677), "html", null, true);
                yield "</span>
                                    <span style=\"font-size:12px;font-weight:700;color:";
                // line 678
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 678) > 90)) {
                    yield "var(--danger)";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 678) > 70)) {
                    yield "var(--warning)";
                } else {
                    yield "var(--brand)";
                }
                yield ";\">
                                        ";
                // line 679
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 679), "html", null, true);
                yield "%
                                    </span>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill\" style=\"width:";
                // line 683
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 683), "html", null, true);
                yield "%;background:";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 683) > 90)) {
                    yield "var(--danger)";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "percent", [], "any", false, false, false, 683) > 70)) {
                    yield "var(--warning)";
                } else {
                    yield "var(--brand)";
                }
                yield ";\"></div>
                                </div>
                                <div class=\"progress-label\">
                                    <span>";
                // line 686
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "spent", [], "any", false, false, false, 686), 2), "html", null, true);
                yield " spent</span>
                                    <span>";
                // line 687
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "limit", [], "any", false, false, false, 687), 2), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "devise", [], "any", false, false, false, 687), "html", null, true);
                yield " limit</span>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 691
            yield "                    ";
        }
        // line 692
        yield "                </div>
            </div>

            <!-- Top Spending -->
            <div class=\"section\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><i class=\"fas fa-fire\"></i> Top Spending Categories</div>
                </div>
                <div class=\"section-body\">
                    ";
        // line 701
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 701, $this->source); })()))) {
            // line 702
            yield "                        <div class=\"empty-state\"><i class=\"fas fa-fire\"></i><p>No expense data yet</p></div>
                    ";
        } else {
            // line 704
            yield "                        ";
            $context["maxSpending"] = 0;
            // line 705
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 705, $this->source); })()));
            foreach ($context['_seq'] as $context["cat"] => $context["data"]) {
                // line 706
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 706) > (isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 706, $this->source); })()))) {
                    $context["maxSpending"] = CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 706);
                }
                // line 707
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cat'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 708
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 708, $this->source); })()), 0, 5));
            foreach ($context['_seq'] as $context["cat"] => $context["data"]) {
                // line 709
                yield "                            <div style=\"margin-bottom:12px;\">
                                <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;\">
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:24px;height:24px;border-radius:50%;background:";
                // line 712
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "color", [], "any", false, false, false, 712), "html", null, true);
                yield ";display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas ";
                // line 713
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 713), "html", null, true);
                yield " text-white\" style=\"font-size:10px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;font-size:13px;\">";
                // line 715
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cat"], "html", null, true);
                yield "</span>
                                    </div>
                                    <span style=\"font-size:12px;font-weight:700;color:var(--danger);\">";
                // line 717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 717), 2), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill\" style=\"width:";
                // line 720
                yield ((((isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 720, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 720) / (isset($context["maxSpending"]) || array_key_exists("maxSpending", $context) ? $context["maxSpending"] : (function () { throw new RuntimeError('Variable "maxSpending" does not exist.', 720, $this->source); })())) * 100), "html", null, true)) : (0));
                yield "%;background:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "color", [], "any", false, false, false, 720), "html", null, true);
                yield ";\"></div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cat'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
            yield "                    ";
        }
        // line 725
        yield "                </div>
            </div>
        </div>

        <!-- ═══ RECENT TRANSACTIONS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-clock\"></i> Recent Transactions</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Wallet</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentTransactions"]) || array_key_exists("recentTransactions", $context) ? $context["recentTransactions"] : (function () { throw new RuntimeError('Variable "recentTransactions" does not exist.', 749, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 750
            yield "                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 751
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "id", [], "any", false, false, false, 751), "html", null, true);
            yield "</td>
                                <td>
                                    <span class=\"badge ";
            // line 753
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 753), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 753)), "html", null, true);
            yield "</span>
                                </td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        ";
            // line 757
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 757)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 758
                yield "                                            <div style=\"width:28px;height:28px;border-radius:50%;background:";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, true, false, 758), "color", [], "any", true, true, false, 758) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 758), "color", [], "any", false, false, false, 758)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 758), "color", [], "any", false, false, false, 758), "html", null, true)) : ("#16a34a"));
                yield ";display:flex;align-items:center;justify-content:center;\">
                                                <i class=\"fas ";
                // line 759
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, true, false, 759), "icon", [], "any", true, true, false, 759) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 759), "icon", [], "any", false, false, false, 759)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 759), "icon", [], "any", false, false, false, 759), "html", null, true)) : ("fa-folder"));
                yield "\" style=\"font-size:11px;color:white;\"></i>
                                            </div>
                                            <span style=\"font-weight:700;\">";
                // line 761
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "categorie", [], "any", false, false, false, 761), "nom", [], "any", false, false, false, 761), "html", null, true);
                yield "</span>
                                        ";
            } else {
                // line 763
                yield "                                            <span style=\"color:var(--text-muted);\">—</span>
                                        ";
            }
            // line 765
            yield "                                    </div>
                                </td>
                                <td style=\"font-weight:600;color:var(--text-secondary);\">";
            // line 767
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "wallet", [], "any", false, false, false, 767), "pays", [], "any", false, false, false, 767), "html", null, true);
            yield "</td>
                                <td>
                                    <span style=\"font-weight:800;color:";
            // line 769
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 769) == "income")) ? ("var(--brand-dark)") : ("var(--danger)"));
            yield ";\">
                                        ";
            // line 770
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "type", [], "any", false, false, false, 770) == "income")) ? ("+") : ("-"));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "montant", [], "any", false, false, false, 770), 2), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "devise", [], "any", false, false, false, 770), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td style=\"color:var(--text-muted);font-size:13px;font-weight:600;white-space:nowrap;\">
                                    ";
            // line 774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date", [], "any", false, false, false, 774), "d M Y, H:i"), "html", null, true);
            yield "
                                </td>
                                <td>
                                    ";
            // line 777
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "isRecurring", [], "any", false, false, false, 777)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 778
                yield "                                        <span class=\"badge recurring\"><i class=\"fas fa-sync-alt\" style=\"font-size:10px;\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "frequency", [], "any", false, false, false, 778)), "html", null, true);
                yield "</span>
                                    ";
            } elseif ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source,             // line 779
$context["transaction"], "description", [], "any", false, false, false, 779)) && is_string($_v1 = "[Auto]") && str_starts_with($_v0, $_v1))) {
                // line 780
                yield "                                        <span class=\"badge\" style=\"background:var(--info-light);color:var(--info);\"><i class=\"fas fa-robot\" style=\"font-size:10px;\"></i> Auto</span>
                                    ";
            } else {
                // line 782
                yield "                                        <span style=\"color:var(--text-muted);font-size:12px;\">Manual</span>
                                    ";
            }
            // line 784
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 786
        if (!$context['_iterated']) {
            // line 787
            yield "                            <tr>
                                <td colspan=\"7\">
                                    <div class=\"empty-state\"><i class=\"fas fa-exchange-alt\"></i><p>No transactions yet.</p></div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 793
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL WALLETS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-wallet\"></i> All Wallets</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Country</th>
                            <th>Currency</th>
                            <th>Balance</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 816
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allWallets"]) || array_key_exists("allWallets", $context) ? $context["allWallets"] : (function () { throw new RuntimeError('Variable "allWallets" does not exist.', 816, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["wallet"]) {
            // line 817
            yield "                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 818
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "id", [], "any", false, false, false, 818), "html", null, true);
            yield "</td>
                                <td style=\"font-weight:700;\">";
            // line 819
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "pays", [], "any", false, false, false, 819), "html", null, true);
            yield "</td>
                                <td><span class=\"badge active\">";
            // line 820
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 820), "html", null, true);
            yield "</span></td>
                                <td style=\"font-weight:800;color:";
            // line 821
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 821) >= 0)) ? ("var(--brand-dark)") : ("var(--danger)"));
            yield ";\">
                                    ";
            // line 822
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "solde", [], "any", false, false, false, 822), 2), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "devise", [], "any", false, false, false, 822), "html", null, true);
            yield "
                                </td>
                                <td style=\"color:var(--text-secondary);font-weight:600;\">
                                    ";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "utilisateur", [], "any", false, false, false, 825), "prenom", [], "any", false, false, false, 825), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["wallet"], "utilisateur", [], "any", false, false, false, 825), "nom", [], "any", false, false, false, 825), "html", null, true);
            yield "
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 828
        if (!$context['_iterated']) {
            // line 829
            yield "                            <tr><td colspan=\"5\"><div class=\"empty-state\"><i class=\"fas fa-wallet\"></i><p>No wallets found.</p></div></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['wallet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 831
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL CATEGORIES TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-folder\"></i> All Categories</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Budgets</th>
                            <th>Transactions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allCategories"]) || array_key_exists("allCategories", $context) ? $context["allCategories"] : (function () { throw new RuntimeError('Variable "allCategories" does not exist.', 854, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 855
            yield "                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 856
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 856), "html", null, true);
            yield "</td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:30px;height:30px;border-radius:50%;background:";
            // line 859
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", true, true, false, 859) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 859)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 859), "html", null, true)) : ("#16a34a"));
            yield ";display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas ";
            // line 860
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", true, true, false, 860) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 860)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 860), "html", null, true)) : ("fa-folder"));
            yield "\" style=\"font-size:12px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;\">";
            // line 862
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 862), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge ";
            // line 866
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "statut", [], "any", false, false, false, 866) == "Active")) ? ("active") : ("inactive"));
            yield "\">
                                        ";
            // line 867
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "statut", [], "any", false, false, false, 867), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td style=\"font-weight:700;\">";
            // line 870
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "budgets", [], "any", false, false, false, 870)), "html", null, true);
            yield "</td>
                                <td style=\"font-weight:700;\">";
            // line 871
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "transactions", [], "any", false, false, false, 871)), "html", null, true);
            yield "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 873
        if (!$context['_iterated']) {
            // line 874
            yield "                            <tr><td colspan=\"5\"><div class=\"empty-state\"><i class=\"fas fa-folder\"></i><p>No categories found.</p></div></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 876
        yield "                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL BUDGETS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-chart-pie\"></i> All Budgets</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Wallet</th>
                            <th>Max Amount</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allBudgets"]) || array_key_exists("allBudgets", $context) ? $context["allBudgets"] : (function () { throw new RuntimeError('Variable "allBudgets" does not exist.', 901, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["budget"]) {
            // line 902
            yield "                            ";
            $context["isExpired"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["budgetsExpiry"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 902), [], "array", true, true, false, 902) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetsExpiry"]) || array_key_exists("budgetsExpiry", $context) ? $context["budgetsExpiry"] : (function () { throw new RuntimeError('Variable "budgetsExpiry" does not exist.', 902, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 902), [], "array", false, false, false, 902)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetsExpiry"]) || array_key_exists("budgetsExpiry", $context) ? $context["budgetsExpiry"] : (function () { throw new RuntimeError('Variable "budgetsExpiry" does not exist.', 902, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 902), [], "array", false, false, false, 902)) : (false));
            // line 903
            yield "                            <tr style=\"";
            yield (((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 903, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("opacity:0.6;") : (""));
            yield "\">
                                <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 904
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "id", [], "any", false, false, false, 904), "html", null, true);
            yield "</td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:28px;height:28px;border-radius:50%;background:";
            // line 907
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, true, false, 907), "color", [], "any", true, true, false, 907) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 907), "color", [], "any", false, false, false, 907)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 907), "color", [], "any", false, false, false, 907), "html", null, true)) : ("#16a34a"));
            yield ";display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas ";
            // line 908
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, true, false, 908), "icon", [], "any", true, true, false, 908) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 908), "icon", [], "any", false, false, false, 908)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 908), "icon", [], "any", false, false, false, 908), "html", null, true)) : ("fa-folder"));
            yield "\" style=\"font-size:11px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;\">";
            // line 910
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "categorie", [], "any", false, false, false, 910), "nom", [], "any", false, false, false, 910), "html", null, true);
            yield "</span>
                                    </div>
                                </td>
                                <td style=\"font-weight:600;color:var(--text-secondary);\">";
            // line 913
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 913), "pays", [], "any", false, false, false, 913), "html", null, true);
            yield "</td>
                                <td style=\"font-weight:800;\">";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "montantMax", [], "any", false, false, false, 914), 2), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "wallet", [], "any", false, false, false, 914), "devise", [], "any", false, false, false, 914), "html", null, true);
            yield "</td>
                                <td>";
            // line 915
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dureeBudget", [], "any", false, false, false, 915), "html", null, true);
            yield " days</td>
                                <td style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">";
            // line 916
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["budget"], "dateBudget", [], "any", false, false, false, 916), "d/m/Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 918
            if ((($tmp = (isset($context["isExpired"]) || array_key_exists("isExpired", $context) ? $context["isExpired"] : (function () { throw new RuntimeError('Variable "isExpired" does not exist.', 918, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 919
                yield "                                        <span class=\"badge expired\">Expired</span>
                                    ";
            } else {
                // line 921
                yield "                                        <span class=\"badge active\">Active</span>
                                    ";
            }
            // line 923
            yield "                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 925
        if (!$context['_iterated']) {
            // line 926
            yield "                            <tr><td colspan=\"7\"><div class=\"empty-state\"><i class=\"fas fa-chart-pie\"></i><p>No budgets found.</p></div></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['budget'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 928
        yield "                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<!-- ═══ CHARTS JS ═══ -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Monthly Chart
    const adminMonthlyData = ";
        // line 942
        yield json_encode((isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 942, $this->source); })()));
        yield ";
    const adminMonthLabels = Object.keys(adminMonthlyData);
    const adminMonths = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    const adminFormattedLabels = adminMonthLabels.map(m => {
        const [year, month] = m.split('-');
        return adminMonths[parseInt(month) - 1] + ' ' + year;
    });

    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: adminFormattedLabels,
            datasets: [
                { label: 'Income', data: adminMonthLabels.map(m => adminMonthlyData[m].income), backgroundColor: 'rgba(22,163,74,0.8)', borderRadius: 4 },
                { label: 'Expense', data: adminMonthLabels.map(m => adminMonthlyData[m].expense), backgroundColor: 'rgba(239,68,68,0.8)', borderRadius: 4 }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'top', labels: { font: { size: 11, family: 'Plus Jakarta Sans' } } } },
            scales: { y: { beginAtZero: true, ticks: { font: { size: 11 } } }, x: { ticks: { font: { size: 11 } } } }
        }
    });

    // Category Pie
    const adminCategoryData = ";
        // line 968
        yield json_encode((isset($context["categorySpending"]) || array_key_exists("categorySpending", $context) ? $context["categorySpending"] : (function () { throw new RuntimeError('Variable "categorySpending" does not exist.', 968, $this->source); })()));
        yield ";
    const adminCatLabels = Object.keys(adminCategoryData);
    const adminCatValues = adminCatLabels.map(c => adminCategoryData[c].total);
    const adminCatColors = adminCatLabels.map(c => adminCategoryData[c].color);

    if (adminCatLabels.length > 0) {
        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: adminCatLabels,
                datasets: [{ data: adminCatValues, backgroundColor: adminCatColors, borderWidth: 2, borderColor: 'white' }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom', labels: { font: { size: 10, family: 'Plus Jakarta Sans' }, padding: 8 } } }
            }
        });
    }
});
</script>

</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/management_dashboard.html.twig";
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
        return array (  1416 => 968,  1387 => 942,  1371 => 928,  1364 => 926,  1362 => 925,  1356 => 923,  1352 => 921,  1348 => 919,  1346 => 918,  1341 => 916,  1337 => 915,  1331 => 914,  1327 => 913,  1321 => 910,  1316 => 908,  1312 => 907,  1306 => 904,  1301 => 903,  1298 => 902,  1293 => 901,  1266 => 876,  1259 => 874,  1257 => 873,  1250 => 871,  1246 => 870,  1240 => 867,  1236 => 866,  1229 => 862,  1224 => 860,  1220 => 859,  1214 => 856,  1211 => 855,  1206 => 854,  1181 => 831,  1174 => 829,  1172 => 828,  1162 => 825,  1154 => 822,  1150 => 821,  1146 => 820,  1142 => 819,  1138 => 818,  1135 => 817,  1130 => 816,  1105 => 793,  1094 => 787,  1092 => 786,  1086 => 784,  1082 => 782,  1078 => 780,  1076 => 779,  1071 => 778,  1069 => 777,  1063 => 774,  1053 => 770,  1049 => 769,  1044 => 767,  1040 => 765,  1036 => 763,  1031 => 761,  1026 => 759,  1021 => 758,  1019 => 757,  1010 => 753,  1005 => 751,  1002 => 750,  997 => 749,  971 => 725,  968 => 724,  956 => 720,  950 => 717,  945 => 715,  940 => 713,  936 => 712,  931 => 709,  926 => 708,  920 => 707,  915 => 706,  910 => 705,  907 => 704,  903 => 702,  901 => 701,  890 => 692,  887 => 691,  875 => 687,  871 => 686,  857 => 683,  850 => 679,  840 => 678,  836 => 677,  832 => 675,  827 => 674,  823 => 672,  821 => 671,  793 => 646,  783 => 639,  773 => 632,  769 => 631,  757 => 624,  753 => 623,  741 => 616,  737 => 615,  727 => 608,  723 => 607,  714 => 600,  705 => 598,  700 => 597,  691 => 595,  687 => 594,  679 => 589,  673 => 588,  650 => 568,  641 => 562,  631 => 555,  619 => 546,  615 => 545,  603 => 536,  599 => 535,  588 => 527,  584 => 526,  570 => 515,  566 => 514,  555 => 506,  48 => 1,);
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
        /* Charts */
.charts-row { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 26px; }
@media (max-width: 900px) { .charts-row { grid-template-columns: 1fr; } }
.chart-card { background: var(--surface); border-radius: var(--radius-lg); border: 1px solid var(--border); box-shadow: var(--shadow-card); padding: 20px; }
.chart-title { font-size: 14px; font-weight: 800; color: var(--text-primary); margin-bottom: 12px; display: flex; align-items: center; gap: 8px; }
.chart-title i { color: var(--brand); }

/* Two column layout */
.two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 26px; }
@media (max-width: 900px) { .two-col { grid-template-columns: 1fr; } }

/* Progress bars */
.progress-bar { height: 6px; background: #e4ebe4; border-radius: 99px; overflow: hidden; }
.progress-fill { height: 100%; border-radius: 99px; transition: width .5s ease; }
.progress-label { display: flex; justify-content: space-between; font-size: 11px; color: var(--text-muted); font-weight: 600; margin-top: 3px; }

/* Card sub text */
.card-sub { font-size: 12px; color: var(--text-muted); font-weight: 600; margin-top: 4px; }

/* Extra card colors */
.card.c-teal { --card-accent: #e6fffa; }
.card.c-teal .card-icon i { color: #0d9488; }
.card.c-green .card-icon i { color: var(--brand-dark); }
.card.c-purple .card-icon i { color: var(--brand); }
.card.c-blue .card-icon i { color: var(--info); }
.card.c-amber .card-icon i { color: var(--warning); }
.card.c-red .card-icon i { color: var(--danger); }

/* Extra badges */
.badge.income { background: #dcfce7; color: #166534; }
.badge.expense { background: #fef2f2; color: #b91c1c; }
.badge.depense { background: #fef2f2; color: #b91c1c; }
.badge.expired { background: #fef2f2; color: #b91c1c; }
.badge.recurring { background: #fff8e6; color: #92400e; }
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

    <!-- MANAGEMENT -->
    <a class=\"side-link {{ app.request.attributes.get('_route') == 'app_admin_management' ? 'active' : '' }}\"
       href=\"{{ path('app_admin_management') }}\">
        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
            <rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/>
            <path d=\"M2 10h20\"/>
        </svg>
        Management
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
        <a class=\"side-link\" href=\"{{ path('app_admin_tickets') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                <path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"/>
            </svg>
            Ticket et message
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

    <!-- ═══ MAIN CONTENT ═══ -->
    <main class=\"content\">

        <!-- Topbar -->
        <div class=\"topbar\">
            <div>
                <div class=\"topbar-title\">Management <span>Overview</span></div>
            </div>
            <div style=\"display:flex;align-items:center;gap:14px;\">
                <div class=\"welcome-text\">Welcome, <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong></div>
                <div class=\"avatar\">{{ app.user.prenom|first|upper }}</div>
            </div>
        </div>

        <!-- Flash Messages -->
        {% for message in app.flashes('success') %}
            <div class=\"flash success\"><i class=\"fas fa-check-circle\"></i> {{ message }}</div>
        {% endfor %}
        {% for message in app.flashes('danger') %}
            <div class=\"flash danger\"><i class=\"fas fa-exclamation-circle\"></i> {{ message }}</div>
        {% endfor %}

        <!-- ═══ STATS CARDS ═══ -->
        <div class=\"cards\">
            <div class=\"card c-green\">
                <div class=\"card-icon\"><i class=\"fas fa-wallet\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Wallets</div>
                    <div class=\"card-value\">{{ totalWallets }}</div>
                    <div class=\"card-sub\">{{ totalBalance|number_format(2) }} total balance</div>
                </div>
            </div>
            <div class=\"card c-purple\">
                <div class=\"card-icon\"><i class=\"fas fa-folder\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Categories</div>
                    <div class=\"card-value\">{{ totalCategories }}</div>
                    <div class=\"card-sub\">{{ activeCategories }} active · {{ inactiveCategories }} inactive</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-icon\"><i class=\"fas fa-chart-pie\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Budgets</div>
                    <div class=\"card-value\">{{ totalBudgets }}</div>
                    <div class=\"card-sub\">{{ activeBudgets }} active · {{ expiredBudgets }} expired</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-icon\"><i class=\"fas fa-exchange-alt\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Transactions</div>
                    <div class=\"card-value\">{{ totalTransactions }}</div>
                    <div class=\"card-sub\">{{ recurringCount }} recurring</div>
                </div>
            </div>
            <div class=\"card c-teal\">
                <div class=\"card-icon\"><i class=\"fas fa-arrow-up\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Income</div>
                    <div class=\"card-value\" style=\"font-size:24px;color:var(--brand-dark);\">{{ totalIncome|number_format(2) }}</div>
                </div>
            </div>
            <div class=\"card c-red\">
                <div class=\"card-icon\"><i class=\"fas fa-arrow-down\"></i></div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Expense</div>
                    <div class=\"card-value\" style=\"font-size:24px;color:var(--danger);\">{{ totalExpense|number_format(2) }}</div>
                </div>
            </div>
        </div>

        <!-- ═══ CHARTS ═══ -->
        <div class=\"charts-row\">
            <div class=\"chart-card\">
                <div class=\"chart-title\"><i class=\"fas fa-chart-line\"></i> Monthly Income vs Expense</div>
                <div style=\"height:220px;\"><canvas id=\"monthlyChart\"></canvas></div>
            </div>
            <div class=\"chart-card\">
                <div class=\"chart-title\"><i class=\"fas fa-chart-pie\"></i> Spending by Category</div>
                <div style=\"height:220px;\"><canvas id=\"categoryChart\"></canvas></div>
            </div>
        </div>

        <!-- ═══ BUDGET USAGE + TOP CATEGORIES ═══ -->
        <div class=\"two-col\">
            <!-- Budget Usage -->
            <div class=\"section\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><i class=\"fas fa-chart-pie\"></i> Budget Usage</div>
                </div>
                <div class=\"section-body\">
                    {% if budgetUsage is empty %}
                        <div class=\"empty-state\"><i class=\"fas fa-chart-pie\"></i><p>No budgets yet</p></div>
                    {% else %}
                        {% for budget in budgetUsage %}
                            <div style=\"margin-bottom:14px;\">
                                <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;\">
                                    <span style=\"font-weight:700;font-size:13px;\">{{ budget.category }}</span>
                                    <span style=\"font-size:12px;font-weight:700;color:{% if budget.percent > 90 %}var(--danger){% elseif budget.percent > 70 %}var(--warning){% else %}var(--brand){% endif %};\">
                                        {{ budget.percent }}%
                                    </span>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill\" style=\"width:{{ budget.percent }}%;background:{% if budget.percent > 90 %}var(--danger){% elseif budget.percent > 70 %}var(--warning){% else %}var(--brand){% endif %};\"></div>
                                </div>
                                <div class=\"progress-label\">
                                    <span>{{ budget.spent|number_format(2) }} spent</span>
                                    <span>{{ budget.limit|number_format(2) }} {{ budget.devise }} limit</span>
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>

            <!-- Top Spending -->
            <div class=\"section\">
                <div class=\"section-header\">
                    <div class=\"section-title\"><i class=\"fas fa-fire\"></i> Top Spending Categories</div>
                </div>
                <div class=\"section-body\">
                    {% if categorySpending is empty %}
                        <div class=\"empty-state\"><i class=\"fas fa-fire\"></i><p>No expense data yet</p></div>
                    {% else %}
                        {% set maxSpending = 0 %}
                        {% for cat, data in categorySpending %}
                            {% if data.total > maxSpending %}{% set maxSpending = data.total %}{% endif %}
                        {% endfor %}
                        {% for cat, data in categorySpending|slice(0, 5) %}
                            <div style=\"margin-bottom:12px;\">
                                <div style=\"display:flex;justify-content:space-between;align-items:center;margin-bottom:4px;\">
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:24px;height:24px;border-radius:50%;background:{{ data.color }};display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas {{ data.icon }} text-white\" style=\"font-size:10px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;font-size:13px;\">{{ cat }}</span>
                                    </div>
                                    <span style=\"font-size:12px;font-weight:700;color:var(--danger);\">{{ data.total|number_format(2) }}</span>
                                </div>
                                <div class=\"progress-bar\">
                                    <div class=\"progress-fill\" style=\"width:{{ maxSpending > 0 ? (data.total / maxSpending * 100) : 0 }}%;background:{{ data.color }};\"></div>
                                </div>
                            </div>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>

        <!-- ═══ RECENT TRANSACTIONS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-clock\"></i> Recent Transactions</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Wallet</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for transaction in recentTransactions %}
                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">{{ transaction.id }}</td>
                                <td>
                                    <span class=\"badge {{ transaction.type }}\">{{ transaction.type | capitalize }}</span>
                                </td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        {% if transaction.categorie %}
                                            <div style=\"width:28px;height:28px;border-radius:50%;background:{{ transaction.categorie.color ?? '#16a34a' }};display:flex;align-items:center;justify-content:center;\">
                                                <i class=\"fas {{ transaction.categorie.icon ?? 'fa-folder' }}\" style=\"font-size:11px;color:white;\"></i>
                                            </div>
                                            <span style=\"font-weight:700;\">{{ transaction.categorie.nom }}</span>
                                        {% else %}
                                            <span style=\"color:var(--text-muted);\">—</span>
                                        {% endif %}
                                    </div>
                                </td>
                                <td style=\"font-weight:600;color:var(--text-secondary);\">{{ transaction.wallet.pays }}</td>
                                <td>
                                    <span style=\"font-weight:800;color:{{ transaction.type == 'income' ? 'var(--brand-dark)' : 'var(--danger)' }};\">
                                        {{ transaction.type == 'income' ? '+' : '-' }}{{ transaction.montant|number_format(2) }} {{ transaction.devise }}
                                    </span>
                                </td>
                                <td style=\"color:var(--text-muted);font-size:13px;font-weight:600;white-space:nowrap;\">
                                    {{ transaction.date|date('d M Y, H:i') }}
                                </td>
                                <td>
                                    {% if transaction.isRecurring %}
                                        <span class=\"badge recurring\"><i class=\"fas fa-sync-alt\" style=\"font-size:10px;\"></i> {{ transaction.frequency | capitalize }}</span>
                                    {% elseif transaction.description starts with '[Auto]' %}
                                        <span class=\"badge\" style=\"background:var(--info-light);color:var(--info);\"><i class=\"fas fa-robot\" style=\"font-size:10px;\"></i> Auto</span>
                                    {% else %}
                                        <span style=\"color:var(--text-muted);font-size:12px;\">Manual</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\">
                                    <div class=\"empty-state\"><i class=\"fas fa-exchange-alt\"></i><p>No transactions yet.</p></div>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL WALLETS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-wallet\"></i> All Wallets</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Country</th>
                            <th>Currency</th>
                            <th>Balance</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for wallet in allWallets %}
                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">{{ wallet.id }}</td>
                                <td style=\"font-weight:700;\">{{ wallet.pays }}</td>
                                <td><span class=\"badge active\">{{ wallet.devise }}</span></td>
                                <td style=\"font-weight:800;color:{{ wallet.solde >= 0 ? 'var(--brand-dark)' : 'var(--danger)' }};\">
                                    {{ wallet.solde|number_format(2) }} {{ wallet.devise }}
                                </td>
                                <td style=\"color:var(--text-secondary);font-weight:600;\">
                                    {{ wallet.utilisateur.prenom }} {{ wallet.utilisateur.nom }}
                                </td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"5\"><div class=\"empty-state\"><i class=\"fas fa-wallet\"></i><p>No wallets found.</p></div></td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL CATEGORIES TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-folder\"></i> All Categories</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Budgets</th>
                            <th>Transactions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for categorie in allCategories %}
                            <tr>
                                <td style=\"color:var(--text-muted);font-weight:700;\">{{ categorie.id }}</td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:30px;height:30px;border-radius:50%;background:{{ categorie.color ?? '#16a34a' }};display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas {{ categorie.icon ?? 'fa-folder' }}\" style=\"font-size:12px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;\">{{ categorie.nom }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class=\"badge {{ categorie.statut == 'Active' ? 'active' : 'inactive' }}\">
                                        {{ categorie.statut }}
                                    </span>
                                </td>
                                <td style=\"font-weight:700;\">{{ categorie.budgets|length }}</td>
                                <td style=\"font-weight:700;\">{{ categorie.transactions|length }}</td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"5\"><div class=\"empty-state\"><i class=\"fas fa-folder\"></i><p>No categories found.</p></div></td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <!-- ═══ ALL BUDGETS TABLE ═══ -->
        <div class=\"section\">
            <div class=\"section-header\">
                <div class=\"section-title\"><i class=\"fas fa-chart-pie\"></i> All Budgets</div>
                
            </div>
            <div class=\"table-wrapper\">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category</th>
                            <th>Wallet</th>
                            <th>Max Amount</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for budget in allBudgets %}
                            {% set isExpired = budgetsExpiry[budget.id] ?? false %}
                            <tr style=\"{{ isExpired ? 'opacity:0.6;' : '' }}\">
                                <td style=\"color:var(--text-muted);font-weight:700;\">{{ budget.id }}</td>
                                <td>
                                    <div style=\"display:flex;align-items:center;gap:8px;\">
                                        <div style=\"width:28px;height:28px;border-radius:50%;background:{{ budget.categorie.color ?? '#16a34a' }};display:flex;align-items:center;justify-content:center;\">
                                            <i class=\"fas {{ budget.categorie.icon ?? 'fa-folder' }}\" style=\"font-size:11px;color:white;\"></i>
                                        </div>
                                        <span style=\"font-weight:700;\">{{ budget.categorie.nom }}</span>
                                    </div>
                                </td>
                                <td style=\"font-weight:600;color:var(--text-secondary);\">{{ budget.wallet.pays }}</td>
                                <td style=\"font-weight:800;\">{{ budget.montantMax|number_format(2) }} {{ budget.wallet.devise }}</td>
                                <td>{{ budget.dureeBudget }} days</td>
                                <td style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">{{ budget.dateBudget|date('d/m/Y') }}</td>
                                <td>
                                    {% if isExpired %}
                                        <span class=\"badge expired\">Expired</span>
                                    {% else %}
                                        <span class=\"badge active\">Active</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"7\"><div class=\"empty-state\"><i class=\"fas fa-chart-pie\"></i><p>No budgets found.</p></div></td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\">

<!-- ═══ CHARTS JS ═══ -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Monthly Chart
    const adminMonthlyData = {{ monthlyData|json_encode|raw }};
    const adminMonthLabels = Object.keys(adminMonthlyData);
    const adminMonths = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    const adminFormattedLabels = adminMonthLabels.map(m => {
        const [year, month] = m.split('-');
        return adminMonths[parseInt(month) - 1] + ' ' + year;
    });

    new Chart(document.getElementById('monthlyChart'), {
        type: 'bar',
        data: {
            labels: adminFormattedLabels,
            datasets: [
                { label: 'Income', data: adminMonthLabels.map(m => adminMonthlyData[m].income), backgroundColor: 'rgba(22,163,74,0.8)', borderRadius: 4 },
                { label: 'Expense', data: adminMonthLabels.map(m => adminMonthlyData[m].expense), backgroundColor: 'rgba(239,68,68,0.8)', borderRadius: 4 }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { position: 'top', labels: { font: { size: 11, family: 'Plus Jakarta Sans' } } } },
            scales: { y: { beginAtZero: true, ticks: { font: { size: 11 } } }, x: { ticks: { font: { size: 11 } } } }
        }
    });

    // Category Pie
    const adminCategoryData = {{ categorySpending|json_encode|raw }};
    const adminCatLabels = Object.keys(adminCategoryData);
    const adminCatValues = adminCatLabels.map(c => adminCategoryData[c].total);
    const adminCatColors = adminCatLabels.map(c => adminCategoryData[c].color);

    if (adminCatLabels.length > 0) {
        new Chart(document.getElementById('categoryChart'), {
            type: 'doughnut',
            data: {
                labels: adminCatLabels,
                datasets: [{ data: adminCatValues, backgroundColor: adminCatColors, borderWidth: 2, borderColor: 'white' }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'bottom', labels: { font: { size: 10, family: 'Plus Jakarta Sans' }, padding: 8 } } }
            }
        });
    }
});
</script>

</body>
</html>

", "admin/management_dashboard.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\admin\\management_dashboard.html.twig");
    }
}
