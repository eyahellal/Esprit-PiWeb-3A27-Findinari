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

/* management/dashboard.html.twig */
class __TwigTemplate_8a4d34522b2c31a22b91081c9e9bc101 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/dashboard.html.twig"));

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

        yield "Budget Management - Fin-Dinari";
        
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
        yield "
<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        ";
        // line 21
        yield "<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"d-flex gap-2 border-bottom pb-3 align-items-center\">
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"wallet\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-wallet me-1\"></i>Wallets
            </a>
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"categorie\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-folder me-1\"></i>Categories
            </a>
            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_budget_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"budget\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-chart-pie me-1\"></i>Budgets
            </a>
            <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transaction_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"transaction\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
            </a>
            <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stats_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"stats\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-chart-bar me-1\"></i>Statistics
            </a>
            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_weather_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"weather\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-cloud-sun me-1\"></i>Weather
            </a>
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_holiday_index");
        yield "\"
               class=\"btn tab-btn\"
               data-tab=\"holiday\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-calendar-check me-1\"></i>Holidays
            </a>

           ";
        // line 75
        yield "<div class=\"ms-auto position-relative\">
    <button class=\"btn position-relative\" id=\"notifBell\"
            onclick=\"toggleNotifications()\"
            style=\"background: none; border: none; font-size: 1.3rem; color: #26474E;\">
        <i class=\"fas fa-bell\"></i>
        <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill\"
              id=\"notifCount\"
              style=\"background: #c0392b; display: none; font-size: 0.6rem;\">
            0
        </span>
    </button>

    ";
        // line 88
        yield "    <div id=\"notifDropdown\" class=\"position-absolute end-0 mt-2 rounded-4\"
         style=\"display: none; width: 360px; background: white; box-shadow: 0 8px 30px rgba(0,0,0,0.15); z-index: 1000; max-height: 400px; overflow-y: auto;\">

        <div class=\"p-3 d-flex justify-content-between align-items-center\"
             style=\"border-bottom: 1px solid #f0f0f0;\">
            <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                <i class=\"fas fa-bell me-1\" style=\"color: #F27438;\"></i>Notifications
            </h6>
            <button class=\"btn btn-sm\" onclick=\"clearNotifications()\"
                    style=\"color: #999; font-size: 0.75rem;\">
                Clear all
            </button>
        </div>

        <div id=\"notifList\">
            <div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">
                <i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>
                <p class=\"mb-0\">No new notifications</p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>

        ";
        // line 115
        yield "<turbo-frame id=\"content-frame\">
    ";
        // line 116
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 117
        yield "</turbo-frame>

    </div>
</section>

";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "flashes", ["budget_alert"], "method", false, false, false, 122));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 123
            yield "    <script>
        function addBudgetNotif() {
            if (typeof addNotification === 'function') {
                addNotification('budget', ";
            // line 126
            yield $context["message"];
            yield ");
            }
        }
        document.addEventListener('DOMContentLoaded', addBudgetNotif);
        document.addEventListener('turbo:load', addBudgetNotif);
        // Run immediately if already loaded
        if (document.readyState !== 'loading') {
            addBudgetNotif();
        }
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "
<style>
    #notifBell:hover {
        color: #F27438 !important;
    }
    .notif-item {
        transition: all 0.2s;
        cursor: pointer;
    }
    .notif-item:hover {
        background: #fff8f5 !important;
    }
    .notif-item.unread {
        border-left: 3px solid #F27438;
    }
    #notifBell {
    transition: all 0.3s ease;
}
#notifBell:hover {
    color: #F27438 !important;
    transform: scale(1.1);
}
#notifCount {
    font-size: 0.6rem;
    min-width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}
   
</style>

<script>
// Notification system
let notifications = JSON.parse(localStorage.getItem('findinari_notifications') || '[]');

function renderNotifications() {
    const list = document.getElementById('notifList');
    const count = document.getElementById('notifCount');

    if (!list || !count) return; // Safety check

    const unread = notifications.filter(n => !n.read).length;

    // Update badge
    if (unread > 0) {
        count.textContent = unread > 9 ? '9+' : unread;
        count.style.display = 'block';
        // Make bell red when unread notifications exist
        const bell = document.getElementById('notifBell');
        if (bell) bell.style.color = '#c0392b';
    } else {
        count.style.display = 'none';
        const bell = document.getElementById('notifBell');
        if (bell) bell.style.color = '#26474E';
    }

    if (notifications.length === 0) {
        list.innerHTML = '<div class=\"p-4 text-center text-muted small\">' +
            '<i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>' +
            '<p class=\"mb-0\">No new notifications</p></div>';
        return;
    }

    let html = '';
    notifications.slice().reverse().forEach((notif, index) => {
        const realIndex = notifications.length - 1 - index;
        const icon = notif.type === 'budget' ? 'fa-exclamation-triangle' : 'fa-info-circle';
        const color = notif.type === 'budget' ? '#c0392b' : '#F27438';
        const bgColor = notif.type === 'budget' ? '#fde8e8' : '#fff3ee';

        html += '<div class=\"notif-item p-3 ' + (notif.read ? '' : 'unread') + '\" ' +
            'style=\"border-bottom: 1px solid #f5f5f5; cursor: pointer;\" ' +
            'onclick=\"markAsRead(' + realIndex + ')\">' +
            '<div class=\"d-flex gap-3 align-items-start\">' +
            '<div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\" ' +
            'style=\"width:36px; height:36px; background:' + bgColor + ';\">' +
            '<i class=\"fas ' + icon + '\" style=\"color:' + color + ';\"></i></div>' +
            '<div class=\"flex-fill\">' +
            '<p class=\"mb-0 small fw-bold\" style=\"color: #26474E;\">' + notif.title + '</p>' +
            '<p class=\"mb-0 small text-muted\">' + notif.message + '</p>' +
            '<p class=\"mb-0 small text-muted\" style=\"font-size: 0.7rem;\">' + notif.time + '</p>' +
            '</div>' +
            (notif.read ? '' : '<span class=\"rounded-circle d-inline-block\" style=\"width:8px; height:8px; background:#F27438; flex-shrink:0; margin-top:6px;\"></span>') +
            '</div></div>';
    });

    list.innerHTML = html;
}

function addNotification(type, data) {
    const now = new Date();
    const time = now.toLocaleDateString('en-GB') + ' ' +
        now.toLocaleTimeString('en-GB', {hour: '2-digit', minute: '2-digit'});

    notifications.push({
        type: type,
        title: data.title || 'Notification',
        message: data.message || '',
        time: time,
        read: false,
    });

    if (notifications.length > 20) {
        notifications = notifications.slice(-20);
    }

    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();

    // Animate bell — shake and turn red
    const bell = document.getElementById('notifBell');
    if (bell) {
        bell.style.color = '#c0392b';
        bell.style.transform = 'scale(1.3)';
        setTimeout(() => {
            bell.style.transform = 'scale(1)';
        }, 300);
    }
}

function toggleNotifications() {
    const dropdown = document.getElementById('notifDropdown');
    if (!dropdown) return;
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';

    // Mark all as read when opening
    if (dropdown.style.display === 'block') {
        notifications.forEach(n => n.read = true);
        localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
        setTimeout(renderNotifications, 300);
    }
}

function markAsRead(index) {
    notifications[index].read = true;
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

function clearNotifications() {
    notifications = [];
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const bell = document.getElementById('notifBell');
    const dropdown = document.getElementById('notifDropdown');
    if (!bell || !dropdown) return;
    if (!bell.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});

// Tab management
function setActiveTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        if (btn.dataset.tab === tabName) {
            btn.classList.remove('btn-outline-primary');
            btn.classList.add('btn-primary');
        } else {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-outline-primary');
        }
    });
}

function getTabFromUrl(url) {
    if (url.includes('/categorie')) return 'categorie';
    if (url.includes('/budget')) return 'budget';
    if (url.includes('/transaction')) return 'transaction';
    if (url.includes('/stats')) return 'stats';
    if (url.includes('/weather')) return 'weather';
    if (url.includes('/holiday')) return 'holiday';
    return 'wallet';
}

// Set active tab on click
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        setActiveTab(this.dataset.tab);
        const url = this.getAttribute('href');
        window.history.pushState({tab: this.dataset.tab}, '', url);
    });
});

// Initialize everything
function initDashboard() {
    const tab = getTabFromUrl(window.location.pathname);
    setActiveTab(tab);
    renderNotifications();
}

document.addEventListener('DOMContentLoaded', initDashboard);
document.addEventListener('turbo:load', initDashboard);

// Handle browser back/forward
window.addEventListener('popstate', function(e) {
    if (e.state && e.state.tab) {
        setActiveTab(e.state.tab);
    }
});
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "management/dashboard.html.twig";
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
        return array (  491 => 116,  273 => 137,  256 => 126,  251 => 123,  247 => 122,  240 => 117,  238 => 116,  235 => 115,  207 => 88,  193 => 75,  182 => 66,  172 => 59,  162 => 52,  152 => 45,  142 => 38,  132 => 31,  122 => 24,  117 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Budget Management - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3\" style=\"color: #26474E;\">Budget Management</h2>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">

        {# Navigation Tabs #}
<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"d-flex gap-2 border-bottom pb-3 align-items-center\">
            <a href=\"{{ path('app_wallet_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"wallet\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-wallet me-1\"></i>Wallets
            </a>
            <a href=\"{{ path('app_categorie_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"categorie\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-folder me-1\"></i>Categories
            </a>
            <a href=\"{{ path('app_budget_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"budget\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-chart-pie me-1\"></i>Budgets
            </a>
            <a href=\"{{ path('app_transaction_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"transaction\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-exchange-alt me-1\"></i>Transactions
            </a>
            <a href=\"{{ path('app_stats_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"stats\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-chart-bar me-1\"></i>Statistics
            </a>
            <a href=\"{{ path('app_weather_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"weather\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-cloud-sun me-1\"></i>Weather
            </a>
            <a href=\"{{ path('app_holiday_index') }}\"
               class=\"btn tab-btn\"
               data-tab=\"holiday\"
               data-turbo-frame=\"content-frame\"
               style=\"border-radius: 10px;\">
                <i class=\"fas fa-calendar-check me-1\"></i>Holidays
            </a>

           {# Notification Bell #}
<div class=\"ms-auto position-relative\">
    <button class=\"btn position-relative\" id=\"notifBell\"
            onclick=\"toggleNotifications()\"
            style=\"background: none; border: none; font-size: 1.3rem; color: #26474E;\">
        <i class=\"fas fa-bell\"></i>
        <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill\"
              id=\"notifCount\"
              style=\"background: #c0392b; display: none; font-size: 0.6rem;\">
            0
        </span>
    </button>

    {# Notification Dropdown #}
    <div id=\"notifDropdown\" class=\"position-absolute end-0 mt-2 rounded-4\"
         style=\"display: none; width: 360px; background: white; box-shadow: 0 8px 30px rgba(0,0,0,0.15); z-index: 1000; max-height: 400px; overflow-y: auto;\">

        <div class=\"p-3 d-flex justify-content-between align-items-center\"
             style=\"border-bottom: 1px solid #f0f0f0;\">
            <h6 class=\"fw-bold mb-0\" style=\"color: #26474E;\">
                <i class=\"fas fa-bell me-1\" style=\"color: #F27438;\"></i>Notifications
            </h6>
            <button class=\"btn btn-sm\" onclick=\"clearNotifications()\"
                    style=\"color: #999; font-size: 0.75rem;\">
                Clear all
            </button>
        </div>

        <div id=\"notifList\">
            <div class=\"p-4 text-center text-muted small\" id=\"notifEmpty\">
                <i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>
                <p class=\"mb-0\">No new notifications</p>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>

        {# Content Frame — target=\"_top\" removed so URL updates work #}
<turbo-frame id=\"content-frame\">
    {% block content %}{% endblock %}
</turbo-frame>

    </div>
</section>

{% for message in app.flashes('budget_alert') %}
    <script>
        function addBudgetNotif() {
            if (typeof addNotification === 'function') {
                addNotification('budget', {{ message|raw }});
            }
        }
        document.addEventListener('DOMContentLoaded', addBudgetNotif);
        document.addEventListener('turbo:load', addBudgetNotif);
        // Run immediately if already loaded
        if (document.readyState !== 'loading') {
            addBudgetNotif();
        }
    </script>
{% endfor %}

<style>
    #notifBell:hover {
        color: #F27438 !important;
    }
    .notif-item {
        transition: all 0.2s;
        cursor: pointer;
    }
    .notif-item:hover {
        background: #fff8f5 !important;
    }
    .notif-item.unread {
        border-left: 3px solid #F27438;
    }
    #notifBell {
    transition: all 0.3s ease;
}
#notifBell:hover {
    color: #F27438 !important;
    transform: scale(1.1);
}
#notifCount {
    font-size: 0.6rem;
    min-width: 18px;
    height: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}
   
</style>

<script>
// Notification system
let notifications = JSON.parse(localStorage.getItem('findinari_notifications') || '[]');

function renderNotifications() {
    const list = document.getElementById('notifList');
    const count = document.getElementById('notifCount');

    if (!list || !count) return; // Safety check

    const unread = notifications.filter(n => !n.read).length;

    // Update badge
    if (unread > 0) {
        count.textContent = unread > 9 ? '9+' : unread;
        count.style.display = 'block';
        // Make bell red when unread notifications exist
        const bell = document.getElementById('notifBell');
        if (bell) bell.style.color = '#c0392b';
    } else {
        count.style.display = 'none';
        const bell = document.getElementById('notifBell');
        if (bell) bell.style.color = '#26474E';
    }

    if (notifications.length === 0) {
        list.innerHTML = '<div class=\"p-4 text-center text-muted small\">' +
            '<i class=\"fas fa-check-circle fa-2x mb-2\" style=\"color: #2d6a4f;\"></i>' +
            '<p class=\"mb-0\">No new notifications</p></div>';
        return;
    }

    let html = '';
    notifications.slice().reverse().forEach((notif, index) => {
        const realIndex = notifications.length - 1 - index;
        const icon = notif.type === 'budget' ? 'fa-exclamation-triangle' : 'fa-info-circle';
        const color = notif.type === 'budget' ? '#c0392b' : '#F27438';
        const bgColor = notif.type === 'budget' ? '#fde8e8' : '#fff3ee';

        html += '<div class=\"notif-item p-3 ' + (notif.read ? '' : 'unread') + '\" ' +
            'style=\"border-bottom: 1px solid #f5f5f5; cursor: pointer;\" ' +
            'onclick=\"markAsRead(' + realIndex + ')\">' +
            '<div class=\"d-flex gap-3 align-items-start\">' +
            '<div class=\"rounded-circle d-flex align-items-center justify-content-center flex-shrink-0\" ' +
            'style=\"width:36px; height:36px; background:' + bgColor + ';\">' +
            '<i class=\"fas ' + icon + '\" style=\"color:' + color + ';\"></i></div>' +
            '<div class=\"flex-fill\">' +
            '<p class=\"mb-0 small fw-bold\" style=\"color: #26474E;\">' + notif.title + '</p>' +
            '<p class=\"mb-0 small text-muted\">' + notif.message + '</p>' +
            '<p class=\"mb-0 small text-muted\" style=\"font-size: 0.7rem;\">' + notif.time + '</p>' +
            '</div>' +
            (notif.read ? '' : '<span class=\"rounded-circle d-inline-block\" style=\"width:8px; height:8px; background:#F27438; flex-shrink:0; margin-top:6px;\"></span>') +
            '</div></div>';
    });

    list.innerHTML = html;
}

function addNotification(type, data) {
    const now = new Date();
    const time = now.toLocaleDateString('en-GB') + ' ' +
        now.toLocaleTimeString('en-GB', {hour: '2-digit', minute: '2-digit'});

    notifications.push({
        type: type,
        title: data.title || 'Notification',
        message: data.message || '',
        time: time,
        read: false,
    });

    if (notifications.length > 20) {
        notifications = notifications.slice(-20);
    }

    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();

    // Animate bell — shake and turn red
    const bell = document.getElementById('notifBell');
    if (bell) {
        bell.style.color = '#c0392b';
        bell.style.transform = 'scale(1.3)';
        setTimeout(() => {
            bell.style.transform = 'scale(1)';
        }, 300);
    }
}

function toggleNotifications() {
    const dropdown = document.getElementById('notifDropdown');
    if (!dropdown) return;
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';

    // Mark all as read when opening
    if (dropdown.style.display === 'block') {
        notifications.forEach(n => n.read = true);
        localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
        setTimeout(renderNotifications, 300);
    }
}

function markAsRead(index) {
    notifications[index].read = true;
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

function clearNotifications() {
    notifications = [];
    localStorage.setItem('findinari_notifications', JSON.stringify(notifications));
    renderNotifications();
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    const bell = document.getElementById('notifBell');
    const dropdown = document.getElementById('notifDropdown');
    if (!bell || !dropdown) return;
    if (!bell.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.style.display = 'none';
    }
});

// Tab management
function setActiveTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        if (btn.dataset.tab === tabName) {
            btn.classList.remove('btn-outline-primary');
            btn.classList.add('btn-primary');
        } else {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-outline-primary');
        }
    });
}

function getTabFromUrl(url) {
    if (url.includes('/categorie')) return 'categorie';
    if (url.includes('/budget')) return 'budget';
    if (url.includes('/transaction')) return 'transaction';
    if (url.includes('/stats')) return 'stats';
    if (url.includes('/weather')) return 'weather';
    if (url.includes('/holiday')) return 'holiday';
    return 'wallet';
}

// Set active tab on click
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        setActiveTab(this.dataset.tab);
        const url = this.getAttribute('href');
        window.history.pushState({tab: this.dataset.tab}, '', url);
    });
});

// Initialize everything
function initDashboard() {
    const tab = getTabFromUrl(window.location.pathname);
    setActiveTab(tab);
    renderNotifications();
}

document.addEventListener('DOMContentLoaded', initDashboard);
document.addEventListener('turbo:load', initDashboard);

// Handle browser back/forward
window.addEventListener('popstate', function(e) {
    if (e.state && e.state.tab) {
        setActiveTab(e.state.tab);
    }
});
</script>

{% endblock %}", "management/dashboard.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\dashboard.html.twig");
    }
}
