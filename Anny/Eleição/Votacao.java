import java.util.Scanner;

public class Votacao
{
	public static void main (String args[])
	{
		Scanner scanner = new Scanner(System.in);
		
		System.out.printf("Informe o nome do candidato 1:");
		String n = scanner .nextLine();
		
		System.out.printf("Informe a sigla do partido");
		String s = scanner.nextLine();
		
		Candidato cand1 = new Candidato(n, s, 1);
	
		System.out.printf("Informe o nome do candidat 2:");
		String n = scanner .nextLine();
		
		System.out.printf("Informe a sigla do partido");
		String s = scanner.nextLine();
		
		Candidato cand2 = new Candidato(n, s, 2);
		
		System.out.printf("Informe o nome do candidat 3:");
		String n = scanner .nextLine();
		
		System.out.printf("Informe a sigla do partido");
		String s = scanner.nextLine();
		
		Candidato cand3 = new Candidato(n, s, 3);
	
	}
}