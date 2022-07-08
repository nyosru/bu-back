<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
 * @OA\Info(
 *     title="Сервис API", version="v0.1",
 *     description=" работаем с данными "
 *      )
 * @OA\Server(
 *     description="Локальный тест ",
 *     url="http://localhost"
 * )
 * OA\Server(
 *     description=" боевой домен ",
 *     url="https://esh-derevenskoe.ru/"
 * )
 * OA\ExternalDocumentation(
 *     description="Документация Backend",
 *     url="https://confluence.ru/. . . ",
 *     )
 */

use OpenApi\Annotations as OA;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
