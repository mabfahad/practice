#include<iostream>
using namespace std;
/*
if age less than 18 not eligible for the job
Age 18 to 55 , eligible for the job
Age 56 to 57, eligible but retirement soon
Age greater than 57, Retirement time now
*/

int main() {
    int age;
    cin >> age;

    if (age < 18)
    {
        cout << "Not eligible for the job";
    } else if (age <= 54)
    {
        cout << "Eligible for the job";
    } else if (age <= 57)
    {
        cout << "Eligible for the job but retirement soon";
    } else {
        cout << "Retirement Now!";
    }
    
    
    
    
    
    
    
    
    return 0;
}