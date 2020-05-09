<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $Id
 * @property string|null $CustomData
 * @property string|null $Number
 * @property string|null $Barcode
 * @property string|null $Name1
 * @property string|null $Name2
 * @property string|null $Name3
 * @property string|null $Note
 * @property string|null $Discountgroup
 * @property string|null $Pricegroup
 * @property string|null $Statisticsgroup
 * @property float|null $Price
 * @property float|null $PriceCost
 * @property float|null $PriceRecRetail
 * @property string|null $Currency
 * @property float|null $VatRate
 * @property string|null $Group
 * @property string|null $Colli
 * @property bool|null $AllowOrderDiscount
 * @property float|null $Stock
 * @property float|null $StockReserved
 * @property float|null $StockAvailable
 * @property float|null $StockOrdered
 * @property string|null $SupplierName
 * @property string|null $SupplierNumber
 * @property float|null $Weight
 * @property float|null $Volume
 * @property string|null $Dimensions
 * @property string|null $Unit
 * @property string|null $AltItemNumber
 * @property string|resource|null $Image
 * @property float|null $SortPriority
 * @property bool|null $StockStatus
 */
class Item extends Entity
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
        'CustomData' => true,
        'Number' => true,
        'Barcode' => true,
        'Name1' => true,
        'Name2' => true,
        'Name3' => true,
        'Note' => true,
        'Discountgroup' => true,
        'Pricegroup' => true,
        'Statisticsgroup' => true,
        'Price' => true,
        'PriceCost' => true,
        'PriceRecRetail' => true,
        'Currency' => true,
        'VatRate' => true,
        'Group' => true,
        'Colli' => true,
        'AllowOrderDiscount' => true,
        'Stock' => true,
        'StockReserved' => true,
        'StockAvailable' => true,
        'StockOrdered' => true,
        'SupplierName' => true,
        'SupplierNumber' => true,
        'Weight' => true,
        'Volume' => true,
        'Dimensions' => true,
        'Unit' => true,
        'AltItemNumber' => true,
        'Image' => true,
        'SortPriority' => true,
        'StockStatus' => true,
    ];
}
