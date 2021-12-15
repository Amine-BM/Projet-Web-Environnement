<style>
    p{
        padding: 12px;
    }

    .navBar{
        display: flex; justify-content:center; width:100%; height: auto;
        background-color:#9ACD32 ;
       
    }

    .navB{
        display: flex; justify-content:flex-start; width:95%; 
        background-color:  whitesmoke;border-radius: 4px; margin: 24px;
}

.dropbtn {
    float: left;
    overflow: hidden;
}

.dropdown p {
    font-size: 16px;
    border: none;
    outline: none;
    padding: 14px 16px;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
  }



  /* Dropdown content (hidden by default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  /* Add a grey background color to dropdown links on hover */
  .dropdown-content a:hover {
    background-color: lightgrey;
    color: white;
  }
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
    display: block;
  }

</style>



<div class="navBar">
    <nav class="navB">
        <p ><a id="accueil" href="{{route('accueil')}} "> L'accueil</a></p>
        <p ><a id="etreplusvert" href="{{route('vert')}} ">Etre plus vert</a></p>

        <div class="dropdown">
            <p >Profil </p>
            <div class="dropdown-content">
                <a href="{{route('profil')}}">Consulter Mon Profil</a>
                <a href="{{route('biens')}}">Consulter Mes Biens</a>
            </div>
        </div> 

        <div class="dropdown">
            <p >Contrats </p>
            <div class="dropdown-content">
                <a href="{{route('ajoutContrat')}}">Créer Un Contrat</a>
                <a href="{{route('suppContrat')}}">Résillier Un Contrat</a>
            </div>
        </div> 

        <div class="dropdown">
            <p >Maisons </p>
            <div class="dropdown-content">
                <a href="{{route('creaImmeuble')}}">Ajouter Un Immeuble</a>
                <a href="{{route('suppImmeuble')}}">Supprimer Un Immeuble</a>
                <a href="{{route('creaAppartement')}}">Ajouter Un Appartement</a>
                <a href="{{route('suppAppartement')}}">Supprimer Un Appartement</a>
            </div>
        </div>

        <div class="dropdown">
            <p >Appartements </p>
            <div class="dropdown-content">
                <a href="{{route('ajoutPiece')}}">Ajouter Une Pièce</a>
                <a href="{{route('suppPiece')}}">Supprimer Une Pièce</a>
            </div>
        </div> 

        <div class="dropdown">
            <p >Appareils </p>
            <div class="dropdown-content">
                <a href="{{route('ajoutAppareil')}}">Ajouter Un Appareil</a>
                <a href="{{route('consultAppareil')}}">Consulter Mes Appareils</a>
            </div>
        </div>

        <div class="dropdown">
            <p >Consommations </p>
            <div class="dropdown-content">
                <a href="{{route('consultConsoImmeuble')}}">Consommations Maisons</a>
                <a href="{{route('consultConsoAppartement')}}">Consommations Appartement</a>
                <a href="{{route('consultConsoAppareil')}}">Consommations Appareils</a>
            </div>
        </div>

        <p ><a id="simulations" href="{{route('simulations')}} ">Simulations</a></p>
    </nav>
</div>