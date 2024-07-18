let person = {
    name:'Fahad',
    age: 33,
    isMarraid: true,
    printDetails() {
        return `this is ${this.name}. He is ${this.age} years old and married ${this.isMarraid}`;
    }
}

let li = document.querySelectorAll('ul li');
li[1].style.color = 'red';
document.getElementById("title").innerHTML = "New text!";
document.getElementById("myImage").src = "landscape.jpg";
console.log(document.getElementById("myImage"));
console.log(li);


if(li[1].innerHTML === 'Janee') console.log(li[1]);
    else console.log('False');

let hello = () => console.log('Hello World!');
hello();

let hello2 = (name) => {
    if(name === 'Fahad') console.log(`This is ${name}`);
    else console.log(name);
}

console.log(hello2('Fahad'));