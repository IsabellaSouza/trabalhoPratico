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

import com.example.isabellaa.localplus.entidade.Cliente;
import com.example.isabellaa.localplus.persistência.Banco;

import java.util.LinkedList;
import java.util.List;

public class tabela_cliente extends AppCompatActivity {
    private Button buttonSairCliente;
    private ListView listacliente;
    private SQLiteDatabase conexao;

    private List listar(){
        conexao = bd.getReadableDatabase();
        List cliente =  new LinkedList();
        Cursor res = conexao.rawQuery("SELECT * FROM pessoa INNER JOIN cliente on pessoa.id = cliente.id", null);
        if(res.getCount()>0){
            res.moveToFirst();
            do{
                Cliente c = new Cliente();
                c.setId(res.getInt(res.getColumnIndexOrThrow("ID")));
                c.setNome(res.getString(res.getColumnIndexOrThrow("Nome")));
                c.setRg(res.getString(res.getColumnIndexOrThrow("RG")));
                c.setCpf(res.getString(res.getColumnIndexOrThrow("CPF")));
                c.setEndereco(res.getString(res.getColumnIndexOrThrow("Endereço")));
                c.setCnh(res.getInt(res.getColumnIndexOrThrow("CNH")));
                c.setNumerodependentes(res.getInt(res.getColumnIndexOrThrow("Numero Dependentes")));

                cliente.add(c);
            }while (res.moveToNext());
        }
        return cliente;
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tabela_cliente);
        buttonSairCliente=findViewById(R.id.buttonSalvarCliente);
        listacliente = findViewById(R.id.listaCliente);
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
        listacliente.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int i, long l) {
                Intent it = new Intent(tabela_cliente.this,cadastro_cliente.class);
                Cliente cliente= (Cliente) adapterView.getItemAtPosition(i);
                it.putExtra("Cliente",cliente);
                startActivity(it);

            }
        });




    }
    @Override
    protected void onResume() {
        super.onResume();

        ArrayAdapter<Cliente> arrayAdapter = new ArrayAdapter<Cliente>(this,android.R.layout.simple_list_item_1, listar());
        listacliente.setAdapter(arrayAdapter);
    }

    void SairTabelaCliente(View view){
        finish();
    }

    void Novocadastro_cliente(View view){
        Intent it = new Intent(tabela_cliente.this,cadastro_cliente.class);
        startActivity(it);
    }



}
