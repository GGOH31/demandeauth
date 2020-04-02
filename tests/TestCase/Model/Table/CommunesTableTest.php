<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommunesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommunesTable Test Case
 */
class CommunesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommunesTable
     */
    public $Communes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Communes',
        'app.Demandeurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Communes') ? [] : ['className' => CommunesTable::class];
        $this->Communes = TableRegistry::getTableLocator()->get('Communes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Communes);

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
