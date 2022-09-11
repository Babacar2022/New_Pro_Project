<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Demande Info</h1>
  Nom etudiant :<h3>{{  $demandeInfo->nom }}</h3>
  Prenom etudiant :<h3>{{  $demandeInfo->prenom }}</h3>
  Adresse etudiant :<h3>{{  $demandeInfo->adresse }}</h3>
  Email etudiant :<h3>{{  $demandeInfo->email }}</h3>
  Telephone etudiant :<h3>{{  $demandeInfo->telephone }}</h3>
  Center etudiant :<h3>{{  $demandeInfo->center }}</h3>
  Fliere etudiant :<h3>{{  $demandeInfo->fliere }}</h3>
  Titre etudiant :<h3>{{  $demandeInfo->titre }}</h3>
  Description etudiant :<h3>{{  $demandeInfo->description }}</h3>
  <br><br>
 <img height="250" width="450" src="demandeinfo/{{  $demandeInfo->image }}" alt="">
</body>
</html>
