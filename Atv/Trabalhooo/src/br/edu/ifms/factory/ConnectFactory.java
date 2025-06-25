package br.edu.ifms.factory;

import java.sql.Connection;
import java.sql.DriverManager;

public class ConnectFactory {
	
	private static final String USER = "root";
	private static final String PASSWORD = "";
	private static final String DATABASE_URL = "jdbc:mysql://localhost:3306/turma1029";

	public static Connection createConnectionToMysql() throws Exception {
		Class.forName("com.mysql.jdbc.Driver");
		Connection conn = DriverManager.getConnection(DATABASE_URL, USER, PASSWORD);
		return conn;		
	}
}
