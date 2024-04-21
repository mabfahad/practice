#include<iostream>
using namespace std;
/*
Functions
Void
Return
Paramaterised
Non Parametirsed
*/

void voidFunction() {
    cout << "This is void function but non parameterised" << endl;
}

void voidFunctionParameterised(string $a){
    cout << "This is void but " << $a << endl;
}

// string returnFunction() {
//     return "this is return function" << endl;
// } 

int getSumTwoNumbers(int num1, int num2) {
    int num3 = num1 + num2;
    return num3;
}

int main() {
    voidFunction();
    string a;
    int num1,num2;
    cin >> a >> num1 >> num2;
    voidFunctionParameterised(a);
    cout << getSumTwoNumbers(num1, num2);
   return 0;
}