<?php
/**
 * Smarty Internal Plugin Compile Ldelim
 * Compiles the {ldelim} tag
 *
 *    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Ldelim Class
 *
 *    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Ldelim extends Smarty_Internal_CompileBase
{
    /**
     * Compiles code for the {ldelim} tag
     * This tag does output the left delimiter
     *
     * @param array                                 $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     *
     * @return string compiled code
     * @throws \SmartyCompilerException
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler)
    {
        $_attr = $this->getAttributes($compiler, $args);
        if ($_attr[ 'nocache' ] === true) {
            $compiler->trigger_template_error('nocache option not allowed', null, true);
        }
        return $compiler->smarty->left_delimiter;
    }
}
