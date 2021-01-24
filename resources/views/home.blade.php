@extends ('template_backend.home')
@section ('judul', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Kamu berhasil Login!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
