@extends('layouts.app')

@section('title', 'Alterar Senha')

@section('content')
<div class="container mt-5">
    <!-- Título com estilo de destaque -->
<div class="d-flex justify-content-center mb-5">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 350px;">
        <h2 class="mb-0"><i class="bi bi-shield-lock me-2"></i>Alterar Senha</h2>
        <p class="mt-2 small">Atualize sua senha para manter sua conta segura.</p>
    </div>
</div>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('password.change') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="current_password" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Senha Atual</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
            @error('current_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
        <label for="new_password" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Nova Senha</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
            @error('new_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
        <label for="new_password_confirmation" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Confirmar Nova Senha</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
        </div>
        <div class="d-flex gap-3 mt-3">
    <button type="submit" class="btn btn-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-check-circle me-2"></i>Salvar Nova Senha
    </button>

    <a href="{{ route('dashboard') }}" class="btn btn-outline-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-arrow-left me-2"></i>>Volvar
    </a>
    </div>
    </form>
</div>
@endsection
