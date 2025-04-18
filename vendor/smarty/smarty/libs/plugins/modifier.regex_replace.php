<?php
/**
 * Smarty plugin
 *
 *    Smarty
 * @subpackage PluginsModifier
 */
/**
 * Smarty regex_replace modifier plugin
 * Type:     modifier
 * Name:     regex_replace
 * Purpose:  regular expression search/replace
 *
 * @link   https://www.smarty.net/manual/en/language.modifier.regex.replace.php
 *          regex_replace (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 *
 * @param string       $string  input string
 * @param string|array $search  regular expression(s) to search for
 * @param string|array $replace string(s) that should be replaced
 * @param int          $limit   the maximum number of replacements
 *
 * @return string
 */
function smarty_modifier_regex_replace($string, $search, $replace, $limit = -1)
{
    if (is_array($search)) {
        foreach ($search as $idx => $s) {
            $search[ $idx ] = _smarty_regex_replace_check($s);
        }
    } else {
        $search = _smarty_regex_replace_check($search);
    }
    return preg_replace($search, $replace, $string, $limit);
}

/**
 * @param  string $search string(s) that should be replaced
 *
 * @return string
 * @ignore
 */
function _smarty_regex_replace_check($search)
{
    // null-byte injection detection
    // anything behind the first null-byte is ignored
    if (($pos = strpos($search, "\0")) !== false) {
        $search = substr($search, 0, $pos);
    }
    // remove eval-modifier from $search
    if (preg_match('!([a-zA-Z\s]+)$!s', $search, $match) && (strpos($match[ 1 ], 'e') !== false)) {
        $search = substr($search, 0, -strlen($match[ 1 ])) . preg_replace('![e\s]+!', '', $match[ 1 ]);
    }
    return $search;
}
