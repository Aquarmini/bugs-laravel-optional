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

use Hyperf\Contract\CastsAttributes;

class GeoCaster implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        var_dump('get');
        return new Geo($attributes['lat'], $attributes['lon']);
    }

    public function set($model, string $key, $value, array $attributes)
    {
        var_dump('set');
        return [
            'lat' => $value->lat,
            'lon' => $value->lon,
        ];
    }
}
