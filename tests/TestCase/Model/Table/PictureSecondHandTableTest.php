<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PictureSecondHandTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PictureSecondHandTable Test Case
 */
class PictureSecondHandTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PictureSecondHandTable
     */
    public $PictureSecondHand;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.picture_second_hand',
        'app.second_hand',
        'app.dealer',
        'app.vehicle_model',
        'app.picture'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PictureSecondHand') ? [] : ['className' => PictureSecondHandTable::class];
        $this->PictureSecondHand = TableRegistry::get('PictureSecondHand', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PictureSecondHand);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
