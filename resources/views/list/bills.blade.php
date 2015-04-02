<table class="table table-bordered table-striped">
    <tr>
        <th>&nbsp;</th>
        <th>Name</th>
        <th>Matches on</th>
        <th colspan="2">Matching amount</th>
        <th>Last seen match</th>
        <th>Next expected match</th>
        <th>Is active</th>
        <th>Will be automatched</th>
        <th>Repeats every</th>
        <th>&nbsp;</th>
    </tr>
    @foreach($bills as $entry)
    <tr>
        <td>
            <div class="btn-group btn-group-xs">
                <a href="{{route('bills.edit',$entry->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-pencil"></i></a>
                <a href="{{route('bills.delete',$entry->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-fw fa-trash-o"></i></a>
            </div>
        </td>
        <td>
            <a href="{{route('bills.show',$entry->id)}}" title="{{{$entry->name}}}">{{{$entry->name}}}</a>
        </td>
        <td>
            @foreach(explode(',',$entry->match) as $match)
            <span class="label label-info">{{{$match}}}</span>
            @endforeach
        </td>
        <td>
            {!! Amount::format($entry->amount_min) !!}
        </td>
        <td>
            {!! Amount::format($entry->amount_max) !!}
        </td>
        <td>
            @if($entry->lastFoundMatch)
                {{$entry->lastFoundMatch->format('j F Y')}}
            @else
                <em>Unknown</em>
            @endif
        </td>
        <td>
            @if($entry->nextExpectedMatch)
                {{$entry->nextExpectedMatch->format('j F Y')}}
            @else
                <em>Unknown</em>
            @endif
        </td>
        <td>
            @if($entry->active)
                <i class="fa fa-fw fa-check"></i>
            @else
                <i class="fa fa-fw fa-ban"></i>
            @endif
        </td>
        <td>
             @if($entry->automatch)
                 <i class="fa fa-fw fa-check"></i>
             @else
                 <i class="fa fa-fw fa-ban"></i>
             @endif
         </td>
         <td>
            {{{$entry->repeat_freq}}}
            @if($entry->skip > 0)
                skips over {{$entry->skip}}
            @endif
         </td>
        <td>
            @if($entry->active)
            <a href="{{route('bills.add',$entry->id)}}" class="btn btn-success btn-xs"><i class="fa fa-fw fa-plus-circle"></i></a>
            @endif
        </td>
    </tr>

    @endforeach
</table>
