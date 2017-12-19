<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SecondHand Entity
 *
 * @property int $id
 * @property int $price
 * @property int $km
 * @property \Cake\I18n\FrozenDate $first_registration_date
 * @property int $nb_owners
 * @property string $description
 * @property string $pic
 * @property bool $is_approved
 * @property int $dealer_id
 * @property int $vehicle_model_id
 *
 * @property \App\Model\Entity\Dealer $dealer
 * @property \App\Model\Entity\VehicleModel $vehicle_model
 */
class SecondHand extends Entity
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
        'price' => true,
        'km' => true,
        'first_registration_date' => true,
        'nb_owners' => true,
        'description' => true,
        'pic' => true,
        'is_approved' => true,
        'dealer_id' => true,
        'vehicle_model_id' => true,
        'dealer' => true,
        'vehicle_model' => true
    ];
}
