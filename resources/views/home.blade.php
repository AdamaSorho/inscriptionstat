@extends('layouts.admin_layout')
@section("styles")
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/dropzonejs/dist/dropzone.css')}}">
    <link rel="stylesheet" href="{{ asset('temp/assets/js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section("title")
    Statistique de l'art oratoire
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        {{--@include('flash::message')--}}
        <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
            <!-- Row #1 -->
            <div class="col-6 col-xl-3" id="buttonInscrits">
                <a class="block block-link-shadow text-right" href="#">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="fa fa-certificate fa-3x text-body-bg-dark"></i>
                        </div>
{{--                        <div class="font-size-h3 font-w600 js-count-to-enabled">{{$candidatsInscrits->count()}}</div>--}}
                        <div class="font-size-h3 font-w600 js-count-to-enabled">10</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Inscrit</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3" id="buttonPayes">
                <a href="#" class="block block-link-shadow text-right" >
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="fa fa-list-alt fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600 js-count-to-enabled">{{$candidatsPayes->count()}}</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Payés</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="#">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-users fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600 js-count-to-enabled" >{{$montant}} F CFA</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Montant Total</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="#">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600">{{$montantUvci}} F CFA</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Montant UVCI</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="#">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600">{{$montantFortic}} F CFA</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Montant FORTIC</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="#">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600">{{$montantTransVie}} F CFA</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Montant TransVie</div>
                    </div>
                </a>
            </div>
            <!-- END Row #1 -->
        </div>
        {{--<div class="block-content">
            <div class="row items-push">
                <div class="col-xl-12">
                    <form action="{{route('admin.statistique')}}" method="post">
                        {!! csrf_field() !!}
                        @include('flash::message')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group row">
                            <div class="col-3">
                                <label for="critere">Critères</label>
                                <select class="js-select2 form-control form-control-lg" id="critere" name="critere" style="width: 100%;" data-placeholder="Choisir">
                                    <option value="inscrit">Inscrit</option>
                                    <option value="paye">Ayant Payé</option>
                                    <option value="reussite">Réussit Examen</option>
                                    <option value="echec">Echoué Examen</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="formation_id">Certification</label>
                                <select class="js-select2 form-control form-control-lg" id="formation_id" name="formation_id" style="width: 100%;" data-placeholder="Choisir">
                                    <option value="">.::Sélectionner::.</option>
                                    @foreach($formations as $formation)
                                        <option value="{{$formation->id}}">{{$formation->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <label for="date_debut">Période Début</label>
                                <input type="date" class="form-control" id="date_debut" name="date_debut">
                            </div>
                            <div class="col-3">
                                <label for="date_fin">Période Fin</label>
                                <input type="date" class="form-control" id="date_fin" name="date_fin">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 offset-4">
                                <button type="submit" class="btn btn-success">Afficher</button>
                                <button type="reset" class="btn btn-dark">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="content-heading"></h2>--}}

        <!-- <p>Content has a max-width set, so on larger screens, the content is boxed (screen width greater than 991px).</p> -->
        {{--<div class="block" id="payesTable">
            <div class="block-header block-header-default">
                <h3 class="block-title" id="titrePaye">Liste des candidats ayant payés</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table id="candidatPayeTable" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <th class="text-center">N°</th>
                        <th>Nom</th>
                        <th>Prenoms</th>
                        <th>Téléphone</th>
                        <th>Code Paiement</th>
                        <th>Coût</th>
                        <th>Type Candidat</th>
                        <th>Formation</th>
                        <th>Paiement</th>
                        <th>Date & Heure Paiement</th>
                        <!-- <th>Examen</th> -->
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($candidatsPayes as $candidatPaye)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$candidatPaye->nom}}</td>
                            <td class="text-center">{{$candidatPaye->prenoms}}</td>
                            <td class="font-w600">{{$candidatPaye->telephone}}</td>
                            <td class="text-center">{{$candidatPaye->code_paiement}}</td>
                            <td class="text-center">{{$candidatPaye->prixFormation->cout}}</td>
                            <td class="font-w600">{{$candidatPaye->typeCandidat->libelle}}</td>
                            <td class="text-center">{{$candidatPaye->formation->libelle}}</td>
                            <td class="font-w600">
                                @php
                                    $paiement = HelpersVerifPaiement($candidatPaye->code_paiement);
                                @endphp

                                @if($paiement)
                                    <span class="badge badge-success">Payé</span>
                                @else
                                    <span class="badge badge-danger">Non Payé</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($paiement)
                                    {{ \Carbon\Carbon::parse($paiement->date_paiement)->format("d/m/Y") }} à {{ $paiement->heure_paiement }}
                                @endif
                            </td>
                            <!-- <td class="font-w600">
                                <span class="badge badge-warning">Aucun</span>
                                <span class="badge badge-success">Réussit</span>
                                <span class="badge badge-danger">Echoué</span>
                            </td> -->
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center"colspan="10">Aucune données</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>--}}
        <div class="block" id="inscritsTable">
            <div class="block-header block-header-default">
                <h3 class="block-title" id="titreInscrits">Liste des candidats inscrits</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table id="candidatInscritTable" class="table table-bordered table-striped table-responsive">
                    <thead>
                    <tr>
                        <th class="text-center">N°</th>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Téléphone</th>
                        <th>Code Paiement</th>
                        <th>Coût</th>
                        <th>Type Candidat</th>
                        <th>Formation</th>
                        <th>Paiement</th>
                        <th>Date & Heure Paiement</th>
                        <!-- <th>Examen</th> -->
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($candidatsInscrits as $candidatInscrit)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td class="font-w600">{{$candidatInscrit->nom}}</td>
                            <td class="text-center">{{$candidatInscrit->prenoms}}</td>
                            <td class="font-w600">{{$candidatInscrit->telephone}}</td>
                            <td class="text-center">{{$candidatInscrit->code_paiement}}</td>
                            <td class="text-center">{{$candidatInscrit->prixFormation->cout}}</td>
                            <td class="font-w600">{{$candidatInscrit->typeCandidat->libelle}}</td>
                            <td class="text-center">{{$candidatInscrit->formation->libelle}}</td>
                            <td class="font-w600">
                                @php
                                    $paiement = HelpersVerifPaiement($candidatInscrit->code_paiement);
                                @endphp

                                @if($paiement)
                                    <span class="badge badge-success">Payé</span>
                                @else
                                    <span class="badge badge-danger">Non Payé</span>
                                @endif
                            </td>
                            <td class="text-center">
                                @if($paiement)
                                    {{ \Carbon\Carbon::parse($paiement->date_paiement)->format("d/m/Y") }} à {{ $paiement->heure_paiement }}
                                @endif
                            </td>
                            <!-- <td class="font-w600">
                                <span class="badge badge-warning">Aucun</span>
                                <span class="badge badge-success">Réussit</span>
                                <span class="badge badge-danger">Echoué</span>
                            </td> -->
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="10">Aucune données</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
@section("script")
    <script src="{{ asset('temp/assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{ asset('temp/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <script src="{{ asset('temp/assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/masked-inputs/jquery.maskedinput.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/dropzonejs/dropzone.min.js')}}"></script>
    <script src="{{ asset('temp/assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>

    <script src="{{ asset('temp/assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            jQuery(function(){
                Codebase.helpers('select2' );
            });
            $("#payesTable").hide();
            $("#inscritsTable").hide();
            $('#candidatPayeTable').DataTable( {
                dom: 'Bfrtip',
                paging: true,
                searching: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
            $('#candidatInscritTable').DataTable( {
                dom: 'Bfrtip',
                paging: true,
                searching: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
            $("#buttonPayes").on("click", function (e) {
                e.preventDefault();
                $("#payesTable").show();
                $("#inscritsTable").hide();
            });
            $("#buttonInscrits").on("click", function (e) {
                e.preventDefault();
                $("#payesTable").hide();
                $("#inscritsTable").show();
            });
        } );
    </script>
@endsection
