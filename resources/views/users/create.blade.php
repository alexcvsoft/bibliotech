<h1>Create User</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    @error('name')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="apellido_paterno">Apellido Paterno:</label>
    <input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ old('apellido_paterno') }}" required>
    @error('apellido_paterno')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="apellido_materno">Apellido Materno:</label>
    <input type="text" name="apellido_materno" id="apellido_materno" value="{{ old('apellido_materno') }}">
    @error('apellido_materno')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    @error('email')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    @error('password')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
    @error('password_confirmation')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <label for="rol_usuario">Rol de Usuario:</label>
    <input type="text" name="rol_usuario" id="rol_usuario" value="{{ old('rol_usuario') }}" required>
    @error('rol_usuario')
        <span class="text-red-500">{{ $message }}</span>
    @enderror
    
    <button type="submit">Create</button>
</form>
