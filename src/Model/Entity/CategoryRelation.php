<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CategoryRelation Entity
 *
 * @property int $Id
 * @property string|null $UUID
 * @property int $categoryId
 * @property int $ParentcategoryId
 *
 * @property \App\Model\Entity\Item[] $item
 */
class CategoryRelation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'UUID' => true,
        'categoryId' => true,
        'ParentcategoryId' => true,
        'item' => true,
    ];
}
