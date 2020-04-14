//target utile pour console log debug
let targ = "target: "



var quiz = {
    title: '',
    questions: [{
            text: "Informatique, web et numérique : est-ce la même chose ?",
            responses: [{
                    text: 'Oui',
                    correct: 0,
                    value: "0",
                    QuestId: "QuestId01"
                },
                {
                    text: 'Non',
                    correct: 10,
                    value: "10",
                    QuestId: "QuestId02"
                },
            ]
        }, {
            text: "Que veut dire HTML ?",
            correct: 0,
            responses: [{
                    text: 'Un logiciel (High Term Mixed Logiweb)',
                    correct: 0,
                    value: "0"
                },
                {
                    text: 'Un langage (HyperText Markup Language)',
                    correct: 20,
                    value: "20"
                },
                {
                    text: 'Un langage (High Term Middle Language)',
                    correct: 0,
                    value: "0"
                },
            ]
        },


        {
            text: "Parmi la liste suivante, lequel n'est pas un navigateur web ?",
            responses: [{
                    text: 'Google',
                    correct: 30,
                    value: "30"
                },
                {
                    text: 'Opéra',
                    correct: 0,
                    value: "0"
                },
                {
                    text: 'Netscape',
                    correct: 0,
                    value: "0"
                },
            ]
        },
        {
            text: "Que veut dire margin 10 px ?",
            responses: [{
                    text: 'Le bloc HTML a une bordure extérieure de 10 pixel',
                    correct: 0,
                    value: "0"
                },
                {
                    text: 'Le bloc HTML a une bordure intérieure de 10 pixel',
                    correct: 0,
                    value: "0"
                },
                {
                    text: 'Le bloc HTML a un espacement extérieur de 10 pixel',
                    correct: 40,
                    value: "40"
                },
                {
                    text: 'Le bloc HTML a un espacement intérieur de 10 pixel',
                    correct: 0,
                    value: "0"
                },
            ]
        }
    ]



};




var app = new Vue({
    el: '#app',
    data: {
        quiz: quiz,
        //ajout Remi
        txtend: 'txtend',
        // Store current question index
        questionIndex: 0,
        // An array initialized with "false" values for each question
        // It means: "did the user answered correctly to the question n?" "no".
        userResponses: Array(quiz.questions.length).fill(0),

         AllLvl1 : document.getElementsByClassName("Lvl1"),
         AllLvl2 : document.getElementsByClassName("Lvl2"),
         AllLvl3 : document.getElementsByClassName("Lvl3")
    },


    // The view will trigger these methods on click
    methods: {
        // Go to next question
        next: function () {
            this.questionIndex++;
        },
        // Go to previous question
        prev: function () {
            this.questionIndex--;
        },

        loadingRecup: function () {
           // let AllLvl1 = document.getElementsByClassName("Lvl1");
           // let AllLvl2 = document.getElementsByClassName("Lvl2");
            //let AllLvl3 = document.getElementsByClassName("Lvl3");

            console.log(this.AllLvl1);


        },


        onTabChange(idx) {
            switch (idx) {
                case 1:
                    console.log("tous les lvl 1");
                
                    for (let i = 0; i < this.AllLvl1.length; i++) 
                    {
                     console.log("ok"+this.AllLvl1[i]);

                     this.AllLvl1[i].style.display="block";

                    }  
                    
                    for (let i = 0; i < this.AllLvl2.length; i++) 
                    {
                     console.log("ok2"+this.AllLvl2[i]);

                     this.AllLvl2[i].style.display="none";

                    } 
                    
                    for (let i = 0; i < this.AllLvl3.length; i++) 
                    {
                     console.log("ok3"+this.AllLvl3[i]);

                     this.AllLvl3[i].style.display="none";

                    }    

                    break;

                case 2:
                    console.log("ok1");

                    for (let i = 0; i < this.AllLvl1.length; i++) 
                    {
                     console.log("ok1"+this.AllLvl1[i]);

                     this.AllLvl1[i].style.display="none";

                    }  
                    
                    for (let i = 0; i < this.AllLvl2.length; i++) 
                    {
                     console.log("ok2"+this.AllLvl2[i]);

                     this.AllLvl2[i].style.display="block";

                    } 
                    
                    for (let i = 0; i < this.AllLvl3.length; i++) 
                    {
                     console.log("ok3"+this.AllLvl3[i]);

                     this.AllLvl3[i].style.display="none";

                    }  

                    break;

                case 3:
                    console.log("3");

                    for (let i = 0; i < this.AllLvl1.length; i++) 
                    {
                     console.log("ok1"+this.AllLvl1[i]);

                     this.AllLvl1[i].style.display="none";

                    }  
                    
                    for (let i = 0; i < this.AllLvl2.length; i++) 
                    {
                     console.log("ok2"+this.AllLvl2[i]);

                     this.AllLvl2[i].style.display="none";

                    } 
                    
                    for (let i = 0; i < this.AllLvl3.length; i++) 
                    {
                     console.log("ok3"+this.AllLvl3[i]);

                     this.AllLvl3[i].style.display="block";

                    }  

                    break;
            }
            
        },


        scoringCalcul: function () {
            return this.userResponses[0] + this.userResponses[1] + this.userResponses[2] + this.userResponses[3];

        },







        //AFFICHER LE Score
        showScore: function () {
            let texte;
            let scoring = this.userResponses[0] + this.userResponses[1] + this.userResponses[2] + this.userResponses[3];

            if (scoring == 100) {

                texte = "C'est un sans faute, impressionant !"
                const jeCode = document.getElementById('Master').style.display = "block"

                intermediaire.style.display = "none"


            } else if (scoring >= 70 && scoring <= 90) {

                texte = "je code !"
                const avance = document.getElementById('avance').style.display = "block"

                debutant.style.display = "none"
                intermediaire.style.display = "none"


            } else if (scoring >= 50 && scoring <= 69) {
                texte = "j'approfondis !"
                const intermediaire = document.getElementById('intermediaire').style.display = "block"

                debutant.style.display = "none"


            } else if (scoring <= 30) {
                texte = "Débutant, je découvre !"
                const debutant = document.getElementById('debutant').style.display = "block"


            }



            console.log(targ, scoring);
            return texte;

        },



        // Return "true" count in userResponses
        score: function () {
            return this.userResponses.filter(function (val) {
                return val
            }).length;
        }
    },
});



const hitbox = document.getElementsByClassName('maHitbox');

for (let i = 0; i < hitbox.length; i++) {

    hitbox[i].addEventListener('click', function () {

        hitbox[i].classList.add('active');
        let isActive = document.getElementsByClassName('active');

        for (let j = 0; j < hitbox.length; j++) {

            if (hitbox[i] != hitbox[j]) {
                hitbox[j].classList.remove('active');
            }
        }

    });
}