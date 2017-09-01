@if($errors AND count($errors))
    <div class="alert alert-warning" role="alert">
        <ul>
            @foreach($errors->all() as $err)
                <li> {{ $err }} </li>
            @endforeach
        </ul>
    </div>
@endif