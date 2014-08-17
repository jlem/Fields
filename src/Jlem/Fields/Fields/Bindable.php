<?php namespace Jlem\Fields\Fields;

interface Bindable
{
    public function hasData();
    public function getData();
	public function bindData($data);
}
