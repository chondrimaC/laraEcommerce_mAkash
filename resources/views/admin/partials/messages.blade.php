@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
