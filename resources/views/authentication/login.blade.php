@include('components.header')

<form action="{{ route('login') }}" method="POST">
    @csrf
    
    <label>Email</label>
    <input type="email" name="email" placeholder="Email" required>
    
    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required>
    
    <div style="margin: 10px 0;">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </div>

    <input type="submit" value="Login">
</form>

@include('components.footer')