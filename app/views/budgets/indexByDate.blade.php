@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>Firefly
            <small>Budgets and envelopes</small>
        </h1>
        <p class="lead">Use budgets to organize and limit your expenses.</p>

        <p class="text-info">
            Budgets are groups of expenses that reappear every [period]*. Examples could be "groceries", "bills" or
            "drinks with friends". The table below lists all of the budgets you have, if any.
            <a href="http://dictionary.reference.com/browse/budget">By definition</a>, budgets are an estimated amount
            of money, ie. € 400,-. Such an estimation can change over time but <em>should</em> always be set. Budgets
            without an actual budget are fairly pointless.
        </p>
        <p class="text-info">
            Use this page to create or change budgets and the estimated amount of money you think is wise. Pages further ahead
            will explain what an "envelope" is in the context of budgeting.
        </p>
        <p class="text-info">
            * <small>Every month, week, year, etc.</small>
        </p>
        <p>
            <a class="btn btn-default" href ="{{route('budgets.index.budget')}}"><span class="glyphicon glyphicon-indent-left"></span> Group by budget</a>
            <a class="btn btn-default" href ="{{route('budgets.limits.create')}}"><span class="glyphicon glyphicon-plus-sign"></span> Create an envelope</a>
        </p>
    </div>
</div>

<!-- count = zero! -->

@foreach($budgets as $date => $entry)
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h3><a href="#transactions-in-this-period">{{$entry['date']}}</a>
             <a class="btn btn-default btn-xs" href ="{{route('budgets.limits.create')}}#date-and-budget-selected"><span class="glyphicon glyphicon-plus-sign"></span> Create an envelope for {{$entry['date']}}</a>
            </h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th colspan="2" style="width:45%;">Budget</th>
                <th style="width:15%;">Envelope</th>
                <th style="width:15%;">Left</th>
                <th>&nbsp;</th>
            </tr>
            @foreach($entry['limitrepetitions'] as $index => $repetition)
            <tr>
                <td>
                    <div class="btn-group">
                        <a title="Edit budget {{{$repetition->limit->budget->name}}}" href="{{route('budgets.edit',$repetition->limit->budget->id)}}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="Delete budget {{{$repetition->limit->budget->name}}}" href="{{route('budgets.delete',$repetition->limit->budget->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                </td>
                <td>
                    <a href="{{route('budgets.show',$repetition->limit->budget->id)}}#transactions-in-this-period">
                        {{{$repetition->limit->budget->name}}}
                    </a>
                </td>
                <td>
                    <span class="label label-primary">
                        <span class="glyphicon glyphicon-envelope"></span> {{mf($repetition->amount,false)}}</span>
                </td>
                <td>
                @if($repetition->left < 0)
                            <span class="label label-danger">
                                <span class="glyphicon glyphicon-envelope"></span>
                                {{mf($repetition->left,false)}}</span>
                @else
                            <span class="label label-success">
                                <span class="glyphicon glyphicon-envelope"></span>
                                {{mf($repetition->left,false)}}</span>
                @endif
                </td>
                <td>
                    <div class="btn-group">
                        <a title="Edit envelope for {{{$repetition->limit->budget->name}}} in {{$entry['date']}}" href="{{route('budgets.limits.edit',$repetition->limit->id)}}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a title="Delete envelope for {{{$repetition->limit->budget->name}}} in {{$entry['date']}}" href="{{route('budgets.limits.delete',$repetition->limit->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                    @if($repetition->limit->repeats == 1)
                        <span class="label label-warning">auto repeats</span>
                    @endif
                </td>
            </tr>
@endforeach
</table>
</div>
</div>
@endforeach

@stop