<?php

use Phalcon\Mvc\Controller;

class TestsOneController extends Controller {

//    public function indexAction() {
//    }

    public function veryCustomAction() {
//        echo 'lalla';
//        echo 'lalla';

        $lala = $this->request->getPost('koko');

        return $lala;

    }

}
