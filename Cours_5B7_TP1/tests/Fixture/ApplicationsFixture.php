<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'prix' => ['type' => 'decimal', 'length' => 3, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'evaluation' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
<<<<<<< HEAD
            'sqlite_autoindex_applications_1' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'subcategorie_id_fk' => ['type' => 'foreign', 'columns' => ['subcategorie_id'], 'references' => ['subcategories', null], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
=======
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
>>>>>>> parent of 278faef... egs
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'prix' => 1.5,
                'evaluation' => 1,
<<<<<<< HEAD
                'file_id' => 1,
<<<<<<< HEAD
                'created' => '2019-11-12 22:39:12',
                'modified' => '2019-11-12 22:39:12',
=======
                'created' => '2019-11-12 22:10:18',
                'modified' => '2019-11-12 22:10:18',
>>>>>>> parent of b5619d9... fasgadg
                'subcategorie_id' => 1
=======
                'created' => '2019-10-07 17:51:28',
                'modified' => '2019-10-07 17:51:28'
>>>>>>> parent of 278faef... egs
            ],
        ];
        parent::init();
    }
}
