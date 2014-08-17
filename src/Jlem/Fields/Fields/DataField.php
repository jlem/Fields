<?php namespace Jlem\Fields\Fields;

trait DataField
{
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return empty($this->data);
    }

    public function bindData($data)
    {
        $this->data = ($data) ?: [];
    }
}
