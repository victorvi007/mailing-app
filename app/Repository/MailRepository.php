<?php
namespace App\Repository;

use App\Models\Mail;

class MailRepository {

    private $model;
    public function __construct(Mail $model){
        $this->model = $model;
    }
    public function getAllMail(){
        return $this->model->orderBy('updated_at','DESC')->get();
    }
    public function getMail($id){
        return $this->model->find($id);
    }
    public function getLatestMail(){
        return $this->model->latest()->first();
    }

    public function storeComposedMail($request){
        return $this->model->create([
            'name'=>$request->name,
            'message'=>$request->message,
        ]);
    }


}
