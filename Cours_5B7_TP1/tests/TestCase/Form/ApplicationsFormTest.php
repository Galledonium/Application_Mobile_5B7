<?php
namespace App\Test\TestCase\Form;

use App\Form\ApplicationsForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\ApplicationsForm Test Case
 */
class ApplicationsFormTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Form\ApplicationsForm
     */
    public $Applications;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Applications = new ApplicationsForm();
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
