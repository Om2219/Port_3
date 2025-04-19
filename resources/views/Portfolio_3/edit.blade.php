<x-layout>

    <h2>Edit: {{ $recipe->name }}</h2>

    <form action="{{route('recipes.update', $recipe->rid)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        Recipe name:
        <input type="text" id="name" name="Recipe" value="{{old('Recipe')}}" required/> <br><br>
        Description: 
        <textarea type="text" name="Description" value="{{old('Description')}}"required></textarea> <br><br>
        Cuisine: 
        <select name = "type">
            <option value = "French">French</option>
            <option value = "Italian">Italian</option>
            <option value = "Chinese">Chinese</option>
            <option value = "Indian">Indian</option>
            <option value = "Mexican">Mexican</option>
            <option value = "Others">Others</option>
        </select required><br><br>
        Cooking time: 
        <input type="number" id="cookingtime" name="cookingtime" min="1" max="120" value="{{old('cookingtime')}}"required/><br><br>
        Ingredients:
        <textarea type="text" name="ingredients" value="{{old('ingredients')}}"required></textarea><br><br>
        Instructions: 
        <textarea type="text" name="Instructions" value="{{old('Instructions')}}" required></textarea><br><br>

        <button type="submit">Update Recipe</button><br>
	    <button type = "reset" value = "Clear">Clear</button>
    </form>
    
</x-layout>