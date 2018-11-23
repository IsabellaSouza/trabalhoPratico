package com.example.isabellaa.localplus;

import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.text.TextUtils;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.Toast;

import com.example.isabellaa.localplus.entidade.Carro;

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
        valorDoSeguro.setText(carro.getPlaca().toString());
        valorDaLocacao.setText(carro.getPlaca().toString());
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





    }



