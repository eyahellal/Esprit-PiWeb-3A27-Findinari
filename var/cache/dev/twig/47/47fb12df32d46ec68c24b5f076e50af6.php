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

/* management/categorie/new.html.twig */
class __TwigTemplate_d66b5a2c12d7e3adea8dca5f3802049a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "management/categorie/new.html.twig"));

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

        yield "Create New Category - Fin-Dinari";
        
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
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Create New Category</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_wallet_index");
        yield "\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Create Category</li>
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
        // line 31
        yield "                    <div class=\"rounded-top-4 p-4 text-white\"
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">New</p>
                                <h4 class=\"fw-bold mb-0\">Create Category</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-folder-plus fa-lg\"></i>
                            </div>
                        </div>
                    </div>

                    ";
        // line 46
        yield "                    <div class=\"card-body p-4\">

                        ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                            ";
        // line 51
        yield "                            <div class=\"mb-3\">
                                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Category Name"]);
        yield "
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g. Food, Transport, Health..."]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 58
        yield "                            <div class=\"mb-3\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label fw-bold", "style" => "color: #26474E;"], "label" => "Description"]);
        yield "
                                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Describe this category...", "rows" => "3"]]);
        yield "
                                <small class=\"text-muted\">Optional - describe what this category is for</small>
                                <div class=\"text-danger small mt-1\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 66
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Status</label>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-actif\"
                                         onclick=\"selectStatus('Active')\"
                                         style=\"border: 2px solid #e8f5e9; cursor: pointer; background: #e8f5e9;\">
                                        <i class=\"fas fa-check-circle fa-lg mb-2\" style=\"color: #2d6a4f;\"></i>
                                        <p class=\"mb-0 fw-bold small\" style=\"color: #2d6a4f;\">Active</p>
                                    </div>
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-inactif\"
                                         onclick=\"selectStatus('Inactive')\"
                                         style=\"border: 2px solid #f5f5f5; cursor: pointer; background: #f5f5f5;\">
                                        <i class=\"fas fa-times-circle fa-lg mb-2\" style=\"color: #999;\"></i>
                                        <p class=\"mb-0 fw-bold small\" style=\"color: #999;\">Inactive</p>
                                    </div>
                                </div>
                                ";
        // line 85
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "statut", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "d-none", "id" => "statut_field"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "statut", [], "any", false, false, false, 86), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 90
        yield "                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Color</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\" id=\"colorPalette\">
                                    ";
        // line 93
        $context["colors"] = ["#F27438", "#26474E", "#76CDCD", "#2CCED2", "#2d6a4f", "#e74c3c", "#9b59b6", "#3498db", "#f39c12", "#1abc9c"];
        // line 94
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 95
            yield "                                        <div class=\"color-swatch rounded-circle\"
                                             style=\"width:36px; height:36px; background: ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "; cursor: pointer; border: 3px solid transparent; transition: all 0.2s;\"
                                             onclick=\"selectColor('";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "', this)\"
                                             title=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["color"], "html", null, true);
            yield "\">
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['color'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                                </div>
                                ";
        // line 103
        yield "                                <div class=\"d-flex align-items-center gap-2\">
                                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "color", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control form-control-color", "id" => "color_field", "style" => "width: 50px; height: 38px; padding: 2px; border-radius: 8px;", "oninput" => "syncColor(this.value)"]]);
        yield "
                                    <span class=\"text-muted small\">Or pick a custom color</span>
                                    <span id=\"colorPreview\" class=\"rounded-3 px-3 py-1 text-white small fw-bold\"
                                          style=\"background: #F27438;\">#F27438</span>
                                </div>
                                <div class=\"text-danger small mt-1\">";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "color", [], "any", false, false, false, 109), 'errors');
        yield "</div>
                            </div>

                            ";
        // line 113
        yield "                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Icon</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\" id=\"iconPicker\">
                                    ";
        // line 116
        $context["icons"] = ["fa-utensils", "fa-car", "fa-heart-pulse", "fa-bag-shopping", "fa-graduation-cap", "fa-film", "fa-house", "fa-plane", "fa-chart-line", "fa-circle-dot", "fa-gamepad", "fa-shirt", "fa-pills", "fa-dumbbell", "fa-music", "fa-book", "fa-wifi", "fa-gas-pump", "fa-baby", "fa-paw"];
        // line 123
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 123, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 124
            yield "                                        <div class=\"icon-option rounded-3 d-flex align-items-center justify-content-center\"
                                             style=\"width:44px; height:44px; background: #f5f5f5; cursor: pointer; border: 2px solid transparent; transition: all 0.2s;\"
                                             onclick=\"selectIcon('";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "', this)\"
                                             title=\"";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\">
                                            <i class=\"fas ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["icon"], "html", null, true);
            yield "\" style=\"color: #26474E;\"></i>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['icon'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                                </div>
                                ";
        // line 133
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "icon", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "d-none", "id" => "icon_field"]]);
        yield "
                                <div class=\"d-flex align-items-center gap-2 mt-2\">
                                    <span class=\"text-muted small\">Selected icon:</span>
                                    <div class=\"rounded-3 px-3 py-1\"
                                         style=\"background: #F27438; color: white;\">
                                        <i class=\"fas fa-folder\" id=\"selectedIconPreview\"></i>
                                        <span id=\"selectedIconName\" class=\"small ms-1\">None</span>
                                    </div>
                                </div>
                                <div class=\"text-danger small mt-1\">";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "icon", [], "any", false, false, false, 142), 'errors');
        yield "</div>
                            </div>

                            <hr class=\"my-3\">

                            ";
        // line 148
        yield "                            <div class=\"d-flex gap-2\">
                                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\"
                                   class=\"btn btn-sm flex-fill\"
                                   style=\"background: #fde8e8; color: #c0392b; border-radius: 10px;\">
                                    <i class=\"fas fa-arrow-left me-1\"></i>Cancel
                                </a>
                                <button type=\"submit\"
                                        class=\"btn btn-sm flex-fill create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Create Category
                                </button>
                            </div>

                        ";
        // line 161
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_end');
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
    .categorie-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }

    .color-swatch:hover { transform: scale(1.2); }
    .color-swatch.selected { border-color: #26474E !important; transform: scale(1.2); }

    .icon-option:hover { background: #F27438 !important; }
    .icon-option:hover i { color: white !important; }
    .icon-option.selected {
        background: #F27438 !important;
        border-color: #26474E !important;
    }
    .icon-option.selected i { color: white !important; }

    .status-btn { transition: all 0.2s ease; }
    .status-btn.active-status {
        border-color: #2d6a4f !important;
        box-shadow: 0 4px 12px rgba(45,106,79,0.2);
    }
    .status-btn.inactive-status {
        border-color: #c0392b !important;
        box-shadow: 0 4px 12px rgba(192,57,43,0.2);
    }

    .create-btn:hover { background: #F27438 !important; color: white !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
</style>

<script>
    // Status Selection
    function selectStatus(value) {
        // Find the select element - Symfony generates it differently
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('statut') || select.name.includes('statut')) {
                for (let option of select.options) {
                    if (option.value === value) {
                        option.selected = true;
                    }
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

    // Icon Selection
    function selectIcon(iconValue, element) {
        // Find the select element for icon
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('icon') || select.name.includes('icon')) {
                for (let option of select.options) {
                    if (option.value === iconValue) {
                        option.selected = true;
                    }
                }
            }
        });

        // Update preview
        const preview = document.getElementById('selectedIconPreview');
        preview.className = 'fas ' + iconValue;
        document.getElementById('selectedIconName').textContent = iconValue;

        // Update selected styling
        document.querySelectorAll('.icon-option').forEach(i => {
            i.classList.remove('selected');
            i.style.background = '#f5f5f5';
            i.querySelector('i').style.color = '#26474E';
        });
        element.classList.add('selected');
        element.style.background = '#F27438';
        element.querySelector('i').style.color = 'white';
    }

    // Color Selection
    function selectColor(color, element) {
        // Find the color input
        const colorInput = document.querySelector('input[type=\"color\"]');
        if (colorInput) colorInput.value = color;

        document.getElementById('colorPreview').style.background = color;
        document.getElementById('colorPreview').textContent = color;

        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
            s.style.transform = 'scale(1)';
        });
        element.style.border = '3px solid #26474E';
        element.style.transform = 'scale(1.2)';
    }

    function syncColor(value) {
        document.getElementById('colorPreview').style.background = value;
        document.getElementById('colorPreview').textContent = value;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
        });
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        selectStatus('Active');
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
        return "management/categorie/new.html.twig";
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
        return array (  350 => 161,  335 => 149,  332 => 148,  324 => 142,  311 => 133,  308 => 131,  299 => 128,  295 => 127,  291 => 126,  287 => 124,  282 => 123,  280 => 116,  275 => 113,  269 => 109,  261 => 104,  258 => 103,  255 => 101,  246 => 98,  242 => 97,  238 => 96,  235 => 95,  230 => 94,  228 => 93,  223 => 90,  217 => 86,  212 => 85,  192 => 66,  186 => 62,  181 => 60,  177 => 59,  174 => 58,  168 => 54,  164 => 53,  160 => 52,  157 => 51,  152 => 48,  148 => 46,  132 => 31,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create New Category - Fin-Dinari{% endblock %}

{% block body %}

<section class=\"page-header\" style=\"background: #e8f5f5;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8 mx-auto text-center\">
                <h2 class=\"mb-3 text-capitalize\" style=\"color: #26474E;\">Create New Category</h2>
                <ul class=\"list-inline breadcrumbs text-capitalize\" style=\"font-weight:500\">
                    <li class=\"list-inline-item\"><a href=\"{{ path('app_home') }}\" style=\"color: #26474E;\">Home</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; <a href=\"{{ path('app_wallet_index') }}\" style=\"color: #26474E;\">Budget Management</a></li>
                    <li class=\"list-inline-item\">/ &nbsp; Create Category</li>
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
                         style=\"background: #F27438;\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <p class=\"mb-1 opacity-75 small text-uppercase fw-semibold\">New</p>
                                <h4 class=\"fw-bold mb-0\">Create Category</h4>
                            </div>
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center\"
                                 style=\"width:48px; height:48px; background: rgba(255,255,255,0.2);\">
                                <i class=\"fas fa-folder-plus fa-lg\"></i>
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

                            {# Status — Toggle Buttons #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Status</label>
                                <div class=\"d-flex gap-3\">
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-actif\"
                                         onclick=\"selectStatus('Active')\"
                                         style=\"border: 2px solid #e8f5e9; cursor: pointer; background: #e8f5e9;\">
                                        <i class=\"fas fa-check-circle fa-lg mb-2\" style=\"color: #2d6a4f;\"></i>
                                        <p class=\"mb-0 fw-bold small\" style=\"color: #2d6a4f;\">Active</p>
                                    </div>
                                    <div class=\"status-option flex-fill text-center p-3 rounded-3 status-btn\"
                                         id=\"status-inactif\"
                                         onclick=\"selectStatus('Inactive')\"
                                         style=\"border: 2px solid #f5f5f5; cursor: pointer; background: #f5f5f5;\">
                                        <i class=\"fas fa-times-circle fa-lg mb-2\" style=\"color: #999;\"></i>
                                        <p class=\"mb-0 fw-bold small\" style=\"color: #999;\">Inactive</p>
                                    </div>
                                </div>
                                {# Hidden statut field #}
                                {{ form_widget(form.statut, {'attr': {'class': 'd-none', 'id': 'statut_field'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.statut) }}</div>
                            </div>

                            {# Color — Modern Palette #}
                            <div class=\"mb-3\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Color</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\" id=\"colorPalette\">
                                    {% set colors = ['#F27438', '#26474E', '#76CDCD', '#2CCED2', '#2d6a4f', '#e74c3c', '#9b59b6', '#3498db', '#f39c12', '#1abc9c'] %}
                                    {% for color in colors %}
                                        <div class=\"color-swatch rounded-circle\"
                                             style=\"width:36px; height:36px; background: {{ color }}; cursor: pointer; border: 3px solid transparent; transition: all 0.2s;\"
                                             onclick=\"selectColor('{{ color }}', this)\"
                                             title=\"{{ color }}\">
                                        </div>
                                    {% endfor %}
                                </div>
                                {# Custom color picker #}
                                <div class=\"d-flex align-items-center gap-2\">
                                    {{ form_widget(form.color, {'attr': {'class': 'form-control form-control-color', 'id': 'color_field', 'style': 'width: 50px; height: 38px; padding: 2px; border-radius: 8px;', 'oninput': 'syncColor(this.value)'}}) }}
                                    <span class=\"text-muted small\">Or pick a custom color</span>
                                    <span id=\"colorPreview\" class=\"rounded-3 px-3 py-1 text-white small fw-bold\"
                                          style=\"background: #F27438;\">#F27438</span>
                                </div>
                                <div class=\"text-danger small mt-1\">{{ form_errors(form.color) }}</div>
                            </div>

                            {# Icon — Visual Picker #}
                            <div class=\"mb-4\">
                                <label class=\"form-label fw-bold\" style=\"color: #26474E;\">Icon</label>
                                <div class=\"d-flex gap-2 flex-wrap mb-2\" id=\"iconPicker\">
                                    {% set icons = [
                                        'fa-utensils', 'fa-car', 'fa-heart-pulse', 'fa-bag-shopping',
                                        'fa-graduation-cap', 'fa-film', 'fa-house', 'fa-plane',
                                        'fa-chart-line', 'fa-circle-dot', 'fa-gamepad', 'fa-shirt',
                                        'fa-pills', 'fa-dumbbell', 'fa-music', 'fa-book',
                                        'fa-wifi', 'fa-gas-pump', 'fa-baby', 'fa-paw'
                                    ] %}
                                    {% for icon in icons %}
                                        <div class=\"icon-option rounded-3 d-flex align-items-center justify-content-center\"
                                             style=\"width:44px; height:44px; background: #f5f5f5; cursor: pointer; border: 2px solid transparent; transition: all 0.2s;\"
                                             onclick=\"selectIcon('{{ icon }}', this)\"
                                             title=\"{{ icon }}\">
                                            <i class=\"fas {{ icon }}\" style=\"color: #26474E;\"></i>
                                        </div>
                                    {% endfor %}
                                </div>
                                {# Hidden icon field #}
                                {{ form_widget(form.icon, {'attr': {'class': 'd-none', 'id': 'icon_field'}}) }}
                                <div class=\"d-flex align-items-center gap-2 mt-2\">
                                    <span class=\"text-muted small\">Selected icon:</span>
                                    <div class=\"rounded-3 px-3 py-1\"
                                         style=\"background: #F27438; color: white;\">
                                        <i class=\"fas fa-folder\" id=\"selectedIconPreview\"></i>
                                        <span id=\"selectedIconName\" class=\"small ms-1\">None</span>
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
                                        class=\"btn btn-sm flex-fill create-btn\"
                                        style=\"background: #e8f5e9; color: #2d6a4f; border-radius: 10px;\">
                                    <i class=\"fas fa-save me-1\"></i>Create Category
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
    .categorie-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(242, 116, 56, 0.2) !important;
    }

    .color-swatch:hover { transform: scale(1.2); }
    .color-swatch.selected { border-color: #26474E !important; transform: scale(1.2); }

    .icon-option:hover { background: #F27438 !important; }
    .icon-option:hover i { color: white !important; }
    .icon-option.selected {
        background: #F27438 !important;
        border-color: #26474E !important;
    }
    .icon-option.selected i { color: white !important; }

    .status-btn { transition: all 0.2s ease; }
    .status-btn.active-status {
        border-color: #2d6a4f !important;
        box-shadow: 0 4px 12px rgba(45,106,79,0.2);
    }
    .status-btn.inactive-status {
        border-color: #c0392b !important;
        box-shadow: 0 4px 12px rgba(192,57,43,0.2);
    }

    .create-btn:hover { background: #F27438 !important; color: white !important; }
    .form-control:focus {
        border-color: #F27438 !important;
        box-shadow: 0 0 0 0.2rem rgba(242,116,56,0.2) !important;
    }
</style>

<script>
    // Status Selection
    function selectStatus(value) {
        // Find the select element - Symfony generates it differently
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('statut') || select.name.includes('statut')) {
                for (let option of select.options) {
                    if (option.value === value) {
                        option.selected = true;
                    }
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

    // Icon Selection
    function selectIcon(iconValue, element) {
        // Find the select element for icon
        const selects = document.querySelectorAll('select');
        selects.forEach(select => {
            if (select.id.includes('icon') || select.name.includes('icon')) {
                for (let option of select.options) {
                    if (option.value === iconValue) {
                        option.selected = true;
                    }
                }
            }
        });

        // Update preview
        const preview = document.getElementById('selectedIconPreview');
        preview.className = 'fas ' + iconValue;
        document.getElementById('selectedIconName').textContent = iconValue;

        // Update selected styling
        document.querySelectorAll('.icon-option').forEach(i => {
            i.classList.remove('selected');
            i.style.background = '#f5f5f5';
            i.querySelector('i').style.color = '#26474E';
        });
        element.classList.add('selected');
        element.style.background = '#F27438';
        element.querySelector('i').style.color = 'white';
    }

    // Color Selection
    function selectColor(color, element) {
        // Find the color input
        const colorInput = document.querySelector('input[type=\"color\"]');
        if (colorInput) colorInput.value = color;

        document.getElementById('colorPreview').style.background = color;
        document.getElementById('colorPreview').textContent = color;

        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
            s.style.transform = 'scale(1)';
        });
        element.style.border = '3px solid #26474E';
        element.style.transform = 'scale(1.2)';
    }

    function syncColor(value) {
        document.getElementById('colorPreview').style.background = value;
        document.getElementById('colorPreview').textContent = value;
        document.querySelectorAll('.color-swatch').forEach(s => {
            s.style.border = '3px solid transparent';
        });
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        selectStatus('Active');
    });
</script>

{% endblock %}", "management/categorie/new.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\management\\categorie\\new.html.twig");
    }
}
