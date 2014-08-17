<?php namespace Jlem\Fields;

class FormField
{
    protected $Factory;

    public function __construct(FieldFactory $Factory)
    {
        $this->Factory = $Factory;
    }

    /**
     * Returns new a new TextField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\TextField
    */

    public function text($label, Array $args = array()) 
    {
        return $this->Factory->make($label, 'Text', $args);
    }


    /**
     * Returns new a new TextAreaField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\TextAreaField
    */

    public function textarea($label, Array $args = array())
    {
        return $this->Factory->make($label, 'TextArea', $args);
    }


    /**
     * Returns new a new PasswordField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\PasswordField
    */

    public function password($label = null, Array $args = array())
    {
        return $this->Factory->make($label, 'Password', $args);
    }


    /**
     * Returns new a new HiddenField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\HiddenField
    */

    public function hidden($label, Array $args = array())
    {
        return $this->Factory->make($label, 'Hidden', $args);
    }


    /**
     * Returns new a new SelectField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\SelectField
    */

    public function select($label, Array $data = array(), Array $args = array())
    {
        $args['data'] = $data;
        return $this->Factory->make($label, 'Select', $args);
    }
   

    /**
     * Returns new a new MultiSelectField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\MultiSelectField
    */

    public function multiSelect($label, Array $data = array(), Array $args = array())
    {
        $args['data'] = $data;
        return $this->Factory->make($label, 'MultiSelect', $args);
    }

   
    /**
     * Returns new a new CheckBoxField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\CheckBoxField
    */

    public function checkBox($label, Array $args = array())
    {
        return $this->Factory->make($label, 'CheckBox', $args);
    }


   
    /**
     * Returns new a new CheckBoxField
     *
     * @param string $label
     * @param Array $args
     * @access public
     * @return Jlem\Fields\Fields\CheckBoxField
    */

    public function radioButton($label, Array $args = array())
    {
        return $this->Factory->make($label, 'RadioButton', $args);
    }
}
