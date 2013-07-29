<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author ricky.chow
 */
class Post extends AppModel {

    public $validate = array(
        'title' => array('rule' => 'notEmpty'),
        'body'  => array('rule' => 'notEmpty')
    );

}

?>
