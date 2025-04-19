<x-layout>


    <h1>Register</h1>
    <form method="POST" action="{{route('register')}}">
    @csrf
        
        Name:
        <input type = "text" name = "name" value="{{old('name')}}" required/><br><br>
        Username: 
        <input type = "text" name = "username" value="{{old('username')}}" required/><br><br>
        Passsword:
        <input type = "password" name = "password" required/><br><br>

        Confirm Password:
        <input type = "password" name = "password_confirmation" required/><br><br>


        Email:    
        <input type="email" name="email" value="{{old('email')}}" required/><br><br> 


        <button type = "submit" value = "register">Create</button> 
	      <button type = "reset" value = "Clear">Clear</button>

    @if($errors->any())
      <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}}</li>
        @endforeach
      </ul>
    @endif

    </form>
    <p>Have an account?<br> Log in here:
    <a href="/Login">Login</a>
    </p>
</x-layout>