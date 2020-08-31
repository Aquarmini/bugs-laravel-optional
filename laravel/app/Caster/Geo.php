<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Caster;

class Geo
{
    public $lat;

    public $lon;

    /**
     * Geo constructor.
     * @param $lat
     * @param $lon
     */
    public function __construct($lat, $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }

    public function toArray()
    {
        return [
            $this->lat, $this->lon,
        ];
    }
}
