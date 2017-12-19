<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SecondHandTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SecondHandTable Test Case
 */
class SecondHandTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SecondHandTable
     */
    public $SecondHand;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.second_hand',
        'app.dealer',
        'app.vehicle_model'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SecondHand') ? [] : ['className' => SecondHandTable::class];
        $this->SecondHand = TableRegistry::get('SecondHand', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SecondHand);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
