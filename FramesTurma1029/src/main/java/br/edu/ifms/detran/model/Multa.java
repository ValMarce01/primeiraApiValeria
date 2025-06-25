package br.edu.ifms.detran.model;

import java.io.Serializable;
import java.util.Objects;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
@Entity
public class Multa implements Serializable{

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)	
	private int id;
	private String descricao;
	private String dataMulta;
	private String cidade;
	private String logradouro;
	
	@ManyToOne
	@JoinColumn(name = "carro_id")
	private Carro carro;
	@ManyToOne
	@JoinColumn(name = "infracao_id")
	private Infracao infracao;
	
	public Multa() {
		// TODO Auto-generated constructor stub
	}

	
	public Multa(int id, String descricao, String dataMulta, String cidade, String logradouro, Carro carro,
			Infracao infracao) {
		super();
		this.id = id;
		this.descricao = descricao;
		this.dataMulta = dataMulta;
		this.cidade = cidade;
		this.logradouro = logradouro;
		this.carro = carro;
		this.infracao = infracao;
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

	public String getLogradouro() {
		return logradouro;
	}

	public void setLogradouro(String logradouro) {
		this.logradouro = logradouro;
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


	@Override
	public int hashCode() {
		return Objects.hash(id);
	}

	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		Multa other = (Multa) obj;
		return id == other.id;
	}
	
	
	

}
