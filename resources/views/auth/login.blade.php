<x-layouts.layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-1">Ciao, Accedi!</h1>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <form method="POST" action="{{route('login')}}">

                    @csrf

                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
    
</x-layouts.layout>