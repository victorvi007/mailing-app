<?php
namespace App\Repository;

use App\Models\Template;

class templateRepository {

    private $model;
    public function __construct(Template $model){

        $this->model = $model;

    }

    public function getAllTemplate(){
        return $this->model->get();
    }
    public function getTemplate($id){
        return $this->model->find($id);
    }
}


