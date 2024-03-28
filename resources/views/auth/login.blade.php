@extends("thepublic.layout.othermaster")
@section("title")
<title>
    مرجان ترابی-
    {{__('ورود')}}
</title>
@endsection
@section("css")

@endsection
@section("heading1")
 {{__('ورود')}}

@endsection
@section("main")
<div class="container">
    <form method="POST" action="{{ route('login') }}" class="w-100 bg-white p-3">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="form-label" value="__('Email')" >ایمیل: </label>
            <input id="email" class="form-control block mt-1 w-100" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username" />
            <input type="hidden" value="{{__(' ')}}" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" value="__('Password')" class="form-label">
                رمز عبور:
            </label>   
            <input id="password" class="block mt-1 w-100 form-control ltr"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <input value="{{__(' ')}}" type="hidden" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="block mt-4">
            <input type="submit" class="btn btn-warning w-100 p-3 my-3" value="ثبت">
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <a class="ms-3" href="{{route('login')}}">
                {{ __('Log in') }}
            </a>
        </div>
    </form>

</div>
</main>
@endsection
