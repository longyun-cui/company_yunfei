@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title'){{$house->title or ''}}@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection




{{--header--}}
@section('component-header')
    @include('frontend.component.header')
@endsection


{{--footer--}}
@section('component-footer')
    @include('frontend.component.footer')
@endsection




{{--custom-content--}}
@section('custom-content')

    @include('frontend.module.house-detail', ['data'=>$house])

@endsection




{{--script--}}
@section('custom-script')

    <script>
        $(function() {

            // 显示添加列
//            $(".grab-ticket").on('click', function() {
//                $('#edit-modal').modal('show');
//                var html = $(".grab-clone-body").clone();
//                $('#edit-ctn').html(html);
//                $('#edit-modal').modal('show');
//            });
//
//            $("#edit-modal").on('click', '.cancel', function () {
//                $('#edit-modal').modal('hide');
//            });

        });
    </script>

@endsection
