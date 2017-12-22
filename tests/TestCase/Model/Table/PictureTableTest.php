<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PictureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PictureTable Test Case
 */
class PictureTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PictureTable
     */
    public $Picture;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.picture',
        'app.second_hand',
        'app.dealer',
        'app.vehicle_model',
        'app.picture_second_hand'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Picture') ? [] : ['className' => PictureTable::class];
        $this->Picture = TableRegistry::get('Picture', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Picture);

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
