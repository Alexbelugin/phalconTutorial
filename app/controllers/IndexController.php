<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller {
    public function indexAction() {
        $this->view->users = Users::find();
    }

    public function lalaAction() {
        $lala = $this->request->getJsonRawBody();
        $lala3 = $this->request->get('koko');
        $lala2 = $this->request->isPost();
        echo 'lalala';
        return $this->response->setJsonContent([
            'result' => 'error',
            'error_code' => 'applications_limit_reached_for_ip',
            'error' => 'Applications limit reached for current IP.',
        ], JSON_UNESCAPED_SLASHES);
//        return $lala;
    }
}
