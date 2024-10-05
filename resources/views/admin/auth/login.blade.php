<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
