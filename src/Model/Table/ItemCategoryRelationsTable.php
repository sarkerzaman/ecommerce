<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ItemCategoryRelations Model
 *
 * @method \App\Model\Entity\ItemCategoryRelation get($primaryKey, $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ItemCategoryRelation findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemCategoryRelationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('item_category_relations');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Id')
            ->allowEmptyString('Id', null, 'create');

        $validator
            ->scalar('UUID')
            ->maxLength('UUID', 40)
            ->allowEmptyString('UUID');

        $validator
            ->integer('categoryId')
            ->requirePresence('categoryId', 'create')
            ->notEmptyString('categoryId');

        $validator
            ->scalar('ItemNumber')
            ->maxLength('ItemNumber', 250)
            ->requirePresence('ItemNumber', 'create')
            ->notEmptyString('ItemNumber');

        return $validator;
    }
}
