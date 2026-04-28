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

/* admin/_users_table.html.twig */
class __TwigTemplate_30912e10e33a94bda0b669efeef84500 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_users_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_users_table.html.twig"));

        // line 1
        yield "<div id=\"users-section\">
    <div class=\"section\">
        <div class=\"section-header\">
            <div class=\"section-title\">All Users</div>
            <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 6, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 6), "html", null, true);
        yield " shown / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 6, $this->source); })()), "html", null, true);
        yield " total
            </span>
        </div>

        <div class=\"section-body\" style=\"padding-bottom:0;\">
            <form id=\"users-filter-form\" method=\"get\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"filters-bar\">
                <div class=\"form-group flex-grow\">
                    <label>Search user by name</label>
                    <input
                        type=\"text\"
                        id=\"ajax-search\"
                        name=\"q\"
                        value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 18, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\"
                        placeholder=\"Search by first name or last name\"
                    >
                </div>

                <div class=\"form-group fixed-width\">
                    <label>Sort by</label>
                    <select id=\"ajax-sort\" name=\"user_sort\">
                        <option value=\"name_asc\"  ";
        // line 26
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 26, $this->source); })()) == "name_asc")) {
            yield "selected";
        }
        yield ">Name A → Z</option>
                        <option value=\"name_desc\" ";
        // line 27
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 27, $this->source); })()) == "name_desc")) {
            yield "selected";
        }
        yield ">Name Z → A</option>
                        <option value=\"role_asc\"  ";
        // line 28
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 28, $this->source); })()) == "role_asc")) {
            yield "selected";
        }
        yield ">Role A → Z</option>
                        <option value=\"role_desc\" ";
        // line 29
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 29, $this->source); })()) == "role_desc")) {
            yield "selected";
        }
        yield ">Role Z → A</option>
                        <option value=\"id_asc\"    ";
        // line 30
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 30, $this->source); })()) == "id_asc")) {
            yield "selected";
        }
        yield ">Oldest ID</option>
                        <option value=\"id_desc\"   ";
        // line 31
        if (((isset($context["userSort"]) || array_key_exists("userSort", $context) ? $context["userSort"] : (function () { throw new RuntimeError('Variable "userSort" does not exist.', 31, $this->source); })()) == "id_desc")) {
            yield "selected";
        }
        yield ">Newest ID</option>
                    </select>
                </div>

                <div class=\"filters-actions\">
                    <button class=\"btn btn-primary\" type=\"submit\">Apply</button>
                    <button id=\"ajax-reset\" class=\"btn btn-secondary\" type=\"button\">Reset</button>
                </div>
            </form>
        </div>

        <div class=\"table-wrapper\">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Change Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 56, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            yield "                    <tr>
                        <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                        <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 59), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                        <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "gmail", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 62) == "ADMIN")) {
                yield "admin";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 62) == "INFLUENCER")) {
                yield "influencer";
            } else {
                yield "user";
            }
            yield "\">
                                ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 63), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>
                            ";
            // line 67
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "statut", [], "any", false, false, false, 67), ["ACTIF", "ACTIVE"])) {
                // line 68
                yield "                                <span class=\"badge active\">ACTIF</span>
                            ";
            } else {
                // line 70
                yield "                                <span class=\"badge inactive\">INACTIF</span>
                            ";
            }
            // line 72
            yield "                        </td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_role", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"role-form\">
                                <select name=\"role\">
                                    <option value=\"USER\" ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 76) == "USER")) {
                yield "selected";
            }
            yield ">USER</option>
                                    <option value=\"ADMIN\" ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 77) == "ADMIN")) {
                yield "selected";
            }
            yield ">ADMIN</option>
                                    <option value=\"INFLUENCER\" ";
            // line 78
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 78) == "INFLUENCER")) {
                yield "selected";
            }
            yield ">INFLUENCER</option>
                                </select>
                                <button class=\"btn btn-success btn-sm\" type=\"submit\">Save</button>
                            </form>
                        </td>
                        <td>
                            <form method=\"post\" action=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_user_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 85))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 90
        if (!$context['_iterated']) {
            // line 91
            yield "                    <tr>
                        <td colspan=\"7\">
                            <div class=\"empty-state\">
                                <p>No users found for this search.</p>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                </tbody>
            </table>
        </div>

        <div style=\"padding:18px 26px;\">
            ";
        // line 104
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 104, $this->source); })()));
        yield "
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/_users_table.html.twig";
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
        return array (  264 => 104,  257 => 99,  244 => 91,  242 => 90,  232 => 85,  228 => 84,  217 => 78,  211 => 77,  205 => 76,  200 => 74,  196 => 72,  192 => 70,  188 => 68,  186 => 67,  179 => 63,  169 => 62,  164 => 60,  158 => 59,  154 => 58,  151 => 57,  146 => 56,  116 => 31,  110 => 30,  104 => 29,  98 => 28,  92 => 27,  86 => 26,  75 => 18,  65 => 11,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"users-section\">
    <div class=\"section\">
        <div class=\"section-header\">
            <div class=\"section-title\">All Users</div>
            <span style=\"font-size:13px;color:var(--text-muted);font-weight:600;\">
                {{ users.getTotalItemCount }} shown / {{ totalUsers }} total
            </span>
        </div>

        <div class=\"section-body\" style=\"padding-bottom:0;\">
            <form id=\"users-filter-form\" method=\"get\" action=\"{{ path('app_admin_dashboard') }}\" class=\"filters-bar\">
                <div class=\"form-group flex-grow\">
                    <label>Search user by name</label>
                    <input
                        type=\"text\"
                        id=\"ajax-search\"
                        name=\"q\"
                        value=\"{{ search|default('') }}\"
                        placeholder=\"Search by first name or last name\"
                    >
                </div>

                <div class=\"form-group fixed-width\">
                    <label>Sort by</label>
                    <select id=\"ajax-sort\" name=\"user_sort\">
                        <option value=\"name_asc\"  {% if userSort == 'name_asc'  %}selected{% endif %}>Name A → Z</option>
                        <option value=\"name_desc\" {% if userSort == 'name_desc' %}selected{% endif %}>Name Z → A</option>
                        <option value=\"role_asc\"  {% if userSort == 'role_asc'  %}selected{% endif %}>Role A → Z</option>
                        <option value=\"role_desc\" {% if userSort == 'role_desc' %}selected{% endif %}>Role Z → A</option>
                        <option value=\"id_asc\"    {% if userSort == 'id_asc'    %}selected{% endif %}>Oldest ID</option>
                        <option value=\"id_desc\"   {% if userSort == 'id_desc'   %}selected{% endif %}>Newest ID</option>
                    </select>
                </div>

                <div class=\"filters-actions\">
                    <button class=\"btn btn-primary\" type=\"submit\">Apply</button>
                    <button id=\"ajax-reset\" class=\"btn btn-secondary\" type=\"button\">Reset</button>
                </div>
            </form>
        </div>

        <div class=\"table-wrapper\">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Change Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.prenom }} {{ user.nom }}</td>
                        <td>{{ user.gmail }}</td>
                        <td>
                            <span class=\"badge {% if user.role == 'ADMIN' %}admin{% elseif user.role == 'INFLUENCER' %}influencer{% else %}user{% endif %}\">
                                {{ user.role }}
                            </span>
                        </td>
                        <td>
                            {% if user.statut in ['ACTIF', 'ACTIVE'] %}
                                <span class=\"badge active\">ACTIF</span>
                            {% else %}
                                <span class=\"badge inactive\">INACTIF</span>
                            {% endif %}
                        </td>
                        <td>
                            <form method=\"post\" action=\"{{ path('app_admin_user_role', {id: user.id}) }}\" class=\"role-form\">
                                <select name=\"role\">
                                    <option value=\"USER\" {% if user.role == 'USER' %}selected{% endif %}>USER</option>
                                    <option value=\"ADMIN\" {% if user.role == 'ADMIN' %}selected{% endif %}>ADMIN</option>
                                    <option value=\"INFLUENCER\" {% if user.role == 'INFLUENCER' %}selected{% endif %}>INFLUENCER</option>
                                </select>
                                <button class=\"btn btn-success btn-sm\" type=\"submit\">Save</button>
                            </form>
                        </td>
                        <td>
                            <form method=\"post\" action=\"{{ path('app_admin_user_delete', {id: user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_user_' ~ user.id) }}\">
                                <button class=\"btn btn-danger btn-sm\" type=\"submit\">Delete</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">
                            <div class=\"empty-state\">
                                <p>No users found for this search.</p>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <div style=\"padding:18px 26px;\">
            {{ knp_pagination_render(users) }}
        </div>
    </div>
</div>", "admin/_users_table.html.twig", "C:\\Users\\GIGABYTE\\Downloads\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\Esprit-PiWeb-3A27-Findinari-dev_ahmed\\templates\\admin\\_users_table.html.twig");
    }
}
