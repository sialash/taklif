@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto mb-[10px]">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
        <li><a>کلاس</a></li> 
        <li><a>تمرین</a></li> 
      </ul>
    </div>
</div>
@endsection


@section('content')
    <div class="container m-auto text-center">
        عنوان تمرین
        <div class="divider">سوال ۲</div>

        <div class="text-right p-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia quas aperiam voluptate amet sapiente voluptatibus error provident molestias ipsum unde, laudantium aliquid vero magni quibusdam voluptates quos alias adipisci dolorum consequuntur quod ullam. A sunt assumenda vel nostrum officiis impedit dolorem, tempore delectus praesentium aspernatur voluptatibus. Aliquam enim maiores nobis.
        </div>

        <a href="#" class="btn btn-primary ">دانلود فایل</a>
        <div class="divider">پاسخ</div>

            <form class="py-3" action="#" method="post">
                <textarea class="textarea textarea-accent w-10/12 " placeholder="Bio"></textarea>
                <label for="file" class="label">
                    <span  class="label-text">انتخاب فایل : </span>
                </label>
                <input type="file" id="file" class="file-input file-input-bordered file-input-success w-full max-w-xs" dir="ltr" />
                <br>
                <div class="m-4">
                    <input type="submit" value="ثبت پاسخ" class="btn btn-primary">
                    <a href="#" class="btn btn-warning " @disabled(true)>ویرایش پاسخ</a>
                </div>

            </form>
        <div class="flex justify-center">
            <div class="btn-group flex justify-center" dir="ltr">
                <button class="btn">سوال قیل</button>
                <button class="btn">1</button>
                <button class="btn  btn-active">2</button>
                <button class="btn">3</button>
                <button class="btn">4</button>
                <button class="btn">سوال بعد</button>
            </div>
        </div>
    </div>
@endsection

