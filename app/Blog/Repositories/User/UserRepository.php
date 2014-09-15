<?php namespace Blog\Repositories\User;

use Blog\Entities\User;

class UserRepository implements UserRepositoryInterface {

    /**
     * @var User
     */
    private $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getAllUsers()
    {
        return $this->user->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSingleUser($id)
    {
        return $this->user->findOrFail($id);
    }

    /**
     * @param $input
     * @return mixed
     */
    public function createUser($input)
    {
        // TODO: Implement createUser() method.
    }
}