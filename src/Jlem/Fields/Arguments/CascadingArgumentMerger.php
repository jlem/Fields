<?php namespace Jlem\Fields\Arguments;

class CascadingArgumentMerger implements ArgumentMerger
{
    /**
     * Cascade merges each set of arguments together
     * First the default arguments are overrwitten by the configuration arguments
     * Then the explict arguments overwrite the newly merged set
     *
     * @param array $defaultArguments
     * @param array $configArguments
     * @param array $explicitArguments
     * @access protected
     * @return void
    */

    public function mergeArguments(Array $defaultArguments, Array $configArguments, Array $explicitArguments)
    {
        // Ovewrite default arguments with configuration arguments
        $args = array_merge($defaultArguments, $configArguments);

        // Overwrite new arguments with explicit arguments
        return array_merge($args, $explicitArguments);
    }
}
