<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Item Model
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 */
class ItemTable extends Table
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

        $this->setTable('item');
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
            ->scalar('CustomData')
            ->maxLength('CustomData', 250)
            ->allowEmptyString('CustomData');

        $validator
            ->scalar('Number')
            ->maxLength('Number', 250)
            ->allowEmptyString('Number');

        $validator
            ->scalar('Barcode')
            ->maxLength('Barcode', 250)
            ->allowEmptyString('Barcode');

        $validator
            ->scalar('Name1')
            ->maxLength('Name1', 250)
            ->allowEmptyString('Name1');

        $validator
            ->scalar('Name2')
            ->maxLength('Name2', 250)
            ->allowEmptyString('Name2');

        $validator
            ->scalar('Name3')
            ->maxLength('Name3', 250)
            ->allowEmptyString('Name3');

        $validator
            ->scalar('Note')
            ->maxLength('Note', 4294967295)
            ->allowEmptyString('Note');

        $validator
            ->scalar('Discountgroup')
            ->maxLength('Discountgroup', 250)
            ->allowEmptyString('Discountgroup');

        $validator
            ->scalar('Pricegroup')
            ->maxLength('Pricegroup', 250)
            ->allowEmptyString('Pricegroup');

        $validator
            ->scalar('Statisticsgroup')
            ->maxLength('Statisticsgroup', 250)
            ->allowEmptyString('Statisticsgroup');

        $validator
            ->numeric('Price')
            ->allowEmptyString('Price');

        $validator
            ->numeric('PriceCost')
            ->allowEmptyString('PriceCost');

        $validator
            ->numeric('PriceRecRetail')
            ->allowEmptyString('PriceRecRetail');

        $validator
            ->scalar('Currency')
            ->maxLength('Currency', 3)
            ->allowEmptyString('Currency');

        $validator
            ->numeric('VatRate')
            ->allowEmptyString('VatRate');

        $validator
            ->scalar('Group')
            ->maxLength('Group', 250)
            ->allowEmptyString('Group');

        $validator
            ->scalar('Colli')
            ->maxLength('Colli', 250)
            ->allowEmptyString('Colli');

        $validator
            ->boolean('AllowOrderDiscount')
            ->allowEmptyString('AllowOrderDiscount');

        $validator
            ->numeric('Stock')
            ->allowEmptyString('Stock');

        $validator
            ->numeric('StockReserved')
            ->allowEmptyString('StockReserved');

        $validator
            ->numeric('StockAvailable')
            ->allowEmptyString('StockAvailable');

        $validator
            ->numeric('StockOrdered')
            ->allowEmptyString('StockOrdered');

        $validator
            ->scalar('SupplierName')
            ->maxLength('SupplierName', 250)
            ->allowEmptyString('SupplierName');

        $validator
            ->scalar('SupplierNumber')
            ->maxLength('SupplierNumber', 250)
            ->allowEmptyString('SupplierNumber');

        $validator
            ->numeric('Weight')
            ->allowEmptyString('Weight');

        $validator
            ->numeric('Volume')
            ->allowEmptyString('Volume');

        $validator
            ->scalar('Dimensions')
            ->maxLength('Dimensions', 250)
            ->allowEmptyString('Dimensions');

        $validator
            ->scalar('Unit')
            ->maxLength('Unit', 250)
            ->allowEmptyString('Unit');

        $validator
            ->scalar('AltItemNumber')
            ->maxLength('AltItemNumber', 250)
            ->allowEmptyString('AltItemNumber');

        $validator
            ->allowEmptyString('Image');

        $validator
            ->numeric('SortPriority')
            ->allowEmptyString('SortPriority');

        $validator
            ->boolean('StockStatus')
            ->allowEmptyString('StockStatus');

        return $validator;
    }
}
