@extends('dashboard.layouts.master')
@section("extracss")
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatables.min.css">
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatable-init.css">

@endsection

@section("main")
<div class="col-12 col-md-10">
    <main>
        @include('dashboard.extras.pageSettings')
        <section id="mainForm">
            <section class="formTitle  d-flex justify-content-between">
                <h1>
                    دسته بندی ها
                </h1>

            </section>
            <section class="addbtn my-3">

                <table class="datatable tablerout table-light-grid">
                    <thead>
                        <tr>
                            <th class="nosearch">title</th>
                            <th>عنوان مطلب</th>
                            <th>آدرس</th>
                            <th>نویسنده</th>
                            <th class="nosearch">مدیریت مطالب</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($pages))
                        @foreach($pages as $page)
                        <tr>
                            <td></td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->uri}}</td>
                            <td>{{__("MT")}}</td>
                              <td class="d-flex justify-content-around">
                                <a href="{{Route('books.edit',$page->id)}}" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <form id="deleteform" method="POST" action="{{Route('books.destroy',$page)}}">@csrf @method("delete")
                                       <button type="submit" class="btn btn-delete btn-danger">
                                       <i class="fas fa-trash"></i>
                                       </button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                        @else
                        <tr>
                            <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                              <td>
                                <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </section>
        </section>
    </main>
</div>
@endsection

@section("extrajs")

<script src="{{url('/')}}/dashboard/assets/js/datatables.min.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatabledet.js"></script>
<script>
    $('#deleteform').one('submit', function(e) {
    e.preventDefault();
    // do your things ...
        Swal.fire({
            title: "از حذف مطمئن هستید",
            text: "حذف غیر قابل بازگشت میباشد",
            icon: "warning",
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $(this).submit();
            } 
        });    
});
</script>
@endsection
