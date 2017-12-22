<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PictureSecondHand Entity
 *
 * @property int $id
 * @property int $second_hand_id
 * @property int $picture_id
 *
 * @property \App\Model\Entity\SecondHand $second_hand
 * @property \App\Model\Entity\Picture $picture
 */
class PictureSecondHand extends Entity
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
        'second_hand_id' => true,
        'picture_id' => true,
        'second_hand' => true,
        'picture' => true
    ];
}
