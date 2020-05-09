<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryRelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryRelationsTable Test Case
 */
class CategoryRelationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoryRelationsTable
     */
    public $CategoryRelations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategoryRelations',
        'app.Item',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoryRelations') ? [] : ['className' => CategoryRelationsTable::class];
        $this->CategoryRelations = TableRegistry::getTableLocator()->get('CategoryRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoryRelations);

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
