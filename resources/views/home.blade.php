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
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="{{ route("inscrits") }}">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="fa fa-certificate fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-h3 font-w600 js-count-to-enabled">{{$candidatsInscrits->count()}}</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Inscrit</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-xl-3">
                <a href="{{ route("payes") }}" class="block block-link-shadow text-right" >
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
            /*jQuery(function(){
                Codebase.helpers('select2' );
            });*/
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
                console.log("OK");
                e.preventDefault();
                $("#payesTable").hide();
                $("#inscritsTable").show();
            });
        } );
    </script>
@endsection
