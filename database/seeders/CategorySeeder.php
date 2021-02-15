<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category-> slug = 'yoga';
        $category-> name = 'yoga';
        
        $category->save();
        Category::insert([
            ['parent_id'=>$category->id,'slug'=>'ashtanga','name'=>'ashtanga','parent_name'=>'yoga'],
            ['parent_id'=>$category->id,'slug'=>'hatha','name'=>'hatha','parent_name'=>'yoga'],
            ['parent_id'=>$category->id,'slug'=>'restorative','name'=>'restorative','parent_name'=>'yoga'],
            ['parent_id'=>$category->id,'slug'=>'vinyasa','name'=>'vinyasa','parent_name'=>'yoga'],
            ['parent_id'=>$category->id,'slug'=>'kundalini','name'=>'kundalini','parent_name'=>'yoga'],
            ['parent_id'=>$category->id,'slug'=>'prenatal','name'=>'prenatal','parent_name'=>'yoga']
        ]);
        
        $category = new Category;
        $category-> slug = 'fitness';
        $category-> name = 'fitness';
        
        $category->save();
        Category::insert([
            ['parent_id'=>$category->id,'slug'=>'strength','name'=>'strength','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'hiit','name'=>'hiit','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'pilates','name'=>'pilates','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'barre','name'=>'barre','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'stretching','name'=>'stretching','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'core','name'=>'core','parent_name'=>'fitness']
        ]);

        $category = new Category;
        $category-> slug = 'mindfulness';
        $category-> name = 'mindfulness';
        
        $category->save();
        Category::insert([
            ['parent_id'=>$category->id,'slug'=>'yoga-nidra','name'=>'yoga nidra','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'sound-bath','name'=>'sound bath','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'meditation','name'=>'meditation','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'breathwork','name'=>'breathwork','parent_name'=>'fitness'],
            ['parent_id'=>$category->id,'slug'=>'personal-growth','name'=>'personal growth','parent_name'=>'fitness']
        ]);
        
        $category = new Category;
        $category-> slug = 'skills';
        $category-> name = 'skills';
        
        $category->save();
        Category::insert([
            ['parent_id'=>$category->id,'slug'=>'yoga-poses','name'=>'yoga poses','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'how-to-teach','name'=>'how to teach','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'backbends','name'=>'backbends','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'inversions','name'=>'inversions','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'arm-balances','name'=>'arm balances','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'mobility','name'=>'mobility','parent_name'=>'skills'],
            ['parent_id'=>$category->id,'slug'=>'flexibility','name'=>'flexibility','parent_name'=>'skills']
        ]);


    }
}
