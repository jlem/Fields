<?php namespace Jlem\Fields\Fields;

class Select extends Field implements Bindable
{
    use DataField;

    public $data = array();

    public function __construct(Array $args)
    {
        parent::__construct($args);
        $this->bindData($this->get('data'));
    }

    public function getHTML()
    {
        return \Form::bootSelect($this);
    }
}
