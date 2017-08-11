<?php

namespace \Odahcam\Auth;

class UserManager
{
    protected $user;

    public function __construct()
    {
    }

    public function load($id)
    {
    }

    public function loadBy($prop_name, $prop_value)
    {
        $user->{$prop_name} == $prop_value;
    }

    public function has_permission($permission_name)
    {
    }

    public function generate_forget_password_token()
    {
    }

    public function change_password($old, $new)
    {
        if ($old == true) {
            $user->password = $new;
            $user->save();
        }
    }
}
