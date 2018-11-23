package com.example.isabellaa.localplus;

import android.content.ContentValues;
import android.content.Intent;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Carro;
import com.example.isabellaa.localplus.persistência.Banco;

public class cadastro_carro extends AppCompatActivity {

    private Carro carro;
    private EditText placa;
    private EditText nome;
    private EditText marca;
    private EditText modelo;
    private EditText valorDoSeguro;
    private EditText valorDaLocacao;
    private EditText cor;
    private Switch ativo;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastro_carro);
        placa = findViewById(R.id.editTextPlacaCarro);
        nome = findViewById(R.id.editTextNomeCarro);
        marca = findViewById(R.id.editTextMarcaCarro);
        modelo = findViewById(R.id.editTextModeloCarro);
        valorDoSeguro = findViewById(R.id.editTextValorDoSeguroCarro);
        valorDaLocacao = findViewById(R.id.editTextValorDaLocacaoCarro);
        cor = findViewById(R.id.editTextCor);
        ativo = findViewById(R.id.switchAtivo);

        carro = (Carro) getIntent().getSerializableExtra("carro");
        if(carro!=null){
        placa.setText(carro.getPlaca());
        nome.setText(carro.getNome());
        marca.setText(carro.getMarca());
        modelo.setText(carro.getModelo());
       //errado  valorDoSeguro.setText(carro.getValorDoSeguro());
       //errado  valorDaLocacao.setText(carro.getValorDaLocacao().toString());
        cor.setText(carro.getCor());
      //Não sei pegar o Ativo ativo.setText(carro.());

        }
        }

    private boolean valida() {
        if(TextUtils.isEmpty(placa.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            placa.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(nome.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            nome.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(marca.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            marca.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(modelo.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            modelo.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(valorDoSeguro.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            valorDoSeguro.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(valorDaLocacao.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            valorDaLocacao.requestFocus();
            return false;
        }
        if(TextUtils.isEmpty(cor.getText())){
            Toast.makeText(this,"Entre com o nome",Toast.LENGTH_LONG).show();
            cor.requestFocus();
            return false;
        }
//falta fazer do ativo que eu nao sei
        return true;
    }
    void Salvar(View view){

        Carro carro=new Carro();
        carro.setNome(nome.getText().toString());
        carro.setPlaca(placa.getText().toString());
        carro.setMarca(marca.getText().toString());
        carro.setModelo(modelo.getText().toString());
        carro.setValorDoSeguro(Float.parseFloat(valorDoSeguro.getText().toString()));
        carro.setValorDaLocacao(Float.parseFloat(valorDaLocacao.getText().toString()));
        carro.setCor(cor.getText().toString());
        carro.setAtivo(ativo.isChecked());

    }

    void Cancelar(View view){
        finish();
    }
private SQLiteDatabase conexao;
    private Banco bd;
    private void inserir(){
        bd=new Banco(this);

        String sql= "INSERT INTO CARRO(PLACA,NOME,MARCA,MODELO, )VALUES('"+carro.getPlaca()+"','"+carro.getNome()+"','"+carro.getMarca()+"','"+carro.getModelo()+"',' )";
        try {
            conexao=bd.getWritableDatabase();
            ContentValues values= new ContentValues();
            values.put("PLACA",carro.getPlaca());
            values.put("NOME",carro.getNome());
            values.put("MARCA",carro.getMarca());
            values.put("MARCA",carro.getModelo());
            values.put("MARCA",carro.getMarca());
            if(carro.getId()<=0)
                conexao.insertOrThrow("PESSOA",null,values);
            else
                conexao.update("PESSOA",values,"ID=?",new String[]{carro.getId()+""});
            conexao.close();
            Toast.makeText(this, "Sucesso",Toast.LENGTH_LONG).show();
        }catch ( SQLException ex){
            Toast.makeText(this, "erro na inserção",Toast.LENGTH_LONG).show();
        }

    }




    }



