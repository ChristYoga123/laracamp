@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif