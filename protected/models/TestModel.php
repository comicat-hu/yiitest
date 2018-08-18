<?php

class TestModel extends CFormModel
{
    public $page;
    public $dad;
    public $mom;
    public $children;

    public function rules()
    {
        return array(
            array('page', 'numerical', 'allowEmpty' => true),
            array('dad, mom', 'length', 'min' => 1, 'max' => 10, 'allowEmpty' => false),
            array('children', 'type', 'type' => 'array', 'allowEmpty' => false),
        );
    }

    /**
     * @override
     */
    public function validate()
    {
        foreach($this->attributes as $attribute) {
            if (!$this->validateSubModel($attribute)) {
                return false;
            }
        }
        return parent::validate();
    }

    private function validateSubModel($attribute)
    {
        if ($attribute instanceof CModel) {
            return $attribute->validate();
        }

        if (is_array($attribute)) {
            foreach ($attribute as $subAttribute) {
                if (!$this->validateSubModel($subAttribute)) {
                    return false;
                }
            }
        }
        return true;
    }
}