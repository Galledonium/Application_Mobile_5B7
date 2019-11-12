<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationsTable Test Case
 */
class ApplicationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationsTable
     */
    public $Applications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Applications',
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'app.Categories',
>>>>>>> parent of b5619d9... fasgadg
        'app.Files',
        'app.Subcategories',
=======
>>>>>>> parent of 278faef... egs
        'app.Paiements',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Applications') ? [] : ['className' => ApplicationsTable::class];
        $this->Applications = TableRegistry::getTableLocator()->get('Applications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Applications);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
