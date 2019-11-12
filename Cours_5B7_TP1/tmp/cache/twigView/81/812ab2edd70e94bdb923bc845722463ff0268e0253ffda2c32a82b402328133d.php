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

/* C:\UniServerZ\www\GIT_Cours_5B7_TP\Application_Mobile_5B7\Cours_5B7_TP1\vendor\cakephp\bake\src\Template\Bake\\Form\form.twig */
class __TwigTemplate_73caac6554d55f9fbb0c106139ae00cdba409043e62cbc8fca5f6a6c593cce94 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\UniServerZ\\www\\GIT_Cours_5B7_TP\\Application_Mobile_5B7\\Cours_5B7_TP1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Form\\form.twig"));

        // line 16
        echo "<?php
namespace ";
        // line 17
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Form;

use Cake\\Form\\Form;
use Cake\\Form\\Schema;
use Cake\\Validation\\Validator;

/**
 * ";
        // line 24
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " Form.
 */
class ";
        // line 26
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Form extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \\Cake\\Form\\Schema \$schema From schema
     * @return \\Cake\\Form\\Schema
     */
    protected function _buildSchema(Schema \$schema)
    {
        return \$schema;
    }

    /**
     * Form validation builder
     *
     * @param \\Cake\\Validation\\Validator \$validator to use against the form
     * @return \\Cake\\Validation\\Validator
     */
    protected function _buildValidator(Validator \$validator)
    {
        return \$validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array \$data Form data.
     * @return bool
     */
    protected function _execute(array \$data)
    {
        return true;
    }
}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\UniServerZ\\www\\GIT_Cours_5B7_TP\\Application_Mobile_5B7\\Cours_5B7_TP1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Form\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 26,  46 => 24,  36 => 17,  33 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         2.0.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
#}
<?php
namespace {{ namespace }}\\Form;

use Cake\\Form\\Form;
use Cake\\Form\\Schema;
use Cake\\Validation\\Validator;

/**
 * {{ name }} Form.
 */
class {{ name }}Form extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \\Cake\\Form\\Schema \$schema From schema
     * @return \\Cake\\Form\\Schema
     */
    protected function _buildSchema(Schema \$schema)
    {
        return \$schema;
    }

    /**
     * Form validation builder
     *
     * @param \\Cake\\Validation\\Validator \$validator to use against the form
     * @return \\Cake\\Validation\\Validator
     */
    protected function _buildValidator(Validator \$validator)
    {
        return \$validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array \$data Form data.
     * @return bool
     */
    protected function _execute(array \$data)
    {
        return true;
    }
}
", "C:\\UniServerZ\\www\\GIT_Cours_5B7_TP\\Application_Mobile_5B7\\Cours_5B7_TP1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Form\\form.twig", "C:\\UniServerZ\\www\\GIT_Cours_5B7_TP\\Application_Mobile_5B7\\Cours_5B7_TP1\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Form\\form.twig");
    }
}
