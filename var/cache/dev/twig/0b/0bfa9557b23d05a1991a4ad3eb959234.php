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

/* login/login.html.twig */
class __TwigTemplate_20b7721e527fe1252ef56f05337cebc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#20c997,#28a745);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            display: flex;
            width: 950px;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .left {
            width: 50%;
            background: #e6f9f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left img {
            width: 80%;
        }

        .right {
            width: 50%;
            padding: 40px;
        }

        h2 {
            margin-bottom: 20px;
            color: #2f4f4f;
        }

        h3 {
            margin-top: 24px;
            margin-bottom: 10px;
            color: #2f4f4f;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #28a745;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        .link {
            margin-top: 15px;
            text-align: center;
        }

        .link a {
            color: #28a745;
            text-decoration: none;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .flash {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .flash-danger {
            background: #fdeaea;
            color: #b00020;
        }

        .divider {
            margin: 22px 0;
            text-align: center;
            color: #777;
            font-size: 14px;
        }

        .google-btn {
            display: block;
            text-align: center;
            margin-top: 12px;
            padding: 12px;
            background: #ffffff;
            border: 1px solid #ddd;
            color: #222;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
        }

        .face-box {
            margin-top: 10px;
            padding: 14px;
        }

        #camera-container {
            display: none;
            margin-top: 12px;
            text-align: center;
        }

        #video {
            width: 100%;
            max-width: 320px;
            border-radius: 10px;
            border: 1px solid #ddd;
            background: #000;
        }

        #captureBtn {
            margin-top: 10px;
        }

        .small-text {
            font-size: 13px;
            color: #666;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <div class=\"container\">
        <div class=\"left\">
            <img src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/illustration-1.png"), "html", null, true);
        yield "\" alt=\"Login illustration\">
        </div>

        <div class=\"right\">
            <h2>Login</h2>

            ";
        // line 171
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 171, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 172
            yield "                <div class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 172, $this->source); })()), "messageKey", [], "any", false, false, false, 172), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 172, $this->source); })()), "messageData", [], "any", false, false, false, 172), "security"), "html", null, true);
            yield "</div>
            ";
        }
        // line 174
        yield "
            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 176
            yield "                <div class=\"flash flash-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "
            <form method=\"post\">
                <input type=\"text\" id=\"main_email\" name=\"_username\" value=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 180, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Email\">
                <input type=\"password\" name=\"_password\" placeholder=\"Password\">
                <button type=\"submit\">Login</button>
            </form>

            <a href=\"";
        // line 185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_google_start");
        yield "\" class=\"google-btn\">
                Sign in with Google
            </a>
            <div class=\"face-box\">
                <form id=\"faceLoginForm\" method=\"post\" action=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_login");
        yield "\">
                    <input type=\"hidden\" id=\"face_email\" name=\"email\">
                    <input type=\"hidden\" id=\"face_image_data\" name=\"face_image_data\">

                    <button type=\"button\" id=\"startFaceBtn\">Login with Face ID</button>

                    <div id=\"camera-container\">
                        <video id=\"video\" autoplay playsinline></video>
                        <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                        <button type=\"button\" id=\"captureBtn\">Capture and Login</button>
                        <div class=\"small-text\">Allow camera access, then take a quick face photo.</div>
                    </div>
                </form>
            </div>

            <div class=\"divider\">OR</div>

            

            <div class=\"link\">
            <p class=\"mt-3 text-center\">
    <a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\">Forgot your password?</a>
</p>
                <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register");
        yield "\">Create account</a>
            </div>
        </div>
    </div>

    <script>
        const startFaceBtn = document.getElementById('startFaceBtn');
        const captureBtn = document.getElementById('captureBtn');
        const cameraContainer = document.getElementById('camera-container');
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const faceImageData = document.getElementById('face_image_data');
        const faceEmail = document.getElementById('face_email');
        const mainEmail = document.getElementById('main_email');
        const faceLoginForm = document.getElementById('faceLoginForm');

        let stream = null;

        startFaceBtn.addEventListener('click', async function () {
            if (!mainEmail.value.trim()) {
                alert('Enter your email first.');
                return;
            }

            faceEmail.value = mainEmail.value.trim();

            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: { facingMode: 'user' },
                    audio: false
                });

                video.srcObject = stream;
                cameraContainer.style.display = 'block';
            } catch (error) {
                alert('Unable to access camera.');
                console.error(error);
            }
        });

        captureBtn.addEventListener('click', function () {
            if (!stream) {
                alert('Camera is not started.');
                return;
            }

            canvas.width = video.videoWidth || 640;
            canvas.height = video.videoHeight || 480;

            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            faceImageData.value = canvas.toDataURL('image/jpeg');

            stream.getTracks().forEach(track => track.stop());

            faceLoginForm.submit();
        });
    </script>
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
        return "login/login.html.twig";
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
        return array (  295 => 212,  290 => 210,  266 => 189,  259 => 185,  251 => 180,  247 => 178,  238 => 176,  234 => 175,  231 => 174,  225 => 172,  223 => 171,  214 => 165,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#20c997,#28a745);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            display: flex;
            width: 950px;
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }

        .left {
            width: 50%;
            background: #e6f9f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .left img {
            width: 80%;
        }

        .right {
            width: 50%;
            padding: 40px;
        }

        h2 {
            margin-bottom: 20px;
            color: #2f4f4f;
        }

        h3 {
            margin-top: 24px;
            margin-bottom: 10px;
            color: #2f4f4f;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #28a745;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #28a745;
            border: none;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #218838;
        }

        .link {
            margin-top: 15px;
            text-align: center;
        }

        .link a {
            color: #28a745;
            text-decoration: none;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .flash {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .flash-danger {
            background: #fdeaea;
            color: #b00020;
        }

        .divider {
            margin: 22px 0;
            text-align: center;
            color: #777;
            font-size: 14px;
        }

        .google-btn {
            display: block;
            text-align: center;
            margin-top: 12px;
            padding: 12px;
            background: #ffffff;
            border: 1px solid #ddd;
            color: #222;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
        }

        .face-box {
            margin-top: 10px;
            padding: 14px;
        }

        #camera-container {
            display: none;
            margin-top: 12px;
            text-align: center;
        }

        #video {
            width: 100%;
            max-width: 320px;
            border-radius: 10px;
            border: 1px solid #ddd;
            background: #000;
        }

        #captureBtn {
            margin-top: 10px;
        }

        .small-text {
            font-size: 13px;
            color: #666;
            margin-top: 8px;
        }
    </style>
</head>

<body>
    <div class=\"container\">
        <div class=\"left\">
            <img src=\"{{ asset('images/illustration-1.png') }}\" alt=\"Login illustration\">
        </div>

        <div class=\"right\">
            <h2>Login</h2>

            {% if error %}
                <div class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}

            {% for message in app.flashes('danger') %}
                <div class=\"flash flash-danger\">{{ message }}</div>
            {% endfor %}

            <form method=\"post\">
                <input type=\"text\" id=\"main_email\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Email\">
                <input type=\"password\" name=\"_password\" placeholder=\"Password\">
                <button type=\"submit\">Login</button>
            </form>

            <a href=\"{{ path('app_google_start') }}\" class=\"google-btn\">
                Sign in with Google
            </a>
            <div class=\"face-box\">
                <form id=\"faceLoginForm\" method=\"post\" action=\"{{ path('app_face_login') }}\">
                    <input type=\"hidden\" id=\"face_email\" name=\"email\">
                    <input type=\"hidden\" id=\"face_image_data\" name=\"face_image_data\">

                    <button type=\"button\" id=\"startFaceBtn\">Login with Face ID</button>

                    <div id=\"camera-container\">
                        <video id=\"video\" autoplay playsinline></video>
                        <canvas id=\"canvas\" style=\"display:none;\"></canvas>
                        <button type=\"button\" id=\"captureBtn\">Capture and Login</button>
                        <div class=\"small-text\">Allow camera access, then take a quick face photo.</div>
                    </div>
                </form>
            </div>

            <div class=\"divider\">OR</div>

            

            <div class=\"link\">
            <p class=\"mt-3 text-center\">
    <a href=\"{{ path('app_forgot_password') }}\">Forgot your password?</a>
</p>
                <a href=\"{{ path('app_front_register') }}\">Create account</a>
            </div>
        </div>
    </div>

    <script>
        const startFaceBtn = document.getElementById('startFaceBtn');
        const captureBtn = document.getElementById('captureBtn');
        const cameraContainer = document.getElementById('camera-container');
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const faceImageData = document.getElementById('face_image_data');
        const faceEmail = document.getElementById('face_email');
        const mainEmail = document.getElementById('main_email');
        const faceLoginForm = document.getElementById('faceLoginForm');

        let stream = null;

        startFaceBtn.addEventListener('click', async function () {
            if (!mainEmail.value.trim()) {
                alert('Enter your email first.');
                return;
            }

            faceEmail.value = mainEmail.value.trim();

            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: { facingMode: 'user' },
                    audio: false
                });

                video.srcObject = stream;
                cameraContainer.style.display = 'block';
            } catch (error) {
                alert('Unable to access camera.');
                console.error(error);
            }
        });

        captureBtn.addEventListener('click', function () {
            if (!stream) {
                alert('Camera is not started.');
                return;
            }

            canvas.width = video.videoWidth || 640;
            canvas.height = video.videoHeight || 480;

            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            faceImageData.value = canvas.toDataURL('image/jpeg');

            stream.getTracks().forEach(track => track.stop());

            faceLoginForm.submit();
        });
    </script>
</body>
</html>", "login/login.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\login\\login.html.twig");
    }
}
