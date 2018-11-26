package com.example.isabellaa.localplus;

import android.content.Intent;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Carro;
import com.example.isabellaa.localplus.entidade.Locacao;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class tabela_locacao extends AppCompatActivity {
    private Button buttonSairLocacao;
    private ListView listloc;
    private SQLiteDatabase conexion;
    private SQLiteOpenHelper bd;

    private List listarlocacao(){
        conexion = bd.getReadableDatabase();
        List locacoes =  new LinkedList();
        Cursor resloc = conexion.rawQuery("SELECT * FROM LOCACAO", null);
        if(resloc.getCount()>0){
            resloc.moveToFirst();
            do{
                Locacao l = new Locacao();
                l.setId(resloc.getInt(resloc.getColumnIndexOrThrow("ID")));
                l.setdatalocacao(resloc.getString(resloc.getColumnIndexOrThrow("DATALOCACAO")));
                l.setdatadevolucao(resloc.getString(resloc.getColumnIndexOrThrow("DATADEVOLUCAO")));
                l.setQuilometragem(resloc.getInt(resloc.getColumnIndexOrThrow("QUILOMETRAGEM")));
                l.setcpfpessoa(resloc.getString(resloc.getColumnIndexOrThrow("CPFPESSOA")));
                l.setplacaveiculo(resloc.getString(resloc.getColumnIndexOrThrow("PLACAVEICULO")));
                //l.setativolocacao(resloc.getWantsAllOnMoveCalls(resloc.getColumnIndexOrThrow("ATIVOLOCACAO")));

                locacoes.add(l);
            }while (resloc.moveToNext());
        }
        return locacoes;
    }
    
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_locacao);
        buttonSairLocacao=findViewById(R.id.buttonSalvarLocacao);
        conexionBD();


    }

    private void conexionBD() {
        try {
            bd = new Banco(this);
            Toast.makeText(this, "Conexão Ok!", Toast.LENGTH_SHORT).show();
        }catch (SQLException e){
            AlertDialog.Builder msg = new AlertDialog.Builder(this);
            msg.setTitle("Erro");
            msg.setMessage("Erro no banco");
            msg.setNegativeButton("Ok",null);
            msg.show();
        }
    }

    private void acoes() {
        listloc.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent it = new Intent(tabela_locacao.this,locacao.class);
                Locacao locs = (Locacao) adapterView.getItemAtPosition(i);
                it.putExtra("locs",locs);
                startActivity(it);
                /*Bundle bundle = new Bundle();
                bundle.putSerializable("carro",carro);
                it.putExtras(bundle);*/
                // it.putExtras("carro", carro);
            }
        });

    }

    @Override
    protected void onResume() {
        super.onResume();

        ArrayAdapter<Carro> arrayAdapter = new ArrayAdapter<Carro>(this,android.R.layout.simple_list_item_1, listarlocacao());
        listloc.setAdapter(arrayAdapter);
    }

    void buttonSairTabelaLocacao(View view){
        finish();
    }

    void NovoLocacao(View view){
        Intent it = new Intent(tabela_locacao.this,locacao.class);
        startActivity(it);
    }

    void EditarLocacao(View view){

    }

    void RemoverLocacao(View view){

    }
}
