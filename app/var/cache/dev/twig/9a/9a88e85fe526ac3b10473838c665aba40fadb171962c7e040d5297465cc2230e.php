<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_ee68b603a70578448aff8c055e9dd02ecce695c46cbafc5cc66183e66243a9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5833909386b541f86f4736631c3937e9444314ba7afa6d2926a3a5fa26412bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5833909386b541f86f4736631c3937e9444314ba7afa6d2926a3a5fa26412bd6->enter($__internal_5833909386b541f86f4736631c3937e9444314ba7afa6d2926a3a5fa26412bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_c6fcbed8f3862f92ca9158b4e3589854f134c71943395d80db88499eb19534dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fcbed8f3862f92ca9158b4e3589854f134c71943395d80db88499eb19534dc->enter($__internal_c6fcbed8f3862f92ca9158b4e3589854f134c71943395d80db88499eb19534dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5833909386b541f86f4736631c3937e9444314ba7afa6d2926a3a5fa26412bd6->leave($__internal_5833909386b541f86f4736631c3937e9444314ba7afa6d2926a3a5fa26412bd6_prof);

        
        $__internal_c6fcbed8f3862f92ca9158b4e3589854f134c71943395d80db88499eb19534dc->leave($__internal_c6fcbed8f3862f92ca9158b4e3589854f134c71943395d80db88499eb19534dc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3a144283304523b65fb8bd5410a85aa9ec73bb13dc4d7d858faacff30c40c794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a144283304523b65fb8bd5410a85aa9ec73bb13dc4d7d858faacff30c40c794->enter($__internal_3a144283304523b65fb8bd5410a85aa9ec73bb13dc4d7d858faacff30c40c794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_5b857237680caaee858ee87e8b71397a599295ff275284264e04eefba1b4848d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b857237680caaee858ee87e8b71397a599295ff275284264e04eefba1b4848d->enter($__internal_5b857237680caaee858ee87e8b71397a599295ff275284264e04eefba1b4848d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_5b857237680caaee858ee87e8b71397a599295ff275284264e04eefba1b4848d->leave($__internal_5b857237680caaee858ee87e8b71397a599295ff275284264e04eefba1b4848d_prof);

        
        $__internal_3a144283304523b65fb8bd5410a85aa9ec73bb13dc4d7d858faacff30c40c794->leave($__internal_3a144283304523b65fb8bd5410a85aa9ec73bb13dc4d7d858faacff30c40c794_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7658ce779487a0b199578b599cff76517225c8e1e4ef144af07f558582da89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7658ce779487a0b199578b599cff76517225c8e1e4ef144af07f558582da89e->enter($__internal_b7658ce779487a0b199578b599cff76517225c8e1e4ef144af07f558582da89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_317dc2b7c5036fa21d870812b0b85a938989fd21ea80da50aabed3a77f962d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317dc2b7c5036fa21d870812b0b85a938989fd21ea80da50aabed3a77f962d58->enter($__internal_317dc2b7c5036fa21d870812b0b85a938989fd21ea80da50aabed3a77f962d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "token", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "enabled", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 8, $this->getSourceContext()); })())) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "enabled", array())) {
            // line 20
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 20, $this->getSourceContext()); })()), "token", array())) {
                // line 21
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Logged in as</b>
                    <span>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->getSourceContext()); })()), "user", array()), "html", null, true);
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 28
                echo (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 28, $this->getSourceContext()); })())) ? ("green") : ("red"));
                echo "\">";
                echo (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new Twig_Error_Runtime('Variable "is_authenticated" does not exist.', 28, $this->getSourceContext()); })())) ? ("Yes") : ("No"));
                echo "</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Token class</b>
                    <span>";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 33, $this->getSourceContext()); })()), "tokenClass", array()));
                echo "</span>
                </div>
            ";
            } else {
                // line 36
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                </div>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 42, $this->getSourceContext()); })()), "firewall", array())) {
                // line 43
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Firewall name</b>
                    <span>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 45, $this->getSourceContext()); })()), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 48
            echo "
            ";
            // line 49
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "token", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 49, $this->getSourceContext()); })()), "logoutUrl", array()))) {
                // line 50
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Actions</b>
                    <span><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
                </div>
            ";
            }
            // line 55
            echo "        ";
        } else {
            // line 56
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 60
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
    ";
        // line 62
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 62, $this->getSourceContext()); })()), "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new Twig_Error_Runtime('Variable "color_code" does not exist.', 62, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_317dc2b7c5036fa21d870812b0b85a938989fd21ea80da50aabed3a77f962d58->leave($__internal_317dc2b7c5036fa21d870812b0b85a938989fd21ea80da50aabed3a77f962d58_prof);

        
        $__internal_b7658ce779487a0b199578b599cff76517225c8e1e4ef144af07f558582da89e->leave($__internal_b7658ce779487a0b199578b599cff76517225c8e1e4ef144af07f558582da89e_prof);

    }

    // line 65
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6c001cf563948f3d110401862a7a70df56d70bc3fd741eb1cca84e43d08f6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c001cf563948f3d110401862a7a70df56d70bc3fd741eb1cca84e43d08f6aa->enter($__internal_b6c001cf563948f3d110401862a7a70df56d70bc3fd741eb1cca84e43d08f6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_346530daeef5942e787c939e79015cdcab38cbd1c70f51c36d697f665d13c9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346530daeef5942e787c939e79015cdcab38cbd1c70f51c36d697f665d13c9c4->enter($__internal_346530daeef5942e787c939e79015cdcab38cbd1c70f51c36d697f665d13c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 66
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->getSourceContext()); })()), "enabled", array()) ||  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->getSourceContext()); })()), "token", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 67
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_346530daeef5942e787c939e79015cdcab38cbd1c70f51c36d697f665d13c9c4->leave($__internal_346530daeef5942e787c939e79015cdcab38cbd1c70f51c36d697f665d13c9c4_prof);

        
        $__internal_b6c001cf563948f3d110401862a7a70df56d70bc3fd741eb1cca84e43d08f6aa->leave($__internal_b6c001cf563948f3d110401862a7a70df56d70bc3fd741eb1cca84e43d08f6aa_prof);

    }

    // line 72
    public function block_panel($context, array $blocks = array())
    {
        $__internal_939e81fe7388cfcbb56a243b5f4170e7e90b3ba72a9ecc6fdd5df80b785ecbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939e81fe7388cfcbb56a243b5f4170e7e90b3ba72a9ecc6fdd5df80b785ecbb5->enter($__internal_939e81fe7388cfcbb56a243b5f4170e7e90b3ba72a9ecc6fdd5df80b785ecbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba0923da6f4a8cb838fc25c6166f939664900b4b46a987acff137cb967ce6314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0923da6f4a8cb838fc25c6166f939664900b4b46a987acff137cb967ce6314->enter($__internal_ba0923da6f4a8cb838fc25c6166f939664900b4b46a987acff137cb967ce6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 73
        echo "    <h2>Security Token</h2>

    ";
        // line 75
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->getSourceContext()); })()), "enabled", array())) {
            // line 76
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 76, $this->getSourceContext()); })()), "token", array())) {
                // line 77
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 79
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "user", array()) == "anon.")) ? ("Anonymous") : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 79, $this->getSourceContext()); })()), "user", array()))), "html", null, true);
                echo "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 84
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 84, $this->getSourceContext()); })()), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 100
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "roles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "roles", array()), 1))));
                echo "

                            ";
                // line 102
                if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->getSourceContext()); })()), "authenticated", array()) && twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 102, $this->getSourceContext()); })()), "roles", array())))) {
                    // line 103
                    echo "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 105
                echo "                        </td>
                    </tr>

                    ";
                // line 108
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 108, $this->getSourceContext()); })()), "supportsRoleHierarchy", array())) {
                    // line 109
                    echo "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 111
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->getSourceContext()); })()), "inheritedRoles", array()))) ? ("none") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->getSourceContext()); })()), "inheritedRoles", array()), 1))));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 114
                echo "
                    ";
                // line 115
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->getSourceContext()); })()), "token", array())) {
                    // line 116
                    echo "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 118
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 118, $this->getSourceContext()); })()), "token", array())));
                    echo "</td>
                    </tr>
                    ";
                }
                // line 121
                echo "                </tbody>
            </table>
        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 123
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 123, $this->getSourceContext()); })()), "enabled", array())) {
                // line 124
                echo "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 128
            echo "

        <h2>Security Firewall</h2>

        ";
            // line 132
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 132, $this->getSourceContext()); })()), "firewall", array())) {
                // line 133
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 135, $this->getSourceContext()); })()), "firewall", array()), "name", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 139
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 139, $this->getSourceContext()); })()), "firewall", array()), "security_enabled", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 143
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 143, $this->getSourceContext()); })()), "firewall", array()), "stateless", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 147
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 147, $this->getSourceContext()); })()), "firewall", array()), "allows_anonymous", array())) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 152
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 152, $this->getSourceContext()); })()), "firewall", array()), "security_enabled", array())) {
                    // line 153
                    echo "                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 163
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 163, $this->getSourceContext()); })()), "firewall", array()), "provider", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 163, $this->getSourceContext()); })()), "firewall", array()), "provider", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 167
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 167, $this->getSourceContext()); })()), "firewall", array()), "context", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 167, $this->getSourceContext()); })()), "firewall", array()), "context", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 171
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 171, $this->getSourceContext()); })()), "firewall", array()), "entry_point", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 171, $this->getSourceContext()); })()), "firewall", array()), "entry_point", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 175
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 175, $this->getSourceContext()); })()), "firewall", array()), "user_checker", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 175, $this->getSourceContext()); })()), "firewall", array()), "user_checker", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 179
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 179, $this->getSourceContext()); })()), "firewall", array()), "access_denied_handler", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 179, $this->getSourceContext()); })()), "firewall", array()), "access_denied_handler", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 183
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 183, $this->getSourceContext()); })()), "firewall", array()), "access_denied_url", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 183, $this->getSourceContext()); })()), "firewall", array()), "access_denied_url", array())) : ("(none)")), "html", null, true);
                    echo "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 187
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 187, $this->getSourceContext()); })()), "firewall", array()), "listeners", array()))) ? ("(none)") : (call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 187, $this->getSourceContext()); })()), "firewall", array()), "listeners", array()), 1))));
                    echo "</td>
                        </tr>
                    </tbody>
                </table>
            ";
                }
                // line 192
                echo "        ";
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 192, $this->getSourceContext()); })()), "enabled", array())) {
                // line 193
                echo "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 197
            echo "    ";
        } else {
            // line 198
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 202
        echo "
    ";
        // line 203
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voters", array()), array())) : (array())))) {
            // line 204
            echo "        <h2>Security Voters <small>(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 204, $this->getSourceContext()); })()), "voters", array())), "html", null, true);
            echo ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 208
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voterStrategy", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "voterStrategy", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 222, $this->getSourceContext()); })()), "voters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 223
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">";
                // line 225
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["voter"]));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "            </tbody>
        </table>
    ";
        }
        // line 231
        echo "
    ";
        // line 232
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "accessDecisionLog", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "accessDecisionLog", array()), array())) : (array())))) {
            // line 233
            echo "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 251, $this->getSourceContext()); })()), "accessDecisionLog", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 252
                echo "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 253
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 255
                echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "result", array())) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 258
                echo "
                        </td>
                        <td>
                            ";
                // line 261
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array())) == 1)) {
                    // line 262
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array())), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 264
                    echo "                                ";
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "attributes", array())));
                    echo "
                            ";
                }
                // line 266
                echo "                        </td>
                        <td>";
                // line 267
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["decision"], "object", array())));
                echo "</td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_ba0923da6f4a8cb838fc25c6166f939664900b4b46a987acff137cb967ce6314->leave($__internal_ba0923da6f4a8cb838fc25c6166f939664900b4b46a987acff137cb967ce6314_prof);

        
        $__internal_939e81fe7388cfcbb56a243b5f4170e7e90b3ba72a9ecc6fdd5df80b785ecbb5->leave($__internal_939e81fe7388cfcbb56a243b5f4170e7e90b3ba72a9ecc6fdd5df80b785ecbb5_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 270,  611 => 267,  608 => 266,  602 => 264,  596 => 262,  594 => 261,  589 => 258,  587 => 255,  582 => 253,  579 => 252,  562 => 251,  542 => 233,  540 => 232,  537 => 231,  532 => 228,  515 => 225,  511 => 224,  508 => 223,  491 => 222,  474 => 208,  466 => 204,  464 => 203,  461 => 202,  455 => 198,  452 => 197,  446 => 193,  443 => 192,  435 => 187,  428 => 183,  421 => 179,  414 => 175,  407 => 171,  400 => 167,  393 => 163,  381 => 153,  379 => 152,  371 => 147,  364 => 143,  357 => 139,  350 => 135,  346 => 133,  344 => 132,  338 => 128,  332 => 124,  330 => 123,  326 => 121,  320 => 118,  316 => 116,  314 => 115,  311 => 114,  305 => 111,  301 => 109,  299 => 108,  294 => 105,  290 => 103,  288 => 102,  283 => 100,  264 => 84,  256 => 79,  252 => 77,  249 => 76,  247 => 75,  243 => 73,  234 => 72,  220 => 67,  215 => 66,  206 => 65,  194 => 62,  191 => 61,  188 => 60,  182 => 56,  179 => 55,  173 => 52,  169 => 50,  167 => 49,  164 => 48,  158 => 45,  154 => 43,  152 => 42,  149 => 41,  142 => 36,  136 => 33,  126 => 28,  118 => 23,  114 => 21,  111 => 20,  108 => 19,  106 => 18,  103 => 17,  98 => 15,  93 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  79 => 9,  76 => 8,  73 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.enabled %}
            {% if collector.token %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Logged in as</b>
                    <span>{{ collector.user }}</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                </div>

                <div class=\"sf-toolbar-info-piece\">
                    <b>Token class</b>
                    <span>{{ collector.tokenClass|abbr_class }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Authenticated</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                </div>
            {% endif %}

            {% if collector.firewall %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Firewall name</b>
                    <span>{{ collector.firewall.name }}</span>
                </div>
            {% endif %}

            {% if collector.token and collector.logoutUrl %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Actions</b>
                    <span><a href=\"{{ collector.logoutUrl }}\">Logout</a></span>
                </div>
            {% endif %}
        {% else %}
            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {{ decision.attributes|first }}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.object) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\wamp64\\www\\pharmacie-dev\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
