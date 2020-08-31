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
namespace App\Controller;

use App\Caster\Geo;
use App\Model\Home;

class IndexController extends Controller
{
    public function index()
    {
        $obj = (object) ['id' => 1];
        dump(isset(optional($obj)->id));
        dump(optional($obj)->id);
        dump(isset(optional($obj)['id']));
        dump(optional($obj)['id']);

        $obj = ['id' => 1];
        dump(isset(optional($obj)->id));
        dump(optional($obj)->id);
        dump(isset(optional($obj)['id']));
        dump(optional($obj)['id']);

        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        return $this->response->success([
            'user' => $user,
            'method' => $method,
            'message' => 'Hello Hyperf.',
        ]);
    }

    public function geo()
    {
        // $model = new Home();
        // $model->title = 'test';
        // $model->geo = new Geo(1.1, 2.2);
        // $model->lat = 1.0;
        // $model->lon = 1.1;
        // $model->save();

        /** @var Home $model */
        $model = Home::query()->find(1);
        return $this->response->success([
            $model->geo->toArray(),
            $model->title,
            $model->lat,
            $model->lon,
        ]);
    }
}
