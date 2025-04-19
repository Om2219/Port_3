<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipe;

use function Pest\Laravel\get;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Recipe::create([
            'name' => 'Shaved Asparagus Pizza',
            'description' => 'description',
            'type' => 'Italian',
            'cookingtime' => 50,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 11
        ]);

        Recipe::create([
            'name' => 'Classic Pound Cake',
            'description' => '/description;m',
            'type' => 'Others',
            'cookingtime' => 30,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 10
        ]);

        Recipe::create([
            'name' => 'Parchment-Baked Salmon',
            'description' => '48I+description&*(',
            'type' => 'Others',
            'cookingtime' => 50,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 9
        ]);

        Recipe::create([
            'name' => 'Rustic White Bread',
            'description' => '33tdescriptionK!28?',
            'type' => 'French',
            'cookingtime' => 50,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 7
        ]);

        Recipe::create([
            'name' => 'Cheesy Buffalo Chicken Spaghetti',
            'description' => 'G.u1;description/',
            'type' => 'Others',
            'cookingtime' => 10,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 8
        ]);

        Recipe::create([
            'name' => 'Caramelized Brown Butter Rice',
            'description' => 'mD^description',
            'type' => 'Others',
            'cookingtime' => 20,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 6
        ]);

        Recipe::create([
            'name' => 'Sweet potato & peanut curry',
            'description' => 'aBjj\\description,505',
            'type' => 'Indian',
            'cookingtime' => 50,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 4
        ]);

        Recipe::create([
            'name' => 'Sausage casserole',
            'description' => '6T&description/0i/D',
            'type' => 'Others',
            'cookingtime' => 30,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 3
        ]);

        Recipe::create([
            'name' => 'Chicken & chorizo jambalaya',
            'description' => 'description!1~4/b',
            'type' => 'Chinese',
            'cookingtime' => 20,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 5
        ]);

        Recipe::create([
            'name' => 'Lasagne',
            'description' => '423~description+b]|',
            'type' => 'Italian',
            'cookingtime' => 10,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 1
        ]);

        Recipe::create([
            'name' => 'Chicken curry',
            'description' => 'O5)2g>description',
            'type' => 'Indian',
            'cookingtime' => 20,
            'ingredients' => 'tomato',
            'instructions' => 'step 1 step 2',
            'uid' => 2
        ]);
    }
}
