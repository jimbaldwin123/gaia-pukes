<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* posting_pm_header.html */
class __TwigTemplate_e472637ebac3183263e6620edd2d74894ee57f7a8ffae22c2a495dde507e8554 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            // line 3
            echo "
\t\t";
            // line 4
            if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
                // line 5
                echo "\t\t\t<div class=\"column2\">
\t\t\t\t<label for=\"group_list\"><strong>";
                // line 6
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO_ADD_GROUPS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong></label><br />
\t\t\t\t<select name=\"group_list[]\" id=\"group_list\" multiple=\"multiple\" size=\"3\" class=\"inputbox\">";
                // line 7
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select><br />
\t\t\t</div>
\t\t";
            }
            // line 10
            echo "\t\t";
            if ((isset($context["S_ALLOW_MASS_PM"]) ? $context["S_ALLOW_MASS_PM"] : null)) {
                // line 11
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 12
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 13
                    echo "\t\t\t<dl class=\"pmlist\">
\t\t\t\t<dt><label><strong>";
                    // line 14
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO_ADD_MASS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong><textarea id=\"username_list\" name=\"username_list\" class=\"inputbox\" cols=\"50\" rows=\"2\" tabindex=\"1\"></textarea></label></dt>
\t\t\t\t<dd class=\"recipients\">
\t\t\t\t<input type=\"submit\" name=\"add_to\" value=\"";
                    // line 16
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" tabindex=\"1\" />
\t\t\t\t<input type=\"submit\" name=\"add_bcc\" value=\"";
                    // line 17
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_BCC");
                    echo "\" class=\"button2\" tabindex=\"1\" />
\t\t\t\t";
                    // line 18
                    // line 19
                    echo "\t\t\t\t<span><a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                    echo "</a></span>
\t\t\t\t";
                    // line 20
                    // line 21
                    echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 24
                echo "\t\t</div>
\t\t";
                // line 25
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", [])) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", [])))) {
                    echo "<hr />";
                }
                // line 26
                echo "\t\t<div class=\"column1\">
\t\t\t";
                // line 27
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", []))) {
                    // line 28
                    echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 29
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO_MASS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 33
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 34
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", []);
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", []);
                            echo "]\" value=\"x\" class=\"button2\" />";
                        }
                        // line 35
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", []);
                            echo "\" style=\"color: ";
                            echo $this->getAttribute($context["to_recipient"], "COLOUR", []);
                            echo "\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", []);
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", []);
                        }
                        // line 36
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
                }
                // line 42
                echo "\t\t</div>
\t\t\t";
                // line 43
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", []))) {
                    // line 44
                    echo "\t\t\t<div class=\"column2\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
                    // line 46
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BCC");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                        // line 50
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 51
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["bcc_recipient"], "TYPE", []);
                            echo "[";
                            echo $this->getAttribute($context["bcc_recipient"], "UG_ID", []);
                            echo "]\" value=\"x\" class=\"button2\" />";
                        }
                        // line 52
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", []);
                            echo "\" style=\"color: ";
                            echo $this->getAttribute($context["bcc_recipient"], "COLOUR", []);
                            echo "\"><strong>";
                            echo $this->getAttribute($context["bcc_recipient"], "NAME", []);
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", []);
                        }
                        // line 53
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t\t\t</ul>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</div>
\t\t\t";
                }
                // line 60
                echo "\t\t";
            } else {
                // line 61
                echo "\t\t<div class=\"column1\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username_list\">";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO_ADD");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label>";
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    echo "<br /><span><a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" onclick=\"find_username(this.href); return false\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                    echo "</a></span>";
                }
                echo "</dt>
\t\t\t\t";
                // line 64
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 65
                    echo "\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" name=\"username_list\" id=\"username_list\" size=\"20\" value=\"\" /> <input type=\"submit\" name=\"add_to\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" /></dd>
\t\t\t\t";
                }
                // line 67
                echo "\t\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", []))) {
                    // line 68
                    echo "\t\t\t\t\t<dd class=\"recipients\">
\t\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t\t";
                    // line 70
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 71
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                        // line 72
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", []);
                            echo "\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", []);
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", []);
                        }
                        echo "&nbsp;
\t\t\t\t\t\t\t";
                        // line 73
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", []);
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", []);
                            echo "]\" value=\"x\" class=\"button2\" />";
                        }
                        // line 74
                        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "\t\t\t\t\t</dd>
\t\t\t\t";
                }
                // line 78
                echo "\t\t\t</dl>
\t\t</div>
\t\t";
            }
            // line 81
            echo "
\t";
        }
        // line 83
        echo "\t</fieldset>
";
    }

    public function getTemplateName()
    {
        return "posting_pm_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 83,  292 => 81,  287 => 78,  283 => 76,  276 => 74,  268 => 73,  256 => 72,  253 => 71,  249 => 70,  245 => 68,  242 => 67,  236 => 65,  234 => 64,  221 => 63,  217 => 61,  214 => 60,  207 => 55,  200 => 53,  187 => 52,  179 => 51,  176 => 50,  172 => 49,  165 => 46,  161 => 44,  159 => 43,  156 => 42,  150 => 38,  143 => 36,  130 => 35,  122 => 34,  119 => 33,  115 => 32,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  96 => 25,  93 => 24,  88 => 21,  87 => 20,  80 => 19,  79 => 18,  75 => 17,  71 => 16,  65 => 14,  62 => 13,  60 => 12,  57 => 11,  54 => 10,  48 => 7,  43 => 6,  40 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "posting_pm_header.html", "");
    }
}
