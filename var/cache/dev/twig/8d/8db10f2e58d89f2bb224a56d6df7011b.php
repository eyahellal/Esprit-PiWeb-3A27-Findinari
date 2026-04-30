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

/* management/categorie/index.html.twig */
class __TwigTemplate_f016b34311c1b98a22eb5c4da383f090 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "management/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/index.html.twig"));

        // line 5
        $context["active_tab"] = "categorie";
        // line 1
        $this->parent = $this->load("management/dashboard.html.twig", 1);
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

        yield "Categories - Fin-Dinari";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "
<turbo-frame id=\"content-frame\">

    ";
        // line 12
        yield "    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-folder me-2\"></i>Categories
            </h1>
            <p class=\"text-muted mb-0\">Manage your spending categories</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\" class=\"btn btn-lg px-4\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Category
            </a>
        </div>
    </div>

    ";
        // line 28
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Categories</p>
                        <h2 class=\"fw-bold mb-0\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-folder fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Active</p>
                        <h2 class=\"fw-bold mb-0\">
                            ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 51, $this->source); })()), "statut", [], "any", false, false, false, 51) == "Active"); })), "html", null, true);
        yield "
                        </h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-check-circle fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #c0392b; box-shadow: 0 4px 20px rgba(192,57,43,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Inactive</p>
                        <h2 class=\"fw-bold mb-0\">
                            ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 68, $this->source); })()), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 68, $this->source); })()), "statut", [], "any", false, false, false, 68) == "Inactive"); })), "html", null, true);
        yield "
                        </h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-times-circle fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        // line 81
        yield "<div class=\"row mb-4\">
    <div class=\"col-lg-8\">
        <form method=\"get\" action=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
              data-turbo-frame=\"content-frame\"
              class=\"d-flex gap-2 align-items-center\">

            ";
        // line 88
        yield "            <div class=\"input-group\" style=\"height: 44px;\">
                <span class=\"input-group-text border-0 bg-white\"
                      style=\"border-radius: 12px 0 0 12px;\">
                    <i class=\"fas fa-search text-muted\"></i>
                </span>
                <input type=\"text\" name=\"search\" class=\"form-control border-0 shadow-sm\"
                       placeholder=\"Search by name...\"
                       value=\"";
        // line 95
        yield (((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["search"], "html", null, true)) : (""));
        yield "\"
                       style=\"height: 44px;\">
            </div>

           ";
        // line 100
        yield "<select name=\"statut\" class=\"form-select shadow-sm\"
        style=\"border-radius: 12px; 
               width: 160px; 
               height: 44px; 
               border: none;
               flex-shrink: 0;
               background-color: white;
               color: #26474E;
               font-weight: 600;
               cursor: pointer;
               appearance: none;
               background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 16 16%22><path fill=%22%23F27438%22 d=%22M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z%22/></svg>');
               background-repeat: no-repeat;
               background-position: right 12px center;
               background-size: 12px;
               padding-right: 36px;\">
    <option value=\"\" style=\"color: #26474E;\">All Status</option>
    <option value=\"Active\" 
            ";
        // line 118
        yield ((((((array_key_exists("statut", $context) &&  !(null === $context["statut"]))) ? ($context["statut"]) : ("")) == "Active")) ? ("selected") : (""));
        yield "
            style=\"color: #2d6a4f; font-weight: 600;\">
        Active
    </option>
    <option value=\"Inactive\" 
            ";
        // line 123
        yield ((((((array_key_exists("statut", $context) &&  !(null === $context["statut"]))) ? ($context["statut"]) : ("")) == "Inactive")) ? ("selected") : (""));
        yield "
            style=\"color: #c0392b; font-weight: 600;\">
        Inactive
    </option>
</select>
            ";
        // line 129
        yield "            <button type=\"submit\" class=\"btn px-4 shadow-sm\"
                    style=\"background: #F27438; color: white; border-radius: 12px; height: 44px; white-space: nowrap; flex-shrink: 0;\">
                <i class=\"fas fa-search me-1\"></i>Search
            </button>

            ";
        // line 135
        yield "            ";
        if (((((array_key_exists("search", $context) &&  !(null === $context["search"]))) ? ($context["search"]) : ("")) || (((array_key_exists("statut", $context) &&  !(null === $context["statut"]))) ? ($context["statut"]) : ("")))) {
            // line 136
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
            yield "\"
                   class=\"btn btn-outline-secondary shadow-sm\"
                   style=\"border-radius: 12px; height: 44px; white-space: nowrap; flex-shrink: 0;\">
                    <i class=\"fas fa-times me-1\"></i>Clear
                </a>
            ";
        }
        // line 142
        yield "
        </form>
    </div>
</div>

    ";
        // line 148
        yield "    <div class=\"row\">
        ";
        // line 149
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 149, $this->source); })()))) {
            // line 150
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-folder-open fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No categories found</h4>
                    <p class=\"text-muted\">Start by creating your first category</p>
                    <a href=\"";
            // line 155
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
            yield "\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Category
                    </a>
                </div>
            </div>
        ";
        } else {
            // line 162
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 163
                yield "                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 categorie-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        ";
                // line 168
                yield "                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: ";
                // line 169
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 169))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "color", [], "any", false, false, false, 169), "html", null, true)) : ("#F27438"));
                yield ";\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Category</p>
                                    <h4 class=\"fw-bold mb-0\">";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 173), "html", null, true);
                yield "</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas ";
                // line 177
                yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 177))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "icon", [], "any", false, false, false, 177), "html", null, true)) : ("fa-folder"));
                yield " fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        ";
                // line 183
                yield "                        <div class=\"card-body p-4\">

                            ";
                // line 185
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 186
                    yield "                                <p class=\"text-muted small mb-3\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 186), "html", null, true);
                    yield "</p>
                            ";
                } else {
                    // line 188
                    yield "                                <p class=\"text-muted small mb-3 fst-italic\">No description</p>
                            ";
                }
                // line 190
                yield "
                            ";
                // line 192
                yield "                            <div class=\"d-flex align-items-center gap-2 mb-3\">
                                ";
                // line 193
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "statut", [], "any", false, false, false, 193) == "Active")) {
                    // line 194
                    yield "                                    <span class=\"badge rounded-pill px-3 py-2\"
                                          style=\"background: #e8f5e9; color: #2d6a4f;\">
                                        <i class=\"fas fa-check-circle me-1\"></i>Active
                                    </span>
                                ";
                } else {
                    // line 199
                    yield "                                    <span class=\"badge rounded-pill px-3 py-2\"
                                          style=\"background: #fde8e8; color: #c0392b;\">
                                        <i class=\"fas fa-times-circle me-1\"></i>Inactive
                                    </span>
                                ";
                }
                // line 204
                yield "                            </div>

                            <hr class=\"my-3\">

                            ";
                // line 209
                yield "                            <div class=\"d-flex gap-2\">
                                <a href=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 210)]), "html", null, true);
                yield "\"
                                   class=\"btn btn-sm flex-fill edit-btn\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 215)]), "html", null, true);
                yield "\"
                                      onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 217))), "html", null, true);
                yield "\">
                                    <button class=\"btn btn-sm delete-btn\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "        ";
        }
        // line 229
        yield "    </div>
";
        // line 231
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 231, $this->source); })()) > 1)) {
            // line 232
            yield "    <div class=\"d-flex justify-content-center mt-4\">
        <nav>
            <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                <li class=\"page-item ";
            // line 235
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 235, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link rounded-3 border-0 px-3\"
                       href=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 237, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 237, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 237, $this->source); })())]), "html", null, true);
            yield "\"
                       style=\"color: ";
            // line 238
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 238, $this->source); })()) == 1)) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 238, $this->source); })()) == 1)) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>

                ";
            // line 243
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 243, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 244
                yield "                    <li class=\"page-item\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => $context["p"], "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 246, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 246, $this->source); })())]), "html", null, true);
                yield "\"
                           style=\"background: ";
                // line 247
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 247, $this->source); })()))) ? ("#F27438") : ("#f5f5f5"));
                yield ";
                                  color: ";
                // line 248
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 248, $this->source); })()))) ? ("white") : ("#26474E"));
                yield ";
                                  font-weight: ";
                // line 249
                yield ((($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 249, $this->source); })()))) ? ("bold") : ("normal"));
                yield ";\">
                            ";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["p"], "html", null, true);
                yield "
                        </a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            yield "
                <li class=\"page-item ";
            // line 255
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 255, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 255, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link rounded-3 border-0 px-3\"
                       href=\"";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 257, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 257, $this->source); })()), "statut" => (isset($context["statut"]) || array_key_exists("statut", $context) ? $context["statut"] : (function () { throw new RuntimeError('Variable "statut" does not exist.', 257, $this->source); })())]), "html", null, true);
            yield "\"
                       style=\"color: ";
            // line 258
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 258, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 258, $this->source); })()))) ? ("#999") : ("#26474E"));
            yield "; background: ";
            yield ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 258, $this->source); })()) == (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 258, $this->source); })()))) ? ("#f5f5f5") : ("#e8f5f5"));
            yield ";\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <p class=\"text-center text-muted small mt-2\">
        Showing ";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 267, $this->source); })()) - 1) * 6) + 1), "html", null, true);
            yield "-";
            if ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 267, $this->source); })()) * 6) > (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 267, $this->source); })()))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 267, $this->source); })()), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 267, $this->source); })()) * 6), "html", null, true);
            }
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 267, $this->source); })()), "html", null, true);
            yield " categories
    </p>
";
        }
        // line 270
        yield "</turbo-frame>

<style>
    .categorie-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .edit-btn:hover { background: #F27438 !important; color: white !important; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
    select.form-select:focus {
    border-color: #F27438 !important;
    box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    outline: none;
}

select.form-select option:hover {
    background-color: #F27438 !important;
    color: white !important;
}
</style>

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
        return "management/categorie/index.html.twig";
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
        return array (  522 => 270,  508 => 267,  494 => 258,  490 => 257,  485 => 255,  482 => 254,  472 => 250,  468 => 249,  464 => 248,  460 => 247,  456 => 246,  452 => 244,  448 => 243,  438 => 238,  434 => 237,  429 => 235,  424 => 232,  422 => 231,  419 => 229,  416 => 228,  399 => 217,  394 => 215,  386 => 210,  383 => 209,  377 => 204,  370 => 199,  363 => 194,  361 => 193,  358 => 192,  355 => 190,  351 => 188,  345 => 186,  343 => 185,  339 => 183,  331 => 177,  324 => 173,  317 => 169,  314 => 168,  308 => 163,  303 => 162,  293 => 155,  286 => 150,  284 => 149,  281 => 148,  274 => 142,  264 => 136,  261 => 135,  254 => 129,  246 => 123,  238 => 118,  218 => 100,  211 => 95,  202 => 88,  195 => 83,  191 => 81,  176 => 68,  156 => 51,  137 => 35,  128 => 28,  118 => 20,  108 => 12,  103 => 8,  90 => 7,  67 => 3,  56 => 1,  54 => 5,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'management/dashboard.html.twig' %}

{% block title %}Categories - Fin-Dinari{% endblock %}

{% set active_tab = 'categorie' %}

{% block content %}

<turbo-frame id=\"content-frame\">

    {# Header #}
    <div class=\"row mb-4 align-items-center\">
        <div class=\"col-lg-8\">
            <h1 class=\"fw-bold mb-1\" style=\"color: #26474E;\">
                <i class=\"fas fa-folder me-2\"></i>Categories
            </h1>
            <p class=\"text-muted mb-0\">Manage your spending categories</p>
        </div>
        <div class=\"col-lg-4 text-end\">
            <a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-lg px-4\"
               style=\"background: linear-gradient(135deg, #F27438, #F9968B); color: white; border: none; border-radius: 12px; box-shadow: 0 4px 15px rgba(242,116,56,0.3);\">
                <i class=\"fas fa-plus me-2\"></i>New Category
            </a>
        </div>
    </div>

    {# Stats Bar #}
    <div class=\"row mb-4\">
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #26474E; box-shadow: 0 4px 20px rgba(38,71,78,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Total Categories</p>
                        <h2 class=\"fw-bold mb-0\">{{ total }}</h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-folder fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #2d6a4f; box-shadow: 0 4px 20px rgba(45,106,79,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Active</p>
                        <h2 class=\"fw-bold mb-0\">
                            {{ categories|filter(c => c.statut == 'Active')|length }}
                        </h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-check-circle fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-3\">
            <div class=\"rounded-4 p-4 text-white h-100\"
                 style=\"background: #c0392b; box-shadow: 0 4px 20px rgba(192,57,43,0.3);\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <div>
                        <p class=\"mb-1 opacity-75 small fw-semibold text-uppercase\">Inactive</p>
                        <h2 class=\"fw-bold mb-0\">
                            {{ categories|filter(c => c.statut == 'Inactive')|length }}
                        </h2>
                    </div>
                    <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                         style=\"width:56px; height:56px; background: rgba(255,255,255,0.2);\">
                        <i class=\"fas fa-times-circle fa-lg\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

{# Search + Filter Bar #}
<div class=\"row mb-4\">
    <div class=\"col-lg-8\">
        <form method=\"get\" action=\"{{ path('app_categorie_index') }}\"
              data-turbo-frame=\"content-frame\"
              class=\"d-flex gap-2 align-items-center\">

            {# Search Input #}
            <div class=\"input-group\" style=\"height: 44px;\">
                <span class=\"input-group-text border-0 bg-white\"
                      style=\"border-radius: 12px 0 0 12px;\">
                    <i class=\"fas fa-search text-muted\"></i>
                </span>
                <input type=\"text\" name=\"search\" class=\"form-control border-0 shadow-sm\"
                       placeholder=\"Search by name...\"
                       value=\"{{ search ?? '' }}\"
                       style=\"height: 44px;\">
            </div>

           {# Filter by Status #}
<select name=\"statut\" class=\"form-select shadow-sm\"
        style=\"border-radius: 12px; 
               width: 160px; 
               height: 44px; 
               border: none;
               flex-shrink: 0;
               background-color: white;
               color: #26474E;
               font-weight: 600;
               cursor: pointer;
               appearance: none;
               background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 16 16%22><path fill=%22%23F27438%22 d=%22M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z%22/></svg>');
               background-repeat: no-repeat;
               background-position: right 12px center;
               background-size: 12px;
               padding-right: 36px;\">
    <option value=\"\" style=\"color: #26474E;\">All Status</option>
    <option value=\"Active\" 
            {{ (statut ?? '') == 'Active' ? 'selected' : '' }}
            style=\"color: #2d6a4f; font-weight: 600;\">
        Active
    </option>
    <option value=\"Inactive\" 
            {{ (statut ?? '') == 'Inactive' ? 'selected' : '' }}
            style=\"color: #c0392b; font-weight: 600;\">
        Inactive
    </option>
</select>
            {# Search Button #}
            <button type=\"submit\" class=\"btn px-4 shadow-sm\"
                    style=\"background: #F27438; color: white; border-radius: 12px; height: 44px; white-space: nowrap; flex-shrink: 0;\">
                <i class=\"fas fa-search me-1\"></i>Search
            </button>

            {# Clear Button #}
            {% if (search ?? '') or (statut ?? '') %}
                <a href=\"{{ path('app_categorie_index') }}\"
                   class=\"btn btn-outline-secondary shadow-sm\"
                   style=\"border-radius: 12px; height: 44px; white-space: nowrap; flex-shrink: 0;\">
                    <i class=\"fas fa-times me-1\"></i>Clear
                </a>
            {% endif %}

        </form>
    </div>
</div>

    {# Categories Grid #}
    <div class=\"row\">
        {% if categories is empty %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"rounded-4 p-5\" style=\"background: #f8fffe; border: 2px dashed #F27438;\">
                    <i class=\"fas fa-folder-open fa-3x mb-3\" style=\"color: #F27438;\"></i>
                    <h4 style=\"color: #26474E;\">No categories found</h4>
                    <p class=\"text-muted\">Start by creating your first category</p>
                    <a href=\"{{ path('app_categorie_new') }}\" class=\"btn mt-2\"
                       style=\"background: #F27438; color: white; border-radius: 12px;\">
                        <i class=\"fas fa-plus me-2\"></i>Create Category
                    </a>
                </div>
            </div>
        {% else %}
            {% for categorie in categories %}
                <div class=\"col-lg-4 col-md-6 mb-4\">
                    <div class=\"card h-100 border-0 rounded-4 categorie-card\"
                         style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s ease;\">

                        {# Card Header #}
                        <div class=\"rounded-top-4 p-4 text-white\"
                             style=\"background: {{ categorie.color is not null ? categorie.color : '#F27438' }};\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Category</p>
                                    <h4 class=\"fw-bold mb-0\">{{ categorie.nom }}</h4>
                                </div>
                                <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                     style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                    <i class=\"fas {{ categorie.icon is not null ? categorie.icon : 'fa-folder' }} fa-lg\"></i>
                                </div>
                            </div>
                        </div>

                        {# Card Body #}
                        <div class=\"card-body p-4\">

                            {% if categorie.description %}
                                <p class=\"text-muted small mb-3\">{{ categorie.description }}</p>
                            {% else %}
                                <p class=\"text-muted small mb-3 fst-italic\">No description</p>
                            {% endif %}

                            {# Status Badge #}
                            <div class=\"d-flex align-items-center gap-2 mb-3\">
                                {% if categorie.statut == 'Active' %}
                                    <span class=\"badge rounded-pill px-3 py-2\"
                                          style=\"background: #e8f5e9; color: #2d6a4f;\">
                                        <i class=\"fas fa-check-circle me-1\"></i>Active
                                    </span>
                                {% else %}
                                    <span class=\"badge rounded-pill px-3 py-2\"
                                          style=\"background: #fde8e8; color: #c0392b;\">
                                        <i class=\"fas fa-times-circle me-1\"></i>Inactive
                                    </span>
                                {% endif %}
                            </div>

                            <hr class=\"my-3\">

                            {# Actions #}
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\"
                                   class=\"btn btn-sm flex-fill edit-btn\"
                                   style=\"background: #e3f2fd; color: #1e3a5f; border-radius: 10px;\">
                                    <i class=\"fas fa-edit me-1\"></i>Edit
                                </a>
                                <form method=\"post\" action=\"{{ path('app_categorie_delete', {'id': categorie.id}) }}\"
                                      onsubmit=\"return confirm('Are you sure?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ categorie.id) }}\">
                                    <button class=\"btn btn-sm delete-btn\"
                                            style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{# Pagination #}
{% if totalPages > 1 %}
    <div class=\"d-flex justify-content-center mt-4\">
        <nav>
            <ul class=\"pagination mb-0\" style=\"gap: 4px;\">
                <li class=\"page-item {{ currentPage == 1 ? 'disabled' : '' }}\">
                    <a class=\"page-link rounded-3 border-0 px-3\"
                       href=\"{{ path('app_categorie_index', {page: currentPage - 1, search: search, statut: statut}) }}\"
                       style=\"color: {{ currentPage == 1 ? '#999' : '#26474E' }}; background: {{ currentPage == 1 ? '#f5f5f5' : '#e8f5f5' }};\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                </li>

                {% for p in 1..totalPages %}
                    <li class=\"page-item\">
                        <a class=\"page-link rounded-3 border-0 px-3\"
                           href=\"{{ path('app_categorie_index', {page: p, search: search, statut: statut}) }}\"
                           style=\"background: {{ p == currentPage ? '#F27438' : '#f5f5f5' }};
                                  color: {{ p == currentPage ? 'white' : '#26474E' }};
                                  font-weight: {{ p == currentPage ? 'bold' : 'normal' }};\">
                            {{ p }}
                        </a>
                    </li>
                {% endfor %}

                <li class=\"page-item {{ currentPage == totalPages ? 'disabled' : '' }}\">
                    <a class=\"page-link rounded-3 border-0 px-3\"
                       href=\"{{ path('app_categorie_index', {page: currentPage + 1, search: search, statut: statut}) }}\"
                       style=\"color: {{ currentPage == totalPages ? '#999' : '#26474E' }}; background: {{ currentPage == totalPages ? '#f5f5f5' : '#e8f5f5' }};\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <p class=\"text-center text-muted small mt-2\">
        Showing {{ (currentPage - 1) * 6 + 1 }}-{% if currentPage * 6 > total %}{{ total }}{% else %}{{ currentPage * 6 }}{% endif %} of {{ total }} categories
    </p>
{% endif %}
</turbo-frame>

<style>
    .categorie-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .edit-btn:hover { background: #F27438 !important; color: white !important; }
    .delete-btn:hover { background: #c0392b !important; color: white !important; }
    select.form-select:focus {
    border-color: #F27438 !important;
    box-shadow: 0 0 0 0.2rem rgba(242, 116, 56, 0.2) !important;
    outline: none;
}

select.form-select option:hover {
    background-color: #F27438 !important;
    color: white !important;
}
</style>

{% endblock %}", "management/categorie/index.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\categorie\\index.html.twig");
    }
}
