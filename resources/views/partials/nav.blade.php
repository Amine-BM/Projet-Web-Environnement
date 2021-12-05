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


</style>



<div class="navBar">
    <nav class="navB">
        <p ><a id="acceuil" href="{{route('acceuil')}} "> L'accueil</a></p>
        <p ><a id="contact" href="{{route('contact')}} ">Page contact</a></p>
        <p ><a id="connexion" href="{{route('connect')}} ">Connecter vous</a></p>
        <p ><a id="maisons" href="{{route('maisons')}} ">Maisons</a></p>
        <p ><a id="appartements" href="{{route('appartements')}} ">Appartements</a></p>
        <p ><a id="etreplusvert" href="{{route('vert')}} ">Etre plus vert</a></p>
    </nav>
</div>