<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;

use App\Http\Resources\CatalogResource;
use App\Models\Catalog;

class BuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showIndex()
    {

        $ar = [
            'items' => self::getItems()
        ];

        return view('index', $ar);
    }

    public function showCatalog()
    {

        $ar = [
            'items' => self::getItems()
        ];

        return view('index', $ar);
    }


    public function apiGetCatalogs($type = null)
    {
        if ($type == 'first') {
            return new CatalogResource(Catalog::addSelect('id', 'name', 'up_catalogs_id')->whereNull('up_catalogs_id')->where('show', '=', 'on')->get());
        } else {
            return new CatalogResource(Catalog::addSelect('id', 'name', 'up_catalogs_id')->
            // whereNull('up_catalogs_id')->
            where('show', '=', 'on')->get());
        }
        // return new CatalogResource(Catalog::findOrFail($id));
        // $ar = [
        //     'items' => self::getItems()
        // ];
        // return view('index', $ar);
    }

    public function apiGetCatalog($id)
    {
        return new CatalogResource(Catalog::findOrFail($id));
    }

    final static function getItems()
    {
        $faker = \Faker\Factory::create();

        $r = [];
        for ($i = 0; $i <= 15; $i++) {
            $r[] = [
                'name' => $faker->firstName(),
                'price' => $faker->numberBetween(10, 100) * 100,
                'img' => 'https://via.placeholder.com/250x150/FFaaaa/FFFFFF?Text=Down.com',
            ];
        }
        return $r;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
