@extends('/layouts/layout')

@include('layouts/navigation')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h4 class="header-title m-t-0 m-b-20">Administration</h4>

        </div>
    </div>

    <div class="m-t-30">
        <ul class="nav nav-tabs tabs-bordered">
            <li class="nav-item">
                <a href="#home-b1" data-toggle="tab" aria-expanded="false" class="nav-link active w3-text-green">
                    Utilisateurs
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-b1" data-toggle="tab" aria-expanded="true" class="nav-link w3-text-green">
                    Centres d'Etat Civil
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="home-b1">

                <!-- Personal-Information -->
                <div class="row">
                    <div class="col-md-1 offset-10">

                        <button class="w3-btn w3-light-gray" data-toggle="modal" data-target="#add-user">+ Ajouter un utilisateur</button>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="m-t-10">
                            <div class="row m-b-30">
                                <div class="col-md-12">
                                    <div class="m-b-20">
                                        <h6 class="font-14 mt-4"></h6>
                                        <table class="w3-table-all w3-card-2">

                                            <thead>
                                                <tr>
                                                    <th>Noms et prénoms</th>
                                                    <th>Fonction</th>
                                                    <th>Adresse</th>
                                                    <th>Tel.</th>
                                                    <th>Pseudo</th>
                                                    <th>Role</th>
                                                    <th>Etat civil</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            @foreach($users as $user)

                                                <tr>
                                                    <td>{{ $user->last_name }} {{ $user->first_name }}</td>
                                                    <td>{{ $user->function }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->telephone }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->title }}</td>
                                                    <td>{{ $user->designation }}</td>
                                                    <td>
                                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-default btn-sm" data-toggle="modal" data-target="#edit-user">
                                                            Editer
                                                        </a>
                                                        <a href="" class="btn btn-danger btn-sm">
                                                            Supprimer
                                                        </a>
                                                    </td>
                                                </tr>

                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>  <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col-12 -->
                </div>
            </div>


            <div class="tab-pane " id="profile-b1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <h3 class="panel-title">Epoux</h3>
                        </div>

                        <form role="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Role</label>
                                    <input class="form-control form-white" type="text" name="category-name"/>
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Slug</label>
                                    <select class="form-control form-white" data-placeholder="Choisir un role..." name="role_title">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                    </select>
                                </div>
                            </div>
                        </form>

                    </div>


                    <div class="col-md-6">
                            <table class="table tabs-bordered m-0">

                                <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>

                                </tbody>
                            </table>

                    </div>

                </div>
            </div>


            <div class="tab-pane" id="profile-b2">

            </div>

            <div class="tab-pane" id="profile-b3">

            </div>
        </div>

    </div>

    <!-- Modal ajout user -->
    <div class="modal fade none-border" id="add-user">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvel utlisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body p-20">

                    <form role="form" method="post" action="{{ route('user.save') }}">

                        {!! csrf_field() !!}

                        <input class="form-control" hidden type="text" name="remember_token" value="{{ str_random(8) }}"/>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Noms</label>
                                <input class="form-control form-white" type="text" name="last_name"/>
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
                                <input class="form-control form-white" type="text" name="username"/>
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

            </div>
        </div>
    </div>

    <div class="modal fade none-border" id="edit-user">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modification utlisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body p-20">

                    <form role="form" method="put" action="{{ route('user.update') }}">

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

            </div>
        </div>
    </div>

@endsection