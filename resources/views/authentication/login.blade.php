@include('components.header', ['pageCss' => 'design.css'])


<form action="{{ route('login.submit') }}" method="POST" class="form">
    @csrf

    <div>
        <h2 class="title">Login</h2>
    </div>

    <div class="flex">
        <label>
            <span>Email</span>
            <input class="input" type="email" name="email" placeholder="Email" required>
        </label>

        <label>
            <span>Password</span>
            <input class="input" type="password" name="password" placeholder="Password" required>
        </label>

        <div class="checkbox">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember" style="margin:0;">Remember me</label>
        </div>

        <button class="submit" type="submit">Submit</button>
        
        @if ($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert" role="alert">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</form>



@include('components.footer')