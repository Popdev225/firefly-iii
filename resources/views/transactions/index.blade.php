@extends('layouts.default')
@section('content')
{!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName(), $what) !!}
<div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa {{$subTitleIcon}}"></i> {{{$subTitle}}}
            </div>
                @include('list.journals-full',['sorting' => false])
        </div>
    </div>
</div>


@stop
@section('scripts')
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/transactions.js" type="text/javascript"></script>

@stop
