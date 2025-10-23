const a = 12
const b = 12
let c = a + b

let arr = [1,2,3,4,5]

for (let i=0;i<arr.length;i++) {
    console.log(arr[i])
}

let i = 0
while (i<arr.length) {
    console.log("dfdf"+arr[i])
    i++
}

const name = "Fahad";
console.log(`Hello, ${name}!`);
console.log(`This is ${name}`)

let text = `I'm Md Abdullah Al Fahad`;

console.log(text)

let header = `Template String`
let tags =['php','js','es6']

let html = `<h2>${header}</h2><ul>`
for (const x of tags) {
    html += `<li>${x}</li>`
}
html += `</ul>`

document.getElementById("practice").innerHTML = html

let arrowFunction = (a,b) => a*b
console.log(arrowFunction(5,4))