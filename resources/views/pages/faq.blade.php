@extends('layouts.app')
	@section('titre')
    Questions fréquentes
@endsection
@section('content')
	<section class="header-page gradient--bloody">
  <div class="row">
    <div class="section"></div>
    <div class="col s12 center">
          <h1>Questions fréquentes</h1>
      </div>
  </div>
</section>

	<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
@endsection