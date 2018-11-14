package unigran.br.trabalhomobile.Banco;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

//import com.example.andre.entidade.Pessoa;
import unigran.br.trabalhomobile.entidade.entidade_carro;

import java.util.LinkedList;
import java.util.List;

public class DAO extends SQLiteOpenHelper{
    private SQLiteDatabase db;
    public DAO(Context context) {
        super(context, "bdNovo", null, 1);
    }



    //@Override
   // public void onCreate(SQLiteDatabase db) {
       // String sql = "CREATE TABLE IF NOT EXISTS PESSOA(" +
              //  "ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +
              //  "NOME VARCHAR(45), TELEFONE VARCHAR(15));";

      //  db.execSQL(sql);
   // }


    @Override
    public void onCreate(SQLiteDatabase db) {
        String sql = "CREATE TABLE IF NOT EXISTS ENTIDADE_CARRO(" +
                "ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +
                "NOME VARCHAR(45), PLACA VARCHAR(7), MARCA VARCHAR(45), MODELO VARCHAR(20), VALORDOSEGURO FLOAT, " +
                "VALORDALOCACAO FLOAT, COR VARCHAR(20), ATIVO BOOLEAN);";

        db.execSQL(sql);
    }



    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

    }
    public void abreConexao(){
        db=getReadableDatabase();
    }
    public void fechaConexao(){
     db.close();
    }




    //public List findtodos(){
       // db=getReadableDatabase();
       // List pessoas = new LinkedList();
       // Cursor res =
               // db.rawQuery("SELECT * FROM PESSOA",null);
       // if(res.getCount()>0){
           // res.moveToFirst();
           // do{
               // Pessoa p = new Pessoa();
              //  p.setNome(res.getString(res.getColumnIndexOrThrow("NOME")));
               // p.setTelefone(res.getString(res.getColumnIndexOrThrow("TELEFONE")));
              //  pessoas.add(p);
           // }while (res.moveToNext());
       // }
       // db.close();
       // return pessoas;
   // }



    public List findtodos(){
        db=getReadableDatabase();
            List entidade_carro = new LinkedList();
            Cursor res =
                    db.rawQuery("SELECT * FROM ENTIDADE_CARRO",null);
            if(res.getCount()>0){
                res.moveToFirst();
                do{
                    entidade_carro ec = new entidade_carro();
                    ec.setNome(res.getString(res.getColumnIndexOrThrow("NOME")));
                    ec.setPlaca(res.getString(res.getColumnIndexOrThrow("PLACA")));
                    ec.setMarca(res.getString(res.getColumnIndexOrThrow("MARCA")));
                    ec.setModelo(res.getString(res.getColumnIndexOrThrow("MODELO")));
                    ec.setValorDoSeguro(Float.parseFloat(res.getString(res.getColumnIndexOrThrow("MODELO"))));
                    ec.setValorDaLocacao(Float.parseFloat(res.getString(res.getColumnIndexOrThrow("MODELO"))));
                    ec.setAtivo(res.getInt(res.getColumnIndexOrThrow("ATIVO")));

                    entidade_carro.add(ec);
                }while (res.moveToNext());
            }
            db.close();
            return entidade_carro;


    }










   // public void inserir(Pessoa pessoa){
      //  ContentValues values = new ContentValues();
      //  values.put("NOME",pessoa.getNome());
       // values.put("TELEFONE",pessoa.getTelefone());
       // db=getWritableDatabase();
      //  db.insertOrThrow("PESSOA",null,values);
      //  db.close();
 //   }

    public void inserir(Pessoa pessoa){
        ContentValues values = new ContentValues();
        values.put("NOME",pessoa.getNome());
        values.put("TELEFONE",pessoa.getTelefone());
        db=getWritableDatabase();
        db.insertOrThrow("PESSOA",null,values);
        db.close();
    }








   // public void update(Pessoa pessoa){
       // ContentValues values = new ContentValues();
      //  values.put("NOME",pessoa.getNome());
      //  values.put("TELEFONE",pessoa.getTelefone());
       // db=getWritableDatabase();
       // db.update("PESSOA",values,"id=?",new String[]{pessoa.getId()+""});
     //   db.close();
   // }
   // public void delete(Pessoa pessoa){
     //   db=getWritableDatabase();
     //   db.delete("PESSOA","id=?",new String[]{pessoa.getId()+""});
     //   db.close();
    }
}
