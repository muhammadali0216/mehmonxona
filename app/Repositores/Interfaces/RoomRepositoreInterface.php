<?php
namespace App\Repositores\Interfaces;


interface RoomRepositoreInterface{
    public function all();
    public function store($request);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
};