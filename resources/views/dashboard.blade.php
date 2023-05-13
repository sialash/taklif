@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto mb-[10px]">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
      </ul>
    </div>
</div>
@endsection


@section('content')
<div class="container mx-auto flex justify-around text-center flex-wrap space-x-1 space-y-3" >

  <div class="space-y-5">
    <span >کلاس های من</span>
    <div class="divider"></div> 
    <x-card></x-card>

    <div class="card w-96 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">کلاس خود تو بساز</h2>
        <p>افزودن کلاس جدید</p>
        <div class="card-actions justify-end">
          <button class="btn btn-success btn-block">ساختن</button>
        </div>
      </div>
    </div>

  </div>

  <div class="space-y-5">
    <span>کلاس های عضو</span>
    <div class="divider"></div> 
    <x-card></x-card>
    <x-card></x-card>
    <div class="card w-96 bg-base-100 shadow-xl">
      <div class="card-body">
        <h2 class="card-title">کلاس خود تو بساز</h2>
        <p>افزودن کلاس جدید</p>
        <div class="card-actions justify-end">
          <button class="btn btn-success btn-block">جستو جو کلاس</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

