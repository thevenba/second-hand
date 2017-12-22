<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PictureSecondHandFixture
 *
 */
class PictureSecondHandFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'picture_second_hand';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'second_hand_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'picture_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'picture_id' => ['type' => 'index', 'columns' => ['picture_id'], 'length' => []],
            'second_hand_id' => ['type' => 'index', 'columns' => ['second_hand_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'picture_second_hand_ibfk_1' => ['type' => 'foreign', 'columns' => ['picture_id'], 'references' => ['picture', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'picture_second_hand_ibfk_2' => ['type' => 'foreign', 'columns' => ['second_hand_id'], 'references' => ['second_hand', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'second_hand_id' => 1,
            'picture_id' => 1
        ],
    ];
}
