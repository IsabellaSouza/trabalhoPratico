package com.example.isabellaa.localplus;

import android.content.Intent;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
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
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class tabela_carro extends AppCompatActivity {
    private Button buttonSairCarro;
    private ListView lista;
    private SQLiteDatabase conexao;
//listando valores

    private List listar(){
        conexao = bd.getReadableDatabase();
        List carros =  new LinkedList();
        Cursor res = conexao.rawQuery("SELECT * FROM CARRO", null);
        if(res.getCount()>0){
            res.moveToFirst();
            do{
                Carro c = new Carro();
                c.setId(res.getInt(res.getColumnIndexOrThrow("ID")));
                c.setPlaca(res.getString(res.getColumnIndexOrThrow("PLACA")));
                c.setNome(res.getString(res.getColumnIndexOrThrow("NOME")));
                c.setMarca(res.getString(res.getColumnIndexOrThrow("MARCA")));
                c.setModelo(res.getString(res.getColumnIndexOrThrow("MODELO")));
                c.setValorDaLocacao(res.getFloat(res.getColumnIndexOrThrow("VALORDALOCACAO")));
                c.setValorDoSeguro(res.getFloat(res.getColumnIndexOrThrow("VALORDOSEGURO")));
                c.setCor(res.getString(res.getColumnIndexOrThrow("COR")));
            //    c.setAtivo((res.getColumnIndexOrThrow("ATIVO")));

                carros.add(c);
            }while (res.moveToNext());
        }
        return carros;
    }
    //estabelecendo conexao

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_carro);
        lista = findViewById(R.id.listaCarros);
        conexaoBD();
        acoes();


    }
    //aqui era pra dar pra clicar na lista e abrir outra para editar...
    private void acoes() {
        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent it = new Intent(tabela_carro.this,editar_carro.class);
                Carro carro= (Carro) adapterView.getItemAtPosition(i);
                it.putExtra("ID", carro.getId());
                it.putExtra("PLACA",carro.getPlaca());
                it.putExtra("NOME", carro.getNome());
                it.putExtra("MARCA", carro.getMarca());
                it.putExtra("MODELO", carro.getModelo());
                it.putExtra("VALORDOSEGURO", carro.getValorDoSeguro());
                it.putExtra("VALORDALOCACAO", carro.getValorDaLocacao());
                it.putExtra("COR", carro.getCor());
                it.putExtra("ATIVO", carro.getAtivo());
                startActivity(it);
            }
        });
    }
//vendo se a conexao esta ok

    private Banco bd;
    private void conexaoBD() {
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


    @Override
    protected void onResume() {
        super.onResume();

        ArrayAdapter<Carro> arrayAdapter = new ArrayAdapter<Carro>(this,android.R.layout.simple_list_item_1, listar());
        lista.setAdapter(arrayAdapter);
    }
//fechando a tela pelo botao Sair
    void SairTabelaCarro(View view){
        finish();
    }

    //Abrindo tela de novo cadastro
    void Novocadastro_carro(View view){
        Intent it = new Intent(tabela_carro.this,cadastro_carro.class);
        startActivity(it);
    }
    //Aqui era pra clicar no botao de editar para editar, mas por fim nem precisou pq tentei fazer de modo que clicasse na lista
    void EditarTabelaCarro(View view){
        Intent it = new Intent(tabela_carro.this,editar_carro.class);
        startActivity(it);

    }
    //remover nao foi implementado, pois
    //muito dos colegas disseram que nao fariam e que dava erro no banco quando tentava apagar
    void RemoverTabelaCarro(View view){
//mostra na tela a mensagem quando clica em remover
        Toast.makeText(this, "Não Implementado pois BUGA o Banco",Toast.LENGTH_LONG).show();;
    }








}
