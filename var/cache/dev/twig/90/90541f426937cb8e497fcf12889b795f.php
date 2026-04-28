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

/* home/financial_news.html.twig */
class __TwigTemplate_c8c66b28d2c863e29e8e81d39e994acd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/financial_news.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/financial_news.html.twig"));

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

        yield "Financial News - Fin-Dinari";
        
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
<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Financial News</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_financial_news");
        yield "\">Financial News</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h1 class=\"text-primary\">📰 Financial News</h1>
                    <p class=\"text-secondary\">Stay updated with the latest financial and investment news</p>
                </div>
            </div>
        </div>
        
        <!-- Search Bar Only -->
        <div class=\"row mb-5\">
            <div class=\"col-md-6 mx-auto\">
                <div class=\"input-group shadow-sm\">
                    <span class=\"input-group-text bg-white border-end-0\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input type=\"text\" id=\"searchInput\" class=\"form-control border-start-0\" placeholder=\"Search financial news...\" value=\"finance investment\">
                    <button class=\"btn btn-primary px-4\" onclick=\"searchNews()\">
                        <i class=\"fas fa-search me-2\"></i>Search
                    </button>
                </div>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">Try: finance, investment, stock market, crypto, economy</small>
                </div>
            </div>
        </div>
        
        <!-- Loading Spinner -->
        <div id=\"loading\" class=\"text-center py-5\" style=\"display: none;\">
            <div class=\"spinner-border text-primary\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
            </div>
            <p class=\"mt-2 text-muted\">Loading news...</p>
        </div>
        
        <!-- News Grid -->
        <div id=\"newsGrid\" class=\"row\">
            <div class=\"col-12 text-center py-5\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-2 text-muted\">Loading financial news...</p>
            </div>
        </div>
    </div>
</section>

<style>
    .news-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border-radius: 12px;
        overflow: hidden;
        height: 100%;
    }
    .news-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
    }
    .news-img {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }
    .text-primary { color: #2d6a4f !important; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .input-group-text { background-color: white; }
    .card-title { font-size: 1.1rem; font-weight: 600; }
    .read-more { font-size: 0.85rem; }
</style>

<script>
    async function searchNews() {
        const query = document.getElementById('searchInput').value;
        if (!query.trim()) return;
        
        document.getElementById('loading').style.display = 'block';
        document.getElementById('newsGrid').innerHTML = '';
        
        try {
            const response = await fetch(`/api/news/?search=\${encodeURIComponent(query)}`);
            const data = await response.json();
            
            if (data.success && data.articles && data.articles.length > 0) {
                displayNews(data.articles);
            } else {
                document.getElementById('newsGrid').innerHTML = `
                    <div class=\"col-12 text-center py-5\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            No news found for \"\${query}\". Try a different search term.
                        </div>
                    </div>
                `;
            }
        } catch (error) {
            document.getElementById('newsGrid').innerHTML = `
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        Failed to load news. Please try again.
                    </div>
                </div>
            `;
        } finally {
            document.getElementById('loading').style.display = 'none';
        }
    }
    
    function displayNews(articles) {
        const grid = document.getElementById('newsGrid');
        grid.innerHTML = '';
        
        const displayArticles = articles.slice(0, 12);
        
        displayArticles.forEach(article => {
            const col = document.createElement('div');
            col.className = 'col-lg-4 col-md-6 mb-4';
            
            // Format date
            let formattedDate = 'Unknown date';
            if (article.publishedAt) {
                try {
                    const date = new Date(article.publishedAt);
                    formattedDate = date.toLocaleDateString('en-GB', {
                        day: '2-digit',
                        month: '2-digit',
                        year: 'numeric'
                    });
                } catch(e) {}
            }
            
            col.innerHTML = `
                <div class=\"card border-0 shadow-sm news-card\">
                    \${article.urlToImage ? 
                        `<img src=\"\${article.urlToImage}\" class=\"news-img\" alt=\"\${article.title || 'News image'}\" onerror=\"this.src='https://placehold.co/600x400/e8f5e9/2d6a4f?text=Financial+News'\">` :
                        `<div class=\"news-img bg-light d-flex align-items-center justify-content-center\" style=\"background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);\">
                            <i class=\"fas fa-chart-line fa-3x\" style=\"color: #2d6a4f;\"></i>
                        </div>`
                    }
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">\${article.title ? (article.title.length > 80 ? article.title.substring(0, 80) + '...' : article.title) : 'No title'}</h5>
                        <p class=\"card-text text-secondary\">\${article.description ? (article.description.length > 100 ? article.description.substring(0, 100) + '...' : article.description) : 'Click to read more...'}</p>
                        <div class=\"d-flex justify-content-between align-items-center mt-3\">
                            <small class=\"text-muted\">
                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                \${formattedDate}
                            </small>
                            <a href=\"\${article.url}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary read-more\">
                                Read More <i class=\"fas fa-arrow-right ms-1\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;
            grid.appendChild(col);
        });
    }
    
    // Load default news on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Load default financial news
        setTimeout(() => {
            searchNews();
        }, 500);
    });
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
        return "home/financial_news.html.twig";
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
        return array (  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Financial News - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header bg-tertiary\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\">Financial News</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_financial_news') }}\">Financial News</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row mb-4\">
            <div class=\"col-lg-8\">
                <div class=\"section-title\">
                    <h1 class=\"text-primary\">📰 Financial News</h1>
                    <p class=\"text-secondary\">Stay updated with the latest financial and investment news</p>
                </div>
            </div>
        </div>
        
        <!-- Search Bar Only -->
        <div class=\"row mb-5\">
            <div class=\"col-md-6 mx-auto\">
                <div class=\"input-group shadow-sm\">
                    <span class=\"input-group-text bg-white border-end-0\">
                        <i class=\"fas fa-search text-muted\"></i>
                    </span>
                    <input type=\"text\" id=\"searchInput\" class=\"form-control border-start-0\" placeholder=\"Search financial news...\" value=\"finance investment\">
                    <button class=\"btn btn-primary px-4\" onclick=\"searchNews()\">
                        <i class=\"fas fa-search me-2\"></i>Search
                    </button>
                </div>
                <div class=\"text-center mt-2\">
                    <small class=\"text-muted\">Try: finance, investment, stock market, crypto, economy</small>
                </div>
            </div>
        </div>
        
        <!-- Loading Spinner -->
        <div id=\"loading\" class=\"text-center py-5\" style=\"display: none;\">
            <div class=\"spinner-border text-primary\" role=\"status\">
                <span class=\"visually-hidden\">Loading...</span>
            </div>
            <p class=\"mt-2 text-muted\">Loading news...</p>
        </div>
        
        <!-- News Grid -->
        <div id=\"newsGrid\" class=\"row\">
            <div class=\"col-12 text-center py-5\">
                <div class=\"spinner-border text-primary\" role=\"status\">
                    <span class=\"visually-hidden\">Loading...</span>
                </div>
                <p class=\"mt-2 text-muted\">Loading financial news...</p>
            </div>
        </div>
    </div>
</section>

<style>
    .news-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border-radius: 12px;
        overflow: hidden;
        height: 100%;
    }
    .news-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
    }
    .news-img {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }
    .text-primary { color: #2d6a4f !important; }
    .btn-primary { background-color: #2d6a4f; border-color: #2d6a4f; }
    .btn-primary:hover { background-color: #1b4d3b; border-color: #1b4d3b; }
    .input-group-text { background-color: white; }
    .card-title { font-size: 1.1rem; font-weight: 600; }
    .read-more { font-size: 0.85rem; }
</style>

<script>
    async function searchNews() {
        const query = document.getElementById('searchInput').value;
        if (!query.trim()) return;
        
        document.getElementById('loading').style.display = 'block';
        document.getElementById('newsGrid').innerHTML = '';
        
        try {
            const response = await fetch(`/api/news/?search=\${encodeURIComponent(query)}`);
            const data = await response.json();
            
            if (data.success && data.articles && data.articles.length > 0) {
                displayNews(data.articles);
            } else {
                document.getElementById('newsGrid').innerHTML = `
                    <div class=\"col-12 text-center py-5\">
                        <div class=\"alert alert-info\">
                            <i class=\"fas fa-info-circle me-2\"></i>
                            No news found for \"\${query}\". Try a different search term.
                        </div>
                    </div>
                `;
            }
        } catch (error) {
            document.getElementById('newsGrid').innerHTML = `
                <div class=\"col-12 text-center py-5\">
                    <div class=\"alert alert-danger\">
                        <i class=\"fas fa-exclamation-circle me-2\"></i>
                        Failed to load news. Please try again.
                    </div>
                </div>
            `;
        } finally {
            document.getElementById('loading').style.display = 'none';
        }
    }
    
    function displayNews(articles) {
        const grid = document.getElementById('newsGrid');
        grid.innerHTML = '';
        
        const displayArticles = articles.slice(0, 12);
        
        displayArticles.forEach(article => {
            const col = document.createElement('div');
            col.className = 'col-lg-4 col-md-6 mb-4';
            
            // Format date
            let formattedDate = 'Unknown date';
            if (article.publishedAt) {
                try {
                    const date = new Date(article.publishedAt);
                    formattedDate = date.toLocaleDateString('en-GB', {
                        day: '2-digit',
                        month: '2-digit',
                        year: 'numeric'
                    });
                } catch(e) {}
            }
            
            col.innerHTML = `
                <div class=\"card border-0 shadow-sm news-card\">
                    \${article.urlToImage ? 
                        `<img src=\"\${article.urlToImage}\" class=\"news-img\" alt=\"\${article.title || 'News image'}\" onerror=\"this.src='https://placehold.co/600x400/e8f5e9/2d6a4f?text=Financial+News'\">` :
                        `<div class=\"news-img bg-light d-flex align-items-center justify-content-center\" style=\"background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);\">
                            <i class=\"fas fa-chart-line fa-3x\" style=\"color: #2d6a4f;\"></i>
                        </div>`
                    }
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">\${article.title ? (article.title.length > 80 ? article.title.substring(0, 80) + '...' : article.title) : 'No title'}</h5>
                        <p class=\"card-text text-secondary\">\${article.description ? (article.description.length > 100 ? article.description.substring(0, 100) + '...' : article.description) : 'Click to read more...'}</p>
                        <div class=\"d-flex justify-content-between align-items-center mt-3\">
                            <small class=\"text-muted\">
                                <i class=\"fas fa-calendar-alt me-1\"></i>
                                \${formattedDate}
                            </small>
                            <a href=\"\${article.url}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary read-more\">
                                Read More <i class=\"fas fa-arrow-right ms-1\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            `;
            grid.appendChild(col);
        });
    }
    
    // Load default news on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Load default financial news
        setTimeout(() => {
            searchNews();
        }, 500);
    });
</script>

{% endblock %}", "home/financial_news.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\home\\financial_news.html.twig");
    }
}
