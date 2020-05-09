<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoryRelations Model
 *
 * @property \App\Model\Table\ItemTable&\Cake\ORM\Association\BelongsToMany $Item
 *
 * @method \App\Model\Entity\CategoryRelation get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoryRelation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoryRelation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoryRelation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoryRelation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoryRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoryRelation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoryRelation findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoryRelationsTable extends Table
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

        $this->setTable('category_relations');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');

        $this->belongsToMany('Item', [
            'foreignKey' => 'category_relation_id',
            'targetForeignKey' => 'item_id',
            'joinTable' => 'item_category_relations',
        ]);
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
            ->integer('ParentcategoryId')
            ->requirePresence('ParentcategoryId', 'create')
            ->notEmptyString('ParentcategoryId');

        return $validator;
    }
}
