@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="container text-center mb-4">
                <h2 id="register">{{ __('Register your account') }}</h2>
            </div>

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center" style="width: 600px;">
                    <form method="POST" action="{{ route('register') }}" style="width: 400px;">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus id="name">
                            <label for="name" class="fw-semibold">Name</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus id="email">
                            <label for="email" class="fw-semibold">Email</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="password" id="password">
                            <label for="password">Password</label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password-confirm') is-invalid @enderror"
                                name="password_confirmation" required autocomplete="password-confirm" id="password-confirm">
                            <label for="password-confirm">Confirm Password</label>
                            @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex mb-3 gap-3">
                            <div class="form-floating flex-fill">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" required autocomplete="phone" id="phone">
                                <label for="phone">Phone No</label>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating flex-fill">
                                <select class="form-select @error('role') is-invalid @enderror" name="role"
                                    id="role" aria-label="Floating label select example" required>
                                    <option value="Teacher" {{ old('role') == 'Teacher' ? 'selected' : '' }}>Teacher</option>
                                    <option value="Parent" {{ old('role') == 'Parent' ? 'selected' : '' }}>Parent</option>
                                    <option value="Kafa" {{ old('role') == 'Kafa' ? 'selected' : '' }}>Kafa Admin</option>
                                    <option value="Muip" {{ old('role') == 'Muip' ? 'selected' : '' }}>Muip Admin</option>
                                  </select>
                                </select>
                                <label for="role">Role</label>
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="col-md-6 d-flex flex-column align-items-center">
                                <button id="submit-button" type="submit" class="btn btn-warning my-4">
                                    {{ __('Register') }}
                                </button>
                                @if (Route::has('login'))
                                    <div class="container d-flex align-items-center" style="width: 400px;">
                                        <span class="no-account-text">Click here to</span>
                                        <a href="{{ route('login') }}" class="login-link ms-1">
                                            login
                                        </a>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const dropdownItems = document.querySelectorAll('.dropdown-item');
            const dropdownButton = document.getElementById('dropdownMenuButton1');
            const roleInput = document.getElementById('role');

            dropdownItems.forEach(item => {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    const value = this.getAttribute('data-value');
                    const text = this.textContent;

                    dropdownButton.textContent = text;
                    roleInput.value = value;
                });
            });
        });
    </script>
@endsection
