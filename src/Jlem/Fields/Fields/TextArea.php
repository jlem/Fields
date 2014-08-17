<?php namespace Jlem\Fields\Fields;

class TextArea extends Field
{
    public function getHTML()
    {
        return \Form::bootTextArea($this);
    }
}
