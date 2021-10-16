// PLUS MOINS NUMBER
function plusMoins(nombreAleatoire, numbers) {
    let res;
    res = (numbers < nombreAleatoire) ? "Plus" : "Moins";
    res = (numbers === nombreAleatoire) ? "Victoire" : res;

    return res
}

function findLargest(numbers) {
    let largest = numbers[0];
    for (number of numbers) {
        largest = (number > largest) ? number : largest;
    }
    return largest;
}

function closestToZero(ts) {
    let closest = ts[0];
    ts.forEach(el => {
        if(el !== closest){
            closest = (Math.abs(closest) == Math.abs(el)) ? Math.abs(el) : closest;
            closest = (Math.abs(closest) > Math.abs(el)) ? el : closest;
        }
    })
    return closest;
}

function solve(clawPos, boxes, boxInClaw) {

    if(!boxInClaw){
        let high = boxes[0];
        let poshigh =0;
        for(let i = 0; i < boxes.length; i++){
        if(boxes[i]>=high){
            poshigh = i;
            high = boxes[i];
        }
        }

        if(clawPos == poshigh){
            return 'PICK';
        }

        else if(clawPos > poshigh){
            return 'LEFT';
        }

        else if(clawPos < poshigh){
            return 'RIGHT';
        }
        
    }
    else{
        let low = boxes[0];
        let poslow =0;
        for(let i = 0; i < boxes.length; i++){
        if(boxes[i]<low){
            poslow = i;
            low = boxes[i];
        }
        }

        if(clawPos == poslow){
            return 'PLACE';
        }

        else if(clawPos > poslow){
            return 'LEFT';
        }

        else if(clawPos < poslow){
            return 'RIGHT';
        }
    }
}

// VALIDATE CITY
function city(city) {
    // let city = "75000 Paris";
    let array = city.split(" ");
    let list_CP = ["75", "77", "78", "91", "92", "93", "94"];
    let CP = array[0].substr(0, 2);
    let errorCP = 0;
    let errorCity = 0;
    console.log(CP);

    errorCP = (list_CP.includes(CP)) ? 0 : 1;

    for (let i = 1; i < array.length; i++) {
        errorCity = (array[i][0] == array[i][0].toUpperCase()) ? 0 : 2;
    }

    error = (errorCP) ? errorCP : errorCity;
    error = (errorCP && errorCity) ? 3 : error;
    let isCorrect = (error === 0) ? true : false;

    res = {
        "isCorrect": isCorrect,
        "direction": direction,
        "error": error
    };

    return res;
}
let idReg = /\d{2}\w{2}\d{3}/;
// console.log(idReg.test('12DF333'));

let colorReg = /^\w+$/;
error = (colorReg.test("123gh")) ? 0 : 1;
// console.log(error);

function foo(){
    let x = 5;
}
// console.log(foo());


class Cart{
    constructor(products){
        this.products = products ? products : [];
    }

    saveProducts(){
        localStorage.setItem('products',JSON.stringify(this.products))
    }
}

// console.log(typeof(Cart));

let user =["louis"]

let clone = user;

clone.push('2');
user.push('3');


class Timer{
    constructor(time){
        this.time = time;
    }
    decrease(){
        this.time--;
    }
    start(){
        setInterval(function(){this.decrease()}, 1000)
    }
}

let chrono = new Timer(30);
// chrono.start();
// console.log(chrono.time);

let a = 3;
a = true ? +1 : a--;
// console.log(a);


// PREMIER
function isItPrimeNumber(number) {
   
    let k=2;
    let premier = 1;
    while(k<number && premier===1){
        premier = (number%k == 0) ? 0 : 1;
        k++
    }
    return premier;
}

// AVERAGE
function tsAverage(ts) {
    if(ts.length == 0){
        return 0;
    }

    let sum = 0;
    for(let num of ts){
        sum += num
    }
    return sum/(ts.length)

}
a=2;
b="4";
function c(i){
    i = 5
}
c(a);

f=[];
f.push(1);
f.push(1);
console.log(f.length)

console.log("1"==1);
a =new Array([1,3])
console.log(true ==1)