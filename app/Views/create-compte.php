<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Type ompte</title>

 </head>
<body>
   <div class="container">
   <br>
   <?= \Config\Services::validation()->listErrors(); ?>
 <div class="row">
      <div class="col-md-9">
<form method="post" action ="<?= base_url('Compte/store');?>" id="compte_create" method="post" accept-charset="utf-8">
    
<fieldset id="yakhine">
    <legend id="legendtypecompte">
        information compte:
    </legend>
    <div class="form-group">
        <label for="compte" id="laboptcompte"> Veuillez choisir le type de compte !</label><br/><br/>
        <select name="typecompte" id="typecompte" onchange="verifyTypecompte()" >
            <option value="0">Veuillez choisir type de compte</option>
            <option value="epargne">compte Eparge</option>
            <option value="courant">compte Courant</option>
            <option value="bloque">compte Bloqué</option>
        </select>
    </div>

    <div class="form-group" id="dateOuv">
       <label >Date d'ouverture</label>
       <input class="form-control" type="date" name="dateouverture" id="dateouverture">
    </div >
    <div class="form-group" id="dateDébut">
        <label>Date Début</label>
        <input class="form-control" type="date" name="datedébut" id="datedébut">
     </div >
     <div class="form-group" id="dateFin">
        <label>Date Fin</label>
        <input class="form-control" type="date" name="datefin" id="datefin">
     </div >
    <div class="form-group" id="numCompte">
        <label>numéro compte</label>
        <input class="form-control" type="number" name="numCmpte" id="numcompte">
     </div>
     <div class="form-group" id="numAg">
        <label>numéro d'agence</label>
        <input class="form-control" type="number" name="numAgence" id="numag">
     </div>
     <div class="form-group" id="clerip">
        <label>clé rib</label>
        <input class="form-control" type="number" name="cleRip" id="cleriP">
     </div>
     <div class="form-group" id="agios">
        <label>Agios</label>
        <input class="form-control" type="string" name="Agios" id="agioS">
     </div>
     <div class="form-group" id="fraisouverture">
        <label>Frais d'ouverture</label>
        <input class="form-control" type="string" name="Frouverture" id="FrouverturE">
     </div>
     <div class="form-group" id="etat">
        <label>Etat</label>
        <input class="form-control" type="number" name="Etat" id="etaT">
     </div>
     <div class="form-group" id="solde">
        <label>Solde</label>
        <input class="form-control" type="number" name="Solde" id="soldE">
     </div><br>
 <div class="form-group">
     <button id= "validatecompte" type="submit" onclick="verifytypechamps(), validatedCompte()" name="btn">Valider</button>
    </form>
</fieldset>
<script src="./../../public/js/Compte_CU.js"></script>
</div> 
</div>
</body>
</html>