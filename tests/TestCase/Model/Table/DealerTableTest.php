<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DealerTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DealerTable Test Case
 */
class DealerTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DealerTable
     */
    public $Dealer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dealer',
        'app.second_hand'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dealer') ? [] : ['className' => DealerTable::class];
        $this->Dealer = TableRegistry::get('Dealer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dealer);

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
