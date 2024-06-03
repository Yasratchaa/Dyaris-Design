@extends('layouts.templateFooterHeader')
@section('headTambahan')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
  body {
    background-image: url("{{ asset('img/bg-login.png') }}");
    background-size: cover;
    /* Untuk mengisi seluruh area background */
    background-position: center;
    /* Posisikan gambar di tengah */
    /* Anda juga dapat menambahkan properti lain seperti background-repeat, background-attachment, dsb. */
  }

  .image-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .image-container img {
    max-width: 100%;
    height: auto;
    display: block;
  }

  .input-box i {
    color: rgb(0, 0, 0);
    /* Change icon color to black */
  }
</style>
@endsection

@section('isiInformasi')

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('loginError') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<br>
<br>

<!-- Display the image -->
<div class="wrapper">
  <div class="image-container">
    <img src="{{ asset('img/banner_dyaris.png') }}" alt="Banner Dyaris" class="img-fluid">
  </div>
  <form action="/login" method="post">
    @csrf


    <div class="input-box">
      <input type="text" name="login" id="login" placeholder="Email or Username" autofocus class="@error('login') is-invalid @enderror" required>
      <i class='bx bx-envelope'></i> <!-- Changed icon class to bx-envelope -->
      @error('login')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="input-box">
      <input type="password" name="password" id="password" placeholder="Password" required>
      <i class='bx bxs-lock-alt'></i>
    </div>
    <div class="remember-forgot">
      <label><input type="checkbox">Remember Me</label>
      <a href="#">Forgot Password</a>
    </div>
    <button type="submit" class="btn">Login</button>
    <div class="register-link">
      <p>Dont have an account? <a href="/register">Register</a></p>
    </div>
  </form>
</div>
<br>
<br>
<br>
<br>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const alert = document.querySelector('.alert');
    if (alert) {
      setTimeout(function() {
        alert.classList.add('fade-out');
        alert.addEventListener('animationend', function() {
          alert.remove();
        });
      }, 2000); // 2000 milliseconds = 2 seconds
    }
  });
</script>
@endsection