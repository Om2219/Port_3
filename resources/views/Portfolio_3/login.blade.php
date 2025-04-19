<x-layout>


    <h1>Login</h1>
    <form method="POST" action="{{route('login')}}">
    @csrf
        Email: 
        <input type = "email" name = "email" value="{{old('email')}}" required/><br><br>
        Passsword:
        <input type = "password" name = "password" required/><br><br>


      <button type = "submit" value = "Login">Log in</button> 
	    <button type = "reset" value = "Clear">Clear</button>

    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
      </ul>
    @endif
    </form>
    <p>Dont have an account?<br> Register today using the link bellow<br>
    <a href="/register">Register</a>
    </p>


</x-layout>