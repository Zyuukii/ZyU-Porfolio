@include('components.header', ['pageCss' => 'design.css'])

<form action="{{ route('register')}}" method="POST" class="form">
    @csrf

    <div>
        <h2 class="title">Register</h2>
    </div>

    <div class="flex">
        <label>
            <span>Name</span>
            <input class="input" type="text" name="name" placeholder="Full name" required>
        </label>


        <label>
            <span>Email</span>
            <input class="input" type="email" name="email" placeholder="Email" required>
        </label>

        <label>
            <span>Password</span>
            <input class="input" type="password" name="password" placeholder="Password" required>
        </label>

        <label>
            <span>Retype password</span>
            <input class="input" type="password" name="password_confirmation" placeholder="Retype password" required>
        </label>

        <input type="submit" class="submit">
    </div>
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert" role="alert">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>



@include('components.footer')