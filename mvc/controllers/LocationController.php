<?php
namespace App\Controllers;

use App\Providers\Auth;
 use App\Models\Location;
use App\Providers\View;
use App\Providers\Validator;


class LocationController {

    public function index(){
        if(Auth::session()){
        $location = new Location;
        $select = $location->select();
        //print_r($select);
        // include('views/location/index.php');
        if($select){
            return View::render('location/index', ['locations' => $select]);
        }else{
            return View::render('error');
        } 
    }   
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $location = new Location;
            $selectId = $location->selectId($data['id']);
            if($selectId){
                return View::render('location/show', ['location' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('location/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('date_debut', $data['date_debut'], 'la date debut');
        // $validator->field('date_fin', $data['date_fin'])->max(45);
        // $validator->field('prix', $data['prix'], 'prix')->max(10);
        

        if($validator->isSuccess()){
            $location = new Location;
            $insert = $location->insert($data);        
            if($insert){
                return View::redirect('location');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('location/create', ['errors'=>$errors, 'location' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $location = new Location;
            $selectId = $location->selectId($data['id']);
            if($selectId){
                return View::render('location/edit', ['location' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }
    public function update($data, $get){
        // $get['id'];
        $validator = new Validator;
        // $validator->field('date_debut', $data['date_debut'], 'la date debut')->min(2)->max(25);
        // $validator->field('date_fin', $data['date_fin'])->max(45);
        // $validator->field('prix', $data['prix'], 'prix')->max(10);

        if($validator->isSuccess()){
                $location = new Location;
                $update = $location->update($data, $get['id']);

                if($update){
                    return View::redirect('location/show?id='.$get['id']);
                }else{
                    return View::render('error');
                } 
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('location/edit', ['errors'=>$errors, 'location' => $data]);
        }
    }

    public function delete($data){
        $location = new  Location;
        $delete = $location->delete($data['id']);
        if($delete){
            return View::redirect('location');
        }else{
            return View::render('error');
        }
    }
}