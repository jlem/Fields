<?php namespace Jlem\Fields\Arguments;

use Jlem\Fields\Arguments\LabelTranslator;
use Jlem\Fields\Arguments\ArgumentMerger;

class ArgumentBuilder
{
    
    protected $LabelTranslator;
    protected $ArgumentMerger;

    public function __construct(LabelTranslator $LabelTranslator, ArgumentMerger $ArgumentMerger)
    {
        $this->LabelTranslator = $LabelTranslator;
        $this->ArgumentMerger = $ArgumentMerger;
    }


    /**
     * Returns a compiled set of arguments from each source (default, explicit, and configs)
     *
     * @param mixed $label
     * @param Array $explicitArgs
     * @access public
     * @return void
    */

    public function makeArguments($label, Array $explicitArgs)
    {
        $defaultArgs = $this->getDefaultArguments($label);
        $configArgs = $this->getConfigArguments($this->inferName($label));

        return $this->ArgumentMerger->mergeArguments($defaultArgs, $configArgs, $explicitArgs);
    }


    /**
     * Returns an array of default arguments
     *
     * @param string $label
     * @access protected
     * @return array
    */

    protected function getDefaultArguments($label)
    {
        return [
            'label' => $label, 
            'name' => $this->inferName($label)
        ];
    }



    /**
     * Retrieves the configuration of a specific field
     *
     * @param string $name
     * @access protected
     * @return array
    */

    protected function getConfigArguments($name)
    {
        return (\Config::get("fields::fields.{$name}")) ?: [];
    }



    /**
     * Infers the field name/key from the provided label
     * Converted to lower case, and all spaces replaced with underscores
     *
     * @param mixed $label
     * @access protected
     * @return void
    */

    protected function inferName($label)
    {
        return $this->LabelTranslator->translate($label);
    }
}
