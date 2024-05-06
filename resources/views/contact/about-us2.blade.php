
@extends('user.user_dashboard2')


@section('user')

<div style="color: transparent;">
    MD
</div>
<div class="row row-cols-1 row-cols-md-2 g-2">
    <div class="col">
      <div class="card">
        <img src="{{ asset('logo/Introduction.gif') }}" class="card-img-top" alt="...">
        <br>
        <h3 style="font-family: elephant; text-align:center;">Registrer  :)</h3>      
        <br>
        <br>
</div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{ asset('logo/team.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Notre equipe</h5>
          <p class="card-text"><b>Email :</b> maurideveloper2@gmail.com</p><i data-feather="mail"></i>
          <p class="card-text"><b>Telephone :</b> +22241864369 & +22233010631</p><i data-feather="phone"></i>
          <p class="card-text"><b>Location :</b> Nouakchott-Mauritania</p><i data-feather="location"></i>
        </div>
      </div>
    </div>

    <div class="card col-md-12 stretch-card">
    <div class="card-body" style="font-family: verdana;">
      <h2 style="font-family: elephant;">Information pour l'inscription a notre site</h2><br>
      <h4 class="card-text mb-3">faire les etapes suivantes pour terminer votre registrement  :</h4><br>
      <h4>Etape 1: Introduction </h4><br>
      <h6>1- Donner une introduction sur vous avec ta niveau academique et envoyer les termes suivantes a notre email:</h6>
      <h6>2- Email</h6>
      <h6>3- Telephone</h6>
      <h6>4- Address</h6>
      <h6>5- Technologie qui vous etez utiliser </h6>
      <br>

      <h4>Etape 2: Envoyer le dossier suivant :</h4><br>
      <h6>1- Image 60*60 <span class="text-danger">*obligatoire</span></h6>
      <h6>2- A certificat de recommendation a votre company<span class="text-danger">*obligatoire</span></h6>
      <h6>3- diplome d'universite<span class="text-danger">*obligatoire</span></h6>
      <h6>4- Certificat d'experience sur la domaine de programmation<span class="text-danger">*obligatoire</span></h6>
      <h6>5- A Certificat de competence si il ya</h6>
      <h6>6- A Certificat de projet pour un person ou une company<span class="text-danger">*obligatoire</span></h6>
      <h6>7- Carte d'identite <span class="text-danger">*obligatoire</span></h6>
      <br>
      <span class="text-danger">Attenation :</span><br>

      <br>
       <p>Le dernier operation de la registrement c'est le dossier doit etre verifie, puis ce nous permettez d'envoyer un message de confirmation a votre email et un mot de passe de votre compte, puis si tu vais tu peut doit changer dans notre compte, exp: <span class="text-success">Votre inscription a été succes , mot de passe = 12345678</span></p><br>
       

       <br>
       <p class="btn btn-inverse-info">NB : apres vous étez remplacer votre mot de passe si tu vais dans le site</p><br><br>

       
        <p>Si il ya un question tu peut me contactez nous a votre email suivant :</p>
        <br>
    <form action="{{ route('sendmessage') }}" method="POST">
    @csrf
    <textarea class="text-white" placeholder="Entrer un message" name="message" cols="75" rows="8" required></textarea>
    <br>
    <button type="submit" class="btn btn-primary"><img width="25px" src="{{asset('logo/post.png')}}" alt="">  Envoyer le message</button>
    </form>
    </div>
  </div>

  <style>
    textarea {
  
  width: 100%;
  padding: 10px;
  border: 1px solid;
  border-radius: 5px;
  margin-bottom: 15px;
  background-color: transparent;
}

  </style>
    
    
  </div>

  

@endsection