<?php
namespace App\Repositories;

use App\Models\Test;
use App\Repositories\TestInterface;

class TestRepositories1 implements TestInterface {
    public function all(){

        return Test::get();
    }

    public function get( $id ){

        return Test::find($id);
    }

    public function store( $data ){
        return Test::create($data);
    }

    public function update( $id, $data ){
        return Test::find($id)->update( $data);
    }

    public function delete( $id ){
        return Test::destroy($id);
    }
}

$name ='';
Schema::drop(');

