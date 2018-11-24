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
import com.example.isabellaa.localplus.entidade.Funcionario;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class tabela_funcionario extends AppCompatActivity {

    private Button buttonSairFuncionario;
    private ListView lista;
    private SQLiteDatabase conexao;

    private List listar(){
       conexao = bd.getReadableDatabase();
        List funcionarios =  new LinkedList();
        Cursor res = conexao.rawQuery("SELECT * FROM FUNCIONARIO", null);
        if(res.getCount()>0){
            res.moveToFirst();
            do{
                Funcionario f = new Funcionario();
                f.setId(res.getInt(res.getColumnIndexOrThrow("ID")));
                f.setNome(res.getString(res.getColumnIndexOrThrow("NOME")));
                f.setRg(res.getString(res.getColumnIndexOrThrow("RG")));
                f.setCpf(res.getString(res.getColumnIndexOrThrow("CPF ")));
                f.setEndereco(res.getString(res.getColumnIndexOrThrow("ENDERECO")));
                f.setDataDeAdmissao(res.getString(res.getColumnIndexOrThrow("DATADEADMISSAO ")));
                f.setDatadeDemissao(res.getString(res.getColumnIndexOrThrow("DATADEDEMISSAO")));


                funcionarios.add(f);
            }while (res.moveToNext());
        }
        return funcionarios;
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_funcionario);
        buttonSairFuncionario=findViewById(R.id.buttonSalvarFuncionario);
        lista = findViewById(R.id.listaFuncionarios);
        conexaoBD();
        acoes();
    }
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

    private void acoes() {
        lista.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent it = new Intent(tabela_funcionario.this,cadastro_funcionario.class);
                Funcionario funcionario= (Funcionario) adapterView.getItemAtPosition(i);
               // mexer nisso dps  it.putExtra("funcionario",funcionario);
                startActivity(it);

            }
        });

    }

    @Override
    protected void onResume() {
        super.onResume();

        ArrayAdapter<Funcionario> arrayAdapter = new ArrayAdapter<Funcionario>(this,android.R.layout.simple_list_item_1, listar());
        lista.setAdapter(arrayAdapter);
    }


    public void NovoFuncionario(View view){
        Intent it = new Intent(tabela_funcionario.this,cadastro_funcionario.class);
        startActivity(it);
    }

    public void SairFuncionario(View view){

finish();
    }
}
