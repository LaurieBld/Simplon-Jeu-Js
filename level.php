<?php require("header.php") ?>

<main id="gameSelection">
    <div class="questions">
        <div id="toppart">
           <div alt="redchart" id="allGamesTitle" class="titleCenter"><h1><em class="red">T</em>ous les jeux</h1></div>
        </div>
</main>

</div>


<div id="app">


    <div class="levels">
        <div class="stars column" id="level1">
            <div class="decouvre">
                <img class="bigStar" src="images/grosse_rouge.png" alt="etoile rouge">
            </div>
            <div class="decouvre">
            
            
             <a @click.prevent="onTabChange(1)" value="decouvre">Je découvre</a>

        </div>
    </div>



        <div class="stars column" id="level2">
            <div class="approfond">
                <img class="bigStar" src="images/grosse_rouge.png" alt="petite_etoile">
                <img class="bigStar" src="images/grosse_rouge.png" alt="petite_etoile">
            </div>


            <div class="decouvre">
                
               <a @click.prevent="onTabChange(2)">J'approfondis</a>
               

            </div>

        </div>


        <div class="stars column" id="level3">
            <div class="code">
                <img class="smallStar" src="images/petite_etoile.png" alt="petite_etoile">
                <img class="bigStar" src="images/grosse_rouge.png" alt="grosse_etoile">
                <img class="smallStar" src="images/petite_etoile.png" alt="petite_etoile">
            </div>

            <div class="decouvre">
                <a @click.prevent="onTabChange(3)">Je code</a>

            </div>

        </div>


        <div class="stars column" id="level4">
            <div class="decouvre">
                <img src="images/de2.png" alt="Dé avec 2">
            </div>
            <div class="decouvre">
                <a class="#" href="sandbox.php">Sandbox</a>
            </div>
        </div>
    </div>




     <!-- CONTENU JEUX !-->
     <div class="tab-content">
        
        {{ loadingRecup() }}

            <div id="gamesTotal">


                <div class="gameBox Lvl1">
                    <div class="games">
                        
<!-- Le jeu star wars n'a pas l'air d'être supporté par l'iframe -->
                            <div>
                                <a href="game.php?game=0"> <img
                                        class="picGame" src="images/jeu-star-wars.png"> </a>
                            </div>
                        </div>

                        <div id="box1" class="gameText">

                            <div class="gameTitle">
                                <h1><em class="red">S</em>tar Wars</h1>
                                <p>Développé par <em class="red">HourOfCode.com</em></p>
                                <a href="#" class="myButton2">javascript</a>

                                <a href="#" class="myButton3">algorithme</a>

                            </div>

                        </div>
                    
                </div>
            

       
   



    <div class="gameBox Lvl3">


        <div class="games">
       

            <div>
               <a href="game.php?game=1"> <img class="picGame" src="images/flexbox-froggy.png"></a>
            </div>
        </div>
        <div id="box2" class="gameText">

            <div class="gameTitle">
                <h1><em class="red">F</em>lexbox Froggy</h1>
                <p>Développé par <em class="red">CodePip.com</em></p>
                <a href="#" class="myButton">css</a>
            </div>

         
       
    </div>
</div>




<div class="gameBox Lvl3">

    <div class="games">
    <a href="game.php?game=2"> <img class="picGame" src="images/grid-garden.png"></a>
        
    </div>

    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">G</em>rid Garden</h1>
            <p>Développé par <em class="red">CodePip.com</em></p>
            <a href="#" class="myButton">css</a>

        </div>

      
    </div>
</div>


<div class="gameBox Lvl3">

    <div class="games">
        <a href="game.php?game=3"> <img class="picGame" src="images/flexbox-defense.png"></a>
    </div>

    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">F</em>lexbox Defense</h1>
            <p>Développé par <em class="red">CodePip.com</em></p>
            <a href="#" class="myButton">css</a>
        </div>

      
    </div>
</div>



<div class="gameBox Lvl3">

    <div class="games">
        <a href="game.php?game=4"> <img class="picGame" src="images/css-diner.png"></a>
    </div>

    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">C</em>SS Diner</h1>
            <p>Développé par <em class="red">Luke Pacholski</em></p>
            <a href="#" class="myButton">css</a>
        </div>

      
    </div>
</div>

<div class="gameBox Lvl2">

    <div class="games">
        <a href="game.php?game=5"> <img class="picGame" src="images/algo-blocs.png"></a>
    </div>

    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">A</em>lgoBlocs</h1>
            <p>Développé par <em class="red">Charly Piva</em></p>
            <a href="#" class="myButton2">javascript</a>
            <a href="#" class="myButton3">algorithme</a>

        </div>

      
    </div>
</div>

<div class="gameBox Lvl1">

    <div class="games">
        <a href="game.php?game=6"> <img class="picGame" src="images/minecraft.png"></a>
    </div>
                        
<!-- Le jeu minecraft n'a pas l'air d'être supporté par l'iframe -->
    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">M</em>inecraft</h1>
            <p>Développé par <em class="red">HourOfCode.com</em></p>
            <a href="#" class="myButton2">javascript</a>
            <a href="#" class="myButton3">algorithme</a>

        </div>

      
    </div>
</div>


<div class="gameBox Lvl2">

    <div class="games">
        <a href="game.php?game=7"> <img class="picGame" src="images/blocky.png"></a>
    </div>

    <div class="gameText">
        <div class="gameTitle">
            <h1><em class="red">B</em>locky</h1>
            <p>Développé par <em class="red">Google.com</em></p>
            <a href="#" class="myButton2">javascript</a>
            <a href="#" class="myButton3">algorithme</a>

        </div>

      
    </div>
</div>








</div>
</div>
</div>






<?php require("footer.php") ?>
