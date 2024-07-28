#include<iostream>
using namespace std;
/*
Functions
Void
Return
Paramaterised
Non Parametirsed
*/

int main() {
   int num;
   cin >> num;
   
for (int i = 0; i < num; i++)
{
    for (int j = 0; j <= i; j++)
    {
        cout << "*";
    }
    cout << endl;
    
}
   return 0;
}