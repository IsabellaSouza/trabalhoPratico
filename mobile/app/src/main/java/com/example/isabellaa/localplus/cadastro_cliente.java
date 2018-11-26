package com.example.isabellaa.localplus;

import android.content.ContentValues;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;
import com.example.isabellaa.localplus.entidade.Cliente;
import com.example.isabellaa.localplus.persistência.Banco;

public class cadastro_cliente extends AppCompatActivity {


    private Cliente cliente;
    private EditText nome;
    private EditText rg;
    private EditText cpf;
    private EditText endereco;
    private EditText cnh;
    private EditText numerodependentes;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_cliente);
        nome = findViewById(R.id.editTextnomecliente);
        rg= findViewById(R.id.editTextrgcliente);
        cpf = findViewById(R.id.editTextcpfcliente);
        endereco = findViewById(R.id.editTextenderecocliente);
        cnh = findViewById(R.id.editTextcnhcliente);
        numerodependentes = findViewById(R.id.editTextnumeroDependentescliente);

        cliente = (Cliente) getIntent().getSerializableExtra("cliente");
        if(cliente!=null){
            nome.setText(cliente.getNome());
            rg.setText(cliente.getRg());
            cpf.setText(cliente.getCpf());
            endereco.setText(cliente.getEndereco());
            cnh.setText(cliente.getCnh()+"");
            numerodependentes.setText(cliente.getNumerodependentes()+"");
        }
    }
    public void buttonSalvarCliente(View view){
        if (valida()){
            if (cliente == null) cliente = new Cliente();
            cliente.setNome(nome.getText().toString());
            cliente.setRg(rg.getText().toString());
            cliente.setCpf(cpf.getText().toString());
            cliente.setEndereco(endereco.getText().toString());
            cliente.setCnh(Integer.parseInt(cnh.getText().toString()));
            cliente.setNumerodependentes(Integer.parseInt(numerodependentes.getText().toString()));
            inserir();
            finish();
        }}

    private boolean valida() {
        if(TextUtils.isEmpty(nome.getText())){
            Toast.makeText(this,"Nome é Necesario",Toast.LENGTH_LONG).show();
            nome.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(rg.getText())){
            Toast.makeText(this,"RG é Necesario",Toast.LENGTH_LONG).show();
            rg.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cpf.getText())){
            Toast.makeText(this,"CPF é Necesario",Toast.LENGTH_LONG).show();
            cpf.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(endereco.getText())){
            Toast.makeText(this,"Endereço é Necesario",Toast.LENGTH_LONG).show();
            endereco.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cnh.getText())){
            Toast.makeText(this,"CPF é Necessario",Toast.LENGTH_LONG).show();
            cnh.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(numerodependentes.getText())){
            Toast.makeText(this,"Numero de Dependentes é Necesario",Toast.LENGTH_LONG).show();
            numerodependentes.requestFocus();
            return false;
        }

        return true;
    }


    private SQLiteDatabase conexao;
    private Banco bd;
    private void inserir(){
        bd = new Banco(this);

        String sql= "INSERT INTO CLIENTE(NOME,RG,CPF,ENDERECO,CNH,NUEMRODEPENDETES('"+cliente.getNome()+"'," +
                "'"+cliente.getRg()+"',"+cliente.getCpf()+"',"+cliente.getEndereco()+"',"+cliente.getCnh()+"',"+cliente.getNumerodependentes();
        try {
            conexao = bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("NOME",cliente.getNome());
            values.put("RG",cliente.getRg());
            values.put("CPF",cliente.getCpf());
            values.put("ENDERECO",cliente.getEndereco());
            values.put("CNH",cliente.getCnh());
            values.put("NUMERODEPENDENTES",cliente.getNumerodependentes());

            if(cliente.getId()<=0)
                conexao.insertOrThrow("CLIENTE",null,values);
            else
                conexao.update("CLIENTE",values,"ID=?",new String[]{cliente.getId()+""});
            conexao.close();
            Toast.makeText(this, "Sucesso",Toast.LENGTH_LONG).show();
        }catch (SQLException ex){
            Toast.makeText(this, "Erro na inserção!", Toast.LENGTH_SHORT).show();
        }
    }

    public void Cancelar(View view){
        finish();
    }


}



