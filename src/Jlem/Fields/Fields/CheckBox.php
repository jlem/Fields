<?php namespace Jlem\Fields\Fields;

class CheckBox extends Field
{
	public $checked = false;

    public function bindValue($value)
    {
        $this->checked = $value;
    }

    public function getHTML()
    {
        return \Form::bootBox($this);
    }
}
