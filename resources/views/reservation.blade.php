@extends('layouts.app')
@section('content')

<div class="">
	<div class="top-hero h-screen">

		<div class="container mx-auto text-white py-16">

			<section>
			    <div class="text-center text-3xl font-light">
			        <p>Emploitic I Connect <span class="text-green-500">#2019</span></p>
			        <p>L'occasion de <span class="font-bold">décrocher votre futur emploi</span></p>
				</div>
		        <div class="flex items-center justify-around mt-20 text-3xl">
		        	<div class="flex flex-col justify-center items-center">
		        		<span class="block h-16 w-16 border border-white rounded-full flex items-center justify-center">
		        			<i class="fa fa-industry"></i>
		        		</span>
						<p class="font-bold">Entreprises</p>
						<p class="text-base">qui recrutent</p>
		        	</div>
		        	<div class="flex flex-col justify-center items-center">
		        		<span class="block h-16 w-16 border border-white rounded-full flex items-center justify-center">
		        			<i class="fa fa-industry"></i>
		        		</span>
						<p class="font-bold">Opportunités</p>
						<p class="text-base">d'emploi à saisir</p>
		        	</div>
		        	<div class="flex flex-col justify-center items-center">
		        		<span class="block h-16 w-16 border border-white rounded-full flex items-center justify-center">
		        			<i class="fa fa-industry"></i>
		        		</span>
						<p class="font-bold">+10</p>
						<p class="text-base">Ateliers & Coaching</p>
		        	</div>
		        </div>

		        <div class="mt-32 text-center">
		        	<a onclick="scrollToQuestionNode(event, 'form')" href="#form" class="inline-block bg-green-500 hover:bg-green-400 text-3xl rounded-full px-12 py-3 uppercase text-white font-bold">Inscriver vous</a>
		        </div>

			</section>

		</div>

	</div>

	<div id="form" class="form-hero">
		<div class="container mx-auto text-white flex justify-center py-24">
		    <section>

		    	<h2 class="font-bold text-3xl text-center">Pass candidat</h2>
		    	<p class="text-center">100 entreprises de tous secteurs d'activité vous proposent + 500 offres (CDI, CDD, Stage ………)</p>
		    	<p class="text-center">Le jour J soyez muni de votre CV et de votre Pass candidat</p>

		    	<h3 class="text-3xl font-bold text-center">Inscrivez-vous et imprimez votre pass</h3>

		    	<form method="POST" action="{{ route('reservations.store') }}" class="bg-white px-12 py-6 rounded-lg text-gray-800 mt-10">

		    		@csrf

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Nom Complet <sup>*</sup></label>
		    			<input name="name" value="{{ old('name') }}" class="px-4 py-1 w-full rounded border hover:border-blue-500 @error('name') border-red-500 @enderror">
		    			@error('name')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Age <sup>*</sup></label>
		    			<input type="number" value="{{ old('age') }}" name="age" class="px-4 py-1 w-full rounded border hover:border-blue-500 @error('age') border-red-500 @enderror">
		    			@error('age')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Je suis <sup>*</sup></label>
		    			<label>
		    				<input type="radio" value="male" name="gender" class="px-4 py-1 rounded border hover:border-blue-500" checked> Un Homme
		    			</label>
		    			<label class="mt-2">
		    				<input type="radio" value="female" name="gender" class="px-4 py-1 rounded border hover:border-blue-500" @if(old('gender') == 'female') checked @endif> Une Femme
		    			</label>

		    			@error('gender')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Métier <sup>*</sup></label>
		    			<select type="select" class="pxborder shadow-lg -4 py-1" name="role" aria-required="true" required>
		    				<option value="Administration Moyens généraux" selected="true">Administration Moyens généraux</option>
		    				<option value="Assistanat   secrétariat">Assistanat , secrétariat</option>
		    				<option value="Comptabilité  finance">Comptabilité, finance</option>
		    				<option value="Banque et assurance">Banque et assurance</option>
		    				<option value="Juridique  fiscal , audit , Conseil">Juridique, fiscal , audit , Conseil</option>
		    				<option value="RH  personnel, formation">RH, personnel, formation</option>
		    				<option value="Education  Enseignement">Education, Enseignement</option>
		    				<option value="Direction générale   direction d’unité">Direction générale , direction d’unité</option>
		    				<option value="Vente  télévente ,assistanat">Vente, télévente ,assistanat</option>
		    				<option value="Commercial  technico-commercial , service client">Commercial, technico-commercial , service client</option>
		    				<option value="Responsable commercial   grand comptes">Responsable commercial , grand comptes</option>
		    				<option value="Création   Design">Création , Design</option>
		    				<option value="Marketing  communication">Marketing, communication</option>
		    				<option value="Journalisme  Médias , traduction">Journalisme, Médias , traduction</option>
		    				<option value="Informatique  Systèmes d’information ,internet">Informatique, Systèmes d’information ,internet</option>
		    				<option value="Télécommunication  réseaux">Télécommunication, réseaux</option>
		    				<option value="Chantier  Métier BTP">Chantier, Métier BTP</option>
		    				<option value="Ingénieur  étude de projet et R&amp;D">Ingénieur, étude de projet et R&amp;D</option>
		    				<option value="Logistique   achat , stock, transport">Logistique , achat , stock, transport</option>
		    				<option value="Production   méthode , Industrie">Production , méthode , Industrie</option>
		    				<option value="Maintenance   entretien">Maintenance , entretien</option>
		    				<option value="Qualité  médical , pharmacie">Qualité, médical , pharmacie</option>
		    				<option value="Hôtellerie  Tourisme, Restauration">Hôtellerie, Tourisme, Restauration</option>
		    				<option value="Ouvrier qualifiés  Chauffeur">Ouvrier qualifiés, Chauffeur</option>
		    				<option value="Métiers de l’agriculture">Métiers de l’agriculture</option>
		    				<option value="Autre">Autre</option>
		    			</select>

		    			@error('role')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Années d'expérience <sup>*</sup></label>

		    			<select type="select" required class="border shadow-lg px-4 py-1" name="experience" aria-required="true">
		    				<option value="1 à 2 ans" selected="true">1 à 2 ans</option>
			    			<option value="3 à 5 ans">3 à 5 ans</option>
			    			<option value="6 à 10 ans">6 à 10 ans</option>
			    			<option value="Plus de 10 ans">Plus de 10 ans</option>
			    		</select>

			    		@error('experience')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Niveau d'étude <sup>*</sup></label>

		    			<select type="select" required class="border shadow-lg px-4 py-1" name="education" aria-required="true">
		    				<option value="Secondaire" selected="true">Secondaire</option>
		    				<option value="Terminal">Terminal</option>
		    				<option value="Formation professionnelle">Formation professionnelle</option>
		    				<option value="Baccalauréat">Baccalauréat</option>
		    				<option value="Universitaire sans diplôme">Universitaire sans diplôme</option>
		    				<option value="Ts Bac+2">Ts Bac+2</option>
		    				<option value="Licence LMD Bac+3">Licence LMD Bac+3</option>
		    				<option value="Master 1">Master 1</option>
		    				<option value="Licence Bac+4">Licence Bac+4</option>
		    				<option value="Master 2">Master 2</option>
		    				<option value="Ingéniorat Bac+5">Ingéniorat Bac+5</option>
		    				<option value="Magistère Bac +7">Magistère Bac +7</option>
		    				<option value="Doctorat">Doctorat</option>
		    				<option value="Certification">Certification</option>
		    				<option value="Non diplômante">Non diplômante</option>
		    			</select>

		    			@error('education')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Numéro de téléphone</label>
		    			<input type="number" value="{{ old('phone') }}" name="phone" class="px-4 py-1 w-full rounded border hover:border-blue-500 @error('phone') border-red-500 @enderror">

		    			@error('phone')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Email <sup>*</sup></label>
		    			<input type="email" value="{{ old('email') }}" name="email" class="px-4 py-1 w-full rounded border hover:border-blue-500 @error('email') border-red-500 @enderror">

		    			@error('email')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Confirmation de l'adresse e-mail <sup>*</sup></label>
		    			<input type="email" value="{{ old('email_confirmation') }}" name="email_confirmation" class="px-4 py-1 w-full rounded border hover:border-blue-500">
		    		</div>

		    		<div class="flex flex-col mt-6">
		    			<label class="mb-2">Période<sup>*</sup></label>
		    			<label>
		    				<input type="radio" value="morning" name="period" class="px-4 py-1 rounded border hover:border-blue-500" {{ $morningCount >= $maxPlaces ? 'disabled' : '' }}> <span class="@if($morningCount >= $maxPlaces) line-through @endif">Matin <span class="text-xs text-gray-500">({{ $maxPlaces - $morningCount }} disponible)</span></span>
		    			</label>
		    			<label class="mt-2">
		    				<input type="radio" value="evening" name="period" class="px-4 py-1 rounded border hover:border-blue-500" {{ $eveningCount >= $maxPlaces ? 'disabled' : '' }}> <span class="@if($eveningCount >= $maxPlaces) line-through @endif">Soir <span class="text-xs text-gray-500">({{ $maxPlaces - $eveningCount }} disponible)</span></span>
		    			</label>

		    			@error('period')
		    			    <div class="text-sm text-red-500">{{ $message }}</div>
		    			@enderror
		    		</div>

		    		<div class="mt-6">
		    			<button type="submit" class="text-white inline-block bg-blue-600 hover:bg-blue-500 rounded px-4 py-2">Valider</button>
		    		</div>

		    	</form>
		    </section>
		</div>
	</div>

</div>

@endsection

@section('scripts')
<script>


	let scrollToQuestionNode = function(e, id) {
		console.log(e.preventDefault())
	  	let element = document.getElementById(id);

	  	window.scrollTo({
		    top: element.offsetTop,
		    behavior: 'smooth'
		});
	}

</script>

@endsection




















