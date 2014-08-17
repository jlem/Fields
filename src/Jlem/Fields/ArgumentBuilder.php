<?php namespace Jlem\Fields;

class ArgumentBuilder
{
    public function makeArguments($label, Array $explicitArgs)
    {
        $defaultArgs = [
            'label' => $label, 
            'name' => $this->inferName($label)
        ];

        // Get configs
        $configArgs = ($this->getConfig($this->inferName($label))) ?: [] ;

        // Overrite initial args with configs
        $args = array_merge($defaultArgs, $configArgs);

        // Overwrite new args with explicit args
        $args = array_merge($args, $explicitArgs);

        return $args;
    }

    protected function getConfig($name)
    {
        return \Config::get("fields::fields.{$name}");
    }

    protected function inferName($label)
    {
        return strtolower(str_replace(' ', '_', $label));
    }
}
