<x-layout>
    <h2>Recipes Uploaded</h2>
    <div class="recipes">
    <ul>
      @foreach($recipes as $recipe)
          <li>
             <h3>{{ $recipe->name }}</h3>
             <p>Cuisine:<br> {{ $recipe->type }}</p>
             <p>Description:<br> {{ $recipe->description }}</p>
             <button><a href="{{ route('recipes.show', $recipe->rid) }}">View Details</a></button>
          </li>
      @endforeach
    </ul>
    </div>
    {{$recipes->links()}}
</x-layout>
