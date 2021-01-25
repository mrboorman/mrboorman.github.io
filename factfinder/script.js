var fb = document.querySelector("#factButtons");
var fd = document.querySelector("#factDisplay");

fb.f1.addEventListener("click",showFact1);
fb.f2.addEventListener("click",showFact2);
fb.f3.addEventListener("click",showFact3);
fb.f4.addEventListener("click",showFact4);
fb.f5.addEventListener("click",showFact5);


function showFact1(){
	fd.innerHTML = "A duel between three people is actually called a truel."
}
function showFact2(){
	fd.innerHTML = "Most Muppets are left-handed. (Because most Muppeteers are right-handed, so they operate the head with their favoured hand.)"
}
function showFact3(){
	fd.innerHTML = "The top of the Eiffel Tower leans away from the sun, as the metal facing the sun heats up and expands. It can move as much as 7 inches.<br><img src='images/tower.jpg' alt=''>"
}
function showFact4(){
	fd.innerHTML = "In Switzerland, it is illegal to own just one guinea pig. This is because guinea pigs are social animals, and they are considered victims of abuse if they are alone."
}
function showFact5(){
	fd.innerHTML = "The collective name for a group of unicorns is called a blessing."
}