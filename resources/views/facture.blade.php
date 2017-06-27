@extends('layouts.template')

@section('titre')
    Les factures
@endsection

@section('contenu')
    <p>Facture n° {{ $numero }}</p>
@endsection

@push('scripts.footer')
	{{-- script jquery exemple --}}
@endpush

