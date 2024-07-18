let person = {
    name:'Fahad',
    age: 33,
    isMarraid: true,
    printDetails(name,age,isMarraid) {
        return `this is ${name}. He is ${age} years old and married ${isMarraid}`;
    }
}

console.log(person.printDetails('Fahad',33,false));