@extends('layouts.app')
@section('titre')
    Aider LiinkART à grandir
@endsection
@section('content')
<section class="header-page gradient--lemon">
	<div class="row">
    <div class="section"></div>
		<div class="col s12 center">
        	<h1>Aider LiinkART à grandir</h1>
	    </div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col s12 offset-m1 m10">
			<div class="section"></div>
			<p class="center">Nous espérons que vous appréciez l'utilisation de LiinkART! Si vous pensez que LiinkART vous a aidé à diffuser plus facilement vos oeuvres d'arts, ou à trouver l'oeuvre qui vous à fait chavirer votre coeur, envoyez-nous un don! <br> <br>Tout montant aidant à soutenir et à poursuivre l'évolution de ce projet est grandement apprécié.</p>
			<div class="section"></div>
			<div class="section"></div>
				<div class="col s12">

				<table class="centered responsive-table">
			        <thead>
			          <tr>
			              <th><img class="responsive-img" width="226px" alt="Logotype BitCoin" src="{{asset('/uploads/bitcoinLogotype.png')}}"></th>
			              <th><img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Credit Card Badges"></th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>
			            	<div class="chip">
						    	<img alt="BitCoin" src="{{asset('/uploads/bitcoinLogo.png')}}">
						    	3Kb578vj769ZubCJmod1N7A19aNAqsCYH5
							</div>
						</td>
			            <td><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="HUTWF83YHPUM6">
								<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
							</form>
						</td>
			          </tr>
			        </tbody>
			      </table>
				</div>
			<div class="divider"></div>
			<div class="section"></div>
		</div>
	</div>
</div>
@endsection