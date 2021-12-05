<style>
    p{
        position: right;
        padding: 6px;
    }
    .site{
        display: flex;
        justify-content: space-between;
        margin: 0px 20px;
        
    }
    .logo{
       
        width: 80px;
    }
     .navBar{
       
        display: flex;  width:25%; height: auto;
        
    
    } 

    nav{
            display: flex;
            justify-content: space-between;
            width:90%;
            background-color: #9ACD32; 
            border-radius: 4px;
            margin: 24px;
            padding-left:8px;
            padding-right:16px;
            
    }

</style>
<div class="site">
    <div class=logo>
        <p><img src="images/dragon.jpg"></p>
    </div>
    <div class="navBar">
        <nav>
        <p ><a id="inscription" href="{{route('inscription')}} ">Inscription</a></p>
        <p ><a id="connexion" href="{{route('connect')}} ">Espace Client</a></p>
        </nav>
    </div>
</div>