
@section('footer')
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="pull-right hide-phone">
                    <strong>SIFEC</strong> - Copyright © {{ date('Y') }}
                </div>

                <div>
                    Utilisateur:
                    <strong class="text-custom txtSizeRegular" >{{ Auth::user()->last_name }}
                        {{ Auth::user()->first_name }}
                    </strong>
                    @if(Auth::user()->role_id == 1)
                        | Officier d'Etat civil
                    @else
                        | Commis aux mariages
                    @endif
                </div>

            </div>
        </div>
    </div>
</footer>

@endsection