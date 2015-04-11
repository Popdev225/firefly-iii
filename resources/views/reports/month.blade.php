@extends('layouts.default')
@section('content')
{!! Breadcrumbs::renderIfExists(Route::getCurrentRoute()->getName(), $date) !!}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p>
            <a href="#" class="btn btn-default" id="includeShared" style="display:none;">
                <i class="state-icon glyphicon glyphicon-unchecked"></i>
                Include shared asset accounts</a>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-long-arrow-right fa-fw"></i>
                Income
            </div>
                <table class="table table-bordered">
                    <?php $tableSum = 0;?>
                    @foreach($income as $entry)
                        <tr>
                            <td>
                                <a href="{{route('transactions.show',$entry->id)}}" title="{{{$entry->description}}}">{{{$entry->description}}}</a>
                            </td>
                            <td>
                                <?php $tableSum += floatval($entry->amount);?>
                                @if($entry->type == 'Withdrawal')
                                    <span class="text-danger">{{Amount::format($entry->amount,false)}}</span>
                                @endif
                                @if($entry->type == 'Deposit')
                                    <span class="text-success">{{Amount::format($entry->amount,false)}}</span>
                                @endif
                                @if($entry->type == 'Transfer')
                                    <span class="text-info">{{Amount::format($entry->amount,false)}}</span>
                                @endif
                            </td>
                            <td>
                                {{$entry->date->format('j F Y')}}
                            </td>
                            <td>
                                <a href="{{route('accounts.show',$entry->account_id)}}">{{{$entry->name}}}</a>
                            </td>
                        </tr>
                    @endforeach
                    @if(isset($displaySum) && $displaySum === true)
                        <tr>
                            <td><em>Sum</em></td>
                            <td colspan="3">{!! Amount::format($tableSum) !!}</td>

                        </tr>
                    @endif
                </table>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-long-arrow-left fa-fw"></i>
                Expenses (top 10)
            </div>
            <table class="table table-bordered">
                <?php $sum = 0;?>
                @foreach($expenses as $id => $expense)
                    <?php
                        $sum += floatval($expense['queryAmount']);
                        ?>
                    <tr>
                        @if($id > 0)
                            <td><a href="{{route('accounts.show',$id)}}">{{{$expense['name']}}}</a></td>
                        @else
                            <td><em>{{{$expense['name']}}}</em></td>
                        @endif
                        <td>{!! Amount::format($expense['queryAmount']) !!}</td>
                    </tr>
                @endforeach
                <tr>
                    <td><em>Sum</em></td>
                    <td>{!! Amount::format($sum) !!}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-exchange fa-fw"></i>
                Sums
            </div>
            <?php
                $in = 0;
                foreach($income as $entry) {
                    $in += floatval($entry->transactions[1]->amount);
                }
            ?>
            <table class="table table-bordered">
                <tr>
                    <td>In</td>
                    <td>{!! Amount::format($in) !!}</td>
                </tr>
                <tr>
                    <td>Out</td>
                    <td>{!! Amount::format($sum) !!}</td>
                </tr>
                <tr>
                    <td>Difference</td>
                    <td>{!! Amount::format($in - $sum) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-tasks fa-fw"></i>
                Budgets
            </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Budget</th>
                        <th>Envelope</th>
                        <th>Spent</th>
                        <th>Left</th>
                    </tr>
                    <?php
                        $sumSpent = 0;
                        $sumEnvelope = 0;
                        $sumLeft = 0;
                    ?>
                    @foreach($budgets as $id => $budget)
                        <?php
                            $sumSpent += $budget['spent'];
                            $sumEnvelope += $budget['queryAmount'];
                            $sumLeft += $budget['queryAmount'] + $budget['spent'];
                        ?>
                    <!-- only display when relevant: -->
                    @if($budget['queryAmount'] != 0 || $budget['spent'] != 0)
                    <tr>
                        <td>
                            @if($id > 0)
                                <a href="{{route('budgets.show',$id)}}">{{{$budget['name']}}}</a>
                            @else
                                <em>{{{$budget['name']}}}</em>
                            @endif
                        </td>
                        <td>{!! Amount::format($budget['queryAmount']) !!}</td>
                        <td>{!! Amount::format($budget['spent'],false) !!}</td>
                        <td>{!! Amount::format($budget['queryAmount'] + $budget['spent']) !!}</td>
                    </tr>
                    @endif
                    @endforeach
                    <tr>
                        <td><em>Sum</em></td>
                        <td>{!! Amount::format($sumEnvelope) !!}</td>
                        <td>{!! Amount::format($sumSpent) !!}</td>
                        <td>{!! Amount::format($sumLeft) !!}</td>
                    </tr>
                </table>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart fa-fw"></i>
                Categories
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Category</th>
                    <th>Spent</th>
                </tr>
                <?php $sum = 0;?>
                @foreach($categories as $id => $category)
                    <?php $sum += floatval($category['queryAmount']);?>
                    <tr>
                        <td>
                            @if($id > 0)
                                <a href="{{route('categories.show',$id)}}">{{{$category['name']}}}</a>
                            @else
                                <em>{{{$category['name']}}}</em>
                            @endif
                        </td>
                        <td>{!! Amount::format($category['queryAmount'],false) !!}</td>
                    </tr>
                @endforeach
                <tr>
                    <td><em>Sum</em></td>
                    <td>{!! Amount::format($sum) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-credit-card fa-fw"></i>
                Accounts
            </div>
            <table class="table table-bordered">
                <?php
                    $sumStart = 0;
                    $sumEnd = 0;
                    $sumDiff = 0;
                ?>
            @foreach($accounts as $id => $account)
                <?php
                    $sumStart += $account['startBalance'];
                    $sumEnd += $account['endBalance'];
                    $sumDiff += $account['difference'];
                ?>
                <tr>
                    <td><a href="{{route('accounts.show',$id)}}">{{{$account['name']}}}</a></td>
                    <td>{!! Amount::format($account['startBalance']) !!}</td>
                    <td>{!! Amount::format($account['endBalance']) !!}</td>
                    <td>{!! Amount::format($account['difference']) !!}</td>
                </tr>
            @endforeach
                <tr>
                    <td><em>Sum</em></td>
                    <td>{!! Amount::format($sumStart) !!}</td>
                    <td>{!! Amount::format($sumEnd) !!}</td>
                    <td>{!! Amount::format($sumDiff) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-sort-amount-asc fa-fw"></i>
                Piggy banks
            </div>
            <div class="panel-body">Body</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-calendar-o fa-fw"></i>
                Bills
            </div>
            <div class="panel-body">Body</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-fw fa-folder-o"></i>
                Outside of budgets
            </div>
            <div class="panel-body">Body</div>
        </div>
    </div>
</div>
@stop
@section('scripts')
    <script type="text/javascript" src="js/reports.js"></script>
@stop
