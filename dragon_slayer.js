var slaying = true;
var youHit = Math.floor(Math.random());
var damageThisRound = Math.floor(Math.random() * 5 + 1);
var totalDamage = 0;
while (slaying === true){
  if (youHit){
		console.log("You hit!");
		totalDamage += damageThisRound;
		if (totalDamage >= 4){
			console.log("you hit him hard!");
			slaying = false;
		} else {
			youHit = Math.floor(Math.random());
		}
	} else {
		console.log("You missed!");
	}
	slaying = false;
	
}
