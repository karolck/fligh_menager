<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AirportSizes Entity.
 */
class AirportSizes extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'iata' => true,
        'lat' => true,
        'lon' => true,
        'status' => true,
        'name' => true,
    ];

}
