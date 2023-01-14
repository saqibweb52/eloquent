<?php

namespace App\Repositories;

use App\Repositories\EloquentRepositories;
use App\Models\student;
class EloquentRepository implements RepositoryInterface{

protected $student;

public function __construct(User $student){

    $this->student = $student;
}

public function all(){

return $this->student->all();

}

public function create(array $data){

    return $this->student-create($data);
    
    }

    public function update(array $data, $id){

        $user = $this->student->find($id);

        return $user->update($data);        
        }

     public function delete($id){

        return $this->student->destroy($id);
     }


     public function show($id){

      return $this->student->findOrFail($id);

     }
}