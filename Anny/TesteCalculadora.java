import java.util.Scanner;

class TesteCalculadora
{
	public static void main(String args[])
	{
		Calculadora calc = new Calculadora();
		Scanner scanner = new Scanner(System.in);		
		
		System.out.printf("Informe um valor: ");
		calc.n1 = scanner.nextInt();
		
		System.out.printf("Informe outro valor: ");
		calc.n2 = scanner.nextInt();
		
		
		int r = calc.soma();
		
		System.out.printf("Resultado: %d \n",r);
		
			
	}
}