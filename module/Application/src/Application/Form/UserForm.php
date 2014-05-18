<?php
namespace Application\Form;

use Zend\Form\Form;
use \DoctrineModule\Persistence\ObjectManagerAwareInterface;

class UserForm extends Form implements ObjectManagerAwareInterface
{
    /**
     * Object manager
     *
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    protected $objectManager;

    /**
     * @see \DoctrineModule\Persistence\ObjectManagerAwareInterface::setObjectManager()
     */
    public function setObjectManager(\Doctrine\Common\Persistence\ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;

        return $this;
    }

    /**
     * @see \DoctrineModule\Persistence\ObjectManagerAwareInterface::getObjectManager()
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }

    public function init()
    {
        $this->setAttribute('class', 'form-horizontal');

        $this->add(array(
            'name' => 'id',
            'type' => 'hidden',
            'attributes' => array()
        ));

        $this->add(array(
            'name' => 'firstname',
            'type' => 'text',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_firstname',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'lastname',
            'type' => 'text',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_lastname',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'email',
            'type' => 'text',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_email',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'address',
            'type' => 'text',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_address',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'text',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_password',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'birthday',
            'type' => 'date',
            'attributes' => array(),
            'options' => array(
                'label' => '__label_user_birthday',
                'label_attributes' => array(
                    'class' => 'control-label'
                )
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'class' => "btn btn-primary",
                'value' => '__save'
            )
        ));
    }

}