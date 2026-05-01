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

/* management/categorie/edit.html.twig */
class __TwigTemplate_aeb3d811dfba597e2954c40108477173 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/edit.html.twig"));

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

        yield "Edit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Edit Category</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" style=\"color: #26474E;\">Categories</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4 categorie-card\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    ";
        // line 32
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: ";
        // line 33
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33), "html", null, true)) : ("#F27438"));
        yield ";\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing</p>
                                <h4 class=\"fw-bold mb-0\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        yield "</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas ";
        // line 41
        yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 41, $this->source); })()), "icon", [], "any", false, false, false, 41))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 41, $this->source); })()), "icon", [], "any", false, false, false, 41), "html", null, true)) : ("fa-folder"));
        yield " fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 47
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                            ";
        // line 52
        yield "                            <div class=\"mb-3\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Category Name"]);
        yield "
                                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g. Food, Transport, Health..."]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 59
        yield "                            <div class=\"mb-3\">
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Description"]);
        yield "
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Describe this category...", "rows" => "3"]]);
        yield "
                                <small class=\"text-muted\">Optional - describe what this category is for</small>
                                <div class=\"text-danger small mt-1\">";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 67
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Status</label>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-actif\"
                                         onclick=\"selectStatus('Active')\"
                                         style=\"border: 2px solid ";
        // line 73
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 73, $this->source); })()), "statut", [], "any", false, false, false, 73) == "Active")) ? ("#2d6a4f") : ("#f5f5f5"));
        yield ";
                                                background: ";
        // line 74
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 74, $this->source); })()), "statut", [], "any", false, false, false, 74) == "Active")) ? ("#e8f5e9") : ("#f5f5f5"));
        yield ";
                                                cursor: pointer;\">
                                        <i class=\"fas fa-check-circle fa-lg mb-2\"
                                           style=\"color: ";
        // line 77
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 77, $this->source); })()), "statut", [], "any", false, false, false, 77) == "Active")) ? ("#2d6a4f") : ("#999"));
        yield ";\"></i>
                                        <p class=\"mb-0 fw-bold small\"
                                           style=\"color: ";
        // line 79
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 79, $this->source); })()), "statut", [], "any", false, false, false, 79) == "Active")) ? ("#2d6a4f") : ("#999"));
        yield ";\">Active</p>
                                    </div>
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-inactif\"
                                         onclick=\"selectStatus('Inactive')\"
                                         style=\"border: 2px solid ";
        // line 84
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 84, $this->source); })()), "statut", [], "any", false, false, false, 84) == "Inactive")) ? ("#c0392b") : ("#f5f5f5"));
        yield ";
                                                background: ";
        // line 85
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 85, $this->source); })()), "statut", [], "any", false, false, false, 85) == "Inactive")) ? ("#fde8e8") : ("#f5f5f5"));
        yield ";
                                                cursor: pointer;\">
                                        <i class=\"fas fa-times-circle fa-lg mb-2\"
                                           style=\"color: ";
        // line 88
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 88, $this->source); })()), "statut", [], "any", false, false, false, 88) == "Inactive")) ? ("#c0392b") : ("#999"));
        yield ";\"></i>
                                        <p class=\"mb-0 fw-bold small\"
                                           style=\"color: ";
        // line 90
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 90, $this->source); })()), "statut", [], "any", false, false, false, 90) == "Inactive")) ? ("#c0392b") : ("#999"));
        yield ";\">Inactive</p>
                                    </div>
                                </div>
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "statut", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "d-none", "id" => "statut_field"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "statut", [], "any", false, false, false, 94), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 98
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Color</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\">
                                    ";
        // line 101
        $context["colors"] = ["#F27438", "#26474E", "#76CDCD", "#2CCED2", "#2d6a4f", "#e74c3c", "#9b59b6", "#3498db", "#f39c12", "#1abc9c"];
        // line 102
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 103
            yield "                                        <div class=\"color-swatch rounded-circle\"
                                             style=\"width:36px; height:36px; background: ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "; cursor: pointer;
                                                    border: 3px solid ";
            // line 105
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 105, $this->source); })()), "color", [], "any", false, false, false, 105) == $context["color"])) ? ("#26474E") : ("transparent"));
            yield ";
                                                    transform: ";
            // line 106
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 106, $this->source); })()), "color", [], "any", false, false, false, 106) == $context["color"])) ? ("scale(1.2)") : ("scale(1)"));
            yield ";
                                                    transition: all 0.2s;\"
                                             onclick=\"selectColor('";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "', this)\"
                                             title=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "\">
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['color'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                                </div>
                                <div class=\"d-flex align-items-center gap-2\">
                                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "color", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control form-control-color", "id" => "color_field", "style" => "width: 50px; height: 38px; padding: 2px; border-radius: 8px;", "oninput" => "syncColor(this.value)"]]);
        yield "
                                    <span class=\"text-muted small\">Or pick a custom color</span>
                                    <span id=\"colorPreview\" class=\"rounded-3 px-3 py-1 text-white small fw-bold\"
                                          style=\"background: ";
        // line 117
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "color", [], "any", true, true, false, 117) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 117, $this->source); })()), "color", [], "any", false, false, false, 117)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 117, $this->source); })()), "color", [], "any", false, false, false, 117), "html", null, true)) : ("#F27438"));
        yield ";\">
                                        ";
        // line 118
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "color", [], "any", true, true, false, 118) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 118, $this->source); })()), "color", [], "any", false, false, false, 118)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 118, $this->source); })()), "color", [], "any", false, false, false, 118), "html", null, true)) : ("#F27438"));
        yield "
                                    </span>
                                </div>
                                <div class=\"text-danger small mt-1\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "color", [], "any", false, false, false, 121), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 125
        yield "                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Icon</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\">
                                    ";
        // line 128
        $context["icons"] = ["fa-utensils", "fa-car", "fa-heart-pulse", "fa-bag-shopping", "fa-graduation-cap", "fa-film", "fa-house", "fa-plane", "fa-chart-line", "fa-circle-dot", "fa-gamepad", "fa-shirt", "fa-pills", "fa-dumbbell", "fa-music", "fa-book", "fa-wifi", "fa-gas-pump", "fa-baby", "fa-paw"];
        // line 135
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 136
            yield "                                        <div class=\"icon-option rounded-3 d-flex align-items-center justify-content-center\"
                                             style=\"width:44px; height:44px; cursor: pointer; transition: all 0.2s;
                                                    background: ";
            // line 138
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 138, $this->source); })()), "icon", [], "any", false, false, false, 138) == $context["icon"])) ? ("#F27438") : ("#f5f5f5"));
            yield ";
                                                    border: 2px solid ";
            // line 139
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 139, $this->source); })()), "icon", [], "any", false, false, false, 139) == $context["icon"])) ? ("#26474E") : ("transparent"));
            yield ";\"
                                             onclick=\"selectIcon('";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "', this)\"
                                             title=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\">
                                            <i class=\"fas ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\"
                                               style=\"color: ";
            // line 143
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 143, $this->source); })()), "icon", [], "any", false, false, false, 143) == $context["icon"])) ? ("white") : ("#26474E"));
            yield ";\"></i>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['icon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        yield "                                </div>
                                ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "icon", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "d-none", "id" => "icon_field"]]);
        yield "
                                <div class=\"d-flex align-items-center gap-2 mt-2\">
                                    <span class=\"text-muted small\">Selected icon:</span>
                                    <div class=\"rounded-3 px-3 py-1\"
                                         style=\"background: #F27438; color: white;\">
                                        <i class=\"fas ";
        // line 152
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", true, true, false, 152) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 152, $this->source); })()), "icon", [], "any", false, false, false, 152)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 152, $this->source); })()), "icon", [], "any", false, false, false, 152), "html", null, true)) : ("fa-folder"));
        yield "\" id=\"selectedIconPreview\"></i>
                                        <span id=\"selectedIconName\" class=\"small ms-1\">
                                            ";
        // line 154
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["categorie"] ?? null), "icon", [], "any", true, true, false, 154) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 154, $this->source); })()), "icon", [], "any", false, false, false, 154)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 154, $this->source); })()), "icon", [], "any", false, false, false, 154), "html", null, true)) : ("None"));
        yield "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"text-danger small mt-1\">";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "icon", [], "any", false, false, false, 158), 'errors');
        yield "</div>
                            </div>

                            <hr class=\"my-3\">

                            ";
        // line 164
        yield "                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Category
                                </button>
                            </div>

                        ";
        // line 177
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .categorie-card { transition: all 0.3s ease; }
    .color-swatch:hover { transform: scale(1.2) !important; }
    .icon-option:hover { background: #F27438 !important; }
    .icon-option:hover i { color: white !important; }
    .update-btn:hover { background: #F27438 !important; color: white !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
</style>

<script>
    function selectStatus(value) {
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('statut') || select.name.includes('statut')) {
                for (let option of select.options) {
                    if (option.value === value) option.selected = true;
                }
            }
        });

        const actifBtn = document.getElementById('status-actif');
        const inactifBtn = document.getElementById('status-inactif');

        if (value === 'Active') {
            actifBtn.style.border = '2px solid #2d6a4f';
            actifBtn.style.background = '#e8f5e9';
            actifBtn.querySelector('i').style.color = '#2d6a4f';
            actifBtn.querySelector('p').style.color = '#2d6a4f';
            inactifBtn.style.border = '2px solid #f5f5f5';
            inactifBtn.style.background = '#f5f5f5';
            inactifBtn.querySelector('i').style.color = '#999';
            inactifBtn.querySelector('p').style.color = '#999';
        } else {
            inactifBtn.style.border = '2px solid #c0392b';
            inactifBtn.style.background = '#fde8e8';
            inactifBtn.querySelector('i').style.color = '#c0392b';
            inactifBtn.querySelector('p').style.color = '#c0392b';
            actifBtn.style.border = '2px solid #f5f5f5';
            actifBtn.style.background = '#f5f5f5';
            actifBtn.querySelector('i').style.color = '#999';
            actifBtn.querySelector('p').style.color = '#999';
        }
    }

    function selectColor(color, element) {
        document.getElementById('color_field').value = color;
        document.getElementById('colorPreview').style.background = color;
        document.getElementById('colorPreview').textContent = color;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
            s.style.transform = 'scale(1)';
        });
        element.style.border = '3px solid #26474E';
        element.style.transform = 'scale(1.2)';

        document.querySelector('.rounded-top-4').style.background = color;
    }

    function syncColor(value) {
        document.getElementById('colorPreview').style.background = value;
        document.getElementById('colorPreview').textContent = value;
        document.querySelector('.rounded-top-4').style.background = value;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
        });
    }

    function selectIcon(iconValue, element) {
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('icon') || select.name.includes('icon')) {
                for (let option of select.options) {
                    if (option.value === iconValue) option.selected = true;
                }
            }
        });

        document.getElementById('selectedIconPreview').className = 'fas ' + iconValue;
        document.getElementById('selectedIconName').textContent = iconValue;

        document.querySelectorAll('.icon-option').forEach(i => {
            i.style.background = '#f5f5f5';
            i.style.border = '2px solid transparent';
            i.querySelector('i').style.color = '#26474E';
        });
        element.style.background = '#F27438';
        element.style.border = '2px solid #26474E';
        element.querySelector('i').style.color = 'white';

        
        document.querySelector('.rounded-top-4 .fas').className = 'fas ' + iconValue + ' fa-lg';
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
        return "management/categorie/edit.html.twig";
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
        return array (  430 => 177,  415 => 165,  412 => 164,  404 => 158,  397 => 154,  392 => 152,  384 => 147,  381 => 146,  372 => 143,  368 => 142,  364 => 141,  360 => 140,  356 => 139,  352 => 138,  348 => 136,  343 => 135,  341 => 128,  336 => 125,  330 => 121,  324 => 118,  320 => 117,  314 => 114,  310 => 112,  301 => 109,  297 => 108,  292 => 106,  288 => 105,  284 => 104,  281 => 103,  276 => 102,  274 => 101,  269 => 98,  263 => 94,  259 => 93,  253 => 90,  248 => 88,  242 => 85,  238 => 84,  230 => 79,  225 => 77,  219 => 74,  215 => 73,  207 => 67,  201 => 63,  196 => 61,  192 => 60,  189 => 59,  183 => 55,  179 => 54,  175 => 53,  172 => 52,  167 => 49,  163 => 47,  155 => 41,  148 => 37,  141 => 33,  138 => 32,  119 => 15,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit {{ categorie.nom }} - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Edit Category</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_services') }}\" style=\"color: #26474E;\">Services</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_categorie_index') }}\" style=\"color: #26474E;\">Categories</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Edit</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">

                <div class=\"card border-0 rounded-4 categorie-card\"
                     style=\"box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">

                    {# Card Header #}
                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: {{ categorie.color is not null ? categorie.color : '#F27438' }};\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">Editing</p>
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

                        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                            {# Name #}
                            <div class=\"mb-3\">
                                {{ form_label(form.nom, 'Category Name', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'e.g. Food, Transport, Health...'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.nom) }}</div>
                            </div>

                            {# Description #}
                            <div class=\"mb-3\">
                                {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-bold', 'style': 'color: #26474E;'}}) }}
                                {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Describe this category...', 'rows': '3'}}) }}
                                <small class=\"text-muted\">Optional - describe what this category is for</small>
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.description) }}</div>
                            </div>

                            {# Status Toggle #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Status</label>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-actif\"
                                         onclick=\"selectStatus('Active')\"
                                         style=\"border: 2px solid {{ categorie.statut == 'Active' ? '#2d6a4f' : '#f5f5f5' }};
                                                background: {{ categorie.statut == 'Active' ? '#e8f5e9' : '#f5f5f5' }};
                                                cursor: pointer;\">
                                        <i class=\"fas fa-check-circle fa-lg mb-2\"
                                           style=\"color: {{ categorie.statut == 'Active' ? '#2d6a4f' : '#999' }};\"></i>
                                        <p class=\"mb-0 fw-bold small\"
                                           style=\"color: {{ categorie.statut == 'Active' ? '#2d6a4f' : '#999' }};\">Active</p>
                                    </div>
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-inactif\"
                                         onclick=\"selectStatus('Inactive')\"
                                         style=\"border: 2px solid {{ categorie.statut == 'Inactive' ? '#c0392b' : '#f5f5f5' }};
                                                background: {{ categorie.statut == 'Inactive' ? '#fde8e8' : '#f5f5f5' }};
                                                cursor: pointer;\">
                                        <i class=\"fas fa-times-circle fa-lg mb-2\"
                                           style=\"color: {{ categorie.statut == 'Inactive' ? '#c0392b' : '#999' }};\"></i>
                                        <p class=\"mb-0 fw-bold small\"
                                           style=\"color: {{ categorie.statut == 'Inactive' ? '#c0392b' : '#999' }};\">Inactive</p>
                                    </div>
                                </div>
                                {{ form_widget(form.statut, {'attr': {'class': 'd-none', 'id': 'statut_field'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.statut) }}</div>
                            </div>

                            {# Color Palette #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Color</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\">
                                    {% set colors = ['#F27438', '#26474E', '#76CDCD', '#2CCED2', '#2d6a4f', '#e74c3c', '#9b59b6', '#3498db', '#f39c12', '#1abc9c'] %}
                                    {% for color in colors %}
                                        <div class=\"color-swatch rounded-circle\"
                                             style=\"width:36px; height:36px; background: {{ color }}; cursor: pointer;
                                                    border: 3px solid {{ categorie.color == color ? '#26474E' : 'transparent' }};
                                                    transform: {{ categorie.color == color ? 'scale(1.2)' : 'scale(1)' }};
                                                    transition: all 0.2s;\"
                                             onclick=\"selectColor('{{ color }}', this)\"
                                             title=\"{{ color }}\">
                                        </div>
                                    {% endfor %}
                                </div>
                                <div class=\"d-flex align-items-center gap-2\">
                                    {{ form_widget(form.color, {'attr': {'class': 'form-control form-control-color', 'id': 'color_field', 'style': 'width: 50px; height: 38px; padding: 2px; border-radius: 8px;', 'oninput': 'syncColor(this.value)'}}) }}
                                    <span class=\"text-muted small\">Or pick a custom color</span>
                                    <span id=\"colorPreview\" class=\"rounded-3 px-3 py-1 text-white small fw-bold\"
                                          style=\"background: {{ categorie.color ?? '#F27438' }};\">
                                        {{ categorie.color ?? '#F27438' }}
                                    </span>
                                </div>
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.color) }}</div>
                            </div>

                            {# Icon Picker #}
                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Icon</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\">
                                    {% set icons = [
                                        'fa-utensils', 'fa-car', 'fa-heart-pulse', 'fa-bag-shopping',
                                        'fa-graduation-cap', 'fa-film', 'fa-house', 'fa-plane',
                                        'fa-chart-line', 'fa-circle-dot', 'fa-gamepad', 'fa-shirt',
                                        'fa-pills', 'fa-dumbbell', 'fa-music', 'fa-book',
                                        'fa-wifi', 'fa-gas-pump', 'fa-baby', 'fa-paw'
                                    ] %}
                                    {% for icon in icons %}
                                        <div class=\"icon-option rounded-3 d-flex align-items-center justify-content-center\"
                                             style=\"width:44px; height:44px; cursor: pointer; transition: all 0.2s;
                                                    background: {{ categorie.icon == icon ? '#F27438' : '#f5f5f5' }};
                                                    border: 2px solid {{ categorie.icon == icon ? '#26474E' : 'transparent' }};\"
                                             onclick=\"selectIcon('{{ icon }}', this)\"
                                             title=\"{{ icon }}\">
                                            <i class=\"fas {{ icon }}\"
                                               style=\"color: {{ categorie.icon == icon ? 'white' : '#26474E' }};\"></i>
                                        </div>
                                    {% endfor %}
                                </div>
                                {{ form_widget(form.icon, {'attr': {'class': 'd-none', 'id': 'icon_field'}}) }}
                                <div class=\"d-flex align-items-center gap-2 mt-2\">
                                    <span class=\"text-muted small\">Selected icon:</span>
                                    <div class=\"rounded-3 px-3 py-1\"
                                         style=\"background: #F27438; color: white;\">
                                        <i class=\"fas {{ categorie.icon ?? 'fa-folder' }}\" id=\"selectedIconPreview\"></i>
                                        <span id=\"selectedIconName\" class=\"small ms-1\">
                                            {{ categorie.icon ?? 'None' }}
                                        </span>
                                    </div>
                                </div>
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.icon) }}</div>
                            </div>

                            <hr class=\"my-3\">

                            {# Buttons #}
                            <div class=\"d-flex gap-2\">
                                <a href=\"{{ path('app_categorie_index') }}\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill update-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Update Category
                                </button>
                            </div>

                        {{ form_end(form) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .rounded-top-4 { border-radius: 1rem 1rem 0 0 !important; }
    .rounded-4 { border-radius: 1rem !important; }
    .categorie-card { transition: all 0.3s ease; }
    .color-swatch:hover { transform: scale(1.2) !important; }
    .icon-option:hover { background: #F27438 !important; }
    .icon-option:hover i { color: white !important; }
    .update-btn:hover { background: #F27438 !important; color: white !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
</style>

<script>
    function selectStatus(value) {
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('statut') || select.name.includes('statut')) {
                for (let option of select.options) {
                    if (option.value === value) option.selected = true;
                }
            }
        });

        const actifBtn = document.getElementById('status-actif');
        const inactifBtn = document.getElementById('status-inactif');

        if (value === 'Active') {
            actifBtn.style.border = '2px solid #2d6a4f';
            actifBtn.style.background = '#e8f5e9';
            actifBtn.querySelector('i').style.color = '#2d6a4f';
            actifBtn.querySelector('p').style.color = '#2d6a4f';
            inactifBtn.style.border = '2px solid #f5f5f5';
            inactifBtn.style.background = '#f5f5f5';
            inactifBtn.querySelector('i').style.color = '#999';
            inactifBtn.querySelector('p').style.color = '#999';
        } else {
            inactifBtn.style.border = '2px solid #c0392b';
            inactifBtn.style.background = '#fde8e8';
            inactifBtn.querySelector('i').style.color = '#c0392b';
            inactifBtn.querySelector('p').style.color = '#c0392b';
            actifBtn.style.border = '2px solid #f5f5f5';
            actifBtn.style.background = '#f5f5f5';
            actifBtn.querySelector('i').style.color = '#999';
            actifBtn.querySelector('p').style.color = '#999';
        }
    }

    function selectColor(color, element) {
        document.getElementById('color_field').value = color;
        document.getElementById('colorPreview').style.background = color;
        document.getElementById('colorPreview').textContent = color;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
            s.style.transform = 'scale(1)';
        });
        element.style.border = '3px solid #26474E';
        element.style.transform = 'scale(1.2)';

        document.querySelector('.rounded-top-4').style.background = color;
    }

    function syncColor(value) {
        document.getElementById('colorPreview').style.background = value;
        document.getElementById('colorPreview').textContent = value;
        document.querySelector('.rounded-top-4').style.background = value;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
        });
    }

    function selectIcon(iconValue, element) {
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('icon') || select.name.includes('icon')) {
                for (let option of select.options) {
                    if (option.value === iconValue) option.selected = true;
                }
            }
        });

        document.getElementById('selectedIconPreview').className = 'fas ' + iconValue;
        document.getElementById('selectedIconName').textContent = iconValue;

        document.querySelectorAll('.icon-option').forEach(i => {
            i.style.background = '#f5f5f5';
            i.style.border = '2px solid transparent';
            i.querySelector('i').style.color = '#26474E';
        });
        element.style.background = '#F27438';
        element.style.border = '2px solid #26474E';
        element.querySelector('i').style.color = 'white';

        
        document.querySelector('.rounded-top-4 .fas').className = 'fas ' + iconValue + ' fa-lg';
    }
</script>

{% endblock %}", "management/categorie/edit.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\categorie\\edit.html.twig");
    }
}
