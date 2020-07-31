@extends('/layouts/layout')

@include('layouts/navigation')
@section('content')


    <div>
        <p>Parametrage utilisateurs</p>
    </div>



                <div class="row">

                    <form  method="post" action="{{ route('user.update') }}">

                        {!! csrf_field() !!}

                        <input class="form-control" hidden type="text" name="remember_token" value="{{ str_random(8) }}"/>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Noms</label>
                                <input class="form-control form-white" type="text" name="last_name" value="{{ $user->last_name }}"/>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Prénoms</label>
                                <input class="form-control form-white" type="text" name="first_name"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Fonction</label>
                                <input class="form-control form-white" type="text" name="function"/>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Adresse</label>
                                <input class="form-control form-white" type="text" name="address"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Email</label>
                                <input class="form-control form-white" type="text" name="email"/>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Téléphone</label>
                                <input class="form-control form-white" type="text" name="telephone"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Nom d'utilisateur</label>
                                <input class="form-control form-white" type="text" name="name"/>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Mot de passe</label>
                                <input class="form-control form-white" type="password" name="password"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Role</label>

                                <select class="form-control form-white" data-placeholder="Choisir un role..." name="role_id">

                                    <option value="">Choisir un role...</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->slug }}</option>
                                    @endforeach

                                </select>

                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Centre</label>
                                <select class="form-control form-white" data-placeholder="Choose a color..." name="centre_id">
                                    <option value="">Choisir un centre...</option>
                                    @foreach($centres as $centre)
                                        <option value="{{ $centre->id }}">{{ $centre->designation }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox checkbox-primary">
                                    <br>
                                    <input id="checkbox5" type="checkbox" name="active" checked value="1">
                                    <label for="checkbox5">
                                        Activer
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Enregistrer</button>
                            <button type="button" class="btn btn-default waves-effect">Annuler</button>
                        </div>

                    </form>
                </div>


@endsection