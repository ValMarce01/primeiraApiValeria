package br.edu.ifms.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import br.edu.ifms.factory.ConnectFactory;
import br.edu.ifms.model.Carro;
import br.edu.ifms.model.Infracao;
import br.edu.ifms.model.Multa;

public class MultaDao {

	public void save(Multa multa) {

		String sql = "insert into tb_multa (dataMulta,cidade, tb_carro_idtb_carro, tb_infracao_idtb_infracao ) values (?,?,?,?)";
		Connection conn = null;
		PreparedStatement pstm = null;

		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement) conn.prepareStatement(sql);
			pstm.setString(1, multa.getDataMulta());
			pstm.setString(2, multa.getCidade());
			pstm.setInt(3, multa.getCarro().getId());
			pstm.setInt(4, multa.getInfracao().getId());
			pstm.execute();
			System.out.println("Multa salva com sucesso!!");

		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try {
				if (pstm != null)
					pstm.close();
				if (conn != null)
					conn.close();

			} catch (Exception e) {
				// TODO: handle exception
				e.printStackTrace();
			}
		}
	}

	public void delete(Multa multa) {
		String sql = "delete from tb_multa where idtb_multa=?";
		Connection conn = null;
		PreparedStatement pstm = null;

		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = conn.prepareStatement(sql);
			pstm.setInt(1, multa.getId());
			pstm.execute();
			System.out.println("Multa removida com sucesso!!");

		} catch (Exception e) {
			e.printStackTrace();
			// TODO: handle exception
		} finally {
			// aqui devo fechar minha conexões
			try {
				if (pstm != null)
					pstm.close();
				if (conn != null)
					conn.close();
			} catch (Exception e) {
				e.printStackTrace();
				// TODO: handle exception
			}
		}
	}

	public void update(Multa multa) {
		String sql = "update tb_multa set dataMulta=?, cidade=?, "
				+ "tb_carro_idtb_carro=?, tb_infracao_idtb_infracao=? " + "where idtb_multa =?";

		Connection conn = null;
		PreparedStatement pstm = null;

		try {
			// atualizar o carro
			conn = ConnectFactory.createConnectionToMysql();
			pstm = conn.prepareStatement(sql);
			pstm.setString(1, multa.getDataMulta());
			pstm.setString(2, multa.getCidade());
			pstm.setInt(3, multa.getCarro().getId());
			pstm.setInt(4, multa.getInfracao().getId());
			pstm.setInt(5, multa.getId());
			pstm.execute();
			System.out.println("Multa atualizada com sucesso");
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		} finally {
			try {
				if (pstm != null) {
					pstm.close();
				}
				if (conn != null) {
					conn.close();
				}
			} catch (Exception e) {
				// TODO: handle exception
			}
		}
	}
	
	public List<Multa> buscarTodos(){
		String sql = "select * from tb_multa";
		Connection conn = null;
		PreparedStatement pstm = null;
		ResultSet rset = null;
		List<Multa> multas = new ArrayList<Multa>();
		
		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement)conn.prepareStatement(sql);
			rset = pstm.executeQuery();		
			while(rset.next()) {
				Multa m = new Multa();
				m.setId(rset.getInt("idtb_multa"));
				m.setDataMulta(rset.getString("dataMulta"));
				m.setCidade(rset.getString("cidade"));
				
				CarroDao cd = new CarroDao();
				Carro car = new Carro();
				car.setId(rset.getInt("tb_carro_idtb_carro"));
				car = cd.buscarPorId(car);
				m.setCarro(car);
				
				InfracaoDao id = new InfracaoDao();
				Infracao i = new Infracao();
				i.setId(rset.getInt("tb_infracao_idtb_infracao"));
				i = id.buscarPorId(i);
				m.setInfracao(i);
				
				multas.add(m);
			}
			
						
		}catch (Exception e) {
			e.printStackTrace();
		}finally {
			try {
				if(rset!=null)
					rset.close();
				if(pstm!=null)
					pstm.close();
				if(conn!=null)
					conn.close();
				
			}catch (Exception e) {
				// TODO: handle exception
				e.printStackTrace();
			}			
		}	
		return multas;
	}
       public Multa buscarPorId(Multa multa) {
		
		String sql = "select * from tb_multa where idtb_multa = ?";
		Connection conn = null;
		PreparedStatement pstm = null;
		ResultSet rset = null;
		Multa m = new Multa();
		
		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement)conn.prepareStatement(sql);
			pstm.setInt(1, multa.getId());
			rset = pstm.executeQuery();		
			if (rset.next()) {			
				m.setId(rset.getInt("idtb_multa"));
				m.setDataMulta(rset.getString("dataMulta"));
				m.setCidade(rset.getString("cidade"));
				
				CarroDao cd = new CarroDao();
				Carro car = new Carro();
				car.setId(rset.getInt("tb_carro_idtb_carro"));
				car = cd.buscarPorId(car);
				m.setCarro(car);
				
				InfracaoDao id = new InfracaoDao();
				Infracao i = new Infracao();
				i.setId(rset.getInt("tb_infracao_idtb_infracao"));
				i = id.buscarPorId(i);
				m.setInfracao(i);
			}
								
		}catch (Exception e) {
			e.printStackTrace();
		}finally {
			try {
				if(rset!=null)
					rset.close();
				if(pstm!=null)
					pstm.close();
				if(conn!=null)
					conn.close();
				
			}catch (Exception e) {
				// TODO: handle exception
				e.printStackTrace();
			}			
		}	
		return m;
		
	}

	

}
