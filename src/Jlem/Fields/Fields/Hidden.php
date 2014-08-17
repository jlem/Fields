<?php namespace Jlem\Fields\Fields;

class Hidden extends Field
{
    public function getHTML()
    {
        return \Form::bootHidden($this);
    }
}
