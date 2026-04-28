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

/* register/register.html.twig */
class __TwigTemplate_df070932c9cdfea9f1c1efec5e12f5a5 extends Template
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
        return "front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $this->parent = $this->load("front/layout.html.twig", 1);
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

        yield "Register";
        
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
        yield "<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"bg-white rounded shadow p-5\">
                    <h2 class=\"mb-4\">Create Account</h2>

                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "                        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
                    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

                    ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                        <div class=\"mb-3\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), 'label');
        yield "
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "id" => "register_nom"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'label');
        yield "
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "id" => "register_prenom"]]);
        yield "
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "gmail", [], "any", false, false, false, 36), 'label');
        yield "
                            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "gmail", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "id" => "register_gmail"]]);
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'label');
        yield "
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <small class=\"text-muted\">Password must be entered manually.</small>
                        </div>

                        <div class=\"mb-3\">
                            <button type=\"button\" id=\"voiceFillBtn\" class=\"btn btn-secondary w-100 mb-2\">
                                🎤 Fill with Voice
                            </button>

                            <div id=\"voiceStatus\" class=\"alert alert-info d-none\"></div>
                            <div id=\"voiceTranscript\" class=\"small text-muted mt-2\"></div>
                        </div>

                        <div class=\"mb-4 text-center\">
                            <div class=\"g-recaptcha\" data-sitekey=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "\"></div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            Register
                        </button>

                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const voiceBtn = document.getElementById('voiceFillBtn');
    const statusBox = document.getElementById('voiceStatus');
    const transcriptBox = document.getElementById('voiceTranscript');

    const nomInput = document.getElementById('register_nom');
    const prenomInput = document.getElementById('register_prenom');
    const gmailInput = document.getElementById('register_gmail');

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    function showStatus(message, type = 'info') {
        statusBox.className = 'alert alert-' + type;
        statusBox.classList.remove('d-none');
        statusBox.textContent = message;
    }

    function fillInputs(data) {
        if (data.prenom) prenomInput.value = data.prenom;
        if (data.nom) nomInput.value = data.nom;
        if (data.gmail) gmailInput.value = data.gmail;
    }

    async function sendTranscriptToBackend(transcript) {
        const response = await fetch('";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_voice_parse");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ transcript })
        });

        const result = await response.json();

        if (!response.ok || !result.success) {
            throw new Error(result.message || 'Unable to parse voice data.');
        }

        return result;
    }

    if (!SpeechRecognition) {
        voiceBtn.disabled = true;
        showStatus('Speech recognition is not supported in this browser.', 'warning');
        return;
    }

    const recognition = new SpeechRecognition();
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.continuous = false;
    recognition.maxAlternatives = 1;

    voiceBtn.addEventListener('click', function () {
        transcriptBox.textContent = '';
        showStatus('Listening... Please say your first name, surname, and email.', 'info');
        recognition.start();
    });

    recognition.onresult = async function (event) {
        const transcript = event.results[0][0].transcript;
        transcriptBox.textContent = 'Heard: ' + transcript;
        showStatus('Sending transcript to local AI...', 'info');

        try {
            const parsedData = await sendTranscriptToBackend(transcript);
            fillInputs(parsedData);
            showStatus('Form filled by local AI successfully.', 'success');
        } catch (error) {
            showStatus(error.message, 'danger');
        }
    };

    recognition.onerror = function (event) {
        showStatus('Voice recognition error: ' + event.error, 'danger');
    };
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
        return "register/register.html.twig";
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
        return array (  248 => 95,  213 => 63,  203 => 56,  186 => 42,  182 => 41,  175 => 37,  171 => 36,  164 => 32,  160 => 31,  153 => 27,  149 => 26,  143 => 23,  138 => 20,  129 => 18,  125 => 17,  122 => 16,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<section class=\"section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"bg-white rounded shadow p-5\">
                    <h2 class=\"mb-4\">Create Account</h2>

                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\">{{ message }}</div>
                    {% endfor %}

                    {% for message in app.flashes('danger') %}
                        <div class=\"alert alert-danger\">{{ message }}</div>
                    {% endfor %}

                    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

                    {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.nom) }}
                            {{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'id': 'register_nom'}}) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.prenom) }}
                            {{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'id': 'register_prenom'}}) }}
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.gmail) }}
                            {{ form_widget(registrationForm.gmail, {'attr': {'class': 'form-control', 'id': 'register_gmail'}}) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(registrationForm.plainPassword) }}
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                            <small class=\"text-muted\">Password must be entered manually.</small>
                        </div>

                        <div class=\"mb-3\">
                            <button type=\"button\" id=\"voiceFillBtn\" class=\"btn btn-secondary w-100 mb-2\">
                                🎤 Fill with Voice
                            </button>

                            <div id=\"voiceStatus\" class=\"alert alert-info d-none\"></div>
                            <div id=\"voiceTranscript\" class=\"small text-muted mt-2\"></div>
                        </div>

                        <div class=\"mb-4 text-center\">
                            <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-primary w-100\">
                            Register
                        </button>

                    {{ form_end(registrationForm) }}
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const voiceBtn = document.getElementById('voiceFillBtn');
    const statusBox = document.getElementById('voiceStatus');
    const transcriptBox = document.getElementById('voiceTranscript');

    const nomInput = document.getElementById('register_nom');
    const prenomInput = document.getElementById('register_prenom');
    const gmailInput = document.getElementById('register_gmail');

    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    function showStatus(message, type = 'info') {
        statusBox.className = 'alert alert-' + type;
        statusBox.classList.remove('d-none');
        statusBox.textContent = message;
    }

    function fillInputs(data) {
        if (data.prenom) prenomInput.value = data.prenom;
        if (data.nom) nomInput.value = data.nom;
        if (data.gmail) gmailInput.value = data.gmail;
    }

    async function sendTranscriptToBackend(transcript) {
        const response = await fetch('{{ path('app_register_voice_parse') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ transcript })
        });

        const result = await response.json();

        if (!response.ok || !result.success) {
            throw new Error(result.message || 'Unable to parse voice data.');
        }

        return result;
    }

    if (!SpeechRecognition) {
        voiceBtn.disabled = true;
        showStatus('Speech recognition is not supported in this browser.', 'warning');
        return;
    }

    const recognition = new SpeechRecognition();
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.continuous = false;
    recognition.maxAlternatives = 1;

    voiceBtn.addEventListener('click', function () {
        transcriptBox.textContent = '';
        showStatus('Listening... Please say your first name, surname, and email.', 'info');
        recognition.start();
    });

    recognition.onresult = async function (event) {
        const transcript = event.results[0][0].transcript;
        transcriptBox.textContent = 'Heard: ' + transcript;
        showStatus('Sending transcript to local AI...', 'info');

        try {
            const parsedData = await sendTranscriptToBackend(transcript);
            fillInputs(parsedData);
            showStatus('Form filled by local AI successfully.', 'success');
        } catch (error) {
            showStatus(error.message, 'danger');
        }
    };

    recognition.onerror = function (event) {
        showStatus('Voice recognition error: ' + event.error, 'danger');
    };
});
</script>
{% endblock %}", "register/register.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\register\\register.html.twig");
    }
}
