<?php namespace App\Controllers;

use App\Models\PersonalModel;

class Personal extends BaseController
{
    public function index()
    {
        $model = new PersonalModel();
        $data = [
            'personal' => $model->findAll(),
            'document_code' => 'document_code'
        ];

        return view('personal', $data);
    }

    //--------------------------------------------------------------------

    public function save()
    {

        $model = new PersonalModel();
        $_POST['status'] = isset($_POST['status']);
        $model->insert($_POST);
        return $this->response->redirect(site_url('personal'));
    }

    public function get($id)
    {

        $model = new PersonalModel();
        $newmodel['model']=$model->find($id);
    return view('get', $newmodel);
    }

public function update()
{

    $model = new PersonalModel();
    $_POST['status'] = isset($_POST['status']);
    $model->update($_POST['id'],$_POST);
    return $this->response->redirect(site_url('personal'));

}
public function del($id)
{
    $model = new PersonalModel();
    $model->delete($id);
    return $this->response->redirect(site_url('personal'));
    

}





}
