<style>
    p{
        padding: 12px;
    }

    .navBar{
        display: flex; justify-content:center; width:100%; height: auto;
    }

    .navB{
        display: flex; justify-content:flex-start; width:95%; background-color: whitesmoke; border-radius: 4px; margin: 24px;
    }

    .deco{
        position: absolute; right: 15px; top: 15px; height: auto;
        background-color: grey; border: none; color: white; padding: 10px 15px; text-align: center;
        text-decoration: none; display: inline-block; font-size: 16px; border-radius: 4px;
    }


</style>



<div class="navBar">
    <nav>
        <p ><a id="accueil" href="{{route('accueil')}} ">Accueil </a></p>
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