package br.edu.ifms.detran.model;

import java.util.Objects;
import java.io.Serializable;

@Entity

public class Carro implements Serializable {
	
	private static final long serialVersionUID;
	
	@Id
	@GeneratedValue(Strategy=GenerationType.AUTO)
	private int id;
	private String marca;
	private String modelo;
	private String nome;
	private String placa;
	private String cor;
	
	public Carro() {
		
	}

	public Carro (int id, String marca, String modelo, String nome, String placa, String cor) {
		super();
		this.id = id;
		this.marca = marca;
		this.modelo = modelo;
		this.nome = nome;
		this.placa = placa;
		this.cor = cor;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getMarca() {
		return marca;
	}

	public void setMarca(String marca) {
		this.marca = marca;
	}

	public String getModelo() {
		return modelo;
	}

	public void setModelo(String modelo) {
		this.modelo = modelo;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getPlaca() {
		return placa;
	}

	public void setPlaca(String placa) {
		this.placa = placa;
	}

	public String getCor() {
		return cor;
	}

	public void setCor(String cor) {
		this.cor = cor;
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
		Carro other = (Carro) obj;
		return id == other.id;
	}
	
	
	
}
