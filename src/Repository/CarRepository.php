<?php

namespace App\Repository;

use App\Model\Car;

use PDO;

/**
 * @extends ModelRepository<Car>
 */
class CarRepository extends ModelRepository
{
    public function __construct(PDO $pdo)
    {
        parent::__construct(
            $pdo,
            Car::class,
            'Car'
        );
    }
}