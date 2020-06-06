#include <iostream>
#include <stdio.h>
#include <conio.h>

using namespace std;

main(){
	int jumlah, min, temp;
	cout<<"Task 1\n\n\n";
	cout<<"Masukan jumlah data : ";
	cin>>jumlah;
	
	cout<<"\n\n";
	int data[jumlah];
	for(int i=1; i<=jumlah; i++){
		cout<<"Masukan data ke-"<<i<<" : ";
		cin>>data[i-1];
	}
	
	for(int i=jumlah-1; i>=0; i--){
		min = i; 
		for(int j=0; j<i; j++){
			if(data[j] < data[i]){
				min = j;
			}
		}
		temp = data[min];
		data[min] = data[i];
		data[i] = temp;
	}
	
	cout<<"\n";
	cout<<"Data terbesar kedua adalah : "<<data[1]<<"\n\n\n";
	system("pause");
	getch();
}
