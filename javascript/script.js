const person = {
  firstName: 'John',
  lastName: 'Doe',
  id: 5566,
  fullName: function ($test) {
    return this.firstName + ' ' + this.lastName + ' ' + $test
  },
}
person.fullName = 'Md Abdullah Al Fahad'
console.log(person)
