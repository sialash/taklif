@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto mb-[10px]">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
        <li><a>جست و جو </a></li> 
      </ul>
    </div>
</div>
@endsection


@section('content')
<div class="container mx-auto flex justify-center">
    <form action="#" method="post" class="flex">
        @csrf
        <div class="form-control" dir="ltr">
            <div class="input-group">
              <input type="search" placeholder="جست و جو" class="input input-bordered" />
              <button type="submit" class="btn btn- btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
              </button>
            </div>
          </div>
    </form>
</div>

<div class="container mx-auto flex justify-around flex-wrap space-x-1
space-y-3 p-4">

   
    <x-card></x-card>
    <x-card></x-card>
    <x-card></x-card>
    <x-card></x-card>

</div>
<div class="flex justify-center">
    <div class="btn-group flex justify-center" dir="ltr">
        <button class="btn">«</button>
        <button class="btn">1</button>
        <button class="btn  btn-active">2</button>
        <button class="btn">3</button>
        <button class="btn">4</button>
        <button class="btn">»</button>
    </div>
</div>

@endsection

