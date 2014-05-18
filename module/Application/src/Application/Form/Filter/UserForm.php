<?php

namespace Application\Form\Filter;

use \Zend\InputFilter\InputFilter;

class UserForm extends InputFilter
{
    /**
     * @var ServiceManager
     */
    protected $sm = null;

    /**
     * Set service manager
     *
     * @param ServiceManager $sm
     *
     * @return $this
     */
    public function setServiceManager(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }

    /*
     * Get service manager
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->sm;
    }


    public function __construct($sm)
    {
        $this->add(array(
            'name'  =>  'firstname',
            'required'  =>  true
        ));

        $this->add(array(
            'name'  =>  'lastname',
            'required'  =>  true
        ));

        $this->add(array(
            'name'  =>  'email',
            'required'  =>  true
        ));

        $this->add(array(
            'name'  =>  'password',
            'required'  =>  true
        ));

        $this->add(array(
            'name'  =>  'address',
            'required'  =>  true
        ));

        $this->add(array(
            'name'  =>  'birthday',
            'required'  =>  true
        ));
    }
}