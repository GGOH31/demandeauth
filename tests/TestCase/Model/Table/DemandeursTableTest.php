<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandeursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandeursTable Test Case
 */
class DemandeursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandeursTable
     */
    public $Demandeurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Demandeurs',
        'app.Communes',
        'app.Demandes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Demandeurs') ? [] : ['className' => DemandeursTable::class];
        $this->Demandeurs = TableRegistry::getTableLocator()->get('Demandeurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Demandeurs);

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
