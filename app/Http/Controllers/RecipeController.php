<?php

namespace App\Http\Controllers;


use App\Models\Recipe;
use App\Models\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    //
    public function index() {

        $recipes = Recipe::orderBy('created_at', 'desc')->paginate(10);
        $recipeNames = Recipe::pluck('name');

        return view('Portfolio_3.index', ["recipes" => $recipes, "recipesNames"=> $recipeNames]);

    }

    public function show($id){

        $recipe = Recipe::findOrFail($id);

        return view('Portfolio_3.show', ["recipe"=> $recipe]);

    }

    public function create() {
        

        return view('Portfolio_3.create');

    }

    public function store(Request $request){

        $user = Auth::user(); 
        
        $validated = $request->validate([
            'Recipe'=>'required|string|max:255',
            'Description'=>'required|string|max:2000',

            'cookingtime'=> 'required|integer|min:1|max:120',
            'ingredients'=>'required|string|max:2000',
            'Instructions'=>'required|string|max:5000',
            'type' => 'required|in:French,Italian,Chinese,Indian,Mexican,Others',

        ]);

        Recipe::create([
            'uid' => $user->uid, 
            'name' => $validated['Recipe'],
            'description' => $validated['Description'],
            'cookingtime' => $validated['cookingtime'],
            'ingredients' => $validated['ingredients'],
            'instructions' => $validated['Instructions'],
            'type' => $validated['type'],
        ]);
        return redirect()->route('index');

    }

    public function destroy($id) {

        $recipe = Recipe::findOrFail($id);
        
        if (!Auth::check()) {
            return redirect()->route('show.login')->with('You need to be logged in and own the recipe to delete this');
        }

        if (Auth::user()->uid !== $recipe->uid) {
            return redirect()->route('recipes.show', $recipe->rid)->with('error', 'You do not own this recipe');
        }

        $recipe->delete();
    
        return redirect()->route('index');

    }

    public function edit($id) {

        $recipe = Recipe::findOrFail($id);

        if (!Auth::check()) {
            return redirect()->route('show.login')->with('You need to be logged in and own the recipe to edit this');
        }

        if (Auth::user()->uid !== $recipe->uid) {
            return redirect()->route('recipes.show', $recipe->rid)->with('error', 'You do not own this recipe');
        }
        
        return view('Portfolio_3.edit', ['recipe' => $recipe]);
    }

    public function update(Request $request, $id){

        $recipe = Recipe::findOrFail($id);

        if (!Auth::check()) {
            return redirect()->route('show.login')->with('You need to be logged in and own the recipe to edit this');
        }

        if (Auth::user()->uid !== $recipe->uid) {
            return redirect()->route('recipes.show', $recipe->rid)->with('error', 'You do not own this recipe');
        }

        $validated = $request->validate([
            'Recipe'=>'required|string|max:255',
            'Description'=>'required|string|max:2000',

            'cookingtime'=> 'required|integer|min:1|max:120',
            'ingredients'=>'required|string|max:2000',
            'Instructions'=>'required|string|max:5000',
            'type' => 'required|in:French,Italian,Chinese,Indian,Mexican,Others',

        ]);

        $recipe->update([
            'name' => $validated['Recipe'],
            'description' => $validated['Description'],
            'cookingtime' => $validated['cookingtime'],
            'ingredients' => $validated['ingredients'],
            'instructions' => $validated['Instructions'],
            'type' => $validated['type'],
        ]);

        return redirect()->route('recipes.show', $recipe->rid)->with('Recipe updated');
    }

    public function search(Request $request){

        $search = $request->input('search');

        $recipes = Recipe::where('name', 'LIKE', "%{$search}%")->orWhere('type', 'LIKE', "%{$search}%")->orderBy('created_at', 'desc')->paginate(10);
       
        return view('Portfolio_3.search', ['recipes' => $recipes, 'search' => $search]);

    }
}
