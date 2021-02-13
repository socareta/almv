<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meta;

class MetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meta::insert([
            [ 'name'=>'category','value'=>'Landscape'],
            [ 'name'=>'category','value'=>'Faces'],
            [ 'name'=>'category','value'=>'Temples'],
            [ 'name'=>'category','value'=>'Celebration'],
            [ 'name'=>'category','value'=>'Art'],
            [ 'name'=>'category','value'=>'Water, river, rain, sea'],
            [ 'name'=>'category','value'=>'Wildlife'],
            [ 'name'=>'category','value'=>'Fire, volcano'],
            [ 'name'=>'category','value'=>'Earth'],
            [ 'name'=>'category','value'=>'Plants'],
            [ 'name'=>'category','value'=>'Air, sky, kites'],
            [ 'name'=>'category','value'=>'Other'],
            [ 'name'=>'maxVote','value'=>3],
            [ 'name'=>'priceType','value'=>'Good Quality paper (40x60),30'],
            [ 'name'=>'priceType','value'=>'Good Quality paper (40x90),40'],
            [ 'name'=>'priceType','value'=>'Art book,50'],
            [ 'name'=>'priceType','value'=>'Download,5'],
            
        ]);
    }
}
