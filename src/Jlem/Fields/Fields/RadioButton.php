<?php namespace Jlem\Fields\Fields;

class RadioButton extends Field
{
	public $checked = false;
	
    public function bindValue($value)
    {
        $this->checked = $value;
    }

    public function getHTML()
    {
        return \Form::bootRadio($this);
    }
}
