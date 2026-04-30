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

/* reclamation/create_ticket.html.twig */
class __TwigTemplate_332d35c55d98a5e659c6e2a7813340ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/create_ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/create_ticket.html.twig"));

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

        yield "Create Ticket - FinDinari";
        
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
        yield "<style>
    .ticket-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 120px;
    }

    .page-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 35px;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr;
        gap: 40px;
    }

    @media (max-width: 992px) {
        .content-grid { grid-template-columns: 1fr; }
    }

    .form-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    .form-group {
        margin-bottom: 30px !important;
        position: relative !important;
    }

    .form-card label {
        display: block !important;
        position: static !important;
        transform: none !important;
        margin: 0 0 10px 0 !important;
        padding: 0 !important;
        font-size: 0.95rem !important;
        font-weight: 700 !important;
        color: #374151 !important;
        opacity: 1 !important;
        visibility: visible !important;
        width: auto !important;
    }

    .form-control, .form-select {
        display: block !important;
        width: 100% !important;
        padding: 14px 18px !important;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px !important;
        font-size: 1rem !important;
        background-color: #f9fafb !important;
        color: #1f2937 !important;
    }

    .form-select option {
        color: #1f2937 !important;
        background-color: #fff !important;
    }

    .priority-options {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 15px !important;
        margin-top: 10px !important;
    }

    .priority-item {
        position: relative !important;
    }

    .priority-item input[type=\"radio\"] {
        position: absolute !important;
        opacity: 0 !important;
        width: 0 !important;
        height: 0 !important;
    }

    .priority-item label {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        height: 55px !important;
        border-radius: 12px !important;
        border: 2px solid #e5e7eb !important;
        background: #ffffff !important;
        color: #4b5563 !important;
        font-weight: 700 !important;
        margin: 0 !important;
        cursor: pointer !important;
    }

    .priority-item input#ticket_priorite_1:checked + label {
        border-color: #3b82f6 !important;
        background: #eff6ff !important;
        color: #3b82f6 !important;
    }

    .priority-item input#ticket_priorite_2:checked + label {
        border-color: #f59e0b !important;
        background: #fffbeb !important;
        color: #f59e0b !important;
    }

    .priority-item input#ticket_priorite_3:checked + label {
        border-color: #ef4444 !important;
        background: #fef2f2 !important;
        color: #ef4444 !important;
    }

    .file-upload-area {
        border: 2px dashed #d1d5db;
        border-radius: 16px;
        padding: 40px;
        text-align: center;
        background: #f9fafb;
    }
    
    .file-upload-area:hover {
        border-color: #22c55e;
    }

    .btn-submit {
        background: #22c55e;
        color: white;
        border: none;
        width: 100%;
        padding: 16px;
        border-radius: 14px;
        font-size: 1.1rem;
        font-weight: 700;
        cursor: pointer;
        margin-top: 20px;
    }

    .sidebar-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 30px;
        position: sticky;
        top: 140px;
    }

    .sidebar-title {
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-list {
        list-style: none;
        padding: 0;
    }

    .sidebar-list li {
        margin-bottom: 15px;
        display: flex;
        gap: 10px;
        font-size: 0.95rem;
    }

    .sidebar-list li::before {
        content: \"✓\";
        color: #22c55e;
        font-weight: 900;
    }
</style>

";
        // line 186
        yield "
<div class=\"ticket-container\">
    <div class=\"breadcrumb\">
        <a href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> &gt; 
        <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("support_center");
        yield "\">Support</a> &gt; 
        New Ticket
    </div>
    
    <h1 class=\"page-title\">Submit a Support Request</h1>
    
    <div class=\"content-grid\">
        <div class=\"form-card\">
            ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_start', ["attr" => ["id" => "ticket-form", "novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"form-group\">
                    ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "titre", [], "any", false, false, false, 201), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Subject"]);
        yield "
                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "titre", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Brief description of your issue"]]);
        yield "
                    <div class=\"form-error\">";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "titre", [], "any", false, false, false, 203), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "type", [], "any", false, false, false, 207), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Category"]);
        yield "
                    ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "type", [], "any", false, false, false, 208), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div class=\"form-error\">";
        // line 209
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "type", [], "any", false, false, false, 209), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Priority</label>
                    <div class=\"priority-options\">
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_1\" name=\"ticket[priorite]\" value=\"Low\">
                            <label for=\"ticket_priorite_1\">Low</label>
                        </div>
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_2\" name=\"ticket[priorite]\" value=\"Medium\" checked>
                            <label for=\"ticket_priorite_2\">Medium</label>
                        </div>
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_3\" name=\"ticket[priorite]\" value=\"High\">
                            <label for=\"ticket_priorite_3\">High</label>
                        </div>
                    </div>
                    ";
        // line 228
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "priorite", [], "any", false, false, false, 228), "setRendered", [], "method", false, false, false, 228);
        // line 229
        yield "                    <div class=\"form-error\">";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "priorite", [], "any", false, false, false, 229), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "description", [], "any", false, false, false, 233), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                    ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "description", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => "form-control", "rows" => "6", "placeholder" => "Please provide detailed information about your issue...", "onkeyup" => "updateCharCount(this)"]]);
        yield "
                    <div class=\"char-count\"><span id=\"charCount\">0</span> / 1000 characters</div>
                    <div class=\"form-error\">";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "description", [], "any", false, false, false, 236), 'errors');
        yield "</div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Attachments</label>
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "imageUrl", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "id", [], "any", false, false, false, 241), "html", null, true);
        yield "').click();\">
                        <div class=\"file-upload-icon\">
                            <i class=\"fas fa-upload\" style=\"color: #9ca3af;\"></i>
                        </div>
                        <div class=\"file-upload-text\">
                            <span>Click to upload</span> or drag and drop
                        </div>
                        <div class=\"file-upload-info\">PNG, JPG, PDF up to 10MB</div>
                        <!-- Provide a preview text for selected file -->
                        <div id=\"file-name-preview\" style=\"margin-top: 10px; font-weight: 500; color: #1f2937;\"></div>
                    </div>
                    <!-- The actual file input is hidden by the class in TicketType -->
                    ";
        // line 253
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "imageUrl", [], "any", false, false, false, 253), 'widget', ["attr" => ["onchange" => "showFileName(this)", "style" => "display: none;"]]);
        yield "
                    <div class=\"form-error\">";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "imageUrl", [], "any", false, false, false, 254), 'errors');
        yield "</div>
                </div>

                <button type=\"submit\" class=\"btn-submit\">Submit Ticket</button>
            ";
        // line 258
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div>
            <div class=\"sidebar-card\">
                <div class=\"sidebar-title\">
                    <i class=\"far fa-clock\" style=\"color: #22c55e;\"></i> Tips for faster support
                </div>
                <ul class=\"sidebar-list\">
                    <li>Be as specific as possible about your issue</li>
                    <li>Include transaction IDs or account numbers if relevant</li>
                    <li>Attach screenshots or error messages when applicable</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function updateCharCount(textarea) {
        document.getElementById('charCount').textContent = textarea.value.length;
    }
    
    function showFileName(input) {
        if (input.files && input.files[0]) {
            document.getElementById('file-name-preview').textContent = 'Selected: ' + input.files[0].name;
            document.querySelector('.file-upload-icon').innerHTML = '<i class=\"fas fa-check-circle\" style=\"color: #22c55e;\"></i>';
        } else {
            document.getElementById('file-name-preview').textContent = '';
            document.querySelector('.file-upload-icon').innerHTML = '<i class=\"fas fa-upload\" style=\"color: #9ca3af;\"></i>';
        }
    }
    
    // Drag and drop functionality
    const dropArea = document.querySelector('.file-upload-area');
    const fileInput = document.getElementById('";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "imageUrl", [], "any", false, false, false, 293), "vars", [], "any", false, false, false, 293), "id", [], "any", false, false, false, 293), "html", null, true);
        yield "');
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });
    
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }
    
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.style.borderColor = '#22c55e';
            dropArea.style.backgroundColor = '#f0fdf4';
        }, false);
    });
    
    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.style.borderColor = '#d1d5db';
            dropArea.style.backgroundColor = '#fdfdfd';
        }, false);
    });
    
    dropArea.addEventListener('drop', handleDrop, false);
    
    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        
        fileInput.files = files;
        showFileName(fileInput);
    }
    
    // Initialize character count on load
    document.addEventListener('DOMContentLoaded', function() {
        const textarea = document.querySelector('textarea.form-control');
        if(textarea) {
            updateCharCount(textarea);
        }
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
        return "reclamation/create_ticket.html.twig";
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
        return array (  443 => 293,  405 => 258,  398 => 254,  394 => 253,  379 => 241,  371 => 236,  366 => 234,  362 => 233,  354 => 229,  352 => 228,  330 => 209,  326 => 208,  322 => 207,  315 => 203,  311 => 202,  307 => 201,  301 => 198,  290 => 190,  286 => 189,  281 => 186,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Ticket - FinDinari{% endblock %}

{% block body %}
<style>
    .ticket-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        padding-top: 120px;
    }

    .page-title {
        font-size: 2.2rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 35px;
    }

    .content-grid {
        display: grid;
        grid-template-columns: 1.8fr 1fr;
        gap: 40px;
    }

    @media (max-width: 992px) {
        .content-grid { grid-template-columns: 1fr; }
    }

    .form-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }

    .form-group {
        margin-bottom: 30px !important;
        position: relative !important;
    }

    .form-card label {
        display: block !important;
        position: static !important;
        transform: none !important;
        margin: 0 0 10px 0 !important;
        padding: 0 !important;
        font-size: 0.95rem !important;
        font-weight: 700 !important;
        color: #374151 !important;
        opacity: 1 !important;
        visibility: visible !important;
        width: auto !important;
    }

    .form-control, .form-select {
        display: block !important;
        width: 100% !important;
        padding: 14px 18px !important;
        border: 1.5px solid #e5e7eb !important;
        border-radius: 12px !important;
        font-size: 1rem !important;
        background-color: #f9fafb !important;
        color: #1f2937 !important;
    }

    .form-select option {
        color: #1f2937 !important;
        background-color: #fff !important;
    }

    .priority-options {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 15px !important;
        margin-top: 10px !important;
    }

    .priority-item {
        position: relative !important;
    }

    .priority-item input[type=\"radio\"] {
        position: absolute !important;
        opacity: 0 !important;
        width: 0 !important;
        height: 0 !important;
    }

    .priority-item label {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        height: 55px !important;
        border-radius: 12px !important;
        border: 2px solid #e5e7eb !important;
        background: #ffffff !important;
        color: #4b5563 !important;
        font-weight: 700 !important;
        margin: 0 !important;
        cursor: pointer !important;
    }

    .priority-item input#ticket_priorite_1:checked + label {
        border-color: #3b82f6 !important;
        background: #eff6ff !important;
        color: #3b82f6 !important;
    }

    .priority-item input#ticket_priorite_2:checked + label {
        border-color: #f59e0b !important;
        background: #fffbeb !important;
        color: #f59e0b !important;
    }

    .priority-item input#ticket_priorite_3:checked + label {
        border-color: #ef4444 !important;
        background: #fef2f2 !important;
        color: #ef4444 !important;
    }

    .file-upload-area {
        border: 2px dashed #d1d5db;
        border-radius: 16px;
        padding: 40px;
        text-align: center;
        background: #f9fafb;
    }
    
    .file-upload-area:hover {
        border-color: #22c55e;
    }

    .btn-submit {
        background: #22c55e;
        color: white;
        border: none;
        width: 100%;
        padding: 16px;
        border-radius: 14px;
        font-size: 1.1rem;
        font-weight: 700;
        cursor: pointer;
        margin-top: 20px;
    }

    .sidebar-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        padding: 30px;
        position: sticky;
        top: 140px;
    }

    .sidebar-title {
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sidebar-list {
        list-style: none;
        padding: 0;
    }

    .sidebar-list li {
        margin-bottom: 15px;
        display: flex;
        gap: 10px;
        font-size: 0.95rem;
    }

    .sidebar-list li::before {
        content: \"✓\";
        color: #22c55e;
        font-weight: 900;
    }
</style>

{# Custom Support Header removed to show default navbar #}

<div class=\"ticket-container\">
    <div class=\"breadcrumb\">
        <a href=\"{{ path('app_home') }}\">Home</a> &gt; 
        <a href=\"{{ path('support_center') }}\">Support</a> &gt; 
        New Ticket
    </div>
    
    <h1 class=\"page-title\">Submit a Support Request</h1>
    
    <div class=\"content-grid\">
        <div class=\"form-card\">
            {{ form_start(form, {'attr': {'id': 'ticket-form', 'novalidate': 'novalidate'}}) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.titre, 'Subject', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Brief description of your issue'}}) }}
                    <div class=\"form-error\">{{ form_errors(form.titre) }}</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.type, 'Category', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                    <div class=\"form-error\">{{ form_errors(form.type) }}</div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Priority</label>
                    <div class=\"priority-options\">
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_1\" name=\"ticket[priorite]\" value=\"Low\">
                            <label for=\"ticket_priorite_1\">Low</label>
                        </div>
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_2\" name=\"ticket[priorite]\" value=\"Medium\" checked>
                            <label for=\"ticket_priorite_2\">Medium</label>
                        </div>
                        <div class=\"priority-item\">
                            <input type=\"radio\" id=\"ticket_priorite_3\" name=\"ticket[priorite]\" value=\"High\">
                            <label for=\"ticket_priorite_3\">High</label>
                        </div>
                    </div>
                    {% do form.priorite.setRendered() %}
                    <div class=\"form-error\">{{ form_errors(form.priorite) }}</div>
                </div>
                
                <div class=\"form-group\">
                    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': '6', 'placeholder': 'Please provide detailed information about your issue...', 'onkeyup': 'updateCharCount(this)'}}) }}
                    <div class=\"char-count\"><span id=\"charCount\">0</span> / 1000 characters</div>
                    <div class=\"form-error\">{{ form_errors(form.description) }}</div>
                </div>
                
                <div class=\"form-group\">
                    <label class=\"form-label\">Attachments</label>
                    <div class=\"file-upload-area\" onclick=\"document.getElementById('{{ form.imageUrl.vars.id }}').click();\">
                        <div class=\"file-upload-icon\">
                            <i class=\"fas fa-upload\" style=\"color: #9ca3af;\"></i>
                        </div>
                        <div class=\"file-upload-text\">
                            <span>Click to upload</span> or drag and drop
                        </div>
                        <div class=\"file-upload-info\">PNG, JPG, PDF up to 10MB</div>
                        <!-- Provide a preview text for selected file -->
                        <div id=\"file-name-preview\" style=\"margin-top: 10px; font-weight: 500; color: #1f2937;\"></div>
                    </div>
                    <!-- The actual file input is hidden by the class in TicketType -->
                    {{ form_widget(form.imageUrl, {'attr': {'onchange': 'showFileName(this)', 'style': 'display: none;'}}) }}
                    <div class=\"form-error\">{{ form_errors(form.imageUrl) }}</div>
                </div>

                <button type=\"submit\" class=\"btn-submit\">Submit Ticket</button>
            {{ form_end(form) }}
        </div>
        
        <div>
            <div class=\"sidebar-card\">
                <div class=\"sidebar-title\">
                    <i class=\"far fa-clock\" style=\"color: #22c55e;\"></i> Tips for faster support
                </div>
                <ul class=\"sidebar-list\">
                    <li>Be as specific as possible about your issue</li>
                    <li>Include transaction IDs or account numbers if relevant</li>
                    <li>Attach screenshots or error messages when applicable</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function updateCharCount(textarea) {
        document.getElementById('charCount').textContent = textarea.value.length;
    }
    
    function showFileName(input) {
        if (input.files && input.files[0]) {
            document.getElementById('file-name-preview').textContent = 'Selected: ' + input.files[0].name;
            document.querySelector('.file-upload-icon').innerHTML = '<i class=\"fas fa-check-circle\" style=\"color: #22c55e;\"></i>';
        } else {
            document.getElementById('file-name-preview').textContent = '';
            document.querySelector('.file-upload-icon').innerHTML = '<i class=\"fas fa-upload\" style=\"color: #9ca3af;\"></i>';
        }
    }
    
    // Drag and drop functionality
    const dropArea = document.querySelector('.file-upload-area');
    const fileInput = document.getElementById('{{ form.imageUrl.vars.id }}');
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });
    
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }
    
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.style.borderColor = '#22c55e';
            dropArea.style.backgroundColor = '#f0fdf4';
        }, false);
    });
    
    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => {
            dropArea.style.borderColor = '#d1d5db';
            dropArea.style.backgroundColor = '#fdfdfd';
        }, false);
    });
    
    dropArea.addEventListener('drop', handleDrop, false);
    
    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        
        fileInput.files = files;
        showFileName(fileInput);
    }
    
    // Initialize character count on load
    document.addEventListener('DOMContentLoaded', function() {
        const textarea = document.querySelector('textarea.form-control');
        if(textarea) {
            updateCharCount(textarea);
        }
    });
</script>
{% endblock %}
", "reclamation/create_ticket.html.twig", "C:\\projects\\whatever\\Esprit-PiWeb-3A27-Findinari\\templates\\reclamation\\create_ticket.html.twig");
    }
}
