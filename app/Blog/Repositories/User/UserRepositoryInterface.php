<?php namespace Blog\Repositories\User;


interface UserRepositoryInterface {


    /**
     * @return mixed
     */
    public function getAllUsers();

    /**
     * @param $id
     * @return mixed
     */
    public function getSingleUser($id);

    /**
     * @param $input
     * @return mixed
     */
    public function createUser($input);

} 