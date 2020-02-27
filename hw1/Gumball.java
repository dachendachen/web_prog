

/*	Web Programming HW 1
*
*	Gumball.java
*	Author: Chen Huang
*	NYU ID: N17505593
*	email: ch3712@nyu.edu
*	
*/

/* 
 * there are total 10 different color gumballs:
 * 0 Yellow 10-15
 * 1 BLue 1-10
 * 2 White 6-15
 * 3 Green 10-25
 * 4 Black 1-12
 * 5 Purple 5-10
 * 6 Silver 4-6
 * 7 Cyan 5-12
 * 8 Magenta 0-10
 * 9 Red ONLY 1
 *
 * task 1: print all generated gumball
 * task 2: randomly select a gumball, print the result 
 * task 3: game stops when get the RED gumball
 * task 4: print the total amount of money used
 * task 5: print the most frequent purchased color during the game
 *
 * */

import java.util.*;

public class Gumball{
	static Random rg = new Random();
	
	//generating gumballs
	//by default, 10 colors
	static int[] generator(){
		//Random rg = new Random();
		//create a integer array
		int[] gumball = new int[10];
		gumball[0] = 10 +rg.nextInt(6); //min + random(max-min+1)
		gumball[1] = 1 + rg.nextInt(10);
		gumball[2] = 6 + rg.nextInt(10);
		gumball[3] = 10 + rg.nextInt(16);
		gumball[4] = 1 + rg.nextInt(12);
		gumball[5] = 5 + rg.nextInt(6);
		gumball[6] = 4 + rg.nextInt(3);
		gumball[7] = 5 + rg.nextInt(8);
		gumball[8] = 0 + rg.nextInt(11);
		gumball[9] = 1;
		return gumball;

	}
	static String[] color_generator(){
		String[] color = new String[10];
		color[0] = "Yellow";
		color[1] = "Blue";
		color[2] = "White";
		color[3] = "Green";
		color[4] = "Black";
		color[5] = "Purple";
		color[6] = "Silver";
		color[7] = "Cyan";
		color[8] = "Magenta";
		color[9] = "Red";
		return color;	
	}


	public static void main (String[] args){
	
		int num = 10;
		Random rg = new Random();
		//create a integer array
		//when a type of gumball runs out, mark 99, otherwise --
		int[] gumball = generator();
		String[] color = color_generator();

		//print the initial condition in the gumball box
		System.out.println("Welcome to the CIMS Gumball Machines Simulator");
		System.out.println("You are starting with the following Gumballs:");
		System.out.printf("%d Yellow \n", gumball[0]);
		System.out.printf("%d Blue \n", gumball[1]);
		System.out.printf("%d White \n", gumball[2]);
		System.out.printf("%d Green \n", gumball[3]);
		System.out.printf("%d Black \n", gumball[4]);
		System.out.printf("%d Purple \n", gumball[5]);
		System.out.printf("%d Silver \n", gumball[6]);
		System.out.printf("%d Cyan \n", gumball[7]);	
		System.out.printf("%d Magents \n", gumball[8]);
		System.out.printf("and 1 Red \n");

		//purchase game started 
		int[] color_count = new int[num];
		Arrays.fill(color_count,0);
		int count =0;
		//index 9 is the red gumball
		System.out.println("Here are your random purchases:");
		int index = rg.nextInt(num);
		if(index==9) {
			count++; 
			color_count[index]++;
			gumball[9]--;
		}
		while(index!=9){
			if(gumball[index]==0){
				index = rg.nextInt(num);
			}
			else{
				gumball[index]--;
				color_count[index]++;
				count++;
				System.out.println(color[index]);
				index=rg.nextInt(num);
			}
		} 
		System.out.println(color[index]);
		color_count[index]++;
		//when get RED
		System.out.printf("You purchased %d Gumballs, for a total of $%.2f. \n", count, count*0.25);
		
		//the color purchased the most
		int max = color_count[0];
		for(int i=1;i<10;i++){
			if(color_count[i] > max){
				max = color_count[i];
			}
		}

		//max stores the max number of counts
	/*	System.out.println(max);
		for(int k=0;k<10;k++){
			System.out.print(color[k]+" ");
		}
	*/	

		System.out.println("The color(s) purchased most:");
		for(int j=0;j<10;j++){
			if(color_count[j]==max){
				System.out.printf("%s ", color[j]);
			}
		}
		System.out.println();
	}



}


