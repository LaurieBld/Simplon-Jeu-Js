<?php require('header.php') ?>

<main id="quizContent">





  <!-- DEBUT DIV APP VUE JS -->
  <div id="app">



  <div class="questions">
  <div id="toppart">
          <h1>
            <div id="connaitreLvl" class="titleCenter"><img src="images/redchart.png">
            <span class="red">C</span>onnaître mon niveau</div>
          </h1>
      </div>
    
  </div>

    
      <div v-for="(question, index) in quiz.questions">
          <!-- Hide all questions, show only the one with index === to current question index -->
          <div v-show="index === questionIndex">

       <!--  {{ scoringCalcul() }}  -->
        <div class="superDivQuest">
           <div class="boxquest"> 
              
              <div id="midpart">
              
                <div id="question1">
                <h2><img id="circle" src="images/rond.png" alt="redcircle"> {{ question.text }}</h2>
                </div>
              </div>


          
                  <ol class="stylebutton">
                    <li v-for="response in question.responses" class="style-li">
                    <label class="maHitbox">
                      <input type="radio" id="testremiradio"
                                v-bind:value="response.correct"
                                v-bind:name="index"
                                v-model="userResponses[index]"> <p class="reponseBox">
                                  <span v-if="questionIndex === 1 || questionIndex === 3" style="font-size:0.9rem; padding:10px;">{{response.text}}</span>
                                  <span v-else="questionIndex" style="line-height:90px;">{{response.text}}</span>
                                </p>
                      </input>

                        </label>
                    </li>
                  </ol>
          
                <button id="bouValid" v-on:click="next">
                  VALIDER
                </button>
        

      <div class="pagination" v-if="questionIndex < 4">
          {{ questionIndex + 1 }} sur {{ quiz.questions.length }}
      </div>  

    </div>
  </div>



  </div><!-- fin boxquest -->
</div><!-- fin divSuperQuest -->


 
          <div v-show="questionIndex === quiz.questions.length">
          
           
          
          </div>

                        <!-- Affiche les resultats Modif-->
                    <div  class="reponseScore" v-show="questionIndex === quiz.questions.length">     
                      <div class="superDivQuest">
                        <div class="finalScore"> 

                            
                                  
                            <div class="textFinalScore">
                              <h2>
                                 <img src="images/rond.png"  id="circle" alt="redcircle">
                                   Votre niveau
                              </h2>
                            </div>

                                 
                                
                            <div class="scoreContainer">
                                 
                                  <div id="Master">
                                    <div class="iconScore">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                    </div>
                                    <div class="textScore">
                                    {{ showScore() }}
                                    </div>
                                  </div>

                                  <div id="avance">
                                    <div class="iconScore">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                    </div>
                                    <div class="textScore">
                                    {{ showScore() }}
                                    </div>
                                  </div>

                                  <div id="intermediaire">
                                    <div class="iconScore">
                                      <img src="images/levelStar.png">
                                      <img src="images/levelStar.png">
                                    </div>
                                    <div class="textScore">
                                    {{ showScore() }}
                                    </div>
