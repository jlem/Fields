<?php namespace Jlem\Fields\Fields;

abstract class Field
{
    public $value;
    public $error;
    public $args;
    
    public function __construct($args)
    {
        $this->args = $args;
    }

    /**
     * Sets errors and renders the field. Error setting needs to happen just before render, due to Laravel's form behavior.
     * 
     * @param  mixed $errors Message bag of error messages
     * @return string         HTML field
     */
    
    public function render($errors)
    {
        $this->setErrors($errors);
        return $this->getHTML();
    }


    /**
     * Returns the value bound to the field
     *
     * @access public
     * @return string
    */

    public function getValue()
    {
        return $this->value;
    }


    /**
     * Binds a value to the field
     * 
     * @param  string $value
     * @return void
     */
    
    public function bindValue($value)
    {
        $this->value = $value;
    }


    /**
     * Gets the error for this field. Only one error will be present at a time.
     *
     * @access public
     * @return string
    */

    public function getError()
    {
        return ($this->hasErrors()) ? $this->error : null;
    }



    /**
     * Checks to see if errors are present for this field
     * @return boolean
     */
    
    public function hasErrors()
    {
        return ($this->error) ? true : false;
    }



    /**
     * Sets multiple errors for this field
     * 
     * @param mixed $errors
     */
    
    protected function setErrors($errors)
    {
        if ($errors->has($this->getName())) {
            $this->setError($errors->first($this->getName()));
        }
    }



    /**
     * Sets a single error for this field
     * 
     * @param string $error
     */
    
    public function setError($error)
    {
        $this->error = $error;
    }


    /**
     * Gets the field name string
     *
     * @access public
     * @return string
    */

    public function getName()
    {
        return $this->get('name');
    }


    /**
     * Gets the label string
     *
     * @access public
     * @return string
    */

    public function getLabel()
    {
        return $this->get('label');
    }


    /**
     * Return the value of an argument by name
     *
     * @param string $name
     * @access public
     * @return string
    */

    public function get($name)
    {
        return (isset($this->args[$name])) ? $this->args[$name] : null;
    }


    /**
     * Returns the HTML of the form field, complete with all session input, initial value bindings, and error messages
     * 
     * @return string
     */
    
    abstract public function getHTML();
}
