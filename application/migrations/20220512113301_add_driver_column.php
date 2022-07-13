<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_driver_column extends CI_Migration{

    public function up(){
        $fields = array(
            'is_driver' => array(
                'type' => 'BOOLEAN',
                'default' => FALSE,
                'null'      => TRUE
            )
        );
        $this->dbforge->add_column('tbl_users', $fields);
    }

    public function down(){
        $this->dbforge->drop_column('tbl_users', 'is_driver');
    }
}
