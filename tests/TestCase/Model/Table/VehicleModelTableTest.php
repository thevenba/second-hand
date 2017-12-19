<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehicleModelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehicleModelTable Test Case
 */
class VehicleModelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VehicleModelTable
     */
    public $VehicleModel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicle_model',
        'app.second_hand',
        'app.dealer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VehicleModel') ? [] : ['className' => VehicleModelTable::class];
        $this->VehicleModel = TableRegistry::get('VehicleModel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VehicleModel);

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
