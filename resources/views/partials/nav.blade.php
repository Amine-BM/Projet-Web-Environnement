<style>
    p{
        padding: 12px;
    }

    .navBar{
        display: flex; justify-content:center; width:100%; height: auto;
    }

    nav{
        display: flex; justify-content:flex-start; width:90%; background-color: whitesmoke; border-radius: 4px; margin: 24px;
    }

    .deco{
        position: absolute; right: 15px; top: 15px; height: auto;
        background-color: grey; border: none; color: white; padding: 10px 15px; text-align: center;
        text-decoration: none; display: inline-block; font-size: 16px; border-radius: 4px;
    }


</style>



<div class="navBar">
    <div class="deco">
        <a id="deconnexion" href="{{route('connect')}} "> Se deconnecter</a>
    </div>
    <nav>
        <p ><a onmouseover="mouseOver()" id="accueil" href="{{route('accueil')}} "> L'accueil</a></p>
        <p ><a id="contact" href="{{route('contact')}} ">Page contact</a></p>
        <p ><a id="connexion" href="{{route('connect')}} ">Connecter vous</a></p>
        <p ><a id="maisons" href="{{route('maisons')}} ">Maisons</a></p>
        <p ><a id="appartements" href="{{route('appartements')}} ">Appartements</a></p>
        <p ><a id="etreplusvert" href="{{route('vert')}} ">Etre plus vert</a></p>
    </nav>
</div>