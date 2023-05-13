@extends('layouts.app')

@section('cssLinke')
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@endsection


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
        <form  action="#" method="post">
        <div class="divider ">تمرین جدید</div>
        <div class="space-y-2" >
            <label for="exerciseTitle" >
                <span  class="label-text">عنوان تمرین : </span>
            </label>
            <input type="text" name="exerciseTitle" placeholder="عنوان تمرین" class="input input-bordered input-primary w-full max-w-xs" />
            <br>
            <label >
                <span  class="label-text">مهلت تمرین : </span>
            </label>
            <input type="text" data-jdp data-jdp-min-date="today" class="input input-bordered input-primary w-full max-w-xs" placeholder="تاریخ انقضا تمرین" />
            <script>
                jalaliDatepicker.startWatch({
                    time: true ,
                    minDate: "attr",
                    maxDate: "attr" 
                });
            </script>

        </div>

        <div id="questions">

        </div>
            <button id="addQuestion" type="button" class="btn btn-primary btn-wide"  >+ افزودن سوال جدید</button>
            <button id="addQuestion" type="submit" class="btn btn-success btn-wide"  >ثبت</button>
        </form>
    </div>




    <script>
        let index=1;
        function qus(index) {
            
            return `
        <div>
            <div class="divider ">سوال ${index}</div>
            <div class="py-3">
                <div class="my-2">
                    <label for="questionTitle_${index}" >
                        <span  class="label-text">عنوان سوال ${index}: </span>
                    </label>
                    <input type="text" name="questionTitle_${index}" placeholder="عنوان سوال" class="input input-bordered input-primary w-full max-w-xs" />
                </div>
                <textarea class="textarea textarea-accent w-10/12 " placeholder="متن سوال"></textarea>
                <label for="file_${index}" class="label">
                    <span  class="label-text">انتخاب فایل (دلخواه): </span>
                </label>
                <input type="file" id="file_${index}" name="flie_${index}" class="file-input file-input-bordered file-input-success w-full max-w-xs" dir="ltr" />
                <br>
            </div>
        </div>
        `;
        
        }

        $("#questions").html($("#questions").html()+qus(index++));
        $("#addQuestion").click(function(){

            $("#questions").html($("#questions").html()+qus(index++));
        });
    
    
</script>
@endsection

