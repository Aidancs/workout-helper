<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function index() {

    }

    public function update($payload) {

    }

    public function setName($value) {
        $this->attributes['name'] = $value;
    }

    public function setHeight($value) {
        $this->attributes['height'] = $value;
    }

    public function setWeight($value) {
        $this->attributes['weight'] = $value;
    }

    public function setAge($value) {
        $this->attributes['age'] = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getAge() {
        return $this->age;
    }
}
