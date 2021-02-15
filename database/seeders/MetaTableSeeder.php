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
            ['name'=>'user_status','value'=>'active'],
            ['name'=>'user_status','value'=>'inactive'],
            ['name'=>'user_status','value'=>'deleted'],
        ]);

        Meta::insert([
            ['name'=>'plan_status','value'=>'active'],
            ['name'=>'plan_status','value'=>'inactive'],
            ['name'=>'plan_status','value'=>'deleted'],
        ]);

        Meta::insert([
            ['name'=>'course_status','value'=>'active'],
            ['name'=>'course_status','value'=>'inactive'],
            ['name'=>'course_status','value'=>'deleted'],
        ]);

        Meta::insert([
            ['name'=>'lesson_status','value'=>'active'],
            ['name'=>'lesson_status','value'=>'inactive'],
            ['name'=>'lesson_status','value'=>'deleted'],
        ]);

        Meta::insert([
            ['name'=>'blog_status','value'=>'publish'],
            ['name'=>'blog_status','value'=>'draft'],
            ['name'=>'blog_status','value'=>'deleted'],
        ]);

        Meta::insert([
            ['name'=>'role','value'=>'admin'],
            ['name'=>'role','value'=>'instructor'],
            ['name'=>'role','value'=>'user'],
        ]);

        Meta::insert([
            ['name'=>'social_media','value'=>'facebook','icon_font'=>'icofont-facebok'],
            ['name'=>'social_media','value'=>'instragram','icon_font'=>'icofont-instragram'],
            ['name'=>'social_media','value'=>'linkedn','icon_font'=>'icofont-linkedn'],
            ['name'=>'social_media','value'=>'pinterest','icon_font'=>'icofont-pinterest'],
            ['name'=>'social_media','value'=>'twitter','icon_font'=>'icofont-twitter'],
            ['name'=>'social_media','value'=>'website','icon_font'=>'icofont-globe'],
        ]);

        Meta::insert([
            ['name'=>'dificulty','code'=>1,'value'=>'beginner'],
            ['name'=>'dificulty','code'=>2,'value'=>'moderate'],
            ['name'=>'dificulty','code'=>3,'value'=>'intermediate'],
            ['name'=>'dificulty','code'=>4,'value'=>'advanced'],
        ]);

        Meta::insert([
            ['name'=>'intensity','code'=>1,'value'=>'weak'],
            ['name'=>'intensity','code'=>2,'value'=>'light'],
            ['name'=>'intensity','code'=>3,'value'=>'moderate'],
            ['name'=>'intensity','code'=>4,'value'=>'strong'],
        ]);

        Meta::insert([
            ['name'=>'prop','value'=>'prop_1'],
            ['name'=>'prop','value'=>'prop_2'],
            ['name'=>'prop','value'=>'prop_3'],
            ['name'=>'prop','value'=>'prop_4'],
            ['name'=>'prop','value'=>'prop_5'],
        ]);
    }
}
