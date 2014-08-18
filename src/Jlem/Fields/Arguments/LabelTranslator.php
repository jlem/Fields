<?php namespace Jlem\Fields\Arguments;

interface LabelTranslator
{
    /**
     * Translates the given label into a string for the field name / config key
     *
     * @param string $label
     * @access public
     * @return string
    */

    public function translate($label);
}
