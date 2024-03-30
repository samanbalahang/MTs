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

<form method="POST" action="{{route('register')}}" class="w-100 bg-white p-3">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">نام :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">آدرس ایمیل</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="">
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">رمز عبور: </label>
        <input type="password" class="form-control" id="password" name="password" placeholder="">
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">تکرار رمز عبور:  </label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-warning w-100" value="ثبت">
        
    </div>
    <div class="mb-3">
        <a href="{{route('login')}}">اکانت دارم!</a>

    </div>

</form>

</div>
</main>
@endsection