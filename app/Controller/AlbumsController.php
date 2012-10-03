<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 25/9/12
 * Time: 10:14 AM
 * To change this template use File | Settings | File Templates.
 */

class AlbumsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index()
    {
        $this->set('albums', $this->Album->find('all'));

    }
    public function view($id = null)
    {
        $this->Album->id = $id;
        $this->set('album', $this->Album->read());
    }


}


?>