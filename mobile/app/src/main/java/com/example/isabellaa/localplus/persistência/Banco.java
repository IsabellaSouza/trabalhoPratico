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



        sqLiteDatabase.execSQL(sql);
    }

    @Override
    public void onUpgrade(SQLiteDatabase sqLiteDatabase, int i, int i1) {
        String sql="ALTER TABLE CARRO ADD PLACA VARCHAR(7);";

        sqLiteDatabase.execSQL(sql);

    }
}
