package br.edu.ifms.model;

public class Multa {
	private int id;
	private String dataMulta;
	private String cidade;
	private Carro carro;
	private Infracao infracao;
	
	public Multa() {
		super();
	}

	
	public Multa(int id, String dataMulta, String cidade, Carro carro, Infracao infracao) {
		super();
		this.id = id;
		this.dataMulta = dataMulta;
		this.cidade = cidade;
		this.carro = carro;
		this.infracao = infracao;
	}


	public String getDataMulta() {
		return dataMulta;
	}

	public void setDataMulta(String dataMulta) {
		this.dataMulta = dataMulta;
	}

	public String getCidade() {
		return cidade;
	}

	public void setCidade(String cidade) {
		this.cidade = cidade;
	}

	public Carro getCarro() {
		return carro;
	}

	public void setCarro(Carro carro) {
		this.carro = carro;
	}

	public Infracao getInfracao() {
		return infracao;
	}

	public void setInfracao(Infracao infracao) {
		this.infracao = infracao;
	}


	public int getId() {
		return id;
	}


	public void setId(int id) {
		this.id = id;
	}
	
	

}
