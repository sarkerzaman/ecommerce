<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemCategoryRelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemCategoryRelationsTable Test Case
 */
class ItemCategoryRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemCategoryRelationsTable
     */
    public $ItemCategoryRelations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ItemCategoryRelations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ItemCategoryRelations') ? [] : ['className' => ItemCategoryRelationsTable::class];
        $this->ItemCategoryRelations = TableRegistry::getTableLocator()->get('ItemCategoryRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemCategoryRelations);

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
