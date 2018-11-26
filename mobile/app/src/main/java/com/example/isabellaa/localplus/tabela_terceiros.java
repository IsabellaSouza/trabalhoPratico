package com.example.isabellaa.localplus;

import android.app.AlertDialog;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Terceiros;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class tabela_terceiros extends AppCompatActivity {
    private ListView listaTerceiro;
    private SQLiteDatabase conexao;
    private Banco bd;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_listar_terceiros);
        listaTerceiro=findViewById(R.id.listarTerceiros);
        conexaoBD();
    }
    private List listarTerceiros(){
        conexao=bd.getReadableDatabase();
        List ListTerc = new LinkedList();
        Cursor res= conexao.rawQuery("SELECT * FROM TERCEIROS", null);

        if(res.getCount()>0){
            res.moveToFirst();
            do{
                Terceiros terceiros = new Terceiros();
                terceiros.setId(res.getInt(res.getColumnIndexOrThrow("ID")));
                terceiros.setNomeT(res.getString(res.getColumnIndexOrThrow("NOMET")));
                terceiros.setEnderecoT(res.getString(res.getColumnIndexOrThrow("ENDERECOT")));
                terceiros.setCpfT(res.getString(res.getColumnIndexOrThrow("CPFT")));
                terceiros.setRgT(res.getString(res.getColumnIndexOrThrow("RGT")));
                terceiros.setPlacaV(res.getString(res.getColumnIndexOrThrow("PLACAV")));
                terceiros.setNomeV(res.getString(res.getColumnIndexOrThrow("NOMEV")));
                terceiros.setModeloV(res.getString(res.getColumnIndexOrThrow("MODELOV")));
                terceiros.setSeguroV(res.getString(res.getColumnIndexOrThrow("SEGUROV")));
                terceiros.setLocacaoV(res.getString(res.getColumnIndexOrThrow("LOCACAOV")));
                terceiros.setCorV(res.getString(res.getColumnIndexOrThrow("CORV")));
                terceiros.setLocadoV(res.getString(res.getColumnIndexOrThrow("LOCADOV")));
                terceiros.setMarcaV(res.getString(res.getColumnIndexOrThrow("MARCAV")));
                ListTerc.add(terceiros);
            }while (res.moveToNext());
        }
        return  ListTerc;
    }
    @Override
    protected void onResume() {
        super.onResume();
        ArrayAdapter<Terceiros> arrayAdapter = new ArrayAdapter<Terceiros>(tabela_terceiros.this,android.R.layout.simple_expandable_list_item_1, listarTerceiros());
        listaTerceiro.setAdapter(arrayAdapter);
    }
    private void conexaoBD() {
        try {
            bd= new Banco(this);

        }catch (SQLException ex){
            AlertDialog.Builder msg= new AlertDialog.Builder(this);
        }
    }


}


