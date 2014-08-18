<?php namespace Jlem\Fields;

use Jlem\Fields\Arguments\ArgumentBuilder;

class FieldFactory
{
    protected $ArgumentBuilder;
    
    public function __construct(ArgumentBuilder $ArgumentBuilder)
    {
        $this->ArgumentBuilder = $ArgumentBuilder;
    }


    /**
     * Makes a new field
     *
     * @param string $label
     * @param string $type
     * @param array $args
     * @access public
     * @return Jlem\Fields\Fields\Field
    */

    public function make($label, $type, $args)
    {
        $args = $this->ArgumentBuilder->makeArguments($label, $args);
        $fieldName = $this->fullName($type);
        return new $fieldName($args);
    }


    /**
     * Applies the given type to the full namespace
     *
     * @param string $type
     * @access protected
     * @return string
    */

    protected function fullName($type)
    {
        return 'Jlem\Fields\Fields\\'.$type;
    }
}
