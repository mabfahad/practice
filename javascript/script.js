function Person(name, age) {
  this.name = name
  this.age = age
}

const foysal = new Person('Foysal Ahmed', 30)
// foysal.country = 'BD'
const rihan = new Person('Rihan', 31)

Person.prototype.country = 'Soudi Arabia'

console.log(foysal)
console.log(rihan)
console.log(foysal.country)
