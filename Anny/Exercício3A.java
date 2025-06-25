import java.util.Scanner;

class Exercicio3A
{
	public static void main(String args[])
	{
		Scanner scanf = new Scanner(System.in);		
		
		System.out.printf("Informe um valor: ");
		int a = scanf.nextInt();
		
		System.out.printf("Informe outro valor: ");
		int b = scanf.nextInt();
		
		int r = a + b;
		
		System.out.printf("%d + %d = %d \n", a, b, r);		
	}
}