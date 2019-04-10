<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class demoTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('demo');

        $this->setPrimaryKey('demo_id');

        $this->setEntityClass('App\Model\Entity\PO');
    }
}
