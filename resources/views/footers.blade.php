<!DOCTYPE html>
    <style>
            
             img{
                
                max-width:100%;
                max-height:100%;
            }    
            footer{
                    background-color: #9ACD32;
                    display: flex;
                    justify-content: space-between;
                }
            .droitefoot{
                
                width: 100px;
                height: 50px;
                padding-top:20px;
                padding-left:20px;
            } 
            .gauchefoot{
                display: flex;
                justify-content: space-between;
                padding-bottom:20px;
                padding-left:20px;
            }
    </style>
<footer>
        <br>
        <div class="gauchefoot">
            <div class="gauche1foot">
                <ul class="i">
            <li>Mentions légales</a> </li><br>
            <li>Conditions générales </li><br>
            <li>Plan du site </li><br>
            </ul>
            </div>
            <div class="gauche2foot">
                <ul class="i">
            <li>Charte de confidentialité et protection des données personnelles </li><br>
            <li>Politique de cookies </li><br>
            <li>Paramétrer mes cookies </li><br>
            </ul>
            </div>
        </div>

        <div class="droitefoot">             
        <a href="{{route('contact')}}">
            <img class="img-card" src="images/aide.png" > 
         </a>
        </div>
    </footer>
</html>