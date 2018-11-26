package com.example.isabellaa.localplus.persistência;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class Banco extends SQLiteOpenHelper {
    public Banco(Context context){super (context, "BANCODADOS", null, 3);}



    @Override
    public void onCreate(SQLiteDatabase sqLiteDatabase) {
        String sql = "CREATE TABLE IF NOT EXISTS CARRO(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"PLACA VARCHAR(7)," +"NOME VARCHAR(50),"+ "MARCA VARCHAR(50),"+"MODELO VARCHAR(50),"+ "VALORDOSEGURO FLOAT,"+"VALORDALOCACAO FLOAT, "+"COR VARCHAR(20), "+"ATIVO BOOLEAN)";
        sqLiteDatabase.execSQL(sql);
        String sqlTerceiros ="CREATE TABLE IF NOT EXISTS TERCEIROS(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"NOMET VARCHAR(45)," +"RGT VARCHAR(30)," +"ENDERECOT VARCHAR(30)," +"CPFT VARCHAR(30)," +"PLACAV VARCHAR(30)," +"NOMEV VARCHAR(30)," +"MODELOV VARCHAR(30)," +"SEGUROV VARCHAR(30)," +"LOCACAOV VARCHAR(30)," +"CORV VARCHAR(30)," +"LOCADOV VARCHAR(30)," +"MARCAV INTEGER);";
        sqLiteDatabase.execSQL(sqlTerceiros);
        String sqlInserirTerceiroRodrigo = "INSERT INTO TERCEIROS ('ID','NOMET','RGT','ENDERECOT','CPFT','PLACAV','NOMEV','MODELOV','SEGUROV','LOCACAOV','CORV','LOCACAOV','MARCAV') values ('0','Rodrigo','00001','RUA ENDERECO','065789','HSJ-2150','CHEVEET','CHEVEET','8000','1000','PRETA','SIM','VW');";
        sqLiteDatabase.execSQL(sqlInserirTerceiroRodrigo);
        String sqlInserirTerceiroFelipe = "INSERT INTO TERCEIROS ('ID','NOMET','RGT','ENDERECOT','CPFT','PLACAV','NOMEV','MODELOV','SEGUROV','LOCACAOV','CORV','LOCACAOV','MARCAV') values ('1','Felipe','00001','RUA ENDERECO','065789','HSJ-2150','CITROEN C4','CITRON C4','8000','1000','PRETA','SIM','VW');";
        sqLiteDatabase.execSQL(sqlInserirTerceiroFelipe);
        String sqlInserirTerceiroLuiz = "INSERT INTO TERCEIROS ('ID','NOMET','RGT','ENDERECOT','CPFT','PLACAV','NOMEV','MODELOV','SEGUROV','LOCACAOV','CORV','LOCACAOV','MARCAV') values ('2','Luiz','00001','RUA ENDERECO','065789','HSJ-2150','HB20','HB20','8000','1000','PRETA','SIM','VW');";
        sqLiteDatabase.execSQL(sqlInserirTerceiroLuiz);
        String sqlCarro = "CREATE TABLE IF NOT EXISTS CARRO(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"PLACA VARCHAR(7)," +"NOME VARCHAR(50),"+ "MARCA VARCHAR(50),"+"MODELO VARCHAR(50),"+ "VALORDOSEGURO FLOAT,"+"VALORDALOCACAO FLOAT, "+"COR VARCHAR(20), "+"ATIVO BOOLEAN)";
        sqLiteDatabase.execSQL(sqlCarro);
        String sqlcliente = "CREATE TABLE IF NOT EXISTS CLIENTE(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"NOME VARCHAR(7)," +"RG VARCHAR(50),"+ "CPF VARCHAR(50),"+"ENDERECO VARCHAR(50),"+ "CNH INTERGER,"+"NUMERODEPENDENTES INTEGER)";
        sqLiteDatabase.execSQL(sqlcliente);
        String sqllocacao = "CREATE TABLE IF NOT EXISTS LOCACAO(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"DATALOCACAO DATE," +"DATADEVOLUCAO DATE,"+ "QUILOMETRAGEM INT,"+"CPFPESSOA VARCHAR(14),"+ "PLACAVEICULO VARCHAR(8),"+"ATIVOLOCACAO BOOLEAN)";
        sqLiteDatabase.execSQL(sqllocacao);
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        String sql="ALTER TABLE CARRO ADD PLACA VARCHAR(7);";
        String sqlcliente="ALTER TABLE CLIENTE ADD NOME VARCHAR(7)";
        sqLiteDatabase.execSQL(sql);
        sqLiteDatabase.execSQL(sqlcliente);
    }
}
