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
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title" id="titreInscrits">{{ $titre }}</h3>
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

@endsection
