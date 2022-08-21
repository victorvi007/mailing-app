<?php
namespace App\Repository;


use App\Models\MailingList;

class MailingListRepository{
  private $model;

  public function __construct(MailingList $model)
  {
        $this->model = $model;
  }

  public function getAllMailingList(){
      return $this->model->orderBy('created_at','DESC')->get();
  }
  public function getMailRecipant($id){
      return $this->model->find($id);
  }
  public function storeEmail($request){
      return $this->model->create([
          'name'=>$request->name,
          'email'=>$request->email,
      ]);
  }
  public function deleteEmail($id){
      return $this->model->find($id)->delete();
  }
}
