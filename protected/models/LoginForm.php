<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe = false;

    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     * 
     * @return null
     */
    public function rules()
    {
        return [
            // username and password are required
            // use CRequiredValidator
            ['username, password', 'required'],
            // rememberMe needs to be a boolean
            // use CBooleanValidator
            ['rememberMe', 'boolean'],
            // password needs to be authenticated
            // use method authenticate()
            ['password', 'authenticate'],
        ];
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     *
     * @param string $attribute the name of the attribute to be validated.
     * @param array  $params    additional parameters passed with rule when being executed.
     *
     * @return null
     */
    public function authenticate($attribute, $params)
    {

        $this->_identity = new UserIdentity($this->username, $this->password);
        if (!$this->_identity->authenticate()) {
            $this->addError('password', 'Invalid Username or Password!');
        }
    }
}
