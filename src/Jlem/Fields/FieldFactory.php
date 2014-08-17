<?php namespace Jlem\Fields;

use Jlem\Fields\ArgumentBuilder;

class FieldFactory
{
    protected $ArgumentBuilder;
    
    public function __construct(ArgumentBuilder $ArgumentBuilder)
    {
        $this->ArgumentBuilder = $ArgumentBuilder;
    }

    public function make($label, $type, $args)
    {
        $args = $this->ArgumentBuilder->makeArguments($label, $args);
        $fieldName = $this->fullName($type);
        return new $fieldName($args);
    }

    protected function fullName($type)
    {
        return 'Jlem\Fields\Fields\\'.$type;
    }
}
