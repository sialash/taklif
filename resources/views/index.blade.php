@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
        <li>ورود</li> 
      </ul>
    </div>
</div>
@endsection


@section('content')
<div class="w-fit mx-auto h-full flex justify-center my-5  bg-neutral-100 border p-16 ">
  <form action="">
      <input type="text" placeholder="ایمیل" class="input input-bordered w-full max-w-xs block mb-2" />
      <input type="text" placeholder="پسورد" class="input input-bordered w-full max-w-xs block mb-2" />
      <div class="form-control block">
          <label class="label cursor-pointer" dir="ltr">
            <input type="checkbox" checked="checked" class="checkbox checkbox-primary" />
            <span class="label-text">به خاطر بسپار</span> 
          </label>
      </div>
      <div class=" flex justify-around " >
      <button class="btn btn-success">ورود</button>
      <button class="btn btn-info">ثبت نام</button>
      </div>
  </form>
</div>
@endsection


    
