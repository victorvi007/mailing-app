<?php
namespace App\Repository;

use App\Models\History;

class HistoryRepository{
private $model;

public function __construct( History $model)
{
    $this->model = $model;
}

public function getAllHistory(){
   return $this->model->orderBy('created_at','DESC')->get();
}
public function createHistory($request){
return $this->model->create([
    'to'=>$request->email,
    'subject'=>$request->subject,
    'template'=>$request->template,
    'message'=>$request->message
]);
}

}


