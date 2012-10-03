<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/10/12
 * Time: 4:29 PM
 * To change this template use File | Settings | File Templates.
 */

class ArtistsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        //pr($this->Artists->find('all'));
        $this->set('artists', $this->Artist->find('all'));

    }
}
    ?>