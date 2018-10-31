@if (count($users) > 0)
@foreach ($users as $user)

@if (count($messages) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>ステータス</th>
            <th>メッセージ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($messages as $message)
    <tr>
        <td>{!! link_to_route ('messages.show', $message->id, ['id' => $message->id]) !!}</td>
        <td>{{ $message->status }}</td>
        <td>{{ $message->content }}</td>
    </tr>
        @endforeach
    </tbody>
</table>
    @endif
    {!! link_to_route('messages.create', '新規タスクの登録', null, ['class' => 'btn btn-primary']) !!}
@endforeach

@endif