<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Request;

use App\Models\Catalog;

class CatalogResource extends JsonResource
{

    public $collects = Catalog::class;
    // public static $wrap = 'addresses';
    // public static $wrap = 'catalog';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // public function toArray( $request ): object
    public function toArray( $request ): array
    {
        return [ $this->resource ];
        // return [ $this->resource ];
        // return [
        //     'data' => $this->resource,
        //     // 'data2' => $this->resource[1]['id'],
        //     // 'id' => $this->resource['id'],
        //     // 'name' => $this->resource['name'],
        //     // 'up_catalogs_id' => $this->resource['up_catalogs_id'],
        // ];
        // return parent::toArray($request);
    }
}
