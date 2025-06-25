package br.edu.ifms.model;

public class Carro {
	
	private int id;
	private String nome;
	private String marca;
	private String cor;
	private int modelo;
	private String placa;
	
	public Carro() {
		// TODO Auto-generated constructor stub
	}

	public Carro(int id, String nome, String marca, String cor, int modelo, String placa) {
		super();
		this.id = id;
		this.nome = nome;
		this.marca = marca;
		this.cor = cor;
		this.modelo = modelo;
		this.placa = placa;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getMarca() {
		return marca;
	}

	public void setMarca(String marca) {
		this.marca = marca;
	}

	public String getCor() {
		return cor;
	}

	public void setCor(String cor) {
		this.cor = cor;
	}

	public int getModelo() {
		return modelo;
	}

	public void setModelo(int modelo) {
		this.modelo = modelo;
	}

	public String getPlaca() {
		return placa;
	}

	public void setPlaca(String placa) {
		this.placa = placa;
	}
	
	
	
	
	

}
