import java.util.*;

public class Guess_Number {

	public static void main(String[] args) {
		System.out.println("Number Guessing Game \n");

		System.out.println("Created By Ghanshyam Vaja \n");
		
		Random rand = new Random();
		int randomNumber;
		int userNumber;
		int chooseLevel;
		int easyCount = 5;
		int mediumCount = 7;
		int hardCount = 10;
		int ultrahardCount = 15;
		int leftCount;

		Scanner Sc = new Scanner(System.in);
		System.out.println("    Level         Range       Turns");
		System.out.println("1 - Easy       (1 to 100)       5\n2 - Medium     (1 to 1000)      7\n3 - Hard       (1 to 10000)     10\n4 - Ultra Hard (1 to 100000)    15");

		System.out.print(" \nChoose Level(1 | 2 | 3 | 4 ) : ");
		chooseLevel = Sc.nextInt();

		while (chooseLevel <= 0 || chooseLevel > 4) {
			System.out.print("Choose Level(1 | 2 | 3 | 4) : ");
			chooseLevel = Sc.nextInt();
		}

		if (chooseLevel == 1) {
			randomNumber = rand.nextInt(101);
		} 
		else if (chooseLevel == 2) {
			randomNumber = rand.nextInt(1001);
		} 
		else if (chooseLevel == 3) {
			randomNumber = rand.nextInt(10001);
		} 
		else {
			randomNumber = rand.nextInt(100001);
		}
System.out.println(" \n---------------------------------------------");
		System.out.println("Tip: Enter 0 or <0 Value For Getting Answer");
		System.out.println("--------------------------------------------- \n");

		do {
			if (easyCount == 0 || mediumCount == 0 || hardCount == 0 || ultrahardCount == 0) {
				System.out.println("\n---------------------------------------------");
				System.out.print("GAME OVER");
				break;
			}

			System.out.print(" \nGuess A Number Between 1 To ");
			if (chooseLevel == 1) {
				easyCount --;
				leftCount = easyCount;
				System.out.print("100");
			} else if (chooseLevel == 2) {
				mediumCount --;
				leftCount = mediumCount;
				System.out.print("1000");
			} else if (chooseLevel == 3) {
				hardCount --;
				leftCount = hardCount;
				System.out.print("10000");
			} else {
				ultrahardCount --;
				leftCount = ultrahardCount;
				System.out.print("100000");
			}
			System.out.print(" : ");

			userNumber = Sc.nextInt();

			if (userNumber == randomNumber) {
				System.out.println("\n---------------------------------------------");
				System.out.println(" \nCongratulations, Your Guess Is Correct");
			} 
			else if (userNumber > randomNumber) {
				System.out.println("Your Guess Is Large     Available Turn : " + leftCount);
			} 
			else if (userNumber > 0) {
				System.out.println("Your Guess Is Small     Available Turn : " + leftCount);
			}
		} while (userNumber > 0);

System.out.println(" \n---------------------------------------------");
		System.out.print("Your Answer Is : ");
		System.out.println(randomNumber);
		System.out.println("---------------------------------------------");
	}
}