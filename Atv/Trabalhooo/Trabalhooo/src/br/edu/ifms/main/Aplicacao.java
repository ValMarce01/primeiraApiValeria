package br.edu.ifms.main;

import br.edu.ifms.dao.MultaDao;
import br.edu.ifms.model.Multa;

public class Aplicacao {

	public static void main(String[] args) {
		
		// Insere Multa
		
//		Carro carro = new Carro();
//		carro.setId(2);
//		
//		Infracao infracao = new Infracao();
//		infracao.setId(2);
//		
//		
//		MultaDao dao = new MultaDao();
//		Multa multa = new Multa(1,"13/12/2024","Ladario", carro, infracao);
//		
//		dao.save(multa);
//		
		
//		Remove Multa
//		MultaDao dao = new MultaDao();
//		Multa multa = new Multa();
//		multa.setId(1);
//		
//		dao.delete(multa);
		
		// atualiza multa
//		Carro carro = new Carro();
//		carro.setId(1);
//		
//		Infracao infracao = new Infracao();
//		infracao.setId(1);		
//		
//		MultaDao dao = new MultaDao();
//		Multa multa = new Multa();
//		multa.setId(2);
//		multa.setDataMulta("13/12/2024");
//		multa.setCidade("Corumba");
//		multa.setCarro(carro);
//		multa.setInfracao(infracao);
//		
//		dao.update(multa);
//		
		
		Multa m = new Multa();
		MultaDao md = new MultaDao();	
		m.setId(1);
		m = md.buscarPorId(m);
		
		System.out.println(m.getId());
		System.out.println(m.getDataMulta());
		System.out.println(m.getCidade());
		// carro
		System.out.println(m.getCarro().getId());
		System.out.println(m.getCarro().getNome());
		System.out.println(m.getCarro().getMarca());
		System.out.println(m.getCarro().getModelo());
		System.out.println(m.getCarro().getCor());
		System.out.println(m.getCarro().getPlaca());
		//imfracao
		System.out.println(m.getInfracao().getId());
		System.out.println(m.getInfracao().getDescricao());
		System.out.println(m.getInfracao().getPonto());	
		System.out.println(m.getInfracao().getValor());
	

	}

}