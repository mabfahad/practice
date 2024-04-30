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
   
   for ( int i=num; i >= 1; i--)
   {
        for (int j = 1; j <= i; j++)
        {
            cout << "*";
        }
        cout << endl;
        
   }
   

   return 0;
}