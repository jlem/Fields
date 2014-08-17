<?php namespace Jlem\Forms\Fields;

class Password extends TextField
{
    public function getHTML()
    {
    	return \Form::bootPassword($this);
    }
}
