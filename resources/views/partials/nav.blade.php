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

</style>

<div class="navBar">
    <nav>
        <p ><a id="acceuil" href="{{route('acceuil')}} "> L'accueil</a></p>
        <p ><a id="contact" href="{{route('contact')}} ">Page contact</a></p>
        <p ><a id="connexion" href="{{route('connect')}} ">Connecter vous</a></p>
    </nav>
</div>