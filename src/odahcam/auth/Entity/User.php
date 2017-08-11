<?php namespace \Odahcam\Auth\Entity;

/**
*
* @Entity
* @Table(name="user")
*/
class User
{
    /**
    * @Id
    * @GeneratedValue(strategy="AUTO")
    * @Column(type="integer", name="id")
    */
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    /**
    * @Identity
    * @Column(type="string", name="email")
    */
    protected $identity;

    public function getIdentity()
    {
        return $this->identity;
    }

    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    /**
    * @Password
    * @Column(type="string", name="password")
    */
    protected $password;

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
