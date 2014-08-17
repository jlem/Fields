<?php namespace Jlem\Fields\Fields;

class Text extends Field
{
    public function getHTML()
    {
        return \Form::bootText($this);
    }
}
