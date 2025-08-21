<x-layouts.guest>
  <div class="row my-5">
    <h1 class="text-center">Se connecter</h1>
    <div class="col-6 mx-auto">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>

        {{-- remember me  --}}
        <div class="mb-3 form-check">
          <input type="checkbox" id="remember_me" name="remember" class="form-check-input">
          <label class="form-check-label" for="remember_me">Rester connecter</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
    </div>
  </div>

</x-layouts.guest>
