<?php namespace \Odahcam\Auth\Repository;

// @TODO: assign to Entity
class User
{
    public function check_permission($permission_name)
    {
        $sqlStrig = 'SELECT * FROM users AS user

        JOIN user_groups ON(user.id = user_groups.user_id)

        JOIN user_permissions ON (user.id = user_permissions.user_id)

        JOIN permission ON (
            permission.id = user_permissions.permission_id OR
            permission.id = user_groups.permission_id 
        )

        WHERE user.id = '.$this->user->id.'
        AND (
            permission.name = "'.$permission_name.'" OR
            permission.slug = "'.$permission_name.'"
        )';
    }
}
