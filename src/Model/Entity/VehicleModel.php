<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VehicleModel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $brand
 * @property int $engine_size
 * @property int $year
 *
 * @property \App\Model\Entity\SecondHand[] $second_hand
 */
class VehicleModel extends Entity
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
        'name' => true,
        'brand' => true,
        'engine_size' => true,
        'year' => true,
        'second_hand' => true
    ];
}
