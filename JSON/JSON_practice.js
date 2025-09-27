const userData = {
    user : [
        {Fullname: "Justin Domanais", Age: 22, Points: 100},
        {Fullname: "Pinky Angkico", Age: 22, Points: 200}
        ]
};

console.log("User data: " + userData.user[1].Fullname + " " + userData.user[1].Age + " " +   userData.user[1].Points);

const dataToString = JSON.stringify(userData);

const dataToObject = JSON.parse(dataToString);

let i = 0;
while(i < dataToObject.user.length){
    let name = dataToObject.user[i].Fullname;    
    let age = dataToObject.user[i].Age;    
    let points = dataToObject.user[i].Points;    
    
     console.log(name + " " + age + " " + points); // print inside the loop
    i++
}
