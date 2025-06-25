package br.edu.ifms.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import br.edu.ifms.factory.ConnectFactory;
import br.edu.ifms.model.Carro;

public class CarroDao {

	
	public void save(Carro carro) {
		
		String sql = "insert into tb_carro (nome, marca, cor, modelo, placa) values (?,?,?,?,?)";
		Connection conn = null;
		PreparedStatement pstm = null;
		
		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement)conn.prepareStatement(sql);
			pstm.setString(1, carro.getNome());
			pstm.setString(2, carro.getMarca());
			pstm.setString(3, carro.getCor());
			pstm.setInt(4, carro.getModelo());
			pstm.setString(5, carro.getPlaca());			
			pstm.execute();
			System.out.println("Carro salvo com sucesso!!");
						
		}catch (Exception e) {
			e.printStackTrace();
		}finally {
			try {
				if(pstm!=null)
					pstm.close();
				if(conn!=null)
					conn.close();
				
			}catch (Exception e) {
				// TODO: handle exception
				e.printStackTrace();
			}			
		}		
	}
	
	public void delete(Carro carro) {
		String sql = "delete from tb_carro where idtb_carro=?";
		Connection conn = null;
		PreparedStatement pstm = null;
		
		try {
			//aqui vou remover o carro
			conn = ConnectFactory.createConnectionToMysql();
			pstm = conn.prepareStatement(sql);
			pstm.setInt(1, carro.getId());
			pstm.execute();
			System.out.println("Carro removido com sucesso!!");			
			
		}catch (Exception e) {
			e.printStackTrace();
			// TODO: handle exception
		}finally {
			//aqui devo fechar minha conexões
			try {
				if (pstm!=null)
					pstm.close();
				if (conn!=null)
					conn.close();
			}catch (Exception e) {
				e.printStackTrace();
				// TODO: handle exception
			}
		}
	}
	
	
	// fim do método remover
	//inicio do metodo atualizar
	public void update(Carro carro) {
		String sql = "update tb_carro "
					+ "set nome= ?," //1
					+ "marca = ?," //2
					+ "cor = ?, " //3
					+ "modelo=?," //4
					+ "placa=?" //5
					+ "where idtb_carro = ?"; //6
					
		Connection conn = null;
		PreparedStatement pstm = null;
		
		try {
			//atualizar o carro
			conn = ConnectFactory.createConnectionToMysql();
			pstm = conn.prepareStatement(sql);
			pstm.setString(1, carro.getNome());
			pstm.setString(2, carro.getMarca());
			pstm.setString(3, carro.getCor());
			pstm.setInt(4, carro.getModelo());
			pstm.setString(5, carro.getPlaca());
			pstm.setInt(6, carro.getId()); //pega id do carro que deve ser atualizado
			pstm.execute();
			System.out.println("Carro atualizado com sucesso");
		}catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		}finally {
			try {
				if (pstm!=null) {
					pstm.close();
				}if (conn!=null) {
					conn.close();
				}
			} catch (Exception e) {
				// TODO: handle exception
			}
		}
	}
	
	public List<Carro> buscarTodos(){
		String sql = "select * from tb_carro";
		Connection conn = null;
		PreparedStatement pstm = null;
		ResultSet rset = null;
		List<Carro> carros = new ArrayList<Carro>();
		
		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement)conn.prepareStatement(sql);
			rset = pstm.executeQuery();		
			while(rset.next()) {
				// nome, marca, cor, modelo, placa
				Carro c = new Carro();
				c.setId(rset.getInt("idtb_carro"));
				c.setNome(rset.getString("nome"));
				c.setMarca(rset.getString("marca"));
				c.setCor(rset.getString("cor"));
				c.setModelo(rset.getInt("modelo"));
				c.setPlaca(rset.getString("placa"));
				
				carros.add(c);
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
		return carros;
	}
	
	public Carro buscarPorId(Carro carro) {
		
		String sql = "select * from tb_carro where idtb_carro = ?";
		Connection conn = null;
		PreparedStatement pstm = null;
		ResultSet rset = null;
		Carro c = new Carro();
		
		try {
			conn = ConnectFactory.createConnectionToMysql();
			pstm = (PreparedStatement)conn.prepareStatement(sql);
			pstm.setInt(1, carro.getId());
			rset = pstm.executeQuery();		
			if (rset.next()) {
				// nome, marca, cor, modelo, placa				
				c.setId(rset.getInt("idtb_carro"));
				c.setNome(rset.getString("nome"));
				c.setMarca(rset.getString("marca"));
				c.setCor(rset.getString("cor"));
				c.setModelo(rset.getInt("modelo"));
				c.setPlaca(rset.getString("placa"));				
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
		return c;
		
	}
}
