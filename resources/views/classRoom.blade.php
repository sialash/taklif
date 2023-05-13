@extends('layouts.app')

@section('Breadcrumbs')
<div class="container flex justify-center bg-neutral-200 mx-auto mb-[10px]">
  <div class="text-sm breadcrumbs ">
      <ul>
        <li><a>خانه</a></li> 
        <li><a>کلاس</a></li> 
      </ul>
    </div>
</div>
@endsection


@section('content')
<div class="container flex justify-center bg-neutral-200 mx-auto">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-[10px] ">
        <div class="row-span-3 text-center">


            <div tabindex="0" class="collapse collapse-plus md:collapse-open border border-base-300 bg-base-100 rounded-box">
                <div class="collapse-title text-xl font-medium text-center" >
                  دانش اموزان
                </div>
                <div class="collapse-content">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->

                          <tbody>
                            <!-- row 1 -->
                            <tr>
                              <th>1</th>
                              <td>Cy Ganderton</td>
                              <td> <a href="#" class="btn btn-secondary">اخراج</a></td>
                            </tr>
                            <!-- row 2 -->
                            <tr>
                              <th>2</th>
                              <td>Hart Hagerty</td>
                              <td> <a href="#" class="btn btn-secondary">اخراج</a></td>
                            </tr>
                            <!-- row 3 -->
                            <tr>
                              <th>3</th>
                              <td>Brice Swyre</td>
                              <td> <a href="#" class="btn btn-secondary">اخراج</a></td>
                            </tr>
                                <!-- row 3 -->
                            <tr>
                                <th>4</th>
                                <td>Bfghfght tdfg</td>
                                <td> <a href="#" class="btn btn-secondary">اخراج</a></td>
                            </tr>
                          </tbody>
                        </table>
                </div>
              </div>
           
              </div>
        </div>
        <div class="  text-center ">
            
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full text-center">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>معلم</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr>
                      <td>Cy Ganderton</td>
                    </tr>
                  </tbody>
                </table>
              </div>
    
        </div>
        <div class="  text-center">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full text-center">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>کمک معلم</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr>
                      <td>مصطفی رضازاده</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="btn btn-primary btn-block">اضافه کردن</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
        <div class="  col-span-1 md:col-span-2 row-span-4  lg:col-start-2">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                  <!-- head -->
                  <thead>
                    <tr>
                        
                      <th>شماره تمرین</th>
                      <th>عنوان تمرین</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- row 1 -->
                    <tr>
                      <th>1</th>
                      <td>تمرین یک</td>
                      <td> <a href="#" class="btn btn-secondary">حذف</a></td>
                      <td> <a href="#" class="btn btn-warning">ویرایش</a></td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <th>2</th>
                      <td>تمرین درس دوم </td>
                      <td> <a href="#" class="btn btn-secondary">حذف</a></td>
                      <td> <a href="#" class="btn btn-warning">ویرایش</a></td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                      <th>3</th>
                      <td>تمرین هفته دوم</td>
                      <td> <a href="#" class="btn btn-secondary">حذف</a></td>
                      <td> <a href="#" class="btn btn-warning">ویرایش</a></td>
                    </tr>
                        <!-- row 3 -->
                    <tr>
                        <th>4</th>
                        <td>تمرین جالب</td>
                        <td> <a href="#" class="btn btn-secondary">حذف</a></td>
                        <td> <a href="#" class="btn btn-warning">ویرایش</a></td>
                    </tr>
                    <tr>
                        <th></th>        
                        <th></th>
                        <th></th>
                        <td><a href="#" class="btn btn-primary btn-block ">تمرین جدید</a></td>
                        
                    </tr>
                  </tbody>
                </table>
              </div> 
        </div>
    </div>
</div>

@endsection

