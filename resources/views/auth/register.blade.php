


@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
        <li>ثبت نام</li> 
      </ul>
    </div>
</div>
@endsection


@section('content')

@foreach ($errors as $error)
    {{$error}}
@endforeach
<div class="w-fit mx-auto h-full flex justify-center my-5  bg-neutral-100 border p-16 ">
  <form method="POST" action="{{route('register') }}">
    @csrf
      <input type="text" name="name"  required autofocus placeholder="نام" class="input input-bordered w-full max-w-xs block mb-2" />
      <input type="email" name="email"  required autofocus placeholder="ایمیل" class="input input-bordered w-full max-w-xs block mb-2" />
      <input type="password" name="password" required placeholder="پسورد" class="input input-bordered w-full max-w-xs block mb-2" />
      <input type="password" name="password_confirmation" required placeholder="تکرار پسورد"  class="input input-bordered w-full max-w-xs block mb-2" />

      <div class=" flex justify-around " >
        <input type="submit" class="btn btn-success" value="ثبت نام">
      </div>
  </form>
</div>
@endsection

