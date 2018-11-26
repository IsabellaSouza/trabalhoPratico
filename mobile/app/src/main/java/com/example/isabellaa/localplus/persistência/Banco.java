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
  String sqlcliente = "CREATE TABLE IF NOT EXISTS CLIENTE(" +"ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +"NOME VARCHAR(7)," +"RG VARCHAR(50),"+ "CPF VARCHAR(50),"+"ENDERECO VARCHAR(50),"+ "CNH INTERGER,"+"NUMERODEPENDENTES INTEGER)";
  sqLiteDatabase.execSQL(sql);
  sqLiteDatabase.execSQL(sqlcliente);

        sqLiteDatabase.execSQL(sql);
        sqLiteDatabase.execSQL(sqlcliente);
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        String sql="ALTER TABLE CARRO ADD PLACA VARCHAR(7);";
        String sqlcliente="ALTER TABLE CLIENTE ADD NOME VARCHAR(7)";
        sqLiteDatabase.execSQL(sql);
        
        sqLiteDatabase.execSQL(sqlcliente);
    }

}
