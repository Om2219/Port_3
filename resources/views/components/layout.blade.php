<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digital Diner</title>
  @vite('resources/css/app.css')
</head>
<body>

  <header>
    <nav>
      <h1>The Digital Diner</h1>
      
      @guest
        <button><a href="/index">Home</a></button>
        <button><a href="/Login">Login</a></button>
        <button><a href="/register">Register</a></button>
      @endguest

      @auth
        <span>Hi, {{ Auth::user()->name}}</span>
        <button><a href="/index">Home</a></button>
        <button><a href="/create">Add Recipe</a></button>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button>Logout</button>
        </form>
      @endauth

      <form action="{{ route('recipes.search') }}" method="GET">
       <input type="text" name="search" placeholder="Search recipes by name or type" value="{{ request()->query('search') }}">
       <button type="submit">Search</button>
      </form>
    </nav>
  </header>

  <main class="container">
  {{$slot}}
  </main>
    
</body>
</html>