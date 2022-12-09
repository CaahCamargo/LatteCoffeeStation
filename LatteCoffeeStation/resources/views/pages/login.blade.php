@extends('app')

@section('title', 'Login - Programa Suporte Nota 10 - SuperSoft')

@section('conteudo')
<div class="vh-100 vw-100 d-flex justify-content-center align-items-center">
  <form action="{{route('authenticate')}}" method="POST" class="w-25">
    @csrf

    {{-- ALERT ERRORS --}}
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      @foreach($errors->all() as $error)
        <p class="m-0"><small>{{$error}}</small></p>
      @endforeach
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- END ALERT ERRORS --}}

    {{-- <div class="mb-5 d-flex justify-content-center">
      <img src="https://cdn.supersoft.app/images/logos/supersoft-2019.webp" alt="" width="200" >
    </div> --}}

    <div class="mb-3">
      <label for="email" class="form-label text-uppercase">
        <i class="far fa-envelope"></i> email
      </label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="email-feedback" value="{{old('email')}}" required>
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label text-uppercase">
        <i class="fas fa-key"></i> senha
      </label>
      <input type="password" class="form-control @error('senha') is-invalid @enderror" id="senha" name="senha" aria-describedby="senha-feedback" required>
    </div>

    <div class="d-grid gap-2 mt-4">
      <button type="submit" class="btn btn-primary text-uppercase">entrar</button>
    </div>
  </form>
</div>
@endsection

