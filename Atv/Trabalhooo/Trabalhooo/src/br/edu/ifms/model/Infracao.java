package br.edu.ifms.model;



public class Infracao {
	
	private int id;
	private String descricao;
	private int ponto;
	private double valor;	
	
	public Infracao() {
		super();
	}


	public Infracao(int id, String descricao, int ponto, double valor) {
		super();
		this.id = id;
		this.descricao = descricao;
		this.ponto = ponto;
		this.valor = valor;
	}


	public int getId() {
		return id;
	}


	public void setId(int id) {
		this.id = id;
	}


	public String getDescricao() {
		return descricao;
	}


	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}


	public int getPonto() {
		return ponto;
	}


	public void setPonto(int ponto) {
		this.ponto = ponto;
	}


	public double getValor() {
		return valor;
	}


	public void setValor(double valor) {
		this.valor = valor;
	}
	
	
	
	

}
