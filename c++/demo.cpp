#include<iostream>
using namespace std;
/*
if age less than 18 not eligible for the job
Age 18 to 55 , eligible for the job
Age 56 to 57, eligible but retirement soon
Age greater than 57, Retirement time now
*/

int main() {
    //Foor Loop
    string s = "Fahad";
    int i = 1;

    do
    {
         cout << i << "=" << s << endl;
        i++;
    } while (i <= 5);
    
    return 0;
}