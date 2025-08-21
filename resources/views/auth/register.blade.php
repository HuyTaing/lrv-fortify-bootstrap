<x-layouts.guest>
  <div class="row my-5">
    <h1 class="text-center">S'enregister</h1>
    <div class="col-6 mx-auto">
      <form method="POST" action="{{ route('register') }}">
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
          <label for="name" class="form-label">Votre nom</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Votre email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">
            Confirmé mot de passe
          </label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">S'enregistrer</button>
      </form>
    </div>
  </div>

</x-layouts.guest>
