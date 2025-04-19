<x-layout>

    <div class="editPage">
        <h2>{{ $recipe->name }}</h2>
        <p>Owner: {{ $recipe->user->name }}</p>
        <p>Cuisine:<br> {{ $recipe->type }}</p>
        <p>Description:<br> {{ $recipe->description }}</p>
        <p>Cooking Time:<br> {{ $recipe->cookingtime }}</p>
        <p>Ingredients:<br> {{ $recipe->ingredients }}</p>
        <p>Instructions: <br>{{ $recipe->instructions }}</p>


        @if(Auth::check() && Auth::user()->uid == $recipe->uid)
            <button><a href="{{ route('recipes.edit', $recipe->rid) }}">Update Recipe</a></button>
            <form action="{{route('recipes.destroy', $recipe->rid)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete Recipe</button>
            </form>
        @endif
    </div>

</x-layout>