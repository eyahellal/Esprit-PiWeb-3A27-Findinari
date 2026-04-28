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

/* admin/objectifs.html.twig */
class __TwigTemplate_60f24a28afcb534c6062ae6a23698022 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/objectifs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/objectifs.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Manage Objectifs — Fin-Dinari</title>
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

        /* ── SIDEBAR ── */
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

        .brand-icon { width: 40px; height: 40px; }
        .brand-icon img { width: 100%; height: 100%; object-fit: contain; }
        .brand-name { font-size: 22px; font-weight: 800; color: var(--brand); letter-spacing: -0.5px; }

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
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); transform: translateX(2px); }
        .side-link.active { background: var(--brand-light); color: var(--brand-dark); box-shadow: inset 3px 0 0 var(--brand); }
        .side-link svg { width: 18px; height: 18px; flex-shrink: 0; }

        .sidebar-footer { margin-top: auto; padding-top: 18px; border-top: 1px solid var(--border); }

        /* ── CONTENT ── */
        .content { margin-left: var(--sidebar-width); flex: 1; padding: 28px; min-width: 0; }

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
            color: var(--brand-dark);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        /* ── FLASH ── */
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

        /* ── STAT CARDS ── */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px;
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
            opacity: .5;
        }

        .card:hover { transform: translateY(-3px); box-shadow: var(--shadow-hover); }

        .card-icon {
            width: 46px; height: 46px;
            border-radius: 14px;
            background: var(--card-accent, var(--brand-light));
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        .card-icon svg { width: 22px; height: 22px; }
        .card-body { flex: 1; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card.c-green  { --card-accent: #dcfce7; } .card.c-green  .card-icon svg { color: var(--brand); }
        .card.c-blue   { --card-accent: #e6f6ff; } .card.c-blue   .card-icon svg { color: var(--info); }
        .card.c-amber  { --card-accent: #fff8e6; } .card.c-amber  .card-icon svg { color: var(--warning); }

        /* ── SECTION ── */
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

        /* ── WALLET TOOLBAR ── */
        .wallet-toolbar {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            padding: 14px 18px;
            background: #f4faf6;
            border-radius: var(--radius-md);
            border: 1.5px solid var(--border);
            margin-bottom: 18px;
        }

        .wt-label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .6px;
            color: var(--text-muted);
            white-space: nowrap;
        }

        .wt-label svg { width: 15px; height: 15px; color: var(--brand); flex-shrink: 0; }

        .wt-select-wrap {
            position: relative;
            flex: 1;
            max-width: 300px;
            min-width: 190px;
        }

        .wt-select-wrap select {
            width: 100%;
            appearance: none;
            -webkit-appearance: none;
            padding: 9px 34px 9px 14px;
            font-size: 13.5px;
            font-family: inherit;
            font-weight: 600;
            border-radius: var(--radius-sm);
            border: 1.5px solid var(--border);
            background: var(--surface);
            color: var(--text-primary);
            cursor: pointer;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        .wt-select-wrap select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(22,163,74,.13);
        }

        .wt-chevron {
            position: absolute;
            right: 10px; top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--text-muted);
        }

        .wt-chevron svg { width: 14px; height: 14px; display: block; }

        .wt-pills { display: flex; gap: 8px; flex-wrap: wrap; align-items: center; }
        .wt-divider { width: 1px; height: 26px; background: var(--border); flex-shrink: 0; }

        .wpill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 5px 13px;
            border-radius: 999px;
            font-size: 12.5px;
            font-weight: 700;
            border: 1px solid var(--border);
            background: var(--surface);
            white-space: nowrap;
        }

        .wpill .pl { color: var(--text-muted); font-weight: 600; margin-right: 1px; }
        .wpill .pv { color: var(--text-primary); }
        .wpill.solde .pv { color: var(--brand-dark); }

        /* ── FILTERS BAR ── */
        .filters-bar { display: flex; gap: 12px; flex-wrap: wrap; align-items: flex-end; }

        .fg { display: flex; flex-direction: column; gap: 6px; }
        .fg label { font-size: 12px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }
        .fg.grow { flex: 1; min-width: 200px; }
        .fg.fixed { min-width: 170px; }

        input[type=\"text\"], select {
            padding: 9px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: var(--surface);
            color: var(--text-primary);
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input[type=\"text\"]:focus, select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(22,163,74,.13);
        }

        input::placeholder { color: var(--text-muted); font-weight: 400; }

        /* ── BUTTONS ── */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 9px 16px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: filter var(--transition), transform var(--transition);
            white-space: nowrap;
        }

        .btn:hover { filter: brightness(1.08); transform: translateY(-1px); }
        .btn:active { transform: translateY(0); filter: brightness(.97); }
        .btn-primary   { background: var(--brand);   color: #fff; box-shadow: 0 4px 12px rgba(22,163,74,.28); }
        .btn-danger    { background: var(--danger);   color: #fff; box-shadow: 0 4px 12px rgba(239,68,68,.25); }
        .btn-secondary { background: #f0f2f7;         color: var(--text-secondary); }
        .btn svg { width: 14px; height: 14px; }

        /* ── SEARCH INLINE ── */
        .search-wrap { position: relative; min-width: 210px; }
        .search-wrap svg { position: absolute; left: 11px; top: 50%; transform: translateY(-50%); width: 14px; height: 14px; color: var(--text-muted); pointer-events: none; }
        .search-wrap input { padding-left: 34px; width: 100%; }

        /* ── ACTIVE FILTER BANNER ── */
        .filter-banner {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            padding: 10px 16px;
            background: var(--brand-light);
            border-radius: var(--radius-sm);
            margin: 16px 0 4px;
            font-size: 13px;
            font-weight: 600;
            color: var(--brand-dark);
            border: 1px solid #bbf7d0;
        }

        .filter-banner svg { width: 14px; height: 14px; flex-shrink: 0; }
        .filter-banner strong { background: #bbf7d0; padding: 2px 8px; border-radius: 999px; font-size: 12px; }

        /* ── TABLE ── */
        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #f4faf6; border-bottom: 2px solid var(--border); }

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

        tbody tr { transition: background var(--transition); }
        tbody tr:hover { background: #f9fdf9; }
        tbody tr:last-child td { border-bottom: none; }

        /* ── BADGES ── */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .badge::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: currentColor; flex-shrink: 0; }
        .badge-termine  { background: var(--success-light); color: #166534; }
        .badge-en-cours { background: var(--warning-light); color: #92400e; }
        .badge-pause    { background: var(--info-light);    color: #0369a1; }

        /* ── WALLET CHIP ── */
        .wallet-chip {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 999px;
            background: var(--info-light);
            color: #0369a1;
            font-size: 12px;
            font-weight: 700;
        }

        /* ── PROGRESS ── */
        .progress-wrap { display: flex; align-items: center; gap: 10px; min-width: 150px; }
        .progress-bar { flex: 1; height: 8px; background: var(--border); border-radius: 99px; overflow: hidden; }
        .progress-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--brand), #4ade80); transition: width .4s ease; }
        .progress-fill.full { background: linear-gradient(90deg, #15803d, #22c55e); }
        .progress-pct { font-size: 12px; font-weight: 700; color: var(--text-secondary); white-space: nowrap; min-width: 34px; text-align: right; }

        /* ── CONTRIB PILL ── */
        .contrib-count {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            background: var(--brand-light);
            color: var(--brand-dark);
            border: none;
            cursor: pointer;
            transition: background var(--transition);
        }

        .contrib-count:hover { background: #bbf7d0; }

        /* ── EMPTY STATE ── */
        .empty-state { text-align: center; padding: 48px 20px; color: var(--text-muted); }
        .empty-state svg { width: 48px; height: 48px; margin: 0 auto 14px; display: block; opacity: .4; }
        .empty-state p { font-size: 14.5px; font-weight: 600; }
        .empty-state span { font-size: 13px; }

        /* ── MODAL ── */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.35);
            z-index: 999;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(3px);
        }

        .modal-overlay.open { display: flex; animation: fadeIn .18s ease; }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .modal {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px rgba(0,0,0,.18);
            width: 100%;
            max-width: 540px;
            margin: 20px;
            overflow: hidden;
            animation: slideUp .22s cubic-bezier(.4,0,.2,1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-title { font-size: 17px; font-weight: 800; }
        .modal-close {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            width: 32px; height: 32px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            transition: background var(--transition), color var(--transition);
        }
        .modal-close:hover { background: var(--danger-light); color: var(--danger); }

        .modal-body { padding: 24px 26px; }

        .detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--border);
            gap: 12px;
        }
        .detail-row:last-child { border-bottom: none; }
        .detail-key { font-size: 12.5px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: .5px; }
        .detail-val { font-weight: 600; color: var(--text-primary); text-align: right; }

        .contribs-list { margin-top: 18px; }
        .contribs-list-title { font-size: 13px; font-weight: 800; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .6px; margin-bottom: 12px; }

        .contrib-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 14px;
            background: #f9fdf9;
            border-radius: var(--radius-sm);
            margin-bottom: 7px;
            border: 1px solid var(--border);
            font-size: 13.5px;
        }

        .contrib-amount { font-weight: 800; color: var(--brand-dark); }
        .contrib-date   { font-size: 12px; color: var(--text-muted); font-weight: 600; }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--text-muted); }
    </style>
</head>
<body>
<div class=\"layout\">

    <!-- ═══ SIDEBAR ═══ -->
    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-icon\">
                <img src=\"";
        // line 595
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Fin-Dinari Logo\">
            </div>
            <span class=\"brand-name\">Fin-Dinari</span>
        </div>

        <div class=\"nav-section\">Main</div>
        <a class=\"side-link\" href=\"";
        // line 601
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
            Dashboard
        </a>
        <a class=\"side-link\" href=\"";
        // line 605
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_wallets");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
            Manage Wallets
        </a>
        <a class=\"side-link active\" href=\"";
        // line 609
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_objectifs");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
            Manage Objectifs
        </a>
        <a class=\"side-link\" href=\"";
        // line 613
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_tickets");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"/></svg>
            Tickets & Messages
        </a>
        <a class=\"side-link\" href=\"";
        // line 617
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_obligations");
        yield "\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/></svg>
            Manage Obligations
        </a>

        <div class=\"sidebar-footer\">
            <a class=\"side-link\" href=\"";
        // line 623
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\"/><polyline points=\"9 22 9 12 15 12 15 22\"/></svg>
                Back to site
            </a>
            <a class=\"side-link\" href=\"";
        // line 627
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- ═══ MAIN ═══ -->
    <main class=\"content\">

        <!-- TOPBAR -->
        <div class=\"topbar\">
            <div class=\"topbar-title\">Objectif <span>Management</span></div>
            <div class=\"topbar-right\">
                <a href=\"";
        // line 641
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-primary\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
                    Dashboard
                </a>
                <div class=\"welcome-text\">Welcome back, <strong>";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "user", [], "any", false, false, false, 645), "prenom", [], "any", false, false, false, 645), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 645, $this->source); })()), "user", [], "any", false, false, false, 645), "nom", [], "any", false, false, false, 645), "html", null, true);
        yield "</strong></div>
                <div class=\"avatar\">";
        // line 646
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 646, $this->source); })()), "user", [], "any", false, false, false, 646), "prenom", [], "any", false, false, false, 646))), "html", null, true);
        yield "</div>
            </div>
        </div>

        <!-- FLASH -->
        ";
        // line 651
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 651, $this->source); })()), "flashes", ["success"], "method", false, false, false, 651));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 652
            yield "            <div class=\"flash success\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M22 11.08V12a10 10 0 11-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/></svg>
                ";
            // line 654
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 657
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 657, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 657));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 658
            yield "            <div class=\"flash danger\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><line x1=\"12\" y1=\"8\" x2=\"12\" y2=\"12\"/><line x1=\"12\" y1=\"16\" x2=\"12.01\" y2=\"16\"/></svg>
                ";
            // line 660
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 663
        yield "
        <!-- STAT CARDS -->
        ";
        // line 665
        $context["totalObjectifs"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 665, $this->source); })()));
        // line 666
        yield "        ";
        $context["termines"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 666, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 666, $this->source); })()), "statut", [], "any", false, false, false, 666) == "TERMINE"); }));
        // line 667
        yield "        ";
        $context["enCours"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 667, $this->source); })()), function ($__o__) use ($context, $macros) { $context["o"] = $__o__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["o"]) || array_key_exists("o", $context) ? $context["o"] : (function () { throw new RuntimeError('Variable "o" does not exist.', 667, $this->source); })()), "statut", [], "any", false, false, false, 667) == "EN_COURS"); }));
        // line 668
        yield "        ";
        $context["totalContribs"] = 0;
        // line 669
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 669, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 670
            yield "            ";
            $context["totalContribs"] = ((isset($context["totalContribs"]) || array_key_exists("totalContribs", $context) ? $context["totalContribs"] : (function () { throw new RuntimeError('Variable "totalContribs" does not exist.', 670, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["o"], "contributiongoals", [], "any", false, false, false, 670)));
            // line 671
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['o'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
        yield "
        <div class=\"cards\">
            <div class=\"card c-green\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Objectifs</div>
                    <div class=\"card-value\">";
        // line 680
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalObjectifs"]) || array_key_exists("totalObjectifs", $context) ? $context["totalObjectifs"] : (function () { throw new RuntimeError('Variable "totalObjectifs" does not exist.', 680, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"22 12 18 12 15 21 9 3 6 12 2 12\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">En Cours</div>
                    <div class=\"card-value\">";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["enCours"]) || array_key_exists("enCours", $context) ? $context["enCours"] : (function () { throw new RuntimeError('Variable "enCours" does not exist.', 689, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-green\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M22 11.08V12a10 10 0 11-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Terminés</div>
                    <div class=\"card-value\">";
        // line 698
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["termines"]) || array_key_exists("termines", $context) ? $context["termines"] : (function () { throw new RuntimeError('Variable "termines" does not exist.', 698, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Contributions</div>
                    <div class=\"card-value\">";
        // line 707
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalContribs"]) || array_key_exists("totalContribs", $context) ? $context["totalContribs"] : (function () { throw new RuntimeError('Variable "totalContribs" does not exist.', 707, $this->source); })()), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>

        <!-- ═══ TABLE SECTION ═══ -->
        <div class=\"section\">

            <!-- Section header -->
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                    All Objectifs
                </div>
                <div style=\"display:flex;align-items:center;gap:10px;flex-wrap:wrap;\">
                    <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                        ";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalObjectifs"]) || array_key_exists("totalObjectifs", $context) ? $context["totalObjectifs"] : (function () { throw new RuntimeError('Variable "totalObjectifs" does not exist.', 723, $this->source); })()), "html", null, true);
        yield " result";
        yield ((((isset($context["totalObjectifs"]) || array_key_exists("totalObjectifs", $context) ? $context["totalObjectifs"] : (function () { throw new RuntimeError('Variable "totalObjectifs" does not exist.', 723, $this->source); })()) != 1)) ? ("s") : (""));
        yield "
                    </span>
                    <!-- Live client-side search (does not reset server filters) -->
                    <div class=\"search-wrap\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/></svg>
                        <input type=\"text\" id=\"searchInput\" placeholder=\"Search in results…\" oninput=\"filterTable(this.value)\">
                    </div>
                </div>
            </div>

            <!-- Filters body -->
            <div style=\"padding: 22px 26px; border-bottom: 1px solid var(--border);\">
                <form method=\"get\" action=\"";
        // line 735
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_objectifs");
        yield "\">

                    <!-- ── WALLET TOOLBAR ── -->
                    <div class=\"wallet-toolbar\">
                        <div class=\"wt-label\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/><circle cx=\"17\" cy=\"14\" r=\"1\" fill=\"currentColor\"/></svg>
                            Wallet
                        </div>

                        <div class=\"wt-select-wrap\">
                            <select name=\"wallet_id\" id=\"walletSelect\" onchange=\"onWalletChange(this)\">
                                <option value=\"\">— All wallets —</option>
                                ";
        // line 747
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 747, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["w"]) {
            // line 748
            yield "                                    <option
                                        value=\"";
            // line 749
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield "\"
                                        data-pays=\"";
            // line 750
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "pays", [], "any", false, false, false, 750), "html", null, true);
            yield "\"
                                        data-devise=\"";
            // line 751
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "devise", [], "any", false, false, false, 751), "html", null, true);
            yield "\"
                                        data-solde=\"";
            // line 752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "solde", [], "any", false, false, false, 752), "html", null, true);
            yield "\"
                                        ";
            // line 753
            yield ((((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 753, $this->source); })()) == $context["id"])) ? ("selected") : (""));
            yield "
                                    >
                                        Wallet #";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["id"], "html", null, true);
            yield " — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "pays", [], "any", false, false, false, 755), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["w"], "devise", [], "any", false, false, false, 755), "html", null, true);
            yield "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['w'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        yield "                            </select>
                            <div class=\"wt-chevron\">
                                <svg viewBox=\"0 0 14 14\" fill=\"none\"><path d=\"M3 5l4 4 4-4\" stroke=\"currentColor\" stroke-width=\"1.4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                            </div>
                        </div>

                        <!-- Info pills — populated by JS on change, pre-filled by Twig on reload -->
                        <div class=\"wt-pills\" id=\"walletPills\" style=\"";
        // line 765
        yield (((($tmp = (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 765, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("display:none;"));
        yield "\">
                            <div class=\"wt-divider\"></div>
                            <div class=\"wpill\">
                                <span class=\"pl\">Pays</span>
                                <span class=\"pv\" id=\"pillPays\">";
        // line 769
        if (((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 769, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 769, $this->source); })()), [], "array", true, true, false, 769))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 769, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 769, $this->source); })()), [], "array", false, false, false, 769), "pays", [], "any", false, false, false, 769), "html", null, true);
        }
        yield "</span>
                            </div>
                            <div class=\"wpill\">
                                <span class=\"pl\">Devise</span>
                                <span class=\"pv\" id=\"pillDevise\">";
        // line 773
        if (((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 773, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 773, $this->source); })()), [], "array", true, true, false, 773))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 773, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 773, $this->source); })()), [], "array", false, false, false, 773), "devise", [], "any", false, false, false, 773), "html", null, true);
        }
        yield "</span>
                            </div>
                            <div class=\"wpill solde\">
                                <span class=\"pl\">Solde</span>
                                <span class=\"pv\" id=\"pillSolde\">
                                    ";
        // line 778
        if (((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 778, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 778, $this->source); })()), [], "array", true, true, false, 778))) {
            // line 779
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 779, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 779, $this->source); })()), [], "array", false, false, false, 779), "solde", [], "any", false, false, false, 779), 2, ",", " "), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 779, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 779, $this->source); })()), [], "array", false, false, false, 779), "devise", [], "any", false, false, false, 779), "html", null, true);
            yield "
                                    ";
        }
        // line 781
        yield "                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- ── OTHER FILTERS ── -->
                    <div class=\"filters-bar\">
                        <div class=\"fg grow\">
                            <label>Search by title</label>
                            <input type=\"text\" name=\"q\" value=\"";
        // line 790
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchObjectif", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchObjectif"]) || array_key_exists("searchObjectif", $context) ? $context["searchObjectif"] : (function () { throw new RuntimeError('Variable "searchObjectif" does not exist.', 790, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" placeholder=\"Objectif title…\">
                        </div>
                        <div class=\"fg fixed\">
                            <label>Statut</label>
                            <select name=\"status\">
                                <option value=\"\">All status</option>
                                <option value=\"EN_COURS\" ";
        // line 796
        yield ((((isset($context["filterStatut"]) || array_key_exists("filterStatut", $context) ? $context["filterStatut"] : (function () { throw new RuntimeError('Variable "filterStatut" does not exist.', 796, $this->source); })()) == "EN_COURS")) ? ("selected") : (""));
        yield ">En cours</option>
                                <option value=\"TERMINE\"  ";
        // line 797
        yield ((((isset($context["filterStatut"]) || array_key_exists("filterStatut", $context) ? $context["filterStatut"] : (function () { throw new RuntimeError('Variable "filterStatut" does not exist.', 797, $this->source); })()) == "TERMINE")) ? ("selected") : (""));
        yield ">Terminé</option>
                            </select>
                        </div>
                        <div style=\"display:flex;gap:8px;align-items:flex-end;\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/></svg>
                                Apply
                            </button>
                            <a href=\"";
        // line 805
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_objectifs");
        yield "\" class=\"btn btn-secondary\">Reset</a>
                        </div>
                    </div>

                    <!-- Active filter banner -->
                    ";
        // line 810
        if ((((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 810, $this->source); })()) || (isset($context["filterStatut"]) || array_key_exists("filterStatut", $context) ? $context["filterStatut"] : (function () { throw new RuntimeError('Variable "filterStatut" does not exist.', 810, $this->source); })())) || (isset($context["searchObjectif"]) || array_key_exists("searchObjectif", $context) ? $context["searchObjectif"] : (function () { throw new RuntimeError('Variable "searchObjectif" does not exist.', 810, $this->source); })()))) {
            // line 811
            yield "                    <div class=\"filter-banner\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg>
                        Filtered by:
                        ";
            // line 814
            if ((($tmp = (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 814, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 815
                yield "                            <strong>
                                Wallet #";
                // line 816
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 816, $this->source); })()), "html", null, true);
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 816, $this->source); })()), [], "array", true, true, false, 816)) {
                    yield " · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 816, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 816, $this->source); })()), [], "array", false, false, false, 816), "pays", [], "any", false, false, false, 816), "html", null, true);
                    yield " / ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 816, $this->source); })()), (isset($context["filterWalletId"]) || array_key_exists("filterWalletId", $context) ? $context["filterWalletId"] : (function () { throw new RuntimeError('Variable "filterWalletId" does not exist.', 816, $this->source); })()), [], "array", false, false, false, 816), "devise", [], "any", false, false, false, 816), "html", null, true);
                }
                // line 817
                yield "                            </strong>
                        ";
            }
            // line 819
            yield "                        ";
            if ((($tmp = (isset($context["filterStatut"]) || array_key_exists("filterStatut", $context) ? $context["filterStatut"] : (function () { throw new RuntimeError('Variable "filterStatut" does not exist.', 819, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 820
                yield "                            <strong>";
                yield ((((isset($context["filterStatut"]) || array_key_exists("filterStatut", $context) ? $context["filterStatut"] : (function () { throw new RuntimeError('Variable "filterStatut" does not exist.', 820, $this->source); })()) == "TERMINE")) ? ("Terminés") : ("En cours"));
                yield "</strong>
                        ";
            }
            // line 822
            yield "                        ";
            if ((($tmp = (isset($context["searchObjectif"]) || array_key_exists("searchObjectif", $context) ? $context["searchObjectif"] : (function () { throw new RuntimeError('Variable "searchObjectif" does not exist.', 822, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 823
                yield "                            <strong>\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchObjectif"]) || array_key_exists("searchObjectif", $context) ? $context["searchObjectif"] : (function () { throw new RuntimeError('Variable "searchObjectif" does not exist.', 823, $this->source); })()), "html", null, true);
                yield "\"</strong>
                        ";
            }
            // line 825
            yield "                        — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalObjectifs"]) || array_key_exists("totalObjectifs", $context) ? $context["totalObjectifs"] : (function () { throw new RuntimeError('Variable "totalObjectifs" does not exist.', 825, $this->source); })()), "html", null, true);
            yield " result";
            yield ((((isset($context["totalObjectifs"]) || array_key_exists("totalObjectifs", $context) ? $context["totalObjectifs"] : (function () { throw new RuntimeError('Variable "totalObjectifs" does not exist.', 825, $this->source); })()) != 1)) ? ("s") : (""));
            yield "
                    </div>
                    ";
        }
        // line 828
        yield "
                </form>
            </div>

            <!-- TABLE -->
            <div class=\"table-wrapper\">
                <table id=\"objectifsTable\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Wallet</th>
                            <th>Target</th>
                            <th>Progress</th>
                            <th>Date début</th>
                            <th>Durée</th>
                            <th>Statut</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 850
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["objectifs"]) || array_key_exists("objectifs", $context) ? $context["objectifs"] : (function () { throw new RuntimeError('Variable "objectifs" does not exist.', 850, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["objectif"]) {
            // line 851
            yield "                        ";
            $context["totalContrib"] = 0;
            // line 852
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "contributiongoals", [], "any", false, false, false, 852));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 853
                yield "                            ";
                $context["totalContrib"] = ((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 853, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["c"], "montant", [], "any", false, false, false, 853));
                // line 854
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 855
            yield "                        ";
            $context["pct"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "montant", [], "any", false, false, false, 855) > 0)) ? (Twig\Extension\CoreExtension::round((((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 855, $this->source); })()) / CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "montant", [], "any", false, false, false, 855)) * 100), 0)) : (0));
            // line 856
            yield "                        ";
            $context["pct"] = ((((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 856, $this->source); })()) > 100)) ? (100) : ((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 856, $this->source); })())));
            // line 857
            yield "                        ";
            $context["wi"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["wallets"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "walletId", [], "any", false, false, false, 857), [], "array", true, true, false, 857)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["wallets"]) || array_key_exists("wallets", $context) ? $context["wallets"] : (function () { throw new RuntimeError('Variable "wallets" does not exist.', 857, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "walletId", [], "any", false, false, false, 857), [], "array", false, false, false, 857)) : (null));
            // line 858
            yield "
                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">";
            // line 860
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 860), "html", null, true);
            yield "</td>

                            <td style=\"font-weight:700;\">";
            // line 862
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 862), "html", null, true);
            yield "</td>

                            <td>
                                ";
            // line 865
            if ((($tmp = (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 865, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 866
                yield "                                    <div style=\"display:flex;flex-direction:column;gap:3px;\">
                                        <span class=\"wallet-chip\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"width:11px;height:11px;flex-shrink:0;\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                                            #";
                // line 869
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "walletId", [], "any", false, false, false, 869), "html", null, true);
                yield "
                                        </span>
                                        <span style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;\">";
                // line 871
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 871, $this->source); })()), "pays", [], "any", false, false, false, 871), "html", null, true);
                yield " · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 871, $this->source); })()), "devise", [], "any", false, false, false, 871), "html", null, true);
                yield "</span>
                                    </div>
                                ";
            } else {
                // line 874
                yield "                                    <span class=\"wallet-chip\">#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "walletId", [], "any", false, false, false, 874), "html", null, true);
                yield "</span>
                                ";
            }
            // line 876
            yield "                            </td>

                            <td style=\"font-weight:700;\">
                                ";
            // line 879
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "montant", [], "any", false, false, false, 879), 2, ".", ","), "html", null, true);
            yield "
                                ";
            // line 880
            if ((($tmp = (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 880, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;margin-left:3px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 880, $this->source); })()), "devise", [], "any", false, false, false, 880), "html", null, true);
                yield "</span>";
            }
            // line 881
            yield "                            </td>

                            <td>
                                <div class=\"progress-wrap\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill ";
            // line 886
            yield ((((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 886, $this->source); })()) >= 100)) ? ("full") : (""));
            yield "\" style=\"width:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 886, $this->source); })()), "html", null, true);
            yield "%;\"></div>
                                    </div>
                                    <span class=\"progress-pct\">";
            // line 888
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 888, $this->source); })()), "html", null, true);
            yield "%</span>
                                </div>
                                <div style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;margin-top:3px;\">
                                    ";
            // line 891
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 891, $this->source); })()), 2, ".", ","), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "montant", [], "any", false, false, false, 891), 2, ".", ","), "html", null, true);
            yield "
                                </div>
                            </td>

                            <td style=\"color:var(--text-secondary);font-weight:600;white-space:nowrap;\">
                                ";
            // line 896
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDebut", [], "any", false, false, false, 896)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDebut", [], "any", false, false, false, 896), "d M Y"), "html", null, true)) : ("—"));
            yield "
                            </td>

                            <td style=\"font-weight:600;color:var(--text-secondary);\">
                                ";
            // line 900
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "duree", [], "any", false, false, false, 900), "html", null, true);
            yield " day";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "duree", [], "any", false, false, false, 900) > 1)) ? ("s") : (""));
            yield "
                            </td>

                            <td>
                                ";
            // line 904
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 904) == "TERMINE")) {
                // line 905
                yield "                                    <span class=\"badge badge-termine\">TERMINÉ</span>
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 906
$context["objectif"], "statut", [], "any", false, false, false, 906) == "EN_COURS")) {
                // line 907
                yield "                                    <span class=\"badge badge-en-cours\">EN COURS</span>
                                ";
            } else {
                // line 909
                yield "                                    <span class=\"badge badge-pause\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 909), "html", null, true);
                yield "</span>
                                ";
            }
            // line 911
            yield "                            </td>

                            <td>
                                <button class=\"contrib-count\" onclick=\"openModal(";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 914), "html", null, true);
            yield ")\" title=\"View contributions\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"width:12px;height:12px;flex-shrink:0;\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6\"/></svg>
                                    ";
            // line 916
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "contributiongoals", [], "any", false, false, false, 916)), "html", null, true);
            yield "
                                </button>
                            </td>

                            <td>
                                <form method=\"post\" action=\"";
            // line 921
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("objectif_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 921)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Delete this objectif and refund all contributions?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 922
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 922))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal data template for this objectif -->
                        <template id=\"modal-data-";
            // line 932
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 932), "html", null, true);
            yield "\">
                            <div class=\"modal-body\">
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">ID</span>
                                    <span class=\"detail-val\">#";
            // line 936
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "id", [], "any", false, false, false, 936), "html", null, true);
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Title</span>
                                    <span class=\"detail-val\">";
            // line 940
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "titre", [], "any", false, false, false, 940), "html", null, true);
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Wallet</span>
                                    <span class=\"detail-val\">#";
            // line 944
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "walletId", [], "any", false, false, false, 944), "html", null, true);
            if ((($tmp = (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 944, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " — ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 944, $this->source); })()), "pays", [], "any", false, false, false, 944), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 944, $this->source); })()), "devise", [], "any", false, false, false, 944), "html", null, true);
            }
            yield "</span>
                                </div>
                                ";
            // line 946
            if ((($tmp = (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 946, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 947
                yield "                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Solde wallet</span>
                                    <span class=\"detail-val\" style=\"color:var(--brand-dark);\">";
                // line 949
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 949, $this->source); })()), "solde", [], "any", false, false, false, 949), 2, ".", ","), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["wi"]) || array_key_exists("wi", $context) ? $context["wi"] : (function () { throw new RuntimeError('Variable "wi" does not exist.', 949, $this->source); })()), "devise", [], "any", false, false, false, 949), "html", null, true);
                yield "</span>
                                </div>
                                ";
            }
            // line 952
            yield "                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Target</span>
                                    <span class=\"detail-val\">";
            // line 954
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "montant", [], "any", false, false, false, 954), 2, ".", ","), "html", null, true);
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Collected</span>
                                    <span class=\"detail-val\">";
            // line 958
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["totalContrib"]) || array_key_exists("totalContrib", $context) ? $context["totalContrib"] : (function () { throw new RuntimeError('Variable "totalContrib" does not exist.', 958, $this->source); })()), 2, ".", ","), "html", null, true);
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Progress</span>
                                    <span class=\"detail-val\" style=\"color:";
            // line 962
            yield ((((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 962, $this->source); })()) >= 100)) ? ("var(--brand)") : ("var(--text-primary)"));
            yield ";\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pct"]) || array_key_exists("pct", $context) ? $context["pct"] : (function () { throw new RuntimeError('Variable "pct" does not exist.', 962, $this->source); })()), "html", null, true);
            yield "%</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Start Date</span>
                                    <span class=\"detail-val\">";
            // line 966
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDebut", [], "any", false, false, false, 966)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "dateDebut", [], "any", false, false, false, 966), "d M Y"), "html", null, true)) : ("—"));
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Duration</span>
                                    <span class=\"detail-val\">";
            // line 970
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "duree", [], "any", false, false, false, 970), "html", null, true);
            yield " day";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "duree", [], "any", false, false, false, 970) > 1)) ? ("s") : (""));
            yield "</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Status</span>
                                    <span class=\"detail-val\">";
            // line 974
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "statut", [], "any", false, false, false, 974), "html", null, true);
            yield "</span>
                                </div>

                                ";
            // line 977
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "contributiongoals", [], "any", false, false, false, 977)) > 0)) {
                // line 978
                yield "                                <div class=\"contribs-list\">
                                    <div class=\"contribs-list-title\">Contributions (";
                // line 979
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "contributiongoals", [], "any", false, false, false, 979)), "html", null, true);
                yield ")</div>
                                    ";
                // line 980
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["objectif"], "contributiongoals", [], "any", false, false, false, 980));
                foreach ($context['_seq'] as $context["_key"] => $context["contrib"]) {
                    // line 981
                    yield "                                        <div class=\"contrib-item\">
                                            <span class=\"contrib-amount\">+";
                    // line 982
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "montant", [], "any", false, false, false, 982), 2, ".", ","), "html", null, true);
                    yield "</span>
                                            <span class=\"contrib-date\">";
                    // line 983
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "date", [], "any", false, false, false, 983)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrib"], "date", [], "any", false, false, false, 983), "d M Y"), "html", null, true)) : ("—"));
                    yield "</span>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['contrib'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 986
                yield "                                </div>
                                ";
            } else {
                // line 988
                yield "                                <div style=\"margin-top:16px;text-align:center;color:var(--text-muted);font-size:13px;font-weight:600;\">
                                    No contributions yet.
                                </div>
                                ";
            }
            // line 992
            yield "                            </div>
                        </template>

                    ";
            $context['_iterated'] = true;
        }
        // line 995
        if (!$context['_iterated']) {
            // line 996
            yield "                        <tr>
                            <td colspan=\"10\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                                    <p>No objectifs found.</p>
                                    <span>Try adjusting your filters or reset them.</span>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['objectif'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1006
        yield "                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<!-- ═══ CONTRIBUTIONS MODAL ═══ -->
<div class=\"modal-overlay\" id=\"modalOverlay\" onclick=\"closeModalOnBg(event)\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <div class=\"modal-title\" id=\"modalTitle\">Objectif Details</div>
            <button class=\"modal-close\" onclick=\"closeModal()\">✕</button>
        </div>
        <div id=\"modalContent\" style=\"max-height:70vh;overflow-y:auto;\"></div>
    </div>
</div>

<script>
/* ── Wallet toolbar: update pills on dropdown change ── */
function onWalletChange(sel) {
    const opt   = sel.options[sel.selectedIndex];
    const pills = document.getElementById('walletPills');

    if (!opt.value) {
        pills.style.display = 'none';
        return;
    }

    document.getElementById('pillPays').textContent   = opt.dataset.pays   || '—';
    document.getElementById('pillDevise').textContent = opt.dataset.devise || '—';
    document.getElementById('pillSolde').textContent  =
        parseFloat(opt.dataset.solde || 0)
            .toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })
        + ' ' + (opt.dataset.devise || '');

    pills.style.display = 'flex';
}

/* ── Client-side live search within already-filtered rows ── */
function filterTable(query) {
    const rows = document.querySelectorAll('#objectifsTable tbody tr');
    const q = query.toLowerCase().trim();
    rows.forEach(row => {
        if (row.querySelector('td')) {
            row.style.display = (!q || row.textContent.toLowerCase().includes(q)) ? '' : 'none';
        }
    });
}

/* ── Contributions Modal ── */
function openModal(id) {
    const tpl = document.getElementById('modal-data-' + id);
    if (!tpl) return;
    document.getElementById('modalTitle').textContent = 'Objectif #' + id + ' — Details';
    document.getElementById('modalContent').innerHTML = tpl.innerHTML;
    document.getElementById('modalOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('modalOverlay').classList.remove('open');
    document.body.style.overflow = '';
}

function closeModalOnBg(e) {
    if (e.target === document.getElementById('modalOverlay')) closeModal();
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
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
        return "admin/objectifs.html.twig";
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
        return array (  1443 => 1006,  1428 => 996,  1426 => 995,  1419 => 992,  1413 => 988,  1409 => 986,  1400 => 983,  1396 => 982,  1393 => 981,  1389 => 980,  1385 => 979,  1382 => 978,  1380 => 977,  1374 => 974,  1365 => 970,  1358 => 966,  1349 => 962,  1342 => 958,  1335 => 954,  1331 => 952,  1323 => 949,  1319 => 947,  1317 => 946,  1306 => 944,  1299 => 940,  1292 => 936,  1285 => 932,  1272 => 922,  1268 => 921,  1260 => 916,  1255 => 914,  1250 => 911,  1244 => 909,  1240 => 907,  1238 => 906,  1235 => 905,  1233 => 904,  1224 => 900,  1217 => 896,  1207 => 891,  1201 => 888,  1194 => 886,  1187 => 881,  1181 => 880,  1177 => 879,  1172 => 876,  1166 => 874,  1158 => 871,  1153 => 869,  1148 => 866,  1146 => 865,  1140 => 862,  1135 => 860,  1131 => 858,  1128 => 857,  1125 => 856,  1122 => 855,  1116 => 854,  1113 => 853,  1108 => 852,  1105 => 851,  1100 => 850,  1076 => 828,  1067 => 825,  1061 => 823,  1058 => 822,  1052 => 820,  1049 => 819,  1045 => 817,  1037 => 816,  1034 => 815,  1032 => 814,  1027 => 811,  1025 => 810,  1017 => 805,  1006 => 797,  1002 => 796,  993 => 790,  982 => 781,  974 => 779,  972 => 778,  962 => 773,  953 => 769,  946 => 765,  937 => 758,  924 => 755,  919 => 753,  915 => 752,  911 => 751,  907 => 750,  903 => 749,  900 => 748,  896 => 747,  881 => 735,  864 => 723,  845 => 707,  833 => 698,  821 => 689,  809 => 680,  799 => 672,  793 => 671,  790 => 670,  785 => 669,  782 => 668,  779 => 667,  776 => 666,  774 => 665,  770 => 663,  761 => 660,  757 => 658,  752 => 657,  743 => 654,  739 => 652,  735 => 651,  727 => 646,  721 => 645,  714 => 641,  697 => 627,  690 => 623,  681 => 617,  674 => 613,  667 => 609,  660 => 605,  653 => 601,  644 => 595,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Manage Objectifs — Fin-Dinari</title>
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

        /* ── SIDEBAR ── */
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

        .brand-icon { width: 40px; height: 40px; }
        .brand-icon img { width: 100%; height: 100%; object-fit: contain; }
        .brand-name { font-size: 22px; font-weight: 800; color: var(--brand); letter-spacing: -0.5px; }

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
        }

        .side-link:hover { background: var(--brand-light); color: var(--brand); transform: translateX(2px); }
        .side-link.active { background: var(--brand-light); color: var(--brand-dark); box-shadow: inset 3px 0 0 var(--brand); }
        .side-link svg { width: 18px; height: 18px; flex-shrink: 0; }

        .sidebar-footer { margin-top: auto; padding-top: 18px; border-top: 1px solid var(--border); }

        /* ── CONTENT ── */
        .content { margin-left: var(--sidebar-width); flex: 1; padding: 28px; min-width: 0; }

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
            color: var(--brand-dark);
            font-weight: 800;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px;
            border: 2px solid var(--brand);
        }

        .welcome-text { font-size: 13.5px; color: var(--text-secondary); font-weight: 600; }
        .welcome-text strong { color: var(--text-primary); }

        /* ── FLASH ── */
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

        /* ── STAT CARDS ── */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            margin-bottom: 26px;
        }

        .card {
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 22px;
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
            opacity: .5;
        }

        .card:hover { transform: translateY(-3px); box-shadow: var(--shadow-hover); }

        .card-icon {
            width: 46px; height: 46px;
            border-radius: 14px;
            background: var(--card-accent, var(--brand-light));
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0;
        }

        .card-icon svg { width: 22px; height: 22px; }
        .card-body { flex: 1; }
        .card-label { font-size: 12.5px; color: var(--text-muted); font-weight: 700; text-transform: uppercase; letter-spacing: .6px; margin-bottom: 4px; }
        .card-value { font-size: 32px; font-weight: 800; color: var(--text-primary); letter-spacing: -1px; line-height: 1; }

        .card.c-green  { --card-accent: #dcfce7; } .card.c-green  .card-icon svg { color: var(--brand); }
        .card.c-blue   { --card-accent: #e6f6ff; } .card.c-blue   .card-icon svg { color: var(--info); }
        .card.c-amber  { --card-accent: #fff8e6; } .card.c-amber  .card-icon svg { color: var(--warning); }

        /* ── SECTION ── */
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

        /* ── WALLET TOOLBAR ── */
        .wallet-toolbar {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            padding: 14px 18px;
            background: #f4faf6;
            border-radius: var(--radius-md);
            border: 1.5px solid var(--border);
            margin-bottom: 18px;
        }

        .wt-label {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .6px;
            color: var(--text-muted);
            white-space: nowrap;
        }

        .wt-label svg { width: 15px; height: 15px; color: var(--brand); flex-shrink: 0; }

        .wt-select-wrap {
            position: relative;
            flex: 1;
            max-width: 300px;
            min-width: 190px;
        }

        .wt-select-wrap select {
            width: 100%;
            appearance: none;
            -webkit-appearance: none;
            padding: 9px 34px 9px 14px;
            font-size: 13.5px;
            font-family: inherit;
            font-weight: 600;
            border-radius: var(--radius-sm);
            border: 1.5px solid var(--border);
            background: var(--surface);
            color: var(--text-primary);
            cursor: pointer;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        .wt-select-wrap select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(22,163,74,.13);
        }

        .wt-chevron {
            position: absolute;
            right: 10px; top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            color: var(--text-muted);
        }

        .wt-chevron svg { width: 14px; height: 14px; display: block; }

        .wt-pills { display: flex; gap: 8px; flex-wrap: wrap; align-items: center; }
        .wt-divider { width: 1px; height: 26px; background: var(--border); flex-shrink: 0; }

        .wpill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            padding: 5px 13px;
            border-radius: 999px;
            font-size: 12.5px;
            font-weight: 700;
            border: 1px solid var(--border);
            background: var(--surface);
            white-space: nowrap;
        }

        .wpill .pl { color: var(--text-muted); font-weight: 600; margin-right: 1px; }
        .wpill .pv { color: var(--text-primary); }
        .wpill.solde .pv { color: var(--brand-dark); }

        /* ── FILTERS BAR ── */
        .filters-bar { display: flex; gap: 12px; flex-wrap: wrap; align-items: flex-end; }

        .fg { display: flex; flex-direction: column; gap: 6px; }
        .fg label { font-size: 12px; font-weight: 700; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .5px; }
        .fg.grow { flex: 1; min-width: 200px; }
        .fg.fixed { min-width: 170px; }

        input[type=\"text\"], select {
            padding: 9px 14px;
            border: 1.5px solid var(--border);
            border-radius: var(--radius-sm);
            background: var(--surface);
            color: var(--text-primary);
            font-family: inherit;
            font-size: 13.5px;
            font-weight: 500;
            outline: none;
            transition: border-color var(--transition), box-shadow var(--transition);
        }

        input[type=\"text\"]:focus, select:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(22,163,74,.13);
        }

        input::placeholder { color: var(--text-muted); font-weight: 400; }

        /* ── BUTTONS ── */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border: none;
            border-radius: var(--radius-sm);
            padding: 9px 16px;
            cursor: pointer;
            font-family: inherit;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: filter var(--transition), transform var(--transition);
            white-space: nowrap;
        }

        .btn:hover { filter: brightness(1.08); transform: translateY(-1px); }
        .btn:active { transform: translateY(0); filter: brightness(.97); }
        .btn-primary   { background: var(--brand);   color: #fff; box-shadow: 0 4px 12px rgba(22,163,74,.28); }
        .btn-danger    { background: var(--danger);   color: #fff; box-shadow: 0 4px 12px rgba(239,68,68,.25); }
        .btn-secondary { background: #f0f2f7;         color: var(--text-secondary); }
        .btn svg { width: 14px; height: 14px; }

        /* ── SEARCH INLINE ── */
        .search-wrap { position: relative; min-width: 210px; }
        .search-wrap svg { position: absolute; left: 11px; top: 50%; transform: translateY(-50%); width: 14px; height: 14px; color: var(--text-muted); pointer-events: none; }
        .search-wrap input { padding-left: 34px; width: 100%; }

        /* ── ACTIVE FILTER BANNER ── */
        .filter-banner {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            padding: 10px 16px;
            background: var(--brand-light);
            border-radius: var(--radius-sm);
            margin: 16px 0 4px;
            font-size: 13px;
            font-weight: 600;
            color: var(--brand-dark);
            border: 1px solid #bbf7d0;
        }

        .filter-banner svg { width: 14px; height: 14px; flex-shrink: 0; }
        .filter-banner strong { background: #bbf7d0; padding: 2px 8px; border-radius: 999px; font-size: 12px; }

        /* ── TABLE ── */
        .table-wrapper { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        thead tr { background: #f4faf6; border-bottom: 2px solid var(--border); }

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

        tbody tr { transition: background var(--transition); }
        tbody tr:hover { background: #f9fdf9; }
        tbody tr:last-child td { border-bottom: none; }

        /* ── BADGES ── */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 5px 11px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
        }

        .badge::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: currentColor; flex-shrink: 0; }
        .badge-termine  { background: var(--success-light); color: #166534; }
        .badge-en-cours { background: var(--warning-light); color: #92400e; }
        .badge-pause    { background: var(--info-light);    color: #0369a1; }

        /* ── WALLET CHIP ── */
        .wallet-chip {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 999px;
            background: var(--info-light);
            color: #0369a1;
            font-size: 12px;
            font-weight: 700;
        }

        /* ── PROGRESS ── */
        .progress-wrap { display: flex; align-items: center; gap: 10px; min-width: 150px; }
        .progress-bar { flex: 1; height: 8px; background: var(--border); border-radius: 99px; overflow: hidden; }
        .progress-fill { height: 100%; border-radius: 99px; background: linear-gradient(90deg, var(--brand), #4ade80); transition: width .4s ease; }
        .progress-fill.full { background: linear-gradient(90deg, #15803d, #22c55e); }
        .progress-pct { font-size: 12px; font-weight: 700; color: var(--text-secondary); white-space: nowrap; min-width: 34px; text-align: right; }

        /* ── CONTRIB PILL ── */
        .contrib-count {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 700;
            background: var(--brand-light);
            color: var(--brand-dark);
            border: none;
            cursor: pointer;
            transition: background var(--transition);
        }

        .contrib-count:hover { background: #bbf7d0; }

        /* ── EMPTY STATE ── */
        .empty-state { text-align: center; padding: 48px 20px; color: var(--text-muted); }
        .empty-state svg { width: 48px; height: 48px; margin: 0 auto 14px; display: block; opacity: .4; }
        .empty-state p { font-size: 14.5px; font-weight: 600; }
        .empty-state span { font-size: 13px; }

        /* ── MODAL ── */
        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,.35);
            z-index: 999;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(3px);
        }

        .modal-overlay.open { display: flex; animation: fadeIn .18s ease; }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .modal {
            background: var(--surface);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px rgba(0,0,0,.18);
            width: 100%;
            max-width: 540px;
            margin: 20px;
            overflow: hidden;
            animation: slideUp .22s cubic-bezier(.4,0,.2,1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            padding: 22px 26px 18px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-title { font-size: 17px; font-weight: 800; }
        .modal-close {
            background: none;
            border: none;
            cursor: pointer;
            color: var(--text-muted);
            width: 32px; height: 32px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px;
            transition: background var(--transition), color var(--transition);
        }
        .modal-close:hover { background: var(--danger-light); color: var(--danger); }

        .modal-body { padding: 24px 26px; }

        .detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--border);
            gap: 12px;
        }
        .detail-row:last-child { border-bottom: none; }
        .detail-key { font-size: 12.5px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: .5px; }
        .detail-val { font-weight: 600; color: var(--text-primary); text-align: right; }

        .contribs-list { margin-top: 18px; }
        .contribs-list-title { font-size: 13px; font-weight: 800; color: var(--text-secondary); text-transform: uppercase; letter-spacing: .6px; margin-bottom: 12px; }

        .contrib-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 9px 14px;
            background: #f9fdf9;
            border-radius: var(--radius-sm);
            margin-bottom: 7px;
            border: 1px solid var(--border);
            font-size: 13.5px;
        }

        .contrib-amount { font-weight: 800; color: var(--brand-dark); }
        .contrib-date   { font-size: 12px; color: var(--text-muted); font-weight: 600; }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: var(--border); border-radius: 99px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--text-muted); }
    </style>
</head>
<body>
<div class=\"layout\">

    <!-- ═══ SIDEBAR ═══ -->
    <aside class=\"sidebar\">
        <div class=\"brand\">
            <div class=\"brand-icon\">
                <img src=\"{{ asset('images/logo.png') }}\" alt=\"Fin-Dinari Logo\">
            </div>
            <span class=\"brand-name\">Fin-Dinari</span>
        </div>

        <div class=\"nav-section\">Main</div>
        <a class=\"side-link\" href=\"{{ path('app_admin_dashboard') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
            Dashboard
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_wallets') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
            Manage Wallets
        </a>
        <a class=\"side-link active\" href=\"{{ path('app_admin_objectifs') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
            Manage Objectifs
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_tickets') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z\"/></svg>
            Tickets & Messages
        </a>
        <a class=\"side-link\" href=\"{{ path('app_admin_obligations') }}\">
            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83\"/><circle cx=\"12\" cy=\"12\" r=\"3\"/></svg>
            Manage Obligations
        </a>

        <div class=\"sidebar-footer\">
            <a class=\"side-link\" href=\"{{ path('app_home') }}\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z\"/><polyline points=\"9 22 9 12 15 12 15 22\"/></svg>
                Back to site
            </a>
            <a class=\"side-link\" href=\"{{ path('app_logout') }}\">
                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4\"/><polyline points=\"16 17 21 12 16 7\"/><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"/></svg>
                Logout
            </a>
        </div>
    </aside>

    <!-- ═══ MAIN ═══ -->
    <main class=\"content\">

        <!-- TOPBAR -->
        <div class=\"topbar\">
            <div class=\"topbar-title\">Objectif <span>Management</span></div>
            <div class=\"topbar-right\">
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-primary\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
                    Dashboard
                </a>
                <div class=\"welcome-text\">Welcome back, <strong>{{ app.user.prenom }} {{ app.user.nom }}</strong></div>
                <div class=\"avatar\">{{ app.user.prenom|first|upper }}</div>
            </div>
        </div>

        <!-- FLASH -->
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

        <!-- STAT CARDS -->
        {% set totalObjectifs = objectifs|length %}
        {% set termines       = objectifs|filter(o => o.statut == 'TERMINE')|length %}
        {% set enCours        = objectifs|filter(o => o.statut == 'EN_COURS')|length %}
        {% set totalContribs  = 0 %}
        {% for o in objectifs %}
            {% set totalContribs = totalContribs + o.contributiongoals|length %}
        {% endfor %}

        <div class=\"cards\">
            <div class=\"card c-green\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Total Objectifs</div>
                    <div class=\"card-value\">{{ totalObjectifs }}</div>
                </div>
            </div>
            <div class=\"card c-blue\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"22 12 18 12 15 21 9 3 6 12 2 12\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">En Cours</div>
                    <div class=\"card-value\">{{ enCours }}</div>
                </div>
            </div>
            <div class=\"card c-green\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M22 11.08V12a10 10 0 11-5.93-9.14\"/><polyline points=\"22 4 12 14.01 9 11.01\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Terminés</div>
                    <div class=\"card-value\">{{ termines }}</div>
                </div>
            </div>
            <div class=\"card c-amber\">
                <div class=\"card-icon\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6\"/></svg>
                </div>
                <div class=\"card-body\">
                    <div class=\"card-label\">Contributions</div>
                    <div class=\"card-value\">{{ totalContribs }}</div>
                </div>
            </div>
        </div>

        <!-- ═══ TABLE SECTION ═══ -->
        <div class=\"section\">

            <!-- Section header -->
            <div class=\"section-header\">
                <div class=\"section-title\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                    All Objectifs
                </div>
                <div style=\"display:flex;align-items:center;gap:10px;flex-wrap:wrap;\">
                    <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                        {{ totalObjectifs }} result{{ totalObjectifs != 1 ? 's' : '' }}
                    </span>
                    <!-- Live client-side search (does not reset server filters) -->
                    <div class=\"search-wrap\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/></svg>
                        <input type=\"text\" id=\"searchInput\" placeholder=\"Search in results…\" oninput=\"filterTable(this.value)\">
                    </div>
                </div>
            </div>

            <!-- Filters body -->
            <div style=\"padding: 22px 26px; border-bottom: 1px solid var(--border);\">
                <form method=\"get\" action=\"{{ path('app_admin_objectifs') }}\">

                    <!-- ── WALLET TOOLBAR ── -->
                    <div class=\"wallet-toolbar\">
                        <div class=\"wt-label\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/><circle cx=\"17\" cy=\"14\" r=\"1\" fill=\"currentColor\"/></svg>
                            Wallet
                        </div>

                        <div class=\"wt-select-wrap\">
                            <select name=\"wallet_id\" id=\"walletSelect\" onchange=\"onWalletChange(this)\">
                                <option value=\"\">— All wallets —</option>
                                {% for id, w in wallets %}
                                    <option
                                        value=\"{{ id }}\"
                                        data-pays=\"{{ w.pays }}\"
                                        data-devise=\"{{ w.devise }}\"
                                        data-solde=\"{{ w.solde }}\"
                                        {{ filterWalletId == id ? 'selected' : '' }}
                                    >
                                        Wallet #{{ id }} — {{ w.pays }} / {{ w.devise }}
                                    </option>
                                {% endfor %}
                            </select>
                            <div class=\"wt-chevron\">
                                <svg viewBox=\"0 0 14 14\" fill=\"none\"><path d=\"M3 5l4 4 4-4\" stroke=\"currentColor\" stroke-width=\"1.4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
                            </div>
                        </div>

                        <!-- Info pills — populated by JS on change, pre-filled by Twig on reload -->
                        <div class=\"wt-pills\" id=\"walletPills\" style=\"{{ filterWalletId ? '' : 'display:none;' }}\">
                            <div class=\"wt-divider\"></div>
                            <div class=\"wpill\">
                                <span class=\"pl\">Pays</span>
                                <span class=\"pv\" id=\"pillPays\">{% if filterWalletId and wallets[filterWalletId] is defined %}{{ wallets[filterWalletId].pays }}{% endif %}</span>
                            </div>
                            <div class=\"wpill\">
                                <span class=\"pl\">Devise</span>
                                <span class=\"pv\" id=\"pillDevise\">{% if filterWalletId and wallets[filterWalletId] is defined %}{{ wallets[filterWalletId].devise }}{% endif %}</span>
                            </div>
                            <div class=\"wpill solde\">
                                <span class=\"pl\">Solde</span>
                                <span class=\"pv\" id=\"pillSolde\">
                                    {% if filterWalletId and wallets[filterWalletId] is defined %}
                                        {{ wallets[filterWalletId].solde|number_format(2, ',', ' ') }} {{ wallets[filterWalletId].devise }}
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- ── OTHER FILTERS ── -->
                    <div class=\"filters-bar\">
                        <div class=\"fg grow\">
                            <label>Search by title</label>
                            <input type=\"text\" name=\"q\" value=\"{{ searchObjectif|default('') }}\" placeholder=\"Objectif title…\">
                        </div>
                        <div class=\"fg fixed\">
                            <label>Statut</label>
                            <select name=\"status\">
                                <option value=\"\">All status</option>
                                <option value=\"EN_COURS\" {{ filterStatut == 'EN_COURS' ? 'selected' : '' }}>En cours</option>
                                <option value=\"TERMINE\"  {{ filterStatut == 'TERMINE'  ? 'selected' : '' }}>Terminé</option>
                            </select>
                        </div>
                        <div style=\"display:flex;gap:8px;align-items:flex-end;\">
                            <button class=\"btn btn-primary\" type=\"submit\">
                                <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"/></svg>
                                Apply
                            </button>
                            <a href=\"{{ path('app_admin_objectifs') }}\" class=\"btn btn-secondary\">Reset</a>
                        </div>
                    </div>

                    <!-- Active filter banner -->
                    {% if filterWalletId or filterStatut or searchObjectif %}
                    <div class=\"filter-banner\">
                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg>
                        Filtered by:
                        {% if filterWalletId %}
                            <strong>
                                Wallet #{{ filterWalletId }}{% if wallets[filterWalletId] is defined %} · {{ wallets[filterWalletId].pays }} / {{ wallets[filterWalletId].devise }}{% endif %}
                            </strong>
                        {% endif %}
                        {% if filterStatut %}
                            <strong>{{ filterStatut == 'TERMINE' ? 'Terminés' : 'En cours' }}</strong>
                        {% endif %}
                        {% if searchObjectif %}
                            <strong>\"{{ searchObjectif }}\"</strong>
                        {% endif %}
                        — {{ totalObjectifs }} result{{ totalObjectifs != 1 ? 's' : '' }}
                    </div>
                    {% endif %}

                </form>
            </div>

            <!-- TABLE -->
            <div class=\"table-wrapper\">
                <table id=\"objectifsTable\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Wallet</th>
                            <th>Target</th>
                            <th>Progress</th>
                            <th>Date début</th>
                            <th>Durée</th>
                            <th>Statut</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for objectif in objectifs %}
                        {% set totalContrib = 0 %}
                        {% for c in objectif.contributiongoals %}
                            {% set totalContrib = totalContrib + c.montant %}
                        {% endfor %}
                        {% set pct = objectif.montant > 0 ? ((totalContrib / objectif.montant) * 100)|round(0) : 0 %}
                        {% set pct = pct > 100 ? 100 : pct %}
                        {% set wi  = wallets[objectif.walletId] is defined ? wallets[objectif.walletId] : null %}

                        <tr>
                            <td style=\"color:var(--text-muted);font-weight:700;\">{{ objectif.id }}</td>

                            <td style=\"font-weight:700;\">{{ objectif.titre }}</td>

                            <td>
                                {% if wi %}
                                    <div style=\"display:flex;flex-direction:column;gap:3px;\">
                                        <span class=\"wallet-chip\">
                                            <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"width:11px;height:11px;flex-shrink:0;\"><rect x=\"2\" y=\"5\" width=\"20\" height=\"14\" rx=\"2\"/><path d=\"M2 10h20\"/></svg>
                                            #{{ objectif.walletId }}
                                        </span>
                                        <span style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;\">{{ wi.pays }} · {{ wi.devise }}</span>
                                    </div>
                                {% else %}
                                    <span class=\"wallet-chip\">#{{ objectif.walletId }}</span>
                                {% endif %}
                            </td>

                            <td style=\"font-weight:700;\">
                                {{ objectif.montant|number_format(2, '.', ',') }}
                                {% if wi %}<span style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;margin-left:3px;\">{{ wi.devise }}</span>{% endif %}
                            </td>

                            <td>
                                <div class=\"progress-wrap\">
                                    <div class=\"progress-bar\">
                                        <div class=\"progress-fill {{ pct >= 100 ? 'full' : '' }}\" style=\"width:{{ pct }}%;\"></div>
                                    </div>
                                    <span class=\"progress-pct\">{{ pct }}%</span>
                                </div>
                                <div style=\"font-size:11.5px;color:var(--text-muted);font-weight:600;margin-top:3px;\">
                                    {{ totalContrib|number_format(2, '.', ',') }} / {{ objectif.montant|number_format(2, '.', ',') }}
                                </div>
                            </td>

                            <td style=\"color:var(--text-secondary);font-weight:600;white-space:nowrap;\">
                                {{ objectif.dateDebut ? objectif.dateDebut|date('d M Y') : '—' }}
                            </td>

                            <td style=\"font-weight:600;color:var(--text-secondary);\">
                                {{ objectif.duree }} day{{ objectif.duree > 1 ? 's' : '' }}
                            </td>

                            <td>
                                {% if objectif.statut == 'TERMINE' %}
                                    <span class=\"badge badge-termine\">TERMINÉ</span>
                                {% elseif objectif.statut == 'EN_COURS' %}
                                    <span class=\"badge badge-en-cours\">EN COURS</span>
                                {% else %}
                                    <span class=\"badge badge-pause\">{{ objectif.statut }}</span>
                                {% endif %}
                            </td>

                            <td>
                                <button class=\"contrib-count\" onclick=\"openModal({{ objectif.id }})\" title=\"View contributions\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" style=\"width:12px;height:12px;flex-shrink:0;\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"/><path d=\"M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6\"/></svg>
                                    {{ objectif.contributiongoals|length }}
                                </button>
                            </td>

                            <td>
                                <form method=\"post\" action=\"{{ path('objectif_delete', {id: objectif.id}) }}\" onsubmit=\"return confirm('Delete this objectif and refund all contributions?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ objectif.id) }}\">
                                    <button class=\"btn btn-danger\" type=\"submit\">
                                        <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2.2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"3 6 5 6 21 6\"/><path d=\"M19 6l-1 14H6L5 6\"/><path d=\"M10 11v6\"/><path d=\"M14 11v6\"/><path d=\"M9 6V4h6v2\"/></svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal data template for this objectif -->
                        <template id=\"modal-data-{{ objectif.id }}\">
                            <div class=\"modal-body\">
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">ID</span>
                                    <span class=\"detail-val\">#{{ objectif.id }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Title</span>
                                    <span class=\"detail-val\">{{ objectif.titre }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Wallet</span>
                                    <span class=\"detail-val\">#{{ objectif.walletId }}{% if wi %} — {{ wi.pays }} / {{ wi.devise }}{% endif %}</span>
                                </div>
                                {% if wi %}
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Solde wallet</span>
                                    <span class=\"detail-val\" style=\"color:var(--brand-dark);\">{{ wi.solde|number_format(2, '.', ',') }} {{ wi.devise }}</span>
                                </div>
                                {% endif %}
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Target</span>
                                    <span class=\"detail-val\">{{ objectif.montant|number_format(2, '.', ',') }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Collected</span>
                                    <span class=\"detail-val\">{{ totalContrib|number_format(2, '.', ',') }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Progress</span>
                                    <span class=\"detail-val\" style=\"color:{{ pct >= 100 ? 'var(--brand)' : 'var(--text-primary)' }};\">{{ pct }}%</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Start Date</span>
                                    <span class=\"detail-val\">{{ objectif.dateDebut ? objectif.dateDebut|date('d M Y') : '—' }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Duration</span>
                                    <span class=\"detail-val\">{{ objectif.duree }} day{{ objectif.duree > 1 ? 's' : '' }}</span>
                                </div>
                                <div class=\"detail-row\">
                                    <span class=\"detail-key\">Status</span>
                                    <span class=\"detail-val\">{{ objectif.statut }}</span>
                                </div>

                                {% if objectif.contributiongoals|length > 0 %}
                                <div class=\"contribs-list\">
                                    <div class=\"contribs-list-title\">Contributions ({{ objectif.contributiongoals|length }})</div>
                                    {% for contrib in objectif.contributiongoals %}
                                        <div class=\"contrib-item\">
                                            <span class=\"contrib-amount\">+{{ contrib.montant|number_format(2, '.', ',') }}</span>
                                            <span class=\"contrib-date\">{{ contrib.date ? contrib.date|date('d M Y') : '—' }}</span>
                                        </div>
                                    {% endfor %}
                                </div>
                                {% else %}
                                <div style=\"margin-top:16px;text-align:center;color:var(--text-muted);font-size:13px;font-weight:600;\">
                                    No contributions yet.
                                </div>
                                {% endif %}
                            </div>
                        </template>

                    {% else %}
                        <tr>
                            <td colspan=\"10\">
                                <div class=\"empty-state\">
                                    <svg viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.5\"><circle cx=\"12\" cy=\"12\" r=\"10\"/><polyline points=\"12 6 12 12 16 14\"/></svg>
                                    <p>No objectifs found.</p>
                                    <span>Try adjusting your filters or reset them.</span>
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

<!-- ═══ CONTRIBUTIONS MODAL ═══ -->
<div class=\"modal-overlay\" id=\"modalOverlay\" onclick=\"closeModalOnBg(event)\">
    <div class=\"modal\">
        <div class=\"modal-header\">
            <div class=\"modal-title\" id=\"modalTitle\">Objectif Details</div>
            <button class=\"modal-close\" onclick=\"closeModal()\">✕</button>
        </div>
        <div id=\"modalContent\" style=\"max-height:70vh;overflow-y:auto;\"></div>
    </div>
</div>

<script>
/* ── Wallet toolbar: update pills on dropdown change ── */
function onWalletChange(sel) {
    const opt   = sel.options[sel.selectedIndex];
    const pills = document.getElementById('walletPills');

    if (!opt.value) {
        pills.style.display = 'none';
        return;
    }

    document.getElementById('pillPays').textContent   = opt.dataset.pays   || '—';
    document.getElementById('pillDevise').textContent = opt.dataset.devise || '—';
    document.getElementById('pillSolde').textContent  =
        parseFloat(opt.dataset.solde || 0)
            .toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 })
        + ' ' + (opt.dataset.devise || '');

    pills.style.display = 'flex';
}

/* ── Client-side live search within already-filtered rows ── */
function filterTable(query) {
    const rows = document.querySelectorAll('#objectifsTable tbody tr');
    const q = query.toLowerCase().trim();
    rows.forEach(row => {
        if (row.querySelector('td')) {
            row.style.display = (!q || row.textContent.toLowerCase().includes(q)) ? '' : 'none';
        }
    });
}

/* ── Contributions Modal ── */
function openModal(id) {
    const tpl = document.getElementById('modal-data-' + id);
    if (!tpl) return;
    document.getElementById('modalTitle').textContent = 'Objectif #' + id + ' — Details';
    document.getElementById('modalContent').innerHTML = tpl.innerHTML;
    document.getElementById('modalOverlay').classList.add('open');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('modalOverlay').classList.remove('open');
    document.body.style.overflow = '';
}

function closeModalOnBg(e) {
    if (e.target === document.getElementById('modalOverlay')) closeModal();
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
</script>
</body>
</html>
", "admin/objectifs.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\objectifs.html.twig");
    }
}
